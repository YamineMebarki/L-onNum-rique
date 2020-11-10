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

/* vendor/fzaninotto/faker/src/Faker/Provider/me_ME/Company.php */
class __TwigTemplate_dec1173a70c5b8d0c114094b83cb2c1c14fcd3c664beb5b2db699a05aedd2d38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/me_ME/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/me_ME/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\me_ME;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * Source: extracted from http://www.crps.me/index.php/predraga
     */
    protected static \$names = array(
        '13 Jul - Plantaže ', '19 Decembar Podgorica',
        'Agrokombinat 13 Jul', 'Agrokombinat 13 Jul', 'Atlas Banka', 'Autoremont Osmanagić',
        'Božur-Velexport', 'Businessmontenegro Podgorica',
        'Cemex Montenegro', 'Centralna Depozitarna Agencija ', 'Centrokoža-Produkt ', 'CG Broker', 'CMC AD Podgorica', 'Crnagoradrvo', 'Crnagoraput', 'Crnogorska Komercijalna Banka ', 'Crnogorski Telekom', 'Doclea Express Podgorica', 'Društvo Za Upravljanje Investicionim Fondom Atlas Mont', 'Drvoimpex', 'Drvoimpex', 'Drvoimpex', 'Drvoimpex-Bams', 'Drvoimpex-Fincom', 'Drvoimpex-Gm Podgorica', 'Drvoimpex-Mobile', 'Duklja - Zora', 'Duklja Podgorica', 'Duklja-Pekara', 'Duvanski Kombinat, Podgorica',
        'Elastik-Plastika Ad Podgorica', 'Erste Bank Ad Podgorica', 'Euromarket Banka Nlb Grupa ', 'Exal', 'Export-Import Servisimport Si',
        'Fond Zajedničkog Ulaganja Moneta', 'Goricapromet Podgorica', 'Gornji Ibar A.D.', 'Gp Radnik Beton', 'Građevinar Podgorica', 'Gross Market Podgorica',
        'H.T.P.Velika Plaža A.D', 'Higijena Podgorica', 'Hipotekarna Banka', 'Hotel Ravnjak',
        'Industriaimpex A.D.', 'Inpek', 'Institut Za Šumarstvo ', 'Intours', 'Invest Banka Montenegro', 'Izdavačko-Prometno Društvo Ljetopis',
        'Lovćen Podgorica', 'Lovćen-Re', 'Lovćeninvest Podgorica', 'Lutrija Crne Gore',
        'Margomarket Podgorica', 'Mašinopromet', 'Mašinopromet-Commerce', 'Mesopromet Podgorica', 'Mljekara', 'Moneta A.D.', 'Montenegroberza Akcionarsko Društvo', 'Morača Podgorica', 'Morača Sa P.O.',
        'Nex Montenegro', 'Novogradnja Ad Podgorica',
        'Osiguravajuće Društvo Swiss Osiguranje',
        'Papir', 'Podgoricaekspres', 'Progas Podgorica', 'Promet', 'Prva Banka Crne Gore Podgorica',
        'Ribnica Commerce',
        'Sava Montenegro Podgorica', 'Si Promet A.D.', 'Sigmobil', 'Societe Generale Banka Montenegro Ad', 'Solar 80 - Elastik', 'Stadion', 'Šumarsko Preduzeće ',
        'Tehnomarketi', 'Tpc Ražnatović', 'Trend A.D.', 'Trgopress',
        'Unifarm ', 'Utip Crna Gora',
        'Vatrostalna Podgorica', 'Velepromet Podgorica', 'Veletrgovina-Kolašin', 'Velimport Podgorica', 'Volumentrade Podgorica',
        'Željeznica Crne Gore', 'Zetatrans'
    );

    protected static \$types = array(
        'A.D.', 'A.D PODGORICA'
    );

    public static function companyType()
    {
        return static::randomElement(static::\$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::\$names);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/me_ME/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\me_ME;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{companyName}} {{companyType}}'
    );

    /**
     * Source: extracted from http://www.crps.me/index.php/predraga
     */
    protected static \$names = array(
        '13 Jul - Plantaže ', '19 Decembar Podgorica',
        'Agrokombinat 13 Jul', 'Agrokombinat 13 Jul', 'Atlas Banka', 'Autoremont Osmanagić',
        'Božur-Velexport', 'Businessmontenegro Podgorica',
        'Cemex Montenegro', 'Centralna Depozitarna Agencija ', 'Centrokoža-Produkt ', 'CG Broker', 'CMC AD Podgorica', 'Crnagoradrvo', 'Crnagoraput', 'Crnogorska Komercijalna Banka ', 'Crnogorski Telekom', 'Doclea Express Podgorica', 'Društvo Za Upravljanje Investicionim Fondom Atlas Mont', 'Drvoimpex', 'Drvoimpex', 'Drvoimpex', 'Drvoimpex-Bams', 'Drvoimpex-Fincom', 'Drvoimpex-Gm Podgorica', 'Drvoimpex-Mobile', 'Duklja - Zora', 'Duklja Podgorica', 'Duklja-Pekara', 'Duvanski Kombinat, Podgorica',
        'Elastik-Plastika Ad Podgorica', 'Erste Bank Ad Podgorica', 'Euromarket Banka Nlb Grupa ', 'Exal', 'Export-Import Servisimport Si',
        'Fond Zajedničkog Ulaganja Moneta', 'Goricapromet Podgorica', 'Gornji Ibar A.D.', 'Gp Radnik Beton', 'Građevinar Podgorica', 'Gross Market Podgorica',
        'H.T.P.Velika Plaža A.D', 'Higijena Podgorica', 'Hipotekarna Banka', 'Hotel Ravnjak',
        'Industriaimpex A.D.', 'Inpek', 'Institut Za Šumarstvo ', 'Intours', 'Invest Banka Montenegro', 'Izdavačko-Prometno Društvo Ljetopis',
        'Lovćen Podgorica', 'Lovćen-Re', 'Lovćeninvest Podgorica', 'Lutrija Crne Gore',
        'Margomarket Podgorica', 'Mašinopromet', 'Mašinopromet-Commerce', 'Mesopromet Podgorica', 'Mljekara', 'Moneta A.D.', 'Montenegroberza Akcionarsko Društvo', 'Morača Podgorica', 'Morača Sa P.O.',
        'Nex Montenegro', 'Novogradnja Ad Podgorica',
        'Osiguravajuće Društvo Swiss Osiguranje',
        'Papir', 'Podgoricaekspres', 'Progas Podgorica', 'Promet', 'Prva Banka Crne Gore Podgorica',
        'Ribnica Commerce',
        'Sava Montenegro Podgorica', 'Si Promet A.D.', 'Sigmobil', 'Societe Generale Banka Montenegro Ad', 'Solar 80 - Elastik', 'Stadion', 'Šumarsko Preduzeće ',
        'Tehnomarketi', 'Tpc Ražnatović', 'Trend A.D.', 'Trgopress',
        'Unifarm ', 'Utip Crna Gora',
        'Vatrostalna Podgorica', 'Velepromet Podgorica', 'Veletrgovina-Kolašin', 'Velimport Podgorica', 'Volumentrade Podgorica',
        'Željeznica Crne Gore', 'Zetatrans'
    );

    protected static \$types = array(
        'A.D.', 'A.D PODGORICA'
    );

    public static function companyType()
    {
        return static::randomElement(static::\$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::\$names);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/me_ME/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/me_ME/Company.php");
    }
}
