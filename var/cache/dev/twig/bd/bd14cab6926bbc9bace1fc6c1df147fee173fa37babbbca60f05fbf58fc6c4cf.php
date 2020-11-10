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

/* vendor/doctrine/common/lib/Doctrine/Common/Util/Inflector.php */
class __TwigTemplate_f8205f1f6dee96df785bbc063fac22af03f499413a0023c891e09912f24f9be0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Util/Inflector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Util/Inflector.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Inflector\\Inflector as BaseInflector;
use function trigger_error;
use const E_USER_DEPRECATED;

@trigger_error(Inflector::class . ' is deprecated.', E_USER_DEPRECATED);

/**
 * Doctrine inflector has static methods for inflecting text.
 *
 * Kept for backwards compatibility reasons, was moved to its own component.
 *
 * @deprecated The Inflector class is deprecated, use Doctrine\\Common\\Inflector\\Inflector from doctrine/inflector package instead,
 */
class Inflector extends BaseInflector
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Util/Inflector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Inflector\\Inflector as BaseInflector;
use function trigger_error;
use const E_USER_DEPRECATED;

@trigger_error(Inflector::class . ' is deprecated.', E_USER_DEPRECATED);

/**
 * Doctrine inflector has static methods for inflecting text.
 *
 * Kept for backwards compatibility reasons, was moved to its own component.
 *
 * @deprecated The Inflector class is deprecated, use Doctrine\\Common\\Inflector\\Inflector from doctrine/inflector package instead,
 */
class Inflector extends BaseInflector
{
}
", "vendor/doctrine/common/lib/Doctrine/Common/Util/Inflector.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Util/Inflector.php");
    }
}
