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

/* vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Payment.php */
class __TwigTemplate_a4c74f6d2113f116d8ecfecc614bb7168920d40cdba218f5cb9a8526f77e3e6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\de_DE;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'DE', \$length = null)
    {
        return static::iban(\$countryCode, \$prefix, \$length);
    }

    /**
     * Sources:
     * The 19 largest German banks by total assets
     * @see https://de.wikipedia.org/wiki/Liste_der_größten_Banken_in_Deutschland
     * The 20 largest co-operative banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Genossenschaftsbanken_in_Deutschland
     * The 20 largest public savings banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Sparkassen_in_Deutschland
     */
    protected static \$banks = array(
        'Bank 1 Saar', 'Bayerische Landesbank', 'BBBank', 'Berliner Sparkasse', 'Berliner Volksbank', 'Braunschweigische Landessparkasse',
        'Commerzbank',
        'DekaBank Deutsche Girozentrale', 'Deutsche Apotheker- und Ärztebank', 'Deutsche Bank', 'Deutsche Kreditbank', 'Deutsche Pfandbriefbank', 'Dortmunder Volksbank', 'DZ Bank',
        'Erzgebirgssparkasse',
        'Frankfurter Sparkasse', 'Frankfurter Volksbank',
        'Hamburger Sparkasse', 'Hannoversche Volksbank', 'HSGV', 'HSH Nordbank',
        'ING-DiBa',
        'KfW', 'Kreissparkasse Esslingen-Nürtingen', 'Kreissparkasse Heilbronn', 'Kreissparkasse Köln', 'Kreissparkasse Ludwigsburg', 'Kreissparkasse München Starnberg Ebersberg',
        'L-Bank', 'Landesbank Baden-Württemberg', 'Landesbank Hessen-Thüringen', 'Landessparkasse zu Oldenburg', 'Landwirtschaftliche Rentenbank',
        'Mittelbrandenburgische Sparkasse in Potsdam',
        'Nassauische Sparkasse', 'Norddeutsche Landesbank', 'NRW.Bank',
        'Ostsächsische Sparkasse Dresden',
        'Postbank',
        'Sparkasse Hannover', 'Sparkasse KölnBonn', 'Sparkasse Mainfranken Würzburg', 'Sparkasse Nürnberg', 'Sparkasse Pforzheim Calw', 'Stadtsparkasse München',
        'Unicredit Bank',
        'Vereinigte Volksbank', 'Volksbank, Hildesheim-Lehrte-Pattensen', 'Volksbank Alzey-Worms', 'Volksbank Braunschweig Wolfsburg', 'Volksbank Darmstadt - Südhessen', 'Volksbank Hohenlohe', 'Volksbank Kraichgau Wiesloch-Sinsheim', 'Volksbank Lüneburger Heide', 'Volksbank Mittelhessen', 'Volksbank Paderborn-Höxter-Detmold', 'Volksbank Raiffeisenbank Rosenheim-Chiemsee', 'Volksbank Stuttgart', 'VR Bank Main-Kinzig-Büdingen',
        'WGZ Bank',
    );

    /**
     * @example 'Volksbank Stuttgart'
     */
    public static function bank()
    {
        return static::randomElement(static::\$banks);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\de_DE;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  \$prefix      for generating bank account number of a specific bank
     * @param  string  \$countryCode ISO 3166-1 alpha-2 country code
     * @param  integer \$length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber(\$prefix = '', \$countryCode = 'DE', \$length = null)
    {
        return static::iban(\$countryCode, \$prefix, \$length);
    }

    /**
     * Sources:
     * The 19 largest German banks by total assets
     * @see https://de.wikipedia.org/wiki/Liste_der_größten_Banken_in_Deutschland
     * The 20 largest co-operative banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Genossenschaftsbanken_in_Deutschland
     * The 20 largest public savings banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Sparkassen_in_Deutschland
     */
    protected static \$banks = array(
        'Bank 1 Saar', 'Bayerische Landesbank', 'BBBank', 'Berliner Sparkasse', 'Berliner Volksbank', 'Braunschweigische Landessparkasse',
        'Commerzbank',
        'DekaBank Deutsche Girozentrale', 'Deutsche Apotheker- und Ärztebank', 'Deutsche Bank', 'Deutsche Kreditbank', 'Deutsche Pfandbriefbank', 'Dortmunder Volksbank', 'DZ Bank',
        'Erzgebirgssparkasse',
        'Frankfurter Sparkasse', 'Frankfurter Volksbank',
        'Hamburger Sparkasse', 'Hannoversche Volksbank', 'HSGV', 'HSH Nordbank',
        'ING-DiBa',
        'KfW', 'Kreissparkasse Esslingen-Nürtingen', 'Kreissparkasse Heilbronn', 'Kreissparkasse Köln', 'Kreissparkasse Ludwigsburg', 'Kreissparkasse München Starnberg Ebersberg',
        'L-Bank', 'Landesbank Baden-Württemberg', 'Landesbank Hessen-Thüringen', 'Landessparkasse zu Oldenburg', 'Landwirtschaftliche Rentenbank',
        'Mittelbrandenburgische Sparkasse in Potsdam',
        'Nassauische Sparkasse', 'Norddeutsche Landesbank', 'NRW.Bank',
        'Ostsächsische Sparkasse Dresden',
        'Postbank',
        'Sparkasse Hannover', 'Sparkasse KölnBonn', 'Sparkasse Mainfranken Würzburg', 'Sparkasse Nürnberg', 'Sparkasse Pforzheim Calw', 'Stadtsparkasse München',
        'Unicredit Bank',
        'Vereinigte Volksbank', 'Volksbank, Hildesheim-Lehrte-Pattensen', 'Volksbank Alzey-Worms', 'Volksbank Braunschweig Wolfsburg', 'Volksbank Darmstadt - Südhessen', 'Volksbank Hohenlohe', 'Volksbank Kraichgau Wiesloch-Sinsheim', 'Volksbank Lüneburger Heide', 'Volksbank Mittelhessen', 'Volksbank Paderborn-Höxter-Detmold', 'Volksbank Raiffeisenbank Rosenheim-Chiemsee', 'Volksbank Stuttgart', 'VR Bank Main-Kinzig-Büdingen',
        'WGZ Bank',
    );

    /**
     * @example 'Volksbank Stuttgart'
     */
    public static function bank()
    {
        return static::randomElement(static::\$banks);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Payment.php");
    }
}
