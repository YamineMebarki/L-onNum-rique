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

/* vendor/symfony/intl/Resources/data/timezones/bo.json */
class __TwigTemplate_ba862cbc40cc59fc59156790f763d85dcfa35e0e49df158cfd703611483aa2da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/bo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/bo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"America\\/Adak\": \"ཨ་མེ་རི་ཀ། (Adak)\",
        \"America\\/Anchorage\": \"ཨ་མེ་རི་ཀ། (Anchorage)\",
        \"America\\/Boise\": \"ཨ་མེ་རི་ཀ། (Boise)\",
        \"America\\/Chicago\": \"ཨ་མེ་རི་ཀ། (Chicago)\",
        \"America\\/Denver\": \"ཨ་མེ་རི་ཀ། (Denver)\",
        \"America\\/Detroit\": \"ཨ་མེ་རི་ཀ། (Detroit)\",
        \"America\\/Indiana\\/Knox\": \"ཨ་མེ་རི་ཀ། (Knox, Indiana)\",
        \"America\\/Indiana\\/Marengo\": \"ཨ་མེ་རི་ཀ། (Marengo, Indiana)\",
        \"America\\/Indiana\\/Petersburg\": \"ཨ་མེ་རི་ཀ། (Petersburg, Indiana)\",
        \"America\\/Indiana\\/Tell_City\": \"ཨ་མེ་རི་ཀ། (Tell City, Indiana)\",
        \"America\\/Indiana\\/Vevay\": \"ཨ་མེ་རི་ཀ། (Vevay, Indiana)\",
        \"America\\/Indiana\\/Vincennes\": \"ཨ་མེ་རི་ཀ། (Vincennes, Indiana)\",
        \"America\\/Indiana\\/Winamac\": \"ཨ་མེ་རི་ཀ། (Winamac, Indiana)\",
        \"America\\/Indianapolis\": \"ཨ་མེ་རི་ཀ། (Indianapolis)\",
        \"America\\/Juneau\": \"ཨ་མེ་རི་ཀ། (Juneau)\",
        \"America\\/Kentucky\\/Monticello\": \"ཨ་མེ་རི་ཀ། (Monticello, Kentucky)\",
        \"America\\/Los_Angeles\": \"ཨ་མེ་རི་ཀ། (Los Angeles)\",
        \"America\\/Louisville\": \"ཨ་མེ་རི་ཀ། (Louisville)\",
        \"America\\/Menominee\": \"ཨ་མེ་རི་ཀ། (Menominee)\",
        \"America\\/Metlakatla\": \"ཨ་མེ་རི་ཀ། (Metlakatla)\",
        \"America\\/New_York\": \"ཨ་མེ་རི་ཀ། (New York)\",
        \"America\\/Nome\": \"ཨ་མེ་རི་ཀ། (Nome)\",
        \"America\\/North_Dakota\\/Beulah\": \"ཨ་མེ་རི་ཀ། (Beulah, North Dakota)\",
        \"America\\/North_Dakota\\/Center\": \"ཨ་མེ་རི་ཀ། (Center, North Dakota)\",
        \"America\\/North_Dakota\\/New_Salem\": \"ཨ་མེ་རི་ཀ། (New Salem, North Dakota)\",
        \"America\\/Phoenix\": \"ཨ་མེ་རི་ཀ། (Phoenix)\",
        \"America\\/Sitka\": \"ཨ་མེ་རི་ཀ། (Sitka)\",
        \"America\\/Yakutat\": \"ཨ་མེ་རི་ཀ། (Yakutat)\",
        \"Antarctica\\/Troll\": \"Troll\",
        \"Asia\\/Anadyr\": \"ཨུ་རུ་སུ་ (Anadyr)\",
        \"Asia\\/Barnaul\": \"ཨུ་རུ་སུ་ (Barnaul)\",
        \"Asia\\/Calcutta\": \"རྒྱ་གར་ (Kolkata)\",
        \"Asia\\/Chita\": \"ཨུ་རུ་སུ་ (Chita)\",
        \"Asia\\/Irkutsk\": \"ཨུ་རུ་སུ་ (Irkutsk)\",
        \"Asia\\/Kamchatka\": \"ཨུ་རུ་སུ་ (Kamchatka)\",
        \"Asia\\/Katmandu\": \"བལ་ཡུལ་ (Kathmandu)\",
        \"Asia\\/Khandyga\": \"ཨུ་རུ་སུ་ (Khandyga)\",
        \"Asia\\/Krasnoyarsk\": \"ཨུ་རུ་སུ་ (Krasnoyarsk)\",
        \"Asia\\/Magadan\": \"ཨུ་རུ་སུ་ (Magadan)\",
        \"Asia\\/Novokuznetsk\": \"ཨུ་རུ་སུ་ (Novokuznetsk)\",
        \"Asia\\/Novosibirsk\": \"ཨུ་རུ་སུ་ (Novosibirsk)\",
        \"Asia\\/Omsk\": \"ཨུ་རུ་སུ་ (Omsk)\",
        \"Asia\\/Sakhalin\": \"ཨུ་རུ་སུ་ (Sakhalin)\",
        \"Asia\\/Seoul\": \"ལྷོ་ཀོ་རི་ཡ། (Seoul)\",
        \"Asia\\/Shanghai\": \"རྒྱ་ནག (Shanghai)\",
        \"Asia\\/Srednekolymsk\": \"ཨུ་རུ་སུ་ (Srednekolymsk)\",
        \"Asia\\/Tokyo\": \"ཉི་ཧོང་ (Tokyo)\",
        \"Asia\\/Tomsk\": \"ཨུ་རུ་སུ་ (Tomsk)\",
        \"Asia\\/Urumqi\": \"རྒྱ་ནག (Urumqi)\",
        \"Asia\\/Ust-Nera\": \"ཨུ་རུ་སུ་ (Ust-Nera)\",
        \"Asia\\/Vladivostok\": \"ཨུ་རུ་སུ་ (Vladivostok)\",
        \"Asia\\/Yakutsk\": \"ཨུ་རུ་སུ་ (Yakutsk)\",
        \"Asia\\/Yekaterinburg\": \"ཨུ་རུ་སུ་ (Yekaterinburg)\",
        \"Europe\\/Astrakhan\": \"ཨུ་རུ་སུ་ (Astrakhan)\",
        \"Europe\\/Berlin\": \"འཇར་མན་ (Berlin)\",
        \"Europe\\/Busingen\": \"འཇར་མན་ (Busingen)\",
        \"Europe\\/Kaliningrad\": \"ཨུ་རུ་སུ་ (Kaliningrad)\",
        \"Europe\\/Kirov\": \"ཨུ་རུ་སུ་ (Kirov)\",
        \"Europe\\/London\": \"དབྱིན་ཇི་ (London)\",
        \"Europe\\/Moscow\": \"ཨུ་རུ་སུ་ (Moscow)\",
        \"Europe\\/Rome\": \"ཨི་ཀྲར་ལི་ (Rome)\",
        \"Europe\\/Samara\": \"ཨུ་རུ་སུ་ (Samara)\",
        \"Europe\\/Saratov\": \"ཨུ་རུ་སུ་ (Saratov)\",
        \"Europe\\/Ulyanovsk\": \"ཨུ་རུ་སུ་ (Ulyanovsk)\",
        \"Europe\\/Volgograd\": \"ཨུ་རུ་སུ་ (Volgograd)\",
        \"Pacific\\/Honolulu\": \"ཨ་མེ་རི་ཀ། (Honolulu)\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/bo.json";
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
        \"America\\/Adak\": \"ཨ་མེ་རི་ཀ། (Adak)\",
        \"America\\/Anchorage\": \"ཨ་མེ་རི་ཀ། (Anchorage)\",
        \"America\\/Boise\": \"ཨ་མེ་རི་ཀ། (Boise)\",
        \"America\\/Chicago\": \"ཨ་མེ་རི་ཀ། (Chicago)\",
        \"America\\/Denver\": \"ཨ་མེ་རི་ཀ། (Denver)\",
        \"America\\/Detroit\": \"ཨ་མེ་རི་ཀ། (Detroit)\",
        \"America\\/Indiana\\/Knox\": \"ཨ་མེ་རི་ཀ། (Knox, Indiana)\",
        \"America\\/Indiana\\/Marengo\": \"ཨ་མེ་རི་ཀ། (Marengo, Indiana)\",
        \"America\\/Indiana\\/Petersburg\": \"ཨ་མེ་རི་ཀ། (Petersburg, Indiana)\",
        \"America\\/Indiana\\/Tell_City\": \"ཨ་མེ་རི་ཀ། (Tell City, Indiana)\",
        \"America\\/Indiana\\/Vevay\": \"ཨ་མེ་རི་ཀ། (Vevay, Indiana)\",
        \"America\\/Indiana\\/Vincennes\": \"ཨ་མེ་རི་ཀ། (Vincennes, Indiana)\",
        \"America\\/Indiana\\/Winamac\": \"ཨ་མེ་རི་ཀ། (Winamac, Indiana)\",
        \"America\\/Indianapolis\": \"ཨ་མེ་རི་ཀ། (Indianapolis)\",
        \"America\\/Juneau\": \"ཨ་མེ་རི་ཀ། (Juneau)\",
        \"America\\/Kentucky\\/Monticello\": \"ཨ་མེ་རི་ཀ། (Monticello, Kentucky)\",
        \"America\\/Los_Angeles\": \"ཨ་མེ་རི་ཀ། (Los Angeles)\",
        \"America\\/Louisville\": \"ཨ་མེ་རི་ཀ། (Louisville)\",
        \"America\\/Menominee\": \"ཨ་མེ་རི་ཀ། (Menominee)\",
        \"America\\/Metlakatla\": \"ཨ་མེ་རི་ཀ། (Metlakatla)\",
        \"America\\/New_York\": \"ཨ་མེ་རི་ཀ། (New York)\",
        \"America\\/Nome\": \"ཨ་མེ་རི་ཀ། (Nome)\",
        \"America\\/North_Dakota\\/Beulah\": \"ཨ་མེ་རི་ཀ། (Beulah, North Dakota)\",
        \"America\\/North_Dakota\\/Center\": \"ཨ་མེ་རི་ཀ། (Center, North Dakota)\",
        \"America\\/North_Dakota\\/New_Salem\": \"ཨ་མེ་རི་ཀ། (New Salem, North Dakota)\",
        \"America\\/Phoenix\": \"ཨ་མེ་རི་ཀ། (Phoenix)\",
        \"America\\/Sitka\": \"ཨ་མེ་རི་ཀ། (Sitka)\",
        \"America\\/Yakutat\": \"ཨ་མེ་རི་ཀ། (Yakutat)\",
        \"Antarctica\\/Troll\": \"Troll\",
        \"Asia\\/Anadyr\": \"ཨུ་རུ་སུ་ (Anadyr)\",
        \"Asia\\/Barnaul\": \"ཨུ་རུ་སུ་ (Barnaul)\",
        \"Asia\\/Calcutta\": \"རྒྱ་གར་ (Kolkata)\",
        \"Asia\\/Chita\": \"ཨུ་རུ་སུ་ (Chita)\",
        \"Asia\\/Irkutsk\": \"ཨུ་རུ་སུ་ (Irkutsk)\",
        \"Asia\\/Kamchatka\": \"ཨུ་རུ་སུ་ (Kamchatka)\",
        \"Asia\\/Katmandu\": \"བལ་ཡུལ་ (Kathmandu)\",
        \"Asia\\/Khandyga\": \"ཨུ་རུ་སུ་ (Khandyga)\",
        \"Asia\\/Krasnoyarsk\": \"ཨུ་རུ་སུ་ (Krasnoyarsk)\",
        \"Asia\\/Magadan\": \"ཨུ་རུ་སུ་ (Magadan)\",
        \"Asia\\/Novokuznetsk\": \"ཨུ་རུ་སུ་ (Novokuznetsk)\",
        \"Asia\\/Novosibirsk\": \"ཨུ་རུ་སུ་ (Novosibirsk)\",
        \"Asia\\/Omsk\": \"ཨུ་རུ་སུ་ (Omsk)\",
        \"Asia\\/Sakhalin\": \"ཨུ་རུ་སུ་ (Sakhalin)\",
        \"Asia\\/Seoul\": \"ལྷོ་ཀོ་རི་ཡ། (Seoul)\",
        \"Asia\\/Shanghai\": \"རྒྱ་ནག (Shanghai)\",
        \"Asia\\/Srednekolymsk\": \"ཨུ་རུ་སུ་ (Srednekolymsk)\",
        \"Asia\\/Tokyo\": \"ཉི་ཧོང་ (Tokyo)\",
        \"Asia\\/Tomsk\": \"ཨུ་རུ་སུ་ (Tomsk)\",
        \"Asia\\/Urumqi\": \"རྒྱ་ནག (Urumqi)\",
        \"Asia\\/Ust-Nera\": \"ཨུ་རུ་སུ་ (Ust-Nera)\",
        \"Asia\\/Vladivostok\": \"ཨུ་རུ་སུ་ (Vladivostok)\",
        \"Asia\\/Yakutsk\": \"ཨུ་རུ་སུ་ (Yakutsk)\",
        \"Asia\\/Yekaterinburg\": \"ཨུ་རུ་སུ་ (Yekaterinburg)\",
        \"Europe\\/Astrakhan\": \"ཨུ་རུ་སུ་ (Astrakhan)\",
        \"Europe\\/Berlin\": \"འཇར་མན་ (Berlin)\",
        \"Europe\\/Busingen\": \"འཇར་མན་ (Busingen)\",
        \"Europe\\/Kaliningrad\": \"ཨུ་རུ་སུ་ (Kaliningrad)\",
        \"Europe\\/Kirov\": \"ཨུ་རུ་སུ་ (Kirov)\",
        \"Europe\\/London\": \"དབྱིན་ཇི་ (London)\",
        \"Europe\\/Moscow\": \"ཨུ་རུ་སུ་ (Moscow)\",
        \"Europe\\/Rome\": \"ཨི་ཀྲར་ལི་ (Rome)\",
        \"Europe\\/Samara\": \"ཨུ་རུ་སུ་ (Samara)\",
        \"Europe\\/Saratov\": \"ཨུ་རུ་སུ་ (Saratov)\",
        \"Europe\\/Ulyanovsk\": \"ཨུ་རུ་སུ་ (Ulyanovsk)\",
        \"Europe\\/Volgograd\": \"ཨུ་རུ་སུ་ (Volgograd)\",
        \"Pacific\\/Honolulu\": \"ཨ་མེ་རི་ཀ། (Honolulu)\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/bo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/bo.json");
    }
}
