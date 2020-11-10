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

/* vendor/symfony/intl/Resources/data/scripts/ps.json */
class __TwigTemplate_76eebd21346ffd5c7afffc0315b1ce8eec2fe5a0bd6192f2ff566675bfb35759 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ps.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ps.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"عربي\",
        \"Armn\": \"ارمانیایي\",
        \"Beng\": \"بنګله\",
        \"Bopo\": \"بوپوموفو\",
        \"Brai\": \"بریلي\",
        \"Cyrl\": \"سیریلیک\",
        \"Deva\": \"دیواناګري\",
        \"Ethi\": \"ایتوپي\",
        \"Geor\": \"ګرجستاني\",
        \"Grek\": \"یوناني\",
        \"Gujr\": \"ګجراتي\",
        \"Guru\": \"ګرومي\",
        \"Hanb\": \"هن او بوپوفومو\",
        \"Hang\": \"هنګولي\",
        \"Hani\": \"هن\",
        \"Hans\": \"ساده شوی\",
        \"Hant\": \"دودیزه\",
        \"Hebr\": \"عبراني\",
        \"Hira\": \"هیراګانا\",
        \"Hrkt\": \"د جاپاني سیلابري\",
        \"Jamo\": \"جامو\",
        \"Jpan\": \"جاپاني\",
        \"Kana\": \"کاتاکانا\",
        \"Khmr\": \"خمر\",
        \"Knda\": \"کناډا\",
        \"Kore\": \"کوریایی\",
        \"Laoo\": \"لاوو\",
        \"Latn\": \"لاتين\\/لاتيني\",
        \"Mlym\": \"مالایالم\",
        \"Mong\": \"منګولیایي\",
        \"Mymr\": \"میانمار\",
        \"Orya\": \"اوديا\",
        \"Sinh\": \"سنهالا\",
        \"Taml\": \"تامل\",
        \"Telu\": \"تیلیګو\",
        \"Thaa\": \"تهانا\",
        \"Thai\": \"تایلنډي\",
        \"Tibt\": \"تبتي\",
        \"Zmth\": \"د ریاضیاتو نوټیشن\",
        \"Zsye\": \"ایموجي\",
        \"Zsym\": \"سمبولونه\",
        \"Zxxx\": \"ناليکلی\",
        \"Zyyy\": \"عام\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ps.json";
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
        \"Arab\": \"عربي\",
        \"Armn\": \"ارمانیایي\",
        \"Beng\": \"بنګله\",
        \"Bopo\": \"بوپوموفو\",
        \"Brai\": \"بریلي\",
        \"Cyrl\": \"سیریلیک\",
        \"Deva\": \"دیواناګري\",
        \"Ethi\": \"ایتوپي\",
        \"Geor\": \"ګرجستاني\",
        \"Grek\": \"یوناني\",
        \"Gujr\": \"ګجراتي\",
        \"Guru\": \"ګرومي\",
        \"Hanb\": \"هن او بوپوفومو\",
        \"Hang\": \"هنګولي\",
        \"Hani\": \"هن\",
        \"Hans\": \"ساده شوی\",
        \"Hant\": \"دودیزه\",
        \"Hebr\": \"عبراني\",
        \"Hira\": \"هیراګانا\",
        \"Hrkt\": \"د جاپاني سیلابري\",
        \"Jamo\": \"جامو\",
        \"Jpan\": \"جاپاني\",
        \"Kana\": \"کاتاکانا\",
        \"Khmr\": \"خمر\",
        \"Knda\": \"کناډا\",
        \"Kore\": \"کوریایی\",
        \"Laoo\": \"لاوو\",
        \"Latn\": \"لاتين\\/لاتيني\",
        \"Mlym\": \"مالایالم\",
        \"Mong\": \"منګولیایي\",
        \"Mymr\": \"میانمار\",
        \"Orya\": \"اوديا\",
        \"Sinh\": \"سنهالا\",
        \"Taml\": \"تامل\",
        \"Telu\": \"تیلیګو\",
        \"Thaa\": \"تهانا\",
        \"Thai\": \"تایلنډي\",
        \"Tibt\": \"تبتي\",
        \"Zmth\": \"د ریاضیاتو نوټیشن\",
        \"Zsye\": \"ایموجي\",
        \"Zsym\": \"سمبولونه\",
        \"Zxxx\": \"ناليکلی\",
        \"Zyyy\": \"عام\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ps.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ps.json");
    }
}
