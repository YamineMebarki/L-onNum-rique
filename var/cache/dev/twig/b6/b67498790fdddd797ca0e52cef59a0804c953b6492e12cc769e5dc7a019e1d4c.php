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

/* vendor/fzaninotto/faker/src/Faker/Provider/Biased.php */
class __TwigTemplate_4448bc422f8e2fdb8c319b346478d41a1641d5ecff51c442ea8508e559cddac2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Biased.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Biased.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

class Biased extends Base
{
    /**
     * Returns a biased integer between \$min and \$max (both inclusive).
     * The distribution depends on \$function.
     *
     * The algorithm creates two doubles, x ∈ [0, 1], y ∈ [0, 1) and checks whether the
     * return value of \$function for x is greater than or equal to y. If this is
     * the case the number is accepted and x is mapped to the appropriate integer
     * between \$min and \$max. Otherwise two new doubles are created until the pair
     * is accepted.
     *
     * @param integer \$min Minimum value of the generated integers.
     * @param integer \$max Maximum value of the generated integers.
     * @param callable \$function A function mapping x ∈ [0, 1] onto a double ∈ [0, 1]
     * @return integer An integer between \$min and \$max.
     */
    public function biasedNumberBetween(\$min = 0, \$max = 100, \$function = 'sqrt')
    {
        do {
            \$x = mt_rand() / mt_getrandmax();
            \$y = mt_rand() / (mt_getrandmax() + 1);
        } while (call_user_func(\$function, \$x) < \$y);

        return floor(\$x * (\$max - \$min + 1) + \$min);
    }

    /**
     * 'unbiased' creates an unbiased distribution by giving
     * each value the same value of one.
     *
     * @return integer
     */
    protected static function unbiased()
    {
        return 1;
    }

    /**
     * 'linearLow' favors lower numbers. The probability decreases
     * in a linear fashion.
     *
     * @return integer
     */
    protected static function linearLow(\$x)
    {
        return 1 - \$x;
    }

    /**
     * 'linearHigh' favors higher numbers. The probability increases
     * in a linear fashion.
     *
     * @return integer
     */
    protected static function linearHigh(\$x)
    {
        return \$x;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Biased.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

class Biased extends Base
{
    /**
     * Returns a biased integer between \$min and \$max (both inclusive).
     * The distribution depends on \$function.
     *
     * The algorithm creates two doubles, x ∈ [0, 1], y ∈ [0, 1) and checks whether the
     * return value of \$function for x is greater than or equal to y. If this is
     * the case the number is accepted and x is mapped to the appropriate integer
     * between \$min and \$max. Otherwise two new doubles are created until the pair
     * is accepted.
     *
     * @param integer \$min Minimum value of the generated integers.
     * @param integer \$max Maximum value of the generated integers.
     * @param callable \$function A function mapping x ∈ [0, 1] onto a double ∈ [0, 1]
     * @return integer An integer between \$min and \$max.
     */
    public function biasedNumberBetween(\$min = 0, \$max = 100, \$function = 'sqrt')
    {
        do {
            \$x = mt_rand() / mt_getrandmax();
            \$y = mt_rand() / (mt_getrandmax() + 1);
        } while (call_user_func(\$function, \$x) < \$y);

        return floor(\$x * (\$max - \$min + 1) + \$min);
    }

    /**
     * 'unbiased' creates an unbiased distribution by giving
     * each value the same value of one.
     *
     * @return integer
     */
    protected static function unbiased()
    {
        return 1;
    }

    /**
     * 'linearLow' favors lower numbers. The probability decreases
     * in a linear fashion.
     *
     * @return integer
     */
    protected static function linearLow(\$x)
    {
        return 1 - \$x;
    }

    /**
     * 'linearHigh' favors higher numbers. The probability increases
     * in a linear fashion.
     *
     * @return integer
     */
    protected static function linearHigh(\$x)
    {
        return \$x;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Biased.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Biased.php");
    }
}
