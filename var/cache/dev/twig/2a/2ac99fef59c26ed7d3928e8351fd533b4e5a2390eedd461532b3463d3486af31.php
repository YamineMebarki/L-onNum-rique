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

/* vendor/symfony/property-access/Tests/PropertyPathTest.php */
class __TwigTemplate_dde5f75e5575c05b4c959bd4b8afe14706ded34faa49a7e9868b021231a95131 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/PropertyPathTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/PropertyPathTest.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyAccess\\PropertyPath;

class PropertyPathTest extends TestCase
{
    public function testToString()
    {
        \$path = new PropertyPath('reference.traversable[index].property');

        \$this->assertEquals('reference.traversable[index].property', \$path->__toString());
    }

    public function testDotIsRequiredBeforeProperty()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath('[index]property');
    }

    public function testDotCannotBePresentAtTheBeginning()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath('.property');
    }

    public function providePathsContainingUnexpectedCharacters()
    {
        return [
            ['property.'],
            ['property.['],
            ['property..'],
            ['property['],
            ['property[['],
            ['property[.'],
            ['property[]'],
        ];
    }

    /**
     * @dataProvider providePathsContainingUnexpectedCharacters
     */
    public function testUnexpectedCharacters(\$path)
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath(\$path);
    }

    public function testPathCannotBeEmpty()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath('');
    }

    public function testPathCannotBeNull()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException');
        new PropertyPath(null);
    }

    public function testPathCannotBeFalse()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException');
        new PropertyPath(false);
    }

    public function testZeroIsValidPropertyPath()
    {
        \$propertyPath = new PropertyPath('0');

        \$this->assertSame('0', (string) \$propertyPath);
    }

    public function testGetParentWithDot()
    {
        \$propertyPath = new PropertyPath('grandpa.parent.child');

        \$this->assertEquals(new PropertyPath('grandpa.parent'), \$propertyPath->getParent());
    }

    public function testGetParentWithIndex()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertEquals(new PropertyPath('grandpa.parent'), \$propertyPath->getParent());
    }

    public function testGetParentWhenThereIsNoParent()
    {
        \$propertyPath = new PropertyPath('path');

        \$this->assertNull(\$propertyPath->getParent());
    }

    public function testCopyConstructor()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');
        \$copy = new PropertyPath(\$propertyPath);

        \$this->assertEquals(\$propertyPath, \$copy);
    }

    public function testGetElement()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertEquals('child', \$propertyPath->getElement(2));
    }

    public function testGetElementDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->getElement(3);
    }

    public function testGetElementDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->getElement(-1);
    }

    public function testIsProperty()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertTrue(\$propertyPath->isProperty(1));
        \$this->assertFalse(\$propertyPath->isProperty(2));
    }

    public function testIsPropertyDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isProperty(3);
    }

    public function testIsPropertyDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isProperty(-1);
    }

    public function testIsIndex()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertFalse(\$propertyPath->isIndex(1));
        \$this->assertTrue(\$propertyPath->isIndex(2));
    }

    public function testIsIndexDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isIndex(3);
    }

    public function testIsIndexDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isIndex(-1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/PropertyPathTest.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyAccess\\PropertyPath;

class PropertyPathTest extends TestCase
{
    public function testToString()
    {
        \$path = new PropertyPath('reference.traversable[index].property');

        \$this->assertEquals('reference.traversable[index].property', \$path->__toString());
    }

    public function testDotIsRequiredBeforeProperty()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath('[index]property');
    }

    public function testDotCannotBePresentAtTheBeginning()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath('.property');
    }

    public function providePathsContainingUnexpectedCharacters()
    {
        return [
            ['property.'],
            ['property.['],
            ['property..'],
            ['property['],
            ['property[['],
            ['property[.'],
            ['property[]'],
        ];
    }

    /**
     * @dataProvider providePathsContainingUnexpectedCharacters
     */
    public function testUnexpectedCharacters(\$path)
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath(\$path);
    }

    public function testPathCannotBeEmpty()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException');
        new PropertyPath('');
    }

    public function testPathCannotBeNull()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException');
        new PropertyPath(null);
    }

    public function testPathCannotBeFalse()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException');
        new PropertyPath(false);
    }

    public function testZeroIsValidPropertyPath()
    {
        \$propertyPath = new PropertyPath('0');

        \$this->assertSame('0', (string) \$propertyPath);
    }

    public function testGetParentWithDot()
    {
        \$propertyPath = new PropertyPath('grandpa.parent.child');

        \$this->assertEquals(new PropertyPath('grandpa.parent'), \$propertyPath->getParent());
    }

    public function testGetParentWithIndex()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertEquals(new PropertyPath('grandpa.parent'), \$propertyPath->getParent());
    }

    public function testGetParentWhenThereIsNoParent()
    {
        \$propertyPath = new PropertyPath('path');

        \$this->assertNull(\$propertyPath->getParent());
    }

    public function testCopyConstructor()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');
        \$copy = new PropertyPath(\$propertyPath);

        \$this->assertEquals(\$propertyPath, \$copy);
    }

    public function testGetElement()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertEquals('child', \$propertyPath->getElement(2));
    }

    public function testGetElementDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->getElement(3);
    }

    public function testGetElementDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->getElement(-1);
    }

    public function testIsProperty()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertTrue(\$propertyPath->isProperty(1));
        \$this->assertFalse(\$propertyPath->isProperty(2));
    }

    public function testIsPropertyDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isProperty(3);
    }

    public function testIsPropertyDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isProperty(-1);
    }

    public function testIsIndex()
    {
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$this->assertFalse(\$propertyPath->isIndex(1));
        \$this->assertTrue(\$propertyPath->isIndex(2));
    }

    public function testIsIndexDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isIndex(3);
    }

    public function testIsIndexDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$propertyPath = new PropertyPath('grandpa.parent[child]');

        \$propertyPath->isIndex(-1);
    }
}
", "vendor/symfony/property-access/Tests/PropertyPathTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/PropertyPathTest.php");
    }
}
