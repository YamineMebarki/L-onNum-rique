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

/* vendor/fzaninotto/faker/src/Faker/Provider/mn_MN/Person.php */
class __TwigTemplate_1307918e55e5e181154192259bec7870cc8805624bea4d61ae00ff21e4f47efb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/mn_MN/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/mn_MN/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\mn_MN;

class Person extends \\Faker\\Provider\\Person
{
    /**
     * @link http://ner.query.mn/son
     */
    protected static \$firstNameMale = array(
        'Агь-Од', 'Адархидай', 'Адхираг', 'Ажай', 'Аз-Оргил', 'Алаг-Наяа', 'Алахуш-дигитхури', 'Алдиэр', 'Алтаннар', 'Алхуй', 'Алчи', 'Алчидай', 'Амал', 'Амбагай', 'Амин-Эрдэнэ', 'Анхлан', 'Арачиан', 'Аргасун', 'Арин', 'Арулад', 'Архай Хасар', 'Аучу', 'Ачиг-Чирүн', 'Ачиг-Ширүн', 'Аша-хамбу',
        'Баарьдай', 'Багу-Чорхи', 'Байшинхор', 'Бала', 'Бала-Чэрби', 'Балхачи', 'Барула', 'Баруладай', 'Бахажи', 'Баярмагнай', 'Бодончар', 'Боржигидай', 'Боролдай', 'Боролдайсуялби', 'Бужир', 'Буйраг', 'Булуган', 'Бурьбулчиру', 'Буту', 'Буха-Төмөр', 'Бухатай', 'Бухату', 'Бучаран', 'Бэсүдэй', 'Бүлтэчү', 'Бүри', 'Бүри-Бөхө', 'Бүрибөх', 'Бүхэдэй', 'Бөгэн',
        'Гилүгэтэй', 'Гэнигэдэй', 'Гүнгуа', 'Гүр-Хан', 'Гүчүгүр', 'Гүчүд',
        'Дайр', 'Дайр-Үсүн', 'Далдурхан', 'Дамача', 'Дарбай', 'Даридай', 'Даун', 'Добу', 'Доголдай', 'Доголху', 'Додай', 'Дорибөхө', 'Дува', 'Дэгэй', 'Дэй-Сэцэн', 'Дөрбуй', 'Дөрбэй',
        'Егү', 'Еди-Тоблуг', 'Есүнхэй', 'Ехэй-Хонтагар',
        'Жажирадай', 'Жалалдин', 'Жали', 'Жалибуха', 'Жалман', 'Жарчиудай', 'Жатай', 'Жаурьдай', 'Жаха-Хамбу', 'Жахахамбу', 'Жибгэ', 'Жибэгэ', 'Жидай', 'Жидэр', 'Жихүр', 'Жубхан', 'Жунсо', 'Жэгэй', 'Жэхү', 'Жэүн', 'Жүрчидэй',
        'Зочи', 'Зүтгэлбөх',
        'Ивгээл', 'Идухадай', 'Идүүд', 'Илаху', 'Илугай', 'Инал', 'Иналч', 'Инанча', 'Итүргэн', 'Их-Нэүрин', 'Их-Чэрэн', 'Ихнүдэн', 'Ихчирэн',
        'Кишлиг',
        'Лаблах',
        'Мангай', 'Мангудай', 'Масхуд', 'Молор', 'Молор эрдэнэ', 'Моричи', 'Мороха', 'Мулхалху', 'Мухулай буюу Мухули', 'Мэгэтү', 'Мэгүжин', 'Мэлиг', 'Мэнгитү', 'Мэнлиг', 'Мэнэн', 'Мүгэ', 'Мүлхэ-тотаг', 'Мүнтүүр', 'Мөчи',
        'Нарийн-гэгээн', 'Наринтоорил', 'Наху', 'Ноёгидай', 'Нэүдэйн Цагаан',
        'Огда', 'Оготор', 'Олар', 'Олдхар', 'Онгууд', 'Оронар', 'Оронартай', 'Охинбархаг',
        'Өлэбэг', 'Өнгүр', 'Өэлэн',
        'Саль-Хачау', 'Саргай', 'Сача-Бэхи', 'Сачуур', 'Сорхату', 'Сорхоншар', 'Сохо-Сэцэн', 'Сэмсэчүлэ', 'Сэцэ-Домог', 'Сэчиүр', 'Сэчэ-Бэхи', 'Сүбэхэй', 'Сүйхэтү', 'Сүхэхэй', 'Сүхэхэй-Жаун', 'Сүхэхэй-Жэүн', 'Сөнид',
        'Тай-Төмөр', 'Тайчар', 'Тайчиудай', 'Тайчу', 'Тамача', 'Тамир', 'Таргудай', 'Тататунга', 'Тобуха', 'Тогочар', 'Тогтоа', 'Тогучар', 'Тодойн-Гэрти', 'Тодсаха', 'Толун', 'Торбиташ', 'Торголжин', 'Торойн отчигон', 'Тугудай', 'Тунбинай', 'Тунхуйдай', 'Тусах', 'Туху', 'Тэв тэнгэр', 'Тэлэгэтү', 'Тэмүжин-Үгэ', 'Тэмүжинүгэ', 'Тэрхэг', 'Түгэ', 'Түгэ-Маха',
        'Удутай', 'Уйгуртай', 'Уруудай', 'Усун', 'Ухуна',
        'Үгэ', 'Үгэлэн', 'Үнгүр',
        'Хаатай Дармала', 'Хабич', 'Хабтурхас', 'Хадиги', 'Хайду', 'Халжа', 'Халиудар', 'Хан-Эрдэнэ', 'Хангиадай', 'Ханхархан', 'Хар-Хадаан', 'Хараудар', 'Харачар', 'Хархай', 'Хархалзан', 'Хархирүгэ', 'Харчу', 'Хауран', 'Хачи-Хүлүг', 'Хачиу', 'Хачиун', 'Хачула', 'Хаши', 'Хашин', 'Хингиадай', 'Хиратай', 'Хирилтуг', 'Хирмау', 'Хишилиг', 'Ходун',
        'Цагаангуа',
        'Чанай', 'Чаужин', 'Чаурхан', 'Чахурхан', 'Чигу', 'Чилгутай', 'Чилэгэрбөх', 'Чилэгүтэн-Тахи', 'Чилэдү', 'Чинбай', 'Чирхай', 'Чирхитэй', 'Чихарай', 'Чихитай', 'Чормаган', 'Чоёг Цагаан', 'Чуу мэргэн', 'Чүлгэдэй',
        'Шижуудай', 'Шинч', 'Шинэсочи', 'Ширахул',
        'Эди', 'Элжгэдэй', 'Элхудур', 'Эрххар', 'Эхлэлсайхан',
        'Ю-Хунан', 'Юрүхан',
        'Ядир', 'Ялавач', 'Ялбаг'
    );

    /**
     * @link http://ner.query.mn/daugther
     */
    protected static \$firstNameFemale = array(
        'Агь-Од', 'Алагабэх', 'Алалтун', 'Алахчит', 'Амин-Эрдэнэ', 'Анхлан',
        'Баргужин-Гуа', 'Баярмагнай', 'Борогчин-Гуа',
        'Гүрбэсү',
        'Дөргэнэ',
        'Ибага', 'Ивгээл',
        'Мааяадээвий', 'Моло', 'Монголжин-Гуа',
        'Олуйхан', 'Орбай',
        'Өэлүн-Үжин',
        'Саргай', 'Сорхагтан', 'Сохатай', 'Сочигэл',
        'Тамир', 'Тухай',
        'Ужаур-Үжин',
        'Хожинбэх', 'Хорижин', 'Хуагчин', 'Хутугтай', 'Хуурчин',
        'Цотан',
        'Чаалун', 'Чаурбэх', 'Чэчэйхэн',
        'Эбэхэй'
    );

    protected static \$namePrefix = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'Ө', 'П', 'Р', 'С', 'Т', 'У', 'Ү', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Э', 'Ю', 'Я');

    protected static \$alphabet = array('А', 'Л', 'Х', 'Б', 'М', 'Ц', 'В', 'Н', 'Ч', 'Г', 'О', 'Ш', 'Д', 'Ө', 'Щ', 'Е', 'П', 'Ъ', 'Ё', 'Р', 'Ы', 'Ж', 'С', 'Ь', 'З', 'Т', 'Э', 'И', 'У', 'Ю', 'Й', 'Ү', 'Я', 'К', 'Ф');

    protected static \$maleNameFormats = array(
        '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new RuntimeError('Variable "namePrefix" does not exist.', 64, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new RuntimeError('Variable "namePrefix" does not exist.', 68, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$idNumberFormat = \"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 71, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "########\";

    /**
     * Generate an identification number.
     * 
     * @example ИЙ92011412
     */
    public function idNumber()
    {
        return static::numerify(\$this->generator->parse(static::\$idNumberFormat));
    }

    /**
     * @return string
     * @example 'Ф'
     */
    public function alphabet()
    {
        return static::randomElement(static::\$alphabet);
    }

    /**
     * @return string
     * @example 'Э'
     */
    public function namePrefix()
    {
        return static::randomElement(static::\$namePrefix);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/mn_MN/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 71,  117 => 68,  108 => 64,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\mn_MN;

class Person extends \\Faker\\Provider\\Person
{
    /**
     * @link http://ner.query.mn/son
     */
    protected static \$firstNameMale = array(
        'Агь-Од', 'Адархидай', 'Адхираг', 'Ажай', 'Аз-Оргил', 'Алаг-Наяа', 'Алахуш-дигитхури', 'Алдиэр', 'Алтаннар', 'Алхуй', 'Алчи', 'Алчидай', 'Амал', 'Амбагай', 'Амин-Эрдэнэ', 'Анхлан', 'Арачиан', 'Аргасун', 'Арин', 'Арулад', 'Архай Хасар', 'Аучу', 'Ачиг-Чирүн', 'Ачиг-Ширүн', 'Аша-хамбу',
        'Баарьдай', 'Багу-Чорхи', 'Байшинхор', 'Бала', 'Бала-Чэрби', 'Балхачи', 'Барула', 'Баруладай', 'Бахажи', 'Баярмагнай', 'Бодончар', 'Боржигидай', 'Боролдай', 'Боролдайсуялби', 'Бужир', 'Буйраг', 'Булуган', 'Бурьбулчиру', 'Буту', 'Буха-Төмөр', 'Бухатай', 'Бухату', 'Бучаран', 'Бэсүдэй', 'Бүлтэчү', 'Бүри', 'Бүри-Бөхө', 'Бүрибөх', 'Бүхэдэй', 'Бөгэн',
        'Гилүгэтэй', 'Гэнигэдэй', 'Гүнгуа', 'Гүр-Хан', 'Гүчүгүр', 'Гүчүд',
        'Дайр', 'Дайр-Үсүн', 'Далдурхан', 'Дамача', 'Дарбай', 'Даридай', 'Даун', 'Добу', 'Доголдай', 'Доголху', 'Додай', 'Дорибөхө', 'Дува', 'Дэгэй', 'Дэй-Сэцэн', 'Дөрбуй', 'Дөрбэй',
        'Егү', 'Еди-Тоблуг', 'Есүнхэй', 'Ехэй-Хонтагар',
        'Жажирадай', 'Жалалдин', 'Жали', 'Жалибуха', 'Жалман', 'Жарчиудай', 'Жатай', 'Жаурьдай', 'Жаха-Хамбу', 'Жахахамбу', 'Жибгэ', 'Жибэгэ', 'Жидай', 'Жидэр', 'Жихүр', 'Жубхан', 'Жунсо', 'Жэгэй', 'Жэхү', 'Жэүн', 'Жүрчидэй',
        'Зочи', 'Зүтгэлбөх',
        'Ивгээл', 'Идухадай', 'Идүүд', 'Илаху', 'Илугай', 'Инал', 'Иналч', 'Инанча', 'Итүргэн', 'Их-Нэүрин', 'Их-Чэрэн', 'Ихнүдэн', 'Ихчирэн',
        'Кишлиг',
        'Лаблах',
        'Мангай', 'Мангудай', 'Масхуд', 'Молор', 'Молор эрдэнэ', 'Моричи', 'Мороха', 'Мулхалху', 'Мухулай буюу Мухули', 'Мэгэтү', 'Мэгүжин', 'Мэлиг', 'Мэнгитү', 'Мэнлиг', 'Мэнэн', 'Мүгэ', 'Мүлхэ-тотаг', 'Мүнтүүр', 'Мөчи',
        'Нарийн-гэгээн', 'Наринтоорил', 'Наху', 'Ноёгидай', 'Нэүдэйн Цагаан',
        'Огда', 'Оготор', 'Олар', 'Олдхар', 'Онгууд', 'Оронар', 'Оронартай', 'Охинбархаг',
        'Өлэбэг', 'Өнгүр', 'Өэлэн',
        'Саль-Хачау', 'Саргай', 'Сача-Бэхи', 'Сачуур', 'Сорхату', 'Сорхоншар', 'Сохо-Сэцэн', 'Сэмсэчүлэ', 'Сэцэ-Домог', 'Сэчиүр', 'Сэчэ-Бэхи', 'Сүбэхэй', 'Сүйхэтү', 'Сүхэхэй', 'Сүхэхэй-Жаун', 'Сүхэхэй-Жэүн', 'Сөнид',
        'Тай-Төмөр', 'Тайчар', 'Тайчиудай', 'Тайчу', 'Тамача', 'Тамир', 'Таргудай', 'Тататунга', 'Тобуха', 'Тогочар', 'Тогтоа', 'Тогучар', 'Тодойн-Гэрти', 'Тодсаха', 'Толун', 'Торбиташ', 'Торголжин', 'Торойн отчигон', 'Тугудай', 'Тунбинай', 'Тунхуйдай', 'Тусах', 'Туху', 'Тэв тэнгэр', 'Тэлэгэтү', 'Тэмүжин-Үгэ', 'Тэмүжинүгэ', 'Тэрхэг', 'Түгэ', 'Түгэ-Маха',
        'Удутай', 'Уйгуртай', 'Уруудай', 'Усун', 'Ухуна',
        'Үгэ', 'Үгэлэн', 'Үнгүр',
        'Хаатай Дармала', 'Хабич', 'Хабтурхас', 'Хадиги', 'Хайду', 'Халжа', 'Халиудар', 'Хан-Эрдэнэ', 'Хангиадай', 'Ханхархан', 'Хар-Хадаан', 'Хараудар', 'Харачар', 'Хархай', 'Хархалзан', 'Хархирүгэ', 'Харчу', 'Хауран', 'Хачи-Хүлүг', 'Хачиу', 'Хачиун', 'Хачула', 'Хаши', 'Хашин', 'Хингиадай', 'Хиратай', 'Хирилтуг', 'Хирмау', 'Хишилиг', 'Ходун',
        'Цагаангуа',
        'Чанай', 'Чаужин', 'Чаурхан', 'Чахурхан', 'Чигу', 'Чилгутай', 'Чилэгэрбөх', 'Чилэгүтэн-Тахи', 'Чилэдү', 'Чинбай', 'Чирхай', 'Чирхитэй', 'Чихарай', 'Чихитай', 'Чормаган', 'Чоёг Цагаан', 'Чуу мэргэн', 'Чүлгэдэй',
        'Шижуудай', 'Шинч', 'Шинэсочи', 'Ширахул',
        'Эди', 'Элжгэдэй', 'Элхудур', 'Эрххар', 'Эхлэлсайхан',
        'Ю-Хунан', 'Юрүхан',
        'Ядир', 'Ялавач', 'Ялбаг'
    );

    /**
     * @link http://ner.query.mn/daugther
     */
    protected static \$firstNameFemale = array(
        'Агь-Од', 'Алагабэх', 'Алалтун', 'Алахчит', 'Амин-Эрдэнэ', 'Анхлан',
        'Баргужин-Гуа', 'Баярмагнай', 'Борогчин-Гуа',
        'Гүрбэсү',
        'Дөргэнэ',
        'Ибага', 'Ивгээл',
        'Мааяадээвий', 'Моло', 'Монголжин-Гуа',
        'Олуйхан', 'Орбай',
        'Өэлүн-Үжин',
        'Саргай', 'Сорхагтан', 'Сохатай', 'Сочигэл',
        'Тамир', 'Тухай',
        'Ужаур-Үжин',
        'Хожинбэх', 'Хорижин', 'Хуагчин', 'Хутугтай', 'Хуурчин',
        'Цотан',
        'Чаалун', 'Чаурбэх', 'Чэчэйхэн',
        'Эбэхэй'
    );

    protected static \$namePrefix = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'Ө', 'П', 'Р', 'С', 'Т', 'У', 'Ү', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Э', 'Ю', 'Я');

    protected static \$alphabet = array('А', 'Л', 'Х', 'Б', 'М', 'Ц', 'В', 'Н', 'Ч', 'Г', 'О', 'Ш', 'Д', 'Ө', 'Щ', 'Е', 'П', 'Ъ', 'Ё', 'Р', 'Ы', 'Ж', 'С', 'Ь', 'З', 'Т', 'Э', 'И', 'У', 'Ю', 'Й', 'Ү', 'Я', 'К', 'Ф');

    protected static \$maleNameFormats = array(
        '{{namePrefix}}.{{firstNameMale}}'
    );

    protected static \$femaleNameFormats = array(
        '{{namePrefix}}.{{firstNameFemale}}'
    );

    protected static \$idNumberFormat = \"{{alphabet}}{{alphabet}}########\";

    /**
     * Generate an identification number.
     * 
     * @example ИЙ92011412
     */
    public function idNumber()
    {
        return static::numerify(\$this->generator->parse(static::\$idNumberFormat));
    }

    /**
     * @return string
     * @example 'Ф'
     */
    public function alphabet()
    {
        return static::randomElement(static::\$alphabet);
    }

    /**
     * @return string
     * @example 'Э'
     */
    public function namePrefix()
    {
        return static::randomElement(static::\$namePrefix);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/mn_MN/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/mn_MN/Person.php");
    }
}
