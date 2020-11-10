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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php */
class __TwigTemplate_7677749cf388e295fa3d30cd39fb9b5c7f53e7a9d959f96b2e8a0a3f3597f464 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use const DIRECTORY_SEPARATOR;
use const PATHINFO_DIRNAME;
use function bin2hex;
use function chmod;
use function defined;
use function disk_free_space;
use function file_exists;
use function file_put_contents;
use function gettype;
use function hash;
use function is_dir;
use function is_int;
use function is_writable;
use function mkdir;
use function pathinfo;
use function realpath;
use function rename;
use function rmdir;
use function sprintf;
use function strlen;
use function strrpos;
use function substr;
use function tempnam;
use function unlink;

/**
 * Base file cache driver.
 */
abstract class FileCache extends CacheProvider
{
    /**
     * The cache directory.
     *
     * @var string
     */
    protected \$directory;

    /**
     * The cache file extension.
     *
     * @var string
     */
    private \$extension;

    /** @var int */
    private \$umask;

    /** @var int */
    private \$directoryStringLength;

    /** @var int */
    private \$extensionStringLength;

    /** @var bool */
    private \$isRunningOnWindows;

    /**
     * @param string \$directory The cache directory.
     * @param string \$extension The cache file extension.
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\$directory, \$extension = '', \$umask = 0002)
    {
        // YES, this needs to be *before* createPathIfNeeded()
        if (! is_int(\$umask)) {
            throw new \\InvalidArgumentException(sprintf(
                'The umask parameter is required to be integer, was: %s',
                gettype(\$umask)
            ));
        }
        \$this->umask = \$umask;

        if (! \$this->createPathIfNeeded(\$directory)) {
            throw new \\InvalidArgumentException(sprintf(
                'The directory \"%s\" does not exist and could not be created.',
                \$directory
            ));
        }

        if (! is_writable(\$directory)) {
            throw new \\InvalidArgumentException(sprintf(
                'The directory \"%s\" is not writable.',
                \$directory
            ));
        }

        // YES, this needs to be *after* createPathIfNeeded()
        \$this->directory = realpath(\$directory);
        \$this->extension = (string) \$extension;

        \$this->directoryStringLength = strlen(\$this->directory);
        \$this->extensionStringLength = strlen(\$this->extension);
        \$this->isRunningOnWindows    = defined('PHP_WINDOWS_VERSION_BUILD');
    }

    /**
     * Gets the cache directory.
     *
     * @return string
     */
    public function getDirectory()
    {
        return \$this->directory;
    }

    /**
     * Gets the cache file extension.
     *
     * @return string
     */
    public function getExtension()
    {
        return \$this->extension;
    }

    /**
     * @param string \$id
     *
     * @return string
     */
    protected function getFilename(\$id)
    {
        \$hash = hash('sha256', \$id);

        // This ensures that the filename is unique and that there are no invalid chars in it.
        if (\$id === ''
            || ((strlen(\$id) * 2 + \$this->extensionStringLength) > 255)
            || (\$this->isRunningOnWindows && (\$this->directoryStringLength + 4 + strlen(\$id) * 2 + \$this->extensionStringLength) > 258)
        ) {
            // Most filesystems have a limit of 255 chars for each path component. On Windows the the whole path is limited
            // to 260 chars (including terminating null char). Using long UNC (\"\\\\?\\\" prefix) does not work with the PHP API.
            // And there is a bug in PHP (https://bugs.php.net/bug.php?id=70943) with path lengths of 259.
            // So if the id in hex representation would surpass the limit, we use the hash instead. The prefix prevents
            // collisions between the hash and bin2hex.
            \$filename = '_' . \$hash;
        } else {
            \$filename = bin2hex(\$id);
        }

        return \$this->directory
            . DIRECTORY_SEPARATOR
            . substr(\$hash, 0, 2)
            . DIRECTORY_SEPARATOR
            . \$filename
            . \$this->extension;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        \$filename = \$this->getFilename(\$id);

        return @unlink(\$filename) || ! file_exists(\$filename);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        foreach (\$this->getIterator() as \$name => \$file) {
            if (\$file->isDir()) {
                // Remove the intermediate directories which have been created to balance the tree. It only takes effect
                // if the directory is empty. If several caches share the same directory but with different file extensions,
                // the other ones are not removed.
                @rmdir(\$name);
            } elseif (\$this->isFilenameEndingWithExtension(\$name)) {
                // If an extension is set, only remove files which end with the given extension.
                // If no extension is set, we have no other choice than removing everything.
                @unlink(\$name);
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$usage = 0;
        foreach (\$this->getIterator() as \$name => \$file) {
            if (\$file->isDir() || ! \$this->isFilenameEndingWithExtension(\$name)) {
                continue;
            }

            \$usage += \$file->getSize();
        }

        \$free = disk_free_space(\$this->directory);

        return [
            Cache::STATS_HITS               => null,
            Cache::STATS_MISSES             => null,
            Cache::STATS_UPTIME             => null,
            Cache::STATS_MEMORY_USAGE       => \$usage,
            Cache::STATS_MEMORY_AVAILABLE   => \$free,
        ];
    }

    /**
     * Create path if needed.
     *
     * @return bool TRUE on success or if path already exists, FALSE if path cannot be created.
     */
    private function createPathIfNeeded(string \$path) : bool
    {
        if (! is_dir(\$path)) {
            if (@mkdir(\$path, 0777 & (~\$this->umask), true) === false && ! is_dir(\$path)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Writes a string content to file in an atomic way.
     *
     * @param string \$filename Path to the file where to write the data.
     * @param string \$content  The content to write
     *
     * @return bool TRUE on success, FALSE if path cannot be created, if path is not writable or an any other error.
     */
    protected function writeFile(string \$filename, string \$content) : bool
    {
        \$filepath = pathinfo(\$filename, PATHINFO_DIRNAME);

        if (! \$this->createPathIfNeeded(\$filepath)) {
            return false;
        }

        if (! is_writable(\$filepath)) {
            return false;
        }

        \$tmpFile = tempnam(\$filepath, 'swap');
        @chmod(\$tmpFile, 0666 & (~\$this->umask));

        if (file_put_contents(\$tmpFile, \$content) !== false) {
            @chmod(\$tmpFile, 0666 & (~\$this->umask));
            if (@rename(\$tmpFile, \$filename)) {
                return true;
            }

            @unlink(\$tmpFile);
        }

        return false;
    }

    private function getIterator() : \\Iterator
    {
        return new \\RecursiveIteratorIterator(
            new \\RecursiveDirectoryIterator(\$this->directory, \\FilesystemIterator::SKIP_DOTS),
            \\RecursiveIteratorIterator::CHILD_FIRST
        );
    }

    /**
     * @param string \$name The filename
     */
    private function isFilenameEndingWithExtension(string \$name) : bool
    {
        return \$this->extension === ''
            || strrpos(\$name, \$this->extension) === (strlen(\$name) - \$this->extensionStringLength);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use const DIRECTORY_SEPARATOR;
use const PATHINFO_DIRNAME;
use function bin2hex;
use function chmod;
use function defined;
use function disk_free_space;
use function file_exists;
use function file_put_contents;
use function gettype;
use function hash;
use function is_dir;
use function is_int;
use function is_writable;
use function mkdir;
use function pathinfo;
use function realpath;
use function rename;
use function rmdir;
use function sprintf;
use function strlen;
use function strrpos;
use function substr;
use function tempnam;
use function unlink;

/**
 * Base file cache driver.
 */
abstract class FileCache extends CacheProvider
{
    /**
     * The cache directory.
     *
     * @var string
     */
    protected \$directory;

    /**
     * The cache file extension.
     *
     * @var string
     */
    private \$extension;

    /** @var int */
    private \$umask;

    /** @var int */
    private \$directoryStringLength;

    /** @var int */
    private \$extensionStringLength;

    /** @var bool */
    private \$isRunningOnWindows;

    /**
     * @param string \$directory The cache directory.
     * @param string \$extension The cache file extension.
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\$directory, \$extension = '', \$umask = 0002)
    {
        // YES, this needs to be *before* createPathIfNeeded()
        if (! is_int(\$umask)) {
            throw new \\InvalidArgumentException(sprintf(
                'The umask parameter is required to be integer, was: %s',
                gettype(\$umask)
            ));
        }
        \$this->umask = \$umask;

        if (! \$this->createPathIfNeeded(\$directory)) {
            throw new \\InvalidArgumentException(sprintf(
                'The directory \"%s\" does not exist and could not be created.',
                \$directory
            ));
        }

        if (! is_writable(\$directory)) {
            throw new \\InvalidArgumentException(sprintf(
                'The directory \"%s\" is not writable.',
                \$directory
            ));
        }

        // YES, this needs to be *after* createPathIfNeeded()
        \$this->directory = realpath(\$directory);
        \$this->extension = (string) \$extension;

        \$this->directoryStringLength = strlen(\$this->directory);
        \$this->extensionStringLength = strlen(\$this->extension);
        \$this->isRunningOnWindows    = defined('PHP_WINDOWS_VERSION_BUILD');
    }

    /**
     * Gets the cache directory.
     *
     * @return string
     */
    public function getDirectory()
    {
        return \$this->directory;
    }

    /**
     * Gets the cache file extension.
     *
     * @return string
     */
    public function getExtension()
    {
        return \$this->extension;
    }

    /**
     * @param string \$id
     *
     * @return string
     */
    protected function getFilename(\$id)
    {
        \$hash = hash('sha256', \$id);

        // This ensures that the filename is unique and that there are no invalid chars in it.
        if (\$id === ''
            || ((strlen(\$id) * 2 + \$this->extensionStringLength) > 255)
            || (\$this->isRunningOnWindows && (\$this->directoryStringLength + 4 + strlen(\$id) * 2 + \$this->extensionStringLength) > 258)
        ) {
            // Most filesystems have a limit of 255 chars for each path component. On Windows the the whole path is limited
            // to 260 chars (including terminating null char). Using long UNC (\"\\\\?\\\" prefix) does not work with the PHP API.
            // And there is a bug in PHP (https://bugs.php.net/bug.php?id=70943) with path lengths of 259.
            // So if the id in hex representation would surpass the limit, we use the hash instead. The prefix prevents
            // collisions between the hash and bin2hex.
            \$filename = '_' . \$hash;
        } else {
            \$filename = bin2hex(\$id);
        }

        return \$this->directory
            . DIRECTORY_SEPARATOR
            . substr(\$hash, 0, 2)
            . DIRECTORY_SEPARATOR
            . \$filename
            . \$this->extension;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        \$filename = \$this->getFilename(\$id);

        return @unlink(\$filename) || ! file_exists(\$filename);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        foreach (\$this->getIterator() as \$name => \$file) {
            if (\$file->isDir()) {
                // Remove the intermediate directories which have been created to balance the tree. It only takes effect
                // if the directory is empty. If several caches share the same directory but with different file extensions,
                // the other ones are not removed.
                @rmdir(\$name);
            } elseif (\$this->isFilenameEndingWithExtension(\$name)) {
                // If an extension is set, only remove files which end with the given extension.
                // If no extension is set, we have no other choice than removing everything.
                @unlink(\$name);
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$usage = 0;
        foreach (\$this->getIterator() as \$name => \$file) {
            if (\$file->isDir() || ! \$this->isFilenameEndingWithExtension(\$name)) {
                continue;
            }

            \$usage += \$file->getSize();
        }

        \$free = disk_free_space(\$this->directory);

        return [
            Cache::STATS_HITS               => null,
            Cache::STATS_MISSES             => null,
            Cache::STATS_UPTIME             => null,
            Cache::STATS_MEMORY_USAGE       => \$usage,
            Cache::STATS_MEMORY_AVAILABLE   => \$free,
        ];
    }

    /**
     * Create path if needed.
     *
     * @return bool TRUE on success or if path already exists, FALSE if path cannot be created.
     */
    private function createPathIfNeeded(string \$path) : bool
    {
        if (! is_dir(\$path)) {
            if (@mkdir(\$path, 0777 & (~\$this->umask), true) === false && ! is_dir(\$path)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Writes a string content to file in an atomic way.
     *
     * @param string \$filename Path to the file where to write the data.
     * @param string \$content  The content to write
     *
     * @return bool TRUE on success, FALSE if path cannot be created, if path is not writable or an any other error.
     */
    protected function writeFile(string \$filename, string \$content) : bool
    {
        \$filepath = pathinfo(\$filename, PATHINFO_DIRNAME);

        if (! \$this->createPathIfNeeded(\$filepath)) {
            return false;
        }

        if (! is_writable(\$filepath)) {
            return false;
        }

        \$tmpFile = tempnam(\$filepath, 'swap');
        @chmod(\$tmpFile, 0666 & (~\$this->umask));

        if (file_put_contents(\$tmpFile, \$content) !== false) {
            @chmod(\$tmpFile, 0666 & (~\$this->umask));
            if (@rename(\$tmpFile, \$filename)) {
                return true;
            }

            @unlink(\$tmpFile);
        }

        return false;
    }

    private function getIterator() : \\Iterator
    {
        return new \\RecursiveIteratorIterator(
            new \\RecursiveDirectoryIterator(\$this->directory, \\FilesystemIterator::SKIP_DOTS),
            \\RecursiveIteratorIterator::CHILD_FIRST
        );
    }

    /**
     * @param string \$name The filename
     */
    private function isFilenameEndingWithExtension(string \$name) : bool
    {
        return \$this->extension === ''
            || strrpos(\$name, \$this->extension) === (strlen(\$name) - \$this->extensionStringLength);
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php");
    }
}
