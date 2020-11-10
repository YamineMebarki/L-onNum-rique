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

/* vendor/symfony/cache/Adapter/TagAwareAdapter.php */
class __TwigTemplate_c2aa341d1b9d2cbcd6cd4165e8493ff7c08580bbc3efb8aba0ecbfd6f96d7fa1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/TagAwareAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/TagAwareAdapter.php"));

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

use Psr\\Cache\\CacheItemInterface;
use Psr\\Cache\\InvalidArgumentException;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;
use Symfony\\Contracts\\Cache\\TagAwareCacheInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TagAwareAdapter implements TagAwareAdapterInterface, TagAwareCacheInterface, PruneableInterface, ResettableInterface
{
    const TAGS_PREFIX = \"\\0tags\\0\";

    use ProxyTrait;
    use ContractsTrait;

    private \$deferred = [];
    private \$createCacheItem;
    private \$setCacheItemTags;
    private \$getTagsByKey;
    private \$invalidateTags;
    private \$tags;
    private \$knownTagVersions = [];
    private \$knownTagVersionsTtl;

    public function __construct(AdapterInterface \$itemsPool, AdapterInterface \$tagsPool = null, float \$knownTagVersionsTtl = 0.15)
    {
        \$this->pool = \$itemsPool;
        \$this->tags = \$tagsPool ?: \$itemsPool;
        \$this->knownTagVersionsTtl = \$knownTagVersionsTtl;
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, CacheItem \$protoItem) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->value = \$value;
                \$item->defaultLifetime = \$protoItem->defaultLifetime;
                \$item->expiry = \$protoItem->expiry;
                \$item->poolHash = \$protoItem->poolHash;

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$this->setCacheItemTags = \\Closure::bind(
            static function (CacheItem \$item, \$key, array &\$itemTags) {
                \$item->isTaggable = true;
                if (!\$item->isHit) {
                    return \$item;
                }
                if (isset(\$itemTags[\$key])) {
                    foreach (\$itemTags[\$key] as \$tag => \$version) {
                        \$item->metadata[CacheItem::METADATA_TAGS][\$tag] = \$tag;
                    }
                    unset(\$itemTags[\$key]);
                } else {
                    \$item->value = null;
                    \$item->isHit = false;
                }

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$this->getTagsByKey = \\Closure::bind(
            static function (\$deferred) {
                \$tagsByKey = [];
                foreach (\$deferred as \$key => \$item) {
                    \$tagsByKey[\$key] = \$item->newMetadata[CacheItem::METADATA_TAGS] ?? [];
                }

                return \$tagsByKey;
            },
            null,
            CacheItem::class
        );
        \$this->invalidateTags = \\Closure::bind(
            static function (AdapterInterface \$tagsAdapter, array \$tags) {
                foreach (\$tags as \$v) {
                    \$v->defaultLifetime = 0;
                    \$v->expiry = null;
                    \$tagsAdapter->saveDeferred(\$v);
                }

                return \$tagsAdapter->commit();
            },
            null,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateTags(array \$tags)
    {
        \$ok = true;
        \$tagsByKey = [];
        \$invalidatedTags = [];
        foreach (\$tags as \$tag) {
            CacheItem::validateKey(\$tag);
            \$invalidatedTags[\$tag] = 0;
        }

        if (\$this->deferred) {
            \$items = \$this->deferred;
            foreach (\$items as \$key => \$item) {
                if (!\$this->pool->saveDeferred(\$item)) {
                    unset(\$this->deferred[\$key]);
                    \$ok = false;
                }
            }

            \$f = \$this->getTagsByKey;
            \$tagsByKey = \$f(\$items);
            \$this->deferred = [];
        }

        \$tagVersions = \$this->getTagVersions(\$tagsByKey, \$invalidatedTags);
        \$f = \$this->createCacheItem;

        foreach (\$tagsByKey as \$key => \$tags) {
            \$this->pool->saveDeferred(\$f(static::TAGS_PREFIX.\$key, array_intersect_key(\$tagVersions, \$tags), \$items[\$key]));
        }
        \$ok = \$this->pool->commit() && \$ok;

        if (\$invalidatedTags) {
            \$f = \$this->invalidateTags;
            \$ok = \$f(\$this->tags, \$invalidatedTags) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        if (!\$this->pool->hasItem(\$key)) {
            return false;
        }
        if (!\$itemTags = \$this->pool->getItem(static::TAGS_PREFIX.\$key)->get()) {
            return true;
        }

        foreach (\$this->getTagVersions([\$itemTags]) as \$tag => \$version) {
            if (\$itemTags[\$tag] !== \$version && 1 !== \$itemTags[\$tag] - \$version) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        foreach (\$this->getItems([\$key]) as \$item) {
            return \$item;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        \$tagKeys = [];

        foreach (\$keys as \$key) {
            if ('' !== \$key && \\is_string(\$key)) {
                \$key = static::TAGS_PREFIX.\$key;
                \$tagKeys[\$key] = \$key;
            }
        }

        try {
            \$items = \$this->pool->getItems(\$tagKeys + \$keys);
        } catch (InvalidArgumentException \$e) {
            \$this->pool->getItems(\$keys); // Should throw an exception

            throw \$e;
        }

        return \$this->generateItems(\$items, \$tagKeys);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->deferred = [];

        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        return \$this->deleteItems([\$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        foreach (\$keys as \$key) {
            if ('' !== \$key && \\is_string(\$key)) {
                \$keys[] = static::TAGS_PREFIX.\$key;
            }
        }

        return \$this->pool->deleteItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return \$this->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->invalidateTags([]);
    }

    public function __destruct()
    {
        \$this->commit();
    }

    private function generateItems(\$items, array \$tagKeys)
    {
        \$bufferedItems = \$itemTags = [];
        \$f = \$this->setCacheItemTags;

        foreach (\$items as \$key => \$item) {
            if (!\$tagKeys) {
                yield \$key => \$f(\$item, static::TAGS_PREFIX.\$key, \$itemTags);
                continue;
            }
            if (!isset(\$tagKeys[\$key])) {
                \$bufferedItems[\$key] = \$item;
                continue;
            }

            unset(\$tagKeys[\$key]);
            \$itemTags[\$key] = \$item->get() ?: [];

            if (!\$tagKeys) {
                \$tagVersions = \$this->getTagVersions(\$itemTags);

                foreach (\$itemTags as \$key => \$tags) {
                    foreach (\$tags as \$tag => \$version) {
                        if (\$tagVersions[\$tag] !== \$version && 1 !== \$version - \$tagVersions[\$tag]) {
                            unset(\$itemTags[\$key]);
                            continue 2;
                        }
                    }
                }
                \$tagVersions = \$tagKeys = null;

                foreach (\$bufferedItems as \$key => \$item) {
                    yield \$key => \$f(\$item, static::TAGS_PREFIX.\$key, \$itemTags);
                }
                \$bufferedItems = null;
            }
        }
    }

    private function getTagVersions(array \$tagsByKey, array &\$invalidatedTags = [])
    {
        \$tagVersions = \$invalidatedTags;

        foreach (\$tagsByKey as \$tags) {
            \$tagVersions += \$tags;
        }

        if (!\$tagVersions) {
            return [];
        }

        if (!\$fetchTagVersions = 1 !== \\func_num_args()) {
            foreach (\$tagsByKey as \$tags) {
                foreach (\$tags as \$tag => \$version) {
                    if (\$tagVersions[\$tag] > \$version) {
                        \$tagVersions[\$tag] = \$version;
                    }
                }
            }
        }

        \$now = microtime(true);
        \$tags = [];
        foreach (\$tagVersions as \$tag => \$version) {
            \$tags[\$tag.static::TAGS_PREFIX] = \$tag;
            if (\$fetchTagVersions || !isset(\$this->knownTagVersions[\$tag])) {
                \$fetchTagVersions = true;
                continue;
            }
            \$version -= \$this->knownTagVersions[\$tag][1];
            if ((0 !== \$version && 1 !== \$version) || \$now - \$this->knownTagVersions[\$tag][0] >= \$this->knownTagVersionsTtl) {
                // reuse previously fetched tag versions up to the ttl, unless we are storing items or a potential miss arises
                \$fetchTagVersions = true;
            } else {
                \$this->knownTagVersions[\$tag][1] += \$version;
            }
        }

        if (!\$fetchTagVersions) {
            return \$tagVersions;
        }

        foreach (\$this->tags->getItems(array_keys(\$tags)) as \$tag => \$version) {
            \$tagVersions[\$tag = \$tags[\$tag]] = \$version->get() ?: 0;
            if (isset(\$invalidatedTags[\$tag])) {
                \$invalidatedTags[\$tag] = \$version->set(++\$tagVersions[\$tag]);
            }
            \$this->knownTagVersions[\$tag] = [\$now, \$tagVersions[\$tag]];
        }

        return \$tagVersions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/TagAwareAdapter.php";
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

use Psr\\Cache\\CacheItemInterface;
use Psr\\Cache\\InvalidArgumentException;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;
use Symfony\\Contracts\\Cache\\TagAwareCacheInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TagAwareAdapter implements TagAwareAdapterInterface, TagAwareCacheInterface, PruneableInterface, ResettableInterface
{
    const TAGS_PREFIX = \"\\0tags\\0\";

    use ProxyTrait;
    use ContractsTrait;

    private \$deferred = [];
    private \$createCacheItem;
    private \$setCacheItemTags;
    private \$getTagsByKey;
    private \$invalidateTags;
    private \$tags;
    private \$knownTagVersions = [];
    private \$knownTagVersionsTtl;

    public function __construct(AdapterInterface \$itemsPool, AdapterInterface \$tagsPool = null, float \$knownTagVersionsTtl = 0.15)
    {
        \$this->pool = \$itemsPool;
        \$this->tags = \$tagsPool ?: \$itemsPool;
        \$this->knownTagVersionsTtl = \$knownTagVersionsTtl;
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, CacheItem \$protoItem) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->value = \$value;
                \$item->defaultLifetime = \$protoItem->defaultLifetime;
                \$item->expiry = \$protoItem->expiry;
                \$item->poolHash = \$protoItem->poolHash;

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$this->setCacheItemTags = \\Closure::bind(
            static function (CacheItem \$item, \$key, array &\$itemTags) {
                \$item->isTaggable = true;
                if (!\$item->isHit) {
                    return \$item;
                }
                if (isset(\$itemTags[\$key])) {
                    foreach (\$itemTags[\$key] as \$tag => \$version) {
                        \$item->metadata[CacheItem::METADATA_TAGS][\$tag] = \$tag;
                    }
                    unset(\$itemTags[\$key]);
                } else {
                    \$item->value = null;
                    \$item->isHit = false;
                }

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$this->getTagsByKey = \\Closure::bind(
            static function (\$deferred) {
                \$tagsByKey = [];
                foreach (\$deferred as \$key => \$item) {
                    \$tagsByKey[\$key] = \$item->newMetadata[CacheItem::METADATA_TAGS] ?? [];
                }

                return \$tagsByKey;
            },
            null,
            CacheItem::class
        );
        \$this->invalidateTags = \\Closure::bind(
            static function (AdapterInterface \$tagsAdapter, array \$tags) {
                foreach (\$tags as \$v) {
                    \$v->defaultLifetime = 0;
                    \$v->expiry = null;
                    \$tagsAdapter->saveDeferred(\$v);
                }

                return \$tagsAdapter->commit();
            },
            null,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateTags(array \$tags)
    {
        \$ok = true;
        \$tagsByKey = [];
        \$invalidatedTags = [];
        foreach (\$tags as \$tag) {
            CacheItem::validateKey(\$tag);
            \$invalidatedTags[\$tag] = 0;
        }

        if (\$this->deferred) {
            \$items = \$this->deferred;
            foreach (\$items as \$key => \$item) {
                if (!\$this->pool->saveDeferred(\$item)) {
                    unset(\$this->deferred[\$key]);
                    \$ok = false;
                }
            }

            \$f = \$this->getTagsByKey;
            \$tagsByKey = \$f(\$items);
            \$this->deferred = [];
        }

        \$tagVersions = \$this->getTagVersions(\$tagsByKey, \$invalidatedTags);
        \$f = \$this->createCacheItem;

        foreach (\$tagsByKey as \$key => \$tags) {
            \$this->pool->saveDeferred(\$f(static::TAGS_PREFIX.\$key, array_intersect_key(\$tagVersions, \$tags), \$items[\$key]));
        }
        \$ok = \$this->pool->commit() && \$ok;

        if (\$invalidatedTags) {
            \$f = \$this->invalidateTags;
            \$ok = \$f(\$this->tags, \$invalidatedTags) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        if (!\$this->pool->hasItem(\$key)) {
            return false;
        }
        if (!\$itemTags = \$this->pool->getItem(static::TAGS_PREFIX.\$key)->get()) {
            return true;
        }

        foreach (\$this->getTagVersions([\$itemTags]) as \$tag => \$version) {
            if (\$itemTags[\$tag] !== \$version && 1 !== \$itemTags[\$tag] - \$version) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        foreach (\$this->getItems([\$key]) as \$item) {
            return \$item;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        \$tagKeys = [];

        foreach (\$keys as \$key) {
            if ('' !== \$key && \\is_string(\$key)) {
                \$key = static::TAGS_PREFIX.\$key;
                \$tagKeys[\$key] = \$key;
            }
        }

        try {
            \$items = \$this->pool->getItems(\$tagKeys + \$keys);
        } catch (InvalidArgumentException \$e) {
            \$this->pool->getItems(\$keys); // Should throw an exception

            throw \$e;
        }

        return \$this->generateItems(\$items, \$tagKeys);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->deferred = [];

        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        return \$this->deleteItems([\$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        foreach (\$keys as \$key) {
            if ('' !== \$key && \\is_string(\$key)) {
                \$keys[] = static::TAGS_PREFIX.\$key;
            }
        }

        return \$this->pool->deleteItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return \$this->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->invalidateTags([]);
    }

    public function __destruct()
    {
        \$this->commit();
    }

    private function generateItems(\$items, array \$tagKeys)
    {
        \$bufferedItems = \$itemTags = [];
        \$f = \$this->setCacheItemTags;

        foreach (\$items as \$key => \$item) {
            if (!\$tagKeys) {
                yield \$key => \$f(\$item, static::TAGS_PREFIX.\$key, \$itemTags);
                continue;
            }
            if (!isset(\$tagKeys[\$key])) {
                \$bufferedItems[\$key] = \$item;
                continue;
            }

            unset(\$tagKeys[\$key]);
            \$itemTags[\$key] = \$item->get() ?: [];

            if (!\$tagKeys) {
                \$tagVersions = \$this->getTagVersions(\$itemTags);

                foreach (\$itemTags as \$key => \$tags) {
                    foreach (\$tags as \$tag => \$version) {
                        if (\$tagVersions[\$tag] !== \$version && 1 !== \$version - \$tagVersions[\$tag]) {
                            unset(\$itemTags[\$key]);
                            continue 2;
                        }
                    }
                }
                \$tagVersions = \$tagKeys = null;

                foreach (\$bufferedItems as \$key => \$item) {
                    yield \$key => \$f(\$item, static::TAGS_PREFIX.\$key, \$itemTags);
                }
                \$bufferedItems = null;
            }
        }
    }

    private function getTagVersions(array \$tagsByKey, array &\$invalidatedTags = [])
    {
        \$tagVersions = \$invalidatedTags;

        foreach (\$tagsByKey as \$tags) {
            \$tagVersions += \$tags;
        }

        if (!\$tagVersions) {
            return [];
        }

        if (!\$fetchTagVersions = 1 !== \\func_num_args()) {
            foreach (\$tagsByKey as \$tags) {
                foreach (\$tags as \$tag => \$version) {
                    if (\$tagVersions[\$tag] > \$version) {
                        \$tagVersions[\$tag] = \$version;
                    }
                }
            }
        }

        \$now = microtime(true);
        \$tags = [];
        foreach (\$tagVersions as \$tag => \$version) {
            \$tags[\$tag.static::TAGS_PREFIX] = \$tag;
            if (\$fetchTagVersions || !isset(\$this->knownTagVersions[\$tag])) {
                \$fetchTagVersions = true;
                continue;
            }
            \$version -= \$this->knownTagVersions[\$tag][1];
            if ((0 !== \$version && 1 !== \$version) || \$now - \$this->knownTagVersions[\$tag][0] >= \$this->knownTagVersionsTtl) {
                // reuse previously fetched tag versions up to the ttl, unless we are storing items or a potential miss arises
                \$fetchTagVersions = true;
            } else {
                \$this->knownTagVersions[\$tag][1] += \$version;
            }
        }

        if (!\$fetchTagVersions) {
            return \$tagVersions;
        }

        foreach (\$this->tags->getItems(array_keys(\$tags)) as \$tag => \$version) {
            \$tagVersions[\$tag = \$tags[\$tag]] = \$version->get() ?: 0;
            if (isset(\$invalidatedTags[\$tag])) {
                \$invalidatedTags[\$tag] = \$version->set(++\$tagVersions[\$tag]);
            }
            \$this->knownTagVersions[\$tag] = [\$now, \$tagVersions[\$tag]];
        }

        return \$tagVersions;
    }
}
", "vendor/symfony/cache/Adapter/TagAwareAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/TagAwareAdapter.php");
    }
}
