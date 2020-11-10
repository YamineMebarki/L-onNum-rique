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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Address.php */
class __TwigTemplate_f50a80e9ca06165bfad2c38970160c0638386ae4762b9f4889c263cdb65e6d5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_UG;

class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$cityFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * @link http://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Uganda
     */
    protected static \$cityName = array(
        'Alebtong','Abim','Adjumani','Amolatar','Amuria','Amuru','Apac','Arua',
        'Bombo','Budaka','Bugembe','Bugiri','Bukedea','Bulisa','Buikwe','Bundibugyo',
        'Busembatya','Bushenyi','Busia','Busolwe','Butaleja','Buwenge',
        'Dokolo',
        'Entebbe',
        'Fort Portal',
        'Gulu',
        'Hima','Hoima',
        'Ibanda','Iganga','Isingiro',
        'Jinja',
        'Kaabong','Kabale','Kaberamaido','Kabwohe','Kagadi','Kakinga','Kakiri','Kalangala','Kaliro',
        'Kalisizo','Kalongo','Kalungu','Kampala','Kamuli','Kanoni','Kamwenge','Kanungu','Kapchorwa',
        'Kasese','Katakwi','Kayunga','Kibaale','Kiboga','Kihiihi','Kiira','Kiruhura','Kiryandongo',
        'Kisoro','Kitgum','Koboko','Kotido','Kumi','Kyenjojo','Kyotera',
        'Lira','Lugazi','Lukaya','Luwero','Lwakhakha','Lwengo','Lyantonde',
        'Malaba','Manafwa','Masaka','Masindi','Masindi Port','Matugga','Mayuge','Mbale','Mbarara',
        'Mitooma','Mityana','Mpigi','Mpondwe','Moroto','Moyo','Mubende','Mukono','Mutukula',
        'Nagongera','Nakaseke','Nakasongola','Nakapiripirit','Namutumba','Nansana','Nebbi','Ngora',
        'Njeru','Nkokonjeru','Ntungamo',
        'Oyam',
        'Pader','Paidha','Pakwach','Pallisa',
        'Rakai','Rukungiri',
        'Sembabule','Sironko','Soroti',
        'Tororo',
        'Wakiso','Wobulenzi',
        'Yumbe'
    );

    /**
     * @link http://en.wikipedia.org/wiki/Category:Districts_of_Uganda
     */
    protected static \$district = array(
        'Abim','Adjumani','Agago','Alebtong','Amolatar','Amudat','Amuria','Amuru','Apac','Arua',
        'Budaka','Bududa','Bugiri','Buhweju','Buikwe','Bukedea','Bukomansimbi','Bukwo','Bulambuli',
        'Buliisa','Bundibugyo','Bushenyi','Busia','Butaleja','Butambala','Buvuma','Buyende',
        'Dokolo',
        'Gomba','Gulu',
        'Hoima',
        'Ibanda','Iganga','Isingiro',
        'Jinja',
        'Kaabong','Kabale','Kabarole','Kaberamaido','Kalangala','Kaliro','Kalungu','Kampala','Kamuli',
        'Kamwenge','Kanungu','Kapchorwa','Kasese','Katakwi','Kayunga','Kibaale','Kiboga','Kibuku',
        'Kigezi','Kiruhura','Kiryandongo','Kisoro','Kitgum','Koboko','Kole','Kotido','Kumi','Kween',
        'Kyankwanzi','Kyegegwa','Kyenjojo',
        'Lamwo','Lira','Luuka','Luweero','Lwengo','Lyantonde',
        'Manafwa','Maracha','Maracha-Terego','Masaka','Masindi','Mayuge','Mbale','Mbarara','Mitooma',
        'Mityana','Moroto','Moyo','Mpigi','Mubende','Mukono',
        'Nakapiripirit','Nakaseke','Nakasongola','Namayingo','Namutumba','Napak','Nebbi','Ngora',
        'Ntoroko','Ntungamo','Nwoya',
        'Otuke','Oyam',
        'Pader','Pallisa',
        'Rakai','Rubirizi','Rukungiri',
        'Sembabule','Serere','Sheema','Sironko','Soroti',
        'Tororo',
        'Wakiso',
        'Yumbe',
        'Zombo'
    );

    protected static \$postcode = array( '#', \"##\", \"###\", \"####\", \"#####\" );

    protected static \$region = array( 'Central', 'East', 'North', 'West' );

    /**
     * @example 'Fort Portal'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example 'Kampala'
     */
    public static function district()
    {
        return static::randomElement(static::\$district);
    }

    /**
     * @example 'East'
     */
    public static function region()
    {
        return static::randomElement(static::\$region);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_UG;

class Address extends \\Faker\\Provider\\en_US\\Address
{
    protected static \$cityFormats = array(
        '{{cityName}}'
    );

    /**
     * @link http://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Uganda
     */
    protected static \$cityName = array(
        'Alebtong','Abim','Adjumani','Amolatar','Amuria','Amuru','Apac','Arua',
        'Bombo','Budaka','Bugembe','Bugiri','Bukedea','Bulisa','Buikwe','Bundibugyo',
        'Busembatya','Bushenyi','Busia','Busolwe','Butaleja','Buwenge',
        'Dokolo',
        'Entebbe',
        'Fort Portal',
        'Gulu',
        'Hima','Hoima',
        'Ibanda','Iganga','Isingiro',
        'Jinja',
        'Kaabong','Kabale','Kaberamaido','Kabwohe','Kagadi','Kakinga','Kakiri','Kalangala','Kaliro',
        'Kalisizo','Kalongo','Kalungu','Kampala','Kamuli','Kanoni','Kamwenge','Kanungu','Kapchorwa',
        'Kasese','Katakwi','Kayunga','Kibaale','Kiboga','Kihiihi','Kiira','Kiruhura','Kiryandongo',
        'Kisoro','Kitgum','Koboko','Kotido','Kumi','Kyenjojo','Kyotera',
        'Lira','Lugazi','Lukaya','Luwero','Lwakhakha','Lwengo','Lyantonde',
        'Malaba','Manafwa','Masaka','Masindi','Masindi Port','Matugga','Mayuge','Mbale','Mbarara',
        'Mitooma','Mityana','Mpigi','Mpondwe','Moroto','Moyo','Mubende','Mukono','Mutukula',
        'Nagongera','Nakaseke','Nakasongola','Nakapiripirit','Namutumba','Nansana','Nebbi','Ngora',
        'Njeru','Nkokonjeru','Ntungamo',
        'Oyam',
        'Pader','Paidha','Pakwach','Pallisa',
        'Rakai','Rukungiri',
        'Sembabule','Sironko','Soroti',
        'Tororo',
        'Wakiso','Wobulenzi',
        'Yumbe'
    );

    /**
     * @link http://en.wikipedia.org/wiki/Category:Districts_of_Uganda
     */
    protected static \$district = array(
        'Abim','Adjumani','Agago','Alebtong','Amolatar','Amudat','Amuria','Amuru','Apac','Arua',
        'Budaka','Bududa','Bugiri','Buhweju','Buikwe','Bukedea','Bukomansimbi','Bukwo','Bulambuli',
        'Buliisa','Bundibugyo','Bushenyi','Busia','Butaleja','Butambala','Buvuma','Buyende',
        'Dokolo',
        'Gomba','Gulu',
        'Hoima',
        'Ibanda','Iganga','Isingiro',
        'Jinja',
        'Kaabong','Kabale','Kabarole','Kaberamaido','Kalangala','Kaliro','Kalungu','Kampala','Kamuli',
        'Kamwenge','Kanungu','Kapchorwa','Kasese','Katakwi','Kayunga','Kibaale','Kiboga','Kibuku',
        'Kigezi','Kiruhura','Kiryandongo','Kisoro','Kitgum','Koboko','Kole','Kotido','Kumi','Kween',
        'Kyankwanzi','Kyegegwa','Kyenjojo',
        'Lamwo','Lira','Luuka','Luweero','Lwengo','Lyantonde',
        'Manafwa','Maracha','Maracha-Terego','Masaka','Masindi','Mayuge','Mbale','Mbarara','Mitooma',
        'Mityana','Moroto','Moyo','Mpigi','Mubende','Mukono',
        'Nakapiripirit','Nakaseke','Nakasongola','Namayingo','Namutumba','Napak','Nebbi','Ngora',
        'Ntoroko','Ntungamo','Nwoya',
        'Otuke','Oyam',
        'Pader','Pallisa',
        'Rakai','Rubirizi','Rukungiri',
        'Sembabule','Serere','Sheema','Sironko','Soroti',
        'Tororo',
        'Wakiso',
        'Yumbe',
        'Zombo'
    );

    protected static \$postcode = array( '#', \"##\", \"###\", \"####\", \"#####\" );

    protected static \$region = array( 'Central', 'East', 'North', 'West' );

    /**
     * @example 'Fort Portal'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example 'Kampala'
     */
    public static function district()
    {
        return static::randomElement(static::\$district);
    }

    /**
     * @example 'East'
     */
    public static function region()
    {
        return static::randomElement(static::\$region);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Address.php");
    }
}
