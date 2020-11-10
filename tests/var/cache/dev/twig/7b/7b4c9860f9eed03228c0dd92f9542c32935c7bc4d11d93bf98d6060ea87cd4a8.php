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

/* vendor/symfony/form/Util/OrderedHashMapIterator.php */
class __TwigTemplate_9d913be44d192a37fa2a373f389de8fc7784218ce0a25eae9aa31adcdccf7332 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/OrderedHashMapIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/OrderedHashMapIterator.php"));

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

namespace Symfony\\Component\\Form\\Util;

/**
 * Iterator for {@link OrderedHashMap} objects.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class OrderedHashMapIterator implements \\Iterator
{
    /**
     * @var array
     */
    private \$elements;

    /**
     * @var array
     */
    private \$orderedKeys;

    /**
     * @var int
     */
    private \$cursor;

    /**
     * @var int
     */
    private \$cursorId;

    /**
     * @var array
     */
    private \$managedCursors;

    /**
     * @var string|int|null
     */
    private \$key;

    /**
     * @var mixed
     */
    private \$current;

    /**
     * @param array \$elements       The elements of the map, indexed by their
     *                              keys
     * @param array \$orderedKeys    The keys of the map in the order in which
     *                              they should be iterated
     * @param array \$managedCursors An array from which to reference the
     *                              iterator's cursor as long as it is alive.
     *                              This array is managed by the corresponding
     *                              {@link OrderedHashMap} instance to support
     *                              recognizing the deletion of elements.
     */
    public function __construct(array &\$elements, array &\$orderedKeys, array &\$managedCursors)
    {
        \$this->elements = &\$elements;
        \$this->orderedKeys = &\$orderedKeys;
        \$this->managedCursors = &\$managedCursors;
        \$this->cursorId = \\count(\$managedCursors);

        \$this->managedCursors[\$this->cursorId] = &\$this->cursor;
    }

    /**
     * Removes the iterator's cursors from the managed cursors of the
     * corresponding {@link OrderedHashMap} instance.
     */
    public function __destruct()
    {
        // Use array_splice() instead of unset() to prevent holes in the
        // array indices, which would break the initialization of \$cursorId
        array_splice(\$this->managedCursors, \$this->cursorId, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return \$this->current;
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        ++\$this->cursor;

        if (isset(\$this->orderedKeys[\$this->cursor])) {
            \$this->key = \$this->orderedKeys[\$this->cursor];
            \$this->current = \$this->elements[\$this->key];
        } else {
            \$this->key = null;
            \$this->current = null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        if (null === \$this->key) {
            return null;
        }

        \$array = [\$this->key => null];

        return key(\$array);
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return null !== \$this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        \$this->cursor = 0;

        if (isset(\$this->orderedKeys[0])) {
            \$this->key = \$this->orderedKeys[0];
            \$this->current = \$this->elements[\$this->key];
        } else {
            \$this->key = null;
            \$this->current = null;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Util/OrderedHashMapIterator.php";
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

namespace Symfony\\Component\\Form\\Util;

/**
 * Iterator for {@link OrderedHashMap} objects.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class OrderedHashMapIterator implements \\Iterator
{
    /**
     * @var array
     */
    private \$elements;

    /**
     * @var array
     */
    private \$orderedKeys;

    /**
     * @var int
     */
    private \$cursor;

    /**
     * @var int
     */
    private \$cursorId;

    /**
     * @var array
     */
    private \$managedCursors;

    /**
     * @var string|int|null
     */
    private \$key;

    /**
     * @var mixed
     */
    private \$current;

    /**
     * @param array \$elements       The elements of the map, indexed by their
     *                              keys
     * @param array \$orderedKeys    The keys of the map in the order in which
     *                              they should be iterated
     * @param array \$managedCursors An array from which to reference the
     *                              iterator's cursor as long as it is alive.
     *                              This array is managed by the corresponding
     *                              {@link OrderedHashMap} instance to support
     *                              recognizing the deletion of elements.
     */
    public function __construct(array &\$elements, array &\$orderedKeys, array &\$managedCursors)
    {
        \$this->elements = &\$elements;
        \$this->orderedKeys = &\$orderedKeys;
        \$this->managedCursors = &\$managedCursors;
        \$this->cursorId = \\count(\$managedCursors);

        \$this->managedCursors[\$this->cursorId] = &\$this->cursor;
    }

    /**
     * Removes the iterator's cursors from the managed cursors of the
     * corresponding {@link OrderedHashMap} instance.
     */
    public function __destruct()
    {
        // Use array_splice() instead of unset() to prevent holes in the
        // array indices, which would break the initialization of \$cursorId
        array_splice(\$this->managedCursors, \$this->cursorId, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return \$this->current;
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        ++\$this->cursor;

        if (isset(\$this->orderedKeys[\$this->cursor])) {
            \$this->key = \$this->orderedKeys[\$this->cursor];
            \$this->current = \$this->elements[\$this->key];
        } else {
            \$this->key = null;
            \$this->current = null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        if (null === \$this->key) {
            return null;
        }

        \$array = [\$this->key => null];

        return key(\$array);
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return null !== \$this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        \$this->cursor = 0;

        if (isset(\$this->orderedKeys[0])) {
            \$this->key = \$this->orderedKeys[0];
            \$this->current = \$this->elements[\$this->key];
        } else {
            \$this->key = null;
            \$this->current = null;
        }
    }
}
", "vendor/symfony/form/Util/OrderedHashMapIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Util/OrderedHashMapIterator.php");
    }
}
