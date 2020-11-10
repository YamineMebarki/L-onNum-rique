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

/* vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php */
class __TwigTemplate_307f99741d3e6f5144ed23f5dd08d5c1e9e865bf9b50d9f1fa4adf4c2f54d4c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php"));

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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * ParameterBagInterface is the interface implemented by objects that manage service container parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ParameterBagInterface
{
    /**
     * Clears all parameters.
     *
     * @throws LogicException if the ParameterBagInterface can not be cleared
     */
    public function clear();

    /**
     * Adds parameters to the service container parameters.
     *
     * @param array \$parameters An array of parameters
     *
     * @throws LogicException if the parameter can not be added
     */
    public function add(array \$parameters);

    /**
     * Gets the service container parameters.
     *
     * @return array An array of parameters
     */
    public function all();

    /**
     * Gets a service container parameter.
     *
     * @param string \$name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws ParameterNotFoundException if the parameter is not defined
     */
    public function get(\$name);

    /**
     * Removes a parameter.
     *
     * @param string \$name The parameter name
     */
    public function remove(\$name);

    /**
     * Sets a service container parameter.
     *
     * @param string \$name  The parameter name
     * @param mixed  \$value The parameter value
     *
     * @throws LogicException if the parameter can not be set
     */
    public function set(\$name, \$value);

    /**
     * Returns true if a parameter name is defined.
     *
     * @param string \$name The parameter name
     *
     * @return bool true if the parameter name is defined, false otherwise
     */
    public function has(\$name);

    /**
     * Replaces parameter placeholders (%name%) by their values for all parameters.
     */
    public function resolve();

    /**
     * Replaces parameter placeholders (%name%) by their values.
     *
     * @param mixed \$value A value
     *
     * @throws ParameterNotFoundException if a placeholder references a parameter that does not exist
     */
    public function resolveValue(\$value);

    /**
     * Escape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function escapeValue(\$value);

    /**
     * Unescape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function unescapeValue(\$value);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php";
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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * ParameterBagInterface is the interface implemented by objects that manage service container parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ParameterBagInterface
{
    /**
     * Clears all parameters.
     *
     * @throws LogicException if the ParameterBagInterface can not be cleared
     */
    public function clear();

    /**
     * Adds parameters to the service container parameters.
     *
     * @param array \$parameters An array of parameters
     *
     * @throws LogicException if the parameter can not be added
     */
    public function add(array \$parameters);

    /**
     * Gets the service container parameters.
     *
     * @return array An array of parameters
     */
    public function all();

    /**
     * Gets a service container parameter.
     *
     * @param string \$name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws ParameterNotFoundException if the parameter is not defined
     */
    public function get(\$name);

    /**
     * Removes a parameter.
     *
     * @param string \$name The parameter name
     */
    public function remove(\$name);

    /**
     * Sets a service container parameter.
     *
     * @param string \$name  The parameter name
     * @param mixed  \$value The parameter value
     *
     * @throws LogicException if the parameter can not be set
     */
    public function set(\$name, \$value);

    /**
     * Returns true if a parameter name is defined.
     *
     * @param string \$name The parameter name
     *
     * @return bool true if the parameter name is defined, false otherwise
     */
    public function has(\$name);

    /**
     * Replaces parameter placeholders (%name%) by their values for all parameters.
     */
    public function resolve();

    /**
     * Replaces parameter placeholders (%name%) by their values.
     *
     * @param mixed \$value A value
     *
     * @throws ParameterNotFoundException if a placeholder references a parameter that does not exist
     */
    public function resolveValue(\$value);

    /**
     * Escape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function escapeValue(\$value);

    /**
     * Unescape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function unescapeValue(\$value);
}
", "vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php");
    }
}
