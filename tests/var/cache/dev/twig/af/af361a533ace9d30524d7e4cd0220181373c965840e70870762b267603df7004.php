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

/* vendor/symfony/config/Tests/Loader/DelegatingLoaderTest.php */
class __TwigTemplate_e9bf484c7aacd5653870d32b70177d620891bdd2b75cce90093b332d2c5e8cce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Loader/DelegatingLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Loader/DelegatingLoaderTest.php"));

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
use Symfony\\Component\\Config\\Loader\\DelegatingLoader;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;

class DelegatingLoaderTest extends TestCase
{
    public function testConstructor()
    {
        \$loader = new DelegatingLoader(\$resolver = new LoaderResolver());
        \$this->assertTrue(true, '__construct() takes a loader resolver as its first argument');
    }

    public function testGetSetResolver()
    {
        \$resolver = new LoaderResolver();
        \$loader = new DelegatingLoader(\$resolver);
        \$this->assertSame(\$resolver, \$loader->getResolver(), '->getResolver() gets the resolver loader');
        \$loader->setResolver(\$resolver = new LoaderResolver());
        \$this->assertSame(\$resolver, \$loader->getResolver(), '->setResolver() sets the resolver loader');
    }

    public function testSupports()
    {
        \$loader1 = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader1->expects(\$this->once())->method('supports')->willReturn(true);
        \$loader = new DelegatingLoader(new LoaderResolver([\$loader1]));
        \$this->assertTrue(\$loader->supports('foo.xml'), '->supports() returns true if the resource is loadable');

        \$loader1 = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader1->expects(\$this->once())->method('supports')->willReturn(false);
        \$loader = new DelegatingLoader(new LoaderResolver([\$loader1]));
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns false if the resource is not loadable');
    }

    public function testLoad()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->once())->method('supports')->willReturn(true);
        \$loader->expects(\$this->once())->method('load');
        \$resolver = new LoaderResolver([\$loader]);
        \$loader = new DelegatingLoader(\$resolver);

        \$loader->load('foo');
    }

    public function testLoadThrowsAnExceptionIfTheResourceCannotBeLoaded()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\LoaderLoadException');
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->once())->method('supports')->willReturn(false);
        \$resolver = new LoaderResolver([\$loader]);
        \$loader = new DelegatingLoader(\$resolver);

        \$loader->load('foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Loader/DelegatingLoaderTest.php";
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
use Symfony\\Component\\Config\\Loader\\DelegatingLoader;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;

class DelegatingLoaderTest extends TestCase
{
    public function testConstructor()
    {
        \$loader = new DelegatingLoader(\$resolver = new LoaderResolver());
        \$this->assertTrue(true, '__construct() takes a loader resolver as its first argument');
    }

    public function testGetSetResolver()
    {
        \$resolver = new LoaderResolver();
        \$loader = new DelegatingLoader(\$resolver);
        \$this->assertSame(\$resolver, \$loader->getResolver(), '->getResolver() gets the resolver loader');
        \$loader->setResolver(\$resolver = new LoaderResolver());
        \$this->assertSame(\$resolver, \$loader->getResolver(), '->setResolver() sets the resolver loader');
    }

    public function testSupports()
    {
        \$loader1 = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader1->expects(\$this->once())->method('supports')->willReturn(true);
        \$loader = new DelegatingLoader(new LoaderResolver([\$loader1]));
        \$this->assertTrue(\$loader->supports('foo.xml'), '->supports() returns true if the resource is loadable');

        \$loader1 = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader1->expects(\$this->once())->method('supports')->willReturn(false);
        \$loader = new DelegatingLoader(new LoaderResolver([\$loader1]));
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns false if the resource is not loadable');
    }

    public function testLoad()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->once())->method('supports')->willReturn(true);
        \$loader->expects(\$this->once())->method('load');
        \$resolver = new LoaderResolver([\$loader]);
        \$loader = new DelegatingLoader(\$resolver);

        \$loader->load('foo');
    }

    public function testLoadThrowsAnExceptionIfTheResourceCannotBeLoaded()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\LoaderLoadException');
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Config\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->once())->method('supports')->willReturn(false);
        \$resolver = new LoaderResolver([\$loader]);
        \$loader = new DelegatingLoader(\$resolver);

        \$loader->load('foo');
    }
}
", "vendor/symfony/config/Tests/Loader/DelegatingLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Loader/DelegatingLoaderTest.php");
    }
}
