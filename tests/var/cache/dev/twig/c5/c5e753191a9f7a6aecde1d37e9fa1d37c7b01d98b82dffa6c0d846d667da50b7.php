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

/* vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php */
class __TwigTemplate_d3b5ddd211e048f3e71bc44bfcbcb5cf0d15330508fba13b4dbca8794fe91f33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\GeneratorStrategy;

use ProxyManager\\Exception\\FileNotWritableException;
use ProxyManager\\FileLocator\\FileLocatorInterface;
use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Generator strategy that writes the generated classes to disk while generating them
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileWriterGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * @var \\ProxyManager\\FileLocator\\FileLocatorInterface
     */
    protected \$fileLocator;

    /**
     * @var callable
     */
    private \$emptyErrorHandler;

    /**
     * @param \\ProxyManager\\FileLocator\\FileLocatorInterface \$fileLocator
     */
    public function __construct(FileLocatorInterface \$fileLocator)
    {
        \$this->fileLocator       = \$fileLocator;
        \$this->emptyErrorHandler = function () {
        };
    }

    /**
     * Write generated code to disk and return the class code
     *
     * {@inheritDoc}
     *
     * @throws FileNotWritableException
     */
    public function generate(ClassGenerator \$classGenerator) : string
    {
        \$className     = trim(\$classGenerator->getNamespaceName(), '\\\\')
            . '\\\\' . trim(\$classGenerator->getName(), '\\\\');
        \$generatedCode = \$classGenerator->generate();
        \$fileName      = \$this->fileLocator->getProxyFileName(\$className);

        set_error_handler(\$this->emptyErrorHandler);

        try {
            \$this->writeFile(\"<?php\\n\\n\" . \$generatedCode, \$fileName);

            return \$generatedCode;
        } finally {
            restore_error_handler();
        }
    }

    /**
     * Writes the source file in such a way that race conditions are avoided when the same file is written
     * multiple times in a short time period
     *
     * @param string \$source
     * @param string \$location
     *
     * @throws FileNotWritableException
     */
    private function writeFile(string \$source, string \$location) : void
    {
        \$tmpFileName = tempnam(\$location, 'temporaryProxyManagerFile');

        file_put_contents(\$tmpFileName, \$source);
        chmod(\$tmpFileName, 0666 & ~umask());

        if (! rename(\$tmpFileName, \$location)) {
            unlink(\$tmpFileName);

            throw FileNotWritableException::fromInvalidMoveOperation(\$tmpFileName, \$location);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\GeneratorStrategy;

use ProxyManager\\Exception\\FileNotWritableException;
use ProxyManager\\FileLocator\\FileLocatorInterface;
use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Generator strategy that writes the generated classes to disk while generating them
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileWriterGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * @var \\ProxyManager\\FileLocator\\FileLocatorInterface
     */
    protected \$fileLocator;

    /**
     * @var callable
     */
    private \$emptyErrorHandler;

    /**
     * @param \\ProxyManager\\FileLocator\\FileLocatorInterface \$fileLocator
     */
    public function __construct(FileLocatorInterface \$fileLocator)
    {
        \$this->fileLocator       = \$fileLocator;
        \$this->emptyErrorHandler = function () {
        };
    }

    /**
     * Write generated code to disk and return the class code
     *
     * {@inheritDoc}
     *
     * @throws FileNotWritableException
     */
    public function generate(ClassGenerator \$classGenerator) : string
    {
        \$className     = trim(\$classGenerator->getNamespaceName(), '\\\\')
            . '\\\\' . trim(\$classGenerator->getName(), '\\\\');
        \$generatedCode = \$classGenerator->generate();
        \$fileName      = \$this->fileLocator->getProxyFileName(\$className);

        set_error_handler(\$this->emptyErrorHandler);

        try {
            \$this->writeFile(\"<?php\\n\\n\" . \$generatedCode, \$fileName);

            return \$generatedCode;
        } finally {
            restore_error_handler();
        }
    }

    /**
     * Writes the source file in such a way that race conditions are avoided when the same file is written
     * multiple times in a short time period
     *
     * @param string \$source
     * @param string \$location
     *
     * @throws FileNotWritableException
     */
    private function writeFile(string \$source, string \$location) : void
    {
        \$tmpFileName = tempnam(\$location, 'temporaryProxyManagerFile');

        file_put_contents(\$tmpFileName, \$source);
        chmod(\$tmpFileName, 0666 & ~umask());

        if (! rename(\$tmpFileName, \$location)) {
            unlink(\$tmpFileName);

            throw FileNotWritableException::fromInvalidMoveOperation(\$tmpFileName, \$location);
        }
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php");
    }
}
