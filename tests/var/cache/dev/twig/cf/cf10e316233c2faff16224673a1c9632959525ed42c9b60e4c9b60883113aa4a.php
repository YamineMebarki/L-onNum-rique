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

/* vendor/symfony/maker-bundle/src/FileManager.php */
class __TwigTemplate_e7cc00cd401d54039ad1213eee90eaef75ac71e9cefe6aa22350fb058e7c911b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/FileManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/FileManager.php"));

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

use Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Finder\\Finder;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 *
 * @internal
 */
class FileManager
{
    private \$fs;
    private \$autoloaderUtil;
    private \$rootDirectory;
    /** @var SymfonyStyle */
    private \$io;
    private \$twigDefaultPath;

    public function __construct(Filesystem \$fs, AutoloaderUtil \$autoloaderUtil, string \$rootDirectory, string \$twigDefaultPath = null)
    {
        // move FileManagerTest stuff
        // update EntityRegeneratorTest to mock the autoloader
        \$this->fs = \$fs;
        \$this->autoloaderUtil = \$autoloaderUtil;
        \$this->rootDirectory = rtrim(\$this->realPath(\$this->normalizeSlashes(\$rootDirectory)), '/');
        \$this->twigDefaultPath = \$twigDefaultPath ? rtrim(\$this->relativizePath(\$twigDefaultPath), '/') : null;
    }

    public function setIO(SymfonyStyle \$io)
    {
        \$this->io = \$io;
    }

    public function parseTemplate(string \$templatePath, array \$parameters): string
    {
        ob_start();
        extract(\$parameters, EXTR_SKIP);
        include \$templatePath;

        return ob_get_clean();
    }

    public function dumpFile(string \$filename, string \$content)
    {
        \$absolutePath = \$this->absolutizePath(\$filename);
        \$newFile = !\$this->fileExists(\$filename);
        \$existingContent = \$newFile ? '' : file_get_contents(\$absolutePath);

        \$comment = \$newFile ? '<fg=blue>created</>' : '<fg=yellow>updated</>';
        if (\$existingContent === \$content) {
            \$comment = '<fg=green>no change</>';
        }

        \$this->fs->dumpFile(\$absolutePath, \$content);

        if (\$this->io) {
            \$this->io->comment(sprintf(
                '%s: %s',
                \$comment,
                \$this->relativizePath(\$filename)
            ));
        }
    }

    public function fileExists(\$path): bool
    {
        return file_exists(\$this->absolutizePath(\$path));
    }

    /**
     * Attempts to make the path relative to the root directory.
     *
     * @param string \$absolutePath
     *
     * @return string
     *
     * @throws \\Exception
     */
    public function relativizePath(\$absolutePath): string
    {
        \$absolutePath = \$this->normalizeSlashes(\$absolutePath);

        // see if the path is even in the root
        if (false === strpos(\$absolutePath, \$this->rootDirectory)) {
            return \$absolutePath;
        }

        \$absolutePath = \$this->realPath(\$absolutePath);

        // str_replace but only the first occurrence
        \$relativePath = ltrim(implode('', explode(\$this->rootDirectory, \$absolutePath, 2)), '/');
        if (0 === strpos(\$relativePath, './')) {
            \$relativePath = substr(\$relativePath, 2);
        }

        return is_dir(\$absolutePath) ? rtrim(\$relativePath, '/').'/' : \$relativePath;
    }

    public function getFileContents(string \$path): string
    {
        if (!\$this->fileExists(\$path)) {
            throw new \\InvalidArgumentException(sprintf('Cannot find file \"%s\"', \$path));
        }

        return file_get_contents(\$this->absolutizePath(\$path));
    }

    public function createFinder(string \$in): Finder
    {
        \$finder = new Finder();
        \$finder->in(\$this->absolutizePath(\$in));

        return \$finder;
    }

    public function isPathInVendor(string \$path): bool
    {
        return 0 === strpos(\$this->normalizeSlashes(\$path), \$this->normalizeSlashes(\$this->rootDirectory.'/vendor/'));
    }

    public function absolutizePath(\$path): string
    {
        if (0 === strpos(\$path, '/')) {
            return \$path;
        }

        // support windows drive paths: C:\\ or C:/
        if (1 === strpos(\$path, ':\\\\') || 1 === strpos(\$path, ':/')) {
            return \$path;
        }

        return sprintf('%s/%s', \$this->rootDirectory, \$path);
    }

    /**
     * @param string \$className
     *
     * @return string|null
     *
     * @throws \\Exception
     */
    public function getRelativePathForFutureClass(string \$className)
    {
        \$path = \$this->autoloaderUtil->getPathForFutureClass(\$className);

        return null === \$path ? null : \$this->relativizePath(\$path);
    }

    public function getNamespacePrefixForClass(string \$className): string
    {
        return \$this->autoloaderUtil->getNamespacePrefixForClass(\$className);
    }

    public function isNamespaceConfiguredToAutoload(string \$namespace): bool
    {
        return \$this->autoloaderUtil->isNamespaceConfiguredToAutoload(\$namespace);
    }

    public function getRootDirectory(): string
    {
        return \$this->rootDirectory;
    }

    public function getPathForTemplate(string \$filename): string
    {
        if (null === \$this->twigDefaultPath) {
            throw new \\RuntimeException('Cannot get path for template: is Twig installed?');
        }

        return \$this->twigDefaultPath.'/'.\$filename;
    }

    /**
     * Resolve '../' in paths (like real_path), but for non-existent files.
     *
     * @param string \$absolutePath
     *
     * @return string
     */
    private function realPath(\$absolutePath): string
    {
        \$finalParts = [];
        \$currentIndex = -1;

        \$absolutePath = \$this->normalizeSlashes(\$absolutePath);
        foreach (explode('/', \$absolutePath) as \$pathPart) {
            if ('..' === \$pathPart) {
                // we need to remove the previous entry
                if (-1 === \$currentIndex) {
                    throw new \\Exception(sprintf('Problem making path relative - is the path \"%s\" absolute?', \$absolutePath));
                }

                unset(\$finalParts[\$currentIndex]);
                --\$currentIndex;

                continue;
            }

            \$finalParts[] = \$pathPart;
            ++\$currentIndex;
        }

        \$finalPath = implode('/', \$finalParts);
        // Normalize: // => /
        // Normalize: /./ => /
        \$finalPath = str_replace(['//', '/./'], '/', \$finalPath);

        return \$finalPath;
    }

    private function normalizeSlashes(string \$path)
    {
        return str_replace('\\\\', '/', \$path);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/FileManager.php";
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

use Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Finder\\Finder;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 *
 * @internal
 */
class FileManager
{
    private \$fs;
    private \$autoloaderUtil;
    private \$rootDirectory;
    /** @var SymfonyStyle */
    private \$io;
    private \$twigDefaultPath;

    public function __construct(Filesystem \$fs, AutoloaderUtil \$autoloaderUtil, string \$rootDirectory, string \$twigDefaultPath = null)
    {
        // move FileManagerTest stuff
        // update EntityRegeneratorTest to mock the autoloader
        \$this->fs = \$fs;
        \$this->autoloaderUtil = \$autoloaderUtil;
        \$this->rootDirectory = rtrim(\$this->realPath(\$this->normalizeSlashes(\$rootDirectory)), '/');
        \$this->twigDefaultPath = \$twigDefaultPath ? rtrim(\$this->relativizePath(\$twigDefaultPath), '/') : null;
    }

    public function setIO(SymfonyStyle \$io)
    {
        \$this->io = \$io;
    }

    public function parseTemplate(string \$templatePath, array \$parameters): string
    {
        ob_start();
        extract(\$parameters, EXTR_SKIP);
        include \$templatePath;

        return ob_get_clean();
    }

    public function dumpFile(string \$filename, string \$content)
    {
        \$absolutePath = \$this->absolutizePath(\$filename);
        \$newFile = !\$this->fileExists(\$filename);
        \$existingContent = \$newFile ? '' : file_get_contents(\$absolutePath);

        \$comment = \$newFile ? '<fg=blue>created</>' : '<fg=yellow>updated</>';
        if (\$existingContent === \$content) {
            \$comment = '<fg=green>no change</>';
        }

        \$this->fs->dumpFile(\$absolutePath, \$content);

        if (\$this->io) {
            \$this->io->comment(sprintf(
                '%s: %s',
                \$comment,
                \$this->relativizePath(\$filename)
            ));
        }
    }

    public function fileExists(\$path): bool
    {
        return file_exists(\$this->absolutizePath(\$path));
    }

    /**
     * Attempts to make the path relative to the root directory.
     *
     * @param string \$absolutePath
     *
     * @return string
     *
     * @throws \\Exception
     */
    public function relativizePath(\$absolutePath): string
    {
        \$absolutePath = \$this->normalizeSlashes(\$absolutePath);

        // see if the path is even in the root
        if (false === strpos(\$absolutePath, \$this->rootDirectory)) {
            return \$absolutePath;
        }

        \$absolutePath = \$this->realPath(\$absolutePath);

        // str_replace but only the first occurrence
        \$relativePath = ltrim(implode('', explode(\$this->rootDirectory, \$absolutePath, 2)), '/');
        if (0 === strpos(\$relativePath, './')) {
            \$relativePath = substr(\$relativePath, 2);
        }

        return is_dir(\$absolutePath) ? rtrim(\$relativePath, '/').'/' : \$relativePath;
    }

    public function getFileContents(string \$path): string
    {
        if (!\$this->fileExists(\$path)) {
            throw new \\InvalidArgumentException(sprintf('Cannot find file \"%s\"', \$path));
        }

        return file_get_contents(\$this->absolutizePath(\$path));
    }

    public function createFinder(string \$in): Finder
    {
        \$finder = new Finder();
        \$finder->in(\$this->absolutizePath(\$in));

        return \$finder;
    }

    public function isPathInVendor(string \$path): bool
    {
        return 0 === strpos(\$this->normalizeSlashes(\$path), \$this->normalizeSlashes(\$this->rootDirectory.'/vendor/'));
    }

    public function absolutizePath(\$path): string
    {
        if (0 === strpos(\$path, '/')) {
            return \$path;
        }

        // support windows drive paths: C:\\ or C:/
        if (1 === strpos(\$path, ':\\\\') || 1 === strpos(\$path, ':/')) {
            return \$path;
        }

        return sprintf('%s/%s', \$this->rootDirectory, \$path);
    }

    /**
     * @param string \$className
     *
     * @return string|null
     *
     * @throws \\Exception
     */
    public function getRelativePathForFutureClass(string \$className)
    {
        \$path = \$this->autoloaderUtil->getPathForFutureClass(\$className);

        return null === \$path ? null : \$this->relativizePath(\$path);
    }

    public function getNamespacePrefixForClass(string \$className): string
    {
        return \$this->autoloaderUtil->getNamespacePrefixForClass(\$className);
    }

    public function isNamespaceConfiguredToAutoload(string \$namespace): bool
    {
        return \$this->autoloaderUtil->isNamespaceConfiguredToAutoload(\$namespace);
    }

    public function getRootDirectory(): string
    {
        return \$this->rootDirectory;
    }

    public function getPathForTemplate(string \$filename): string
    {
        if (null === \$this->twigDefaultPath) {
            throw new \\RuntimeException('Cannot get path for template: is Twig installed?');
        }

        return \$this->twigDefaultPath.'/'.\$filename;
    }

    /**
     * Resolve '../' in paths (like real_path), but for non-existent files.
     *
     * @param string \$absolutePath
     *
     * @return string
     */
    private function realPath(\$absolutePath): string
    {
        \$finalParts = [];
        \$currentIndex = -1;

        \$absolutePath = \$this->normalizeSlashes(\$absolutePath);
        foreach (explode('/', \$absolutePath) as \$pathPart) {
            if ('..' === \$pathPart) {
                // we need to remove the previous entry
                if (-1 === \$currentIndex) {
                    throw new \\Exception(sprintf('Problem making path relative - is the path \"%s\" absolute?', \$absolutePath));
                }

                unset(\$finalParts[\$currentIndex]);
                --\$currentIndex;

                continue;
            }

            \$finalParts[] = \$pathPart;
            ++\$currentIndex;
        }

        \$finalPath = implode('/', \$finalParts);
        // Normalize: // => /
        // Normalize: /./ => /
        \$finalPath = str_replace(['//', '/./'], '/', \$finalPath);

        return \$finalPath;
    }

    private function normalizeSlashes(string \$path)
    {
        return str_replace('\\\\', '/', \$path);
    }
}
", "vendor/symfony/maker-bundle/src/FileManager.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/FileManager.php");
    }
}
