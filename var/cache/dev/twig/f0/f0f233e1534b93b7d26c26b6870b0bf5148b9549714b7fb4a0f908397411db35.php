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

/* vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/PhoneNumber.php */
class __TwigTemplate_77b41924b59f5747e4d4d148fae643adde2ba64cbb64249ee06835d75c5d60d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\uk_UA;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @see list of Ukraine mobile formats (2017-08-08), source: https://ru.wikipedia.org/wiki/%D0%A2%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BF%D0%BB%D0%B0%D0%BD_%D0%BD%D1%83%D0%BC%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8_%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%8B
     */
    protected static \$formats = array(

        // International format (mobile)
        '+38050#######',
        '+38066#######',
        '+38068#######',
        '+38096#######',
        '+38067#######',
        '+38091#######',
        '+38092#######',
        '+38093#######',
        '+38094#######',
        '+38095#######',
        '+38096#######',
        '+38097#######',
        '+38098#######',
        '+38063#######',
        '+38099#######',

        // Internal country format (mobile)
        '050#######',
        '066#######',
        '068#######',
        '096#######',
        '067#######',
        '091#######',
        '092#######',
        '093#######',
        '094#######',
        '095#######',
        '096#######',
        '097#######',
        '098#######',
        '063#######',
        '099#######',

        // More generic formats
        '+38(0##)#######',
        '+38(0###)######',
        '+38(0####)#####'
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\uk_UA;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @see list of Ukraine mobile formats (2017-08-08), source: https://ru.wikipedia.org/wiki/%D0%A2%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BF%D0%BB%D0%B0%D0%BD_%D0%BD%D1%83%D0%BC%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8_%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%8B
     */
    protected static \$formats = array(

        // International format (mobile)
        '+38050#######',
        '+38066#######',
        '+38068#######',
        '+38096#######',
        '+38067#######',
        '+38091#######',
        '+38092#######',
        '+38093#######',
        '+38094#######',
        '+38095#######',
        '+38096#######',
        '+38097#######',
        '+38098#######',
        '+38063#######',
        '+38099#######',

        // Internal country format (mobile)
        '050#######',
        '066#######',
        '068#######',
        '096#######',
        '067#######',
        '091#######',
        '092#######',
        '093#######',
        '094#######',
        '095#######',
        '096#######',
        '097#######',
        '098#######',
        '063#######',
        '099#######',

        // More generic formats
        '+38(0##)#######',
        '+38(0###)######',
        '+38(0####)#####'
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/PhoneNumber.php");
    }
}
