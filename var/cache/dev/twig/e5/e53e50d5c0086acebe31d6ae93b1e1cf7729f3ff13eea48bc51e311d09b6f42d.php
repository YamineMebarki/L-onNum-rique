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

/* vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/check_digit.php */
class __TwigTemplate_1fdb581aefeccdbc60b78a03f42ea619f833294c9003c43b798101f057772503 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/check_digit.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/check_digit.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pt_BR;

/**
 * Calculates one MOD 11 check digit based on customary Brazilian algorithms.
 * @link http://en.wikipedia.org/wiki/Check_digit
 * @link http://pt.wikipedia.org/wiki/CNPJ#Algoritmo_de_Valida.C3.A7.C3.A3o
 * @link http://en.wikipedia.org/wiki/Cadastro_de_Pessoas_F%C3%ADsicas#Validation
 *
 * @param string|integer \$numbers Numbers on which generate the check digit
 * @return integer
 */
function check_digit(\$numbers)
{
    \$length = strlen(\$numbers);
    \$second_algorithm = \$length >= 12;
    \$verifier = 0;

    for (\$i = 1; \$i <= \$length; \$i++) {
        if (!\$second_algorithm) {
            \$multiplier = \$i+1;
        } else {
            \$multiplier = (\$i >= 9)? \$i-7 : \$i+1;
        }
        \$verifier += \$numbers[\$length-\$i] * \$multiplier;
    }

    \$verifier = 11 - (\$verifier % 11);
    if (\$verifier >= 10) {
        \$verifier = 0;
    }

    return \$verifier;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/check_digit.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pt_BR;

/**
 * Calculates one MOD 11 check digit based on customary Brazilian algorithms.
 * @link http://en.wikipedia.org/wiki/Check_digit
 * @link http://pt.wikipedia.org/wiki/CNPJ#Algoritmo_de_Valida.C3.A7.C3.A3o
 * @link http://en.wikipedia.org/wiki/Cadastro_de_Pessoas_F%C3%ADsicas#Validation
 *
 * @param string|integer \$numbers Numbers on which generate the check digit
 * @return integer
 */
function check_digit(\$numbers)
{
    \$length = strlen(\$numbers);
    \$second_algorithm = \$length >= 12;
    \$verifier = 0;

    for (\$i = 1; \$i <= \$length; \$i++) {
        if (!\$second_algorithm) {
            \$multiplier = \$i+1;
        } else {
            \$multiplier = (\$i >= 9)? \$i-7 : \$i+1;
        }
        \$verifier += \$numbers[\$length-\$i] * \$multiplier;
    }

    \$verifier = 11 - (\$verifier % 11);
    if (\$verifier >= 10) {
        \$verifier = 0;
    }

    return \$verifier;
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/check_digit.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/check_digit.php");
    }
}
