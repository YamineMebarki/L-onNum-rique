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

/* vendor/symfony/dependency-injection/Tests/Dumper/XmlDumperTest.php */
class __TwigTemplate_1a51b022bfdc1b83b9bc58a182ec276dc0167cc924270bdf49d1d6b9f7b5fcc9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Dumper/XmlDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Dumper/XmlDumperTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Dumper\\XmlDumper;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;

class XmlDumperTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');
    }

    public function testDump()
    {
        \$dumper = new XmlDumper(new ContainerBuilder());

        \$this->assertXmlStringEqualsXmlFile(self::\$fixturesPath.'/xml/services1.xml', \$dumper->dump(), '->dump() dumps an empty container as an empty XML file');
    }

    public function testExportParameters()
    {
        \$container = include self::\$fixturesPath.'//containers/container8.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertXmlStringEqualsXmlFile(self::\$fixturesPath.'/xml/services8.xml', \$dumper->dump(), '->dump() dumps parameters');
    }

    public function testAddParameters()
    {
        \$container = include self::\$fixturesPath.'//containers/container8.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertXmlStringEqualsXmlFile(self::\$fixturesPath.'/xml/services8.xml', \$dumper->dump(), '->dump() dumps parameters');
    }

    public function testAddService()
    {
        \$container = include self::\$fixturesPath.'/containers/container9.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(str_replace('%path%', self::\$fixturesPath.\\DIRECTORY_SEPARATOR.'includes'.\\DIRECTORY_SEPARATOR, file_get_contents(self::\$fixturesPath.'/xml/services9.xml')), \$dumper->dump(), '->dump() dumps services');

        \$dumper = new XmlDumper(\$container = new ContainerBuilder());
        \$container->register('foo', 'FooClass')->addArgument(new \\stdClass())->setPublic(true);
        try {
            \$dumper->dump();
            \$this->fail('->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\RuntimeException', \$e, '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
            \$this->assertEquals('Unable to dump a service container if a parameter is an object or a resource.', \$e->getMessage(), '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        }
    }

    public function testDumpAnonymousServices()
    {
        \$container = include self::\$fixturesPath.'/containers/container11.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertEquals('<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"foo\" class=\"FooClass\" public=\"true\">
      <argument type=\"service\">
        <service class=\"BarClass\">
          <argument type=\"service\">
            <service class=\"BazClass\"/>
          </argument>
        </service>
      </argument>
    </service>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
  </services>
</container>
', \$dumper->dump());
    }

    public function testDumpEntities()
    {
        \$container = include self::\$fixturesPath.'/containers/container12.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertEquals(\"<?xml version=\\\"1.0\\\" encoding=\\\"utf-8\\\"?>
<container xmlns=\\\"http://symfony.com/schema/dic/services\\\" xmlns:xsi=\\\"http://www.w3.org/2001/XMLSchema-instance\\\" xsi:schemaLocation=\\\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\\\">
  <services>
    <service id=\\\"service_container\\\" class=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" public=\\\"true\\\" synthetic=\\\"true\\\"/>
    <service id=\\\"foo\\\" class=\\\"FooClass\\Foo\\\" public=\\\"true\\\">
      <tag name=\\\"foo&quot;bar\\bar\\\" foo=\\\"foo&quot;barřž€\\\"/>
      <argument>foo&lt;&gt;&amp;bar</argument>
    </service>
    <service id=\\\"Psr\\Container\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
    <service id=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
  </services>
</container>
\", \$dumper->dump());
    }

    /**
     * @dataProvider provideDecoratedServicesData
     */
    public function testDumpDecoratedServices(\$expectedXmlDump, \$container)
    {
        \$dumper = new XmlDumper(\$container);
        \$this->assertEquals(\$expectedXmlDump, \$dumper->dump());
    }

    public function provideDecoratedServicesData()
    {
        \$fixturesPath = realpath(__DIR__.'/../Fixtures/');

        return [
            [\"<?xml version=\\\"1.0\\\" encoding=\\\"utf-8\\\"?>
<container xmlns=\\\"http://symfony.com/schema/dic/services\\\" xmlns:xsi=\\\"http://www.w3.org/2001/XMLSchema-instance\\\" xsi:schemaLocation=\\\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\\\">
  <services>
    <service id=\\\"service_container\\\" class=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" public=\\\"true\\\" synthetic=\\\"true\\\"/>
    <service id=\\\"foo\\\" class=\\\"FooClass\\Foo\\\" public=\\\"true\\\" decorates=\\\"bar\\\" decoration-inner-name=\\\"bar.woozy\\\"/>
    <service id=\\\"Psr\\Container\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
    <service id=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
  </services>
</container>
\", include \$fixturesPath.'/containers/container15.php'],
            [\"<?xml version=\\\"1.0\\\" encoding=\\\"utf-8\\\"?>
<container xmlns=\\\"http://symfony.com/schema/dic/services\\\" xmlns:xsi=\\\"http://www.w3.org/2001/XMLSchema-instance\\\" xsi:schemaLocation=\\\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\\\">
  <services>
    <service id=\\\"service_container\\\" class=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" public=\\\"true\\\" synthetic=\\\"true\\\"/>
    <service id=\\\"foo\\\" class=\\\"FooClass\\Foo\\\" public=\\\"true\\\" decorates=\\\"bar\\\"/>
    <service id=\\\"Psr\\Container\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
    <service id=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
  </services>
</container>
\", include \$fixturesPath.'/containers/container16.php'],
        ];
    }

    /**
     * @dataProvider provideCompiledContainerData
     */
    public function testCompiledContainerCanBeDumped(\$containerFile)
    {
        \$fixturesPath = __DIR__.'/../Fixtures';
        \$container = require \$fixturesPath.'/containers/'.\$containerFile.'.php';
        \$container->compile();
        \$dumper = new XmlDumper(\$container);
        \$dumper->dump();

        \$this->addToAssertionCount(1);
    }

    public function provideCompiledContainerData()
    {
        return [
            ['container8'],
            ['container9'],
            ['container11'],
            ['container12'],
            ['container14'],
        ];
    }

    public function testDumpInlinedServices()
    {
        \$container = include self::\$fixturesPath.'/containers/container21.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(file_get_contents(self::\$fixturesPath.'/xml/services21.xml'), \$dumper->dump());
    }

    public function testDumpAutowireData()
    {
        \$container = include self::\$fixturesPath.'/containers/container24.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(file_get_contents(self::\$fixturesPath.'/xml/services24.xml'), \$dumper->dump());
    }

    public function testDumpLoad()
    {
        \$container = new ContainerBuilder();
        \$loader = new XmlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/xml'));
        \$loader->load('services_dump_load.xml');

        \$this->assertEquals([new Reference('bar', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE)], \$container->getDefinition('foo')->getArguments());

        \$dumper = new XmlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/xml/services_dump_load.xml', \$dumper->dump());
    }

    public function testTaggedArguments()
    {
        \$taggedIterator = new TaggedIteratorArgument('foo_tag', 'barfoo', 'foobar');
        \$container = new ContainerBuilder();
        \$container->register('foo', 'Foo')->addTag('foo_tag');
        \$container->register('foo_tagged_iterator', 'Bar')
            ->setPublic(true)
            ->addArgument(\$taggedIterator)
        ;
        \$container->register('foo_tagged_locator', 'Bar')
            ->setPublic(true)
            ->addArgument(new ServiceLocatorArgument(\$taggedIterator))
        ;

        \$dumper = new XmlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/xml/services_with_tagged_arguments.xml', \$dumper->dump());
    }

    public function testDumpAbstractServices()
    {
        \$container = include self::\$fixturesPath.'/containers/container_abstract.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(file_get_contents(self::\$fixturesPath.'/xml/services_abstract.xml'), \$dumper->dump());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Dumper/XmlDumperTest.php";
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
use Symfony\\Component\\DependencyInjection\\Dumper\\XmlDumper;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;

class XmlDumperTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');
    }

    public function testDump()
    {
        \$dumper = new XmlDumper(new ContainerBuilder());

        \$this->assertXmlStringEqualsXmlFile(self::\$fixturesPath.'/xml/services1.xml', \$dumper->dump(), '->dump() dumps an empty container as an empty XML file');
    }

    public function testExportParameters()
    {
        \$container = include self::\$fixturesPath.'//containers/container8.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertXmlStringEqualsXmlFile(self::\$fixturesPath.'/xml/services8.xml', \$dumper->dump(), '->dump() dumps parameters');
    }

    public function testAddParameters()
    {
        \$container = include self::\$fixturesPath.'//containers/container8.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertXmlStringEqualsXmlFile(self::\$fixturesPath.'/xml/services8.xml', \$dumper->dump(), '->dump() dumps parameters');
    }

    public function testAddService()
    {
        \$container = include self::\$fixturesPath.'/containers/container9.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(str_replace('%path%', self::\$fixturesPath.\\DIRECTORY_SEPARATOR.'includes'.\\DIRECTORY_SEPARATOR, file_get_contents(self::\$fixturesPath.'/xml/services9.xml')), \$dumper->dump(), '->dump() dumps services');

        \$dumper = new XmlDumper(\$container = new ContainerBuilder());
        \$container->register('foo', 'FooClass')->addArgument(new \\stdClass())->setPublic(true);
        try {
            \$dumper->dump();
            \$this->fail('->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\RuntimeException', \$e, '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
            \$this->assertEquals('Unable to dump a service container if a parameter is an object or a resource.', \$e->getMessage(), '->dump() throws a RuntimeException if the container to be dumped has reference to objects or resources');
        }
    }

    public function testDumpAnonymousServices()
    {
        \$container = include self::\$fixturesPath.'/containers/container11.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertEquals('<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"foo\" class=\"FooClass\" public=\"true\">
      <argument type=\"service\">
        <service class=\"BarClass\">
          <argument type=\"service\">
            <service class=\"BazClass\"/>
          </argument>
        </service>
      </argument>
    </service>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
  </services>
</container>
', \$dumper->dump());
    }

    public function testDumpEntities()
    {
        \$container = include self::\$fixturesPath.'/containers/container12.php';
        \$dumper = new XmlDumper(\$container);
        \$this->assertEquals(\"<?xml version=\\\"1.0\\\" encoding=\\\"utf-8\\\"?>
<container xmlns=\\\"http://symfony.com/schema/dic/services\\\" xmlns:xsi=\\\"http://www.w3.org/2001/XMLSchema-instance\\\" xsi:schemaLocation=\\\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\\\">
  <services>
    <service id=\\\"service_container\\\" class=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" public=\\\"true\\\" synthetic=\\\"true\\\"/>
    <service id=\\\"foo\\\" class=\\\"FooClass\\Foo\\\" public=\\\"true\\\">
      <tag name=\\\"foo&quot;bar\\bar\\\" foo=\\\"foo&quot;barřž€\\\"/>
      <argument>foo&lt;&gt;&amp;bar</argument>
    </service>
    <service id=\\\"Psr\\Container\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
    <service id=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
  </services>
</container>
\", \$dumper->dump());
    }

    /**
     * @dataProvider provideDecoratedServicesData
     */
    public function testDumpDecoratedServices(\$expectedXmlDump, \$container)
    {
        \$dumper = new XmlDumper(\$container);
        \$this->assertEquals(\$expectedXmlDump, \$dumper->dump());
    }

    public function provideDecoratedServicesData()
    {
        \$fixturesPath = realpath(__DIR__.'/../Fixtures/');

        return [
            [\"<?xml version=\\\"1.0\\\" encoding=\\\"utf-8\\\"?>
<container xmlns=\\\"http://symfony.com/schema/dic/services\\\" xmlns:xsi=\\\"http://www.w3.org/2001/XMLSchema-instance\\\" xsi:schemaLocation=\\\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\\\">
  <services>
    <service id=\\\"service_container\\\" class=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" public=\\\"true\\\" synthetic=\\\"true\\\"/>
    <service id=\\\"foo\\\" class=\\\"FooClass\\Foo\\\" public=\\\"true\\\" decorates=\\\"bar\\\" decoration-inner-name=\\\"bar.woozy\\\"/>
    <service id=\\\"Psr\\Container\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
    <service id=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
  </services>
</container>
\", include \$fixturesPath.'/containers/container15.php'],
            [\"<?xml version=\\\"1.0\\\" encoding=\\\"utf-8\\\"?>
<container xmlns=\\\"http://symfony.com/schema/dic/services\\\" xmlns:xsi=\\\"http://www.w3.org/2001/XMLSchema-instance\\\" xsi:schemaLocation=\\\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\\\">
  <services>
    <service id=\\\"service_container\\\" class=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" public=\\\"true\\\" synthetic=\\\"true\\\"/>
    <service id=\\\"foo\\\" class=\\\"FooClass\\Foo\\\" public=\\\"true\\\" decorates=\\\"bar\\\"/>
    <service id=\\\"Psr\\Container\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
    <service id=\\\"Symfony\\Component\\DependencyInjection\\ContainerInterface\\\" alias=\\\"service_container\\\" public=\\\"false\\\"/>
  </services>
</container>
\", include \$fixturesPath.'/containers/container16.php'],
        ];
    }

    /**
     * @dataProvider provideCompiledContainerData
     */
    public function testCompiledContainerCanBeDumped(\$containerFile)
    {
        \$fixturesPath = __DIR__.'/../Fixtures';
        \$container = require \$fixturesPath.'/containers/'.\$containerFile.'.php';
        \$container->compile();
        \$dumper = new XmlDumper(\$container);
        \$dumper->dump();

        \$this->addToAssertionCount(1);
    }

    public function provideCompiledContainerData()
    {
        return [
            ['container8'],
            ['container9'],
            ['container11'],
            ['container12'],
            ['container14'],
        ];
    }

    public function testDumpInlinedServices()
    {
        \$container = include self::\$fixturesPath.'/containers/container21.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(file_get_contents(self::\$fixturesPath.'/xml/services21.xml'), \$dumper->dump());
    }

    public function testDumpAutowireData()
    {
        \$container = include self::\$fixturesPath.'/containers/container24.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(file_get_contents(self::\$fixturesPath.'/xml/services24.xml'), \$dumper->dump());
    }

    public function testDumpLoad()
    {
        \$container = new ContainerBuilder();
        \$loader = new XmlFileLoader(\$container, new FileLocator(self::\$fixturesPath.'/xml'));
        \$loader->load('services_dump_load.xml');

        \$this->assertEquals([new Reference('bar', ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE)], \$container->getDefinition('foo')->getArguments());

        \$dumper = new XmlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/xml/services_dump_load.xml', \$dumper->dump());
    }

    public function testTaggedArguments()
    {
        \$taggedIterator = new TaggedIteratorArgument('foo_tag', 'barfoo', 'foobar');
        \$container = new ContainerBuilder();
        \$container->register('foo', 'Foo')->addTag('foo_tag');
        \$container->register('foo_tagged_iterator', 'Bar')
            ->setPublic(true)
            ->addArgument(\$taggedIterator)
        ;
        \$container->register('foo_tagged_locator', 'Bar')
            ->setPublic(true)
            ->addArgument(new ServiceLocatorArgument(\$taggedIterator))
        ;

        \$dumper = new XmlDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/xml/services_with_tagged_arguments.xml', \$dumper->dump());
    }

    public function testDumpAbstractServices()
    {
        \$container = include self::\$fixturesPath.'/containers/container_abstract.php';
        \$dumper = new XmlDumper(\$container);

        \$this->assertEquals(file_get_contents(self::\$fixturesPath.'/xml/services_abstract.xml'), \$dumper->dump());
    }
}
", "vendor/symfony/dependency-injection/Tests/Dumper/XmlDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Dumper/XmlDumperTest.php");
    }
}
