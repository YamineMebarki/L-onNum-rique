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

/* vendor/symfony/intl/Resources/data/languages/os.json */
class __TwigTemplate_05bd615154866f276e33bc72f234e26d9b5b827e61bf22deff57a426365441e3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/os.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/os.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ab\": \"абхазаг\",
        \"ady\": \"адыгейаг\",
        \"ae\": \"авестӕ\",
        \"af\": \"африкаанс\",
        \"ang\": \"рагон англисаг\",
        \"ar\": \"араббаг\",
        \"av\": \"авайраг\",
        \"az\": \"тӕтӕйраг\",
        \"ba\": \"башкираг\",
        \"bg\": \"болгайраг\",
        \"bs\": \"босниаг\",
        \"bua\": \"бурятаг\",
        \"ca\": \"каталайнаг\",
        \"ce\": \"цӕцӕйнаг\",
        \"cop\": \"коптаг\",
        \"cs\": \"чехаг\",
        \"cv\": \"чувашаг\",
        \"da\": \"даниаг\",
        \"de\": \"немыцаг\",
        \"de_AT\": \"австралиаг немыцаг\",
        \"de_CH\": \"швйецариаг немыцаг\",
        \"egy\": \"рагон египтаг\",
        \"el\": \"бердзейнаг\",
        \"en\": \"англисаг\",
        \"en_AU\": \"австралиаг англисаг\",
        \"en_CA\": \"канадӕйаг англисаг\",
        \"en_GB\": \"бритайнаг англисаг\",
        \"en_US\": \"америкаг англисаг\",
        \"eo\": \"есперанто\",
        \"es\": \"испайнаг\",
        \"es_419\": \"латинаг америкаг англисаг\",
        \"es_ES\": \"европӕйаг англисаг\",
        \"et\": \"естойнаг\",
        \"eu\": \"баскаг\",
        \"fa\": \"персайнаг\",
        \"fi\": \"финнаг\",
        \"fil\": \"филиппинаг\",
        \"fj\": \"фиджи\",
        \"fo\": \"фарераг\",
        \"fr\": \"францаг\",
        \"fr_CA\": \"канадӕйаг францаг\",
        \"fr_CH\": \"швейцариаг францаг\",
        \"fro\": \"рагон францаг\",
        \"ga\": \"ирландиаг\",
        \"grc\": \"рагон бердзейнаг\",
        \"he\": \"уираг\",
        \"hr\": \"хорватаг\",
        \"hu\": \"венгериаг\",
        \"hy\": \"сомихаг\",
        \"inh\": \"мӕхъӕлон\",
        \"it\": \"италиаг\",
        \"ja\": \"япойнаг\",
        \"ka\": \"гуырдзиаг\",
        \"kbd\": \"кӕсгон\",
        \"krc\": \"бӕлхъӕрон\",
        \"ku\": \"курдаг\",
        \"kum\": \"хъуымыхъхъаг\",
        \"la\": \"латинаг\",
        \"lez\": \"лекъаг\",
        \"mk\": \"мӕчъидон\",
        \"os\": \"ирон\",
        \"pt\": \"португалиаг\",
        \"pt_BR\": \"бразилиаг португалиаг\",
        \"pt_PT\": \"европӕйаг полтугалиаг\",
        \"rom\": \"цигайнаг\",
        \"ru\": \"уырыссаг\",
        \"zh\": \"китайаг\",
        \"zh_Hans\": \"ӕнцонгонд китайаг\",
        \"zh_Hant\": \"традицион китайаг\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/os.json";
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
        \"ab\": \"абхазаг\",
        \"ady\": \"адыгейаг\",
        \"ae\": \"авестӕ\",
        \"af\": \"африкаанс\",
        \"ang\": \"рагон англисаг\",
        \"ar\": \"араббаг\",
        \"av\": \"авайраг\",
        \"az\": \"тӕтӕйраг\",
        \"ba\": \"башкираг\",
        \"bg\": \"болгайраг\",
        \"bs\": \"босниаг\",
        \"bua\": \"бурятаг\",
        \"ca\": \"каталайнаг\",
        \"ce\": \"цӕцӕйнаг\",
        \"cop\": \"коптаг\",
        \"cs\": \"чехаг\",
        \"cv\": \"чувашаг\",
        \"da\": \"даниаг\",
        \"de\": \"немыцаг\",
        \"de_AT\": \"австралиаг немыцаг\",
        \"de_CH\": \"швйецариаг немыцаг\",
        \"egy\": \"рагон египтаг\",
        \"el\": \"бердзейнаг\",
        \"en\": \"англисаг\",
        \"en_AU\": \"австралиаг англисаг\",
        \"en_CA\": \"канадӕйаг англисаг\",
        \"en_GB\": \"бритайнаг англисаг\",
        \"en_US\": \"америкаг англисаг\",
        \"eo\": \"есперанто\",
        \"es\": \"испайнаг\",
        \"es_419\": \"латинаг америкаг англисаг\",
        \"es_ES\": \"европӕйаг англисаг\",
        \"et\": \"естойнаг\",
        \"eu\": \"баскаг\",
        \"fa\": \"персайнаг\",
        \"fi\": \"финнаг\",
        \"fil\": \"филиппинаг\",
        \"fj\": \"фиджи\",
        \"fo\": \"фарераг\",
        \"fr\": \"францаг\",
        \"fr_CA\": \"канадӕйаг францаг\",
        \"fr_CH\": \"швейцариаг францаг\",
        \"fro\": \"рагон францаг\",
        \"ga\": \"ирландиаг\",
        \"grc\": \"рагон бердзейнаг\",
        \"he\": \"уираг\",
        \"hr\": \"хорватаг\",
        \"hu\": \"венгериаг\",
        \"hy\": \"сомихаг\",
        \"inh\": \"мӕхъӕлон\",
        \"it\": \"италиаг\",
        \"ja\": \"япойнаг\",
        \"ka\": \"гуырдзиаг\",
        \"kbd\": \"кӕсгон\",
        \"krc\": \"бӕлхъӕрон\",
        \"ku\": \"курдаг\",
        \"kum\": \"хъуымыхъхъаг\",
        \"la\": \"латинаг\",
        \"lez\": \"лекъаг\",
        \"mk\": \"мӕчъидон\",
        \"os\": \"ирон\",
        \"pt\": \"португалиаг\",
        \"pt_BR\": \"бразилиаг португалиаг\",
        \"pt_PT\": \"европӕйаг полтугалиаг\",
        \"rom\": \"цигайнаг\",
        \"ru\": \"уырыссаг\",
        \"zh\": \"китайаг\",
        \"zh_Hans\": \"ӕнцонгонд китайаг\",
        \"zh_Hant\": \"традицион китайаг\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/os.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/os.json");
    }
}
