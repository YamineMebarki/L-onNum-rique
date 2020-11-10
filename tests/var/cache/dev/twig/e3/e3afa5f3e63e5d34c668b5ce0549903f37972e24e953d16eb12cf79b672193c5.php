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

/* vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Payment.php */
class __TwigTemplate_d744117a6e107cb0c2bed6932f0b611c79eb9f2a4dc6774032fffd0951e069b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pt_BR;

class Payment extends \\Faker\\Provider\\Payment
{
    protected static \$cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card', 'Diners', 'Elo', 'Hipercard'
    );

    // see https://gist.github.com/erikhenrique/5931368 / http://pt.stackoverflow.com/q/3715/26461
    protected static \$cardParams = array(
        'Visa' => array(
            \"4##############\"
        ),
        'MasterCard' => array(
            \"5##############\"
        ),
        'American Express' => array(
            \"34############\",
            \"37############\"
        ),
        'Discover Card' => array(
            \"6011###########\",
            \"622############\",
            \"64#############\",
            \"65#############\"
        ),
        'Diners' => array(
            \"301############\",
            \"301##########\",
            \"305############\",
            \"305##########\",
            \"36#############\",
            \"36###########\",
            \"38#############\",
            \"38###########\",
        ),
        'Elo' => array(
            \"636368#########\",
            \"438935#########\",
            \"504175#########\",
            \"451416#########\",
            \"636297#########\",
            \"5067###########\",
            \"4576###########\",
            \"4011###########\",
        ),
        'Hipercard' => array(
            \"38#############\",
            \"60#############\",
        ),
        \"Aura\" => array(
            \"50#############\"
        )
    );

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'BR', \$length = null)
    {
        return static::iban(\$countryCode, \$prefix, \$length);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pt_BR;

class Payment extends \\Faker\\Provider\\Payment
{
    protected static \$cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card', 'Diners', 'Elo', 'Hipercard'
    );

    // see https://gist.github.com/erikhenrique/5931368 / http://pt.stackoverflow.com/q/3715/26461
    protected static \$cardParams = array(
        'Visa' => array(
            \"4##############\"
        ),
        'MasterCard' => array(
            \"5##############\"
        ),
        'American Express' => array(
            \"34############\",
            \"37############\"
        ),
        'Discover Card' => array(
            \"6011###########\",
            \"622############\",
            \"64#############\",
            \"65#############\"
        ),
        'Diners' => array(
            \"301############\",
            \"301##########\",
            \"305############\",
            \"305##########\",
            \"36#############\",
            \"36###########\",
            \"38#############\",
            \"38###########\",
        ),
        'Elo' => array(
            \"636368#########\",
            \"438935#########\",
            \"504175#########\",
            \"451416#########\",
            \"636297#########\",
            \"5067###########\",
            \"4576###########\",
            \"4011###########\",
        ),
        'Hipercard' => array(
            \"38#############\",
            \"60#############\",
        ),
        \"Aura\" => array(
            \"50#############\"
        )
    );

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'BR', \$length = null)
    {
        return static::iban(\$countryCode, \$prefix, \$length);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Payment.php");
    }
}
