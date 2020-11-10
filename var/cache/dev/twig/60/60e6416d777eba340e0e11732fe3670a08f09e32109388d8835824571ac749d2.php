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

/* vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php */
class __TwigTemplate_2826fc98655724ff152fa3a14b4d968f5192f77f0b2e3d76e37f338cc33da13b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

interface ReflectionProviderInterface
{
    /**
     * Gets the ReflectionClass equivalent for this class.
     *
     * @return \\ReflectionClass
     */
    public function getReflectionClass();

    /**
     * Gets the ReflectionMethod equivalent for this class.
     *
     * @param string \$name
     *
     * @return \\ReflectionMethod
     */
    public function getReflectionMethod(\$name);

    /**
     * Gets the ReflectionProperty equivalent for this class.
     *
     * @param string \$name
     *
     * @return \\ReflectionProperty
     */
    public function getReflectionProperty(\$name);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

interface ReflectionProviderInterface
{
    /**
     * Gets the ReflectionClass equivalent for this class.
     *
     * @return \\ReflectionClass
     */
    public function getReflectionClass();

    /**
     * Gets the ReflectionMethod equivalent for this class.
     *
     * @param string \$name
     *
     * @return \\ReflectionMethod
     */
    public function getReflectionMethod(\$name);

    /**
     * Gets the ReflectionProperty equivalent for this class.
     *
     * @param string \$name
     *
     * @return \\ReflectionProperty
     */
    public function getReflectionProperty(\$name);
}
", "vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php", "/var/www/public/DevLaon/templates/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php");
    }
}
