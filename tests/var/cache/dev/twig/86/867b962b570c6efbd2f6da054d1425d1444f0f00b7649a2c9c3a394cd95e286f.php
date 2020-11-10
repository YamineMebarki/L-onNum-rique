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

/* vendor/symfony/dependency-injection/ContainerInterface.php */
class __TwigTemplate_a29d3c9cbcf6efa8b294f1a5cb07cf2b4939a7a8ce764db5ea1cb0b26e116140 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ContainerInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ContainerInterface.php"));

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

namespace Symfony\\Component\\DependencyInjection;

use Psr\\Container\\ContainerInterface as PsrContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * ContainerInterface is the interface implemented by service container classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface ContainerInterface extends PsrContainerInterface
{
    const RUNTIME_EXCEPTION_ON_INVALID_REFERENCE = 0;
    const EXCEPTION_ON_INVALID_REFERENCE = 1;
    const NULL_ON_INVALID_REFERENCE = 2;
    const IGNORE_ON_INVALID_REFERENCE = 3;
    const IGNORE_ON_UNINITIALIZED_REFERENCE = 4;

    /**
     * Sets a service.
     *
     * @param string      \$id      The service identifier
     * @param object|null \$service The service instance
     */
    public function set(\$id, \$service);

    /**
     * Gets a service.
     *
     * @param string \$id              The service identifier
     * @param int    \$invalidBehavior The behavior when the service does not exist
     *
     * @return object|null The associated service
     *
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException          When the service is not defined
     *
     * @see Reference
     */
    public function get(\$id, \$invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE);

    /**
     * Returns true if the given service is defined.
     *
     * @param string \$id The service identifier
     *
     * @return bool true if the service is defined, false otherwise
     */
    public function has(\$id);

    /**
     * Check for whether or not a service has been initialized.
     *
     * @param string \$id
     *
     * @return bool true if the service has been initialized, false otherwise
     */
    public function initialized(\$id);

    /**
     * Gets a parameter.
     *
     * @param string \$name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws InvalidArgumentException if the parameter is not defined
     */
    public function getParameter(\$name);

    /**
     * Checks if a parameter exists.
     *
     * @param string \$name The parameter name
     *
     * @return bool The presence of parameter in container
     */
    public function hasParameter(\$name);

    /**
     * Sets a parameter.
     *
     * @param string \$name  The parameter name
     * @param mixed  \$value The parameter value
     */
    public function setParameter(\$name, \$value);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ContainerInterface.php";
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

namespace Symfony\\Component\\DependencyInjection;

use Psr\\Container\\ContainerInterface as PsrContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * ContainerInterface is the interface implemented by service container classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface ContainerInterface extends PsrContainerInterface
{
    const RUNTIME_EXCEPTION_ON_INVALID_REFERENCE = 0;
    const EXCEPTION_ON_INVALID_REFERENCE = 1;
    const NULL_ON_INVALID_REFERENCE = 2;
    const IGNORE_ON_INVALID_REFERENCE = 3;
    const IGNORE_ON_UNINITIALIZED_REFERENCE = 4;

    /**
     * Sets a service.
     *
     * @param string      \$id      The service identifier
     * @param object|null \$service The service instance
     */
    public function set(\$id, \$service);

    /**
     * Gets a service.
     *
     * @param string \$id              The service identifier
     * @param int    \$invalidBehavior The behavior when the service does not exist
     *
     * @return object|null The associated service
     *
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException          When the service is not defined
     *
     * @see Reference
     */
    public function get(\$id, \$invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE);

    /**
     * Returns true if the given service is defined.
     *
     * @param string \$id The service identifier
     *
     * @return bool true if the service is defined, false otherwise
     */
    public function has(\$id);

    /**
     * Check for whether or not a service has been initialized.
     *
     * @param string \$id
     *
     * @return bool true if the service has been initialized, false otherwise
     */
    public function initialized(\$id);

    /**
     * Gets a parameter.
     *
     * @param string \$name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws InvalidArgumentException if the parameter is not defined
     */
    public function getParameter(\$name);

    /**
     * Checks if a parameter exists.
     *
     * @param string \$name The parameter name
     *
     * @return bool The presence of parameter in container
     */
    public function hasParameter(\$name);

    /**
     * Sets a parameter.
     *
     * @param string \$name  The parameter name
     * @param mixed  \$value The parameter value
     */
    public function setParameter(\$name, \$value);
}
", "vendor/symfony/dependency-injection/ContainerInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ContainerInterface.php");
    }
}
