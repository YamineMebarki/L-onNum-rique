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

/* vendor/symfony/cache/Adapter/ArrayAdapter.php */
class __TwigTemplate_7acaa3918eddc4b24f4ebdb4072f84ab424d76352383fdfe133609c49e60f7c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/ArrayAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/ArrayAdapter.php"));

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
use Psr\\Log\\LoggerAwareInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ArrayTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ArrayAdapter implements AdapterInterface, CacheInterface, LoggerAwareInterface, ResettableInterface
{
    use ArrayTrait;

    private \$createCacheItem;

    /**
     * @param bool \$storeSerialized Disabling serialization can lead to cache corruptions when storing mutable values but increases performance otherwise
     */
    public function __construct(int \$defaultLifetime = 0, bool \$storeSerialized = true)
    {
        \$this->storeSerialized = \$storeSerialized;
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, \$isHit) use (\$defaultLifetime) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->value = \$value;
                \$item->isHit = \$isHit;
                \$item->defaultLifetime = \$defaultLifetime;

                return \$item;
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
        \$item = \$this->getItem(\$key);
        \$metadata = \$item->getMetadata();

        // ArrayAdapter works in memory, we don't care about stampede protection
        if (INF === \$beta || !\$item->isHit()) {
            \$save = true;
            \$this->save(\$item->set(\$callback(\$item, \$save)));
        }

        return \$item->get();
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        if (!\$isHit = \$this->hasItem(\$key)) {
            \$this->values[\$key] = \$value = null;
        } else {
            \$value = \$this->storeSerialized ? \$this->unfreeze(\$key, \$isHit) : \$this->values[\$key];
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
            if (!\\is_string(\$key) || !isset(\$this->expiries[\$key])) {
                CacheItem::validateKey(\$key);
            }
        }

        return \$this->generateItems(\$keys, microtime(true), \$this->createCacheItem);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        foreach (\$keys as \$key) {
            \$this->deleteItem(\$key);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$item = (array) \$item;
        \$key = \$item[\"\\0*\\0key\"];
        \$value = \$item[\"\\0*\\0value\"];
        \$expiry = \$item[\"\\0*\\0expiry\"];

        if (null !== \$expiry && \$expiry <= microtime(true)) {
            \$this->deleteItem(\$key);

            return true;
        }
        if (\$this->storeSerialized && null === \$value = \$this->freeze(\$value, \$key)) {
            return false;
        }
        if (null === \$expiry && 0 < \$item[\"\\0*\\0defaultLifetime\"]) {
            \$expiry = microtime(true) + \$item[\"\\0*\\0defaultLifetime\"];
        }

        \$this->values[\$key] = \$value;
        \$this->expiries[\$key] = null !== \$expiry ? \$expiry : PHP_INT_MAX;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return \$this->save(\$item);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/ArrayAdapter.php";
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
use Psr\\Log\\LoggerAwareInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ArrayTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ArrayAdapter implements AdapterInterface, CacheInterface, LoggerAwareInterface, ResettableInterface
{
    use ArrayTrait;

    private \$createCacheItem;

    /**
     * @param bool \$storeSerialized Disabling serialization can lead to cache corruptions when storing mutable values but increases performance otherwise
     */
    public function __construct(int \$defaultLifetime = 0, bool \$storeSerialized = true)
    {
        \$this->storeSerialized = \$storeSerialized;
        \$this->createCacheItem = \\Closure::bind(
            static function (\$key, \$value, \$isHit) use (\$defaultLifetime) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->value = \$value;
                \$item->isHit = \$isHit;
                \$item->defaultLifetime = \$defaultLifetime;

                return \$item;
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
        \$item = \$this->getItem(\$key);
        \$metadata = \$item->getMetadata();

        // ArrayAdapter works in memory, we don't care about stampede protection
        if (INF === \$beta || !\$item->isHit()) {
            \$save = true;
            \$this->save(\$item->set(\$callback(\$item, \$save)));
        }

        return \$item->get();
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        if (!\$isHit = \$this->hasItem(\$key)) {
            \$this->values[\$key] = \$value = null;
        } else {
            \$value = \$this->storeSerialized ? \$this->unfreeze(\$key, \$isHit) : \$this->values[\$key];
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
            if (!\\is_string(\$key) || !isset(\$this->expiries[\$key])) {
                CacheItem::validateKey(\$key);
            }
        }

        return \$this->generateItems(\$keys, microtime(true), \$this->createCacheItem);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        foreach (\$keys as \$key) {
            \$this->deleteItem(\$key);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$item = (array) \$item;
        \$key = \$item[\"\\0*\\0key\"];
        \$value = \$item[\"\\0*\\0value\"];
        \$expiry = \$item[\"\\0*\\0expiry\"];

        if (null !== \$expiry && \$expiry <= microtime(true)) {
            \$this->deleteItem(\$key);

            return true;
        }
        if (\$this->storeSerialized && null === \$value = \$this->freeze(\$value, \$key)) {
            return false;
        }
        if (null === \$expiry && 0 < \$item[\"\\0*\\0defaultLifetime\"]) {
            \$expiry = microtime(true) + \$item[\"\\0*\\0defaultLifetime\"];
        }

        \$this->values[\$key] = \$value;
        \$this->expiries[\$key] = null !== \$expiry ? \$expiry : PHP_INT_MAX;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return \$this->save(\$item);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }
}
", "vendor/symfony/cache/Adapter/ArrayAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/ArrayAdapter.php");
    }
}
