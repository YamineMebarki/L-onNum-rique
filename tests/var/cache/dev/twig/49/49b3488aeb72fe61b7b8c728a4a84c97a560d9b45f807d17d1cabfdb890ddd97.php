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

/* vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php */
class __TwigTemplate_61257c45dad44f53896526c3074c0c5f2f3b92d124002543f2c61c3cb14c16d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php"));

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

namespace Symfony\\Component\\Form\\ChoiceList\\Factory;

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Caches the choice lists created by the decorated factory.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CachingFactoryDecorator implements ChoiceListFactoryInterface, ResetInterface
{
    private \$decoratedFactory;

    /**
     * @var ChoiceListInterface[]
     */
    private \$lists = [];

    /**
     * @var ChoiceListView[]
     */
    private \$views = [];

    /**
     * Generates a SHA-256 hash for the given value.
     *
     * Optionally, a namespace string can be passed. Calling this method will
     * the same values, but different namespaces, will return different hashes.
     *
     * @param mixed  \$value     The value to hash
     * @param string \$namespace Optional. The namespace
     *
     * @return string The SHA-256 hash
     *
     * @internal
     */
    public static function generateHash(\$value, \$namespace = '')
    {
        if (\\is_object(\$value)) {
            \$value = spl_object_hash(\$value);
        } elseif (\\is_array(\$value)) {
            array_walk_recursive(\$value, function (&\$v) {
                if (\\is_object(\$v)) {
                    \$v = spl_object_hash(\$v);
                }
            });
        }

        return hash('sha256', \$namespace.':'.serialize(\$value));
    }

    public function __construct(ChoiceListFactoryInterface \$decoratedFactory)
    {
        \$this->decoratedFactory = \$decoratedFactory;
    }

    /**
     * Returns the decorated factory.
     *
     * @return ChoiceListFactoryInterface The decorated factory
     */
    public function getDecoratedFactory()
    {
        return \$this->decoratedFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function createListFromChoices(\$choices, \$value = null)
    {
        if (\$choices instanceof \\Traversable) {
            \$choices = iterator_to_array(\$choices);
        }

        // The value is not validated on purpose. The decorated factory may
        // decide which values to accept and which not.

        \$hash = self::generateHash([\$choices, \$value], 'fromChoices');

        if (!isset(\$this->lists[\$hash])) {
            \$this->lists[\$hash] = \$this->decoratedFactory->createListFromChoices(\$choices, \$value);
        }

        return \$this->lists[\$hash];
    }

    /**
     * {@inheritdoc}
     */
    public function createListFromLoader(ChoiceLoaderInterface \$loader, \$value = null)
    {
        \$hash = self::generateHash([\$loader, \$value], 'fromLoader');

        if (!isset(\$this->lists[\$hash])) {
            \$this->lists[\$hash] = \$this->decoratedFactory->createListFromLoader(\$loader, \$value);
        }

        return \$this->lists[\$hash];
    }

    /**
     * {@inheritdoc}
     */
    public function createView(ChoiceListInterface \$list, \$preferredChoices = null, \$label = null, \$index = null, \$groupBy = null, \$attr = null)
    {
        // The input is not validated on purpose. This way, the decorated
        // factory may decide which input to accept and which not.
        \$hash = self::generateHash([\$list, \$preferredChoices, \$label, \$index, \$groupBy, \$attr]);

        if (!isset(\$this->views[\$hash])) {
            \$this->views[\$hash] = \$this->decoratedFactory->createView(
                \$list,
                \$preferredChoices,
                \$label,
                \$index,
                \$groupBy,
                \$attr
            );
        }

        return \$this->views[\$hash];
    }

    public function reset()
    {
        \$this->lists = [];
        \$this->views = [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php";
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

namespace Symfony\\Component\\Form\\ChoiceList\\Factory;

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Caches the choice lists created by the decorated factory.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CachingFactoryDecorator implements ChoiceListFactoryInterface, ResetInterface
{
    private \$decoratedFactory;

    /**
     * @var ChoiceListInterface[]
     */
    private \$lists = [];

    /**
     * @var ChoiceListView[]
     */
    private \$views = [];

    /**
     * Generates a SHA-256 hash for the given value.
     *
     * Optionally, a namespace string can be passed. Calling this method will
     * the same values, but different namespaces, will return different hashes.
     *
     * @param mixed  \$value     The value to hash
     * @param string \$namespace Optional. The namespace
     *
     * @return string The SHA-256 hash
     *
     * @internal
     */
    public static function generateHash(\$value, \$namespace = '')
    {
        if (\\is_object(\$value)) {
            \$value = spl_object_hash(\$value);
        } elseif (\\is_array(\$value)) {
            array_walk_recursive(\$value, function (&\$v) {
                if (\\is_object(\$v)) {
                    \$v = spl_object_hash(\$v);
                }
            });
        }

        return hash('sha256', \$namespace.':'.serialize(\$value));
    }

    public function __construct(ChoiceListFactoryInterface \$decoratedFactory)
    {
        \$this->decoratedFactory = \$decoratedFactory;
    }

    /**
     * Returns the decorated factory.
     *
     * @return ChoiceListFactoryInterface The decorated factory
     */
    public function getDecoratedFactory()
    {
        return \$this->decoratedFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function createListFromChoices(\$choices, \$value = null)
    {
        if (\$choices instanceof \\Traversable) {
            \$choices = iterator_to_array(\$choices);
        }

        // The value is not validated on purpose. The decorated factory may
        // decide which values to accept and which not.

        \$hash = self::generateHash([\$choices, \$value], 'fromChoices');

        if (!isset(\$this->lists[\$hash])) {
            \$this->lists[\$hash] = \$this->decoratedFactory->createListFromChoices(\$choices, \$value);
        }

        return \$this->lists[\$hash];
    }

    /**
     * {@inheritdoc}
     */
    public function createListFromLoader(ChoiceLoaderInterface \$loader, \$value = null)
    {
        \$hash = self::generateHash([\$loader, \$value], 'fromLoader');

        if (!isset(\$this->lists[\$hash])) {
            \$this->lists[\$hash] = \$this->decoratedFactory->createListFromLoader(\$loader, \$value);
        }

        return \$this->lists[\$hash];
    }

    /**
     * {@inheritdoc}
     */
    public function createView(ChoiceListInterface \$list, \$preferredChoices = null, \$label = null, \$index = null, \$groupBy = null, \$attr = null)
    {
        // The input is not validated on purpose. This way, the decorated
        // factory may decide which input to accept and which not.
        \$hash = self::generateHash([\$list, \$preferredChoices, \$label, \$index, \$groupBy, \$attr]);

        if (!isset(\$this->views[\$hash])) {
            \$this->views[\$hash] = \$this->decoratedFactory->createView(
                \$list,
                \$preferredChoices,
                \$label,
                \$index,
                \$groupBy,
                \$attr
            );
        }

        return \$this->views[\$hash];
    }

    public function reset()
    {
        \$this->lists = [];
        \$this->views = [];
    }
}
", "vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php");
    }
}
