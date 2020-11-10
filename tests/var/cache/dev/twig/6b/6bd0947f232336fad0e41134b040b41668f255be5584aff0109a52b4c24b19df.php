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

/* vendor/symfony/intl/Resources/data/timezones/es_419.json */
class __TwigTemplate_42c1fe3b6143928189dcae8f208b0a4c9bdcfa77655055d247c2deb97bb81b53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/es_419.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/es_419.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Africa\\/Cairo\": \"hora de Europa del Este (El Cairo)\",
        \"Africa\\/Casablanca\": \"hora de Europa del Oeste (Casablanca)\",
        \"Africa\\/El_Aaiun\": \"hora de Europa del Oeste (El Aaiún)\",
        \"Africa\\/Tripoli\": \"hora de Europa del Este (Trípoli)\",
        \"America\\/Boise\": \"hora de la montaña (Boise)\",
        \"America\\/Cambridge_Bay\": \"hora de la montaña (Cambridge Bay)\",
        \"America\\/Creston\": \"hora de la montaña (Creston)\",
        \"America\\/Dawson_Creek\": \"hora de la montaña (Dawson Creek)\",
        \"America\\/Denver\": \"hora de la montaña (Denver)\",
        \"America\\/Edmonton\": \"hora de la montaña (Edmonton)\",
        \"America\\/Fort_Nelson\": \"hora de la montaña (Fuerte Nelson)\",
        \"America\\/Inuvik\": \"hora de la montaña (Inuvik)\",
        \"America\\/Nassau\": \"hora oriental (Nasáu)\",
        \"America\\/Ojinaga\": \"hora de la montaña (Ojinaga)\",
        \"America\\/Phoenix\": \"hora de la montaña (Phoenix)\",
        \"America\\/Santiago\": \"hora de Chile (Santiago)\",
        \"America\\/St_Thomas\": \"hora del Atlántico (Santo Tomás)\",
        \"America\\/Yellowknife\": \"hora de la montaña (Yellowknife)\",
        \"Antarctica\\/Macquarie\": \"hora de la Isla Macquarie\",
        \"Asia\\/Amman\": \"hora de Europa del Este (Ammán)\",
        \"Asia\\/Beirut\": \"hora de Europa del Este (Beirut)\",
        \"Asia\\/Calcutta\": \"hora de India (Calcuta)\",
        \"Asia\\/Colombo\": \"hora de India (Colombo)\",
        \"Asia\\/Damascus\": \"hora de Europa del Este (Damasco)\",
        \"Asia\\/Famagusta\": \"hora de Europa del Este (Famagusta)\",
        \"Asia\\/Gaza\": \"hora de Europa del Este (Gaza)\",
        \"Asia\\/Hebron\": \"hora de Europa del Este (Hebrón)\",
        \"Asia\\/Nicosia\": \"hora de Europa del Este (Nicosia)\",
        \"Asia\\/Rangoon\": \"hora de Myanmar (Birmania) (Yangón (Rangún))\",
        \"Atlantic\\/Canary\": \"hora de Europa del Oeste (Islas Canarias)\",
        \"Atlantic\\/Faeroe\": \"hora de Europa del Oeste (Islas Feroe)\",
        \"Atlantic\\/Madeira\": \"hora de Europa del Oeste (Madeira)\",
        \"Atlantic\\/Stanley\": \"hora de las Islas Malvinas (Stanley)\",
        \"Etc\\/UTC\": \"Hora Universal Coordinada\",
        \"Europe\\/Athens\": \"hora de Europa del Este (Atenas)\",
        \"Europe\\/Bucharest\": \"hora de Europa del Este (Bucarest)\",
        \"Europe\\/Busingen\": \"hora de Europa central (Büsingen)\",
        \"Europe\\/Chisinau\": \"hora de Europa del Este (Chisináu)\",
        \"Europe\\/Helsinki\": \"hora de Europa del Este (Helsinki)\",
        \"Europe\\/Kaliningrad\": \"hora de Europa del Este (Kaliningrado)\",
        \"Europe\\/Kiev\": \"hora de Europa del Este (Kiev)\",
        \"Europe\\/Lisbon\": \"hora de Europa del Oeste (Lisboa)\",
        \"Europe\\/Mariehamn\": \"hora de Europa del Este (Mariehamn)\",
        \"Europe\\/Riga\": \"hora de Europa del Este (Riga)\",
        \"Europe\\/Sofia\": \"hora de Europa del Este (Sofía)\",
        \"Europe\\/Tallinn\": \"hora de Europa del Este (Tallin)\",
        \"Europe\\/Uzhgorod\": \"hora de Europa del Este (Úzhgorod)\",
        \"Europe\\/Vilnius\": \"hora de Europa del Este (Vilna)\",
        \"Europe\\/Zaporozhye\": \"hora de Europa del Este (Zaporiyia)\",
        \"Indian\\/Cocos\": \"hora de Islas Cocos\",
        \"Indian\\/Kerguelen\": \"hora de las Tierras Australes y Antárticas Francesas (Kerguelen)\",
        \"MST7MDT\": \"hora de la montaña\",
        \"Pacific\\/Easter\": \"hora de la Isla de Pascua\",
        \"Pacific\\/Guadalcanal\": \"hora de Islas Salomón (Guadalcanal)\",
        \"Pacific\\/Kwajalein\": \"hora de Islas Marshall (Kwajalein)\",
        \"Pacific\\/Majuro\": \"hora de Islas Marshall (Majuro)\",
        \"Pacific\\/Norfolk\": \"hora de la Isla Norfolk\",
        \"Pacific\\/Rarotonga\": \"hora de las islas Cook (Rarotonga)\",
        \"Pacific\\/Tarawa\": \"hora de Islas Gilbert (Tarawa)\",
        \"Pacific\\/Wake\": \"hora de Isla Wake\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/es_419.json";
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
        \"Africa\\/Cairo\": \"hora de Europa del Este (El Cairo)\",
        \"Africa\\/Casablanca\": \"hora de Europa del Oeste (Casablanca)\",
        \"Africa\\/El_Aaiun\": \"hora de Europa del Oeste (El Aaiún)\",
        \"Africa\\/Tripoli\": \"hora de Europa del Este (Trípoli)\",
        \"America\\/Boise\": \"hora de la montaña (Boise)\",
        \"America\\/Cambridge_Bay\": \"hora de la montaña (Cambridge Bay)\",
        \"America\\/Creston\": \"hora de la montaña (Creston)\",
        \"America\\/Dawson_Creek\": \"hora de la montaña (Dawson Creek)\",
        \"America\\/Denver\": \"hora de la montaña (Denver)\",
        \"America\\/Edmonton\": \"hora de la montaña (Edmonton)\",
        \"America\\/Fort_Nelson\": \"hora de la montaña (Fuerte Nelson)\",
        \"America\\/Inuvik\": \"hora de la montaña (Inuvik)\",
        \"America\\/Nassau\": \"hora oriental (Nasáu)\",
        \"America\\/Ojinaga\": \"hora de la montaña (Ojinaga)\",
        \"America\\/Phoenix\": \"hora de la montaña (Phoenix)\",
        \"America\\/Santiago\": \"hora de Chile (Santiago)\",
        \"America\\/St_Thomas\": \"hora del Atlántico (Santo Tomás)\",
        \"America\\/Yellowknife\": \"hora de la montaña (Yellowknife)\",
        \"Antarctica\\/Macquarie\": \"hora de la Isla Macquarie\",
        \"Asia\\/Amman\": \"hora de Europa del Este (Ammán)\",
        \"Asia\\/Beirut\": \"hora de Europa del Este (Beirut)\",
        \"Asia\\/Calcutta\": \"hora de India (Calcuta)\",
        \"Asia\\/Colombo\": \"hora de India (Colombo)\",
        \"Asia\\/Damascus\": \"hora de Europa del Este (Damasco)\",
        \"Asia\\/Famagusta\": \"hora de Europa del Este (Famagusta)\",
        \"Asia\\/Gaza\": \"hora de Europa del Este (Gaza)\",
        \"Asia\\/Hebron\": \"hora de Europa del Este (Hebrón)\",
        \"Asia\\/Nicosia\": \"hora de Europa del Este (Nicosia)\",
        \"Asia\\/Rangoon\": \"hora de Myanmar (Birmania) (Yangón (Rangún))\",
        \"Atlantic\\/Canary\": \"hora de Europa del Oeste (Islas Canarias)\",
        \"Atlantic\\/Faeroe\": \"hora de Europa del Oeste (Islas Feroe)\",
        \"Atlantic\\/Madeira\": \"hora de Europa del Oeste (Madeira)\",
        \"Atlantic\\/Stanley\": \"hora de las Islas Malvinas (Stanley)\",
        \"Etc\\/UTC\": \"Hora Universal Coordinada\",
        \"Europe\\/Athens\": \"hora de Europa del Este (Atenas)\",
        \"Europe\\/Bucharest\": \"hora de Europa del Este (Bucarest)\",
        \"Europe\\/Busingen\": \"hora de Europa central (Büsingen)\",
        \"Europe\\/Chisinau\": \"hora de Europa del Este (Chisináu)\",
        \"Europe\\/Helsinki\": \"hora de Europa del Este (Helsinki)\",
        \"Europe\\/Kaliningrad\": \"hora de Europa del Este (Kaliningrado)\",
        \"Europe\\/Kiev\": \"hora de Europa del Este (Kiev)\",
        \"Europe\\/Lisbon\": \"hora de Europa del Oeste (Lisboa)\",
        \"Europe\\/Mariehamn\": \"hora de Europa del Este (Mariehamn)\",
        \"Europe\\/Riga\": \"hora de Europa del Este (Riga)\",
        \"Europe\\/Sofia\": \"hora de Europa del Este (Sofía)\",
        \"Europe\\/Tallinn\": \"hora de Europa del Este (Tallin)\",
        \"Europe\\/Uzhgorod\": \"hora de Europa del Este (Úzhgorod)\",
        \"Europe\\/Vilnius\": \"hora de Europa del Este (Vilna)\",
        \"Europe\\/Zaporozhye\": \"hora de Europa del Este (Zaporiyia)\",
        \"Indian\\/Cocos\": \"hora de Islas Cocos\",
        \"Indian\\/Kerguelen\": \"hora de las Tierras Australes y Antárticas Francesas (Kerguelen)\",
        \"MST7MDT\": \"hora de la montaña\",
        \"Pacific\\/Easter\": \"hora de la Isla de Pascua\",
        \"Pacific\\/Guadalcanal\": \"hora de Islas Salomón (Guadalcanal)\",
        \"Pacific\\/Kwajalein\": \"hora de Islas Marshall (Kwajalein)\",
        \"Pacific\\/Majuro\": \"hora de Islas Marshall (Majuro)\",
        \"Pacific\\/Norfolk\": \"hora de la Isla Norfolk\",
        \"Pacific\\/Rarotonga\": \"hora de las islas Cook (Rarotonga)\",
        \"Pacific\\/Tarawa\": \"hora de Islas Gilbert (Tarawa)\",
        \"Pacific\\/Wake\": \"hora de Isla Wake\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/es_419.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/es_419.json");
    }
}
