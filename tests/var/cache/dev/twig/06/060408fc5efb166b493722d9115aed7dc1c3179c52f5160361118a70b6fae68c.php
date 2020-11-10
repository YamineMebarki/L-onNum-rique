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

/* vendor/symfony/intl/Resources/data/regions/pt_PT.json */
class __TwigTemplate_a7cd44fe64104a2c4cc26a8c66f0699e05317842b6ae5f6c48a8ffc051b4a72a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/pt_PT.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/pt_PT.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AM\": \"Arménia\",
        \"AX\": \"Alanda\",
        \"BD\": \"Bangladeche\",
        \"BH\": \"Barém\",
        \"BJ\": \"Benim\",
        \"BS\": \"Baamas\",
        \"CC\": \"Ilhas dos Cocos (Keeling)\",
        \"CD\": \"Congo-Kinshasa\",
        \"CG\": \"Congo-Brazzaville\",
        \"CI\": \"Côte d’Ivoire (Costa do Marfim)\",
        \"CW\": \"Curaçau\",
        \"CX\": \"Ilha do Natal\",
        \"CZ\": \"Chéquia\",
        \"DJ\": \"Jibuti\",
        \"DM\": \"Domínica\",
        \"EE\": \"Estónia\",
        \"EH\": \"Sara Ocidental\",
        \"FK\": \"Ilhas Malvinas (Falkland)\",
        \"FO\": \"Ilhas Faroé\",
        \"GG\": \"Guernesey\",
        \"GL\": \"Gronelândia\",
        \"GU\": \"Guame\",
        \"IR\": \"Irão\",
        \"KE\": \"Quénia\",
        \"KI\": \"Quiribáti\",
        \"KN\": \"São Cristóvão e Neves\",
        \"KW\": \"Koweit\",
        \"KY\": \"Ilhas Caimão\",
        \"LI\": \"Listenstaine\",
        \"LK\": \"Sri Lanca\",
        \"LV\": \"Letónia\",
        \"MC\": \"Mónaco\",
        \"MD\": \"Moldávia\",
        \"MG\": \"Madagáscar\",
        \"MK\": \"Macedónia do Norte\",
        \"MS\": \"Monserrate\",
        \"MU\": \"Maurícia\",
        \"MW\": \"Maláui\",
        \"NC\": \"Nova Caledónia\",
        \"NU\": \"Niuê\",
        \"PL\": \"Polónia\",
        \"PS\": \"Territórios palestinianos\",
        \"RO\": \"Roménia\",
        \"SI\": \"Eslovénia\",
        \"SM\": \"São Marinho\",
        \"SV\": \"Salvador\",
        \"SX\": \"São Martinho (Sint Maarten)\",
        \"TF\": \"Territórios Austrais Franceses\",
        \"TJ\": \"Tajiquistão\",
        \"TK\": \"Toquelau\",
        \"TM\": \"Turquemenistão\",
        \"TT\": \"Trindade e Tobago\",
        \"UM\": \"Ilhas Menores Afastadas dos EUA\",
        \"UZ\": \"Usbequistão\",
        \"VI\": \"Ilhas Virgens dos EUA\",
        \"VN\": \"Vietname\",
        \"YE\": \"Iémen\",
        \"YT\": \"Maiote\",
        \"ZW\": \"Zimbabué\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/pt_PT.json";
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
        \"AM\": \"Arménia\",
        \"AX\": \"Alanda\",
        \"BD\": \"Bangladeche\",
        \"BH\": \"Barém\",
        \"BJ\": \"Benim\",
        \"BS\": \"Baamas\",
        \"CC\": \"Ilhas dos Cocos (Keeling)\",
        \"CD\": \"Congo-Kinshasa\",
        \"CG\": \"Congo-Brazzaville\",
        \"CI\": \"Côte d’Ivoire (Costa do Marfim)\",
        \"CW\": \"Curaçau\",
        \"CX\": \"Ilha do Natal\",
        \"CZ\": \"Chéquia\",
        \"DJ\": \"Jibuti\",
        \"DM\": \"Domínica\",
        \"EE\": \"Estónia\",
        \"EH\": \"Sara Ocidental\",
        \"FK\": \"Ilhas Malvinas (Falkland)\",
        \"FO\": \"Ilhas Faroé\",
        \"GG\": \"Guernesey\",
        \"GL\": \"Gronelândia\",
        \"GU\": \"Guame\",
        \"IR\": \"Irão\",
        \"KE\": \"Quénia\",
        \"KI\": \"Quiribáti\",
        \"KN\": \"São Cristóvão e Neves\",
        \"KW\": \"Koweit\",
        \"KY\": \"Ilhas Caimão\",
        \"LI\": \"Listenstaine\",
        \"LK\": \"Sri Lanca\",
        \"LV\": \"Letónia\",
        \"MC\": \"Mónaco\",
        \"MD\": \"Moldávia\",
        \"MG\": \"Madagáscar\",
        \"MK\": \"Macedónia do Norte\",
        \"MS\": \"Monserrate\",
        \"MU\": \"Maurícia\",
        \"MW\": \"Maláui\",
        \"NC\": \"Nova Caledónia\",
        \"NU\": \"Niuê\",
        \"PL\": \"Polónia\",
        \"PS\": \"Territórios palestinianos\",
        \"RO\": \"Roménia\",
        \"SI\": \"Eslovénia\",
        \"SM\": \"São Marinho\",
        \"SV\": \"Salvador\",
        \"SX\": \"São Martinho (Sint Maarten)\",
        \"TF\": \"Territórios Austrais Franceses\",
        \"TJ\": \"Tajiquistão\",
        \"TK\": \"Toquelau\",
        \"TM\": \"Turquemenistão\",
        \"TT\": \"Trindade e Tobago\",
        \"UM\": \"Ilhas Menores Afastadas dos EUA\",
        \"UZ\": \"Usbequistão\",
        \"VI\": \"Ilhas Virgens dos EUA\",
        \"VN\": \"Vietname\",
        \"YE\": \"Iémen\",
        \"YT\": \"Maiote\",
        \"ZW\": \"Zimbabué\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/pt_PT.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/pt_PT.json");
    }
}
