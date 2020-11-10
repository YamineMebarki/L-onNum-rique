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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php */
class __TwigTemplate_531095753359036c2b45b9b2792d43f5f6174ba5815dfb078e9cdb1503087a38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\PDOStatement;
use Doctrine\\DBAL\\ParameterType;
use PDO;

/**
 * PDO SQL Server Statement
 */
class Statement extends PDOStatement
{
    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        if ((\$type === ParameterType::LARGE_OBJECT || \$type === ParameterType::BINARY)
            && \$driverOptions === null
        ) {
            \$driverOptions = PDO::SQLSRV_ENCODING_BINARY;
        }

        return parent::bindParam(\$column, \$variable, \$type, \$length, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        return \$this->bindParam(\$param, \$value, \$type);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\PDOStatement;
use Doctrine\\DBAL\\ParameterType;
use PDO;

/**
 * PDO SQL Server Statement
 */
class Statement extends PDOStatement
{
    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        if ((\$type === ParameterType::LARGE_OBJECT || \$type === ParameterType::BINARY)
            && \$driverOptions === null
        ) {
            \$driverOptions = PDO::SQLSRV_ENCODING_BINARY;
        }

        return parent::bindParam(\$column, \$variable, \$type, \$length, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        return \$this->bindParam(\$param, \$value, \$type);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php");
    }
}
