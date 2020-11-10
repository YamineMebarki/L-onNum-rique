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

/* vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php */
class __TwigTemplate_06bb44ecf2d1d9f883ff8e4eb00a9e5c36c487bbc3050e795297d0d105ffcde1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Twig;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Twig\\Environment;
use Twig\\Extension\\ProfilerExtension;
use Twig\\Profiler\\Profile;
use Twig\\TwigFunction;

/**
 * Twig extension for the profiler.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebProfilerExtension extends ProfilerExtension
{
    /**
     * @var HtmlDumper
     */
    private \$dumper;

    /**
     * @var resource
     */
    private \$output;

    /**
     * @var int
     */
    private \$stackLevel = 0;

    public function __construct(HtmlDumper \$dumper = null)
    {
        \$this->dumper = \$dumper ?: new HtmlDumper();
        \$this->dumper->setOutput(\$this->output = fopen('php://memory', 'r+b'));
    }

    public function enter(Profile \$profile)
    {
        ++\$this->stackLevel;
    }

    public function leave(Profile \$profile)
    {
        if (0 === --\$this->stackLevel) {
            \$this->dumper->setOutput(\$this->output = fopen('php://memory', 'r+b'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('profiler_dump', [\$this, 'dumpData'], ['is_safe' => ['html'], 'needs_environment' => true]),
            new TwigFunction('profiler_dump_log', [\$this, 'dumpLog'], ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    public function dumpData(Environment \$env, Data \$data, \$maxDepth = 0)
    {
        \$this->dumper->setCharset(\$env->getCharset());
        \$this->dumper->dump(\$data, null, [
            'maxDepth' => \$maxDepth,
        ]);

        \$dump = stream_get_contents(\$this->output, -1, 0);
        rewind(\$this->output);
        ftruncate(\$this->output, 0);

        return str_replace(\"\\n</pre\", '</pre', rtrim(\$dump));
    }

    public function dumpLog(Environment \$env, \$message, Data \$context = null)
    {
        \$message = twig_escape_filter(\$env, \$message);
        \$message = preg_replace('/&quot;(.*?)&quot;/', '&quot;<b>\$1</b>&quot;', \$message);

        if (null === \$context || false === strpos(\$message, '{')) {
            return '<span class=\"dump-inline\">'.\$message.'</span>';
        }

        \$replacements = [];
        foreach (\$context as \$k => \$v) {
            \$k = '{'.twig_escape_filter(\$env, \$k).'}';
            \$replacements['&quot;<b>'.\$k.'</b>&quot;'] = \$replacements['&quot;'.\$k.'&quot;'] = \$replacements[\$k] = \$this->dumpData(\$env, \$v);
        }

        return '<span class=\"dump-inline\">'.strtr(\$message, \$replacements).'</span>';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'profiler';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Twig;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Twig\\Environment;
use Twig\\Extension\\ProfilerExtension;
use Twig\\Profiler\\Profile;
use Twig\\TwigFunction;

/**
 * Twig extension for the profiler.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebProfilerExtension extends ProfilerExtension
{
    /**
     * @var HtmlDumper
     */
    private \$dumper;

    /**
     * @var resource
     */
    private \$output;

    /**
     * @var int
     */
    private \$stackLevel = 0;

    public function __construct(HtmlDumper \$dumper = null)
    {
        \$this->dumper = \$dumper ?: new HtmlDumper();
        \$this->dumper->setOutput(\$this->output = fopen('php://memory', 'r+b'));
    }

    public function enter(Profile \$profile)
    {
        ++\$this->stackLevel;
    }

    public function leave(Profile \$profile)
    {
        if (0 === --\$this->stackLevel) {
            \$this->dumper->setOutput(\$this->output = fopen('php://memory', 'r+b'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('profiler_dump', [\$this, 'dumpData'], ['is_safe' => ['html'], 'needs_environment' => true]),
            new TwigFunction('profiler_dump_log', [\$this, 'dumpLog'], ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    public function dumpData(Environment \$env, Data \$data, \$maxDepth = 0)
    {
        \$this->dumper->setCharset(\$env->getCharset());
        \$this->dumper->dump(\$data, null, [
            'maxDepth' => \$maxDepth,
        ]);

        \$dump = stream_get_contents(\$this->output, -1, 0);
        rewind(\$this->output);
        ftruncate(\$this->output, 0);

        return str_replace(\"\\n</pre\", '</pre', rtrim(\$dump));
    }

    public function dumpLog(Environment \$env, \$message, Data \$context = null)
    {
        \$message = twig_escape_filter(\$env, \$message);
        \$message = preg_replace('/&quot;(.*?)&quot;/', '&quot;<b>\$1</b>&quot;', \$message);

        if (null === \$context || false === strpos(\$message, '{')) {
            return '<span class=\"dump-inline\">'.\$message.'</span>';
        }

        \$replacements = [];
        foreach (\$context as \$k => \$v) {
            \$k = '{'.twig_escape_filter(\$env, \$k).'}';
            \$replacements['&quot;<b>'.\$k.'</b>&quot;'] = \$replacements['&quot;'.\$k.'&quot;'] = \$replacements[\$k] = \$this->dumpData(\$env, \$v);
        }

        return '<span class=\"dump-inline\">'.strtr(\$message, \$replacements).'</span>';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'profiler';
    }
}
", "vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php");
    }
}
