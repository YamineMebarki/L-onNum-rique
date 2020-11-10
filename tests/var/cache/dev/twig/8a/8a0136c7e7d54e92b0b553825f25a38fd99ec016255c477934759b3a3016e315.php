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

/* vendor/symfony/cache/Simple/PhpArrayCache.php */
class __TwigTemplate_7432c8beb2845fed4e28e2721ac4e1a3144be05dfc1f68a703e898567abdf96e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/PhpArrayCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/PhpArrayCache.php"));

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
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\PhpArrayTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', PhpArrayCache::class, PhpArrayAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use PhpArrayAdapter and type-hint for CacheInterface instead.
 */
class PhpArrayCache implements Psr16CacheInterface, PruneableInterface, ResettableInterface
{
    use PhpArrayTrait;

    /**
     * @param string              \$file         The PHP file were values are cached
     * @param Psr16CacheInterface \$fallbackPool A pool to fallback on when an item is not hit
     */
    public function __construct(string \$file, Psr16CacheInterface \$fallbackPool)
    {
        \$this->file = \$file;
        \$this->pool = \$fallbackPool;
    }

    /**
     * This adapter takes advantage of how PHP stores arrays in its latest versions.
     *
     * @param string \$file The PHP file were values are cached
     *
     * @return Psr16CacheInterface
     */
    public static function create(\$file, Psr16CacheInterface \$fallbackPool)
    {
        // Shared memory is available in PHP 7.0+ with OPCache enabled
        if (filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN)) {
            return new static(\$file, \$fallbackPool);
        }

        return \$fallbackPool;
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }
        if (!isset(\$this->keys[\$key])) {
            return \$this->pool->get(\$key, \$default);
        }
        \$value = \$this->values[\$this->keys[\$key]];

        if ('N;' === \$value) {
            return null;
        }
        if (\$value instanceof \\Closure) {
            try {
                return \$value();
            } catch (\\Throwable \$e) {
                return \$default;
            }
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        if (\$keys instanceof \\Traversable) {
            \$keys = iterator_to_array(\$keys, false);
        } elseif (!\\is_array(\$keys)) {
            throw new InvalidArgumentException(sprintf('Cache keys must be array or Traversable, \"%s\" given', \\is_object(\$keys) ? \\get_class(\$keys) : \\gettype(\$keys)));
        }
        foreach (\$keys as \$key) {
            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return \$this->generateItems(\$keys, \$default);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return isset(\$this->keys[\$key]) || \$this->pool->has(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$key]) && \$this->pool->delete(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        if (!\\is_array(\$keys) && !\$keys instanceof \\Traversable) {
            throw new InvalidArgumentException(sprintf('Cache keys must be array or Traversable, \"%s\" given', \\is_object(\$keys) ? \\get_class(\$keys) : \\gettype(\$keys)));
        }

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
            \$deleted = \$this->pool->deleteMultiple(\$fallbackKeys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$key]) && \$this->pool->set(\$key, \$value, \$ttl);
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        if (!\\is_array(\$values) && !\$values instanceof \\Traversable) {
            throw new InvalidArgumentException(sprintf('Cache values must be array or Traversable, \"%s\" given', \\is_object(\$values) ? \\get_class(\$values) : \\gettype(\$values)));
        }

        \$saved = true;
        \$fallbackValues = [];

        foreach (\$values as \$key => \$value) {
            if (!\\is_string(\$key) && !\\is_int(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }

            if (isset(\$this->keys[\$key])) {
                \$saved = false;
            } else {
                \$fallbackValues[\$key] = \$value;
            }
        }

        if (\$fallbackValues) {
            \$saved = \$this->pool->setMultiple(\$fallbackValues, \$ttl) && \$saved;
        }

        return \$saved;
    }

    private function generateItems(array \$keys, \$default)
    {
        \$fallbackKeys = [];

        foreach (\$keys as \$key) {
            if (isset(\$this->keys[\$key])) {
                \$value = \$this->values[\$this->keys[\$key]];

                if ('N;' === \$value) {
                    yield \$key => null;
                } elseif (\$value instanceof \\Closure) {
                    try {
                        yield \$key => \$value();
                    } catch (\\Throwable \$e) {
                        yield \$key => \$default;
                    }
                } else {
                    yield \$key => \$value;
                }
            } else {
                \$fallbackKeys[] = \$key;
            }
        }

        if (\$fallbackKeys) {
            yield from \$this->pool->getMultiple(\$fallbackKeys, \$default);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Simple/PhpArrayCache.php";
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
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\PhpArrayTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', PhpArrayCache::class, PhpArrayAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use PhpArrayAdapter and type-hint for CacheInterface instead.
 */
class PhpArrayCache implements Psr16CacheInterface, PruneableInterface, ResettableInterface
{
    use PhpArrayTrait;

    /**
     * @param string              \$file         The PHP file were values are cached
     * @param Psr16CacheInterface \$fallbackPool A pool to fallback on when an item is not hit
     */
    public function __construct(string \$file, Psr16CacheInterface \$fallbackPool)
    {
        \$this->file = \$file;
        \$this->pool = \$fallbackPool;
    }

    /**
     * This adapter takes advantage of how PHP stores arrays in its latest versions.
     *
     * @param string \$file The PHP file were values are cached
     *
     * @return Psr16CacheInterface
     */
    public static function create(\$file, Psr16CacheInterface \$fallbackPool)
    {
        // Shared memory is available in PHP 7.0+ with OPCache enabled
        if (filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN)) {
            return new static(\$file, \$fallbackPool);
        }

        return \$fallbackPool;
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }
        if (!isset(\$this->keys[\$key])) {
            return \$this->pool->get(\$key, \$default);
        }
        \$value = \$this->values[\$this->keys[\$key]];

        if ('N;' === \$value) {
            return null;
        }
        if (\$value instanceof \\Closure) {
            try {
                return \$value();
            } catch (\\Throwable \$e) {
                return \$default;
            }
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        if (\$keys instanceof \\Traversable) {
            \$keys = iterator_to_array(\$keys, false);
        } elseif (!\\is_array(\$keys)) {
            throw new InvalidArgumentException(sprintf('Cache keys must be array or Traversable, \"%s\" given', \\is_object(\$keys) ? \\get_class(\$keys) : \\gettype(\$keys)));
        }
        foreach (\$keys as \$key) {
            if (!\\is_string(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return \$this->generateItems(\$keys, \$default);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return isset(\$this->keys[\$key]) || \$this->pool->has(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$key]) && \$this->pool->delete(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        if (!\\is_array(\$keys) && !\$keys instanceof \\Traversable) {
            throw new InvalidArgumentException(sprintf('Cache keys must be array or Traversable, \"%s\" given', \\is_object(\$keys) ? \\get_class(\$keys) : \\gettype(\$keys)));
        }

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
            \$deleted = \$this->pool->deleteMultiple(\$fallbackKeys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        if (!\\is_string(\$key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
        }
        if (null === \$this->values) {
            \$this->initialize();
        }

        return !isset(\$this->keys[\$key]) && \$this->pool->set(\$key, \$value, \$ttl);
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        if (!\\is_array(\$values) && !\$values instanceof \\Traversable) {
            throw new InvalidArgumentException(sprintf('Cache values must be array or Traversable, \"%s\" given', \\is_object(\$values) ? \\get_class(\$values) : \\gettype(\$values)));
        }

        \$saved = true;
        \$fallbackValues = [];

        foreach (\$values as \$key => \$value) {
            if (!\\is_string(\$key) && !\\is_int(\$key)) {
                throw new InvalidArgumentException(sprintf('Cache key must be string, \"%s\" given.', \\is_object(\$key) ? \\get_class(\$key) : \\gettype(\$key)));
            }

            if (isset(\$this->keys[\$key])) {
                \$saved = false;
            } else {
                \$fallbackValues[\$key] = \$value;
            }
        }

        if (\$fallbackValues) {
            \$saved = \$this->pool->setMultiple(\$fallbackValues, \$ttl) && \$saved;
        }

        return \$saved;
    }

    private function generateItems(array \$keys, \$default)
    {
        \$fallbackKeys = [];

        foreach (\$keys as \$key) {
            if (isset(\$this->keys[\$key])) {
                \$value = \$this->values[\$this->keys[\$key]];

                if ('N;' === \$value) {
                    yield \$key => null;
                } elseif (\$value instanceof \\Closure) {
                    try {
                        yield \$key => \$value();
                    } catch (\\Throwable \$e) {
                        yield \$key => \$default;
                    }
                } else {
                    yield \$key => \$value;
                }
            } else {
                \$fallbackKeys[] = \$key;
            }
        }

        if (\$fallbackKeys) {
            yield from \$this->pool->getMultiple(\$fallbackKeys, \$default);
        }
    }
}
", "vendor/symfony/cache/Simple/PhpArrayCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Simple/PhpArrayCache.php");
    }
}
