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

/* vendor/symfony/intl/Resources/data/timezones/yo_BJ.json */
class __TwigTemplate_78a22a55bd271810a96dcf33080f7805da4097ade77d48345a024ff14ce1f2d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/yo_BJ.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/yo_BJ.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Africa\\/Casablanca\": \"Àkókò Ìwɔ Oòrùn Europe (Casablanca)\",
        \"Africa\\/El_Aaiun\": \"Àkókò Ìwɔ Oòrùn Europe (El Aaiun)\",
        \"America\\/Adak\": \"Ìgbà Orílɛ̀-èdè Amɛrikà (Adak)\",
        \"America\\/Chihuahua\": \"Ìgbà Orílɛ́ède Mesiko (Chihuahua)\",
        \"America\\/Eirunepe\": \"Ìgbà Orilɛ̀-èdè Bàràsílì (Eirunepe)\",
        \"America\\/Godthab\": \"Ìgbà Orílɛ́ède Gerelandi (Nuuk)\",
        \"America\\/Havana\": \"Ìgbà Orílɛ́ède Kúbà (Havana)\",
        \"America\\/Hermosillo\": \"Ìgbà Orílɛ́ède Mesiko (Hermosillo)\",
        \"America\\/Mazatlan\": \"Ìgbà Orílɛ́ède Mesiko (Mazatlan)\",
        \"America\\/Miquelon\": \"Ìgbà Orílɛ́ède Pɛɛri ati mikuloni (Miquelon)\",
        \"America\\/Montreal\": \"Ìgbà Orílɛ́ède Kánádà (Montreal)\",
        \"America\\/Rio_Branco\": \"Ìgbà Orilɛ̀-èdè Bàràsílì (Rio Branco)\",
        \"America\\/Santa_Isabel\": \"Ìgbà Orílɛ́ède Mesiko (Santa Isabel)\",
        \"America\\/Scoresbysund\": \"Ìgbà Orílɛ́ède Gerelandi (Ittoqqortoormiit)\",
        \"America\\/St_Johns\": \"Ìgbà Orílɛ́ède Kánádà (St. John’s)\",
        \"Asia\\/Anadyr\": \"Ìgbà Orílɛ́ède Rɔshia (Anadyr)\",
        \"Asia\\/Bangkok\": \"Ìgbà Orílɛ́ède Tailandi (Bangkok)\",
        \"Asia\\/Barnaul\": \"Ìgbà Orílɛ́ède Rɔshia (Barnaul)\",
        \"Asia\\/Dili\": \"Ìgbà Orílɛ́ède ÌlàOòrùn Tímɔ̀ (Dili)\",
        \"Asia\\/Jakarta\": \"Ìgbà Orílɛ́ède Indonesia (Jakarta)\",
        \"Asia\\/Kamchatka\": \"Ìgbà Orílɛ́ède Rɔshia (Kamchatka)\",
        \"Asia\\/Makassar\": \"Ìgbà Orílɛ́ède Indonesia (Makassar)\",
        \"Asia\\/Phnom_Penh\": \"Ìgbà Orílɛ́ède Kàmùbódíà (Phnom Penh)\",
        \"Asia\\/Pontianak\": \"Ìgbà Orílɛ́ède Indonesia (Pontianak)\",
        \"Asia\\/Saigon\": \"Ìgbà Orílɛ́ède Fɛtinami (Ho Chi Minh)\",
        \"Asia\\/Shanghai\": \"Ìgbà Orilɛ̀-èdè Sháínà (Shanghai)\",
        \"Asia\\/Tomsk\": \"Ìgbà Orílɛ́ède Rɔshia (Tomsk)\",
        \"Asia\\/Urumqi\": \"Ìgbà Orilɛ̀-èdè Sháínà (Urumqi)\",
        \"Asia\\/Vientiane\": \"Ìgbà Orílɛ́ède Laosi (Vientiane)\",
        \"Atlantic\\/Canary\": \"Àkókò Ìwɔ Oòrùn Europe (Canary)\",
        \"Atlantic\\/Faeroe\": \"Àkókò Ìwɔ Oòrùn Europe (Faroe)\",
        \"Atlantic\\/Madeira\": \"Àkókò Ìwɔ Oòrùn Europe (Madeira)\",
        \"Etc\\/UTC\": \"Àpapɔ̀ Àkókò Àgbáyé\",
        \"Europe\\/Istanbul\": \"Ìgbà Orílɛ́ède Tɔɔki (Istanbul)\",
        \"Europe\\/Kirov\": \"Ìgbà Orílɛ́ède Rɔshia (Kirov)\",
        \"Europe\\/Lisbon\": \"Àkókò Ìwɔ Oòrùn Europe (Lisbon)\",
        \"Europe\\/Samara\": \"Ìgbà Orílɛ́ède Rɔshia (Samara)\",
        \"Pacific\\/Honolulu\": \"Ìgbà Orílɛ̀-èdè Amɛrikà (Honolulu)\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/yo_BJ.json";
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
        \"Africa\\/Casablanca\": \"Àkókò Ìwɔ Oòrùn Europe (Casablanca)\",
        \"Africa\\/El_Aaiun\": \"Àkókò Ìwɔ Oòrùn Europe (El Aaiun)\",
        \"America\\/Adak\": \"Ìgbà Orílɛ̀-èdè Amɛrikà (Adak)\",
        \"America\\/Chihuahua\": \"Ìgbà Orílɛ́ède Mesiko (Chihuahua)\",
        \"America\\/Eirunepe\": \"Ìgbà Orilɛ̀-èdè Bàràsílì (Eirunepe)\",
        \"America\\/Godthab\": \"Ìgbà Orílɛ́ède Gerelandi (Nuuk)\",
        \"America\\/Havana\": \"Ìgbà Orílɛ́ède Kúbà (Havana)\",
        \"America\\/Hermosillo\": \"Ìgbà Orílɛ́ède Mesiko (Hermosillo)\",
        \"America\\/Mazatlan\": \"Ìgbà Orílɛ́ède Mesiko (Mazatlan)\",
        \"America\\/Miquelon\": \"Ìgbà Orílɛ́ède Pɛɛri ati mikuloni (Miquelon)\",
        \"America\\/Montreal\": \"Ìgbà Orílɛ́ède Kánádà (Montreal)\",
        \"America\\/Rio_Branco\": \"Ìgbà Orilɛ̀-èdè Bàràsílì (Rio Branco)\",
        \"America\\/Santa_Isabel\": \"Ìgbà Orílɛ́ède Mesiko (Santa Isabel)\",
        \"America\\/Scoresbysund\": \"Ìgbà Orílɛ́ède Gerelandi (Ittoqqortoormiit)\",
        \"America\\/St_Johns\": \"Ìgbà Orílɛ́ède Kánádà (St. John’s)\",
        \"Asia\\/Anadyr\": \"Ìgbà Orílɛ́ède Rɔshia (Anadyr)\",
        \"Asia\\/Bangkok\": \"Ìgbà Orílɛ́ède Tailandi (Bangkok)\",
        \"Asia\\/Barnaul\": \"Ìgbà Orílɛ́ède Rɔshia (Barnaul)\",
        \"Asia\\/Dili\": \"Ìgbà Orílɛ́ède ÌlàOòrùn Tímɔ̀ (Dili)\",
        \"Asia\\/Jakarta\": \"Ìgbà Orílɛ́ède Indonesia (Jakarta)\",
        \"Asia\\/Kamchatka\": \"Ìgbà Orílɛ́ède Rɔshia (Kamchatka)\",
        \"Asia\\/Makassar\": \"Ìgbà Orílɛ́ède Indonesia (Makassar)\",
        \"Asia\\/Phnom_Penh\": \"Ìgbà Orílɛ́ède Kàmùbódíà (Phnom Penh)\",
        \"Asia\\/Pontianak\": \"Ìgbà Orílɛ́ède Indonesia (Pontianak)\",
        \"Asia\\/Saigon\": \"Ìgbà Orílɛ́ède Fɛtinami (Ho Chi Minh)\",
        \"Asia\\/Shanghai\": \"Ìgbà Orilɛ̀-èdè Sháínà (Shanghai)\",
        \"Asia\\/Tomsk\": \"Ìgbà Orílɛ́ède Rɔshia (Tomsk)\",
        \"Asia\\/Urumqi\": \"Ìgbà Orilɛ̀-èdè Sháínà (Urumqi)\",
        \"Asia\\/Vientiane\": \"Ìgbà Orílɛ́ède Laosi (Vientiane)\",
        \"Atlantic\\/Canary\": \"Àkókò Ìwɔ Oòrùn Europe (Canary)\",
        \"Atlantic\\/Faeroe\": \"Àkókò Ìwɔ Oòrùn Europe (Faroe)\",
        \"Atlantic\\/Madeira\": \"Àkókò Ìwɔ Oòrùn Europe (Madeira)\",
        \"Etc\\/UTC\": \"Àpapɔ̀ Àkókò Àgbáyé\",
        \"Europe\\/Istanbul\": \"Ìgbà Orílɛ́ède Tɔɔki (Istanbul)\",
        \"Europe\\/Kirov\": \"Ìgbà Orílɛ́ède Rɔshia (Kirov)\",
        \"Europe\\/Lisbon\": \"Àkókò Ìwɔ Oòrùn Europe (Lisbon)\",
        \"Europe\\/Samara\": \"Ìgbà Orílɛ́ède Rɔshia (Samara)\",
        \"Pacific\\/Honolulu\": \"Ìgbà Orílɛ̀-èdè Amɛrikà (Honolulu)\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/yo_BJ.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/yo_BJ.json");
    }
}
