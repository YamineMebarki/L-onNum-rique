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

/* vendor/symfony/cache/DataCollector/CacheDataCollector.php */
class __TwigTemplate_588085ebe3243347872878cf2bbc22d7f5f58376947808f0e16e740c08ea7e90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/DataCollector/CacheDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/DataCollector/CacheDataCollector.php"));

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

namespace Symfony\\Component\\Cache\\DataCollector;

use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapterEvent;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class CacheDataCollector extends DataCollector implements LateDataCollectorInterface
{
    /**
     * @var TraceableAdapter[]
     */
    private \$instances = [];

    /**
     * @param string \$name
     */
    public function addInstance(\$name, TraceableAdapter \$instance)
    {
        \$this->instances[\$name] = \$instance;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$empty = ['calls' => [], 'config' => [], 'options' => [], 'statistics' => []];
        \$this->data = ['instances' => \$empty, 'total' => \$empty];
        foreach (\$this->instances as \$name => \$instance) {
            \$this->data['instances']['calls'][\$name] = \$instance->getCalls();
        }

        \$this->data['instances']['statistics'] = \$this->calculateStatistics();
        \$this->data['total']['statistics'] = \$this->calculateTotalStatistics();
    }

    public function reset()
    {
        \$this->data = [];
        foreach (\$this->instances as \$instance) {
            \$instance->clearCalls();
        }
    }

    public function lateCollect()
    {
        \$this->data = \$this->cloneVar(\$this->data);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'cache';
    }

    /**
     * Method returns amount of logged Cache reads: \"get\" calls.
     *
     * @return array
     */
    public function getStatistics()
    {
        return \$this->data['instances']['statistics'];
    }

    /**
     * Method returns the statistic totals.
     *
     * @return array
     */
    public function getTotals()
    {
        return \$this->data['total']['statistics'];
    }

    /**
     * Method returns all logged Cache call objects.
     *
     * @return mixed
     */
    public function getCalls()
    {
        return \$this->data['instances']['calls'];
    }

    private function calculateStatistics(): array
    {
        \$statistics = [];
        foreach (\$this->data['instances']['calls'] as \$name => \$calls) {
            \$statistics[\$name] = [
                'calls' => 0,
                'time' => 0,
                'reads' => 0,
                'writes' => 0,
                'deletes' => 0,
                'hits' => 0,
                'misses' => 0,
            ];
            /** @var TraceableAdapterEvent \$call */
            foreach (\$calls as \$call) {
                ++\$statistics[\$name]['calls'];
                \$statistics[\$name]['time'] += \$call->end - \$call->start;
                if ('get' === \$call->name) {
                    ++\$statistics[\$name]['reads'];
                    if (\$call->hits) {
                        ++\$statistics[\$name]['hits'];
                    } else {
                        ++\$statistics[\$name]['misses'];
                        ++\$statistics[\$name]['writes'];
                    }
                } elseif ('getItem' === \$call->name) {
                    ++\$statistics[\$name]['reads'];
                    if (\$call->hits) {
                        ++\$statistics[\$name]['hits'];
                    } else {
                        ++\$statistics[\$name]['misses'];
                    }
                } elseif ('getItems' === \$call->name) {
                    \$statistics[\$name]['reads'] += \$call->hits + \$call->misses;
                    \$statistics[\$name]['hits'] += \$call->hits;
                    \$statistics[\$name]['misses'] += \$call->misses;
                } elseif ('hasItem' === \$call->name) {
                    ++\$statistics[\$name]['reads'];
                    if (false === \$call->result) {
                        ++\$statistics[\$name]['misses'];
                    } else {
                        ++\$statistics[\$name]['hits'];
                    }
                } elseif ('save' === \$call->name) {
                    ++\$statistics[\$name]['writes'];
                } elseif ('deleteItem' === \$call->name) {
                    ++\$statistics[\$name]['deletes'];
                }
            }
            if (\$statistics[\$name]['reads']) {
                \$statistics[\$name]['hit_read_ratio'] = round(100 * \$statistics[\$name]['hits'] / \$statistics[\$name]['reads'], 2);
            } else {
                \$statistics[\$name]['hit_read_ratio'] = null;
            }
        }

        return \$statistics;
    }

    private function calculateTotalStatistics(): array
    {
        \$statistics = \$this->getStatistics();
        \$totals = [
            'calls' => 0,
            'time' => 0,
            'reads' => 0,
            'writes' => 0,
            'deletes' => 0,
            'hits' => 0,
            'misses' => 0,
        ];
        foreach (\$statistics as \$name => \$values) {
            foreach (\$totals as \$key => \$value) {
                \$totals[\$key] += \$statistics[\$name][\$key];
            }
        }
        if (\$totals['reads']) {
            \$totals['hit_read_ratio'] = round(100 * \$totals['hits'] / \$totals['reads'], 2);
        } else {
            \$totals['hit_read_ratio'] = null;
        }

        return \$totals;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/DataCollector/CacheDataCollector.php";
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

namespace Symfony\\Component\\Cache\\DataCollector;

use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapterEvent;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class CacheDataCollector extends DataCollector implements LateDataCollectorInterface
{
    /**
     * @var TraceableAdapter[]
     */
    private \$instances = [];

    /**
     * @param string \$name
     */
    public function addInstance(\$name, TraceableAdapter \$instance)
    {
        \$this->instances[\$name] = \$instance;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$empty = ['calls' => [], 'config' => [], 'options' => [], 'statistics' => []];
        \$this->data = ['instances' => \$empty, 'total' => \$empty];
        foreach (\$this->instances as \$name => \$instance) {
            \$this->data['instances']['calls'][\$name] = \$instance->getCalls();
        }

        \$this->data['instances']['statistics'] = \$this->calculateStatistics();
        \$this->data['total']['statistics'] = \$this->calculateTotalStatistics();
    }

    public function reset()
    {
        \$this->data = [];
        foreach (\$this->instances as \$instance) {
            \$instance->clearCalls();
        }
    }

    public function lateCollect()
    {
        \$this->data = \$this->cloneVar(\$this->data);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'cache';
    }

    /**
     * Method returns amount of logged Cache reads: \"get\" calls.
     *
     * @return array
     */
    public function getStatistics()
    {
        return \$this->data['instances']['statistics'];
    }

    /**
     * Method returns the statistic totals.
     *
     * @return array
     */
    public function getTotals()
    {
        return \$this->data['total']['statistics'];
    }

    /**
     * Method returns all logged Cache call objects.
     *
     * @return mixed
     */
    public function getCalls()
    {
        return \$this->data['instances']['calls'];
    }

    private function calculateStatistics(): array
    {
        \$statistics = [];
        foreach (\$this->data['instances']['calls'] as \$name => \$calls) {
            \$statistics[\$name] = [
                'calls' => 0,
                'time' => 0,
                'reads' => 0,
                'writes' => 0,
                'deletes' => 0,
                'hits' => 0,
                'misses' => 0,
            ];
            /** @var TraceableAdapterEvent \$call */
            foreach (\$calls as \$call) {
                ++\$statistics[\$name]['calls'];
                \$statistics[\$name]['time'] += \$call->end - \$call->start;
                if ('get' === \$call->name) {
                    ++\$statistics[\$name]['reads'];
                    if (\$call->hits) {
                        ++\$statistics[\$name]['hits'];
                    } else {
                        ++\$statistics[\$name]['misses'];
                        ++\$statistics[\$name]['writes'];
                    }
                } elseif ('getItem' === \$call->name) {
                    ++\$statistics[\$name]['reads'];
                    if (\$call->hits) {
                        ++\$statistics[\$name]['hits'];
                    } else {
                        ++\$statistics[\$name]['misses'];
                    }
                } elseif ('getItems' === \$call->name) {
                    \$statistics[\$name]['reads'] += \$call->hits + \$call->misses;
                    \$statistics[\$name]['hits'] += \$call->hits;
                    \$statistics[\$name]['misses'] += \$call->misses;
                } elseif ('hasItem' === \$call->name) {
                    ++\$statistics[\$name]['reads'];
                    if (false === \$call->result) {
                        ++\$statistics[\$name]['misses'];
                    } else {
                        ++\$statistics[\$name]['hits'];
                    }
                } elseif ('save' === \$call->name) {
                    ++\$statistics[\$name]['writes'];
                } elseif ('deleteItem' === \$call->name) {
                    ++\$statistics[\$name]['deletes'];
                }
            }
            if (\$statistics[\$name]['reads']) {
                \$statistics[\$name]['hit_read_ratio'] = round(100 * \$statistics[\$name]['hits'] / \$statistics[\$name]['reads'], 2);
            } else {
                \$statistics[\$name]['hit_read_ratio'] = null;
            }
        }

        return \$statistics;
    }

    private function calculateTotalStatistics(): array
    {
        \$statistics = \$this->getStatistics();
        \$totals = [
            'calls' => 0,
            'time' => 0,
            'reads' => 0,
            'writes' => 0,
            'deletes' => 0,
            'hits' => 0,
            'misses' => 0,
        ];
        foreach (\$statistics as \$name => \$values) {
            foreach (\$totals as \$key => \$value) {
                \$totals[\$key] += \$statistics[\$name][\$key];
            }
        }
        if (\$totals['reads']) {
            \$totals['hit_read_ratio'] = round(100 * \$totals['hits'] / \$totals['reads'], 2);
        } else {
            \$totals['hit_read_ratio'] = null;
        }

        return \$totals;
    }
}
", "vendor/symfony/cache/DataCollector/CacheDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/DataCollector/CacheDataCollector.php");
    }
}
