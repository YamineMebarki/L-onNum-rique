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

/* vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php */
class __TwigTemplate_97b61da83fdd8781c0d90a2bdc8158d505ab4ede4f71e14bde761ab5e2056037 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DataCollector;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain;
use Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\ClassMetadataFactory;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Tools\\SchemaValidator;
use Exception;
use Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector as BaseCollector;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DoctrineDataCollector extends BaseCollector
{
    /** @var ManagerRegistry */
    private \$registry;

    /** @var int|null */
    private \$invalidEntityCount;

    /** @var string[] */
    private \$groupedQueries;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;

        parent::__construct(\$registry);
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, Exception \$exception = null)
    {
        parent::collect(\$request, \$response, \$exception);

        \$errors   = [];
        \$entities = [];
        \$caches   = [
            'enabled' => false,
            'log_enabled' => false,
            'counts' => [
                'puts' => 0,
                'hits' => 0,
                'misses' => 0,
            ],
            'regions' => [
                'puts' => [],
                'hits' => [],
                'misses' => [],
            ],
        ];

        /** @var EntityManager \$em */
        foreach (\$this->registry->getManagers() as \$name => \$em) {
            \$entities[\$name] = [];
            /** @var ClassMetadataFactory \$factory */
            \$factory   = \$em->getMetadataFactory();
            \$validator = new SchemaValidator(\$em);

            /** @var ClassMetadataInfo \$class */
            foreach (\$factory->getLoadedMetadata() as \$class) {
                if (isset(\$entities[\$name][\$class->getName()])) {
                    continue;
                }

                \$classErrors                        = \$validator->validateClass(\$class);
                \$entities[\$name][\$class->getName()] = \$class->getName();

                if (empty(\$classErrors)) {
                    continue;
                }

                \$errors[\$name][\$class->getName()] = \$classErrors;
            }

            /** @var Configuration \$emConfig */
            \$emConfig   = \$em->getConfiguration();
            \$slcEnabled = \$emConfig->isSecondLevelCacheEnabled();

            if (! \$slcEnabled) {
                continue;
            }

            \$caches['enabled'] = true;

            /** @var \$cacheConfiguration \\Doctrine\\ORM\\Cache\\CacheConfiguration */
            /** @var CacheLoggerChain \$cacheLoggerChain */
            \$cacheConfiguration = \$emConfig->getSecondLevelCacheConfiguration();
            \$cacheLoggerChain   = \$cacheConfiguration->getCacheLogger();

            if (! \$cacheLoggerChain || ! \$cacheLoggerChain->getLogger('statistics')) {
                continue;
            }

            /** @var StatisticsCacheLogger \$cacheLoggerStats */
            \$cacheLoggerStats      = \$cacheLoggerChain->getLogger('statistics');
            \$caches['log_enabled'] = true;

            \$caches['counts']['puts']   += \$cacheLoggerStats->getPutCount();
            \$caches['counts']['hits']   += \$cacheLoggerStats->getHitCount();
            \$caches['counts']['misses'] += \$cacheLoggerStats->getMissCount();

            foreach (\$cacheLoggerStats->getRegionsPut() as \$key => \$value) {
                if (! isset(\$caches['regions']['puts'][\$key])) {
                    \$caches['regions']['puts'][\$key] = 0;
                }

                \$caches['regions']['puts'][\$key] += \$value;
            }

            foreach (\$cacheLoggerStats->getRegionsHit() as \$key => \$value) {
                if (! isset(\$caches['regions']['hits'][\$key])) {
                    \$caches['regions']['hits'][\$key] = 0;
                }

                \$caches['regions']['hits'][\$key] += \$value;
            }

            foreach (\$cacheLoggerStats->getRegionsMiss() as \$key => \$value) {
                if (! isset(\$caches['regions']['misses'][\$key])) {
                    \$caches['regions']['misses'][\$key] = 0;
                }

                \$caches['regions']['misses'][\$key] += \$value;
            }
        }

        // Might be good idea to replicate this block in doctrine bridge so we can drop this from here after some time.
        // This code is compatible with such change, because cloneVar is supposed to check if input is already cloned.
        foreach (\$this->data['queries'] as &\$queries) {
            foreach (\$queries as &\$query) {
                \$query['params'] = \$this->cloneVar(\$query['params']);
            }
        }

        \$this->data['entities'] = \$entities;
        \$this->data['errors']   = \$errors;
        \$this->data['caches']   = \$caches;
        \$this->groupedQueries   = null;
    }

    public function getEntities()
    {
        return \$this->data['entities'];
    }

    public function getMappingErrors()
    {
        return \$this->data['errors'];
    }

    public function getCacheHitsCount()
    {
        return \$this->data['caches']['counts']['hits'];
    }

    public function getCachePutsCount()
    {
        return \$this->data['caches']['counts']['puts'];
    }

    public function getCacheMissesCount()
    {
        return \$this->data['caches']['counts']['misses'];
    }

    public function getCacheEnabled()
    {
        return \$this->data['caches']['enabled'];
    }

    public function getCacheRegions()
    {
        return \$this->data['caches']['regions'];
    }

    public function getCacheCounts()
    {
        return \$this->data['caches']['counts'];
    }

    public function getInvalidEntityCount()
    {
        if (\$this->invalidEntityCount === null) {
            \$this->invalidEntityCount = array_sum(array_map('count', \$this->data['errors']));
        }

        return \$this->invalidEntityCount;
    }

    public function getGroupedQueries()
    {
        if (\$this->groupedQueries !== null) {
            return \$this->groupedQueries;
        }

        \$this->groupedQueries = [];
        \$totalExecutionMS     = 0;
        foreach (\$this->data['queries'] as \$connection => \$queries) {
            \$connectionGroupedQueries = [];
            foreach (\$queries as \$i => \$query) {
                \$key = \$query['sql'];
                if (! isset(\$connectionGroupedQueries[\$key])) {
                    \$connectionGroupedQueries[\$key]                = \$query;
                    \$connectionGroupedQueries[\$key]['executionMS'] = 0;
                    \$connectionGroupedQueries[\$key]['count']       = 0;
                    \$connectionGroupedQueries[\$key]['index']       = \$i; // \"Explain query\" relies on query index in 'queries'.
                }
                \$connectionGroupedQueries[\$key]['executionMS'] += \$query['executionMS'];
                \$connectionGroupedQueries[\$key]['count']++;
                \$totalExecutionMS += \$query['executionMS'];
            }
            usort(\$connectionGroupedQueries, static function (\$a, \$b) {
                if (\$a['executionMS'] === \$b['executionMS']) {
                    return 0;
                }

                return \$a['executionMS'] < \$b['executionMS'] ? 1 : -1;
            });
            \$this->groupedQueries[\$connection] = \$connectionGroupedQueries;
        }

        foreach (\$this->groupedQueries as \$connection => \$queries) {
            foreach (\$queries as \$i => \$query) {
                \$this->groupedQueries[\$connection][\$i]['executionPercent'] =
                    \$this->executionTimePercentage(\$query['executionMS'], \$totalExecutionMS);
            }
        }

        return \$this->groupedQueries;
    }

    private function executionTimePercentage(\$executionTimeMS, \$totalExecutionTimeMS)
    {
        if (\$totalExecutionTimeMS === 0.0 || \$totalExecutionTimeMS === 0) {
            return 0;
        }

        return \$executionTimeMS / \$totalExecutionTimeMS * 100;
    }

    public function getGroupedQueryCount()
    {
        \$count = 0;
        foreach (\$this->getGroupedQueries() as \$connectionGroupedQueries) {
            \$count += count(\$connectionGroupedQueries);
        }

        return \$count;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DataCollector;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain;
use Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\ClassMetadataFactory;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Tools\\SchemaValidator;
use Exception;
use Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector as BaseCollector;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DoctrineDataCollector extends BaseCollector
{
    /** @var ManagerRegistry */
    private \$registry;

    /** @var int|null */
    private \$invalidEntityCount;

    /** @var string[] */
    private \$groupedQueries;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;

        parent::__construct(\$registry);
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, Exception \$exception = null)
    {
        parent::collect(\$request, \$response, \$exception);

        \$errors   = [];
        \$entities = [];
        \$caches   = [
            'enabled' => false,
            'log_enabled' => false,
            'counts' => [
                'puts' => 0,
                'hits' => 0,
                'misses' => 0,
            ],
            'regions' => [
                'puts' => [],
                'hits' => [],
                'misses' => [],
            ],
        ];

        /** @var EntityManager \$em */
        foreach (\$this->registry->getManagers() as \$name => \$em) {
            \$entities[\$name] = [];
            /** @var ClassMetadataFactory \$factory */
            \$factory   = \$em->getMetadataFactory();
            \$validator = new SchemaValidator(\$em);

            /** @var ClassMetadataInfo \$class */
            foreach (\$factory->getLoadedMetadata() as \$class) {
                if (isset(\$entities[\$name][\$class->getName()])) {
                    continue;
                }

                \$classErrors                        = \$validator->validateClass(\$class);
                \$entities[\$name][\$class->getName()] = \$class->getName();

                if (empty(\$classErrors)) {
                    continue;
                }

                \$errors[\$name][\$class->getName()] = \$classErrors;
            }

            /** @var Configuration \$emConfig */
            \$emConfig   = \$em->getConfiguration();
            \$slcEnabled = \$emConfig->isSecondLevelCacheEnabled();

            if (! \$slcEnabled) {
                continue;
            }

            \$caches['enabled'] = true;

            /** @var \$cacheConfiguration \\Doctrine\\ORM\\Cache\\CacheConfiguration */
            /** @var CacheLoggerChain \$cacheLoggerChain */
            \$cacheConfiguration = \$emConfig->getSecondLevelCacheConfiguration();
            \$cacheLoggerChain   = \$cacheConfiguration->getCacheLogger();

            if (! \$cacheLoggerChain || ! \$cacheLoggerChain->getLogger('statistics')) {
                continue;
            }

            /** @var StatisticsCacheLogger \$cacheLoggerStats */
            \$cacheLoggerStats      = \$cacheLoggerChain->getLogger('statistics');
            \$caches['log_enabled'] = true;

            \$caches['counts']['puts']   += \$cacheLoggerStats->getPutCount();
            \$caches['counts']['hits']   += \$cacheLoggerStats->getHitCount();
            \$caches['counts']['misses'] += \$cacheLoggerStats->getMissCount();

            foreach (\$cacheLoggerStats->getRegionsPut() as \$key => \$value) {
                if (! isset(\$caches['regions']['puts'][\$key])) {
                    \$caches['regions']['puts'][\$key] = 0;
                }

                \$caches['regions']['puts'][\$key] += \$value;
            }

            foreach (\$cacheLoggerStats->getRegionsHit() as \$key => \$value) {
                if (! isset(\$caches['regions']['hits'][\$key])) {
                    \$caches['regions']['hits'][\$key] = 0;
                }

                \$caches['regions']['hits'][\$key] += \$value;
            }

            foreach (\$cacheLoggerStats->getRegionsMiss() as \$key => \$value) {
                if (! isset(\$caches['regions']['misses'][\$key])) {
                    \$caches['regions']['misses'][\$key] = 0;
                }

                \$caches['regions']['misses'][\$key] += \$value;
            }
        }

        // Might be good idea to replicate this block in doctrine bridge so we can drop this from here after some time.
        // This code is compatible with such change, because cloneVar is supposed to check if input is already cloned.
        foreach (\$this->data['queries'] as &\$queries) {
            foreach (\$queries as &\$query) {
                \$query['params'] = \$this->cloneVar(\$query['params']);
            }
        }

        \$this->data['entities'] = \$entities;
        \$this->data['errors']   = \$errors;
        \$this->data['caches']   = \$caches;
        \$this->groupedQueries   = null;
    }

    public function getEntities()
    {
        return \$this->data['entities'];
    }

    public function getMappingErrors()
    {
        return \$this->data['errors'];
    }

    public function getCacheHitsCount()
    {
        return \$this->data['caches']['counts']['hits'];
    }

    public function getCachePutsCount()
    {
        return \$this->data['caches']['counts']['puts'];
    }

    public function getCacheMissesCount()
    {
        return \$this->data['caches']['counts']['misses'];
    }

    public function getCacheEnabled()
    {
        return \$this->data['caches']['enabled'];
    }

    public function getCacheRegions()
    {
        return \$this->data['caches']['regions'];
    }

    public function getCacheCounts()
    {
        return \$this->data['caches']['counts'];
    }

    public function getInvalidEntityCount()
    {
        if (\$this->invalidEntityCount === null) {
            \$this->invalidEntityCount = array_sum(array_map('count', \$this->data['errors']));
        }

        return \$this->invalidEntityCount;
    }

    public function getGroupedQueries()
    {
        if (\$this->groupedQueries !== null) {
            return \$this->groupedQueries;
        }

        \$this->groupedQueries = [];
        \$totalExecutionMS     = 0;
        foreach (\$this->data['queries'] as \$connection => \$queries) {
            \$connectionGroupedQueries = [];
            foreach (\$queries as \$i => \$query) {
                \$key = \$query['sql'];
                if (! isset(\$connectionGroupedQueries[\$key])) {
                    \$connectionGroupedQueries[\$key]                = \$query;
                    \$connectionGroupedQueries[\$key]['executionMS'] = 0;
                    \$connectionGroupedQueries[\$key]['count']       = 0;
                    \$connectionGroupedQueries[\$key]['index']       = \$i; // \"Explain query\" relies on query index in 'queries'.
                }
                \$connectionGroupedQueries[\$key]['executionMS'] += \$query['executionMS'];
                \$connectionGroupedQueries[\$key]['count']++;
                \$totalExecutionMS += \$query['executionMS'];
            }
            usort(\$connectionGroupedQueries, static function (\$a, \$b) {
                if (\$a['executionMS'] === \$b['executionMS']) {
                    return 0;
                }

                return \$a['executionMS'] < \$b['executionMS'] ? 1 : -1;
            });
            \$this->groupedQueries[\$connection] = \$connectionGroupedQueries;
        }

        foreach (\$this->groupedQueries as \$connection => \$queries) {
            foreach (\$queries as \$i => \$query) {
                \$this->groupedQueries[\$connection][\$i]['executionPercent'] =
                    \$this->executionTimePercentage(\$query['executionMS'], \$totalExecutionMS);
            }
        }

        return \$this->groupedQueries;
    }

    private function executionTimePercentage(\$executionTimeMS, \$totalExecutionTimeMS)
    {
        if (\$totalExecutionTimeMS === 0.0 || \$totalExecutionTimeMS === 0) {
            return 0;
        }

        return \$executionTimeMS / \$totalExecutionTimeMS * 100;
    }

    public function getGroupedQueryCount()
    {
        \$count = 0;
        foreach (\$this->getGroupedQueries() as \$connectionGroupedQueries) {
            \$count += count(\$connectionGroupedQueries);
        }

        return \$count;
    }
}
", "vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php");
    }
}
