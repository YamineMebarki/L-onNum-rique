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

/* vendor/symfony/dependency-injection/Compiler/PassConfig.php */
class __TwigTemplate_f271140eda685f2a8e0c8d83e9425aeac8b9936c049a5f2efd71e3a30b868e0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/PassConfig.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/PassConfig.php"));

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

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * Compiler Pass Configuration.
 *
 * This class has a default configuration embedded.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PassConfig
{
    const TYPE_AFTER_REMOVING = 'afterRemoving';
    const TYPE_BEFORE_OPTIMIZATION = 'beforeOptimization';
    const TYPE_BEFORE_REMOVING = 'beforeRemoving';
    const TYPE_OPTIMIZE = 'optimization';
    const TYPE_REMOVE = 'removing';

    private \$mergePass;
    private \$afterRemovingPasses = [];
    private \$beforeOptimizationPasses = [];
    private \$beforeRemovingPasses = [];
    private \$optimizationPasses;
    private \$removingPasses;

    public function __construct()
    {
        \$this->mergePass = new MergeExtensionConfigurationPass();

        \$this->beforeOptimizationPasses = [
            100 => [
                new ResolveClassPass(),
                new ResolveInstanceofConditionalsPass(),
                new RegisterEnvVarProcessorsPass(),
            ],
            -1000 => [new ExtensionCompilerPass()],
        ];

        \$this->optimizationPasses = [[
            new ValidateEnvPlaceholdersPass(),
            new ResolveChildDefinitionsPass(),
            new RegisterServiceSubscribersPass(),
            new DecoratorServicePass(),
            new ResolveParameterPlaceHoldersPass(false),
            new ResolveFactoryClassPass(),
            new ResolveNamedArgumentsPass(),
            new AutowireRequiredMethodsPass(),
            new ResolveBindingsPass(),
            new ServiceLocatorTagPass(),
            new CheckDefinitionValidityPass(),
            new AutowirePass(false),
            new ResolveTaggedIteratorArgumentPass(),
            new ResolveServiceSubscribersPass(),
            new ResolveReferencesToAliasesPass(),
            new ResolveInvalidReferencesPass(),
            new AnalyzeServiceReferencesPass(true),
            new CheckCircularReferencesPass(),
            new CheckReferenceValidityPass(),
            new CheckArgumentsValidityPass(false),
        ]];

        \$this->beforeRemovingPasses = [
            -100 => [
                new ResolvePrivatesPass(),
            ],
        ];

        \$this->removingPasses = [[
            new RemovePrivateAliasesPass(),
            new ReplaceAliasByActualDefinitionPass(),
            new RemoveAbstractDefinitionsPass(),
            new RemoveUnusedDefinitionsPass(),
            new InlineServiceDefinitionsPass(new AnalyzeServiceReferencesPass()),
            new AnalyzeServiceReferencesPass(),
            new DefinitionErrorExceptionPass(),
            new CheckExceptionOnInvalidReferenceBehaviorPass(),
            new ResolveHotPathPass(),
        ]];
    }

    /**
     * Returns all passes in order to be processed.
     *
     * @return CompilerPassInterface[]
     */
    public function getPasses()
    {
        return array_merge(
            [\$this->mergePass],
            \$this->getBeforeOptimizationPasses(),
            \$this->getOptimizationPasses(),
            \$this->getBeforeRemovingPasses(),
            \$this->getRemovingPasses(),
            \$this->getAfterRemovingPasses()
        );
    }

    /**
     * Adds a pass.
     *
     * @param CompilerPassInterface \$pass A Compiler pass
     * @param string                \$type The pass type
     *
     * @throws InvalidArgumentException when a pass type doesn't exist
     */
    public function addPass(CompilerPassInterface \$pass, \$type = self::TYPE_BEFORE_OPTIMIZATION, int \$priority = 0)
    {
        \$property = \$type.'Passes';
        if (!isset(\$this->\$property)) {
            throw new InvalidArgumentException(sprintf('Invalid type \"%s\".', \$type));
        }

        \$passes = &\$this->\$property;

        if (!isset(\$passes[\$priority])) {
            \$passes[\$priority] = [];
        }
        \$passes[\$priority][] = \$pass;
    }

    /**
     * Gets all passes for the AfterRemoving pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getAfterRemovingPasses()
    {
        return \$this->sortPasses(\$this->afterRemovingPasses);
    }

    /**
     * Gets all passes for the BeforeOptimization pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getBeforeOptimizationPasses()
    {
        return \$this->sortPasses(\$this->beforeOptimizationPasses);
    }

    /**
     * Gets all passes for the BeforeRemoving pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getBeforeRemovingPasses()
    {
        return \$this->sortPasses(\$this->beforeRemovingPasses);
    }

    /**
     * Gets all passes for the Optimization pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getOptimizationPasses()
    {
        return \$this->sortPasses(\$this->optimizationPasses);
    }

    /**
     * Gets all passes for the Removing pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getRemovingPasses()
    {
        return \$this->sortPasses(\$this->removingPasses);
    }

    /**
     * Gets the Merge pass.
     *
     * @return CompilerPassInterface
     */
    public function getMergePass()
    {
        return \$this->mergePass;
    }

    public function setMergePass(CompilerPassInterface \$pass)
    {
        \$this->mergePass = \$pass;
    }

    /**
     * Sets the AfterRemoving passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setAfterRemovingPasses(array \$passes)
    {
        \$this->afterRemovingPasses = [\$passes];
    }

    /**
     * Sets the BeforeOptimization passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setBeforeOptimizationPasses(array \$passes)
    {
        \$this->beforeOptimizationPasses = [\$passes];
    }

    /**
     * Sets the BeforeRemoving passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setBeforeRemovingPasses(array \$passes)
    {
        \$this->beforeRemovingPasses = [\$passes];
    }

    /**
     * Sets the Optimization passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setOptimizationPasses(array \$passes)
    {
        \$this->optimizationPasses = [\$passes];
    }

    /**
     * Sets the Removing passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setRemovingPasses(array \$passes)
    {
        \$this->removingPasses = [\$passes];
    }

    /**
     * Sort passes by priority.
     *
     * @param array \$passes CompilerPassInterface instances with their priority as key
     *
     * @return CompilerPassInterface[]
     */
    private function sortPasses(array \$passes)
    {
        if (0 === \\count(\$passes)) {
            return [];
        }

        krsort(\$passes);

        // Flatten the array
        return array_merge(...\$passes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/PassConfig.php";
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

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * Compiler Pass Configuration.
 *
 * This class has a default configuration embedded.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PassConfig
{
    const TYPE_AFTER_REMOVING = 'afterRemoving';
    const TYPE_BEFORE_OPTIMIZATION = 'beforeOptimization';
    const TYPE_BEFORE_REMOVING = 'beforeRemoving';
    const TYPE_OPTIMIZE = 'optimization';
    const TYPE_REMOVE = 'removing';

    private \$mergePass;
    private \$afterRemovingPasses = [];
    private \$beforeOptimizationPasses = [];
    private \$beforeRemovingPasses = [];
    private \$optimizationPasses;
    private \$removingPasses;

    public function __construct()
    {
        \$this->mergePass = new MergeExtensionConfigurationPass();

        \$this->beforeOptimizationPasses = [
            100 => [
                new ResolveClassPass(),
                new ResolveInstanceofConditionalsPass(),
                new RegisterEnvVarProcessorsPass(),
            ],
            -1000 => [new ExtensionCompilerPass()],
        ];

        \$this->optimizationPasses = [[
            new ValidateEnvPlaceholdersPass(),
            new ResolveChildDefinitionsPass(),
            new RegisterServiceSubscribersPass(),
            new DecoratorServicePass(),
            new ResolveParameterPlaceHoldersPass(false),
            new ResolveFactoryClassPass(),
            new ResolveNamedArgumentsPass(),
            new AutowireRequiredMethodsPass(),
            new ResolveBindingsPass(),
            new ServiceLocatorTagPass(),
            new CheckDefinitionValidityPass(),
            new AutowirePass(false),
            new ResolveTaggedIteratorArgumentPass(),
            new ResolveServiceSubscribersPass(),
            new ResolveReferencesToAliasesPass(),
            new ResolveInvalidReferencesPass(),
            new AnalyzeServiceReferencesPass(true),
            new CheckCircularReferencesPass(),
            new CheckReferenceValidityPass(),
            new CheckArgumentsValidityPass(false),
        ]];

        \$this->beforeRemovingPasses = [
            -100 => [
                new ResolvePrivatesPass(),
            ],
        ];

        \$this->removingPasses = [[
            new RemovePrivateAliasesPass(),
            new ReplaceAliasByActualDefinitionPass(),
            new RemoveAbstractDefinitionsPass(),
            new RemoveUnusedDefinitionsPass(),
            new InlineServiceDefinitionsPass(new AnalyzeServiceReferencesPass()),
            new AnalyzeServiceReferencesPass(),
            new DefinitionErrorExceptionPass(),
            new CheckExceptionOnInvalidReferenceBehaviorPass(),
            new ResolveHotPathPass(),
        ]];
    }

    /**
     * Returns all passes in order to be processed.
     *
     * @return CompilerPassInterface[]
     */
    public function getPasses()
    {
        return array_merge(
            [\$this->mergePass],
            \$this->getBeforeOptimizationPasses(),
            \$this->getOptimizationPasses(),
            \$this->getBeforeRemovingPasses(),
            \$this->getRemovingPasses(),
            \$this->getAfterRemovingPasses()
        );
    }

    /**
     * Adds a pass.
     *
     * @param CompilerPassInterface \$pass A Compiler pass
     * @param string                \$type The pass type
     *
     * @throws InvalidArgumentException when a pass type doesn't exist
     */
    public function addPass(CompilerPassInterface \$pass, \$type = self::TYPE_BEFORE_OPTIMIZATION, int \$priority = 0)
    {
        \$property = \$type.'Passes';
        if (!isset(\$this->\$property)) {
            throw new InvalidArgumentException(sprintf('Invalid type \"%s\".', \$type));
        }

        \$passes = &\$this->\$property;

        if (!isset(\$passes[\$priority])) {
            \$passes[\$priority] = [];
        }
        \$passes[\$priority][] = \$pass;
    }

    /**
     * Gets all passes for the AfterRemoving pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getAfterRemovingPasses()
    {
        return \$this->sortPasses(\$this->afterRemovingPasses);
    }

    /**
     * Gets all passes for the BeforeOptimization pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getBeforeOptimizationPasses()
    {
        return \$this->sortPasses(\$this->beforeOptimizationPasses);
    }

    /**
     * Gets all passes for the BeforeRemoving pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getBeforeRemovingPasses()
    {
        return \$this->sortPasses(\$this->beforeRemovingPasses);
    }

    /**
     * Gets all passes for the Optimization pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getOptimizationPasses()
    {
        return \$this->sortPasses(\$this->optimizationPasses);
    }

    /**
     * Gets all passes for the Removing pass.
     *
     * @return CompilerPassInterface[]
     */
    public function getRemovingPasses()
    {
        return \$this->sortPasses(\$this->removingPasses);
    }

    /**
     * Gets the Merge pass.
     *
     * @return CompilerPassInterface
     */
    public function getMergePass()
    {
        return \$this->mergePass;
    }

    public function setMergePass(CompilerPassInterface \$pass)
    {
        \$this->mergePass = \$pass;
    }

    /**
     * Sets the AfterRemoving passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setAfterRemovingPasses(array \$passes)
    {
        \$this->afterRemovingPasses = [\$passes];
    }

    /**
     * Sets the BeforeOptimization passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setBeforeOptimizationPasses(array \$passes)
    {
        \$this->beforeOptimizationPasses = [\$passes];
    }

    /**
     * Sets the BeforeRemoving passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setBeforeRemovingPasses(array \$passes)
    {
        \$this->beforeRemovingPasses = [\$passes];
    }

    /**
     * Sets the Optimization passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setOptimizationPasses(array \$passes)
    {
        \$this->optimizationPasses = [\$passes];
    }

    /**
     * Sets the Removing passes.
     *
     * @param CompilerPassInterface[] \$passes
     */
    public function setRemovingPasses(array \$passes)
    {
        \$this->removingPasses = [\$passes];
    }

    /**
     * Sort passes by priority.
     *
     * @param array \$passes CompilerPassInterface instances with their priority as key
     *
     * @return CompilerPassInterface[]
     */
    private function sortPasses(array \$passes)
    {
        if (0 === \\count(\$passes)) {
            return [];
        }

        krsort(\$passes);

        // Flatten the array
        return array_merge(...\$passes);
    }
}
", "vendor/symfony/dependency-injection/Compiler/PassConfig.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/PassConfig.php");
    }
}
