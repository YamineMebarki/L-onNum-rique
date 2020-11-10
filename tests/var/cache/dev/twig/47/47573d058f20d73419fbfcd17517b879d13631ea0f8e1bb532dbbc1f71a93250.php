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

/* vendor/symfony/property-info/Tests/TypeTest.php */
class __TwigTemplate_6aa0e7311b0917a880383159af41615d5360f82ba82ca26053c6fa32257960c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/TypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/TypeTest.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TypeTest extends TestCase
{
    public function testConstruct()
    {
        \$type = new Type('object', true, 'ArrayObject', true, new Type('int'), new Type('string'));

        \$this->assertEquals(Type::BUILTIN_TYPE_OBJECT, \$type->getBuiltinType());
        \$this->assertTrue(\$type->isNullable());
        \$this->assertEquals('ArrayObject', \$type->getClassName());
        \$this->assertTrue(\$type->isCollection());

        \$collectionKeyType = \$type->getCollectionKeyType();
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\Type', \$collectionKeyType);
        \$this->assertEquals(Type::BUILTIN_TYPE_INT, \$collectionKeyType->getBuiltinType());

        \$collectionValueType = \$type->getCollectionValueType();
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\Type', \$collectionValueType);
        \$this->assertEquals(Type::BUILTIN_TYPE_STRING, \$collectionValueType->getBuiltinType());
    }

    public function testIterable()
    {
        \$type = new Type('iterable');
        \$this->assertSame('iterable', \$type->getBuiltinType());
    }

    public function testInvalidType()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('\"foo\" is not a valid PHP type.');
        new Type('foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/TypeTest.php";
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

namespace Symfony\\Component\\PropertyInfo\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TypeTest extends TestCase
{
    public function testConstruct()
    {
        \$type = new Type('object', true, 'ArrayObject', true, new Type('int'), new Type('string'));

        \$this->assertEquals(Type::BUILTIN_TYPE_OBJECT, \$type->getBuiltinType());
        \$this->assertTrue(\$type->isNullable());
        \$this->assertEquals('ArrayObject', \$type->getClassName());
        \$this->assertTrue(\$type->isCollection());

        \$collectionKeyType = \$type->getCollectionKeyType();
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\Type', \$collectionKeyType);
        \$this->assertEquals(Type::BUILTIN_TYPE_INT, \$collectionKeyType->getBuiltinType());

        \$collectionValueType = \$type->getCollectionValueType();
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\Type', \$collectionValueType);
        \$this->assertEquals(Type::BUILTIN_TYPE_STRING, \$collectionValueType->getBuiltinType());
    }

    public function testIterable()
    {
        \$type = new Type('iterable');
        \$this->assertSame('iterable', \$type->getBuiltinType());
    }

    public function testInvalidType()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('\"foo\" is not a valid PHP type.');
        new Type('foo');
    }
}
", "vendor/symfony/property-info/Tests/TypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/TypeTest.php");
    }
}
