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

/* vendor/twig/twig/src/Profiler/Profile.php */
class __TwigTemplate_bef37059e60e5a593316ecd913b79f90510c01bf14f68e902a88c1dac7288b09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Profile.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Profile.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Profiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Twig 2.4.0
 */
class Profile implements \\IteratorAggregate, \\Serializable
{
    const ROOT = 'ROOT';
    const BLOCK = 'block';
    const TEMPLATE = 'template';
    const MACRO = 'macro';

    private \$template;
    private \$name;
    private \$type;
    private \$starts = [];
    private \$ends = [];
    private \$profiles = [];

    public function __construct(string \$template = 'main', string \$type = self::ROOT, string \$name = 'main')
    {
        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error('Overriding '.__CLASS__.' is deprecated since Twig 2.4.0 and the class will be final in 3.0.', E_USER_DEPRECATED);
        }

        \$this->template = \$template;
        \$this->type = \$type;
        \$this->name = 0 === strpos(\$name, '__internal_') ? 'INTERNAL' : \$name;
        \$this->enter();
    }

    public function getTemplate()
    {
        return \$this->template;
    }

    public function getType()
    {
        return \$this->type;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function isRoot()
    {
        return self::ROOT === \$this->type;
    }

    public function isTemplate()
    {
        return self::TEMPLATE === \$this->type;
    }

    public function isBlock()
    {
        return self::BLOCK === \$this->type;
    }

    public function isMacro()
    {
        return self::MACRO === \$this->type;
    }

    public function getProfiles()
    {
        return \$this->profiles;
    }

    public function addProfile(self \$profile)
    {
        \$this->profiles[] = \$profile;
    }

    /**
     * Returns the duration in microseconds.
     *
     * @return float
     */
    public function getDuration()
    {
        if (\$this->isRoot() && \$this->profiles) {
            // for the root node with children, duration is the sum of all child durations
            \$duration = 0;
            foreach (\$this->profiles as \$profile) {
                \$duration += \$profile->getDuration();
            }

            return \$duration;
        }

        return isset(\$this->ends['wt']) && isset(\$this->starts['wt']) ? \$this->ends['wt'] - \$this->starts['wt'] : 0;
    }

    /**
     * Returns the memory usage in bytes.
     *
     * @return int
     */
    public function getMemoryUsage()
    {
        return isset(\$this->ends['mu']) && isset(\$this->starts['mu']) ? \$this->ends['mu'] - \$this->starts['mu'] : 0;
    }

    /**
     * Returns the peak memory usage in bytes.
     *
     * @return int
     */
    public function getPeakMemoryUsage()
    {
        return isset(\$this->ends['pmu']) && isset(\$this->starts['pmu']) ? \$this->ends['pmu'] - \$this->starts['pmu'] : 0;
    }

    /**
     * Starts the profiling.
     */
    public function enter()
    {
        \$this->starts = [
            'wt' => microtime(true),
            'mu' => memory_get_usage(),
            'pmu' => memory_get_peak_usage(),
        ];
    }

    /**
     * Stops the profiling.
     */
    public function leave()
    {
        \$this->ends = [
            'wt' => microtime(true),
            'mu' => memory_get_usage(),
            'pmu' => memory_get_peak_usage(),
        ];
    }

    public function reset()
    {
        \$this->starts = \$this->ends = \$this->profiles = [];
        \$this->enter();
    }

    public function getIterator()
    {
        return new \\ArrayIterator(\$this->profiles);
    }

    public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    public function unserialize(\$data)
    {
        \$this->__unserialize(unserialize(\$data));
    }

    /**
     * @internal
     */
    public function __serialize()
    {
        return [\$this->template, \$this->name, \$this->type, \$this->starts, \$this->ends, \$this->profiles];
    }

    /**
     * @internal
     */
    public function __unserialize(array \$data)
    {
        list(\$this->template, \$this->name, \$this->type, \$this->starts, \$this->ends, \$this->profiles) = \$data;
    }
}

class_alias('Twig\\Profiler\\Profile', 'Twig_Profiler_Profile');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Profiler/Profile.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Profiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Twig 2.4.0
 */
class Profile implements \\IteratorAggregate, \\Serializable
{
    const ROOT = 'ROOT';
    const BLOCK = 'block';
    const TEMPLATE = 'template';
    const MACRO = 'macro';

    private \$template;
    private \$name;
    private \$type;
    private \$starts = [];
    private \$ends = [];
    private \$profiles = [];

    public function __construct(string \$template = 'main', string \$type = self::ROOT, string \$name = 'main')
    {
        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error('Overriding '.__CLASS__.' is deprecated since Twig 2.4.0 and the class will be final in 3.0.', E_USER_DEPRECATED);
        }

        \$this->template = \$template;
        \$this->type = \$type;
        \$this->name = 0 === strpos(\$name, '__internal_') ? 'INTERNAL' : \$name;
        \$this->enter();
    }

    public function getTemplate()
    {
        return \$this->template;
    }

    public function getType()
    {
        return \$this->type;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function isRoot()
    {
        return self::ROOT === \$this->type;
    }

    public function isTemplate()
    {
        return self::TEMPLATE === \$this->type;
    }

    public function isBlock()
    {
        return self::BLOCK === \$this->type;
    }

    public function isMacro()
    {
        return self::MACRO === \$this->type;
    }

    public function getProfiles()
    {
        return \$this->profiles;
    }

    public function addProfile(self \$profile)
    {
        \$this->profiles[] = \$profile;
    }

    /**
     * Returns the duration in microseconds.
     *
     * @return float
     */
    public function getDuration()
    {
        if (\$this->isRoot() && \$this->profiles) {
            // for the root node with children, duration is the sum of all child durations
            \$duration = 0;
            foreach (\$this->profiles as \$profile) {
                \$duration += \$profile->getDuration();
            }

            return \$duration;
        }

        return isset(\$this->ends['wt']) && isset(\$this->starts['wt']) ? \$this->ends['wt'] - \$this->starts['wt'] : 0;
    }

    /**
     * Returns the memory usage in bytes.
     *
     * @return int
     */
    public function getMemoryUsage()
    {
        return isset(\$this->ends['mu']) && isset(\$this->starts['mu']) ? \$this->ends['mu'] - \$this->starts['mu'] : 0;
    }

    /**
     * Returns the peak memory usage in bytes.
     *
     * @return int
     */
    public function getPeakMemoryUsage()
    {
        return isset(\$this->ends['pmu']) && isset(\$this->starts['pmu']) ? \$this->ends['pmu'] - \$this->starts['pmu'] : 0;
    }

    /**
     * Starts the profiling.
     */
    public function enter()
    {
        \$this->starts = [
            'wt' => microtime(true),
            'mu' => memory_get_usage(),
            'pmu' => memory_get_peak_usage(),
        ];
    }

    /**
     * Stops the profiling.
     */
    public function leave()
    {
        \$this->ends = [
            'wt' => microtime(true),
            'mu' => memory_get_usage(),
            'pmu' => memory_get_peak_usage(),
        ];
    }

    public function reset()
    {
        \$this->starts = \$this->ends = \$this->profiles = [];
        \$this->enter();
    }

    public function getIterator()
    {
        return new \\ArrayIterator(\$this->profiles);
    }

    public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    public function unserialize(\$data)
    {
        \$this->__unserialize(unserialize(\$data));
    }

    /**
     * @internal
     */
    public function __serialize()
    {
        return [\$this->template, \$this->name, \$this->type, \$this->starts, \$this->ends, \$this->profiles];
    }

    /**
     * @internal
     */
    public function __unserialize(array \$data)
    {
        list(\$this->template, \$this->name, \$this->type, \$this->starts, \$this->ends, \$this->profiles) = \$data;
    }
}

class_alias('Twig\\Profiler\\Profile', 'Twig_Profiler_Profile');
", "vendor/twig/twig/src/Profiler/Profile.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Profiler/Profile.php");
    }
}
