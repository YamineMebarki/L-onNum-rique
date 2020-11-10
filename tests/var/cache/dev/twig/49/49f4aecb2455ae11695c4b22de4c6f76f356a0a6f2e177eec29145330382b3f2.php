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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php */
class __TwigTemplate_2f0e0abf828fa4c425bd9c47a47123c0ebd1b5ed66afecdf96cabf15d0049869 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures;

use Doctrine\\Common\\DataFixtures\\ReferenceRepository;

/**
 * Abstract Fixture class helps to manage references
 * between fixture classes in order to set relations
 * among other fixtures
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
abstract class AbstractFixture implements SharedFixtureInterface
{
    /**
     * Fixture reference repository
     * 
     * @var ReferenceRepository
     */
    protected \$referenceRepository;
    
    /**
     * {@inheritdoc}
     */
    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->referenceRepository = \$referenceRepository;
    }
    
    /**
     * Set the reference entry identified by \$name
     * and referenced to managed \$object. If \$name
     * already is set, it overrides it
     * 
     * @param string \$name
     * @param object \$object - managed object
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::setReference
     * @return void
     */
    public function setReference(\$name, \$object)
    {
        \$this->referenceRepository->setReference(\$name, \$object);
    }
    
    /**
     * Set the reference entry identified by \$name
     * and referenced to managed \$object. If \$name
     * already is set, it throws a 
     * BadMethodCallException exception
     * 
     * @param string \$name
     * @param object \$object - managed object
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::addReference
     * @throws \\BadMethodCallException - if repository already has
     *      a reference by \$name
     * @return void
     */
    public function addReference(\$name, \$object)
    {
        \$this->referenceRepository->addReference(\$name, \$object);
    }
    
    /**
     * Loads an object using stored reference
     * named by \$name
     * 
     * @param string \$name
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::getReference
     * @return object
     */
    public function getReference(\$name)
    {
        return \$this->referenceRepository->getReference(\$name);
    }
    
    /**
     * Check if an object is stored using reference
     * named by \$name
     * 
     * @param string \$name
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::hasReference
     * @return boolean
     */
    public function hasReference(\$name)
    {
        return \$this->referenceRepository->hasReference(\$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php";
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
 * Abstract Fixture class helps to manage references
 * between fixture classes in order to set relations
 * among other fixtures
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
abstract class AbstractFixture implements SharedFixtureInterface
{
    /**
     * Fixture reference repository
     * 
     * @var ReferenceRepository
     */
    protected \$referenceRepository;
    
    /**
     * {@inheritdoc}
     */
    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->referenceRepository = \$referenceRepository;
    }
    
    /**
     * Set the reference entry identified by \$name
     * and referenced to managed \$object. If \$name
     * already is set, it overrides it
     * 
     * @param string \$name
     * @param object \$object - managed object
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::setReference
     * @return void
     */
    public function setReference(\$name, \$object)
    {
        \$this->referenceRepository->setReference(\$name, \$object);
    }
    
    /**
     * Set the reference entry identified by \$name
     * and referenced to managed \$object. If \$name
     * already is set, it throws a 
     * BadMethodCallException exception
     * 
     * @param string \$name
     * @param object \$object - managed object
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::addReference
     * @throws \\BadMethodCallException - if repository already has
     *      a reference by \$name
     * @return void
     */
    public function addReference(\$name, \$object)
    {
        \$this->referenceRepository->addReference(\$name, \$object);
    }
    
    /**
     * Loads an object using stored reference
     * named by \$name
     * 
     * @param string \$name
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::getReference
     * @return object
     */
    public function getReference(\$name)
    {
        return \$this->referenceRepository->getReference(\$name);
    }
    
    /**
     * Check if an object is stored using reference
     * named by \$name
     * 
     * @param string \$name
     * @see Doctrine\\Common\\DataFixtures\\ReferenceRepository::hasReference
     * @return boolean
     */
    public function hasReference(\$name)
    {
        return \$this->referenceRepository->hasReference(\$name);
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php");
    }
}
