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

/* vendor/symfony/console/Question/ChoiceQuestion.php */
class __TwigTemplate_dbfdc08a1519c6fc247f887e494f8d77dbfe138b8b7e334a0e168542e540422b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Question/ChoiceQuestion.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Question/ChoiceQuestion.php"));

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

namespace Symfony\\Component\\Console\\Question;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * Represents a choice question.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ChoiceQuestion extends Question
{
    private \$choices;
    private \$multiselect = false;
    private \$prompt = ' > ';
    private \$errorMessage = 'Value \"%s\" is invalid';

    /**
     * @param string \$question The question to ask to the user
     * @param array  \$choices  The list of available choices
     * @param mixed  \$default  The default answer to return
     */
    public function __construct(string \$question, array \$choices, \$default = null)
    {
        if (!\$choices) {
            throw new \\LogicException('Choice question must have at least 1 choice available.');
        }

        parent::__construct(\$question, \$default);

        \$this->choices = \$choices;
        \$this->setValidator(\$this->getDefaultValidator());
        \$this->setAutocompleterValues(\$choices);
    }

    /**
     * Returns available choices.
     *
     * @return array
     */
    public function getChoices()
    {
        return \$this->choices;
    }

    /**
     * Sets multiselect option.
     *
     * When multiselect is set to true, multiple choices can be answered.
     *
     * @param bool \$multiselect
     *
     * @return \$this
     */
    public function setMultiselect(\$multiselect)
    {
        \$this->multiselect = \$multiselect;
        \$this->setValidator(\$this->getDefaultValidator());

        return \$this;
    }

    /**
     * Returns whether the choices are multiselect.
     *
     * @return bool
     */
    public function isMultiselect()
    {
        return \$this->multiselect;
    }

    /**
     * Gets the prompt for choices.
     *
     * @return string
     */
    public function getPrompt()
    {
        return \$this->prompt;
    }

    /**
     * Sets the prompt for choices.
     *
     * @param string \$prompt
     *
     * @return \$this
     */
    public function setPrompt(\$prompt)
    {
        \$this->prompt = \$prompt;

        return \$this;
    }

    /**
     * Sets the error message for invalid values.
     *
     * The error message has a string placeholder (%s) for the invalid value.
     *
     * @param string \$errorMessage
     *
     * @return \$this
     */
    public function setErrorMessage(\$errorMessage)
    {
        \$this->errorMessage = \$errorMessage;
        \$this->setValidator(\$this->getDefaultValidator());

        return \$this;
    }

    private function getDefaultValidator(): callable
    {
        \$choices = \$this->choices;
        \$errorMessage = \$this->errorMessage;
        \$multiselect = \$this->multiselect;
        \$isAssoc = \$this->isAssoc(\$choices);

        return function (\$selected) use (\$choices, \$errorMessage, \$multiselect, \$isAssoc) {
            if (\$multiselect) {
                // Check for a separated comma values
                if (!preg_match('/^[^,]+(?:,[^,]+)*\$/', \$selected, \$matches)) {
                    throw new InvalidArgumentException(sprintf(\$errorMessage, \$selected));
                }

                \$selectedChoices = array_map('trim', explode(',', \$selected));
            } else {
                \$selectedChoices = [trim(\$selected)];
            }

            \$multiselectChoices = [];
            foreach (\$selectedChoices as \$value) {
                \$results = [];
                foreach (\$choices as \$key => \$choice) {
                    if (\$choice === \$value) {
                        \$results[] = \$key;
                    }
                }

                if (\\count(\$results) > 1) {
                    throw new InvalidArgumentException(sprintf('The provided answer is ambiguous. Value should be one of %s.', implode(' or ', \$results)));
                }

                \$result = array_search(\$value, \$choices);

                if (!\$isAssoc) {
                    if (false !== \$result) {
                        \$result = \$choices[\$result];
                    } elseif (isset(\$choices[\$value])) {
                        \$result = \$choices[\$value];
                    }
                } elseif (false === \$result && isset(\$choices[\$value])) {
                    \$result = \$value;
                }

                if (false === \$result) {
                    throw new InvalidArgumentException(sprintf(\$errorMessage, \$value));
                }

                \$multiselectChoices[] = (string) \$result;
            }

            if (\$multiselect) {
                return \$multiselectChoices;
            }

            return current(\$multiselectChoices);
        };
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Question/ChoiceQuestion.php";
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

namespace Symfony\\Component\\Console\\Question;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * Represents a choice question.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ChoiceQuestion extends Question
{
    private \$choices;
    private \$multiselect = false;
    private \$prompt = ' > ';
    private \$errorMessage = 'Value \"%s\" is invalid';

    /**
     * @param string \$question The question to ask to the user
     * @param array  \$choices  The list of available choices
     * @param mixed  \$default  The default answer to return
     */
    public function __construct(string \$question, array \$choices, \$default = null)
    {
        if (!\$choices) {
            throw new \\LogicException('Choice question must have at least 1 choice available.');
        }

        parent::__construct(\$question, \$default);

        \$this->choices = \$choices;
        \$this->setValidator(\$this->getDefaultValidator());
        \$this->setAutocompleterValues(\$choices);
    }

    /**
     * Returns available choices.
     *
     * @return array
     */
    public function getChoices()
    {
        return \$this->choices;
    }

    /**
     * Sets multiselect option.
     *
     * When multiselect is set to true, multiple choices can be answered.
     *
     * @param bool \$multiselect
     *
     * @return \$this
     */
    public function setMultiselect(\$multiselect)
    {
        \$this->multiselect = \$multiselect;
        \$this->setValidator(\$this->getDefaultValidator());

        return \$this;
    }

    /**
     * Returns whether the choices are multiselect.
     *
     * @return bool
     */
    public function isMultiselect()
    {
        return \$this->multiselect;
    }

    /**
     * Gets the prompt for choices.
     *
     * @return string
     */
    public function getPrompt()
    {
        return \$this->prompt;
    }

    /**
     * Sets the prompt for choices.
     *
     * @param string \$prompt
     *
     * @return \$this
     */
    public function setPrompt(\$prompt)
    {
        \$this->prompt = \$prompt;

        return \$this;
    }

    /**
     * Sets the error message for invalid values.
     *
     * The error message has a string placeholder (%s) for the invalid value.
     *
     * @param string \$errorMessage
     *
     * @return \$this
     */
    public function setErrorMessage(\$errorMessage)
    {
        \$this->errorMessage = \$errorMessage;
        \$this->setValidator(\$this->getDefaultValidator());

        return \$this;
    }

    private function getDefaultValidator(): callable
    {
        \$choices = \$this->choices;
        \$errorMessage = \$this->errorMessage;
        \$multiselect = \$this->multiselect;
        \$isAssoc = \$this->isAssoc(\$choices);

        return function (\$selected) use (\$choices, \$errorMessage, \$multiselect, \$isAssoc) {
            if (\$multiselect) {
                // Check for a separated comma values
                if (!preg_match('/^[^,]+(?:,[^,]+)*\$/', \$selected, \$matches)) {
                    throw new InvalidArgumentException(sprintf(\$errorMessage, \$selected));
                }

                \$selectedChoices = array_map('trim', explode(',', \$selected));
            } else {
                \$selectedChoices = [trim(\$selected)];
            }

            \$multiselectChoices = [];
            foreach (\$selectedChoices as \$value) {
                \$results = [];
                foreach (\$choices as \$key => \$choice) {
                    if (\$choice === \$value) {
                        \$results[] = \$key;
                    }
                }

                if (\\count(\$results) > 1) {
                    throw new InvalidArgumentException(sprintf('The provided answer is ambiguous. Value should be one of %s.', implode(' or ', \$results)));
                }

                \$result = array_search(\$value, \$choices);

                if (!\$isAssoc) {
                    if (false !== \$result) {
                        \$result = \$choices[\$result];
                    } elseif (isset(\$choices[\$value])) {
                        \$result = \$choices[\$value];
                    }
                } elseif (false === \$result && isset(\$choices[\$value])) {
                    \$result = \$value;
                }

                if (false === \$result) {
                    throw new InvalidArgumentException(sprintf(\$errorMessage, \$value));
                }

                \$multiselectChoices[] = (string) \$result;
            }

            if (\$multiselect) {
                return \$multiselectChoices;
            }

            return current(\$multiselectChoices);
        };
    }
}
", "vendor/symfony/console/Question/ChoiceQuestion.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Question/ChoiceQuestion.php");
    }
}
