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

/* vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php */
class __TwigTemplate_a9942910d72861f49b0a9305b23293e1a511e5f1e3ad41d2bddbeaaedb15ec6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use Doctrine\\Common\\Persistence\\Proxy;
use InvalidArgumentException as BaseInvalidArgumentException;

/**
 * Proxy Invalid Argument Exception.
 *
 * @link   www.doctrine-project.org
 * @since  2.4
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ProxyException
{
    /**
     * @return self
     */
    public static function proxyDirectoryRequired()
    {
        return new self('You must configure a proxy directory. See docs for details');
    }

    /**
     * @param string \$className
     * @param string \$proxyNamespace
     *
     * @return self
     */
    public static function notProxyClass(\$className, \$proxyNamespace)
    {
        return new self(sprintf('The class \"%s\" is not part of the proxy namespace \"%s\"', \$className, \$proxyNamespace));
    }

    /**
     * @param string \$name
     *
     * @return self
     */
    public static function invalidPlaceholder(\$name)
    {
        return new self(sprintf('Provided placeholder for \"%s\" must be either a string or a valid callable', \$name));
    }

    /**
     * @return self
     */
    public static function proxyNamespaceRequired()
    {
        return new self('You must configure a proxy namespace');
    }

    /**
     * @param Proxy \$proxy
     *
     * @return self
     */
    public static function unitializedProxyExpected(Proxy \$proxy)
    {
        return new self(sprintf('Provided proxy of type \"%s\" must not be initialized.', get_class(\$proxy)));
    }

    /**
     * @param mixed \$callback
     *
     * @return self
     */
    public static function invalidClassNotFoundCallback(\$callback)
    {
        \$type = is_object(\$callback) ? get_class(\$callback) : gettype(\$callback);

        return new self(sprintf('Invalid \\\$notFoundCallback given: must be a callable, \"%s\" given', \$type));
    }

    /**
     * @param string \$className
     *
     * @return self
     */
    public static function classMustNotBeAbstract(\$className)
    {
        return new self(sprintf('Unable to create a proxy for an abstract class \"%s\".', \$className));
    }

    /**
     * @param string \$className
     *
     * @return self
     */
    public static function classMustNotBeFinal(\$className)
    {
        return new self(sprintf('Unable to create a proxy for a final class \"%s\".', \$className));
    }

    /**
     * @param mixed \$value
     *
     * @return self
     */
    public static function invalidAutoGenerateMode(\$value) : self
    {
        return new self(sprintf('Invalid auto generate mode \"%s\" given.', \$value));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use Doctrine\\Common\\Persistence\\Proxy;
use InvalidArgumentException as BaseInvalidArgumentException;

/**
 * Proxy Invalid Argument Exception.
 *
 * @link   www.doctrine-project.org
 * @since  2.4
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ProxyException
{
    /**
     * @return self
     */
    public static function proxyDirectoryRequired()
    {
        return new self('You must configure a proxy directory. See docs for details');
    }

    /**
     * @param string \$className
     * @param string \$proxyNamespace
     *
     * @return self
     */
    public static function notProxyClass(\$className, \$proxyNamespace)
    {
        return new self(sprintf('The class \"%s\" is not part of the proxy namespace \"%s\"', \$className, \$proxyNamespace));
    }

    /**
     * @param string \$name
     *
     * @return self
     */
    public static function invalidPlaceholder(\$name)
    {
        return new self(sprintf('Provided placeholder for \"%s\" must be either a string or a valid callable', \$name));
    }

    /**
     * @return self
     */
    public static function proxyNamespaceRequired()
    {
        return new self('You must configure a proxy namespace');
    }

    /**
     * @param Proxy \$proxy
     *
     * @return self
     */
    public static function unitializedProxyExpected(Proxy \$proxy)
    {
        return new self(sprintf('Provided proxy of type \"%s\" must not be initialized.', get_class(\$proxy)));
    }

    /**
     * @param mixed \$callback
     *
     * @return self
     */
    public static function invalidClassNotFoundCallback(\$callback)
    {
        \$type = is_object(\$callback) ? get_class(\$callback) : gettype(\$callback);

        return new self(sprintf('Invalid \\\$notFoundCallback given: must be a callable, \"%s\" given', \$type));
    }

    /**
     * @param string \$className
     *
     * @return self
     */
    public static function classMustNotBeAbstract(\$className)
    {
        return new self(sprintf('Unable to create a proxy for an abstract class \"%s\".', \$className));
    }

    /**
     * @param string \$className
     *
     * @return self
     */
    public static function classMustNotBeFinal(\$className)
    {
        return new self(sprintf('Unable to create a proxy for a final class \"%s\".', \$className));
    }

    /**
     * @param mixed \$value
     *
     * @return self
     */
    public static function invalidAutoGenerateMode(\$value) : self
    {
        return new self(sprintf('Invalid auto generate mode \"%s\" given.', \$value));
    }
}
", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php");
    }
}
