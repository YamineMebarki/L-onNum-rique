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

/* vendor/symfony/http-foundation/Tests/IpUtilsTest.php */
class __TwigTemplate_eb120a9491f18f70893c6bdb1c91748cc3550e705cce1b38b4a6bfe9f2178d76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/IpUtilsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/IpUtilsTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\IpUtils;

class IpUtilsTest extends TestCase
{
    /**
     * @dataProvider getIpv4Data
     */
    public function testIpv4(\$matches, \$remoteAddr, \$cidr)
    {
        \$this->assertSame(\$matches, IpUtils::checkIp(\$remoteAddr, \$cidr));
    }

    public function getIpv4Data()
    {
        return [
            [true, '192.168.1.1', '192.168.1.1'],
            [true, '192.168.1.1', '192.168.1.1/1'],
            [true, '192.168.1.1', '192.168.1.0/24'],
            [false, '192.168.1.1', '1.2.3.4/1'],
            [false, '192.168.1.1', '192.168.1.1/33'], // invalid subnet
            [true, '192.168.1.1', ['1.2.3.4/1', '192.168.1.0/24']],
            [true, '192.168.1.1', ['192.168.1.0/24', '1.2.3.4/1']],
            [false, '192.168.1.1', ['1.2.3.4/1', '4.3.2.1/1']],
            [true, '1.2.3.4', '0.0.0.0/0'],
            [true, '1.2.3.4', '192.168.1.0/0'],
            [false, '1.2.3.4', '256.256.256/0'], // invalid CIDR notation
            [false, 'an_invalid_ip', '192.168.1.0/24'],
        ];
    }

    /**
     * @dataProvider getIpv6Data
     */
    public function testIpv6(\$matches, \$remoteAddr, \$cidr)
    {
        if (!\\defined('AF_INET6')) {
            \$this->markTestSkipped('Only works when PHP is compiled without the option \"disable-ipv6\".');
        }

        \$this->assertSame(\$matches, IpUtils::checkIp(\$remoteAddr, \$cidr));
    }

    public function getIpv6Data()
    {
        return [
            [true, '2a01:198:603:0:396e:4789:8e99:890f', '2a01:198:603:0::/65'],
            [false, '2a00:198:603:0:396e:4789:8e99:890f', '2a01:198:603:0::/65'],
            [false, '2a01:198:603:0:396e:4789:8e99:890f', '::1'],
            [true, '0:0:0:0:0:0:0:1', '::1'],
            [false, '0:0:603:0:396e:4789:8e99:0001', '::1'],
            [true, '0:0:603:0:396e:4789:8e99:0001', '::/0'],
            [true, '0:0:603:0:396e:4789:8e99:0001', '2a01:198:603:0::/0'],
            [true, '2a01:198:603:0:396e:4789:8e99:890f', ['::1', '2a01:198:603:0::/65']],
            [true, '2a01:198:603:0:396e:4789:8e99:890f', ['2a01:198:603:0::/65', '::1']],
            [false, '2a01:198:603:0:396e:4789:8e99:890f', ['::1', '1a01:198:603:0::/65']],
            [false, '}__test|O:21:&quot;JDatabaseDriverMysqli&quot;:3:{s:2', '::1'],
            [false, '2a01:198:603:0:396e:4789:8e99:890f', 'unknown'],
        ];
    }

    /**
     * @requires extension sockets
     */
    public function testAnIpv6WithOptionDisabledIpv6()
    {
        \$this->expectException('RuntimeException');
        if (\\defined('AF_INET6')) {
            \$this->markTestSkipped('Only works when PHP is compiled with the option \"disable-ipv6\".');
        }

        IpUtils::checkIp('2a01:198:603:0:396e:4789:8e99:890f', '2a01:198:603:0::/65');
    }

    /**
     * @dataProvider invalidIpAddressData
     */
    public function testInvalidIpAddressesDoNotMatch(\$requestIp, \$proxyIp)
    {
        \$this->assertFalse(IpUtils::checkIp4(\$requestIp, \$proxyIp));
    }

    public function invalidIpAddressData()
    {
        return [
            'invalid proxy wildcard' => ['192.168.20.13', '*'],
            'invalid proxy missing netmask' => ['192.168.20.13', '0.0.0.0'],
            'invalid request IP with invalid proxy wildcard' => ['0.0.0.0', '*'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/IpUtilsTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\IpUtils;

class IpUtilsTest extends TestCase
{
    /**
     * @dataProvider getIpv4Data
     */
    public function testIpv4(\$matches, \$remoteAddr, \$cidr)
    {
        \$this->assertSame(\$matches, IpUtils::checkIp(\$remoteAddr, \$cidr));
    }

    public function getIpv4Data()
    {
        return [
            [true, '192.168.1.1', '192.168.1.1'],
            [true, '192.168.1.1', '192.168.1.1/1'],
            [true, '192.168.1.1', '192.168.1.0/24'],
            [false, '192.168.1.1', '1.2.3.4/1'],
            [false, '192.168.1.1', '192.168.1.1/33'], // invalid subnet
            [true, '192.168.1.1', ['1.2.3.4/1', '192.168.1.0/24']],
            [true, '192.168.1.1', ['192.168.1.0/24', '1.2.3.4/1']],
            [false, '192.168.1.1', ['1.2.3.4/1', '4.3.2.1/1']],
            [true, '1.2.3.4', '0.0.0.0/0'],
            [true, '1.2.3.4', '192.168.1.0/0'],
            [false, '1.2.3.4', '256.256.256/0'], // invalid CIDR notation
            [false, 'an_invalid_ip', '192.168.1.0/24'],
        ];
    }

    /**
     * @dataProvider getIpv6Data
     */
    public function testIpv6(\$matches, \$remoteAddr, \$cidr)
    {
        if (!\\defined('AF_INET6')) {
            \$this->markTestSkipped('Only works when PHP is compiled without the option \"disable-ipv6\".');
        }

        \$this->assertSame(\$matches, IpUtils::checkIp(\$remoteAddr, \$cidr));
    }

    public function getIpv6Data()
    {
        return [
            [true, '2a01:198:603:0:396e:4789:8e99:890f', '2a01:198:603:0::/65'],
            [false, '2a00:198:603:0:396e:4789:8e99:890f', '2a01:198:603:0::/65'],
            [false, '2a01:198:603:0:396e:4789:8e99:890f', '::1'],
            [true, '0:0:0:0:0:0:0:1', '::1'],
            [false, '0:0:603:0:396e:4789:8e99:0001', '::1'],
            [true, '0:0:603:0:396e:4789:8e99:0001', '::/0'],
            [true, '0:0:603:0:396e:4789:8e99:0001', '2a01:198:603:0::/0'],
            [true, '2a01:198:603:0:396e:4789:8e99:890f', ['::1', '2a01:198:603:0::/65']],
            [true, '2a01:198:603:0:396e:4789:8e99:890f', ['2a01:198:603:0::/65', '::1']],
            [false, '2a01:198:603:0:396e:4789:8e99:890f', ['::1', '1a01:198:603:0::/65']],
            [false, '}__test|O:21:&quot;JDatabaseDriverMysqli&quot;:3:{s:2', '::1'],
            [false, '2a01:198:603:0:396e:4789:8e99:890f', 'unknown'],
        ];
    }

    /**
     * @requires extension sockets
     */
    public function testAnIpv6WithOptionDisabledIpv6()
    {
        \$this->expectException('RuntimeException');
        if (\\defined('AF_INET6')) {
            \$this->markTestSkipped('Only works when PHP is compiled with the option \"disable-ipv6\".');
        }

        IpUtils::checkIp('2a01:198:603:0:396e:4789:8e99:890f', '2a01:198:603:0::/65');
    }

    /**
     * @dataProvider invalidIpAddressData
     */
    public function testInvalidIpAddressesDoNotMatch(\$requestIp, \$proxyIp)
    {
        \$this->assertFalse(IpUtils::checkIp4(\$requestIp, \$proxyIp));
    }

    public function invalidIpAddressData()
    {
        return [
            'invalid proxy wildcard' => ['192.168.20.13', '*'],
            'invalid proxy missing netmask' => ['192.168.20.13', '0.0.0.0'],
            'invalid request IP with invalid proxy wildcard' => ['0.0.0.0', '*'],
        ];
    }
}
", "vendor/symfony/http-foundation/Tests/IpUtilsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/IpUtilsTest.php");
    }
}
