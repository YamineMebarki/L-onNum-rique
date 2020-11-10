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

/* vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php */
class __TwigTemplate_6c2162a755490141e7ccf856b7f9eea65f2a7289c48e20077a073bde88f38e52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php"));

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

namespace Twig\\Profiler\\Dumper;

use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class BaseDumper
{
    private \$root;

    public function dump(Profile \$profile)
    {
        return \$this->dumpProfile(\$profile);
    }

    abstract protected function formatTemplate(Profile \$profile, \$prefix);

    abstract protected function formatNonTemplate(Profile \$profile, \$prefix);

    abstract protected function formatTime(Profile \$profile, \$percent);

    private function dumpProfile(Profile \$profile, \$prefix = '', \$sibling = false): string
    {
        if (\$profile->isRoot()) {
            \$this->root = \$profile->getDuration();
            \$start = \$profile->getName();
        } else {
            if (\$profile->isTemplate()) {
                \$start = \$this->formatTemplate(\$profile, \$prefix);
            } else {
                \$start = \$this->formatNonTemplate(\$profile, \$prefix);
            }
            \$prefix .= \$sibling ? '│ ' : '  ';
        }

        \$percent = \$this->root ? \$profile->getDuration() / \$this->root * 100 : 0;

        if (\$profile->getDuration() * 1000 < 1) {
            \$str = \$start.\"\\n\";
        } else {
            \$str = sprintf(\"%s %s\\n\", \$start, \$this->formatTime(\$profile, \$percent));
        }

        \$nCount = \\count(\$profile->getProfiles());
        foreach (\$profile as \$i => \$p) {
            \$str .= \$this->dumpProfile(\$p, \$prefix, \$i + 1 !== \$nCount);
        }

        return \$str;
    }
}

class_alias('Twig\\Profiler\\Dumper\\BaseDumper', 'Twig_Profiler_Dumper_Base');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php";
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

namespace Twig\\Profiler\\Dumper;

use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class BaseDumper
{
    private \$root;

    public function dump(Profile \$profile)
    {
        return \$this->dumpProfile(\$profile);
    }

    abstract protected function formatTemplate(Profile \$profile, \$prefix);

    abstract protected function formatNonTemplate(Profile \$profile, \$prefix);

    abstract protected function formatTime(Profile \$profile, \$percent);

    private function dumpProfile(Profile \$profile, \$prefix = '', \$sibling = false): string
    {
        if (\$profile->isRoot()) {
            \$this->root = \$profile->getDuration();
            \$start = \$profile->getName();
        } else {
            if (\$profile->isTemplate()) {
                \$start = \$this->formatTemplate(\$profile, \$prefix);
            } else {
                \$start = \$this->formatNonTemplate(\$profile, \$prefix);
            }
            \$prefix .= \$sibling ? '│ ' : '  ';
        }

        \$percent = \$this->root ? \$profile->getDuration() / \$this->root * 100 : 0;

        if (\$profile->getDuration() * 1000 < 1) {
            \$str = \$start.\"\\n\";
        } else {
            \$str = sprintf(\"%s %s\\n\", \$start, \$this->formatTime(\$profile, \$percent));
        }

        \$nCount = \\count(\$profile->getProfiles());
        foreach (\$profile as \$i => \$p) {
            \$str .= \$this->dumpProfile(\$p, \$prefix, \$i + 1 !== \$nCount);
        }

        return \$str;
    }
}

class_alias('Twig\\Profiler\\Dumper\\BaseDumper', 'Twig_Profiler_Dumper_Base');
", "vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php");
    }
}
