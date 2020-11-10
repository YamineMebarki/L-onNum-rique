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

/* vendor/symfony/cache/Simple/TraceableCache.php */
class __TwigTemplate_106f495737b4127e93546e164a28f6c168778d3a457be6431b31841da57ad2e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/TraceableCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/TraceableCache.php"));

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
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', TraceableCache::class, TraceableAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use TraceableAdapter and type-hint for CacheInterface instead.
 */
class TraceableCache implements Psr16CacheInterface, PruneableInterface, ResettableInterface
{
    private \$pool;
    private \$miss;
    private \$calls = [];

    public function __construct(Psr16CacheInterface \$pool)
    {
        \$this->pool = \$pool;
        \$this->miss = new \\stdClass();
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;
        \$event = \$this->start(__FUNCTION__);
        try {
            \$value = \$this->pool->get(\$key, \$miss);
        } finally {
            \$event->end = microtime(true);
        }
        if (\$event->result[\$key] = \$miss !== \$value) {
            ++\$event->hits;
        } else {
            ++\$event->misses;
            \$value = \$default;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->has(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->delete(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->set(\$key, \$value, \$ttl);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        \$event = \$this->start(__FUNCTION__);
        \$event->result['keys'] = [];

        if (\$values instanceof \\Traversable) {
            \$values = function () use (\$values, \$event) {
                foreach (\$values as \$k => \$v) {
                    \$event->result['keys'][] = \$k;
                    yield \$k => \$v;
                }
            };
            \$values = \$values();
        } elseif (\\is_array(\$values)) {
            \$event->result['keys'] = array_keys(\$values);
        }

        try {
            return \$event->result['result'] = \$this->pool->setMultiple(\$values, \$ttl);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;
        \$event = \$this->start(__FUNCTION__);
        try {
            \$result = \$this->pool->getMultiple(\$keys, \$miss);
        } finally {
            \$event->end = microtime(true);
        }
        \$f = function () use (\$result, \$event, \$miss, \$default) {
            \$event->result = [];
            foreach (\$result as \$key => \$value) {
                if (\$event->result[\$key] = \$miss !== \$value) {
                    ++\$event->hits;
                } else {
                    ++\$event->misses;
                    \$value = \$default;
                }
                yield \$key => \$value;
            }
        };

        return \$f();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->clear();
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        \$event = \$this->start(__FUNCTION__);
        if (\$keys instanceof \\Traversable) {
            \$keys = \$event->result['keys'] = iterator_to_array(\$keys, false);
        } else {
            \$event->result['keys'] = \$keys;
        }
        try {
            return \$event->result['result'] = \$this->pool->deleteMultiple(\$keys);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        if (!\$this->pool instanceof PruneableInterface) {
            return false;
        }
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->prune();
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (!\$this->pool instanceof ResetInterface) {
            return;
        }
        \$event = \$this->start(__FUNCTION__);
        try {
            \$this->pool->reset();
        } finally {
            \$event->end = microtime(true);
        }
    }

    public function getCalls()
    {
        try {
            return \$this->calls;
        } finally {
            \$this->calls = [];
        }
    }

    private function start(\$name)
    {
        \$this->calls[] = \$event = new TraceableCacheEvent();
        \$event->name = \$name;
        \$event->start = microtime(true);

        return \$event;
    }
}

class TraceableCacheEvent
{
    public \$name;
    public \$start;
    public \$end;
    public \$result;
    public \$hits = 0;
    public \$misses = 0;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Simple/TraceableCache.php";
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
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', TraceableCache::class, TraceableAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use TraceableAdapter and type-hint for CacheInterface instead.
 */
class TraceableCache implements Psr16CacheInterface, PruneableInterface, ResettableInterface
{
    private \$pool;
    private \$miss;
    private \$calls = [];

    public function __construct(Psr16CacheInterface \$pool)
    {
        \$this->pool = \$pool;
        \$this->miss = new \\stdClass();
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;
        \$event = \$this->start(__FUNCTION__);
        try {
            \$value = \$this->pool->get(\$key, \$miss);
        } finally {
            \$event->end = microtime(true);
        }
        if (\$event->result[\$key] = \$miss !== \$value) {
            ++\$event->hits;
        } else {
            ++\$event->misses;
            \$value = \$default;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->has(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->delete(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->set(\$key, \$value, \$ttl);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        \$event = \$this->start(__FUNCTION__);
        \$event->result['keys'] = [];

        if (\$values instanceof \\Traversable) {
            \$values = function () use (\$values, \$event) {
                foreach (\$values as \$k => \$v) {
                    \$event->result['keys'][] = \$k;
                    yield \$k => \$v;
                }
            };
            \$values = \$values();
        } elseif (\\is_array(\$values)) {
            \$event->result['keys'] = array_keys(\$values);
        }

        try {
            return \$event->result['result'] = \$this->pool->setMultiple(\$values, \$ttl);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        \$miss = null !== \$default && \\is_object(\$default) ? \$default : \$this->miss;
        \$event = \$this->start(__FUNCTION__);
        try {
            \$result = \$this->pool->getMultiple(\$keys, \$miss);
        } finally {
            \$event->end = microtime(true);
        }
        \$f = function () use (\$result, \$event, \$miss, \$default) {
            \$event->result = [];
            foreach (\$result as \$key => \$value) {
                if (\$event->result[\$key] = \$miss !== \$value) {
                    ++\$event->hits;
                } else {
                    ++\$event->misses;
                    \$value = \$default;
                }
                yield \$key => \$value;
            }
        };

        return \$f();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->clear();
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        \$event = \$this->start(__FUNCTION__);
        if (\$keys instanceof \\Traversable) {
            \$keys = \$event->result['keys'] = iterator_to_array(\$keys, false);
        } else {
            \$event->result['keys'] = \$keys;
        }
        try {
            return \$event->result['result'] = \$this->pool->deleteMultiple(\$keys);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        if (!\$this->pool instanceof PruneableInterface) {
            return false;
        }
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->prune();
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (!\$this->pool instanceof ResetInterface) {
            return;
        }
        \$event = \$this->start(__FUNCTION__);
        try {
            \$this->pool->reset();
        } finally {
            \$event->end = microtime(true);
        }
    }

    public function getCalls()
    {
        try {
            return \$this->calls;
        } finally {
            \$this->calls = [];
        }
    }

    private function start(\$name)
    {
        \$this->calls[] = \$event = new TraceableCacheEvent();
        \$event->name = \$name;
        \$event->start = microtime(true);

        return \$event;
    }
}

class TraceableCacheEvent
{
    public \$name;
    public \$start;
    public \$end;
    public \$result;
    public \$hits = 0;
    public \$misses = 0;
}
", "vendor/symfony/cache/Simple/TraceableCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Simple/TraceableCache.php");
    }
}
