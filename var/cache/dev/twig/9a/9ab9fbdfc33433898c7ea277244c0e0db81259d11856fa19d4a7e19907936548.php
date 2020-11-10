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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php */
class __TwigTemplate_239e805d32e4cf953a10de2fe15237b34bd5c8999ebc3d7807a2c59c279f624e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence;

/**
 * Contract covering connection for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ConnectionRegistry
{
    /**
     * Gets the default connection name.
     *
     * @return string The default connection name.
     */
    public function getDefaultConnectionName();

    /**
     * Gets the named connection.
     *
     * @param string \$name The connection name (null for the default one).
     *
     * @return object
     */
    public function getConnection(\$name = null);

    /**
     * Gets an array of all registered connections.
     *
     * @return object[] An array of Connection instances.
     */
    public function getConnections();

    /**
     * Gets all connection names.
     *
     * @return string[] An array of connection names.
     */
    public function getConnectionNames();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence;

/**
 * Contract covering connection for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ConnectionRegistry
{
    /**
     * Gets the default connection name.
     *
     * @return string The default connection name.
     */
    public function getDefaultConnectionName();

    /**
     * Gets the named connection.
     *
     * @param string \$name The connection name (null for the default one).
     *
     * @return object
     */
    public function getConnection(\$name = null);

    /**
     * Gets an array of all registered connections.
     *
     * @return object[] An array of Connection instances.
     */
    public function getConnections();

    /**
     * Gets all connection names.
     *
     * @return string[] An array of connection names.
     */
    public function getConnectionNames();
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php");
    }
}
