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

/* vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Payment.php */
class __TwigTemplate_1348445c86bdccd20c238c31489bb1153f3fad97b0b91696f78a861d91ba4f1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fr_FR;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * Value Added Tax (VAT)
     *
     * @example 'FR12123456789', ('spaced') 'FR 12 123 456 789'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool \$spacedNationalPrefix
     *
     * @return string VAT Number
     */
    public function vat(\$spacedNationalPrefix = true)
    {
        \$siren = Company::siren(false);
        \$key = (12 + 3 * (\$siren % 97)) % 97;
        \$pattern = \"%s%'.02d%s\";
        if (\$spacedNationalPrefix) {
            \$siren = trim(chunk_split(\$siren, 3, ' '));
            \$pattern = \"%s %'.02d %s\";
        }
        return sprintf(\$pattern, 'FR', \$key, \$siren);
    }

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'FR', \$length = null)
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fr_FR;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * Value Added Tax (VAT)
     *
     * @example 'FR12123456789', ('spaced') 'FR 12 123 456 789'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool \$spacedNationalPrefix
     *
     * @return string VAT Number
     */
    public function vat(\$spacedNationalPrefix = true)
    {
        \$siren = Company::siren(false);
        \$key = (12 + 3 * (\$siren % 97)) % 97;
        \$pattern = \"%s%'.02d%s\";
        if (\$spacedNationalPrefix) {
            \$siren = trim(chunk_split(\$siren, 3, ' '));
            \$pattern = \"%s %'.02d %s\";
        }
        return sprintf(\$pattern, 'FR', \$key, \$siren);
    }

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'FR', \$length = null)
    {
        return static::iban(\$countryCode, \$prefix, \$length);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/Payment.php");
    }
}
