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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php */
class __TwigTemplate_e934fe5e3c5e636d916d0661bf654ad8feb6795ff860be0f50970e112963fa7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

/**
 * Locates the file that contains the metadata information for a given class name.
 *
 * This behavior is independent of the actual content of the file. It just detects
 * the file which is responsible for the given class name.
 */
interface FileLocator
{
    /**
     * Locates mapping file for the given class name.
     *
     * @param string \$className
     *
     * @return string
     */
    public function findMappingFile(\$className);

    /**
     * Gets all class names that are found with this file locator.
     *
     * @param string \$globalBasename Passed to allow excluding the basename.
     *
     * @return string[]
     */
    public function getAllClassNames(\$globalBasename);

    /**
     * Checks if a file can be found for this class name.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function fileExists(\$className);

    /**
     * Gets all the paths that this file locator looks for mapping files.
     *
     * @return string[]
     */
    public function getPaths();

    /**
     * Gets the file extension that mapping files are suffixed with.
     *
     * @return string
     */
    public function getFileExtension();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

/**
 * Locates the file that contains the metadata information for a given class name.
 *
 * This behavior is independent of the actual content of the file. It just detects
 * the file which is responsible for the given class name.
 */
interface FileLocator
{
    /**
     * Locates mapping file for the given class name.
     *
     * @param string \$className
     *
     * @return string
     */
    public function findMappingFile(\$className);

    /**
     * Gets all class names that are found with this file locator.
     *
     * @param string \$globalBasename Passed to allow excluding the basename.
     *
     * @return string[]
     */
    public function getAllClassNames(\$globalBasename);

    /**
     * Checks if a file can be found for this class name.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function fileExists(\$className);

    /**
     * Gets all the paths that this file locator looks for mapping files.
     *
     * @return string[]
     */
    public function getPaths();

    /**
     * Gets the file extension that mapping files are suffixed with.
     *
     * @return string
     */
    public function getFileExtension();
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php");
    }
}
