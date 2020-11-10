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

/* vendor/zendframework/zend-eventmanager/src/Filter/FilterIterator.php */
class __TwigTemplate_8e866402130d0e954e9b692d14c5773f2efdf1d51bab66dfc7ac7b4a07ed173a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/Filter/FilterIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/Filter/FilterIterator.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager\\Filter;

use Zend\\EventManager\\Exception;
use Zend\\Stdlib\\FastPriorityQueue;

/**
 * Specialized priority queue implementation for use with an intercepting
 * filter chain.
 *
 * Allows removal
 */
class FilterIterator extends FastPriorityQueue
{
    /**
     * Does the queue contain a given value?
     *
     * @param  mixed \$datum
     * @return bool
     */
    public function contains(\$datum)
    {
        foreach (\$this as \$item) {
            if (\$item === \$datum) {
                return true;
            }
        }
        return false;
    }

    /**
     * Insert a value into the queue.
     *
     * Requires a callable.
     *
     * @param callable \$value
     * @param mixed \$priority
     * @return void
     * @throws Exception\\InvalidArgumentException for non-callable \$value.
     */
    public function insert(\$value, \$priority)
    {
        if (! is_callable(\$value)) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s can only aggregate callables; received %s',
                __CLASS__,
                (is_object(\$value) ? get_class(\$value) : gettype(\$value))
            ));
        }
        parent::insert(\$value, \$priority);
    }

    /**
     * Remove a value from the queue
     *
     * This is an expensive operation. It must first iterate through all values,
     * and then re-populate itself. Use only if absolutely necessary.
     *
     * @param  mixed \$datum
     * @return bool
     */
    public function remove(\$datum)
    {
        \$this->setExtractFlags(self::EXTR_BOTH);

        // Iterate and remove any matches
        \$removed = false;
        \$items   = [];
        \$this->rewind();
        while (! \$this->isEmpty()) {
            \$item = \$this->extract();
            if (\$item['data'] === \$datum) {
                \$removed = true;
                continue;
            }
            \$items[] = \$item;
        }

        // Repopulate
        foreach (\$items as \$item) {
            \$this->insert(\$item['data'], \$item['priority']);
        }

        \$this->setExtractFlags(self::EXTR_DATA);
        return \$removed;
    }

    /**
     * Iterate the next filter in the chain
     *
     * Iterates and calls the next filter in the chain.
     *
     * @param  mixed \$context
     * @param  array \$params
     * @param  FilterIterator \$chain
     * @return mixed
     */
    public function next(\$context = null, array \$params = [], \$chain = null)
    {
        if (empty(\$context) || (\$chain instanceof FilterIterator && \$chain->isEmpty())) {
            return;
        }

        //We can't extract from an empty heap
        if (\$this->isEmpty()) {
            return;
        }

        \$next = \$this->extract();
        return \$next(\$context, \$params, \$chain);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/Filter/FilterIterator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager\\Filter;

use Zend\\EventManager\\Exception;
use Zend\\Stdlib\\FastPriorityQueue;

/**
 * Specialized priority queue implementation for use with an intercepting
 * filter chain.
 *
 * Allows removal
 */
class FilterIterator extends FastPriorityQueue
{
    /**
     * Does the queue contain a given value?
     *
     * @param  mixed \$datum
     * @return bool
     */
    public function contains(\$datum)
    {
        foreach (\$this as \$item) {
            if (\$item === \$datum) {
                return true;
            }
        }
        return false;
    }

    /**
     * Insert a value into the queue.
     *
     * Requires a callable.
     *
     * @param callable \$value
     * @param mixed \$priority
     * @return void
     * @throws Exception\\InvalidArgumentException for non-callable \$value.
     */
    public function insert(\$value, \$priority)
    {
        if (! is_callable(\$value)) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s can only aggregate callables; received %s',
                __CLASS__,
                (is_object(\$value) ? get_class(\$value) : gettype(\$value))
            ));
        }
        parent::insert(\$value, \$priority);
    }

    /**
     * Remove a value from the queue
     *
     * This is an expensive operation. It must first iterate through all values,
     * and then re-populate itself. Use only if absolutely necessary.
     *
     * @param  mixed \$datum
     * @return bool
     */
    public function remove(\$datum)
    {
        \$this->setExtractFlags(self::EXTR_BOTH);

        // Iterate and remove any matches
        \$removed = false;
        \$items   = [];
        \$this->rewind();
        while (! \$this->isEmpty()) {
            \$item = \$this->extract();
            if (\$item['data'] === \$datum) {
                \$removed = true;
                continue;
            }
            \$items[] = \$item;
        }

        // Repopulate
        foreach (\$items as \$item) {
            \$this->insert(\$item['data'], \$item['priority']);
        }

        \$this->setExtractFlags(self::EXTR_DATA);
        return \$removed;
    }

    /**
     * Iterate the next filter in the chain
     *
     * Iterates and calls the next filter in the chain.
     *
     * @param  mixed \$context
     * @param  array \$params
     * @param  FilterIterator \$chain
     * @return mixed
     */
    public function next(\$context = null, array \$params = [], \$chain = null)
    {
        if (empty(\$context) || (\$chain instanceof FilterIterator && \$chain->isEmpty())) {
            return;
        }

        //We can't extract from an empty heap
        if (\$this->isEmpty()) {
            return;
        }

        \$next = \$this->extract();
        return \$next(\$context, \$params, \$chain);
    }
}
", "vendor/zendframework/zend-eventmanager/src/Filter/FilterIterator.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/Filter/FilterIterator.php");
    }
}
