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

/* vendor/symfony/cache/Simple/ChainCache.php */
class __TwigTemplate_0c66d0b0f7375e37e669c6deefa92ade4634264111a10ced5a3fe33a2dc408b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/ChainCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/ChainCache.php"));

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

namespace Symfony\\Component\\Cache\\Simple;

use Psr\\SimpleCache\\CacheInterface as Psr16CacheInterface;
use Symfony\\Component\\Cache\\Adapter\\ChainAdapter;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', ChainCache::class, ChainAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * Chains several caches together.
 *
 * Cached items are fetched from the first cache having them in its data store.
 * They are saved and deleted in all caches at once.
 *
 * @deprecated since Symfony 4.3, use ChainAdapter and type-hint for CacheInterface instead.
 */
class ChainCache implements Psr16CacheInterface, PruneableInterface, ResettableInterface
{
    private \$miss;
    private \$caches = [];
    private \$defaultLifetime;
    private \$cacheCount;

    /**
     * @param Psr16CacheInterface[] \$caches          The ordered list of caches used to fetch cached items
     * @param int                   \$defaultLifetime The lifetime of items propagated from lower caches to upper ones
     */
    public function __construct(array \$caches, int \$defaultLifetime = 0)
    {
        if (!\$caches) {
            throw new InvalidArgumentException('At least one cache must be specified.');
        }

        foreach (\$caches as \$cache) {
            if (!\$cache instanceof Psr16CacheInterface) {
                throw new InvalidArgumentException(sprintf('The class \"%s\" does not implement the \"%s\" interface.', \\get_class(\$cache), Psr16CacheInterface::class));
            }
        }

        \$this->miss = new \\stdClass();
        \$this->caches = array_values(\$caches);
        \$this->cacheCount = \\count(\$this->caches);
        \$this->defaultLifetime = 0 < \$defaultLifetime ? \$defaultLifetime : null;
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;

        foreach (\$this->caches as \$i => \$cache) {
            \$value = \$cache->get(\$key, \$miss);

            if (\$miss !== \$value) {
                while (0 <= --\$i) {
                    \$this->caches[\$i]->set(\$key, \$value, \$this->defaultLifetime);
                }

                return \$value;
            }
        }

        return \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;

        return \$this->generateItems(\$this->caches[0]->getMultiple(\$keys, \$miss), 0, \$miss, \$default);
    }

    private function generateItems(\$values, \$cacheIndex, \$miss, \$default)
    {
        \$missing = [];
        \$nextCacheIndex = \$cacheIndex + 1;
        \$nextCache = isset(\$this->caches[\$nextCacheIndex]) ? \$this->caches[\$nextCacheIndex] : null;

        foreach (\$values as \$k => \$value) {
            if (\$miss !== \$value) {
                yield \$k => \$value;
            } elseif (!\$nextCache) {
                yield \$k => \$default;
            } else {
                \$missing[] = \$k;
            }
        }

        if (\$missing) {
            \$cache = \$this->caches[\$cacheIndex];
            \$values = \$this->generateItems(\$nextCache->getMultiple(\$missing, \$miss), \$nextCacheIndex, \$miss, \$default);

            foreach (\$values as \$k => \$value) {
                if (\$miss !== \$value) {
                    \$cache->set(\$k, \$value, \$this->defaultLifetime);
                    yield \$k => \$value;
                } else {
                    yield \$k => \$default;
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        foreach (\$this->caches as \$cache) {
            if (\$cache->has(\$key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$cleared = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$cleared = \$this->caches[\$i]->clear() && \$cleared;
        }

        return \$cleared;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        \$deleted = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$deleted = \$this->caches[\$i]->delete(\$key) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        if (\$keys instanceof \\Traversable) {
            \$keys = iterator_to_array(\$keys, false);
        }
        \$deleted = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$deleted = \$this->caches[\$i]->deleteMultiple(\$keys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        \$saved = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$saved = \$this->caches[\$i]->set(\$key, \$value, \$ttl) && \$saved;
        }

        return \$saved;
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        if (\$values instanceof \\Traversable) {
            \$valuesIterator = \$values;
            \$values = function () use (\$valuesIterator, &\$values) {
                \$generatedValues = [];

                foreach (\$valuesIterator as \$key => \$value) {
                    yield \$key => \$value;
                    \$generatedValues[\$key] = \$value;
                }

                \$values = \$generatedValues;
            };
            \$values = \$values();
        }
        \$saved = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$saved = \$this->caches[\$i]->setMultiple(\$values, \$ttl) && \$saved;
        }

        return \$saved;
    }

    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        \$pruned = true;

        foreach (\$this->caches as \$cache) {
            if (\$cache instanceof PruneableInterface) {
                \$pruned = \$cache->prune() && \$pruned;
            }
        }

        return \$pruned;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        foreach (\$this->caches as \$cache) {
            if (\$cache instanceof ResetInterface) {
                \$cache->reset();
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Simple/ChainCache.php";
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

namespace Symfony\\Component\\Cache\\Simple;

use Psr\\SimpleCache\\CacheInterface as Psr16CacheInterface;
use Symfony\\Component\\Cache\\Adapter\\ChainAdapter;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', ChainCache::class, ChainAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * Chains several caches together.
 *
 * Cached items are fetched from the first cache having them in its data store.
 * They are saved and deleted in all caches at once.
 *
 * @deprecated since Symfony 4.3, use ChainAdapter and type-hint for CacheInterface instead.
 */
class ChainCache implements Psr16CacheInterface, PruneableInterface, ResettableInterface
{
    private \$miss;
    private \$caches = [];
    private \$defaultLifetime;
    private \$cacheCount;

    /**
     * @param Psr16CacheInterface[] \$caches          The ordered list of caches used to fetch cached items
     * @param int                   \$defaultLifetime The lifetime of items propagated from lower caches to upper ones
     */
    public function __construct(array \$caches, int \$defaultLifetime = 0)
    {
        if (!\$caches) {
            throw new InvalidArgumentException('At least one cache must be specified.');
        }

        foreach (\$caches as \$cache) {
            if (!\$cache instanceof Psr16CacheInterface) {
                throw new InvalidArgumentException(sprintf('The class \"%s\" does not implement the \"%s\" interface.', \\get_class(\$cache), Psr16CacheInterface::class));
            }
        }

        \$this->miss = new \\stdClass();
        \$this->caches = array_values(\$caches);
        \$this->cacheCount = \\count(\$this->caches);
        \$this->defaultLifetime = 0 < \$defaultLifetime ? \$defaultLifetime : null;
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;

        foreach (\$this->caches as \$i => \$cache) {
            \$value = \$cache->get(\$key, \$miss);

            if (\$miss !== \$value) {
                while (0 <= --\$i) {
                    \$this->caches[\$i]->set(\$key, \$value, \$this->defaultLifetime);
                }

                return \$value;
            }
        }

        return \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;

        return \$this->generateItems(\$this->caches[0]->getMultiple(\$keys, \$miss), 0, \$miss, \$default);
    }

    private function generateItems(\$values, \$cacheIndex, \$miss, \$default)
    {
        \$missing = [];
        \$nextCacheIndex = \$cacheIndex + 1;
        \$nextCache = isset(\$this->caches[\$nextCacheIndex]) ? \$this->caches[\$nextCacheIndex] : null;

        foreach (\$values as \$k => \$value) {
            if (\$miss !== \$value) {
                yield \$k => \$value;
            } elseif (!\$nextCache) {
                yield \$k => \$default;
            } else {
                \$missing[] = \$k;
            }
        }

        if (\$missing) {
            \$cache = \$this->caches[\$cacheIndex];
            \$values = \$this->generateItems(\$nextCache->getMultiple(\$missing, \$miss), \$nextCacheIndex, \$miss, \$default);

            foreach (\$values as \$k => \$value) {
                if (\$miss !== \$value) {
                    \$cache->set(\$k, \$value, \$this->defaultLifetime);
                    yield \$k => \$value;
                } else {
                    yield \$k => \$default;
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        foreach (\$this->caches as \$cache) {
            if (\$cache->has(\$key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$cleared = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$cleared = \$this->caches[\$i]->clear() && \$cleared;
        }

        return \$cleared;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        \$deleted = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$deleted = \$this->caches[\$i]->delete(\$key) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        if (\$keys instanceof \\Traversable) {
            \$keys = iterator_to_array(\$keys, false);
        }
        \$deleted = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$deleted = \$this->caches[\$i]->deleteMultiple(\$keys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        \$saved = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$saved = \$this->caches[\$i]->set(\$key, \$value, \$ttl) && \$saved;
        }

        return \$saved;
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        if (\$values instanceof \\Traversable) {
            \$valuesIterator = \$values;
            \$values = function () use (\$valuesIterator, &\$values) {
                \$generatedValues = [];

                foreach (\$valuesIterator as \$key => \$value) {
                    yield \$key => \$value;
                    \$generatedValues[\$key] = \$value;
                }

                \$values = \$generatedValues;
            };
            \$values = \$values();
        }
        \$saved = true;
        \$i = \$this->cacheCount;

        while (\$i--) {
            \$saved = \$this->caches[\$i]->setMultiple(\$values, \$ttl) && \$saved;
        }

        return \$saved;
    }

    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        \$pruned = true;

        foreach (\$this->caches as \$cache) {
            if (\$cache instanceof PruneableInterface) {
                \$pruned = \$cache->prune() && \$pruned;
            }
        }

        return \$pruned;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        foreach (\$this->caches as \$cache) {
            if (\$cache instanceof ResetInterface) {
                \$cache->reset();
            }
        }
    }
}
", "vendor/symfony/cache/Simple/ChainCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Simple/ChainCache.php");
    }
}