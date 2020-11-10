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

/* vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Payment.php */
class __TwigTemplate_12a380976b31c2dc8bffa8075f02d5bb2b88c6dd846dab7458b3a629e1e3b0e3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ms_MY;

class Payment extends \\Faker\\Provider\\Payment
{
    protected static \$bankFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["localBank"]) || array_key_exists("localBank", $context) ? $context["localBank"] : (function () { throw new RuntimeError('Variable "localBank" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["foreignBank"]) || array_key_exists("foreignBank", $context) ? $context["foreignBank"] : (function () { throw new RuntimeError('Variable "foreignBank" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["governmentBank"]) || array_key_exists("governmentBank", $context) ? $context["governmentBank"] : (function () { throw new RuntimeError('Variable "governmentBank" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * @link http://www.muamalat.com.my/consumer-banking/internet-banking/popup-ibg.html
     */
    protected static \$bankAccountNumberFormats = array(
        '##########',
        '###########',
        '############',
        '#############',
        '##############',
        '###############',
        '################',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia
     */
    protected static \$localBanks = array(
        'Affin Bank',
        'Alliance Bank',
        'AmBank',
        'CIMB Bank',
        'Hong Leong Bank ',
        'Maybank',
        'Public Bank',
        'RHB Bank'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#List_of_foreign_banks_(commercial)
     */
    protected static \$foreignBanks = array(
        'Bangkok Bank Berhad',
        'Bank of America Malaysia Berhad',
        'Bank of China (Malaysia) Berhad',
        'Bank of Tokyo-Mitsubishi UFJ (Malaysia) Berhad',
        'BNP Paribas Malaysia Berhad',
        'China Construction Bank',
        'Citibank Berhad',
        'Deutsche Bank (Malaysia) Berhad',
        'HSBC Bank Malaysia Berhad',
        'India International Bank (Malaysia) Berhad',
        'Industrial and Commercial Bank of China (Malaysia) Berhad',
        'J.P. Morgan Chase Bank Berhad',
        'Mizuho Bank (Malaysia) Berhad',
        'National Bank of Abu Dhabi Malaysia Berhad',
        'OCBC Bank (Malaysia) Berhad',
        'Standard Chartered Bank Malaysia Berhad',
        'Sumitomo Mitsui Banking Corporation Malaysia Berhad',
        'The Bank of Nova Scotia Berhad',
        'United Overseas Bank (Malaysia) Bhd.'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Development_Financial_Institutions_(Government-owned_banks)_(full_list)
     */
    protected static \$governmentBanks = array(
        'Agro Bank Malaysia',
        'Bank Pembangunan Malaysia Berhad (BPMB) (The development bank of Malaysia)',
        'Bank Rakyat',
        'Bank Simpanan Nasional',
        'Credit Guarantee Corporation Malaysia Berhad (CGC)',
        'Export-Import Bank of Malaysia Berhad (Exim Bank)',
        'Malaysia Debt Ventures Berhad',
        'Malaysian Industrial Development Finance Berhad (MIDF)',
        'SME Bank Berhad',
        'Sabah Development Bank Berhad (SDB)',
        'Sabah Credit Corporation (SCC)',
        'Tabung Haji',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Investment-Link_Funds_(Insurance_Companies_-_Takaful_included)
     */
    protected static \$insuranceCompanies = array(
        'AIA Malaysia',
        'AIG Malaysia',
        'Allianz Malaysia',
        'AXA AFFIN Life Insurance',
        'Berjaya General Insurance',
        'Etiqa Insurance',
        'Great Eastern Insurance',
        'Hong Leong Assurance',
        'Kurnia Insurans Malaysia',
        'Manulife Malaysia Insurance',
        'MSIG Malaysia',
        'Prudential Malaysia',
        'Tokio Marine Life Malaysia Insurance',
        'UNI.ASIA General Insurance',
        'Zurich Insurance Malaysia',
    );

    /**
     * @link http://www.bankswiftcode.org/malaysia/
     */
    protected static \$swiftCodes = array(
        'ABNAMY2AXXX','ABNAMYKLPNG','ABNAMYKLXXX','AFBQMYKLXXX','AIBBMYKLXXX',
        'AISLMYKLXXX','AMMBMYKLXXX','ARBKMYKLXXX',
        'BIMBMYKLXXX','BISLMYKAXXX','BKCHMYKLXXX','BKKBMYKLXXX','BMMBMYKLXXX',
        'BNMAMYKLXXX','BNPAMYKAXXX','BOFAMY2XLBN','BOFAMY2XXXX','BOTKMYKAXXX',
        'BOTKMYKXXXX',
        'CHASMYKXKEY','CHASMYKXXXX','CIBBMYKAXXX','CIBBMYKLXXX','CITIMYKLJOD',
        'CITIMYKLLAB','CITIMYKLPEN','CITIMYKLXXX','COIMMYKLXXX','CTBBMYKLXXX',
        'DABEMYKLXXX','DBSSMY2AXXX','DEUTMYKLBLB','DEUTMYKLGMO','DEUTMYKLISB',
        'DEUTMYKLXXX',
        'EIBBMYKLXXX','EOBBMYKLXXX','EXMBMYKLXXX',
        'FEEBMYKAXXX',
        'HBMBMYKLXXX','HDSBMY2PSEL','HDSBMY2PXXX','HLBBMYKLIBU','HLBBMYKLJBU',
        'HLBBMYKLKCH','HLBBMYKLPNG','HLBBMYKLXXX','HLIBMYKLXXX','HMABMYKLXXX',
        'HSBCMYKAXXX','HSTMMYKLGWS','HSTMMYKLXXX',
        'KAFBMYKLXXX','KFHOMYKLXXX',
        'MBBEMYKAXXX','MBBEMYKLBAN','MBBEMYKLBBG','MBBEMYKLBWC','MBBEMYKLCSD',
        'MBBEMYKLIPH','MBBEMYKLJOB','MBBEMYKLKEP','MBBEMYKLKIN','MBBEMYKLKLC',
        'MBBEMYKLMAL','MBBEMYKLPEN','MBBEMYKLPGC','MBBEMYKLPJC','MBBEMYKLPJY',
        'MBBEMYKLPKG','MBBEMYKLPSG','MBBEMYKLPUD','MBBEMYKLSAC','MBBEMYKLSBN',
        'MBBEMYKLSHA','MBBEMYKLSUB','MBBEMYKLWSD','MBBEMYKLXXX','MBBEMYKLYSL',
        'MFBBMYKLXXX','MHCBMYKAXXX',
        'NOSCMY2LXXX','NOSCMYKLXXX',
        'OABBMYKLXXX','OCBCMYKLXXX','OSKIMYKLXXX',
        'PBBEMYKLXXX','PBLLMYKAXXX','PCGLMYKLXXX','PERMMYKLXXX','PHBMMYKLXXX',
        'PTRDMYKLXXX','PTROMYKLFSD','PTROMYKLXXX',
        'RHBAMYKLXXX','RHBBMYKAXXX','RHBBMYKLXXX','RJHIMYKLXXX',
        'SCBLMYKXLAB','SCBLMYKXXXX','SMBCMYKAXXX',
        'UIIBMYKLXXX','UOVBMYKLCND','UOVBMYKLXXX',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_ringgit
     */
    protected static \$currencySymbol = array(
        'RM'
    );

    /**
     * Return a Malaysian Bank
     * 
     * @example 'Maybank'
     * 
     * @return @string
     */
    public function bank()
    {
        \$formats = static::randomElement(static::\$bankFormats);

        return \$this->generator->parse(\$formats);
    }

    /**
     * Return a Malaysian Bank account number
     * 
     * @example '1234567890123456'
     * 
     * @return @string
     */
    public function bankAccountNumber()
    {
        \$formats = static::randomElement(static::\$bankAccountNumberFormats);

        return static::numerify(\$formats);
    }

    /**
     * Return a Malaysian Local Bank
     * 
     * @example 'Public Bank'
     * 
     * @return @string
     */
    public static function localBank()
    {
        return static::randomElement(static::\$localBanks);
    }

    /**
     * Return a Malaysian Foreign Bank
     * 
     * @example 'Citibank Berhad'
     * 
     * @return @string
     */
    public static function foreignBank()
    {
        return static::randomElement(static::\$foreignBanks);
    }

    /**
     * Return a Malaysian Government Bank
     * 
     * @example 'Bank Simpanan Nasional'
     * 
     * @return @string
     */
    public static function governmentBank()
    {
        return static::randomElement(static::\$governmentBanks);
    }

    /**
     * Return a Malaysian insurance company
     * 
     * @example 'AIA Malaysia'
     * 
     * @return @string
     */
    public static function insurance()
    {
        return static::randomElement(static::\$insuranceCompanies);
    }

    /**
     * Return a Malaysian Bank SWIFT Code
     * 
     * @example 'MBBEMYKLXXX'
     * 
     * @return @string
     */
    public static function swiftCode()
    {
        return static::toUpper(static::lexify(static::randomElement(static::\$swiftCodes)));
    }

    /**
     * Return the Malaysian currency symbol
     * 
     * @example 'RM'
     * 
     * @return @string
     */
    public static function currencySymbol()
    {
        return static::randomElement(static::\$currencySymbol);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Payment.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ms_MY;

class Payment extends \\Faker\\Provider\\Payment
{
    protected static \$bankFormats = array(
        '{{localBank}}',
        '{{foreignBank}}',
        '{{governmentBank}}'
    );

    /**
     * @link http://www.muamalat.com.my/consumer-banking/internet-banking/popup-ibg.html
     */
    protected static \$bankAccountNumberFormats = array(
        '##########',
        '###########',
        '############',
        '#############',
        '##############',
        '###############',
        '################',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia
     */
    protected static \$localBanks = array(
        'Affin Bank',
        'Alliance Bank',
        'AmBank',
        'CIMB Bank',
        'Hong Leong Bank ',
        'Maybank',
        'Public Bank',
        'RHB Bank'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#List_of_foreign_banks_(commercial)
     */
    protected static \$foreignBanks = array(
        'Bangkok Bank Berhad',
        'Bank of America Malaysia Berhad',
        'Bank of China (Malaysia) Berhad',
        'Bank of Tokyo-Mitsubishi UFJ (Malaysia) Berhad',
        'BNP Paribas Malaysia Berhad',
        'China Construction Bank',
        'Citibank Berhad',
        'Deutsche Bank (Malaysia) Berhad',
        'HSBC Bank Malaysia Berhad',
        'India International Bank (Malaysia) Berhad',
        'Industrial and Commercial Bank of China (Malaysia) Berhad',
        'J.P. Morgan Chase Bank Berhad',
        'Mizuho Bank (Malaysia) Berhad',
        'National Bank of Abu Dhabi Malaysia Berhad',
        'OCBC Bank (Malaysia) Berhad',
        'Standard Chartered Bank Malaysia Berhad',
        'Sumitomo Mitsui Banking Corporation Malaysia Berhad',
        'The Bank of Nova Scotia Berhad',
        'United Overseas Bank (Malaysia) Bhd.'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Development_Financial_Institutions_(Government-owned_banks)_(full_list)
     */
    protected static \$governmentBanks = array(
        'Agro Bank Malaysia',
        'Bank Pembangunan Malaysia Berhad (BPMB) (The development bank of Malaysia)',
        'Bank Rakyat',
        'Bank Simpanan Nasional',
        'Credit Guarantee Corporation Malaysia Berhad (CGC)',
        'Export-Import Bank of Malaysia Berhad (Exim Bank)',
        'Malaysia Debt Ventures Berhad',
        'Malaysian Industrial Development Finance Berhad (MIDF)',
        'SME Bank Berhad',
        'Sabah Development Bank Berhad (SDB)',
        'Sabah Credit Corporation (SCC)',
        'Tabung Haji',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia#Investment-Link_Funds_(Insurance_Companies_-_Takaful_included)
     */
    protected static \$insuranceCompanies = array(
        'AIA Malaysia',
        'AIG Malaysia',
        'Allianz Malaysia',
        'AXA AFFIN Life Insurance',
        'Berjaya General Insurance',
        'Etiqa Insurance',
        'Great Eastern Insurance',
        'Hong Leong Assurance',
        'Kurnia Insurans Malaysia',
        'Manulife Malaysia Insurance',
        'MSIG Malaysia',
        'Prudential Malaysia',
        'Tokio Marine Life Malaysia Insurance',
        'UNI.ASIA General Insurance',
        'Zurich Insurance Malaysia',
    );

    /**
     * @link http://www.bankswiftcode.org/malaysia/
     */
    protected static \$swiftCodes = array(
        'ABNAMY2AXXX','ABNAMYKLPNG','ABNAMYKLXXX','AFBQMYKLXXX','AIBBMYKLXXX',
        'AISLMYKLXXX','AMMBMYKLXXX','ARBKMYKLXXX',
        'BIMBMYKLXXX','BISLMYKAXXX','BKCHMYKLXXX','BKKBMYKLXXX','BMMBMYKLXXX',
        'BNMAMYKLXXX','BNPAMYKAXXX','BOFAMY2XLBN','BOFAMY2XXXX','BOTKMYKAXXX',
        'BOTKMYKXXXX',
        'CHASMYKXKEY','CHASMYKXXXX','CIBBMYKAXXX','CIBBMYKLXXX','CITIMYKLJOD',
        'CITIMYKLLAB','CITIMYKLPEN','CITIMYKLXXX','COIMMYKLXXX','CTBBMYKLXXX',
        'DABEMYKLXXX','DBSSMY2AXXX','DEUTMYKLBLB','DEUTMYKLGMO','DEUTMYKLISB',
        'DEUTMYKLXXX',
        'EIBBMYKLXXX','EOBBMYKLXXX','EXMBMYKLXXX',
        'FEEBMYKAXXX',
        'HBMBMYKLXXX','HDSBMY2PSEL','HDSBMY2PXXX','HLBBMYKLIBU','HLBBMYKLJBU',
        'HLBBMYKLKCH','HLBBMYKLPNG','HLBBMYKLXXX','HLIBMYKLXXX','HMABMYKLXXX',
        'HSBCMYKAXXX','HSTMMYKLGWS','HSTMMYKLXXX',
        'KAFBMYKLXXX','KFHOMYKLXXX',
        'MBBEMYKAXXX','MBBEMYKLBAN','MBBEMYKLBBG','MBBEMYKLBWC','MBBEMYKLCSD',
        'MBBEMYKLIPH','MBBEMYKLJOB','MBBEMYKLKEP','MBBEMYKLKIN','MBBEMYKLKLC',
        'MBBEMYKLMAL','MBBEMYKLPEN','MBBEMYKLPGC','MBBEMYKLPJC','MBBEMYKLPJY',
        'MBBEMYKLPKG','MBBEMYKLPSG','MBBEMYKLPUD','MBBEMYKLSAC','MBBEMYKLSBN',
        'MBBEMYKLSHA','MBBEMYKLSUB','MBBEMYKLWSD','MBBEMYKLXXX','MBBEMYKLYSL',
        'MFBBMYKLXXX','MHCBMYKAXXX',
        'NOSCMY2LXXX','NOSCMYKLXXX',
        'OABBMYKLXXX','OCBCMYKLXXX','OSKIMYKLXXX',
        'PBBEMYKLXXX','PBLLMYKAXXX','PCGLMYKLXXX','PERMMYKLXXX','PHBMMYKLXXX',
        'PTRDMYKLXXX','PTROMYKLFSD','PTROMYKLXXX',
        'RHBAMYKLXXX','RHBBMYKAXXX','RHBBMYKLXXX','RJHIMYKLXXX',
        'SCBLMYKXLAB','SCBLMYKXXXX','SMBCMYKAXXX',
        'UIIBMYKLXXX','UOVBMYKLCND','UOVBMYKLXXX',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_ringgit
     */
    protected static \$currencySymbol = array(
        'RM'
    );

    /**
     * Return a Malaysian Bank
     * 
     * @example 'Maybank'
     * 
     * @return @string
     */
    public function bank()
    {
        \$formats = static::randomElement(static::\$bankFormats);

        return \$this->generator->parse(\$formats);
    }

    /**
     * Return a Malaysian Bank account number
     * 
     * @example '1234567890123456'
     * 
     * @return @string
     */
    public function bankAccountNumber()
    {
        \$formats = static::randomElement(static::\$bankAccountNumberFormats);

        return static::numerify(\$formats);
    }

    /**
     * Return a Malaysian Local Bank
     * 
     * @example 'Public Bank'
     * 
     * @return @string
     */
    public static function localBank()
    {
        return static::randomElement(static::\$localBanks);
    }

    /**
     * Return a Malaysian Foreign Bank
     * 
     * @example 'Citibank Berhad'
     * 
     * @return @string
     */
    public static function foreignBank()
    {
        return static::randomElement(static::\$foreignBanks);
    }

    /**
     * Return a Malaysian Government Bank
     * 
     * @example 'Bank Simpanan Nasional'
     * 
     * @return @string
     */
    public static function governmentBank()
    {
        return static::randomElement(static::\$governmentBanks);
    }

    /**
     * Return a Malaysian insurance company
     * 
     * @example 'AIA Malaysia'
     * 
     * @return @string
     */
    public static function insurance()
    {
        return static::randomElement(static::\$insuranceCompanies);
    }

    /**
     * Return a Malaysian Bank SWIFT Code
     * 
     * @example 'MBBEMYKLXXX'
     * 
     * @return @string
     */
    public static function swiftCode()
    {
        return static::toUpper(static::lexify(static::randomElement(static::\$swiftCodes)));
    }

    /**
     * Return the Malaysian currency symbol
     * 
     * @example 'RM'
     * 
     * @return @string
     */
    public static function currencySymbol()
    {
        return static::randomElement(static::\$currencySymbol);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Payment.php");
    }
}
