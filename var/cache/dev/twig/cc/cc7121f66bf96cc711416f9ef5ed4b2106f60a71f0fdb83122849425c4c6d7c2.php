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

/* vendor/twig/twig/src/Profiler/Dumper/HtmlDumper.php */
class __TwigTemplate_94df8df640ded0a5817e1735f9291a1ce01269ac2bf729f3a7a2b5a859936f97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/HtmlDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/HtmlDumper.php"));

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
final class HtmlDumper extends BaseDumper
{
    private static \$colors = [
        'block' => '#dfd',
        'macro' => '#ddf',
        'template' => '#ffd',
        'big' => '#d44',
    ];

    public function dump(Profile \$profile)
    {
        return '<pre>'.parent::dump(\$profile).'</pre>';
    }

    protected function formatTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ <span style=\"background-color: %s\">%s</span>', \$prefix, self::\$colors['template'], \$profile->getTemplate());
    }

    protected function formatNonTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ %s::%s(<span style=\"background-color: %s\">%s</span>)', \$prefix, \$profile->getTemplate(), \$profile->getType(), isset(self::\$colors[\$profile->getType()]) ? self::\$colors[\$profile->getType()] : 'auto', \$profile->getName());
    }

    protected function formatTime(Profile \$profile, \$percent)
    {
        return sprintf('<span style=\"color: %s\">%.2fms/%.0f%%</span>', \$percent > 20 ? self::\$colors['big'] : 'auto', \$profile->getDuration() * 1000, \$percent);
    }
}

class_alias('Twig\\Profiler\\Dumper\\HtmlDumper', 'Twig_Profiler_Dumper_Html');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Profiler/Dumper/HtmlDumper.php";
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
final class HtmlDumper extends BaseDumper
{
    private static \$colors = [
        'block' => '#dfd',
        'macro' => '#ddf',
        'template' => '#ffd',
        'big' => '#d44',
    ];

    public function dump(Profile \$profile)
    {
        return '<pre>'.parent::dump(\$profile).'</pre>';
    }

    protected function formatTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ <span style=\"background-color: %s\">%s</span>', \$prefix, self::\$colors['template'], \$profile->getTemplate());
    }

    protected function formatNonTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ %s::%s(<span style=\"background-color: %s\">%s</span>)', \$prefix, \$profile->getTemplate(), \$profile->getType(), isset(self::\$colors[\$profile->getType()]) ? self::\$colors[\$profile->getType()] : 'auto', \$profile->getName());
    }

    protected function formatTime(Profile \$profile, \$percent)
    {
        return sprintf('<span style=\"color: %s\">%.2fms/%.0f%%</span>', \$percent > 20 ? self::\$colors['big'] : 'auto', \$profile->getDuration() * 1000, \$percent);
    }
}

class_alias('Twig\\Profiler\\Dumper\\HtmlDumper', 'Twig_Profiler_Dumper_Html');
", "vendor/twig/twig/src/Profiler/Dumper/HtmlDumper.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Profiler/Dumper/HtmlDumper.php");
    }
}
