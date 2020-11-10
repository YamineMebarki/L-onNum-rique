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

/* vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RiakDefinition.php */
class __TwigTemplate_1d12f1d16e5a3b35ba10e96a845eb95fddacf7da037090b4ae3909ecad37177e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RiakDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RiakDefinition.php"));

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
 * Riak definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class RiakDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$riakConf  = \$config['riak'];
        \$bucketRef = \$this->getBucketReference(\$name, \$riakConf, \$container);

        \$service->setArguments(array(\$bucketRef));
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getBucketReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['bucket_id'])) {
            return new Reference(\$config['bucket_id']);
        }

        \$bucketName  = \$config['bucket_name'];
        \$bucketClass = '%doctrine_cache.riak.bucket.class%';
        \$bucketId    = sprintf('doctrine_cache.services.%s.bucket', \$name);
        \$connDef     = \$this->getConnectionReference(\$name, \$config, \$container);
        \$bucketDef   = new Definition(\$bucketClass, array(\$connDef, \$bucketName));

        \$bucketDef->setPublic(false);
        \$container->setDefinition(\$bucketId, \$bucketDef);

        if ( ! empty(\$config['bucket_property_list'])) {
            \$this->configureBucketPropertyList(\$name, \$config['bucket_property_list'], \$bucketDef, \$container);
        }

        return new Reference(\$bucketId);
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

        \$host      = \$config['host'];
        \$port      = \$config['port'];
        \$connClass = '%doctrine_cache.riak.connection.class%';
        \$connId    = sprintf('doctrine_cache.services.%s.connection', \$name);
        \$connDef   = new Definition(\$connClass, array(\$host, \$port));

        \$connDef->setPublic(false);
        \$container->setDefinition(\$connId, \$connDef);

        return new Reference(\$connId);
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\Definition         \$bucketDefinition
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     */
    private function configureBucketPropertyList(\$name, array \$config, Definition \$bucketDefinition, ContainerBuilder \$container)
    {
        \$propertyListClass      = '%doctrine_cache.riak.bucket_property_list.class%';
        \$propertyListServiceId  = sprintf('doctrine_cache.services.%s.bucket_property_list', \$name);
        \$propertyListReference  = new Reference(\$propertyListServiceId);
        \$propertyListDefinition = new Definition(\$propertyListClass, array(
            \$config['n_value'],
            \$config['allow_multiple']
        ));

        \$container->setDefinition(\$propertyListServiceId, \$propertyListDefinition);
        \$bucketDefinition->addMethodCall('setPropertyList', array(\$propertyListReference));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RiakDefinition.php";
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
 * Riak definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class RiakDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$riakConf  = \$config['riak'];
        \$bucketRef = \$this->getBucketReference(\$name, \$riakConf, \$container);

        \$service->setArguments(array(\$bucketRef));
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getBucketReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['bucket_id'])) {
            return new Reference(\$config['bucket_id']);
        }

        \$bucketName  = \$config['bucket_name'];
        \$bucketClass = '%doctrine_cache.riak.bucket.class%';
        \$bucketId    = sprintf('doctrine_cache.services.%s.bucket', \$name);
        \$connDef     = \$this->getConnectionReference(\$name, \$config, \$container);
        \$bucketDef   = new Definition(\$bucketClass, array(\$connDef, \$bucketName));

        \$bucketDef->setPublic(false);
        \$container->setDefinition(\$bucketId, \$bucketDef);

        if ( ! empty(\$config['bucket_property_list'])) {
            \$this->configureBucketPropertyList(\$name, \$config['bucket_property_list'], \$bucketDef, \$container);
        }

        return new Reference(\$bucketId);
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

        \$host      = \$config['host'];
        \$port      = \$config['port'];
        \$connClass = '%doctrine_cache.riak.connection.class%';
        \$connId    = sprintf('doctrine_cache.services.%s.connection', \$name);
        \$connDef   = new Definition(\$connClass, array(\$host, \$port));

        \$connDef->setPublic(false);
        \$container->setDefinition(\$connId, \$connDef);

        return new Reference(\$connId);
    }

    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\Definition         \$bucketDefinition
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     */
    private function configureBucketPropertyList(\$name, array \$config, Definition \$bucketDefinition, ContainerBuilder \$container)
    {
        \$propertyListClass      = '%doctrine_cache.riak.bucket_property_list.class%';
        \$propertyListServiceId  = sprintf('doctrine_cache.services.%s.bucket_property_list', \$name);
        \$propertyListReference  = new Reference(\$propertyListServiceId);
        \$propertyListDefinition = new Definition(\$propertyListClass, array(
            \$config['n_value'],
            \$config['allow_multiple']
        ));

        \$container->setDefinition(\$propertyListServiceId, \$propertyListDefinition);
        \$bucketDefinition->addMethodCall('setPropertyList', array(\$propertyListReference));
    }
}
", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RiakDefinition.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RiakDefinition.php");
    }
}
