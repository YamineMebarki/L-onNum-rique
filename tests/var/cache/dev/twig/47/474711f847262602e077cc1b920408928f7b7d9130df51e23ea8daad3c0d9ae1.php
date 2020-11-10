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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php */
class __TwigTemplate_ae11d4e886f6d44424529e0274f7f83326b5cf7f7c985798f47ca8b9592a9d11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use const SQLSRV_ERR_ERRORS;
use function rtrim;
use function sqlsrv_errors;

class SQLSrvException extends AbstractDriverException
{
    /**
     * Helper method to turn sql server errors into exception.
     *
     * @return \\Doctrine\\DBAL\\Driver\\SQLSrv\\SQLSrvException
     */
    public static function fromSqlSrvErrors()
    {
        \$errors    = sqlsrv_errors(SQLSRV_ERR_ERRORS);
        \$message   = '';
        \$sqlState  = null;
        \$errorCode = null;

        foreach (\$errors as \$error) {
            \$message .= 'SQLSTATE [' . \$error['SQLSTATE'] . ', ' . \$error['code'] . ']: ' . \$error['message'] . \"\\n\";

            if (\$sqlState === null) {
                \$sqlState = \$error['SQLSTATE'];
            }

            if (\$errorCode !== null) {
                continue;
            }

            \$errorCode = \$error['code'];
        }
        if (! \$message) {
            \$message = 'SQL Server error occurred but no error message was retrieved from driver.';
        }

        return new self(rtrim(\$message), \$sqlState, \$errorCode);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use const SQLSRV_ERR_ERRORS;
use function rtrim;
use function sqlsrv_errors;

class SQLSrvException extends AbstractDriverException
{
    /**
     * Helper method to turn sql server errors into exception.
     *
     * @return \\Doctrine\\DBAL\\Driver\\SQLSrv\\SQLSrvException
     */
    public static function fromSqlSrvErrors()
    {
        \$errors    = sqlsrv_errors(SQLSRV_ERR_ERRORS);
        \$message   = '';
        \$sqlState  = null;
        \$errorCode = null;

        foreach (\$errors as \$error) {
            \$message .= 'SQLSTATE [' . \$error['SQLSTATE'] . ', ' . \$error['code'] . ']: ' . \$error['message'] . \"\\n\";

            if (\$sqlState === null) {
                \$sqlState = \$error['SQLSTATE'];
            }

            if (\$errorCode !== null) {
                continue;
            }

            \$errorCode = \$error['code'];
        }
        if (! \$message) {
            \$message = 'SQL Server error occurred but no error message was retrieved from driver.';
        }

        return new self(rtrim(\$message), \$sqlState, \$errorCode);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php");
    }
}
