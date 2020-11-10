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

/* vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Miscellaneous.php */
class __TwigTemplate_dc5eddf1d7f31fd04b17bce0180d47873e399d9cf0b0435ff74681a147bc3f5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Miscellaneous.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Miscellaneous.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ms_MY;

class Miscellaneous extends \\Faker\\Provider\\Miscellaneous
{
    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia
     */
    protected static \$jpjNumberPlateFormats = array(
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["peninsularPrefix"]) || array_key_exists("peninsularPrefix", $context) ? $context["peninsularPrefix"] : (function () { throw new RuntimeError('Variable "peninsularPrefix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 11, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["peninsularPrefix"]) || array_key_exists("peninsularPrefix", $context) ? $context["peninsularPrefix"] : (function () { throw new RuntimeError('Variable "peninsularPrefix" does not exist.', 12, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 12, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["peninsularPrefix"]) || array_key_exists("peninsularPrefix", $context) ? $context["peninsularPrefix"] : (function () { throw new RuntimeError('Variable "peninsularPrefix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 13, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["peninsularPrefix"]) || array_key_exists("peninsularPrefix", $context) ? $context["peninsularPrefix"] : (function () { throw new RuntimeError('Variable "peninsularPrefix" does not exist.', 14, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 14, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        'W";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 15, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        'KV ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["sarawakPrefix"]) || array_key_exists("sarawakPrefix", $context) ? $context["sarawakPrefix"] : (function () { throw new RuntimeError('Variable "sarawakPrefix" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["sabahPrefix"]) || array_key_exists("sabahPrefix", $context) ? $context["sabahPrefix"] : (function () { throw new RuntimeError('Variable "sabahPrefix" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["validAlphabet"]) || array_key_exists("validAlphabet", $context) ? $context["validAlphabet"] : (function () { throw new RuntimeError('Variable "validAlphabet" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["specialPrefix"]) || array_key_exists("specialPrefix", $context) ? $context["specialPrefix"] : (function () { throw new RuntimeError('Variable "specialPrefix" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numberSequence"]) || array_key_exists("numberSequence", $context) ? $context["numberSequence"] : (function () { throw new RuntimeError('Variable "numberSequence" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * Some alphabet has higher frequency that coincides with the current number
     * of registrations. E.g. W = Wilayah Persekutuan
     * 
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected static \$peninsularPrefix = array(
        'A','A','B','C','D','F','J','J','K','M','N','P','P','R','T','V',
        'W','W','W','W','W','W',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_2
     */
    protected static \$sarawakPrefix = array(
        'QA','QK','QB','QC','QL','QM','QP','QR','QS','QT'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_3
     */
    protected static \$sabahPrefix = array(
        'SA','SAA','SAB','SAC','SB','SD','SG',
        'SK','SL','SS','SSA','ST','STA','SU'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Commemorative_plates
     */
    protected static \$specialPrefix = array(
        '1M4U',
        'A1M',
        'BAMbee',
        'Chancellor',
        'G','G1M','GP','GT',
        'Jaguh',
        'K1M','KRISS',
        'LOTUS',
        'NAAM','NAZA','NBOS',
        'PATRIOT','Perdana','PERFECT','Perodua','Persona','Proton','Putra','PUTRAJAYA',
        'RIMAU',
        'SAM','SAS','Satria','SMS','SUKOM',
        'T1M','Tiara','TTB',
        'U','US',
        'VIP',
        'WAJA',
        'XIIINAM','XOIC','XXVIASEAN','XXXIDB',
        'Y'
    );

    /**
     * Chances of having an empty alphabet will be 1/24
     * 
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected static \$validAlphabets = array(
        'A','B','C','D','E','F',
        'G','H','J','K','L','M',
        'N','P','Q','R','S','T',
        'U','V','W','X','Y',''
    );

    /**
     * Return a valid Malaysia JPJ(Road Transport Department) vehicle licence plate number
     * 
     * @example 'WKN 2368'
     * 
     * @return @string
     */
    public function jpjNumberPlate()
    {
        \$formats = static::toUpper(static::lexify(static::bothify(static::randomElement(static::\$jpjNumberPlateFormats))));

        return \$this->generator->parse(\$formats);
    }

    /**
     * Return Peninsular prefix alphabet
     * 
     * @example 'W'
     * 
     * @return @string
     */
    public static function peninsularPrefix()
    {
        return static::randomElement(static::\$peninsularPrefix);
    }

    /**
     * Return Sarawak state prefix alphabet
     * 
     * @example 'QA'
     * 
     * @return @string
     */
    public static function sarawakPrefix()
    {
        return static::randomElement(static::\$sarawakPrefix);
    }

    /**
     * Return Sabah state prefix alphabet
     * 
     * @example 'SA'
     * 
     * @return @string
     */
    public static function sabahPrefix()
    {
        return static::randomElement(static::\$sabahPrefix);
    }

    /**
     * Return specialty licence plate prefix
     * 
     * @example 'G1M'
     * 
     * @return @string
     */
    public static function specialPrefix()
    {
        return static::randomElement(static::\$specialPrefix);
    }

    /**
     * Return a valid license plate alphabet
     * 
     * @example 'A'
     * 
     * @return @string
     */
    public static function validAlphabet()
    {
        return static::randomElement(static::\$validAlphabets);
    }

    /**
     * Return a valid number sequence between 1 and 9999
     * 
     * @example '1234'
     * 
     * @return @integer
     */
    public static function numberSequence()
    {
        return mt_rand(1, 9999);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Miscellaneous.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  110 => 18,  102 => 17,  96 => 16,  87 => 15,  79 => 14,  71 => 13,  63 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ms_MY;

class Miscellaneous extends \\Faker\\Provider\\Miscellaneous
{
    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia
     */
    protected static \$jpjNumberPlateFormats = array(
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        '{{peninsularPrefix}}{{validAlphabet}}{{validAlphabet}} {{numberSequence}}',
        'W{{validAlphabet}}{{validAlphabet}} {{numberSequence}} {{validAlphabet}}',
        'KV {{numberSequence}} {{validAlphabet}}',
        '{{sarawakPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{sabahPrefix}} {{numberSequence}} {{validAlphabet}}',
        '{{specialPrefix}} {{numberSequence}}',
    );

    /**
     * Some alphabet has higher frequency that coincides with the current number
     * of registrations. E.g. W = Wilayah Persekutuan
     * 
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected static \$peninsularPrefix = array(
        'A','A','B','C','D','F','J','J','K','M','N','P','P','R','T','V',
        'W','W','W','W','W','W',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_2
     */
    protected static \$sarawakPrefix = array(
        'QA','QK','QB','QC','QL','QM','QP','QR','QS','QT'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format_3
     */
    protected static \$sabahPrefix = array(
        'SA','SAA','SAB','SAC','SB','SD','SG',
        'SK','SL','SS','SSA','ST','STA','SU'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Commemorative_plates
     */
    protected static \$specialPrefix = array(
        '1M4U',
        'A1M',
        'BAMbee',
        'Chancellor',
        'G','G1M','GP','GT',
        'Jaguh',
        'K1M','KRISS',
        'LOTUS',
        'NAAM','NAZA','NBOS',
        'PATRIOT','Perdana','PERFECT','Perodua','Persona','Proton','Putra','PUTRAJAYA',
        'RIMAU',
        'SAM','SAS','Satria','SMS','SUKOM',
        'T1M','Tiara','TTB',
        'U','US',
        'VIP',
        'WAJA',
        'XIIINAM','XOIC','XXVIASEAN','XXXIDB',
        'Y'
    );

    /**
     * Chances of having an empty alphabet will be 1/24
     * 
     * @link https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Malaysia#Current_format
     */
    protected static \$validAlphabets = array(
        'A','B','C','D','E','F',
        'G','H','J','K','L','M',
        'N','P','Q','R','S','T',
        'U','V','W','X','Y',''
    );

    /**
     * Return a valid Malaysia JPJ(Road Transport Department) vehicle licence plate number
     * 
     * @example 'WKN 2368'
     * 
     * @return @string
     */
    public function jpjNumberPlate()
    {
        \$formats = static::toUpper(static::lexify(static::bothify(static::randomElement(static::\$jpjNumberPlateFormats))));

        return \$this->generator->parse(\$formats);
    }

    /**
     * Return Peninsular prefix alphabet
     * 
     * @example 'W'
     * 
     * @return @string
     */
    public static function peninsularPrefix()
    {
        return static::randomElement(static::\$peninsularPrefix);
    }

    /**
     * Return Sarawak state prefix alphabet
     * 
     * @example 'QA'
     * 
     * @return @string
     */
    public static function sarawakPrefix()
    {
        return static::randomElement(static::\$sarawakPrefix);
    }

    /**
     * Return Sabah state prefix alphabet
     * 
     * @example 'SA'
     * 
     * @return @string
     */
    public static function sabahPrefix()
    {
        return static::randomElement(static::\$sabahPrefix);
    }

    /**
     * Return specialty licence plate prefix
     * 
     * @example 'G1M'
     * 
     * @return @string
     */
    public static function specialPrefix()
    {
        return static::randomElement(static::\$specialPrefix);
    }

    /**
     * Return a valid license plate alphabet
     * 
     * @example 'A'
     * 
     * @return @string
     */
    public static function validAlphabet()
    {
        return static::randomElement(static::\$validAlphabets);
    }

    /**
     * Return a valid number sequence between 1 and 9999
     * 
     * @example '1234'
     * 
     * @return @integer
     */
    public static function numberSequence()
    {
        return mt_rand(1, 9999);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Miscellaneous.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Miscellaneous.php");
    }
}
