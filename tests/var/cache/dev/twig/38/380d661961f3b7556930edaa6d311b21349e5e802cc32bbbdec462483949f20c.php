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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php */
class __TwigTemplate_8ec5b555ff4737191983eca019de06c8755fa31dc4a934e39a79cc975b49b036 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Exception;

use Doctrine\\DBAL\\DBALException;
use Exception;

/**
 * Base class for all errors detected in the driver.
 */
class DriverException extends DBALException
{
    /**
     * The previous DBAL driver exception.
     *
     * @var \\Doctrine\\DBAL\\Driver\\DriverException
     */
    private \$driverException;

    /**
     * @param string                                \$message         The exception message.
     * @param \\Doctrine\\DBAL\\Driver\\DriverException \$driverException The DBAL driver exception to chain.
     */
    public function __construct(\$message, \\Doctrine\\DBAL\\Driver\\DriverException \$driverException)
    {
        \$exception = null;

        if (\$driverException instanceof Exception) {
            \$exception = \$driverException;
        }

        parent::__construct(\$message, 0, \$exception);

        \$this->driverException = \$driverException;
    }

    /**
     * Returns the driver specific error code if given.
     *
     * Returns null if no error code was given by the driver.
     *
     * @return int|string|null
     */
    public function getErrorCode()
    {
        return \$this->driverException->getErrorCode();
    }

    /**
     * Returns the SQLSTATE the driver was in at the time the error occurred, if given.
     *
     * Returns null if no SQLSTATE was given by the driver.
     *
     * @return string|null
     */
    public function getSQLState()
    {
        return \$this->driverException->getSQLState();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Exception;

use Doctrine\\DBAL\\DBALException;
use Exception;

/**
 * Base class for all errors detected in the driver.
 */
class DriverException extends DBALException
{
    /**
     * The previous DBAL driver exception.
     *
     * @var \\Doctrine\\DBAL\\Driver\\DriverException
     */
    private \$driverException;

    /**
     * @param string                                \$message         The exception message.
     * @param \\Doctrine\\DBAL\\Driver\\DriverException \$driverException The DBAL driver exception to chain.
     */
    public function __construct(\$message, \\Doctrine\\DBAL\\Driver\\DriverException \$driverException)
    {
        \$exception = null;

        if (\$driverException instanceof Exception) {
            \$exception = \$driverException;
        }

        parent::__construct(\$message, 0, \$exception);

        \$this->driverException = \$driverException;
    }

    /**
     * Returns the driver specific error code if given.
     *
     * Returns null if no error code was given by the driver.
     *
     * @return int|string|null
     */
    public function getErrorCode()
    {
        return \$this->driverException->getErrorCode();
    }

    /**
     * Returns the SQLSTATE the driver was in at the time the error occurred, if given.
     *
     * Returns null if no SQLSTATE was given by the driver.
     *
     * @return string|null
     */
    public function getSQLState()
    {
        return \$this->driverException->getSQLState();
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php");
    }
}
