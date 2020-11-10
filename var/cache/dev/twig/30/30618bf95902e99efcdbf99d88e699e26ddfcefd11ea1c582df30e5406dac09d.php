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

/* vendor/twig/twig/src/Cache/FilesystemCache.php */
class __TwigTemplate_496de468b4cf322ec8ae4859219d879b8a148fc74484dda0d18d7264b10fbc5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Cache/FilesystemCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Cache/FilesystemCache.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Cache;

/**
 * Implements a cache on the filesystem.
 *
 * @author Andrew Tch <andrew@noop.lv>
 */
class FilesystemCache implements CacheInterface
{
    const FORCE_BYTECODE_INVALIDATION = 1;

    private \$directory;
    private \$options;

    /**
     * @param string \$directory The root cache directory
     * @param int    \$options   A set of options
     */
    public function __construct(\$directory, \$options = 0)
    {
        \$this->directory = rtrim(\$directory, '\\/').'/';
        \$this->options = \$options;
    }

    public function generateKey(\$name, \$className)
    {
        \$hash = hash('sha256', \$className);

        return \$this->directory.\$hash[0].\$hash[1].'/'.\$hash.'.php';
    }

    public function load(\$key)
    {
        if (file_exists(\$key)) {
            @include_once \$key;
        }
    }

    public function write(\$key, \$content)
    {
        \$dir = \\dirname(\$key);
        if (!is_dir(\$dir)) {
            if (false === @mkdir(\$dir, 0777, true)) {
                clearstatcache(true, \$dir);
                if (!is_dir(\$dir)) {
                    throw new \\RuntimeException(sprintf('Unable to create the cache directory (%s).', \$dir));
                }
            }
        } elseif (!is_writable(\$dir)) {
            throw new \\RuntimeException(sprintf('Unable to write in the cache directory (%s).', \$dir));
        }

        \$tmpFile = tempnam(\$dir, basename(\$key));
        if (false !== @file_put_contents(\$tmpFile, \$content) && @rename(\$tmpFile, \$key)) {
            @chmod(\$key, 0666 & ~umask());

            if (self::FORCE_BYTECODE_INVALIDATION == (\$this->options & self::FORCE_BYTECODE_INVALIDATION)) {
                // Compile cached file into bytecode cache
                if (\\function_exists('opcache_invalidate') && filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN)) {
                    @opcache_invalidate(\$key, true);
                } elseif (\\function_exists('apc_compile_file')) {
                    apc_compile_file(\$key);
                }
            }

            return;
        }

        throw new \\RuntimeException(sprintf('Failed to write cache file \"%s\".', \$key));
    }

    public function getTimestamp(\$key)
    {
        if (!file_exists(\$key)) {
            return 0;
        }

        return (int) @filemtime(\$key);
    }
}

class_alias('Twig\\Cache\\FilesystemCache', 'Twig_Cache_Filesystem');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Cache/FilesystemCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Cache;

/**
 * Implements a cache on the filesystem.
 *
 * @author Andrew Tch <andrew@noop.lv>
 */
class FilesystemCache implements CacheInterface
{
    const FORCE_BYTECODE_INVALIDATION = 1;

    private \$directory;
    private \$options;

    /**
     * @param string \$directory The root cache directory
     * @param int    \$options   A set of options
     */
    public function __construct(\$directory, \$options = 0)
    {
        \$this->directory = rtrim(\$directory, '\\/').'/';
        \$this->options = \$options;
    }

    public function generateKey(\$name, \$className)
    {
        \$hash = hash('sha256', \$className);

        return \$this->directory.\$hash[0].\$hash[1].'/'.\$hash.'.php';
    }

    public function load(\$key)
    {
        if (file_exists(\$key)) {
            @include_once \$key;
        }
    }

    public function write(\$key, \$content)
    {
        \$dir = \\dirname(\$key);
        if (!is_dir(\$dir)) {
            if (false === @mkdir(\$dir, 0777, true)) {
                clearstatcache(true, \$dir);
                if (!is_dir(\$dir)) {
                    throw new \\RuntimeException(sprintf('Unable to create the cache directory (%s).', \$dir));
                }
            }
        } elseif (!is_writable(\$dir)) {
            throw new \\RuntimeException(sprintf('Unable to write in the cache directory (%s).', \$dir));
        }

        \$tmpFile = tempnam(\$dir, basename(\$key));
        if (false !== @file_put_contents(\$tmpFile, \$content) && @rename(\$tmpFile, \$key)) {
            @chmod(\$key, 0666 & ~umask());

            if (self::FORCE_BYTECODE_INVALIDATION == (\$this->options & self::FORCE_BYTECODE_INVALIDATION)) {
                // Compile cached file into bytecode cache
                if (\\function_exists('opcache_invalidate') && filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN)) {
                    @opcache_invalidate(\$key, true);
                } elseif (\\function_exists('apc_compile_file')) {
                    apc_compile_file(\$key);
                }
            }

            return;
        }

        throw new \\RuntimeException(sprintf('Failed to write cache file \"%s\".', \$key));
    }

    public function getTimestamp(\$key)
    {
        if (!file_exists(\$key)) {
            return 0;
        }

        return (int) @filemtime(\$key);
    }
}

class_alias('Twig\\Cache\\FilesystemCache', 'Twig_Cache_Filesystem');
", "vendor/twig/twig/src/Cache/FilesystemCache.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Cache/FilesystemCache.php");
    }
}
