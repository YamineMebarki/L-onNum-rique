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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php */
class __TwigTemplate_e4f675b49eb4d5ced975d395bdeed1adecf5b43d6fd3f0cb3c9f09bab6c6d43b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures;

use Doctrine\\Common\\DataFixtures\\ReferenceRepository;

/**
 * Shared Fixture interface needs to be implemented
 * by fixtures, which needs some references to be shared
 * among other fixture classes in order to maintain
 * relation mapping
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface SharedFixtureInterface extends FixtureInterface
{   
    /**
     * Set the reference repository
     * 
     * @param ReferenceRepository \$referenceRepository
     */ 
    function setReferenceRepository(ReferenceRepository \$referenceRepository);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures;

use Doctrine\\Common\\DataFixtures\\ReferenceRepository;

/**
 * Shared Fixture interface needs to be implemented
 * by fixtures, which needs some references to be shared
 * among other fixture classes in order to maintain
 * relation mapping
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface SharedFixtureInterface extends FixtureInterface
{   
    /**
     * Set the reference repository
     * 
     * @param ReferenceRepository \$referenceRepository
     */ 
    function setReferenceRepository(ReferenceRepository \$referenceRepository);
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php");
    }
}
