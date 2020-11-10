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

/* vendor/symfony/intl/Resources/data/locales/sr_Cyrl_BA.json */
class __TwigTemplate_a5954f02cd2b7298996ad51260d770c939dd39432ed5a41312b4dc20e56af71e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sr_Cyrl_BA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/sr_Cyrl_BA.json"));

        // line 1
        echo "{
    \"Names\": {
        \"be\": \"бјелоруски\",
        \"be_BY\": \"бјелоруски (Бјелорусија)\",
        \"bm\": \"бамананкан\",
        \"bm_ML\": \"бамананкан (Мали)\",
        \"bn\": \"бангла\",
        \"bn_BD\": \"бангла (Бангладеш)\",
        \"bn_IN\": \"бангла (Индија)\",
        \"cs_CZ\": \"чешки (Чешка Република)\",
        \"de_DE\": \"немачки (Њемачка)\",
        \"en_DE\": \"енглески (Њемачка)\",
        \"en_KN\": \"енглески (Свети Китс и Невис)\",
        \"en_MO\": \"енглески (САР Макао)\",
        \"en_UM\": \"енглески (Мања удаљена острва САД)\",
        \"en_VC\": \"енглески (Свети Винсент и Гренадини)\",
        \"en_VG\": \"енглески (Британска Дјевичанска Острва)\",
        \"en_VI\": \"енглески (Америчка Дјевичанска Острва)\",
        \"fr_CG\": \"француски (Конго)\",
        \"fr_PM\": \"француски (Свети Пјер и Микелон)\",
        \"fr_RE\": \"француски (Реунион)\",
        \"ln_CG\": \"лингала (Конго)\",
        \"lo\": \"лаошки\",
        \"lo_LA\": \"лаошки (Лаос)\",
        \"pt_CV\": \"португалски (Кабо Верде)\",
        \"pt_MO\": \"португалски (САР Макао)\",
        \"ru_BY\": \"руски (Бјелорусија)\",
        \"si\": \"синхалски\",
        \"si_LK\": \"синхалски (Шри Ланка)\",
        \"xh\": \"исикоса\",
        \"xh_ZA\": \"исикоса (Јужноафричка Република)\",
        \"zh_Hans_MO\": \"кинески (поједностављено кинеско писмо, САР Макао)\",
        \"zh_Hant_MO\": \"кинески (традиционално кинеско писмо, САР Макао)\",
        \"zh_MO\": \"кинески (САР Макао)\",
        \"zu\": \"исизулу\",
        \"zu_ZA\": \"исизулу (Јужноафричка Република)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/sr_Cyrl_BA.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"be\": \"бјелоруски\",
        \"be_BY\": \"бјелоруски (Бјелорусија)\",
        \"bm\": \"бамананкан\",
        \"bm_ML\": \"бамананкан (Мали)\",
        \"bn\": \"бангла\",
        \"bn_BD\": \"бангла (Бангладеш)\",
        \"bn_IN\": \"бангла (Индија)\",
        \"cs_CZ\": \"чешки (Чешка Република)\",
        \"de_DE\": \"немачки (Њемачка)\",
        \"en_DE\": \"енглески (Њемачка)\",
        \"en_KN\": \"енглески (Свети Китс и Невис)\",
        \"en_MO\": \"енглески (САР Макао)\",
        \"en_UM\": \"енглески (Мања удаљена острва САД)\",
        \"en_VC\": \"енглески (Свети Винсент и Гренадини)\",
        \"en_VG\": \"енглески (Британска Дјевичанска Острва)\",
        \"en_VI\": \"енглески (Америчка Дјевичанска Острва)\",
        \"fr_CG\": \"француски (Конго)\",
        \"fr_PM\": \"француски (Свети Пјер и Микелон)\",
        \"fr_RE\": \"француски (Реунион)\",
        \"ln_CG\": \"лингала (Конго)\",
        \"lo\": \"лаошки\",
        \"lo_LA\": \"лаошки (Лаос)\",
        \"pt_CV\": \"португалски (Кабо Верде)\",
        \"pt_MO\": \"португалски (САР Макао)\",
        \"ru_BY\": \"руски (Бјелорусија)\",
        \"si\": \"синхалски\",
        \"si_LK\": \"синхалски (Шри Ланка)\",
        \"xh\": \"исикоса\",
        \"xh_ZA\": \"исикоса (Јужноафричка Република)\",
        \"zh_Hans_MO\": \"кинески (поједностављено кинеско писмо, САР Макао)\",
        \"zh_Hant_MO\": \"кинески (традиционално кинеско писмо, САР Макао)\",
        \"zh_MO\": \"кинески (САР Макао)\",
        \"zu\": \"исизулу\",
        \"zu_ZA\": \"исизулу (Јужноафричка Република)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/sr_Cyrl_BA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/sr_Cyrl_BA.json");
    }
}
