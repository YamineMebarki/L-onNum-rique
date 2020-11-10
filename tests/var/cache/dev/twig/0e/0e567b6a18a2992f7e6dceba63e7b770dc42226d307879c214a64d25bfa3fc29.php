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

/* vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Address.php */
class __TwigTemplate_f6e10336556e3895a9837a10cb85efc1ea02224beb77dc19ee6776c6c787b020 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\tr_TR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#');

    protected static \$streetSuffix = array(
        'Sokak', 'Caddesi', 'Kavşağı', 'Durağı', 'İş Hanı', 'Mevkii'
    );

    protected static \$postcode = array('#####');

    /**
    * @var array Cities of Turkey, for future updates please use @link https://tr.wikipedia.org/wiki/T%C3%BCrkiye'nin_illeri
    */
    protected static \$cityNames = array(
        'Adana','Adıyaman','Afyonkarahisar','Ağrı','Aksaray','Amasya','Ankara','Antalya','Ardahan','Artvin','Aydın',
        'Balıkesir','Bartın','Batman','Bayburt','Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa',
        'Çanakkale','Çankırı','Çorum',
        'Denizli','Diyarbakır','Düzce',
        'Edirne','Elazığ','Erzincan','Erzurum','Eskişehir',
        'Gaziantep','Giresun','Gümüşhane',
        'Hakkari','Hatay',
        'Iğdır','Isparta','İstanbul','İzmir',
        'Kahramanmaraş','Karabük','Karaman','Kars','Kastamonu','Kayseri','Kilis',
        'Kırıkkale','Kırklareli','Kırşehir','Kocaeli','Konya','Kütahya',
        'Malatya','Manisa','Mardin','Mersin','Muğla','Muş',
        'Nevşehir','Niğde',
        'Ordu','Osmaniye',
        'Rize',
        'Sakarya','Samsun','Şanlıurfa','Siirt','Sinop','Şırnak','Sivas',
        'Tekirdağ','Tokat','Trabzon','Tunceli',
        'Uşak',
        'Van',
        'Yalova','Yozgat',
        'Zonguldak'
    );

    /**
    * @var array Countries in Turkish
    * @link https://tr.wikipedia.org/wiki/%C3%9Clkeler_listesi
    */
    protected static \$country = array(
        'Almanya','Amerika Birleşik Devletleri','Arjantin','Arnavutluk','Avustralya','Avusturya','Azerbaycan',
        'Bahreyn','Belçika','Beyaz Rusya','Birleşik Arap Emirlikleri','Bosna-hersek','Brezilya','Bulgaristan',
        'Çek Cumhuriyeti','Cezayir','Çin Halk Cumhuriyeti',
        'Danimarka','Dominik Cumhuriyeti',
        'Endonezya','Ermenistan','Estonya',
        'Fas','Filipinler','Filistin','Finlandiya','Fransa',
        'Güney Afrika Cumhuriyeti','Güney Kore','Gürcistan',
        'Hindistan','Hırvatistan','Hollanda',
        'İngiltere','Irak','İran','İrlanda','İskoçya','İspanya','İsrail','İsveç','İsviçre','İtalya',
        'Jamaika','Japonya',
        'Kamboçya','Kanada','Karadağ','Kazakistan','Kıbrıs','Kırgızistan','Kosta Rika','Küba','Kuzey Kore',
        'Letonya','Libya','Litvanya','Lübnan','Lüksemburg',
        'Macaristan','Makedonya','Maldivler','Malta','Maurıtıus','Mısır',
        'Nepal',
        'Özbekistan',
        'Pakistan','Polonya','Portekiz','Romanya',
        'Rusya',
        'Sırbistan','Slovakya','Slovenya',
        'Sri Lanka','Sudan','Suriye','Suudi Arabistan',
        'Tacikistan','Tayland','Tayvan','Tunus','Türkiye',
        'Ukrayna','Umman','Ürdün',
        'Venezuela','Vietnam',
        'Yemen','Yeni Zelanda','Yeşil Burun','Yunanistan',
        'Zambiya','Zimbabve'
    );

    protected static \$cityFormats = array(
        '";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\",
    );

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
        return "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 86,  145 => 83,  136 => 79,  130 => 78,  124 => 77,  117 => 73,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\tr_TR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('###', '##', '#');

    protected static \$streetSuffix = array(
        'Sokak', 'Caddesi', 'Kavşağı', 'Durağı', 'İş Hanı', 'Mevkii'
    );

    protected static \$postcode = array('#####');

    /**
    * @var array Cities of Turkey, for future updates please use @link https://tr.wikipedia.org/wiki/T%C3%BCrkiye'nin_illeri
    */
    protected static \$cityNames = array(
        'Adana','Adıyaman','Afyonkarahisar','Ağrı','Aksaray','Amasya','Ankara','Antalya','Ardahan','Artvin','Aydın',
        'Balıkesir','Bartın','Batman','Bayburt','Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa',
        'Çanakkale','Çankırı','Çorum',
        'Denizli','Diyarbakır','Düzce',
        'Edirne','Elazığ','Erzincan','Erzurum','Eskişehir',
        'Gaziantep','Giresun','Gümüşhane',
        'Hakkari','Hatay',
        'Iğdır','Isparta','İstanbul','İzmir',
        'Kahramanmaraş','Karabük','Karaman','Kars','Kastamonu','Kayseri','Kilis',
        'Kırıkkale','Kırklareli','Kırşehir','Kocaeli','Konya','Kütahya',
        'Malatya','Manisa','Mardin','Mersin','Muğla','Muş',
        'Nevşehir','Niğde',
        'Ordu','Osmaniye',
        'Rize',
        'Sakarya','Samsun','Şanlıurfa','Siirt','Sinop','Şırnak','Sivas',
        'Tekirdağ','Tokat','Trabzon','Tunceli',
        'Uşak',
        'Van',
        'Yalova','Yozgat',
        'Zonguldak'
    );

    /**
    * @var array Countries in Turkish
    * @link https://tr.wikipedia.org/wiki/%C3%9Clkeler_listesi
    */
    protected static \$country = array(
        'Almanya','Amerika Birleşik Devletleri','Arjantin','Arnavutluk','Avustralya','Avusturya','Azerbaycan',
        'Bahreyn','Belçika','Beyaz Rusya','Birleşik Arap Emirlikleri','Bosna-hersek','Brezilya','Bulgaristan',
        'Çek Cumhuriyeti','Cezayir','Çin Halk Cumhuriyeti',
        'Danimarka','Dominik Cumhuriyeti',
        'Endonezya','Ermenistan','Estonya',
        'Fas','Filipinler','Filistin','Finlandiya','Fransa',
        'Güney Afrika Cumhuriyeti','Güney Kore','Gürcistan',
        'Hindistan','Hırvatistan','Hollanda',
        'İngiltere','Irak','İran','İrlanda','İskoçya','İspanya','İsrail','İsveç','İsviçre','İtalya',
        'Jamaika','Japonya',
        'Kamboçya','Kanada','Karadağ','Kazakistan','Kıbrıs','Kırgızistan','Kosta Rika','Küba','Kuzey Kore',
        'Letonya','Libya','Litvanya','Lübnan','Lüksemburg',
        'Macaristan','Makedonya','Maldivler','Malta','Maurıtıus','Mısır',
        'Nepal',
        'Özbekistan',
        'Pakistan','Polonya','Portekiz','Romanya',
        'Rusya',
        'Sırbistan','Slovakya','Slovenya',
        'Sri Lanka','Sudan','Suriye','Suudi Arabistan',
        'Tacikistan','Tayland','Tayvan','Tunus','Türkiye',
        'Ukrayna','Umman','Ürdün',
        'Venezuela','Vietnam',
        'Yemen','Yeni Zelanda','Yeşil Burun','Yunanistan',
        'Zambiya','Zimbabve'
    );

    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}'
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    public function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/tr_TR/Address.php");
    }
}
