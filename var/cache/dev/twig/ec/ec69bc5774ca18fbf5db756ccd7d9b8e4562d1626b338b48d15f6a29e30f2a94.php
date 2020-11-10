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

/* vendor/symfony/dependency-injection/Tests/Dumper/YamlDumperTest.php */
class __TwigTemplate_64eea36a88821c5c1483491d098e659eabb51dcd1d61f091bb5bbf4ef25f3b8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Dumper/YamlDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Dumper/YamlDumperTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\YamlDumper;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Yaml\\Parser;
use Symfony\\Component\\Yaml\\Yaml;

class YamlDumperTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');
    }

    public function testDump()
    {
        \$dumper = new YamlDumper(\$container = new ContainerBuilder());

        \$this->assertEqualYamlStructure(file_get_contents(self::\$fixturesPath.'/yaml/services1.yml'), \$dumper->dump(), '->dump() dumps an empty container as an empty YAML file');
    }

    public function testAddParameters()
    {
        \$container = include self::\$fixturesPath.'/containers/container8.php';
        \$dumper = new YamlDumper(\$container);
        \$this->assertEqualYamlStructure(file_get_contents(self::\$fixturesPath.'/yaml/services8.yml'), \$dumper->dump(), '->dump() dumps parameters');
    }

    public function testAddService()
    {
        \$container = include self::\$fixturesPath.'/containers/container9.php';
        \$dumper = new YamlDumper(\$container);
        \$this->assertEqualYamlStructure(str_replace('%path%', self::\$fixturesPath.\\DIRECTORY_SEPARATOR.'includes'.\\DIRECTORY_SEPARATOR, file_get_contents(self::\$fixturesPath.'/yaml/services9.yml')), \$dumper->dump(), '->dump() dumps services');

        \$dumper = new YamlDumper(\$container = new ContainerBuilder());
        \$container->register('foo', 'FooClass')->addArgument(new \\stdClass())->setPublic(true);
        try {
            \$dumper->dump();
            \$this->fail('->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\RuntimeException', \$e, '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
            \$this->assertEquals('Unable to dump a service container if a parameter is an object or a resource.', \$e->getMessage(), '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        }
    }

    public function testDumpAutowireData()
    {
        \$container = include self::\$fixturesPath.'/containers/container24.php';
        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services24.yml', \$dumper->dump());
    }

    public function testDumpLoad()
    {
        \$container = new ContainerBuilder();
        \$loader = new YamlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/yaml'));
        \$loader->load('services_dump_load.yml');

        \$this->assertEquals([new Reference('bar', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE)], \$container->getDefinition('foo')->getArguments());

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services_dump_load.yml', \$dumper->dump());
    }

    public function testInlineServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'Class1')
            ->setPublic(true)
            ->addArgument((new Definition('Class2'))
                ->addArgument(new Definition('Class2'))
            )
        ;

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services_inline.yml', \$dumper->dump());
    }

    public function testTaggedArguments()
    {
        \$taggedIterator = new TaggedIteratorArgument('foo', 'barfoo', 'foobar');
        \$container = new ContainerBuilder();
        \$container->register('foo_service', 'Foo')->addTag('foo');
        \$container->register('foo_service_tagged_iterator', 'Bar')->addArgument(\$taggedIterator);
        \$container->register('foo_service_tagged_locator', 'Bar')->addArgument(new ServiceLocatorArgument(\$taggedIterator));
        \$container->register('bar_service_tagged_locator', 'Bar')->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo')));

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services_with_tagged_argument.yml', \$dumper->dump());
    }

    private function assertEqualYamlStructure(\$expected, \$yaml, \$message = '')
    {
        \$parser = new Parser();

        \$this->assertEquals(\$parser->parse(\$expected, Yaml::PARSE_CUSTOM_TAGS), \$parser->parse(\$yaml, Yaml::PARSE_CUSTOM_TAGS), \$message);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Dumper/YamlDumperTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\YamlDumper;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Yaml\\Parser;
use Symfony\\Component\\Yaml\\Yaml;

class YamlDumperTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');
    }

    public function testDump()
    {
        \$dumper = new YamlDumper(\$container = new ContainerBuilder());

        \$this->assertEqualYamlStructure(file_get_contents(self::\$fixturesPath.'/yaml/services1.yml'), \$dumper->dump(), '->dump() dumps an empty container as an empty YAML file');
    }

    public function testAddParameters()
    {
        \$container = include self::\$fixturesPath.'/containers/container8.php';
        \$dumper = new YamlDumper(\$container);
        \$this->assertEqualYamlStructure(file_get_contents(self::\$fixturesPath.'/yaml/services8.yml'), \$dumper->dump(), '->dump() dumps parameters');
    }

    public function testAddService()
    {
        \$container = include self::\$fixturesPath.'/containers/container9.php';
        \$dumper = new YamlDumper(\$container);
        \$this->assertEqualYamlStructure(str_replace('%path%', self::\$fixturesPath.\\DIRECTORY_SEPARATOR.'includes'.\\DIRECTORY_SEPARATOR, file_get_contents(self::\$fixturesPath.'/yaml/services9.yml')), \$dumper->dump(), '->dump() dumps services');

        \$dumper = new YamlDumper(\$container = new ContainerBuilder());
        \$container->register('foo', 'FooClass')->addArgument(new \\stdClass())->setPublic(true);
        try {
            \$dumper->dump();
            \$this->fail('->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\RuntimeException', \$e, '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
            \$this->assertEquals('Unable to dump a service container if a parameter is an object or a resource.', \$e->getMessage(), '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        }
    }

    public function testDumpAutowireData()
    {
        \$container = include self::\$fixturesPath.'/containers/container24.php';
        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services24.yml', \$dumper->dump());
    }

    public function testDumpLoad()
    {
        \$container = new ContainerBuilder();
        \$loader = new YamlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/yaml'));
        \$loader->load('services_dump_load.yml');

        \$this->assertEquals([new Reference('bar', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE)], \$container->getDefinition('foo')->getArguments());

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services_dump_load.yml', \$dumper->dump());
    }

    public function testInlineServices()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'Class1')
            ->setPublic(true)
            ->addArgument((new Definition('Class2'))
                ->addArgument(new Definition('Class2'))
            )
        ;

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services_inline.yml', \$dumper->dump());
    }

    public function testTaggedArguments()
    {
        \$taggedIterator = new TaggedIteratorArgument('foo', 'barfoo', 'foobar');
        \$container = new ContainerBuilder();
        \$container->register('foo_service', 'Foo')->addTag('foo');
        \$container->register('foo_service_tagged_iterator', 'Bar')->addArgument(\$taggedIterator);
        \$container->register('foo_service_tagged_locator', 'Bar')->addArgument(new ServiceLocatorArgument(\$taggedIterator));
        \$container->register('bar_service_tagged_locator', 'Bar')->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo')));

        \$dumper = new YamlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/yaml/services_with_tagged_argument.yml', \$dumper->dump());
    }

    private function assertEqualYamlStructure(\$expected, \$yaml, \$message = '')
    {
        \$parser = new Parser();

        \$this->assertEquals(\$parser->parse(\$expected, Yaml::PARSE_CUSTOM_TAGS), \$parser->parse(\$yaml, Yaml::PARSE_CUSTOM_TAGS), \$message);
    }
}
", "vendor/symfony/dependency-injection/Tests/Dumper/YamlDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Dumper/YamlDumperTest.php");
    }
}
