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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/Util/ParameterEncoder.php */
class __TwigTemplate_2021fa921e11d2b4b88514c0a4d48770aeb8e89524814654c7c47fe25ec30176 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/Util/ParameterEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/Util/ParameterEncoder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Inflector\\Util;

/**
 * Encodes parameters into a class-name safe string
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ParameterEncoder
{
    /**
     * Converts the given parameters into a set of characters that are safe to
     * use in a class name
     */
    public function encodeParameters(array \$parameters) : string
    {
        return base64_encode(serialize(\$parameters));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/Util/ParameterEncoder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Inflector\\Util;

/**
 * Encodes parameters into a class-name safe string
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ParameterEncoder
{
    /**
     * Converts the given parameters into a set of characters that are safe to
     * use in a class name
     */
    public function encodeParameters(array \$parameters) : string
    {
        return base64_encode(serialize(\$parameters));
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/Util/ParameterEncoder.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/Util/ParameterEncoder.php");
    }
}
