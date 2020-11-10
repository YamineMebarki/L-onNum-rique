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

/* vendor/symfony/asset/Tests/PathPackageTest.php */
class __TwigTemplate_83ff13e476d1dd9b7acb784b506f1d5fd087a05baa33c287391143e2dfb9912b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/PathPackageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/PathPackageTest.php"));

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
use Symfony\\Component\\Asset\\PathPackage;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class PathPackageTest extends TestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testGetUrl(\$basePath, \$format, \$path, \$expected)
    {
        \$package = new PathPackage(\$basePath, new StaticVersionStrategy('v1', \$format));
        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getConfigs()
    {
        return [
            ['/foo', '', 'http://example.com/foo', 'http://example.com/foo'],
            ['/foo', '', 'https://example.com/foo', 'https://example.com/foo'],
            ['/foo', '', '//example.com/foo', '//example.com/foo'],

            ['', '', '/foo', '/foo?v1'],

            ['/foo', '', '/bar', '/bar?v1'],
            ['/foo', '', 'bar', '/foo/bar?v1'],
            ['foo', '', 'bar', '/foo/bar?v1'],
            ['foo/', '', 'bar', '/foo/bar?v1'],
            ['/foo/', '', 'bar', '/foo/bar?v1'],

            ['/foo', 'version-%2\$s/%1\$s', '/bar', '/version-v1/bar'],
            ['/foo', 'version-%2\$s/%1\$s', 'bar', '/foo/version-v1/bar'],
            ['/foo', 'version-%2\$s/%1\$s', 'bar/', '/foo/version-v1/bar/'],
            ['/foo', 'version-%2\$s/%1\$s', '/bar/', '/version-v1/bar/'],
        ];
    }

    /**
     * @dataProvider getContextConfigs
     */
    public function testGetUrlWithContext(\$basePathRequest, \$basePath, \$format, \$path, \$expected)
    {
        \$package = new PathPackage(\$basePath, new StaticVersionStrategy('v1', \$format), \$this->getContext(\$basePathRequest));

        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getContextConfigs()
    {
        return [
            ['', '/foo', '', '/baz', '/baz?v1'],
            ['', '/foo', '', 'baz', '/foo/baz?v1'],
            ['', 'foo', '', 'baz', '/foo/baz?v1'],
            ['', 'foo/', '', 'baz', '/foo/baz?v1'],
            ['', '/foo/', '', 'baz', '/foo/baz?v1'],

            ['/bar', '/foo', '', '/baz', '/baz?v1'],
            ['/bar', '/foo', '', 'baz', '/bar/foo/baz?v1'],
            ['/bar', 'foo', '', 'baz', '/bar/foo/baz?v1'],
            ['/bar', 'foo/', '', 'baz', '/bar/foo/baz?v1'],
            ['/bar', '/foo/', '', 'baz', '/bar/foo/baz?v1'],
        ];
    }

    public function testVersionStrategyGivesAbsoluteURL()
    {
        \$versionStrategy = \$this->getMockBuilder('Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface')->getMock();
        \$versionStrategy->expects(\$this->any())
            ->method('applyVersion')
            ->willReturn('https://cdn.com/bar/main.css');
        \$package = new PathPackage('/subdirectory', \$versionStrategy, \$this->getContext('/bar'));

        \$this->assertEquals('https://cdn.com/bar/main.css', \$package->getUrl('main.css'));
    }

    private function getContext(\$basePath)
    {
        \$context = \$this->getMockBuilder('Symfony\\Component\\Asset\\Context\\ContextInterface')->getMock();
        \$context->expects(\$this->any())->method('getBasePath')->willReturn(\$basePath);

        return \$context;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Tests/PathPackageTest.php";
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
use Symfony\\Component\\Asset\\PathPackage;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class PathPackageTest extends TestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testGetUrl(\$basePath, \$format, \$path, \$expected)
    {
        \$package = new PathPackage(\$basePath, new StaticVersionStrategy('v1', \$format));
        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getConfigs()
    {
        return [
            ['/foo', '', 'http://example.com/foo', 'http://example.com/foo'],
            ['/foo', '', 'https://example.com/foo', 'https://example.com/foo'],
            ['/foo', '', '//example.com/foo', '//example.com/foo'],

            ['', '', '/foo', '/foo?v1'],

            ['/foo', '', '/bar', '/bar?v1'],
            ['/foo', '', 'bar', '/foo/bar?v1'],
            ['foo', '', 'bar', '/foo/bar?v1'],
            ['foo/', '', 'bar', '/foo/bar?v1'],
            ['/foo/', '', 'bar', '/foo/bar?v1'],

            ['/foo', 'version-%2\$s/%1\$s', '/bar', '/version-v1/bar'],
            ['/foo', 'version-%2\$s/%1\$s', 'bar', '/foo/version-v1/bar'],
            ['/foo', 'version-%2\$s/%1\$s', 'bar/', '/foo/version-v1/bar/'],
            ['/foo', 'version-%2\$s/%1\$s', '/bar/', '/version-v1/bar/'],
        ];
    }

    /**
     * @dataProvider getContextConfigs
     */
    public function testGetUrlWithContext(\$basePathRequest, \$basePath, \$format, \$path, \$expected)
    {
        \$package = new PathPackage(\$basePath, new StaticVersionStrategy('v1', \$format), \$this->getContext(\$basePathRequest));

        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getContextConfigs()
    {
        return [
            ['', '/foo', '', '/baz', '/baz?v1'],
            ['', '/foo', '', 'baz', '/foo/baz?v1'],
            ['', 'foo', '', 'baz', '/foo/baz?v1'],
            ['', 'foo/', '', 'baz', '/foo/baz?v1'],
            ['', '/foo/', '', 'baz', '/foo/baz?v1'],

            ['/bar', '/foo', '', '/baz', '/baz?v1'],
            ['/bar', '/foo', '', 'baz', '/bar/foo/baz?v1'],
            ['/bar', 'foo', '', 'baz', '/bar/foo/baz?v1'],
            ['/bar', 'foo/', '', 'baz', '/bar/foo/baz?v1'],
            ['/bar', '/foo/', '', 'baz', '/bar/foo/baz?v1'],
        ];
    }

    public function testVersionStrategyGivesAbsoluteURL()
    {
        \$versionStrategy = \$this->getMockBuilder('Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface')->getMock();
        \$versionStrategy->expects(\$this->any())
            ->method('applyVersion')
            ->willReturn('https://cdn.com/bar/main.css');
        \$package = new PathPackage('/subdirectory', \$versionStrategy, \$this->getContext('/bar'));

        \$this->assertEquals('https://cdn.com/bar/main.css', \$package->getUrl('main.css'));
    }

    private function getContext(\$basePath)
    {
        \$context = \$this->getMockBuilder('Symfony\\Component\\Asset\\Context\\ContextInterface')->getMock();
        \$context->expects(\$this->any())->method('getBasePath')->willReturn(\$basePath);

        return \$context;
    }
}
", "vendor/symfony/asset/Tests/PathPackageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Tests/PathPackageTest.php");
    }
}
