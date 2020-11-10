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

/* vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/PhoneNumber.php */
class __TwigTemplate_6329576a232d8b039fc4372c18c613822452903c44ce0660e704fa24e68bec2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\nl_NL;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '06 ########',
        '06-########',
        '+316-########',
        '+31(0)6-########',
        '+316 ########',
        '+31(0)6 ########',
        '01# #######',
        '(01#) #######',
        '+311# #######',
        '02# #######',
        '(02#) #######',
        '+312# #######',
        '03# #######',
        '(03#) #######',
        '+313# #######',
        '04# #######',
        '(04#) #######',
        '+314# #######',
        '05# #######',
        '(05#) #######',
        '+315# #######',
        '07# #######',
        '(07#) #######',
        '+317# #######',
        '0800 ######',
        '+31800 ######',
        '088 #######',
        '+3188 #######',
        '0900 ######',
        '+31900 ######',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\nl_NL;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '06 ########',
        '06-########',
        '+316-########',
        '+31(0)6-########',
        '+316 ########',
        '+31(0)6 ########',
        '01# #######',
        '(01#) #######',
        '+311# #######',
        '02# #######',
        '(02#) #######',
        '+312# #######',
        '03# #######',
        '(03#) #######',
        '+313# #######',
        '04# #######',
        '(04#) #######',
        '+314# #######',
        '05# #######',
        '(05#) #######',
        '+315# #######',
        '07# #######',
        '(07#) #######',
        '+317# #######',
        '0800 ######',
        '+31800 ######',
        '088 #######',
        '+3188 #######',
        '0900 ######',
        '+31900 ######',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/nl_NL/PhoneNumber.php");
    }
}
