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

/* vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Person.php */
class __TwigTemplate_d847fb5edf0547db7fc172d070b9be5cfa1a5666b090a06b1c9221e0bb477cb9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\kk_KZ;

use \\Faker\\Provider\\DateTime;

class Person extends \\Faker\\Provider\\Person
{

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;

    const CENTURY_19TH = 0;
    const CENTURY_20TH = 1;
    const CENTURY_21ST = 2;

    const MALE_CENTURY_19TH = 1;
    const MALE_CENTURY_20TH = 3;
    const MALE_CENTURY_21ST = 5;

    const FEMALE_CENTURY_19TH = 2;
    const FEMALE_CENTURY_20TH = 4;
    const FEMALE_CENTURY_21ST = 6;

    /**
     * @var array
     */
    public static \$firstSequenceBitWeights = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

    /**
     * @var array
     */
    public static \$secondSequenceBitWeights = array(3, 4, 5, 6, 7, 8, 9, 10, 11, 1, 2);

    /**
     * @var array
     */
    public static \$genderCenturyMap = array(
        self::GENDER_MALE   => array(
            self::CENTURY_19TH => self::MALE_CENTURY_19TH,
            self::CENTURY_20TH => self::MALE_CENTURY_20TH,
            self::CENTURY_21ST => self::MALE_CENTURY_21ST,
        ),
        self::GENDER_FEMALE => array(
            self::CENTURY_19TH => self::FEMALE_CENTURY_19TH,
            self::CENTURY_20TH => self::FEMALE_CENTURY_20TH,
            self::CENTURY_21ST => self::FEMALE_CENTURY_21ST,
        ),
    );

    /**
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static \$maleNameFormats = array(
        '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "ұлы ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static \$femaleNameFormats = array(
        '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "қызы ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     *
     * @var array
     */
    protected static \$firstNameMale = array(
        'Аылғазы',
        'Әбдіқадыр',
        'Бабағожа',
        'Ғайса',
        'Дәмен',
        'Егізбек',
        'Жазылбек',
        'Зұлпықар',
        'Игісін',
        'Кәдіржан',
        'Қадырқан',
        'Латиф',
        'Мағаз',
        'Нармағамбет',
        'Оңалбай',
        'Өндіріс',
        'Пердебек',
        'Рақат',
        'Сағындық',
        'Танабай',
        'Уайыс',
        'Ұйықбай',
        'Үрімбай',
        'Файзрахман',
        'Хангелді',
        'Шаттық',
        'Ыстамбақы',
        'Ібни',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     *
     * @var array
     */
    protected static \$firstNameFemale = array(
        'Асылтас',
        'Әужа',
        'Бүлдіршін',
        'Гүлшаш',
        'Ғафура',
        'Ділдә',
        'Еркежан',
        'Жібек',
        'Зылиқа',
        'Ирада',
        'Күнсұлу',
        'Қырмызы',
        'Ләтипа',
        'Мүштәри',
        'Нұршара',
        'Орынша',
        'Өрзия',
        'Перизат',
        'Рухия',
        'Сындыбала',
        'Тұрсынай',
        'Уәсима',
        'Ұрқия',
        'Үрия',
        'Фируза',
        'Хафиза',
        'Шырынгүл',
        'Ырысты',
        'Іңкәр',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static \$lastName = array(
        'Адырбай',
        'Әжібай',
        'Байбөрі',
        'Ғизат',
        'Ділдабек',
        'Ешмұхамбет',
        'Жігер',
        'Зікірия',
        'Иса',
        'Кунту',
        'Қыдыр',
        'Лұқпан',
        'Мышырбай',
        'Нысынбай',
        'Ошақбай',
        'Өтетілеу',
        'Пірәлі',
        'Рүстем',
        'Сырмұхамбет',
        'Тілеміс',
        'Уәлі',
        'Ұлықбек',
        'Үстем',
        'Фахир',
        'Хұсайын',
        'Шілдебай',
        'Ыстамбақы',
        'Ісмет',
    );

    /**
     * @param  integer \$year
     *
     * @return integer|null
     */
    private static function getCenturyByYear(\$year)
    {
        if (\$year >= 2000 && \$year <= DateTime::year()) {
            return self::CENTURY_21ST;
        } elseif (\$year >= 1900) {
            return self::CENTURY_20TH;
        } elseif (\$year >= 1800) {
            return self::CENTURY_19TH;
        }
    }

    /**
     * National Individual Identification Numbers
     *
     * @link   http://egov.kz/wps/portal/Content?contentPath=%2Fegovcontent%2Fcitizen_migration%2Fpassport_id_card%2Farticle%2Fiin_info&lang=en
     * @link   https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D0%B4%D0%B8%D0%B2%D0%B8%D0%B4%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%B8%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80
     *
     * @param  \\DateTime \$birthDate
     * @param  integer   \$gender
     *
     * @return string 12 digits, like 780322300455
     */
    public static function individualIdentificationNumber(\\DateTime \$birthDate = null, \$gender = self::GENDER_MALE)
    {
        if (!\$birthDate) {
            \$birthDate = DateTime::dateTimeBetween();
        }

        do {
            \$population = mt_rand(1000, 2000);
            \$century = self::getCenturyByYear((int) \$birthDate->format('Y'));

            \$iin = \$birthDate->format('ymd');
            \$iin .= (string) self::\$genderCenturyMap[\$gender][\$century];
            \$iin .= (string) \$population;
            \$checksum = self::checkSum(\$iin);
        } while (\$checksum === 10);

        return \$iin . (string) \$checksum;
    }

    /**
     * @param string \$iinValue
     *
     * @return integer
     */
    public static function checkSum(\$iinValue)
    {
        \$controlDigit = self::getControlDigit(\$iinValue, self::\$firstSequenceBitWeights);

        if (\$controlDigit === 10) {
            return self::getControlDigit(\$iinValue, self::\$secondSequenceBitWeights);
        }

        return \$controlDigit;
    }

    /**
     * @param string \$iinValue
     * @param array \$sequence
     *
     * @return integer
     */
    protected static function getControlDigit(\$iinValue, \$sequence)
    {
        \$sum = 0;

        for (\$i = 0; \$i <= 10; \$i++) {
            \$sum += (int) \$iinValue[\$i] * \$sequence[\$i];
        }

        return \$sum % 11;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 66,  101 => 57,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\kk_KZ;

use \\Faker\\Provider\\DateTime;

class Person extends \\Faker\\Provider\\Person
{

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;

    const CENTURY_19TH = 0;
    const CENTURY_20TH = 1;
    const CENTURY_21ST = 2;

    const MALE_CENTURY_19TH = 1;
    const MALE_CENTURY_20TH = 3;
    const MALE_CENTURY_21ST = 5;

    const FEMALE_CENTURY_19TH = 2;
    const FEMALE_CENTURY_20TH = 4;
    const FEMALE_CENTURY_21ST = 6;

    /**
     * @var array
     */
    public static \$firstSequenceBitWeights = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

    /**
     * @var array
     */
    public static \$secondSequenceBitWeights = array(3, 4, 5, 6, 7, 8, 9, 10, 11, 1, 2);

    /**
     * @var array
     */
    public static \$genderCenturyMap = array(
        self::GENDER_MALE   => array(
            self::CENTURY_19TH => self::MALE_CENTURY_19TH,
            self::CENTURY_20TH => self::MALE_CENTURY_20TH,
            self::CENTURY_21ST => self::MALE_CENTURY_21ST,
        ),
        self::GENDER_FEMALE => array(
            self::CENTURY_19TH => self::FEMALE_CENTURY_19TH,
            self::CENTURY_20TH => self::FEMALE_CENTURY_20TH,
            self::CENTURY_21ST => self::FEMALE_CENTURY_21ST,
        ),
    );

    /**
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static \$maleNameFormats = array(
        '{{lastName}}ұлы {{firstNameMale}}',
    );

    /**
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static \$femaleNameFormats = array(
        '{{lastName}}қызы {{firstNameFemale}}',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     *
     * @var array
     */
    protected static \$firstNameMale = array(
        'Аылғазы',
        'Әбдіқадыр',
        'Бабағожа',
        'Ғайса',
        'Дәмен',
        'Егізбек',
        'Жазылбек',
        'Зұлпықар',
        'Игісін',
        'Кәдіржан',
        'Қадырқан',
        'Латиф',
        'Мағаз',
        'Нармағамбет',
        'Оңалбай',
        'Өндіріс',
        'Пердебек',
        'Рақат',
        'Сағындық',
        'Танабай',
        'Уайыс',
        'Ұйықбай',
        'Үрімбай',
        'Файзрахман',
        'Хангелді',
        'Шаттық',
        'Ыстамбақы',
        'Ібни',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     *
     * @var array
     */
    protected static \$firstNameFemale = array(
        'Асылтас',
        'Әужа',
        'Бүлдіршін',
        'Гүлшаш',
        'Ғафура',
        'Ділдә',
        'Еркежан',
        'Жібек',
        'Зылиқа',
        'Ирада',
        'Күнсұлу',
        'Қырмызы',
        'Ләтипа',
        'Мүштәри',
        'Нұршара',
        'Орынша',
        'Өрзия',
        'Перизат',
        'Рухия',
        'Сындыбала',
        'Тұрсынай',
        'Уәсима',
        'Ұрқия',
        'Үрия',
        'Фируза',
        'Хафиза',
        'Шырынгүл',
        'Ырысты',
        'Іңкәр',
    );

    /**
     * @see http://koshpendi.kz/index.php/nomad/imena/
     * @see https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%B0%D1%8F_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8F
     *
     * @var array
     */
    protected static \$lastName = array(
        'Адырбай',
        'Әжібай',
        'Байбөрі',
        'Ғизат',
        'Ділдабек',
        'Ешмұхамбет',
        'Жігер',
        'Зікірия',
        'Иса',
        'Кунту',
        'Қыдыр',
        'Лұқпан',
        'Мышырбай',
        'Нысынбай',
        'Ошақбай',
        'Өтетілеу',
        'Пірәлі',
        'Рүстем',
        'Сырмұхамбет',
        'Тілеміс',
        'Уәлі',
        'Ұлықбек',
        'Үстем',
        'Фахир',
        'Хұсайын',
        'Шілдебай',
        'Ыстамбақы',
        'Ісмет',
    );

    /**
     * @param  integer \$year
     *
     * @return integer|null
     */
    private static function getCenturyByYear(\$year)
    {
        if (\$year >= 2000 && \$year <= DateTime::year()) {
            return self::CENTURY_21ST;
        } elseif (\$year >= 1900) {
            return self::CENTURY_20TH;
        } elseif (\$year >= 1800) {
            return self::CENTURY_19TH;
        }
    }

    /**
     * National Individual Identification Numbers
     *
     * @link   http://egov.kz/wps/portal/Content?contentPath=%2Fegovcontent%2Fcitizen_migration%2Fpassport_id_card%2Farticle%2Fiin_info&lang=en
     * @link   https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D0%B4%D0%B8%D0%B2%D0%B8%D0%B4%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%B8%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80
     *
     * @param  \\DateTime \$birthDate
     * @param  integer   \$gender
     *
     * @return string 12 digits, like 780322300455
     */
    public static function individualIdentificationNumber(\\DateTime \$birthDate = null, \$gender = self::GENDER_MALE)
    {
        if (!\$birthDate) {
            \$birthDate = DateTime::dateTimeBetween();
        }

        do {
            \$population = mt_rand(1000, 2000);
            \$century = self::getCenturyByYear((int) \$birthDate->format('Y'));

            \$iin = \$birthDate->format('ymd');
            \$iin .= (string) self::\$genderCenturyMap[\$gender][\$century];
            \$iin .= (string) \$population;
            \$checksum = self::checkSum(\$iin);
        } while (\$checksum === 10);

        return \$iin . (string) \$checksum;
    }

    /**
     * @param string \$iinValue
     *
     * @return integer
     */
    public static function checkSum(\$iinValue)
    {
        \$controlDigit = self::getControlDigit(\$iinValue, self::\$firstSequenceBitWeights);

        if (\$controlDigit === 10) {
            return self::getControlDigit(\$iinValue, self::\$secondSequenceBitWeights);
        }

        return \$controlDigit;
    }

    /**
     * @param string \$iinValue
     * @param array \$sequence
     *
     * @return integer
     */
    protected static function getControlDigit(\$iinValue, \$sequence)
    {
        \$sum = 0;

        for (\$i = 0; \$i <= 10; \$i++) {
            \$sum += (int) \$iinValue[\$i] * \$sequence[\$i];
        }

        return \$sum % 11;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/Person.php");
    }
}
