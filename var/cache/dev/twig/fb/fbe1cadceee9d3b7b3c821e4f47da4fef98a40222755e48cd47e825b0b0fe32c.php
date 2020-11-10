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

/* vendor/symfony/dependency-injection/Loader/Configurator/ServicesConfigurator.php */
class __TwigTemplate_719c0f8039c714af05b3f399e0cfe6d89632eec255ceb4012284be66cba4fc8a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/ServicesConfigurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/ServicesConfigurator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServicesConfigurator extends AbstractConfigurator
{
    const FACTORY = 'services';

    private \$defaults;
    private \$container;
    private \$loader;
    private \$instanceof;
    private \$path;
    private \$anonymousHash;
    private \$anonymousCount;

    public function __construct(ContainerBuilder \$container, PhpFileLoader \$loader, array &\$instanceof, string \$path = null, int &\$anonymousCount = 0)
    {
        \$this->defaults = new Definition();
        \$this->container = \$container;
        \$this->loader = \$loader;
        \$this->instanceof = &\$instanceof;
        \$this->path = \$path;
        \$this->anonymousHash = ContainerBuilder::hash(\$path ?: mt_rand());
        \$this->anonymousCount = &\$anonymousCount;
        \$instanceof = [];
    }

    /**
     * Defines a set of defaults for following service definitions.
     */
    final public function defaults(): DefaultsConfigurator
    {
        return new DefaultsConfigurator(\$this, \$this->defaults = new Definition(), \$this->path);
    }

    /**
     * Defines an instanceof-conditional to be applied to following service definitions.
     */
    final public function instanceof(string \$fqcn): InstanceofConfigurator
    {
        \$this->instanceof[\$fqcn] = \$definition = new ChildDefinition('');

        return new InstanceofConfigurator(\$this, \$definition, \$fqcn, \$this->path);
    }

    /**
     * Registers a service.
     *
     * @param string|null \$id    The service id, or null to create an anonymous service
     * @param string|null \$class The class of the service, or null when \$id is also the class name
     */
    final public function set(?string \$id, string \$class = null): ServiceConfigurator
    {
        \$defaults = \$this->defaults;
        \$allowParent = !\$defaults->getChanges() && empty(\$this->instanceof);

        \$definition = new Definition();

        if (null === \$id) {
            if (!\$class) {
                throw new \\LogicException('Anonymous services must have a class name.');
            }

            \$id = sprintf('.%d_%s', ++\$this->anonymousCount, preg_replace('/^.*\\\\\\\\/', '', \$class).'~'.\$this->anonymousHash);
            \$definition->setPublic(false);
        } else {
            \$definition->setPublic(\$defaults->isPublic());
        }

        \$definition->setAutowired(\$defaults->isAutowired());
        \$definition->setAutoconfigured(\$defaults->isAutoconfigured());
        \$definition->setBindings(\$defaults->getBindings());
        \$definition->setChanges([]);

        \$configurator = new ServiceConfigurator(\$this->container, \$this->instanceof, \$allowParent, \$this, \$definition, \$id, \$defaults->getTags(), \$this->path);

        return null !== \$class ? \$configurator->class(\$class) : \$configurator;
    }

    /**
     * Creates an alias.
     */
    final public function alias(string \$id, string \$referencedId): AliasConfigurator
    {
        \$ref = static::processValue(\$referencedId, true);
        \$alias = new Alias((string) \$ref, \$this->defaults->isPublic());
        \$this->container->setAlias(\$id, \$alias);

        return new AliasConfigurator(\$this, \$alias);
    }

    /**
     * Registers a PSR-4 namespace using a glob pattern.
     */
    final public function load(string \$namespace, string \$resource): PrototypeConfigurator
    {
        \$allowParent = !\$this->defaults->getChanges() && empty(\$this->instanceof);

        return new PrototypeConfigurator(\$this, \$this->loader, \$this->defaults, \$namespace, \$resource, \$allowParent);
    }

    /**
     * Gets an already defined service definition.
     *
     * @throws ServiceNotFoundException if the service definition does not exist
     */
    final public function get(string \$id): ServiceConfigurator
    {
        \$allowParent = !\$this->defaults->getChanges() && empty(\$this->instanceof);
        \$definition = \$this->container->getDefinition(\$id);

        return new ServiceConfigurator(\$this->container, \$definition->getInstanceofConditionals(), \$allowParent, \$this, \$definition, \$id, []);
    }

    /**
     * Registers a service.
     */
    final public function __invoke(string \$id, string \$class = null): ServiceConfigurator
    {
        return \$this->set(\$id, \$class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/Configurator/ServicesConfigurator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServicesConfigurator extends AbstractConfigurator
{
    const FACTORY = 'services';

    private \$defaults;
    private \$container;
    private \$loader;
    private \$instanceof;
    private \$path;
    private \$anonymousHash;
    private \$anonymousCount;

    public function __construct(ContainerBuilder \$container, PhpFileLoader \$loader, array &\$instanceof, string \$path = null, int &\$anonymousCount = 0)
    {
        \$this->defaults = new Definition();
        \$this->container = \$container;
        \$this->loader = \$loader;
        \$this->instanceof = &\$instanceof;
        \$this->path = \$path;
        \$this->anonymousHash = ContainerBuilder::hash(\$path ?: mt_rand());
        \$this->anonymousCount = &\$anonymousCount;
        \$instanceof = [];
    }

    /**
     * Defines a set of defaults for following service definitions.
     */
    final public function defaults(): DefaultsConfigurator
    {
        return new DefaultsConfigurator(\$this, \$this->defaults = new Definition(), \$this->path);
    }

    /**
     * Defines an instanceof-conditional to be applied to following service definitions.
     */
    final public function instanceof(string \$fqcn): InstanceofConfigurator
    {
        \$this->instanceof[\$fqcn] = \$definition = new ChildDefinition('');

        return new InstanceofConfigurator(\$this, \$definition, \$fqcn, \$this->path);
    }

    /**
     * Registers a service.
     *
     * @param string|null \$id    The service id, or null to create an anonymous service
     * @param string|null \$class The class of the service, or null when \$id is also the class name
     */
    final public function set(?string \$id, string \$class = null): ServiceConfigurator
    {
        \$defaults = \$this->defaults;
        \$allowParent = !\$defaults->getChanges() && empty(\$this->instanceof);

        \$definition = new Definition();

        if (null === \$id) {
            if (!\$class) {
                throw new \\LogicException('Anonymous services must have a class name.');
            }

            \$id = sprintf('.%d_%s', ++\$this->anonymousCount, preg_replace('/^.*\\\\\\\\/', '', \$class).'~'.\$this->anonymousHash);
            \$definition->setPublic(false);
        } else {
            \$definition->setPublic(\$defaults->isPublic());
        }

        \$definition->setAutowired(\$defaults->isAutowired());
        \$definition->setAutoconfigured(\$defaults->isAutoconfigured());
        \$definition->setBindings(\$defaults->getBindings());
        \$definition->setChanges([]);

        \$configurator = new ServiceConfigurator(\$this->container, \$this->instanceof, \$allowParent, \$this, \$definition, \$id, \$defaults->getTags(), \$this->path);

        return null !== \$class ? \$configurator->class(\$class) : \$configurator;
    }

    /**
     * Creates an alias.
     */
    final public function alias(string \$id, string \$referencedId): AliasConfigurator
    {
        \$ref = static::processValue(\$referencedId, true);
        \$alias = new Alias((string) \$ref, \$this->defaults->isPublic());
        \$this->container->setAlias(\$id, \$alias);

        return new AliasConfigurator(\$this, \$alias);
    }

    /**
     * Registers a PSR-4 namespace using a glob pattern.
     */
    final public function load(string \$namespace, string \$resource): PrototypeConfigurator
    {
        \$allowParent = !\$this->defaults->getChanges() && empty(\$this->instanceof);

        return new PrototypeConfigurator(\$this, \$this->loader, \$this->defaults, \$namespace, \$resource, \$allowParent);
    }

    /**
     * Gets an already defined service definition.
     *
     * @throws ServiceNotFoundException if the service definition does not exist
     */
    final public function get(string \$id): ServiceConfigurator
    {
        \$allowParent = !\$this->defaults->getChanges() && empty(\$this->instanceof);
        \$definition = \$this->container->getDefinition(\$id);

        return new ServiceConfigurator(\$this->container, \$definition->getInstanceofConditionals(), \$allowParent, \$this, \$definition, \$id, []);
    }

    /**
     * Registers a service.
     */
    final public function __invoke(string \$id, string \$class = null): ServiceConfigurator
    {
        return \$this->set(\$id, \$class);
    }
}
", "vendor/symfony/dependency-injection/Loader/Configurator/ServicesConfigurator.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/Configurator/ServicesConfigurator.php");
    }
}
