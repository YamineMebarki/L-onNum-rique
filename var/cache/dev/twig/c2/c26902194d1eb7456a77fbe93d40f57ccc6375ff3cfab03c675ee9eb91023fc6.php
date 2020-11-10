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

/* vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/MongodbDefinition.php */
class __TwigTemplate_923506631960516e806976fcd52bfb98d5869fa22077723de3c9a80727fc91d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/MongodbDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/MongodbDefinition.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection\\Definition;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * MongoDB definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class MongodbDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$memcacheConf = \$config['mongodb'];
        \$collRef      = \$this->getCollectionReference(\$name, \$memcacheConf, \$container);

        \$service->setArguments(array(\$collRef));
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getCollectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['collection_id'])) {
            return new Reference(\$config['collection_id']);
        }

        \$databaseName   = \$config['database_name'];
        \$collectionName = \$config['collection_name'];
        \$collClass      = '%doctrine_cache.mongodb.collection.class%';
        \$collId         = sprintf('doctrine_cache.services.%s.collection', \$name);
        \$collDef        = new Definition(\$collClass, array(\$databaseName, \$collectionName));
        \$connRef        = \$this->getConnectionReference(\$name, \$config, \$container);

        \$definition = \$container->setDefinition(\$collId, \$collDef)->setPublic(false);

        if (method_exists(\$definition, 'setFactory')) {
            \$definition->setFactory(array(\$connRef, 'selectCollection'));

            return new Reference(\$collId);
        }

        \$definition
            ->setFactoryService(\$connRef)
            ->setFactoryMethod('selectCollection')
        ;

        return new Reference(\$collId);
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getConnectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['connection_id'])) {
            return new Reference(\$config['connection_id']);
        }

        \$server         = \$config['server'];
        \$connClass      = '%doctrine_cache.mongodb.connection.class%';
        \$connId         = sprintf('doctrine_cache.services.%s.connection', \$name);
        \$connDef        = new Definition(\$connClass, array(\$server));

        \$connDef->setPublic(false);
        \$connDef->addMethodCall('connect');

        \$container->setDefinition(\$connId, \$connDef);

        return new Reference(\$connId);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/MongodbDefinition.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection\\Definition;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * MongoDB definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class MongodbDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$memcacheConf = \$config['mongodb'];
        \$collRef      = \$this->getCollectionReference(\$name, \$memcacheConf, \$container);

        \$service->setArguments(array(\$collRef));
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getCollectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['collection_id'])) {
            return new Reference(\$config['collection_id']);
        }

        \$databaseName   = \$config['database_name'];
        \$collectionName = \$config['collection_name'];
        \$collClass      = '%doctrine_cache.mongodb.collection.class%';
        \$collId         = sprintf('doctrine_cache.services.%s.collection', \$name);
        \$collDef        = new Definition(\$collClass, array(\$databaseName, \$collectionName));
        \$connRef        = \$this->getConnectionReference(\$name, \$config, \$container);

        \$definition = \$container->setDefinition(\$collId, \$collDef)->setPublic(false);

        if (method_exists(\$definition, 'setFactory')) {
            \$definition->setFactory(array(\$connRef, 'selectCollection'));

            return new Reference(\$collId);
        }

        \$definition
            ->setFactoryService(\$connRef)
            ->setFactoryMethod('selectCollection')
        ;

        return new Reference(\$collId);
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getConnectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['connection_id'])) {
            return new Reference(\$config['connection_id']);
        }

        \$server         = \$config['server'];
        \$connClass      = '%doctrine_cache.mongodb.connection.class%';
        \$connId         = sprintf('doctrine_cache.services.%s.connection', \$name);
        \$connDef        = new Definition(\$connClass, array(\$server));

        \$connDef->setPublic(false);
        \$connDef->addMethodCall('connect');

        \$container->setDefinition(\$connId, \$connDef);

        return new Reference(\$connId);
    }
}
", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/MongodbDefinition.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/MongodbDefinition.php");
    }
}
