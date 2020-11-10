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

/* vendor/symfony/dom-crawler/Field/FormField.php */
class __TwigTemplate_e0ed29f1a41d4bc2ba8dc15fffdd2473c90bb40aeca7b669797bc458871a080e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/FormField.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/FormField.php"));

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

namespace Symfony\\Component\\DomCrawler\\Field;

/**
 * FormField is the abstract class for all form fields.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class FormField
{
    /**
     * @var \\DOMElement
     */
    protected \$node;
    /**
     * @var string
     */
    protected \$name;
    /**
     * @var string
     */
    protected \$value;
    /**
     * @var \\DOMDocument
     */
    protected \$document;
    /**
     * @var \\DOMXPath
     */
    protected \$xpath;
    /**
     * @var bool
     */
    protected \$disabled;

    /**
     * @param \\DOMElement \$node The node associated with this field
     */
    public function __construct(\\DOMElement \$node)
    {
        \$this->node = \$node;
        \$this->name = \$node->getAttribute('name');
        \$this->xpath = new \\DOMXPath(\$node->ownerDocument);

        \$this->initialize();
    }

    /**
     * Returns the label tag associated to the field or null if none.
     *
     * @return \\DOMElement|null
     */
    public function getLabel()
    {
        \$xpath = new \\DOMXPath(\$this->node->ownerDocument);

        if (\$this->node->hasAttribute('id')) {
            \$labels = \$xpath->query(sprintf('descendant::label[@for=\"%s\"]', \$this->node->getAttribute('id')));
            if (\$labels->length > 0) {
                return \$labels->item(0);
            }
        }

        \$labels = \$xpath->query('ancestor::label[1]', \$this->node);

        return \$labels->length > 0 ? \$labels->item(0) : null;
    }

    /**
     * Returns the name of the field.
     *
     * @return string The name of the field
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Gets the value of the field.
     *
     * @return string|array The value of the field
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Sets the value of the field.
     *
     * @param string|array|bool|null \$value The value of the field
     */
    public function setValue(\$value)
    {
        \$this->value = (string) \$value;
    }

    /**
     * Returns true if the field should be included in the submitted values.
     *
     * @return bool true if the field should be included in the submitted values, false otherwise
     */
    public function hasValue()
    {
        return true;
    }

    /**
     * Check if the current field is disabled.
     *
     * @return bool
     */
    public function isDisabled()
    {
        return \$this->node->hasAttribute('disabled');
    }

    /**
     * Initializes the form field.
     */
    abstract protected function initialize();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Field/FormField.php";
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

namespace Symfony\\Component\\DomCrawler\\Field;

/**
 * FormField is the abstract class for all form fields.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class FormField
{
    /**
     * @var \\DOMElement
     */
    protected \$node;
    /**
     * @var string
     */
    protected \$name;
    /**
     * @var string
     */
    protected \$value;
    /**
     * @var \\DOMDocument
     */
    protected \$document;
    /**
     * @var \\DOMXPath
     */
    protected \$xpath;
    /**
     * @var bool
     */
    protected \$disabled;

    /**
     * @param \\DOMElement \$node The node associated with this field
     */
    public function __construct(\\DOMElement \$node)
    {
        \$this->node = \$node;
        \$this->name = \$node->getAttribute('name');
        \$this->xpath = new \\DOMXPath(\$node->ownerDocument);

        \$this->initialize();
    }

    /**
     * Returns the label tag associated to the field or null if none.
     *
     * @return \\DOMElement|null
     */
    public function getLabel()
    {
        \$xpath = new \\DOMXPath(\$this->node->ownerDocument);

        if (\$this->node->hasAttribute('id')) {
            \$labels = \$xpath->query(sprintf('descendant::label[@for=\"%s\"]', \$this->node->getAttribute('id')));
            if (\$labels->length > 0) {
                return \$labels->item(0);
            }
        }

        \$labels = \$xpath->query('ancestor::label[1]', \$this->node);

        return \$labels->length > 0 ? \$labels->item(0) : null;
    }

    /**
     * Returns the name of the field.
     *
     * @return string The name of the field
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Gets the value of the field.
     *
     * @return string|array The value of the field
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Sets the value of the field.
     *
     * @param string|array|bool|null \$value The value of the field
     */
    public function setValue(\$value)
    {
        \$this->value = (string) \$value;
    }

    /**
     * Returns true if the field should be included in the submitted values.
     *
     * @return bool true if the field should be included in the submitted values, false otherwise
     */
    public function hasValue()
    {
        return true;
    }

    /**
     * Check if the current field is disabled.
     *
     * @return bool
     */
    public function isDisabled()
    {
        return \$this->node->hasAttribute('disabled');
    }

    /**
     * Initializes the form field.
     */
    abstract protected function initialize();
}
", "vendor/symfony/dom-crawler/Field/FormField.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Field/FormField.php");
    }
}
