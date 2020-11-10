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

/* vendor/twig/twig/src/Profiler/Dumper/BlackfireDumper.php */
class __TwigTemplate_b2237233150c654b431d017f82cf15b8470df05a64efb4e718f7cb76bc2c7df6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/BlackfireDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/BlackfireDumper.php"));

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
final class BlackfireDumper
{
    public function dump(Profile \$profile)
    {
        \$data = [];
        \$this->dumpProfile('main()', \$profile, \$data);
        \$this->dumpChildren('main()', \$profile, \$data);

        \$start = sprintf('%f', microtime(true));
        \$str = <<<EOF
file-format: BlackfireProbe
cost-dimensions: wt mu pmu
request-start: {\$start}


EOF;

        foreach (\$data as \$name => \$values) {
            \$str .= \"{\$name}//{\$values['ct']} {\$values['wt']} {\$values['mu']} {\$values['pmu']}\\n\";
        }

        return \$str;
    }

    private function dumpChildren(string \$parent, Profile \$profile, &\$data)
    {
        foreach (\$profile as \$p) {
            if (\$p->isTemplate()) {
                \$name = \$p->getTemplate();
            } else {
                \$name = sprintf('%s::%s(%s)', \$p->getTemplate(), \$p->getType(), \$p->getName());
            }
            \$this->dumpProfile(sprintf('%s==>%s', \$parent, \$name), \$p, \$data);
            \$this->dumpChildren(\$name, \$p, \$data);
        }
    }

    private function dumpProfile(string \$edge, Profile \$profile, &\$data)
    {
        if (isset(\$data[\$edge])) {
            ++\$data[\$edge]['ct'];
            \$data[\$edge]['wt'] += floor(\$profile->getDuration() * 1000000);
            \$data[\$edge]['mu'] += \$profile->getMemoryUsage();
            \$data[\$edge]['pmu'] += \$profile->getPeakMemoryUsage();
        } else {
            \$data[\$edge] = [
                'ct' => 1,
                'wt' => floor(\$profile->getDuration() * 1000000),
                'mu' => \$profile->getMemoryUsage(),
                'pmu' => \$profile->getPeakMemoryUsage(),
            ];
        }
    }
}

class_alias('Twig\\Profiler\\Dumper\\BlackfireDumper', 'Twig_Profiler_Dumper_Blackfire');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Profiler/Dumper/BlackfireDumper.php";
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
final class BlackfireDumper
{
    public function dump(Profile \$profile)
    {
        \$data = [];
        \$this->dumpProfile('main()', \$profile, \$data);
        \$this->dumpChildren('main()', \$profile, \$data);

        \$start = sprintf('%f', microtime(true));
        \$str = <<<EOF
file-format: BlackfireProbe
cost-dimensions: wt mu pmu
request-start: {\$start}


EOF;

        foreach (\$data as \$name => \$values) {
            \$str .= \"{\$name}//{\$values['ct']} {\$values['wt']} {\$values['mu']} {\$values['pmu']}\\n\";
        }

        return \$str;
    }

    private function dumpChildren(string \$parent, Profile \$profile, &\$data)
    {
        foreach (\$profile as \$p) {
            if (\$p->isTemplate()) {
                \$name = \$p->getTemplate();
            } else {
                \$name = sprintf('%s::%s(%s)', \$p->getTemplate(), \$p->getType(), \$p->getName());
            }
            \$this->dumpProfile(sprintf('%s==>%s', \$parent, \$name), \$p, \$data);
            \$this->dumpChildren(\$name, \$p, \$data);
        }
    }

    private function dumpProfile(string \$edge, Profile \$profile, &\$data)
    {
        if (isset(\$data[\$edge])) {
            ++\$data[\$edge]['ct'];
            \$data[\$edge]['wt'] += floor(\$profile->getDuration() * 1000000);
            \$data[\$edge]['mu'] += \$profile->getMemoryUsage();
            \$data[\$edge]['pmu'] += \$profile->getPeakMemoryUsage();
        } else {
            \$data[\$edge] = [
                'ct' => 1,
                'wt' => floor(\$profile->getDuration() * 1000000),
                'mu' => \$profile->getMemoryUsage(),
                'pmu' => \$profile->getPeakMemoryUsage(),
            ];
        }
    }
}

class_alias('Twig\\Profiler\\Dumper\\BlackfireDumper', 'Twig_Profiler_Dumper_Blackfire');
", "vendor/twig/twig/src/Profiler/Dumper/BlackfireDumper.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Profiler/Dumper/BlackfireDumper.php");
    }
}
