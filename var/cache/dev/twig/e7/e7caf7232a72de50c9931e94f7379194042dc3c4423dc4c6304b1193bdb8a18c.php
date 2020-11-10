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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php */
class __TwigTemplate_33fa001cf6919eada68400195ebf9f72fc20b493b1c1ecede4156231838dd2e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections;

use ArrayAccess;
use Closure;
use Countable;
use IteratorAggregate;

/**
 * The missing (SPL) Collection/Array/OrderedMap interface.
 *
 * A Collection resembles the nature of a regular PHP array. That is,
 * it is essentially an <b>ordered map</b> that can also be used
 * like a list.
 *
 * A Collection has an internal iterator just like a PHP array. In addition,
 * a Collection can be iterated with external iterators, which is preferable.
 * To use an external iterator simply use the foreach language construct to
 * iterate over the collection (which calls {@link getIterator()} internally) or
 * explicitly retrieve an iterator though {@link getIterator()} which can then be
 * used to iterate over the collection.
 * You can not rely on the internal iterator of the collection being at a certain
 * position unless you explicitly positioned it before. Prefer iteration with
 * external iterators.
 *
 * @psalm-template TKey of array-key
 * @psalm-template T
 * @template-extends IteratorAggregate<TKey, T>
 * @template-extends ArrayAccess<TKey|null, T>
 */
interface Collection extends Countable, IteratorAggregate, ArrayAccess
{
    /**
     * Adds an element at the end of the collection.
     *
     * @param mixed \$element The element to add.
     *
     * @return true Always TRUE.
     *
     * @psalm-param T \$element
     */
    public function add(\$element);

    /**
     * Clears the collection, removing all elements.
     *
     * @return void
     */
    public function clear();

    /**
     * Checks whether an element is contained in the collection.
     * This is an O(n) operation, where n is the size of the collection.
     *
     * @param mixed \$element The element to search for.
     *
     * @return bool TRUE if the collection contains the element, FALSE otherwise.
     *
     * @psalm-param T \$element
     */
    public function contains(\$element);

    /**
     * Checks whether the collection is empty (contains no elements).
     *
     * @return bool TRUE if the collection is empty, FALSE otherwise.
     */
    public function isEmpty();

    /**
     * Removes the element at the specified index from the collection.
     *
     * @param string|int \$key The key/index of the element to remove.
     *
     * @return mixed The removed element or NULL, if the collection did not contain the element.
     *
     * @psalm-param TKey \$key
     * @psalm-return T|null
     */
    public function remove(\$key);

    /**
     * Removes the specified element from the collection, if it is found.
     *
     * @param mixed \$element The element to remove.
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise.
     *
     * @psalm-param T \$element
     */
    public function removeElement(\$element);

    /**
     * Checks whether the collection contains an element with the specified key/index.
     *
     * @param string|int \$key The key/index to check for.
     *
     * @return bool TRUE if the collection contains an element with the specified key/index,
     *              FALSE otherwise.
     *
     * @psalm-param TKey \$key
     */
    public function containsKey(\$key);

    /**
     * Gets the element at the specified key/index.
     *
     * @param string|int \$key The key/index of the element to retrieve.
     *
     * @return mixed
     *
     * @psalm-param TKey \$key
     * @psalm-return T|null
     */
    public function get(\$key);

    /**
     * Gets all keys/indices of the collection.
     *
     * @return int[]|string[] The keys/indices of the collection, in the order of the corresponding
     *               elements in the collection.
     *
     * @psalm-return TKey[]
     */
    public function getKeys();

    /**
     * Gets all values of the collection.
     *
     * @return array The values of all elements in the collection, in the order they
     *               appear in the collection.
     *
     * @psalm-return T[]
     */
    public function getValues();

    /**
     * Sets an element in the collection at the specified key/index.
     *
     * @param string|int \$key   The key/index of the element to set.
     * @param mixed      \$value The element to set.
     *
     * @return void
     *
     * @psalm-param TKey \$key
     * @psalm-param T \$value
     */
    public function set(\$key, \$value);

    /**
     * Gets a native PHP array representation of the collection.
     *
     * @return array
     *
     * @psalm-return array<TKey,T>
     */
    public function toArray();

    /**
     * Sets the internal iterator to the first element in the collection and returns this element.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function first();

    /**
     * Sets the internal iterator to the last element in the collection and returns this element.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function last();

    /**
     * Gets the key/index of the element at the current iterator position.
     *
     * @return int|string
     *
     * @psalm-return TKey
     */
    public function key();

    /**
     * Gets the element of the collection at the current iterator position.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function current();

    /**
     * Moves the internal iterator position to the next element and returns this element.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function next();

    /**
     * Tests for the existence of an element that satisfies the given predicate.
     *
     * @param Closure \$p The predicate.
     *
     * @return bool TRUE if the predicate is TRUE for at least one element, FALSE otherwise.
     *
     * @psalm-param Closure(TKey=, T=):bool \$p
     */
    public function exists(Closure \$p);

    /**
     * Returns all the elements of this collection that satisfy the predicate p.
     * The order of the elements is preserved.
     *
     * @param Closure \$p The predicate used for filtering.
     *
     * @return Collection A collection with the results of the filter operation.
     *
     * @psalm-param Closure(T=):bool \$p
     * @psalm-return Collection<TKey, T>
     */
    public function filter(Closure \$p);

    /**
     * Tests whether the given predicate p holds for all elements of this collection.
     *
     * @param Closure \$p The predicate.
     *
     * @return bool TRUE, if the predicate yields TRUE for all elements, FALSE otherwise.
     *
     * @psalm-param Closure(TKey=, T=):bool \$p
     */
    public function forAll(Closure \$p);

    /**
     * Applies the given function to each element in the collection and returns
     * a new collection with the elements returned by the function.
     *
     * @return Collection
     *
     * @psalm-template U
     * @psalm-param Closure(T=):U \$func
     * @psalm-return Collection<TKey, U>
     */
    public function map(Closure \$func);

    /**
     * Partitions this collection in two collections according to a predicate.
     * Keys are preserved in the resulting collections.
     *
     * @param Closure \$p The predicate on which to partition.
     *
     * @return Collection[] An array with two elements. The first element contains the collection
     *                      of elements where the predicate returned TRUE, the second element
     *                      contains the collection of elements where the predicate returned FALSE.
     *
     * @psalm-param Closure(TKey=, T=):bool \$p
     * @psalm-return array{0: Collection<TKey, T>, 1: Collection<TKey, T>}
     */
    public function partition(Closure \$p);

    /**
     * Gets the index/key of a given element. The comparison of two elements is strict,
     * that means not only the value but also the type must match.
     * For objects this means reference equality.
     *
     * @param mixed \$element The element to search for.
     *
     * @return int|string|bool The key/index of the element or FALSE if the element was not found.
     *
     * @psalm-param T \$element
     * @psalm-return TKey|false
     */
    public function indexOf(\$element);

    /**
     * Extracts a slice of \$length elements starting at position \$offset from the Collection.
     *
     * If \$length is null it returns all elements from \$offset to the end of the Collection.
     * Keys have to be preserved by this method. Calling this method will only return the
     * selected slice and NOT change the elements contained in the collection slice is called on.
     *
     * @param int      \$offset The offset to start from.
     * @param int|null \$length The maximum number of elements to return, or null for no limit.
     *
     * @return array
     *
     * @psalm-return array<TKey,T>
     */
    public function slice(\$offset, \$length = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections;

use ArrayAccess;
use Closure;
use Countable;
use IteratorAggregate;

/**
 * The missing (SPL) Collection/Array/OrderedMap interface.
 *
 * A Collection resembles the nature of a regular PHP array. That is,
 * it is essentially an <b>ordered map</b> that can also be used
 * like a list.
 *
 * A Collection has an internal iterator just like a PHP array. In addition,
 * a Collection can be iterated with external iterators, which is preferable.
 * To use an external iterator simply use the foreach language construct to
 * iterate over the collection (which calls {@link getIterator()} internally) or
 * explicitly retrieve an iterator though {@link getIterator()} which can then be
 * used to iterate over the collection.
 * You can not rely on the internal iterator of the collection being at a certain
 * position unless you explicitly positioned it before. Prefer iteration with
 * external iterators.
 *
 * @psalm-template TKey of array-key
 * @psalm-template T
 * @template-extends IteratorAggregate<TKey, T>
 * @template-extends ArrayAccess<TKey|null, T>
 */
interface Collection extends Countable, IteratorAggregate, ArrayAccess
{
    /**
     * Adds an element at the end of the collection.
     *
     * @param mixed \$element The element to add.
     *
     * @return true Always TRUE.
     *
     * @psalm-param T \$element
     */
    public function add(\$element);

    /**
     * Clears the collection, removing all elements.
     *
     * @return void
     */
    public function clear();

    /**
     * Checks whether an element is contained in the collection.
     * This is an O(n) operation, where n is the size of the collection.
     *
     * @param mixed \$element The element to search for.
     *
     * @return bool TRUE if the collection contains the element, FALSE otherwise.
     *
     * @psalm-param T \$element
     */
    public function contains(\$element);

    /**
     * Checks whether the collection is empty (contains no elements).
     *
     * @return bool TRUE if the collection is empty, FALSE otherwise.
     */
    public function isEmpty();

    /**
     * Removes the element at the specified index from the collection.
     *
     * @param string|int \$key The key/index of the element to remove.
     *
     * @return mixed The removed element or NULL, if the collection did not contain the element.
     *
     * @psalm-param TKey \$key
     * @psalm-return T|null
     */
    public function remove(\$key);

    /**
     * Removes the specified element from the collection, if it is found.
     *
     * @param mixed \$element The element to remove.
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise.
     *
     * @psalm-param T \$element
     */
    public function removeElement(\$element);

    /**
     * Checks whether the collection contains an element with the specified key/index.
     *
     * @param string|int \$key The key/index to check for.
     *
     * @return bool TRUE if the collection contains an element with the specified key/index,
     *              FALSE otherwise.
     *
     * @psalm-param TKey \$key
     */
    public function containsKey(\$key);

    /**
     * Gets the element at the specified key/index.
     *
     * @param string|int \$key The key/index of the element to retrieve.
     *
     * @return mixed
     *
     * @psalm-param TKey \$key
     * @psalm-return T|null
     */
    public function get(\$key);

    /**
     * Gets all keys/indices of the collection.
     *
     * @return int[]|string[] The keys/indices of the collection, in the order of the corresponding
     *               elements in the collection.
     *
     * @psalm-return TKey[]
     */
    public function getKeys();

    /**
     * Gets all values of the collection.
     *
     * @return array The values of all elements in the collection, in the order they
     *               appear in the collection.
     *
     * @psalm-return T[]
     */
    public function getValues();

    /**
     * Sets an element in the collection at the specified key/index.
     *
     * @param string|int \$key   The key/index of the element to set.
     * @param mixed      \$value The element to set.
     *
     * @return void
     *
     * @psalm-param TKey \$key
     * @psalm-param T \$value
     */
    public function set(\$key, \$value);

    /**
     * Gets a native PHP array representation of the collection.
     *
     * @return array
     *
     * @psalm-return array<TKey,T>
     */
    public function toArray();

    /**
     * Sets the internal iterator to the first element in the collection and returns this element.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function first();

    /**
     * Sets the internal iterator to the last element in the collection and returns this element.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function last();

    /**
     * Gets the key/index of the element at the current iterator position.
     *
     * @return int|string
     *
     * @psalm-return TKey
     */
    public function key();

    /**
     * Gets the element of the collection at the current iterator position.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function current();

    /**
     * Moves the internal iterator position to the next element and returns this element.
     *
     * @return mixed
     *
     * @psalm-return T|false
     */
    public function next();

    /**
     * Tests for the existence of an element that satisfies the given predicate.
     *
     * @param Closure \$p The predicate.
     *
     * @return bool TRUE if the predicate is TRUE for at least one element, FALSE otherwise.
     *
     * @psalm-param Closure(TKey=, T=):bool \$p
     */
    public function exists(Closure \$p);

    /**
     * Returns all the elements of this collection that satisfy the predicate p.
     * The order of the elements is preserved.
     *
     * @param Closure \$p The predicate used for filtering.
     *
     * @return Collection A collection with the results of the filter operation.
     *
     * @psalm-param Closure(T=):bool \$p
     * @psalm-return Collection<TKey, T>
     */
    public function filter(Closure \$p);

    /**
     * Tests whether the given predicate p holds for all elements of this collection.
     *
     * @param Closure \$p The predicate.
     *
     * @return bool TRUE, if the predicate yields TRUE for all elements, FALSE otherwise.
     *
     * @psalm-param Closure(TKey=, T=):bool \$p
     */
    public function forAll(Closure \$p);

    /**
     * Applies the given function to each element in the collection and returns
     * a new collection with the elements returned by the function.
     *
     * @return Collection
     *
     * @psalm-template U
     * @psalm-param Closure(T=):U \$func
     * @psalm-return Collection<TKey, U>
     */
    public function map(Closure \$func);

    /**
     * Partitions this collection in two collections according to a predicate.
     * Keys are preserved in the resulting collections.
     *
     * @param Closure \$p The predicate on which to partition.
     *
     * @return Collection[] An array with two elements. The first element contains the collection
     *                      of elements where the predicate returned TRUE, the second element
     *                      contains the collection of elements where the predicate returned FALSE.
     *
     * @psalm-param Closure(TKey=, T=):bool \$p
     * @psalm-return array{0: Collection<TKey, T>, 1: Collection<TKey, T>}
     */
    public function partition(Closure \$p);

    /**
     * Gets the index/key of a given element. The comparison of two elements is strict,
     * that means not only the value but also the type must match.
     * For objects this means reference equality.
     *
     * @param mixed \$element The element to search for.
     *
     * @return int|string|bool The key/index of the element or FALSE if the element was not found.
     *
     * @psalm-param T \$element
     * @psalm-return TKey|false
     */
    public function indexOf(\$element);

    /**
     * Extracts a slice of \$length elements starting at position \$offset from the Collection.
     *
     * If \$length is null it returns all elements from \$offset to the end of the Collection.
     * Keys have to be preserved by this method. Calling this method will only return the
     * selected slice and NOT change the elements contained in the collection slice is called on.
     *
     * @param int      \$offset The offset to start from.
     * @param int|null \$length The maximum number of elements to return, or null for no limit.
     *
     * @return array
     *
     * @psalm-return array<TKey,T>
     */
    public function slice(\$offset, \$length = null);
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php");
    }
}
