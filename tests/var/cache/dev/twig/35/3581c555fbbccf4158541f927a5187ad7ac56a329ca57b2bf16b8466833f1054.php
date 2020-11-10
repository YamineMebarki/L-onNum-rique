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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/StaticProxyConstructor.php */
class __TwigTemplate_bd6382a8850f078a8616289facfbdff766de2a0ee6764c504a4b2e5e985e6473 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/StaticProxyConstructor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/StaticProxyConstructor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ReflectionClass;
use ReflectionProperty;

/**
 * The `staticProxyConstructor` implementation for null object proxies
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass \$originalClass Reflection of the class to proxy
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(ReflectionClass \$originalClass)
    {
        parent::__construct('staticProxyConstructor', [], static::FLAG_PUBLIC | static::FLAG_STATIC);

        \$nullableProperties = array_map(
            function (ReflectionProperty \$publicProperty) : string {
                return '\$instance->' . \$publicProperty->getName() . ' = null;';
            },
            Properties::fromReflectionClass(\$originalClass)->getPublicProperties()
        );

        \$this->setDocBlock('Constructor for null object initialization');
        \$this->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?? \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . (\$nullableProperties ? implode(\"\\n\", \$nullableProperties) . \"\\n\\n\" : '')
            . 'return \$instance;'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/StaticProxyConstructor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ReflectionClass;
use ReflectionProperty;

/**
 * The `staticProxyConstructor` implementation for null object proxies
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass \$originalClass Reflection of the class to proxy
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(ReflectionClass \$originalClass)
    {
        parent::__construct('staticProxyConstructor', [], static::FLAG_PUBLIC | static::FLAG_STATIC);

        \$nullableProperties = array_map(
            function (ReflectionProperty \$publicProperty) : string {
                return '\$instance->' . \$publicProperty->getName() . ' = null;';
            },
            Properties::fromReflectionClass(\$originalClass)->getPublicProperties()
        );

        \$this->setDocBlock('Constructor for null object initialization');
        \$this->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?? \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . (\$nullableProperties ? implode(\"\\n\", \$nullableProperties) . \"\\n\\n\" : '')
            . 'return \$instance;'
        );
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/StaticProxyConstructor.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/StaticProxyConstructor.php");
    }
}
