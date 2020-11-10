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

/* vendor/symfony/console/Input/ArrayInput.php */
class __TwigTemplate_8ae8594bedc7375240d9a92feae1b7c84ef324c2568b83c1ff698b662e3ffbda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/ArrayInput.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/ArrayInput.php"));

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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\InvalidOptionException;

/**
 * ArrayInput represents an input provided as an array.
 *
 * Usage:
 *
 *     \$input = new ArrayInput(['command' => 'foo:bar', 'foo' => 'bar', '--bar' => 'foobar']);
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrayInput extends Input
{
    private \$parameters;

    public function __construct(array \$parameters, InputDefinition \$definition = null)
    {
        \$this->parameters = \$parameters;

        parent::__construct(\$definition);
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstArgument()
    {
        foreach (\$this->parameters as \$key => \$value) {
            if (\$key && '-' === \$key[0]) {
                continue;
            }

            return \$value;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameterOption(\$values, \$onlyParams = false)
    {
        \$values = (array) \$values;

        foreach (\$this->parameters as \$k => \$v) {
            if (!\\is_int(\$k)) {
                \$v = \$k;
            }

            if (\$onlyParams && '--' === \$v) {
                return false;
            }

            if (\\in_array(\$v, \$values)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterOption(\$values, \$default = false, \$onlyParams = false)
    {
        \$values = (array) \$values;

        foreach (\$this->parameters as \$k => \$v) {
            if (\$onlyParams && ('--' === \$k || (\\is_int(\$k) && '--' === \$v))) {
                return \$default;
            }

            if (\\is_int(\$k)) {
                if (\\in_array(\$v, \$values)) {
                    return true;
                }
            } elseif (\\in_array(\$k, \$values)) {
                return \$v;
            }
        }

        return \$default;
    }

    /**
     * Returns a stringified representation of the args passed to the command.
     *
     * @return string
     */
    public function __toString()
    {
        \$params = [];
        foreach (\$this->parameters as \$param => \$val) {
            if (\$param && '-' === \$param[0]) {
                if (\\is_array(\$val)) {
                    foreach (\$val as \$v) {
                        \$params[] = \$param.('' != \$v ? '='.\$this->escapeToken(\$v) : '');
                    }
                } else {
                    \$params[] = \$param.('' != \$val ? '='.\$this->escapeToken(\$val) : '');
                }
            } else {
                \$params[] = \\is_array(\$val) ? implode(' ', array_map([\$this, 'escapeToken'], \$val)) : \$this->escapeToken(\$val);
            }
        }

        return implode(' ', \$params);
    }

    /**
     * {@inheritdoc}
     */
    protected function parse()
    {
        foreach (\$this->parameters as \$key => \$value) {
            if ('--' === \$key) {
                return;
            }
            if (0 === strpos(\$key, '--')) {
                \$this->addLongOption(substr(\$key, 2), \$value);
            } elseif (0 === strpos(\$key, '-')) {
                \$this->addShortOption(substr(\$key, 1), \$value);
            } else {
                \$this->addArgument(\$key, \$value);
            }
        }
    }

    /**
     * Adds a short option value.
     *
     * @param string \$shortcut The short option key
     * @param mixed  \$value    The value for the option
     *
     * @throws InvalidOptionException When option given doesn't exist
     */
    private function addShortOption(\$shortcut, \$value)
    {
        if (!\$this->definition->hasShortcut(\$shortcut)) {
            throw new InvalidOptionException(sprintf('The \"-%s\" option does not exist.', \$shortcut));
        }

        \$this->addLongOption(\$this->definition->getOptionForShortcut(\$shortcut)->getName(), \$value);
    }

    /**
     * Adds a long option value.
     *
     * @param string \$name  The long option key
     * @param mixed  \$value The value for the option
     *
     * @throws InvalidOptionException When option given doesn't exist
     * @throws InvalidOptionException When a required value is missing
     */
    private function addLongOption(\$name, \$value)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidOptionException(sprintf('The \"--%s\" option does not exist.', \$name));
        }

        \$option = \$this->definition->getOption(\$name);

        if (null === \$value) {
            if (\$option->isValueRequired()) {
                throw new InvalidOptionException(sprintf('The \"--%s\" option requires a value.', \$name));
            }

            if (!\$option->isValueOptional()) {
                \$value = true;
            }
        }

        \$this->options[\$name] = \$value;
    }

    /**
     * Adds an argument value.
     *
     * @param string \$name  The argument name
     * @param mixed  \$value The value for the argument
     *
     * @throws InvalidArgumentException When argument given doesn't exist
     */
    private function addArgument(\$name, \$value)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        \$this->arguments[\$name] = \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Input/ArrayInput.php";
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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\InvalidOptionException;

/**
 * ArrayInput represents an input provided as an array.
 *
 * Usage:
 *
 *     \$input = new ArrayInput(['command' => 'foo:bar', 'foo' => 'bar', '--bar' => 'foobar']);
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrayInput extends Input
{
    private \$parameters;

    public function __construct(array \$parameters, InputDefinition \$definition = null)
    {
        \$this->parameters = \$parameters;

        parent::__construct(\$definition);
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstArgument()
    {
        foreach (\$this->parameters as \$key => \$value) {
            if (\$key && '-' === \$key[0]) {
                continue;
            }

            return \$value;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameterOption(\$values, \$onlyParams = false)
    {
        \$values = (array) \$values;

        foreach (\$this->parameters as \$k => \$v) {
            if (!\\is_int(\$k)) {
                \$v = \$k;
            }

            if (\$onlyParams && '--' === \$v) {
                return false;
            }

            if (\\in_array(\$v, \$values)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterOption(\$values, \$default = false, \$onlyParams = false)
    {
        \$values = (array) \$values;

        foreach (\$this->parameters as \$k => \$v) {
            if (\$onlyParams && ('--' === \$k || (\\is_int(\$k) && '--' === \$v))) {
                return \$default;
            }

            if (\\is_int(\$k)) {
                if (\\in_array(\$v, \$values)) {
                    return true;
                }
            } elseif (\\in_array(\$k, \$values)) {
                return \$v;
            }
        }

        return \$default;
    }

    /**
     * Returns a stringified representation of the args passed to the command.
     *
     * @return string
     */
    public function __toString()
    {
        \$params = [];
        foreach (\$this->parameters as \$param => \$val) {
            if (\$param && '-' === \$param[0]) {
                if (\\is_array(\$val)) {
                    foreach (\$val as \$v) {
                        \$params[] = \$param.('' != \$v ? '='.\$this->escapeToken(\$v) : '');
                    }
                } else {
                    \$params[] = \$param.('' != \$val ? '='.\$this->escapeToken(\$val) : '');
                }
            } else {
                \$params[] = \\is_array(\$val) ? implode(' ', array_map([\$this, 'escapeToken'], \$val)) : \$this->escapeToken(\$val);
            }
        }

        return implode(' ', \$params);
    }

    /**
     * {@inheritdoc}
     */
    protected function parse()
    {
        foreach (\$this->parameters as \$key => \$value) {
            if ('--' === \$key) {
                return;
            }
            if (0 === strpos(\$key, '--')) {
                \$this->addLongOption(substr(\$key, 2), \$value);
            } elseif (0 === strpos(\$key, '-')) {
                \$this->addShortOption(substr(\$key, 1), \$value);
            } else {
                \$this->addArgument(\$key, \$value);
            }
        }
    }

    /**
     * Adds a short option value.
     *
     * @param string \$shortcut The short option key
     * @param mixed  \$value    The value for the option
     *
     * @throws InvalidOptionException When option given doesn't exist
     */
    private function addShortOption(\$shortcut, \$value)
    {
        if (!\$this->definition->hasShortcut(\$shortcut)) {
            throw new InvalidOptionException(sprintf('The \"-%s\" option does not exist.', \$shortcut));
        }

        \$this->addLongOption(\$this->definition->getOptionForShortcut(\$shortcut)->getName(), \$value);
    }

    /**
     * Adds a long option value.
     *
     * @param string \$name  The long option key
     * @param mixed  \$value The value for the option
     *
     * @throws InvalidOptionException When option given doesn't exist
     * @throws InvalidOptionException When a required value is missing
     */
    private function addLongOption(\$name, \$value)
    {
        if (!\$this->definition->hasOption(\$name)) {
            throw new InvalidOptionException(sprintf('The \"--%s\" option does not exist.', \$name));
        }

        \$option = \$this->definition->getOption(\$name);

        if (null === \$value) {
            if (\$option->isValueRequired()) {
                throw new InvalidOptionException(sprintf('The \"--%s\" option requires a value.', \$name));
            }

            if (!\$option->isValueOptional()) {
                \$value = true;
            }
        }

        \$this->options[\$name] = \$value;
    }

    /**
     * Adds an argument value.
     *
     * @param string \$name  The argument name
     * @param mixed  \$value The value for the argument
     *
     * @throws InvalidArgumentException When argument given doesn't exist
     */
    private function addArgument(\$name, \$value)
    {
        if (!\$this->definition->hasArgument(\$name)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" argument does not exist.', \$name));
        }

        \$this->arguments[\$name] = \$value;
    }
}
", "vendor/symfony/console/Input/ArrayInput.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Input/ArrayInput.php");
    }
}
