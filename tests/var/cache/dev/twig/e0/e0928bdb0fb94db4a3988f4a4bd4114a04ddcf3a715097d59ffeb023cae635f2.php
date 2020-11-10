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

/* vendor/symfony/maker-bundle/src/Generator.php */
class __TwigTemplate_728f32a5d401ec21e74d1e023aed2463ac5db4875d0e26a81e2cff09a03c4611 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Generator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Generator.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class Generator
{
    private \$fileManager;
    private \$twigHelper;
    private \$pendingOperations = [];
    private \$namespacePrefix;

    public function __construct(FileManager \$fileManager, string \$namespacePrefix)
    {
        \$this->fileManager = \$fileManager;
        \$this->twigHelper = new GeneratorTwigHelper(\$fileManager);
        \$this->namespacePrefix = trim(\$namespacePrefix, '\\\\');
    }

    /**
     * Generate a new file for a class from a template.
     *
     * @param string \$className    The fully-qualified class name
     * @param string \$templateName Template name in Resources/skeleton to use
     * @param array  \$variables    Array of variables to pass to the template
     *
     * @return string The path where the file will be created
     *
     * @throws \\Exception
     */
    public function generateClass(string \$className, string \$templateName, array \$variables = []): string
    {
        \$targetPath = \$this->fileManager->getRelativePathForFutureClass(\$className);

        if (null === \$targetPath) {
            throw new \\LogicException(sprintf('Could not determine where to locate the new class \"%s\", maybe try with a full namespace like \"\\\\My\\\\Full\\\\Namespace\\\\%s\"', \$className, Str::getShortClassName(\$className)));
        }

        \$variables = array_merge(\$variables, [
            'class_name' => Str::getShortClassName(\$className),
            'namespace' => Str::getNamespace(\$className),
        ]);

        \$this->addOperation(\$targetPath, \$templateName, \$variables);

        return \$targetPath;
    }

    /**
     * Generate a normal file from a template.
     *
     * @param string \$targetPath
     * @param string \$templateName
     * @param array  \$variables
     */
    public function generateFile(string \$targetPath, string \$templateName, array \$variables)
    {
        \$variables = array_merge(\$variables, [
            'helper' => \$this->twigHelper,
        ]);

        \$this->addOperation(\$targetPath, \$templateName, \$variables);
    }

    public function dumpFile(string \$targetPath, string \$contents)
    {
        \$this->pendingOperations[\$targetPath] = [
            'contents' => \$contents,
        ];
    }

    public function getFileContentsForPendingOperation(string \$targetPath): string
    {
        if (!isset(\$this->pendingOperations[\$targetPath])) {
            throw new RuntimeCommandException(sprintf('File \"%s\" is not in the Generator\\'s pending operations', \$targetPath));
        }

        \$templatePath = \$this->pendingOperations[\$targetPath]['template'];
        \$parameters = \$this->pendingOperations[\$targetPath]['variables'];

        \$templateParameters = array_merge(\$parameters, [
            'relative_path' => \$this->fileManager->relativizePath(\$targetPath),
        ]);

        return \$this->fileManager->parseTemplate(\$templatePath, \$templateParameters);
    }

    /**
     * Creates a helper object to get data about a class name.
     *
     * Examples:
     *
     *      // App\\Entity\\FeaturedProduct
     *      \$gen->createClassNameDetails('FeaturedProduct', 'Entity');
     *      \$gen->createClassNameDetails('featured product', 'Entity');
     *
     *      // App\\Controller\\FooController
     *      \$gen->createClassNameDetails('foo', 'Controller', 'Controller');
     *
     *      // App\\Controller\\Admin\\FooController
     *      \$gen->createClassNameDetails('Foo\\\\Admin', 'Controller', 'Controller');
     *
     *      // App\\Controller\\Security\\Voter\\CoolController
     *      \$gen->createClassNameDetails('Cool', 'Security\\Voter', 'Voter');
     *
     *      // Full class names can also be passed. Imagine the user has an autoload
     *      // rule where Cool\\Stuff lives in a \"lib/\" directory
     *      // Cool\\Stuff\\BalloonController
     *      \$gen->createClassNameDetails('Cool\\\\Stuff\\\\Balloon', 'Controller', 'Controller');
     *
     * @param string \$name                   The short \"name\" that will be turned into the class name
     * @param string \$namespacePrefix        Recommended namespace where this class should live, but *without* the \"App\\\\\" part
     * @param string \$suffix                 Optional suffix to guarantee is on the end of the class
     * @param string \$validationErrorMessage
     *
     * @return ClassNameDetails
     */
    public function createClassNameDetails(string \$name, string \$namespacePrefix, string \$suffix = '', string \$validationErrorMessage = ''): ClassNameDetails
    {
        \$fullNamespacePrefix = \$this->namespacePrefix.'\\\\'.\$namespacePrefix;
        if ('\\\\' === \$name[0]) {
            // class is already \"absolute\" - leave it alone (but strip opening \\)
            \$className = substr(\$name, 1);
        } else {
            \$className = rtrim(\$fullNamespacePrefix, '\\\\').'\\\\'.Str::asClassName(\$name, \$suffix);
        }

        Validator::validateClassName(\$className, \$validationErrorMessage);

        // if this is a custom class, we may be completely different than the namespace prefix
        // the best way can do, is find the PSR4 prefix and use that
        if (0 !== strpos(\$className, \$fullNamespacePrefix)) {
            \$fullNamespacePrefix = \$this->fileManager->getNamespacePrefixForClass(\$className);
        }

        return new ClassNameDetails(\$className, \$fullNamespacePrefix, \$suffix);
    }

    public function getRootDirectory(): string
    {
        return \$this->fileManager->getRootDirectory();
    }

    private function addOperation(string \$targetPath, string \$templateName, array \$variables)
    {
        if (\$this->fileManager->fileExists(\$targetPath)) {
            throw new RuntimeCommandException(sprintf(
                'The file \"%s\" can\\'t be generated because it already exists.',
                \$this->fileManager->relativizePath(\$targetPath)
            ));
        }

        \$variables['relative_path'] = \$this->fileManager->relativizePath(\$targetPath);

        \$templatePath = \$templateName;
        if (!file_exists(\$templatePath)) {
            \$templatePath = __DIR__.'/Resources/skeleton/'.\$templateName;

            if (!file_exists(\$templatePath)) {
                throw new \\Exception(sprintf('Cannot find template \"%s\"', \$templateName));
            }
        }

        \$this->pendingOperations[\$targetPath] = [
            'template' => \$templatePath,
            'variables' => \$variables,
        ];
    }

    public function hasPendingOperations(): bool
    {
        return !empty(\$this->pendingOperations);
    }

    /**
     * Actually writes and file changes that are pending.
     */
    public function writeChanges()
    {
        foreach (\$this->pendingOperations as \$targetPath => \$templateData) {
            if (isset(\$templateData['contents'])) {
                \$this->fileManager->dumpFile(\$targetPath, \$templateData['contents']);

                continue;
            }

            \$this->fileManager->dumpFile(
                \$targetPath,
                \$this->getFileContentsForPendingOperation(\$targetPath, \$templateData)
            );
        }

        \$this->pendingOperations = [];
    }

    public function getRootNamespace(): string
    {
        return \$this->namespacePrefix;
    }

    public function generateController(string \$controllerClassName, string \$controllerTemplatePath, array \$parameters = []): string
    {
        return \$this->generateClass(
            \$controllerClassName,
            \$controllerTemplatePath,
            \$parameters +
            [
                'parent_class_name' => method_exists(AbstractController::class, 'getParameter') ? 'AbstractController' : 'Controller',
            ]
        );
    }

    /**
     * Generate a template file.
     *
     * @param string \$targetPath
     * @param string \$templateName
     * @param array  \$variables
     */
    public function generateTemplate(string \$targetPath, string \$templateName, array \$variables)
    {
        \$this->generateFile(
            \$this->fileManager->getPathForTemplate(\$targetPath),
            \$templateName,
            \$variables
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Generator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class Generator
{
    private \$fileManager;
    private \$twigHelper;
    private \$pendingOperations = [];
    private \$namespacePrefix;

    public function __construct(FileManager \$fileManager, string \$namespacePrefix)
    {
        \$this->fileManager = \$fileManager;
        \$this->twigHelper = new GeneratorTwigHelper(\$fileManager);
        \$this->namespacePrefix = trim(\$namespacePrefix, '\\\\');
    }

    /**
     * Generate a new file for a class from a template.
     *
     * @param string \$className    The fully-qualified class name
     * @param string \$templateName Template name in Resources/skeleton to use
     * @param array  \$variables    Array of variables to pass to the template
     *
     * @return string The path where the file will be created
     *
     * @throws \\Exception
     */
    public function generateClass(string \$className, string \$templateName, array \$variables = []): string
    {
        \$targetPath = \$this->fileManager->getRelativePathForFutureClass(\$className);

        if (null === \$targetPath) {
            throw new \\LogicException(sprintf('Could not determine where to locate the new class \"%s\", maybe try with a full namespace like \"\\\\My\\\\Full\\\\Namespace\\\\%s\"', \$className, Str::getShortClassName(\$className)));
        }

        \$variables = array_merge(\$variables, [
            'class_name' => Str::getShortClassName(\$className),
            'namespace' => Str::getNamespace(\$className),
        ]);

        \$this->addOperation(\$targetPath, \$templateName, \$variables);

        return \$targetPath;
    }

    /**
     * Generate a normal file from a template.
     *
     * @param string \$targetPath
     * @param string \$templateName
     * @param array  \$variables
     */
    public function generateFile(string \$targetPath, string \$templateName, array \$variables)
    {
        \$variables = array_merge(\$variables, [
            'helper' => \$this->twigHelper,
        ]);

        \$this->addOperation(\$targetPath, \$templateName, \$variables);
    }

    public function dumpFile(string \$targetPath, string \$contents)
    {
        \$this->pendingOperations[\$targetPath] = [
            'contents' => \$contents,
        ];
    }

    public function getFileContentsForPendingOperation(string \$targetPath): string
    {
        if (!isset(\$this->pendingOperations[\$targetPath])) {
            throw new RuntimeCommandException(sprintf('File \"%s\" is not in the Generator\\'s pending operations', \$targetPath));
        }

        \$templatePath = \$this->pendingOperations[\$targetPath]['template'];
        \$parameters = \$this->pendingOperations[\$targetPath]['variables'];

        \$templateParameters = array_merge(\$parameters, [
            'relative_path' => \$this->fileManager->relativizePath(\$targetPath),
        ]);

        return \$this->fileManager->parseTemplate(\$templatePath, \$templateParameters);
    }

    /**
     * Creates a helper object to get data about a class name.
     *
     * Examples:
     *
     *      // App\\Entity\\FeaturedProduct
     *      \$gen->createClassNameDetails('FeaturedProduct', 'Entity');
     *      \$gen->createClassNameDetails('featured product', 'Entity');
     *
     *      // App\\Controller\\FooController
     *      \$gen->createClassNameDetails('foo', 'Controller', 'Controller');
     *
     *      // App\\Controller\\Admin\\FooController
     *      \$gen->createClassNameDetails('Foo\\\\Admin', 'Controller', 'Controller');
     *
     *      // App\\Controller\\Security\\Voter\\CoolController
     *      \$gen->createClassNameDetails('Cool', 'Security\\Voter', 'Voter');
     *
     *      // Full class names can also be passed. Imagine the user has an autoload
     *      // rule where Cool\\Stuff lives in a \"lib/\" directory
     *      // Cool\\Stuff\\BalloonController
     *      \$gen->createClassNameDetails('Cool\\\\Stuff\\\\Balloon', 'Controller', 'Controller');
     *
     * @param string \$name                   The short \"name\" that will be turned into the class name
     * @param string \$namespacePrefix        Recommended namespace where this class should live, but *without* the \"App\\\\\" part
     * @param string \$suffix                 Optional suffix to guarantee is on the end of the class
     * @param string \$validationErrorMessage
     *
     * @return ClassNameDetails
     */
    public function createClassNameDetails(string \$name, string \$namespacePrefix, string \$suffix = '', string \$validationErrorMessage = ''): ClassNameDetails
    {
        \$fullNamespacePrefix = \$this->namespacePrefix.'\\\\'.\$namespacePrefix;
        if ('\\\\' === \$name[0]) {
            // class is already \"absolute\" - leave it alone (but strip opening \\)
            \$className = substr(\$name, 1);
        } else {
            \$className = rtrim(\$fullNamespacePrefix, '\\\\').'\\\\'.Str::asClassName(\$name, \$suffix);
        }

        Validator::validateClassName(\$className, \$validationErrorMessage);

        // if this is a custom class, we may be completely different than the namespace prefix
        // the best way can do, is find the PSR4 prefix and use that
        if (0 !== strpos(\$className, \$fullNamespacePrefix)) {
            \$fullNamespacePrefix = \$this->fileManager->getNamespacePrefixForClass(\$className);
        }

        return new ClassNameDetails(\$className, \$fullNamespacePrefix, \$suffix);
    }

    public function getRootDirectory(): string
    {
        return \$this->fileManager->getRootDirectory();
    }

    private function addOperation(string \$targetPath, string \$templateName, array \$variables)
    {
        if (\$this->fileManager->fileExists(\$targetPath)) {
            throw new RuntimeCommandException(sprintf(
                'The file \"%s\" can\\'t be generated because it already exists.',
                \$this->fileManager->relativizePath(\$targetPath)
            ));
        }

        \$variables['relative_path'] = \$this->fileManager->relativizePath(\$targetPath);

        \$templatePath = \$templateName;
        if (!file_exists(\$templatePath)) {
            \$templatePath = __DIR__.'/Resources/skeleton/'.\$templateName;

            if (!file_exists(\$templatePath)) {
                throw new \\Exception(sprintf('Cannot find template \"%s\"', \$templateName));
            }
        }

        \$this->pendingOperations[\$targetPath] = [
            'template' => \$templatePath,
            'variables' => \$variables,
        ];
    }

    public function hasPendingOperations(): bool
    {
        return !empty(\$this->pendingOperations);
    }

    /**
     * Actually writes and file changes that are pending.
     */
    public function writeChanges()
    {
        foreach (\$this->pendingOperations as \$targetPath => \$templateData) {
            if (isset(\$templateData['contents'])) {
                \$this->fileManager->dumpFile(\$targetPath, \$templateData['contents']);

                continue;
            }

            \$this->fileManager->dumpFile(
                \$targetPath,
                \$this->getFileContentsForPendingOperation(\$targetPath, \$templateData)
            );
        }

        \$this->pendingOperations = [];
    }

    public function getRootNamespace(): string
    {
        return \$this->namespacePrefix;
    }

    public function generateController(string \$controllerClassName, string \$controllerTemplatePath, array \$parameters = []): string
    {
        return \$this->generateClass(
            \$controllerClassName,
            \$controllerTemplatePath,
            \$parameters +
            [
                'parent_class_name' => method_exists(AbstractController::class, 'getParameter') ? 'AbstractController' : 'Controller',
            ]
        );
    }

    /**
     * Generate a template file.
     *
     * @param string \$targetPath
     * @param string \$templateName
     * @param array  \$variables
     */
    public function generateTemplate(string \$targetPath, string \$templateName, array \$variables)
    {
        \$this->generateFile(
            \$this->fileManager->getPathForTemplate(\$targetPath),
            \$templateName,
            \$variables
        );
    }
}
", "vendor/symfony/maker-bundle/src/Generator.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Generator.php");
    }
}
