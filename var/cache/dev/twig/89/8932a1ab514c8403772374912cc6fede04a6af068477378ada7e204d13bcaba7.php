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

/* vendor/symfony/dependency-injection/Tests/Loader/IniFileLoaderTest.php */
class __TwigTemplate_cc1226cca0f6e0ab56eab315183c71da17fa3e24fae68f19771c5c96de06a3e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/IniFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/IniFileLoaderTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader;

class IniFileLoaderTest extends TestCase
{
    protected \$container;
    protected \$loader;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->loader = new IniFileLoader(\$this->container, new FileLocator(realpath(__DIR__.'/../Fixtures/').'/ini'));
    }

    public function testIniFileCanBeLoaded()
    {
        \$this->loader->load('parameters.ini');
        \$this->assertEquals(['foo' => 'bar', 'bar' => '%foo%'], \$this->container->getParameterBag()->all(), '->load() takes a single file name as its first argument');
    }

    /**
     * @dataProvider getTypeConversions
     */
    public function testTypeConversions(\$key, \$value, \$supported)
    {
        \$this->loader->load('types.ini');
        \$parameters = \$this->container->getParameterBag()->all();
        \$this->assertSame(\$value, \$parameters[\$key], '->load() converts values to PHP types');
    }

    /**
     * @dataProvider getTypeConversions
     * This test illustrates where our conversions differs from INI_SCANNER_TYPED introduced in PHP 5.6.1
     */
    public function testTypeConversionsWithNativePhp(\$key, \$value, \$supported)
    {
        if (!\$supported) {
            \$this->markTestSkipped(sprintf('Converting the value \"%s\" to \"%s\" is not supported by the IniFileLoader.', \$key, \$value));
        }

        \$expected = parse_ini_file(__DIR__.'/../Fixtures/ini/types.ini', true, INI_SCANNER_TYPED);
        \$this->assertSame(\$value, \$expected['parameters'][\$key], '->load() converts values to PHP types');
    }

    public function getTypeConversions()
    {
        return [
            ['true_comment', true, true],
            ['true', true, true],
            ['false', false, true],
            ['on', true, true],
            ['off', false, true],
            ['yes', true, true],
            ['no', false, true],
            ['none', false, true],
            ['null', null, true],
            ['constant', PHP_VERSION, true],
            ['12', 12, true],
            ['12_string', '12', true],
            ['12_quoted_number', 12, false], // INI_SCANNER_RAW removes the double quotes
            ['12_comment', 12, true],
            ['12_string_comment', '12', true],
            ['12_quoted_number_comment', 12, false], // INI_SCANNER_RAW removes the double quotes
            ['-12', -12, true],
            ['1', 1, true],
            ['0', 0, true],
            ['0b0110', bindec('0b0110'), false], // not supported by INI_SCANNER_TYPED
            ['11112222333344445555', '1111,2222,3333,4444,5555', true],
            ['0777', 0777, false], // not supported by INI_SCANNER_TYPED
            ['255', 0xFF, false], // not supported by INI_SCANNER_TYPED
            ['100.0', 1e2, false], // not supported by INI_SCANNER_TYPED
            ['-120.0', -1.2E2, false], // not supported by INI_SCANNER_TYPED
            ['-10100.1', -10100.1, false], // not supported by INI_SCANNER_TYPED
            ['-10,100.1', '-10,100.1', true],
        ];
    }

    public function testExceptionIsRaisedWhenIniFileDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The file \"foo.ini\" does not exist (in:');
        \$this->loader->load('foo.ini');
    }

    public function testExceptionIsRaisedWhenIniFileCannotBeParsed()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"nonvalid.ini\" file is not valid.');
        @\$this->loader->load('nonvalid.ini');
    }

    public function testExceptionIsRaisedWhenIniFileIsAlmostValid()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"almostvalid.ini\" file is not valid.');
        @\$this->loader->load('almostvalid.ini');
    }

    public function testSupports()
    {
        \$loader = new IniFileLoader(new ContainerBuilder(), new FileLocator());

        \$this->assertTrue(\$loader->supports('foo.ini'), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns false if the resource is not loadable');
        \$this->assertTrue(\$loader->supports('with_wrong_ext.yml', 'ini'), '->supports() returns true if the resource with forced type is loadable');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Loader/IniFileLoaderTest.php";
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
use Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader;

class IniFileLoaderTest extends TestCase
{
    protected \$container;
    protected \$loader;

    protected function setUp(): void
    {
        \$this->container = new ContainerBuilder();
        \$this->loader = new IniFileLoader(\$this->container, new FileLocator(realpath(__DIR__.'/../Fixtures/').'/ini'));
    }

    public function testIniFileCanBeLoaded()
    {
        \$this->loader->load('parameters.ini');
        \$this->assertEquals(['foo' => 'bar', 'bar' => '%foo%'], \$this->container->getParameterBag()->all(), '->load() takes a single file name as its first argument');
    }

    /**
     * @dataProvider getTypeConversions
     */
    public function testTypeConversions(\$key, \$value, \$supported)
    {
        \$this->loader->load('types.ini');
        \$parameters = \$this->container->getParameterBag()->all();
        \$this->assertSame(\$value, \$parameters[\$key], '->load() converts values to PHP types');
    }

    /**
     * @dataProvider getTypeConversions
     * This test illustrates where our conversions differs from INI_SCANNER_TYPED introduced in PHP 5.6.1
     */
    public function testTypeConversionsWithNativePhp(\$key, \$value, \$supported)
    {
        if (!\$supported) {
            \$this->markTestSkipped(sprintf('Converting the value \"%s\" to \"%s\" is not supported by the IniFileLoader.', \$key, \$value));
        }

        \$expected = parse_ini_file(__DIR__.'/../Fixtures/ini/types.ini', true, INI_SCANNER_TYPED);
        \$this->assertSame(\$value, \$expected['parameters'][\$key], '->load() converts values to PHP types');
    }

    public function getTypeConversions()
    {
        return [
            ['true_comment', true, true],
            ['true', true, true],
            ['false', false, true],
            ['on', true, true],
            ['off', false, true],
            ['yes', true, true],
            ['no', false, true],
            ['none', false, true],
            ['null', null, true],
            ['constant', PHP_VERSION, true],
            ['12', 12, true],
            ['12_string', '12', true],
            ['12_quoted_number', 12, false], // INI_SCANNER_RAW removes the double quotes
            ['12_comment', 12, true],
            ['12_string_comment', '12', true],
            ['12_quoted_number_comment', 12, false], // INI_SCANNER_RAW removes the double quotes
            ['-12', -12, true],
            ['1', 1, true],
            ['0', 0, true],
            ['0b0110', bindec('0b0110'), false], // not supported by INI_SCANNER_TYPED
            ['11112222333344445555', '1111,2222,3333,4444,5555', true],
            ['0777', 0777, false], // not supported by INI_SCANNER_TYPED
            ['255', 0xFF, false], // not supported by INI_SCANNER_TYPED
            ['100.0', 1e2, false], // not supported by INI_SCANNER_TYPED
            ['-120.0', -1.2E2, false], // not supported by INI_SCANNER_TYPED
            ['-10100.1', -10100.1, false], // not supported by INI_SCANNER_TYPED
            ['-10,100.1', '-10,100.1', true],
        ];
    }

    public function testExceptionIsRaisedWhenIniFileDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The file \"foo.ini\" does not exist (in:');
        \$this->loader->load('foo.ini');
    }

    public function testExceptionIsRaisedWhenIniFileCannotBeParsed()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"nonvalid.ini\" file is not valid.');
        @\$this->loader->load('nonvalid.ini');
    }

    public function testExceptionIsRaisedWhenIniFileIsAlmostValid()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"almostvalid.ini\" file is not valid.');
        @\$this->loader->load('almostvalid.ini');
    }

    public function testSupports()
    {
        \$loader = new IniFileLoader(new ContainerBuilder(), new FileLocator());

        \$this->assertTrue(\$loader->supports('foo.ini'), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$loader->supports('foo.foo'), '->supports() returns false if the resource is not loadable');
        \$this->assertTrue(\$loader->supports('with_wrong_ext.yml', 'ini'), '->supports() returns true if the resource with forced type is loadable');
    }
}
", "vendor/symfony/dependency-injection/Tests/Loader/IniFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Loader/IniFileLoaderTest.php");
    }
}
