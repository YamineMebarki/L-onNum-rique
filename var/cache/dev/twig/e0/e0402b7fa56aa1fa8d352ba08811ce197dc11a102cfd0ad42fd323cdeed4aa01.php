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

/* vendor/symfony/intl/Resources/data/scripts/kk.json */
class __TwigTemplate_4ea9f3912f134eef36fb902bc3cb6a7c07db5bbc1ad6ffac8066f3508019e49d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/kk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/kk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"араб жазуы\",
        \"Armn\": \"армян жазуы\",
        \"Beng\": \"бенгал жазуы\",
        \"Bopo\": \"бопомофо жазуы\",
        \"Brai\": \"Брайль жазуы\",
        \"Cyrl\": \"кирилл жазуы\",
        \"Deva\": \"деванагари жазуы\",
        \"Ethi\": \"эфиопиялық жазу\",
        \"Geor\": \"грузин жазуы\",
        \"Grek\": \"грек жазуы\",
        \"Gujr\": \"гуджарати жазуы\",
        \"Guru\": \"гурмукхи жазуы\",
        \"Hanb\": \"ханб жазуы\",
        \"Hang\": \"хангыл жазуы\",
        \"Hani\": \"қытай жазуы\",
        \"Hans\": \"жеңілдетілген қытай иероглифы\",
        \"Hant\": \"дәстүрлі қытай иероглифы\",
        \"Hebr\": \"иврит жазуы\",
        \"Hira\": \"хирагана жазуы\",
        \"Hrkt\": \"хирагана немесе катакана\",
        \"Jamo\": \"джамо жазуы\",
        \"Jpan\": \"жапон жазуы\",
        \"Kana\": \"катакана жазуы\",
        \"Khmr\": \"кхмер жазуы\",
        \"Knda\": \"каннада жазуы\",
        \"Kore\": \"корей жазуы\",
        \"Laoo\": \"лаос жазуы\",
        \"Latn\": \"латын жазуы\",
        \"Mlym\": \"малаялам жазуы\",
        \"Mong\": \"моңғол жазуы\",
        \"Mymr\": \"мьянма жазуы\",
        \"Orya\": \"ория жазуы\",
        \"Sinh\": \"сингаль жазуы\",
        \"Taml\": \"тамиль жазуы\",
        \"Telu\": \"телугу жазуы\",
        \"Thaa\": \"тана жазуы\",
        \"Thai\": \"тай жазуы\",
        \"Tibt\": \"тибет жазуы\",
        \"Zmth\": \"математикалық жазу\",
        \"Zsye\": \"эмодзи\",
        \"Zsym\": \"таңбалар\",
        \"Zxxx\": \"жазусыз\",
        \"Zyyy\": \"жалпы\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/kk.json";
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
        \"Arab\": \"араб жазуы\",
        \"Armn\": \"армян жазуы\",
        \"Beng\": \"бенгал жазуы\",
        \"Bopo\": \"бопомофо жазуы\",
        \"Brai\": \"Брайль жазуы\",
        \"Cyrl\": \"кирилл жазуы\",
        \"Deva\": \"деванагари жазуы\",
        \"Ethi\": \"эфиопиялық жазу\",
        \"Geor\": \"грузин жазуы\",
        \"Grek\": \"грек жазуы\",
        \"Gujr\": \"гуджарати жазуы\",
        \"Guru\": \"гурмукхи жазуы\",
        \"Hanb\": \"ханб жазуы\",
        \"Hang\": \"хангыл жазуы\",
        \"Hani\": \"қытай жазуы\",
        \"Hans\": \"жеңілдетілген қытай иероглифы\",
        \"Hant\": \"дәстүрлі қытай иероглифы\",
        \"Hebr\": \"иврит жазуы\",
        \"Hira\": \"хирагана жазуы\",
        \"Hrkt\": \"хирагана немесе катакана\",
        \"Jamo\": \"джамо жазуы\",
        \"Jpan\": \"жапон жазуы\",
        \"Kana\": \"катакана жазуы\",
        \"Khmr\": \"кхмер жазуы\",
        \"Knda\": \"каннада жазуы\",
        \"Kore\": \"корей жазуы\",
        \"Laoo\": \"лаос жазуы\",
        \"Latn\": \"латын жазуы\",
        \"Mlym\": \"малаялам жазуы\",
        \"Mong\": \"моңғол жазуы\",
        \"Mymr\": \"мьянма жазуы\",
        \"Orya\": \"ория жазуы\",
        \"Sinh\": \"сингаль жазуы\",
        \"Taml\": \"тамиль жазуы\",
        \"Telu\": \"телугу жазуы\",
        \"Thaa\": \"тана жазуы\",
        \"Thai\": \"тай жазуы\",
        \"Tibt\": \"тибет жазуы\",
        \"Zmth\": \"математикалық жазу\",
        \"Zsye\": \"эмодзи\",
        \"Zsym\": \"таңбалар\",
        \"Zxxx\": \"жазусыз\",
        \"Zyyy\": \"жалпы\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/kk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/kk.json");
    }
}
