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

/* vendor/symfony/form/Util/OrderedHashMap.php */
class __TwigTemplate_5694a79df57eb329e70652252abb09cc7a5b55a61a1434fef8be2b91bf52f70d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/OrderedHashMap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/OrderedHashMap.php"));

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
 * A hash map which keeps track of deletions and additions.
 *
 * Like in associative arrays, elements can be mapped to integer or string keys.
 * Unlike associative arrays, the map keeps track of the order in which keys
 * were added and removed. This order is reflected during iteration.
 *
 * The map supports concurrent modification during iteration. That means that
 * you can insert and remove elements from within a foreach loop and the
 * iterator will reflect those changes accordingly.
 *
 * While elements that are added during the loop are recognized by the iterator,
 * changed elements are not. Otherwise the loop could be infinite if each loop
 * changes the current element:
 *
 *     \$map = new OrderedHashMap();
 *     \$map[1] = 1;
 *     \$map[2] = 2;
 *     \$map[3] = 3;
 *
 *     foreach (\$map as \$index => \$value) {
 *         echo \"\$index: \$value\\n\"
 *         if (1 === \$index) {
 *             \$map[1] = 4;
 *             \$map[] = 5;
 *         }
 *     }
 *
 *     print_r(iterator_to_array(\$map));
 *
 *     // => 1: 1
 *     //    2: 2
 *     //    3: 3
 *     //    4: 5
 *     //    Array
 *     //    (
 *     //        [1] => 4
 *     //        [2] => 2
 *     //        [3] => 3
 *     //        [4] => 5
 *     //    )
 *
 * The map also supports multiple parallel iterators. That means that you can
 * nest foreach loops without affecting each other's iteration:
 *
 *     foreach (\$map as \$index => \$value) {
 *         foreach (\$map as \$index2 => \$value2) {
 *             // ...
 *         }
 *     }
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class OrderedHashMap implements \\ArrayAccess, \\IteratorAggregate, \\Countable
{
    /**
     * The elements of the map, indexed by their keys.
     *
     * @var array
     */
    private \$elements = [];

    /**
     * The keys of the map in the order in which they were inserted or changed.
     *
     * @var array
     */
    private \$orderedKeys = [];

    /**
     * References to the cursors of all open iterators.
     *
     * @var array
     */
    private \$managedCursors = [];

    /**
     * Creates a new map.
     *
     * @param array \$elements The elements to insert initially
     */
    public function __construct(array \$elements = [])
    {
        \$this->elements = \$elements;
        \$this->orderedKeys = array_keys(\$elements);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists(\$key)
    {
        return isset(\$this->elements[\$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet(\$key)
    {
        if (!isset(\$this->elements[\$key])) {
            throw new \\OutOfBoundsException('The offset \"'.\$key.'\" does not exist.');
        }

        return \$this->elements[\$key];
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet(\$key, \$value)
    {
        if (null === \$key || !isset(\$this->elements[\$key])) {
            if (null === \$key) {
                \$key = [] === \$this->orderedKeys
                    // If the array is empty, use 0 as key
                    ? 0
                    // Imitate PHP behavior of generating a key that equals
                    // the highest existing integer key + 1
                    : 1 + (int) max(\$this->orderedKeys);
            }

            \$this->orderedKeys[] = (string) \$key;
        }

        \$this->elements[\$key] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset(\$key)
    {
        if (false !== (\$position = array_search((string) \$key, \$this->orderedKeys))) {
            array_splice(\$this->orderedKeys, \$position, 1);
            unset(\$this->elements[\$key]);

            foreach (\$this->managedCursors as \$i => \$cursor) {
                if (\$cursor >= \$position) {
                    --\$this->managedCursors[\$i];
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new OrderedHashMapIterator(\$this->elements, \$this->orderedKeys, \$this->managedCursors);
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return \\count(\$this->elements);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Util/OrderedHashMap.php";
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
 * A hash map which keeps track of deletions and additions.
 *
 * Like in associative arrays, elements can be mapped to integer or string keys.
 * Unlike associative arrays, the map keeps track of the order in which keys
 * were added and removed. This order is reflected during iteration.
 *
 * The map supports concurrent modification during iteration. That means that
 * you can insert and remove elements from within a foreach loop and the
 * iterator will reflect those changes accordingly.
 *
 * While elements that are added during the loop are recognized by the iterator,
 * changed elements are not. Otherwise the loop could be infinite if each loop
 * changes the current element:
 *
 *     \$map = new OrderedHashMap();
 *     \$map[1] = 1;
 *     \$map[2] = 2;
 *     \$map[3] = 3;
 *
 *     foreach (\$map as \$index => \$value) {
 *         echo \"\$index: \$value\\n\"
 *         if (1 === \$index) {
 *             \$map[1] = 4;
 *             \$map[] = 5;
 *         }
 *     }
 *
 *     print_r(iterator_to_array(\$map));
 *
 *     // => 1: 1
 *     //    2: 2
 *     //    3: 3
 *     //    4: 5
 *     //    Array
 *     //    (
 *     //        [1] => 4
 *     //        [2] => 2
 *     //        [3] => 3
 *     //        [4] => 5
 *     //    )
 *
 * The map also supports multiple parallel iterators. That means that you can
 * nest foreach loops without affecting each other's iteration:
 *
 *     foreach (\$map as \$index => \$value) {
 *         foreach (\$map as \$index2 => \$value2) {
 *             // ...
 *         }
 *     }
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class OrderedHashMap implements \\ArrayAccess, \\IteratorAggregate, \\Countable
{
    /**
     * The elements of the map, indexed by their keys.
     *
     * @var array
     */
    private \$elements = [];

    /**
     * The keys of the map in the order in which they were inserted or changed.
     *
     * @var array
     */
    private \$orderedKeys = [];

    /**
     * References to the cursors of all open iterators.
     *
     * @var array
     */
    private \$managedCursors = [];

    /**
     * Creates a new map.
     *
     * @param array \$elements The elements to insert initially
     */
    public function __construct(array \$elements = [])
    {
        \$this->elements = \$elements;
        \$this->orderedKeys = array_keys(\$elements);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists(\$key)
    {
        return isset(\$this->elements[\$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet(\$key)
    {
        if (!isset(\$this->elements[\$key])) {
            throw new \\OutOfBoundsException('The offset \"'.\$key.'\" does not exist.');
        }

        return \$this->elements[\$key];
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet(\$key, \$value)
    {
        if (null === \$key || !isset(\$this->elements[\$key])) {
            if (null === \$key) {
                \$key = [] === \$this->orderedKeys
                    // If the array is empty, use 0 as key
                    ? 0
                    // Imitate PHP behavior of generating a key that equals
                    // the highest existing integer key + 1
                    : 1 + (int) max(\$this->orderedKeys);
            }

            \$this->orderedKeys[] = (string) \$key;
        }

        \$this->elements[\$key] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset(\$key)
    {
        if (false !== (\$position = array_search((string) \$key, \$this->orderedKeys))) {
            array_splice(\$this->orderedKeys, \$position, 1);
            unset(\$this->elements[\$key]);

            foreach (\$this->managedCursors as \$i => \$cursor) {
                if (\$cursor >= \$position) {
                    --\$this->managedCursors[\$i];
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new OrderedHashMapIterator(\$this->elements, \$this->orderedKeys, \$this->managedCursors);
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return \\count(\$this->elements);
    }
}
", "vendor/symfony/form/Util/OrderedHashMap.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Util/OrderedHashMap.php");
    }
}
