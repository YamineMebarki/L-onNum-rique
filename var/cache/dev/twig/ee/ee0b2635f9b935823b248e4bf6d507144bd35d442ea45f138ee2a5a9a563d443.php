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

/* vendor/symfony/intl/Resources/data/regions/sw_KE.json */
class __TwigTemplate_f6026bc5aaa920c276b647af1a77a4380de13e7de3d64ace772d16cb7a6c42c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/sw_KE.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/sw_KE.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AF\": \"Afghanistani\",
        \"AI\": \"Anguila\",
        \"AQ\": \"Antaktika\",
        \"AZ\": \"Azabajani\",
        \"BJ\": \"Benini\",
        \"BT\": \"Bhutani\",
        \"BY\": \"Belarusi\",
        \"CC\": \"Visiwa vya Kokos (Keeling)\",
        \"CD\": \"Kongo - Kinshasa\",
        \"CI\": \"Ivorikosti\",
        \"CV\": \"Kepuvede\",
        \"CY\": \"Saiprasi\",
        \"DK\": \"Denmaki\",
        \"EC\": \"Ekwado\",
        \"FM\": \"Mikronesia\",
        \"GA\": \"Gaboni\",
        \"GL\": \"Grinilandi\",
        \"GP\": \"Gwadelupe\",
        \"GS\": \"Visiwa vya Jojia ya Kusini na Sandwich ya Kusini\",
        \"GU\": \"Guami\",
        \"HR\": \"Kroashia\",
        \"IO\": \"Himaya ya Uingereza katika Bahari Hindi\",
        \"JO\": \"Yordani\",
        \"KY\": \"Visiwa vya Kaimani\",
        \"LA\": \"Laosi\",
        \"LB\": \"Lebanoni\",
        \"LI\": \"Lishenteni\",
        \"LS\": \"Lesotho\",
        \"LU\": \"Lasembagi\",
        \"LV\": \"Lativia\",
        \"MA\": \"Moroko\",
        \"MC\": \"Monako\",
        \"MK\": \"Masedonia\",
        \"MM\": \"Myama (Burma)\",
        \"MQ\": \"Martiniki\",
        \"MS\": \"Montserati\",
        \"MV\": \"Maldivi\",
        \"NC\": \"Nyukaledonia\",
        \"NE\": \"Nijeri\",
        \"NO\": \"Norwe\",
        \"NP\": \"Nepali\",
        \"OM\": \"Omani\",
        \"PF\": \"Polinesia ya Ufaransa\",
        \"PG\": \"Papua Guinea Mpya\",
        \"PL\": \"Polandi\",
        \"PR\": \"Puetoriko\",
        \"PS\": \"Himaya za Palestina\",
        \"PY\": \"Paragwai\",
        \"QA\": \"Katari\",
        \"SG\": \"Singapuri\",
        \"SR\": \"Surinamu\",
        \"ST\": \"Sao Tome na Prinsipe\",
        \"SY\": \"Shamu\",
        \"TD\": \"Chadi\",
        \"TH\": \"Thailandi\",
        \"TM\": \"Turukimenstani\",
        \"TW\": \"Taiwani\",
        \"UA\": \"Ukreni\",
        \"UY\": \"Urugwai\",
        \"VA\": \"Mji wa Vatikani\",
        \"VG\": \"Visiwa vya Virgin vya Uingereza\",
        \"VI\": \"Visiwa vya Virgin vya Marekani\",
        \"VN\": \"Vietnamu\",
        \"YT\": \"Mayote\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/sw_KE.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"AF\": \"Afghanistani\",
        \"AI\": \"Anguila\",
        \"AQ\": \"Antaktika\",
        \"AZ\": \"Azabajani\",
        \"BJ\": \"Benini\",
        \"BT\": \"Bhutani\",
        \"BY\": \"Belarusi\",
        \"CC\": \"Visiwa vya Kokos (Keeling)\",
        \"CD\": \"Kongo - Kinshasa\",
        \"CI\": \"Ivorikosti\",
        \"CV\": \"Kepuvede\",
        \"CY\": \"Saiprasi\",
        \"DK\": \"Denmaki\",
        \"EC\": \"Ekwado\",
        \"FM\": \"Mikronesia\",
        \"GA\": \"Gaboni\",
        \"GL\": \"Grinilandi\",
        \"GP\": \"Gwadelupe\",
        \"GS\": \"Visiwa vya Jojia ya Kusini na Sandwich ya Kusini\",
        \"GU\": \"Guami\",
        \"HR\": \"Kroashia\",
        \"IO\": \"Himaya ya Uingereza katika Bahari Hindi\",
        \"JO\": \"Yordani\",
        \"KY\": \"Visiwa vya Kaimani\",
        \"LA\": \"Laosi\",
        \"LB\": \"Lebanoni\",
        \"LI\": \"Lishenteni\",
        \"LS\": \"Lesotho\",
        \"LU\": \"Lasembagi\",
        \"LV\": \"Lativia\",
        \"MA\": \"Moroko\",
        \"MC\": \"Monako\",
        \"MK\": \"Masedonia\",
        \"MM\": \"Myama (Burma)\",
        \"MQ\": \"Martiniki\",
        \"MS\": \"Montserati\",
        \"MV\": \"Maldivi\",
        \"NC\": \"Nyukaledonia\",
        \"NE\": \"Nijeri\",
        \"NO\": \"Norwe\",
        \"NP\": \"Nepali\",
        \"OM\": \"Omani\",
        \"PF\": \"Polinesia ya Ufaransa\",
        \"PG\": \"Papua Guinea Mpya\",
        \"PL\": \"Polandi\",
        \"PR\": \"Puetoriko\",
        \"PS\": \"Himaya za Palestina\",
        \"PY\": \"Paragwai\",
        \"QA\": \"Katari\",
        \"SG\": \"Singapuri\",
        \"SR\": \"Surinamu\",
        \"ST\": \"Sao Tome na Prinsipe\",
        \"SY\": \"Shamu\",
        \"TD\": \"Chadi\",
        \"TH\": \"Thailandi\",
        \"TM\": \"Turukimenstani\",
        \"TW\": \"Taiwani\",
        \"UA\": \"Ukreni\",
        \"UY\": \"Urugwai\",
        \"VA\": \"Mji wa Vatikani\",
        \"VG\": \"Visiwa vya Virgin vya Uingereza\",
        \"VI\": \"Visiwa vya Virgin vya Marekani\",
        \"VN\": \"Vietnamu\",
        \"YT\": \"Mayote\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/sw_KE.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/sw_KE.json");
    }
}
