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

/* vendor/symfony/dom-crawler/Tests/Field/InputFormFieldTest.php */
class __TwigTemplate_4eb9f4d6bd52a12285ee3a8837bab8493b7ccd3119911ccbf9540976a4d2a129 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/InputFormFieldTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/InputFormFieldTest.php"));

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

class InputFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('input', '', ['type' => 'text', 'name' => 'name', 'value' => 'value']);
        \$field = new InputFormField(\$node);

        \$this->assertEquals('value', \$field->getValue(), '->initialize() sets the value of the field to the value attribute value');

        \$node = \$this->createNode('textarea', '');
        try {
            \$field = new InputFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not an input');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not an input');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox']);
        try {
            \$field = new InputFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is a checkbox');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is a checkbox');
        }

        \$node = \$this->createNode('input', '', ['type' => 'file']);
        try {
            \$field = new InputFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is a file');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is a file');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/Field/InputFormFieldTest.php";
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

class InputFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('input', '', ['type' => 'text', 'name' => 'name', 'value' => 'value']);
        \$field = new InputFormField(\$node);

        \$this->assertEquals('value', \$field->getValue(), '->initialize() sets the value of the field to the value attribute value');

        \$node = \$this->createNode('textarea', '');
        try {
            \$field = new InputFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not an input');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not an input');
        }

        \$node = \$this->createNode('input', '', ['type' => 'checkbox']);
        try {
            \$field = new InputFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is a checkbox');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is a checkbox');
        }

        \$node = \$this->createNode('input', '', ['type' => 'file']);
        try {
            \$field = new InputFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is a file');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is a file');
        }
    }
}
", "vendor/symfony/dom-crawler/Tests/Field/InputFormFieldTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/Field/InputFormFieldTest.php");
    }
}
