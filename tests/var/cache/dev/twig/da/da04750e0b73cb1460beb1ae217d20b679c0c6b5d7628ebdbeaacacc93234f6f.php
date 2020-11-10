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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/ORMExecutor.php */
class __TwigTemplate_46d7a7a5cdaea842d3cc2a9b6e38805aa5b7b09ca509f5e3a3fc55d1beef4a02 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/ORMExecutor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/ORMExecutor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\Common\\DataFixtures\\Event\\Listener\\ORMReferenceListener;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;

/**
 * Class responsible for executing data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class ORMExecutor extends AbstractExecutor
{
    /**
     * @var EntityManagerInterface
     */
    private \$em;
    
    /**
     * Construct new fixtures loader instance.
     *
     * @param EntityManagerInterface \$em EntityManagerInterface instance used for persistence.
     */
    public function __construct(EntityManagerInterface \$em, ORMPurger \$purger = null)
    {
        \$this->em = \$em;
        if (\$purger !== null) {
            \$this->purger = \$purger;
            \$this->purger->setEntityManager(\$em);
        }
        parent::__construct(\$em);
        \$this->listener = new ORMReferenceListener(\$this->referenceRepository);
        \$em->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /**
     * Retrieve the EntityManagerInterface instance this executor instance is using.
     *
     * @return \\Doctrine\\ORM\\EntityManagerInterface
     */
    public function getObjectManager()
    {
        return \$this->em;
    }

    /** @inheritDoc */
    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->em->getEventManager()->removeEventListener(
            \$this->listener->getSubscribedEvents(),
            \$this->listener
        );

        \$this->referenceRepository = \$referenceRepository;
        \$this->listener = new ORMReferenceListener(\$this->referenceRepository);
        \$this->em->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /** @inheritDoc */
    public function execute(array \$fixtures, \$append = false)
    {
        \$executor = \$this;
        \$this->em->transactional(function(EntityManagerInterface \$em) use (\$executor, \$fixtures, \$append) {
            if (\$append === false) {
                \$executor->purge();
            }
            foreach (\$fixtures as \$fixture) {
                \$executor->load(\$em, \$fixture);
            }
        });
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/ORMExecutor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\Common\\DataFixtures\\Event\\Listener\\ORMReferenceListener;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;

/**
 * Class responsible for executing data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class ORMExecutor extends AbstractExecutor
{
    /**
     * @var EntityManagerInterface
     */
    private \$em;
    
    /**
     * Construct new fixtures loader instance.
     *
     * @param EntityManagerInterface \$em EntityManagerInterface instance used for persistence.
     */
    public function __construct(EntityManagerInterface \$em, ORMPurger \$purger = null)
    {
        \$this->em = \$em;
        if (\$purger !== null) {
            \$this->purger = \$purger;
            \$this->purger->setEntityManager(\$em);
        }
        parent::__construct(\$em);
        \$this->listener = new ORMReferenceListener(\$this->referenceRepository);
        \$em->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /**
     * Retrieve the EntityManagerInterface instance this executor instance is using.
     *
     * @return \\Doctrine\\ORM\\EntityManagerInterface
     */
    public function getObjectManager()
    {
        return \$this->em;
    }

    /** @inheritDoc */
    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->em->getEventManager()->removeEventListener(
            \$this->listener->getSubscribedEvents(),
            \$this->listener
        );

        \$this->referenceRepository = \$referenceRepository;
        \$this->listener = new ORMReferenceListener(\$this->referenceRepository);
        \$this->em->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /** @inheritDoc */
    public function execute(array \$fixtures, \$append = false)
    {
        \$executor = \$this;
        \$this->em->transactional(function(EntityManagerInterface \$em) use (\$executor, \$fixtures, \$append) {
            if (\$append === false) {
                \$executor->purge();
            }
            foreach (\$fixtures as \$fixture) {
                \$executor->load(\$em, \$fixture);
            }
        });
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/ORMExecutor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/ORMExecutor.php");
    }
}
