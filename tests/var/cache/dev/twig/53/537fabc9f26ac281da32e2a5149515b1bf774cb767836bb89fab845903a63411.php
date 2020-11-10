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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/StaticProxyConstructor.php */
class __TwigTemplate_38eeeb3e810ac4ed48fea3b87ef310cec77135026e35aa00bbe0e529041524c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/StaticProxyConstructor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/StaticProxyConstructor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator;

use ProxyManager\\Factory\\RemoteObject\\AdapterInterface;
use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * The `staticProxyConstructor` implementation for remote object proxies
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass Reflection of the class to proxy
     * @param PropertyGenerator \$adapter       Adapter property
     */
    public function __construct(ReflectionClass \$originalClass, PropertyGenerator \$adapter)
    {
        \$adapterName = \$adapter->getName();

        parent::__construct(
            'staticProxyConstructor',
            [new ParameterGenerator(\$adapterName, AdapterInterface::class)],
            MethodGenerator::FLAG_PUBLIC | MethodGenerator::FLAG_STATIC,
            null,
            'Constructor for remote object control\\n\\n'
            . '@param \\\\ProxyManager\\\\Factory\\\\RemoteObject\\\\AdapterInterface \\\$adapter'
        );

        \$body = 'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?? \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . '\$instance->' . \$adapterName . ' = \$' . \$adapterName . \";\\n\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'instance');

        \$this->setBody(\$body . \"\\n\\nreturn \\\$instance;\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/StaticProxyConstructor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator;

use ProxyManager\\Factory\\RemoteObject\\AdapterInterface;
use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * The `staticProxyConstructor` implementation for remote object proxies
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass Reflection of the class to proxy
     * @param PropertyGenerator \$adapter       Adapter property
     */
    public function __construct(ReflectionClass \$originalClass, PropertyGenerator \$adapter)
    {
        \$adapterName = \$adapter->getName();

        parent::__construct(
            'staticProxyConstructor',
            [new ParameterGenerator(\$adapterName, AdapterInterface::class)],
            MethodGenerator::FLAG_PUBLIC | MethodGenerator::FLAG_STATIC,
            null,
            'Constructor for remote object control\\n\\n'
            . '@param \\\\ProxyManager\\\\Factory\\\\RemoteObject\\\\AdapterInterface \\\$adapter'
        );

        \$body = 'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?? \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . '\$instance->' . \$adapterName . ' = \$' . \$adapterName . \";\\n\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'instance');

        \$this->setBody(\$body . \"\\n\\nreturn \\\$instance;\");
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/StaticProxyConstructor.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/StaticProxyConstructor.php");
    }
}
