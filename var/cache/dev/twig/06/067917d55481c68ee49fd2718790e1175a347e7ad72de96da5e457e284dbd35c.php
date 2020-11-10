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

/* vendor/symfony/dependency-injection/Compiler/ResolveChildDefinitionsPass.php */
class __TwigTemplate_28c4788ea727dafd29f96d010a15338fa2ae4eeb47f0a4a77c0a2986ac0a8c63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveChildDefinitionsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveChildDefinitionsPass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ExceptionInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;

/**
 * This replaces all ChildDefinition instances with their equivalent fully
 * merged Definition instance.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveChildDefinitionsPass extends AbstractRecursivePass
{
    private \$currentPath;

    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }
        if (\$isRoot) {
            // yes, we are specifically fetching the definition from the
            // container to ensure we are not operating on stale data
            \$value = \$this->container->getDefinition(\$this->currentId);
        }
        if (\$value instanceof ChildDefinition) {
            \$this->currentPath = [];
            \$value = \$this->resolveDefinition(\$value);
            if (\$isRoot) {
                \$this->container->setDefinition(\$this->currentId, \$value);
            }
        }

        return parent::processValue(\$value, \$isRoot);
    }

    /**
     * Resolves the definition.
     *
     * @return Definition
     *
     * @throws RuntimeException When the definition is invalid
     */
    private function resolveDefinition(ChildDefinition \$definition)
    {
        try {
            return \$this->doResolveDefinition(\$definition);
        } catch (ServiceCircularReferenceException \$e) {
            throw \$e;
        } catch (ExceptionInterface \$e) {
            \$r = new \\ReflectionProperty(\$e, 'message');
            \$r->setAccessible(true);
            \$r->setValue(\$e, sprintf('Service \"%s\": %s', \$this->currentId, \$e->getMessage()));

            throw \$e;
        }
    }

    private function doResolveDefinition(ChildDefinition \$definition)
    {
        if (!\$this->container->has(\$parent = \$definition->getParent())) {
            throw new RuntimeException(sprintf('Parent definition \"%s\" does not exist.', \$parent));
        }

        \$searchKey = array_search(\$parent, \$this->currentPath);
        \$this->currentPath[] = \$parent;

        if (false !== \$searchKey) {
            throw new ServiceCircularReferenceException(\$parent, \\array_slice(\$this->currentPath, \$searchKey));
        }

        \$parentDef = \$this->container->findDefinition(\$parent);
        if (\$parentDef instanceof ChildDefinition) {
            \$id = \$this->currentId;
            \$this->currentId = \$parent;
            \$parentDef = \$this->resolveDefinition(\$parentDef);
            \$this->container->setDefinition(\$parent, \$parentDef);
            \$this->currentId = \$id;
        }

        \$this->container->log(\$this, sprintf('Resolving inheritance for \"%s\" (parent: %s).', \$this->currentId, \$parent));
        \$def = new Definition();

        // merge in parent definition
        // purposely ignored attributes: abstract, shared, tags, autoconfigured
        \$def->setClass(\$parentDef->getClass());
        \$def->setArguments(\$parentDef->getArguments());
        \$def->setMethodCalls(\$parentDef->getMethodCalls());
        \$def->setProperties(\$parentDef->getProperties());
        if (\$parentDef->isDeprecated()) {
            \$def->setDeprecated(true, \$parentDef->getDeprecationMessage('%service_id%'));
        }
        \$def->setFactory(\$parentDef->getFactory());
        \$def->setConfigurator(\$parentDef->getConfigurator());
        \$def->setFile(\$parentDef->getFile());
        \$def->setPublic(\$parentDef->isPublic());
        \$def->setLazy(\$parentDef->isLazy());
        \$def->setAutowired(\$parentDef->isAutowired());
        \$def->setChanges(\$parentDef->getChanges());

        \$def->setBindings(\$definition->getBindings() + \$parentDef->getBindings());

        // overwrite with values specified in the decorator
        \$changes = \$definition->getChanges();
        if (isset(\$changes['class'])) {
            \$def->setClass(\$definition->getClass());
        }
        if (isset(\$changes['factory'])) {
            \$def->setFactory(\$definition->getFactory());
        }
        if (isset(\$changes['configurator'])) {
            \$def->setConfigurator(\$definition->getConfigurator());
        }
        if (isset(\$changes['file'])) {
            \$def->setFile(\$definition->getFile());
        }
        if (isset(\$changes['public'])) {
            \$def->setPublic(\$definition->isPublic());
        } else {
            \$def->setPrivate(\$definition->isPrivate() || \$parentDef->isPrivate());
        }
        if (isset(\$changes['lazy'])) {
            \$def->setLazy(\$definition->isLazy());
        }
        if (isset(\$changes['deprecated'])) {
            \$def->setDeprecated(\$definition->isDeprecated(), \$definition->getDeprecationMessage('%service_id%'));
        }
        if (isset(\$changes['autowired'])) {
            \$def->setAutowired(\$definition->isAutowired());
        }
        if (isset(\$changes['shared'])) {
            \$def->setShared(\$definition->isShared());
        }
        if (isset(\$changes['decorated_service'])) {
            \$decoratedService = \$definition->getDecoratedService();
            if (null === \$decoratedService) {
                \$def->setDecoratedService(\$decoratedService);
            } else {
                \$def->setDecoratedService(\$decoratedService[0], \$decoratedService[1], \$decoratedService[2]);
            }
        }

        // merge arguments
        foreach (\$definition->getArguments() as \$k => \$v) {
            if (is_numeric(\$k)) {
                \$def->addArgument(\$v);
            } elseif (0 === strpos(\$k, 'index_')) {
                \$def->replaceArgument((int) substr(\$k, \\strlen('index_')), \$v);
            } else {
                \$def->setArgument(\$k, \$v);
            }
        }

        // merge properties
        foreach (\$definition->getProperties() as \$k => \$v) {
            \$def->setProperty(\$k, \$v);
        }

        // append method calls
        if (\$calls = \$definition->getMethodCalls()) {
            \$def->setMethodCalls(array_merge(\$def->getMethodCalls(), \$calls));
        }

        \$def->addError(\$parentDef);
        \$def->addError(\$definition);

        // these attributes are always taken from the child
        \$def->setAbstract(\$definition->isAbstract());
        \$def->setTags(\$definition->getTags());
        // autoconfigure is never taken from parent (on purpose)
        // and it's not legal on an instanceof
        \$def->setAutoconfigured(\$definition->isAutoconfigured());

        return \$def;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/ResolveChildDefinitionsPass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ExceptionInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;

/**
 * This replaces all ChildDefinition instances with their equivalent fully
 * merged Definition instance.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveChildDefinitionsPass extends AbstractRecursivePass
{
    private \$currentPath;

    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }
        if (\$isRoot) {
            // yes, we are specifically fetching the definition from the
            // container to ensure we are not operating on stale data
            \$value = \$this->container->getDefinition(\$this->currentId);
        }
        if (\$value instanceof ChildDefinition) {
            \$this->currentPath = [];
            \$value = \$this->resolveDefinition(\$value);
            if (\$isRoot) {
                \$this->container->setDefinition(\$this->currentId, \$value);
            }
        }

        return parent::processValue(\$value, \$isRoot);
    }

    /**
     * Resolves the definition.
     *
     * @return Definition
     *
     * @throws RuntimeException When the definition is invalid
     */
    private function resolveDefinition(ChildDefinition \$definition)
    {
        try {
            return \$this->doResolveDefinition(\$definition);
        } catch (ServiceCircularReferenceException \$e) {
            throw \$e;
        } catch (ExceptionInterface \$e) {
            \$r = new \\ReflectionProperty(\$e, 'message');
            \$r->setAccessible(true);
            \$r->setValue(\$e, sprintf('Service \"%s\": %s', \$this->currentId, \$e->getMessage()));

            throw \$e;
        }
    }

    private function doResolveDefinition(ChildDefinition \$definition)
    {
        if (!\$this->container->has(\$parent = \$definition->getParent())) {
            throw new RuntimeException(sprintf('Parent definition \"%s\" does not exist.', \$parent));
        }

        \$searchKey = array_search(\$parent, \$this->currentPath);
        \$this->currentPath[] = \$parent;

        if (false !== \$searchKey) {
            throw new ServiceCircularReferenceException(\$parent, \\array_slice(\$this->currentPath, \$searchKey));
        }

        \$parentDef = \$this->container->findDefinition(\$parent);
        if (\$parentDef instanceof ChildDefinition) {
            \$id = \$this->currentId;
            \$this->currentId = \$parent;
            \$parentDef = \$this->resolveDefinition(\$parentDef);
            \$this->container->setDefinition(\$parent, \$parentDef);
            \$this->currentId = \$id;
        }

        \$this->container->log(\$this, sprintf('Resolving inheritance for \"%s\" (parent: %s).', \$this->currentId, \$parent));
        \$def = new Definition();

        // merge in parent definition
        // purposely ignored attributes: abstract, shared, tags, autoconfigured
        \$def->setClass(\$parentDef->getClass());
        \$def->setArguments(\$parentDef->getArguments());
        \$def->setMethodCalls(\$parentDef->getMethodCalls());
        \$def->setProperties(\$parentDef->getProperties());
        if (\$parentDef->isDeprecated()) {
            \$def->setDeprecated(true, \$parentDef->getDeprecationMessage('%service_id%'));
        }
        \$def->setFactory(\$parentDef->getFactory());
        \$def->setConfigurator(\$parentDef->getConfigurator());
        \$def->setFile(\$parentDef->getFile());
        \$def->setPublic(\$parentDef->isPublic());
        \$def->setLazy(\$parentDef->isLazy());
        \$def->setAutowired(\$parentDef->isAutowired());
        \$def->setChanges(\$parentDef->getChanges());

        \$def->setBindings(\$definition->getBindings() + \$parentDef->getBindings());

        // overwrite with values specified in the decorator
        \$changes = \$definition->getChanges();
        if (isset(\$changes['class'])) {
            \$def->setClass(\$definition->getClass());
        }
        if (isset(\$changes['factory'])) {
            \$def->setFactory(\$definition->getFactory());
        }
        if (isset(\$changes['configurator'])) {
            \$def->setConfigurator(\$definition->getConfigurator());
        }
        if (isset(\$changes['file'])) {
            \$def->setFile(\$definition->getFile());
        }
        if (isset(\$changes['public'])) {
            \$def->setPublic(\$definition->isPublic());
        } else {
            \$def->setPrivate(\$definition->isPrivate() || \$parentDef->isPrivate());
        }
        if (isset(\$changes['lazy'])) {
            \$def->setLazy(\$definition->isLazy());
        }
        if (isset(\$changes['deprecated'])) {
            \$def->setDeprecated(\$definition->isDeprecated(), \$definition->getDeprecationMessage('%service_id%'));
        }
        if (isset(\$changes['autowired'])) {
            \$def->setAutowired(\$definition->isAutowired());
        }
        if (isset(\$changes['shared'])) {
            \$def->setShared(\$definition->isShared());
        }
        if (isset(\$changes['decorated_service'])) {
            \$decoratedService = \$definition->getDecoratedService();
            if (null === \$decoratedService) {
                \$def->setDecoratedService(\$decoratedService);
            } else {
                \$def->setDecoratedService(\$decoratedService[0], \$decoratedService[1], \$decoratedService[2]);
            }
        }

        // merge arguments
        foreach (\$definition->getArguments() as \$k => \$v) {
            if (is_numeric(\$k)) {
                \$def->addArgument(\$v);
            } elseif (0 === strpos(\$k, 'index_')) {
                \$def->replaceArgument((int) substr(\$k, \\strlen('index_')), \$v);
            } else {
                \$def->setArgument(\$k, \$v);
            }
        }

        // merge properties
        foreach (\$definition->getProperties() as \$k => \$v) {
            \$def->setProperty(\$k, \$v);
        }

        // append method calls
        if (\$calls = \$definition->getMethodCalls()) {
            \$def->setMethodCalls(array_merge(\$def->getMethodCalls(), \$calls));
        }

        \$def->addError(\$parentDef);
        \$def->addError(\$definition);

        // these attributes are always taken from the child
        \$def->setAbstract(\$definition->isAbstract());
        \$def->setTags(\$definition->getTags());
        // autoconfigure is never taken from parent (on purpose)
        // and it's not legal on an instanceof
        \$def->setAutoconfigured(\$definition->isAutoconfigured());

        return \$def;
    }
}
", "vendor/symfony/dependency-injection/Compiler/ResolveChildDefinitionsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ResolveChildDefinitionsPass.php");
    }
}
