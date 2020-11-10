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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php */
class __TwigTemplate_f71ddad092c5fcc0e8fef66f35ac902b5ac225e801437d0d08b47d4cd7fd8b08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\IBMDB2;

use Doctrine\\DBAL\\Driver\\Connection;
use Doctrine\\DBAL\\Driver\\ServerInfoAwareConnection;
use Doctrine\\DBAL\\ParameterType;
use stdClass;
use const DB2_AUTOCOMMIT_OFF;
use const DB2_AUTOCOMMIT_ON;
use function db2_autocommit;
use function db2_commit;
use function db2_conn_error;
use function db2_conn_errormsg;
use function db2_connect;
use function db2_escape_string;
use function db2_exec;
use function db2_last_insert_id;
use function db2_num_rows;
use function db2_pconnect;
use function db2_prepare;
use function db2_rollback;
use function db2_server_info;
use function db2_stmt_errormsg;
use function func_get_args;

class DB2Connection implements Connection, ServerInfoAwareConnection
{
    /** @var resource */
    private \$conn = null;

    /**
     * @param mixed[] \$params
     * @param string  \$username
     * @param string  \$password
     * @param mixed[] \$driverOptions
     *
     * @throws DB2Exception
     */
    public function __construct(array \$params, \$username, \$password, \$driverOptions = [])
    {
        \$isPersistent = (isset(\$params['persistent']) && \$params['persistent'] === true);

        if (\$isPersistent) {
            \$this->conn = db2_pconnect(\$params['dbname'], \$username, \$password, \$driverOptions);
        } else {
            \$this->conn = db2_connect(\$params['dbname'], \$username, \$password, \$driverOptions);
        }
        if (! \$this->conn) {
            throw new DB2Exception(db2_conn_errormsg());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        /** @var stdClass \$serverInfo */
        \$serverInfo = db2_server_info(\$this->conn);

        return \$serverInfo->DBMS_VER;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$sql)
    {
        \$stmt = @db2_prepare(\$this->conn, \$sql);
        if (! \$stmt) {
            throw new DB2Exception(db2_stmt_errormsg());
        }

        return new DB2Statement(\$stmt);
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args = func_get_args();
        \$sql  = \$args[0];
        \$stmt = \$this->prepare(\$sql);
        \$stmt->execute();

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$input, \$type = ParameterType::STRING)
    {
        \$input = db2_escape_string(\$input);

        if (\$type === ParameterType::INTEGER) {
            return \$input;
        }

        return \"'\" . \$input . \"'\";
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        \$stmt = @db2_exec(\$this->conn, \$statement);

        if (\$stmt === false) {
            throw new DB2Exception(db2_stmt_errormsg());
        }

        return db2_num_rows(\$stmt);
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        return db2_last_insert_id(\$this->conn);
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        db2_autocommit(\$this->conn, DB2_AUTOCOMMIT_OFF);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        if (! db2_commit(\$this->conn)) {
            throw new DB2Exception(db2_conn_errormsg(\$this->conn));
        }
        db2_autocommit(\$this->conn, DB2_AUTOCOMMIT_ON);
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        if (! db2_rollback(\$this->conn)) {
            throw new DB2Exception(db2_conn_errormsg(\$this->conn));
        }
        db2_autocommit(\$this->conn, DB2_AUTOCOMMIT_ON);
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
        return db2_conn_error(\$this->conn);
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
        return [
            0 => db2_conn_errormsg(\$this->conn),
            1 => \$this->errorCode(),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\IBMDB2;

use Doctrine\\DBAL\\Driver\\Connection;
use Doctrine\\DBAL\\Driver\\ServerInfoAwareConnection;
use Doctrine\\DBAL\\ParameterType;
use stdClass;
use const DB2_AUTOCOMMIT_OFF;
use const DB2_AUTOCOMMIT_ON;
use function db2_autocommit;
use function db2_commit;
use function db2_conn_error;
use function db2_conn_errormsg;
use function db2_connect;
use function db2_escape_string;
use function db2_exec;
use function db2_last_insert_id;
use function db2_num_rows;
use function db2_pconnect;
use function db2_prepare;
use function db2_rollback;
use function db2_server_info;
use function db2_stmt_errormsg;
use function func_get_args;

class DB2Connection implements Connection, ServerInfoAwareConnection
{
    /** @var resource */
    private \$conn = null;

    /**
     * @param mixed[] \$params
     * @param string  \$username
     * @param string  \$password
     * @param mixed[] \$driverOptions
     *
     * @throws DB2Exception
     */
    public function __construct(array \$params, \$username, \$password, \$driverOptions = [])
    {
        \$isPersistent = (isset(\$params['persistent']) && \$params['persistent'] === true);

        if (\$isPersistent) {
            \$this->conn = db2_pconnect(\$params['dbname'], \$username, \$password, \$driverOptions);
        } else {
            \$this->conn = db2_connect(\$params['dbname'], \$username, \$password, \$driverOptions);
        }
        if (! \$this->conn) {
            throw new DB2Exception(db2_conn_errormsg());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        /** @var stdClass \$serverInfo */
        \$serverInfo = db2_server_info(\$this->conn);

        return \$serverInfo->DBMS_VER;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$sql)
    {
        \$stmt = @db2_prepare(\$this->conn, \$sql);
        if (! \$stmt) {
            throw new DB2Exception(db2_stmt_errormsg());
        }

        return new DB2Statement(\$stmt);
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args = func_get_args();
        \$sql  = \$args[0];
        \$stmt = \$this->prepare(\$sql);
        \$stmt->execute();

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$input, \$type = ParameterType::STRING)
    {
        \$input = db2_escape_string(\$input);

        if (\$type === ParameterType::INTEGER) {
            return \$input;
        }

        return \"'\" . \$input . \"'\";
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        \$stmt = @db2_exec(\$this->conn, \$statement);

        if (\$stmt === false) {
            throw new DB2Exception(db2_stmt_errormsg());
        }

        return db2_num_rows(\$stmt);
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        return db2_last_insert_id(\$this->conn);
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        db2_autocommit(\$this->conn, DB2_AUTOCOMMIT_OFF);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        if (! db2_commit(\$this->conn)) {
            throw new DB2Exception(db2_conn_errormsg(\$this->conn));
        }
        db2_autocommit(\$this->conn, DB2_AUTOCOMMIT_ON);
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        if (! db2_rollback(\$this->conn)) {
            throw new DB2Exception(db2_conn_errormsg(\$this->conn));
        }
        db2_autocommit(\$this->conn, DB2_AUTOCOMMIT_ON);
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
        return db2_conn_error(\$this->conn);
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
        return [
            0 => db2_conn_errormsg(\$this->conn),
            1 => \$this->errorCode(),
        ];
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php");
    }
}
