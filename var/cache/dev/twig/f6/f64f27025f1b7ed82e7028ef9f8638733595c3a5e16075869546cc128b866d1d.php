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

/* vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php */
class __TwigTemplate_4982e32b08366b78b2cac9fa719f056d8c04ded0deb3bf506534cd4f3caab2cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TimeDataCollector extends DataCollector implements LateDataCollectorInterface
{
    protected \$kernel;
    protected \$stopwatch;

    public function __construct(KernelInterface \$kernel = null, Stopwatch \$stopwatch = null)
    {
        \$this->kernel = \$kernel;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (null !== \$this->kernel) {
            \$startTime = \$this->kernel->getStartTime();
        } else {
            \$startTime = \$request->server->get('REQUEST_TIME_FLOAT');
        }

        \$this->data = [
            'token' => \$response->headers->get('X-Debug-Token'),
            'start_time' => \$startTime * 1000,
            'events' => [],
            'stopwatch_installed' => class_exists(Stopwatch::class, false),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [];

        if (null !== \$this->stopwatch) {
            \$this->stopwatch->reset();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        if (null !== \$this->stopwatch && isset(\$this->data['token'])) {
            \$this->setEvents(\$this->stopwatch->getSectionEvents(\$this->data['token']));
        }
        unset(\$this->data['token']);
    }

    /**
     * Sets the request events.
     *
     * @param StopwatchEvent[] \$events The request events
     */
    public function setEvents(array \$events)
    {
        foreach (\$events as \$event) {
            \$event->ensureStopped();
        }

        \$this->data['events'] = \$events;
    }

    /**
     * Gets the request events.
     *
     * @return StopwatchEvent[] The request events
     */
    public function getEvents()
    {
        return \$this->data['events'];
    }

    /**
     * Gets the request elapsed time.
     *
     * @return float The elapsed time
     */
    public function getDuration()
    {
        if (!isset(\$this->data['events']['__section__'])) {
            return 0;
        }

        \$lastEvent = \$this->data['events']['__section__'];

        return \$lastEvent->getOrigin() + \$lastEvent->getDuration() - \$this->getStartTime();
    }

    /**
     * Gets the initialization time.
     *
     * This is the time spent until the beginning of the request handling.
     *
     * @return float The elapsed time
     */
    public function getInitTime()
    {
        if (!isset(\$this->data['events']['__section__'])) {
            return 0;
        }

        return \$this->data['events']['__section__']->getOrigin() - \$this->getStartTime();
    }

    /**
     * Gets the request time.
     *
     * @return float
     */
    public function getStartTime()
    {
        return \$this->data['start_time'];
    }

    /**
     * @return bool whether or not the stopwatch component is installed
     */
    public function isStopwatchInstalled()
    {
        return \$this->data['stopwatch_installed'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'time';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TimeDataCollector extends DataCollector implements LateDataCollectorInterface
{
    protected \$kernel;
    protected \$stopwatch;

    public function __construct(KernelInterface \$kernel = null, Stopwatch \$stopwatch = null)
    {
        \$this->kernel = \$kernel;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (null !== \$this->kernel) {
            \$startTime = \$this->kernel->getStartTime();
        } else {
            \$startTime = \$request->server->get('REQUEST_TIME_FLOAT');
        }

        \$this->data = [
            'token' => \$response->headers->get('X-Debug-Token'),
            'start_time' => \$startTime * 1000,
            'events' => [],
            'stopwatch_installed' => class_exists(Stopwatch::class, false),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [];

        if (null !== \$this->stopwatch) {
            \$this->stopwatch->reset();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        if (null !== \$this->stopwatch && isset(\$this->data['token'])) {
            \$this->setEvents(\$this->stopwatch->getSectionEvents(\$this->data['token']));
        }
        unset(\$this->data['token']);
    }

    /**
     * Sets the request events.
     *
     * @param StopwatchEvent[] \$events The request events
     */
    public function setEvents(array \$events)
    {
        foreach (\$events as \$event) {
            \$event->ensureStopped();
        }

        \$this->data['events'] = \$events;
    }

    /**
     * Gets the request events.
     *
     * @return StopwatchEvent[] The request events
     */
    public function getEvents()
    {
        return \$this->data['events'];
    }

    /**
     * Gets the request elapsed time.
     *
     * @return float The elapsed time
     */
    public function getDuration()
    {
        if (!isset(\$this->data['events']['__section__'])) {
            return 0;
        }

        \$lastEvent = \$this->data['events']['__section__'];

        return \$lastEvent->getOrigin() + \$lastEvent->getDuration() - \$this->getStartTime();
    }

    /**
     * Gets the initialization time.
     *
     * This is the time spent until the beginning of the request handling.
     *
     * @return float The elapsed time
     */
    public function getInitTime()
    {
        if (!isset(\$this->data['events']['__section__'])) {
            return 0;
        }

        return \$this->data['events']['__section__']->getOrigin() - \$this->getStartTime();
    }

    /**
     * Gets the request time.
     *
     * @return float
     */
    public function getStartTime()
    {
        return \$this->data['start_time'];
    }

    /**
     * @return bool whether or not the stopwatch component is installed
     */
    public function isStopwatchInstalled()
    {
        return \$this->data['stopwatch_installed'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'time';
    }
}
", "vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php");
    }
}
