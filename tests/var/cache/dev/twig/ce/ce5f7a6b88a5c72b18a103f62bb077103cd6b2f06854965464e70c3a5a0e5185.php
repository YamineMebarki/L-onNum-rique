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

/* vendor/symfony/config/Tests/Loader/LoaderTest.php */
class __TwigTemplate_75d0fe75ba78c6f802189edf2def775438f1ced6a82f3a3442f1e4c0bb00e909 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Loader/LoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Loader/LoaderTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Loader\\Loader;

class LoaderTest extends TestCase
{
    public function testGetSetResolver()
    {
        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertSame(\$resolver, \$loader->getResolver(), '->setResolver() sets the resolver loader');
    }

    public function testResolve()
    {
        \$resolvedLoader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();

        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('foo.xml')
            ->willReturn(\$resolvedLoader);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertSame(\$loader, \$loader->resolve('foo.foo'), '->resolve() finds a loader');
        \$this->assertSame(\$resolvedLoader, \$loader->resolve('foo.xml'), '->resolve() finds a loader');
    }

    public function testResolveWhenResolverCannotFindLoader()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\LoaderLoadException');
        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('FOOBAR')
            ->willReturn(false);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$loader->resolve('FOOBAR');
    }

    public function testImport()
    {
        \$resolvedLoader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$resolvedLoader->expects(\$this->once())
            ->method('load')
            ->with('foo')
            ->willReturn('yes');

        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('foo')
            ->willReturn(\$resolvedLoader);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertEquals('yes', \$loader->import('foo'));
    }

    public function testImportWithType()
    {
        \$resolvedLoader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$resolvedLoader->expects(\$this->once())
            ->method('load')
            ->with('foo', 'bar')
            ->willReturn('yes');

        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('foo', 'bar')
            ->willReturn(\$resolvedLoader);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertEquals('yes', \$loader->import('foo', 'bar'));
    }
}

class ProjectLoader1 extends Loader
{
    public function load(\$resource, \$type = null)
    {
    }

    public function supports(\$resource, \$type = null)
    {
        return \\is_string(\$resource) && 'foo' === pathinfo(\$resource, PATHINFO_EXTENSION);
    }

    public function getType()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Loader/LoaderTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Loader\\Loader;

class LoaderTest extends TestCase
{
    public function testGetSetResolver()
    {
        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertSame(\$resolver, \$loader->getResolver(), '->setResolver() sets the resolver loader');
    }

    public function testResolve()
    {
        \$resolvedLoader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();

        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('foo.xml')
            ->willReturn(\$resolvedLoader);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertSame(\$loader, \$loader->resolve('foo.foo'), '->resolve() finds a loader');
        \$this->assertSame(\$resolvedLoader, \$loader->resolve('foo.xml'), '->resolve() finds a loader');
    }

    public function testResolveWhenResolverCannotFindLoader()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\LoaderLoadException');
        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('FOOBAR')
            ->willReturn(false);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$loader->resolve('FOOBAR');
    }

    public function testImport()
    {
        \$resolvedLoader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$resolvedLoader->expects(\$this->once())
            ->method('load')
            ->with('foo')
            ->willReturn('yes');

        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('foo')
            ->willReturn(\$resolvedLoader);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertEquals('yes', \$loader->import('foo'));
    }

    public function testImportWithType()
    {
        \$resolvedLoader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$resolvedLoader->expects(\$this->once())
            ->method('load')
            ->with('foo', 'bar')
            ->willReturn('yes');

        \$resolver = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderResolverInterface')->getMock();
        \$resolver->expects(\$this->once())
            ->method('resolve')
            ->with('foo', 'bar')
            ->willReturn(\$resolvedLoader);

        \$loader = new ProjectLoader1();
        \$loader->setResolver(\$resolver);

        \$this->assertEquals('yes', \$loader->import('foo', 'bar'));
    }
}

class ProjectLoader1 extends Loader
{
    public function load(\$resource, \$type = null)
    {
    }

    public function supports(\$resource, \$type = null)
    {
        return \\is_string(\$resource) && 'foo' === pathinfo(\$resource, PATHINFO_EXTENSION);
    }

    public function getType()
    {
    }
}
", "vendor/symfony/config/Tests/Loader/LoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Loader/LoaderTest.php");
    }
}
