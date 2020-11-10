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

/* vendor/symfony/intl/Resources/data/locales/bo.json */
class __TwigTemplate_51e1d51718fd0081425293e011bc226995b8ab2fec324b1085fb1376cb495f3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/bo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/bo.json"));

        // line 1
        echo "{
    \"Names\": {
        \"bo\": \"བོད་སྐད་\",
        \"bo_CN\": \"བོད་སྐད་ (རྒྱ་ནག)\",
        \"bo_IN\": \"བོད་སྐད་ (རྒྱ་གར་)\",
        \"dz\": \"རྫོང་ཁ\",
        \"en\": \"དབྱིན་ཇིའི་སྐད།\",
        \"en_DE\": \"དབྱིན་ཇིའི་སྐད། (འཇར་མན་)\",
        \"en_GB\": \"དབྱིན་ཇིའི་སྐད། (དབྱིན་ཇི་)\",
        \"en_IN\": \"དབྱིན་ཇིའི་སྐད། (རྒྱ་གར་)\",
        \"en_US\": \"དབྱིན་ཇིའི་སྐད། (ཨ་མེ་རི་ཀ།)\",
        \"hi\": \"ཧིན་དི\",
        \"hi_IN\": \"ཧིན་དི (རྒྱ་གར་)\",
        \"ja\": \"ཉི་ཧོང་སྐད་\",
        \"ja_JP\": \"ཉི་ཧོང་སྐད་ (ཉི་ཧོང་)\",
        \"ne\": \"ནེ་པ་ལི\",
        \"ne_IN\": \"ནེ་པ་ལི (རྒྱ་གར་)\",
        \"ne_NP\": \"ནེ་པ་ལི (བལ་ཡུལ་)\",
        \"ru\": \"ཨུ་རུ་སུ་སྐད་\",
        \"ru_RU\": \"ཨུ་རུ་སུ་སྐད་ (ཨུ་རུ་སུ་)\",
        \"zh\": \"རྒྱ་སྐད་\",
        \"zh_CN\": \"རྒྱ་སྐད་ (རྒྱ་ནག)\",
        \"zh_Hans\": \"རྒྱ་སྐད་ (རྒྱ་ཡིག་གསར་པ།)\",
        \"zh_Hans_CN\": \"རྒྱ་སྐད་ (རྒྱ་ཡིག་གསར་པ།, རྒྱ་ནག)\",
        \"zh_Hant\": \"རྒྱ་སྐད་ (རྒྱ་ཡིག་རྙིང་པ།)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/bo.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"bo\": \"བོད་སྐད་\",
        \"bo_CN\": \"བོད་སྐད་ (རྒྱ་ནག)\",
        \"bo_IN\": \"བོད་སྐད་ (རྒྱ་གར་)\",
        \"dz\": \"རྫོང་ཁ\",
        \"en\": \"དབྱིན་ཇིའི་སྐད།\",
        \"en_DE\": \"དབྱིན་ཇིའི་སྐད། (འཇར་མན་)\",
        \"en_GB\": \"དབྱིན་ཇིའི་སྐད། (དབྱིན་ཇི་)\",
        \"en_IN\": \"དབྱིན་ཇིའི་སྐད། (རྒྱ་གར་)\",
        \"en_US\": \"དབྱིན་ཇིའི་སྐད། (ཨ་མེ་རི་ཀ།)\",
        \"hi\": \"ཧིན་དི\",
        \"hi_IN\": \"ཧིན་དི (རྒྱ་གར་)\",
        \"ja\": \"ཉི་ཧོང་སྐད་\",
        \"ja_JP\": \"ཉི་ཧོང་སྐད་ (ཉི་ཧོང་)\",
        \"ne\": \"ནེ་པ་ལི\",
        \"ne_IN\": \"ནེ་པ་ལི (རྒྱ་གར་)\",
        \"ne_NP\": \"ནེ་པ་ལི (བལ་ཡུལ་)\",
        \"ru\": \"ཨུ་རུ་སུ་སྐད་\",
        \"ru_RU\": \"ཨུ་རུ་སུ་སྐད་ (ཨུ་རུ་སུ་)\",
        \"zh\": \"རྒྱ་སྐད་\",
        \"zh_CN\": \"རྒྱ་སྐད་ (རྒྱ་ནག)\",
        \"zh_Hans\": \"རྒྱ་སྐད་ (རྒྱ་ཡིག་གསར་པ།)\",
        \"zh_Hans_CN\": \"རྒྱ་སྐད་ (རྒྱ་ཡིག་གསར་པ།, རྒྱ་ནག)\",
        \"zh_Hant\": \"རྒྱ་སྐད་ (རྒྱ་ཡིག་རྙིང་པ།)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/bo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/bo.json");
    }
}
