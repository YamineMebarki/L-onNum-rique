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

/* vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/PhoneNumber.php */
class __TwigTemplate_7ddf222531bb6643c8d0342d98b4a33c49336fdf47cbfe5db1eb2ea6a767edd9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\kk_KZ;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '+7 (701) #######',
        '+7 (702) #######',
        '+7 (705) #######',
        '+7 (707) #######',
        '+7 (727) 239####',
        '+7 (747) #######',
        '+7 (7172) 745###',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\kk_KZ;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        '+7 (701) #######',
        '+7 (702) #######',
        '+7 (705) #######',
        '+7 (707) #######',
        '+7 (727) 239####',
        '+7 (747) #######',
        '+7 (7172) 745###',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/kk_KZ/PhoneNumber.php");
    }
}
