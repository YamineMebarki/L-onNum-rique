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

/* vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Address.php */
class __TwigTemplate_814fe37e657e374bf581d548fbd0c8ed94c23dfc1a4369a85381d0ace26ade96 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\hr_HR;

class Address extends \\Faker\\Provider\\Address
{
    /**
     * @link https://hr.wikipedia.org/wiki/Dodatak:Popis_ulica_u_Baranji
     */
    protected static \$streets = array(
        'Baranjska ulica', 'Batina jug', 'Beljska ulica', 'Biljski sokak', 'Blatna ulica', 'Bračka ulica', 'Crkvena ulica', 'Daljok', 'Dravska ulica', 'Draž-planina', 'Dubrovačka ulica', 'Dunavska ulica', 'Glavna ulica', 'Grobljanska ulica', 'Jorgovanska ulica', 'Karanačka', 'Kenđija', 'Kod plota', 'Kolodvorska ulica', 'Komarčev prolaz', 'Konkološ', 'Kruševačka ulica', 'Lugarnica Šarkanj', 'Mirna ulica', 'Nova ulica', 'Osječka ulica', 'Partizanska ulica', 'Planina istok', 'Planina jug', 'Planina zapad', 'Planina', 'Planinska ulica', 'Popovačka ulica', 'Primoštenska ulica', 'Radnička ulica', 'Ribarska ulica', 'Ritska ulica', 'Salaši', 'Savska ulica', 'Slavonska ulica', 'Srednja ulica', 'Staklena ulica', 'Sunčana ulica', 'Trg Josipa bana Jelačića', 'Trg Slobode', 'Trg Stipe Đurina', 'Trg hrvatske mladeži', 'Ulica 1. svibnja', 'Ulica 30. svibnja', 'Ulica Adolfa Waldingera', 'Ulica Alojzija Stepinca', 'Ulica Ankice Dobrokes', 'Ulica Ante Kovačića', 'Ulica Ante Starčevića', 'Ulica Antuna Augustinčića', 'Ulica Antuna Gustava Matoša', 'Ulica Aranji Janoša', 'Ulica Augusta Cesarca', 'Ulica Augusta Šenoe', 'Ulica Bartoka Bele', 'Ulica Biljske satnije ZNH RH', 'Ulica Borisa Kidriča', 'Ulica Branka Gavelle', 'Ulica Branka Radičevića', 'Ulica Dore Pejačević', 'Ulica Dositeja Obradovića', 'Ulica Doža Đerđa', 'Ulica Dragutina Tadijanovića', 'Ulica Eugena Kvaternika', 'Ulica Eugena Savojskog', 'Ulica Frana Krste Frankopana', 'Ulica Franca Liszta', 'Ulica Franje Račkoga', 'Ulica Gustava Krkleca', 'Ulica Hrvatske vojske', 'Ulica Imre Nagya', 'Ulica Ivana Gorana Kovačića', 'Ulica Ivana Gundulića', 'Ulica Ivana Kozarca', 'Ulica Ivana Mažuranića', 'Ulica Ivana Meštrovića', 'Ulica Ivana Milutinovića', 'Ulica Ivane Brlić-Mažuranić', 'Ulica Ive Grgića', 'Ulica Ive Lole Ribara', 'Ulica Ive Petrušića', 'Ulica Izidora Kršnjavoga', 'Ulica Ištvana Vencela', 'Ulica Janka Draškovića', 'Ulica Janusa Pannoniusa', 'Ulica Jerka Zlatarića', 'Ulica Jokai Mora', 'Ulica Josipa Bösendorfera', 'Ulica Josipa Jurja Strossmayera', 'Ulica Josipa Kozarca', 'Ulica Josipa Kraša', 'Ulica Josipa Pančića', 'Ulica Josipa Runjanina', 'Ulica Jovana Jovanovića Zmaja', 'Ulica Jovana Lazića', 'Ulica Jozsefa Antala', 'Ulica Julija Benešića', 'Ulica Julija Klovića', 'Ulica Košut Lajoša', 'Ulica Lajoša Košuta', 'Ulica Lavoslava Ružičke', 'Ulica Ljudevita Gaja', 'Ulica Ljudevita Posavskog', 'Ulica Marije Jurić Zagorke', 'Ulica Marina Držića', 'Ulica Marka Marulića', 'Ulica Marka Oreškovića', 'Ulica Matije Antuna Relkovića', 'Ulica Matije Gupca', 'Ulica Matije Petra Katančića', 'Ulica Matka Peića', 'Ulica Mije Zlatarića', 'Ulica Miladina Popovića', 'Ulica Miroslava Krleže', 'Ulica Nikole Tesle', 'Ulica Obrada Ribića', 'Ulica Petefi Šandora', 'Ulica Petra Berislavića', 'Ulica Petra Dobrovića', 'Ulica Petra Drapšina', 'Ulica Petra Petrovića Njegoša', 'Ulica Petra Preradovića', 'Ulica Petra Zrinskog', 'Ulica Republike', 'Ulica Ruđera Boškovića', 'Ulica Sare Bertić', 'Ulica Silvija Strahimira Kranjčevića', 'Ulica Stipe Matovića', 'Ulica Stjepana Brodarića', 'Ulica Stjepana Radića', 'Ulica Stjepana Stjepanova', 'Ulica Svetozara Miletića', 'Ulica Tina Ujevića', 'Ulica Toldi Ferenca', 'Ulica Vasilja Gaćeše', 'Ulica Vatroslava Lisinskog', 'Ulica Vladana Desnice', 'Ulica Vladimira Filakovca', 'Ulica Vladimira Nazora', 'Ulica Vladimira Preloga', 'Ulica Vladka Mačeka', 'Ulica Vojina Bakića', 'Ulica Vuka Stefanovića Karadžića', 'Ulica Zvonka Brkića', 'Ulica bana Jelačića', 'Ulica bijelog lopoča', 'Ulica braće Radić', 'Ulica crne rode', 'Ulica domovinske zahvalnosti', 'Ulica dr Franje Tuđmana', 'Ulica dr. Ante Starčevića', 'Ulica dr. Franje Tuđmana', 'Ulica dr. Kamila Firingera', 'Ulica hrvatskih branitelja', 'Ulica kardinala Franje Šefera', 'Ulica kneza Branimira', 'Ulica kneza Domagoja', 'Ulica kneza Trpimira', 'Ulica kralja Krešimira', 'Ulica kralja Petra Krešimira IV', 'Ulica kralja Tomislava', 'Ulica kralja Zvonimira', 'Ulica republike', 'Ulica svetog Ivana Nepomuka', 'Ulica svetog Martina', 'Ulica svetog križa', 'Ulica Đure Đakovića', 'Ulica Šandora Petefija', 'Ulica Šovakova', 'Ulica športova', 'Ulica Žarka Zrenjanina', 'Ulica Žikice Jovanovića Španca', 'Ulica žrtava domovinskog rata', 'Vatrogasna ulica', 'Velebitska ulica', 'Vijenac Nikole Tesle', 'Vinogradska ulica', 'Virska ulica', 'Vukovarska ulica', 'Zagrebačka ulica', 'Šećeranska ulica', 'Školska ulica'
    );

    protected static \$streetNameFormats = array(
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$cityFormats = array(
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$postcode = array('#####');


    /**
     * @link https://hr.wikipedia.org/wiki/Dodatak:Popis_gradova_u_Hrvatskoj
     */
    protected static \$cityNames = array(
        'Bakar', 'Beli Manastir', 'Belišće', 'Benkovac', 'Biograd na Moru', 'Bjelovar', 'Buje', 'Buzet', 'Cres', 'Crikvenica', 'Daruvar', 'Delnice', 'Dodatak:Imena europskih gradova na različitim jezicima', 'Donja Stubica', 'Donji Miholjac', 'Drniš', 'Dubrovnik', 'Duga Resa', 'Dugo Selo', 'Garešnica', 'Glina', 'Gospić', 'Grubišno Polje', 'Hrvatska Kostajnica', 'Hvar', 'Ilok', 'Imotski', 'Ivanec', 'Ivanić-Grad', 'Jastrebarsko', 'Karlovac', 'Kastav', 'Kaštela', 'Klanjec', 'Knin', 'Komiža', 'Koprivnica', 'Korčula', 'Kraljevica', 'Krapina', 'Križevci', 'Krk', 'Kutina', 'Kutjevo', 'Labin', 'Lepoglava', 'Lipik', 'Ludbreg', 'Makarska', 'Mali Lošinj', 'Metković', 'Mursko Središće', 'Našice', 'Nin', 'Nova Gradiška', 'Novalja', 'Novi Marof', 'Novi Vinodolski', 'Novigrad', 'Novska', 'Obrovac', 'Ogulin', 'Omiš', 'Opatija', 'Opuzen', 'Orahovica', 'Oroslavje', 'Osijek', 'Otok', 'Otočac', 'Ozalj', 'Pag', 'Pakrac', 'Pazin', 'Petrinja', 'Pleternica', 'Ploče', 'Popovača', 'Poreč', 'Požega', 'Pregrada', 'Prelog', 'Pula', 'Rab', 'Rijeka', 'Rovinj', 'Samobor', 'Senj', 'Sinj', 'Sisak', 'Skradin', 'Slatina', 'Slavonski Brod', 'Slunj', 'Solin', 'Split', 'Stari Grad', 'Supetar', 'Sveta Nedelja', 'Sveti Ivan Zelina', 'Trilj', 'Trogir', 'Umag', 'Valpovo', 'Varaždin', 'Varaždinske Toplice', 'Velika Gorica', 'Vinkovci', 'Virovitica', 'Vis', 'Vodice', 'Vodnjan', 'Vrbovec', 'Vrbovsko', 'Vrgorac', 'Vrlika', 'Vukovar', 'Zabok', 'Zadar', 'Zagreb', 'Zaprešić', 'Zlatar', 'Čabar', 'Čakovec', 'Čazma', 'Đakovo', 'Đurđevac', 'Šibenik', 'Županja'
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/sr_Latn/country.php
     */
    protected static \$country = array(
        'Andora', 'Ujedinjeni Arapski Emirati', 'Afganistan', 'Albanija', 'Armenija', 'Nizozemski Antili', 'Angola',
        'Antarktika', 'Argentina', 'Američka Samoa', 'Austrija', 'Australija', 'Azerbejdžan', 'Bosna i Hercegovina',
        'Barbados', 'Bangladeš', 'Belgija', 'Burkina Faso', 'Bugarska', 'Bahrein', 'Burundi', 'Benin', 'Bolivija',
        'Brazil', 'Bjelorusija', 'Belize', 'Kanada', 'Švicarska', 'Obala Bjelokosti', 'Čile', 'Kamerun', 'Kina',
        'Kolumbija', 'Kostarika', 'Srbija', 'Crna Gora', 'Kuba', 'Cipar', 'Češka', 'Njemačka', 'Danska',
        'Dominikanska Republika', 'Alžir', 'Ekvador', 'Estonija', 'Egipat', 'Španjolska', 'Etiopija', 'Finska',
        'Farski Otoci', 'Francuska', 'Ujedinjeno Kraljevstvo', 'Gruzija', 'Gana', 'Gibraltar', 'Gambija', 'Grčka',
        'Gvatemala', 'Honduras', 'Hrvatska', 'Mađarska', 'Indonezija', 'Irska', 'Izrael', 'Irak', 'Iran', 'Island',
        'Italija', 'Jamajka', 'Jordan', 'Japan', 'Sjeverna Koreja', 'Južna Koreja', 'Kuvajt', 'Kazahstan',
        'Lihtenštajn', 'Šri Lanka', 'Luksemburg', 'Libija', 'Maroko', 'Moldavija', 'Makedonija', 'Mali', 'Malta',
        'Meksiko', 'Malezija', 'Mozambik', 'Namibija', 'Nigerija', 'Nikaragva', 'Nizozemska', 'Norveška', 'Nepal',
        'Novi Zeland', 'Oman', 'Panama', 'Peru', 'Pakistan', 'Poljska', 'Portugal', 'Paragvaj', 'Katar', 'Rumunjska',
        'Rusija', 'Saudijska Arabija', 'Švedska', 'Singapur', 'Slovenija', 'Slovačka', 'San Marino', 'Senegal',
        'Tajland', 'Turska', 'Trinidad i Tobago', 'Ukrajina', 'Sjedinjene Američke Države', 'Urugvaj', 'Uzbekistan',
    );

    public static function street()
    {
        return static::randomElement(static::\$streets);
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  75 => 23,  66 => 19,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\hr_HR;

class Address extends \\Faker\\Provider\\Address
{
    /**
     * @link https://hr.wikipedia.org/wiki/Dodatak:Popis_ulica_u_Baranji
     */
    protected static \$streets = array(
        'Baranjska ulica', 'Batina jug', 'Beljska ulica', 'Biljski sokak', 'Blatna ulica', 'Bračka ulica', 'Crkvena ulica', 'Daljok', 'Dravska ulica', 'Draž-planina', 'Dubrovačka ulica', 'Dunavska ulica', 'Glavna ulica', 'Grobljanska ulica', 'Jorgovanska ulica', 'Karanačka', 'Kenđija', 'Kod plota', 'Kolodvorska ulica', 'Komarčev prolaz', 'Konkološ', 'Kruševačka ulica', 'Lugarnica Šarkanj', 'Mirna ulica', 'Nova ulica', 'Osječka ulica', 'Partizanska ulica', 'Planina istok', 'Planina jug', 'Planina zapad', 'Planina', 'Planinska ulica', 'Popovačka ulica', 'Primoštenska ulica', 'Radnička ulica', 'Ribarska ulica', 'Ritska ulica', 'Salaši', 'Savska ulica', 'Slavonska ulica', 'Srednja ulica', 'Staklena ulica', 'Sunčana ulica', 'Trg Josipa bana Jelačića', 'Trg Slobode', 'Trg Stipe Đurina', 'Trg hrvatske mladeži', 'Ulica 1. svibnja', 'Ulica 30. svibnja', 'Ulica Adolfa Waldingera', 'Ulica Alojzija Stepinca', 'Ulica Ankice Dobrokes', 'Ulica Ante Kovačića', 'Ulica Ante Starčevića', 'Ulica Antuna Augustinčića', 'Ulica Antuna Gustava Matoša', 'Ulica Aranji Janoša', 'Ulica Augusta Cesarca', 'Ulica Augusta Šenoe', 'Ulica Bartoka Bele', 'Ulica Biljske satnije ZNH RH', 'Ulica Borisa Kidriča', 'Ulica Branka Gavelle', 'Ulica Branka Radičevića', 'Ulica Dore Pejačević', 'Ulica Dositeja Obradovića', 'Ulica Doža Đerđa', 'Ulica Dragutina Tadijanovića', 'Ulica Eugena Kvaternika', 'Ulica Eugena Savojskog', 'Ulica Frana Krste Frankopana', 'Ulica Franca Liszta', 'Ulica Franje Račkoga', 'Ulica Gustava Krkleca', 'Ulica Hrvatske vojske', 'Ulica Imre Nagya', 'Ulica Ivana Gorana Kovačića', 'Ulica Ivana Gundulića', 'Ulica Ivana Kozarca', 'Ulica Ivana Mažuranića', 'Ulica Ivana Meštrovića', 'Ulica Ivana Milutinovića', 'Ulica Ivane Brlić-Mažuranić', 'Ulica Ive Grgića', 'Ulica Ive Lole Ribara', 'Ulica Ive Petrušića', 'Ulica Izidora Kršnjavoga', 'Ulica Ištvana Vencela', 'Ulica Janka Draškovića', 'Ulica Janusa Pannoniusa', 'Ulica Jerka Zlatarića', 'Ulica Jokai Mora', 'Ulica Josipa Bösendorfera', 'Ulica Josipa Jurja Strossmayera', 'Ulica Josipa Kozarca', 'Ulica Josipa Kraša', 'Ulica Josipa Pančića', 'Ulica Josipa Runjanina', 'Ulica Jovana Jovanovića Zmaja', 'Ulica Jovana Lazića', 'Ulica Jozsefa Antala', 'Ulica Julija Benešića', 'Ulica Julija Klovića', 'Ulica Košut Lajoša', 'Ulica Lajoša Košuta', 'Ulica Lavoslava Ružičke', 'Ulica Ljudevita Gaja', 'Ulica Ljudevita Posavskog', 'Ulica Marije Jurić Zagorke', 'Ulica Marina Držića', 'Ulica Marka Marulića', 'Ulica Marka Oreškovića', 'Ulica Matije Antuna Relkovića', 'Ulica Matije Gupca', 'Ulica Matije Petra Katančića', 'Ulica Matka Peića', 'Ulica Mije Zlatarića', 'Ulica Miladina Popovića', 'Ulica Miroslava Krleže', 'Ulica Nikole Tesle', 'Ulica Obrada Ribića', 'Ulica Petefi Šandora', 'Ulica Petra Berislavića', 'Ulica Petra Dobrovića', 'Ulica Petra Drapšina', 'Ulica Petra Petrovića Njegoša', 'Ulica Petra Preradovića', 'Ulica Petra Zrinskog', 'Ulica Republike', 'Ulica Ruđera Boškovića', 'Ulica Sare Bertić', 'Ulica Silvija Strahimira Kranjčevića', 'Ulica Stipe Matovića', 'Ulica Stjepana Brodarića', 'Ulica Stjepana Radića', 'Ulica Stjepana Stjepanova', 'Ulica Svetozara Miletića', 'Ulica Tina Ujevića', 'Ulica Toldi Ferenca', 'Ulica Vasilja Gaćeše', 'Ulica Vatroslava Lisinskog', 'Ulica Vladana Desnice', 'Ulica Vladimira Filakovca', 'Ulica Vladimira Nazora', 'Ulica Vladimira Preloga', 'Ulica Vladka Mačeka', 'Ulica Vojina Bakića', 'Ulica Vuka Stefanovića Karadžića', 'Ulica Zvonka Brkića', 'Ulica bana Jelačića', 'Ulica bijelog lopoča', 'Ulica braće Radić', 'Ulica crne rode', 'Ulica domovinske zahvalnosti', 'Ulica dr Franje Tuđmana', 'Ulica dr. Ante Starčevića', 'Ulica dr. Franje Tuđmana', 'Ulica dr. Kamila Firingera', 'Ulica hrvatskih branitelja', 'Ulica kardinala Franje Šefera', 'Ulica kneza Branimira', 'Ulica kneza Domagoja', 'Ulica kneza Trpimira', 'Ulica kralja Krešimira', 'Ulica kralja Petra Krešimira IV', 'Ulica kralja Tomislava', 'Ulica kralja Zvonimira', 'Ulica republike', 'Ulica svetog Ivana Nepomuka', 'Ulica svetog Martina', 'Ulica svetog križa', 'Ulica Đure Đakovića', 'Ulica Šandora Petefija', 'Ulica Šovakova', 'Ulica športova', 'Ulica Žarka Zrenjanina', 'Ulica Žikice Jovanovića Španca', 'Ulica žrtava domovinskog rata', 'Vatrogasna ulica', 'Velebitska ulica', 'Vijenac Nikole Tesle', 'Vinogradska ulica', 'Virska ulica', 'Vukovarska ulica', 'Zagrebačka ulica', 'Šećeranska ulica', 'Školska ulica'
    );

    protected static \$streetNameFormats = array(
        '{{street}}',
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );

    protected static \$addressFormats = array(
        '{{streetAddress}}, {{postcode}} {{city}}',
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    protected static \$postcode = array('#####');


    /**
     * @link https://hr.wikipedia.org/wiki/Dodatak:Popis_gradova_u_Hrvatskoj
     */
    protected static \$cityNames = array(
        'Bakar', 'Beli Manastir', 'Belišće', 'Benkovac', 'Biograd na Moru', 'Bjelovar', 'Buje', 'Buzet', 'Cres', 'Crikvenica', 'Daruvar', 'Delnice', 'Dodatak:Imena europskih gradova na različitim jezicima', 'Donja Stubica', 'Donji Miholjac', 'Drniš', 'Dubrovnik', 'Duga Resa', 'Dugo Selo', 'Garešnica', 'Glina', 'Gospić', 'Grubišno Polje', 'Hrvatska Kostajnica', 'Hvar', 'Ilok', 'Imotski', 'Ivanec', 'Ivanić-Grad', 'Jastrebarsko', 'Karlovac', 'Kastav', 'Kaštela', 'Klanjec', 'Knin', 'Komiža', 'Koprivnica', 'Korčula', 'Kraljevica', 'Krapina', 'Križevci', 'Krk', 'Kutina', 'Kutjevo', 'Labin', 'Lepoglava', 'Lipik', 'Ludbreg', 'Makarska', 'Mali Lošinj', 'Metković', 'Mursko Središće', 'Našice', 'Nin', 'Nova Gradiška', 'Novalja', 'Novi Marof', 'Novi Vinodolski', 'Novigrad', 'Novska', 'Obrovac', 'Ogulin', 'Omiš', 'Opatija', 'Opuzen', 'Orahovica', 'Oroslavje', 'Osijek', 'Otok', 'Otočac', 'Ozalj', 'Pag', 'Pakrac', 'Pazin', 'Petrinja', 'Pleternica', 'Ploče', 'Popovača', 'Poreč', 'Požega', 'Pregrada', 'Prelog', 'Pula', 'Rab', 'Rijeka', 'Rovinj', 'Samobor', 'Senj', 'Sinj', 'Sisak', 'Skradin', 'Slatina', 'Slavonski Brod', 'Slunj', 'Solin', 'Split', 'Stari Grad', 'Supetar', 'Sveta Nedelja', 'Sveti Ivan Zelina', 'Trilj', 'Trogir', 'Umag', 'Valpovo', 'Varaždin', 'Varaždinske Toplice', 'Velika Gorica', 'Vinkovci', 'Virovitica', 'Vis', 'Vodice', 'Vodnjan', 'Vrbovec', 'Vrbovsko', 'Vrgorac', 'Vrlika', 'Vukovar', 'Zabok', 'Zadar', 'Zagreb', 'Zaprešić', 'Zlatar', 'Čabar', 'Čakovec', 'Čazma', 'Đakovo', 'Đurđevac', 'Šibenik', 'Županja'
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/sr_Latn/country.php
     */
    protected static \$country = array(
        'Andora', 'Ujedinjeni Arapski Emirati', 'Afganistan', 'Albanija', 'Armenija', 'Nizozemski Antili', 'Angola',
        'Antarktika', 'Argentina', 'Američka Samoa', 'Austrija', 'Australija', 'Azerbejdžan', 'Bosna i Hercegovina',
        'Barbados', 'Bangladeš', 'Belgija', 'Burkina Faso', 'Bugarska', 'Bahrein', 'Burundi', 'Benin', 'Bolivija',
        'Brazil', 'Bjelorusija', 'Belize', 'Kanada', 'Švicarska', 'Obala Bjelokosti', 'Čile', 'Kamerun', 'Kina',
        'Kolumbija', 'Kostarika', 'Srbija', 'Crna Gora', 'Kuba', 'Cipar', 'Češka', 'Njemačka', 'Danska',
        'Dominikanska Republika', 'Alžir', 'Ekvador', 'Estonija', 'Egipat', 'Španjolska', 'Etiopija', 'Finska',
        'Farski Otoci', 'Francuska', 'Ujedinjeno Kraljevstvo', 'Gruzija', 'Gana', 'Gibraltar', 'Gambija', 'Grčka',
        'Gvatemala', 'Honduras', 'Hrvatska', 'Mađarska', 'Indonezija', 'Irska', 'Izrael', 'Irak', 'Iran', 'Island',
        'Italija', 'Jamajka', 'Jordan', 'Japan', 'Sjeverna Koreja', 'Južna Koreja', 'Kuvajt', 'Kazahstan',
        'Lihtenštajn', 'Šri Lanka', 'Luksemburg', 'Libija', 'Maroko', 'Moldavija', 'Makedonija', 'Mali', 'Malta',
        'Meksiko', 'Malezija', 'Mozambik', 'Namibija', 'Nigerija', 'Nikaragva', 'Nizozemska', 'Norveška', 'Nepal',
        'Novi Zeland', 'Oman', 'Panama', 'Peru', 'Pakistan', 'Poljska', 'Portugal', 'Paragvaj', 'Katar', 'Rumunjska',
        'Rusija', 'Saudijska Arabija', 'Švedska', 'Singapur', 'Slovenija', 'Slovačka', 'San Marino', 'Senegal',
        'Tajland', 'Turska', 'Trinidad i Tobago', 'Ukrajina', 'Sjedinjene Američke Države', 'Urugvaj', 'Uzbekistan',
    );

    public static function street()
    {
        return static::randomElement(static::\$streets);
    }

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Address.php");
    }
}
