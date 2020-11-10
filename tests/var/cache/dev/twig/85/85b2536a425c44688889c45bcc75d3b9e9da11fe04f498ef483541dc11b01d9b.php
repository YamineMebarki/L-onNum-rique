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

/* vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/PredisDefinition.php */
class __TwigTemplate_d8ec5ecf1caaa0a71cf552903f66f3269bf451efadc2eba93206073aba334cae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/PredisDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/PredisDefinition.php"));

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
 * Predis definition.
 *
 * @author Ivo Bathke <ivo.bathke@gmail.com>
 */
class PredisDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$redisConf = \$config['predis'];
        \$connRef = \$this->getConnectionReference(\$name, \$redisConf, \$container);
        \$service->addArgument(\$connRef);
    }

    /**
     * @param string                                                  \$name
     * @param array                                                   \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getConnectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['client_id'])) {
            return new Reference(\$config['client_id']);
        }

        \$parameters = array(
            'scheme' => \$config['scheme'],
            'host'   => \$config['host'],
            'port'   => \$config['port'],
        );

        if (\$config['password']) {
            \$parameters['password'] = \$config['password'];
        }

        if (\$config['timeout']) {
            \$parameters['timeout'] = \$config['timeout'];
        }

        if (\$config['database']) {
            \$parameters['database'] = \$config['database'];
        }

        \$options = null;

        if (isset(\$config['options'])) {
            \$options = \$config['options'];
        }

        \$clientClass = '%doctrine_cache.predis.client.class%';
        \$clientId = sprintf('doctrine_cache.services.%s_predis.client', \$name);
        \$clientDef = new Definition(\$clientClass);

        \$clientDef->addArgument(\$parameters);
        \$clientDef->addArgument(\$options);
        \$clientDef->setPublic(false);

        \$container->setDefinition(\$clientId, \$clientDef);

        return new Reference(\$clientId);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/PredisDefinition.php";
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
 * Predis definition.
 *
 * @author Ivo Bathke <ivo.bathke@gmail.com>
 */
class PredisDefinition extends CacheDefinition
{
    /**
     * {@inheritDoc}
     */
    public function configure(\$name, array \$config, Definition \$service, ContainerBuilder \$container)
    {
        \$redisConf = \$config['predis'];
        \$connRef = \$this->getConnectionReference(\$name, \$redisConf, \$container);
        \$service->addArgument(\$connRef);
    }

    /**
     * @param string                                                  \$name
     * @param array                                                   \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder \$container
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Reference
     */
    private function getConnectionReference(\$name, array \$config, ContainerBuilder \$container)
    {
        if (isset(\$config['client_id'])) {
            return new Reference(\$config['client_id']);
        }

        \$parameters = array(
            'scheme' => \$config['scheme'],
            'host'   => \$config['host'],
            'port'   => \$config['port'],
        );

        if (\$config['password']) {
            \$parameters['password'] = \$config['password'];
        }

        if (\$config['timeout']) {
            \$parameters['timeout'] = \$config['timeout'];
        }

        if (\$config['database']) {
            \$parameters['database'] = \$config['database'];
        }

        \$options = null;

        if (isset(\$config['options'])) {
            \$options = \$config['options'];
        }

        \$clientClass = '%doctrine_cache.predis.client.class%';
        \$clientId = sprintf('doctrine_cache.services.%s_predis.client', \$name);
        \$clientDef = new Definition(\$clientClass);

        \$clientDef->addArgument(\$parameters);
        \$clientDef->addArgument(\$options);
        \$clientDef->setPublic(false);

        \$container->setDefinition(\$clientId, \$clientDef);

        return new Reference(\$clientId);
    }
}
", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/PredisDefinition.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/DependencyInjection/Definition/PredisDefinition.php");
    }
}
