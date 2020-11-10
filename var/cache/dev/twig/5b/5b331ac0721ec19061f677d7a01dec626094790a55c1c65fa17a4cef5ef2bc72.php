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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/PropertyGenerator/MethodSuffixInterceptors.php */
class __TwigTemplate_48c6408f83e6f0eda09dd2e00d0295d0a01aafd07dfbd7d4719efeef8bd6c59e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/PropertyGenerator/MethodSuffixInterceptors.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/PropertyGenerator/MethodSuffixInterceptors.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Property that contains the interceptor for operations to be executed after method execution
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MethodSuffixInterceptors extends PropertyGenerator
{
    /**
     * Constructor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct()
    {
        parent::__construct(IdentifierSuffixer::getIdentifier('methodSuffixInterceptors'));

        \$this->setDefaultValue([]);
        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setDocBlock('@var \\\\Closure[] map of interceptors to be called per-method after execution');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/PropertyGenerator/MethodSuffixInterceptors.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Property that contains the interceptor for operations to be executed after method execution
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MethodSuffixInterceptors extends PropertyGenerator
{
    /**
     * Constructor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct()
    {
        parent::__construct(IdentifierSuffixer::getIdentifier('methodSuffixInterceptors'));

        \$this->setDefaultValue([]);
        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setDocBlock('@var \\\\Closure[] map of interceptors to be called per-method after execution');
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/PropertyGenerator/MethodSuffixInterceptors.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/PropertyGenerator/MethodSuffixInterceptors.php");
    }
}
