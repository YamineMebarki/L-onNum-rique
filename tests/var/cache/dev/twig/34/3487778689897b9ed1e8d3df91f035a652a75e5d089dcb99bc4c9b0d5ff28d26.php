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

/* vendor/symfony/dom-crawler/Tests/Field/ChoiceFormFieldTest.php */
class __TwigTemplate_7ed1d9914292f0389849b90e3af1b4997a8c92d737b0a57c365496200eab75f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/ChoiceFormFieldTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/ChoiceFormFieldTest.php"));

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

namespace Symfony\\Component\\DomCrawler\\Tests\\Field;

use Symfony\\Component\\DomCrawler\\Field\\ChoiceFormField;

class ChoiceFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('textarea', '');
        try {
            \$field = new ChoiceFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not an input or a select');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not an input or a select');
        }

        \$node = \$this->createNode('input', '', ['type' => 'text']);
        try {
            \$field = new ChoiceFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is an input with a type different from checkbox or radio');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is an input with a type different from checkbox or radio');
        }
    }

    public function testGetType()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('radio', \$field->getType(), '->getType() returns radio for radio buttons');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('checkbox', \$field->getType(), '->getType() returns radio for a checkbox');

        \$node = \$this->createNode('select', '');
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('select', \$field->getType(), '->getType() returns radio for a select');
    }

    public function testIsMultiple()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for radio buttons');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for checkboxes');

        \$node = \$this->createNode('select', '');
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for selects without the multiple attribute');

        \$node = \$this->createNode('select', '', ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->isMultiple(), '->isMultiple() returns true for selects with the multiple attribute');

        \$node = \$this->createNode('select', '', ['multiple' => '']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->isMultiple(), '->isMultiple() returns true for selects with an empty multiple attribute');
    }

    public function testSelects()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true for selects');
        \$this->assertEquals('foo', \$field->getValue(), '->getValue() returns the first option if none are selected');
        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false when no multiple attribute is defined');

        \$node = \$this->createSelectNode(['foo' => false, 'bar' => true]);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the selected option');

        \$field->setValue('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() changes the selected option');

        try {
            \$field->setValue('foobar');
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one of the selected options');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one of the selected options');
        }

        try {
            \$field->setValue(['foobar']);
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is an array');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is an array');
        }
    }

    public function testSelectWithEmptyBooleanAttribute()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => true], [], '');
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('bar', \$field->getValue());
    }

    public function testSelectIsDisabled()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => true], ['disabled' => 'disabled']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->isDisabled(), '->isDisabled() returns true for selects with a disabled attribute');
    }

    public function testMultipleSelects()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false], ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals([], \$field->getValue(), '->setValue() returns an empty array if multiple is true and no option is selected');

        \$field->setValue('foo');
        \$this->assertEquals(['foo'], \$field->getValue(), '->setValue() returns an array of options if multiple is true');

        \$field->setValue('bar');
        \$this->assertEquals(['bar'], \$field->getValue(), '->setValue() returns an array of options if multiple is true');

        \$field->setValue(['foo', 'bar']);
        \$this->assertEquals(['foo', 'bar'], \$field->getValue(), '->setValue() returns an array of options if multiple is true');

        \$node = \$this->createSelectNode(['foo' => true, 'bar' => true], ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals(['foo', 'bar'], \$field->getValue(), '->getValue() returns the selected options');

        try {
            \$field->setValue(['foobar']);
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one of the options');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one of the options');
        }
    }

    public function testRadioButtons()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar']);
        \$field->addChoice(\$node);

        \$this->assertFalse(\$field->hasValue(), '->hasValue() returns false when no radio button is selected');
        \$this->assertNull(\$field->getValue(), '->getValue() returns null if no radio button is selected');
        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for radio buttons');

        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar', 'checked' => 'checked']);
        \$field->addChoice(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when a radio button is selected');
        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');

        \$field->setValue('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() changes the selected radio button');

        try {
            \$field->setValue('foobar');
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one of the radio button values');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one of the radio button values');
        }
    }

    public function testRadioButtonsWithEmptyBooleanAttribute()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar', 'checked' => '']);
        \$field->addChoice(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when a radio button is selected');
        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
    }

    public function testRadioButtonIsDisabled()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo', 'disabled' => 'disabled']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar']);
        \$field->addChoice(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'baz', 'disabled' => '']);
        \$field->addChoice(\$node);

        \$field->select('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
        \$this->assertTrue(\$field->isDisabled());

        \$field->select('bar');
        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
        \$this->assertFalse(\$field->isDisabled());

        \$field->select('baz');
        \$this->assertEquals('baz', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
        \$this->assertTrue(\$field->isDisabled());
    }

    public function testCheckboxes()
    {
        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->hasValue(), '->hasValue() returns false when the checkbox is not checked');
        \$this->assertNull(\$field->getValue(), '->getValue() returns null if the checkbox is not checked');
        \$this->assertFalse(\$field->isMultiple(), '->hasValue() returns false for checkboxes');
        try {
            \$field->addChoice(new \\DOMElement('input'));
            \$this->fail('->addChoice() throws a \\LogicException for checkboxes');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException for checkboxes');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when the checkbox is checked');
        \$this->assertEquals('on', \$field->getValue(), '->getValue() returns 1 if the checkbox is checked and has no value attribute');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('foo', \$field->getValue(), '->getValue() returns the value attribute if the checkbox is checked');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$field->setValue(false);
        \$this->assertNull(\$field->getValue(), '->setValue() unchecks the checkbox is value is false');

        \$field->setValue(true);
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() checks the checkbox is value is true');

        try {
            \$field->setValue('bar');
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one from the value attribute');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one from the value attribute');
        }
    }

    public function testCheckboxWithEmptyBooleanAttribute()
    {
        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'value' => 'foo', 'checked' => '']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when the checkbox is checked');
        \$this->assertEquals('foo', \$field->getValue());
    }

    public function testTick()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);

        try {
            \$field->tick();
            \$this->fail('->tick() throws a \\LogicException for select boxes');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->tick() throws a \\LogicException for select boxes');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name']);
        \$field = new ChoiceFormField(\$node);
        \$field->tick();
        \$this->assertEquals('on', \$field->getValue(), '->tick() ticks checkboxes');
    }

    public function testUntick()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);

        try {
            \$field->untick();
            \$this->fail('->untick() throws a \\LogicException for select boxes');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->untick() throws a \\LogicException for select boxes');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked']);
        \$field = new ChoiceFormField(\$node);
        \$field->untick();
        \$this->assertNull(\$field->getValue(), '->untick() unticks checkboxes');
    }

    public function testSelect()
    {
        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked']);
        \$field = new ChoiceFormField(\$node);
        \$field->select(true);
        \$this->assertEquals('on', \$field->getValue(), '->select() changes the value of the field');
        \$field->select(false);
        \$this->assertNull(\$field->getValue(), '->select() changes the value of the field');

        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);
        \$field->select('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->select() changes the selected option');
    }

    public function testOptionWithNoValue()
    {
        \$node = \$this->createSelectNodeWithEmptyOption(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);
        \$this->assertEquals('foo', \$field->getValue());

        \$node = \$this->createSelectNodeWithEmptyOption(['foo' => false, 'bar' => true]);
        \$field = new ChoiceFormField(\$node);
        \$this->assertEquals('bar', \$field->getValue());
        \$field->select('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->select() changes the selected option');
    }

    public function testDisableValidation()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);
        \$field->disableValidation();
        \$field->setValue('foobar');
        \$this->assertEquals('foobar', \$field->getValue(), '->disableValidation() allows to set a value which is not in the selected options.');

        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false], ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);
        \$field->disableValidation();
        \$field->setValue(['foobar']);
        \$this->assertEquals(['foobar'], \$field->getValue(), '->disableValidation() allows to set a value which is not in the selected options.');
    }

    public function testSelectWithEmptyValue()
    {
        \$node = \$this->createSelectNodeWithEmptyOption(['' => true, 'Female' => false, 'Male' => false]);
        \$field = new ChoiceFormField(\$node);

        \$this->assertSame('', \$field->getValue());
    }

    protected function createSelectNode(\$options, \$attributes = [], \$selectedAttrText = 'selected')
    {
        \$document = new \\DOMDocument();
        \$node = \$document->createElement('select');

        foreach (\$attributes as \$name => \$value) {
            \$node->setAttribute(\$name, \$value);
        }
        \$node->setAttribute('name', 'name');

        foreach (\$options as \$value => \$selected) {
            \$option = \$document->createElement('option', \$value);
            \$option->setAttribute('value', \$value);
            if (\$selected) {
                \$option->setAttribute('selected', \$selectedAttrText);
            }
            \$node->appendChild(\$option);
        }

        return \$node;
    }

    protected function createSelectNodeWithEmptyOption(\$options, \$attributes = [])
    {
        \$document = new \\DOMDocument();
        \$node = \$document->createElement('select');

        foreach (\$attributes as \$name => \$value) {
            \$node->setAttribute(\$name, \$value);
        }
        \$node->setAttribute('name', 'name');

        foreach (\$options as \$value => \$selected) {
            \$option = \$document->createElement('option', \$value);
            if (\$selected) {
                \$option->setAttribute('selected', 'selected');
            }
            \$node->appendChild(\$option);
        }

        return \$node;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/Field/ChoiceFormFieldTest.php";
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

namespace Symfony\\Component\\DomCrawler\\Tests\\Field;

use Symfony\\Component\\DomCrawler\\Field\\ChoiceFormField;

class ChoiceFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('textarea', '');
        try {
            \$field = new ChoiceFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not an input or a select');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not an input or a select');
        }

        \$node = \$this->createNode('input', '', ['type' => 'text']);
        try {
            \$field = new ChoiceFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is an input with a type different from checkbox or radio');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is an input with a type different from checkbox or radio');
        }
    }

    public function testGetType()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('radio', \$field->getType(), '->getType() returns radio for radio buttons');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('checkbox', \$field->getType(), '->getType() returns radio for a checkbox');

        \$node = \$this->createNode('select', '');
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('select', \$field->getType(), '->getType() returns radio for a select');
    }

    public function testIsMultiple()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for radio buttons');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for checkboxes');

        \$node = \$this->createNode('select', '');
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for selects without the multiple attribute');

        \$node = \$this->createNode('select', '', ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->isMultiple(), '->isMultiple() returns true for selects with the multiple attribute');

        \$node = \$this->createNode('select', '', ['multiple' => '']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->isMultiple(), '->isMultiple() returns true for selects with an empty multiple attribute');
    }

    public function testSelects()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true for selects');
        \$this->assertEquals('foo', \$field->getValue(), '->getValue() returns the first option if none are selected');
        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false when no multiple attribute is defined');

        \$node = \$this->createSelectNode(['foo' => false, 'bar' => true]);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the selected option');

        \$field->setValue('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() changes the selected option');

        try {
            \$field->setValue('foobar');
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one of the selected options');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one of the selected options');
        }

        try {
            \$field->setValue(['foobar']);
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is an array');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is an array');
        }
    }

    public function testSelectWithEmptyBooleanAttribute()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => true], [], '');
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('bar', \$field->getValue());
    }

    public function testSelectIsDisabled()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => true], ['disabled' => 'disabled']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->isDisabled(), '->isDisabled() returns true for selects with a disabled attribute');
    }

    public function testMultipleSelects()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false], ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals([], \$field->getValue(), '->setValue() returns an empty array if multiple is true and no option is selected');

        \$field->setValue('foo');
        \$this->assertEquals(['foo'], \$field->getValue(), '->setValue() returns an array of options if multiple is true');

        \$field->setValue('bar');
        \$this->assertEquals(['bar'], \$field->getValue(), '->setValue() returns an array of options if multiple is true');

        \$field->setValue(['foo', 'bar']);
        \$this->assertEquals(['foo', 'bar'], \$field->getValue(), '->setValue() returns an array of options if multiple is true');

        \$node = \$this->createSelectNode(['foo' => true, 'bar' => true], ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals(['foo', 'bar'], \$field->getValue(), '->getValue() returns the selected options');

        try {
            \$field->setValue(['foobar']);
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one of the options');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one of the options');
        }
    }

    public function testRadioButtons()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar']);
        \$field->addChoice(\$node);

        \$this->assertFalse(\$field->hasValue(), '->hasValue() returns false when no radio button is selected');
        \$this->assertNull(\$field->getValue(), '->getValue() returns null if no radio button is selected');
        \$this->assertFalse(\$field->isMultiple(), '->isMultiple() returns false for radio buttons');

        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar', 'checked' => 'checked']);
        \$field->addChoice(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when a radio button is selected');
        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');

        \$field->setValue('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() changes the selected radio button');

        try {
            \$field->setValue('foobar');
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one of the radio button values');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one of the radio button values');
        }
    }

    public function testRadioButtonsWithEmptyBooleanAttribute()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar', 'checked' => '']);
        \$field->addChoice(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when a radio button is selected');
        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
    }

    public function testRadioButtonIsDisabled()
    {
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'foo', 'disabled' => 'disabled']);
        \$field = new ChoiceFormField(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'bar']);
        \$field->addChoice(\$node);
        \$node = \$this->createNode('input', '', ['type' => 'radio', 'name' => 'name', 'value' => 'baz', 'disabled' => '']);
        \$field->addChoice(\$node);

        \$field->select('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
        \$this->assertTrue(\$field->isDisabled());

        \$field->select('bar');
        \$this->assertEquals('bar', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
        \$this->assertFalse(\$field->isDisabled());

        \$field->select('baz');
        \$this->assertEquals('baz', \$field->getValue(), '->getValue() returns the value attribute of the selected radio button');
        \$this->assertTrue(\$field->isDisabled());
    }

    public function testCheckboxes()
    {
        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertFalse(\$field->hasValue(), '->hasValue() returns false when the checkbox is not checked');
        \$this->assertNull(\$field->getValue(), '->getValue() returns null if the checkbox is not checked');
        \$this->assertFalse(\$field->isMultiple(), '->hasValue() returns false for checkboxes');
        try {
            \$field->addChoice(new \\DOMElement('input'));
            \$this->fail('->addChoice() throws a \\LogicException for checkboxes');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException for checkboxes');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when the checkbox is checked');
        \$this->assertEquals('on', \$field->getValue(), '->getValue() returns 1 if the checkbox is checked and has no value attribute');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertEquals('foo', \$field->getValue(), '->getValue() returns the value attribute if the checkbox is checked');

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked', 'value' => 'foo']);
        \$field = new ChoiceFormField(\$node);

        \$field->setValue(false);
        \$this->assertNull(\$field->getValue(), '->setValue() unchecks the checkbox is value is false');

        \$field->setValue(true);
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() checks the checkbox is value is true');

        try {
            \$field->setValue('bar');
            \$this->fail('->setValue() throws an \\InvalidArgumentException if the value is not one from the value attribute');
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertTrue(true, '->setValue() throws an \\InvalidArgumentException if the value is not one from the value attribute');
        }
    }

    public function testCheckboxWithEmptyBooleanAttribute()
    {
        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'value' => 'foo', 'checked' => '']);
        \$field = new ChoiceFormField(\$node);

        \$this->assertTrue(\$field->hasValue(), '->hasValue() returns true when the checkbox is checked');
        \$this->assertEquals('foo', \$field->getValue());
    }

    public function testTick()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);

        try {
            \$field->tick();
            \$this->fail('->tick() throws a \\LogicException for select boxes');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->tick() throws a \\LogicException for select boxes');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name']);
        \$field = new ChoiceFormField(\$node);
        \$field->tick();
        \$this->assertEquals('on', \$field->getValue(), '->tick() ticks checkboxes');
    }

    public function testUntick()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);

        try {
            \$field->untick();
            \$this->fail('->untick() throws a \\LogicException for select boxes');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->untick() throws a \\LogicException for select boxes');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked']);
        \$field = new ChoiceFormField(\$node);
        \$field->untick();
        \$this->assertNull(\$field->getValue(), '->untick() unticks checkboxes');
    }

    public function testSelect()
    {
        \$node = \$this->createNode('input', '', ['type' => 'checkbox', 'name' => 'name', 'checked' => 'checked']);
        \$field = new ChoiceFormField(\$node);
        \$field->select(true);
        \$this->assertEquals('on', \$field->getValue(), '->select() changes the value of the field');
        \$field->select(false);
        \$this->assertNull(\$field->getValue(), '->select() changes the value of the field');

        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);
        \$field->select('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->select() changes the selected option');
    }

    public function testOptionWithNoValue()
    {
        \$node = \$this->createSelectNodeWithEmptyOption(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);
        \$this->assertEquals('foo', \$field->getValue());

        \$node = \$this->createSelectNodeWithEmptyOption(['foo' => false, 'bar' => true]);
        \$field = new ChoiceFormField(\$node);
        \$this->assertEquals('bar', \$field->getValue());
        \$field->select('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->select() changes the selected option');
    }

    public function testDisableValidation()
    {
        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false]);
        \$field = new ChoiceFormField(\$node);
        \$field->disableValidation();
        \$field->setValue('foobar');
        \$this->assertEquals('foobar', \$field->getValue(), '->disableValidation() allows to set a value which is not in the selected options.');

        \$node = \$this->createSelectNode(['foo' => false, 'bar' => false], ['multiple' => 'multiple']);
        \$field = new ChoiceFormField(\$node);
        \$field->disableValidation();
        \$field->setValue(['foobar']);
        \$this->assertEquals(['foobar'], \$field->getValue(), '->disableValidation() allows to set a value which is not in the selected options.');
    }

    public function testSelectWithEmptyValue()
    {
        \$node = \$this->createSelectNodeWithEmptyOption(['' => true, 'Female' => false, 'Male' => false]);
        \$field = new ChoiceFormField(\$node);

        \$this->assertSame('', \$field->getValue());
    }

    protected function createSelectNode(\$options, \$attributes = [], \$selectedAttrText = 'selected')
    {
        \$document = new \\DOMDocument();
        \$node = \$document->createElement('select');

        foreach (\$attributes as \$name => \$value) {
            \$node->setAttribute(\$name, \$value);
        }
        \$node->setAttribute('name', 'name');

        foreach (\$options as \$value => \$selected) {
            \$option = \$document->createElement('option', \$value);
            \$option->setAttribute('value', \$value);
            if (\$selected) {
                \$option->setAttribute('selected', \$selectedAttrText);
            }
            \$node->appendChild(\$option);
        }

        return \$node;
    }

    protected function createSelectNodeWithEmptyOption(\$options, \$attributes = [])
    {
        \$document = new \\DOMDocument();
        \$node = \$document->createElement('select');

        foreach (\$attributes as \$name => \$value) {
            \$node->setAttribute(\$name, \$value);
        }
        \$node->setAttribute('name', 'name');

        foreach (\$options as \$value => \$selected) {
            \$option = \$document->createElement('option', \$value);
            if (\$selected) {
                \$option->setAttribute('selected', 'selected');
            }
            \$node->appendChild(\$option);
        }

        return \$node;
    }
}
", "vendor/symfony/dom-crawler/Tests/Field/ChoiceFormFieldTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/Field/ChoiceFormFieldTest.php");
    }
}
