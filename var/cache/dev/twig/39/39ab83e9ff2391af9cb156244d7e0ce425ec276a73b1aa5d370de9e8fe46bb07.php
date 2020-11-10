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

/* vendor/symfony/phpunit-bridge/Tests/DnsMockTest.php */
class __TwigTemplate_74886bdb285c2b7fdf912dc2ae64703ac65c7896c9bc739de26014f7482c55b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DnsMockTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DnsMockTest.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\DnsMock;

class DnsMockTest extends TestCase
{
    protected function tearDown(): void
    {
        DnsMock::withMockedHosts(array());
    }

    public function testCheckdnsrr()
    {
        DnsMock::withMockedHosts(array('example.com' => array(array('type' => 'MX'))));
        \$this->assertTrue(DnsMock::checkdnsrr('example.com'));

        DnsMock::withMockedHosts(array('example.com' => array(array('type' => 'A'))));
        \$this->assertFalse(DnsMock::checkdnsrr('example.com'));
        \$this->assertTrue(DnsMock::checkdnsrr('example.com', 'a'));
        \$this->assertTrue(DnsMock::checkdnsrr('example.com', 'any'));
        \$this->assertFalse(DnsMock::checkdnsrr('foobar.com', 'ANY'));
    }

    public function testGetmxrr()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(array(
                'type' => 'MX',
                'host' => 'mx.example.com',
                'pri' => 10,
            )),
        ));

        \$this->assertFalse(DnsMock::getmxrr('foobar.com', \$mxhosts, \$weight));
        \$this->assertTrue(DnsMock::getmxrr('example.com', \$mxhosts, \$weight));
        \$this->assertSame(array('mx.example.com'), \$mxhosts);
        \$this->assertSame(array(10), \$weight);
    }

    public function testGethostbyaddr()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
                array(
                    'type' => 'AAAA',
                    'ipv6' => '::12',
                ),
            ),
        ));

        \$this->assertSame('::21', DnsMock::gethostbyaddr('::21'));
        \$this->assertSame('example.com', DnsMock::gethostbyaddr('::12'));
        \$this->assertSame('example.com', DnsMock::gethostbyaddr('1.2.3.4'));
    }

    public function testGethostbyname()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'AAAA',
                    'ipv6' => '::12',
                ),
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
            ),
        ));

        \$this->assertSame('foobar.com', DnsMock::gethostbyname('foobar.com'));
        \$this->assertSame('1.2.3.4', DnsMock::gethostbyname('example.com'));
    }

    public function testGethostbynamel()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
                array(
                    'type' => 'A',
                    'ip' => '2.3.4.5',
                ),
            ),
        ));

        \$this->assertFalse(DnsMock::gethostbynamel('foobar.com'));
        \$this->assertSame(array('1.2.3.4', '2.3.4.5'), DnsMock::gethostbynamel('example.com'));
    }

    public function testDnsGetRecord()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
                array(
                    'type' => 'PTR',
                    'ip' => '2.3.4.5',
                ),
            ),
        ));

        \$records = array(
            array(
                'host' => 'example.com',
                'class' => 'IN',
                'ttl' => 1,
                'type' => 'A',
                'ip' => '1.2.3.4',
            ),
            \$ptr = array(
                'host' => 'example.com',
                'class' => 'IN',
                'ttl' => 1,
                'type' => 'PTR',
                'ip' => '2.3.4.5',
            ),
        );

        \$this->assertFalse(DnsMock::dns_get_record('foobar.com'));
        \$this->assertSame(\$records, DnsMock::dns_get_record('example.com'));
        \$this->assertSame(\$records, DnsMock::dns_get_record('example.com', DNS_ALL));
        \$this->assertSame(\$records, DnsMock::dns_get_record('example.com', DNS_A | DNS_PTR));
        \$this->assertSame(array(\$ptr), DnsMock::dns_get_record('example.com', DNS_PTR));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/DnsMockTest.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\DnsMock;

class DnsMockTest extends TestCase
{
    protected function tearDown(): void
    {
        DnsMock::withMockedHosts(array());
    }

    public function testCheckdnsrr()
    {
        DnsMock::withMockedHosts(array('example.com' => array(array('type' => 'MX'))));
        \$this->assertTrue(DnsMock::checkdnsrr('example.com'));

        DnsMock::withMockedHosts(array('example.com' => array(array('type' => 'A'))));
        \$this->assertFalse(DnsMock::checkdnsrr('example.com'));
        \$this->assertTrue(DnsMock::checkdnsrr('example.com', 'a'));
        \$this->assertTrue(DnsMock::checkdnsrr('example.com', 'any'));
        \$this->assertFalse(DnsMock::checkdnsrr('foobar.com', 'ANY'));
    }

    public function testGetmxrr()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(array(
                'type' => 'MX',
                'host' => 'mx.example.com',
                'pri' => 10,
            )),
        ));

        \$this->assertFalse(DnsMock::getmxrr('foobar.com', \$mxhosts, \$weight));
        \$this->assertTrue(DnsMock::getmxrr('example.com', \$mxhosts, \$weight));
        \$this->assertSame(array('mx.example.com'), \$mxhosts);
        \$this->assertSame(array(10), \$weight);
    }

    public function testGethostbyaddr()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
                array(
                    'type' => 'AAAA',
                    'ipv6' => '::12',
                ),
            ),
        ));

        \$this->assertSame('::21', DnsMock::gethostbyaddr('::21'));
        \$this->assertSame('example.com', DnsMock::gethostbyaddr('::12'));
        \$this->assertSame('example.com', DnsMock::gethostbyaddr('1.2.3.4'));
    }

    public function testGethostbyname()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'AAAA',
                    'ipv6' => '::12',
                ),
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
            ),
        ));

        \$this->assertSame('foobar.com', DnsMock::gethostbyname('foobar.com'));
        \$this->assertSame('1.2.3.4', DnsMock::gethostbyname('example.com'));
    }

    public function testGethostbynamel()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
                array(
                    'type' => 'A',
                    'ip' => '2.3.4.5',
                ),
            ),
        ));

        \$this->assertFalse(DnsMock::gethostbynamel('foobar.com'));
        \$this->assertSame(array('1.2.3.4', '2.3.4.5'), DnsMock::gethostbynamel('example.com'));
    }

    public function testDnsGetRecord()
    {
        DnsMock::withMockedHosts(array(
            'example.com' => array(
                array(
                    'type' => 'A',
                    'ip' => '1.2.3.4',
                ),
                array(
                    'type' => 'PTR',
                    'ip' => '2.3.4.5',
                ),
            ),
        ));

        \$records = array(
            array(
                'host' => 'example.com',
                'class' => 'IN',
                'ttl' => 1,
                'type' => 'A',
                'ip' => '1.2.3.4',
            ),
            \$ptr = array(
                'host' => 'example.com',
                'class' => 'IN',
                'ttl' => 1,
                'type' => 'PTR',
                'ip' => '2.3.4.5',
            ),
        );

        \$this->assertFalse(DnsMock::dns_get_record('foobar.com'));
        \$this->assertSame(\$records, DnsMock::dns_get_record('example.com'));
        \$this->assertSame(\$records, DnsMock::dns_get_record('example.com', DNS_ALL));
        \$this->assertSame(\$records, DnsMock::dns_get_record('example.com', DNS_A | DNS_PTR));
        \$this->assertSame(array(\$ptr), DnsMock::dns_get_record('example.com', DNS_PTR));
    }
}
", "vendor/symfony/phpunit-bridge/Tests/DnsMockTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/DnsMockTest.php");
    }
}
