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

/* vendor/symfony/twig-bridge/Extension/StopwatchExtension.php */
class __TwigTemplate_288f66b32f16f07ffb936b8a6a06b4d48cca6ffab62fb63e2904a9a2309f3c11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/StopwatchExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/StopwatchExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\TokenParser\\StopwatchTokenParser;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\AbstractExtension;

/**
 * Twig extension for the stopwatch helper.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class StopwatchExtension extends AbstractExtension
{
    private \$stopwatch;
    private \$enabled;

    public function __construct(Stopwatch \$stopwatch = null, bool \$enabled = true)
    {
        \$this->stopwatch = \$stopwatch;
        \$this->enabled = \$enabled;
    }

    public function getStopwatch()
    {
        return \$this->stopwatch;
    }

    public function getTokenParsers()
    {
        return [
            /*
             * ";
        // line 43
        $context["__internal_c2a1301bd0deb8bd04c8ca6991693bd1d9ce4851f5f57d6a7ab4a2b7cc0a5c3c"] = (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 43, $this->source); })())        ;
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->start($context["__internal_c2a1301bd0deb8bd04c8ca6991693bd1d9ce4851f5f57d6a7ab4a2b7cc0a5c3c"], 'template');
        // line 44
        echo "             * Some stuff which will be recorded on the timeline
             * ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->stop($context["__internal_c2a1301bd0deb8bd04c8ca6991693bd1d9ce4851f5f57d6a7ab4a2b7cc0a5c3c"]);
        // line 46
        echo "             */
            new StopwatchTokenParser(null !== \$this->stopwatch && \$this->enabled),
        ];
    }

    public function getName()
    {
        return 'stopwatch';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/StopwatchExtension.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 46,  90 => 44,  87 => 43,  43 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\TokenParser\\StopwatchTokenParser;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\AbstractExtension;

/**
 * Twig extension for the stopwatch helper.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class StopwatchExtension extends AbstractExtension
{
    private \$stopwatch;
    private \$enabled;

    public function __construct(Stopwatch \$stopwatch = null, bool \$enabled = true)
    {
        \$this->stopwatch = \$stopwatch;
        \$this->enabled = \$enabled;
    }

    public function getStopwatch()
    {
        return \$this->stopwatch;
    }

    public function getTokenParsers()
    {
        return [
            /*
             * {% stopwatch foo %}
             * Some stuff which will be recorded on the timeline
             * {% endstopwatch %}
             */
            new StopwatchTokenParser(null !== \$this->stopwatch && \$this->enabled),
        ];
    }

    public function getName()
    {
        return 'stopwatch';
    }
}
", "vendor/symfony/twig-bridge/Extension/StopwatchExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php");
    }
}
