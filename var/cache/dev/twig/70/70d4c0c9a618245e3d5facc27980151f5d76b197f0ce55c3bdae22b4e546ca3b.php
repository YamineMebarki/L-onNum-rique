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

/* vendor/psr/cache/src/CacheItemPoolInterface.php */
class __TwigTemplate_5051122ace726ba2ac2f1007989d4dc6c17dbe2653484eb9a562d5c481ca4e54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/cache/src/CacheItemPoolInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/cache/src/CacheItemPoolInterface.php"));

        // line 1
        echo "<?php

namespace Psr\\Cache;

/**
 * CacheItemPoolInterface generates CacheItemInterface objects.
 *
 * The primary purpose of Cache\\CacheItemPoolInterface is to accept a key from
 * the Calling Library and return the associated Cache\\CacheItemInterface object.
 * It is also the primary point of interaction with the entire cache collection.
 * All configuration and initialization of the Pool is left up to an
 * Implementing Library.
 */
interface CacheItemPoolInterface
{
    /**
     * Returns a Cache Item representing the specified key.
     *
     * This method must always return a CacheItemInterface object, even in case of
     * a cache miss. It MUST NOT return null.
     *
     * @param string \$key
     *   The key for which to return the corresponding Cache Item.
     *
     * @throws InvalidArgumentException
     *   If the \$key string is not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return CacheItemInterface
     *   The corresponding Cache Item.
     */
    public function getItem(\$key);

    /**
     * Returns a traversable set of cache items.
     *
     * @param string[] \$keys
     *   An indexed array of keys of items to retrieve.
     *
     * @throws InvalidArgumentException
     *   If any of the keys in \$keys are not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return array|\\Traversable
     *   A traversable collection of Cache Items keyed by the cache keys of
     *   each item. A Cache item will be returned for each key, even if that
     *   key is not found. However, if no keys are specified then an empty
     *   traversable MUST be returned instead.
     */
    public function getItems(array \$keys = array());

    /**
     * Confirms if the cache contains specified cache item.
     *
     * Note: This method MAY avoid retrieving the cached value for performance reasons.
     * This could result in a race condition with CacheItemInterface::get(). To avoid
     * such situation use CacheItemInterface::isHit() instead.
     *
     * @param string \$key
     *   The key for which to check existence.
     *
     * @throws InvalidArgumentException
     *   If the \$key string is not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if item exists in the cache, false otherwise.
     */
    public function hasItem(\$key);

    /**
     * Deletes all items in the pool.
     *
     * @return bool
     *   True if the pool was successfully cleared. False if there was an error.
     */
    public function clear();

    /**
     * Removes the item from the pool.
     *
     * @param string \$key
     *   The key to delete.
     *
     * @throws InvalidArgumentException
     *   If the \$key string is not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if the item was successfully removed. False if there was an error.
     */
    public function deleteItem(\$key);

    /**
     * Removes multiple items from the pool.
     *
     * @param string[] \$keys
     *   An array of keys that should be removed from the pool.

     * @throws InvalidArgumentException
     *   If any of the keys in \$keys are not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if the items were successfully removed. False if there was an error.
     */
    public function deleteItems(array \$keys);

    /**
     * Persists a cache item immediately.
     *
     * @param CacheItemInterface \$item
     *   The cache item to save.
     *
     * @return bool
     *   True if the item was successfully persisted. False if there was an error.
     */
    public function save(CacheItemInterface \$item);

    /**
     * Sets a cache item to be persisted later.
     *
     * @param CacheItemInterface \$item
     *   The cache item to save.
     *
     * @return bool
     *   False if the item could not be queued or if a commit was attempted and failed. True otherwise.
     */
    public function saveDeferred(CacheItemInterface \$item);

    /**
     * Persists any deferred cache items.
     *
     * @return bool
     *   True if all not-yet-saved items were successfully saved or there were none. False otherwise.
     */
    public function commit();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/psr/cache/src/CacheItemPoolInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Psr\\Cache;

/**
 * CacheItemPoolInterface generates CacheItemInterface objects.
 *
 * The primary purpose of Cache\\CacheItemPoolInterface is to accept a key from
 * the Calling Library and return the associated Cache\\CacheItemInterface object.
 * It is also the primary point of interaction with the entire cache collection.
 * All configuration and initialization of the Pool is left up to an
 * Implementing Library.
 */
interface CacheItemPoolInterface
{
    /**
     * Returns a Cache Item representing the specified key.
     *
     * This method must always return a CacheItemInterface object, even in case of
     * a cache miss. It MUST NOT return null.
     *
     * @param string \$key
     *   The key for which to return the corresponding Cache Item.
     *
     * @throws InvalidArgumentException
     *   If the \$key string is not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return CacheItemInterface
     *   The corresponding Cache Item.
     */
    public function getItem(\$key);

    /**
     * Returns a traversable set of cache items.
     *
     * @param string[] \$keys
     *   An indexed array of keys of items to retrieve.
     *
     * @throws InvalidArgumentException
     *   If any of the keys in \$keys are not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return array|\\Traversable
     *   A traversable collection of Cache Items keyed by the cache keys of
     *   each item. A Cache item will be returned for each key, even if that
     *   key is not found. However, if no keys are specified then an empty
     *   traversable MUST be returned instead.
     */
    public function getItems(array \$keys = array());

    /**
     * Confirms if the cache contains specified cache item.
     *
     * Note: This method MAY avoid retrieving the cached value for performance reasons.
     * This could result in a race condition with CacheItemInterface::get(). To avoid
     * such situation use CacheItemInterface::isHit() instead.
     *
     * @param string \$key
     *   The key for which to check existence.
     *
     * @throws InvalidArgumentException
     *   If the \$key string is not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if item exists in the cache, false otherwise.
     */
    public function hasItem(\$key);

    /**
     * Deletes all items in the pool.
     *
     * @return bool
     *   True if the pool was successfully cleared. False if there was an error.
     */
    public function clear();

    /**
     * Removes the item from the pool.
     *
     * @param string \$key
     *   The key to delete.
     *
     * @throws InvalidArgumentException
     *   If the \$key string is not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if the item was successfully removed. False if there was an error.
     */
    public function deleteItem(\$key);

    /**
     * Removes multiple items from the pool.
     *
     * @param string[] \$keys
     *   An array of keys that should be removed from the pool.

     * @throws InvalidArgumentException
     *   If any of the keys in \$keys are not a legal value a \\Psr\\Cache\\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if the items were successfully removed. False if there was an error.
     */
    public function deleteItems(array \$keys);

    /**
     * Persists a cache item immediately.
     *
     * @param CacheItemInterface \$item
     *   The cache item to save.
     *
     * @return bool
     *   True if the item was successfully persisted. False if there was an error.
     */
    public function save(CacheItemInterface \$item);

    /**
     * Sets a cache item to be persisted later.
     *
     * @param CacheItemInterface \$item
     *   The cache item to save.
     *
     * @return bool
     *   False if the item could not be queued or if a commit was attempted and failed. True otherwise.
     */
    public function saveDeferred(CacheItemInterface \$item);

    /**
     * Persists any deferred cache items.
     *
     * @return bool
     *   True if all not-yet-saved items were successfully saved or there were none. False otherwise.
     */
    public function commit();
}
", "vendor/psr/cache/src/CacheItemPoolInterface.php", "/var/www/public/DevLaon/templates/vendor/psr/cache/src/CacheItemPoolInterface.php");
    }
}
