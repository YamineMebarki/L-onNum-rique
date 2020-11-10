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

/* vendor/symfony/dependency-injection/Tests/Loader/LoaderResolverTest.php */
class __TwigTemplate_dcdc99e92dbd3164ddff80f850e053cb7845d132a71d1338aafcc69a14e12071 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/LoaderResolverTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/LoaderResolverTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;

class LoaderResolverTest extends TestCase
{
    private static \$fixturesPath;

    /** @var LoaderResolver */
    private \$resolver;

    protected function setUp(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');

        \$container = new ContainerBuilder();
        \$this->resolver = new LoaderResolver([
            new XmlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/xml')),
            new YamlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/yaml')),
            new IniFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/ini')),
            new PhpFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/php')),
            new ClosureLoader(\$container),
        ]);
    }

    public function provideResourcesToLoad()
    {
        return [
            ['ini_with_wrong_ext.xml', 'ini', IniFileLoader::class],
            ['xml_with_wrong_ext.php', 'xml', XmlFileLoader::class],
            ['php_with_wrong_ext.yml', 'php', PhpFileLoader::class],
            ['yaml_with_wrong_ext.ini', 'yaml', YamlFileLoader::class],
        ];
    }

    /**
     * @dataProvider provideResourcesToLoad
     */
    public function testResolvesForcedType(\$resource, \$type, \$expectedClass)
    {
        \$this->assertInstanceOf(\$expectedClass, \$this->resolver->resolve(\$resource, \$type));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Loader/LoaderResolverTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;

class LoaderResolverTest extends TestCase
{
    private static \$fixturesPath;

    /** @var LoaderResolver */
    private \$resolver;

    protected function setUp(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');

        \$container = new ContainerBuilder();
        \$this->resolver = new LoaderResolver([
            new XmlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/xml')),
            new YamlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/yaml')),
            new IniFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/ini')),
            new PhpFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/php')),
            new ClosureLoader(\$container),
        ]);
    }

    public function provideResourcesToLoad()
    {
        return [
            ['ini_with_wrong_ext.xml', 'ini', IniFileLoader::class],
            ['xml_with_wrong_ext.php', 'xml', XmlFileLoader::class],
            ['php_with_wrong_ext.yml', 'php', PhpFileLoader::class],
            ['yaml_with_wrong_ext.ini', 'yaml', YamlFileLoader::class],
        ];
    }

    /**
     * @dataProvider provideResourcesToLoad
     */
    public function testResolvesForcedType(\$resource, \$type, \$expectedClass)
    {
        \$this->assertInstanceOf(\$expectedClass, \$this->resolver->resolve(\$resource, \$type));
    }
}
", "vendor/symfony/dependency-injection/Tests/Loader/LoaderResolverTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Loader/LoaderResolverTest.php");
    }
}
