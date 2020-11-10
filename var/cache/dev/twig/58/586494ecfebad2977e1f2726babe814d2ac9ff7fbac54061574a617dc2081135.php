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

/* vendor/symfony/console/Question/Question.php */
class __TwigTemplate_57409f6099b5d8aecd78b1e47bff5d7cd062d3cea422431c200e1f5a9318f9e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Question/Question.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Question/Question.php"));

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
use Symfony\\Component\\Console\\Exception\\LogicException;

/**
 * Represents a Question.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Question
{
    private \$question;
    private \$attempts;
    private \$hidden = false;
    private \$hiddenFallback = true;
    private \$autocompleterCallback;
    private \$validator;
    private \$default;
    private \$normalizer;

    /**
     * @param string \$question The question to ask to the user
     * @param mixed  \$default  The default answer to return if the user enters nothing
     */
    public function __construct(string \$question, \$default = null)
    {
        \$this->question = \$question;
        \$this->default = \$default;
    }

    /**
     * Returns the question.
     *
     * @return string
     */
    public function getQuestion()
    {
        return \$this->question;
    }

    /**
     * Returns the default answer.
     *
     * @return mixed
     */
    public function getDefault()
    {
        return \$this->default;
    }

    /**
     * Returns whether the user response must be hidden.
     *
     * @return bool
     */
    public function isHidden()
    {
        return \$this->hidden;
    }

    /**
     * Sets whether the user response must be hidden or not.
     *
     * @param bool \$hidden
     *
     * @return \$this
     *
     * @throws LogicException In case the autocompleter is also used
     */
    public function setHidden(\$hidden)
    {
        if (\$this->autocompleterCallback) {
            throw new LogicException('A hidden question cannot use the autocompleter.');
        }

        \$this->hidden = (bool) \$hidden;

        return \$this;
    }

    /**
     * In case the response can not be hidden, whether to fallback on non-hidden question or not.
     *
     * @return bool
     */
    public function isHiddenFallback()
    {
        return \$this->hiddenFallback;
    }

    /**
     * Sets whether to fallback on non-hidden question if the response can not be hidden.
     *
     * @param bool \$fallback
     *
     * @return \$this
     */
    public function setHiddenFallback(\$fallback)
    {
        \$this->hiddenFallback = (bool) \$fallback;

        return \$this;
    }

    /**
     * Gets values for the autocompleter.
     *
     * @return iterable|null
     */
    public function getAutocompleterValues()
    {
        \$callback = \$this->getAutocompleterCallback();

        return \$callback ? \$callback('') : null;
    }

    /**
     * Sets values for the autocompleter.
     *
     * @param iterable|null \$values
     *
     * @return \$this
     *
     * @throws InvalidArgumentException
     * @throws LogicException
     */
    public function setAutocompleterValues(\$values)
    {
        if (\\is_array(\$values)) {
            \$values = \$this->isAssoc(\$values) ? array_merge(array_keys(\$values), array_values(\$values)) : array_values(\$values);

            \$callback = static function () use (\$values) {
                return \$values;
            };
        } elseif (\$values instanceof \\Traversable) {
            \$valueCache = null;
            \$callback = static function () use (\$values, &\$valueCache) {
                return \$valueCache ?? \$valueCache = iterator_to_array(\$values, false);
            };
        } elseif (null === \$values) {
            \$callback = null;
        } else {
            throw new InvalidArgumentException('Autocompleter values can be either an array, \"null\" or a \"Traversable\" object.');
        }

        return \$this->setAutocompleterCallback(\$callback);
    }

    /**
     * Gets the callback function used for the autocompleter.
     */
    public function getAutocompleterCallback(): ?callable
    {
        return \$this->autocompleterCallback;
    }

    /**
     * Sets the callback function used for the autocompleter.
     *
     * The callback is passed the user input as argument and should return an iterable of corresponding suggestions.
     *
     * @return \$this
     */
    public function setAutocompleterCallback(callable \$callback = null): self
    {
        if (\$this->hidden && null !== \$callback) {
            throw new LogicException('A hidden question cannot use the autocompleter.');
        }

        \$this->autocompleterCallback = \$callback;

        return \$this;
    }

    /**
     * Sets a validator for the question.
     *
     * @return \$this
     */
    public function setValidator(callable \$validator = null)
    {
        \$this->validator = \$validator;

        return \$this;
    }

    /**
     * Gets the validator for the question.
     *
     * @return callable|null
     */
    public function getValidator()
    {
        return \$this->validator;
    }

    /**
     * Sets the maximum number of attempts.
     *
     * Null means an unlimited number of attempts.
     *
     * @param int|null \$attempts
     *
     * @return \$this
     *
     * @throws InvalidArgumentException in case the number of attempts is invalid
     */
    public function setMaxAttempts(\$attempts)
    {
        if (null !== \$attempts && \$attempts < 1) {
            throw new InvalidArgumentException('Maximum number of attempts must be a positive value.');
        }

        \$this->attempts = \$attempts;

        return \$this;
    }

    /**
     * Gets the maximum number of attempts.
     *
     * Null means an unlimited number of attempts.
     *
     * @return int|null
     */
    public function getMaxAttempts()
    {
        return \$this->attempts;
    }

    /**
     * Sets a normalizer for the response.
     *
     * The normalizer can be a callable (a string), a closure or a class implementing __invoke.
     *
     * @return \$this
     */
    public function setNormalizer(callable \$normalizer)
    {
        \$this->normalizer = \$normalizer;

        return \$this;
    }

    /**
     * Gets the normalizer for the response.
     *
     * The normalizer can ba a callable (a string), a closure or a class implementing __invoke.
     *
     * @return callable|null
     */
    public function getNormalizer()
    {
        return \$this->normalizer;
    }

    protected function isAssoc(\$array)
    {
        return (bool) \\count(array_filter(array_keys(\$array), 'is_string'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Question/Question.php";
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
use Symfony\\Component\\Console\\Exception\\LogicException;

/**
 * Represents a Question.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Question
{
    private \$question;
    private \$attempts;
    private \$hidden = false;
    private \$hiddenFallback = true;
    private \$autocompleterCallback;
    private \$validator;
    private \$default;
    private \$normalizer;

    /**
     * @param string \$question The question to ask to the user
     * @param mixed  \$default  The default answer to return if the user enters nothing
     */
    public function __construct(string \$question, \$default = null)
    {
        \$this->question = \$question;
        \$this->default = \$default;
    }

    /**
     * Returns the question.
     *
     * @return string
     */
    public function getQuestion()
    {
        return \$this->question;
    }

    /**
     * Returns the default answer.
     *
     * @return mixed
     */
    public function getDefault()
    {
        return \$this->default;
    }

    /**
     * Returns whether the user response must be hidden.
     *
     * @return bool
     */
    public function isHidden()
    {
        return \$this->hidden;
    }

    /**
     * Sets whether the user response must be hidden or not.
     *
     * @param bool \$hidden
     *
     * @return \$this
     *
     * @throws LogicException In case the autocompleter is also used
     */
    public function setHidden(\$hidden)
    {
        if (\$this->autocompleterCallback) {
            throw new LogicException('A hidden question cannot use the autocompleter.');
        }

        \$this->hidden = (bool) \$hidden;

        return \$this;
    }

    /**
     * In case the response can not be hidden, whether to fallback on non-hidden question or not.
     *
     * @return bool
     */
    public function isHiddenFallback()
    {
        return \$this->hiddenFallback;
    }

    /**
     * Sets whether to fallback on non-hidden question if the response can not be hidden.
     *
     * @param bool \$fallback
     *
     * @return \$this
     */
    public function setHiddenFallback(\$fallback)
    {
        \$this->hiddenFallback = (bool) \$fallback;

        return \$this;
    }

    /**
     * Gets values for the autocompleter.
     *
     * @return iterable|null
     */
    public function getAutocompleterValues()
    {
        \$callback = \$this->getAutocompleterCallback();

        return \$callback ? \$callback('') : null;
    }

    /**
     * Sets values for the autocompleter.
     *
     * @param iterable|null \$values
     *
     * @return \$this
     *
     * @throws InvalidArgumentException
     * @throws LogicException
     */
    public function setAutocompleterValues(\$values)
    {
        if (\\is_array(\$values)) {
            \$values = \$this->isAssoc(\$values) ? array_merge(array_keys(\$values), array_values(\$values)) : array_values(\$values);

            \$callback = static function () use (\$values) {
                return \$values;
            };
        } elseif (\$values instanceof \\Traversable) {
            \$valueCache = null;
            \$callback = static function () use (\$values, &\$valueCache) {
                return \$valueCache ?? \$valueCache = iterator_to_array(\$values, false);
            };
        } elseif (null === \$values) {
            \$callback = null;
        } else {
            throw new InvalidArgumentException('Autocompleter values can be either an array, \"null\" or a \"Traversable\" object.');
        }

        return \$this->setAutocompleterCallback(\$callback);
    }

    /**
     * Gets the callback function used for the autocompleter.
     */
    public function getAutocompleterCallback(): ?callable
    {
        return \$this->autocompleterCallback;
    }

    /**
     * Sets the callback function used for the autocompleter.
     *
     * The callback is passed the user input as argument and should return an iterable of corresponding suggestions.
     *
     * @return \$this
     */
    public function setAutocompleterCallback(callable \$callback = null): self
    {
        if (\$this->hidden && null !== \$callback) {
            throw new LogicException('A hidden question cannot use the autocompleter.');
        }

        \$this->autocompleterCallback = \$callback;

        return \$this;
    }

    /**
     * Sets a validator for the question.
     *
     * @return \$this
     */
    public function setValidator(callable \$validator = null)
    {
        \$this->validator = \$validator;

        return \$this;
    }

    /**
     * Gets the validator for the question.
     *
     * @return callable|null
     */
    public function getValidator()
    {
        return \$this->validator;
    }

    /**
     * Sets the maximum number of attempts.
     *
     * Null means an unlimited number of attempts.
     *
     * @param int|null \$attempts
     *
     * @return \$this
     *
     * @throws InvalidArgumentException in case the number of attempts is invalid
     */
    public function setMaxAttempts(\$attempts)
    {
        if (null !== \$attempts && \$attempts < 1) {
            throw new InvalidArgumentException('Maximum number of attempts must be a positive value.');
        }

        \$this->attempts = \$attempts;

        return \$this;
    }

    /**
     * Gets the maximum number of attempts.
     *
     * Null means an unlimited number of attempts.
     *
     * @return int|null
     */
    public function getMaxAttempts()
    {
        return \$this->attempts;
    }

    /**
     * Sets a normalizer for the response.
     *
     * The normalizer can be a callable (a string), a closure or a class implementing __invoke.
     *
     * @return \$this
     */
    public function setNormalizer(callable \$normalizer)
    {
        \$this->normalizer = \$normalizer;

        return \$this;
    }

    /**
     * Gets the normalizer for the response.
     *
     * The normalizer can ba a callable (a string), a closure or a class implementing __invoke.
     *
     * @return callable|null
     */
    public function getNormalizer()
    {
        return \$this->normalizer;
    }

    protected function isAssoc(\$array)
    {
        return (bool) \\count(array_filter(array_keys(\$array), 'is_string'));
    }
}
", "vendor/symfony/console/Question/Question.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Question/Question.php");
    }
}
