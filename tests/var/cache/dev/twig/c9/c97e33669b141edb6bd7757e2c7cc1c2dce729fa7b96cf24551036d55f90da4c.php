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

/* vendor/symfony/form/AbstractExtension.php */
class __TwigTemplate_ac2308be6905c7c1d1b125a3f2471452b4852f59f6071481cd29badd9dfb5bdd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/AbstractExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/AbstractExtension.php"));

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

use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractExtension implements FormExtensionInterface
{
    /**
     * The types provided by this extension.
     *
     * @var FormTypeInterface[] An array of FormTypeInterface
     */
    private \$types;

    /**
     * The type extensions provided by this extension.
     *
     * @var FormTypeExtensionInterface[] An array of FormTypeExtensionInterface
     */
    private \$typeExtensions;

    /**
     * The type guesser provided by this extension.
     *
     * @var FormTypeGuesserInterface|null
     */
    private \$typeGuesser;

    /**
     * Whether the type guesser has been loaded.
     *
     * @var bool
     */
    private \$typeGuesserLoaded = false;

    /**
     * {@inheritdoc}
     */
    public function getType(\$name)
    {
        if (null === \$this->types) {
            \$this->initTypes();
        }

        if (!isset(\$this->types[\$name])) {
            throw new InvalidArgumentException(sprintf('The type \"%s\" can not be loaded by this extension', \$name));
        }

        return \$this->types[\$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasType(\$name)
    {
        if (null === \$this->types) {
            \$this->initTypes();
        }

        return isset(\$this->types[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions(\$name)
    {
        if (null === \$this->typeExtensions) {
            \$this->initTypeExtensions();
        }

        return isset(\$this->typeExtensions[\$name])
            ? \$this->typeExtensions[\$name]
            : [];
    }

    /**
     * {@inheritdoc}
     */
    public function hasTypeExtensions(\$name)
    {
        if (null === \$this->typeExtensions) {
            \$this->initTypeExtensions();
        }

        return isset(\$this->typeExtensions[\$name]) && \\count(\$this->typeExtensions[\$name]) > 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeGuesser()
    {
        if (!\$this->typeGuesserLoaded) {
            \$this->initTypeGuesser();
        }

        return \$this->typeGuesser;
    }

    /**
     * Registers the types.
     *
     * @return FormTypeInterface[] An array of FormTypeInterface instances
     */
    protected function loadTypes()
    {
        return [];
    }

    /**
     * Registers the type extensions.
     *
     * @return FormTypeExtensionInterface[] An array of FormTypeExtensionInterface instances
     */
    protected function loadTypeExtensions()
    {
        return [];
    }

    /**
     * Registers the type guesser.
     *
     * @return FormTypeGuesserInterface|null
     */
    protected function loadTypeGuesser()
    {
        return null;
    }

    /**
     * Initializes the types.
     *
     * @throws UnexpectedTypeException if any registered type is not an instance of FormTypeInterface
     */
    private function initTypes()
    {
        \$this->types = [];

        foreach (\$this->loadTypes() as \$type) {
            if (!\$type instanceof FormTypeInterface) {
                throw new UnexpectedTypeException(\$type, 'Symfony\\Component\\Form\\FormTypeInterface');
            }

            \$this->types[\\get_class(\$type)] = \$type;
        }
    }

    /**
     * Initializes the type extensions.
     *
     * @throws UnexpectedTypeException if any registered type extension is not
     *                                 an instance of FormTypeExtensionInterface
     */
    private function initTypeExtensions()
    {
        \$this->typeExtensions = [];

        foreach (\$this->loadTypeExtensions() as \$extension) {
            if (!\$extension instanceof FormTypeExtensionInterface) {
                throw new UnexpectedTypeException(\$extension, 'Symfony\\Component\\Form\\FormTypeExtensionInterface');
            }

            if (method_exists(\$extension, 'getExtendedTypes')) {
                \$extendedTypes = [];

                foreach (\$extension::getExtendedTypes() as \$extendedType) {
                    \$extendedTypes[] = \$extendedType;
                }
            } else {
                @trigger_error(sprintf('Not implementing the \"%s::getExtendedTypes()\" method in \"%s\" is deprecated since Symfony 4.2.', FormTypeExtensionInterface::class, \\get_class(\$extension)), E_USER_DEPRECATED);

                \$extendedTypes = [\$extension->getExtendedType()];
            }

            foreach (\$extendedTypes as \$extendedType) {
                \$this->typeExtensions[\$extendedType][] = \$extension;
            }
        }
    }

    /**
     * Initializes the type guesser.
     *
     * @throws UnexpectedTypeException if the type guesser is not an instance of FormTypeGuesserInterface
     */
    private function initTypeGuesser()
    {
        \$this->typeGuesserLoaded = true;

        \$this->typeGuesser = \$this->loadTypeGuesser();
        if (null !== \$this->typeGuesser && !\$this->typeGuesser instanceof FormTypeGuesserInterface) {
            throw new UnexpectedTypeException(\$this->typeGuesser, 'Symfony\\Component\\Form\\FormTypeGuesserInterface');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/AbstractExtension.php";
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

use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractExtension implements FormExtensionInterface
{
    /**
     * The types provided by this extension.
     *
     * @var FormTypeInterface[] An array of FormTypeInterface
     */
    private \$types;

    /**
     * The type extensions provided by this extension.
     *
     * @var FormTypeExtensionInterface[] An array of FormTypeExtensionInterface
     */
    private \$typeExtensions;

    /**
     * The type guesser provided by this extension.
     *
     * @var FormTypeGuesserInterface|null
     */
    private \$typeGuesser;

    /**
     * Whether the type guesser has been loaded.
     *
     * @var bool
     */
    private \$typeGuesserLoaded = false;

    /**
     * {@inheritdoc}
     */
    public function getType(\$name)
    {
        if (null === \$this->types) {
            \$this->initTypes();
        }

        if (!isset(\$this->types[\$name])) {
            throw new InvalidArgumentException(sprintf('The type \"%s\" can not be loaded by this extension', \$name));
        }

        return \$this->types[\$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasType(\$name)
    {
        if (null === \$this->types) {
            \$this->initTypes();
        }

        return isset(\$this->types[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions(\$name)
    {
        if (null === \$this->typeExtensions) {
            \$this->initTypeExtensions();
        }

        return isset(\$this->typeExtensions[\$name])
            ? \$this->typeExtensions[\$name]
            : [];
    }

    /**
     * {@inheritdoc}
     */
    public function hasTypeExtensions(\$name)
    {
        if (null === \$this->typeExtensions) {
            \$this->initTypeExtensions();
        }

        return isset(\$this->typeExtensions[\$name]) && \\count(\$this->typeExtensions[\$name]) > 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeGuesser()
    {
        if (!\$this->typeGuesserLoaded) {
            \$this->initTypeGuesser();
        }

        return \$this->typeGuesser;
    }

    /**
     * Registers the types.
     *
     * @return FormTypeInterface[] An array of FormTypeInterface instances
     */
    protected function loadTypes()
    {
        return [];
    }

    /**
     * Registers the type extensions.
     *
     * @return FormTypeExtensionInterface[] An array of FormTypeExtensionInterface instances
     */
    protected function loadTypeExtensions()
    {
        return [];
    }

    /**
     * Registers the type guesser.
     *
     * @return FormTypeGuesserInterface|null
     */
    protected function loadTypeGuesser()
    {
        return null;
    }

    /**
     * Initializes the types.
     *
     * @throws UnexpectedTypeException if any registered type is not an instance of FormTypeInterface
     */
    private function initTypes()
    {
        \$this->types = [];

        foreach (\$this->loadTypes() as \$type) {
            if (!\$type instanceof FormTypeInterface) {
                throw new UnexpectedTypeException(\$type, 'Symfony\\Component\\Form\\FormTypeInterface');
            }

            \$this->types[\\get_class(\$type)] = \$type;
        }
    }

    /**
     * Initializes the type extensions.
     *
     * @throws UnexpectedTypeException if any registered type extension is not
     *                                 an instance of FormTypeExtensionInterface
     */
    private function initTypeExtensions()
    {
        \$this->typeExtensions = [];

        foreach (\$this->loadTypeExtensions() as \$extension) {
            if (!\$extension instanceof FormTypeExtensionInterface) {
                throw new UnexpectedTypeException(\$extension, 'Symfony\\Component\\Form\\FormTypeExtensionInterface');
            }

            if (method_exists(\$extension, 'getExtendedTypes')) {
                \$extendedTypes = [];

                foreach (\$extension::getExtendedTypes() as \$extendedType) {
                    \$extendedTypes[] = \$extendedType;
                }
            } else {
                @trigger_error(sprintf('Not implementing the \"%s::getExtendedTypes()\" method in \"%s\" is deprecated since Symfony 4.2.', FormTypeExtensionInterface::class, \\get_class(\$extension)), E_USER_DEPRECATED);

                \$extendedTypes = [\$extension->getExtendedType()];
            }

            foreach (\$extendedTypes as \$extendedType) {
                \$this->typeExtensions[\$extendedType][] = \$extension;
            }
        }
    }

    /**
     * Initializes the type guesser.
     *
     * @throws UnexpectedTypeException if the type guesser is not an instance of FormTypeGuesserInterface
     */
    private function initTypeGuesser()
    {
        \$this->typeGuesserLoaded = true;

        \$this->typeGuesser = \$this->loadTypeGuesser();
        if (null !== \$this->typeGuesser && !\$this->typeGuesser instanceof FormTypeGuesserInterface) {
            throw new UnexpectedTypeException(\$this->typeGuesser, 'Symfony\\Component\\Form\\FormTypeGuesserInterface');
        }
    }
}
", "vendor/symfony/form/AbstractExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/AbstractExtension.php");
    }
}
