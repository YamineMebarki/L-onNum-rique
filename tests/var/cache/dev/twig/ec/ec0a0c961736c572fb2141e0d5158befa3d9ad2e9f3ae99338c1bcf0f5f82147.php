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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/ORMPurger.php */
class __TwigTemplate_c756d5242540c22772fcf64fcc325a03b0f28c13ec610f47814db3a92fbd1d02 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/ORMPurger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/ORMPurger.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Common\\DataFixtures\\Sorter\\TopologicalSorter;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use function array_search;
use function is_callable;
use function preg_match;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class ORMPurger implements PurgerInterface
{
    const PURGE_MODE_DELETE = 1;
    const PURGE_MODE_TRUNCATE = 2;

    /** EntityManagerInterface instance used for persistence. */
    private \$em;

    /**
     * If the purge should be done through DELETE or TRUNCATE statements
     *
     * @var int
     */
    private \$purgeMode = self::PURGE_MODE_DELETE;

    /**
    * Table/view names to be excleded from purge
    *
    * @var string[]
    */
    private \$excluded;

    /**
     * Construct new purger instance.
     *
     * @param EntityManagerInterface \$em EntityManagerInterface instance used for persistence.
     * @param string[] \$excluded array of table/view names to be excleded from purge
     */
    public function __construct(EntityManagerInterface \$em = null, array \$excluded = [])
    {
        \$this->em = \$em;
        \$this->excluded = \$excluded;
    }

    /**
     * Set the purge mode
     *
     * @param \$mode
     * @return void
     */
    public function setPurgeMode(\$mode)
    {
        \$this->purgeMode = \$mode;
    }

    /**
     * Get the purge mode
     *
     * @return int
     */
    public function getPurgeMode()
    {
        return \$this->purgeMode;
    }

    /**
     * Set the EntityManagerInterface instance this purger instance should use.
     *
     * @param EntityManagerInterface \$em
     */
    public function setEntityManager(EntityManagerInterface \$em)
    {
      \$this->em = \$em;
    }

    /**
     * Retrieve the EntityManagerInterface instance this purger instance is using.
     *
     * @return \\Doctrine\\ORM\\EntityManagerInterface
     */
    public function getObjectManager()
    {
        return \$this->em;
    }

    /** @inheritDoc */
    public function purge()
    {
        \$classes = [];

        foreach (\$this->em->getMetadataFactory()->getAllMetadata() as \$metadata) {
            if (! \$metadata->isMappedSuperclass && ! (isset(\$metadata->isEmbeddedClass) && \$metadata->isEmbeddedClass)) {
                \$classes[] = \$metadata;
            }
        }

        \$commitOrder = \$this->getCommitOrder(\$this->em, \$classes);

        // Get platform parameters
        \$platform = \$this->em->getConnection()->getDatabasePlatform();

        // Drop association tables first
        \$orderedTables = \$this->getAssociationTables(\$commitOrder, \$platform);

        // Drop tables in reverse commit order
        for (\$i = count(\$commitOrder) - 1; \$i >= 0; --\$i) {
            \$class = \$commitOrder[\$i];

            if (
                (isset(\$class->isEmbeddedClass) && \$class->isEmbeddedClass) ||
                \$class->isMappedSuperclass ||
                (\$class->isInheritanceTypeSingleTable() && \$class->name !== \$class->rootEntityName)
            ) {
                continue;
            }

            \$orderedTables[] = \$this->getTableName(\$class, \$platform);
        }

        \$connection = \$this->em->getConnection();
        \$filterExpr = \$connection->getConfiguration()->getFilterSchemaAssetsExpression();
        \$emptyFilterExpression = empty(\$filterExpr);

        \$schemaAssetsFilter = method_exists(\$connection->getConfiguration(), 'getSchemaAssetsFilter') ? \$connection->getConfiguration()->getSchemaAssetsFilter() : null;

        foreach(\$orderedTables as \$tbl) {
            // If we have a filter expression, check it and skip if necessary
            if (!\$emptyFilterExpression && !preg_match(\$filterExpr, \$tbl)) {
                continue;
            }

            // If the table is excluded, skip it as well
            if (array_search(\$tbl, \$this->excluded) !== false) {
                continue;
            }

            // Support schema asset filters as presented in
            if (is_callable(\$schemaAssetsFilter) && !\$schemaAssetsFilter(\$tbl)) {
                continue;
            }

            if (\$this->purgeMode === self::PURGE_MODE_DELETE) {
                \$connection->executeUpdate(\"DELETE FROM \" . \$tbl);
            } else {
                \$connection->executeUpdate(\$platform->getTruncateTableSQL(\$tbl, true));
            }
        }
    }

    /**
     * @param EntityManagerInterface \$em
     * @param ClassMetadata[]        \$classes
     *
     * @return ClassMetadata[]
     */
    private function getCommitOrder(EntityManagerInterface \$em, array \$classes)
    {
        \$sorter = new TopologicalSorter();

        foreach (\$classes as \$class) {
            if ( ! \$sorter->hasNode(\$class->name)) {
                \$sorter->addNode(\$class->name, \$class);
            }

            // \$class before its parents
            foreach (\$class->parentClasses as \$parentClass) {
                \$parentClass     = \$em->getClassMetadata(\$parentClass);
                \$parentClassName = \$parentClass->getName();

                if ( ! \$sorter->hasNode(\$parentClassName)) {
                    \$sorter->addNode(\$parentClassName, \$parentClass);
                }

                \$sorter->addDependency(\$class->name, \$parentClassName);
            }

            foreach (\$class->associationMappings as \$assoc) {
                if (\$assoc['isOwningSide']) {
                    /* @var \$targetClass ClassMetadata */
                    \$targetClass     = \$em->getClassMetadata(\$assoc['targetEntity']);
                    \$targetClassName = \$targetClass->getName();

                    if ( ! \$sorter->hasNode(\$targetClassName)) {
                        \$sorter->addNode(\$targetClassName, \$targetClass);
                    }

                    // add dependency (\$targetClass before \$class)
                    \$sorter->addDependency(\$targetClassName, \$class->name);

                    // parents of \$targetClass before \$class, too
                    foreach (\$targetClass->parentClasses as \$parentClass) {
                        \$parentClass     = \$em->getClassMetadata(\$parentClass);
                        \$parentClassName = \$parentClass->getName();

                        if ( ! \$sorter->hasNode(\$parentClassName)) {
                            \$sorter->addNode(\$parentClassName, \$parentClass);
                        }

                        \$sorter->addDependency(\$parentClassName, \$class->name);
                    }
                }
            }
        }

        return array_reverse(\$sorter->sort());
    }

    /**
     * @param array \$classes
     * @param \\Doctrine\\DBAL\\Platforms\\AbstractPlatform \$platform
     * @return array
     */
    private function getAssociationTables(array \$classes, AbstractPlatform \$platform)
    {
        \$associationTables = [];

        foreach (\$classes as \$class) {
            foreach (\$class->associationMappings as \$assoc) {
                if (\$assoc['isOwningSide'] && \$assoc['type'] == ClassMetadata::MANY_TO_MANY) {
                    \$associationTables[] = \$this->getJoinTableName(\$assoc, \$class, \$platform);
                }
            }
        }

        return \$associationTables;
    }

    /**
     *
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata \$class
     * @param \\Doctrine\\DBAL\\Platforms\\AbstractPlatform \$platform
     * @return string
     */
    private function getTableName(\$class, \$platform)
    {
        if (isset(\$class->table['schema']) && !method_exists(\$class, 'getSchemaName')) {
            return \$class->table['schema'].'.'.\$this->em->getConfiguration()->getQuoteStrategy()->getTableName(\$class, \$platform);
        }

        return \$this->em->getConfiguration()->getQuoteStrategy()->getTableName(\$class, \$platform);
    }

    /**
     *
     * @param array            \$association
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata    \$class
     * @param \\Doctrine\\DBAL\\Platforms\\AbstractPlatform \$platform
     * @return string
     */
    private function getJoinTableName(\$assoc, \$class, \$platform)
    {
        if (isset(\$assoc['joinTable']['schema']) && !method_exists(\$class, 'getSchemaName')) {
            return \$assoc['joinTable']['schema'].'.'.\$this->em->getConfiguration()->getQuoteStrategy()->getJoinTableName(\$assoc, \$class, \$platform);
        }

        return \$this->em->getConfiguration()->getQuoteStrategy()->getJoinTableName(\$assoc, \$class, \$platform);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/ORMPurger.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Common\\DataFixtures\\Sorter\\TopologicalSorter;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use function array_search;
use function is_callable;
use function preg_match;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class ORMPurger implements PurgerInterface
{
    const PURGE_MODE_DELETE = 1;
    const PURGE_MODE_TRUNCATE = 2;

    /** EntityManagerInterface instance used for persistence. */
    private \$em;

    /**
     * If the purge should be done through DELETE or TRUNCATE statements
     *
     * @var int
     */
    private \$purgeMode = self::PURGE_MODE_DELETE;

    /**
    * Table/view names to be excleded from purge
    *
    * @var string[]
    */
    private \$excluded;

    /**
     * Construct new purger instance.
     *
     * @param EntityManagerInterface \$em EntityManagerInterface instance used for persistence.
     * @param string[] \$excluded array of table/view names to be excleded from purge
     */
    public function __construct(EntityManagerInterface \$em = null, array \$excluded = [])
    {
        \$this->em = \$em;
        \$this->excluded = \$excluded;
    }

    /**
     * Set the purge mode
     *
     * @param \$mode
     * @return void
     */
    public function setPurgeMode(\$mode)
    {
        \$this->purgeMode = \$mode;
    }

    /**
     * Get the purge mode
     *
     * @return int
     */
    public function getPurgeMode()
    {
        return \$this->purgeMode;
    }

    /**
     * Set the EntityManagerInterface instance this purger instance should use.
     *
     * @param EntityManagerInterface \$em
     */
    public function setEntityManager(EntityManagerInterface \$em)
    {
      \$this->em = \$em;
    }

    /**
     * Retrieve the EntityManagerInterface instance this purger instance is using.
     *
     * @return \\Doctrine\\ORM\\EntityManagerInterface
     */
    public function getObjectManager()
    {
        return \$this->em;
    }

    /** @inheritDoc */
    public function purge()
    {
        \$classes = [];

        foreach (\$this->em->getMetadataFactory()->getAllMetadata() as \$metadata) {
            if (! \$metadata->isMappedSuperclass && ! (isset(\$metadata->isEmbeddedClass) && \$metadata->isEmbeddedClass)) {
                \$classes[] = \$metadata;
            }
        }

        \$commitOrder = \$this->getCommitOrder(\$this->em, \$classes);

        // Get platform parameters
        \$platform = \$this->em->getConnection()->getDatabasePlatform();

        // Drop association tables first
        \$orderedTables = \$this->getAssociationTables(\$commitOrder, \$platform);

        // Drop tables in reverse commit order
        for (\$i = count(\$commitOrder) - 1; \$i >= 0; --\$i) {
            \$class = \$commitOrder[\$i];

            if (
                (isset(\$class->isEmbeddedClass) && \$class->isEmbeddedClass) ||
                \$class->isMappedSuperclass ||
                (\$class->isInheritanceTypeSingleTable() && \$class->name !== \$class->rootEntityName)
            ) {
                continue;
            }

            \$orderedTables[] = \$this->getTableName(\$class, \$platform);
        }

        \$connection = \$this->em->getConnection();
        \$filterExpr = \$connection->getConfiguration()->getFilterSchemaAssetsExpression();
        \$emptyFilterExpression = empty(\$filterExpr);

        \$schemaAssetsFilter = method_exists(\$connection->getConfiguration(), 'getSchemaAssetsFilter') ? \$connection->getConfiguration()->getSchemaAssetsFilter() : null;

        foreach(\$orderedTables as \$tbl) {
            // If we have a filter expression, check it and skip if necessary
            if (!\$emptyFilterExpression && !preg_match(\$filterExpr, \$tbl)) {
                continue;
            }

            // If the table is excluded, skip it as well
            if (array_search(\$tbl, \$this->excluded) !== false) {
                continue;
            }

            // Support schema asset filters as presented in
            if (is_callable(\$schemaAssetsFilter) && !\$schemaAssetsFilter(\$tbl)) {
                continue;
            }

            if (\$this->purgeMode === self::PURGE_MODE_DELETE) {
                \$connection->executeUpdate(\"DELETE FROM \" . \$tbl);
            } else {
                \$connection->executeUpdate(\$platform->getTruncateTableSQL(\$tbl, true));
            }
        }
    }

    /**
     * @param EntityManagerInterface \$em
     * @param ClassMetadata[]        \$classes
     *
     * @return ClassMetadata[]
     */
    private function getCommitOrder(EntityManagerInterface \$em, array \$classes)
    {
        \$sorter = new TopologicalSorter();

        foreach (\$classes as \$class) {
            if ( ! \$sorter->hasNode(\$class->name)) {
                \$sorter->addNode(\$class->name, \$class);
            }

            // \$class before its parents
            foreach (\$class->parentClasses as \$parentClass) {
                \$parentClass     = \$em->getClassMetadata(\$parentClass);
                \$parentClassName = \$parentClass->getName();

                if ( ! \$sorter->hasNode(\$parentClassName)) {
                    \$sorter->addNode(\$parentClassName, \$parentClass);
                }

                \$sorter->addDependency(\$class->name, \$parentClassName);
            }

            foreach (\$class->associationMappings as \$assoc) {
                if (\$assoc['isOwningSide']) {
                    /* @var \$targetClass ClassMetadata */
                    \$targetClass     = \$em->getClassMetadata(\$assoc['targetEntity']);
                    \$targetClassName = \$targetClass->getName();

                    if ( ! \$sorter->hasNode(\$targetClassName)) {
                        \$sorter->addNode(\$targetClassName, \$targetClass);
                    }

                    // add dependency (\$targetClass before \$class)
                    \$sorter->addDependency(\$targetClassName, \$class->name);

                    // parents of \$targetClass before \$class, too
                    foreach (\$targetClass->parentClasses as \$parentClass) {
                        \$parentClass     = \$em->getClassMetadata(\$parentClass);
                        \$parentClassName = \$parentClass->getName();

                        if ( ! \$sorter->hasNode(\$parentClassName)) {
                            \$sorter->addNode(\$parentClassName, \$parentClass);
                        }

                        \$sorter->addDependency(\$parentClassName, \$class->name);
                    }
                }
            }
        }

        return array_reverse(\$sorter->sort());
    }

    /**
     * @param array \$classes
     * @param \\Doctrine\\DBAL\\Platforms\\AbstractPlatform \$platform
     * @return array
     */
    private function getAssociationTables(array \$classes, AbstractPlatform \$platform)
    {
        \$associationTables = [];

        foreach (\$classes as \$class) {
            foreach (\$class->associationMappings as \$assoc) {
                if (\$assoc['isOwningSide'] && \$assoc['type'] == ClassMetadata::MANY_TO_MANY) {
                    \$associationTables[] = \$this->getJoinTableName(\$assoc, \$class, \$platform);
                }
            }
        }

        return \$associationTables;
    }

    /**
     *
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata \$class
     * @param \\Doctrine\\DBAL\\Platforms\\AbstractPlatform \$platform
     * @return string
     */
    private function getTableName(\$class, \$platform)
    {
        if (isset(\$class->table['schema']) && !method_exists(\$class, 'getSchemaName')) {
            return \$class->table['schema'].'.'.\$this->em->getConfiguration()->getQuoteStrategy()->getTableName(\$class, \$platform);
        }

        return \$this->em->getConfiguration()->getQuoteStrategy()->getTableName(\$class, \$platform);
    }

    /**
     *
     * @param array            \$association
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata    \$class
     * @param \\Doctrine\\DBAL\\Platforms\\AbstractPlatform \$platform
     * @return string
     */
    private function getJoinTableName(\$assoc, \$class, \$platform)
    {
        if (isset(\$assoc['joinTable']['schema']) && !method_exists(\$class, 'getSchemaName')) {
            return \$assoc['joinTable']['schema'].'.'.\$this->em->getConfiguration()->getQuoteStrategy()->getJoinTableName(\$assoc, \$class, \$platform);
        }

        return \$this->em->getConfiguration()->getQuoteStrategy()->getJoinTableName(\$assoc, \$class, \$platform);
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/ORMPurger.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Purger/ORMPurger.php");
    }
}
