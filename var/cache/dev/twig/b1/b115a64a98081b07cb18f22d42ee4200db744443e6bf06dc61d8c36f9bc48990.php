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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php */
class __TwigTemplate_30daba1854bd811809d649a8fbf3a3bbf22826db8ef14b65f33b68679f327095 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use ReflectionClass;
use ReflectionProperty;

/**
 * Very simple reflection service abstraction.
 *
 * This is required inside metadata layers that may require either
 * static or runtime reflection.
 */
interface ReflectionService
{
    /**
     * Returns an array of the parent classes (not interfaces) for the given class.
     *
     * @param string \$class
     *
     * @return string[]
     *
     * @throws MappingException
     */
    public function getParentClasses(\$class);

    /**
     * Returns the shortname of a class.
     *
     * @param string \$class
     *
     * @return string
     */
    public function getClassShortName(\$class);

    /**
     * @param string \$class
     *
     * @return string
     */
    public function getClassNamespace(\$class);

    /**
     * Returns a reflection class instance or null.
     *
     * @param string \$class
     *
     * @return ReflectionClass|null
     */
    public function getClass(\$class);

    /**
     * Returns an accessible property (setAccessible(true)) or null.
     *
     * @param string \$class
     * @param string \$property
     *
     * @return ReflectionProperty|null
     */
    public function getAccessibleProperty(\$class, \$property);

    /**
     * Checks if the class have a public method with the given name.
     *
     * @param mixed \$class
     * @param mixed \$method
     *
     * @return bool
     */
    public function hasPublicMethod(\$class, \$method);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping;

use ReflectionClass;
use ReflectionProperty;

/**
 * Very simple reflection service abstraction.
 *
 * This is required inside metadata layers that may require either
 * static or runtime reflection.
 */
interface ReflectionService
{
    /**
     * Returns an array of the parent classes (not interfaces) for the given class.
     *
     * @param string \$class
     *
     * @return string[]
     *
     * @throws MappingException
     */
    public function getParentClasses(\$class);

    /**
     * Returns the shortname of a class.
     *
     * @param string \$class
     *
     * @return string
     */
    public function getClassShortName(\$class);

    /**
     * @param string \$class
     *
     * @return string
     */
    public function getClassNamespace(\$class);

    /**
     * Returns a reflection class instance or null.
     *
     * @param string \$class
     *
     * @return ReflectionClass|null
     */
    public function getClass(\$class);

    /**
     * Returns an accessible property (setAccessible(true)) or null.
     *
     * @param string \$class
     * @param string \$property
     *
     * @return ReflectionProperty|null
     */
    public function getAccessibleProperty(\$class, \$property);

    /**
     * Checks if the class have a public method with the given name.
     *
     * @param mixed \$class
     * @param mixed \$method
     *
     * @return bool
     */
    public function hasPublicMethod(\$class, \$method);
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php");
    }
}
