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

/* vendor/symfony/console/Input/InputOption.php */
class __TwigTemplate_0c1082610b6fcfd0d5f609a52f39e7845be0210413d7fb77d894f3ec5a619e72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/InputOption.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/InputOption.php"));

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
use Symfony\\Component\\Console\\Exception\\LogicException;

/**
 * Represents a command line option.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputOption
{
    const VALUE_NONE = 1;
    const VALUE_REQUIRED = 2;
    const VALUE_OPTIONAL = 4;
    const VALUE_IS_ARRAY = 8;

    private \$name;
    private \$shortcut;
    private \$mode;
    private \$default;
    private \$description;

    /**
     * @param string                        \$name        The option name
     * @param string|array|null             \$shortcut    The shortcuts, can be null, a string of shortcuts delimited by | or an array of shortcuts
     * @param int|null                      \$mode        The option mode: One of the VALUE_* constants
     * @param string                        \$description A description text
     * @param string|string[]|int|bool|null \$default     The default value (must be null for self::VALUE_NONE)
     *
     * @throws InvalidArgumentException If option mode is invalid or incompatible
     */
    public function __construct(string \$name, \$shortcut = null, int \$mode = null, string \$description = '', \$default = null)
    {
        if (0 === strpos(\$name, '--')) {
            \$name = substr(\$name, 2);
        }

        if (empty(\$name)) {
            throw new InvalidArgumentException('An option name cannot be empty.');
        }

        if (empty(\$shortcut)) {
            \$shortcut = null;
        }

        if (null !== \$shortcut) {
            if (\\is_array(\$shortcut)) {
                \$shortcut = implode('|', \$shortcut);
            }
            \$shortcuts = preg_split('{(\\|)-?}', ltrim(\$shortcut, '-'));
            \$shortcuts = array_filter(\$shortcuts);
            \$shortcut = implode('|', \$shortcuts);

            if (empty(\$shortcut)) {
                throw new InvalidArgumentException('An option shortcut cannot be empty.');
            }
        }

        if (null === \$mode) {
            \$mode = self::VALUE_NONE;
        } elseif (\$mode > 15 || \$mode < 1) {
            throw new InvalidArgumentException(sprintf('Option mode \"%s\" is not valid.', \$mode));
        }

        \$this->name = \$name;
        \$this->shortcut = \$shortcut;
        \$this->mode = \$mode;
        \$this->description = \$description;

        if (\$this->isArray() && !\$this->acceptValue()) {
            throw new InvalidArgumentException('Impossible to have an option mode VALUE_IS_ARRAY if the option does not accept a value.');
        }

        \$this->setDefault(\$default);
    }

    /**
     * Returns the option shortcut.
     *
     * @return string|null The shortcut
     */
    public function getShortcut()
    {
        return \$this->shortcut;
    }

    /**
     * Returns the option name.
     *
     * @return string The name
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns true if the option accepts a value.
     *
     * @return bool true if value mode is not self::VALUE_NONE, false otherwise
     */
    public function acceptValue()
    {
        return \$this->isValueRequired() || \$this->isValueOptional();
    }

    /**
     * Returns true if the option requires a value.
     *
     * @return bool true if value mode is self::VALUE_REQUIRED, false otherwise
     */
    public function isValueRequired()
    {
        return self::VALUE_REQUIRED === (self::VALUE_REQUIRED & \$this->mode);
    }

    /**
     * Returns true if the option takes an optional value.
     *
     * @return bool true if value mode is self::VALUE_OPTIONAL, false otherwise
     */
    public function isValueOptional()
    {
        return self::VALUE_OPTIONAL === (self::VALUE_OPTIONAL & \$this->mode);
    }

    /**
     * Returns true if the option can take multiple values.
     *
     * @return bool true if mode is self::VALUE_IS_ARRAY, false otherwise
     */
    public function isArray()
    {
        return self::VALUE_IS_ARRAY === (self::VALUE_IS_ARRAY & \$this->mode);
    }

    /**
     * Sets the default value.
     *
     * @param string|string[]|int|bool|null \$default The default value
     *
     * @throws LogicException When incorrect default value is given
     */
    public function setDefault(\$default = null)
    {
        if (self::VALUE_NONE === (self::VALUE_NONE & \$this->mode) && null !== \$default) {
            throw new LogicException('Cannot set a default value when using InputOption::VALUE_NONE mode.');
        }

        if (\$this->isArray()) {
            if (null === \$default) {
                \$default = [];
            } elseif (!\\is_array(\$default)) {
                throw new LogicException('A default value for an array option must be an array.');
            }
        }

        \$this->default = \$this->acceptValue() ? \$default : false;
    }

    /**
     * Returns the default value.
     *
     * @return string|string[]|int|bool|null The default value
     */
    public function getDefault()
    {
        return \$this->default;
    }

    /**
     * Returns the description text.
     *
     * @return string The description text
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Checks whether the given option equals this one.
     *
     * @return bool
     */
    public function equals(self \$option)
    {
        return \$option->getName() === \$this->getName()
            && \$option->getShortcut() === \$this->getShortcut()
            && \$option->getDefault() === \$this->getDefault()
            && \$option->isArray() === \$this->isArray()
            && \$option->isValueRequired() === \$this->isValueRequired()
            && \$option->isValueOptional() === \$this->isValueOptional()
        ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Input/InputOption.php";
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
use Symfony\\Component\\Console\\Exception\\LogicException;

/**
 * Represents a command line option.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputOption
{
    const VALUE_NONE = 1;
    const VALUE_REQUIRED = 2;
    const VALUE_OPTIONAL = 4;
    const VALUE_IS_ARRAY = 8;

    private \$name;
    private \$shortcut;
    private \$mode;
    private \$default;
    private \$description;

    /**
     * @param string                        \$name        The option name
     * @param string|array|null             \$shortcut    The shortcuts, can be null, a string of shortcuts delimited by | or an array of shortcuts
     * @param int|null                      \$mode        The option mode: One of the VALUE_* constants
     * @param string                        \$description A description text
     * @param string|string[]|int|bool|null \$default     The default value (must be null for self::VALUE_NONE)
     *
     * @throws InvalidArgumentException If option mode is invalid or incompatible
     */
    public function __construct(string \$name, \$shortcut = null, int \$mode = null, string \$description = '', \$default = null)
    {
        if (0 === strpos(\$name, '--')) {
            \$name = substr(\$name, 2);
        }

        if (empty(\$name)) {
            throw new InvalidArgumentException('An option name cannot be empty.');
        }

        if (empty(\$shortcut)) {
            \$shortcut = null;
        }

        if (null !== \$shortcut) {
            if (\\is_array(\$shortcut)) {
                \$shortcut = implode('|', \$shortcut);
            }
            \$shortcuts = preg_split('{(\\|)-?}', ltrim(\$shortcut, '-'));
            \$shortcuts = array_filter(\$shortcuts);
            \$shortcut = implode('|', \$shortcuts);

            if (empty(\$shortcut)) {
                throw new InvalidArgumentException('An option shortcut cannot be empty.');
            }
        }

        if (null === \$mode) {
            \$mode = self::VALUE_NONE;
        } elseif (\$mode > 15 || \$mode < 1) {
            throw new InvalidArgumentException(sprintf('Option mode \"%s\" is not valid.', \$mode));
        }

        \$this->name = \$name;
        \$this->shortcut = \$shortcut;
        \$this->mode = \$mode;
        \$this->description = \$description;

        if (\$this->isArray() && !\$this->acceptValue()) {
            throw new InvalidArgumentException('Impossible to have an option mode VALUE_IS_ARRAY if the option does not accept a value.');
        }

        \$this->setDefault(\$default);
    }

    /**
     * Returns the option shortcut.
     *
     * @return string|null The shortcut
     */
    public function getShortcut()
    {
        return \$this->shortcut;
    }

    /**
     * Returns the option name.
     *
     * @return string The name
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns true if the option accepts a value.
     *
     * @return bool true if value mode is not self::VALUE_NONE, false otherwise
     */
    public function acceptValue()
    {
        return \$this->isValueRequired() || \$this->isValueOptional();
    }

    /**
     * Returns true if the option requires a value.
     *
     * @return bool true if value mode is self::VALUE_REQUIRED, false otherwise
     */
    public function isValueRequired()
    {
        return self::VALUE_REQUIRED === (self::VALUE_REQUIRED & \$this->mode);
    }

    /**
     * Returns true if the option takes an optional value.
     *
     * @return bool true if value mode is self::VALUE_OPTIONAL, false otherwise
     */
    public function isValueOptional()
    {
        return self::VALUE_OPTIONAL === (self::VALUE_OPTIONAL & \$this->mode);
    }

    /**
     * Returns true if the option can take multiple values.
     *
     * @return bool true if mode is self::VALUE_IS_ARRAY, false otherwise
     */
    public function isArray()
    {
        return self::VALUE_IS_ARRAY === (self::VALUE_IS_ARRAY & \$this->mode);
    }

    /**
     * Sets the default value.
     *
     * @param string|string[]|int|bool|null \$default The default value
     *
     * @throws LogicException When incorrect default value is given
     */
    public function setDefault(\$default = null)
    {
        if (self::VALUE_NONE === (self::VALUE_NONE & \$this->mode) && null !== \$default) {
            throw new LogicException('Cannot set a default value when using InputOption::VALUE_NONE mode.');
        }

        if (\$this->isArray()) {
            if (null === \$default) {
                \$default = [];
            } elseif (!\\is_array(\$default)) {
                throw new LogicException('A default value for an array option must be an array.');
            }
        }

        \$this->default = \$this->acceptValue() ? \$default : false;
    }

    /**
     * Returns the default value.
     *
     * @return string|string[]|int|bool|null The default value
     */
    public function getDefault()
    {
        return \$this->default;
    }

    /**
     * Returns the description text.
     *
     * @return string The description text
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Checks whether the given option equals this one.
     *
     * @return bool
     */
    public function equals(self \$option)
    {
        return \$option->getName() === \$this->getName()
            && \$option->getShortcut() === \$this->getShortcut()
            && \$option->getDefault() === \$this->getDefault()
            && \$option->isArray() === \$this->isArray()
            && \$option->isValueRequired() === \$this->isValueRequired()
            && \$option->isValueOptional() === \$this->isValueOptional()
        ;
    }
}
", "vendor/symfony/console/Input/InputOption.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Input/InputOption.php");
    }
}
