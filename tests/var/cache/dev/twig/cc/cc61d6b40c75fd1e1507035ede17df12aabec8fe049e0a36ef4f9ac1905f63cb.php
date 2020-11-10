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

/* vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php */
class __TwigTemplate_f5e5b687bd726b1e34cfdc842ee6426a57a253c0e2031b9e3c957e141dd6ee7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Proxy;

/**
 * Definition structure how to create a proxy.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class ProxyDefinition
{
    /**
     * @var string
     */
    public \$proxyClassName;

    /**
     * @var array
     */
    public \$identifierFields;

    /**
     * @var \\ReflectionProperty[]
     */
    public \$reflectionFields;

    /**
     * @var callable
     */
    public \$initializer;

    /**
     * @var callable
     */
    public \$cloner;

    /**
     * @param string   \$proxyClassName
     * @param array    \$identifierFields
     * @param array    \$reflectionFields
     * @param callable \$initializer
     * @param callable \$cloner
     */
    public function __construct(\$proxyClassName, array \$identifierFields, array \$reflectionFields, \$initializer, \$cloner)
    {
        \$this->proxyClassName   = \$proxyClassName;
        \$this->identifierFields = \$identifierFields;
        \$this->reflectionFields = \$reflectionFields;
        \$this->initializer      = \$initializer;
        \$this->cloner           = \$cloner;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Proxy;

/**
 * Definition structure how to create a proxy.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class ProxyDefinition
{
    /**
     * @var string
     */
    public \$proxyClassName;

    /**
     * @var array
     */
    public \$identifierFields;

    /**
     * @var \\ReflectionProperty[]
     */
    public \$reflectionFields;

    /**
     * @var callable
     */
    public \$initializer;

    /**
     * @var callable
     */
    public \$cloner;

    /**
     * @param string   \$proxyClassName
     * @param array    \$identifierFields
     * @param array    \$reflectionFields
     * @param callable \$initializer
     * @param callable \$cloner
     */
    public function __construct(\$proxyClassName, array \$identifierFields, array \$reflectionFields, \$initializer, \$cloner)
    {
        \$this->proxyClassName   = \$proxyClassName;
        \$this->identifierFields = \$identifierFields;
        \$this->reflectionFields = \$reflectionFields;
        \$this->initializer      = \$initializer;
        \$this->cloner           = \$cloner;
    }
}
", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php");
    }
}
