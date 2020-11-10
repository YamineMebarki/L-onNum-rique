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

/* vendor/symfony/form/FormView.php */
class __TwigTemplate_3e5e315ea7bc107dc5d6b4561f21d846a882247c61362e0189bb15bbdbafd70c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormView.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormView.php"));

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

use Symfony\\Component\\Form\\Exception\\BadMethodCallException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormView implements \\ArrayAccess, \\IteratorAggregate, \\Countable
{
    /**
     * The variables assigned to this view.
     */
    public \$vars = [
        'value' => null,
        'attr' => [],
    ];

    /**
     * The parent view.
     */
    public \$parent;

    /**
     * The child views.
     *
     * @var FormView[]
     */
    public \$children = [];

    /**
     * Is the form attached to this renderer rendered?
     *
     * Rendering happens when either the widget or the row method was called.
     * Row implicitly includes widget, however certain rendering mechanisms
     * have to skip widget rendering when a row is rendered.
     *
     * @var bool
     */
    private \$rendered = false;

    private \$methodRendered = false;

    public function __construct(self \$parent = null)
    {
        \$this->parent = \$parent;
    }

    /**
     * Returns whether the view was already rendered.
     *
     * @return bool Whether this view's widget is rendered
     */
    public function isRendered()
    {
        if (true === \$this->rendered || 0 === \\count(\$this->children)) {
            return \$this->rendered;
        }

        foreach (\$this->children as \$child) {
            if (!\$child->isRendered()) {
                return false;
            }
        }

        return \$this->rendered = true;
    }

    /**
     * Marks the view as rendered.
     *
     * @return \$this
     */
    public function setRendered()
    {
        \$this->rendered = true;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isMethodRendered()
    {
        return \$this->methodRendered;
    }

    public function setMethodRendered()
    {
        \$this->methodRendered = true;
    }

    /**
     * Returns a child by name (implements \\ArrayAccess).
     *
     * @param string \$name The child name
     *
     * @return self The child view
     */
    public function offsetGet(\$name)
    {
        return \$this->children[\$name];
    }

    /**
     * Returns whether the given child exists (implements \\ArrayAccess).
     *
     * @param string \$name The child name
     *
     * @return bool Whether the child view exists
     */
    public function offsetExists(\$name)
    {
        return isset(\$this->children[\$name]);
    }

    /**
     * Implements \\ArrayAccess.
     *
     * @throws BadMethodCallException always as setting a child by name is not allowed
     */
    public function offsetSet(\$name, \$value)
    {
        throw new BadMethodCallException('Not supported');
    }

    /**
     * Removes a child (implements \\ArrayAccess).
     *
     * @param string \$name The child name
     */
    public function offsetUnset(\$name)
    {
        unset(\$this->children[\$name]);
    }

    /**
     * Returns an iterator to iterate over children (implements \\IteratorAggregate).
     *
     * @return \\ArrayIterator|FormView[] The iterator
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->children);
    }

    /**
     * Implements \\Countable.
     *
     * @return int The number of children views
     */
    public function count()
    {
        return \\count(\$this->children);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormView.php";
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

use Symfony\\Component\\Form\\Exception\\BadMethodCallException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormView implements \\ArrayAccess, \\IteratorAggregate, \\Countable
{
    /**
     * The variables assigned to this view.
     */
    public \$vars = [
        'value' => null,
        'attr' => [],
    ];

    /**
     * The parent view.
     */
    public \$parent;

    /**
     * The child views.
     *
     * @var FormView[]
     */
    public \$children = [];

    /**
     * Is the form attached to this renderer rendered?
     *
     * Rendering happens when either the widget or the row method was called.
     * Row implicitly includes widget, however certain rendering mechanisms
     * have to skip widget rendering when a row is rendered.
     *
     * @var bool
     */
    private \$rendered = false;

    private \$methodRendered = false;

    public function __construct(self \$parent = null)
    {
        \$this->parent = \$parent;
    }

    /**
     * Returns whether the view was already rendered.
     *
     * @return bool Whether this view's widget is rendered
     */
    public function isRendered()
    {
        if (true === \$this->rendered || 0 === \\count(\$this->children)) {
            return \$this->rendered;
        }

        foreach (\$this->children as \$child) {
            if (!\$child->isRendered()) {
                return false;
            }
        }

        return \$this->rendered = true;
    }

    /**
     * Marks the view as rendered.
     *
     * @return \$this
     */
    public function setRendered()
    {
        \$this->rendered = true;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isMethodRendered()
    {
        return \$this->methodRendered;
    }

    public function setMethodRendered()
    {
        \$this->methodRendered = true;
    }

    /**
     * Returns a child by name (implements \\ArrayAccess).
     *
     * @param string \$name The child name
     *
     * @return self The child view
     */
    public function offsetGet(\$name)
    {
        return \$this->children[\$name];
    }

    /**
     * Returns whether the given child exists (implements \\ArrayAccess).
     *
     * @param string \$name The child name
     *
     * @return bool Whether the child view exists
     */
    public function offsetExists(\$name)
    {
        return isset(\$this->children[\$name]);
    }

    /**
     * Implements \\ArrayAccess.
     *
     * @throws BadMethodCallException always as setting a child by name is not allowed
     */
    public function offsetSet(\$name, \$value)
    {
        throw new BadMethodCallException('Not supported');
    }

    /**
     * Removes a child (implements \\ArrayAccess).
     *
     * @param string \$name The child name
     */
    public function offsetUnset(\$name)
    {
        unset(\$this->children[\$name]);
    }

    /**
     * Returns an iterator to iterate over children (implements \\IteratorAggregate).
     *
     * @return \\ArrayIterator|FormView[] The iterator
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->children);
    }

    /**
     * Implements \\Countable.
     *
     * @return int The number of children views
     */
    public function count()
    {
        return \\count(\$this->children);
    }
}
", "vendor/symfony/form/FormView.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormView.php");
    }
}
