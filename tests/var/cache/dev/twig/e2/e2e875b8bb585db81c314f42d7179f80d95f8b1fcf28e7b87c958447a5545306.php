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

/* vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/EnsureNoHotPathPass.php */
class __TwigTemplate_ea538fe0c28581114c8a55eaea4a5561f4c5d2c137ae9d40eea33fa3739ff466 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/EnsureNoHotPathPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/EnsureNoHotPathPass.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\AbstractRecursivePass;
use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Ensures that autoloading of Swiftmailer classes is not optimized by the hot path optimization.
 *
 * Swiftmailer has a special autoloader triggering the initialization of the library lazily.
 * Bypassing the autoloader would thus break the library.
 * This logic allows to keep applying the autoloading optimization on the container, forcing an
 * opt-out only for the Swiftmailer classes, which is better than disabling the optimization
 * entirely.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class EnsureNoHotPathPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof Definition && 0 === strpos(\$value->getClass(), 'Swift_')) {
            \$value->clearTag('container.hot_path');
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/EnsureNoHotPathPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\AbstractRecursivePass;
use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Ensures that autoloading of Swiftmailer classes is not optimized by the hot path optimization.
 *
 * Swiftmailer has a special autoloader triggering the initialization of the library lazily.
 * Bypassing the autoloader would thus break the library.
 * This logic allows to keep applying the autoloading optimization on the container, forcing an
 * opt-out only for the Swiftmailer classes, which is better than disabling the optimization
 * entirely.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class EnsureNoHotPathPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof Definition && 0 === strpos(\$value->getClass(), 'Swift_')) {
            \$value->clearTag('container.hot_path');
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/EnsureNoHotPathPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/EnsureNoHotPathPass.php");
    }
}
