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

/* vendor/symfony/cache/LockRegistry.php */
class __TwigTemplate_884e97e2bd268a01a972cf0bf9e3e7fc5ad0a43d4bdbaf58a4ea185cced79bfa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/LockRegistry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/LockRegistry.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Cache;

use Psr\\Log\\LoggerInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Cache\\ItemInterface;

/**
 * LockRegistry is used internally by existing adapters to protect against cache stampede.
 *
 * It does so by wrapping the computation of items in a pool of locks.
 * Foreach each apps, there can be at most 20 concurrent processes that
 * compute items at the same time and only one per cache-key.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class LockRegistry
{
    private static \$openedFiles = [];
    private static \$lockedFiles = [];

    /**
     * The number of items in this list controls the max number of concurrent processes.
     */
    private static \$files = [
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'AbstractAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'AbstractTagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'AdapterInterface.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ApcuAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ArrayAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ChainAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'DoctrineAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'FilesystemAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'FilesystemTagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'MemcachedAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'NullAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'PdoAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'PhpArrayAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'PhpFilesAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ProxyAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'Psr16Adapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'RedisAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'RedisTagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'SimpleCacheAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TagAwareAdapterInterface.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TraceableAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TraceableTagAwareAdapter.php',
    ];

    /**
     * Defines a set of existing files that will be used as keys to acquire locks.
     *
     * @return array The previously defined set of files
     */
    public static function setFiles(array \$files): array
    {
        \$previousFiles = self::\$files;
        self::\$files = \$files;

        foreach (self::\$openedFiles as \$file) {
            if (\$file) {
                flock(\$file, LOCK_UN);
                fclose(\$file);
            }
        }
        self::\$openedFiles = self::\$lockedFiles = [];

        return \$previousFiles;
    }

    public static function compute(callable \$callback, ItemInterface \$item, bool &\$save, CacheInterface \$pool, \\Closure \$setMetadata = null, LoggerInterface \$logger = null)
    {
        \$key = self::\$files ? crc32(\$item->getKey()) % \\count(self::\$files) : -1;

        if (\$key < 0 || (self::\$lockedFiles[\$key] ?? false) || !\$lock = self::open(\$key)) {
            return \$callback(\$item, \$save);
        }

        while (true) {
            try {
                // race to get the lock in non-blocking mode
                \$locked = flock(\$lock, LOCK_EX | LOCK_NB, \$wouldBlock);

                if (\$locked || !\$wouldBlock) {
                    \$logger && \$logger->info(sprintf('Lock %s, now computing item \"{key}\"', \$locked ? 'acquired' : 'not supported'), ['key' => \$item->getKey()]);
                    self::\$lockedFiles[\$key] = true;

                    \$value = \$callback(\$item, \$save);

                    if (\$save) {
                        if (\$setMetadata) {
                            \$setMetadata(\$item);
                        }

                        \$pool->save(\$item->set(\$value));
                        \$save = false;
                    }

                    return \$value;
                }
                // if we failed the race, retry locking in blocking mode to wait for the winner
                \$logger && \$logger->info('Item \"{key}\" is locked, waiting for it to be released', ['key' => \$item->getKey()]);
                flock(\$lock, LOCK_SH);
            } finally {
                flock(\$lock, LOCK_UN);
                unset(self::\$lockedFiles[\$key]);
            }
            static \$signalingException, \$signalingCallback;
            \$signalingException = \$signalingException ?? unserialize(\"O:9:\\\"Exception\\\":1:{s:16:\\\"\\0Exception\\0trace\\\";a:0:{}}\");
            \$signalingCallback = \$signalingCallback ?? function () use (\$signalingException) { throw \$signalingException; };

            try {
                \$value = \$pool->get(\$item->getKey(), \$signalingCallback, 0);
                \$logger && \$logger->info('Item \"{key}\" retrieved after lock was released', ['key' => \$item->getKey()]);
                \$save = false;

                return \$value;
            } catch (\\Exception \$e) {
                if (\$signalingException !== \$e) {
                    throw \$e;
                }
                \$logger && \$logger->info('Item \"{key}\" not found while lock was released, now retrying', ['key' => \$item->getKey()]);
            }
        }
    }

    private static function open(int \$key)
    {
        if (null !== \$h = self::\$openedFiles[\$key] ?? null) {
            return \$h;
        }
        set_error_handler(function () {});
        try {
            \$h = fopen(self::\$files[\$key], 'r+');
        } finally {
            restore_error_handler();
        }

        return self::\$openedFiles[\$key] = \$h ?: @fopen(self::\$files[\$key], 'r');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/LockRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Cache;

use Psr\\Log\\LoggerInterface;
use Symfony\\Contracts\\Cache\\CacheInterface;
use Symfony\\Contracts\\Cache\\ItemInterface;

/**
 * LockRegistry is used internally by existing adapters to protect against cache stampede.
 *
 * It does so by wrapping the computation of items in a pool of locks.
 * Foreach each apps, there can be at most 20 concurrent processes that
 * compute items at the same time and only one per cache-key.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class LockRegistry
{
    private static \$openedFiles = [];
    private static \$lockedFiles = [];

    /**
     * The number of items in this list controls the max number of concurrent processes.
     */
    private static \$files = [
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'AbstractAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'AbstractTagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'AdapterInterface.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ApcuAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ArrayAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ChainAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'DoctrineAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'FilesystemAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'FilesystemTagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'MemcachedAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'NullAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'PdoAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'PhpArrayAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'PhpFilesAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'ProxyAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'Psr16Adapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'RedisAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'RedisTagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'SimpleCacheAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TagAwareAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TagAwareAdapterInterface.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TraceableAdapter.php',
        __DIR__.\\DIRECTORY_SEPARATOR.'Adapter'.\\DIRECTORY_SEPARATOR.'TraceableTagAwareAdapter.php',
    ];

    /**
     * Defines a set of existing files that will be used as keys to acquire locks.
     *
     * @return array The previously defined set of files
     */
    public static function setFiles(array \$files): array
    {
        \$previousFiles = self::\$files;
        self::\$files = \$files;

        foreach (self::\$openedFiles as \$file) {
            if (\$file) {
                flock(\$file, LOCK_UN);
                fclose(\$file);
            }
        }
        self::\$openedFiles = self::\$lockedFiles = [];

        return \$previousFiles;
    }

    public static function compute(callable \$callback, ItemInterface \$item, bool &\$save, CacheInterface \$pool, \\Closure \$setMetadata = null, LoggerInterface \$logger = null)
    {
        \$key = self::\$files ? crc32(\$item->getKey()) % \\count(self::\$files) : -1;

        if (\$key < 0 || (self::\$lockedFiles[\$key] ?? false) || !\$lock = self::open(\$key)) {
            return \$callback(\$item, \$save);
        }

        while (true) {
            try {
                // race to get the lock in non-blocking mode
                \$locked = flock(\$lock, LOCK_EX | LOCK_NB, \$wouldBlock);

                if (\$locked || !\$wouldBlock) {
                    \$logger && \$logger->info(sprintf('Lock %s, now computing item \"{key}\"', \$locked ? 'acquired' : 'not supported'), ['key' => \$item->getKey()]);
                    self::\$lockedFiles[\$key] = true;

                    \$value = \$callback(\$item, \$save);

                    if (\$save) {
                        if (\$setMetadata) {
                            \$setMetadata(\$item);
                        }

                        \$pool->save(\$item->set(\$value));
                        \$save = false;
                    }

                    return \$value;
                }
                // if we failed the race, retry locking in blocking mode to wait for the winner
                \$logger && \$logger->info('Item \"{key}\" is locked, waiting for it to be released', ['key' => \$item->getKey()]);
                flock(\$lock, LOCK_SH);
            } finally {
                flock(\$lock, LOCK_UN);
                unset(self::\$lockedFiles[\$key]);
            }
            static \$signalingException, \$signalingCallback;
            \$signalingException = \$signalingException ?? unserialize(\"O:9:\\\"Exception\\\":1:{s:16:\\\"\\0Exception\\0trace\\\";a:0:{}}\");
            \$signalingCallback = \$signalingCallback ?? function () use (\$signalingException) { throw \$signalingException; };

            try {
                \$value = \$pool->get(\$item->getKey(), \$signalingCallback, 0);
                \$logger && \$logger->info('Item \"{key}\" retrieved after lock was released', ['key' => \$item->getKey()]);
                \$save = false;

                return \$value;
            } catch (\\Exception \$e) {
                if (\$signalingException !== \$e) {
                    throw \$e;
                }
                \$logger && \$logger->info('Item \"{key}\" not found while lock was released, now retrying', ['key' => \$item->getKey()]);
            }
        }
    }

    private static function open(int \$key)
    {
        if (null !== \$h = self::\$openedFiles[\$key] ?? null) {
            return \$h;
        }
        set_error_handler(function () {});
        try {
            \$h = fopen(self::\$files[\$key], 'r+');
        } finally {
            restore_error_handler();
        }

        return self::\$openedFiles[\$key] = \$h ?: @fopen(self::\$files[\$key], 'r');
    }
}
", "vendor/symfony/cache/LockRegistry.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/LockRegistry.php");
    }
}
