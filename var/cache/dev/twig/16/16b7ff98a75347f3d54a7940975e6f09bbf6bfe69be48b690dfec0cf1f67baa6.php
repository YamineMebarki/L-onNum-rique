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

/* vendor/symfony/intl/Resources/data/locales/os.json */
class __TwigTemplate_864340aee414f37cc4202a91a6b9ddc326d5a560de03cb47f067be5a244a889b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/os.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/os.json"));

        // line 1
        echo "{
    \"Names\": {
        \"af\": \"африкаанс\",
        \"ar\": \"араббаг\",
        \"az\": \"тӕтӕйраг\",
        \"az_Cyrl\": \"тӕтӕйраг (Киррилицӕ)\",
        \"az_Latn\": \"тӕтӕйраг (Латинаг)\",
        \"bg\": \"болгайраг\",
        \"bs\": \"босниаг\",
        \"bs_Cyrl\": \"босниаг (Киррилицӕ)\",
        \"bs_Latn\": \"босниаг (Латинаг)\",
        \"ca\": \"каталайнаг\",
        \"ca_FR\": \"каталайнаг (Франц)\",
        \"ca_IT\": \"каталайнаг (Итали)\",
        \"ce\": \"цӕцӕйнаг\",
        \"ce_RU\": \"цӕцӕйнаг (Уӕрӕсе)\",
        \"cs\": \"чехаг\",
        \"da\": \"даниаг\",
        \"de\": \"немыцаг\",
        \"de_DE\": \"немыцаг (Герман)\",
        \"de_IT\": \"немыцаг (Итали)\",
        \"el\": \"бердзейнаг\",
        \"en\": \"англисаг\",
        \"en_DE\": \"англисаг (Герман)\",
        \"en_GB\": \"англисаг (Стыр Британи)\",
        \"en_IN\": \"англисаг (Инди)\",
        \"en_US\": \"англисаг (АИШ)\",
        \"eo\": \"есперанто\",
        \"es\": \"испайнаг\",
        \"es_BR\": \"испайнаг (Бразили)\",
        \"es_US\": \"испайнаг (АИШ)\",
        \"et\": \"естойнаг\",
        \"eu\": \"баскаг\",
        \"fa\": \"персайнаг\",
        \"fi\": \"финнаг\",
        \"fo\": \"фарераг\",
        \"fr\": \"францаг\",
        \"fr_FR\": \"францаг (Франц)\",
        \"ga\": \"ирландиаг\",
        \"ga_GB\": \"ирландиаг (Стыр Британи)\",
        \"he\": \"уираг\",
        \"hr\": \"хорватаг\",
        \"hu\": \"венгериаг\",
        \"hy\": \"сомихаг\",
        \"it\": \"италиаг\",
        \"it_IT\": \"италиаг (Итали)\",
        \"ja\": \"япойнаг\",
        \"ja_JP\": \"япойнаг (Япон)\",
        \"ka\": \"гуырдзиаг\",
        \"ka_GE\": \"гуырдзиаг (Гуырдзыстон)\",
        \"ku\": \"курдаг\",
        \"mk\": \"мӕчъидон\",
        \"os\": \"ирон\",
        \"os_GE\": \"ирон (Гуырдзыстон)\",
        \"os_RU\": \"ирон (Уӕрӕсе)\",
        \"pt\": \"португалиаг\",
        \"pt_BR\": \"португалиаг (Бразили)\",
        \"ru\": \"уырыссаг\",
        \"ru_RU\": \"уырыссаг (Уӕрӕсе)\",
        \"zh\": \"китайаг\",
        \"zh_CN\": \"китайаг (Китай)\",
        \"zh_Hans\": \"китайаг (Ӕнцонгонд китайаг)\",
        \"zh_Hans_CN\": \"китайаг (Ӕнцонгонд китайаг, Китай)\",
        \"zh_Hant\": \"китайаг (Традицион китайаг)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/os.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"af\": \"африкаанс\",
        \"ar\": \"араббаг\",
        \"az\": \"тӕтӕйраг\",
        \"az_Cyrl\": \"тӕтӕйраг (Киррилицӕ)\",
        \"az_Latn\": \"тӕтӕйраг (Латинаг)\",
        \"bg\": \"болгайраг\",
        \"bs\": \"босниаг\",
        \"bs_Cyrl\": \"босниаг (Киррилицӕ)\",
        \"bs_Latn\": \"босниаг (Латинаг)\",
        \"ca\": \"каталайнаг\",
        \"ca_FR\": \"каталайнаг (Франц)\",
        \"ca_IT\": \"каталайнаг (Итали)\",
        \"ce\": \"цӕцӕйнаг\",
        \"ce_RU\": \"цӕцӕйнаг (Уӕрӕсе)\",
        \"cs\": \"чехаг\",
        \"da\": \"даниаг\",
        \"de\": \"немыцаг\",
        \"de_DE\": \"немыцаг (Герман)\",
        \"de_IT\": \"немыцаг (Итали)\",
        \"el\": \"бердзейнаг\",
        \"en\": \"англисаг\",
        \"en_DE\": \"англисаг (Герман)\",
        \"en_GB\": \"англисаг (Стыр Британи)\",
        \"en_IN\": \"англисаг (Инди)\",
        \"en_US\": \"англисаг (АИШ)\",
        \"eo\": \"есперанто\",
        \"es\": \"испайнаг\",
        \"es_BR\": \"испайнаг (Бразили)\",
        \"es_US\": \"испайнаг (АИШ)\",
        \"et\": \"естойнаг\",
        \"eu\": \"баскаг\",
        \"fa\": \"персайнаг\",
        \"fi\": \"финнаг\",
        \"fo\": \"фарераг\",
        \"fr\": \"францаг\",
        \"fr_FR\": \"францаг (Франц)\",
        \"ga\": \"ирландиаг\",
        \"ga_GB\": \"ирландиаг (Стыр Британи)\",
        \"he\": \"уираг\",
        \"hr\": \"хорватаг\",
        \"hu\": \"венгериаг\",
        \"hy\": \"сомихаг\",
        \"it\": \"италиаг\",
        \"it_IT\": \"италиаг (Итали)\",
        \"ja\": \"япойнаг\",
        \"ja_JP\": \"япойнаг (Япон)\",
        \"ka\": \"гуырдзиаг\",
        \"ka_GE\": \"гуырдзиаг (Гуырдзыстон)\",
        \"ku\": \"курдаг\",
        \"mk\": \"мӕчъидон\",
        \"os\": \"ирон\",
        \"os_GE\": \"ирон (Гуырдзыстон)\",
        \"os_RU\": \"ирон (Уӕрӕсе)\",
        \"pt\": \"португалиаг\",
        \"pt_BR\": \"португалиаг (Бразили)\",
        \"ru\": \"уырыссаг\",
        \"ru_RU\": \"уырыссаг (Уӕрӕсе)\",
        \"zh\": \"китайаг\",
        \"zh_CN\": \"китайаг (Китай)\",
        \"zh_Hans\": \"китайаг (Ӕнцонгонд китайаг)\",
        \"zh_Hans_CN\": \"китайаг (Ӕнцонгонд китайаг, Китай)\",
        \"zh_Hant\": \"китайаг (Традицион китайаг)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/os.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/os.json");
    }
}
