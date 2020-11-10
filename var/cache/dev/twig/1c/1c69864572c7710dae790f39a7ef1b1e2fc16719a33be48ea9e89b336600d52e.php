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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php */
class __TwigTemplate_288611edeeed252bc9b072fab8115829e77195ada384b25e455bfb1073d29398 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

class ConnectionException extends DBALException
{
    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function commitFailedRollbackOnly()
    {
        return new self('Transaction commit failed because the transaction has been marked for rollback only.');
    }

    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function noActiveTransaction()
    {
        return new self('There is no active transaction.');
    }

    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function savepointsNotSupported()
    {
        return new self('Savepoints are not supported by this driver.');
    }

    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function mayNotAlterNestedTransactionWithSavepointsInTransaction()
    {
        return new self('May not alter the nested transaction with savepoints behavior while a transaction is open.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL;

class ConnectionException extends DBALException
{
    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function commitFailedRollbackOnly()
    {
        return new self('Transaction commit failed because the transaction has been marked for rollback only.');
    }

    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function noActiveTransaction()
    {
        return new self('There is no active transaction.');
    }

    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function savepointsNotSupported()
    {
        return new self('Savepoints are not supported by this driver.');
    }

    /**
     * @return \\Doctrine\\DBAL\\ConnectionException
     */
    public static function mayNotAlterNestedTransactionWithSavepointsInTransaction()
    {
        return new self('May not alter the nested transaction with savepoints behavior while a transaction is open.');
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php");
    }
}
