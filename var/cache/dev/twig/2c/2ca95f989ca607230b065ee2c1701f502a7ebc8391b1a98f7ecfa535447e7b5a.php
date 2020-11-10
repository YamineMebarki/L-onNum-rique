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

/* vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Person.php */
class __TwigTemplate_da4c913c5f06dba5508b057cd1713e757a9feb947815641e441ee101a523f2b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ru_RU;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameMale"]) || array_key_exists("middleNameMale", $context) ? $context["middleNameMale"] : (function () { throw new RuntimeError('Variable "middleNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameMale"]) || array_key_exists("middleNameMale", $context) ? $context["middleNameMale"] : (function () { throw new RuntimeError('Variable "middleNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * This provider uses wikipedia's 250 top russian last names
     * That list of MALE last names could be safely extended to FEMALE list just by adding 'a' letter at the end
     */
    protected static \$femaleNameFormats = array(
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "а',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "а ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B5_%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F
     * {@link} http://masterrussian.com/aa031701a.shtml
     **/
    protected static \$firstNameMale = array(
        'Абрам', 'Август', 'Адам', 'Адриан', 'Аким', 'Александр', 'Алексей', 'Альберт', 'Ананий', 'Анатолий', 'Андрей', 'Антон', 'Антонин',
        'Аполлон', 'Аркадий', 'Арсений', 'Артемий', 'Артур', 'Артём', 'Афанасий', 'Богдан', 'Болеслав', 'Борис', 'Бронислав', 'Вадим',
        'Валентин', 'Валериан', 'Валерий', 'Василий', 'Вениамин', 'Викентий', 'Виктор', 'Виль', 'Виталий', 'Витольд', 'Влад', 'Владимир',
        'Владислав', 'Владлен', 'Всеволод', 'Вячеслав', 'Гавриил', 'Гарри', 'Геннадий', 'Георгий', 'Герасим', 'Герман', 'Глеб', 'Гордей',
        'Григорий', 'Давид', 'Дан', 'Даниил', 'Данила', 'Денис', 'Дмитрий', 'Добрыня', 'Донат', 'Евгений', 'Егор', 'Ефим',
        'Захар', 'Иван', 'Игнат', 'Игнатий', 'Игорь', 'Илларион', 'Илья', 'Иммануил', 'Иннокентий', 'Иосиф', 'Ираклий', 'Кирилл',
        'Клим', 'Константин', 'Кузьма', 'Лаврентий', 'Лев', 'Леонид', 'Макар', 'Максим', 'Марат', 'Марк', 'Матвей', 'Милан',
        'Мирослав', 'Михаил', 'Назар', 'Нестор', 'Никита', 'Никодим', 'Николай', 'Олег', 'Павел', 'Платон', 'Прохор', 'Пётр',
        'Радислав', 'Рафаил', 'Роберт', 'Родион', 'Роман', 'Ростислав', 'Руслан', 'Сава', 'Савва', 'Святослав', 'Семён', 'Сергей',
        'Спартак', 'Станислав', 'Степан', 'Стефан', 'Тарас', 'Тимофей', 'Тимур', 'Тит', 'Трофим', 'Феликс', 'Филипп', 'Фёдор',
        'Эдуард', 'Эрик', 'Юлиан', 'Юлий', 'Юрий', 'Яков', 'Ян', 'Ярослав', 'Милан',
    );

    /**
     * {@link} http://masterrussian.com/aa031001a.shtml
     **/
    protected static \$firstNameFemale = array(
        'Александра', 'Алина', 'Алиса', 'Алла', 'Альбина', 'Алёна', 'Анастасия', 'Анжелика', 'Анна', 'Антонина', 'Анфиса', 'Валентина', 'Валерия',
        'Варвара', 'Василиса', 'Вера', 'Вероника', 'Виктория', 'Владлена', 'Галина', 'Дарья', 'Диана', 'Дина', 'Доминика', 'Ева',
        'Евгения', 'Екатерина', 'Елена', 'Елизавета', 'Жанна', 'Зинаида', 'Злата', 'Зоя', 'Изабелла', 'Изольда', 'Инга', 'Инесса',
        'Инна', 'Ирина', 'Искра', 'Капитолина', 'Клавдия', 'Клара', 'Клементина', 'Кристина', 'Ксения', 'Лада', 'Лариса', 'Лидия',
        'Лилия', 'Любовь', 'Людмила', 'Люся', 'Майя', 'Мальвина', 'Маргарита', 'Марина', 'Мария', 'Марта', 'Надежда', 'Наталья',
        'Нелли', 'Ника', 'Нина', 'Нонна', 'Оксана', 'Олеся', 'Ольга', 'Полина', 'Рада', 'Раиса', 'Регина', 'Рената',
        'Розалина', 'Светлана', 'Софья', 'София', 'Таисия', 'Тамара', 'Татьяна', 'Ульяна', 'Фаина', 'Федосья', 'Флорентина', 'Эльвира', 'Эмилия',
        'Эмма', 'Юлия', 'Яна', 'Ярослава',
    );

    protected static \$middleNameMale = array(
        'Александрович', 'Алексеевич', 'Андреевич', 'Дмитриевич', 'Евгеньевич',
        'Сергеевич', 'Иванович', 'Фёдорович', 'Львович', 'Романович', 'Владимирович',
        'Борисович', 'Максимович',
    );

    protected static \$middleNameFemale = array(
        'Александровна', 'Алексеевна', 'Андреевна', 'Дмитриевна', 'Евгеньевна',
        'Сергеевна', 'Ивановна', 'Фёдоровна', 'Львовна', 'Романовна', 'Владимировна',
        'Борисовна', 'Максимовна',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BE%D0%B1%D1%89%D0%B5%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D1%85_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D0%B9
     **/
    protected static \$lastName = array(
        'Смирнов', 'Иванов', 'Кузнецов', 'Соколов', 'Попов', 'Лебедев', 'Козлов',
        'Новиков', 'Морозов', 'Петров', 'Волков', 'Соловьёв', 'Васильев', 'Зайцев',
        'Павлов', 'Семёнов', 'Голубев', 'Виноградов', 'Богданов', 'Воробьёв',
        'Фёдоров', 'Михайлов', 'Беляев', 'Тарасов', 'Белов', 'Комаров', 'Орлов',
        'Киселёв', 'Макаров', 'Андреев', 'Ковалёв', 'Ильин', 'Гусев', 'Титов',
        'Кузьмин', 'Кудрявцев', 'Баранов', 'Куликов', 'Алексеев', 'Степанов',
        'Яковлев', 'Сорокин', 'Сергеев', 'Романов', 'Захаров', 'Борисов', 'Королёв',
        'Герасимов', 'Пономарёв', 'Григорьев', 'Лазарев', 'Медведев', 'Ершов',
        'Никитин', 'Соболев', 'Рябов', 'Поляков', 'Цветков', 'Данилов', 'Жуков',
        'Фролов', 'Журавлёв', 'Николаев', 'Крылов', 'Максимов', 'Сидоров', 'Осипов',
        'Белоусов', 'Федотов', 'Дорофеев', 'Егоров', 'Матвеев', 'Бобров', 'Дмитриев',
        'Калинин', 'Анисимов', 'Петухов', 'Антонов', 'Тимофеев', 'Никифоров',
        'Веселов', 'Филиппов', 'Марков', 'Большаков', 'Суханов', 'Миронов', 'Ширяев',
        'Александров', 'Коновалов', 'Шестаков', 'Казаков', 'Ефимов', 'Денисов',
        'Громов', 'Фомин', 'Давыдов', 'Мельников', 'Щербаков', 'Блинов', 'Колесников',
        'Карпов', 'Афанасьев', 'Власов', 'Маслов', 'Исаков', 'Тихонов', 'Аксёнов',
        'Гаврилов', 'Родионов', 'Котов', 'Горбунов', 'Кудряшов', 'Быков', 'Зуев',
        'Третьяков', 'Савельев', 'Панов', 'Рыбаков', 'Суворов', 'Абрамов', 'Воронов',
        'Мухин', 'Архипов', 'Трофимов', 'Мартынов', 'Емельянов', 'Горшков', 'Чернов',
        'Овчинников', 'Селезнёв', 'Панфилов', 'Копылов', 'Михеев', 'Галкин', 'Назаров',
        'Лобанов', 'Лукин', 'Беляков', 'Потапов', 'Некрасов', 'Хохлов', 'Жданов',
        'Наумов', 'Шилов', 'Воронцов', 'Ермаков', 'Дроздов', 'Игнатьев', 'Савин',
        'Логинов', 'Сафонов', 'Капустин', 'Кириллов', 'Моисеев', 'Елисеев', 'Кошелев',
        'Костин', 'Горбачёв', 'Орехов', 'Ефремов', 'Исаев', 'Евдокимов', 'Калашников',
        'Кабанов', 'Носков', 'Юдин', 'Кулагин', 'Лапин', 'Прохоров', 'Нестеров',
        'Харитонов', 'Агафонов', 'Муравьёв', 'Ларионов', 'Федосеев', 'Зимин', 'Пахомов',
        'Шубин', 'Игнатов', 'Филатов', 'Крюков', 'Рогов', 'Кулаков', 'Терентьев',
        'Молчанов', 'Владимиров', 'Артемьев', 'Гурьев', 'Зиновьев', 'Гришин', 'Кононов',
        'Дементьев', 'Ситников', 'Симонов', 'Мишин', 'Фадеев', 'Комиссаров', 'Мамонтов',
        'Носов', 'Гуляев', 'Шаров', 'Устинов', 'Вишняков', 'Евсеев', 'Лаврентьев',
        'Брагин', 'Константинов', 'Корнилов', 'Авдеев', 'Зыков', 'Бирюков', 'Шарапов',
        'Никонов', 'Щукин', 'Дьячков', 'Одинцов', 'Сазонов', 'Якушев', 'Красильников',
        'Гордеев', 'Самойлов', 'Князев', 'Беспалов', 'Уваров', 'Шашков', 'Бобылёв',
        'Доронин', 'Белозёров', 'Рожков', 'Самсонов', 'Мясников', 'Лихачёв', 'Буров',
        'Сысоев', 'Фомичёв', 'Русаков', 'Стрелков', 'Гущин', 'Тетерин', 'Колобов',
        'Субботин', 'Фокин', 'Блохин', 'Селиверстов', 'Пестов', 'Кондратьев', 'Силин',
        'Меркушев', 'Лыткин', 'Туров',
    );

    /**
     * Return male middle name
     *
     * @example 'Иванович'
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Ивановна'
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::\$middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @access public
     * @param string|null \$gender A gender the middle name should be generated
     *     for. If the argument is skipped a random gender will be used.
     * @return string Middle name
     */
    public function middleName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return \$this->middleNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return \$this->middleNameFemale();
        }

        return \$this->middleName(static::randomElement(array(
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        )));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  75 => 17,  60 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ru_RU;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    );

    /**
     * This provider uses wikipedia's 250 top russian last names
     * That list of MALE last names could be safely extended to FEMALE list just by adding 'a' letter at the end
     */
    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}а',
        '{{lastName}}а {{firstNameFemale}} {{middleNameFemale}}',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B5_%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F
     * {@link} http://masterrussian.com/aa031701a.shtml
     **/
    protected static \$firstNameMale = array(
        'Абрам', 'Август', 'Адам', 'Адриан', 'Аким', 'Александр', 'Алексей', 'Альберт', 'Ананий', 'Анатолий', 'Андрей', 'Антон', 'Антонин',
        'Аполлон', 'Аркадий', 'Арсений', 'Артемий', 'Артур', 'Артём', 'Афанасий', 'Богдан', 'Болеслав', 'Борис', 'Бронислав', 'Вадим',
        'Валентин', 'Валериан', 'Валерий', 'Василий', 'Вениамин', 'Викентий', 'Виктор', 'Виль', 'Виталий', 'Витольд', 'Влад', 'Владимир',
        'Владислав', 'Владлен', 'Всеволод', 'Вячеслав', 'Гавриил', 'Гарри', 'Геннадий', 'Георгий', 'Герасим', 'Герман', 'Глеб', 'Гордей',
        'Григорий', 'Давид', 'Дан', 'Даниил', 'Данила', 'Денис', 'Дмитрий', 'Добрыня', 'Донат', 'Евгений', 'Егор', 'Ефим',
        'Захар', 'Иван', 'Игнат', 'Игнатий', 'Игорь', 'Илларион', 'Илья', 'Иммануил', 'Иннокентий', 'Иосиф', 'Ираклий', 'Кирилл',
        'Клим', 'Константин', 'Кузьма', 'Лаврентий', 'Лев', 'Леонид', 'Макар', 'Максим', 'Марат', 'Марк', 'Матвей', 'Милан',
        'Мирослав', 'Михаил', 'Назар', 'Нестор', 'Никита', 'Никодим', 'Николай', 'Олег', 'Павел', 'Платон', 'Прохор', 'Пётр',
        'Радислав', 'Рафаил', 'Роберт', 'Родион', 'Роман', 'Ростислав', 'Руслан', 'Сава', 'Савва', 'Святослав', 'Семён', 'Сергей',
        'Спартак', 'Станислав', 'Степан', 'Стефан', 'Тарас', 'Тимофей', 'Тимур', 'Тит', 'Трофим', 'Феликс', 'Филипп', 'Фёдор',
        'Эдуард', 'Эрик', 'Юлиан', 'Юлий', 'Юрий', 'Яков', 'Ян', 'Ярослав', 'Милан',
    );

    /**
     * {@link} http://masterrussian.com/aa031001a.shtml
     **/
    protected static \$firstNameFemale = array(
        'Александра', 'Алина', 'Алиса', 'Алла', 'Альбина', 'Алёна', 'Анастасия', 'Анжелика', 'Анна', 'Антонина', 'Анфиса', 'Валентина', 'Валерия',
        'Варвара', 'Василиса', 'Вера', 'Вероника', 'Виктория', 'Владлена', 'Галина', 'Дарья', 'Диана', 'Дина', 'Доминика', 'Ева',
        'Евгения', 'Екатерина', 'Елена', 'Елизавета', 'Жанна', 'Зинаида', 'Злата', 'Зоя', 'Изабелла', 'Изольда', 'Инга', 'Инесса',
        'Инна', 'Ирина', 'Искра', 'Капитолина', 'Клавдия', 'Клара', 'Клементина', 'Кристина', 'Ксения', 'Лада', 'Лариса', 'Лидия',
        'Лилия', 'Любовь', 'Людмила', 'Люся', 'Майя', 'Мальвина', 'Маргарита', 'Марина', 'Мария', 'Марта', 'Надежда', 'Наталья',
        'Нелли', 'Ника', 'Нина', 'Нонна', 'Оксана', 'Олеся', 'Ольга', 'Полина', 'Рада', 'Раиса', 'Регина', 'Рената',
        'Розалина', 'Светлана', 'Софья', 'София', 'Таисия', 'Тамара', 'Татьяна', 'Ульяна', 'Фаина', 'Федосья', 'Флорентина', 'Эльвира', 'Эмилия',
        'Эмма', 'Юлия', 'Яна', 'Ярослава',
    );

    protected static \$middleNameMale = array(
        'Александрович', 'Алексеевич', 'Андреевич', 'Дмитриевич', 'Евгеньевич',
        'Сергеевич', 'Иванович', 'Фёдорович', 'Львович', 'Романович', 'Владимирович',
        'Борисович', 'Максимович',
    );

    protected static \$middleNameFemale = array(
        'Александровна', 'Алексеевна', 'Андреевна', 'Дмитриевна', 'Евгеньевна',
        'Сергеевна', 'Ивановна', 'Фёдоровна', 'Львовна', 'Романовна', 'Владимировна',
        'Борисовна', 'Максимовна',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BE%D0%B1%D1%89%D0%B5%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D1%85_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D0%B9
     **/
    protected static \$lastName = array(
        'Смирнов', 'Иванов', 'Кузнецов', 'Соколов', 'Попов', 'Лебедев', 'Козлов',
        'Новиков', 'Морозов', 'Петров', 'Волков', 'Соловьёв', 'Васильев', 'Зайцев',
        'Павлов', 'Семёнов', 'Голубев', 'Виноградов', 'Богданов', 'Воробьёв',
        'Фёдоров', 'Михайлов', 'Беляев', 'Тарасов', 'Белов', 'Комаров', 'Орлов',
        'Киселёв', 'Макаров', 'Андреев', 'Ковалёв', 'Ильин', 'Гусев', 'Титов',
        'Кузьмин', 'Кудрявцев', 'Баранов', 'Куликов', 'Алексеев', 'Степанов',
        'Яковлев', 'Сорокин', 'Сергеев', 'Романов', 'Захаров', 'Борисов', 'Королёв',
        'Герасимов', 'Пономарёв', 'Григорьев', 'Лазарев', 'Медведев', 'Ершов',
        'Никитин', 'Соболев', 'Рябов', 'Поляков', 'Цветков', 'Данилов', 'Жуков',
        'Фролов', 'Журавлёв', 'Николаев', 'Крылов', 'Максимов', 'Сидоров', 'Осипов',
        'Белоусов', 'Федотов', 'Дорофеев', 'Егоров', 'Матвеев', 'Бобров', 'Дмитриев',
        'Калинин', 'Анисимов', 'Петухов', 'Антонов', 'Тимофеев', 'Никифоров',
        'Веселов', 'Филиппов', 'Марков', 'Большаков', 'Суханов', 'Миронов', 'Ширяев',
        'Александров', 'Коновалов', 'Шестаков', 'Казаков', 'Ефимов', 'Денисов',
        'Громов', 'Фомин', 'Давыдов', 'Мельников', 'Щербаков', 'Блинов', 'Колесников',
        'Карпов', 'Афанасьев', 'Власов', 'Маслов', 'Исаков', 'Тихонов', 'Аксёнов',
        'Гаврилов', 'Родионов', 'Котов', 'Горбунов', 'Кудряшов', 'Быков', 'Зуев',
        'Третьяков', 'Савельев', 'Панов', 'Рыбаков', 'Суворов', 'Абрамов', 'Воронов',
        'Мухин', 'Архипов', 'Трофимов', 'Мартынов', 'Емельянов', 'Горшков', 'Чернов',
        'Овчинников', 'Селезнёв', 'Панфилов', 'Копылов', 'Михеев', 'Галкин', 'Назаров',
        'Лобанов', 'Лукин', 'Беляков', 'Потапов', 'Некрасов', 'Хохлов', 'Жданов',
        'Наумов', 'Шилов', 'Воронцов', 'Ермаков', 'Дроздов', 'Игнатьев', 'Савин',
        'Логинов', 'Сафонов', 'Капустин', 'Кириллов', 'Моисеев', 'Елисеев', 'Кошелев',
        'Костин', 'Горбачёв', 'Орехов', 'Ефремов', 'Исаев', 'Евдокимов', 'Калашников',
        'Кабанов', 'Носков', 'Юдин', 'Кулагин', 'Лапин', 'Прохоров', 'Нестеров',
        'Харитонов', 'Агафонов', 'Муравьёв', 'Ларионов', 'Федосеев', 'Зимин', 'Пахомов',
        'Шубин', 'Игнатов', 'Филатов', 'Крюков', 'Рогов', 'Кулаков', 'Терентьев',
        'Молчанов', 'Владимиров', 'Артемьев', 'Гурьев', 'Зиновьев', 'Гришин', 'Кононов',
        'Дементьев', 'Ситников', 'Симонов', 'Мишин', 'Фадеев', 'Комиссаров', 'Мамонтов',
        'Носов', 'Гуляев', 'Шаров', 'Устинов', 'Вишняков', 'Евсеев', 'Лаврентьев',
        'Брагин', 'Константинов', 'Корнилов', 'Авдеев', 'Зыков', 'Бирюков', 'Шарапов',
        'Никонов', 'Щукин', 'Дьячков', 'Одинцов', 'Сазонов', 'Якушев', 'Красильников',
        'Гордеев', 'Самойлов', 'Князев', 'Беспалов', 'Уваров', 'Шашков', 'Бобылёв',
        'Доронин', 'Белозёров', 'Рожков', 'Самсонов', 'Мясников', 'Лихачёв', 'Буров',
        'Сысоев', 'Фомичёв', 'Русаков', 'Стрелков', 'Гущин', 'Тетерин', 'Колобов',
        'Субботин', 'Фокин', 'Блохин', 'Селиверстов', 'Пестов', 'Кондратьев', 'Силин',
        'Меркушев', 'Лыткин', 'Туров',
    );

    /**
     * Return male middle name
     *
     * @example 'Иванович'
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Ивановна'
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::\$middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @access public
     * @param string|null \$gender A gender the middle name should be generated
     *     for. If the argument is skipped a random gender will be used.
     * @return string Middle name
     */
    public function middleName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return \$this->middleNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return \$this->middleNameFemale();
        }

        return \$this->middleName(static::randomElement(array(
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        )));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Person.php");
    }
}
