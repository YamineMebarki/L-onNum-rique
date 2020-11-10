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

/* vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/Address.php */
class __TwigTemplate_0623c1f4a3538f41fd0c8eeab6f382abd6ae8c77d3614bf1a49256718f04fd52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\hy_AM;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('քաղաք','գյուղ');

    protected static \$regionSuffix = array('մարզ');
    protected static \$streetPrefix = array('փողոց');

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('00##');
    protected static \$country = array(
        'Մոնակո','Սինգապուր','Վատիկան','Մալդիվներ',
        'Մալթա','Բահրեյն','Բանգլադեշ','Բարբադոս',
        'Չինաստանի Հանրապետություն','Սան Մարինո',
        'Հարավային Կորեա','Նիդերլանդներ','Լիբանան',
        'Մարշալյան կղզիներ','Հնդկաստան','Կոմորներ',
        'Իսրայել','Բուրունդի','Հաիթի','Բելգիա','Ճապոնիա',
        'Ֆիլիպիններ','Շրի Լանկա','Գրենադա','Սալվադոր',
        'Վիետնամ','Ճամայկա','Անգլիա','Տրինիդադ և Տոբագո',
        'Գերմանիա','Պակիստան','Նեպալ','Դոմինիկանա',
        'Անտիգուա և Բարբուդա','Իտալիա','Լյուքսեմբուրգ',
        'Շվեյցարիա','Անդորրա','Նիգերիա','Գամբիա',
        'Քուվեյթ','Միկրոնեզիա','Ուգանդա','Չինաստան',
        'Թաիլանդ','Մալավի','Չեխիա','Մոլդովա','Դանիա',
        'Ինդոնեզիա','Գվատեմալա','Լեհաստան','Սիրիա',
        'Կիպրոս','Ֆրանսիա','Պորտուգալիա','Տոգո','Սլովակիա',
        'Հունգարիա','Ալբանիա','Կուբա','Գանա','Հայաստան',
        'Թուրքիա','Սլովենիա','Ավստրիա','Ադրբեջան',
        'Սերբիա','Ռումինիա','Իսպանիա','Բոսնիա և Հերցեգովինա',
        'Կոստա Ռիկա','Մալայզիա','Մակեդոնիա','Հունաստան',
        'Եգիպտոս','Կամբոջա','Բենին','Եթովպիա','Խորվաթիա',
        'Բիրմա','Սվազիլենդ','Արևելյան Թիմոր','Ուկրաինա',
        'Սիերա Լեոնե','Մարոկո','Հոնդուրաս','Հորդանան','Քենիա',
        'Բրունեյ','Իրաք','Վրաստան','Թունիս','Բուլղարիա',
        'Սենեգալ','Ուզբեկստան','Բուրկինա Ֆասո','Մեքսիկա',
        'Լիտվա','Տաջիկստան','Էկվադոր','Ֆիջի','Էրիթրեա','Իրան',
        'Բելառուս','Նիկարագուա','Աֆղանստան','Պալաու','Եմեն',
        'Տանզանիա','Պանամա','Գվինեա','Կամերուն',
        'Հարավային Աֆրիկա','Կոլումբիա','Մադագասկար',
        'Լատվիա','Լիբերիա','Կոնգո','Զիմբաբվե','Վենեսուելա',
        'Էստոնիա','Մոզամբիկ','Լաոս','Բրազիլիա','Պերու',
        'Բահամներ','Չիլի','Շվեդիա','Ուրուգվայ','Վանուատու',
        'Բութան','Զամբիա','Սուդան','Սոմալի','Նոր Զելանդիա',
        'Պարագվայ','Ֆինլանդիա','Արգենտինա','Ալժիր','Նորվեգիա',
        'Բելիզ','Հարավային Սուդան','Մալի','Անգոլա',
        'Թուրքմենստան','Օման','Բոլիվիա','Ռուսաստան','Գաբոն',
        'Ղազախստան','Լիբիա','Գայանա','Կանադա','Բոտսվանա',
        'Մավրիտանիա','Իսլանդիա','Սուրինամ','Ավստրալիա',
        'Նամիբիա','Մոնղոլիա',
    );

    protected static \$region = array(
        'Արագածոտնի', 'Արարատի', 'Արմավիրի',
        'Գեղարքունիքի', 'Լոռու', 'Կոտայքի', 'Շիրակի',
        'Սյունիքի', 'Վայոց Ձորի', 'Տավուշի',
    );

    protected static \$city = array(
        'Աբովյան', 'Ագարակ', 'Ալավերդի', 'Ախթալա', 'Այրում', 'Աշտարակ', 'Ապարան',
        'Արարատ', 'Արթիկ', 'Արմավիր', 'Արտաշատ', 'Բերդ', 'Բյուրեղավան', 'Գավառ',
        'Գյումրի', 'Գորիս', 'Դաստակերտ', 'Դիլիջան', 'Եղեգնաձոր', 'Եղվարդ', 'Երևան',
        'Էջմիածին', 'Թալին', 'Թումանյան', 'Իջևան', 'Ծաղկաձոր', 'Կապան', 'Հրազդան',
        'Ճամբարակ', 'Մասիս', 'Մարալիկ', 'Մարտունի', 'Մեծամոր', 'Մեղրի', 'Նոր',
        'Նոյեմբերյան', 'Շամլուղ', 'Չարենցավան', 'Ջերմուկ', 'Սիսիան', 'Սպիտակ',
        'Ստեփանավան', 'Սևան', 'Վայք', 'Վանաձոր', 'Վարդենիս', 'Վեդի', 'Տաշիր',
        'Քաջարան',
    );

    protected static \$street = array(
        'Պուշկին','Տերյան','Աբովյան','Ագաթանգեղոս','Անդրանիկ','Օտյան','Լուկաշին',
        'Տիչինա','Շինարարներ','Լենինգրադյան','Կիևյան',
    );

    protected static \$addressFormats = array(
        \"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "\",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public static function country()
    {
        return static::randomElement(static::\$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 78,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\hy_AM;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('քաղաք','գյուղ');

    protected static \$regionSuffix = array('մարզ');
    protected static \$streetPrefix = array('փողոց');

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('00##');
    protected static \$country = array(
        'Մոնակո','Սինգապուր','Վատիկան','Մալդիվներ',
        'Մալթա','Բահրեյն','Բանգլադեշ','Բարբադոս',
        'Չինաստանի Հանրապետություն','Սան Մարինո',
        'Հարավային Կորեա','Նիդերլանդներ','Լիբանան',
        'Մարշալյան կղզիներ','Հնդկաստան','Կոմորներ',
        'Իսրայել','Բուրունդի','Հաիթի','Բելգիա','Ճապոնիա',
        'Ֆիլիպիններ','Շրի Լանկա','Գրենադա','Սալվադոր',
        'Վիետնամ','Ճամայկա','Անգլիա','Տրինիդադ և Տոբագո',
        'Գերմանիա','Պակիստան','Նեպալ','Դոմինիկանա',
        'Անտիգուա և Բարբուդա','Իտալիա','Լյուքսեմբուրգ',
        'Շվեյցարիա','Անդորրա','Նիգերիա','Գամբիա',
        'Քուվեյթ','Միկրոնեզիա','Ուգանդա','Չինաստան',
        'Թաիլանդ','Մալավի','Չեխիա','Մոլդովա','Դանիա',
        'Ինդոնեզիա','Գվատեմալա','Լեհաստան','Սիրիա',
        'Կիպրոս','Ֆրանսիա','Պորտուգալիա','Տոգո','Սլովակիա',
        'Հունգարիա','Ալբանիա','Կուբա','Գանա','Հայաստան',
        'Թուրքիա','Սլովենիա','Ավստրիա','Ադրբեջան',
        'Սերբիա','Ռումինիա','Իսպանիա','Բոսնիա և Հերցեգովինա',
        'Կոստա Ռիկա','Մալայզիա','Մակեդոնիա','Հունաստան',
        'Եգիպտոս','Կամբոջա','Բենին','Եթովպիա','Խորվաթիա',
        'Բիրմա','Սվազիլենդ','Արևելյան Թիմոր','Ուկրաինա',
        'Սիերա Լեոնե','Մարոկո','Հոնդուրաս','Հորդանան','Քենիա',
        'Բրունեյ','Իրաք','Վրաստան','Թունիս','Բուլղարիա',
        'Սենեգալ','Ուզբեկստան','Բուրկինա Ֆասո','Մեքսիկա',
        'Լիտվա','Տաջիկստան','Էկվադոր','Ֆիջի','Էրիթրեա','Իրան',
        'Բելառուս','Նիկարագուա','Աֆղանստան','Պալաու','Եմեն',
        'Տանզանիա','Պանամա','Գվինեա','Կամերուն',
        'Հարավային Աֆրիկա','Կոլումբիա','Մադագասկար',
        'Լատվիա','Լիբերիա','Կոնգո','Զիմբաբվե','Վենեսուելա',
        'Էստոնիա','Մոզամբիկ','Լաոս','Բրազիլիա','Պերու',
        'Բահամներ','Չիլի','Շվեդիա','Ուրուգվայ','Վանուատու',
        'Բութան','Զամբիա','Սուդան','Սոմալի','Նոր Զելանդիա',
        'Պարագվայ','Ֆինլանդիա','Արգենտինա','Ալժիր','Նորվեգիա',
        'Բելիզ','Հարավային Սուդան','Մալի','Անգոլա',
        'Թուրքմենստան','Օման','Բոլիվիա','Ռուսաստան','Գաբոն',
        'Ղազախստան','Լիբիա','Գայանա','Կանադա','Բոտսվանա',
        'Մավրիտանիա','Իսլանդիա','Սուրինամ','Ավստրալիա',
        'Նամիբիա','Մոնղոլիա',
    );

    protected static \$region = array(
        'Արագածոտնի', 'Արարատի', 'Արմավիրի',
        'Գեղարքունիքի', 'Լոռու', 'Կոտայքի', 'Շիրակի',
        'Սյունիքի', 'Վայոց Ձորի', 'Տավուշի',
    );

    protected static \$city = array(
        'Աբովյան', 'Ագարակ', 'Ալավերդի', 'Ախթալա', 'Այրում', 'Աշտարակ', 'Ապարան',
        'Արարատ', 'Արթիկ', 'Արմավիր', 'Արտաշատ', 'Բերդ', 'Բյուրեղավան', 'Գավառ',
        'Գյումրի', 'Գորիս', 'Դաստակերտ', 'Դիլիջան', 'Եղեգնաձոր', 'Եղվարդ', 'Երևան',
        'Էջմիածին', 'Թալին', 'Թումանյան', 'Իջևան', 'Ծաղկաձոր', 'Կապան', 'Հրազդան',
        'Ճամբարակ', 'Մասիս', 'Մարալիկ', 'Մարտունի', 'Մեծամոր', 'Մեղրի', 'Նոր',
        'Նոյեմբերյան', 'Շամլուղ', 'Չարենցավան', 'Ջերմուկ', 'Սիսիան', 'Սպիտակ',
        'Ստեփանավան', 'Սևան', 'Վայք', 'Վանաձոր', 'Վարդենիս', 'Վեդի', 'Տաշիր',
        'Քաջարան',
    );

    protected static \$street = array(
        'Պուշկին','Տերյան','Աբովյան','Ագաթանգեղոս','Անդրանիկ','Օտյան','Լուկաշին',
        'Տիչինա','Շինարարներ','Լենինգրադյան','Կիևյան',
    );

    protected static \$addressFormats = array(
        \"{{region}} {{regionSuffix}}, {{cityPrefix}} {{city}}, {{street}} {{buildingNumber}} {{streetPrefix}}, {{postcode}}\",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::\$buildingNumber));
    }

    public function address()
    {
        \$format = static::randomElement(static::\$addressFormats);

        return \$this->generator->parse(\$format);
    }

    public static function country()
    {
        return static::randomElement(static::\$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::\$city);
    }

    public function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/hy_AM/Address.php");
    }
}
