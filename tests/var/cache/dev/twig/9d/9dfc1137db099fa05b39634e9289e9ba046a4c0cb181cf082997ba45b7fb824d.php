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

/* vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/PhoneNumber.php */
class __TwigTemplate_552ec74e8851d086071d6535ae216a746d4b0a99fcd1932cb4cc6943d000dc71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ro_RO;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$normalFormats = array(
        'landline' => array(
            '021#######', // Bucharest
            '023#######',
            '024#######',
            '025#######',
            '026#######',
            '027#######', // non-geographic
            '031#######', // Bucharest
            '033#######',
            '034#######',
            '035#######',
            '036#######',
            '037#######', // non-geographic
        ),
        'mobile' => array(
            '07########',
        )
    );

    protected static \$specialFormats = array(
        'toll-free' => array(
            '0800######',
            '0801######', // shared-cost numbers
            '0802######', // personal numbering
            '0806######', // virtual cards
            '0807######', // pre-paid cards
            '0870######', // internet dial-up
        ),
        'premium-rate' => array(
            '0900######',
            '0903######', // financial information
            '0906######', // adult entertainment
        )
    );

    /**
     * @link http://en.wikipedia.org/wiki/Telephone_numbers_in_Romania#Last_years
     */
    public function phoneNumber()
    {
        \$type = static::randomElement(array_keys(static::\$normalFormats));
        \$number = static::numerify(static::randomElement(static::\$normalFormats[\$type]));

        return \$number;
    }

    public static function tollFreePhoneNumber()
    {
        \$number = static::numerify(static::randomElement(static::\$specialFormats['toll-free']));

        return \$number;
    }

    public static function premiumRatePhoneNumber()
    {
        \$number = static::numerify(static::randomElement(static::\$specialFormats['premium-rate']));

        return \$number;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ro_RO;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$normalFormats = array(
        'landline' => array(
            '021#######', // Bucharest
            '023#######',
            '024#######',
            '025#######',
            '026#######',
            '027#######', // non-geographic
            '031#######', // Bucharest
            '033#######',
            '034#######',
            '035#######',
            '036#######',
            '037#######', // non-geographic
        ),
        'mobile' => array(
            '07########',
        )
    );

    protected static \$specialFormats = array(
        'toll-free' => array(
            '0800######',
            '0801######', // shared-cost numbers
            '0802######', // personal numbering
            '0806######', // virtual cards
            '0807######', // pre-paid cards
            '0870######', // internet dial-up
        ),
        'premium-rate' => array(
            '0900######',
            '0903######', // financial information
            '0906######', // adult entertainment
        )
    );

    /**
     * @link http://en.wikipedia.org/wiki/Telephone_numbers_in_Romania#Last_years
     */
    public function phoneNumber()
    {
        \$type = static::randomElement(array_keys(static::\$normalFormats));
        \$number = static::numerify(static::randomElement(static::\$normalFormats[\$type]));

        return \$number;
    }

    public static function tollFreePhoneNumber()
    {
        \$number = static::numerify(static::randomElement(static::\$specialFormats['toll-free']));

        return \$number;
    }

    public static function premiumRatePhoneNumber()
    {
        \$number = static::numerify(static::randomElement(static::\$specialFormats['premium-rate']));

        return \$number;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ro_RO/PhoneNumber.php");
    }
}
