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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php */
class __TwigTemplate_a04ded1462bdba3940566a55b507e36a544ed77b6b51f0852311846720e2b58a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

/**
 * Tiny wrapper for PDOException instances to implement the {@link DriverException} interface.
 */
class PDOException extends \\PDOException implements DriverException
{
    /**
     * The driver specific error code.
     *
     * @var int|string|null
     */
    private \$errorCode;

    /**
     * The SQLSTATE of the driver.
     *
     * @var string|null
     */
    private \$sqlState;

    /**
     * @param \\PDOException \$exception The PDO exception to wrap.
     */
    public function __construct(\\PDOException \$exception)
    {
        parent::__construct(\$exception->getMessage(), 0, \$exception);

        \$this->code      = \$exception->getCode();
        \$this->errorInfo = \$exception->errorInfo;
        \$this->errorCode = \$exception->errorInfo[1] ?? \$exception->getCode();
        \$this->sqlState  = \$exception->errorInfo[0] ?? \$exception->getCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorCode()
    {
        return \$this->errorCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLState()
    {
        return \$this->sqlState;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

/**
 * Tiny wrapper for PDOException instances to implement the {@link DriverException} interface.
 */
class PDOException extends \\PDOException implements DriverException
{
    /**
     * The driver specific error code.
     *
     * @var int|string|null
     */
    private \$errorCode;

    /**
     * The SQLSTATE of the driver.
     *
     * @var string|null
     */
    private \$sqlState;

    /**
     * @param \\PDOException \$exception The PDO exception to wrap.
     */
    public function __construct(\\PDOException \$exception)
    {
        parent::__construct(\$exception->getMessage(), 0, \$exception);

        \$this->code      = \$exception->getCode();
        \$this->errorInfo = \$exception->errorInfo;
        \$this->errorCode = \$exception->errorInfo[1] ?? \$exception->getCode();
        \$this->sqlState  = \$exception->errorInfo[0] ?? \$exception->getCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorCode()
    {
        return \$this->errorCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLState()
    {
        return \$this->sqlState;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php");
    }
}
