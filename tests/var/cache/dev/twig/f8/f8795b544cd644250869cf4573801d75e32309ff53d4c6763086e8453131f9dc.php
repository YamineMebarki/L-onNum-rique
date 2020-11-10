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

/* vendor/symfony/dom-crawler/Field/ChoiceFormField.php */
class __TwigTemplate_16790406a8017aaae945f5ccc06b71b9cdc01328929fbfbbd1116dcd79803639 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/ChoiceFormField.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Field/ChoiceFormField.php"));

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
 * ChoiceFormField represents a choice form field.
 *
 * It is constructed from a HTML select tag, or a HTML checkbox, or radio inputs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ChoiceFormField extends FormField
{
    /**
     * @var string
     */
    private \$type;
    /**
     * @var bool
     */
    private \$multiple;
    /**
     * @var array
     */
    private \$options;
    /**
     * @var bool
     */
    private \$validationDisabled = false;

    /**
     * Returns true if the field should be included in the submitted values.
     *
     * @return bool true if the field should be included in the submitted values, false otherwise
     */
    public function hasValue()
    {
        // don't send a value for unchecked checkboxes
        if (\\in_array(\$this->type, ['checkbox', 'radio']) && null === \$this->value) {
            return false;
        }

        return true;
    }

    /**
     * Check if the current selected option is disabled.
     *
     * @return bool
     */
    public function isDisabled()
    {
        if (parent::isDisabled() && 'select' === \$this->type) {
            return true;
        }

        foreach (\$this->options as \$option) {
            if (\$option['value'] == \$this->value && \$option['disabled']) {
                return true;
            }
        }

        return false;
    }

    /**
     * Sets the value of the field.
     *
     * @param string|array \$value The value of the field
     */
    public function select(\$value)
    {
        \$this->setValue(\$value);
    }

    /**
     * Ticks a checkbox.
     *
     * @throws \\LogicException When the type provided is not correct
     */
    public function tick()
    {
        if ('checkbox' !== \$this->type) {
            throw new \\LogicException(sprintf('You cannot tick \"%s\" as it is not a checkbox (%s).', \$this->name, \$this->type));
        }

        \$this->setValue(true);
    }

    /**
     * Unticks a checkbox.
     *
     * @throws \\LogicException When the type provided is not correct
     */
    public function untick()
    {
        if ('checkbox' !== \$this->type) {
            throw new \\LogicException(sprintf('You cannot untick \"%s\" as it is not a checkbox (%s).', \$this->name, \$this->type));
        }

        \$this->setValue(false);
    }

    /**
     * Sets the value of the field.
     *
     * @param string|array|bool \$value The value of the field
     *
     * @throws \\InvalidArgumentException When value type provided is not correct
     */
    public function setValue(\$value)
    {
        if ('checkbox' === \$this->type && false === \$value) {
            // uncheck
            \$this->value = null;
        } elseif ('checkbox' === \$this->type && true === \$value) {
            // check
            \$this->value = \$this->options[0]['value'];
        } else {
            if (\\is_array(\$value)) {
                if (!\$this->multiple) {
                    throw new \\InvalidArgumentException(sprintf('The value for \"%s\" cannot be an array.', \$this->name));
                }

                foreach (\$value as \$v) {
                    if (!\$this->containsOption(\$v, \$this->options)) {
                        throw new \\InvalidArgumentException(sprintf('Input \"%s\" cannot take \"%s\" as a value (possible values: %s).', \$this->name, \$v, implode(', ', \$this->availableOptionValues())));
                    }
                }
            } elseif (!\$this->containsOption(\$value, \$this->options)) {
                throw new \\InvalidArgumentException(sprintf('Input \"%s\" cannot take \"%s\" as a value (possible values: %s).', \$this->name, \$value, implode(', ', \$this->availableOptionValues())));
            }

            if (\$this->multiple) {
                \$value = (array) \$value;
            }

            if (\\is_array(\$value)) {
                \$this->value = \$value;
            } else {
                parent::setValue(\$value);
            }
        }
    }

    /**
     * Adds a choice to the current ones.
     *
     * @throws \\LogicException When choice provided is not multiple nor radio
     *
     * @internal
     */
    public function addChoice(\\DOMElement \$node)
    {
        if (!\$this->multiple && 'radio' !== \$this->type) {
            throw new \\LogicException(sprintf('Unable to add a choice for \"%s\" as it is not multiple or is not a radio button.', \$this->name));
        }

        \$option = \$this->buildOptionValue(\$node);
        \$this->options[] = \$option;

        if (\$node->hasAttribute('checked')) {
            \$this->value = \$option['value'];
        }
    }

    /**
     * Returns the type of the choice field (radio, select, or checkbox).
     *
     * @return string The type
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns true if the field accepts multiple values.
     *
     * @return bool true if the field accepts multiple values, false otherwise
     */
    public function isMultiple()
    {
        return \$this->multiple;
    }

    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('input' !== \$this->node->nodeName && 'select' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('A ChoiceFormField can only be created from an input or select tag (%s given).', \$this->node->nodeName));
        }

        if ('input' === \$this->node->nodeName && 'checkbox' !== strtolower(\$this->node->getAttribute('type')) && 'radio' !== strtolower(\$this->node->getAttribute('type'))) {
            throw new \\LogicException(sprintf('A ChoiceFormField can only be created from an input tag with a type of checkbox or radio (given type is %s).', \$this->node->getAttribute('type')));
        }

        \$this->value = null;
        \$this->options = [];
        \$this->multiple = false;

        if ('input' == \$this->node->nodeName) {
            \$this->type = strtolower(\$this->node->getAttribute('type'));
            \$optionValue = \$this->buildOptionValue(\$this->node);
            \$this->options[] = \$optionValue;

            if (\$this->node->hasAttribute('checked')) {
                \$this->value = \$optionValue['value'];
            }
        } else {
            \$this->type = 'select';
            if (\$this->node->hasAttribute('multiple')) {
                \$this->multiple = true;
                \$this->value = [];
                \$this->name = str_replace('[]', '', \$this->name);
            }

            \$found = false;
            foreach (\$this->xpath->query('descendant::option', \$this->node) as \$option) {
                \$optionValue = \$this->buildOptionValue(\$option);
                \$this->options[] = \$optionValue;

                if (\$option->hasAttribute('selected')) {
                    \$found = true;
                    if (\$this->multiple) {
                        \$this->value[] = \$optionValue['value'];
                    } else {
                        \$this->value = \$optionValue['value'];
                    }
                }
            }

            // if no option is selected and if it is a simple select box, take the first option as the value
            if (!\$found && !\$this->multiple && !empty(\$this->options)) {
                \$this->value = \$this->options[0]['value'];
            }
        }
    }

    /**
     * Returns option value with associated disabled flag.
     */
    private function buildOptionValue(\\DOMElement \$node): array
    {
        \$option = [];

        \$defaultDefaultValue = 'select' === \$this->node->nodeName ? '' : 'on';
        \$defaultValue = (isset(\$node->nodeValue) && !empty(\$node->nodeValue)) ? \$node->nodeValue : \$defaultDefaultValue;
        \$option['value'] = \$node->hasAttribute('value') ? \$node->getAttribute('value') : \$defaultValue;
        \$option['disabled'] = \$node->hasAttribute('disabled');

        return \$option;
    }

    /**
     * Checks whether given value is in the existing options.
     *
     * @param string \$optionValue
     * @param array  \$options
     *
     * @return bool
     */
    public function containsOption(\$optionValue, \$options)
    {
        if (\$this->validationDisabled) {
            return true;
        }

        foreach (\$options as \$option) {
            if (\$option['value'] == \$optionValue) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns list of available field options.
     *
     * @return array
     */
    public function availableOptionValues()
    {
        \$values = [];

        foreach (\$this->options as \$option) {
            \$values[] = \$option['value'];
        }

        return \$values;
    }

    /**
     * Disables the internal validation of the field.
     *
     * @return self
     */
    public function disableValidation()
    {
        \$this->validationDisabled = true;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Field/ChoiceFormField.php";
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
 * ChoiceFormField represents a choice form field.
 *
 * It is constructed from a HTML select tag, or a HTML checkbox, or radio inputs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ChoiceFormField extends FormField
{
    /**
     * @var string
     */
    private \$type;
    /**
     * @var bool
     */
    private \$multiple;
    /**
     * @var array
     */
    private \$options;
    /**
     * @var bool
     */
    private \$validationDisabled = false;

    /**
     * Returns true if the field should be included in the submitted values.
     *
     * @return bool true if the field should be included in the submitted values, false otherwise
     */
    public function hasValue()
    {
        // don't send a value for unchecked checkboxes
        if (\\in_array(\$this->type, ['checkbox', 'radio']) && null === \$this->value) {
            return false;
        }

        return true;
    }

    /**
     * Check if the current selected option is disabled.
     *
     * @return bool
     */
    public function isDisabled()
    {
        if (parent::isDisabled() && 'select' === \$this->type) {
            return true;
        }

        foreach (\$this->options as \$option) {
            if (\$option['value'] == \$this->value && \$option['disabled']) {
                return true;
            }
        }

        return false;
    }

    /**
     * Sets the value of the field.
     *
     * @param string|array \$value The value of the field
     */
    public function select(\$value)
    {
        \$this->setValue(\$value);
    }

    /**
     * Ticks a checkbox.
     *
     * @throws \\LogicException When the type provided is not correct
     */
    public function tick()
    {
        if ('checkbox' !== \$this->type) {
            throw new \\LogicException(sprintf('You cannot tick \"%s\" as it is not a checkbox (%s).', \$this->name, \$this->type));
        }

        \$this->setValue(true);
    }

    /**
     * Unticks a checkbox.
     *
     * @throws \\LogicException When the type provided is not correct
     */
    public function untick()
    {
        if ('checkbox' !== \$this->type) {
            throw new \\LogicException(sprintf('You cannot untick \"%s\" as it is not a checkbox (%s).', \$this->name, \$this->type));
        }

        \$this->setValue(false);
    }

    /**
     * Sets the value of the field.
     *
     * @param string|array|bool \$value The value of the field
     *
     * @throws \\InvalidArgumentException When value type provided is not correct
     */
    public function setValue(\$value)
    {
        if ('checkbox' === \$this->type && false === \$value) {
            // uncheck
            \$this->value = null;
        } elseif ('checkbox' === \$this->type && true === \$value) {
            // check
            \$this->value = \$this->options[0]['value'];
        } else {
            if (\\is_array(\$value)) {
                if (!\$this->multiple) {
                    throw new \\InvalidArgumentException(sprintf('The value for \"%s\" cannot be an array.', \$this->name));
                }

                foreach (\$value as \$v) {
                    if (!\$this->containsOption(\$v, \$this->options)) {
                        throw new \\InvalidArgumentException(sprintf('Input \"%s\" cannot take \"%s\" as a value (possible values: %s).', \$this->name, \$v, implode(', ', \$this->availableOptionValues())));
                    }
                }
            } elseif (!\$this->containsOption(\$value, \$this->options)) {
                throw new \\InvalidArgumentException(sprintf('Input \"%s\" cannot take \"%s\" as a value (possible values: %s).', \$this->name, \$value, implode(', ', \$this->availableOptionValues())));
            }

            if (\$this->multiple) {
                \$value = (array) \$value;
            }

            if (\\is_array(\$value)) {
                \$this->value = \$value;
            } else {
                parent::setValue(\$value);
            }
        }
    }

    /**
     * Adds a choice to the current ones.
     *
     * @throws \\LogicException When choice provided is not multiple nor radio
     *
     * @internal
     */
    public function addChoice(\\DOMElement \$node)
    {
        if (!\$this->multiple && 'radio' !== \$this->type) {
            throw new \\LogicException(sprintf('Unable to add a choice for \"%s\" as it is not multiple or is not a radio button.', \$this->name));
        }

        \$option = \$this->buildOptionValue(\$node);
        \$this->options[] = \$option;

        if (\$node->hasAttribute('checked')) {
            \$this->value = \$option['value'];
        }
    }

    /**
     * Returns the type of the choice field (radio, select, or checkbox).
     *
     * @return string The type
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns true if the field accepts multiple values.
     *
     * @return bool true if the field accepts multiple values, false otherwise
     */
    public function isMultiple()
    {
        return \$this->multiple;
    }

    /**
     * Initializes the form field.
     *
     * @throws \\LogicException When node type is incorrect
     */
    protected function initialize()
    {
        if ('input' !== \$this->node->nodeName && 'select' !== \$this->node->nodeName) {
            throw new \\LogicException(sprintf('A ChoiceFormField can only be created from an input or select tag (%s given).', \$this->node->nodeName));
        }

        if ('input' === \$this->node->nodeName && 'checkbox' !== strtolower(\$this->node->getAttribute('type')) && 'radio' !== strtolower(\$this->node->getAttribute('type'))) {
            throw new \\LogicException(sprintf('A ChoiceFormField can only be created from an input tag with a type of checkbox or radio (given type is %s).', \$this->node->getAttribute('type')));
        }

        \$this->value = null;
        \$this->options = [];
        \$this->multiple = false;

        if ('input' == \$this->node->nodeName) {
            \$this->type = strtolower(\$this->node->getAttribute('type'));
            \$optionValue = \$this->buildOptionValue(\$this->node);
            \$this->options[] = \$optionValue;

            if (\$this->node->hasAttribute('checked')) {
                \$this->value = \$optionValue['value'];
            }
        } else {
            \$this->type = 'select';
            if (\$this->node->hasAttribute('multiple')) {
                \$this->multiple = true;
                \$this->value = [];
                \$this->name = str_replace('[]', '', \$this->name);
            }

            \$found = false;
            foreach (\$this->xpath->query('descendant::option', \$this->node) as \$option) {
                \$optionValue = \$this->buildOptionValue(\$option);
                \$this->options[] = \$optionValue;

                if (\$option->hasAttribute('selected')) {
                    \$found = true;
                    if (\$this->multiple) {
                        \$this->value[] = \$optionValue['value'];
                    } else {
                        \$this->value = \$optionValue['value'];
                    }
                }
            }

            // if no option is selected and if it is a simple select box, take the first option as the value
            if (!\$found && !\$this->multiple && !empty(\$this->options)) {
                \$this->value = \$this->options[0]['value'];
            }
        }
    }

    /**
     * Returns option value with associated disabled flag.
     */
    private function buildOptionValue(\\DOMElement \$node): array
    {
        \$option = [];

        \$defaultDefaultValue = 'select' === \$this->node->nodeName ? '' : 'on';
        \$defaultValue = (isset(\$node->nodeValue) && !empty(\$node->nodeValue)) ? \$node->nodeValue : \$defaultDefaultValue;
        \$option['value'] = \$node->hasAttribute('value') ? \$node->getAttribute('value') : \$defaultValue;
        \$option['disabled'] = \$node->hasAttribute('disabled');

        return \$option;
    }

    /**
     * Checks whether given value is in the existing options.
     *
     * @param string \$optionValue
     * @param array  \$options
     *
     * @return bool
     */
    public function containsOption(\$optionValue, \$options)
    {
        if (\$this->validationDisabled) {
            return true;
        }

        foreach (\$options as \$option) {
            if (\$option['value'] == \$optionValue) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns list of available field options.
     *
     * @return array
     */
    public function availableOptionValues()
    {
        \$values = [];

        foreach (\$this->options as \$option) {
            \$values[] = \$option['value'];
        }

        return \$values;
    }

    /**
     * Disables the internal validation of the field.
     *
     * @return self
     */
    public function disableValidation()
    {
        \$this->validationDisabled = true;

        return \$this;
    }
}
", "vendor/symfony/dom-crawler/Field/ChoiceFormField.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Field/ChoiceFormField.php");
    }
}
