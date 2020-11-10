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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Company.php */
class __TwigTemplate_5a15b0045d407de4bae24b05e7d9ba06eafb22b2cf0d63f78509d7a75c21be8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_ZA;

/**
 * Class Company.
 */
class Company extends \\Faker\\Provider\\Company
{
    protected static \$legalEntities = array(
        '01', '02', '06', '07', '08', '09', '10', '11', '12', '14', '15', '16', '17', '20', '21', '22', '23', '24', '25',
        '26', '30', '31', '80',
    );

    /**
     * Return a valid company register number.
     *
     * @return string
     */
    public function companyNumber()
    {
        return sprintf(
            '%s/%s/%s',
            \\Faker\\Provider\\DateTime::dateTimeBetween('-50 years', 'now')->format('Y'),
            static::randomNumber(6, true),
            static::randomElement(static::\$legalEntities)
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Company.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_ZA;

/**
 * Class Company.
 */
class Company extends \\Faker\\Provider\\Company
{
    protected static \$legalEntities = array(
        '01', '02', '06', '07', '08', '09', '10', '11', '12', '14', '15', '16', '17', '20', '21', '22', '23', '24', '25',
        '26', '30', '31', '80',
    );

    /**
     * Return a valid company register number.
     *
     * @return string
     */
    public function companyNumber()
    {
        return sprintf(
            '%s/%s/%s',
            \\Faker\\Provider\\DateTime::dateTimeBetween('-50 years', 'now')->format('Y'),
            static::randomNumber(6, true),
            static::randomElement(static::\$legalEntities)
        );
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Company.php");
    }
}
