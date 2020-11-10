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

/* vendor/fzaninotto/faker/src/Faker/Provider/sr_Latn_RS/Address.php */
class __TwigTemplate_d0919828d923de0b53aa469f0c4ba70e2fc3e7d923ef0b6809942e0eff22564f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sr_Latn_RS/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sr_Latn_RS/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\sr_Latn_RS;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$postcode = array('#####');

    protected static \$streetPrefix = array(
        'Bulevar',
    );

    protected static \$street = array(
        'Kralja Milana', 'Cara Dušana', 'Nikole Tesle', 'Mihajla Pupina', 'Nikole Pašića',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$cityFormats = array(
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @link http://sr.wikipedia.org/sr-el/%D0%93%D1%80%D0%B0%D0%B4_%D1%83_%D0%A1%D1%80%D0%B1%D0%B8%D1%98%D0%B8
     */
    protected static \$cityNames = array(
        'Beograd', 'Valjevo', 'Vranje', 'Zaječar', 'Zrenjanin', 'Jagodina', 'Kragujevac', 'Kraljevo', 'Kruševac', 'Leskovac', 'Loznica', 'Niš', 'Novi Pazar', 'Novi Sad', 'Pančevo', 'Požarevac', 'Priština', 'Smederevo', 'Sombor', 'Sremska Mitrovica', 'Subotica', 'Užice', 'Čačak', 'Šabac',
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/sr_Latn/country.php
     */
    protected static \$country = array(
        'Ostrvo Asension', 'Andora', 'Ujedinjeni Arapski Emirati', 'Avganistan', 'Antigva i Barbuda', 'Angvila', 'Albanija', 'Armenija', 'Holandski Antili', 'Angola', 'Antarktika', 'Argentina', 'Američka Samoa', 'Austrija', 'Australija', 'Aruba', 'Alandska ostrva', 'Azerbejdžan', 'Bosna i Hercegovina', 'Barbados', 'Bangladeš', 'Belgija', 'Burkina Faso', 'Bugarska', 'Bahrein', 'Burundi', 'Benin', 'Sv. Bartolomej', 'Bermuda', 'Brunej', 'Bolivija', 'Brazil', 'Bahami', 'Butan', 'Buve Ostrva', 'Bocvana', 'Belorusija', 'Belise', 'Kanada', 'Kokos (Keling) Ostrva', 'Demokratska Republika Kongo', 'Centralno Afrička Republika', 'Kongo', 'Švajcarska', 'Obala Slonovače', 'Kukova Ostrva', 'Čile', 'Kamerun', 'Kina', 'Kolumbija', 'Ostrvo Kliperton', 'Kostarika', 'Srbija i Crna Gora', 'Kuba', 'Kape Verde', 'Božićna Ostrva', 'Kipar', 'Češka', 'Nemačka', 'Dijego Garsija', 'Džibuti', 'Danska', 'Dominika', 'Dominikanska Republika', 'Alžir', 'Seuta i Melilja', 'Ekvador', 'Estonija', 'Egipat', 'Zapadna Sahara', 'Eritreja', 'Španija', 'Etiopija', 'Evropska unija', 'Finska', 'Fidži', 'Folklandska Ostrva', 'Mikronezija', 'Farska Ostrva', 'Francuska', 'Gabon', 'Velika Britanija', 'Grenada', 'Gruzija', 'Francuska Gvajana', 'Gurnsi', 'Gana', 'Gibraltar', 'Grenland', 'Gambija', 'Gvineja', 'Gvadelupe', 'Ekvatorijalna Gvineja', 'Grčka', 'Južna Džordžija i Južna Sendvič Ostrva', 'Gvatemala', 'Guam', 'Gvineja-Bisao', 'Gvajana', 'Hong Kong (S. A. R. Kina)', 'Herd i Mekdonald Ostrva', 'Honduras', 'Hrvatska', 'Haiti', 'Mađarska', 'Kanarska ostrva', 'Indonezija', 'Irska', 'Izrael', 'Ostrvo Man', 'Indija', 'Britansko Indijska Okeanska Teritorija', 'Irak', 'Iran', 'Island', 'Italija', 'Džersi', 'Jamajka', 'Jordan', 'Japan', 'Kenija', 'Kirgizstan', 'Kambodža', 'Kiribati', 'Komorska Ostrva', 'Sent Kits i Nevis', 'Severna Koreja', 'Južna Koreja', 'Kuvajt', 'Kajmanska Ostrva', 'Kazahstan', 'Laos', 'Liban', 'Sent Lucija', 'Lihtenštajn', 'Šri Lanka', 'Liberija', 'Lesoto', 'Litvanija', 'Luksemburg', 'Letonija', 'Libija', 'Maroko', 'Monako', 'Moldavija', 'Crna Gora', 'Sv. Martin', 'Madagaskar', 'Maršalska Ostrva', 'Makedonija', 'Mali', 'Mijanmar', 'Mongolija', 'Makao (S. A. R. Kina)', 'Severna Marijanska Ostrva', 'Martinik', 'Mauritanija', 'Monserat', 'Malta', 'Mauricius', 'Maldivi', 'Malavi', 'Meksiko', 'Malezija', 'Mozambik', 'Namibija', 'Nova Kaledonija', 'Niger', 'Norfolk Ostrvo', 'Nigerija', 'Nikaragva', 'Holandija', 'Norveška', 'Nepal', 'Nauru', 'Niue', 'Novi Zeland', 'Oman', 'Panama', 'Peru', 'Francuska Polinezija', 'Papua Nova Gvineja', 'Filipini', 'Pakistan', 'Poljska', 'Sen Pjer i Mikelon', 'Pitcairn', 'Porto Riko', 'Palestinska Teritorija', 'Portugal', 'Palau', 'Paragvaj', 'Katar', 'Ostala okeanija', 'Rejunion', 'Rumunija', 'Srbija', 'Rusija', 'Ruanda', 'Saudijska Arabija', 'Solomonska Ostrva', 'Sejšeli', 'Sudan', 'Švedska', 'Singapur', 'Sveta Jelena', 'Slovenija', 'Svalbard i Janmajen Ostrva', 'Slovačka', 'Sijera Leone', 'San Marino', 'Senegal', 'Somalija', 'Surinam', 'Sao Tome i Principe', 'Salvador', 'Sirija', 'Svazilend', 'Tristan da Kunja', 'Turks i Kajkos Ostrva', 'Čad', 'Francuske Južne Teritorije', 'Togo', 'Tajland', 'Tadžikistan', 'Tokelau', 'Istočni Timor', 'Turkmenistan', 'Tunis', 'Tonga', 'Turska', 'Trinidad i Tobago', 'Tuvalu', 'Tajvan', 'Tanzanija', 'Ukrajina', 'Uganda', 'Manja Udaljena Ostrva SAD', 'Sjedinjene Američke Države', 'Urugvaj', 'Uzbekistan', 'Vatikan', 'Sent Vinsent i Grenadini', 'Venecuela', 'Britanska Devičanska Ostrva', 'S.A.D. Devičanska Ostrva', 'Vijetnam', 'Vanuatu', 'Valis i Futuna Ostrva', 'Samoa', 'Jemen', 'Majote', 'Južnoafrička Republika', 'Zambija', 'Zimbabve',
    );

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/sr_Latn_RS/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  75 => 23,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\sr_Latn_RS;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$postcode = array('#####');

    protected static \$streetPrefix = array(
        'Bulevar',
    );

    protected static \$street = array(
        'Kralja Milana', 'Cara Dušana', 'Nikole Tesle', 'Mihajla Pupina', 'Nikole Pašića',
    );

    protected static \$streetNameFormats = array(
        '{{street}}',
        '{{streetPrefix}} {{street}}',
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    /**
     * @link http://sr.wikipedia.org/sr-el/%D0%93%D1%80%D0%B0%D0%B4_%D1%83_%D0%A1%D1%80%D0%B1%D0%B8%D1%98%D0%B8
     */
    protected static \$cityNames = array(
        'Beograd', 'Valjevo', 'Vranje', 'Zaječar', 'Zrenjanin', 'Jagodina', 'Kragujevac', 'Kraljevo', 'Kruševac', 'Leskovac', 'Loznica', 'Niš', 'Novi Pazar', 'Novi Sad', 'Pančevo', 'Požarevac', 'Priština', 'Smederevo', 'Sombor', 'Sremska Mitrovica', 'Subotica', 'Užice', 'Čačak', 'Šabac',
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/sr_Latn/country.php
     */
    protected static \$country = array(
        'Ostrvo Asension', 'Andora', 'Ujedinjeni Arapski Emirati', 'Avganistan', 'Antigva i Barbuda', 'Angvila', 'Albanija', 'Armenija', 'Holandski Antili', 'Angola', 'Antarktika', 'Argentina', 'Američka Samoa', 'Austrija', 'Australija', 'Aruba', 'Alandska ostrva', 'Azerbejdžan', 'Bosna i Hercegovina', 'Barbados', 'Bangladeš', 'Belgija', 'Burkina Faso', 'Bugarska', 'Bahrein', 'Burundi', 'Benin', 'Sv. Bartolomej', 'Bermuda', 'Brunej', 'Bolivija', 'Brazil', 'Bahami', 'Butan', 'Buve Ostrva', 'Bocvana', 'Belorusija', 'Belise', 'Kanada', 'Kokos (Keling) Ostrva', 'Demokratska Republika Kongo', 'Centralno Afrička Republika', 'Kongo', 'Švajcarska', 'Obala Slonovače', 'Kukova Ostrva', 'Čile', 'Kamerun', 'Kina', 'Kolumbija', 'Ostrvo Kliperton', 'Kostarika', 'Srbija i Crna Gora', 'Kuba', 'Kape Verde', 'Božićna Ostrva', 'Kipar', 'Češka', 'Nemačka', 'Dijego Garsija', 'Džibuti', 'Danska', 'Dominika', 'Dominikanska Republika', 'Alžir', 'Seuta i Melilja', 'Ekvador', 'Estonija', 'Egipat', 'Zapadna Sahara', 'Eritreja', 'Španija', 'Etiopija', 'Evropska unija', 'Finska', 'Fidži', 'Folklandska Ostrva', 'Mikronezija', 'Farska Ostrva', 'Francuska', 'Gabon', 'Velika Britanija', 'Grenada', 'Gruzija', 'Francuska Gvajana', 'Gurnsi', 'Gana', 'Gibraltar', 'Grenland', 'Gambija', 'Gvineja', 'Gvadelupe', 'Ekvatorijalna Gvineja', 'Grčka', 'Južna Džordžija i Južna Sendvič Ostrva', 'Gvatemala', 'Guam', 'Gvineja-Bisao', 'Gvajana', 'Hong Kong (S. A. R. Kina)', 'Herd i Mekdonald Ostrva', 'Honduras', 'Hrvatska', 'Haiti', 'Mađarska', 'Kanarska ostrva', 'Indonezija', 'Irska', 'Izrael', 'Ostrvo Man', 'Indija', 'Britansko Indijska Okeanska Teritorija', 'Irak', 'Iran', 'Island', 'Italija', 'Džersi', 'Jamajka', 'Jordan', 'Japan', 'Kenija', 'Kirgizstan', 'Kambodža', 'Kiribati', 'Komorska Ostrva', 'Sent Kits i Nevis', 'Severna Koreja', 'Južna Koreja', 'Kuvajt', 'Kajmanska Ostrva', 'Kazahstan', 'Laos', 'Liban', 'Sent Lucija', 'Lihtenštajn', 'Šri Lanka', 'Liberija', 'Lesoto', 'Litvanija', 'Luksemburg', 'Letonija', 'Libija', 'Maroko', 'Monako', 'Moldavija', 'Crna Gora', 'Sv. Martin', 'Madagaskar', 'Maršalska Ostrva', 'Makedonija', 'Mali', 'Mijanmar', 'Mongolija', 'Makao (S. A. R. Kina)', 'Severna Marijanska Ostrva', 'Martinik', 'Mauritanija', 'Monserat', 'Malta', 'Mauricius', 'Maldivi', 'Malavi', 'Meksiko', 'Malezija', 'Mozambik', 'Namibija', 'Nova Kaledonija', 'Niger', 'Norfolk Ostrvo', 'Nigerija', 'Nikaragva', 'Holandija', 'Norveška', 'Nepal', 'Nauru', 'Niue', 'Novi Zeland', 'Oman', 'Panama', 'Peru', 'Francuska Polinezija', 'Papua Nova Gvineja', 'Filipini', 'Pakistan', 'Poljska', 'Sen Pjer i Mikelon', 'Pitcairn', 'Porto Riko', 'Palestinska Teritorija', 'Portugal', 'Palau', 'Paragvaj', 'Katar', 'Ostala okeanija', 'Rejunion', 'Rumunija', 'Srbija', 'Rusija', 'Ruanda', 'Saudijska Arabija', 'Solomonska Ostrva', 'Sejšeli', 'Sudan', 'Švedska', 'Singapur', 'Sveta Jelena', 'Slovenija', 'Svalbard i Janmajen Ostrva', 'Slovačka', 'Sijera Leone', 'San Marino', 'Senegal', 'Somalija', 'Surinam', 'Sao Tome i Principe', 'Salvador', 'Sirija', 'Svazilend', 'Tristan da Kunja', 'Turks i Kajkos Ostrva', 'Čad', 'Francuske Južne Teritorije', 'Togo', 'Tajland', 'Tadžikistan', 'Tokelau', 'Istočni Timor', 'Turkmenistan', 'Tunis', 'Tonga', 'Turska', 'Trinidad i Tobago', 'Tuvalu', 'Tajvan', 'Tanzanija', 'Ukrajina', 'Uganda', 'Manja Udaljena Ostrva SAD', 'Sjedinjene Američke Države', 'Urugvaj', 'Uzbekistan', 'Vatikan', 'Sent Vinsent i Grenadini', 'Venecuela', 'Britanska Devičanska Ostrva', 'S.A.D. Devičanska Ostrva', 'Vijetnam', 'Vanuatu', 'Valis i Futuna Ostrva', 'Samoa', 'Jemen', 'Majote', 'Južnoafrička Republika', 'Zambija', 'Zimbabve',
    );

    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/sr_Latn_RS/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/sr_Latn_RS/Address.php");
    }
}
