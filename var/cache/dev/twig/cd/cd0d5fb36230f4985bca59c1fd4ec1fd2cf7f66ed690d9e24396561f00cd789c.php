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

/* vendor/symfony/intl/Resources/data/timezones/fr_CA.json */
class __TwigTemplate_07c6cee66a78e8b859a7acd08214fa369862ea8e4555d158b6d5bcdfcf4ffe42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/fr_CA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/fr_CA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Africa\\/Addis_Ababa\": \"heure d’Afrique orientale (Addis-Abeba)\",
        \"Africa\\/Asmera\": \"heure d’Afrique orientale (Asmara)\",
        \"Africa\\/Blantyre\": \"heure d’Afrique centrale (Blantyre)\",
        \"Africa\\/Bujumbura\": \"heure d’Afrique centrale (Bujumbura)\",
        \"Africa\\/Dar_es_Salaam\": \"heure d’Afrique orientale (Dar es Salaam)\",
        \"Africa\\/Djibouti\": \"heure d’Afrique orientale (Djibouti)\",
        \"Africa\\/Gaborone\": \"heure d’Afrique centrale (Gaborone)\",
        \"Africa\\/Harare\": \"heure d’Afrique centrale (Harare)\",
        \"Africa\\/Johannesburg\": \"heure normale d’Afrique du Sud (Johannesburg)\",
        \"Africa\\/Juba\": \"heure d’Afrique orientale (Juba)\",
        \"Africa\\/Kampala\": \"heure d’Afrique orientale (Kampala)\",
        \"Africa\\/Khartoum\": \"heure d’Afrique centrale (Khartoum)\",
        \"Africa\\/Kigali\": \"heure d’Afrique centrale (Kigali)\",
        \"Africa\\/Lubumbashi\": \"heure d’Afrique centrale (Lubumbashi)\",
        \"Africa\\/Lusaka\": \"heure d’Afrique centrale (Lusaka)\",
        \"Africa\\/Maputo\": \"heure d’Afrique centrale (Maputo)\",
        \"Africa\\/Maseru\": \"heure normale d’Afrique du Sud (Maseru)\",
        \"Africa\\/Mbabane\": \"heure normale d’Afrique du Sud (Mbabane)\",
        \"Africa\\/Mogadishu\": \"heure d’Afrique orientale (Mogadiscio)\",
        \"Africa\\/Nairobi\": \"heure d’Afrique orientale (Nairobi)\",
        \"Africa\\/Ndjamena\": \"heure d’Afrique de l’Ouest (Ndjamena)\",
        \"Africa\\/Tripoli\": \"heure d’Europe de l’Est (Tripoli [Libye])\",
        \"Africa\\/Windhoek\": \"heure d’Afrique centrale (Windhoek)\",
        \"America\\/Adak\": \"heure d’Hawaï-Aléoutiennes (Adak)\",
        \"America\\/Bahia_Banderas\": \"heure du Centre (Bahia de Banderas)\",
        \"America\\/Barbados\": \"heure de l’Atlantique (Barbade (La))\",
        \"America\\/Belize\": \"heure du Centre (Belize)\",
        \"America\\/Cancun\": \"heure de l’Est (Cancún)\",
        \"America\\/Cayenne\": \"heure de Guyane française (Cayenne)\",
        \"America\\/Cayman\": \"heure de l’Est (îles Caïmans)\",
        \"America\\/Chicago\": \"heure du Centre (Chicago)\",
        \"America\\/Coral_Harbour\": \"heure de l’Est (Atikokan)\",
        \"America\\/Costa_Rica\": \"heure du Centre (Costa Rica)\",
        \"America\\/Dawson\": \"heure du Pacifique (Dawson)\",
        \"America\\/Detroit\": \"heure de l’Est (Détroit)\",
        \"America\\/El_Salvador\": \"heure du Centre (El Salvador)\",
        \"America\\/Grand_Turk\": \"heure de l’Est (Grand Turk)\",
        \"America\\/Guatemala\": \"heure du Centre (Guatemala)\",
        \"America\\/Indiana\\/Knox\": \"heure du Centre (Knox [Indiana])\",
        \"America\\/Indiana\\/Marengo\": \"heure de l’Est (Marengo [Indiana])\",
        \"America\\/Indiana\\/Petersburg\": \"heure de l’Est (Petersburg [Indiana])\",
        \"America\\/Indiana\\/Tell_City\": \"heure du Centre (Tell City [Indiana])\",
        \"America\\/Indiana\\/Vevay\": \"heure de l’Est (Vevay [Indiana])\",
        \"America\\/Indiana\\/Vincennes\": \"heure de l’Est (Vincennes [Indiana])\",
        \"America\\/Indiana\\/Winamac\": \"heure de l’Est (Winamac [Indiana])\",
        \"America\\/Indianapolis\": \"heure de l’Est (Indianapolis)\",
        \"America\\/Iqaluit\": \"heure de l’Est (Iqaluit)\",
        \"America\\/Jamaica\": \"heure de l’Est (Jamaïque)\",
        \"America\\/Kentucky\\/Monticello\": \"heure de l’Est (Monticello [Kentucky])\",
        \"America\\/Los_Angeles\": \"heure du Pacifique (Los Angeles)\",
        \"America\\/Louisville\": \"heure de l’Est (Louisville)\",
        \"America\\/Managua\": \"heure du Centre (Managua)\",
        \"America\\/Matamoros\": \"heure du Centre (Matamoros)\",
        \"America\\/Menominee\": \"heure du Centre (Menominee)\",
        \"America\\/Merida\": \"heure du Centre (Mérida)\",
        \"America\\/Mexico_City\": \"heure du Centre (Mexico)\",
        \"America\\/Monterrey\": \"heure du Centre (Monterrey)\",
        \"America\\/Nassau\": \"heure de l’Est (Nassau)\",
        \"America\\/New_York\": \"heure de l’Est (New York)\",
        \"America\\/Nipigon\": \"heure de l’Est (Nipigon)\",
        \"America\\/North_Dakota\\/Beulah\": \"heure du Centre (Beulah [Dakota du Nord])\",
        \"America\\/North_Dakota\\/Center\": \"heure du Centre (Center [Dakota du Nord])\",
        \"America\\/North_Dakota\\/New_Salem\": \"heure du Centre (New Salem, Dakota du Nord)\",
        \"America\\/Panama\": \"heure de l’Est (Panama)\",
        \"America\\/Pangnirtung\": \"heure de l’Est (Pangnirtung)\",
        \"America\\/Port-au-Prince\": \"heure de l’Est (Port-au-Prince)\",
        \"America\\/Rainy_River\": \"heure du Centre (Rainy River)\",
        \"America\\/Rankin_Inlet\": \"heure du Centre (Rankin Inlet)\",
        \"America\\/Regina\": \"heure du Centre (Regina)\",
        \"America\\/Resolute\": \"heure du Centre (Resolute)\",
        \"America\\/St_Johns\": \"heure de Terre-Neuve (St. John’s)\",
        \"America\\/St_Kitts\": \"heure de l’Atlantique (Saint-Christophe-et-Niévès)\",
        \"America\\/St_Thomas\": \"heure de l’Atlantique (Saint Thomas)\",
        \"America\\/Swift_Current\": \"heure du Centre (Swift Current)\",
        \"America\\/Tegucigalpa\": \"heure du Centre (Tégucigalpa)\",
        \"America\\/Thunder_Bay\": \"heure de l’Est (Thunder Bay)\",
        \"America\\/Tijuana\": \"heure du Pacifique (Tijuana)\",
        \"America\\/Toronto\": \"heure de l’Est (Toronto)\",
        \"America\\/Vancouver\": \"heure du Pacifique (Vancouver)\",
        \"America\\/Whitehorse\": \"heure du Pacifique (Whitehorse)\",
        \"America\\/Winnipeg\": \"heure du Centre (Winnipeg)\",
        \"Asia\\/Dhaka\": \"heure du Bangladesh (Dacca)\",
        \"Asia\\/Macau\": \"heure de Chine (Macao)\",
        \"Asia\\/Omsk\": \"heure d’Omsk\",
        \"Asia\\/Shanghai\": \"heure de Chine (Shanghai)\",
        \"Asia\\/Thimphu\": \"heure du Bhoutan (Thimphou)\",
        \"Atlantic\\/Faeroe\": \"heure d’Europe de l’Ouest (îles Féroé)\",
        \"CST6CDT\": \"heure du Centre\",
        \"EST5EDT\": \"heure de l’Est\",
        \"Etc\\/UTC\": \"temps universel coordonné\",
        \"Europe\\/Isle_of_Man\": \"heure moyenne de Greenwich (île de Man)\",
        \"Europe\\/Vatican\": \"heure d’Europe centrale (Vatican)\",
        \"Indian\\/Antananarivo\": \"heure d’Afrique orientale (Antananarivo)\",
        \"Indian\\/Comoro\": \"heure d’Afrique orientale (Comores)\",
        \"Indian\\/Mayotte\": \"heure d’Afrique orientale (Mayotte)\",
        \"Indian\\/Reunion\": \"heure de la Réunion\",
        \"PST8PDT\": \"heure du Pacifique\",
        \"Pacific\\/Honolulu\": \"heure d’Hawaï-Aléoutiennes (Honolulu)\",
        \"Pacific\\/Johnston\": \"heure d’Hawaï-Aléoutiennes (Johnston)\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/fr_CA.json";
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
        \"Africa\\/Addis_Ababa\": \"heure d’Afrique orientale (Addis-Abeba)\",
        \"Africa\\/Asmera\": \"heure d’Afrique orientale (Asmara)\",
        \"Africa\\/Blantyre\": \"heure d’Afrique centrale (Blantyre)\",
        \"Africa\\/Bujumbura\": \"heure d’Afrique centrale (Bujumbura)\",
        \"Africa\\/Dar_es_Salaam\": \"heure d’Afrique orientale (Dar es Salaam)\",
        \"Africa\\/Djibouti\": \"heure d’Afrique orientale (Djibouti)\",
        \"Africa\\/Gaborone\": \"heure d’Afrique centrale (Gaborone)\",
        \"Africa\\/Harare\": \"heure d’Afrique centrale (Harare)\",
        \"Africa\\/Johannesburg\": \"heure normale d’Afrique du Sud (Johannesburg)\",
        \"Africa\\/Juba\": \"heure d’Afrique orientale (Juba)\",
        \"Africa\\/Kampala\": \"heure d’Afrique orientale (Kampala)\",
        \"Africa\\/Khartoum\": \"heure d’Afrique centrale (Khartoum)\",
        \"Africa\\/Kigali\": \"heure d’Afrique centrale (Kigali)\",
        \"Africa\\/Lubumbashi\": \"heure d’Afrique centrale (Lubumbashi)\",
        \"Africa\\/Lusaka\": \"heure d’Afrique centrale (Lusaka)\",
        \"Africa\\/Maputo\": \"heure d’Afrique centrale (Maputo)\",
        \"Africa\\/Maseru\": \"heure normale d’Afrique du Sud (Maseru)\",
        \"Africa\\/Mbabane\": \"heure normale d’Afrique du Sud (Mbabane)\",
        \"Africa\\/Mogadishu\": \"heure d’Afrique orientale (Mogadiscio)\",
        \"Africa\\/Nairobi\": \"heure d’Afrique orientale (Nairobi)\",
        \"Africa\\/Ndjamena\": \"heure d’Afrique de l’Ouest (Ndjamena)\",
        \"Africa\\/Tripoli\": \"heure d’Europe de l’Est (Tripoli [Libye])\",
        \"Africa\\/Windhoek\": \"heure d’Afrique centrale (Windhoek)\",
        \"America\\/Adak\": \"heure d’Hawaï-Aléoutiennes (Adak)\",
        \"America\\/Bahia_Banderas\": \"heure du Centre (Bahia de Banderas)\",
        \"America\\/Barbados\": \"heure de l’Atlantique (Barbade (La))\",
        \"America\\/Belize\": \"heure du Centre (Belize)\",
        \"America\\/Cancun\": \"heure de l’Est (Cancún)\",
        \"America\\/Cayenne\": \"heure de Guyane française (Cayenne)\",
        \"America\\/Cayman\": \"heure de l’Est (îles Caïmans)\",
        \"America\\/Chicago\": \"heure du Centre (Chicago)\",
        \"America\\/Coral_Harbour\": \"heure de l’Est (Atikokan)\",
        \"America\\/Costa_Rica\": \"heure du Centre (Costa Rica)\",
        \"America\\/Dawson\": \"heure du Pacifique (Dawson)\",
        \"America\\/Detroit\": \"heure de l’Est (Détroit)\",
        \"America\\/El_Salvador\": \"heure du Centre (El Salvador)\",
        \"America\\/Grand_Turk\": \"heure de l’Est (Grand Turk)\",
        \"America\\/Guatemala\": \"heure du Centre (Guatemala)\",
        \"America\\/Indiana\\/Knox\": \"heure du Centre (Knox [Indiana])\",
        \"America\\/Indiana\\/Marengo\": \"heure de l’Est (Marengo [Indiana])\",
        \"America\\/Indiana\\/Petersburg\": \"heure de l’Est (Petersburg [Indiana])\",
        \"America\\/Indiana\\/Tell_City\": \"heure du Centre (Tell City [Indiana])\",
        \"America\\/Indiana\\/Vevay\": \"heure de l’Est (Vevay [Indiana])\",
        \"America\\/Indiana\\/Vincennes\": \"heure de l’Est (Vincennes [Indiana])\",
        \"America\\/Indiana\\/Winamac\": \"heure de l’Est (Winamac [Indiana])\",
        \"America\\/Indianapolis\": \"heure de l’Est (Indianapolis)\",
        \"America\\/Iqaluit\": \"heure de l’Est (Iqaluit)\",
        \"America\\/Jamaica\": \"heure de l’Est (Jamaïque)\",
        \"America\\/Kentucky\\/Monticello\": \"heure de l’Est (Monticello [Kentucky])\",
        \"America\\/Los_Angeles\": \"heure du Pacifique (Los Angeles)\",
        \"America\\/Louisville\": \"heure de l’Est (Louisville)\",
        \"America\\/Managua\": \"heure du Centre (Managua)\",
        \"America\\/Matamoros\": \"heure du Centre (Matamoros)\",
        \"America\\/Menominee\": \"heure du Centre (Menominee)\",
        \"America\\/Merida\": \"heure du Centre (Mérida)\",
        \"America\\/Mexico_City\": \"heure du Centre (Mexico)\",
        \"America\\/Monterrey\": \"heure du Centre (Monterrey)\",
        \"America\\/Nassau\": \"heure de l’Est (Nassau)\",
        \"America\\/New_York\": \"heure de l’Est (New York)\",
        \"America\\/Nipigon\": \"heure de l’Est (Nipigon)\",
        \"America\\/North_Dakota\\/Beulah\": \"heure du Centre (Beulah [Dakota du Nord])\",
        \"America\\/North_Dakota\\/Center\": \"heure du Centre (Center [Dakota du Nord])\",
        \"America\\/North_Dakota\\/New_Salem\": \"heure du Centre (New Salem, Dakota du Nord)\",
        \"America\\/Panama\": \"heure de l’Est (Panama)\",
        \"America\\/Pangnirtung\": \"heure de l’Est (Pangnirtung)\",
        \"America\\/Port-au-Prince\": \"heure de l’Est (Port-au-Prince)\",
        \"America\\/Rainy_River\": \"heure du Centre (Rainy River)\",
        \"America\\/Rankin_Inlet\": \"heure du Centre (Rankin Inlet)\",
        \"America\\/Regina\": \"heure du Centre (Regina)\",
        \"America\\/Resolute\": \"heure du Centre (Resolute)\",
        \"America\\/St_Johns\": \"heure de Terre-Neuve (St. John’s)\",
        \"America\\/St_Kitts\": \"heure de l’Atlantique (Saint-Christophe-et-Niévès)\",
        \"America\\/St_Thomas\": \"heure de l’Atlantique (Saint Thomas)\",
        \"America\\/Swift_Current\": \"heure du Centre (Swift Current)\",
        \"America\\/Tegucigalpa\": \"heure du Centre (Tégucigalpa)\",
        \"America\\/Thunder_Bay\": \"heure de l’Est (Thunder Bay)\",
        \"America\\/Tijuana\": \"heure du Pacifique (Tijuana)\",
        \"America\\/Toronto\": \"heure de l’Est (Toronto)\",
        \"America\\/Vancouver\": \"heure du Pacifique (Vancouver)\",
        \"America\\/Whitehorse\": \"heure du Pacifique (Whitehorse)\",
        \"America\\/Winnipeg\": \"heure du Centre (Winnipeg)\",
        \"Asia\\/Dhaka\": \"heure du Bangladesh (Dacca)\",
        \"Asia\\/Macau\": \"heure de Chine (Macao)\",
        \"Asia\\/Omsk\": \"heure d’Omsk\",
        \"Asia\\/Shanghai\": \"heure de Chine (Shanghai)\",
        \"Asia\\/Thimphu\": \"heure du Bhoutan (Thimphou)\",
        \"Atlantic\\/Faeroe\": \"heure d’Europe de l’Ouest (îles Féroé)\",
        \"CST6CDT\": \"heure du Centre\",
        \"EST5EDT\": \"heure de l’Est\",
        \"Etc\\/UTC\": \"temps universel coordonné\",
        \"Europe\\/Isle_of_Man\": \"heure moyenne de Greenwich (île de Man)\",
        \"Europe\\/Vatican\": \"heure d’Europe centrale (Vatican)\",
        \"Indian\\/Antananarivo\": \"heure d’Afrique orientale (Antananarivo)\",
        \"Indian\\/Comoro\": \"heure d’Afrique orientale (Comores)\",
        \"Indian\\/Mayotte\": \"heure d’Afrique orientale (Mayotte)\",
        \"Indian\\/Reunion\": \"heure de la Réunion\",
        \"PST8PDT\": \"heure du Pacifique\",
        \"Pacific\\/Honolulu\": \"heure d’Hawaï-Aléoutiennes (Honolulu)\",
        \"Pacific\\/Johnston\": \"heure d’Hawaï-Aléoutiennes (Johnston)\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/fr_CA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/fr_CA.json");
    }
}
