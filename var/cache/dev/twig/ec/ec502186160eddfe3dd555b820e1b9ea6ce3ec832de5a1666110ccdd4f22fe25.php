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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodPrefixInterceptor.php */
class __TwigTemplate_828e516989c537768e6a547ed7d2f0332861a89955ac222961d743577c9461e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodPrefixInterceptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodPrefixInterceptor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator;

use Closure;
use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface::setMethodPrefixInterceptor}
 * for access interceptor objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetMethodPrefixInterceptor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$prefixInterceptor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$prefixInterceptor)
    {
        parent::__construct('setMethodPrefixInterceptor');

        \$interceptor = new ParameterGenerator('prefixInterceptor');

        \$interceptor->setType(Closure::class);
        \$interceptor->setDefaultValue(null);
        \$this->setParameter(new ParameterGenerator('methodName', 'string'));
        \$this->setParameter(\$interceptor);
        \$this->setBody('\$this->' . \$prefixInterceptor->getName() . '[\$methodName] = \$prefixInterceptor;');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodPrefixInterceptor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator;

use Closure;
use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface::setMethodPrefixInterceptor}
 * for access interceptor objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetMethodPrefixInterceptor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$prefixInterceptor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$prefixInterceptor)
    {
        parent::__construct('setMethodPrefixInterceptor');

        \$interceptor = new ParameterGenerator('prefixInterceptor');

        \$interceptor->setType(Closure::class);
        \$interceptor->setDefaultValue(null);
        \$this->setParameter(new ParameterGenerator('methodName', 'string'));
        \$this->setParameter(\$interceptor);
        \$this->setBody('\$this->' . \$prefixInterceptor->getName() . '[\$methodName] = \$prefixInterceptor;');
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodPrefixInterceptor.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodPrefixInterceptor.php");
    }
}
