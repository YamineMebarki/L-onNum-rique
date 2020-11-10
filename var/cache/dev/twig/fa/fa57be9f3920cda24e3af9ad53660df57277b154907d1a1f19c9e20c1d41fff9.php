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

/* vendor/webmozart/assert/psalm.xml */
class __TwigTemplate_a87dad12d3ed230f2e7ddf0a8f6d79f3719830091d2d671ae7021355bbf3585e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/webmozart/assert/psalm.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/webmozart/assert/psalm.xml"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<psalm
    totallyTyped=\"true\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns=\"https://getpsalm.org/schema/config\"
    xsi:schemaLocation=\"https://getpsalm.org/schema/config ci/vendor/vimeo/psalm/config.xsd\"
>
    <projectFiles>
        <directory name=\"tests/static-analysis\" />
        <ignoreFiles>
            <directory name=\"vendor\" />
        </ignoreFiles>
    </projectFiles>

</psalm>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/webmozart/assert/psalm.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<psalm
    totallyTyped=\"true\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns=\"https://getpsalm.org/schema/config\"
    xsi:schemaLocation=\"https://getpsalm.org/schema/config ci/vendor/vimeo/psalm/config.xsd\"
>
    <projectFiles>
        <directory name=\"tests/static-analysis\" />
        <ignoreFiles>
            <directory name=\"vendor\" />
        </ignoreFiles>
    </projectFiles>

</psalm>
", "vendor/webmozart/assert/psalm.xml", "/var/www/public/DevLaon/templates/vendor/webmozart/assert/psalm.xml");
    }
}
