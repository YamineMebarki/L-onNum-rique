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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php */
class __TwigTemplate_f319f071f315b50f3146166c61ebf5efeb1674022fc502c577830661439d8bc7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Connection;
use Throwable;

/**
 * Abstract schema synchronizer with methods for executing batches of SQL.
 */
abstract class AbstractSchemaSynchronizer implements SchemaSynchronizer
{
    /** @var Connection */
    protected \$conn;

    public function __construct(Connection \$conn)
    {
        \$this->conn = \$conn;
    }

    /**
     * @param string[] \$sql
     */
    protected function processSqlSafely(array \$sql)
    {
        foreach (\$sql as \$s) {
            try {
                \$this->conn->exec(\$s);
            } catch (Throwable \$e) {
            }
        }
    }

    /**
     * @param string[] \$sql
     */
    protected function processSql(array \$sql)
    {
        foreach (\$sql as \$s) {
            \$this->conn->exec(\$s);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Connection;
use Throwable;

/**
 * Abstract schema synchronizer with methods for executing batches of SQL.
 */
abstract class AbstractSchemaSynchronizer implements SchemaSynchronizer
{
    /** @var Connection */
    protected \$conn;

    public function __construct(Connection \$conn)
    {
        \$this->conn = \$conn;
    }

    /**
     * @param string[] \$sql
     */
    protected function processSqlSafely(array \$sql)
    {
        foreach (\$sql as \$s) {
            try {
                \$this->conn->exec(\$s);
            } catch (Throwable \$e) {
            }
        }
    }

    /**
     * @param string[] \$sql
     */
    protected function processSql(array \$sql)
    {
        foreach (\$sql as \$s) {
            \$this->conn->exec(\$s);
        }
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php");
    }
}
