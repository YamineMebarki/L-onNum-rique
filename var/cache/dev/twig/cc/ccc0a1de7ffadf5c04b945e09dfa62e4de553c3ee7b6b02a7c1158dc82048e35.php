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

/* vendor/symfony/cache/Traits/FilesystemCommonTrait.php */
class __TwigTemplate_5173ac283f49f09201889804e6238c70ed14e52a51d5ed7abb57625dc6cdf273 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/FilesystemCommonTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/FilesystemCommonTrait.php"));

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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait FilesystemCommonTrait
{
    private \$directory;
    private \$tmp;

    private function init(\$namespace, \$directory)
    {
        if (!isset(\$directory[0])) {
            \$directory = sys_get_temp_dir().'/symfony-cache';
        } else {
            \$directory = realpath(\$directory) ?: \$directory;
        }
        if (isset(\$namespace[0])) {
            if (preg_match('#[^-+_.A-Za-z0-9]#', \$namespace, \$match)) {
                throw new InvalidArgumentException(sprintf('Namespace contains \"%s\" but only characters in [-+_.A-Za-z0-9] are allowed.', \$match[0]));
            }
            \$directory .= \\DIRECTORY_SEPARATOR.\$namespace;
        }
        if (!file_exists(\$directory)) {
            @mkdir(\$directory, 0777, true);
        }
        \$directory .= \\DIRECTORY_SEPARATOR;
        // On Windows the whole path is limited to 258 chars
        if ('\\\\' === \\DIRECTORY_SEPARATOR && \\strlen(\$directory) > 234) {
            throw new InvalidArgumentException(sprintf('Cache directory too long (%s)', \$directory));
        }

        \$this->directory = \$directory;
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        \$ok = true;

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->directory, \\FilesystemIterator::SKIP_DOTS)) as \$file) {
            \$ok = (\$file->isDir() || \$this->doUnlink(\$file) || !file_exists(\$file)) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;

        foreach (\$ids as \$id) {
            \$file = \$this->getFile(\$id);
            \$ok = (!file_exists(\$file) || \$this->doUnlink(\$file) || !file_exists(\$file)) && \$ok;
        }

        return \$ok;
    }

    protected function doUnlink(\$file)
    {
        return @unlink(\$file);
    }

    private function write(\$file, \$data, \$expiresAt = null)
    {
        set_error_handler(__CLASS__.'::throwError');
        try {
            if (null === \$this->tmp) {
                \$this->tmp = \$this->directory.uniqid('', true);
            }
            file_put_contents(\$this->tmp, \$data);

            if (null !== \$expiresAt) {
                touch(\$this->tmp, \$expiresAt);
            }

            return rename(\$this->tmp, \$file);
        } finally {
            restore_error_handler();
        }
    }

    private function getFile(\$id, \$mkdir = false, string \$directory = null)
    {
        // Use MD5 to favor speed over security, which is not an issue here
        \$hash = str_replace('/', '-', base64_encode(hash('md5', static::class.\$id, true)));
        \$dir = (\$directory ?? \$this->directory).strtoupper(\$hash[0].\\DIRECTORY_SEPARATOR.\$hash[1].\\DIRECTORY_SEPARATOR);

        if (\$mkdir && !file_exists(\$dir)) {
            @mkdir(\$dir, 0777, true);
        }

        return \$dir.substr(\$hash, 2, 20);
    }

    /**
     * @internal
     */
    public static function throwError(\$type, \$message, \$file, \$line)
    {
        throw new \\ErrorException(\$message, 0, \$type, \$file, \$line);
    }

    public function __sleep()
    {
        throw new \\BadMethodCallException('Cannot serialize '.__CLASS__);
    }

    public function __wakeup()
    {
        throw new \\BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        if (method_exists(parent::class, '__destruct')) {
            parent::__destruct();
        }
        if (null !== \$this->tmp && file_exists(\$this->tmp)) {
            unlink(\$this->tmp);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/FilesystemCommonTrait.php";
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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait FilesystemCommonTrait
{
    private \$directory;
    private \$tmp;

    private function init(\$namespace, \$directory)
    {
        if (!isset(\$directory[0])) {
            \$directory = sys_get_temp_dir().'/symfony-cache';
        } else {
            \$directory = realpath(\$directory) ?: \$directory;
        }
        if (isset(\$namespace[0])) {
            if (preg_match('#[^-+_.A-Za-z0-9]#', \$namespace, \$match)) {
                throw new InvalidArgumentException(sprintf('Namespace contains \"%s\" but only characters in [-+_.A-Za-z0-9] are allowed.', \$match[0]));
            }
            \$directory .= \\DIRECTORY_SEPARATOR.\$namespace;
        }
        if (!file_exists(\$directory)) {
            @mkdir(\$directory, 0777, true);
        }
        \$directory .= \\DIRECTORY_SEPARATOR;
        // On Windows the whole path is limited to 258 chars
        if ('\\\\' === \\DIRECTORY_SEPARATOR && \\strlen(\$directory) > 234) {
            throw new InvalidArgumentException(sprintf('Cache directory too long (%s)', \$directory));
        }

        \$this->directory = \$directory;
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        \$ok = true;

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->directory, \\FilesystemIterator::SKIP_DOTS)) as \$file) {
            \$ok = (\$file->isDir() || \$this->doUnlink(\$file) || !file_exists(\$file)) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;

        foreach (\$ids as \$id) {
            \$file = \$this->getFile(\$id);
            \$ok = (!file_exists(\$file) || \$this->doUnlink(\$file) || !file_exists(\$file)) && \$ok;
        }

        return \$ok;
    }

    protected function doUnlink(\$file)
    {
        return @unlink(\$file);
    }

    private function write(\$file, \$data, \$expiresAt = null)
    {
        set_error_handler(__CLASS__.'::throwError');
        try {
            if (null === \$this->tmp) {
                \$this->tmp = \$this->directory.uniqid('', true);
            }
            file_put_contents(\$this->tmp, \$data);

            if (null !== \$expiresAt) {
                touch(\$this->tmp, \$expiresAt);
            }

            return rename(\$this->tmp, \$file);
        } finally {
            restore_error_handler();
        }
    }

    private function getFile(\$id, \$mkdir = false, string \$directory = null)
    {
        // Use MD5 to favor speed over security, which is not an issue here
        \$hash = str_replace('/', '-', base64_encode(hash('md5', static::class.\$id, true)));
        \$dir = (\$directory ?? \$this->directory).strtoupper(\$hash[0].\\DIRECTORY_SEPARATOR.\$hash[1].\\DIRECTORY_SEPARATOR);

        if (\$mkdir && !file_exists(\$dir)) {
            @mkdir(\$dir, 0777, true);
        }

        return \$dir.substr(\$hash, 2, 20);
    }

    /**
     * @internal
     */
    public static function throwError(\$type, \$message, \$file, \$line)
    {
        throw new \\ErrorException(\$message, 0, \$type, \$file, \$line);
    }

    public function __sleep()
    {
        throw new \\BadMethodCallException('Cannot serialize '.__CLASS__);
    }

    public function __wakeup()
    {
        throw new \\BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        if (method_exists(parent::class, '__destruct')) {
            parent::__destruct();
        }
        if (null !== \$this->tmp && file_exists(\$this->tmp)) {
            unlink(\$this->tmp);
        }
    }
}
", "vendor/symfony/cache/Traits/FilesystemCommonTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/FilesystemCommonTrait.php");
    }
}
