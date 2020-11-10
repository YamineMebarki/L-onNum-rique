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

/* vendor/symfony/intl/Resources/data/scripts/ur.json */
class __TwigTemplate_545eefc2388b46446f9c9d8a7ef46efc91ca0f0e68bb0800fe89aa18b52063c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ur.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ur.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"عربی\",
        \"Armn\": \"آرمینیائی\",
        \"Beng\": \"بنگالی\",
        \"Bopo\": \"بوپوموفو\",
        \"Brai\": \"بریل\",
        \"Cyrl\": \"سیریلک\",
        \"Deva\": \"دیوناگری\",
        \"Ethi\": \"ایتھوپیائی\",
        \"Geor\": \"جارجیائی\",
        \"Grek\": \"یونانی\",
        \"Gujr\": \"گجراتی\",
        \"Guru\": \"گرمکھی\",
        \"Hanb\": \"ہینب\",
        \"Hang\": \"ہنگول\",
        \"Hani\": \"ہان\",
        \"Hans\": \"آسان\",
        \"Hant\": \"روایتی\",
        \"Hebr\": \"عبرانی\",
        \"Hira\": \"ہیراگینا\",
        \"Hrkt\": \"جاپانی سیلابریز\",
        \"Jamo\": \"جامو\",
        \"Jpan\": \"جاپانی\",
        \"Kana\": \"کٹاکانا\",
        \"Khmr\": \"خمیر\",
        \"Knda\": \"کنڑ\",
        \"Kore\": \"کوریائی\",
        \"Laoo\": \"لاؤ\",
        \"Latn\": \"لاطینی\",
        \"Mlym\": \"ملیالم\",
        \"Mong\": \"منگولیائی\",
        \"Mymr\": \"میانمار\",
        \"Orya\": \"اڑیہ\",
        \"Sinh\": \"سنہالا\",
        \"Taml\": \"تمل\",
        \"Telu\": \"تیلگو\",
        \"Thaa\": \"تھانا\",
        \"Thai\": \"تھائی\",
        \"Tibt\": \"تبتی\",
        \"Zmth\": \"ریاضی کی علامتیں\",
        \"Zsye\": \"ایموجی\",
        \"Zsym\": \"علامات\",
        \"Zxxx\": \"غیر تحریر شدہ\",
        \"Zyyy\": \"عام\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ur.json";
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
        \"Arab\": \"عربی\",
        \"Armn\": \"آرمینیائی\",
        \"Beng\": \"بنگالی\",
        \"Bopo\": \"بوپوموفو\",
        \"Brai\": \"بریل\",
        \"Cyrl\": \"سیریلک\",
        \"Deva\": \"دیوناگری\",
        \"Ethi\": \"ایتھوپیائی\",
        \"Geor\": \"جارجیائی\",
        \"Grek\": \"یونانی\",
        \"Gujr\": \"گجراتی\",
        \"Guru\": \"گرمکھی\",
        \"Hanb\": \"ہینب\",
        \"Hang\": \"ہنگول\",
        \"Hani\": \"ہان\",
        \"Hans\": \"آسان\",
        \"Hant\": \"روایتی\",
        \"Hebr\": \"عبرانی\",
        \"Hira\": \"ہیراگینا\",
        \"Hrkt\": \"جاپانی سیلابریز\",
        \"Jamo\": \"جامو\",
        \"Jpan\": \"جاپانی\",
        \"Kana\": \"کٹاکانا\",
        \"Khmr\": \"خمیر\",
        \"Knda\": \"کنڑ\",
        \"Kore\": \"کوریائی\",
        \"Laoo\": \"لاؤ\",
        \"Latn\": \"لاطینی\",
        \"Mlym\": \"ملیالم\",
        \"Mong\": \"منگولیائی\",
        \"Mymr\": \"میانمار\",
        \"Orya\": \"اڑیہ\",
        \"Sinh\": \"سنہالا\",
        \"Taml\": \"تمل\",
        \"Telu\": \"تیلگو\",
        \"Thaa\": \"تھانا\",
        \"Thai\": \"تھائی\",
        \"Tibt\": \"تبتی\",
        \"Zmth\": \"ریاضی کی علامتیں\",
        \"Zsye\": \"ایموجی\",
        \"Zsym\": \"علامات\",
        \"Zxxx\": \"غیر تحریر شدہ\",
        \"Zyyy\": \"عام\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ur.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ur.json");
    }
}
