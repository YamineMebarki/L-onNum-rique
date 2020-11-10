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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicClone.php */
class __TwigTemplate_51927cce44231b425c9ead1cec4418c43ab9dc7c76e0f707ee97b136672741ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicClone.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicClone.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__clone` for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicClone extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$valueHolderProperty
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolderProperty,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(\$originalClass, '__clone');

        \$valueHolder = \$valueHolderProperty->getName();
        \$prefix      = \$prefixInterceptors->getName();
        \$suffix      = \$suffixInterceptors->getName();

        \$this->setBody(
            \"\\\$this->\$valueHolder = clone \\\$this->\$valueHolder;\\n\\n\"
            . \"foreach (\\\$this->\$prefix as \\\$key => \\\$value) {\\n\"
            . \"    \\\$this->\$prefix\" . \"[\\\$key] = clone \\\$value;\\n\"
            . \"}\\n\\n\"
            . \"foreach (\\\$this->\$suffix as \\\$key => \\\$value) {\\n\"
            . \"    \\\$this->\$suffix\" . \"[\\\$key] = clone \\\$value;\\n\"
            . '}'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicClone.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__clone` for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicClone extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$valueHolderProperty
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolderProperty,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(\$originalClass, '__clone');

        \$valueHolder = \$valueHolderProperty->getName();
        \$prefix      = \$prefixInterceptors->getName();
        \$suffix      = \$suffixInterceptors->getName();

        \$this->setBody(
            \"\\\$this->\$valueHolder = clone \\\$this->\$valueHolder;\\n\\n\"
            . \"foreach (\\\$this->\$prefix as \\\$key => \\\$value) {\\n\"
            . \"    \\\$this->\$prefix\" . \"[\\\$key] = clone \\\$value;\\n\"
            . \"}\\n\\n\"
            . \"foreach (\\\$this->\$suffix as \\\$key => \\\$value) {\\n\"
            . \"    \\\$this->\$suffix\" . \"[\\\$key] = clone \\\$value;\\n\"
            . '}'
        );
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicClone.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicClone.php");
    }
}
