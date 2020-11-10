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

/* vendor/symfony/dom-crawler/Tests/Field/TextareaFormFieldTest.php */
class __TwigTemplate_c33768077302895e6c1e824bc334266acc91ff27d5942dad411757d56fb697a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/TextareaFormFieldTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Field/TextareaFormFieldTest.php"));

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

use Symfony\\Component\\DomCrawler\\Field\\TextareaFormField;

class TextareaFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('textarea', 'foo bar');
        \$field = new TextareaFormField(\$node);

        \$this->assertEquals('foo bar', \$field->getValue(), '->initialize() sets the value of the field to the textarea node value');

        \$node = \$this->createNode('input', '');
        try {
            \$field = new TextareaFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not a textarea');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not a textarea');
        }

        // Ensure that valid HTML can be used on a textarea.
        \$node = \$this->createNode('textarea', 'foo bar <h1>Baz</h1>');
        \$field = new TextareaFormField(\$node);

        \$this->assertEquals('foo bar <h1>Baz</h1>', \$field->getValue(), '->initialize() sets the value of the field to the textarea node value');

        // Ensure that we don't do any DOM manipulation/validation by passing in
        // \"invalid\" HTML.
        \$node = \$this->createNode('textarea', 'foo bar <h1>Baz</h2>');
        \$field = new TextareaFormField(\$node);

        \$this->assertEquals('foo bar <h1>Baz</h2>', \$field->getValue(), '->initialize() sets the value of the field to the textarea node value');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/Field/TextareaFormFieldTest.php";
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

use Symfony\\Component\\DomCrawler\\Field\\TextareaFormField;

class TextareaFormFieldTest extends FormFieldTestCase
{
    public function testInitialize()
    {
        \$node = \$this->createNode('textarea', 'foo bar');
        \$field = new TextareaFormField(\$node);

        \$this->assertEquals('foo bar', \$field->getValue(), '->initialize() sets the value of the field to the textarea node value');

        \$node = \$this->createNode('input', '');
        try {
            \$field = new TextareaFormField(\$node);
            \$this->fail('->initialize() throws a \\LogicException if the node is not a textarea');
        } catch (\\LogicException \$e) {
            \$this->assertTrue(true, '->initialize() throws a \\LogicException if the node is not a textarea');
        }

        // Ensure that valid HTML can be used on a textarea.
        \$node = \$this->createNode('textarea', 'foo bar <h1>Baz</h1>');
        \$field = new TextareaFormField(\$node);

        \$this->assertEquals('foo bar <h1>Baz</h1>', \$field->getValue(), '->initialize() sets the value of the field to the textarea node value');

        // Ensure that we don't do any DOM manipulation/validation by passing in
        // \"invalid\" HTML.
        \$node = \$this->createNode('textarea', 'foo bar <h1>Baz</h2>');
        \$field = new TextareaFormField(\$node);

        \$this->assertEquals('foo bar <h1>Baz</h2>', \$field->getValue(), '->initialize() sets the value of the field to the textarea node value');
    }
}
", "vendor/symfony/dom-crawler/Tests/Field/TextareaFormFieldTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/Field/TextareaFormFieldTest.php");
    }
}
