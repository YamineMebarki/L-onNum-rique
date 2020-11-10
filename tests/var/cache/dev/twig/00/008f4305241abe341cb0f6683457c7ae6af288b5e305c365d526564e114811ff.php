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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/AbstractExecutor.php */
class __TwigTemplate_ca7b02d0714dbfc2adb7c76ac9936c0cb78e5a3ef6f60d24922b2a6706a6bfe8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/AbstractExecutor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/AbstractExecutor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\Common\\DataFixtures\\SharedFixtureInterface;
use Doctrine\\Common\\DataFixtures\\FixtureInterface;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\Common\\DataFixtures\\Purger\\PurgerInterface;

/**
 * Abstract fixture executor.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
abstract class AbstractExecutor
{
    /**
     * Purger instance for purging database before loading data fixtures
     *
     * @var PurgerInterface
     */
    protected \$purger;

    /**
     * Logger callback for logging messages when loading data fixtures
     *
     * @var callable
     */
    protected \$logger;

    /**
     * Fixture reference repository
     *
     * @var ReferenceRepository
     */
    protected \$referenceRepository;

    public function __construct(ObjectManager \$manager)
    {
        \$this->referenceRepository = new ReferenceRepository(\$manager);
    }

    /**
     * @return ReferenceRepository
     */
    public function getReferenceRepository()
    {
        return \$this->referenceRepository;
    }

    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->referenceRepository = \$referenceRepository;
    }

    /**
     * Sets the Purger instance to use for this executor instance.
     *
     * @param PurgerInterface \$purger
     */
    public function setPurger(PurgerInterface \$purger)
    {
        \$this->purger = \$purger;
    }

    /**
     * @return PurgerInterface
     */
    public function getPurger()
    {
        return \$this->purger;
    }

    /**
     * Set the logger callable to execute with the log() method.
     *
     * @param callable \$logger
     */
    public function setLogger(\$logger)
    {
        \$this->logger = \$logger;
    }

    /**
     * Logs a message using the logger.
     *
     * @param string \$message
     */
    public function log(\$message)
    {
        \$logger = \$this->logger;
        \$logger(\$message);
    }

    /**
     * Load a fixture with the given persistence manager.
     *
     * @param ObjectManager    \$manager
     * @param FixtureInterface \$fixture
     */
    public function load(ObjectManager \$manager, FixtureInterface \$fixture)
    {
        if (\$this->logger) {
            \$prefix = '';
            if (\$fixture instanceof OrderedFixtureInterface) {
                \$prefix = sprintf('[%d] ',\$fixture->getOrder());
            }
            \$this->log('loading ' . \$prefix . get_class(\$fixture));
        }
        // additionally pass the instance of reference repository to shared fixtures
        if (\$fixture instanceof SharedFixtureInterface) {
            \$fixture->setReferenceRepository(\$this->referenceRepository);
        }
        \$fixture->load(\$manager);
        \$manager->clear();
    }

    /**
     * Purges the database before loading.
     *
     * @throws \\Exception if the purger is not defined
     */
    public function purge()
    {
        if (\$this->purger === null) {
            throw new \\Exception('Doctrine\\Common\\DataFixtures\\Purger\\PurgerInterface instance is required if you want to purge the database before loading your data fixtures.');
        }
        if (\$this->logger) {
            \$this->log('purging database');
        }
        \$this->purger->purge();
    }

    /**
     * Executes the given array of data fixtures.
     *
     * @param array   \$fixtures Array of fixtures to execute.
     * @param boolean \$append Whether to append the data fixtures or purge the database before loading.
     */
    abstract public function execute(array \$fixtures, \$append = false);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/AbstractExecutor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Executor;

use Doctrine\\Common\\DataFixtures\\SharedFixtureInterface;
use Doctrine\\Common\\DataFixtures\\FixtureInterface;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\Common\\DataFixtures\\Purger\\PurgerInterface;

/**
 * Abstract fixture executor.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
abstract class AbstractExecutor
{
    /**
     * Purger instance for purging database before loading data fixtures
     *
     * @var PurgerInterface
     */
    protected \$purger;

    /**
     * Logger callback for logging messages when loading data fixtures
     *
     * @var callable
     */
    protected \$logger;

    /**
     * Fixture reference repository
     *
     * @var ReferenceRepository
     */
    protected \$referenceRepository;

    public function __construct(ObjectManager \$manager)
    {
        \$this->referenceRepository = new ReferenceRepository(\$manager);
    }

    /**
     * @return ReferenceRepository
     */
    public function getReferenceRepository()
    {
        return \$this->referenceRepository;
    }

    public function setReferenceRepository(ReferenceRepository \$referenceRepository)
    {
        \$this->referenceRepository = \$referenceRepository;
    }

    /**
     * Sets the Purger instance to use for this executor instance.
     *
     * @param PurgerInterface \$purger
     */
    public function setPurger(PurgerInterface \$purger)
    {
        \$this->purger = \$purger;
    }

    /**
     * @return PurgerInterface
     */
    public function getPurger()
    {
        return \$this->purger;
    }

    /**
     * Set the logger callable to execute with the log() method.
     *
     * @param callable \$logger
     */
    public function setLogger(\$logger)
    {
        \$this->logger = \$logger;
    }

    /**
     * Logs a message using the logger.
     *
     * @param string \$message
     */
    public function log(\$message)
    {
        \$logger = \$this->logger;
        \$logger(\$message);
    }

    /**
     * Load a fixture with the given persistence manager.
     *
     * @param ObjectManager    \$manager
     * @param FixtureInterface \$fixture
     */
    public function load(ObjectManager \$manager, FixtureInterface \$fixture)
    {
        if (\$this->logger) {
            \$prefix = '';
            if (\$fixture instanceof OrderedFixtureInterface) {
                \$prefix = sprintf('[%d] ',\$fixture->getOrder());
            }
            \$this->log('loading ' . \$prefix . get_class(\$fixture));
        }
        // additionally pass the instance of reference repository to shared fixtures
        if (\$fixture instanceof SharedFixtureInterface) {
            \$fixture->setReferenceRepository(\$this->referenceRepository);
        }
        \$fixture->load(\$manager);
        \$manager->clear();
    }

    /**
     * Purges the database before loading.
     *
     * @throws \\Exception if the purger is not defined
     */
    public function purge()
    {
        if (\$this->purger === null) {
            throw new \\Exception('Doctrine\\Common\\DataFixtures\\Purger\\PurgerInterface instance is required if you want to purge the database before loading your data fixtures.');
        }
        if (\$this->logger) {
            \$this->log('purging database');
        }
        \$this->purger->purge();
    }

    /**
     * Executes the given array of data fixtures.
     *
     * @param array   \$fixtures Array of fixtures to execute.
     * @param boolean \$append Whether to append the data fixtures or purge the database before loading.
     */
    abstract public function execute(array \$fixtures, \$append = false);
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/AbstractExecutor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Executor/AbstractExecutor.php");
    }
}
