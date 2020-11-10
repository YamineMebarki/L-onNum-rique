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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php */
class __TwigTemplate_e23bc3ae5f1659e6de14a305921a3be4b26f81b820281a260091de50944ca1ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Table;

/**
 * Platform to ensure compatibility of Doctrine with SQL Azure
 *
 * On top of SQL Server 2008 the following functionality is added:
 *
 * - Create tables with the FEDERATED ON syntax.
 */
class SQLAzurePlatform extends SQLServer2008Platform
{
    /**
     * {@inheritDoc}
     */
    public function getCreateTableSQL(Table \$table, \$createFlags = self::CREATE_INDEXES)
    {
        \$sql = parent::getCreateTableSQL(\$table, \$createFlags);

        if (\$table->hasOption('azure.federatedOnColumnName')) {
            \$distributionName = \$table->getOption('azure.federatedOnDistributionName');
            \$columnName       = \$table->getOption('azure.federatedOnColumnName');
            \$stmt             = ' FEDERATED ON (' . \$distributionName . ' = ' . \$columnName . ')';

            \$sql[0] .= \$stmt;
        }

        return \$sql;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Table;

/**
 * Platform to ensure compatibility of Doctrine with SQL Azure
 *
 * On top of SQL Server 2008 the following functionality is added:
 *
 * - Create tables with the FEDERATED ON syntax.
 */
class SQLAzurePlatform extends SQLServer2008Platform
{
    /**
     * {@inheritDoc}
     */
    public function getCreateTableSQL(Table \$table, \$createFlags = self::CREATE_INDEXES)
    {
        \$sql = parent::getCreateTableSQL(\$table, \$createFlags);

        if (\$table->hasOption('azure.federatedOnColumnName')) {
            \$distributionName = \$table->getOption('azure.federatedOnDistributionName');
            \$columnName       = \$table->getOption('azure.federatedOnColumnName');
            \$stmt             = ' FEDERATED ON (' . \$distributionName . ' = ' . \$columnName . ')';

            \$sql[0] .= \$stmt;
        }

        return \$sql;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php");
    }
}
