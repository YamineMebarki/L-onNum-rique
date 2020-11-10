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

/* vendor/symfony/intl/Resources/data/timezones/sw_KE.json */
class __TwigTemplate_2111a361182f794b150018cb126b271cbcad65af6a4370786cec0d2436b161b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/sw_KE.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/sw_KE.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"America\\/Araguaina\": \"Saa za Brazili (Araguaina)\",
        \"America\\/Argentina\\/La_Rioja\": \"Saa za Ajentina (La Rioja)\",
        \"America\\/Argentina\\/Rio_Gallegos\": \"Saa za Ajentina (Rio Gallegos)\",
        \"America\\/Argentina\\/Salta\": \"Saa za Ajentina (Salta)\",
        \"America\\/Argentina\\/San_Juan\": \"Saa za Ajentina (San Juan)\",
        \"America\\/Argentina\\/San_Luis\": \"Saa za Magharibi mwa Ajentina (San Luis)\",
        \"America\\/Argentina\\/Tucuman\": \"Saa za Ajentina (Tucuman)\",
        \"America\\/Argentina\\/Ushuaia\": \"Saa za Ajentina (Ushuaia)\",
        \"America\\/Asuncion\": \"Saa za Paragwai (Asuncion)\",
        \"America\\/Bahia\": \"Saa za Brazili (Bahia)\",
        \"America\\/Barbados\": \"Saa za Atlantiki (Babadosi)\",
        \"America\\/Belem\": \"Saa za Brazili (Belem)\",
        \"America\\/Bogota\": \"Saa za Kolombia (Bogota)\",
        \"America\\/Buenos_Aires\": \"Saa za Ajentina (Buenos Aires)\",
        \"America\\/Catamarca\": \"Saa za Ajentina (Catamarca)\",
        \"America\\/Cayenne\": \"Saa za Guiana (Cayenne)\",
        \"America\\/Cordoba\": \"Saa za Ajentina (Cordoba)\",
        \"America\\/Costa_Rica\": \"Saa za Kati (Kostarika)\",
        \"America\\/Dominica\": \"Saa za Atlantiki (Dominika)\",
        \"America\\/El_Salvador\": \"Saa za Kati (Elsalvado)\",
        \"America\\/Fortaleza\": \"Saa za Brazili (Fortaleza)\",
        \"America\\/Guadeloupe\": \"Saa za Atlantiki (Guadalupe)\",
        \"America\\/Guayaquil\": \"Saa za Ekwado (Guayaquil)\",
        \"America\\/Havana\": \"Saa za Kuba (Havana)\",
        \"America\\/Jamaica\": \"Saa za Mashariki (Jamaika)\",
        \"America\\/Jujuy\": \"Saa za Ajentina (Jujuy)\",
        \"America\\/Maceio\": \"Saa za Brazili (Maceio)\",
        \"America\\/Martinique\": \"Saa za Atlantiki (Matinikiu)\",
        \"America\\/Mendoza\": \"Saa za Ajentina (Mendoza)\",
        \"America\\/Montevideo\": \"Saa za Uruagwai (Montevideo)\",
        \"America\\/North_Dakota\\/Beulah\": \"Saa za Kati (Beulah, Dakota Kaskazini)\",
        \"America\\/North_Dakota\\/Center\": \"Saa za Kati (Center, Dakota Kaskazini)\",
        \"America\\/North_Dakota\\/New_Salem\": \"Saa za Kati (New Salem, Dakota Kaskazini)\",
        \"America\\/Port-au-Prince\": \"Saa za Mashariki (Bandari ya au-Prince)\",
        \"America\\/Port_of_Spain\": \"Saa za Atlantiki (Bandari ya Uhispania)\",
        \"America\\/Recife\": \"Saa za Brazili (Recife)\",
        \"America\\/Santa_Isabel\": \"Saa za Kaskazini Magharibi mwa Meksiko (Santa Isabel)\",
        \"America\\/Santarem\": \"Saa za Brazili (Santarem)\",
        \"America\\/Sao_Paulo\": \"Saa za Brazili (Sao Paulo)\",
        \"Antarctica\\/Macquarie\": \"Saa za Makwuarie\",
        \"Antarctica\\/McMurdo\": \"Saa za Nyuzilandi (McMurdo)\",
        \"Asia\\/Almaty\": \"Saa za Kazakistani Mashariki (Almaty)\",
        \"Asia\\/Aqtau\": \"Saa za Kazakistani Magharibi (Aqtau)\",
        \"Asia\\/Aqtobe\": \"Saa za Kazakistani Magharibi (Aqtobe)\",
        \"Asia\\/Ashgabat\": \"Saa za Turkmenistani (Ashgabat)\",
        \"Asia\\/Atyrau\": \"Saa za Kazakistani Magharibi (Atyrau)\",
        \"Asia\\/Baku\": \"Saa za Azabajani (Baku)\",
        \"Asia\\/Calcutta\": \"Saa za Wastani za India (Kolkata)\",
        \"Asia\\/Colombo\": \"Saa za Wastani za India (Kolombo)\",
        \"Asia\\/Dhaka\": \"Saa za Bangladeshi (Dhaka)\",
        \"Asia\\/Dubai\": \"Saa za Wastani za Ghuba (Dubai)\",
        \"Asia\\/Dushanbe\": \"Saaza Tajikistani (Dushanbe)\",
        \"Asia\\/Kabul\": \"Saa za Afghanistani (Kabul)\",
        \"Asia\\/Karachi\": \"Saa za Pakistani (Karachi)\",
        \"Asia\\/Katmandu\": \"Saa za Nepali (Kathmandu)\",
        \"Asia\\/Kuala_Lumpur\": \"Saa za Malesia (Kuala Lumpur)\",
        \"Asia\\/Kuching\": \"Saa za Malesia (Kuching)\",
        \"Asia\\/Macau\": \"Saa za Uchina (Makao)\",
        \"Asia\\/Muscat\": \"Saa za Wastani za Ghuba (Muscat)\",
        \"Asia\\/Oral\": \"Saa za Kazakistani Magharibi (Oral)\",
        \"Asia\\/Qostanay\": \"Saa za Kazakistani Mashariki (Kostanay)\",
        \"Asia\\/Qyzylorda\": \"Saa za Kazakistani Magharibi (Qyzylorda)\",
        \"Asia\\/Rangoon\": \"Saa za Myama (Yangon)\",
        \"Asia\\/Saigon\": \"Saa za Indochina (Jiji la Ho Chi Minh)\",
        \"Asia\\/Samarkand\": \"Saa za Uzbekistani (Samarkand)\",
        \"Asia\\/Singapore\": \"Saa za Wastani za Singapoo\",
        \"Asia\\/Tashkent\": \"Saa za Uzbekistani (Tashkent)\",
        \"Asia\\/Tbilisi\": \"Saa za Jiojia (Tbilisi)\",
        \"Asia\\/Tehran\": \"Saa za Irani (Tehran)\",
        \"Asia\\/Thimphu\": \"Saa za Butani (Thimphu)\",
        \"Asia\\/Tokyo\": \"Saa za Japani (Tokyo)\",
        \"Asia\\/Ulaanbaatar\": \"Saa za Ulaanbataar (Ulaanbaatar)\",
        \"Atlantic\\/Bermuda\": \"Saa za Atlantiki (Bamuda)\",
        \"Atlantic\\/Canary\": \"Saa za Magharibi mwa Ulaya (Kanari)\",
        \"Atlantic\\/Cape_Verde\": \"Saa za Kepuvede (Cape Verde)\",
        \"Atlantic\\/South_Georgia\": \"Saa za Jojia Kusini (Georgia Kusini)\",
        \"Australia\\/Eucla\": \"Saa za Magharibi mwa Austrialia ya Kati (Eucla)\",
        \"Etc\\/UTC\": \"Saa ya Ulimwenguni\",
        \"Indian\\/Christmas\": \"Saa za Kisiwa cha Krismasi\",
        \"Indian\\/Maldives\": \"Saa za Maldivi\",
        \"Pacific\\/Auckland\": \"Saa za Nyuzilandi (Auckland)\",
        \"Pacific\\/Bougainville\": \"Saa za Papua (Bougainville)\",
        \"Pacific\\/Enderbury\": \"Saa za Visiwa vya Finiksi (Enderbury)\",
        \"Pacific\\/Noumea\": \"Saa za Kaledonia Mpya (Noumea)\",
        \"Pacific\\/Port_Moresby\": \"Saa za Papua (Port Moresby)\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/sw_KE.json";
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
        \"America\\/Araguaina\": \"Saa za Brazili (Araguaina)\",
        \"America\\/Argentina\\/La_Rioja\": \"Saa za Ajentina (La Rioja)\",
        \"America\\/Argentina\\/Rio_Gallegos\": \"Saa za Ajentina (Rio Gallegos)\",
        \"America\\/Argentina\\/Salta\": \"Saa za Ajentina (Salta)\",
        \"America\\/Argentina\\/San_Juan\": \"Saa za Ajentina (San Juan)\",
        \"America\\/Argentina\\/San_Luis\": \"Saa za Magharibi mwa Ajentina (San Luis)\",
        \"America\\/Argentina\\/Tucuman\": \"Saa za Ajentina (Tucuman)\",
        \"America\\/Argentina\\/Ushuaia\": \"Saa za Ajentina (Ushuaia)\",
        \"America\\/Asuncion\": \"Saa za Paragwai (Asuncion)\",
        \"America\\/Bahia\": \"Saa za Brazili (Bahia)\",
        \"America\\/Barbados\": \"Saa za Atlantiki (Babadosi)\",
        \"America\\/Belem\": \"Saa za Brazili (Belem)\",
        \"America\\/Bogota\": \"Saa za Kolombia (Bogota)\",
        \"America\\/Buenos_Aires\": \"Saa za Ajentina (Buenos Aires)\",
        \"America\\/Catamarca\": \"Saa za Ajentina (Catamarca)\",
        \"America\\/Cayenne\": \"Saa za Guiana (Cayenne)\",
        \"America\\/Cordoba\": \"Saa za Ajentina (Cordoba)\",
        \"America\\/Costa_Rica\": \"Saa za Kati (Kostarika)\",
        \"America\\/Dominica\": \"Saa za Atlantiki (Dominika)\",
        \"America\\/El_Salvador\": \"Saa za Kati (Elsalvado)\",
        \"America\\/Fortaleza\": \"Saa za Brazili (Fortaleza)\",
        \"America\\/Guadeloupe\": \"Saa za Atlantiki (Guadalupe)\",
        \"America\\/Guayaquil\": \"Saa za Ekwado (Guayaquil)\",
        \"America\\/Havana\": \"Saa za Kuba (Havana)\",
        \"America\\/Jamaica\": \"Saa za Mashariki (Jamaika)\",
        \"America\\/Jujuy\": \"Saa za Ajentina (Jujuy)\",
        \"America\\/Maceio\": \"Saa za Brazili (Maceio)\",
        \"America\\/Martinique\": \"Saa za Atlantiki (Matinikiu)\",
        \"America\\/Mendoza\": \"Saa za Ajentina (Mendoza)\",
        \"America\\/Montevideo\": \"Saa za Uruagwai (Montevideo)\",
        \"America\\/North_Dakota\\/Beulah\": \"Saa za Kati (Beulah, Dakota Kaskazini)\",
        \"America\\/North_Dakota\\/Center\": \"Saa za Kati (Center, Dakota Kaskazini)\",
        \"America\\/North_Dakota\\/New_Salem\": \"Saa za Kati (New Salem, Dakota Kaskazini)\",
        \"America\\/Port-au-Prince\": \"Saa za Mashariki (Bandari ya au-Prince)\",
        \"America\\/Port_of_Spain\": \"Saa za Atlantiki (Bandari ya Uhispania)\",
        \"America\\/Recife\": \"Saa za Brazili (Recife)\",
        \"America\\/Santa_Isabel\": \"Saa za Kaskazini Magharibi mwa Meksiko (Santa Isabel)\",
        \"America\\/Santarem\": \"Saa za Brazili (Santarem)\",
        \"America\\/Sao_Paulo\": \"Saa za Brazili (Sao Paulo)\",
        \"Antarctica\\/Macquarie\": \"Saa za Makwuarie\",
        \"Antarctica\\/McMurdo\": \"Saa za Nyuzilandi (McMurdo)\",
        \"Asia\\/Almaty\": \"Saa za Kazakistani Mashariki (Almaty)\",
        \"Asia\\/Aqtau\": \"Saa za Kazakistani Magharibi (Aqtau)\",
        \"Asia\\/Aqtobe\": \"Saa za Kazakistani Magharibi (Aqtobe)\",
        \"Asia\\/Ashgabat\": \"Saa za Turkmenistani (Ashgabat)\",
        \"Asia\\/Atyrau\": \"Saa za Kazakistani Magharibi (Atyrau)\",
        \"Asia\\/Baku\": \"Saa za Azabajani (Baku)\",
        \"Asia\\/Calcutta\": \"Saa za Wastani za India (Kolkata)\",
        \"Asia\\/Colombo\": \"Saa za Wastani za India (Kolombo)\",
        \"Asia\\/Dhaka\": \"Saa za Bangladeshi (Dhaka)\",
        \"Asia\\/Dubai\": \"Saa za Wastani za Ghuba (Dubai)\",
        \"Asia\\/Dushanbe\": \"Saaza Tajikistani (Dushanbe)\",
        \"Asia\\/Kabul\": \"Saa za Afghanistani (Kabul)\",
        \"Asia\\/Karachi\": \"Saa za Pakistani (Karachi)\",
        \"Asia\\/Katmandu\": \"Saa za Nepali (Kathmandu)\",
        \"Asia\\/Kuala_Lumpur\": \"Saa za Malesia (Kuala Lumpur)\",
        \"Asia\\/Kuching\": \"Saa za Malesia (Kuching)\",
        \"Asia\\/Macau\": \"Saa za Uchina (Makao)\",
        \"Asia\\/Muscat\": \"Saa za Wastani za Ghuba (Muscat)\",
        \"Asia\\/Oral\": \"Saa za Kazakistani Magharibi (Oral)\",
        \"Asia\\/Qostanay\": \"Saa za Kazakistani Mashariki (Kostanay)\",
        \"Asia\\/Qyzylorda\": \"Saa za Kazakistani Magharibi (Qyzylorda)\",
        \"Asia\\/Rangoon\": \"Saa za Myama (Yangon)\",
        \"Asia\\/Saigon\": \"Saa za Indochina (Jiji la Ho Chi Minh)\",
        \"Asia\\/Samarkand\": \"Saa za Uzbekistani (Samarkand)\",
        \"Asia\\/Singapore\": \"Saa za Wastani za Singapoo\",
        \"Asia\\/Tashkent\": \"Saa za Uzbekistani (Tashkent)\",
        \"Asia\\/Tbilisi\": \"Saa za Jiojia (Tbilisi)\",
        \"Asia\\/Tehran\": \"Saa za Irani (Tehran)\",
        \"Asia\\/Thimphu\": \"Saa za Butani (Thimphu)\",
        \"Asia\\/Tokyo\": \"Saa za Japani (Tokyo)\",
        \"Asia\\/Ulaanbaatar\": \"Saa za Ulaanbataar (Ulaanbaatar)\",
        \"Atlantic\\/Bermuda\": \"Saa za Atlantiki (Bamuda)\",
        \"Atlantic\\/Canary\": \"Saa za Magharibi mwa Ulaya (Kanari)\",
        \"Atlantic\\/Cape_Verde\": \"Saa za Kepuvede (Cape Verde)\",
        \"Atlantic\\/South_Georgia\": \"Saa za Jojia Kusini (Georgia Kusini)\",
        \"Australia\\/Eucla\": \"Saa za Magharibi mwa Austrialia ya Kati (Eucla)\",
        \"Etc\\/UTC\": \"Saa ya Ulimwenguni\",
        \"Indian\\/Christmas\": \"Saa za Kisiwa cha Krismasi\",
        \"Indian\\/Maldives\": \"Saa za Maldivi\",
        \"Pacific\\/Auckland\": \"Saa za Nyuzilandi (Auckland)\",
        \"Pacific\\/Bougainville\": \"Saa za Papua (Bougainville)\",
        \"Pacific\\/Enderbury\": \"Saa za Visiwa vya Finiksi (Enderbury)\",
        \"Pacific\\/Noumea\": \"Saa za Kaledonia Mpya (Noumea)\",
        \"Pacific\\/Port_Moresby\": \"Saa za Papua (Port Moresby)\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/sw_KE.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/sw_KE.json");
    }
}