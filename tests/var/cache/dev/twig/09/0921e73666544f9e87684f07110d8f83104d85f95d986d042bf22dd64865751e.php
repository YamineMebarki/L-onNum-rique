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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php */
class __TwigTemplate_31cbf2af790c4cfd767021b1cced4ff68628536c0976704e6d20b401f6b85547 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures;

/**
 * Ordered Fixture interface needs to be implemented
 * by fixtures, which needs to have a specific order
 * when being loaded by directory scan for example
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
interface OrderedFixtureInterface
{   
    /**
     * Get the order of this fixture
     * 
     * @return integer
     */  
    public function getOrder();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures;

/**
 * Ordered Fixture interface needs to be implemented
 * by fixtures, which needs to have a specific order
 * when being loaded by directory scan for example
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
interface OrderedFixtureInterface
{   
    /**
     * Get the order of this fixture
     * 
     * @return integer
     */  
    public function getOrder();
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/OrderedFixtureInterface.php");
    }
}
