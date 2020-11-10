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

/* vendor/symfony/dom-crawler/Tests/Field/FormFieldTest.php */
class __TwigTemplate_2795afa9bb78d3261dd524348f8004f2e5edc8eebac4889e838d433f3011cd70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/FormFieldTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/FormFieldTest.php"));

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

use Symfony\\Component\\DomCrawler\\Field\\InputFormField;

class FormFieldTest extends FormFieldTestCase
{
    public function testGetName()
    {
        \$node = \$this->createNode('input', '', ['type' => 'text', 'name' => 'name', 'value' => 'value']);
        \$field = new InputFormField(\$node);

        \$this->assertEquals('name', \$field->getName(), '->getName() returns the name of the field');
    }

    public function testGetSetHasValue()
    {
        \$node = \$this->createNode('input', '', ['type' => 'text', 'name' => 'name', 'value' => 'value']);
        \$field = new InputFormField(\$node);

        \$this->assertEquals('value', \$field->getValue(), '->getValue() returns the value of the field');

        \$field->setValue('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() sets the value of the field');

        \$this->assertTrue(\$field->hasValue(), '->hasValue() always returns true');
    }

    public function testLabelReturnsNullIfNoneIsDefined()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><form><input type=\"text\" id=\"foo\" name=\"foo\" value=\"foo\" /><input type=\"submit\" /></form></html>');

        \$field = new InputFormField(\$dom->getElementById('foo'));
        \$this->assertNull(\$field->getLabel(), '->getLabel() returns null if no label is defined');
    }

    public function testLabelIsAssignedByForAttribute()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><form>
            <label for=\"foo\">Foo label</label>
            <input type=\"text\" id=\"foo\" name=\"foo\" value=\"foo\" />
            <input type=\"submit\" />
        </form></html>');

        \$field = new InputFormField(\$dom->getElementById('foo'));
        \$this->assertEquals('Foo label', \$field->getLabel()->textContent, '->getLabel() returns the associated label');
    }

    public function testLabelIsAssignedByParentingRelation()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><form>
            <label for=\"foo\">Foo label<input type=\"text\" id=\"foo\" name=\"foo\" value=\"foo\" /></label>
            <input type=\"submit\" />
        </form></html>');

        \$field = new InputFormField(\$dom->getElementById('foo'));
        \$this->assertEquals('Foo label', \$field->getLabel()->textContent, '->getLabel() returns the parent label');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/Field/FormFieldTest.php";
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

use Symfony\\Component\\DomCrawler\\Field\\InputFormField;

class FormFieldTest extends FormFieldTestCase
{
    public function testGetName()
    {
        \$node = \$this->createNode('input', '', ['type' => 'text', 'name' => 'name', 'value' => 'value']);
        \$field = new InputFormField(\$node);

        \$this->assertEquals('name', \$field->getName(), '->getName() returns the name of the field');
    }

    public function testGetSetHasValue()
    {
        \$node = \$this->createNode('input', '', ['type' => 'text', 'name' => 'name', 'value' => 'value']);
        \$field = new InputFormField(\$node);

        \$this->assertEquals('value', \$field->getValue(), '->getValue() returns the value of the field');

        \$field->setValue('foo');
        \$this->assertEquals('foo', \$field->getValue(), '->setValue() sets the value of the field');

        \$this->assertTrue(\$field->hasValue(), '->hasValue() always returns true');
    }

    public function testLabelReturnsNullIfNoneIsDefined()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><form><input type=\"text\" id=\"foo\" name=\"foo\" value=\"foo\" /><input type=\"submit\" /></form></html>');

        \$field = new InputFormField(\$dom->getElementById('foo'));
        \$this->assertNull(\$field->getLabel(), '->getLabel() returns null if no label is defined');
    }

    public function testLabelIsAssignedByForAttribute()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><form>
            <label for=\"foo\">Foo label</label>
            <input type=\"text\" id=\"foo\" name=\"foo\" value=\"foo\" />
            <input type=\"submit\" />
        </form></html>');

        \$field = new InputFormField(\$dom->getElementById('foo'));
        \$this->assertEquals('Foo label', \$field->getLabel()->textContent, '->getLabel() returns the associated label');
    }

    public function testLabelIsAssignedByParentingRelation()
    {
        \$dom = new \\DOMDocument();
        \$dom->loadHTML('<html><form>
            <label for=\"foo\">Foo label<input type=\"text\" id=\"foo\" name=\"foo\" value=\"foo\" /></label>
            <input type=\"submit\" />
        </form></html>');

        \$field = new InputFormField(\$dom->getElementById('foo'));
        \$this->assertEquals('Foo label', \$field->getLabel()->textContent, '->getLabel() returns the parent label');
    }
}
", "vendor/symfony/dom-crawler/Tests/Field/FormFieldTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/Field/FormFieldTest.php");
    }
}
