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

/* vendor/fzaninotto/faker/src/Faker/Provider/id_ID/PhoneNumber.php */
class __TwigTemplate_c270882f07fa384a76131262ebf8f40220a13f7fb6672d54f8bd65a7b37b9105 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\id_ID;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        // regional numbers
        '02# #### ###',
        '02## #### ###',
        '03## #### ###',
        '04## #### ###',
        '05## #### ###',
        '06## #### ###',
        '07## #### ###',
        '09## #### ###',

        '02# #### ####',
        '02## #### ####',
        '03## #### ####',
        '04## #### ####',
        '05## #### ####',
        '06## #### ####',
        '07## #### ####',
        '09## #### ####',

        // mobile numbers
        '08## ### ###',   // 0811 XXX XXX, 10 digits, very old
        '08## #### ###',  // 0811 XXXX XXX, 11 digits
        '08## #### ####', // 0811 XXXX XXXX, 12 digits

        // international numbers
        '(+62) 8## ### ###',

        '(+62) 2# #### ###',
        '(+62) 2## #### ###',
        '(+62) 3## #### ###',
        '(+62) 4## #### ###',
        '(+62) 5## #### ###',
        '(+62) 6## #### ###',
        '(+62) 7## #### ###',
        '(+62) 8## #### ###',
        '(+62) 9## #### ###',

        '(+62) 2# #### ####',
        '(+62) 2## #### ####',
        '(+62) 3## #### ####',
        '(+62) 4## #### ####',
        '(+62) 5## #### ####',
        '(+62) 6## #### ####',
        '(+62) 7## #### ####',
        '(+62) 8## #### ####',
        '(+62) 9## #### ####',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\id_ID;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$formats = array(
        // regional numbers
        '02# #### ###',
        '02## #### ###',
        '03## #### ###',
        '04## #### ###',
        '05## #### ###',
        '06## #### ###',
        '07## #### ###',
        '09## #### ###',

        '02# #### ####',
        '02## #### ####',
        '03## #### ####',
        '04## #### ####',
        '05## #### ####',
        '06## #### ####',
        '07## #### ####',
        '09## #### ####',

        // mobile numbers
        '08## ### ###',   // 0811 XXX XXX, 10 digits, very old
        '08## #### ###',  // 0811 XXXX XXX, 11 digits
        '08## #### ####', // 0811 XXXX XXXX, 12 digits

        // international numbers
        '(+62) 8## ### ###',

        '(+62) 2# #### ###',
        '(+62) 2## #### ###',
        '(+62) 3## #### ###',
        '(+62) 4## #### ###',
        '(+62) 5## #### ###',
        '(+62) 6## #### ###',
        '(+62) 7## #### ###',
        '(+62) 8## #### ###',
        '(+62) 9## #### ###',

        '(+62) 2# #### ####',
        '(+62) 2## #### ####',
        '(+62) 3## #### ####',
        '(+62) 4## #### ####',
        '(+62) 5## #### ####',
        '(+62) 6## #### ####',
        '(+62) 7## #### ####',
        '(+62) 8## #### ####',
        '(+62) 9## #### ####',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/id_ID/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/id_ID/PhoneNumber.php");
    }
}
