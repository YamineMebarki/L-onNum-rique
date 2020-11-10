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

/* vendor/doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php */
class __TwigTemplate_0652475ab6c6e64d18ece90ee911651e40e25bf761686bfa15f08cc2542ce56f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common;

/**
 * Contract for classes that are potential listeners of a {@see NotifyPropertyChanged}
 * implementor.
 */
interface PropertyChangedListener
{
    /**
     * Collect information about a property change.
     *
     * @param object \$sender       The object on which the property changed.
     * @param string \$propertyName The name of the property that changed.
     * @param mixed  \$oldValue     The old value of the property that changed.
     * @param mixed  \$newValue     The new value of the property that changed.
     *
     * @return void
     */
    public function propertyChanged(\$sender, \$propertyName, \$oldValue, \$newValue);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common;

/**
 * Contract for classes that are potential listeners of a {@see NotifyPropertyChanged}
 * implementor.
 */
interface PropertyChangedListener
{
    /**
     * Collect information about a property change.
     *
     * @param object \$sender       The object on which the property changed.
     * @param string \$propertyName The name of the property that changed.
     * @param mixed  \$oldValue     The old value of the property that changed.
     * @param mixed  \$newValue     The new value of the property that changed.
     *
     * @return void
     */
    public function propertyChanged(\$sender, \$propertyName, \$oldValue, \$newValue);
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php");
    }
}
