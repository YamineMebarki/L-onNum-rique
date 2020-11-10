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

/* vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Person.php */
class __TwigTemplate_7d1b5a1744daea55d30b19aa1319b526c30768ab0fd9588ff26cd8a710552abf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\hu_HU;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        /* ..né*/
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleNe"]) || array_key_exists("firstNameMaleNe", $context) ? $context["firstNameMaleNe"] : (function () { throw new RuntimeError('Variable "firstNameMaleNe" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleNe"]) || array_key_exists("firstNameMaleNe", $context) ? $context["firstNameMaleNe"] : (function () { throw new RuntimeError('Variable "firstNameMaleNe" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstNameMale = array(
        'Albert', 'Attila', 'Balázs', 'Bence', 'Botond', 'Dorián', 'Endre', 'Ernő', 'Gábor', 'Géza', 'Imre', 'István',
        'Kevin', 'Kornél', 'Kristóf', 'László', 'Milán', 'Noel', 'Olivér', 'Ottó', 'Patrik', 'Péter', 'Richárd', 'Rudolf',
        'Sándor', 'Vilmos', 'Vince', 'Zoltán', 'Zsolt', 'Ádám', 'Ármin', 'Áron', 'Antal', 'Barna', 'Barnabás', 'Bendegúz',
        'Benedek', 'Hunor', 'Jenő', 'János', 'Mihály', 'Mátyás', 'Szervác', 'Zsombor', 'Zétény', 'Árpád',
    );

    protected static \$firstNameMaleNe = array(
        'Albertné', 'Attiláné', 'Balázsné', 'Bencéné', 'Botondné', 'Doriánné', 'Endrené', 'Ernőné', 'Gáborné', 'Gézané', 'Imréné', 'Istvánné',
        'Kevinné', 'Kornélné', 'Kristófné', 'Lászlóné', 'Milánné', 'Noelné', 'Olivérné', 'Ottóné', 'Patrikné', 'Péterné', 'Richárdné', 'Rudolfné',
        'Sándorné', 'Vilmosné', 'Vincéné', 'Zoltánné', 'Zsoltné', 'Ádámné', 'Árminné', 'Áronné', 'Antalné', 'Barnáné', 'Barnabásné', 'Bendegúz',
        'Benedekné', 'Hunorné', 'Jenőné', 'Jánosné', 'Mihályné', 'Mátyásné', 'Szervácné', 'Zsomborné', 'Zétényné', 'Árpádné',
    );

    protected static \$firstNameFemale = array(
        'Adél', 'Alexa', 'Andrea', 'Angéla', 'Anikó', 'Beatrix', 'Bettina', 'Dalma', 'Dorina', 'Dorottya', 'Evelin', 'Fanni', 'Flóra', 'Gabriella',
        'Georgina', 'Gitta', 'Gizella', 'Gréta', 'Henrietta', 'Izabella', 'Johanna', 'Judit', 'Julianna', 'Jázmin', 'Kata', 'Katalin',
        'Katinka', 'Klaudia', 'Kíra', 'Liliána', 'Linda', 'Liza', 'Léna', 'Lívia', 'Maja', 'Marianna', 'Marietta', 'Martina',
        'Mia', 'Milla', 'Mirella', 'Mária', 'Márton', 'Míra', 'Nikoletta', 'Olívia', 'Patrícia', 'Ramóna', 'Rebeka', 'Soma',
        'Szandra', 'Sára', 'Valéria', 'Zita', 'Aranka', 'Boróka', 'Boglárka', 'Csenge', 'Emőke', 'Erzsébet', 'Hanga', 'Henriett',
        'Kincső', 'Panna', 'Szabina', 'Szonja', 'Virág', 'Zsóka',
    );

    protected static \$lastName = array(
        'Antal', 'Bakos', 'Balla', 'Balog', 'Balogh', 'Balázs', 'Barna', 'Barta', 'Biró', 'Bodnár', 'Bogdán', 'Bognár', 'Borbély', 'Boros', 'Budai', 'Bálint', 'Csonka', 'Deák', 'Dobos', 'Dudás', 'Faragó', 'Farkas', 'Fazekas', 'Fehér', 'Fekete', 'Fodor', 'Fábián', 'Fülöp', 'Gulyás', 'Gál', 'Gáspár', 'Hajdu', 'Halász', 'Hegedüs', 'Hegedűs', 'Horváth', 'Illés', 'Jakab', 'Juhász', 'Jónás', 'Katona', 'Kelemen', 'Kerekes', 'Király', 'Kis', 'Kiss', 'Kocsis', 'Kovács', 'Kozma', 'Lakatos', 'Lengyel', 'Lukács', 'László', 'Magyar', 'Major', 'Molnár', 'Máté', 'Mészáros', 'Nagy', 'Nemes', 'Novák', 'Németh', 'Oláh', 'Orbán', 'Orosz', 'Orsós', 'Pap', 'Papp', 'Pataki', 'Pintér', 'Pál', 'Pásztor', 'Péter', 'Rácz', 'Simon', 'Sipos', 'Somogyi', 'Soós', 'Szabó', 'Szalai', 'Szekeres', 'Szilágyi', 'Székely', 'Szücs', 'Szőke', 'Szűcs', 'Sándor', 'Takács', 'Tamás', 'Tóth', 'Török', 'Varga', 'Vass', 'Veres', 'Vincze', 'Virág', 'Váradi', 'Végh', 'Vörös'
    );

    protected static \$title = array('Dr.', 'Prof.', 'id.', 'ifj.');

    private static \$suffix = array('PhD');

    public function title(\$gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex hungarian title
     */
    public static function titleMale()
    {
        return static::randomElement(static::\$title);
    }

    /**
     * specific Hungarian name format for females after marriage
     */
    public static function firstNameMaleNe()
    {
        return static::randomElement(static::\$firstNameMaleNe);
    }

    /**
     * replaced by specific unisex hungarian title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 21,  120 => 20,  109 => 18,  101 => 17,  93 => 16,  87 => 15,  74 => 11,  66 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\hu_HU;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{lastName}} {{firstNameMale}}',
        '{{title}} {{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}} {{suffix}}',
        '{{title}} {{lastName}} {{firstNameMale}} {{suffix}}',
    );

    protected static \$femaleNameFormats = array(
        '{{lastName}} {{firstNameFemale}}',
        '{{title}} {{lastName}} {{firstNameFemale}}',
        '{{lastName}} {{firstNameFemale}} {{suffix}}',
        '{{title}} {{lastName}} {{firstNameFemale}} {{suffix}}',
        /* ..né*/
        '{{lastName}} {{firstNameMaleNe}}',
        '{{title}} {{lastName}} {{firstNameMaleNe}}',
    );

    protected static \$firstNameMale = array(
        'Albert', 'Attila', 'Balázs', 'Bence', 'Botond', 'Dorián', 'Endre', 'Ernő', 'Gábor', 'Géza', 'Imre', 'István',
        'Kevin', 'Kornél', 'Kristóf', 'László', 'Milán', 'Noel', 'Olivér', 'Ottó', 'Patrik', 'Péter', 'Richárd', 'Rudolf',
        'Sándor', 'Vilmos', 'Vince', 'Zoltán', 'Zsolt', 'Ádám', 'Ármin', 'Áron', 'Antal', 'Barna', 'Barnabás', 'Bendegúz',
        'Benedek', 'Hunor', 'Jenő', 'János', 'Mihály', 'Mátyás', 'Szervác', 'Zsombor', 'Zétény', 'Árpád',
    );

    protected static \$firstNameMaleNe = array(
        'Albertné', 'Attiláné', 'Balázsné', 'Bencéné', 'Botondné', 'Doriánné', 'Endrené', 'Ernőné', 'Gáborné', 'Gézané', 'Imréné', 'Istvánné',
        'Kevinné', 'Kornélné', 'Kristófné', 'Lászlóné', 'Milánné', 'Noelné', 'Olivérné', 'Ottóné', 'Patrikné', 'Péterné', 'Richárdné', 'Rudolfné',
        'Sándorné', 'Vilmosné', 'Vincéné', 'Zoltánné', 'Zsoltné', 'Ádámné', 'Árminné', 'Áronné', 'Antalné', 'Barnáné', 'Barnabásné', 'Bendegúz',
        'Benedekné', 'Hunorné', 'Jenőné', 'Jánosné', 'Mihályné', 'Mátyásné', 'Szervácné', 'Zsomborné', 'Zétényné', 'Árpádné',
    );

    protected static \$firstNameFemale = array(
        'Adél', 'Alexa', 'Andrea', 'Angéla', 'Anikó', 'Beatrix', 'Bettina', 'Dalma', 'Dorina', 'Dorottya', 'Evelin', 'Fanni', 'Flóra', 'Gabriella',
        'Georgina', 'Gitta', 'Gizella', 'Gréta', 'Henrietta', 'Izabella', 'Johanna', 'Judit', 'Julianna', 'Jázmin', 'Kata', 'Katalin',
        'Katinka', 'Klaudia', 'Kíra', 'Liliána', 'Linda', 'Liza', 'Léna', 'Lívia', 'Maja', 'Marianna', 'Marietta', 'Martina',
        'Mia', 'Milla', 'Mirella', 'Mária', 'Márton', 'Míra', 'Nikoletta', 'Olívia', 'Patrícia', 'Ramóna', 'Rebeka', 'Soma',
        'Szandra', 'Sára', 'Valéria', 'Zita', 'Aranka', 'Boróka', 'Boglárka', 'Csenge', 'Emőke', 'Erzsébet', 'Hanga', 'Henriett',
        'Kincső', 'Panna', 'Szabina', 'Szonja', 'Virág', 'Zsóka',
    );

    protected static \$lastName = array(
        'Antal', 'Bakos', 'Balla', 'Balog', 'Balogh', 'Balázs', 'Barna', 'Barta', 'Biró', 'Bodnár', 'Bogdán', 'Bognár', 'Borbély', 'Boros', 'Budai', 'Bálint', 'Csonka', 'Deák', 'Dobos', 'Dudás', 'Faragó', 'Farkas', 'Fazekas', 'Fehér', 'Fekete', 'Fodor', 'Fábián', 'Fülöp', 'Gulyás', 'Gál', 'Gáspár', 'Hajdu', 'Halász', 'Hegedüs', 'Hegedűs', 'Horváth', 'Illés', 'Jakab', 'Juhász', 'Jónás', 'Katona', 'Kelemen', 'Kerekes', 'Király', 'Kis', 'Kiss', 'Kocsis', 'Kovács', 'Kozma', 'Lakatos', 'Lengyel', 'Lukács', 'László', 'Magyar', 'Major', 'Molnár', 'Máté', 'Mészáros', 'Nagy', 'Nemes', 'Novák', 'Németh', 'Oláh', 'Orbán', 'Orosz', 'Orsós', 'Pap', 'Papp', 'Pataki', 'Pintér', 'Pál', 'Pásztor', 'Péter', 'Rácz', 'Simon', 'Sipos', 'Somogyi', 'Soós', 'Szabó', 'Szalai', 'Szekeres', 'Szilágyi', 'Székely', 'Szücs', 'Szőke', 'Szűcs', 'Sándor', 'Takács', 'Tamás', 'Tóth', 'Török', 'Varga', 'Vass', 'Veres', 'Vincze', 'Virág', 'Váradi', 'Végh', 'Vörös'
    );

    protected static \$title = array('Dr.', 'Prof.', 'id.', 'ifj.');

    private static \$suffix = array('PhD');

    public function title(\$gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex hungarian title
     */
    public static function titleMale()
    {
        return static::randomElement(static::\$title);
    }

    /**
     * specific Hungarian name format for females after marriage
     */
    public static function firstNameMaleNe()
    {
        return static::randomElement(static::\$firstNameMaleNe);
    }

    /**
     * replaced by specific unisex hungarian title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/hu_HU/Person.php");
    }
}
