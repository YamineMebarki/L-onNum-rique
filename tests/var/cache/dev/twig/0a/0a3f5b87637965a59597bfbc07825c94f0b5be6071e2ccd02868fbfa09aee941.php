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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_NG/PhoneNumber.php */
class __TwigTemplate_897e1d70a67a02e67a453f819e28c66b3d064cd5888e421ddb3947818ae5afd9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_NG;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
      // Local
      '0703#######',
      '0704#######',
      '0705#######',
      '0706#######',
      '0707#######',
      '0708#######',
      '0709#######',
      '0802#######',
      '0803#######',
      '0804#######',
      '0805#######',
      '0806#######',
      '0807#######',
      '0808#######',
      '0809#######',
      '0810#######',
      '0811#######',
      '0812#######',
      '0813#######',
      '0814#######',
      '0815#######',
      '0816#######',
      '0817#######',
      '0818#######',
      '0819#######',
      '0902#######',
      '0903#######',
      '0905#######',
      '0908#######',
      '0909#######',
      
      '+234703#######',
      '+234704#######',
      '+234705#######',
      '+234706#######',
      '+234707#######',
      '+234708#######',
      '+234709#######',
      '+234802#######',
      '+234803#######',
      '+234804#######',
      '+234805#######',
      '+234806#######',
      '+234807#######',
      '+234808#######',
      '+234809#######',
      '+234810#######',
      '+234811#######',
      '+234812#######',
      '+234813#######',
      '+234814#######',
      '+234815#######',
      '+234816#######',
      '+234817#######',
      '+234818#######',
      '+234819#######',
      '+234902#######',
      '+234903#######',
      '+234905#######',
      '+234908#######',
      '+234909#######',

      '0703 ### ####',
      '0704 ### ####',
      '0705 ### ####',
      '0706 ### ####',
      '0707 ### ####',
      '0708 ### ####',
      '0709 ### ####',
      '0802 ### ####',
      '0803 ### ####',
      '0804 ### ####',
      '0805 ### ####',
      '0806 ### ####',
      '0807 ### ####',
      '0808 ### ####',
      '0809 ### ####',
      '0810 ### ####',
      '0811 ### ####',
      '0812 ### ####',
      '0813 ### ####',
      '0814 ### ####',
      '0815 ### ####',
      '0816 ### ####',
      '0817 ### ####',
      '0818 ### ####',
      '0819 ### ####',
      '0902 ### ####',
      '0903 ### ####',
      '0905 ### ####',
      '0908 ### ####',
      '0909 ### ####',
      
      '+234 703 ### ####',
      '+234 704 ### ####',
      '+234 705 ### ####',
      '+234 706 ### ####',
      '+234 707 ### ####',
      '+234 708 ### ####',
      '+234 709 ### ####',
      '+234 802 ### ####',
      '+234 803 ### ####',
      '+234 804 ### ####',
      '+234 805 ### ####',
      '+234 806 ### ####',
      '+234 807 ### ####',
      '+234 808 ### ####',
      '+234 809 ### ####',
      '+234 810 ### ####',
      '+234 811 ### ####',
      '+234 812 ### ####',
      '+234 813 ### ####',
      '+234 814 ### ####',
      '+234 815 ### ####',
      '+234 816 ### ####',
      '+234 817 ### ####',
      '+234 818 ### ####',
      '+234 819 ### ####',
      '+234 902 ### ####',
      '+234 903 ### ####',
      '+234 905 ### ####',
      '+234 908 ### ####',
      '+234 909 ### ####',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_NG;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
      // Local
      '0703#######',
      '0704#######',
      '0705#######',
      '0706#######',
      '0707#######',
      '0708#######',
      '0709#######',
      '0802#######',
      '0803#######',
      '0804#######',
      '0805#######',
      '0806#######',
      '0807#######',
      '0808#######',
      '0809#######',
      '0810#######',
      '0811#######',
      '0812#######',
      '0813#######',
      '0814#######',
      '0815#######',
      '0816#######',
      '0817#######',
      '0818#######',
      '0819#######',
      '0902#######',
      '0903#######',
      '0905#######',
      '0908#######',
      '0909#######',
      
      '+234703#######',
      '+234704#######',
      '+234705#######',
      '+234706#######',
      '+234707#######',
      '+234708#######',
      '+234709#######',
      '+234802#######',
      '+234803#######',
      '+234804#######',
      '+234805#######',
      '+234806#######',
      '+234807#######',
      '+234808#######',
      '+234809#######',
      '+234810#######',
      '+234811#######',
      '+234812#######',
      '+234813#######',
      '+234814#######',
      '+234815#######',
      '+234816#######',
      '+234817#######',
      '+234818#######',
      '+234819#######',
      '+234902#######',
      '+234903#######',
      '+234905#######',
      '+234908#######',
      '+234909#######',

      '0703 ### ####',
      '0704 ### ####',
      '0705 ### ####',
      '0706 ### ####',
      '0707 ### ####',
      '0708 ### ####',
      '0709 ### ####',
      '0802 ### ####',
      '0803 ### ####',
      '0804 ### ####',
      '0805 ### ####',
      '0806 ### ####',
      '0807 ### ####',
      '0808 ### ####',
      '0809 ### ####',
      '0810 ### ####',
      '0811 ### ####',
      '0812 ### ####',
      '0813 ### ####',
      '0814 ### ####',
      '0815 ### ####',
      '0816 ### ####',
      '0817 ### ####',
      '0818 ### ####',
      '0819 ### ####',
      '0902 ### ####',
      '0903 ### ####',
      '0905 ### ####',
      '0908 ### ####',
      '0909 ### ####',
      
      '+234 703 ### ####',
      '+234 704 ### ####',
      '+234 705 ### ####',
      '+234 706 ### ####',
      '+234 707 ### ####',
      '+234 708 ### ####',
      '+234 709 ### ####',
      '+234 802 ### ####',
      '+234 803 ### ####',
      '+234 804 ### ####',
      '+234 805 ### ####',
      '+234 806 ### ####',
      '+234 807 ### ####',
      '+234 808 ### ####',
      '+234 809 ### ####',
      '+234 810 ### ####',
      '+234 811 ### ####',
      '+234 812 ### ####',
      '+234 813 ### ####',
      '+234 814 ### ####',
      '+234 815 ### ####',
      '+234 816 ### ####',
      '+234 817 ### ####',
      '+234 818 ### ####',
      '+234 819 ### ####',
      '+234 902 ### ####',
      '+234 903 ### ####',
      '+234 905 ### ####',
      '+234 908 ### ####',
      '+234 909 ### ####',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_NG/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_NG/PhoneNumber.php");
    }
}
