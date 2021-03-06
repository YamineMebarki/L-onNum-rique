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

/* vendor/symfony/intl/Resources/data/languages/bo.json */
class __TwigTemplate_f87f208ddba0229e87862cffae50c8f6d151d9be69afc9bdf5b16d0e6b0c41ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/bo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/bo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"bo\": \"བོད་སྐད་\",
        \"dz\": \"རྫོང་ཁ\",
        \"en\": \"དབྱིན་ཇིའི་སྐད།\",
        \"en_CA\": \"དབྱིན་ཇིའི་སྐད། (ཁེ་ན་ཌ་)\",
        \"en_GB\": \"དབྱིན་ཇིའི་སྐད། (དབྱིན་ལན་)\",
        \"en_US\": \"དབྱིན་ཇིའི་སྐད། (ཨ་རི་)\",
        \"hi\": \"ཧིན་དི\",
        \"ja\": \"ཉི་ཧོང་སྐད་\",
        \"ne\": \"ནེ་པ་ལི\",
        \"ru\": \"ཨུ་རུ་སུ་སྐད་\",
        \"zh\": \"རྒྱ་སྐད་\",
        \"zza\": \"ཟ་ཟའ་སྐད།\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/bo.json";
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
        \"bo\": \"བོད་སྐད་\",
        \"dz\": \"རྫོང་ཁ\",
        \"en\": \"དབྱིན་ཇིའི་སྐད།\",
        \"en_CA\": \"དབྱིན་ཇིའི་སྐད། (ཁེ་ན་ཌ་)\",
        \"en_GB\": \"དབྱིན་ཇིའི་སྐད། (དབྱིན་ལན་)\",
        \"en_US\": \"དབྱིན་ཇིའི་སྐད། (ཨ་རི་)\",
        \"hi\": \"ཧིན་དི\",
        \"ja\": \"ཉི་ཧོང་སྐད་\",
        \"ne\": \"ནེ་པ་ལི\",
        \"ru\": \"ཨུ་རུ་སུ་སྐད་\",
        \"zh\": \"རྒྱ་སྐད་\",
        \"zza\": \"ཟ་ཟའ་སྐད།\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/bo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/bo.json");
    }
}
