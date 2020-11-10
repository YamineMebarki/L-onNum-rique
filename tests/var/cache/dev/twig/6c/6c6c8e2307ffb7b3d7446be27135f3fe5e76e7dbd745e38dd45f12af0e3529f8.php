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

/* vendor/fzaninotto/faker/src/Faker/Provider/el_GR/PhoneNumber.php */
class __TwigTemplate_b417eff78d4fb22ec76df5821a1697e88fae48455369aa161ccaa09046e8040e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\el_GR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Greece
     */
    protected static \$formats = array(
        // International formats
        '+30 2# ########',
        '+30 2## #######',
        '+30 2### ######',
        '+302#########',

        '+3069########',
        '+30 69 ########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard format
        '2#########',
        '2## #######',
        '2### ######',

        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
    );

    protected static \$mobileFormats = array(
        // International formats
        '+3069########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard formats
        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
    );

    public static function mobilePhoneNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }

    protected static \$tollFreeFormats = array(
        // International formats
        '+30 800#######',
        '+30 800 #######',
        '+30 800 ## #####',
        '+30 800 ### ####',

        // Standard formats
        '800#######',
        '800 #######',
        '800 ## #####',
        '800 ### ####',
    );

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::\$tollFreeFormats));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\el_GR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Greece
     */
    protected static \$formats = array(
        // International formats
        '+30 2# ########',
        '+30 2## #######',
        '+30 2### ######',
        '+302#########',

        '+3069########',
        '+30 69 ########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard format
        '2#########',
        '2## #######',
        '2### ######',

        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
    );

    protected static \$mobileFormats = array(
        // International formats
        '+3069########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard formats
        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
    );

    public static function mobilePhoneNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }

    protected static \$tollFreeFormats = array(
        // International formats
        '+30 800#######',
        '+30 800 #######',
        '+30 800 ## #####',
        '+30 800 ### ####',

        // Standard formats
        '800#######',
        '800 #######',
        '800 ## #####',
        '800 ### ####',
    );

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::\$tollFreeFormats));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/el_GR/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/el_GR/PhoneNumber.php");
    }
}
