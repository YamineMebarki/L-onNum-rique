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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php */
class __TwigTemplate_dbed6cd2caa7218b3ca43d1cec775a1197737fc1c432686fa50a62d52551c64f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLAnywhere;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use InvalidArgumentException;
use function is_resource;
use function sasql_error;
use function sasql_errorcode;
use function sasql_sqlstate;
use function sasql_stmt_errno;
use function sasql_stmt_error;

/**
 * SAP Sybase SQL Anywhere driver exception.
 */
class SQLAnywhereException extends AbstractDriverException
{
    /**
     * Helper method to turn SQL Anywhere error into exception.
     *
     * @param resource|null \$conn The SQL Anywhere connection resource to retrieve the last error from.
     * @param resource|null \$stmt The SQL Anywhere statement resource to retrieve the last error from.
     *
     * @return SQLAnywhereException
     *
     * @throws InvalidArgumentException
     */
    public static function fromSQLAnywhereError(\$conn = null, \$stmt = null)
    {
        if (\$conn !== null && ! is_resource(\$conn)) {
            throw new InvalidArgumentException('Invalid SQL Anywhere connection resource given: ' . \$conn);
        }

        if (\$stmt !== null && ! is_resource(\$stmt)) {
            throw new InvalidArgumentException('Invalid SQL Anywhere statement resource given: ' . \$stmt);
        }

        \$state   = \$conn ? sasql_sqlstate(\$conn) : sasql_sqlstate();
        \$code    = null;
        \$message = null;

        /**
         * Try retrieving the last error from statement resource if given
         */
        if (\$stmt) {
            \$code    = sasql_stmt_errno(\$stmt);
            \$message = sasql_stmt_error(\$stmt);
        }

        /**
         * Try retrieving the last error from the connection resource
         * if either the statement resource is not given or the statement
         * resource is given but the last error could not be retrieved from it (fallback).
         * Depending on the type of error, it is sometimes necessary to retrieve
         * it from the connection resource even though it occurred during
         * a prepared statement.
         */
        if (\$conn && ! \$code) {
            \$code    = sasql_errorcode(\$conn);
            \$message = sasql_error(\$conn);
        }

        /**
         * Fallback mode if either no connection resource is given
         * or the last error could not be retrieved from the given
         * connection / statement resource.
         */
        if (! \$conn || ! \$code) {
            \$code    = sasql_errorcode();
            \$message = sasql_error();
        }

        if (\$message) {
            return new self('SQLSTATE [' . \$state . '] [' . \$code . '] ' . \$message, \$state, \$code);
        }

        return new self('SQL Anywhere error occurred but no error message was retrieved from driver.', \$state, \$code);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLAnywhere;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use InvalidArgumentException;
use function is_resource;
use function sasql_error;
use function sasql_errorcode;
use function sasql_sqlstate;
use function sasql_stmt_errno;
use function sasql_stmt_error;

/**
 * SAP Sybase SQL Anywhere driver exception.
 */
class SQLAnywhereException extends AbstractDriverException
{
    /**
     * Helper method to turn SQL Anywhere error into exception.
     *
     * @param resource|null \$conn The SQL Anywhere connection resource to retrieve the last error from.
     * @param resource|null \$stmt The SQL Anywhere statement resource to retrieve the last error from.
     *
     * @return SQLAnywhereException
     *
     * @throws InvalidArgumentException
     */
    public static function fromSQLAnywhereError(\$conn = null, \$stmt = null)
    {
        if (\$conn !== null && ! is_resource(\$conn)) {
            throw new InvalidArgumentException('Invalid SQL Anywhere connection resource given: ' . \$conn);
        }

        if (\$stmt !== null && ! is_resource(\$stmt)) {
            throw new InvalidArgumentException('Invalid SQL Anywhere statement resource given: ' . \$stmt);
        }

        \$state   = \$conn ? sasql_sqlstate(\$conn) : sasql_sqlstate();
        \$code    = null;
        \$message = null;

        /**
         * Try retrieving the last error from statement resource if given
         */
        if (\$stmt) {
            \$code    = sasql_stmt_errno(\$stmt);
            \$message = sasql_stmt_error(\$stmt);
        }

        /**
         * Try retrieving the last error from the connection resource
         * if either the statement resource is not given or the statement
         * resource is given but the last error could not be retrieved from it (fallback).
         * Depending on the type of error, it is sometimes necessary to retrieve
         * it from the connection resource even though it occurred during
         * a prepared statement.
         */
        if (\$conn && ! \$code) {
            \$code    = sasql_errorcode(\$conn);
            \$message = sasql_error(\$conn);
        }

        /**
         * Fallback mode if either no connection resource is given
         * or the last error could not be retrieved from the given
         * connection / statement resource.
         */
        if (! \$conn || ! \$code) {
            \$code    = sasql_errorcode();
            \$message = sasql_error();
        }

        if (\$message) {
            return new self('SQLSTATE [' . \$state . '] [' . \$code . '] ' . \$message, \$state, \$code);
        }

        return new self('SQL Anywhere error occurred but no error message was retrieved from driver.', \$state, \$code);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php");
    }
}
