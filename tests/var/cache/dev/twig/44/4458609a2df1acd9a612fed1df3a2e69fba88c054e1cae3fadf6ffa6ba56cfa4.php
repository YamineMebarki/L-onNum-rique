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

/* vendor/fig/link-util/src/TemplatedHrefTrait.php */
class __TwigTemplate_3f32cb26da54ce58684cd0f1b7ad4c7fbeec45adff438c17ba5ecfcbaf7f8c34 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/TemplatedHrefTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/src/TemplatedHrefTrait.php"));

        // line 1
        echo "<?php


namespace Fig\\Link;

trait TemplatedHrefTrait
{
    /**
     * Determines if an href is a templated link or not.
     *
     * @see https://tools.ietf.org/html/rfc6570
     *
     * @param string \$href
     *   The href value to check.
     *
     * @return bool
     *   True if the specified href is a templated path, False otherwise.
     */
    private function hrefIsTemplated(\$href)
    {
        return strpos(\$href, '{') !== false ||strpos(\$href, '}') !== false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/src/TemplatedHrefTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Fig\\Link;

trait TemplatedHrefTrait
{
    /**
     * Determines if an href is a templated link or not.
     *
     * @see https://tools.ietf.org/html/rfc6570
     *
     * @param string \$href
     *   The href value to check.
     *
     * @return bool
     *   True if the specified href is a templated path, False otherwise.
     */
    private function hrefIsTemplated(\$href)
    {
        return strpos(\$href, '{') !== false ||strpos(\$href, '}') !== false;
    }
}
", "vendor/fig/link-util/src/TemplatedHrefTrait.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/src/TemplatedHrefTrait.php");
    }
}
