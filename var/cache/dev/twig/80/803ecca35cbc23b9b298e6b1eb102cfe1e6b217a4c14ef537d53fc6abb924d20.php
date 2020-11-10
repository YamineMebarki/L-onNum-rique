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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php */
class __TwigTemplate_732bfef4145ada4f99eae2e7d393c85c9056263deb810cd700d36c8ccaa01796 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\ParameterType;
use PDO;
use function strpos;
use function substr;

/**
 * Sqlsrv Connection implementation.
 */
class Connection extends PDOConnection
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\$dsn, \$user = null, \$password = null, ?array \$options = null)
    {
        parent::__construct(\$dsn, \$user, \$password, \$options);
        \$this->setAttribute(PDO::ATTR_STATEMENT_CLASS, [Statement::class, []]);
    }

    /**
     * {@inheritDoc}
     */
    public function lastInsertId(\$name = null)
    {
        if (\$name === null) {
            return parent::lastInsertId(\$name);
        }

        \$stmt = \$this->prepare('SELECT CONVERT(VARCHAR(MAX), current_value) FROM sys.sequences WHERE name = ?');
        \$stmt->execute([\$name]);

        return \$stmt->fetchColumn();
    }

    /**
     * {@inheritDoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        \$val = parent::quote(\$value, \$type);

        // Fix for a driver version terminating all values with null byte
        if (strpos(\$val, \"\\0\") !== false) {
            \$val = substr(\$val, 0, -1);
        }

        return \$val;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\ParameterType;
use PDO;
use function strpos;
use function substr;

/**
 * Sqlsrv Connection implementation.
 */
class Connection extends PDOConnection
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\$dsn, \$user = null, \$password = null, ?array \$options = null)
    {
        parent::__construct(\$dsn, \$user, \$password, \$options);
        \$this->setAttribute(PDO::ATTR_STATEMENT_CLASS, [Statement::class, []]);
    }

    /**
     * {@inheritDoc}
     */
    public function lastInsertId(\$name = null)
    {
        if (\$name === null) {
            return parent::lastInsertId(\$name);
        }

        \$stmt = \$this->prepare('SELECT CONVERT(VARCHAR(MAX), current_value) FROM sys.sequences WHERE name = ?');
        \$stmt->execute([\$name]);

        return \$stmt->fetchColumn();
    }

    /**
     * {@inheritDoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        \$val = parent::quote(\$value, \$type);

        // Fix for a driver version terminating all values with null byte
        if (strpos(\$val, \"\\0\") !== false) {
            \$val = substr(\$val, 0, -1);
        }

        return \$val;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php");
    }
}
