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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/MongoDBPurger.php */
class __TwigTemplate_d2c977a95f9443fd8bcdf6fe7beb74680f5869d95a4a7fae15d55428cf4c0593 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/MongoDBPurger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/MongoDBPurger.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\ODM\\MongoDB\\DocumentManager;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class MongoDBPurger implements PurgerInterface
{
    /** DocumentManager instance used for persistence. */
    private \$dm;

    /**
     * Construct new purger instance.
     *
     * @param DocumentManager \$dm DocumentManager instance used for persistence.
     */
    public function __construct(DocumentManager \$dm = null)
    {
        \$this->dm = \$dm;
    }

    /**
     * Set the DocumentManager instance this purger instance should use.
     *
     * @param DocumentManager \$dm
     */
    public function setDocumentManager(DocumentManager \$dm)
    {
        \$this->dm = \$dm;
    }

    /**
     * Retrieve the DocumentManager instance this purger instance is using.
     *
     * @return \\Doctrine\\ODM\\MongoDB\\DocumentManager
     */
    public function getObjectManager()
    {
        return \$this->dm;
    }

    /** @inheritDoc */
    public function purge()
    {
        \$metadatas = \$this->dm->getMetadataFactory()->getAllMetadata();
        foreach (\$metadatas as \$metadata) {
            if ( ! \$metadata->isMappedSuperclass) {
                \$this->dm->getDocumentCollection(\$metadata->name)->drop();
            }
        }
        \$this->dm->getSchemaManager()->ensureIndexes();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/MongoDBPurger.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\ODM\\MongoDB\\DocumentManager;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class MongoDBPurger implements PurgerInterface
{
    /** DocumentManager instance used for persistence. */
    private \$dm;

    /**
     * Construct new purger instance.
     *
     * @param DocumentManager \$dm DocumentManager instance used for persistence.
     */
    public function __construct(DocumentManager \$dm = null)
    {
        \$this->dm = \$dm;
    }

    /**
     * Set the DocumentManager instance this purger instance should use.
     *
     * @param DocumentManager \$dm
     */
    public function setDocumentManager(DocumentManager \$dm)
    {
        \$this->dm = \$dm;
    }

    /**
     * Retrieve the DocumentManager instance this purger instance is using.
     *
     * @return \\Doctrine\\ODM\\MongoDB\\DocumentManager
     */
    public function getObjectManager()
    {
        return \$this->dm;
    }

    /** @inheritDoc */
    public function purge()
    {
        \$metadatas = \$this->dm->getMetadataFactory()->getAllMetadata();
        foreach (\$metadatas as \$metadata) {
            if ( ! \$metadata->isMappedSuperclass) {
                \$this->dm->getDocumentCollection(\$metadata->name)->drop();
            }
        }
        \$this->dm->getSchemaManager()->ensureIndexes();
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/MongoDBPurger.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/MongoDBPurger.php");
    }
}
