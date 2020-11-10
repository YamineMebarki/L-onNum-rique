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

/* vendor/twig/twig/src/Profiler/Dumper/TextDumper.php */
class __TwigTemplate_42ac5edf868fd1257c62b9449a0597b8f979705a76199db9393e5c087e091d5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/TextDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Dumper/TextDumper.php"));

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
final class TextDumper extends BaseDumper
{
    protected function formatTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ %s', \$prefix, \$profile->getTemplate());
    }

    protected function formatNonTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ %s::%s(%s)', \$prefix, \$profile->getTemplate(), \$profile->getType(), \$profile->getName());
    }

    protected function formatTime(Profile \$profile, \$percent)
    {
        return sprintf('%.2fms/%.0f%%', \$profile->getDuration() * 1000, \$percent);
    }
}

class_alias('Twig\\Profiler\\Dumper\\TextDumper', 'Twig_Profiler_Dumper_Text');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Profiler/Dumper/TextDumper.php";
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
final class TextDumper extends BaseDumper
{
    protected function formatTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ %s', \$prefix, \$profile->getTemplate());
    }

    protected function formatNonTemplate(Profile \$profile, \$prefix)
    {
        return sprintf('%s└ %s::%s(%s)', \$prefix, \$profile->getTemplate(), \$profile->getType(), \$profile->getName());
    }

    protected function formatTime(Profile \$profile, \$percent)
    {
        return sprintf('%.2fms/%.0f%%', \$profile->getDuration() * 1000, \$percent);
    }
}

class_alias('Twig\\Profiler\\Dumper\\TextDumper', 'Twig_Profiler_Dumper_Text');
", "vendor/twig/twig/src/Profiler/Dumper/TextDumper.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Profiler/Dumper/TextDumper.php");
    }
}
