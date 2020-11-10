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

/* vendor/doctrine/doctrine-bundle/ManagerConfigurator.php */
class __TwigTemplate_48409637c719070e7622c5a13c08002d774f64a7f0a86cca14bbd76b7978ec05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/ManagerConfigurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/ManagerConfigurator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Query\\Filter\\SQLFilter;

/**
 * Configurator for an EntityManager
 */
class ManagerConfigurator
{
    /** @var string[] */
    private \$enabledFilters = [];

    /** @var string[] */
    private \$filtersParameters = [];

    /**
     * @param string[] \$enabledFilters
     * @param string[] \$filtersParameters
     */
    public function __construct(array \$enabledFilters, array \$filtersParameters)
    {
        \$this->enabledFilters    = \$enabledFilters;
        \$this->filtersParameters = \$filtersParameters;
    }

    /**
     * Create a connection by name.
     */
    public function configure(EntityManagerInterface \$entityManager)
    {
        \$this->enableFilters(\$entityManager);
    }

    /**
     * Enables filters for a given entity manager
     */
    private function enableFilters(EntityManagerInterface \$entityManager)
    {
        if (empty(\$this->enabledFilters)) {
            return;
        }

        \$filterCollection = \$entityManager->getFilters();
        foreach (\$this->enabledFilters as \$filter) {
            \$filterObject = \$filterCollection->enable(\$filter);
            if (\$filterObject === null) {
                continue;
            }

            \$this->setFilterParameters(\$filter, \$filterObject);
        }
    }

    /**
     * Sets default parameters for a given filter
     *
     * @param string    \$name   Filter name
     * @param SQLFilter \$filter Filter object
     */
    private function setFilterParameters(\$name, SQLFilter \$filter)
    {
        if (empty(\$this->filtersParameters[\$name])) {
            return;
        }

        \$parameters = \$this->filtersParameters[\$name];
        foreach (\$parameters as \$paramName => \$paramValue) {
            \$filter->setParameter(\$paramName, \$paramValue);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/ManagerConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Query\\Filter\\SQLFilter;

/**
 * Configurator for an EntityManager
 */
class ManagerConfigurator
{
    /** @var string[] */
    private \$enabledFilters = [];

    /** @var string[] */
    private \$filtersParameters = [];

    /**
     * @param string[] \$enabledFilters
     * @param string[] \$filtersParameters
     */
    public function __construct(array \$enabledFilters, array \$filtersParameters)
    {
        \$this->enabledFilters    = \$enabledFilters;
        \$this->filtersParameters = \$filtersParameters;
    }

    /**
     * Create a connection by name.
     */
    public function configure(EntityManagerInterface \$entityManager)
    {
        \$this->enableFilters(\$entityManager);
    }

    /**
     * Enables filters for a given entity manager
     */
    private function enableFilters(EntityManagerInterface \$entityManager)
    {
        if (empty(\$this->enabledFilters)) {
            return;
        }

        \$filterCollection = \$entityManager->getFilters();
        foreach (\$this->enabledFilters as \$filter) {
            \$filterObject = \$filterCollection->enable(\$filter);
            if (\$filterObject === null) {
                continue;
            }

            \$this->setFilterParameters(\$filter, \$filterObject);
        }
    }

    /**
     * Sets default parameters for a given filter
     *
     * @param string    \$name   Filter name
     * @param SQLFilter \$filter Filter object
     */
    private function setFilterParameters(\$name, SQLFilter \$filter)
    {
        if (empty(\$this->filtersParameters[\$name])) {
            return;
        }

        \$parameters = \$this->filtersParameters[\$name];
        foreach (\$parameters as \$paramName => \$paramValue) {
            \$filter->setParameter(\$paramName, \$paramValue);
        }
    }
}
", "vendor/doctrine/doctrine-bundle/ManagerConfigurator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php");
    }
}
