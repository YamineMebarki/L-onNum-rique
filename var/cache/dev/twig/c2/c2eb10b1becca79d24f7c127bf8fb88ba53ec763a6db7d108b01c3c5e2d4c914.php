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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php */
class __TwigTemplate_dd9e74c7ff494f6aa6132496003ddb225c4505fa06319c17b16b75b25ca5a601 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections;

use Closure;

/**
 * Lazy collection that is backed by a concrete collection
 *
 * @psalm-template TKey of array-key
 * @psalm-template T
 * @template-implements Collection<TKey,T>
 */
abstract class AbstractLazyCollection implements Collection
{
    /**
     * The backed collection to use
     *
     * @psalm-var Collection<TKey,T>
     * @var Collection
     */
    protected \$collection;

    /** @var bool */
    protected \$initialized = false;

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        \$this->initialize();

        return \$this->collection->count();
    }

    /**
     * {@inheritDoc}
     */
    public function add(\$element)
    {
        \$this->initialize();

        return \$this->collection->add(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        \$this->initialize();
        \$this->collection->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function contains(\$element)
    {
        \$this->initialize();

        return \$this->collection->contains(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty()
    {
        \$this->initialize();

        return \$this->collection->isEmpty();
    }

    /**
     * {@inheritDoc}
     */
    public function remove(\$key)
    {
        \$this->initialize();

        return \$this->collection->remove(\$key);
    }

    /**
     * {@inheritDoc}
     */
    public function removeElement(\$element)
    {
        \$this->initialize();

        return \$this->collection->removeElement(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function containsKey(\$key)
    {
        \$this->initialize();

        return \$this->collection->containsKey(\$key);
    }

    /**
     * {@inheritDoc}
     */
    public function get(\$key)
    {
        \$this->initialize();

        return \$this->collection->get(\$key);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeys()
    {
        \$this->initialize();

        return \$this->collection->getKeys();
    }

    /**
     * {@inheritDoc}
     */
    public function getValues()
    {
        \$this->initialize();

        return \$this->collection->getValues();
    }

    /**
     * {@inheritDoc}
     */
    public function set(\$key, \$value)
    {
        \$this->initialize();
        \$this->collection->set(\$key, \$value);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        \$this->initialize();

        return \$this->collection->toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function first()
    {
        \$this->initialize();

        return \$this->collection->first();
    }

    /**
     * {@inheritDoc}
     */
    public function last()
    {
        \$this->initialize();

        return \$this->collection->last();
    }

    /**
     * {@inheritDoc}
     */
    public function key()
    {
        \$this->initialize();

        return \$this->collection->key();
    }

    /**
     * {@inheritDoc}
     */
    public function current()
    {
        \$this->initialize();

        return \$this->collection->current();
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
        \$this->initialize();

        return \$this->collection->next();
    }

    /**
     * {@inheritDoc}
     */
    public function exists(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->exists(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function filter(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->filter(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function forAll(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->forAll(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function map(Closure \$func)
    {
        \$this->initialize();

        return \$this->collection->map(\$func);
    }

    /**
     * {@inheritDoc}
     */
    public function partition(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->partition(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function indexOf(\$element)
    {
        \$this->initialize();

        return \$this->collection->indexOf(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function slice(\$offset, \$length = null)
    {
        \$this->initialize();

        return \$this->collection->slice(\$offset, \$length);
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        \$this->initialize();

        return \$this->collection->getIterator();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists(\$offset)
    {
        \$this->initialize();

        return \$this->collection->offsetExists(\$offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet(\$offset)
    {
        \$this->initialize();

        return \$this->collection->offsetGet(\$offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet(\$offset, \$value)
    {
        \$this->initialize();
        \$this->collection->offsetSet(\$offset, \$value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset(\$offset)
    {
        \$this->initialize();
        \$this->collection->offsetUnset(\$offset);
    }

    /**
     * Is the lazy collection already initialized?
     *
     * @return bool
     */
    public function isInitialized()
    {
        return \$this->initialized;
    }

    /**
     * Initialize the collection
     *
     * @return void
     */
    protected function initialize()
    {
        if (\$this->initialized) {
            return;
        }

        \$this->doInitialize();
        \$this->initialized = true;
    }

    /**
     * Do the initialization logic
     *
     * @return void
     */
    abstract protected function doInitialize();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections;

use Closure;

/**
 * Lazy collection that is backed by a concrete collection
 *
 * @psalm-template TKey of array-key
 * @psalm-template T
 * @template-implements Collection<TKey,T>
 */
abstract class AbstractLazyCollection implements Collection
{
    /**
     * The backed collection to use
     *
     * @psalm-var Collection<TKey,T>
     * @var Collection
     */
    protected \$collection;

    /** @var bool */
    protected \$initialized = false;

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        \$this->initialize();

        return \$this->collection->count();
    }

    /**
     * {@inheritDoc}
     */
    public function add(\$element)
    {
        \$this->initialize();

        return \$this->collection->add(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        \$this->initialize();
        \$this->collection->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function contains(\$element)
    {
        \$this->initialize();

        return \$this->collection->contains(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty()
    {
        \$this->initialize();

        return \$this->collection->isEmpty();
    }

    /**
     * {@inheritDoc}
     */
    public function remove(\$key)
    {
        \$this->initialize();

        return \$this->collection->remove(\$key);
    }

    /**
     * {@inheritDoc}
     */
    public function removeElement(\$element)
    {
        \$this->initialize();

        return \$this->collection->removeElement(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function containsKey(\$key)
    {
        \$this->initialize();

        return \$this->collection->containsKey(\$key);
    }

    /**
     * {@inheritDoc}
     */
    public function get(\$key)
    {
        \$this->initialize();

        return \$this->collection->get(\$key);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeys()
    {
        \$this->initialize();

        return \$this->collection->getKeys();
    }

    /**
     * {@inheritDoc}
     */
    public function getValues()
    {
        \$this->initialize();

        return \$this->collection->getValues();
    }

    /**
     * {@inheritDoc}
     */
    public function set(\$key, \$value)
    {
        \$this->initialize();
        \$this->collection->set(\$key, \$value);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        \$this->initialize();

        return \$this->collection->toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function first()
    {
        \$this->initialize();

        return \$this->collection->first();
    }

    /**
     * {@inheritDoc}
     */
    public function last()
    {
        \$this->initialize();

        return \$this->collection->last();
    }

    /**
     * {@inheritDoc}
     */
    public function key()
    {
        \$this->initialize();

        return \$this->collection->key();
    }

    /**
     * {@inheritDoc}
     */
    public function current()
    {
        \$this->initialize();

        return \$this->collection->current();
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
        \$this->initialize();

        return \$this->collection->next();
    }

    /**
     * {@inheritDoc}
     */
    public function exists(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->exists(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function filter(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->filter(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function forAll(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->forAll(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function map(Closure \$func)
    {
        \$this->initialize();

        return \$this->collection->map(\$func);
    }

    /**
     * {@inheritDoc}
     */
    public function partition(Closure \$p)
    {
        \$this->initialize();

        return \$this->collection->partition(\$p);
    }

    /**
     * {@inheritDoc}
     */
    public function indexOf(\$element)
    {
        \$this->initialize();

        return \$this->collection->indexOf(\$element);
    }

    /**
     * {@inheritDoc}
     */
    public function slice(\$offset, \$length = null)
    {
        \$this->initialize();

        return \$this->collection->slice(\$offset, \$length);
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        \$this->initialize();

        return \$this->collection->getIterator();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists(\$offset)
    {
        \$this->initialize();

        return \$this->collection->offsetExists(\$offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet(\$offset)
    {
        \$this->initialize();

        return \$this->collection->offsetGet(\$offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet(\$offset, \$value)
    {
        \$this->initialize();
        \$this->collection->offsetSet(\$offset, \$value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset(\$offset)
    {
        \$this->initialize();
        \$this->collection->offsetUnset(\$offset);
    }

    /**
     * Is the lazy collection already initialized?
     *
     * @return bool
     */
    public function isInitialized()
    {
        return \$this->initialized;
    }

    /**
     * Initialize the collection
     *
     * @return void
     */
    protected function initialize()
    {
        if (\$this->initialized) {
            return;
        }

        \$this->doInitialize();
        \$this->initialized = true;
    }

    /**
     * Do the initialization logic
     *
     * @return void
     */
    abstract protected function doInitialize();
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php");
    }
}
