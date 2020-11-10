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

/* vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocator.php */
class __TwigTemplate_52526cc39df6f602f490238f370d3d1f1e3ee886597247747842d9e64b1f8bdd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\FileLocator;

use ProxyManager\\Exception\\InvalidProxyDirectoryException;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileLocator implements FileLocatorInterface
{
    /**
     * @var string
     */
    protected \$proxiesDirectory;

    /**
     * @param string \$proxiesDirectory
     *
     * @throws \\ProxyManager\\Exception\\InvalidProxyDirectoryException
     */
    public function __construct(string \$proxiesDirectory)
    {
        \$absolutePath = realpath(\$proxiesDirectory);

        if (false === \$absolutePath) {
            throw InvalidProxyDirectoryException::proxyDirectoryNotFound(\$proxiesDirectory);
        }

        \$this->proxiesDirectory = \$absolutePath;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFileName(string \$className) : string
    {
        return \$this->proxiesDirectory . DIRECTORY_SEPARATOR . str_replace('\\\\', '', \$className) . '.php';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\FileLocator;

use ProxyManager\\Exception\\InvalidProxyDirectoryException;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileLocator implements FileLocatorInterface
{
    /**
     * @var string
     */
    protected \$proxiesDirectory;

    /**
     * @param string \$proxiesDirectory
     *
     * @throws \\ProxyManager\\Exception\\InvalidProxyDirectoryException
     */
    public function __construct(string \$proxiesDirectory)
    {
        \$absolutePath = realpath(\$proxiesDirectory);

        if (false === \$absolutePath) {
            throw InvalidProxyDirectoryException::proxyDirectoryNotFound(\$proxiesDirectory);
        }

        \$this->proxiesDirectory = \$absolutePath;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFileName(string \$className) : string
    {
        return \$this->proxiesDirectory . DIRECTORY_SEPARATOR . str_replace('\\\\', '', \$className) . '.php';
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocator.php");
    }
}
