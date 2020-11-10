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

/* vendor/symfony/dependency-injection/Compiler/ReplaceAliasByActualDefinitionPass.php */
class __TwigTemplate_e30a03073b303aa171d4f92296f7b1d0f8f62fd28c294b20ba6eb672155de243 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ReplaceAliasByActualDefinitionPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ReplaceAliasByActualDefinitionPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Replaces aliases with actual service definitions, effectively removing these
 * aliases.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ReplaceAliasByActualDefinitionPass extends AbstractRecursivePass
{
    private \$replacements;

    /**
     * Process the Container to replace aliases with service definitions.
     *
     * @throws InvalidArgumentException if the service definition does not exist
     */
    public function process(ContainerBuilder \$container)
    {
        // First collect all alias targets that need to be replaced
        \$seenAliasTargets = [];
        \$replacements = [];
        foreach (\$container->getAliases() as \$definitionId => \$target) {
            \$targetId = (string) \$target;
            // Special case: leave this target alone
            if ('service_container' === \$targetId) {
                continue;
            }
            // Check if target needs to be replaces
            if (isset(\$replacements[\$targetId])) {
                \$container->setAlias(\$definitionId, \$replacements[\$targetId])->setPublic(\$target->isPublic())->setPrivate(\$target->isPrivate());
            }
            // No need to process the same target twice
            if (isset(\$seenAliasTargets[\$targetId])) {
                continue;
            }
            // Process new target
            \$seenAliasTargets[\$targetId] = true;
            try {
                \$definition = \$container->getDefinition(\$targetId);
            } catch (ServiceNotFoundException \$e) {
                if ('' !== \$e->getId() && '@' === \$e->getId()[0]) {
                    throw new ServiceNotFoundException(\$e->getId(), \$e->getSourceId(), null, [substr(\$e->getId(), 1)]);
                }

                throw \$e;
            }
            if (\$definition->isPublic()) {
                continue;
            }
            // Remove private definition and schedule for replacement
            \$definition->setPublic(!\$target->isPrivate());
            \$definition->setPrivate(\$target->isPrivate());
            \$container->setDefinition(\$definitionId, \$definition);
            \$container->removeDefinition(\$targetId);
            \$replacements[\$targetId] = \$definitionId;
        }
        \$this->replacements = \$replacements;

        parent::process(\$container);
        \$this->replacements = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof Reference && isset(\$this->replacements[\$referenceId = (string) \$value])) {
            // Perform the replacement
            \$newId = \$this->replacements[\$referenceId];
            \$value = new Reference(\$newId, \$value->getInvalidBehavior());
            \$this->container->log(\$this, sprintf('Changed reference of service \"%s\" previously pointing to \"%s\" to \"%s\".', \$this->currentId, \$referenceId, \$newId));
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/ReplaceAliasByActualDefinitionPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Replaces aliases with actual service definitions, effectively removing these
 * aliases.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ReplaceAliasByActualDefinitionPass extends AbstractRecursivePass
{
    private \$replacements;

    /**
     * Process the Container to replace aliases with service definitions.
     *
     * @throws InvalidArgumentException if the service definition does not exist
     */
    public function process(ContainerBuilder \$container)
    {
        // First collect all alias targets that need to be replaced
        \$seenAliasTargets = [];
        \$replacements = [];
        foreach (\$container->getAliases() as \$definitionId => \$target) {
            \$targetId = (string) \$target;
            // Special case: leave this target alone
            if ('service_container' === \$targetId) {
                continue;
            }
            // Check if target needs to be replaces
            if (isset(\$replacements[\$targetId])) {
                \$container->setAlias(\$definitionId, \$replacements[\$targetId])->setPublic(\$target->isPublic())->setPrivate(\$target->isPrivate());
            }
            // No need to process the same target twice
            if (isset(\$seenAliasTargets[\$targetId])) {
                continue;
            }
            // Process new target
            \$seenAliasTargets[\$targetId] = true;
            try {
                \$definition = \$container->getDefinition(\$targetId);
            } catch (ServiceNotFoundException \$e) {
                if ('' !== \$e->getId() && '@' === \$e->getId()[0]) {
                    throw new ServiceNotFoundException(\$e->getId(), \$e->getSourceId(), null, [substr(\$e->getId(), 1)]);
                }

                throw \$e;
            }
            if (\$definition->isPublic()) {
                continue;
            }
            // Remove private definition and schedule for replacement
            \$definition->setPublic(!\$target->isPrivate());
            \$definition->setPrivate(\$target->isPrivate());
            \$container->setDefinition(\$definitionId, \$definition);
            \$container->removeDefinition(\$targetId);
            \$replacements[\$targetId] = \$definitionId;
        }
        \$this->replacements = \$replacements;

        parent::process(\$container);
        \$this->replacements = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof Reference && isset(\$this->replacements[\$referenceId = (string) \$value])) {
            // Perform the replacement
            \$newId = \$this->replacements[\$referenceId];
            \$value = new Reference(\$newId, \$value->getInvalidBehavior());
            \$this->container->log(\$this, sprintf('Changed reference of service \"%s\" previously pointing to \"%s\" to \"%s\".', \$this->currentId, \$referenceId, \$newId));
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
", "vendor/symfony/dependency-injection/Compiler/ReplaceAliasByActualDefinitionPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ReplaceAliasByActualDefinitionPass.php");
    }
}
