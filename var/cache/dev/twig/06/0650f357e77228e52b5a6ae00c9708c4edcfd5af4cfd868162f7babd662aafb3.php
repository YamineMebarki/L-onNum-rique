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

/* vendor/symfony/intl/Resources/data/languages/yo_BJ.json */
class __TwigTemplate_092b350a28e31700935e998f397e56120f06761a5be435054ec1cd0c0cba8c02 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/yo_BJ.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/yo_BJ.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"da\": \"Èdè Ilɛ̀ Denmark\",
        \"de_AT\": \"Èdè Jámánì (Ɔ́síríà )\",
        \"de_CH\": \"Èdè Ilɛ̀ Jámánì (Orílɛ́ède swítsàlandì)\",
        \"en\": \"Èdè Gɛ̀ɛ́sì\",
        \"en_AU\": \"Èdè Gɛ̀ɛ́sì (órílɛ̀-èdè Ɔsirélíà)\",
        \"en_CA\": \"Èdè Gɛ̀ɛ́sì (Orílɛ̀-èdè Kánádà)\",
        \"en_GB\": \"Èdè òyìnbó Gɛ̀ɛ́sì\",
        \"es\": \"Èdè Sípáníìshì\",
        \"es_419\": \"Èdè Sípáníìshì (orílɛ̀-èdè Látìn-Amɛ́ríkà) ( Èdè Sípáníìshì (Látìn-Amɛ́ríkà)\",
        \"es_ES\": \"Èdè Sípáníìshì (orílɛ̀-èdè Yúróòpù)\",
        \"es_MX\": \"Èdè Sípáníìshì (orílɛ̀-èdè Mɛ́síkò)\",
        \"fr_CA\": \"Èdè Faransé (orílɛ̀-èdè Kánádà)\",
        \"fr_CH\": \"Èdè Faranshé (Súwísàlaǹdì)\",
        \"id\": \"Èdè Indonéshíà\",
        \"nl\": \"Èdè Dɔ́ɔ̀shì\",
        \"pt\": \"Èdè Pɔtogí\",
        \"pt_BR\": \"Èdè Pɔtogí (Orilɛ̀-èdè Bràsíl)\",
        \"pt_PT\": \"Èdè Pɔtogí (orílɛ̀-èdè Yúróòpù)\",
        \"ru\": \"Èdè Rɔ́shíà\",
        \"tr\": \"Èdè Tɔɔkisi\",
        \"zh\": \"Èdè Mandarin tí wɔ́n ń sɔ lórílɛ̀-èdè Sháínà\",
        \"zu\": \"Èdè Shulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/yo_BJ.json";
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
        \"da\": \"Èdè Ilɛ̀ Denmark\",
        \"de_AT\": \"Èdè Jámánì (Ɔ́síríà )\",
        \"de_CH\": \"Èdè Ilɛ̀ Jámánì (Orílɛ́ède swítsàlandì)\",
        \"en\": \"Èdè Gɛ̀ɛ́sì\",
        \"en_AU\": \"Èdè Gɛ̀ɛ́sì (órílɛ̀-èdè Ɔsirélíà)\",
        \"en_CA\": \"Èdè Gɛ̀ɛ́sì (Orílɛ̀-èdè Kánádà)\",
        \"en_GB\": \"Èdè òyìnbó Gɛ̀ɛ́sì\",
        \"es\": \"Èdè Sípáníìshì\",
        \"es_419\": \"Èdè Sípáníìshì (orílɛ̀-èdè Látìn-Amɛ́ríkà) ( Èdè Sípáníìshì (Látìn-Amɛ́ríkà)\",
        \"es_ES\": \"Èdè Sípáníìshì (orílɛ̀-èdè Yúróòpù)\",
        \"es_MX\": \"Èdè Sípáníìshì (orílɛ̀-èdè Mɛ́síkò)\",
        \"fr_CA\": \"Èdè Faransé (orílɛ̀-èdè Kánádà)\",
        \"fr_CH\": \"Èdè Faranshé (Súwísàlaǹdì)\",
        \"id\": \"Èdè Indonéshíà\",
        \"nl\": \"Èdè Dɔ́ɔ̀shì\",
        \"pt\": \"Èdè Pɔtogí\",
        \"pt_BR\": \"Èdè Pɔtogí (Orilɛ̀-èdè Bràsíl)\",
        \"pt_PT\": \"Èdè Pɔtogí (orílɛ̀-èdè Yúróòpù)\",
        \"ru\": \"Èdè Rɔ́shíà\",
        \"tr\": \"Èdè Tɔɔkisi\",
        \"zh\": \"Èdè Mandarin tí wɔ́n ń sɔ lórílɛ̀-èdè Sháínà\",
        \"zu\": \"Èdè Shulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/yo_BJ.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/yo_BJ.json");
    }
}
