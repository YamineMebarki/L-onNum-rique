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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php */
class __TwigTemplate_49473f8bf88371216e8dd38e9d429d89c8355bebe6d95cc54463cbcce7e2bc92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator;

use Closure;
use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface::setMethodSuffixInterceptor}
 * for access interceptor objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetMethodSuffixInterceptor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$suffixInterceptor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$suffixInterceptor)
    {
        parent::__construct('setMethodSuffixInterceptor');

        \$interceptor = new ParameterGenerator('suffixInterceptor');

        \$interceptor->setType(Closure::class);
        \$interceptor->setDefaultValue(null);
        \$this->setParameter(new ParameterGenerator('methodName', 'string'));
        \$this->setParameter(\$interceptor);
        \$this->setBody('\$this->' . \$suffixInterceptor->getName() . '[\$methodName] = \$suffixInterceptor;');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php";
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
 * Implementation for {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface::setMethodSuffixInterceptor}
 * for access interceptor objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetMethodSuffixInterceptor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$suffixInterceptor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$suffixInterceptor)
    {
        parent::__construct('setMethodSuffixInterceptor');

        \$interceptor = new ParameterGenerator('suffixInterceptor');

        \$interceptor->setType(Closure::class);
        \$interceptor->setDefaultValue(null);
        \$this->setParameter(new ParameterGenerator('methodName', 'string'));
        \$this->setParameter(\$interceptor);
        \$this->setBody('\$this->' . \$suffixInterceptor->getName() . '[\$methodName] = \$suffixInterceptor;');
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php");
    }
}
