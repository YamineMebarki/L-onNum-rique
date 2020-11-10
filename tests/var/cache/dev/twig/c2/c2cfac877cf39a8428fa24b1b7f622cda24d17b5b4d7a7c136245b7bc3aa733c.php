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

/* vendor/symfony/stopwatch/Section.php */
class __TwigTemplate_1c8dba18e5c2d3feed4bd4dca8bb03d06a07eb120e5d7cdfcb81c56718f6ce8f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Section.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Section.php"));

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

namespace Symfony\\Component\\Stopwatch;

/**
 * Stopwatch section.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Section
{
    /**
     * @var StopwatchEvent[]
     */
    private \$events = [];

    /**
     * @var float|null
     */
    private \$origin;

    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var string
     */
    private \$id;

    /**
     * @var Section[]
     */
    private \$children = [];

    /**
     * @param float|null \$origin        Set the origin of the events in this section, use null to set their origin to their start time
     * @param bool       \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(float \$origin = null, bool \$morePrecision = false)
    {
        \$this->origin = \$origin;
        \$this->morePrecision = \$morePrecision;
    }

    /**
     * Returns the child section.
     *
     * @param string \$id The child section identifier
     *
     * @return self|null The child section or null when none found
     */
    public function get(\$id)
    {
        foreach (\$this->children as \$child) {
            if (\$id === \$child->getId()) {
                return \$child;
            }
        }

        return null;
    }

    /**
     * Creates or re-opens a child section.
     *
     * @param string|null \$id Null to create a new section, the identifier to re-open an existing one
     *
     * @return self
     */
    public function open(\$id)
    {
        if (null === \$session = \$this->get(\$id)) {
            \$session = \$this->children[] = new self(microtime(true) * 1000, \$this->morePrecision);
        }

        return \$session;
    }

    /**
     * @return string The identifier of the section
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Sets the session identifier.
     *
     * @param string \$id The session identifier
     *
     * @return \$this
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Starts an event.
     *
     * @param string      \$name     The event name
     * @param string|null \$category The event category
     *
     * @return StopwatchEvent The event
     */
    public function startEvent(\$name, \$category)
    {
        if (!isset(\$this->events[\$name])) {
            \$this->events[\$name] = new StopwatchEvent(\$this->origin ?: microtime(true) * 1000, \$category, \$this->morePrecision);
        }

        return \$this->events[\$name]->start();
    }

    /**
     * Checks if the event was started.
     *
     * @param string \$name The event name
     *
     * @return bool
     */
    public function isEventStarted(\$name)
    {
        return isset(\$this->events[\$name]) && \$this->events[\$name]->isStarted();
    }

    /**
     * Stops an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function stopEvent(\$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not started.', \$name));
        }

        return \$this->events[\$name]->stop();
    }

    /**
     * Stops then restarts an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function lap(\$name)
    {
        return \$this->stopEvent(\$name)->start();
    }

    /**
     * Returns a specific event by name.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event is not known
     */
    public function getEvent(\$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not known.', \$name));
        }

        return \$this->events[\$name];
    }

    /**
     * Returns the events from this section.
     *
     * @return StopwatchEvent[] An array of StopwatchEvent instances
     */
    public function getEvents()
    {
        return \$this->events;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/stopwatch/Section.php";
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

namespace Symfony\\Component\\Stopwatch;

/**
 * Stopwatch section.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Section
{
    /**
     * @var StopwatchEvent[]
     */
    private \$events = [];

    /**
     * @var float|null
     */
    private \$origin;

    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var string
     */
    private \$id;

    /**
     * @var Section[]
     */
    private \$children = [];

    /**
     * @param float|null \$origin        Set the origin of the events in this section, use null to set their origin to their start time
     * @param bool       \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(float \$origin = null, bool \$morePrecision = false)
    {
        \$this->origin = \$origin;
        \$this->morePrecision = \$morePrecision;
    }

    /**
     * Returns the child section.
     *
     * @param string \$id The child section identifier
     *
     * @return self|null The child section or null when none found
     */
    public function get(\$id)
    {
        foreach (\$this->children as \$child) {
            if (\$id === \$child->getId()) {
                return \$child;
            }
        }

        return null;
    }

    /**
     * Creates or re-opens a child section.
     *
     * @param string|null \$id Null to create a new section, the identifier to re-open an existing one
     *
     * @return self
     */
    public function open(\$id)
    {
        if (null === \$session = \$this->get(\$id)) {
            \$session = \$this->children[] = new self(microtime(true) * 1000, \$this->morePrecision);
        }

        return \$session;
    }

    /**
     * @return string The identifier of the section
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Sets the session identifier.
     *
     * @param string \$id The session identifier
     *
     * @return \$this
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Starts an event.
     *
     * @param string      \$name     The event name
     * @param string|null \$category The event category
     *
     * @return StopwatchEvent The event
     */
    public function startEvent(\$name, \$category)
    {
        if (!isset(\$this->events[\$name])) {
            \$this->events[\$name] = new StopwatchEvent(\$this->origin ?: microtime(true) * 1000, \$category, \$this->morePrecision);
        }

        return \$this->events[\$name]->start();
    }

    /**
     * Checks if the event was started.
     *
     * @param string \$name The event name
     *
     * @return bool
     */
    public function isEventStarted(\$name)
    {
        return isset(\$this->events[\$name]) && \$this->events[\$name]->isStarted();
    }

    /**
     * Stops an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function stopEvent(\$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not started.', \$name));
        }

        return \$this->events[\$name]->stop();
    }

    /**
     * Stops then restarts an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function lap(\$name)
    {
        return \$this->stopEvent(\$name)->start();
    }

    /**
     * Returns a specific event by name.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event is not known
     */
    public function getEvent(\$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not known.', \$name));
        }

        return \$this->events[\$name];
    }

    /**
     * Returns the events from this section.
     *
     * @return StopwatchEvent[] An array of StopwatchEvent instances
     */
    public function getEvents()
    {
        return \$this->events;
    }
}
", "vendor/symfony/stopwatch/Section.php", "/var/www/public/DevLaon/templates/vendor/symfony/stopwatch/Section.php");
    }
}
