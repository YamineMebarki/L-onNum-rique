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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflector.php */
class __TwigTemplate_aad6028f02fe14ded47759f8b5497f41c5a419bc97cefb0e15d5922644598d46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflector.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Inflector;

use ProxyManager\\Inflector\\Util\\ParameterHasher;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ClassNameInflector implements ClassNameInflectorInterface
{
    /**
     * @var string
     */
    protected \$proxyNamespace;

    /**
     * @var int
     */
    private \$proxyMarkerLength;

    /**
     * @var string
     */
    private \$proxyMarker;

    /**
     * @var \\ProxyManager\\Inflector\\Util\\ParameterHasher
     */
    private \$parameterHasher;

    /**
     * @param string \$proxyNamespace
     */
    public function __construct(string \$proxyNamespace)
    {
        \$this->proxyNamespace    = \$proxyNamespace;
        \$this->proxyMarker       = '\\\\' . static::PROXY_MARKER . '\\\\';
        \$this->proxyMarkerLength = strlen(\$this->proxyMarker);
        \$this->parameterHasher   = new ParameterHasher();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserClassName(string \$className) : string
    {
        \$className = ltrim(\$className, '\\\\');

        if (false === \$position = strrpos(\$className, \$this->proxyMarker)) {
            return \$className;
        }

        return substr(
            \$className,
            \$this->proxyMarkerLength + \$position,
            strrpos(\$className, '\\\\') - (\$position + \$this->proxyMarkerLength)
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyClassName(string \$className, array \$options = []) : string
    {
        return \$this->proxyNamespace
            . \$this->proxyMarker
            . \$this->getUserClassName(\$className)
            . '\\\\Generated' . \$this->parameterHasher->hashParameters(\$options);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyClassName(string \$className) : bool
    {
        return false !== strrpos(\$className, \$this->proxyMarker);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Inflector;

use ProxyManager\\Inflector\\Util\\ParameterHasher;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ClassNameInflector implements ClassNameInflectorInterface
{
    /**
     * @var string
     */
    protected \$proxyNamespace;

    /**
     * @var int
     */
    private \$proxyMarkerLength;

    /**
     * @var string
     */
    private \$proxyMarker;

    /**
     * @var \\ProxyManager\\Inflector\\Util\\ParameterHasher
     */
    private \$parameterHasher;

    /**
     * @param string \$proxyNamespace
     */
    public function __construct(string \$proxyNamespace)
    {
        \$this->proxyNamespace    = \$proxyNamespace;
        \$this->proxyMarker       = '\\\\' . static::PROXY_MARKER . '\\\\';
        \$this->proxyMarkerLength = strlen(\$this->proxyMarker);
        \$this->parameterHasher   = new ParameterHasher();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserClassName(string \$className) : string
    {
        \$className = ltrim(\$className, '\\\\');

        if (false === \$position = strrpos(\$className, \$this->proxyMarker)) {
            return \$className;
        }

        return substr(
            \$className,
            \$this->proxyMarkerLength + \$position,
            strrpos(\$className, '\\\\') - (\$position + \$this->proxyMarkerLength)
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyClassName(string \$className, array \$options = []) : string
    {
        return \$this->proxyNamespace
            . \$this->proxyMarker
            . \$this->getUserClassName(\$className)
            . '\\\\Generated' . \$this->parameterHasher->hashParameters(\$options);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyClassName(string \$className) : bool
    {
        return false !== strrpos(\$className, \$this->proxyMarker);
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflector.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflector.php");
    }
}
