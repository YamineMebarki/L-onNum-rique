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

/* vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RedisDefinition.php */
class __TwigTemplate_d19506f68d1ce0be9c279ed1d529d2a4ada41dec31bc6cbd309d18a82b44fd1d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RedisDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RedisDefinition.php"));

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
 * Redis definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class RedisDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$redisConf = \$config['redis'];
        \$connRef   = \$this->getConnectionReference(\$name, \$redisConf, \$container);

        \$service->addMethodCall('setRedis', array(\$connRef));
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

        \$host       = \$config['host'];
        \$port       = \$config['port'];
        \$connClass  = '%doctrine_cache.redis.connection.class%';
        \$connId     = sprintf('doctrine_cache.services.%s_redis.connection', \$name);
        \$connDef    = new Definition(\$connClass);
        \$connParams = array(\$host, \$port);

        if (isset(\$config['timeout'])) {
            \$connParams[] = \$config['timeout'];
        }

        \$connMethod = 'connect';

        if (isset(\$config['persistent']) && \$config['persistent']) {
            \$connMethod = 'pconnect';
        }

        \$connDef->setPublic(false);
        \$connDef->addMethodCall(\$connMethod, \$connParams);

        if (isset(\$config['password'])) {
            \$password = \$config['password'];
            \$connDef->addMethodCall('auth', array(\$password));
        }

        if (isset(\$config['database'])) {
            \$database = (int) \$config['database'];
            \$connDef->addMethodCall('select', array(\$database));
        }

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
        return "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RedisDefinition.php";
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
 * Redis definition.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class RedisDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$redisConf = \$config['redis'];
        \$connRef   = \$this->getConnectionReference(\$name, \$redisConf, \$container);

        \$service->addMethodCall('setRedis', array(\$connRef));
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

        \$host       = \$config['host'];
        \$port       = \$config['port'];
        \$connClass  = '%doctrine_cache.redis.connection.class%';
        \$connId     = sprintf('doctrine_cache.services.%s_redis.connection', \$name);
        \$connDef    = new Definition(\$connClass);
        \$connParams = array(\$host, \$port);

        if (isset(\$config['timeout'])) {
            \$connParams[] = \$config['timeout'];
        }

        \$connMethod = 'connect';

        if (isset(\$config['persistent']) && \$config['persistent']) {
            \$connMethod = 'pconnect';
        }

        \$connDef->setPublic(false);
        \$connDef->addMethodCall(\$connMethod, \$connParams);

        if (isset(\$config['password'])) {
            \$password = \$config['password'];
            \$connDef->addMethodCall('auth', array(\$password));
        }

        if (isset(\$config['database'])) {
            \$database = (int) \$config['database'];
            \$connDef->addMethodCall('select', array(\$database));
        }

        \$container->setDefinition(\$connId, \$connDef);

        return new Reference(\$connId);
    }
}
", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RedisDefinition.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/RedisDefinition.php");
    }
}
