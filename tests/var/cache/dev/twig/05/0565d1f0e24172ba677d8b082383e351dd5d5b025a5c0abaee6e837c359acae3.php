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

/* vendor/symfony/stopwatch/StopwatchPeriod.php */
class __TwigTemplate_19ce0b0cf896ae9d552f6d215745b3983818799fecd224265d5d1c7ca0561275 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/StopwatchPeriod.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/stopwatch/StopwatchPeriod.php"));

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
 * Represents an Period for an Event.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StopwatchPeriod
{
    private \$start;
    private \$end;
    private \$memory;

    /**
     * @param int|float \$start         The relative time of the start of the period (in milliseconds)
     * @param int|float \$end           The relative time of the end of the period (in milliseconds)
     * @param bool      \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(\$start, \$end, bool \$morePrecision = false)
    {
        \$this->start = \$morePrecision ? (float) \$start : (int) \$start;
        \$this->end = \$morePrecision ? (float) \$end : (int) \$end;
        \$this->memory = memory_get_usage(true);
    }

    /**
     * Gets the relative time of the start of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getStartTime()
    {
        return \$this->start;
    }

    /**
     * Gets the relative time of the end of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getEndTime()
    {
        return \$this->end;
    }

    /**
     * Gets the time spent in this period.
     *
     * @return int|float The period duration (in milliseconds)
     */
    public function getDuration()
    {
        return \$this->end - \$this->start;
    }

    /**
     * Gets the memory usage.
     *
     * @return int The memory usage (in bytes)
     */
    public function getMemory()
    {
        return \$this->memory;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/stopwatch/StopwatchPeriod.php";
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
 * Represents an Period for an Event.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StopwatchPeriod
{
    private \$start;
    private \$end;
    private \$memory;

    /**
     * @param int|float \$start         The relative time of the start of the period (in milliseconds)
     * @param int|float \$end           The relative time of the end of the period (in milliseconds)
     * @param bool      \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(\$start, \$end, bool \$morePrecision = false)
    {
        \$this->start = \$morePrecision ? (float) \$start : (int) \$start;
        \$this->end = \$morePrecision ? (float) \$end : (int) \$end;
        \$this->memory = memory_get_usage(true);
    }

    /**
     * Gets the relative time of the start of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getStartTime()
    {
        return \$this->start;
    }

    /**
     * Gets the relative time of the end of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getEndTime()
    {
        return \$this->end;
    }

    /**
     * Gets the time spent in this period.
     *
     * @return int|float The period duration (in milliseconds)
     */
    public function getDuration()
    {
        return \$this->end - \$this->start;
    }

    /**
     * Gets the memory usage.
     *
     * @return int The memory usage (in bytes)
     */
    public function getMemory()
    {
        return \$this->memory;
    }
}
", "vendor/symfony/stopwatch/StopwatchPeriod.php", "/var/www/public/DevLaon/templates/vendor/symfony/stopwatch/StopwatchPeriod.php");
    }
}
