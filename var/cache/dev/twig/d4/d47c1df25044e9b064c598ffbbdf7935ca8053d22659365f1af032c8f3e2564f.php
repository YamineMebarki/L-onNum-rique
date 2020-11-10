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

/* vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Internet.php */
class __TwigTemplate_0030a2270c0fbedfd213ebb84455558f9c19e3d59920f48d186f0f37b15f7934 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fa_IR;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "##',
        '?";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$safeEmailTld = array(
        'com', 'ir', 'me', 'net', 'org',
    );

    /**
     * @link https://en.wikipedia.org/wiki/.ir
     */
    protected static \$tld = array(
        'biz', 'com', 'info', 'ac.ir', 'sch.ir', 'co.ir', 'ir', 'net', 'org',
    );

    /**
     * @link http://en.wikipedia.org/wiki/Category:Iranian-language_surnames
     */
    protected static \$lastNameAscii = array(
        'abdullahi', 'abbasi', 'abedini', 'ahadi', 'ahmadi', 'akbari', 'alizadeh', 'asadi',
        'baraghani', 'babaei',
        'chamran',
        'ebrahimi', 'esfahani',
        'fanaei', 'farahani', 'farsi', 'fekri',
        'ghasemi', 'ghorbani',
        'hamadani', 'hamidi', 'heidari', 'hijazi', 'husseini',
        'jahanbani', 'jalili', 'jamshidi', 'javadi',
        'kadivar', 'karimi', 'kashani', 'kazmi', 'khadem', 'khalaji', 'khomeini', 'khorsandi',
        'mahdavi', 'mahmoudi', 'mahmoudieh', 'majidi', 'mazanderani', 'mirzaei', 'mokri', 'mohammady', 'mousavi',
        'nabavi', 'naceri', 'nafisi', 'najafi', 'nalci', 'namazi', 'namdar', 'nariman', 'nazari', 'nili', 'norouzi',
        'pahlavi', 'paria', 'pashaei', 'pejman',
        'qazwini',
        'rahimi', 'rahmani', 'rajaei', 'ramadani', 'rashidi', 'rezaei',
        'salari', 'salehi', 'salemi', 'shahbazi', 'shahriari', 'shahidi', 'shirazi', 'shojaei', 'soleimani', 'soomekh', 'soroush',
        'tabatabaei', 'talebi', 'tousi',
        'yazdani', 'yazdi', 'yousefi',
        'zandi', 'zare',
    );

    /*
     * @link http://en.wikipedia.org/wiki/Persian_name
     */
    protected static \$firstNameAscii = array(
        'abbas', 'afshin', 'ahmad', 'ali', 'amir', 'anahita', 'anousheh', 'arash', 'ardeshir', 'arezu', 'aria', 'arian', 'arman', 'ashraf', 'atoosa', 'azadeh', 'azar',
        'babak', 'bahar', 'bahare', 'bardia', 'behnaz', 'benyamin', 'bita',
        'dalir', 'dariush', 'davoud', 'donya',
        'ebrahim', 'ehsan', 'eskandar', 'esmaeel',
        'farangis', 'farbod', 'farhad', 'farideh', 'farnaz', 'farrokh', 'farshid', 'farzaneh', 'fateme', 'fereshteh',
        'garshasp',
        'hanie', 'hashem', 'hirbod', 'hoda', 'hormoz', 'hossein',
        'jaleh', 'jamshid', 'javad',
        'kamran', 'karim', 'kasra', 'katayoun', 'kazem', 'khorshid', 'khosrow', 'kiana', 'kiarash', 'kourosh',
        'laleh', 'leila',
        'mahdi', 'mahmoud', 'mahshid', 'majid', 'manuchehr', 'marjan', 'maryam', 'marzban', 'massoud', 'mazdak', 'maziar', 'mehran', 'mehrdad', 'meysam', 'milad', 'mina', 'mithra', 'mohammad', 'mohsen', 'musa',
        'nasrin', 'nazanin', 'niloufar',
        'omid',
        'parastoo', 'parisa', 'parsa', 'parvin', 'parviz', 'payam', 'payvand', 'pedram', 'piruz', 'pouria',
        'ramin', 'reyhan', 'reza', 'roksaneh', 'rostam', 'roxana', 'roya',
        'sahar', 'saman', 'samir', 'sara', 'sassan', 'sepehr', 'sepideh', 'shahin', 'shahryar', 'shapour', 'shervin', 'shirin', 'simin', 'soheila', 'sohrab', 'soraya', 'soroush',
        'tara', 'taraneh', 'turan',
        'vahid',
        'yaghoub', 'yahya', 'yasamin', 'yasaman', 'younes', 'yousef',
        'zahra', 'zarine', 'zeynab', 'zhila',
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::\$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::\$firstNameAscii);
    }

    /**
     * @example 'ali.rezaei'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'ahmad.ir'
     */
    public function domainName()
    {
        return static::randomElement(static::\$lastNameAscii) . '.' . \$this->tld();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Internet.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fa_IR;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );

    protected static \$safeEmailTld = array(
        'com', 'ir', 'me', 'net', 'org',
    );

    /**
     * @link https://en.wikipedia.org/wiki/.ir
     */
    protected static \$tld = array(
        'biz', 'com', 'info', 'ac.ir', 'sch.ir', 'co.ir', 'ir', 'net', 'org',
    );

    /**
     * @link http://en.wikipedia.org/wiki/Category:Iranian-language_surnames
     */
    protected static \$lastNameAscii = array(
        'abdullahi', 'abbasi', 'abedini', 'ahadi', 'ahmadi', 'akbari', 'alizadeh', 'asadi',
        'baraghani', 'babaei',
        'chamran',
        'ebrahimi', 'esfahani',
        'fanaei', 'farahani', 'farsi', 'fekri',
        'ghasemi', 'ghorbani',
        'hamadani', 'hamidi', 'heidari', 'hijazi', 'husseini',
        'jahanbani', 'jalili', 'jamshidi', 'javadi',
        'kadivar', 'karimi', 'kashani', 'kazmi', 'khadem', 'khalaji', 'khomeini', 'khorsandi',
        'mahdavi', 'mahmoudi', 'mahmoudieh', 'majidi', 'mazanderani', 'mirzaei', 'mokri', 'mohammady', 'mousavi',
        'nabavi', 'naceri', 'nafisi', 'najafi', 'nalci', 'namazi', 'namdar', 'nariman', 'nazari', 'nili', 'norouzi',
        'pahlavi', 'paria', 'pashaei', 'pejman',
        'qazwini',
        'rahimi', 'rahmani', 'rajaei', 'ramadani', 'rashidi', 'rezaei',
        'salari', 'salehi', 'salemi', 'shahbazi', 'shahriari', 'shahidi', 'shirazi', 'shojaei', 'soleimani', 'soomekh', 'soroush',
        'tabatabaei', 'talebi', 'tousi',
        'yazdani', 'yazdi', 'yousefi',
        'zandi', 'zare',
    );

    /*
     * @link http://en.wikipedia.org/wiki/Persian_name
     */
    protected static \$firstNameAscii = array(
        'abbas', 'afshin', 'ahmad', 'ali', 'amir', 'anahita', 'anousheh', 'arash', 'ardeshir', 'arezu', 'aria', 'arian', 'arman', 'ashraf', 'atoosa', 'azadeh', 'azar',
        'babak', 'bahar', 'bahare', 'bardia', 'behnaz', 'benyamin', 'bita',
        'dalir', 'dariush', 'davoud', 'donya',
        'ebrahim', 'ehsan', 'eskandar', 'esmaeel',
        'farangis', 'farbod', 'farhad', 'farideh', 'farnaz', 'farrokh', 'farshid', 'farzaneh', 'fateme', 'fereshteh',
        'garshasp',
        'hanie', 'hashem', 'hirbod', 'hoda', 'hormoz', 'hossein',
        'jaleh', 'jamshid', 'javad',
        'kamran', 'karim', 'kasra', 'katayoun', 'kazem', 'khorshid', 'khosrow', 'kiana', 'kiarash', 'kourosh',
        'laleh', 'leila',
        'mahdi', 'mahmoud', 'mahshid', 'majid', 'manuchehr', 'marjan', 'maryam', 'marzban', 'massoud', 'mazdak', 'maziar', 'mehran', 'mehrdad', 'meysam', 'milad', 'mina', 'mithra', 'mohammad', 'mohsen', 'musa',
        'nasrin', 'nazanin', 'niloufar',
        'omid',
        'parastoo', 'parisa', 'parsa', 'parvin', 'parviz', 'payam', 'payvand', 'pedram', 'piruz', 'pouria',
        'ramin', 'reyhan', 'reza', 'roksaneh', 'rostam', 'roxana', 'roya',
        'sahar', 'saman', 'samir', 'sara', 'sassan', 'sepehr', 'sepideh', 'shahin', 'shahryar', 'shapour', 'shervin', 'shirin', 'simin', 'soheila', 'sohrab', 'soraya', 'soroush',
        'tara', 'taraneh', 'turan',
        'vahid',
        'yaghoub', 'yahya', 'yasamin', 'yasaman', 'younes', 'yousef',
        'zahra', 'zarine', 'zeynab', 'zhila',
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::\$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::\$firstNameAscii);
    }

    /**
     * @example 'ali.rezaei'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'ahmad.ir'
     */
    public function domainName()
    {
        return static::randomElement(static::\$lastNameAscii) . '.' . \$this->tld();
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fa_IR/Internet.php");
    }
}
