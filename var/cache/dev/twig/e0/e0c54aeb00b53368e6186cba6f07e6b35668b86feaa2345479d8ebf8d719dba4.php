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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php */
class __TwigTemplate_2ced7109d731b018f6db41238791ba2b7a3db286b96976203d4a1b9a0a1172ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

/**
 * Contract for a driver that is capable of converting DBAL driver exceptions into standardized DBAL driver exceptions.
 */
interface ExceptionConverterDriver
{
    /**
     * Converts a given DBAL driver exception into a standardized DBAL driver exception.
     *
     * It evaluates the vendor specific error code and SQLSTATE and transforms
     * it into a unified {@link Doctrine\\DBAL\\Exception\\DriverException} subclass.
     *
     * @param string          \$message   The DBAL exception message to use.
     * @param DriverException \$exception The DBAL driver exception to convert.
     *
     * @return \\Doctrine\\DBAL\\Exception\\DriverException An instance of one of the DriverException subclasses.
     */
    public function convertException(\$message, DriverException \$exception);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php";
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
 * Contract for a driver that is capable of converting DBAL driver exceptions into standardized DBAL driver exceptions.
 */
interface ExceptionConverterDriver
{
    /**
     * Converts a given DBAL driver exception into a standardized DBAL driver exception.
     *
     * It evaluates the vendor specific error code and SQLSTATE and transforms
     * it into a unified {@link Doctrine\\DBAL\\Exception\\DriverException} subclass.
     *
     * @param string          \$message   The DBAL exception message to use.
     * @param DriverException \$exception The DBAL driver exception to convert.
     *
     * @return \\Doctrine\\DBAL\\Exception\\DriverException An instance of one of the DriverException subclasses.
     */
    public function convertException(\$message, DriverException \$exception);
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php");
    }
}
