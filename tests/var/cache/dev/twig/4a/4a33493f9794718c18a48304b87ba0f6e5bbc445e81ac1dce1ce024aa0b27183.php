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

/* vendor/symfony/intl/Resources/data/regions/meta.json */
class __TwigTemplate_c21628036d87f62bd0d1715431cdec87b95230d7087a8fadc13fcbda130589e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/meta.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/meta.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Regions\": [
        \"AD\",
        \"AE\",
        \"AF\",
        \"AG\",
        \"AI\",
        \"AL\",
        \"AM\",
        \"AO\",
        \"AQ\",
        \"AR\",
        \"AS\",
        \"AT\",
        \"AU\",
        \"AW\",
        \"AX\",
        \"AZ\",
        \"BA\",
        \"BB\",
        \"BD\",
        \"BE\",
        \"BF\",
        \"BG\",
        \"BH\",
        \"BI\",
        \"BJ\",
        \"BL\",
        \"BM\",
        \"BN\",
        \"BO\",
        \"BQ\",
        \"BR\",
        \"BS\",
        \"BT\",
        \"BV\",
        \"BW\",
        \"BY\",
        \"BZ\",
        \"CA\",
        \"CC\",
        \"CD\",
        \"CF\",
        \"CG\",
        \"CH\",
        \"CI\",
        \"CK\",
        \"CL\",
        \"CM\",
        \"CN\",
        \"CO\",
        \"CR\",
        \"CU\",
        \"CV\",
        \"CW\",
        \"CX\",
        \"CY\",
        \"CZ\",
        \"DE\",
        \"DJ\",
        \"DK\",
        \"DM\",
        \"DO\",
        \"DZ\",
        \"EC\",
        \"EE\",
        \"EG\",
        \"EH\",
        \"ER\",
        \"ES\",
        \"ET\",
        \"FI\",
        \"FJ\",
        \"FK\",
        \"FM\",
        \"FO\",
        \"FR\",
        \"GA\",
        \"GB\",
        \"GD\",
        \"GE\",
        \"GF\",
        \"GG\",
        \"GH\",
        \"GI\",
        \"GL\",
        \"GM\",
        \"GN\",
        \"GP\",
        \"GQ\",
        \"GR\",
        \"GS\",
        \"GT\",
        \"GU\",
        \"GW\",
        \"GY\",
        \"HK\",
        \"HM\",
        \"HN\",
        \"HR\",
        \"HT\",
        \"HU\",
        \"ID\",
        \"IE\",
        \"IL\",
        \"IM\",
        \"IN\",
        \"IO\",
        \"IQ\",
        \"IR\",
        \"IS\",
        \"IT\",
        \"JE\",
        \"JM\",
        \"JO\",
        \"JP\",
        \"KE\",
        \"KG\",
        \"KH\",
        \"KI\",
        \"KM\",
        \"KN\",
        \"KP\",
        \"KR\",
        \"KW\",
        \"KY\",
        \"KZ\",
        \"LA\",
        \"LB\",
        \"LC\",
        \"LI\",
        \"LK\",
        \"LR\",
        \"LS\",
        \"LT\",
        \"LU\",
        \"LV\",
        \"LY\",
        \"MA\",
        \"MC\",
        \"MD\",
        \"ME\",
        \"MF\",
        \"MG\",
        \"MH\",
        \"MK\",
        \"ML\",
        \"MM\",
        \"MN\",
        \"MO\",
        \"MP\",
        \"MQ\",
        \"MR\",
        \"MS\",
        \"MT\",
        \"MU\",
        \"MV\",
        \"MW\",
        \"MX\",
        \"MY\",
        \"MZ\",
        \"NA\",
        \"NC\",
        \"NE\",
        \"NF\",
        \"NG\",
        \"NI\",
        \"NL\",
        \"NO\",
        \"NP\",
        \"NR\",
        \"NU\",
        \"NZ\",
        \"OM\",
        \"PA\",
        \"PE\",
        \"PF\",
        \"PG\",
        \"PH\",
        \"PK\",
        \"PL\",
        \"PM\",
        \"PN\",
        \"PR\",
        \"PS\",
        \"PT\",
        \"PW\",
        \"PY\",
        \"QA\",
        \"RE\",
        \"RO\",
        \"RS\",
        \"RU\",
        \"RW\",
        \"SA\",
        \"SB\",
        \"SC\",
        \"SD\",
        \"SE\",
        \"SG\",
        \"SH\",
        \"SI\",
        \"SJ\",
        \"SK\",
        \"SL\",
        \"SM\",
        \"SN\",
        \"SO\",
        \"SR\",
        \"SS\",
        \"ST\",
        \"SV\",
        \"SX\",
        \"SY\",
        \"SZ\",
        \"TC\",
        \"TD\",
        \"TF\",
        \"TG\",
        \"TH\",
        \"TJ\",
        \"TK\",
        \"TL\",
        \"TM\",
        \"TN\",
        \"TO\",
        \"TR\",
        \"TT\",
        \"TV\",
        \"TW\",
        \"TZ\",
        \"UA\",
        \"UG\",
        \"UM\",
        \"US\",
        \"UY\",
        \"UZ\",
        \"VA\",
        \"VC\",
        \"VE\",
        \"VG\",
        \"VI\",
        \"VN\",
        \"VU\",
        \"WF\",
        \"WS\",
        \"YE\",
        \"YT\",
        \"ZA\",
        \"ZM\",
        \"ZW\"
    ]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/meta.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Regions\": [
        \"AD\",
        \"AE\",
        \"AF\",
        \"AG\",
        \"AI\",
        \"AL\",
        \"AM\",
        \"AO\",
        \"AQ\",
        \"AR\",
        \"AS\",
        \"AT\",
        \"AU\",
        \"AW\",
        \"AX\",
        \"AZ\",
        \"BA\",
        \"BB\",
        \"BD\",
        \"BE\",
        \"BF\",
        \"BG\",
        \"BH\",
        \"BI\",
        \"BJ\",
        \"BL\",
        \"BM\",
        \"BN\",
        \"BO\",
        \"BQ\",
        \"BR\",
        \"BS\",
        \"BT\",
        \"BV\",
        \"BW\",
        \"BY\",
        \"BZ\",
        \"CA\",
        \"CC\",
        \"CD\",
        \"CF\",
        \"CG\",
        \"CH\",
        \"CI\",
        \"CK\",
        \"CL\",
        \"CM\",
        \"CN\",
        \"CO\",
        \"CR\",
        \"CU\",
        \"CV\",
        \"CW\",
        \"CX\",
        \"CY\",
        \"CZ\",
        \"DE\",
        \"DJ\",
        \"DK\",
        \"DM\",
        \"DO\",
        \"DZ\",
        \"EC\",
        \"EE\",
        \"EG\",
        \"EH\",
        \"ER\",
        \"ES\",
        \"ET\",
        \"FI\",
        \"FJ\",
        \"FK\",
        \"FM\",
        \"FO\",
        \"FR\",
        \"GA\",
        \"GB\",
        \"GD\",
        \"GE\",
        \"GF\",
        \"GG\",
        \"GH\",
        \"GI\",
        \"GL\",
        \"GM\",
        \"GN\",
        \"GP\",
        \"GQ\",
        \"GR\",
        \"GS\",
        \"GT\",
        \"GU\",
        \"GW\",
        \"GY\",
        \"HK\",
        \"HM\",
        \"HN\",
        \"HR\",
        \"HT\",
        \"HU\",
        \"ID\",
        \"IE\",
        \"IL\",
        \"IM\",
        \"IN\",
        \"IO\",
        \"IQ\",
        \"IR\",
        \"IS\",
        \"IT\",
        \"JE\",
        \"JM\",
        \"JO\",
        \"JP\",
        \"KE\",
        \"KG\",
        \"KH\",
        \"KI\",
        \"KM\",
        \"KN\",
        \"KP\",
        \"KR\",
        \"KW\",
        \"KY\",
        \"KZ\",
        \"LA\",
        \"LB\",
        \"LC\",
        \"LI\",
        \"LK\",
        \"LR\",
        \"LS\",
        \"LT\",
        \"LU\",
        \"LV\",
        \"LY\",
        \"MA\",
        \"MC\",
        \"MD\",
        \"ME\",
        \"MF\",
        \"MG\",
        \"MH\",
        \"MK\",
        \"ML\",
        \"MM\",
        \"MN\",
        \"MO\",
        \"MP\",
        \"MQ\",
        \"MR\",
        \"MS\",
        \"MT\",
        \"MU\",
        \"MV\",
        \"MW\",
        \"MX\",
        \"MY\",
        \"MZ\",
        \"NA\",
        \"NC\",
        \"NE\",
        \"NF\",
        \"NG\",
        \"NI\",
        \"NL\",
        \"NO\",
        \"NP\",
        \"NR\",
        \"NU\",
        \"NZ\",
        \"OM\",
        \"PA\",
        \"PE\",
        \"PF\",
        \"PG\",
        \"PH\",
        \"PK\",
        \"PL\",
        \"PM\",
        \"PN\",
        \"PR\",
        \"PS\",
        \"PT\",
        \"PW\",
        \"PY\",
        \"QA\",
        \"RE\",
        \"RO\",
        \"RS\",
        \"RU\",
        \"RW\",
        \"SA\",
        \"SB\",
        \"SC\",
        \"SD\",
        \"SE\",
        \"SG\",
        \"SH\",
        \"SI\",
        \"SJ\",
        \"SK\",
        \"SL\",
        \"SM\",
        \"SN\",
        \"SO\",
        \"SR\",
        \"SS\",
        \"ST\",
        \"SV\",
        \"SX\",
        \"SY\",
        \"SZ\",
        \"TC\",
        \"TD\",
        \"TF\",
        \"TG\",
        \"TH\",
        \"TJ\",
        \"TK\",
        \"TL\",
        \"TM\",
        \"TN\",
        \"TO\",
        \"TR\",
        \"TT\",
        \"TV\",
        \"TW\",
        \"TZ\",
        \"UA\",
        \"UG\",
        \"UM\",
        \"US\",
        \"UY\",
        \"UZ\",
        \"VA\",
        \"VC\",
        \"VE\",
        \"VG\",
        \"VI\",
        \"VN\",
        \"VU\",
        \"WF\",
        \"WS\",
        \"YE\",
        \"YT\",
        \"ZA\",
        \"ZM\",
        \"ZW\"
    ]
}
", "vendor/symfony/intl/Resources/data/regions/meta.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/meta.json");
    }
}
