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

/* vendor/doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php */
class __TwigTemplate_822cf1b4756fc3fad2693d0a0a3e60121ce56cfb92d7179dabdb049740e9024d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common;

/**
 * Interface for classes that notify event listeners of changes to their managed properties.
 *
 * This interface is implemented by objects that manually want to notify their object manager or
 * other listeners when properties change, instead of relying on the object manager to compute
 * property changes itself when changes are to be persisted.
 */
interface NotifyPropertyChanged
{
    /**
     * Adds a listener that wants to be notified about property changes.
     *
     * @return void
     */
    public function addPropertyChangedListener(PropertyChangedListener \$listener);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php";
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
 * Interface for classes that notify event listeners of changes to their managed properties.
 *
 * This interface is implemented by objects that manually want to notify their object manager or
 * other listeners when properties change, instead of relying on the object manager to compute
 * property changes itself when changes are to be persisted.
 */
interface NotifyPropertyChanged
{
    /**
     * Adds a listener that wants to be notified about property changes.
     *
     * @return void
     */
    public function addPropertyChangedListener(PropertyChangedListener \$listener);
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php");
    }
}
