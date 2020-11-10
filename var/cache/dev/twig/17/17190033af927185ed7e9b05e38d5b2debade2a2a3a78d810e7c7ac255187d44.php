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

/* vendor/symfony/form/PreloadedExtension.php */
class __TwigTemplate_3377574d57e23d46522330d8232abd961675ba751b68acb63af44fca706548ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/PreloadedExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/PreloadedExtension.php"));

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

/**
 * A form extension with preloaded types, type extensions and type guessers.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PreloadedExtension implements FormExtensionInterface
{
    private \$types = [];
    private \$typeExtensions = [];
    private \$typeGuesser;

    /**
     * Creates a new preloaded extension.
     *
     * @param FormTypeInterface[]            \$types          The types that the extension should support
     * @param FormTypeExtensionInterface[][] \$typeExtensions The type extensions that the extension should support
     * @param FormTypeGuesserInterface|null  \$typeGuesser    The guesser that the extension should support
     */
    public function __construct(array \$types, array \$typeExtensions, FormTypeGuesserInterface \$typeGuesser = null)
    {
        foreach (\$typeExtensions as \$extensions) {
            foreach (\$extensions as \$typeExtension) {
                if (!method_exists(\$typeExtension, 'getExtendedTypes')) {
                    @trigger_error(sprintf('Not implementing the \"%s::getExtendedTypes()\" method in \"%s\" is deprecated since Symfony 4.2.', FormTypeExtensionInterface::class, \\get_class(\$typeExtension)), E_USER_DEPRECATED);
                }
            }
        }

        \$this->typeExtensions = \$typeExtensions;
        \$this->typeGuesser = \$typeGuesser;

        foreach (\$types as \$type) {
            \$this->types[\\get_class(\$type)] = \$type;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType(\$name)
    {
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
        return isset(\$this->types[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions(\$name)
    {
        return isset(\$this->typeExtensions[\$name])
            ? \$this->typeExtensions[\$name]
            : [];
    }

    /**
     * {@inheritdoc}
     */
    public function hasTypeExtensions(\$name)
    {
        return !empty(\$this->typeExtensions[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeGuesser()
    {
        return \$this->typeGuesser;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/PreloadedExtension.php";
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

/**
 * A form extension with preloaded types, type extensions and type guessers.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PreloadedExtension implements FormExtensionInterface
{
    private \$types = [];
    private \$typeExtensions = [];
    private \$typeGuesser;

    /**
     * Creates a new preloaded extension.
     *
     * @param FormTypeInterface[]            \$types          The types that the extension should support
     * @param FormTypeExtensionInterface[][] \$typeExtensions The type extensions that the extension should support
     * @param FormTypeGuesserInterface|null  \$typeGuesser    The guesser that the extension should support
     */
    public function __construct(array \$types, array \$typeExtensions, FormTypeGuesserInterface \$typeGuesser = null)
    {
        foreach (\$typeExtensions as \$extensions) {
            foreach (\$extensions as \$typeExtension) {
                if (!method_exists(\$typeExtension, 'getExtendedTypes')) {
                    @trigger_error(sprintf('Not implementing the \"%s::getExtendedTypes()\" method in \"%s\" is deprecated since Symfony 4.2.', FormTypeExtensionInterface::class, \\get_class(\$typeExtension)), E_USER_DEPRECATED);
                }
            }
        }

        \$this->typeExtensions = \$typeExtensions;
        \$this->typeGuesser = \$typeGuesser;

        foreach (\$types as \$type) {
            \$this->types[\\get_class(\$type)] = \$type;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType(\$name)
    {
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
        return isset(\$this->types[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions(\$name)
    {
        return isset(\$this->typeExtensions[\$name])
            ? \$this->typeExtensions[\$name]
            : [];
    }

    /**
     * {@inheritdoc}
     */
    public function hasTypeExtensions(\$name)
    {
        return !empty(\$this->typeExtensions[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeGuesser()
    {
        return \$this->typeGuesser;
    }
}
", "vendor/symfony/form/PreloadedExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/PreloadedExtension.php");
    }
}
