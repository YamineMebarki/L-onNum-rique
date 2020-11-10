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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_PH/PhoneNumber.php */
class __TwigTemplate_c43c549a07dfd0c77f6339c4d154d9f466a9de577d1b0b6d3962725162af0513 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_PH;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    // http://en.wikipedia.org/wiki/Telephone_numbers_in_the_Philippines
    protected static \$mobileFormats = array(
        '+63 (813) ###-####', '+63 (817) ###-####', '+63 (900) ###-####',
        '+63 (905) ###-####', '+63 (906) ###-####', '+63 (907) ###-####',
        '+63 (908) ###-####', '+63 (909) ###-####', '+63 (910) ###-####',
        '+63 (911) ###-####', '+63 (912) ###-####', '+63 (915) ###-####',
        '+63 (916) ###-####', '+63 (917) ###-####', '+63 (918) ###-####',
        '+63 (919) ###-####', '+63 (920) ###-####', '+63 (921) ###-####',
        '+63 (922) ###-####', '+63 (923) ###-####', '+63 (925) ###-####',
        '+63 (926) ###-####', '+63 (927) ###-####', '+63 (928) ###-####',
        '+63 (929) ###-####', '+63 (930) ###-####', '+63 (931) ###-####',
        '+63 (932) ###-####', '+63 (933) ###-####', '+63 (934) ###-####',
        '+63 (935) ###-####', '+63 (936) ###-####', '+63 (937) ###-####',
        '+63 (938) ###-####', '+63 (939) ###-####', '+63 (940) ###-####',
        '+63 (942) ###-####', '+63 (943) ###-####', '+63 (944) ###-####',
        '+63 (946) ###-####', '+63 (947) ###-####', '+63 (948) ###-####',
        '+63 (949) ###-####', '+63 (971) ###-####', '+63 (973) ###-####',
        '+63 (974) ###-####', '+63 (975) ###-####', '+63 (977) ###-####',
        '+63 (978) ###-####', '+63 (979) ###-####', '+63 (980) ###-####',
        '+63 (989) ###-####', '+63 (994) ###-####', '+63 (996) ###-####',
        '+63 (997) ###-####', '+63 (998) ###-####', '+63 (999) ###-####',
        
        '(0813) ###-####', '(0817) ###-####', '(0900) ###-####',
        '(0905) ###-####', '(0906) ###-####', '(0907) ###-####',
        '(0908) ###-####', '(0909) ###-####', '(0910) ###-####',
        '(0911) ###-####', '(0912) ###-####', '(0915) ###-####',
        '(0916) ###-####', '(0917) ###-####', '(0918) ###-####',
        '(0919) ###-####', '(0920) ###-####', '(0921) ###-####',
        '(0922) ###-####', '(0923) ###-####', '(0925) ###-####',
        '(0926) ###-####', '(0927) ###-####', '(0928) ###-####',
        '(0929) ###-####', '(0930) ###-####', '(0931) ###-####',
        '(0932) ###-####', '(0933) ###-####', '(0934) ###-####',
        '(0935) ###-####', '(0936) ###-####', '(0937) ###-####',
        '(0938) ###-####', '(0939) ###-####', '(0940) ###-####',
        '(0942) ###-####', '(0943) ###-####', '(0944) ###-####',
        '(0946) ###-####', '(0947) ###-####', '(0948) ###-####',
        '(0949) ###-####', '(0971) ###-####', '(0973) ###-####',
        '(0974) ###-####', '(0975) ###-####', '(0977) ###-####',
        '(0978) ###-####', '(0979) ###-####', '(0980) ###-####',
        '(0989) ###-####', '(0994) ###-####', '(0996) ###-####',
        '(0997) ###-####', '(0998) ###-####', '(0999) ###-####',
    );

    /**
     * Return a en_PH mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_PH;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    // http://en.wikipedia.org/wiki/Telephone_numbers_in_the_Philippines
    protected static \$mobileFormats = array(
        '+63 (813) ###-####', '+63 (817) ###-####', '+63 (900) ###-####',
        '+63 (905) ###-####', '+63 (906) ###-####', '+63 (907) ###-####',
        '+63 (908) ###-####', '+63 (909) ###-####', '+63 (910) ###-####',
        '+63 (911) ###-####', '+63 (912) ###-####', '+63 (915) ###-####',
        '+63 (916) ###-####', '+63 (917) ###-####', '+63 (918) ###-####',
        '+63 (919) ###-####', '+63 (920) ###-####', '+63 (921) ###-####',
        '+63 (922) ###-####', '+63 (923) ###-####', '+63 (925) ###-####',
        '+63 (926) ###-####', '+63 (927) ###-####', '+63 (928) ###-####',
        '+63 (929) ###-####', '+63 (930) ###-####', '+63 (931) ###-####',
        '+63 (932) ###-####', '+63 (933) ###-####', '+63 (934) ###-####',
        '+63 (935) ###-####', '+63 (936) ###-####', '+63 (937) ###-####',
        '+63 (938) ###-####', '+63 (939) ###-####', '+63 (940) ###-####',
        '+63 (942) ###-####', '+63 (943) ###-####', '+63 (944) ###-####',
        '+63 (946) ###-####', '+63 (947) ###-####', '+63 (948) ###-####',
        '+63 (949) ###-####', '+63 (971) ###-####', '+63 (973) ###-####',
        '+63 (974) ###-####', '+63 (975) ###-####', '+63 (977) ###-####',
        '+63 (978) ###-####', '+63 (979) ###-####', '+63 (980) ###-####',
        '+63 (989) ###-####', '+63 (994) ###-####', '+63 (996) ###-####',
        '+63 (997) ###-####', '+63 (998) ###-####', '+63 (999) ###-####',
        
        '(0813) ###-####', '(0817) ###-####', '(0900) ###-####',
        '(0905) ###-####', '(0906) ###-####', '(0907) ###-####',
        '(0908) ###-####', '(0909) ###-####', '(0910) ###-####',
        '(0911) ###-####', '(0912) ###-####', '(0915) ###-####',
        '(0916) ###-####', '(0917) ###-####', '(0918) ###-####',
        '(0919) ###-####', '(0920) ###-####', '(0921) ###-####',
        '(0922) ###-####', '(0923) ###-####', '(0925) ###-####',
        '(0926) ###-####', '(0927) ###-####', '(0928) ###-####',
        '(0929) ###-####', '(0930) ###-####', '(0931) ###-####',
        '(0932) ###-####', '(0933) ###-####', '(0934) ###-####',
        '(0935) ###-####', '(0936) ###-####', '(0937) ###-####',
        '(0938) ###-####', '(0939) ###-####', '(0940) ###-####',
        '(0942) ###-####', '(0943) ###-####', '(0944) ###-####',
        '(0946) ###-####', '(0947) ###-####', '(0948) ###-####',
        '(0949) ###-####', '(0971) ###-####', '(0973) ###-####',
        '(0974) ###-####', '(0975) ###-####', '(0977) ###-####',
        '(0978) ###-####', '(0979) ###-####', '(0980) ###-####',
        '(0989) ###-####', '(0994) ###-####', '(0996) ###-####',
        '(0997) ###-####', '(0998) ###-####', '(0999) ###-####',
    );

    /**
     * Return a en_PH mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_PH/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_PH/PhoneNumber.php");
    }
}