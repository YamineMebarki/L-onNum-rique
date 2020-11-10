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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/MongoDBExecutor.php */
class __TwigTemplate_2a190b5e3d7af978418871b384bae8cc5d280de9c9a7f0ab6378af09b5c40617 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/MongoDBExecutor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/MongoDBExecutor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\ODM\\MongoDB\\DocumentManager;
use Doctrine\\Common\\DataFixtures\\Purger\\MongoDBPurger;
use Doctrine\\Common\\DataFixtures\\Event\\Listener\\MongoDBReferenceListener;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;

/**
 * Class responsible for executing data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class MongoDBExecutor extends AbstractExecutor
{
    /**
     * Construct new fixtures loader instance.
     *
     * @param DocumentManager \$dm DocumentManager instance used for persistence.
     */
    public function __construct(DocumentManager \$dm, MongoDBPurger \$purger = null)
    {
        \$this->dm = \$dm;
        if (\$purger !== null) {
            \$this->purger = \$purger;
            \$this->purger->setDocumentManager(\$dm);
        }
        parent::__construct(\$dm);
        \$this->listener = new MongoDBReferenceListener(\$this->referenceRepository);
        \$dm->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /**
     * Retrieve the DocumentManager instance this executor instance is using.
     *
     * @return \\Doctrine\\ODM\\MongoDB\\DocumentManager
     */
    public function getObjectManager()
    {
        return \$this->dm;
    }

    /** @inheritDoc */
    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->dm->getEventManager()->removeEventListener(
            \$this->listener->getSubscribedEvents(),
            \$this->listener
        );

        \$this->referenceRepository = \$referenceRepository;
        \$this->listener = new MongoDBReferenceListener(\$this->referenceRepository);
        \$this->dm->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /** @inheritDoc */
    public function execute(array \$fixtures, \$append = false)
    {
        if (\$append === false) {
            \$this->purge();
        }
        foreach (\$fixtures as \$fixture) {
            \$this->load(\$this->dm, \$fixture);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/MongoDBExecutor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\ODM\\MongoDB\\DocumentManager;
use Doctrine\\Common\\DataFixtures\\Purger\\MongoDBPurger;
use Doctrine\\Common\\DataFixtures\\Event\\Listener\\MongoDBReferenceListener;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;

/**
 * Class responsible for executing data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class MongoDBExecutor extends AbstractExecutor
{
    /**
     * Construct new fixtures loader instance.
     *
     * @param DocumentManager \$dm DocumentManager instance used for persistence.
     */
    public function __construct(DocumentManager \$dm, MongoDBPurger \$purger = null)
    {
        \$this->dm = \$dm;
        if (\$purger !== null) {
            \$this->purger = \$purger;
            \$this->purger->setDocumentManager(\$dm);
        }
        parent::__construct(\$dm);
        \$this->listener = new MongoDBReferenceListener(\$this->referenceRepository);
        \$dm->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /**
     * Retrieve the DocumentManager instance this executor instance is using.
     *
     * @return \\Doctrine\\ODM\\MongoDB\\DocumentManager
     */
    public function getObjectManager()
    {
        return \$this->dm;
    }

    /** @inheritDoc */
    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->dm->getEventManager()->removeEventListener(
            \$this->listener->getSubscribedEvents(),
            \$this->listener
        );

        \$this->referenceRepository = \$referenceRepository;
        \$this->listener = new MongoDBReferenceListener(\$this->referenceRepository);
        \$this->dm->getEventManager()->addEventSubscriber(\$this->listener);
    }

    /** @inheritDoc */
    public function execute(array \$fixtures, \$append = false)
    {
        if (\$append === false) {
            \$this->purge();
        }
        foreach (\$fixtures as \$fixture) {
            \$this->load(\$this->dm, \$fixture);
        }
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/MongoDBExecutor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/MongoDBExecutor.php");
    }
}
