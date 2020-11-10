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

/* vendor/symfony/asset/Tests/UrlPackageTest.php */
class __TwigTemplate_079c4b8614bc0579a617921a50807b0055f3a4e62aae4bf02e3b2d9c8edfb744 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/UrlPackageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/UrlPackageTest.php"));

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

namespace Symfony\\Component\\Asset\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\UrlPackage;
use Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class UrlPackageTest extends TestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testGetUrl(\$baseUrls, \$format, \$path, \$expected)
    {
        \$package = new UrlPackage(\$baseUrls, new StaticVersionStrategy('v1', \$format));
        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getConfigs()
    {
        return [
            ['http://example.net', '', 'http://example.com/foo', 'http://example.com/foo'],
            ['http://example.net', '', 'https://example.com/foo', 'https://example.com/foo'],
            ['http://example.net', '', '//example.com/foo', '//example.com/foo'],
            ['file:///example/net', '', 'file:///example/com/foo', 'file:///example/com/foo'],
            ['ftp://example.net', '', 'ftp://example.com', 'ftp://example.com'],

            ['http://example.com', '', '/foo', 'http://example.com/foo?v1'],
            ['http://example.com', '', 'foo', 'http://example.com/foo?v1'],
            ['http://example.com/', '', 'foo', 'http://example.com/foo?v1'],
            ['http://example.com/foo', '', 'foo', 'http://example.com/foo/foo?v1'],
            ['http://example.com/foo/', '', 'foo', 'http://example.com/foo/foo?v1'],
            ['file:///example/com/foo/', '', 'foo', 'file:///example/com/foo/foo?v1'],

            [['http://example.com'], '', '/foo', 'http://example.com/foo?v1'],
            [['http://example.com', 'http://example.net'], '', '/foo', 'http://example.com/foo?v1'],
            [['http://example.com', 'http://example.net'], '', '/fooa', 'http://example.net/fooa?v1'],
            [['file:///example/com', 'file:///example/net'], '', '/foo', 'file:///example/com/foo?v1'],
            [['ftp://example.com', 'ftp://example.net'], '', '/fooa', 'ftp://example.net/fooa?v1'],

            ['http://example.com', 'version-%2\$s/%1\$s', '/foo', 'http://example.com/version-v1/foo'],
            ['http://example.com', 'version-%2\$s/%1\$s', 'foo', 'http://example.com/version-v1/foo'],
            ['http://example.com', 'version-%2\$s/%1\$s', 'foo/', 'http://example.com/version-v1/foo/'],
            ['http://example.com', 'version-%2\$s/%1\$s', '/foo/', 'http://example.com/version-v1/foo/'],
            ['file:///example/com', 'version-%2\$s/%1\$s', '/foo/', 'file:///example/com/version-v1/foo/'],
            ['ftp://example.com', 'version-%2\$s/%1\$s', '/foo/', 'ftp://example.com/version-v1/foo/'],
        ];
    }

    /**
     * @dataProvider getContextConfigs
     */
    public function testGetUrlWithContext(\$secure, \$baseUrls, \$format, \$path, \$expected)
    {
        \$package = new UrlPackage(\$baseUrls, new StaticVersionStrategy('v1', \$format), \$this->getContext(\$secure));

        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getContextConfigs()
    {
        return [
            [false, 'http://example.com', '', 'foo', 'http://example.com/foo?v1'],
            [false, ['http://example.com'], '', 'foo', 'http://example.com/foo?v1'],
            [false, ['http://example.com', 'https://example.com'], '', 'foo', 'http://example.com/foo?v1'],
            [false, ['http://example.com', 'https://example.com'], '', 'fooa', 'https://example.com/fooa?v1'],
            [false, ['http://example.com/bar'], '', 'foo', 'http://example.com/bar/foo?v1'],
            [false, ['http://example.com/bar/'], '', 'foo', 'http://example.com/bar/foo?v1'],
            [false, ['//example.com/bar/'], '', 'foo', '//example.com/bar/foo?v1'],

            [true, ['http://example.com'], '', 'foo', 'http://example.com/foo?v1'],
            [true, ['http://example.com', 'https://example.com'], '', 'foo', 'https://example.com/foo?v1'],
        ];
    }

    public function testVersionStrategyGivesAbsoluteURL()
    {
        \$versionStrategy = \$this->getMockBuilder('Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface')->getMock();
        \$versionStrategy->expects(\$this->any())
            ->method('applyVersion')
            ->willReturn('https://cdn.com/bar/main.css');
        \$package = new UrlPackage('https://example.com', \$versionStrategy);

        \$this->assertEquals('https://cdn.com/bar/main.css', \$package->getUrl('main.css'));
    }

    public function testNoBaseUrls()
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\LogicException');
        new UrlPackage([], new EmptyVersionStrategy());
    }

    /**
     * @dataProvider getWrongBaseUrlConfig
     */
    public function testWrongBaseUrl(\$baseUrls)
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\InvalidArgumentException');
        new UrlPackage(\$baseUrls, new EmptyVersionStrategy());
    }

    public function getWrongBaseUrlConfig()
    {
        return [
            ['not-a-url'],
            ['not-a-url-with-query?query=://'],
        ];
    }

    private function getContext(\$secure)
    {
        \$context = \$this->getMockBuilder('Symfony\\Component\\Asset\\Context\\ContextInterface')->getMock();
        \$context->expects(\$this->any())->method('isSecure')->willReturn(\$secure);

        return \$context;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Tests/UrlPackageTest.php";
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

namespace Symfony\\Component\\Asset\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\UrlPackage;
use Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class UrlPackageTest extends TestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testGetUrl(\$baseUrls, \$format, \$path, \$expected)
    {
        \$package = new UrlPackage(\$baseUrls, new StaticVersionStrategy('v1', \$format));
        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getConfigs()
    {
        return [
            ['http://example.net', '', 'http://example.com/foo', 'http://example.com/foo'],
            ['http://example.net', '', 'https://example.com/foo', 'https://example.com/foo'],
            ['http://example.net', '', '//example.com/foo', '//example.com/foo'],
            ['file:///example/net', '', 'file:///example/com/foo', 'file:///example/com/foo'],
            ['ftp://example.net', '', 'ftp://example.com', 'ftp://example.com'],

            ['http://example.com', '', '/foo', 'http://example.com/foo?v1'],
            ['http://example.com', '', 'foo', 'http://example.com/foo?v1'],
            ['http://example.com/', '', 'foo', 'http://example.com/foo?v1'],
            ['http://example.com/foo', '', 'foo', 'http://example.com/foo/foo?v1'],
            ['http://example.com/foo/', '', 'foo', 'http://example.com/foo/foo?v1'],
            ['file:///example/com/foo/', '', 'foo', 'file:///example/com/foo/foo?v1'],

            [['http://example.com'], '', '/foo', 'http://example.com/foo?v1'],
            [['http://example.com', 'http://example.net'], '', '/foo', 'http://example.com/foo?v1'],
            [['http://example.com', 'http://example.net'], '', '/fooa', 'http://example.net/fooa?v1'],
            [['file:///example/com', 'file:///example/net'], '', '/foo', 'file:///example/com/foo?v1'],
            [['ftp://example.com', 'ftp://example.net'], '', '/fooa', 'ftp://example.net/fooa?v1'],

            ['http://example.com', 'version-%2\$s/%1\$s', '/foo', 'http://example.com/version-v1/foo'],
            ['http://example.com', 'version-%2\$s/%1\$s', 'foo', 'http://example.com/version-v1/foo'],
            ['http://example.com', 'version-%2\$s/%1\$s', 'foo/', 'http://example.com/version-v1/foo/'],
            ['http://example.com', 'version-%2\$s/%1\$s', '/foo/', 'http://example.com/version-v1/foo/'],
            ['file:///example/com', 'version-%2\$s/%1\$s', '/foo/', 'file:///example/com/version-v1/foo/'],
            ['ftp://example.com', 'version-%2\$s/%1\$s', '/foo/', 'ftp://example.com/version-v1/foo/'],
        ];
    }

    /**
     * @dataProvider getContextConfigs
     */
    public function testGetUrlWithContext(\$secure, \$baseUrls, \$format, \$path, \$expected)
    {
        \$package = new UrlPackage(\$baseUrls, new StaticVersionStrategy('v1', \$format), \$this->getContext(\$secure));

        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getContextConfigs()
    {
        return [
            [false, 'http://example.com', '', 'foo', 'http://example.com/foo?v1'],
            [false, ['http://example.com'], '', 'foo', 'http://example.com/foo?v1'],
            [false, ['http://example.com', 'https://example.com'], '', 'foo', 'http://example.com/foo?v1'],
            [false, ['http://example.com', 'https://example.com'], '', 'fooa', 'https://example.com/fooa?v1'],
            [false, ['http://example.com/bar'], '', 'foo', 'http://example.com/bar/foo?v1'],
            [false, ['http://example.com/bar/'], '', 'foo', 'http://example.com/bar/foo?v1'],
            [false, ['//example.com/bar/'], '', 'foo', '//example.com/bar/foo?v1'],

            [true, ['http://example.com'], '', 'foo', 'http://example.com/foo?v1'],
            [true, ['http://example.com', 'https://example.com'], '', 'foo', 'https://example.com/foo?v1'],
        ];
    }

    public function testVersionStrategyGivesAbsoluteURL()
    {
        \$versionStrategy = \$this->getMockBuilder('Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface')->getMock();
        \$versionStrategy->expects(\$this->any())
            ->method('applyVersion')
            ->willReturn('https://cdn.com/bar/main.css');
        \$package = new UrlPackage('https://example.com', \$versionStrategy);

        \$this->assertEquals('https://cdn.com/bar/main.css', \$package->getUrl('main.css'));
    }

    public function testNoBaseUrls()
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\LogicException');
        new UrlPackage([], new EmptyVersionStrategy());
    }

    /**
     * @dataProvider getWrongBaseUrlConfig
     */
    public function testWrongBaseUrl(\$baseUrls)
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\InvalidArgumentException');
        new UrlPackage(\$baseUrls, new EmptyVersionStrategy());
    }

    public function getWrongBaseUrlConfig()
    {
        return [
            ['not-a-url'],
            ['not-a-url-with-query?query=://'],
        ];
    }

    private function getContext(\$secure)
    {
        \$context = \$this->getMockBuilder('Symfony\\Component\\Asset\\Context\\ContextInterface')->getMock();
        \$context->expects(\$this->any())->method('isSecure')->willReturn(\$secure);

        return \$context;
    }
}
", "vendor/symfony/asset/Tests/UrlPackageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Tests/UrlPackageTest.php");
    }
}
