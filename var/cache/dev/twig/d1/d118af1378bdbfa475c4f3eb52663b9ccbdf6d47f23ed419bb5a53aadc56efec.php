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

/* vendor/symfony/phpunit-bridge/DnsMock.php */
class __TwigTemplate_71d7dbfa17061ed9c1e9942b47a5c538a0b8e7d3a6b953151feab42a61bc812d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/DnsMock.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/DnsMock.php"));

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

namespace Symfony\\Bridge\\PhpUnit;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DnsMock
{
    private static \$hosts = array();
    private static \$dnsTypes = array(
        'A' => DNS_A,
        'MX' => DNS_MX,
        'NS' => DNS_NS,
        'SOA' => DNS_SOA,
        'PTR' => DNS_PTR,
        'CNAME' => DNS_CNAME,
        'AAAA' => DNS_AAAA,
        'A6' => DNS_A6,
        'SRV' => DNS_SRV,
        'NAPTR' => DNS_NAPTR,
        'TXT' => DNS_TXT,
        'HINFO' => DNS_HINFO,
    );

    /**
     * Configures the mock values for DNS queries.
     *
     * @param array \$hosts Mocked hosts as keys, arrays of DNS records as returned by dns_get_record() as values
     */
    public static function withMockedHosts(array \$hosts)
    {
        self::\$hosts = \$hosts;
    }

    public static function checkdnsrr(\$hostname, \$type = 'MX')
    {
        if (!self::\$hosts) {
            return \\checkdnsrr(\$hostname, \$type);
        }
        if (isset(self::\$hosts[\$hostname])) {
            \$type = strtoupper(\$type);

            foreach (self::\$hosts[\$hostname] as \$record) {
                if (\$record['type'] === \$type) {
                    return true;
                }
                if ('ANY' === \$type && isset(self::\$dnsTypes[\$record['type']]) && 'HINFO' !== \$record['type']) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function getmxrr(\$hostname, &\$mxhosts, &\$weight = null)
    {
        if (!self::\$hosts) {
            return \\getmxrr(\$hostname, \$mxhosts, \$weight);
        }
        \$mxhosts = \$weight = array();

        if (isset(self::\$hosts[\$hostname])) {
            foreach (self::\$hosts[\$hostname] as \$record) {
                if ('MX' === \$record['type']) {
                    \$mxhosts[] = \$record['host'];
                    \$weight[] = \$record['pri'];
                }
            }
        }

        return (bool) \$mxhosts;
    }

    public static function gethostbyaddr(\$ipAddress)
    {
        if (!self::\$hosts) {
            return \\gethostbyaddr(\$ipAddress);
        }
        foreach (self::\$hosts as \$hostname => \$records) {
            foreach (\$records as \$record) {
                if ('A' === \$record['type'] && \$ipAddress === \$record['ip']) {
                    return \$hostname;
                }
                if ('AAAA' === \$record['type'] && \$ipAddress === \$record['ipv6']) {
                    return \$hostname;
                }
            }
        }

        return \$ipAddress;
    }

    public static function gethostbyname(\$hostname)
    {
        if (!self::\$hosts) {
            return \\gethostbyname(\$hostname);
        }
        if (isset(self::\$hosts[\$hostname])) {
            foreach (self::\$hosts[\$hostname] as \$record) {
                if ('A' === \$record['type']) {
                    return \$record['ip'];
                }
            }
        }

        return \$hostname;
    }

    public static function gethostbynamel(\$hostname)
    {
        if (!self::\$hosts) {
            return \\gethostbynamel(\$hostname);
        }
        \$ips = false;

        if (isset(self::\$hosts[\$hostname])) {
            \$ips = array();

            foreach (self::\$hosts[\$hostname] as \$record) {
                if ('A' === \$record['type']) {
                    \$ips[] = \$record['ip'];
                }
            }
        }

        return \$ips;
    }

    public static function dns_get_record(\$hostname, \$type = DNS_ANY, &\$authns = null, &\$addtl = null, \$raw = false)
    {
        if (!self::\$hosts) {
            return \\dns_get_record(\$hostname, \$type, \$authns, \$addtl, \$raw);
        }

        \$records = false;

        if (isset(self::\$hosts[\$hostname])) {
            if (DNS_ANY === \$type) {
                \$type = DNS_ALL;
            }
            \$records = array();

            foreach (self::\$hosts[\$hostname] as \$record) {
                if (isset(self::\$dnsTypes[\$record['type']]) && (self::\$dnsTypes[\$record['type']] & \$type)) {
                    \$records[] = array_merge(array('host' => \$hostname, 'class' => 'IN', 'ttl' => 1, 'type' => \$record['type']), \$record);
                }
            }
        }

        return \$records;
    }

    public static function register(\$class)
    {
        \$self = \\get_called_class();

        \$mockedNs = array(substr(\$class, 0, strrpos(\$class, '\\\\')));
        if (0 < strpos(\$class, '\\\\Tests\\\\')) {
            \$ns = str_replace('\\\\Tests\\\\', '\\\\', \$class);
            \$mockedNs[] = substr(\$ns, 0, strrpos(\$ns, '\\\\'));
        } elseif (0 === strpos(\$class, 'Tests\\\\')) {
            \$mockedNs[] = substr(\$class, 6, strrpos(\$class, '\\\\') - 6);
        }
        foreach (\$mockedNs as \$ns) {
            if (\\function_exists(\$ns.'\\checkdnsrr')) {
                continue;
            }
            eval(<<<EOPHP
namespace \$ns;

function checkdnsrr(\\\$host, \\\$type = 'MX')
{
    return \\\\\$self::checkdnsrr(\\\$host, \\\$type);
}

function dns_check_record(\\\$host, \\\$type = 'MX')
{
    return \\\\\$self::checkdnsrr(\\\$host, \\\$type);
}

function getmxrr(\\\$hostname, &\\\$mxhosts, &\\\$weight = null)
{
    return \\\\\$self::getmxrr(\\\$hostname, \\\$mxhosts, \\\$weight);
}

function dns_get_mx(\\\$hostname, &\\\$mxhosts, &\\\$weight = null)
{
    return \\\\\$self::getmxrr(\\\$hostname, \\\$mxhosts, \\\$weight);
}

function gethostbyaddr(\\\$ipAddress)
{
    return \\\\\$self::gethostbyaddr(\\\$ipAddress);
}

function gethostbyname(\\\$hostname)
{
    return \\\\\$self::gethostbyname(\\\$hostname);
}

function gethostbynamel(\\\$hostname)
{
    return \\\\\$self::gethostbynamel(\\\$hostname);
}

function dns_get_record(\\\$hostname, \\\$type = DNS_ANY, &\\\$authns = null, &\\\$addtl = null, \\\$raw = false)
{
    return \\\\\$self::dns_get_record(\\\$hostname, \\\$type, \\\$authns, \\\$addtl, \\\$raw);
}

EOPHP
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/DnsMock.php";
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

namespace Symfony\\Bridge\\PhpUnit;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DnsMock
{
    private static \$hosts = array();
    private static \$dnsTypes = array(
        'A' => DNS_A,
        'MX' => DNS_MX,
        'NS' => DNS_NS,
        'SOA' => DNS_SOA,
        'PTR' => DNS_PTR,
        'CNAME' => DNS_CNAME,
        'AAAA' => DNS_AAAA,
        'A6' => DNS_A6,
        'SRV' => DNS_SRV,
        'NAPTR' => DNS_NAPTR,
        'TXT' => DNS_TXT,
        'HINFO' => DNS_HINFO,
    );

    /**
     * Configures the mock values for DNS queries.
     *
     * @param array \$hosts Mocked hosts as keys, arrays of DNS records as returned by dns_get_record() as values
     */
    public static function withMockedHosts(array \$hosts)
    {
        self::\$hosts = \$hosts;
    }

    public static function checkdnsrr(\$hostname, \$type = 'MX')
    {
        if (!self::\$hosts) {
            return \\checkdnsrr(\$hostname, \$type);
        }
        if (isset(self::\$hosts[\$hostname])) {
            \$type = strtoupper(\$type);

            foreach (self::\$hosts[\$hostname] as \$record) {
                if (\$record['type'] === \$type) {
                    return true;
                }
                if ('ANY' === \$type && isset(self::\$dnsTypes[\$record['type']]) && 'HINFO' !== \$record['type']) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function getmxrr(\$hostname, &\$mxhosts, &\$weight = null)
    {
        if (!self::\$hosts) {
            return \\getmxrr(\$hostname, \$mxhosts, \$weight);
        }
        \$mxhosts = \$weight = array();

        if (isset(self::\$hosts[\$hostname])) {
            foreach (self::\$hosts[\$hostname] as \$record) {
                if ('MX' === \$record['type']) {
                    \$mxhosts[] = \$record['host'];
                    \$weight[] = \$record['pri'];
                }
            }
        }

        return (bool) \$mxhosts;
    }

    public static function gethostbyaddr(\$ipAddress)
    {
        if (!self::\$hosts) {
            return \\gethostbyaddr(\$ipAddress);
        }
        foreach (self::\$hosts as \$hostname => \$records) {
            foreach (\$records as \$record) {
                if ('A' === \$record['type'] && \$ipAddress === \$record['ip']) {
                    return \$hostname;
                }
                if ('AAAA' === \$record['type'] && \$ipAddress === \$record['ipv6']) {
                    return \$hostname;
                }
            }
        }

        return \$ipAddress;
    }

    public static function gethostbyname(\$hostname)
    {
        if (!self::\$hosts) {
            return \\gethostbyname(\$hostname);
        }
        if (isset(self::\$hosts[\$hostname])) {
            foreach (self::\$hosts[\$hostname] as \$record) {
                if ('A' === \$record['type']) {
                    return \$record['ip'];
                }
            }
        }

        return \$hostname;
    }

    public static function gethostbynamel(\$hostname)
    {
        if (!self::\$hosts) {
            return \\gethostbynamel(\$hostname);
        }
        \$ips = false;

        if (isset(self::\$hosts[\$hostname])) {
            \$ips = array();

            foreach (self::\$hosts[\$hostname] as \$record) {
                if ('A' === \$record['type']) {
                    \$ips[] = \$record['ip'];
                }
            }
        }

        return \$ips;
    }

    public static function dns_get_record(\$hostname, \$type = DNS_ANY, &\$authns = null, &\$addtl = null, \$raw = false)
    {
        if (!self::\$hosts) {
            return \\dns_get_record(\$hostname, \$type, \$authns, \$addtl, \$raw);
        }

        \$records = false;

        if (isset(self::\$hosts[\$hostname])) {
            if (DNS_ANY === \$type) {
                \$type = DNS_ALL;
            }
            \$records = array();

            foreach (self::\$hosts[\$hostname] as \$record) {
                if (isset(self::\$dnsTypes[\$record['type']]) && (self::\$dnsTypes[\$record['type']] & \$type)) {
                    \$records[] = array_merge(array('host' => \$hostname, 'class' => 'IN', 'ttl' => 1, 'type' => \$record['type']), \$record);
                }
            }
        }

        return \$records;
    }

    public static function register(\$class)
    {
        \$self = \\get_called_class();

        \$mockedNs = array(substr(\$class, 0, strrpos(\$class, '\\\\')));
        if (0 < strpos(\$class, '\\\\Tests\\\\')) {
            \$ns = str_replace('\\\\Tests\\\\', '\\\\', \$class);
            \$mockedNs[] = substr(\$ns, 0, strrpos(\$ns, '\\\\'));
        } elseif (0 === strpos(\$class, 'Tests\\\\')) {
            \$mockedNs[] = substr(\$class, 6, strrpos(\$class, '\\\\') - 6);
        }
        foreach (\$mockedNs as \$ns) {
            if (\\function_exists(\$ns.'\\checkdnsrr')) {
                continue;
            }
            eval(<<<EOPHP
namespace \$ns;

function checkdnsrr(\\\$host, \\\$type = 'MX')
{
    return \\\\\$self::checkdnsrr(\\\$host, \\\$type);
}

function dns_check_record(\\\$host, \\\$type = 'MX')
{
    return \\\\\$self::checkdnsrr(\\\$host, \\\$type);
}

function getmxrr(\\\$hostname, &\\\$mxhosts, &\\\$weight = null)
{
    return \\\\\$self::getmxrr(\\\$hostname, \\\$mxhosts, \\\$weight);
}

function dns_get_mx(\\\$hostname, &\\\$mxhosts, &\\\$weight = null)
{
    return \\\\\$self::getmxrr(\\\$hostname, \\\$mxhosts, \\\$weight);
}

function gethostbyaddr(\\\$ipAddress)
{
    return \\\\\$self::gethostbyaddr(\\\$ipAddress);
}

function gethostbyname(\\\$hostname)
{
    return \\\\\$self::gethostbyname(\\\$hostname);
}

function gethostbynamel(\\\$hostname)
{
    return \\\\\$self::gethostbynamel(\\\$hostname);
}

function dns_get_record(\\\$hostname, \\\$type = DNS_ANY, &\\\$authns = null, &\\\$addtl = null, \\\$raw = false)
{
    return \\\\\$self::dns_get_record(\\\$hostname, \\\$type, \\\$authns, \\\$addtl, \\\$raw);
}

EOPHP
            );
        }
    }
}
", "vendor/symfony/phpunit-bridge/DnsMock.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/DnsMock.php");
    }
}
