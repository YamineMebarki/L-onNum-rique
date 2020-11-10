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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/GetMethodIfExists.php */
class __TwigTemplate_fec41bfef3ff9695a8dfc270337100fd421b1c7d5aa835a8a5d7af0eaf03a13e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/GetMethodIfExists.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/GetMethodIfExists.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

use ReflectionClass;
use ReflectionMethod;

/**
 * Internal utility class - allows fetching a method from a given class, if it exists
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class GetMethodIfExists
{
    private function __construct()
    {
    }

    public static function get(ReflectionClass \$class, string \$method) : ?ReflectionMethod
    {
        return \$class->hasMethod(\$method) ? \$class->getMethod(\$method) : null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/GetMethodIfExists.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

use ReflectionClass;
use ReflectionMethod;

/**
 * Internal utility class - allows fetching a method from a given class, if it exists
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class GetMethodIfExists
{
    private function __construct()
    {
    }

    public static function get(ReflectionClass \$class, string \$method) : ?ReflectionMethod
    {
        return \$class->hasMethod(\$method) ? \$class->getMethod(\$method) : null;
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/GetMethodIfExists.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/GetMethodIfExists.php");
    }
}
