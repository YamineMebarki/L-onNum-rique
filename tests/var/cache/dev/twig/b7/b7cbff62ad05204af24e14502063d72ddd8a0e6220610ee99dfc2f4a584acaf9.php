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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php */
class __TwigTemplate_5269e036a58aa21275ca1b178aebc5fac1197753aa0f23a5406616c5fc245412 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Contract for a driver that is able to create platform instances by version.
 *
 * Doctrine uses different platform classes for different vendor versions to
 * support the correct features and SQL syntax of each version.
 * This interface should be implemented by drivers that are capable to do this
 * distinction.
 */
interface VersionAwarePlatformDriver
{
    /**
     * Factory method for creating the appropriate platform instance for the given version.
     *
     * @param string \$version The platform/server version string to evaluate. This should be given in the notation
     *                        the underlying database vendor uses.
     *
     * @return AbstractPlatform
     *
     * @throws DBALException If the given version string could not be evaluated.
     */
    public function createDatabasePlatformForVersion(\$version);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Contract for a driver that is able to create platform instances by version.
 *
 * Doctrine uses different platform classes for different vendor versions to
 * support the correct features and SQL syntax of each version.
 * This interface should be implemented by drivers that are capable to do this
 * distinction.
 */
interface VersionAwarePlatformDriver
{
    /**
     * Factory method for creating the appropriate platform instance for the given version.
     *
     * @param string \$version The platform/server version string to evaluate. This should be given in the notation
     *                        the underlying database vendor uses.
     *
     * @return AbstractPlatform
     *
     * @throws DBALException If the given version string could not be evaluated.
     */
    public function createDatabasePlatformForVersion(\$version);
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php");
    }
}
