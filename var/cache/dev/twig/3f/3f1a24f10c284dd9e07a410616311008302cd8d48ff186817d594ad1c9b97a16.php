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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxiedClassException.php */
class __TwigTemplate_915819d49ae89784d8735dd2f3a4e49c18f9393376dc8b18d7507396927c7431 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxiedClassException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxiedClassException.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Exception;

use InvalidArgumentException;
use ReflectionClass;
use ReflectionMethod;

/**
 * Exception for invalid proxied classes
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidProxiedClassException extends InvalidArgumentException implements ExceptionInterface
{
    public static function interfaceNotSupported(ReflectionClass \$reflection) : self
    {
        return new self(sprintf('Provided interface \"%s\" cannot be proxied', \$reflection->getName()));
    }

    public static function finalClassNotSupported(ReflectionClass \$reflection) : self
    {
        return new self(sprintf('Provided class \"%s\" is final and cannot be proxied', \$reflection->getName()));
    }

    public static function abstractProtectedMethodsNotSupported(ReflectionClass \$reflection) : self
    {
        return new self(sprintf(
            'Provided class \"%s\" has following protected abstract methods, and therefore cannot be proxied:' . \"\\n%s\",
            \$reflection->getName(),
            implode(
                \"\\n\",
                array_map(
                    function (ReflectionMethod \$reflectionMethod) : string {
                        return \$reflectionMethod->getDeclaringClass()->getName() . '::' . \$reflectionMethod->getName();
                    },
                    array_filter(
                        \$reflection->getMethods(),
                        function (ReflectionMethod \$method) : bool {
                            return \$method->isAbstract() && \$method->isProtected();
                        }
                    )
                )
            )
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxiedClassException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Exception;

use InvalidArgumentException;
use ReflectionClass;
use ReflectionMethod;

/**
 * Exception for invalid proxied classes
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidProxiedClassException extends InvalidArgumentException implements ExceptionInterface
{
    public static function interfaceNotSupported(ReflectionClass \$reflection) : self
    {
        return new self(sprintf('Provided interface \"%s\" cannot be proxied', \$reflection->getName()));
    }

    public static function finalClassNotSupported(ReflectionClass \$reflection) : self
    {
        return new self(sprintf('Provided class \"%s\" is final and cannot be proxied', \$reflection->getName()));
    }

    public static function abstractProtectedMethodsNotSupported(ReflectionClass \$reflection) : self
    {
        return new self(sprintf(
            'Provided class \"%s\" has following protected abstract methods, and therefore cannot be proxied:' . \"\\n%s\",
            \$reflection->getName(),
            implode(
                \"\\n\",
                array_map(
                    function (ReflectionMethod \$reflectionMethod) : string {
                        return \$reflectionMethod->getDeclaringClass()->getName() . '::' . \$reflectionMethod->getName();
                    },
                    array_filter(
                        \$reflection->getMethods(),
                        function (ReflectionMethod \$method) : bool {
                            return \$method->isAbstract() && \$method->isProtected();
                        }
                    )
                )
            )
        ));
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxiedClassException.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxiedClassException.php");
    }
}
