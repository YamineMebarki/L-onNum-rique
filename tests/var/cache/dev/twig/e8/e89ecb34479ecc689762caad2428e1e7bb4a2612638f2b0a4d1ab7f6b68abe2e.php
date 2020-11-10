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

/* vendor/symfony/intl/Resources/data/scripts/mn.json */
class __TwigTemplate_3457de2d1e017c4d1312d8a88b23e6048777d6364b06c79ce189e88e2c9dd5bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/mn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"араб\",
        \"Armn\": \"армени\",
        \"Beng\": \"бенгал\",
        \"Bopo\": \"вопомофо\",
        \"Brai\": \"брайл\",
        \"Cyrl\": \"кирилл\",
        \"Deva\": \"деванагари\",
        \"Ethi\": \"этиоп\",
        \"Geor\": \"гүрж\",
        \"Grek\": \"грек\",
        \"Gujr\": \"гужарати\",
        \"Guru\": \"гүрмүх\",
        \"Hanb\": \"Бопомофотой ханз\",
        \"Hang\": \"хангыль\",
        \"Hani\": \"ханз\",
        \"Hans\": \"хялбаршуулсан\",
        \"Hant\": \"уламжлалт\",
        \"Hebr\": \"еврей\",
        \"Hira\": \"хирагана\",
        \"Hrkt\": \"япон хэлний үеийн цагаан толгой\",
        \"Jamo\": \"жамо\",
        \"Jpan\": \"япон\",
        \"Kana\": \"катакана\",
        \"Khmr\": \"кхмер\",
        \"Knda\": \"каннада\",
        \"Kore\": \"солонгос\",
        \"Laoo\": \"лаос\",
        \"Latn\": \"латин\",
        \"Mlym\": \"малаялам\",
        \"Mong\": \"монгол бичиг\",
        \"Mymr\": \"мьянмар\",
        \"Orya\": \"ория\",
        \"Sinh\": \"синхала\",
        \"Taml\": \"тамил\",
        \"Telu\": \"тэлүгү\",
        \"Thaa\": \"тана\",
        \"Thai\": \"тай\",
        \"Tibt\": \"төвд\",
        \"Zmth\": \"математик тооллын систем\",
        \"Zsye\": \"эможи\",
        \"Zsym\": \"тэмдэг\",
        \"Zxxx\": \"бичигдээгүй\",
        \"Zyyy\": \"нийтлэг\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/mn.json";
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
        \"Arab\": \"араб\",
        \"Armn\": \"армени\",
        \"Beng\": \"бенгал\",
        \"Bopo\": \"вопомофо\",
        \"Brai\": \"брайл\",
        \"Cyrl\": \"кирилл\",
        \"Deva\": \"деванагари\",
        \"Ethi\": \"этиоп\",
        \"Geor\": \"гүрж\",
        \"Grek\": \"грек\",
        \"Gujr\": \"гужарати\",
        \"Guru\": \"гүрмүх\",
        \"Hanb\": \"Бопомофотой ханз\",
        \"Hang\": \"хангыль\",
        \"Hani\": \"ханз\",
        \"Hans\": \"хялбаршуулсан\",
        \"Hant\": \"уламжлалт\",
        \"Hebr\": \"еврей\",
        \"Hira\": \"хирагана\",
        \"Hrkt\": \"япон хэлний үеийн цагаан толгой\",
        \"Jamo\": \"жамо\",
        \"Jpan\": \"япон\",
        \"Kana\": \"катакана\",
        \"Khmr\": \"кхмер\",
        \"Knda\": \"каннада\",
        \"Kore\": \"солонгос\",
        \"Laoo\": \"лаос\",
        \"Latn\": \"латин\",
        \"Mlym\": \"малаялам\",
        \"Mong\": \"монгол бичиг\",
        \"Mymr\": \"мьянмар\",
        \"Orya\": \"ория\",
        \"Sinh\": \"синхала\",
        \"Taml\": \"тамил\",
        \"Telu\": \"тэлүгү\",
        \"Thaa\": \"тана\",
        \"Thai\": \"тай\",
        \"Tibt\": \"төвд\",
        \"Zmth\": \"математик тооллын систем\",
        \"Zsye\": \"эможи\",
        \"Zsym\": \"тэмдэг\",
        \"Zxxx\": \"бичигдээгүй\",
        \"Zyyy\": \"нийтлэг\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/mn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/mn.json");
    }
}
