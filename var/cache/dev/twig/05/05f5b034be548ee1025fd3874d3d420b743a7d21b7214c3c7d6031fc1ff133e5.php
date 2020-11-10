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

/* vendor/symfony/cache/Adapter/ProxyAdapter.php */
class __TwigTemplate_067c83be0b94529d086d806b839b55a8986892a6f0872ead950307e30a0f643c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/ProxyAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/ProxyAdapter.php"));

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
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ProxyAdapter implements AdapterInterface, CacheInterface, PruneableInterface, ResettableInterface
{
    use ProxyTrait;
    use ContractsTrait;

    private \$namespace;
    private \$namespaceLen;
    private \$createCacheItem;
    private \$setInnerItem;
    private \$poolHash;

    public function __construct(CacheItemPoolInterface \$pool, string \$namespace = '', int \$defaultLifetime = 0)
    {
        \$this->pool = \$pool;
        \$this->poolHash = \$poolHash = spl_object_hash(\$pool);
        \$this->namespace = '' === \$namespace ? '' : CacheItem::validateKey(\$namespace);
        \$this->namespaceLen = \\strlen(\$namespace);
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$innerItem) use (\$defaultLifetime, \$poolHash) {
                \$item = new CacheItem();
                \$item->key = \$key;

                if (null === \$innerItem) {
                    return \$item;
                }

                \$item->value = \$v = \$innerItem->get();
                \$item->isHit = \$innerItem->isHit();
                \$item->innerItem = \$innerItem;
                \$item->defaultLifetime = \$defaultLifetime;
                \$item->poolHash = \$poolHash;

                // Detect wrapped values that encode for their expiry and creation duration
                // For compactness, these values are packed in the key of an array using
                // magic numbers in the form 9D-..-..-..-..-00-..-..-..-5F
                if (\\is_array(\$v) && 1 === \\count(\$v) && 10 === \\strlen(\$k = key(\$v)) && \"\\x9D\" === \$k[0] && \"\\0\" === \$k[5] && \"\\x5F\" === \$k[9]) {
                    \$item->value = \$v[\$k];
                    \$v = unpack('Ve/Nc', substr(\$k, 1, -1));
                    \$item->metadata[CacheItem::METADATA_EXPIRY] = \$v['e'] + CacheItem::METADATA_EXPIRY_OFFSET;
                    \$item->metadata[CacheItem::METADATA_CTIME] = \$v['c'];
                } elseif (\$innerItem instanceof CacheItem) {
                    \$item->metadata = \$innerItem->metadata;
                }
                \$innerItem->set(null);

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$this->setInnerItem = \\Closure::bind(
            /**
             * @param array \$item A CacheItem cast to (array); accessing protected properties requires adding the \"\\0*\\0\" PHP prefix
             */
            static function (CacheItemInterface \$innerItem, array \$item) {
                // Tags are stored separately, no need to account for them when considering this item's newly set metadata
                if (isset((\$metadata = \$item[\"\\0*\\0newMetadata\"])[CacheItem::METADATA_TAGS])) {
                    unset(\$metadata[CacheItem::METADATA_TAGS]);
                }
                if (\$metadata) {
                    // For compactness, expiry and creation duration are packed in the key of an array, using magic numbers as separators
                    \$item[\"\\0*\\0value\"] = [\"\\x9D\".pack('VN', (int) (0.1 + \$metadata[self::METADATA_EXPIRY] - self::METADATA_EXPIRY_OFFSET), \$metadata[self::METADATA_CTIME]).\"\\x5F\" => \$item[\"\\0*\\0value\"]];
                }
                \$innerItem->set(\$item[\"\\0*\\0value\"]);
                \$innerItem->expiresAt(null !== \$item[\"\\0*\\0expiry\"] ? \\DateTime::createFromFormat('U.u', sprintf('%.6f', \$item[\"\\0*\\0expiry\"])) : null);
            },
            null,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        if (!\$this->pool instanceof CacheInterface) {
            return \$this->doGet(\$this, \$key, \$callback, \$beta, \$metadata);
        }

        return \$this->pool->get(\$this->getId(\$key), function (\$innerItem, bool &\$save) use (\$key, \$callback) {
            \$item = (\$this->createCacheItem)(\$key, \$innerItem);
            \$item->set(\$value = \$callback(\$item, \$save));
            (\$this->setInnerItem)(\$innerItem, (array) \$item);

            return \$value;
        }, \$beta, \$metadata);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$f = \$this->createCacheItem;
        \$item = \$this->pool->getItem(\$this->getId(\$key));

        return \$f(\$key, \$item);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        if (\$this->namespaceLen) {
            foreach (\$keys as \$i => \$key) {
                \$keys[\$i] = \$this->getId(\$key);
            }
        }

        return \$this->generateItems(\$this->pool->getItems(\$keys));
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        return \$this->pool->hasItem(\$this->getId(\$key));
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        return \$this->pool->deleteItem(\$this->getId(\$key));
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        if (\$this->namespaceLen) {
            foreach (\$keys as \$i => \$key) {
                \$keys[\$i] = \$this->getId(\$key);
            }
        }

        return \$this->pool->deleteItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        return \$this->doSave(\$item, __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return \$this->doSave(\$item, __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->pool->commit();
    }

    private function doSave(CacheItemInterface \$item, \$method)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$item = (array) \$item;
        if (null === \$item[\"\\0*\\0expiry\"] && 0 < \$item[\"\\0*\\0defaultLifetime\"]) {
            \$item[\"\\0*\\0expiry\"] = microtime(true) + \$item[\"\\0*\\0defaultLifetime\"];
        }

        if (\$item[\"\\0*\\0poolHash\"] === \$this->poolHash && \$item[\"\\0*\\0innerItem\"]) {
            \$innerItem = \$item[\"\\0*\\0innerItem\"];
        } elseif (\$this->pool instanceof AdapterInterface) {
            // this is an optimization specific for AdapterInterface implementations
            // so we can save a round-trip to the backend by just creating a new item
            \$f = \$this->createCacheItem;
            \$innerItem = \$f(\$this->namespace.\$item[\"\\0*\\0key\"], null);
        } else {
            \$innerItem = \$this->pool->getItem(\$this->namespace.\$item[\"\\0*\\0key\"]);
        }

        (\$this->setInnerItem)(\$innerItem, \$item);

        return \$this->pool->\$method(\$innerItem);
    }

    private function generateItems(\$items)
    {
        \$f = \$this->createCacheItem;

        foreach (\$items as \$key => \$item) {
            if (\$this->namespaceLen) {
                \$key = substr(\$key, \$this->namespaceLen);
            }

            yield \$key => \$f(\$key, \$item);
        }
    }

    private function getId(\$key)
    {
        CacheItem::validateKey(\$key);

        return \$this->namespace.\$key;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/ProxyAdapter.php";
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
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ProxyAdapter implements AdapterInterface, CacheInterface, PruneableInterface, ResettableInterface
{
    use ProxyTrait;
    use ContractsTrait;

    private \$namespace;
    private \$namespaceLen;
    private \$createCacheItem;
    private \$setInnerItem;
    private \$poolHash;

    public function __construct(CacheItemPoolInterface \$pool, string \$namespace = '', int \$defaultLifetime = 0)
    {
        \$this->pool = \$pool;
        \$this->poolHash = \$poolHash = spl_object_hash(\$pool);
        \$this->namespace = '' === \$namespace ? '' : CacheItem::validateKey(\$namespace);
        \$this->namespaceLen = \\strlen(\$namespace);
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$innerItem) use (\$defaultLifetime, \$poolHash) {
                \$item = new CacheItem();
                \$item->key = \$key;

                if (null === \$innerItem) {
                    return \$item;
                }

                \$item->value = \$v = \$innerItem->get();
                \$item->isHit = \$innerItem->isHit();
                \$item->innerItem = \$innerItem;
                \$item->defaultLifetime = \$defaultLifetime;
                \$item->poolHash = \$poolHash;

                // Detect wrapped values that encode for their expiry and creation duration
                // For compactness, these values are packed in the key of an array using
                // magic numbers in the form 9D-..-..-..-..-00-..-..-..-5F
                if (\\is_array(\$v) && 1 === \\count(\$v) && 10 === \\strlen(\$k = key(\$v)) && \"\\x9D\" === \$k[0] && \"\\0\" === \$k[5] && \"\\x5F\" === \$k[9]) {
                    \$item->value = \$v[\$k];
                    \$v = unpack('Ve/Nc', substr(\$k, 1, -1));
                    \$item->metadata[CacheItem::METADATA_EXPIRY] = \$v['e'] + CacheItem::METADATA_EXPIRY_OFFSET;
                    \$item->metadata[CacheItem::METADATA_CTIME] = \$v['c'];
                } elseif (\$innerItem instanceof CacheItem) {
                    \$item->metadata = \$innerItem->metadata;
                }
                \$innerItem->set(null);

                return \$item;
            },
            null,
            CacheItem::class
        );
        \$this->setInnerItem = \\Closure::bind(
            /**
             * @param array \$item A CacheItem cast to (array); accessing protected properties requires adding the \"\\0*\\0\" PHP prefix
             */
            static function (CacheItemInterface \$innerItem, array \$item) {
                // Tags are stored separately, no need to account for them when considering this item's newly set metadata
                if (isset((\$metadata = \$item[\"\\0*\\0newMetadata\"])[CacheItem::METADATA_TAGS])) {
                    unset(\$metadata[CacheItem::METADATA_TAGS]);
                }
                if (\$metadata) {
                    // For compactness, expiry and creation duration are packed in the key of an array, using magic numbers as separators
                    \$item[\"\\0*\\0value\"] = [\"\\x9D\".pack('VN', (int) (0.1 + \$metadata[self::METADATA_EXPIRY] - self::METADATA_EXPIRY_OFFSET), \$metadata[self::METADATA_CTIME]).\"\\x5F\" => \$item[\"\\0*\\0value\"]];
                }
                \$innerItem->set(\$item[\"\\0*\\0value\"]);
                \$innerItem->expiresAt(null !== \$item[\"\\0*\\0expiry\"] ? \\DateTime::createFromFormat('U.u', sprintf('%.6f', \$item[\"\\0*\\0expiry\"])) : null);
            },
            null,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        if (!\$this->pool instanceof CacheInterface) {
            return \$this->doGet(\$this, \$key, \$callback, \$beta, \$metadata);
        }

        return \$this->pool->get(\$this->getId(\$key), function (\$innerItem, bool &\$save) use (\$key, \$callback) {
            \$item = (\$this->createCacheItem)(\$key, \$innerItem);
            \$item->set(\$value = \$callback(\$item, \$save));
            (\$this->setInnerItem)(\$innerItem, (array) \$item);

            return \$value;
        }, \$beta, \$metadata);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$f = \$this->createCacheItem;
        \$item = \$this->pool->getItem(\$this->getId(\$key));

        return \$f(\$key, \$item);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        if (\$this->namespaceLen) {
            foreach (\$keys as \$i => \$key) {
                \$keys[\$i] = \$this->getId(\$key);
            }
        }

        return \$this->generateItems(\$this->pool->getItems(\$keys));
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        return \$this->pool->hasItem(\$this->getId(\$key));
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        return \$this->pool->deleteItem(\$this->getId(\$key));
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        if (\$this->namespaceLen) {
            foreach (\$keys as \$i => \$key) {
                \$keys[\$i] = \$this->getId(\$key);
            }
        }

        return \$this->pool->deleteItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        return \$this->doSave(\$item, __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return \$this->doSave(\$item, __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->pool->commit();
    }

    private function doSave(CacheItemInterface \$item, \$method)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$item = (array) \$item;
        if (null === \$item[\"\\0*\\0expiry\"] && 0 < \$item[\"\\0*\\0defaultLifetime\"]) {
            \$item[\"\\0*\\0expiry\"] = microtime(true) + \$item[\"\\0*\\0defaultLifetime\"];
        }

        if (\$item[\"\\0*\\0poolHash\"] === \$this->poolHash && \$item[\"\\0*\\0innerItem\"]) {
            \$innerItem = \$item[\"\\0*\\0innerItem\"];
        } elseif (\$this->pool instanceof AdapterInterface) {
            // this is an optimization specific for AdapterInterface implementations
            // so we can save a round-trip to the backend by just creating a new item
            \$f = \$this->createCacheItem;
            \$innerItem = \$f(\$this->namespace.\$item[\"\\0*\\0key\"], null);
        } else {
            \$innerItem = \$this->pool->getItem(\$this->namespace.\$item[\"\\0*\\0key\"]);
        }

        (\$this->setInnerItem)(\$innerItem, \$item);

        return \$this->pool->\$method(\$innerItem);
    }

    private function generateItems(\$items)
    {
        \$f = \$this->createCacheItem;

        foreach (\$items as \$key => \$item) {
            if (\$this->namespaceLen) {
                \$key = substr(\$key, \$this->namespaceLen);
            }

            yield \$key => \$f(\$key, \$item);
        }
    }

    private function getId(\$key)
    {
        CacheItem::validateKey(\$key);

        return \$this->namespace.\$key;
    }
}
", "vendor/symfony/cache/Adapter/ProxyAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/ProxyAdapter.php");
    }
}
