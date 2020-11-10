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

/* vendor/symfony/stopwatch/Stopwatch.php */
class __TwigTemplate_9c730ae838e399512beda3fb0a1563ee788fb577a3efe600ceb7ccf990abc434 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Stopwatch.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/Stopwatch.php"));

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

use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Stopwatch provides a way to profile code.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Stopwatch implements ResetInterface
{
    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var Section[]
     */
    private \$sections;

    /**
     * @var Section[]
     */
    private \$activeSections;

    /**
     * @param bool \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(bool \$morePrecision = false)
    {
        \$this->morePrecision = \$morePrecision;
        \$this->reset();
    }

    /**
     * @return Section[]
     */
    public function getSections()
    {
        return \$this->sections;
    }

    /**
     * Creates a new section or re-opens an existing section.
     *
     * @param string|null \$id The id of the session to re-open, null to create a new one
     *
     * @throws \\LogicException When the section to re-open is not reachable
     */
    public function openSection(\$id = null)
    {
        \$current = end(\$this->activeSections);

        if (null !== \$id && null === \$current->get(\$id)) {
            throw new \\LogicException(sprintf('The section \"%s\" has been started at an other level and can not be opened.', \$id));
        }

        \$this->start('__section__.child', 'section');
        \$this->activeSections[] = \$current->open(\$id);
        \$this->start('__section__');
    }

    /**
     * Stops the last started section.
     *
     * The id parameter is used to retrieve the events from this section.
     *
     * @see getSectionEvents()
     *
     * @param string \$id The identifier of the section
     *
     * @throws \\LogicException When there's no started section to be stopped
     */
    public function stopSection(\$id)
    {
        \$this->stop('__section__');

        if (1 == \\count(\$this->activeSections)) {
            throw new \\LogicException('There is no started section to stop.');
        }

        \$this->sections[\$id] = array_pop(\$this->activeSections)->setId(\$id);
        \$this->stop('__section__.child');
    }

    /**
     * Starts an event.
     *
     * @param string      \$name     The event name
     * @param string|null \$category The event category
     *
     * @return StopwatchEvent
     */
    public function start(\$name, \$category = null)
    {
        return end(\$this->activeSections)->startEvent(\$name, \$category);
    }

    /**
     * Checks if the event was started.
     *
     * @param string \$name The event name
     *
     * @return bool
     */
    public function isStarted(\$name)
    {
        return end(\$this->activeSections)->isEventStarted(\$name);
    }

    /**
     * Stops an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent
     */
    public function stop(\$name)
    {
        return end(\$this->activeSections)->stopEvent(\$name);
    }

    /**
     * Stops then restarts an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent
     */
    public function lap(\$name)
    {
        return end(\$this->activeSections)->stopEvent(\$name)->start();
    }

    /**
     * Returns a specific event by name.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent
     */
    public function getEvent(\$name)
    {
        return end(\$this->activeSections)->getEvent(\$name);
    }

    /**
     * Gets all events for a given section.
     *
     * @param string \$id A section identifier
     *
     * @return StopwatchEvent[]
     */
    public function getSectionEvents(\$id)
    {
        return isset(\$this->sections[\$id]) ? \$this->sections[\$id]->getEvents() : [];
    }

    /**
     * Resets the stopwatch to its original state.
     */
    public function reset()
    {
        \$this->sections = \$this->activeSections = ['__root__' => new Section(null, \$this->morePrecision)];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/stopwatch/Stopwatch.php";
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

use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Stopwatch provides a way to profile code.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Stopwatch implements ResetInterface
{
    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var Section[]
     */
    private \$sections;

    /**
     * @var Section[]
     */
    private \$activeSections;

    /**
     * @param bool \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(bool \$morePrecision = false)
    {
        \$this->morePrecision = \$morePrecision;
        \$this->reset();
    }

    /**
     * @return Section[]
     */
    public function getSections()
    {
        return \$this->sections;
    }

    /**
     * Creates a new section or re-opens an existing section.
     *
     * @param string|null \$id The id of the session to re-open, null to create a new one
     *
     * @throws \\LogicException When the section to re-open is not reachable
     */
    public function openSection(\$id = null)
    {
        \$current = end(\$this->activeSections);

        if (null !== \$id && null === \$current->get(\$id)) {
            throw new \\LogicException(sprintf('The section \"%s\" has been started at an other level and can not be opened.', \$id));
        }

        \$this->start('__section__.child', 'section');
        \$this->activeSections[] = \$current->open(\$id);
        \$this->start('__section__');
    }

    /**
     * Stops the last started section.
     *
     * The id parameter is used to retrieve the events from this section.
     *
     * @see getSectionEvents()
     *
     * @param string \$id The identifier of the section
     *
     * @throws \\LogicException When there's no started section to be stopped
     */
    public function stopSection(\$id)
    {
        \$this->stop('__section__');

        if (1 == \\count(\$this->activeSections)) {
            throw new \\LogicException('There is no started section to stop.');
        }

        \$this->sections[\$id] = array_pop(\$this->activeSections)->setId(\$id);
        \$this->stop('__section__.child');
    }

    /**
     * Starts an event.
     *
     * @param string      \$name     The event name
     * @param string|null \$category The event category
     *
     * @return StopwatchEvent
     */
    public function start(\$name, \$category = null)
    {
        return end(\$this->activeSections)->startEvent(\$name, \$category);
    }

    /**
     * Checks if the event was started.
     *
     * @param string \$name The event name
     *
     * @return bool
     */
    public function isStarted(\$name)
    {
        return end(\$this->activeSections)->isEventStarted(\$name);
    }

    /**
     * Stops an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent
     */
    public function stop(\$name)
    {
        return end(\$this->activeSections)->stopEvent(\$name);
    }

    /**
     * Stops then restarts an event.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent
     */
    public function lap(\$name)
    {
        return end(\$this->activeSections)->stopEvent(\$name)->start();
    }

    /**
     * Returns a specific event by name.
     *
     * @param string \$name The event name
     *
     * @return StopwatchEvent
     */
    public function getEvent(\$name)
    {
        return end(\$this->activeSections)->getEvent(\$name);
    }

    /**
     * Gets all events for a given section.
     *
     * @param string \$id A section identifier
     *
     * @return StopwatchEvent[]
     */
    public function getSectionEvents(\$id)
    {
        return isset(\$this->sections[\$id]) ? \$this->sections[\$id]->getEvents() : [];
    }

    /**
     * Resets the stopwatch to its original state.
     */
    public function reset()
    {
        \$this->sections = \$this->activeSections = ['__root__' => new Section(null, \$this->morePrecision)];
    }
}
", "vendor/symfony/stopwatch/Stopwatch.php", "/var/www/public/DevLaon/templates/vendor/symfony/stopwatch/Stopwatch.php");
    }
}
