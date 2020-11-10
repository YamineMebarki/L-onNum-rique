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

/* vendor/symfony/cache/Adapter/TraceableAdapter.php */
class __TwigTemplate_c8923093f3e440e10efb7885043f0f3bd11b9914dd1f91d8dad6b24082696ab9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/TraceableAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/TraceableAdapter.php"));

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
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * An adapter that collects data about all cache calls.
 *
 * @author Aaron Scherer <aequasi@gmail.com>
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TraceableAdapter implements AdapterInterface, CacheInterface, PruneableInterface, ResettableInterface
{
    protected \$pool;
    private \$calls = [];

    public function __construct(AdapterInterface \$pool)
    {
        \$this->pool = \$pool;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        if (!\$this->pool instanceof CacheInterface) {
            throw new \\BadMethodCallException(sprintf('Cannot call \"%s::get()\": this class doesn\\'t implement \"%s\".', \\get_class(\$this->pool), CacheInterface::class));
        }

        \$isHit = true;
        \$callback = function (CacheItem \$item, bool &\$save) use (\$callback, &\$isHit) {
            \$isHit = \$item->isHit();

            return \$callback(\$item, \$save);
        };

        \$event = \$this->start(__FUNCTION__);
        try {
            \$value = \$this->pool->get(\$key, \$callback, \$beta, \$metadata);
            \$event->result[\$key] = \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value);
        } finally {
            \$event->end = microtime(true);
        }
        if (\$isHit) {
            ++\$event->hits;
        } else {
            ++\$event->misses;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            \$item = \$this->pool->getItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
        if (\$event->result[\$key] = \$item->isHit()) {
            ++\$event->hits;
        } else {
            ++\$event->misses;
        }

        return \$item;
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->hasItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->deleteItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$item->getKey()] = \$this->pool->save(\$item);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$item->getKey()] = \$this->pool->saveDeferred(\$item);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            \$result = \$this->pool->getItems(\$keys);
        } finally {
            \$event->end = microtime(true);
        }
        \$f = function () use (\$result, \$event) {
            \$event->result = [];
            foreach (\$result as \$key => \$item) {
                if (\$event->result[\$key] = \$item->isHit()) {
                    ++\$event->hits;
                } else {
                    ++\$event->misses;
                }
                yield \$key => \$item;
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
    public function deleteItems(array \$keys)
    {
        \$event = \$this->start(__FUNCTION__);
        \$event->result['keys'] = \$keys;
        try {
            return \$event->result['result'] = \$this->pool->deleteItems(\$keys);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->commit();
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

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->deleteItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    public function getCalls()
    {
        return \$this->calls;
    }

    public function clearCalls()
    {
        \$this->calls = [];
    }

    protected function start(\$name)
    {
        \$this->calls[] = \$event = new TraceableAdapterEvent();
        \$event->name = \$name;
        \$event->start = microtime(true);

        return \$event;
    }
}

class TraceableAdapterEvent
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
        return "vendor/symfony/cache/Adapter/TraceableAdapter.php";
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
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * An adapter that collects data about all cache calls.
 *
 * @author Aaron Scherer <aequasi@gmail.com>
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TraceableAdapter implements AdapterInterface, CacheInterface, PruneableInterface, ResettableInterface
{
    protected \$pool;
    private \$calls = [];

    public function __construct(AdapterInterface \$pool)
    {
        \$this->pool = \$pool;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        if (!\$this->pool instanceof CacheInterface) {
            throw new \\BadMethodCallException(sprintf('Cannot call \"%s::get()\": this class doesn\\'t implement \"%s\".', \\get_class(\$this->pool), CacheInterface::class));
        }

        \$isHit = true;
        \$callback = function (CacheItem \$item, bool &\$save) use (\$callback, &\$isHit) {
            \$isHit = \$item->isHit();

            return \$callback(\$item, \$save);
        };

        \$event = \$this->start(__FUNCTION__);
        try {
            \$value = \$this->pool->get(\$key, \$callback, \$beta, \$metadata);
            \$event->result[\$key] = \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value);
        } finally {
            \$event->end = microtime(true);
        }
        if (\$isHit) {
            ++\$event->hits;
        } else {
            ++\$event->misses;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            \$item = \$this->pool->getItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
        if (\$event->result[\$key] = \$item->isHit()) {
            ++\$event->hits;
        } else {
            ++\$event->misses;
        }

        return \$item;
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->hasItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->deleteItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$item->getKey()] = \$this->pool->save(\$item);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$item->getKey()] = \$this->pool->saveDeferred(\$item);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            \$result = \$this->pool->getItems(\$keys);
        } finally {
            \$event->end = microtime(true);
        }
        \$f = function () use (\$result, \$event) {
            \$event->result = [];
            foreach (\$result as \$key => \$item) {
                if (\$event->result[\$key] = \$item->isHit()) {
                    ++\$event->hits;
                } else {
                    ++\$event->misses;
                }
                yield \$key => \$item;
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
    public function deleteItems(array \$keys)
    {
        \$event = \$this->start(__FUNCTION__);
        \$event->result['keys'] = \$keys;
        try {
            return \$event->result['result'] = \$this->pool->deleteItems(\$keys);
        } finally {
            \$event->end = microtime(true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->commit();
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

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result[\$key] = \$this->pool->deleteItem(\$key);
        } finally {
            \$event->end = microtime(true);
        }
    }

    public function getCalls()
    {
        return \$this->calls;
    }

    public function clearCalls()
    {
        \$this->calls = [];
    }

    protected function start(\$name)
    {
        \$this->calls[] = \$event = new TraceableAdapterEvent();
        \$event->name = \$name;
        \$event->start = microtime(true);

        return \$event;
    }
}

class TraceableAdapterEvent
{
    public \$name;
    public \$start;
    public \$end;
    public \$result;
    public \$hits = 0;
    public \$misses = 0;
}
", "vendor/symfony/cache/Adapter/TraceableAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/TraceableAdapter.php");
    }
}
