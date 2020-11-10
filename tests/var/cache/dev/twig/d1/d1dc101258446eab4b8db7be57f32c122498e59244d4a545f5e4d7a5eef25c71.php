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

/* vendor/symfony/dependency-injection/Tests/Loader/PhpFileLoaderTest.php */
class __TwigTemplate_ab6bb4ee57af9968da9a323cbcf8eea966788caa41b176e03eaf1a66b6e6f947 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/PhpFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/PhpFileLoaderTest.php"));

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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper;
use Symfony\\Component\\DependencyInjection\\Dumper\\YamlDumper;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

class PhpFileLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new PhpFileLoader(new ContainerBuilder(), new FileLocator());

        \$this->assertTrue(\$loader->supports('foo.php'), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns false if the resource is not loadable');
        \$this->assertTrue(\$loader->supports('with_wrong_ext.yml', 'php'), '->supports() returns true if the resource with forced type is loadable');
    }

    public function testLoad()
    {
        \$loader = new PhpFileLoader(\$container = new ContainerBuilder(), new FileLocator());

        \$loader->load(__DIR__.'/../Fixtures/php/simple.php');

        \$this->assertEquals('foo', \$container->getParameter('foo'), '->load() loads a PHP file resource');
    }

    public function testConfigServices()
    {
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$loader = new PhpFileLoader(\$container = new ContainerBuilder(), new FileLocator());
        \$loader->load(\$fixtures.'/config/services9.php');
        \$container->getDefinition('errored_definition')->addError('Service \"errored_definition\" is broken.');

        \$container->compile();
        \$dumper = new PhpDumper(\$container);
        \$this->assertStringEqualsFile(\$fixtures.'/php/services9_compiled.php', str_replace(str_replace('\\\\', '\\\\\\\\', \$fixtures.\\DIRECTORY_SEPARATOR.'includes'.\\DIRECTORY_SEPARATOR), '%path%', \$dumper->dump()));
    }

    /**
     * @dataProvider provideConfig
     */
    public function testConfig(\$file)
    {
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$loader = new PhpFileLoader(\$container = new ContainerBuilder(), new FileLocator());
        \$loader->load(\$fixtures.'/config/'.\$file.'.php');

        \$container->compile();

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringMatchesFormatFile(\$fixtures.'/config/'.\$file.'.expected.yml', \$dumper->dump());
    }

    public function provideConfig()
    {
        yield ['basic'];
        yield ['object'];
        yield ['defaults'];
        yield ['instanceof'];
        yield ['prototype'];
        yield ['prototype_array'];
        yield ['child'];
        yield ['php7'];
        yield ['anonymous'];
        yield ['lazy_fqcn'];
    }

    public function testAutoConfigureAndChildDefinitionNotAllowed()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"child_service\" cannot have a \"parent\" and also have \"autoconfigure\". Try disabling autoconfiguration for the service.');
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$container = new ContainerBuilder();
        \$loader = new PhpFileLoader(\$container, new FileLocator());
        \$loader->load(\$fixtures.'/config/services_autoconfigure_with_parent.php');
        \$container->compile();
    }

    public function testFactoryShortNotationNotAllowed()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid factory \"factory:method\": the \"service:method\" notation is not available when using PHP-based DI configuration. Use \"[ref(\\'factory\\'), \\'method\\']\" instead.');
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$container = new ContainerBuilder();
        \$loader = new PhpFileLoader(\$container, new FileLocator());
        \$loader->load(\$fixtures.'/config/factory_short_notation.php');
        \$container->compile();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Loader/PhpFileLoaderTest.php";
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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper;
use Symfony\\Component\\DependencyInjection\\Dumper\\YamlDumper;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

class PhpFileLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new PhpFileLoader(new ContainerBuilder(), new FileLocator());

        \$this->assertTrue(\$loader->supports('foo.php'), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns false if the resource is not loadable');
        \$this->assertTrue(\$loader->supports('with_wrong_ext.yml', 'php'), '->supports() returns true if the resource with forced type is loadable');
    }

    public function testLoad()
    {
        \$loader = new PhpFileLoader(\$container = new ContainerBuilder(), new FileLocator());

        \$loader->load(__DIR__.'/../Fixtures/php/simple.php');

        \$this->assertEquals('foo', \$container->getParameter('foo'), '->load() loads a PHP file resource');
    }

    public function testConfigServices()
    {
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$loader = new PhpFileLoader(\$container = new ContainerBuilder(), new FileLocator());
        \$loader->load(\$fixtures.'/config/services9.php');
        \$container->getDefinition('errored_definition')->addError('Service \"errored_definition\" is broken.');

        \$container->compile();
        \$dumper = new PhpDumper(\$container);
        \$this->assertStringEqualsFile(\$fixtures.'/php/services9_compiled.php', str_replace(str_replace('\\\\', '\\\\\\\\', \$fixtures.\\DIRECTORY_SEPARATOR.'includes'.\\DIRECTORY_SEPARATOR), '%path%', \$dumper->dump()));
    }

    /**
     * @dataProvider provideConfig
     */
    public function testConfig(\$file)
    {
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$loader = new PhpFileLoader(\$container = new ContainerBuilder(), new FileLocator());
        \$loader->load(\$fixtures.'/config/'.\$file.'.php');

        \$container->compile();

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringMatchesFormatFile(\$fixtures.'/config/'.\$file.'.expected.yml', \$dumper->dump());
    }

    public function provideConfig()
    {
        yield ['basic'];
        yield ['object'];
        yield ['defaults'];
        yield ['instanceof'];
        yield ['prototype'];
        yield ['prototype_array'];
        yield ['child'];
        yield ['php7'];
        yield ['anonymous'];
        yield ['lazy_fqcn'];
    }

    public function testAutoConfigureAndChildDefinitionNotAllowed()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"child_service\" cannot have a \"parent\" and also have \"autoconfigure\". Try disabling autoconfiguration for the service.');
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$container = new ContainerBuilder();
        \$loader = new PhpFileLoader(\$container, new FileLocator());
        \$loader->load(\$fixtures.'/config/services_autoconfigure_with_parent.php');
        \$container->compile();
    }

    public function testFactoryShortNotationNotAllowed()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid factory \"factory:method\": the \"service:method\" notation is not available when using PHP-based DI configuration. Use \"[ref(\\'factory\\'), \\'method\\']\" instead.');
        \$fixtures = realpath(__DIR__.'/../Fixtures');
        \$container = new ContainerBuilder();
        \$loader = new PhpFileLoader(\$container, new FileLocator());
        \$loader->load(\$fixtures.'/config/factory_short_notation.php');
        \$container->compile();
    }
}
", "vendor/symfony/dependency-injection/Tests/Loader/PhpFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Loader/PhpFileLoaderTest.php");
    }
}
