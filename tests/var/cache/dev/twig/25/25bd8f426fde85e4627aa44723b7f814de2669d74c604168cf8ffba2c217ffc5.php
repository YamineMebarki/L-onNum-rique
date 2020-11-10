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

/* vendor/symfony/cache/Adapter/PhpArrayAdapter.php */
class __TwigTemplate_6ffcc281dba0207b7bfbdd7d13c0168ab9a0a122f46f42f77fa1b0cf5538f68b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/PhpArrayAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/PhpArrayAdapter.php"));

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
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Component\\Cache\\Traits\\PhpArrayTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * Caches items at warm up time using a PHP array that is stored in shared memory by OPCache since PHP 7.0.
 * Warmed up items are read-only and run-time discovered items are cached using a fallback adapter.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PhpArrayAdapter implements AdapterInterface, CacheInterface, PruneableInterface, ResettableInterface
{
    use PhpArrayTrait;
    use ContractsTrait;

    private \$createCacheItem;

    /**
     * @param string           \$file         The PHP file were values are cached
     * @param AdapterInterface \$fallbackPool A pool to fallback on when an item is not hit
     */
    public function __construct(string \$file, AdapterInterface \$fallbackPool)
    {
        \$this->file = \$file;
        \$this->pool = \$fallbackPool;
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, \$isHit) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->value = \$value;
                \$item->isHit = \$isHit;

                return \$item;
            },
            null,
            CacheItem::class
        );
    }

    /**
     * This adapter takes advantage of how PHP stores arrays in its latest versions.
     *
     * @param string                 \$file         The PHP file were values are cached
     * @param CacheItemPoolInterface \$fallbackPool Fallback when opcache is disabled
     *
     * @return CacheItemPoolInterface
     */
    public static function create(\$file, CacheItemPoolInterface \$fallbackPool)
    {
        // Shared memory is available in PHP 7.0+ with OPCache enabled
        if (filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN)) {
            if (!\$fallbackPool instanceof AdapterInterface) {
                \$fallbackPool = new ProxyAdapter(\$fallbackPool);
            }

            return new static(\$file, \$fallbackPool);
        }

        return \$fallbackPool;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        if (null === \$this->values) {
            \$this->initialize();
        }
        if (!isset(\$this->keys[\$key])) {
            get_from_pool:
            if (\$this->pool instanceof CacheInterface) {
                return \$this->pool->get(\$key, \$callback, \$beta, \$metadata);
            }

            return \$this->doGet(\$this->pool, \$key, \$callback, \$beta, \$metadata);
        }
        \$value = \$this->values[\$this->keys[\$key]];

        if ('N;' === \$value) {
            return null;
        }
        try {
            if (\$value instanceof \\Closure) {
                return \$value();
            }
        } catch (\\Throwable \$e) {
            unset(\$this->keys[\$key]);
            goto get_from_pool;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }
        if (!isset(\$this->keys[\$key])) {
            return \$this->pool->getItem(\$key);
        }

        \$value = \$this->values[\$this->keys[\$key]];
        \$isHit = true;

        if ('N;' === \$value) {
            \$value = null;
        } elseif (\$value instanceof \\Closure) {
            try {
                \$value = \$value();
            } catch (\\Throwable \$e) {
                \$value = null;
                \$isHit = false;
            }
        }

        \$f = \$this->createCacheItem;

        return \$f(\$key, \$value, \$isHit);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        foreach (\$keys as \$key) {
            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return \$this->generateItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return isset(\$this->keys[\$key]) || \$this->pool->hasItem(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$key]) && \$this->pool->deleteItem(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        \$deleted = true;
        \$fallbackKeys = [];

        foreach (\$keys as \$key) {
            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }

            if (isset(\$this->keys[\$key])) {
                \$deleted = false;
            } else {
                \$fallbackKeys[] = \$key;
            }
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        if (\$fallbackKeys) {
            \$deleted = \$this->pool->deleteItems(\$fallbackKeys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$item->getKey()]) && \$this->pool->save(\$item);
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$item->getKey()]) && \$this->pool->saveDeferred(\$item);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->pool->commit();
    }

    private function generateItems(array \$keys): \\Generator
    {
        \$f = \$this->createCacheItem;
        \$fallbackKeys = [];

        foreach (\$keys as \$key) {
            if (isset(\$this->keys[\$key])) {
                \$value = \$this->values[\$this->keys[\$key]];

                if ('N;' === \$value) {
                    yield \$key => \$f(\$key, null, true);
                } elseif (\$value instanceof \\Closure) {
                    try {
                        yield \$key => \$f(\$key, \$value(), true);
                    } catch (\\Throwable \$e) {
                        yield \$key => \$f(\$key, null, false);
                    }
                } else {
                    yield \$key => \$f(\$key, \$value, true);
                }
            } else {
                \$fallbackKeys[] = \$key;
            }
        }

        if (\$fallbackKeys) {
            yield from \$this->pool->getItems(\$fallbackKeys);
        }
    }

    /**
     * @throws \\ReflectionException When \$class is not found and is required
     *
     * @internal to be removed in Symfony 5.0
     */
    public static function throwOnRequiredClass(\$class)
    {
        \$e = new \\ReflectionException(\"Class \$class does not exist\");
        \$trace = \$e->getTrace();
        \$autoloadFrame = [
            'function' => 'spl_autoload_call',
            'args' => [\$class],
        ];
        \$i = 1 + array_search(\$autoloadFrame, \$trace, true);

        if (isset(\$trace[\$i]['function']) && !isset(\$trace[\$i]['class'])) {
            switch (\$trace[\$i]['function']) {
                case 'get_class_methods':
                case 'get_class_vars':
                case 'get_parent_class':
                case 'is_a':
                case 'is_subclass_of':
                case 'class_exists':
                case 'class_implements':
                case 'class_parents':
                case 'trait_exists':
                case 'defined':
                case 'interface_exists':
                case 'method_exists':
                case 'property_exists':
                case 'is_callable':
                    return;
            }
        }

        throw \$e;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/PhpArrayAdapter.php";
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
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ContractsTrait;
use Symfony\\Component\\Cache\\Traits\\PhpArrayTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * Caches items at warm up time using a PHP array that is stored in shared memory by OPCache since PHP 7.0.
 * Warmed up items are read-only and run-time discovered items are cached using a fallback adapter.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PhpArrayAdapter implements AdapterInterface, CacheInterface, PruneableInterface, ResettableInterface
{
    use PhpArrayTrait;
    use ContractsTrait;

    private \$createCacheItem;

    /**
     * @param string           \$file         The PHP file were values are cached
     * @param AdapterInterface \$fallbackPool A pool to fallback on when an item is not hit
     */
    public function __construct(string \$file, AdapterInterface \$fallbackPool)
    {
        \$this->file = \$file;
        \$this->pool = \$fallbackPool;
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, \$isHit) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->value = \$value;
                \$item->isHit = \$isHit;

                return \$item;
            },
            null,
            CacheItem::class
        );
    }

    /**
     * This adapter takes advantage of how PHP stores arrays in its latest versions.
     *
     * @param string                 \$file         The PHP file were values are cached
     * @param CacheItemPoolInterface \$fallbackPool Fallback when opcache is disabled
     *
     * @return CacheItemPoolInterface
     */
    public static function create(\$file, CacheItemPoolInterface \$fallbackPool)
    {
        // Shared memory is available in PHP 7.0+ with OPCache enabled
        if (filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN)) {
            if (!\$fallbackPool instanceof AdapterInterface) {
                \$fallbackPool = new ProxyAdapter(\$fallbackPool);
            }

            return new static(\$file, \$fallbackPool);
        }

        return \$fallbackPool;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        if (null === \$this->values) {
            \$this->initialize();
        }
        if (!isset(\$this->keys[\$key])) {
            get_from_pool:
            if (\$this->pool instanceof CacheInterface) {
                return \$this->pool->get(\$key, \$callback, \$beta, \$metadata);
            }

            return \$this->doGet(\$this->pool, \$key, \$callback, \$beta, \$metadata);
        }
        \$value = \$this->values[\$this->keys[\$key]];

        if ('N;' === \$value) {
            return null;
        }
        try {
            if (\$value instanceof \\Closure) {
                return \$value();
            }
        } catch (\\Throwable \$e) {
            unset(\$this->keys[\$key]);
            goto get_from_pool;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }
        if (!isset(\$this->keys[\$key])) {
            return \$this->pool->getItem(\$key);
        }

        \$value = \$this->values[\$this->keys[\$key]];
        \$isHit = true;

        if ('N;' === \$value) {
            \$value = null;
        } elseif (\$value instanceof \\Closure) {
            try {
                \$value = \$value();
            } catch (\\Throwable \$e) {
                \$value = null;
                \$isHit = false;
            }
        }

        \$f = \$this->createCacheItem;

        return \$f(\$key, \$value, \$isHit);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        foreach (\$keys as \$key) {
            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return \$this->generateItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return isset(\$this->keys[\$key]) || \$this->pool->hasItem(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$key]) && \$this->pool->deleteItem(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        \$deleted = true;
        \$fallbackKeys = [];

        foreach (\$keys as \$key) {
            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }

            if (isset(\$this->keys[\$key])) {
                \$deleted = false;
            } else {
                \$fallbackKeys[] = \$key;
            }
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        if (\$fallbackKeys) {
            \$deleted = \$this->pool->deleteItems(\$fallbackKeys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$item->getKey()]) && \$this->pool->save(\$item);
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$item->getKey()]) && \$this->pool->saveDeferred(\$item);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return \$this->pool->commit();
    }

    private function generateItems(array \$keys): \\Generator
    {
        \$f = \$this->createCacheItem;
        \$fallbackKeys = [];

        foreach (\$keys as \$key) {
            if (isset(\$this->keys[\$key])) {
                \$value = \$this->values[\$this->keys[\$key]];

                if ('N;' === \$value) {
                    yield \$key => \$f(\$key, null, true);
                } elseif (\$value instanceof \\Closure) {
                    try {
                        yield \$key => \$f(\$key, \$value(), true);
                    } catch (\\Throwable \$e) {
                        yield \$key => \$f(\$key, null, false);
                    }
                } else {
                    yield \$key => \$f(\$key, \$value, true);
                }
            } else {
                \$fallbackKeys[] = \$key;
            }
        }

        if (\$fallbackKeys) {
            yield from \$this->pool->getItems(\$fallbackKeys);
        }
    }

    /**
     * @throws \\ReflectionException When \$class is not found and is required
     *
     * @internal to be removed in Symfony 5.0
     */
    public static function throwOnRequiredClass(\$class)
    {
        \$e = new \\ReflectionException(\"Class \$class does not exist\");
        \$trace = \$e->getTrace();
        \$autoloadFrame = [
            'function' => 'spl_autoload_call',
            'args' => [\$class],
        ];
        \$i = 1 + array_search(\$autoloadFrame, \$trace, true);

        if (isset(\$trace[\$i]['function']) && !isset(\$trace[\$i]['class'])) {
            switch (\$trace[\$i]['function']) {
                case 'get_class_methods':
                case 'get_class_vars':
                case 'get_parent_class':
                case 'is_a':
                case 'is_subclass_of':
                case 'class_exists':
                case 'class_implements':
                case 'class_parents':
                case 'trait_exists':
                case 'defined':
                case 'interface_exists':
                case 'method_exists':
                case 'property_exists':
                case 'is_callable':
                    return;
            }
        }

        throw \$e;
    }
}
", "vendor/symfony/cache/Adapter/PhpArrayAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/PhpArrayAdapter.php");
    }
}
