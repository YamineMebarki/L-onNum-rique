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

/* vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php */
class __TwigTemplate_f4a3014f3b1a71caa4dae5b61c273eb83e85f594f5d5876f7796fd5b2b7d44b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Psr\\Log\\LoggerAwareInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\AbstractAdapterTrait;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Contracts\\Cache\\TagAwareCacheInterface;

/**
 * Abstract for native TagAware adapters.
 *
 * To keep info on tags, the tags are both serialized as part of cache value and provided as tag ids
 * to Adapters on operations when needed for storage to doSave(), doDelete() & doInvalidate().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author André Rømcke <andre.romcke+symfony@gmail.com>
 *
 * @internal
 * @experimental in 4.3
 */
abstract class AbstractTagAwareAdapter implements TagAwareAdapterInterface, TagAwareCacheInterface, LoggerAwareInterface, ResettableInterface
{
    use AbstractAdapterTrait;
    use ContractsTrait;

    private const TAGS_PREFIX = \"\\0tags\\0\";

    protected function __construct(string \$namespace = '', int \$defaultLifetime = 0)
    {
        \$this->namespace = '' === \$namespace ? '' : CacheItem::validateKey(\$namespace).':';
        if (null !== \$this->maxIdLength && \\strlen(\$namespace) > \$this->maxIdLength - 24) {
            throw new InvalidArgumentException(sprintf('Namespace must be %d chars max, %d given (\"%s\")', \$this->maxIdLength - 24, \\strlen(\$namespace), \$namespace));
        }
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, \$isHit) use (\$defaultLifetime) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->defaultLifetime = \$defaultLifetime;
                \$item->isTaggable = true;
                // If structure does not match what we expect return item as is (no value and not a hit)
                if (!\\is_array(\$value) || !\\array_key_exists('value', \$value)) {
                    return \$item;
                }
                \$item->isHit = \$isHit;
                // Extract value, tags and meta data from the cache value
                \$item->value = \$value['value'];
                \$item->metadata[CacheItem::METADATA_TAGS] = \$value['tags'] ?? [];
                if (isset(\$value['meta'])) {
                    // For compactness these values are packed, & expiry is offset to reduce size
                    \$v = unpack('Ve/Nc', \$value['meta']);
                    \$item->metadata[CacheItem::METADATA_EXPIRY] = \$v['e'] + CacheItem::METADATA_EXPIRY_OFFSET;
                    \$item->metadata[CacheItem::METADATA_CTIME] = \$v['c'];
                }

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$getId = \\Closure::fromCallable([\$this, 'getId']);
        \$tagPrefix = self::TAGS_PREFIX;
        \$this->mergeByLifetime = \\Closure::bind(
            static function (\$deferred, &\$expiredIds) use (\$getId, \$tagPrefix) {
                \$byLifetime = [];
                \$now = microtime(true);
                \$expiredIds = [];

                foreach (\$deferred as \$key => \$item) {
                    \$key = (string) \$key;
                    if (null === \$item->expiry) {
                        \$ttl = 0 < \$item->defaultLifetime ? \$item->defaultLifetime : 0;
                    } elseif (0 >= \$ttl = (int) (0.1 + \$item->expiry - \$now)) {
                        \$expiredIds[] = \$getId(\$key);
                        continue;
                    }
                    // Store Value and Tags on the cache value
                    if (isset((\$metadata = \$item->newMetadata)[CacheItem::METADATA_TAGS])) {
                        \$value = ['value' => \$item->value, 'tags' => \$metadata[CacheItem::METADATA_TAGS]];
                        unset(\$metadata[CacheItem::METADATA_TAGS]);
                    } else {
                        \$value = ['value' => \$item->value, 'tags' => []];
                    }

                    if (\$metadata) {
                        // For compactness, expiry and creation duration are packed, using magic numbers as separators
                        \$value['meta'] = pack('VN', (int) (0.1 + \$metadata[self::METADATA_EXPIRY] - self::METADATA_EXPIRY_OFFSET), \$metadata[self::METADATA_CTIME]);
                    }

                    // Extract tag changes, these should be removed from values in doSave()
                    \$value['tag-operations'] = ['add' => [], 'remove' => []];
                    \$oldTags = \$item->metadata[CacheItem::METADATA_TAGS] ?? [];
                    foreach (array_diff(\$value['tags'], \$oldTags) as \$addedTag) {
                        \$value['tag-operations']['add'][] = \$getId(\$tagPrefix.\$addedTag);
                    }
                    foreach (array_diff(\$oldTags, \$value['tags']) as \$removedTag) {
                        \$value['tag-operations']['remove'][] = \$getId(\$tagPrefix.\$removedTag);
                    }

                    \$byLifetime[\$ttl][\$getId(\$key)] = \$value;
                }

                return \$byLifetime;
            },
            null,
            CacheItem::class
        );
    }

    /**
     * Persists several cache items immediately.
     *
     * @param array   \$values        The values to cache, indexed by their cache identifier
     * @param int     \$lifetime      The lifetime of the cached values, 0 for persisting until manual cleaning
     * @param array[] \$addTagData    Hash where key is tag id, and array value is list of cache id's to add to tag
     * @param array[] \$removeTagData Hash where key is tag id, and array value is list of cache id's to remove to tag
     *
     * @return array The identifiers that failed to be cached or a boolean stating if caching succeeded or not
     */
    abstract protected function doSave(array \$values, ?int \$lifetime, array \$addTagData = [], array \$removeTagData = []): array;

    /**
     * Removes multiple items from the pool and their corresponding tags.
     *
     * @param array \$ids     An array of identifiers that should be removed from the pool
     * @param array \$tagData Optional array of tag identifiers => key identifiers that should be removed from the pool
     *
     * @return bool True if the items were successfully removed, false otherwise
     */
    abstract protected function doDelete(array \$ids, array \$tagData = []): bool;

    /**
     * Invalidates cached items using tags.
     *
     * @param string[] \$tagIds An array of tags to invalidate, key is tag and value is tag id
     *
     * @return bool True on success
     */
    abstract protected function doInvalidate(array \$tagIds): bool;

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        \$ok = true;
        \$byLifetime = \$this->mergeByLifetime;
        \$byLifetime = \$byLifetime(\$this->deferred, \$expiredIds);
        \$retry = \$this->deferred = [];

        if (\$expiredIds) {
            // Tags are not cleaned up in this case, however that is done on invalidateTags().
            \$this->doDelete(\$expiredIds);
        }
        foreach (\$byLifetime as \$lifetime => \$values) {
            try {
                \$values = \$this->extractTagData(\$values, \$addTagData, \$removeTagData);
                \$e = \$this->doSave(\$values, \$lifetime, \$addTagData, \$removeTagData);
            } catch (\\Exception \$e) {
            }
            if (true === \$e || [] === \$e) {
                continue;
            }
            if (\\is_array(\$e) || 1 === \\count(\$values)) {
                foreach (\\is_array(\$e) ? \$e : array_keys(\$values) as \$id) {
                    \$ok = false;
                    \$v = \$values[\$id];
                    \$type = \\is_object(\$v) ? \\get_class(\$v) : \\gettype(\$v);
                    \$message = sprintf('Failed to save key \"{key}\" of type %s%s', \$type, \$e instanceof \\Exception ? ': '.\$e->getMessage() : '.');
                    CacheItem::log(\$this->logger, \$message, ['key' => substr(\$id, \\strlen(\$this->namespace)), 'exception' => \$e instanceof \\Exception ? \$e : null]);
                }
            } else {
                foreach (\$values as \$id => \$v) {
                    \$retry[\$lifetime][] = \$id;
                }
            }
        }

        // When bulk-save failed, retry each item individually
        foreach (\$retry as \$lifetime => \$ids) {
            foreach (\$ids as \$id) {
                try {
                    \$v = \$byLifetime[\$lifetime][\$id];
                    \$values = \$this->extractTagData([\$id => \$v], \$addTagData, \$removeTagData);
                    \$e = \$this->doSave(\$values, \$lifetime, \$addTagData, \$removeTagData);
                } catch (\\Exception \$e) {
                }
                if (true === \$e || [] === \$e) {
                    continue;
                }
                \$ok = false;
                \$type = \\is_object(\$v) ? \\get_class(\$v) : \\gettype(\$v);
                \$message = sprintf('Failed to save key \"{key}\" of type %s%s', \$type, \$e instanceof \\Exception ? ': '.\$e->getMessage() : '.');
                CacheItem::log(\$this->logger, \$message, ['key' => substr(\$id, \\strlen(\$this->namespace)), 'exception' => \$e instanceof \\Exception ? \$e : null]);
            }
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     *
     * Overloaded in order to deal with tags for adjusted doDelete() signature.
     */
    public function deleteItems(array \$keys)
    {
        if (!\$keys) {
            return true;
        }

        \$ids = [];
        \$tagData = [];

        foreach (\$keys as \$key) {
            \$ids[\$key] = \$this->getId(\$key);
            unset(\$this->deferred[\$key]);
        }

        foreach (\$this->doFetch(\$ids) as \$id => \$value) {
            foreach (\$value['tags'] ?? [] as \$tag) {
                \$tagData[\$this->getId(self::TAGS_PREFIX.\$tag)][] = \$id;
            }
        }

        try {
            if (\$this->doDelete(array_values(\$ids), \$tagData)) {
                return true;
            }
        } catch (\\Exception \$e) {
        }

        \$ok = true;

        // When bulk-delete failed, retry each item individually
        foreach (\$ids as \$key => \$id) {
            try {
                \$e = null;
                if (\$this->doDelete([\$id])) {
                    continue;
                }
            } catch (\\Exception \$e) {
            }
            \$message = 'Failed to delete key \"{key}\"'.(\$e instanceof \\Exception ? ': '.\$e->getMessage() : '.');
            CacheItem::log(\$this->logger, \$message, ['key' => \$key, 'exception' => \$e]);
            \$ok = false;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateTags(array \$tags)
    {
        if (empty(\$tags)) {
            return false;
        }

        \$tagIds = [];
        foreach (array_unique(\$tags) as \$tag) {
            \$tagIds[] = \$this->getId(self::TAGS_PREFIX.\$tag);
        }

        if (\$this->doInvalidate(\$tagIds)) {
            return true;
        }

        return false;
    }

    /**
     * Extracts tags operation data from \$values set in mergeByLifetime, and returns values without it.
     */
    private function extractTagData(array \$values, ?array &\$addTagData, ?array &\$removeTagData): array
    {
        \$addTagData = \$removeTagData = [];
        foreach (\$values as \$id => \$value) {
            foreach (\$value['tag-operations']['add'] as \$tag => \$tagId) {
                \$addTagData[\$tagId][] = \$id;
            }

            foreach (\$value['tag-operations']['remove'] as \$tag => \$tagId) {
                \$removeTagData[\$tagId][] = \$id;
            }

            unset(\$values[\$id]['tag-operations']);
        }

        return \$values;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Psr\\Log\\LoggerAwareInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\AbstractAdapterTrait;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Contracts\\Cache\\TagAwareCacheInterface;

/**
 * Abstract for native TagAware adapters.
 *
 * To keep info on tags, the tags are both serialized as part of cache value and provided as tag ids
 * to Adapters on operations when needed for storage to doSave(), doDelete() & doInvalidate().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author André Rømcke <andre.romcke+symfony@gmail.com>
 *
 * @internal
 * @experimental in 4.3
 */
abstract class AbstractTagAwareAdapter implements TagAwareAdapterInterface, TagAwareCacheInterface, LoggerAwareInterface, ResettableInterface
{
    use AbstractAdapterTrait;
    use ContractsTrait;

    private const TAGS_PREFIX = \"\\0tags\\0\";

    protected function __construct(string \$namespace = '', int \$defaultLifetime = 0)
    {
        \$this->namespace = '' === \$namespace ? '' : CacheItem::validateKey(\$namespace).':';
        if (null !== \$this->maxIdLength && \\strlen(\$namespace) > \$this->maxIdLength - 24) {
            throw new InvalidArgumentException(sprintf('Namespace must be %d chars max, %d given (\"%s\")', \$this->maxIdLength - 24, \\strlen(\$namespace), \$namespace));
        }
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, \$isHit) use (\$defaultLifetime) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->defaultLifetime = \$defaultLifetime;
                \$item->isTaggable = true;
                // If structure does not match what we expect return item as is (no value and not a hit)
                if (!\\is_array(\$value) || !\\array_key_exists('value', \$value)) {
                    return \$item;
                }
                \$item->isHit = \$isHit;
                // Extract value, tags and meta data from the cache value
                \$item->value = \$value['value'];
                \$item->metadata[CacheItem::METADATA_TAGS] = \$value['tags'] ?? [];
                if (isset(\$value['meta'])) {
                    // For compactness these values are packed, & expiry is offset to reduce size
                    \$v = unpack('Ve/Nc', \$value['meta']);
                    \$item->metadata[CacheItem::METADATA_EXPIRY] = \$v['e'] + CacheItem::METADATA_EXPIRY_OFFSET;
                    \$item->metadata[CacheItem::METADATA_CTIME] = \$v['c'];
                }

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$getId = \\Closure::fromCallable([\$this, 'getId']);
        \$tagPrefix = self::TAGS_PREFIX;
        \$this->mergeByLifetime = \\Closure::bind(
            static function (\$deferred, &\$expiredIds) use (\$getId, \$tagPrefix) {
                \$byLifetime = [];
                \$now = microtime(true);
                \$expiredIds = [];

                foreach (\$deferred as \$key => \$item) {
                    \$key = (string) \$key;
                    if (null === \$item->expiry) {
                        \$ttl = 0 < \$item->defaultLifetime ? \$item->defaultLifetime : 0;
                    } elseif (0 >= \$ttl = (int) (0.1 + \$item->expiry - \$now)) {
                        \$expiredIds[] = \$getId(\$key);
                        continue;
                    }
                    // Store Value and Tags on the cache value
                    if (isset((\$metadata = \$item->newMetadata)[CacheItem::METADATA_TAGS])) {
                        \$value = ['value' => \$item->value, 'tags' => \$metadata[CacheItem::METADATA_TAGS]];
                        unset(\$metadata[CacheItem::METADATA_TAGS]);
                    } else {
                        \$value = ['value' => \$item->value, 'tags' => []];
                    }

                    if (\$metadata) {
                        // For compactness, expiry and creation duration are packed, using magic numbers as separators
                        \$value['meta'] = pack('VN', (int) (0.1 + \$metadata[self::METADATA_EXPIRY] - self::METADATA_EXPIRY_OFFSET), \$metadata[self::METADATA_CTIME]);
                    }

                    // Extract tag changes, these should be removed from values in doSave()
                    \$value['tag-operations'] = ['add' => [], 'remove' => []];
                    \$oldTags = \$item->metadata[CacheItem::METADATA_TAGS] ?? [];
                    foreach (array_diff(\$value['tags'], \$oldTags) as \$addedTag) {
                        \$value['tag-operations']['add'][] = \$getId(\$tagPrefix.\$addedTag);
                    }
                    foreach (array_diff(\$oldTags, \$value['tags']) as \$removedTag) {
                        \$value['tag-operations']['remove'][] = \$getId(\$tagPrefix.\$removedTag);
                    }

                    \$byLifetime[\$ttl][\$getId(\$key)] = \$value;
                }

                return \$byLifetime;
            },
            null,
            CacheItem::class
        );
    }

    /**
     * Persists several cache items immediately.
     *
     * @param array   \$values        The values to cache, indexed by their cache identifier
     * @param int     \$lifetime      The lifetime of the cached values, 0 for persisting until manual cleaning
     * @param array[] \$addTagData    Hash where key is tag id, and array value is list of cache id's to add to tag
     * @param array[] \$removeTagData Hash where key is tag id, and array value is list of cache id's to remove to tag
     *
     * @return array The identifiers that failed to be cached or a boolean stating if caching succeeded or not
     */
    abstract protected function doSave(array \$values, ?int \$lifetime, array \$addTagData = [], array \$removeTagData = []): array;

    /**
     * Removes multiple items from the pool and their corresponding tags.
     *
     * @param array \$ids     An array of identifiers that should be removed from the pool
     * @param array \$tagData Optional array of tag identifiers => key identifiers that should be removed from the pool
     *
     * @return bool True if the items were successfully removed, false otherwise
     */
    abstract protected function doDelete(array \$ids, array \$tagData = []): bool;

    /**
     * Invalidates cached items using tags.
     *
     * @param string[] \$tagIds An array of tags to invalidate, key is tag and value is tag id
     *
     * @return bool True on success
     */
    abstract protected function doInvalidate(array \$tagIds): bool;

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        \$ok = true;
        \$byLifetime = \$this->mergeByLifetime;
        \$byLifetime = \$byLifetime(\$this->deferred, \$expiredIds);
        \$retry = \$this->deferred = [];

        if (\$expiredIds) {
            // Tags are not cleaned up in this case, however that is done on invalidateTags().
            \$this->doDelete(\$expiredIds);
        }
        foreach (\$byLifetime as \$lifetime => \$values) {
            try {
                \$values = \$this->extractTagData(\$values, \$addTagData, \$removeTagData);
                \$e = \$this->doSave(\$values, \$lifetime, \$addTagData, \$removeTagData);
            } catch (\\Exception \$e) {
            }
            if (true === \$e || [] === \$e) {
                continue;
            }
            if (\\is_array(\$e) || 1 === \\count(\$values)) {
                foreach (\\is_array(\$e) ? \$e : array_keys(\$values) as \$id) {
                    \$ok = false;
                    \$v = \$values[\$id];
                    \$type = \\is_object(\$v) ? \\get_class(\$v) : \\gettype(\$v);
                    \$message = sprintf('Failed to save key \"{key}\" of type %s%s', \$type, \$e instanceof \\Exception ? ': '.\$e->getMessage() : '.');
                    CacheItem::log(\$this->logger, \$message, ['key' => substr(\$id, \\strlen(\$this->namespace)), 'exception' => \$e instanceof \\Exception ? \$e : null]);
                }
            } else {
                foreach (\$values as \$id => \$v) {
                    \$retry[\$lifetime][] = \$id;
                }
            }
        }

        // When bulk-save failed, retry each item individually
        foreach (\$retry as \$lifetime => \$ids) {
            foreach (\$ids as \$id) {
                try {
                    \$v = \$byLifetime[\$lifetime][\$id];
                    \$values = \$this->extractTagData([\$id => \$v], \$addTagData, \$removeTagData);
                    \$e = \$this->doSave(\$values, \$lifetime, \$addTagData, \$removeTagData);
                } catch (\\Exception \$e) {
                }
                if (true === \$e || [] === \$e) {
                    continue;
                }
                \$ok = false;
                \$type = \\is_object(\$v) ? \\get_class(\$v) : \\gettype(\$v);
                \$message = sprintf('Failed to save key \"{key}\" of type %s%s', \$type, \$e instanceof \\Exception ? ': '.\$e->getMessage() : '.');
                CacheItem::log(\$this->logger, \$message, ['key' => substr(\$id, \\strlen(\$this->namespace)), 'exception' => \$e instanceof \\Exception ? \$e : null]);
            }
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     *
     * Overloaded in order to deal with tags for adjusted doDelete() signature.
     */
    public function deleteItems(array \$keys)
    {
        if (!\$keys) {
            return true;
        }

        \$ids = [];
        \$tagData = [];

        foreach (\$keys as \$key) {
            \$ids[\$key] = \$this->getId(\$key);
            unset(\$this->deferred[\$key]);
        }

        foreach (\$this->doFetch(\$ids) as \$id => \$value) {
            foreach (\$value['tags'] ?? [] as \$tag) {
                \$tagData[\$this->getId(self::TAGS_PREFIX.\$tag)][] = \$id;
            }
        }

        try {
            if (\$this->doDelete(array_values(\$ids), \$tagData)) {
                return true;
            }
        } catch (\\Exception \$e) {
        }

        \$ok = true;

        // When bulk-delete failed, retry each item individually
        foreach (\$ids as \$key => \$id) {
            try {
                \$e = null;
                if (\$this->doDelete([\$id])) {
                    continue;
                }
            } catch (\\Exception \$e) {
            }
            \$message = 'Failed to delete key \"{key}\"'.(\$e instanceof \\Exception ? ': '.\$e->getMessage() : '.');
            CacheItem::log(\$this->logger, \$message, ['key' => \$key, 'exception' => \$e]);
            \$ok = false;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateTags(array \$tags)
    {
        if (empty(\$tags)) {
            return false;
        }

        \$tagIds = [];
        foreach (array_unique(\$tags) as \$tag) {
            \$tagIds[] = \$this->getId(self::TAGS_PREFIX.\$tag);
        }

        if (\$this->doInvalidate(\$tagIds)) {
            return true;
        }

        return false;
    }

    /**
     * Extracts tags operation data from \$values set in mergeByLifetime, and returns values without it.
     */
    private function extractTagData(array \$values, ?array &\$addTagData, ?array &\$removeTagData): array
    {
        \$addTagData = \$removeTagData = [];
        foreach (\$values as \$id => \$value) {
            foreach (\$value['tag-operations']['add'] as \$tag => \$tagId) {
                \$addTagData[\$tagId][] = \$id;
            }

            foreach (\$value['tag-operations']['remove'] as \$tag => \$tagId) {
                \$removeTagData[\$tagId][] = \$id;
            }

            unset(\$values[\$id]['tag-operations']);
        }

        return \$values;
    }
}
", "vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php");
    }
}
