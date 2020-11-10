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

/* vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Person.php */
class __TwigTemplate_3e59832bbbea28e0e557b3d83a0515e83c1fdfb05e7333bda11922436eb11b66 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\uk_UA;

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

    protected static \$femaleNameFormats = array(
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstNameMale = array(
        'Євген', 'Адам', 'Олександр', 'Олексій', 'Анатолій', 'Андрій', 'Антон', 'Артем', 'Артур', 'Борис', 'Вадим', 'Валентин', 'Валерій',
        'Василь', 'Віталій', 'Володимир', 'Владислав', 'Геннадій', 'Георгій', 'Григорій', 'Данил', 'Данило', 'Денис', 'Дмитро',
        'Євген', 'Іван', 'Ігор', 'Йосип', 'Кирил', 'Костянтин', 'Лев', 'Леонід', 'Максим', 'Мирослав', 'Михайло', 'Назар',
        'Микита', 'Микола', 'Олег', 'Павло', 'Роман', 'Руслан', 'Сергій', 'Станіслав', 'Тарас', 'Тимофій', 'Федір',
        'Юрій', 'Ярослав', 'Богдан', 'Болеслав', 'B\\'ячеслав',' Bалерій',' Bсеволод',' Bіктор', 'Ілля'
    );

    protected static \$firstNameFemale = array(
        'Олександра', 'Олена', 'Алла', 'Анастасія', 'Анна', 'Валентина', 'Валерія', 'Віра', 'Вікторія', 'Галина', 'Дар\\'я', 'Діана', 'Євгенія',
        'Катерина', 'Олена', 'Єлизавета', 'Інна', 'Ірина', 'Катерина', 'Кіра', 'Лариса', 'Любов', 'Людмила', 'Маргарита', 'Марина',
        'Марія', 'Надія', 'Наташа', 'Ніна', 'Оксана', 'Ольга', 'Поліна', 'Раїса', 'Світлана', 'Софія', 'Тамара', 'Тетяна',
        'Юлія', 'Ярослава'
    );

    protected static \$middleNameMale = array(
        'Олександрович', 'Олексійович', 'Андрійович', 'Євгенович', 'Сергійович', 'Іванович',
        'Федорович', 'Тарасович', 'Васильович', 'Романович', 'Петрович', 'Миколайович',
        'Борисович', 'Йосипович', 'Михайлович', 'Валентинович', 'Янович', 'Анатолійович',
        'Євгенійович', 'Володимирович'
    );

    protected static \$middleNameFemale = array(
        'Олександрівна', 'Олексіївна', 'Андріївна', 'Євгенівна', 'Сергіївна', 'Іванівна',
        'Федорівна', 'Тарасівна', 'Василівна', 'Романівна', 'Петрівна', 'Миколаївна',
        'Борисівна', 'Йосипівна', 'Михайлівна', 'Валентинівна', 'Янівна', 'Анатоліївна',
        'Євгеніївна', 'Володимирівна'
    );

    protected static \$lastName = array(
        'Антоненко', 'Василенко', 'Васильчук', 'Васильєв', 'Гнатюк', 'Дмитренко',
        'Захарчук', 'Іванченко', 'Микитюк', 'Павлюк', 'Панасюк', 'Петренко', 'Романченко',
        'Сергієнко', 'Середа', 'Таращук', 'Боднаренко', 'Броваренко', 'Броварчук', 'Кравченко',
        'Кравчук', 'Крамаренко', 'Крамарчук', 'Мельниченко', 'Мірошниченко', 'Шевченко', 'Шевчук',
        'Шинкаренко', 'Пономаренко', 'Пономарчук', 'Лисенко'
    );

    /**
     * Return male middle name
     *
     * @example 'Іванович'
     * @access public
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Івановна'
     * @access public
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  71 => 13,  60 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\uk_UA;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    );

    protected static \$femaleNameFormats = array(
        '{{lastName}} {{firstNameFemale}} {{middleNameFemale}}',
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
    );

    protected static \$firstNameMale = array(
        'Євген', 'Адам', 'Олександр', 'Олексій', 'Анатолій', 'Андрій', 'Антон', 'Артем', 'Артур', 'Борис', 'Вадим', 'Валентин', 'Валерій',
        'Василь', 'Віталій', 'Володимир', 'Владислав', 'Геннадій', 'Георгій', 'Григорій', 'Данил', 'Данило', 'Денис', 'Дмитро',
        'Євген', 'Іван', 'Ігор', 'Йосип', 'Кирил', 'Костянтин', 'Лев', 'Леонід', 'Максим', 'Мирослав', 'Михайло', 'Назар',
        'Микита', 'Микола', 'Олег', 'Павло', 'Роман', 'Руслан', 'Сергій', 'Станіслав', 'Тарас', 'Тимофій', 'Федір',
        'Юрій', 'Ярослав', 'Богдан', 'Болеслав', 'B\\'ячеслав',' Bалерій',' Bсеволод',' Bіктор', 'Ілля'
    );

    protected static \$firstNameFemale = array(
        'Олександра', 'Олена', 'Алла', 'Анастасія', 'Анна', 'Валентина', 'Валерія', 'Віра', 'Вікторія', 'Галина', 'Дар\\'я', 'Діана', 'Євгенія',
        'Катерина', 'Олена', 'Єлизавета', 'Інна', 'Ірина', 'Катерина', 'Кіра', 'Лариса', 'Любов', 'Людмила', 'Маргарита', 'Марина',
        'Марія', 'Надія', 'Наташа', 'Ніна', 'Оксана', 'Ольга', 'Поліна', 'Раїса', 'Світлана', 'Софія', 'Тамара', 'Тетяна',
        'Юлія', 'Ярослава'
    );

    protected static \$middleNameMale = array(
        'Олександрович', 'Олексійович', 'Андрійович', 'Євгенович', 'Сергійович', 'Іванович',
        'Федорович', 'Тарасович', 'Васильович', 'Романович', 'Петрович', 'Миколайович',
        'Борисович', 'Йосипович', 'Михайлович', 'Валентинович', 'Янович', 'Анатолійович',
        'Євгенійович', 'Володимирович'
    );

    protected static \$middleNameFemale = array(
        'Олександрівна', 'Олексіївна', 'Андріївна', 'Євгенівна', 'Сергіївна', 'Іванівна',
        'Федорівна', 'Тарасівна', 'Василівна', 'Романівна', 'Петрівна', 'Миколаївна',
        'Борисівна', 'Йосипівна', 'Михайлівна', 'Валентинівна', 'Янівна', 'Анатоліївна',
        'Євгеніївна', 'Володимирівна'
    );

    protected static \$lastName = array(
        'Антоненко', 'Василенко', 'Васильчук', 'Васильєв', 'Гнатюк', 'Дмитренко',
        'Захарчук', 'Іванченко', 'Микитюк', 'Павлюк', 'Панасюк', 'Петренко', 'Романченко',
        'Сергієнко', 'Середа', 'Таращук', 'Боднаренко', 'Броваренко', 'Броварчук', 'Кравченко',
        'Кравчук', 'Крамаренко', 'Крамарчук', 'Мельниченко', 'Мірошниченко', 'Шевченко', 'Шевчук',
        'Шинкаренко', 'Пономаренко', 'Пономарчук', 'Лисенко'
    );

    /**
     * Return male middle name
     *
     * @example 'Іванович'
     * @access public
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Івановна'
     * @access public
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
", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Person.php");
    }
}
