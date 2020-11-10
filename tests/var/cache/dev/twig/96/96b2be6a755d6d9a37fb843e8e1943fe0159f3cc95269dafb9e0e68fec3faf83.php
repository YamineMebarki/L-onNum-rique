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

/* vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Payment.php */
class __TwigTemplate_92c3b17dc66069999518875b94ba553f81a8272f3b153a74ac178efec5b0b9e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\es_ES;

class Payment extends \\Faker\\Provider\\Payment
{
    private static \$vatMap = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'N', 'P', 'Q', 'R', 'S', 'U', 'V', 'W');

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'ES', \$length = null)
    {
        return static::iban(\$countryCode, \$prefix, \$length);
    }

    /**
     * Value Added Tax (VAT)
     *
     * @example 'B93694545'
     *
     * @see https://en.wikipedia.org/wiki/VAT_identification_number
     * @see https://es.wikipedia.org/wiki/C%C3%B3digo_de_identificaci%C3%B3n_fiscal
     *
     * @return string VAT Number
     */
    public static function vat()
    {
        \$letter = static::randomElement(self::\$vatMap);
        \$number = static::numerify('########');

        return \$letter . \$number;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\es_ES;

class Payment extends \\Faker\\Provider\\Payment
{
    private static \$vatMap = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'N', 'P', 'Q', 'R', 'S', 'U', 'V', 'W');

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'ES', \$length = null)
    {
        return static::iban(\$countryCode, \$prefix, \$length);
    }

    /**
     * Value Added Tax (VAT)
     *
     * @example 'B93694545'
     *
     * @see https://en.wikipedia.org/wiki/VAT_identification_number
     * @see https://es.wikipedia.org/wiki/C%C3%B3digo_de_identificaci%C3%B3n_fiscal
     *
     * @return string VAT Number
     */
    public static function vat()
    {
        \$letter = static::randomElement(self::\$vatMap);
        \$number = static::numerify('########');

        return \$letter . \$number;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Payment.php");
    }
}
