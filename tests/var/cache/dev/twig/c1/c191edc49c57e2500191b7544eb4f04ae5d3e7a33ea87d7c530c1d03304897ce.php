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

/* vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Person.php */
class __TwigTemplate_2d5ca8bbaa2ffbbecd50a682e93748ba79be02dfb6109da1de4298a99e8ccb1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pl_PL;

/**
 * Most popular first and last names published by Ministry of the Interior:
 * @link https://msw.gov.pl/pl/sprawy-obywatelskie/ewidencja-ludnosci-dowo/statystyki-imion-i-nazw
 */
class Person extends \\Faker\\Provider\\Person
{
    protected static \$lastNameFormat = array(
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$maleNameFormats = array(
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstNameMale = array(
        'Adam', 'Adrian', 'Alan', 'Albert', 'Aleks', 'Aleksander', 'Alex', 'Andrzej', 'Antoni', 'Arkadiusz', 'Artur',
        'Bartek', 'Błażej', 'Borys', 'Bruno', 'Cezary', 'Cyprian', 'Damian', 'Daniel', 'Dariusz', 'Dawid', 'Dominik',
        'Emil', 'Ernest', 'Eryk', 'Fabian', 'Filip', 'Franciszek', 'Fryderyk', 'Gabriel', 'Grzegorz', 'Gustaw', 'Hubert',
        'Ignacy', 'Igor', 'Iwo', 'Jacek', 'Jakub', 'Jan', 'Jeremi', 'Jerzy', 'Jędrzej', 'Józef', 'Julian', 'Juliusz',
        'Kacper', 'Kajetan', 'Kamil', 'Karol', 'Kazimierz', 'Konrad', 'Konstanty', 'Kornel', 'Krystian', 'Krzysztof', 'Ksawery',
        'Leon', 'Leonard', 'Łukasz', 'Maciej', 'Maks', 'Maksymilian', 'Marcel', 'Marcin', 'Marek', 'Mariusz', 'Mateusz', 'Maurycy',
        'Michał', 'Mieszko', 'Mikołaj', 'Miłosz', 'Natan', 'Nataniel', 'Nikodem', 'Norbert', 'Olaf', 'Olgierd', 'Oliwier', 'Oskar',
        'Patryk', 'Paweł', 'Piotr', 'Przemysław', 'Radosław', 'Rafał', 'Robert', 'Ryszard', 'Sebastian', 'Stanisław', 'Stefan', 'Szymon',
        'Tadeusz', 'Tomasz', 'Tymon', 'Tymoteusz', 'Wiktor', 'Witold', 'Wojciech',
    );

    protected static \$firstNameFemale = array(
        'Ada', 'Adrianna', 'Agata', 'Agnieszka', 'Aleksandra', 'Alicja', 'Amelia', 'Anastazja', 'Angelika', 'Aniela', 'Anita',
        'Anna', 'Anna', 'Antonina', 'Apolonia', 'Aurelia', 'Barbara', 'Bianka', 'Blanka', 'Dagmara', 'Daria', 'Dominika', 'Dorota',
        'Eliza', 'Elżbieta', 'Emilia', 'Ewa', 'Ewelina', 'Gabriela', 'Hanna', 'Helena', 'Ida', 'Iga', 'Inga', 'Izabela',
        'Jagoda', 'Janina', 'Joanna', 'Julia', 'Julianna', 'Julita', 'Justyna', 'Kaja', 'Kalina', 'Kamila', 'Karina', 'Karolina',
        'Katarzyna', 'Kinga', 'Klara', 'Klaudia', 'Kornelia', 'Krystyna', 'Laura', 'Lena', 'Lidia', 'Liliana', 'Liwia', 'Łucja',
        'Magdalena', 'Maja', 'Malwina', 'Małgorzata', 'Marcelina', 'Maria', 'Marianna', 'Marika', 'Marta', 'Martyna', 'Matylda',
        'Melania', 'Michalina', 'Milena', 'Monika', 'Nadia', 'Natalia', 'Natasza', 'Nela', 'Nicole', 'Nikola', 'Nina',
        'Olga', 'Oliwia', 'Patrycja', 'Paulina', 'Pola', 'Roksana', 'Rozalia', 'Róża', 'Sandra', 'Sara', 'Sonia', 'Sylwia',
        'Tola', 'Urszula', 'Weronika', 'Wiktoria', 'Zofia', 'Zuzanna',
    );

    protected static \$lastNameMale = array(
        'Adamczyk', 'Adamski', 'Andrzejewski', 'Baran', 'Baranowski', 'Bąk', 'Błaszczyk', 'Borkowski', 'Borowski', 'Brzeziński',
        'Chmielewski', 'Cieślak', 'Czarnecki', 'Czerwiński', 'Dąbrowski', 'Duda', 'Dudek', 'Gajewski', 'Głowacki', 'Górski', 'Grabowski',
        'Jabłoński', 'Jakubowski', 'Jankowski', 'Jasiński', 'Jaworski', 'Kaczmarczyk', 'Kaczmarek', 'Kalinowski', 'Kamiński', 'Kaźmierczak',
        'Kołodziej', 'Konieczny', 'Kowalczyk', 'Kowalski', 'Kozłowski', 'Krajewski', 'Krawczyk', 'Król', 'Krupa', 'Kubiak', 'Kucharski', 'Kwiatkowski',
        'Laskowski', 'Lewandowski', 'Lis', 'Maciejewski', 'Majewski', 'Makowski', 'Malinowski', 'Marciniak', 'Mazur', 'Mazurek', 'Michalak',
        'Michalski', 'Mróz', 'Nowak', 'Nowakowski', 'Nowicki', 'Olszewski', 'Ostrowski', 'Pawlak', 'Pawłowski', 'Pietrzak', 'Piotrowski', 'Przybylski',
        'Rutkowski', 'Sadowski', 'Sawicki', 'Sikora', 'Sikorski', 'Sobczak', 'Sokołowski', 'Stępień', 'Szczepański', 'Szewczyk', 'Szulc', 'Szymański', 'Szymczak',
        'Tomaszewski', 'Urbański', 'Walczak', 'Wasilewski', 'Wieczorek', 'Wilk', 'Wiśniewski', 'Witkowski', 'Włodarczyk', 'Wojciechowski',
        'Woźniak', 'Wójcik', 'Wróbel', 'Wróblewski', 'Wysocki', 'Zając', 'Zakrzewski', 'Zalewski', 'Zawadzki', 'Zieliński', 'Ziółkowski',
    );

    protected static \$lastNameFemale = array(
        'Adamczyk', 'Adamska', 'Andrzejewska', 'Baran', 'Baranowska', 'Bąk', 'Błaszczyk', 'Borkowska', 'Borowska', 'Brzezińska',
        'Chmielewska', 'Cieślak', 'Czarnecka', 'Czerwińska', 'Dąbrowska', 'Duda', 'Dudek', 'Gajewska', 'Głowacka', 'Górecka', 'Górska', 'Grabowska',
        'Jabłońska', 'Jakubowska', 'Jankowska', 'Jasińska', 'Jaworska', 'Kaczmarczyk', 'Kaczmarek', 'Kalinowska', 'Kamińska', 'Kaźmierczak',
        'Kołodziej', 'Kowalczyk', 'Kowalska', 'Kozłowska', 'Krajewska', 'Krawczyk', 'Król', 'Krupa', 'Kubiak', 'Kucharska', 'Kwiatkowska',
        'Laskowska', 'Lewandowska', 'Lis', 'Maciejewska', 'Majewska', 'Makowska', 'Malinowska', 'Marciniak', 'Mazur', 'Mazurek', 'Michalak',
        'Michalska', 'Mróz', 'Nowak', 'Nowakowska', 'Nowicka', 'Olszewska', 'Ostrowska', 'Pawlak', 'Pawłowska', 'Pietrzak', 'Piotrowska', 'Przybylska',
        'Rutkowska', 'Sadowska', 'Sawicka', 'Sikora', 'Sikorska', 'Sobczak', 'Sokołowska', 'Stępień', 'Szczepańska', 'Szewczyk', 'Szulc', 'Szymańska', 'Szymczak',
        'Tomaszewska', 'Urbańska', 'Walczak', 'Wasilewska', 'Wieczorek', 'Wilk', 'Wiśniewska', 'Witkowska', 'Włodarczyk', 'Wojciechowska',
        'Woźniak', 'Wójcik', 'Wróbel', 'Wróblewska', 'Wysocka', 'Zając', 'Zakrzewska', 'Zalewska', 'Zawadzka', 'Zielińska', 'Ziółkowska',
    );

    /**
     *
     * Unisex academic degree
     *
     * @var string
     */
    protected static \$title = array('mgr','inż.', 'dr', 'doc.');

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @example 'Adamczyk'
     */
    public function lastName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$lastNameFormat));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::\$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::\$lastNameFemale);
    }

    public function title(\$gender = null)
    {
        return static::randomElement(static::\$title);
    }

    /**
     * replaced by specific unisex Polish title
     */
    public static function titleMale()
    {
        return static::title();
    }

    /**
     * replaced by specific unisex Polish title
     */
    public static function titleFemale()
    {
        return static::title();
    }

    /**
     * PESEL - Universal Electronic System for Registration of the Population
     * @link http://en.wikipedia.org/wiki/PESEL
     * @param  DateTime \$birthdate
     * @param  string   \$sex       M for male or F for female
     * @return string   11 digit number, like 44051401358
     */
    public static function pesel(\$birthdate = null, \$sex = null)
    {
        if (\$birthdate === null) {
            \$birthdate = \\Faker\\Provider\\DateTime::dateTimeThisCentury();
        }

        \$weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
        \$length = count(\$weights);

        \$fullYear = (int) \$birthdate->format('Y');
        \$year = (int) \$birthdate->format('y');
        \$month = \$birthdate->format('m') + (((int) (\$fullYear/100) - 14) % 5) * 20;
        \$day = \$birthdate->format('d');

        \$result = array((int) (\$year / 10), \$year % 10, (int) (\$month / 10), \$month % 10, (int) (\$day / 10), \$day % 10);

        for (\$i = 6; \$i < \$length; \$i++) {
            \$result[\$i] = static::randomDigit();
        }

        \$result[\$length - 1] |= 1;
        if (\$sex == \"F\") {
            \$result[\$length - 1] -= 1;
        }

        \$checksum = 0;
        for (\$i = 0; \$i < \$length; \$i++) {
            \$checksum += \$weights[\$i] * \$result[\$i];
        }
        \$checksum = (10 - (\$checksum % 10)) % 10;
        \$result[] = \$checksum;

        return implode('', \$result);
    }

    /**
     * National Identity Card number
     * @link http://en.wikipedia.org/wiki/Polish_National_Identity_Card
     * @return string 3 letters and 6 digits, like ABA300000
     */
    public static function personalIdentityNumber()
    {
        \$range = str_split(\"ABCDEFGHIJKLMNPRSTUVWXYZ\");
        \$low = array(\"A\", static::randomElement(\$range), static::randomElement(\$range));
        \$high = array(static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit());
        \$weights = array(7, 3, 1, 7, 3, 1, 7, 3);
        \$checksum = 0;
        for (\$i = 0, \$size = count(\$low); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i] * (ord(\$low[\$i]) - 55);
        }
        for (\$i = 0, \$size = count(\$high); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i+3] * \$high[\$i];
        }
        \$checksum %= 10;

        return implode('', \$low).\$checksum.implode('', \$high);
    }

    /**
     * Taxpayer Identification Number (NIP in Polish)
     * @link http://en.wikipedia.org/wiki/PESEL#Other_identifiers
     * @link http://pl.wikipedia.org/wiki/NIP
     * @return string 10 digit number
     */
    public static function taxpayerIdentificationNumber()
    {
        \$weights = array(6, 5, 7, 2, 3, 4, 5, 6, 7);
        \$result = array();
        do {
            \$result = array(
                static::randomDigitNotNull(), static::randomDigitNotNull(), static::randomDigitNotNull(),
                static::randomDigit(), static::randomDigit(), static::randomDigit(),
                static::randomDigit(), static::randomDigit(), static::randomDigit(),
            );
            \$checksum = 0;
            for (\$i = 0, \$size = count(\$result); \$i < \$size; \$i++) {
                \$checksum += \$weights[\$i] * \$result[\$i];
            }
            \$checksum %= 11;
        } while (\$checksum == 10);
        \$result[] = \$checksum;

        return implode('', \$result);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 31,  138 => 30,  130 => 29,  124 => 28,  118 => 27,  112 => 26,  99 => 22,  93 => 21,  85 => 20,  79 => 19,  73 => 18,  67 => 17,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pl_PL;

/**
 * Most popular first and last names published by Ministry of the Interior:
 * @link https://msw.gov.pl/pl/sprawy-obywatelskie/ewidencja-ludnosci-dowo/statystyki-imion-i-nazw
 */
class Person extends \\Faker\\Provider\\Person
{
    protected static \$lastNameFormat = array(
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    );

    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{title}} {{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{title}} {{title}} {{firstNameMale}} {{lastNameMale}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{title}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{title}} {{title}} {{firstNameFemale}} {{lastNameFemale}}',
    );

    protected static \$firstNameMale = array(
        'Adam', 'Adrian', 'Alan', 'Albert', 'Aleks', 'Aleksander', 'Alex', 'Andrzej', 'Antoni', 'Arkadiusz', 'Artur',
        'Bartek', 'Błażej', 'Borys', 'Bruno', 'Cezary', 'Cyprian', 'Damian', 'Daniel', 'Dariusz', 'Dawid', 'Dominik',
        'Emil', 'Ernest', 'Eryk', 'Fabian', 'Filip', 'Franciszek', 'Fryderyk', 'Gabriel', 'Grzegorz', 'Gustaw', 'Hubert',
        'Ignacy', 'Igor', 'Iwo', 'Jacek', 'Jakub', 'Jan', 'Jeremi', 'Jerzy', 'Jędrzej', 'Józef', 'Julian', 'Juliusz',
        'Kacper', 'Kajetan', 'Kamil', 'Karol', 'Kazimierz', 'Konrad', 'Konstanty', 'Kornel', 'Krystian', 'Krzysztof', 'Ksawery',
        'Leon', 'Leonard', 'Łukasz', 'Maciej', 'Maks', 'Maksymilian', 'Marcel', 'Marcin', 'Marek', 'Mariusz', 'Mateusz', 'Maurycy',
        'Michał', 'Mieszko', 'Mikołaj', 'Miłosz', 'Natan', 'Nataniel', 'Nikodem', 'Norbert', 'Olaf', 'Olgierd', 'Oliwier', 'Oskar',
        'Patryk', 'Paweł', 'Piotr', 'Przemysław', 'Radosław', 'Rafał', 'Robert', 'Ryszard', 'Sebastian', 'Stanisław', 'Stefan', 'Szymon',
        'Tadeusz', 'Tomasz', 'Tymon', 'Tymoteusz', 'Wiktor', 'Witold', 'Wojciech',
    );

    protected static \$firstNameFemale = array(
        'Ada', 'Adrianna', 'Agata', 'Agnieszka', 'Aleksandra', 'Alicja', 'Amelia', 'Anastazja', 'Angelika', 'Aniela', 'Anita',
        'Anna', 'Anna', 'Antonina', 'Apolonia', 'Aurelia', 'Barbara', 'Bianka', 'Blanka', 'Dagmara', 'Daria', 'Dominika', 'Dorota',
        'Eliza', 'Elżbieta', 'Emilia', 'Ewa', 'Ewelina', 'Gabriela', 'Hanna', 'Helena', 'Ida', 'Iga', 'Inga', 'Izabela',
        'Jagoda', 'Janina', 'Joanna', 'Julia', 'Julianna', 'Julita', 'Justyna', 'Kaja', 'Kalina', 'Kamila', 'Karina', 'Karolina',
        'Katarzyna', 'Kinga', 'Klara', 'Klaudia', 'Kornelia', 'Krystyna', 'Laura', 'Lena', 'Lidia', 'Liliana', 'Liwia', 'Łucja',
        'Magdalena', 'Maja', 'Malwina', 'Małgorzata', 'Marcelina', 'Maria', 'Marianna', 'Marika', 'Marta', 'Martyna', 'Matylda',
        'Melania', 'Michalina', 'Milena', 'Monika', 'Nadia', 'Natalia', 'Natasza', 'Nela', 'Nicole', 'Nikola', 'Nina',
        'Olga', 'Oliwia', 'Patrycja', 'Paulina', 'Pola', 'Roksana', 'Rozalia', 'Róża', 'Sandra', 'Sara', 'Sonia', 'Sylwia',
        'Tola', 'Urszula', 'Weronika', 'Wiktoria', 'Zofia', 'Zuzanna',
    );

    protected static \$lastNameMale = array(
        'Adamczyk', 'Adamski', 'Andrzejewski', 'Baran', 'Baranowski', 'Bąk', 'Błaszczyk', 'Borkowski', 'Borowski', 'Brzeziński',
        'Chmielewski', 'Cieślak', 'Czarnecki', 'Czerwiński', 'Dąbrowski', 'Duda', 'Dudek', 'Gajewski', 'Głowacki', 'Górski', 'Grabowski',
        'Jabłoński', 'Jakubowski', 'Jankowski', 'Jasiński', 'Jaworski', 'Kaczmarczyk', 'Kaczmarek', 'Kalinowski', 'Kamiński', 'Kaźmierczak',
        'Kołodziej', 'Konieczny', 'Kowalczyk', 'Kowalski', 'Kozłowski', 'Krajewski', 'Krawczyk', 'Król', 'Krupa', 'Kubiak', 'Kucharski', 'Kwiatkowski',
        'Laskowski', 'Lewandowski', 'Lis', 'Maciejewski', 'Majewski', 'Makowski', 'Malinowski', 'Marciniak', 'Mazur', 'Mazurek', 'Michalak',
        'Michalski', 'Mróz', 'Nowak', 'Nowakowski', 'Nowicki', 'Olszewski', 'Ostrowski', 'Pawlak', 'Pawłowski', 'Pietrzak', 'Piotrowski', 'Przybylski',
        'Rutkowski', 'Sadowski', 'Sawicki', 'Sikora', 'Sikorski', 'Sobczak', 'Sokołowski', 'Stępień', 'Szczepański', 'Szewczyk', 'Szulc', 'Szymański', 'Szymczak',
        'Tomaszewski', 'Urbański', 'Walczak', 'Wasilewski', 'Wieczorek', 'Wilk', 'Wiśniewski', 'Witkowski', 'Włodarczyk', 'Wojciechowski',
        'Woźniak', 'Wójcik', 'Wróbel', 'Wróblewski', 'Wysocki', 'Zając', 'Zakrzewski', 'Zalewski', 'Zawadzki', 'Zieliński', 'Ziółkowski',
    );

    protected static \$lastNameFemale = array(
        'Adamczyk', 'Adamska', 'Andrzejewska', 'Baran', 'Baranowska', 'Bąk', 'Błaszczyk', 'Borkowska', 'Borowska', 'Brzezińska',
        'Chmielewska', 'Cieślak', 'Czarnecka', 'Czerwińska', 'Dąbrowska', 'Duda', 'Dudek', 'Gajewska', 'Głowacka', 'Górecka', 'Górska', 'Grabowska',
        'Jabłońska', 'Jakubowska', 'Jankowska', 'Jasińska', 'Jaworska', 'Kaczmarczyk', 'Kaczmarek', 'Kalinowska', 'Kamińska', 'Kaźmierczak',
        'Kołodziej', 'Kowalczyk', 'Kowalska', 'Kozłowska', 'Krajewska', 'Krawczyk', 'Król', 'Krupa', 'Kubiak', 'Kucharska', 'Kwiatkowska',
        'Laskowska', 'Lewandowska', 'Lis', 'Maciejewska', 'Majewska', 'Makowska', 'Malinowska', 'Marciniak', 'Mazur', 'Mazurek', 'Michalak',
        'Michalska', 'Mróz', 'Nowak', 'Nowakowska', 'Nowicka', 'Olszewska', 'Ostrowska', 'Pawlak', 'Pawłowska', 'Pietrzak', 'Piotrowska', 'Przybylska',
        'Rutkowska', 'Sadowska', 'Sawicka', 'Sikora', 'Sikorska', 'Sobczak', 'Sokołowska', 'Stępień', 'Szczepańska', 'Szewczyk', 'Szulc', 'Szymańska', 'Szymczak',
        'Tomaszewska', 'Urbańska', 'Walczak', 'Wasilewska', 'Wieczorek', 'Wilk', 'Wiśniewska', 'Witkowska', 'Włodarczyk', 'Wojciechowska',
        'Woźniak', 'Wójcik', 'Wróbel', 'Wróblewska', 'Wysocka', 'Zając', 'Zakrzewska', 'Zalewska', 'Zawadzka', 'Zielińska', 'Ziółkowska',
    );

    /**
     *
     * Unisex academic degree
     *
     * @var string
     */
    protected static \$title = array('mgr','inż.', 'dr', 'doc.');

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @example 'Adamczyk'
     */
    public function lastName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$lastNameFormat));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::\$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::\$lastNameFemale);
    }

    public function title(\$gender = null)
    {
        return static::randomElement(static::\$title);
    }

    /**
     * replaced by specific unisex Polish title
     */
    public static function titleMale()
    {
        return static::title();
    }

    /**
     * replaced by specific unisex Polish title
     */
    public static function titleFemale()
    {
        return static::title();
    }

    /**
     * PESEL - Universal Electronic System for Registration of the Population
     * @link http://en.wikipedia.org/wiki/PESEL
     * @param  DateTime \$birthdate
     * @param  string   \$sex       M for male or F for female
     * @return string   11 digit number, like 44051401358
     */
    public static function pesel(\$birthdate = null, \$sex = null)
    {
        if (\$birthdate === null) {
            \$birthdate = \\Faker\\Provider\\DateTime::dateTimeThisCentury();
        }

        \$weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
        \$length = count(\$weights);

        \$fullYear = (int) \$birthdate->format('Y');
        \$year = (int) \$birthdate->format('y');
        \$month = \$birthdate->format('m') + (((int) (\$fullYear/100) - 14) % 5) * 20;
        \$day = \$birthdate->format('d');

        \$result = array((int) (\$year / 10), \$year % 10, (int) (\$month / 10), \$month % 10, (int) (\$day / 10), \$day % 10);

        for (\$i = 6; \$i < \$length; \$i++) {
            \$result[\$i] = static::randomDigit();
        }

        \$result[\$length - 1] |= 1;
        if (\$sex == \"F\") {
            \$result[\$length - 1] -= 1;
        }

        \$checksum = 0;
        for (\$i = 0; \$i < \$length; \$i++) {
            \$checksum += \$weights[\$i] * \$result[\$i];
        }
        \$checksum = (10 - (\$checksum % 10)) % 10;
        \$result[] = \$checksum;

        return implode('', \$result);
    }

    /**
     * National Identity Card number
     * @link http://en.wikipedia.org/wiki/Polish_National_Identity_Card
     * @return string 3 letters and 6 digits, like ABA300000
     */
    public static function personalIdentityNumber()
    {
        \$range = str_split(\"ABCDEFGHIJKLMNPRSTUVWXYZ\");
        \$low = array(\"A\", static::randomElement(\$range), static::randomElement(\$range));
        \$high = array(static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit());
        \$weights = array(7, 3, 1, 7, 3, 1, 7, 3);
        \$checksum = 0;
        for (\$i = 0, \$size = count(\$low); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i] * (ord(\$low[\$i]) - 55);
        }
        for (\$i = 0, \$size = count(\$high); \$i < \$size; \$i++) {
            \$checksum += \$weights[\$i+3] * \$high[\$i];
        }
        \$checksum %= 10;

        return implode('', \$low).\$checksum.implode('', \$high);
    }

    /**
     * Taxpayer Identification Number (NIP in Polish)
     * @link http://en.wikipedia.org/wiki/PESEL#Other_identifiers
     * @link http://pl.wikipedia.org/wiki/NIP
     * @return string 10 digit number
     */
    public static function taxpayerIdentificationNumber()
    {
        \$weights = array(6, 5, 7, 2, 3, 4, 5, 6, 7);
        \$result = array();
        do {
            \$result = array(
                static::randomDigitNotNull(), static::randomDigitNotNull(), static::randomDigitNotNull(),
                static::randomDigit(), static::randomDigit(), static::randomDigit(),
                static::randomDigit(), static::randomDigit(), static::randomDigit(),
            );
            \$checksum = 0;
            for (\$i = 0, \$size = count(\$result); \$i < \$size; \$i++) {
                \$checksum += \$weights[\$i] * \$result[\$i];
            }
            \$checksum %= 11;
        } while (\$checksum == 10);
        \$result[] = \$checksum;

        return implode('', \$result);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pl_PL/Person.php");
    }
}
