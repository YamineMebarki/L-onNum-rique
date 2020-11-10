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

/* vendor/symfony/http-foundation/ParameterBag.php */
class __TwigTemplate_99a8206b63f803269ca2340f1a844de712dfbcf2ae74b492b04c3bc51496126e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ParameterBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ParameterBag.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * ParameterBag is a container for key/value pairs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParameterBag implements \\IteratorAggregate, \\Countable
{
    /**
     * Parameter storage.
     */
    protected \$parameters;

    /**
     * @param array \$parameters An array of parameters
     */
    public function __construct(array \$parameters = [])
    {
        \$this->parameters = \$parameters;
    }

    /**
     * Returns the parameters.
     *
     * @return array An array of parameters
     */
    public function all()
    {
        return \$this->parameters;
    }

    /**
     * Returns the parameter keys.
     *
     * @return array An array of parameter keys
     */
    public function keys()
    {
        return array_keys(\$this->parameters);
    }

    /**
     * Replaces the current parameters by a new set.
     *
     * @param array \$parameters An array of parameters
     */
    public function replace(array \$parameters = [])
    {
        \$this->parameters = \$parameters;
    }

    /**
     * Adds parameters.
     *
     * @param array \$parameters An array of parameters
     */
    public function add(array \$parameters = [])
    {
        \$this->parameters = array_replace(\$this->parameters, \$parameters);
    }

    /**
     * Returns a parameter by name.
     *
     * @param string \$key     The key
     * @param mixed  \$default The default value if the parameter key does not exist
     *
     * @return mixed
     */
    public function get(\$key, \$default = null)
    {
        return \\array_key_exists(\$key, \$this->parameters) ? \$this->parameters[\$key] : \$default;
    }

    /**
     * Sets a parameter by name.
     *
     * @param string \$key   The key
     * @param mixed  \$value The value
     */
    public function set(\$key, \$value)
    {
        \$this->parameters[\$key] = \$value;
    }

    /**
     * Returns true if the parameter is defined.
     *
     * @param string \$key The key
     *
     * @return bool true if the parameter exists, false otherwise
     */
    public function has(\$key)
    {
        return \\array_key_exists(\$key, \$this->parameters);
    }

    /**
     * Removes a parameter.
     *
     * @param string \$key The key
     */
    public function remove(\$key)
    {
        unset(\$this->parameters[\$key]);
    }

    /**
     * Returns the alphabetic characters of the parameter value.
     *
     * @param string \$key     The parameter key
     * @param string \$default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getAlpha(\$key, \$default = '')
    {
        return preg_replace('/[^[:alpha:]]/', '', \$this->get(\$key, \$default));
    }

    /**
     * Returns the alphabetic characters and digits of the parameter value.
     *
     * @param string \$key     The parameter key
     * @param string \$default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getAlnum(\$key, \$default = '')
    {
        return preg_replace('/[^[:alnum:]]/', '', \$this->get(\$key, \$default));
    }

    /**
     * Returns the digits of the parameter value.
     *
     * @param string \$key     The parameter key
     * @param string \$default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getDigits(\$key, \$default = '')
    {
        // we need to remove - and + because they're allowed in the filter
        return str_replace(['-', '+'], '', \$this->filter(\$key, \$default, FILTER_SANITIZE_NUMBER_INT));
    }

    /**
     * Returns the parameter value converted to integer.
     *
     * @param string \$key     The parameter key
     * @param int    \$default The default value if the parameter key does not exist
     *
     * @return int The filtered value
     */
    public function getInt(\$key, \$default = 0)
    {
        return (int) \$this->get(\$key, \$default);
    }

    /**
     * Returns the parameter value converted to boolean.
     *
     * @param string \$key     The parameter key
     * @param bool   \$default The default value if the parameter key does not exist
     *
     * @return bool The filtered value
     */
    public function getBoolean(\$key, \$default = false)
    {
        return \$this->filter(\$key, \$default, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Filter key.
     *
     * @param string \$key     Key
     * @param mixed  \$default Default = null
     * @param int    \$filter  FILTER_* constant
     * @param mixed  \$options Filter options
     *
     * @see https://php.net/filter-var
     *
     * @return mixed
     */
    public function filter(\$key, \$default = null, \$filter = FILTER_DEFAULT, \$options = [])
    {
        \$value = \$this->get(\$key, \$default);

        // Always turn \$options into an array - this allows filter_var option shortcuts.
        if (!\\is_array(\$options) && \$options) {
            \$options = ['flags' => \$options];
        }

        // Add a convenience check for arrays.
        if (\\is_array(\$value) && !isset(\$options['flags'])) {
            \$options['flags'] = FILTER_REQUIRE_ARRAY;
        }

        return filter_var(\$value, \$filter, \$options);
    }

    /**
     * Returns an iterator for parameters.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->parameters);
    }

    /**
     * Returns the number of parameters.
     *
     * @return int The number of parameters
     */
    public function count()
    {
        return \\count(\$this->parameters);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/ParameterBag.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * ParameterBag is a container for key/value pairs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParameterBag implements \\IteratorAggregate, \\Countable
{
    /**
     * Parameter storage.
     */
    protected \$parameters;

    /**
     * @param array \$parameters An array of parameters
     */
    public function __construct(array \$parameters = [])
    {
        \$this->parameters = \$parameters;
    }

    /**
     * Returns the parameters.
     *
     * @return array An array of parameters
     */
    public function all()
    {
        return \$this->parameters;
    }

    /**
     * Returns the parameter keys.
     *
     * @return array An array of parameter keys
     */
    public function keys()
    {
        return array_keys(\$this->parameters);
    }

    /**
     * Replaces the current parameters by a new set.
     *
     * @param array \$parameters An array of parameters
     */
    public function replace(array \$parameters = [])
    {
        \$this->parameters = \$parameters;
    }

    /**
     * Adds parameters.
     *
     * @param array \$parameters An array of parameters
     */
    public function add(array \$parameters = [])
    {
        \$this->parameters = array_replace(\$this->parameters, \$parameters);
    }

    /**
     * Returns a parameter by name.
     *
     * @param string \$key     The key
     * @param mixed  \$default The default value if the parameter key does not exist
     *
     * @return mixed
     */
    public function get(\$key, \$default = null)
    {
        return \\array_key_exists(\$key, \$this->parameters) ? \$this->parameters[\$key] : \$default;
    }

    /**
     * Sets a parameter by name.
     *
     * @param string \$key   The key
     * @param mixed  \$value The value
     */
    public function set(\$key, \$value)
    {
        \$this->parameters[\$key] = \$value;
    }

    /**
     * Returns true if the parameter is defined.
     *
     * @param string \$key The key
     *
     * @return bool true if the parameter exists, false otherwise
     */
    public function has(\$key)
    {
        return \\array_key_exists(\$key, \$this->parameters);
    }

    /**
     * Removes a parameter.
     *
     * @param string \$key The key
     */
    public function remove(\$key)
    {
        unset(\$this->parameters[\$key]);
    }

    /**
     * Returns the alphabetic characters of the parameter value.
     *
     * @param string \$key     The parameter key
     * @param string \$default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getAlpha(\$key, \$default = '')
    {
        return preg_replace('/[^[:alpha:]]/', '', \$this->get(\$key, \$default));
    }

    /**
     * Returns the alphabetic characters and digits of the parameter value.
     *
     * @param string \$key     The parameter key
     * @param string \$default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getAlnum(\$key, \$default = '')
    {
        return preg_replace('/[^[:alnum:]]/', '', \$this->get(\$key, \$default));
    }

    /**
     * Returns the digits of the parameter value.
     *
     * @param string \$key     The parameter key
     * @param string \$default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getDigits(\$key, \$default = '')
    {
        // we need to remove - and + because they're allowed in the filter
        return str_replace(['-', '+'], '', \$this->filter(\$key, \$default, FILTER_SANITIZE_NUMBER_INT));
    }

    /**
     * Returns the parameter value converted to integer.
     *
     * @param string \$key     The parameter key
     * @param int    \$default The default value if the parameter key does not exist
     *
     * @return int The filtered value
     */
    public function getInt(\$key, \$default = 0)
    {
        return (int) \$this->get(\$key, \$default);
    }

    /**
     * Returns the parameter value converted to boolean.
     *
     * @param string \$key     The parameter key
     * @param bool   \$default The default value if the parameter key does not exist
     *
     * @return bool The filtered value
     */
    public function getBoolean(\$key, \$default = false)
    {
        return \$this->filter(\$key, \$default, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Filter key.
     *
     * @param string \$key     Key
     * @param mixed  \$default Default = null
     * @param int    \$filter  FILTER_* constant
     * @param mixed  \$options Filter options
     *
     * @see https://php.net/filter-var
     *
     * @return mixed
     */
    public function filter(\$key, \$default = null, \$filter = FILTER_DEFAULT, \$options = [])
    {
        \$value = \$this->get(\$key, \$default);

        // Always turn \$options into an array - this allows filter_var option shortcuts.
        if (!\\is_array(\$options) && \$options) {
            \$options = ['flags' => \$options];
        }

        // Add a convenience check for arrays.
        if (\\is_array(\$value) && !isset(\$options['flags'])) {
            \$options['flags'] = FILTER_REQUIRE_ARRAY;
        }

        return filter_var(\$value, \$filter, \$options);
    }

    /**
     * Returns an iterator for parameters.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->parameters);
    }

    /**
     * Returns the number of parameters.
     *
     * @return int The number of parameters
     */
    public function count()
    {
        return \\count(\$this->parameters);
    }
}
", "vendor/symfony/http-foundation/ParameterBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/ParameterBag.php");
    }
}
