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

/* vendor/symfony/form/FormFactoryBuilder.php */
class __TwigTemplate_88c9434f8ee7b29de74e1a3c3ceb09de0a7e159252acf70f8c775c1e807e069a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactoryBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactoryBuilder.php"));

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

use Symfony\\Component\\Form\\Extension\\Core\\CoreExtension;

/**
 * The default implementation of FormFactoryBuilderInterface.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormFactoryBuilder implements FormFactoryBuilderInterface
{
    private \$forceCoreExtension;

    /**
     * @var ResolvedFormTypeFactoryInterface
     */
    private \$resolvedTypeFactory;

    /**
     * @var FormExtensionInterface[]
     */
    private \$extensions = [];

    /**
     * @var FormTypeInterface[]
     */
    private \$types = [];

    /**
     * @var FormTypeExtensionInterface[]
     */
    private \$typeExtensions = [];

    /**
     * @var FormTypeGuesserInterface[]
     */
    private \$typeGuessers = [];

    /**
     * @param bool \$forceCoreExtension
     */
    public function __construct(\$forceCoreExtension = false)
    {
        \$this->forceCoreExtension = \$forceCoreExtension;
    }

    /**
     * {@inheritdoc}
     */
    public function setResolvedTypeFactory(ResolvedFormTypeFactoryInterface \$resolvedTypeFactory)
    {
        \$this->resolvedTypeFactory = \$resolvedTypeFactory;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addExtension(FormExtensionInterface \$extension)
    {
        \$this->extensions[] = \$extension;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addExtensions(array \$extensions)
    {
        \$this->extensions = array_merge(\$this->extensions, \$extensions);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addType(FormTypeInterface \$type)
    {
        \$this->types[] = \$type;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypes(array \$types)
    {
        foreach (\$types as \$type) {
            \$this->types[] = \$type;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeExtension(FormTypeExtensionInterface \$typeExtension)
    {
        if (method_exists(\$typeExtension, 'getExtendedTypes')) {
            foreach (\$typeExtension::getExtendedTypes() as \$extendedType) {
                \$this->typeExtensions[\$extendedType][] = \$typeExtension;
            }
        } else {
            \$this->typeExtensions[\$typeExtension->getExtendedType()][] = \$typeExtension;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeExtensions(array \$typeExtensions)
    {
        foreach (\$typeExtensions as \$typeExtension) {
            \$this->addTypeExtension(\$typeExtension);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeGuesser(FormTypeGuesserInterface \$typeGuesser)
    {
        \$this->typeGuessers[] = \$typeGuesser;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeGuessers(array \$typeGuessers)
    {
        \$this->typeGuessers = array_merge(\$this->typeGuessers, \$typeGuessers);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormFactory()
    {
        \$extensions = \$this->extensions;

        if (\$this->forceCoreExtension) {
            \$hasCoreExtension = false;

            foreach (\$extensions as \$extension) {
                if (\$extension instanceof CoreExtension) {
                    \$hasCoreExtension = true;
                    break;
                }
            }

            if (!\$hasCoreExtension) {
                array_unshift(\$extensions, new CoreExtension());
            }
        }

        if (\\count(\$this->types) > 0 || \\count(\$this->typeExtensions) > 0 || \\count(\$this->typeGuessers) > 0) {
            if (\\count(\$this->typeGuessers) > 1) {
                \$typeGuesser = new FormTypeGuesserChain(\$this->typeGuessers);
            } else {
                \$typeGuesser = isset(\$this->typeGuessers[0]) ? \$this->typeGuessers[0] : null;
            }

            \$extensions[] = new PreloadedExtension(\$this->types, \$this->typeExtensions, \$typeGuesser);
        }

        \$registry = new FormRegistry(\$extensions, \$this->resolvedTypeFactory ?: new ResolvedFormTypeFactory());

        return new FormFactory(\$registry);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormFactoryBuilder.php";
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

use Symfony\\Component\\Form\\Extension\\Core\\CoreExtension;

/**
 * The default implementation of FormFactoryBuilderInterface.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormFactoryBuilder implements FormFactoryBuilderInterface
{
    private \$forceCoreExtension;

    /**
     * @var ResolvedFormTypeFactoryInterface
     */
    private \$resolvedTypeFactory;

    /**
     * @var FormExtensionInterface[]
     */
    private \$extensions = [];

    /**
     * @var FormTypeInterface[]
     */
    private \$types = [];

    /**
     * @var FormTypeExtensionInterface[]
     */
    private \$typeExtensions = [];

    /**
     * @var FormTypeGuesserInterface[]
     */
    private \$typeGuessers = [];

    /**
     * @param bool \$forceCoreExtension
     */
    public function __construct(\$forceCoreExtension = false)
    {
        \$this->forceCoreExtension = \$forceCoreExtension;
    }

    /**
     * {@inheritdoc}
     */
    public function setResolvedTypeFactory(ResolvedFormTypeFactoryInterface \$resolvedTypeFactory)
    {
        \$this->resolvedTypeFactory = \$resolvedTypeFactory;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addExtension(FormExtensionInterface \$extension)
    {
        \$this->extensions[] = \$extension;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addExtensions(array \$extensions)
    {
        \$this->extensions = array_merge(\$this->extensions, \$extensions);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addType(FormTypeInterface \$type)
    {
        \$this->types[] = \$type;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypes(array \$types)
    {
        foreach (\$types as \$type) {
            \$this->types[] = \$type;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeExtension(FormTypeExtensionInterface \$typeExtension)
    {
        if (method_exists(\$typeExtension, 'getExtendedTypes')) {
            foreach (\$typeExtension::getExtendedTypes() as \$extendedType) {
                \$this->typeExtensions[\$extendedType][] = \$typeExtension;
            }
        } else {
            \$this->typeExtensions[\$typeExtension->getExtendedType()][] = \$typeExtension;
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeExtensions(array \$typeExtensions)
    {
        foreach (\$typeExtensions as \$typeExtension) {
            \$this->addTypeExtension(\$typeExtension);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeGuesser(FormTypeGuesserInterface \$typeGuesser)
    {
        \$this->typeGuessers[] = \$typeGuesser;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTypeGuessers(array \$typeGuessers)
    {
        \$this->typeGuessers = array_merge(\$this->typeGuessers, \$typeGuessers);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormFactory()
    {
        \$extensions = \$this->extensions;

        if (\$this->forceCoreExtension) {
            \$hasCoreExtension = false;

            foreach (\$extensions as \$extension) {
                if (\$extension instanceof CoreExtension) {
                    \$hasCoreExtension = true;
                    break;
                }
            }

            if (!\$hasCoreExtension) {
                array_unshift(\$extensions, new CoreExtension());
            }
        }

        if (\\count(\$this->types) > 0 || \\count(\$this->typeExtensions) > 0 || \\count(\$this->typeGuessers) > 0) {
            if (\\count(\$this->typeGuessers) > 1) {
                \$typeGuesser = new FormTypeGuesserChain(\$this->typeGuessers);
            } else {
                \$typeGuesser = isset(\$this->typeGuessers[0]) ? \$this->typeGuessers[0] : null;
            }

            \$extensions[] = new PreloadedExtension(\$this->types, \$this->typeExtensions, \$typeGuesser);
        }

        \$registry = new FormRegistry(\$extensions, \$this->resolvedTypeFactory ?: new ResolvedFormTypeFactory());

        return new FormFactory(\$registry);
    }
}
", "vendor/symfony/form/FormFactoryBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormFactoryBuilder.php");
    }
}
