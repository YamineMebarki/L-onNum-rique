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

/* vendor/symfony/form/FormRegistry.php */
class __TwigTemplate_a1f6eb1ab1b92e1c52e8d71a0cfdbe3668b0cf5a25295619ea05b2cf6bf9543e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormRegistry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormRegistry.php"));

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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\ExceptionInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * The central registry of the Form component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormRegistry implements FormRegistryInterface
{
    /**
     * Extensions.
     *
     * @var FormExtensionInterface[]
     */
    private \$extensions = [];

    /**
     * @var ResolvedFormTypeInterface[]
     */
    private \$types = [];

    /**
     * @var FormTypeGuesserInterface|false|null
     */
    private \$guesser = false;

    /**
     * @var ResolvedFormTypeFactoryInterface
     */
    private \$resolvedTypeFactory;

    private \$checkedTypes = [];

    /**
     * @param FormExtensionInterface[]         \$extensions          An array of FormExtensionInterface
     * @param ResolvedFormTypeFactoryInterface \$resolvedTypeFactory The factory for resolved form types
     *
     * @throws UnexpectedTypeException if any extension does not implement FormExtensionInterface
     */
    public function __construct(array \$extensions, ResolvedFormTypeFactoryInterface \$resolvedTypeFactory)
    {
        foreach (\$extensions as \$extension) {
            if (!\$extension instanceof FormExtensionInterface) {
                throw new UnexpectedTypeException(\$extension, 'Symfony\\Component\\Form\\FormExtensionInterface');
            }
        }

        \$this->extensions = \$extensions;
        \$this->resolvedTypeFactory = \$resolvedTypeFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getType(\$name)
    {
        if (!isset(\$this->types[\$name])) {
            \$type = null;

            foreach (\$this->extensions as \$extension) {
                if (\$extension->hasType(\$name)) {
                    \$type = \$extension->getType(\$name);
                    break;
                }
            }

            if (!\$type) {
                // Support fully-qualified class names
                if (!class_exists(\$name)) {
                    throw new InvalidArgumentException(sprintf('Could not load type \"%s\": class does not exist.', \$name));
                }
                if (!is_subclass_of(\$name, 'Symfony\\Component\\Form\\FormTypeInterface')) {
                    throw new InvalidArgumentException(sprintf('Could not load type \"%s\": class does not implement \"Symfony\\Component\\Form\\FormTypeInterface\".', \$name));
                }

                \$type = new \$name();
            }

            \$this->types[\$name] = \$this->resolveType(\$type);
        }

        return \$this->types[\$name];
    }

    /**
     * Wraps a type into a ResolvedFormTypeInterface implementation and connects
     * it with its parent type.
     *
     * @param FormTypeInterface \$type The type to resolve
     *
     * @return ResolvedFormTypeInterface The resolved type
     */
    private function resolveType(FormTypeInterface \$type)
    {
        \$typeExtensions = [];
        \$parentType = \$type->getParent();
        \$fqcn = \\get_class(\$type);

        if (isset(\$this->checkedTypes[\$fqcn])) {
            \$types = implode(' > ', array_merge(array_keys(\$this->checkedTypes), [\$fqcn]));
            throw new LogicException(sprintf('Circular reference detected for form type \"%s\" (%s).', \$fqcn, \$types));
        }

        \$this->checkedTypes[\$fqcn] = true;

        try {
            foreach (\$this->extensions as \$extension) {
                \$typeExtensions = array_merge(
                    \$typeExtensions,
                    \$extension->getTypeExtensions(\$fqcn)
                );
            }

            return \$this->resolvedTypeFactory->createResolvedType(
                \$type,
                \$typeExtensions,
                \$parentType ? \$this->getType(\$parentType) : null
            );
        } finally {
            unset(\$this->checkedTypes[\$fqcn]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasType(\$name)
    {
        if (isset(\$this->types[\$name])) {
            return true;
        }

        try {
            \$this->getType(\$name);
        } catch (ExceptionInterface \$e) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeGuesser()
    {
        if (false === \$this->guesser) {
            \$guessers = [];

            foreach (\$this->extensions as \$extension) {
                \$guesser = \$extension->getTypeGuesser();

                if (\$guesser) {
                    \$guessers[] = \$guesser;
                }
            }

            \$this->guesser = !empty(\$guessers) ? new FormTypeGuesserChain(\$guessers) : null;
        }

        return \$this->guesser;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensions()
    {
        return \$this->extensions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormRegistry.php";
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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\ExceptionInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * The central registry of the Form component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormRegistry implements FormRegistryInterface
{
    /**
     * Extensions.
     *
     * @var FormExtensionInterface[]
     */
    private \$extensions = [];

    /**
     * @var ResolvedFormTypeInterface[]
     */
    private \$types = [];

    /**
     * @var FormTypeGuesserInterface|false|null
     */
    private \$guesser = false;

    /**
     * @var ResolvedFormTypeFactoryInterface
     */
    private \$resolvedTypeFactory;

    private \$checkedTypes = [];

    /**
     * @param FormExtensionInterface[]         \$extensions          An array of FormExtensionInterface
     * @param ResolvedFormTypeFactoryInterface \$resolvedTypeFactory The factory for resolved form types
     *
     * @throws UnexpectedTypeException if any extension does not implement FormExtensionInterface
     */
    public function __construct(array \$extensions, ResolvedFormTypeFactoryInterface \$resolvedTypeFactory)
    {
        foreach (\$extensions as \$extension) {
            if (!\$extension instanceof FormExtensionInterface) {
                throw new UnexpectedTypeException(\$extension, 'Symfony\\Component\\Form\\FormExtensionInterface');
            }
        }

        \$this->extensions = \$extensions;
        \$this->resolvedTypeFactory = \$resolvedTypeFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getType(\$name)
    {
        if (!isset(\$this->types[\$name])) {
            \$type = null;

            foreach (\$this->extensions as \$extension) {
                if (\$extension->hasType(\$name)) {
                    \$type = \$extension->getType(\$name);
                    break;
                }
            }

            if (!\$type) {
                // Support fully-qualified class names
                if (!class_exists(\$name)) {
                    throw new InvalidArgumentException(sprintf('Could not load type \"%s\": class does not exist.', \$name));
                }
                if (!is_subclass_of(\$name, 'Symfony\\Component\\Form\\FormTypeInterface')) {
                    throw new InvalidArgumentException(sprintf('Could not load type \"%s\": class does not implement \"Symfony\\Component\\Form\\FormTypeInterface\".', \$name));
                }

                \$type = new \$name();
            }

            \$this->types[\$name] = \$this->resolveType(\$type);
        }

        return \$this->types[\$name];
    }

    /**
     * Wraps a type into a ResolvedFormTypeInterface implementation and connects
     * it with its parent type.
     *
     * @param FormTypeInterface \$type The type to resolve
     *
     * @return ResolvedFormTypeInterface The resolved type
     */
    private function resolveType(FormTypeInterface \$type)
    {
        \$typeExtensions = [];
        \$parentType = \$type->getParent();
        \$fqcn = \\get_class(\$type);

        if (isset(\$this->checkedTypes[\$fqcn])) {
            \$types = implode(' > ', array_merge(array_keys(\$this->checkedTypes), [\$fqcn]));
            throw new LogicException(sprintf('Circular reference detected for form type \"%s\" (%s).', \$fqcn, \$types));
        }

        \$this->checkedTypes[\$fqcn] = true;

        try {
            foreach (\$this->extensions as \$extension) {
                \$typeExtensions = array_merge(
                    \$typeExtensions,
                    \$extension->getTypeExtensions(\$fqcn)
                );
            }

            return \$this->resolvedTypeFactory->createResolvedType(
                \$type,
                \$typeExtensions,
                \$parentType ? \$this->getType(\$parentType) : null
            );
        } finally {
            unset(\$this->checkedTypes[\$fqcn]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasType(\$name)
    {
        if (isset(\$this->types[\$name])) {
            return true;
        }

        try {
            \$this->getType(\$name);
        } catch (ExceptionInterface \$e) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeGuesser()
    {
        if (false === \$this->guesser) {
            \$guessers = [];

            foreach (\$this->extensions as \$extension) {
                \$guesser = \$extension->getTypeGuesser();

                if (\$guesser) {
                    \$guessers[] = \$guesser;
                }
            }

            \$this->guesser = !empty(\$guessers) ? new FormTypeGuesserChain(\$guessers) : null;
        }

        return \$this->guesser;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensions()
    {
        return \$this->extensions;
    }
}
", "vendor/symfony/form/FormRegistry.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormRegistry.php");
    }
}
