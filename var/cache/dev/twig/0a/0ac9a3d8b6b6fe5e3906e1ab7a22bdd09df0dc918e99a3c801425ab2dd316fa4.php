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

/* vendor/symfony/intl/Resources/data/scripts/bo.json */
class __TwigTemplate_91c637d2fc9f94a8bd5366826b977c66a8ba0543c3998e98de78872342fc09e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/bo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/bo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Hans\": \"རྒྱ་ཡིག་གསར་པ།\",
        \"Hant\": \"རྒྱ་ཡིག་རྙིང་པ།\",
        \"Tibt\": \"བོད་ཡིག་\",
        \"Zxxx\": \"སྙན་བརྒྱུད། ཡིག་རིགས་སུ་མ་བཀོད་པའི་ཟིན་ཐོ།\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/bo.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"Hans\": \"རྒྱ་ཡིག་གསར་པ།\",
        \"Hant\": \"རྒྱ་ཡིག་རྙིང་པ།\",
        \"Tibt\": \"བོད་ཡིག་\",
        \"Zxxx\": \"སྙན་བརྒྱུད། ཡིག་རིགས་སུ་མ་བཀོད་པའི་ཟིན་ཐོ།\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/bo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/bo.json");
    }
}
