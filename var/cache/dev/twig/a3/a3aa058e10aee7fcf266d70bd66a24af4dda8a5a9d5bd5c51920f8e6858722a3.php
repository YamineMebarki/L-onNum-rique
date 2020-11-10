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

/* vendor/symfony/form/Console/Descriptor/Descriptor.php */
class __TwigTemplate_e88de6ee910c7d9966b219d082586a771ee133a2ac2252854ec9b5e49e3430c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Descriptor/Descriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Descriptor/Descriptor.php"));

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

namespace Symfony\\Component\\Form\\Console\\Descriptor;

use Symfony\\Component\\Console\\Descriptor\\DescriptorInterface;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\OutputStyle;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\Form\\Util\\OptionsResolverWrapper;
use Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector;
use Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
abstract class Descriptor implements DescriptorInterface
{
    /** @var OutputStyle */
    protected \$output;
    protected \$type;
    protected \$ownOptions = [];
    protected \$overriddenOptions = [];
    protected \$parentOptions = [];
    protected \$extensionOptions = [];
    protected \$requiredOptions = [];
    protected \$parents = [];
    protected \$extensions = [];

    /**
     * {@inheritdoc}
     */
    public function describe(OutputInterface \$output, \$object, array \$options = [])
    {
        \$this->output = \$output instanceof OutputStyle ? \$output : new SymfonyStyle(new ArrayInput([]), \$output);

        switch (true) {
            case null === \$object:
                \$this->describeDefaults(\$options);
                break;
            case \$object instanceof ResolvedFormTypeInterface:
                \$this->describeResolvedFormType(\$object, \$options);
                break;
            case \$object instanceof OptionsResolver:
                \$this->describeOption(\$object, \$options);
                break;
            default:
                throw new \\InvalidArgumentException(sprintf('Object of type \"%s\" is not describable.', \\get_class(\$object)));
        }
    }

    abstract protected function describeDefaults(array \$options);

    abstract protected function describeResolvedFormType(ResolvedFormTypeInterface \$resolvedFormType, array \$options = []);

    abstract protected function describeOption(OptionsResolver \$optionsResolver, array \$options);

    protected function collectOptions(ResolvedFormTypeInterface \$type)
    {
        \$this->parents = [];
        \$this->extensions = [];

        if (null !== \$type->getParent()) {
            \$optionsResolver = clone \$this->getParentOptionsResolver(\$type->getParent());
        } else {
            \$optionsResolver = new OptionsResolver();
        }

        \$type->getInnerType()->configureOptions(\$ownOptionsResolver = new OptionsResolverWrapper());
        \$this->ownOptions = array_diff(\$ownOptionsResolver->getDefinedOptions(), \$optionsResolver->getDefinedOptions());
        \$overriddenOptions = array_intersect(array_merge(\$ownOptionsResolver->getDefinedOptions(), \$ownOptionsResolver->getUndefinedOptions()), \$optionsResolver->getDefinedOptions());

        \$this->parentOptions = [];
        foreach (\$this->parents as \$class => \$parentOptions) {
            \$this->overriddenOptions[\$class] = array_intersect(\$overriddenOptions, \$parentOptions);
            \$this->parentOptions[\$class] = array_diff(\$parentOptions, \$overriddenOptions);
        }

        \$type->getInnerType()->configureOptions(\$optionsResolver);
        \$this->collectTypeExtensionsOptions(\$type, \$optionsResolver);
        \$this->extensionOptions = [];
        foreach (\$this->extensions as \$class => \$extensionOptions) {
            \$this->overriddenOptions[\$class] = array_intersect(\$overriddenOptions, \$extensionOptions);
            \$this->extensionOptions[\$class] = array_diff(\$extensionOptions, \$overriddenOptions);
        }

        \$this->overriddenOptions = array_filter(\$this->overriddenOptions);
        \$this->parentOptions = array_filter(\$this->parentOptions);
        \$this->extensionOptions = array_filter(\$this->extensionOptions);
        \$this->requiredOptions = \$optionsResolver->getRequiredOptions();

        \$this->parents = array_keys(\$this->parents);
        \$this->extensions = array_keys(\$this->extensions);
    }

    protected function getOptionDefinition(OptionsResolver \$optionsResolver, \$option)
    {
        \$definition = [
            'required' => \$optionsResolver->isRequired(\$option),
            'deprecated' => \$optionsResolver->isDeprecated(\$option),
        ];

        \$introspector = new OptionsResolverIntrospector(\$optionsResolver);

        \$map = [
            'default' => 'getDefault',
            'lazy' => 'getLazyClosures',
            'allowedTypes' => 'getAllowedTypes',
            'allowedValues' => 'getAllowedValues',
            'normalizers' => 'getNormalizers',
            'deprecationMessage' => 'getDeprecationMessage',
        ];

        foreach (\$map as \$key => \$method) {
            try {
                \$definition[\$key] = \$introspector->{\$method}(\$option);
            } catch (NoConfigurationException \$e) {
                // noop
            }
        }

        if (isset(\$definition['deprecationMessage']) && \\is_string(\$definition['deprecationMessage'])) {
            \$definition['deprecationMessage'] = strtr(\$definition['deprecationMessage'], ['%name%' => \$option]);
        }

        return \$definition;
    }

    protected function filterOptionsByDeprecated(ResolvedFormTypeInterface \$type)
    {
        \$deprecatedOptions = [];
        \$resolver = \$type->getOptionsResolver();
        foreach (\$resolver->getDefinedOptions() as \$option) {
            if (\$resolver->isDeprecated(\$option)) {
                \$deprecatedOptions[] = \$option;
            }
        }

        \$filterByDeprecated = function (array \$options) use (\$deprecatedOptions) {
            foreach (\$options as \$class => \$opts) {
                if (\$deprecated = array_intersect(\$deprecatedOptions, \$opts)) {
                    \$options[\$class] = \$deprecated;
                } else {
                    unset(\$options[\$class]);
                }
            }

            return \$options;
        };

        \$this->ownOptions = array_intersect(\$deprecatedOptions, \$this->ownOptions);
        \$this->overriddenOptions = \$filterByDeprecated(\$this->overriddenOptions);
        \$this->parentOptions = \$filterByDeprecated(\$this->parentOptions);
        \$this->extensionOptions = \$filterByDeprecated(\$this->extensionOptions);
    }

    private function getParentOptionsResolver(ResolvedFormTypeInterface \$type)
    {
        \$this->parents[\$class = \\get_class(\$type->getInnerType())] = [];

        if (null !== \$type->getParent()) {
            \$optionsResolver = clone \$this->getParentOptionsResolver(\$type->getParent());
        } else {
            \$optionsResolver = new OptionsResolver();
        }

        \$inheritedOptions = \$optionsResolver->getDefinedOptions();
        \$type->getInnerType()->configureOptions(\$optionsResolver);
        \$this->parents[\$class] = array_diff(\$optionsResolver->getDefinedOptions(), \$inheritedOptions);

        \$this->collectTypeExtensionsOptions(\$type, \$optionsResolver);

        return \$optionsResolver;
    }

    private function collectTypeExtensionsOptions(ResolvedFormTypeInterface \$type, OptionsResolver \$optionsResolver)
    {
        foreach (\$type->getTypeExtensions() as \$extension) {
            \$inheritedOptions = \$optionsResolver->getDefinedOptions();
            \$extension->configureOptions(\$optionsResolver);
            \$this->extensions[\\get_class(\$extension)] = array_diff(\$optionsResolver->getDefinedOptions(), \$inheritedOptions);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Console/Descriptor/Descriptor.php";
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

namespace Symfony\\Component\\Form\\Console\\Descriptor;

use Symfony\\Component\\Console\\Descriptor\\DescriptorInterface;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\OutputStyle;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\Form\\Util\\OptionsResolverWrapper;
use Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector;
use Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
abstract class Descriptor implements DescriptorInterface
{
    /** @var OutputStyle */
    protected \$output;
    protected \$type;
    protected \$ownOptions = [];
    protected \$overriddenOptions = [];
    protected \$parentOptions = [];
    protected \$extensionOptions = [];
    protected \$requiredOptions = [];
    protected \$parents = [];
    protected \$extensions = [];

    /**
     * {@inheritdoc}
     */
    public function describe(OutputInterface \$output, \$object, array \$options = [])
    {
        \$this->output = \$output instanceof OutputStyle ? \$output : new SymfonyStyle(new ArrayInput([]), \$output);

        switch (true) {
            case null === \$object:
                \$this->describeDefaults(\$options);
                break;
            case \$object instanceof ResolvedFormTypeInterface:
                \$this->describeResolvedFormType(\$object, \$options);
                break;
            case \$object instanceof OptionsResolver:
                \$this->describeOption(\$object, \$options);
                break;
            default:
                throw new \\InvalidArgumentException(sprintf('Object of type \"%s\" is not describable.', \\get_class(\$object)));
        }
    }

    abstract protected function describeDefaults(array \$options);

    abstract protected function describeResolvedFormType(ResolvedFormTypeInterface \$resolvedFormType, array \$options = []);

    abstract protected function describeOption(OptionsResolver \$optionsResolver, array \$options);

    protected function collectOptions(ResolvedFormTypeInterface \$type)
    {
        \$this->parents = [];
        \$this->extensions = [];

        if (null !== \$type->getParent()) {
            \$optionsResolver = clone \$this->getParentOptionsResolver(\$type->getParent());
        } else {
            \$optionsResolver = new OptionsResolver();
        }

        \$type->getInnerType()->configureOptions(\$ownOptionsResolver = new OptionsResolverWrapper());
        \$this->ownOptions = array_diff(\$ownOptionsResolver->getDefinedOptions(), \$optionsResolver->getDefinedOptions());
        \$overriddenOptions = array_intersect(array_merge(\$ownOptionsResolver->getDefinedOptions(), \$ownOptionsResolver->getUndefinedOptions()), \$optionsResolver->getDefinedOptions());

        \$this->parentOptions = [];
        foreach (\$this->parents as \$class => \$parentOptions) {
            \$this->overriddenOptions[\$class] = array_intersect(\$overriddenOptions, \$parentOptions);
            \$this->parentOptions[\$class] = array_diff(\$parentOptions, \$overriddenOptions);
        }

        \$type->getInnerType()->configureOptions(\$optionsResolver);
        \$this->collectTypeExtensionsOptions(\$type, \$optionsResolver);
        \$this->extensionOptions = [];
        foreach (\$this->extensions as \$class => \$extensionOptions) {
            \$this->overriddenOptions[\$class] = array_intersect(\$overriddenOptions, \$extensionOptions);
            \$this->extensionOptions[\$class] = array_diff(\$extensionOptions, \$overriddenOptions);
        }

        \$this->overriddenOptions = array_filter(\$this->overriddenOptions);
        \$this->parentOptions = array_filter(\$this->parentOptions);
        \$this->extensionOptions = array_filter(\$this->extensionOptions);
        \$this->requiredOptions = \$optionsResolver->getRequiredOptions();

        \$this->parents = array_keys(\$this->parents);
        \$this->extensions = array_keys(\$this->extensions);
    }

    protected function getOptionDefinition(OptionsResolver \$optionsResolver, \$option)
    {
        \$definition = [
            'required' => \$optionsResolver->isRequired(\$option),
            'deprecated' => \$optionsResolver->isDeprecated(\$option),
        ];

        \$introspector = new OptionsResolverIntrospector(\$optionsResolver);

        \$map = [
            'default' => 'getDefault',
            'lazy' => 'getLazyClosures',
            'allowedTypes' => 'getAllowedTypes',
            'allowedValues' => 'getAllowedValues',
            'normalizers' => 'getNormalizers',
            'deprecationMessage' => 'getDeprecationMessage',
        ];

        foreach (\$map as \$key => \$method) {
            try {
                \$definition[\$key] = \$introspector->{\$method}(\$option);
            } catch (NoConfigurationException \$e) {
                // noop
            }
        }

        if (isset(\$definition['deprecationMessage']) && \\is_string(\$definition['deprecationMessage'])) {
            \$definition['deprecationMessage'] = strtr(\$definition['deprecationMessage'], ['%name%' => \$option]);
        }

        return \$definition;
    }

    protected function filterOptionsByDeprecated(ResolvedFormTypeInterface \$type)
    {
        \$deprecatedOptions = [];
        \$resolver = \$type->getOptionsResolver();
        foreach (\$resolver->getDefinedOptions() as \$option) {
            if (\$resolver->isDeprecated(\$option)) {
                \$deprecatedOptions[] = \$option;
            }
        }

        \$filterByDeprecated = function (array \$options) use (\$deprecatedOptions) {
            foreach (\$options as \$class => \$opts) {
                if (\$deprecated = array_intersect(\$deprecatedOptions, \$opts)) {
                    \$options[\$class] = \$deprecated;
                } else {
                    unset(\$options[\$class]);
                }
            }

            return \$options;
        };

        \$this->ownOptions = array_intersect(\$deprecatedOptions, \$this->ownOptions);
        \$this->overriddenOptions = \$filterByDeprecated(\$this->overriddenOptions);
        \$this->parentOptions = \$filterByDeprecated(\$this->parentOptions);
        \$this->extensionOptions = \$filterByDeprecated(\$this->extensionOptions);
    }

    private function getParentOptionsResolver(ResolvedFormTypeInterface \$type)
    {
        \$this->parents[\$class = \\get_class(\$type->getInnerType())] = [];

        if (null !== \$type->getParent()) {
            \$optionsResolver = clone \$this->getParentOptionsResolver(\$type->getParent());
        } else {
            \$optionsResolver = new OptionsResolver();
        }

        \$inheritedOptions = \$optionsResolver->getDefinedOptions();
        \$type->getInnerType()->configureOptions(\$optionsResolver);
        \$this->parents[\$class] = array_diff(\$optionsResolver->getDefinedOptions(), \$inheritedOptions);

        \$this->collectTypeExtensionsOptions(\$type, \$optionsResolver);

        return \$optionsResolver;
    }

    private function collectTypeExtensionsOptions(ResolvedFormTypeInterface \$type, OptionsResolver \$optionsResolver)
    {
        foreach (\$type->getTypeExtensions() as \$extension) {
            \$inheritedOptions = \$optionsResolver->getDefinedOptions();
            \$extension->configureOptions(\$optionsResolver);
            \$this->extensions[\\get_class(\$extension)] = array_diff(\$optionsResolver->getDefinedOptions(), \$inheritedOptions);
        }
    }
}
", "vendor/symfony/form/Console/Descriptor/Descriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Console/Descriptor/Descriptor.php");
    }
}
