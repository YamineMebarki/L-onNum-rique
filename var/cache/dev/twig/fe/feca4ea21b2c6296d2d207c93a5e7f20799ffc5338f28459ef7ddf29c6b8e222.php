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

/* vendor/symfony/var-exporter/Tests/InstantiatorTest.php */
class __TwigTemplate_24491c710f31e874c11e695497429839a1d257db9f9593b5b32448edaee82110 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Tests/InstantiatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Tests/InstantiatorTest.php"));

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

namespace Symfony\\Component\\VarExporter\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarExporter\\Instantiator;

class InstantiatorTest extends TestCase
{
    public function testNotFoundClass()
    {
        \$this->expectException('Symfony\\Component\\VarExporter\\Exception\\ClassNotFoundException');
        \$this->expectExceptionMessage('Class \"SomeNotExistingClass\" not found.');
        Instantiator::instantiate('SomeNotExistingClass');
    }

    /**
     * @dataProvider provideFailingInstantiation
     */
    public function testFailingInstantiation(string \$class)
    {
        \$this->expectException('Symfony\\Component\\VarExporter\\Exception\\NotInstantiableTypeException');
        \$this->expectExceptionMessageRegExp('/Type \".*\" is not instantiable\\./');
        Instantiator::instantiate(\$class);
    }

    public function provideFailingInstantiation()
    {
        yield ['ReflectionClass'];
        yield ['SplHeap'];
        yield ['Throwable'];
        yield ['Closure'];
        yield ['SplFileInfo'];
    }

    public function testInstantiate()
    {
        \$this->assertEquals((object) ['p' => 123], Instantiator::instantiate('stdClass', ['p' => 123]));
        \$this->assertEquals((object) ['p' => 123], Instantiator::instantiate('STDcLASS', ['p' => 123]));
        \$this->assertEquals(new \\ArrayObject([123]), Instantiator::instantiate(\\ArrayObject::class, [\"\\0\" => [[123]]]));

        \$expected = [
            \"\\0\".__NAMESPACE__.\"\\Bar\\0priv\" => 123,
            \"\\0\".__NAMESPACE__.\"\\Foo\\0priv\" => 234,
        ];

        \$this->assertSame(\$expected, (array) Instantiator::instantiate(Bar::class, ['priv' => 123], [Foo::class => ['priv' => 234]]));

        \$e = Instantiator::instantiate('Exception', ['foo' => 123, 'trace' => [234]]);

        \$this->assertSame(123, \$e->foo);
        \$this->assertSame([234], \$e->getTrace());
    }
}

class Foo
{
    private \$priv;
}

class Bar extends Foo
{
    private \$priv;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/Tests/InstantiatorTest.php";
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

namespace Symfony\\Component\\VarExporter\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarExporter\\Instantiator;

class InstantiatorTest extends TestCase
{
    public function testNotFoundClass()
    {
        \$this->expectException('Symfony\\Component\\VarExporter\\Exception\\ClassNotFoundException');
        \$this->expectExceptionMessage('Class \"SomeNotExistingClass\" not found.');
        Instantiator::instantiate('SomeNotExistingClass');
    }

    /**
     * @dataProvider provideFailingInstantiation
     */
    public function testFailingInstantiation(string \$class)
    {
        \$this->expectException('Symfony\\Component\\VarExporter\\Exception\\NotInstantiableTypeException');
        \$this->expectExceptionMessageRegExp('/Type \".*\" is not instantiable\\./');
        Instantiator::instantiate(\$class);
    }

    public function provideFailingInstantiation()
    {
        yield ['ReflectionClass'];
        yield ['SplHeap'];
        yield ['Throwable'];
        yield ['Closure'];
        yield ['SplFileInfo'];
    }

    public function testInstantiate()
    {
        \$this->assertEquals((object) ['p' => 123], Instantiator::instantiate('stdClass', ['p' => 123]));
        \$this->assertEquals((object) ['p' => 123], Instantiator::instantiate('STDcLASS', ['p' => 123]));
        \$this->assertEquals(new \\ArrayObject([123]), Instantiator::instantiate(\\ArrayObject::class, [\"\\0\" => [[123]]]));

        \$expected = [
            \"\\0\".__NAMESPACE__.\"\\Bar\\0priv\" => 123,
            \"\\0\".__NAMESPACE__.\"\\Foo\\0priv\" => 234,
        ];

        \$this->assertSame(\$expected, (array) Instantiator::instantiate(Bar::class, ['priv' => 123], [Foo::class => ['priv' => 234]]));

        \$e = Instantiator::instantiate('Exception', ['foo' => 123, 'trace' => [234]]);

        \$this->assertSame(123, \$e->foo);
        \$this->assertSame([234], \$e->getTrace());
    }
}

class Foo
{
    private \$priv;
}

class Bar extends Foo
{
    private \$priv;
}
", "vendor/symfony/var-exporter/Tests/InstantiatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/Tests/InstantiatorTest.php");
    }
}
