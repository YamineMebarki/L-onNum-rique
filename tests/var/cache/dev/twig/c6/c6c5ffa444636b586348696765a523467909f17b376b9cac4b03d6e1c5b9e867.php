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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php */
class __TwigTemplate_7fb2f55be6b90a7f0f6ea510c74d52698de4f4f3cf1734397b46a4df6039d541 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;

/**
 * Statement interface.
 * Drivers must implement this interface.
 *
 * This resembles (a subset of) the PDOStatement interface.
 */
interface Statement extends ResultStatement
{
    /**
     * Binds a value to a corresponding named (not supported by mysqli driver, see comment below) or positional
     * placeholder in the SQL statement that was used to prepare the statement.
     *
     * As mentioned above, the named parameters are not natively supported by the mysqli driver, use executeQuery(),
     * fetchAll(), fetchArray(), fetchColumn(), fetchAssoc() methods to have the named parameter emulated by doctrine.
     *
     * @param mixed \$param Parameter identifier. For a prepared statement using named placeholders,
     *                     this will be a parameter name of the form :name. For a prepared statement
     *                     using question mark placeholders, this will be the 1-indexed position of the parameter.
     * @param mixed \$value The value to bind to the parameter.
     * @param int   \$type  Explicit data type for the parameter using the {@link \\Doctrine\\DBAL\\ParameterType}
     *                     constants.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING);

    /**
     * Binds a PHP variable to a corresponding named (not supported by mysqli driver, see comment below) or question
     * mark placeholder in the SQL statement that was use to prepare the statement. Unlike PDOStatement->bindValue(),
     * the variable is bound as a reference and will only be evaluated at the time
     * that PDOStatement->execute() is called.
     *
     * As mentioned above, the named parameters are not natively supported by the mysqli driver, use executeQuery(),
     * fetchAll(), fetchArray(), fetchColumn(), fetchAssoc() methods to have the named parameter emulated by doctrine.
     *
     * Most parameters are input parameters, that is, parameters that are
     * used in a read-only fashion to build up the query. Some drivers support the invocation
     * of stored procedures that return data as output parameters, and some also as input/output
     * parameters that both send in data and are updated to receive it.
     *
     * @param mixed    \$column   Parameter identifier. For a prepared statement using named placeholders,
     *                           this will be a parameter name of the form :name. For a prepared statement using
     *                           question mark placeholders, this will be the 1-indexed position of the parameter.
     * @param mixed    \$variable Name of the PHP variable to bind to the SQL statement parameter.
     * @param int|null \$type     Explicit data type for the parameter using the {@link \\Doctrine\\DBAL\\ParameterType}
     *                           constants. To return an INOUT parameter from a stored procedure, use the bitwise
     *                           OR operator to set the PDO::PARAM_INPUT_OUTPUT bits for the data_type parameter.
     * @param int|null \$length   You must specify maxlength when using an OUT bind
     *                           so that PHP allocates enough memory to hold the returned value.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null);

    /**
     * Fetches the SQLSTATE associated with the last operation on the statement handle.
     *
     * @see Doctrine_Adapter_Interface::errorCode()
     *
     * @return string|int|bool The error code string.
     */
    public function errorCode();

    /**
     * Fetches extended error information associated with the last operation on the statement handle.
     *
     * @return mixed[] The error info array.
     */
    public function errorInfo();

    /**
     * Executes a prepared statement
     *
     * If the prepared statement included parameter markers, you must either:
     * call PDOStatement->bindParam() to bind PHP variables to the parameter markers:
     * bound variables pass their value as input and receive the output value,
     * if any, of their associated parameter markers or pass an array of input-only
     * parameter values.
     *
     * @param mixed[]|null \$params An array of values with as many elements as there are
     *                             bound parameters in the SQL statement being executed.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function execute(\$params = null);

    /**
     * Returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement
     * executed by the corresponding object.
     *
     * If the last SQL statement executed by the associated Statement object was a SELECT statement,
     * some databases may return the number of rows returned by that statement. However,
     * this behaviour is not guaranteed for all databases and should not be
     * relied on for portable applications.
     *
     * @return int The number of rows.
     */
    public function rowCount();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;

/**
 * Statement interface.
 * Drivers must implement this interface.
 *
 * This resembles (a subset of) the PDOStatement interface.
 */
interface Statement extends ResultStatement
{
    /**
     * Binds a value to a corresponding named (not supported by mysqli driver, see comment below) or positional
     * placeholder in the SQL statement that was used to prepare the statement.
     *
     * As mentioned above, the named parameters are not natively supported by the mysqli driver, use executeQuery(),
     * fetchAll(), fetchArray(), fetchColumn(), fetchAssoc() methods to have the named parameter emulated by doctrine.
     *
     * @param mixed \$param Parameter identifier. For a prepared statement using named placeholders,
     *                     this will be a parameter name of the form :name. For a prepared statement
     *                     using question mark placeholders, this will be the 1-indexed position of the parameter.
     * @param mixed \$value The value to bind to the parameter.
     * @param int   \$type  Explicit data type for the parameter using the {@link \\Doctrine\\DBAL\\ParameterType}
     *                     constants.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING);

    /**
     * Binds a PHP variable to a corresponding named (not supported by mysqli driver, see comment below) or question
     * mark placeholder in the SQL statement that was use to prepare the statement. Unlike PDOStatement->bindValue(),
     * the variable is bound as a reference and will only be evaluated at the time
     * that PDOStatement->execute() is called.
     *
     * As mentioned above, the named parameters are not natively supported by the mysqli driver, use executeQuery(),
     * fetchAll(), fetchArray(), fetchColumn(), fetchAssoc() methods to have the named parameter emulated by doctrine.
     *
     * Most parameters are input parameters, that is, parameters that are
     * used in a read-only fashion to build up the query. Some drivers support the invocation
     * of stored procedures that return data as output parameters, and some also as input/output
     * parameters that both send in data and are updated to receive it.
     *
     * @param mixed    \$column   Parameter identifier. For a prepared statement using named placeholders,
     *                           this will be a parameter name of the form :name. For a prepared statement using
     *                           question mark placeholders, this will be the 1-indexed position of the parameter.
     * @param mixed    \$variable Name of the PHP variable to bind to the SQL statement parameter.
     * @param int|null \$type     Explicit data type for the parameter using the {@link \\Doctrine\\DBAL\\ParameterType}
     *                           constants. To return an INOUT parameter from a stored procedure, use the bitwise
     *                           OR operator to set the PDO::PARAM_INPUT_OUTPUT bits for the data_type parameter.
     * @param int|null \$length   You must specify maxlength when using an OUT bind
     *                           so that PHP allocates enough memory to hold the returned value.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null);

    /**
     * Fetches the SQLSTATE associated with the last operation on the statement handle.
     *
     * @see Doctrine_Adapter_Interface::errorCode()
     *
     * @return string|int|bool The error code string.
     */
    public function errorCode();

    /**
     * Fetches extended error information associated with the last operation on the statement handle.
     *
     * @return mixed[] The error info array.
     */
    public function errorInfo();

    /**
     * Executes a prepared statement
     *
     * If the prepared statement included parameter markers, you must either:
     * call PDOStatement->bindParam() to bind PHP variables to the parameter markers:
     * bound variables pass their value as input and receive the output value,
     * if any, of their associated parameter markers or pass an array of input-only
     * parameter values.
     *
     * @param mixed[]|null \$params An array of values with as many elements as there are
     *                             bound parameters in the SQL statement being executed.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function execute(\$params = null);

    /**
     * Returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement
     * executed by the corresponding object.
     *
     * If the last SQL statement executed by the associated Statement object was a SELECT statement,
     * some databases may return the number of rows returned by that statement. However,
     * this behaviour is not guaranteed for all databases and should not be
     * relied on for portable applications.
     *
     * @return int The number of rows.
     */
    public function rowCount();
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php");
    }
}
