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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Configuration.php */
class __TwigTemplate_59b6021dff127a12f1c05d6d7b6ee0d11b8f786d6e9ffefa926d541a176c1010 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Configuration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Configuration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager;

use ProxyManager\\Autoloader\\Autoloader;
use ProxyManager\\Autoloader\\AutoloaderInterface;
use ProxyManager\\FileLocator\\FileLocator;
use ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy;
use ProxyManager\\GeneratorStrategy\\GeneratorStrategyInterface;
use ProxyManager\\Inflector\\ClassNameInflector;
use ProxyManager\\Inflector\\ClassNameInflectorInterface;
use ProxyManager\\Signature\\ClassSignatureGenerator;
use ProxyManager\\Signature\\ClassSignatureGeneratorInterface;
use ProxyManager\\Signature\\SignatureChecker;
use ProxyManager\\Signature\\SignatureCheckerInterface;
use ProxyManager\\Signature\\SignatureGenerator;
use ProxyManager\\Signature\\SignatureGeneratorInterface;

/**
 * Base configuration class for the proxy manager - serves as micro disposable DIC/facade
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Configuration
{
    const DEFAULT_PROXY_NAMESPACE = 'ProxyManagerGeneratedProxy';

    /**
     * @var string|null
     */
    protected \$proxiesTargetDir;

    /**
     * @var string
     */
    protected \$proxiesNamespace = self::DEFAULT_PROXY_NAMESPACE;

    /**
     * @var GeneratorStrategyInterface|null
     */
    protected \$generatorStrategy;

    /**
     * @var AutoloaderInterface|null
     */
    protected \$proxyAutoloader;

    /**
     * @var ClassNameInflectorInterface|null
     */
    protected \$classNameInflector;

    /**
     * @var SignatureGeneratorInterface|null
     */
    protected \$signatureGenerator;

    /**
     * @var SignatureCheckerInterface|null
     */
    protected \$signatureChecker;

    /**
     * @var ClassSignatureGeneratorInterface|null
     */
    protected \$classSignatureGenerator;

    public function setProxyAutoloader(AutoloaderInterface \$proxyAutoloader) : void
    {
        \$this->proxyAutoloader = \$proxyAutoloader;
    }

    public function getProxyAutoloader() : AutoloaderInterface
    {
        return \$this->proxyAutoloader
            ?: \$this->proxyAutoloader = new Autoloader(
                new FileLocator(\$this->getProxiesTargetDir()),
                \$this->getClassNameInflector()
            );
    }

    public function setProxiesNamespace(string \$proxiesNamespace) : void
    {
        \$this->proxiesNamespace = \$proxiesNamespace;
    }

    public function getProxiesNamespace() : string
    {
        return \$this->proxiesNamespace;
    }

    public function setProxiesTargetDir(string \$proxiesTargetDir) : void
    {
        \$this->proxiesTargetDir = \$proxiesTargetDir;
    }

    public function getProxiesTargetDir() : string
    {
        return \$this->proxiesTargetDir ?: \$this->proxiesTargetDir = sys_get_temp_dir();
    }

    public function setGeneratorStrategy(GeneratorStrategyInterface \$generatorStrategy) : void
    {
        \$this->generatorStrategy = \$generatorStrategy;
    }

    public function getGeneratorStrategy() : GeneratorStrategyInterface
    {
        return \$this->generatorStrategy
            ?: \$this->generatorStrategy = new EvaluatingGeneratorStrategy();
    }

    public function setClassNameInflector(ClassNameInflectorInterface \$classNameInflector) : void
    {
        \$this->classNameInflector = \$classNameInflector;
    }

    public function getClassNameInflector() : ClassNameInflectorInterface
    {
        return \$this->classNameInflector
            ?: \$this->classNameInflector = new ClassNameInflector(\$this->getProxiesNamespace());
    }

    public function setSignatureGenerator(SignatureGeneratorInterface \$signatureGenerator) : void
    {
        \$this->signatureGenerator = \$signatureGenerator;
    }

    public function getSignatureGenerator() : SignatureGeneratorInterface
    {
        return \$this->signatureGenerator ?: \$this->signatureGenerator = new SignatureGenerator();
    }

    public function setSignatureChecker(SignatureCheckerInterface \$signatureChecker) : void
    {
        \$this->signatureChecker = \$signatureChecker;
    }

    public function getSignatureChecker() : SignatureCheckerInterface
    {
        return \$this->signatureChecker
            ?: \$this->signatureChecker = new SignatureChecker(\$this->getSignatureGenerator());
    }

    public function setClassSignatureGenerator(ClassSignatureGeneratorInterface \$classSignatureGenerator) : void
    {
        \$this->classSignatureGenerator = \$classSignatureGenerator;
    }

    public function getClassSignatureGenerator() : ClassSignatureGeneratorInterface
    {
        return \$this->classSignatureGenerator
            ?: new ClassSignatureGenerator(\$this->getSignatureGenerator());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Configuration.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager;

use ProxyManager\\Autoloader\\Autoloader;
use ProxyManager\\Autoloader\\AutoloaderInterface;
use ProxyManager\\FileLocator\\FileLocator;
use ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy;
use ProxyManager\\GeneratorStrategy\\GeneratorStrategyInterface;
use ProxyManager\\Inflector\\ClassNameInflector;
use ProxyManager\\Inflector\\ClassNameInflectorInterface;
use ProxyManager\\Signature\\ClassSignatureGenerator;
use ProxyManager\\Signature\\ClassSignatureGeneratorInterface;
use ProxyManager\\Signature\\SignatureChecker;
use ProxyManager\\Signature\\SignatureCheckerInterface;
use ProxyManager\\Signature\\SignatureGenerator;
use ProxyManager\\Signature\\SignatureGeneratorInterface;

/**
 * Base configuration class for the proxy manager - serves as micro disposable DIC/facade
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Configuration
{
    const DEFAULT_PROXY_NAMESPACE = 'ProxyManagerGeneratedProxy';

    /**
     * @var string|null
     */
    protected \$proxiesTargetDir;

    /**
     * @var string
     */
    protected \$proxiesNamespace = self::DEFAULT_PROXY_NAMESPACE;

    /**
     * @var GeneratorStrategyInterface|null
     */
    protected \$generatorStrategy;

    /**
     * @var AutoloaderInterface|null
     */
    protected \$proxyAutoloader;

    /**
     * @var ClassNameInflectorInterface|null
     */
    protected \$classNameInflector;

    /**
     * @var SignatureGeneratorInterface|null
     */
    protected \$signatureGenerator;

    /**
     * @var SignatureCheckerInterface|null
     */
    protected \$signatureChecker;

    /**
     * @var ClassSignatureGeneratorInterface|null
     */
    protected \$classSignatureGenerator;

    public function setProxyAutoloader(AutoloaderInterface \$proxyAutoloader) : void
    {
        \$this->proxyAutoloader = \$proxyAutoloader;
    }

    public function getProxyAutoloader() : AutoloaderInterface
    {
        return \$this->proxyAutoloader
            ?: \$this->proxyAutoloader = new Autoloader(
                new FileLocator(\$this->getProxiesTargetDir()),
                \$this->getClassNameInflector()
            );
    }

    public function setProxiesNamespace(string \$proxiesNamespace) : void
    {
        \$this->proxiesNamespace = \$proxiesNamespace;
    }

    public function getProxiesNamespace() : string
    {
        return \$this->proxiesNamespace;
    }

    public function setProxiesTargetDir(string \$proxiesTargetDir) : void
    {
        \$this->proxiesTargetDir = \$proxiesTargetDir;
    }

    public function getProxiesTargetDir() : string
    {
        return \$this->proxiesTargetDir ?: \$this->proxiesTargetDir = sys_get_temp_dir();
    }

    public function setGeneratorStrategy(GeneratorStrategyInterface \$generatorStrategy) : void
    {
        \$this->generatorStrategy = \$generatorStrategy;
    }

    public function getGeneratorStrategy() : GeneratorStrategyInterface
    {
        return \$this->generatorStrategy
            ?: \$this->generatorStrategy = new EvaluatingGeneratorStrategy();
    }

    public function setClassNameInflector(ClassNameInflectorInterface \$classNameInflector) : void
    {
        \$this->classNameInflector = \$classNameInflector;
    }

    public function getClassNameInflector() : ClassNameInflectorInterface
    {
        return \$this->classNameInflector
            ?: \$this->classNameInflector = new ClassNameInflector(\$this->getProxiesNamespace());
    }

    public function setSignatureGenerator(SignatureGeneratorInterface \$signatureGenerator) : void
    {
        \$this->signatureGenerator = \$signatureGenerator;
    }

    public function getSignatureGenerator() : SignatureGeneratorInterface
    {
        return \$this->signatureGenerator ?: \$this->signatureGenerator = new SignatureGenerator();
    }

    public function setSignatureChecker(SignatureCheckerInterface \$signatureChecker) : void
    {
        \$this->signatureChecker = \$signatureChecker;
    }

    public function getSignatureChecker() : SignatureCheckerInterface
    {
        return \$this->signatureChecker
            ?: \$this->signatureChecker = new SignatureChecker(\$this->getSignatureGenerator());
    }

    public function setClassSignatureGenerator(ClassSignatureGeneratorInterface \$classSignatureGenerator) : void
    {
        \$this->classSignatureGenerator = \$classSignatureGenerator;
    }

    public function getClassSignatureGenerator() : ClassSignatureGeneratorInterface
    {
        return \$this->classSignatureGenerator
            ?: new ClassSignatureGenerator(\$this->getSignatureGenerator());
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Configuration.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Configuration.php");
    }
}
