<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/symfony/http-foundation/IpUtils.php */
class __TwigTemplate_23332b132af0ec8295b06dca3124ae0e517dc7d2a4daa825f2d059af4827dc1d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/IpUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/IpUtils.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation;

/**
 * Http utility functions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IpUtils
{
    private static \$checkedIps = [];

    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Checks if an IPv4 or IPv6 address is contained in the list of given IPs or subnets.
     *
     * @param string       \$requestIp IP to check
     * @param string|array \$ips       List of IPs or subnets (can be a string if only a single one)
     *
     * @return bool Whether the IP is valid
     */
    public static function checkIp(\$requestIp, \$ips)
    {
        if (!\\is_array(\$ips)) {
            \$ips = [\$ips];
        }

        \$method = substr_count(\$requestIp, ':') > 1 ? 'checkIp6' : 'checkIp4';

        foreach (\$ips as \$ip) {
            if (self::\$method(\$requestIp, \$ip)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Compares two IPv4 addresses.
     * In case a subnet is given, it checks if it contains the request IP.
     *
     * @param string \$requestIp IPv4 address to check
     * @param string \$ip        IPv4 address or subnet in CIDR notation
     *
     * @return bool Whether the request IP matches the IP, or whether the request IP is within the CIDR subnet
     */
    public static function checkIp4(\$requestIp, \$ip)
    {
        \$cacheKey = \$requestIp.'-'.\$ip;
        if (isset(self::\$checkedIps[\$cacheKey])) {
            return self::\$checkedIps[\$cacheKey];
        }

        if (!filter_var(\$requestIp, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            return self::\$checkedIps[\$cacheKey] = false;
        }

        if (false !== strpos(\$ip, '/')) {
            list(\$address, \$netmask) = explode('/', \$ip, 2);

            if ('0' === \$netmask) {
                return self::\$checkedIps[\$cacheKey] = filter_var(\$address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
            }

            if (\$netmask < 0 || \$netmask > 32) {
                return self::\$checkedIps[\$cacheKey] = false;
            }
        } else {
            \$address = \$ip;
            \$netmask = 32;
        }

        if (false === ip2long(\$address)) {
            return self::\$checkedIps[\$cacheKey] = false;
        }

        return self::\$checkedIps[\$cacheKey] = 0 === substr_compare(sprintf('%032b', ip2long(\$requestIp)), sprintf('%032b', ip2long(\$address)), 0, \$netmask);
    }

    /**
     * Compares two IPv6 addresses.
     * In case a subnet is given, it checks if it contains the request IP.
     *
     * @author David Soria Parra <dsp at php dot net>
     *
     * @see https://github.com/dsp/v6tools
     *
     * @param string \$requestIp IPv6 address to check
     * @param string \$ip        IPv6 address or subnet in CIDR notation
     *
     * @return bool Whether the IP is valid
     *
     * @throws \\RuntimeException When IPV6 support is not enabled
     */
    public static function checkIp6(\$requestIp, \$ip)
    {
        \$cacheKey = \$requestIp.'-'.\$ip;
        if (isset(self::\$checkedIps[\$cacheKey])) {
            return self::\$checkedIps[\$cacheKey];
        }

        if (!((\\extension_loaded('sockets') && \\defined('AF_INET6')) || @inet_pton('::1'))) {
            throw new \\RuntimeException('Unable to check Ipv6. Check that PHP was not compiled with option \"disable-ipv6\".');
        }

        if (false !== strpos(\$ip, '/')) {
            list(\$address, \$netmask) = explode('/', \$ip, 2);

            if ('0' === \$netmask) {
                return (bool) unpack('n*', @inet_pton(\$address));
            }

            if (\$netmask < 1 || \$netmask > 128) {
                return self::\$checkedIps[\$cacheKey] = false;
            }
        } else {
            \$address = \$ip;
            \$netmask = 128;
        }

        \$bytesAddr = unpack('n*', @inet_pton(\$address));
        \$bytesTest = unpack('n*', @inet_pton(\$requestIp));

        if (!\$bytesAddr || !\$bytesTest) {
            return self::\$checkedIps[\$cacheKey] = false;
        }

        for (\$i = 1, \$ceil = ceil(\$netmask / 16); \$i <= \$ceil; ++\$i) {
            \$left = \$netmask - 16 * (\$i - 1);
            \$left = (\$left <= 16) ? \$left : 16;
            \$mask = ~(0xffff >> \$left) & 0xffff;
            if ((\$bytesAddr[\$i] & \$mask) != (\$bytesTest[\$i] & \$mask)) {
                return self::\$checkedIps[\$cacheKey] = false;
            }
        }

        return self::\$checkedIps[\$cacheKey] = true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/IpUtils.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation;

/**
 * Http utility functions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IpUtils
{
    private static \$checkedIps = [];

    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Checks if an IPv4 or IPv6 address is contained in the list of given IPs or subnets.
     *
     * @param string       \$requestIp IP to check
     * @param string|array \$ips       List of IPs or subnets (can be a string if only a single one)
     *
     * @return bool Whether the IP is valid
     */
    public static function checkIp(\$requestIp, \$ips)
    {
        if (!\\is_array(\$ips)) {
            \$ips = [\$ips];
        }

        \$method = substr_count(\$requestIp, ':') > 1 ? 'checkIp6' : 'checkIp4';

        foreach (\$ips as \$ip) {
            if (self::\$method(\$requestIp, \$ip)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Compares two IPv4 addresses.
     * In case a subnet is given, it checks if it contains the request IP.
     *
     * @param string \$requestIp IPv4 address to check
     * @param string \$ip        IPv4 address or subnet in CIDR notation
     *
     * @return bool Whether the request IP matches the IP, or whether the request IP is within the CIDR subnet
     */
    public static function checkIp4(\$requestIp, \$ip)
    {
        \$cacheKey = \$requestIp.'-'.\$ip;
        if (isset(self::\$checkedIps[\$cacheKey])) {
            return self::\$checkedIps[\$cacheKey];
        }

        if (!filter_var(\$requestIp, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            return self::\$checkedIps[\$cacheKey] = false;
        }

        if (false !== strpos(\$ip, '/')) {
            list(\$address, \$netmask) = explode('/', \$ip, 2);

            if ('0' === \$netmask) {
                return self::\$checkedIps[\$cacheKey] = filter_var(\$address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
            }

            if (\$netmask < 0 || \$netmask > 32) {
                return self::\$checkedIps[\$cacheKey] = false;
            }
        } else {
            \$address = \$ip;
            \$netmask = 32;
        }

        if (false === ip2long(\$address)) {
            return self::\$checkedIps[\$cacheKey] = false;
        }

        return self::\$checkedIps[\$cacheKey] = 0 === substr_compare(sprintf('%032b', ip2long(\$requestIp)), sprintf('%032b', ip2long(\$address)), 0, \$netmask);
    }

    /**
     * Compares two IPv6 addresses.
     * In case a subnet is given, it checks if it contains the request IP.
     *
     * @author David Soria Parra <dsp at php dot net>
     *
     * @see https://github.com/dsp/v6tools
     *
     * @param string \$requestIp IPv6 address to check
     * @param string \$ip        IPv6 address or subnet in CIDR notation
     *
     * @return bool Whether the IP is valid
     *
     * @throws \\RuntimeException When IPV6 support is not enabled
     */
    public static function checkIp6(\$requestIp, \$ip)
    {
        \$cacheKey = \$requestIp.'-'.\$ip;
        if (isset(self::\$checkedIps[\$cacheKey])) {
            return self::\$checkedIps[\$cacheKey];
        }

        if (!((\\extension_loaded('sockets') && \\defined('AF_INET6')) || @inet_pton('::1'))) {
            throw new \\RuntimeException('Unable to check Ipv6. Check that PHP was not compiled with option \"disable-ipv6\".');
        }

        if (false !== strpos(\$ip, '/')) {
            list(\$address, \$netmask) = explode('/', \$ip, 2);

            if ('0' === \$netmask) {
                return (bool) unpack('n*', @inet_pton(\$address));
            }

            if (\$netmask < 1 || \$netmask > 128) {
                return self::\$checkedIps[\$cacheKey] = false;
            }
        } else {
            \$address = \$ip;
            \$netmask = 128;
        }

        \$bytesAddr = unpack('n*', @inet_pton(\$address));
        \$bytesTest = unpack('n*', @inet_pton(\$requestIp));

        if (!\$bytesAddr || !\$bytesTest) {
            return self::\$checkedIps[\$cacheKey] = false;
        }

        for (\$i = 1, \$ceil = ceil(\$netmask / 16); \$i <= \$ceil; ++\$i) {
            \$left = \$netmask - 16 * (\$i - 1);
            \$left = (\$left <= 16) ? \$left : 16;
            \$mask = ~(0xffff >> \$left) & 0xffff;
            if ((\$bytesAddr[\$i] & \$mask) != (\$bytesTest[\$i] & \$mask)) {
                return self::\$checkedIps[\$cacheKey] = false;
            }
        }

        return self::\$checkedIps[\$cacheKey] = true;
    }
}
", "vendor/symfony/http-foundation/IpUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/IpUtils.php");
    }
}
