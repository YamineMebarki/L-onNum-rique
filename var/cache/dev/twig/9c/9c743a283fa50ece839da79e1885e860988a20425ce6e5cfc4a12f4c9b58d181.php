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

/* vendor/symfony/validator/ConstraintValidator.php */
class __TwigTemplate_de1b8ba7e06241e310e918891bf045bf8dd9c8d1a2e70e87bed97615ead9822a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ConstraintValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ConstraintValidator.php"));

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

namespace Symfony\\Component\\Validator;

use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

/**
 * Base class for constraint validators.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class ConstraintValidator implements ConstraintValidatorInterface
{
    /**
     * Whether to format {@link \\DateTime} objects as RFC-3339 dates
     * (\"Y-m-d H:i:s\").
     */
    const PRETTY_DATE = 1;

    /**
     * Whether to cast objects with a \"__toString()\" method to strings.
     */
    const OBJECT_TO_STRING = 2;

    /**
     * @var ExecutionContextInterface
     */
    protected \$context;

    /**
     * {@inheritdoc}
     */
    public function initialize(ExecutionContextInterface \$context)
    {
        \$this->context = \$context;
    }

    /**
     * Returns a string representation of the type of the value.
     *
     * This method should be used if you pass the type of a value as
     * message parameter to a constraint violation. Note that such
     * parameters should usually not be included in messages aimed at
     * non-technical people.
     *
     * @param mixed \$value The value to return the type of
     *
     * @return string The type of the value
     */
    protected function formatTypeOf(\$value)
    {
        return \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value);
    }

    /**
     * Returns a string representation of the value.
     *
     * This method returns the equivalent PHP tokens for most scalar types
     * (i.e. \"false\" for false, \"1\" for 1 etc.). Strings are always wrapped
     * in double quotes (\"). Objects, arrays and resources are formatted as
     * \"object\", \"array\" and \"resource\". If the \$format bitmask contains
     * the PRETTY_DATE bit, then {@link \\DateTime} objects will be formatted
     * as RFC-3339 dates (\"Y-m-d H:i:s\").
     *
     * Be careful when passing message parameters to a constraint violation
     * that (may) contain objects, arrays or resources. These parameters
     * should only be displayed for technical users. Non-technical users
     * won't know what an \"object\", \"array\" or \"resource\" is and will be
     * confused by the violation message.
     *
     * @param mixed \$value  The value to format as string
     * @param int   \$format A bitwise combination of the format
     *                      constants in this class
     *
     * @return string The string representation of the passed value
     */
    protected function formatValue(\$value, \$format = 0)
    {
        if ((\$format & self::PRETTY_DATE) && \$value instanceof \\DateTimeInterface) {
            if (class_exists('IntlDateFormatter')) {
                \$locale = \\Locale::getDefault();
                \$formatter = new \\IntlDateFormatter(\$locale, \\IntlDateFormatter::MEDIUM, \\IntlDateFormatter::SHORT, \$value->getTimezone());

                // neither the native nor the stub IntlDateFormatter support
                // DateTimeImmutable as of yet
                if (!\$value instanceof \\DateTime) {
                    \$value = new \\DateTime(
                        \$value->format('Y-m-d H:i:s.u e'),
                        \$value->getTimezone()
                    );
                }

                return \$formatter->format(\$value);
            }

            return \$value->format('Y-m-d H:i:s');
        }

        if (\\is_object(\$value)) {
            if ((\$format & self::OBJECT_TO_STRING) && method_exists(\$value, '__toString')) {
                return \$value->__toString();
            }

            return 'object';
        }

        if (\\is_array(\$value)) {
            return 'array';
        }

        if (\\is_string(\$value)) {
            return '\"'.\$value.'\"';
        }

        if (\\is_resource(\$value)) {
            return 'resource';
        }

        if (null === \$value) {
            return 'null';
        }

        if (false === \$value) {
            return 'false';
        }

        if (true === \$value) {
            return 'true';
        }

        return (string) \$value;
    }

    /**
     * Returns a string representation of a list of values.
     *
     * Each of the values is converted to a string using
     * {@link formatValue()}. The values are then concatenated with commas.
     *
     * @param array \$values A list of values
     * @param int   \$format A bitwise combination of the format
     *                      constants in this class
     *
     * @return string The string representation of the value list
     *
     * @see formatValue()
     */
    protected function formatValues(array \$values, \$format = 0)
    {
        foreach (\$values as \$key => \$value) {
            \$values[\$key] = \$this->formatValue(\$value, \$format);
        }

        return implode(', ', \$values);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/ConstraintValidator.php";
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

namespace Symfony\\Component\\Validator;

use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

/**
 * Base class for constraint validators.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class ConstraintValidator implements ConstraintValidatorInterface
{
    /**
     * Whether to format {@link \\DateTime} objects as RFC-3339 dates
     * (\"Y-m-d H:i:s\").
     */
    const PRETTY_DATE = 1;

    /**
     * Whether to cast objects with a \"__toString()\" method to strings.
     */
    const OBJECT_TO_STRING = 2;

    /**
     * @var ExecutionContextInterface
     */
    protected \$context;

    /**
     * {@inheritdoc}
     */
    public function initialize(ExecutionContextInterface \$context)
    {
        \$this->context = \$context;
    }

    /**
     * Returns a string representation of the type of the value.
     *
     * This method should be used if you pass the type of a value as
     * message parameter to a constraint violation. Note that such
     * parameters should usually not be included in messages aimed at
     * non-technical people.
     *
     * @param mixed \$value The value to return the type of
     *
     * @return string The type of the value
     */
    protected function formatTypeOf(\$value)
    {
        return \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value);
    }

    /**
     * Returns a string representation of the value.
     *
     * This method returns the equivalent PHP tokens for most scalar types
     * (i.e. \"false\" for false, \"1\" for 1 etc.). Strings are always wrapped
     * in double quotes (\"). Objects, arrays and resources are formatted as
     * \"object\", \"array\" and \"resource\". If the \$format bitmask contains
     * the PRETTY_DATE bit, then {@link \\DateTime} objects will be formatted
     * as RFC-3339 dates (\"Y-m-d H:i:s\").
     *
     * Be careful when passing message parameters to a constraint violation
     * that (may) contain objects, arrays or resources. These parameters
     * should only be displayed for technical users. Non-technical users
     * won't know what an \"object\", \"array\" or \"resource\" is and will be
     * confused by the violation message.
     *
     * @param mixed \$value  The value to format as string
     * @param int   \$format A bitwise combination of the format
     *                      constants in this class
     *
     * @return string The string representation of the passed value
     */
    protected function formatValue(\$value, \$format = 0)
    {
        if ((\$format & self::PRETTY_DATE) && \$value instanceof \\DateTimeInterface) {
            if (class_exists('IntlDateFormatter')) {
                \$locale = \\Locale::getDefault();
                \$formatter = new \\IntlDateFormatter(\$locale, \\IntlDateFormatter::MEDIUM, \\IntlDateFormatter::SHORT, \$value->getTimezone());

                // neither the native nor the stub IntlDateFormatter support
                // DateTimeImmutable as of yet
                if (!\$value instanceof \\DateTime) {
                    \$value = new \\DateTime(
                        \$value->format('Y-m-d H:i:s.u e'),
                        \$value->getTimezone()
                    );
                }

                return \$formatter->format(\$value);
            }

            return \$value->format('Y-m-d H:i:s');
        }

        if (\\is_object(\$value)) {
            if ((\$format & self::OBJECT_TO_STRING) && method_exists(\$value, '__toString')) {
                return \$value->__toString();
            }

            return 'object';
        }

        if (\\is_array(\$value)) {
            return 'array';
        }

        if (\\is_string(\$value)) {
            return '\"'.\$value.'\"';
        }

        if (\\is_resource(\$value)) {
            return 'resource';
        }

        if (null === \$value) {
            return 'null';
        }

        if (false === \$value) {
            return 'false';
        }

        if (true === \$value) {
            return 'true';
        }

        return (string) \$value;
    }

    /**
     * Returns a string representation of a list of values.
     *
     * Each of the values is converted to a string using
     * {@link formatValue()}. The values are then concatenated with commas.
     *
     * @param array \$values A list of values
     * @param int   \$format A bitwise combination of the format
     *                      constants in this class
     *
     * @return string The string representation of the value list
     *
     * @see formatValue()
     */
    protected function formatValues(array \$values, \$format = 0)
    {
        foreach (\$values as \$key => \$value) {
            \$values[\$key] = \$this->formatValue(\$value, \$format);
        }

        return implode(', ', \$values);
    }
}
", "vendor/symfony/validator/ConstraintValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/ConstraintValidator.php");
    }
}
