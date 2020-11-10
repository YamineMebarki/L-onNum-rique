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

/* vendor/symfony/validator/Tests/ConstraintTest.php */
class __TwigTemplate_8f74b7fdc481cbd8f826034b90f90e69f69a4537d032d3b7edecef13a9e1b0e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ConstraintTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ConstraintTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ClassConstraint;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintC;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintWithValue;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintWithValueAsDefault;

class ConstraintTest extends TestCase
{
    public function testSetProperties()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
        ]);

        \$this->assertEquals('foo', \$constraint->property1);
        \$this->assertEquals('bar', \$constraint->property2);
    }

    public function testSetNotExistingPropertyThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');

        new ConstraintA([
            'foo' => 'bar',
        ]);
    }

    public function testMagicPropertiesAreNotAllowed()
    {
        \$constraint = new ConstraintA();

        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');

        \$constraint->foo = 'bar';
    }

    public function testInvalidAndRequiredOptionsPassed()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');

        new ConstraintC([
            'option1' => 'default',
            'foo' => 'bar',
        ]);
    }

    public function testSetDefaultProperty()
    {
        \$constraint = new ConstraintA('foo');

        \$this->assertEquals('foo', \$constraint->property2);
    }

    public function testSetDefaultPropertyDoctrineStyle()
    {
        \$constraint = new ConstraintA(['value' => 'foo']);

        \$this->assertEquals('foo', \$constraint->property2);
    }

    public function testSetDefaultPropertyDoctrineStylePlusOtherProperty()
    {
        \$constraint = new ConstraintA(['value' => 'foo', 'property1' => 'bar']);

        \$this->assertEquals('foo', \$constraint->property2);
        \$this->assertEquals('bar', \$constraint->property1);
    }

    public function testSetDefaultPropertyDoctrineStyleWhenDefaultPropertyIsNamedValue()
    {
        \$constraint = new ConstraintWithValueAsDefault(['value' => 'foo']);

        \$this->assertEquals('foo', \$constraint->value);
        \$this->assertNull(\$constraint->property);
    }

    public function testDontSetDefaultPropertyIfValuePropertyExists()
    {
        \$constraint = new ConstraintWithValue(['value' => 'foo']);

        \$this->assertEquals('foo', \$constraint->value);
        \$this->assertNull(\$constraint->property);
    }

    public function testSetUndefinedDefaultProperty()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        new ConstraintB('foo');
    }

    public function testRequiredOptionsMustBeDefined()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\MissingOptionsException');

        new ConstraintC();
    }

    public function testRequiredOptionsPassed()
    {
        \$constraint = new ConstraintC(['option1' => 'default']);

        \$this->assertSame('default', \$constraint->option1);
    }

    public function testGroupsAreConvertedToArray()
    {
        \$constraint = new ConstraintA(['groups' => 'Foo']);

        \$this->assertEquals(['Foo'], \$constraint->groups);
    }

    public function testAddDefaultGroupAddsGroup()
    {
        \$constraint = new ConstraintA(['groups' => 'Default']);
        \$constraint->addImplicitGroupName('Foo');
        \$this->assertEquals(['Default', 'Foo'], \$constraint->groups);
    }

    public function testAllowsSettingZeroRequiredPropertyValue()
    {
        \$constraint = new ConstraintA(0);
        \$this->assertEquals(0, \$constraint->property2);
    }

    public function testCanCreateConstraintWithNoDefaultOptionAndEmptyArray()
    {
        \$constraint = new ConstraintB([]);

        \$this->assertSame([Constraint::PROPERTY_CONSTRAINT, Constraint::CLASS_CONSTRAINT], \$constraint->getTargets());
    }

    public function testGetTargetsCanBeString()
    {
        \$constraint = new ClassConstraint();

        \$this->assertEquals('class', \$constraint->getTargets());
    }

    public function testGetTargetsCanBeArray()
    {
        \$constraint = new ConstraintA();

        \$this->assertEquals(['property', 'class'], \$constraint->getTargets());
    }

    public function testSerialize()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
        ]);

        \$restoredConstraint = unserialize(serialize(\$constraint));

        \$this->assertEquals(\$constraint, \$restoredConstraint);
    }

    public function testSerializeInitializesGroupsOptionToDefault()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
        ]);

        \$constraint = unserialize(serialize(\$constraint));

        \$expected = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
            'groups' => 'Default',
        ]);

        \$this->assertEquals(\$expected, \$constraint);
    }

    public function testSerializeKeepsCustomGroups()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
            'groups' => 'MyGroup',
        ]);

        \$constraint = unserialize(serialize(\$constraint));

        \$this->assertSame(['MyGroup'], \$constraint->groups);
    }

    public function testGetErrorNameForUnknownCode()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        Constraint::getErrorName(1);
    }

    public function testOptionsAsDefaultOption()
    {
        \$constraint = new ConstraintA(\$options = ['value1']);

        \$this->assertEquals(\$options, \$constraint->property2);

        \$constraint = new ConstraintA(\$options = ['value1', 'property1' => 'value2']);

        \$this->assertEquals(\$options, \$constraint->property2);
    }

    public function testInvalidOptions()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');
        \$this->expectExceptionMessage('The options \"0\", \"5\" do not exist in constraint \"Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA\".');
        new ConstraintA(['property2' => 'foo', 'bar', 5 => 'baz']);
    }

    public function testOptionsWithInvalidInternalPointer()
    {
        \$options = ['property1' => 'foo'];
        next(\$options);
        next(\$options);

        \$constraint = new ConstraintA(\$options);

        \$this->assertEquals('foo', \$constraint->property1);
    }

    public function testAnnotationSetUndefinedDefaultOption()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('No default option is configured for constraint \"Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB\".');
        new ConstraintB(['value' => 1]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/ConstraintTest.php";
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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ClassConstraint;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintC;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintWithValue;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintWithValueAsDefault;

class ConstraintTest extends TestCase
{
    public function testSetProperties()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
        ]);

        \$this->assertEquals('foo', \$constraint->property1);
        \$this->assertEquals('bar', \$constraint->property2);
    }

    public function testSetNotExistingPropertyThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');

        new ConstraintA([
            'foo' => 'bar',
        ]);
    }

    public function testMagicPropertiesAreNotAllowed()
    {
        \$constraint = new ConstraintA();

        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');

        \$constraint->foo = 'bar';
    }

    public function testInvalidAndRequiredOptionsPassed()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');

        new ConstraintC([
            'option1' => 'default',
            'foo' => 'bar',
        ]);
    }

    public function testSetDefaultProperty()
    {
        \$constraint = new ConstraintA('foo');

        \$this->assertEquals('foo', \$constraint->property2);
    }

    public function testSetDefaultPropertyDoctrineStyle()
    {
        \$constraint = new ConstraintA(['value' => 'foo']);

        \$this->assertEquals('foo', \$constraint->property2);
    }

    public function testSetDefaultPropertyDoctrineStylePlusOtherProperty()
    {
        \$constraint = new ConstraintA(['value' => 'foo', 'property1' => 'bar']);

        \$this->assertEquals('foo', \$constraint->property2);
        \$this->assertEquals('bar', \$constraint->property1);
    }

    public function testSetDefaultPropertyDoctrineStyleWhenDefaultPropertyIsNamedValue()
    {
        \$constraint = new ConstraintWithValueAsDefault(['value' => 'foo']);

        \$this->assertEquals('foo', \$constraint->value);
        \$this->assertNull(\$constraint->property);
    }

    public function testDontSetDefaultPropertyIfValuePropertyExists()
    {
        \$constraint = new ConstraintWithValue(['value' => 'foo']);

        \$this->assertEquals('foo', \$constraint->value);
        \$this->assertNull(\$constraint->property);
    }

    public function testSetUndefinedDefaultProperty()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        new ConstraintB('foo');
    }

    public function testRequiredOptionsMustBeDefined()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\MissingOptionsException');

        new ConstraintC();
    }

    public function testRequiredOptionsPassed()
    {
        \$constraint = new ConstraintC(['option1' => 'default']);

        \$this->assertSame('default', \$constraint->option1);
    }

    public function testGroupsAreConvertedToArray()
    {
        \$constraint = new ConstraintA(['groups' => 'Foo']);

        \$this->assertEquals(['Foo'], \$constraint->groups);
    }

    public function testAddDefaultGroupAddsGroup()
    {
        \$constraint = new ConstraintA(['groups' => 'Default']);
        \$constraint->addImplicitGroupName('Foo');
        \$this->assertEquals(['Default', 'Foo'], \$constraint->groups);
    }

    public function testAllowsSettingZeroRequiredPropertyValue()
    {
        \$constraint = new ConstraintA(0);
        \$this->assertEquals(0, \$constraint->property2);
    }

    public function testCanCreateConstraintWithNoDefaultOptionAndEmptyArray()
    {
        \$constraint = new ConstraintB([]);

        \$this->assertSame([Constraint::PROPERTY_CONSTRAINT, Constraint::CLASS_CONSTRAINT], \$constraint->getTargets());
    }

    public function testGetTargetsCanBeString()
    {
        \$constraint = new ClassConstraint();

        \$this->assertEquals('class', \$constraint->getTargets());
    }

    public function testGetTargetsCanBeArray()
    {
        \$constraint = new ConstraintA();

        \$this->assertEquals(['property', 'class'], \$constraint->getTargets());
    }

    public function testSerialize()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
        ]);

        \$restoredConstraint = unserialize(serialize(\$constraint));

        \$this->assertEquals(\$constraint, \$restoredConstraint);
    }

    public function testSerializeInitializesGroupsOptionToDefault()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
        ]);

        \$constraint = unserialize(serialize(\$constraint));

        \$expected = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
            'groups' => 'Default',
        ]);

        \$this->assertEquals(\$expected, \$constraint);
    }

    public function testSerializeKeepsCustomGroups()
    {
        \$constraint = new ConstraintA([
            'property1' => 'foo',
            'property2' => 'bar',
            'groups' => 'MyGroup',
        ]);

        \$constraint = unserialize(serialize(\$constraint));

        \$this->assertSame(['MyGroup'], \$constraint->groups);
    }

    public function testGetErrorNameForUnknownCode()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        Constraint::getErrorName(1);
    }

    public function testOptionsAsDefaultOption()
    {
        \$constraint = new ConstraintA(\$options = ['value1']);

        \$this->assertEquals(\$options, \$constraint->property2);

        \$constraint = new ConstraintA(\$options = ['value1', 'property1' => 'value2']);

        \$this->assertEquals(\$options, \$constraint->property2);
    }

    public function testInvalidOptions()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');
        \$this->expectExceptionMessage('The options \"0\", \"5\" do not exist in constraint \"Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA\".');
        new ConstraintA(['property2' => 'foo', 'bar', 5 => 'baz']);
    }

    public function testOptionsWithInvalidInternalPointer()
    {
        \$options = ['property1' => 'foo'];
        next(\$options);
        next(\$options);

        \$constraint = new ConstraintA(\$options);

        \$this->assertEquals('foo', \$constraint->property1);
    }

    public function testAnnotationSetUndefinedDefaultOption()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('No default option is configured for constraint \"Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB\".');
        new ConstraintB(['value' => 1]);
    }
}
", "vendor/symfony/validator/Tests/ConstraintTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/ConstraintTest.php");
    }
}
