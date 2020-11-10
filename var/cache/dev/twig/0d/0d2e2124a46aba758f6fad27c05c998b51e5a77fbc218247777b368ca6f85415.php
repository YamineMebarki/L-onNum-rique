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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ProxiedMethodReturnExpression.php */
class __TwigTemplate_4df5afffea49790a4ba26c9e4c2b638c7b231733fa640921a10dcf38f7e09e74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ProxiedMethodReturnExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ProxiedMethodReturnExpression.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

/**
 * Utility class to generate return expressions in method, given a method signature.
 *
 * This is required since return expressions may be forbidden by the method signature (void).
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ProxiedMethodReturnExpression
{
    public static function generate(string \$returnedValueExpression, ?\\ReflectionMethod \$originalMethod) : string
    {
        if (\$originalMethod && 'void' === (string) \$originalMethod->getReturnType()) {
            return \$returnedValueExpression . \";\\nreturn;\";
        }

        return 'return ' . \$returnedValueExpression . ';';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ProxiedMethodReturnExpression.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

/**
 * Utility class to generate return expressions in method, given a method signature.
 *
 * This is required since return expressions may be forbidden by the method signature (void).
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ProxiedMethodReturnExpression
{
    public static function generate(string \$returnedValueExpression, ?\\ReflectionMethod \$originalMethod) : string
    {
        if (\$originalMethod && 'void' === (string) \$originalMethod->getReturnType()) {
            return \$returnedValueExpression . \";\\nreturn;\";
        }

        return 'return ' . \$returnedValueExpression . ';';
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ProxiedMethodReturnExpression.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ProxiedMethodReturnExpression.php");
    }
}
