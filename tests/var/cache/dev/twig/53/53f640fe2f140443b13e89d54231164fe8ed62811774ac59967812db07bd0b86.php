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

/* vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/PhoneNumber.php */
class __TwigTemplate_a75f315fb69fca34c08b7b4300ab430cff454f7860e6f3953d8b77c0cbea8527 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pt_BR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$landlineFormats = array('2###-####', '3###-####', '4###-####');

    /**
    * Since december 2016 all mobile phone numbers in brazil begin with 9 and landlines 2, 3 or 4.
    * @link http://www.anatel.gov.br/Portal/exibirPortalPaginaEspecial.do?org.apache.struts.taglib.html.TOKEN=9594e1d11fbc996d52bda44e608bb744&codItemCanal=1794&pastaSelecionada=2984
    */
    protected static \$cellphoneFormats = array('9####-####');

    /**
     * Generates a 2-digit area code not composed by zeroes.
     * @link http://www.anatel.gov.br/legislacao/resolucoes/16-2001/383-resolucao-263.
     * @return string
     */
    public static function areaCode()
    {
        \$areaCodes = array(
            '11', '12', '13', '14', '15', '16', '17', '18', '19', '21', '22', '24',
            '27', '28', '31', '32', '33', '34', '35', '37', '38', '41', '42', '43',
            '44', '45', '46', '47', '48', '49', '51', '53', '54', '55', '61', '62',
            '63', '64', '65', '66', '67', '68', '69', '71', '73', '74', '75', '77',
            '79', '81', '82', '83', '84', '85', '86', '87', '88', '89', '91', '92',
            '93', '94', '95', '96', '97', '98', '99'
        );

        return self::randomElement(\$areaCodes);
    }

    /**
     * Generates a 9-digit cellphone number without formatting characters.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function cellphone(\$formatted = true)
    {
        \$number = static::numerify(static::randomElement(static::\$cellphoneFormats));

        if (!\$formatted) {
            \$number = strtr(\$number, array('-' => ''));
        }

        return \$number;
    }

    /**
     * Generates an 9-digit landline number without formatting characters.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function landline(\$formatted = true)
    {
        \$number = static::numerify(static::randomElement(static::\$landlineFormats));

        if (!\$formatted) {
            \$number = strtr(\$number, array('-' => ''));
        }

        return \$number;
    }

    /**
     * Randomizes between cellphone and landline numbers.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return mixed
     */
    public static function phone(\$formatted = true)
    {
        \$options = static::randomElement(array(
            array('cellphone', false),
            array('cellphone', true),
            array('landline', null),
        ));

        return call_user_func(\"static::{\$options[0]}\", \$formatted, \$options[1]);
    }

    /**
     * Generates a complete phone number.
     * @param string \$type      [def: landline] One of \"landline\" or \"cellphone\". Defaults to \"landline\" on invalid values.
     * @param bool   \$formatted [def: true] If the number should be formatted or not.
     * @return string
     */
    protected static function anyPhoneNumber(\$type, \$formatted = true)
    {
        \$area   = static::areaCode();
        \$number = (\$type == 'cellphone')?
            static::cellphone(\$formatted) :
            static::landline(\$formatted);

        return \$formatted? \"(\$area) \$number\" : \$area.\$number;
    }

    /**
     * Concatenates {@link areaCode} and {@link cellphone} into a national cellphone number.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function cellphoneNumber(\$formatted = true)
    {
        return static::anyPhoneNumber('cellphone', \$formatted);
    }

    /**
     * Concatenates {@link areaCode} and {@link landline} into a national landline number.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function landlineNumber(\$formatted = true)
    {
        return static::anyPhoneNumber('landline', \$formatted);
    }

    /**
     * Randomizes between complete cellphone and landline numbers.
     * @return mixed
     */
    public function phoneNumber()
    {
        \$method = static::randomElement(array('cellphoneNumber', 'landlineNumber'));
        return call_user_func(\"static::\$method\", true);
    }

    /**
     * Randomizes between complete cellphone and landline numbers, cleared from formatting symbols.
     * @return mixed
     */
    public static function phoneNumberCleared()
    {
        \$method = static::randomElement(array('cellphoneNumber', 'landlineNumber'));
        return call_user_func(\"static::\$method\", false);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pt_BR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$landlineFormats = array('2###-####', '3###-####', '4###-####');

    /**
    * Since december 2016 all mobile phone numbers in brazil begin with 9 and landlines 2, 3 or 4.
    * @link http://www.anatel.gov.br/Portal/exibirPortalPaginaEspecial.do?org.apache.struts.taglib.html.TOKEN=9594e1d11fbc996d52bda44e608bb744&codItemCanal=1794&pastaSelecionada=2984
    */
    protected static \$cellphoneFormats = array('9####-####');

    /**
     * Generates a 2-digit area code not composed by zeroes.
     * @link http://www.anatel.gov.br/legislacao/resolucoes/16-2001/383-resolucao-263.
     * @return string
     */
    public static function areaCode()
    {
        \$areaCodes = array(
            '11', '12', '13', '14', '15', '16', '17', '18', '19', '21', '22', '24',
            '27', '28', '31', '32', '33', '34', '35', '37', '38', '41', '42', '43',
            '44', '45', '46', '47', '48', '49', '51', '53', '54', '55', '61', '62',
            '63', '64', '65', '66', '67', '68', '69', '71', '73', '74', '75', '77',
            '79', '81', '82', '83', '84', '85', '86', '87', '88', '89', '91', '92',
            '93', '94', '95', '96', '97', '98', '99'
        );

        return self::randomElement(\$areaCodes);
    }

    /**
     * Generates a 9-digit cellphone number without formatting characters.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function cellphone(\$formatted = true)
    {
        \$number = static::numerify(static::randomElement(static::\$cellphoneFormats));

        if (!\$formatted) {
            \$number = strtr(\$number, array('-' => ''));
        }

        return \$number;
    }

    /**
     * Generates an 9-digit landline number without formatting characters.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function landline(\$formatted = true)
    {
        \$number = static::numerify(static::randomElement(static::\$landlineFormats));

        if (!\$formatted) {
            \$number = strtr(\$number, array('-' => ''));
        }

        return \$number;
    }

    /**
     * Randomizes between cellphone and landline numbers.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return mixed
     */
    public static function phone(\$formatted = true)
    {
        \$options = static::randomElement(array(
            array('cellphone', false),
            array('cellphone', true),
            array('landline', null),
        ));

        return call_user_func(\"static::{\$options[0]}\", \$formatted, \$options[1]);
    }

    /**
     * Generates a complete phone number.
     * @param string \$type      [def: landline] One of \"landline\" or \"cellphone\". Defaults to \"landline\" on invalid values.
     * @param bool   \$formatted [def: true] If the number should be formatted or not.
     * @return string
     */
    protected static function anyPhoneNumber(\$type, \$formatted = true)
    {
        \$area   = static::areaCode();
        \$number = (\$type == 'cellphone')?
            static::cellphone(\$formatted) :
            static::landline(\$formatted);

        return \$formatted? \"(\$area) \$number\" : \$area.\$number;
    }

    /**
     * Concatenates {@link areaCode} and {@link cellphone} into a national cellphone number.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function cellphoneNumber(\$formatted = true)
    {
        return static::anyPhoneNumber('cellphone', \$formatted);
    }

    /**
     * Concatenates {@link areaCode} and {@link landline} into a national landline number.
     * @param bool \$formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function landlineNumber(\$formatted = true)
    {
        return static::anyPhoneNumber('landline', \$formatted);
    }

    /**
     * Randomizes between complete cellphone and landline numbers.
     * @return mixed
     */
    public function phoneNumber()
    {
        \$method = static::randomElement(array('cellphoneNumber', 'landlineNumber'));
        return call_user_func(\"static::\$method\", true);
    }

    /**
     * Randomizes between complete cellphone and landline numbers, cleared from formatting symbols.
     * @return mixed
     */
    public static function phoneNumberCleared()
    {
        \$method = static::randomElement(array('cellphoneNumber', 'landlineNumber'));
        return call_user_func(\"static::\$method\", false);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/PhoneNumber.php");
    }
}
