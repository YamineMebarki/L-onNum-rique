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

/* vendor/doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php */
class __TwigTemplate_94b72c3490ac15a87a53c49a2578ce3bb676b0dce32ba517b50e8f51909fe5bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Proxy;

use Doctrine\\Common\\Proxy\\Exception\\InvalidArgumentException;

/**
 * Special Autoloader for Proxy classes, which are not PSR-0 compliant.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 *
 * @internal
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class Autoloader
{
    /**
     * Resolves proxy class name to a filename based on the following pattern.
     *
     * 1. Remove Proxy namespace from class name.
     * 2. Remove namespace separators from remaining class name.
     * 3. Return PHP filename from proxy-dir with the result from 2.
     *
     * @param string \$proxyDir
     * @param string \$proxyNamespace
     * @param string \$className
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public static function resolveFile(\$proxyDir, \$proxyNamespace, \$className)
    {
        if (0 !== strpos(\$className, \$proxyNamespace)) {
            throw InvalidArgumentException::notProxyClass(\$className, \$proxyNamespace);
        }

        // remove proxy namespace from class name
        \$classNameRelativeToProxyNamespace = substr(\$className, strlen(\$proxyNamespace));

        // remove namespace separators from remaining class name
        \$fileName = str_replace('\\\\', '', \$classNameRelativeToProxyNamespace);

        return \$proxyDir . DIRECTORY_SEPARATOR . \$fileName . '.php';
    }

    /**
     * Registers and returns autoloader callback for the given proxy dir and namespace.
     *
     * @param string        \$proxyDir
     * @param string        \$proxyNamespace
     * @param callable|null \$notFoundCallback Invoked when the proxy file is not found.
     *
     * @return \\Closure
     *
     * @throws InvalidArgumentException
     */
    public static function register(\$proxyDir, \$proxyNamespace, \$notFoundCallback = null)
    {
        \$proxyNamespace = ltrim(\$proxyNamespace, '\\\\');

        if ( ! (null === \$notFoundCallback || is_callable(\$notFoundCallback))) {
            throw InvalidArgumentException::invalidClassNotFoundCallback(\$notFoundCallback);
        }

        \$autoloader = function (\$className) use (\$proxyDir, \$proxyNamespace, \$notFoundCallback) {
            if (0 === strpos(\$className, \$proxyNamespace)) {
                \$file = Autoloader::resolveFile(\$proxyDir, \$proxyNamespace, \$className);

                if (\$notFoundCallback && ! file_exists(\$file)) {
                    call_user_func(\$notFoundCallback, \$proxyDir, \$proxyNamespace, \$className);
                }

                require \$file;
            }
        };

        spl_autoload_register(\$autoloader);

        return \$autoloader;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Proxy;

use Doctrine\\Common\\Proxy\\Exception\\InvalidArgumentException;

/**
 * Special Autoloader for Proxy classes, which are not PSR-0 compliant.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 *
 * @internal
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class Autoloader
{
    /**
     * Resolves proxy class name to a filename based on the following pattern.
     *
     * 1. Remove Proxy namespace from class name.
     * 2. Remove namespace separators from remaining class name.
     * 3. Return PHP filename from proxy-dir with the result from 2.
     *
     * @param string \$proxyDir
     * @param string \$proxyNamespace
     * @param string \$className
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public static function resolveFile(\$proxyDir, \$proxyNamespace, \$className)
    {
        if (0 !== strpos(\$className, \$proxyNamespace)) {
            throw InvalidArgumentException::notProxyClass(\$className, \$proxyNamespace);
        }

        // remove proxy namespace from class name
        \$classNameRelativeToProxyNamespace = substr(\$className, strlen(\$proxyNamespace));

        // remove namespace separators from remaining class name
        \$fileName = str_replace('\\\\', '', \$classNameRelativeToProxyNamespace);

        return \$proxyDir . DIRECTORY_SEPARATOR . \$fileName . '.php';
    }

    /**
     * Registers and returns autoloader callback for the given proxy dir and namespace.
     *
     * @param string        \$proxyDir
     * @param string        \$proxyNamespace
     * @param callable|null \$notFoundCallback Invoked when the proxy file is not found.
     *
     * @return \\Closure
     *
     * @throws InvalidArgumentException
     */
    public static function register(\$proxyDir, \$proxyNamespace, \$notFoundCallback = null)
    {
        \$proxyNamespace = ltrim(\$proxyNamespace, '\\\\');

        if ( ! (null === \$notFoundCallback || is_callable(\$notFoundCallback))) {
            throw InvalidArgumentException::invalidClassNotFoundCallback(\$notFoundCallback);
        }

        \$autoloader = function (\$className) use (\$proxyDir, \$proxyNamespace, \$notFoundCallback) {
            if (0 === strpos(\$className, \$proxyNamespace)) {
                \$file = Autoloader::resolveFile(\$proxyDir, \$proxyNamespace, \$className);

                if (\$notFoundCallback && ! file_exists(\$file)) {
                    call_user_func(\$notFoundCallback, \$proxyDir, \$proxyNamespace, \$className);
                }

                require \$file;
            }
        };

        spl_autoload_register(\$autoloader);

        return \$autoloader;
    }
}
", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php");
    }
}
