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

/* vendor/symfony/console/Input/InputArgument.php */
class __TwigTemplate_8e2e989c0a4a7bfeb27136739f4cc2eabb4c311a10fd1f26628f07b749220262 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/InputArgument.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/InputArgument.php"));

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
 * Represents a command line argument.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputArgument
{
    const REQUIRED = 1;
    const OPTIONAL = 2;
    const IS_ARRAY = 4;

    private \$name;
    private \$mode;
    private \$default;
    private \$description;

    /**
     * @param string               \$name        The argument name
     * @param int|null             \$mode        The argument mode: self::REQUIRED or self::OPTIONAL
     * @param string               \$description A description text
     * @param string|string[]|null \$default     The default value (for self::OPTIONAL mode only)
     *
     * @throws InvalidArgumentException When argument mode is not valid
     */
    public function __construct(string \$name, int \$mode = null, string \$description = '', \$default = null)
    {
        if (null === \$mode) {
            \$mode = self::OPTIONAL;
        } elseif (\$mode > 7 || \$mode < 1) {
            throw new InvalidArgumentException(sprintf('Argument mode \"%s\" is not valid.', \$mode));
        }

        \$this->name = \$name;
        \$this->mode = \$mode;
        \$this->description = \$description;

        \$this->setDefault(\$default);
    }

    /**
     * Returns the argument name.
     *
     * @return string The argument name
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns true if the argument is required.
     *
     * @return bool true if parameter mode is self::REQUIRED, false otherwise
     */
    public function isRequired()
    {
        return self::REQUIRED === (self::REQUIRED & \$this->mode);
    }

    /**
     * Returns true if the argument can take multiple values.
     *
     * @return bool true if mode is self::IS_ARRAY, false otherwise
     */
    public function isArray()
    {
        return self::IS_ARRAY === (self::IS_ARRAY & \$this->mode);
    }

    /**
     * Sets the default value.
     *
     * @param string|string[]|null \$default The default value
     *
     * @throws LogicException When incorrect default value is given
     */
    public function setDefault(\$default = null)
    {
        if (self::REQUIRED === \$this->mode && null !== \$default) {
            throw new LogicException('Cannot set a default value except for InputArgument::OPTIONAL mode.');
        }

        if (\$this->isArray()) {
            if (null === \$default) {
                \$default = [];
            } elseif (!\\is_array(\$default)) {
                throw new LogicException('A default value for an array argument must be an array.');
            }
        }

        \$this->default = \$default;
    }

    /**
     * Returns the default value.
     *
     * @return string|string[]|null The default value
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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Input/InputArgument.php";
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
 * Represents a command line argument.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputArgument
{
    const REQUIRED = 1;
    const OPTIONAL = 2;
    const IS_ARRAY = 4;

    private \$name;
    private \$mode;
    private \$default;
    private \$description;

    /**
     * @param string               \$name        The argument name
     * @param int|null             \$mode        The argument mode: self::REQUIRED or self::OPTIONAL
     * @param string               \$description A description text
     * @param string|string[]|null \$default     The default value (for self::OPTIONAL mode only)
     *
     * @throws InvalidArgumentException When argument mode is not valid
     */
    public function __construct(string \$name, int \$mode = null, string \$description = '', \$default = null)
    {
        if (null === \$mode) {
            \$mode = self::OPTIONAL;
        } elseif (\$mode > 7 || \$mode < 1) {
            throw new InvalidArgumentException(sprintf('Argument mode \"%s\" is not valid.', \$mode));
        }

        \$this->name = \$name;
        \$this->mode = \$mode;
        \$this->description = \$description;

        \$this->setDefault(\$default);
    }

    /**
     * Returns the argument name.
     *
     * @return string The argument name
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns true if the argument is required.
     *
     * @return bool true if parameter mode is self::REQUIRED, false otherwise
     */
    public function isRequired()
    {
        return self::REQUIRED === (self::REQUIRED & \$this->mode);
    }

    /**
     * Returns true if the argument can take multiple values.
     *
     * @return bool true if mode is self::IS_ARRAY, false otherwise
     */
    public function isArray()
    {
        return self::IS_ARRAY === (self::IS_ARRAY & \$this->mode);
    }

    /**
     * Sets the default value.
     *
     * @param string|string[]|null \$default The default value
     *
     * @throws LogicException When incorrect default value is given
     */
    public function setDefault(\$default = null)
    {
        if (self::REQUIRED === \$this->mode && null !== \$default) {
            throw new LogicException('Cannot set a default value except for InputArgument::OPTIONAL mode.');
        }

        if (\$this->isArray()) {
            if (null === \$default) {
                \$default = [];
            } elseif (!\\is_array(\$default)) {
                throw new LogicException('A default value for an array argument must be an array.');
            }
        }

        \$this->default = \$default;
    }

    /**
     * Returns the default value.
     *
     * @return string|string[]|null The default value
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
}
", "vendor/symfony/console/Input/InputArgument.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Input/InputArgument.php");
    }
}
