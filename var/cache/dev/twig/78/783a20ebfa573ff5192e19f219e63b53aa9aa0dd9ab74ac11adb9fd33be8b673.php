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

/* vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php */
class __TwigTemplate_9ba38207088d09136e404c49052a0e228949e0ac2e68e9662a2774d191bcea60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

/**
 * Manages schema filters passed to Connection::setSchemaAssetsFilter()
 */
class SchemaAssetsFilterManager
{
    /** @var callable[] */
    private \$schemaAssetFilters;

    /**
     * @param callable[] \$schemaAssetFilters
     */
    public function __construct(array \$schemaAssetFilters)
    {
        \$this->schemaAssetFilters = \$schemaAssetFilters;
    }

    public function __invoke(\$assetName) : bool
    {
        foreach (\$this->schemaAssetFilters as \$schemaAssetFilter) {
            if (\$schemaAssetFilter(\$assetName) === false) {
                return false;
            }
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

/**
 * Manages schema filters passed to Connection::setSchemaAssetsFilter()
 */
class SchemaAssetsFilterManager
{
    /** @var callable[] */
    private \$schemaAssetFilters;

    /**
     * @param callable[] \$schemaAssetFilters
     */
    public function __construct(array \$schemaAssetFilters)
    {
        \$this->schemaAssetFilters = \$schemaAssetFilters;
    }

    public function __invoke(\$assetName) : bool
    {
        foreach (\$this->schemaAssetFilters as \$schemaAssetFilter) {
            if (\$schemaAssetFilter(\$assetName) === false) {
                return false;
            }
        }

        return true;
    }
}
", "vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php");
    }
}
