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

/* vendor/symfony/config/Resource/GlobResource.php */
class __TwigTemplate_175bd7e6c956eaf5ba0d852b650145efc6d8dbe2eebcea6f7f00922ae70ce373 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/GlobResource.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/GlobResource.php"));

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

namespace Symfony\\Component\\Config\\Resource;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Finder\\Glob;

/**
 * GlobResource represents a set of resources stored on the filesystem.
 *
 * Only existence/removal is tracked (not mtimes.)
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.3
 */
class GlobResource implements \\IteratorAggregate, SelfCheckingResourceInterface
{
    private \$prefix;
    private \$pattern;
    private \$recursive;
    private \$hash;
    private \$forExclusion;
    private \$excludedPrefixes;

    /**
     * @param string \$prefix    A directory prefix
     * @param string \$pattern   A glob pattern
     * @param bool   \$recursive Whether directories should be scanned recursively or not
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(?string \$prefix, string \$pattern, bool \$recursive, bool \$forExclusion = false, array \$excludedPrefixes = [])
    {
        \$this->prefix = realpath(\$prefix) ?: (file_exists(\$prefix) ? \$prefix : false);
        \$this->pattern = \$pattern;
        \$this->recursive = \$recursive;
        \$this->forExclusion = \$forExclusion;
        \$this->excludedPrefixes = \$excludedPrefixes;

        if (false === \$this->prefix) {
            throw new \\InvalidArgumentException(sprintf('The path \"%s\" does not exist.', \$prefix));
        }
    }

    public function getPrefix()
    {
        return \$this->prefix;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return 'glob.'.\$this->prefix.\$this->pattern.(int) \$this->recursive;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(\$timestamp)
    {
        \$hash = \$this->computeHash();

        if (null === \$this->hash) {
            \$this->hash = \$hash;
        }

        return \$this->hash === \$hash;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
        }

        return ['prefix', 'pattern', 'recursive', 'hash', 'forExclusion', 'excludedPrefixes'];
    }

    public function getIterator()
    {
        if (!file_exists(\$this->prefix) || (!\$this->recursive && '' === \$this->pattern)) {
            return;
        }
        \$prefix = str_replace('\\\\', '/', \$this->prefix);

        if (0 !== strpos(\$this->prefix, 'phar://') && false === strpos(\$this->pattern, '/**/') && (\\defined('GLOB_BRACE') || false === strpos(\$this->pattern, '{'))) {
            foreach (glob(\$this->prefix.\$this->pattern, \\defined('GLOB_BRACE') ? GLOB_BRACE : 0) as \$path) {
                if (\$this->excludedPrefixes) {
                    \$normalizedPath = str_replace('\\\\', '/', \$path);
                    do {
                        if (isset(\$this->excludedPrefixes[\$dirPath = \$normalizedPath])) {
                            continue 2;
                        }
                    } while (\$prefix !== \$dirPath && \$dirPath !== \$normalizedPath = \\dirname(\$dirPath));
                }

                if (is_file(\$path)) {
                    yield \$path => new \\SplFileInfo(\$path);
                }
                if (!is_dir(\$path)) {
                    continue;
                }
                if (\$this->forExclusion) {
                    yield \$path => new \\SplFileInfo(\$path);
                    continue;
                }
                if (!\$this->recursive || isset(\$this->excludedPrefixes[str_replace('\\\\', '/', \$path)])) {
                    continue;
                }
                \$files = iterator_to_array(new \\RecursiveIteratorIterator(
                    new \\RecursiveCallbackFilterIterator(
                        new \\RecursiveDirectoryIterator(\$path, \\FilesystemIterator::SKIP_DOTS | \\FilesystemIterator::FOLLOW_SYMLINKS),
                        function (\\SplFileInfo \$file, \$path) {
                            return !isset(\$this->excludedPrefixes[str_replace('\\\\', '/', \$path)]) && '.' !== \$file->getBasename()[0];
                        }
                    ),
                    \\RecursiveIteratorIterator::LEAVES_ONLY
                ));
                uasort(\$files, 'strnatcmp');

                foreach (\$files as \$path => \$info) {
                    if (\$info->isFile()) {
                        yield \$path => \$info;
                    }
                }
            }

            return;
        }

        if (!class_exists(Finder::class)) {
            throw new \\LogicException(sprintf('Extended glob pattern \"%s\" cannot be used as the Finder component is not installed.', \$this->pattern));
        }

        \$finder = new Finder();
        \$regex = Glob::toRegex(\$this->pattern);
        if (\$this->recursive) {
            \$regex = substr_replace(\$regex, '(/|\$)', -2, 1);
        }

        \$prefixLen = \\strlen(\$this->prefix);
        foreach (\$finder->followLinks()->sortByName()->in(\$this->prefix) as \$path => \$info) {
            \$normalizedPath = str_replace('\\\\', '/', \$path);
            if (!preg_match(\$regex, substr(\$normalizedPath, \$prefixLen)) || !\$info->isFile()) {
                continue;
            }
            if (\$this->excludedPrefixes) {
                do {
                    if (isset(\$this->excludedPrefixes[\$dirPath = \$normalizedPath])) {
                        continue 2;
                    }
                } while (\$prefix !== \$dirPath && \$dirPath !== \$normalizedPath = \\dirname(\$dirPath));
            }

            yield \$path => \$info;
        }
    }

    private function computeHash()
    {
        \$hash = hash_init('md5');

        foreach (\$this->getIterator() as \$path => \$info) {
            hash_update(\$hash, \$path.\"\\n\");
        }

        return hash_final(\$hash);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Resource/GlobResource.php";
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

namespace Symfony\\Component\\Config\\Resource;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Finder\\Glob;

/**
 * GlobResource represents a set of resources stored on the filesystem.
 *
 * Only existence/removal is tracked (not mtimes.)
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.3
 */
class GlobResource implements \\IteratorAggregate, SelfCheckingResourceInterface
{
    private \$prefix;
    private \$pattern;
    private \$recursive;
    private \$hash;
    private \$forExclusion;
    private \$excludedPrefixes;

    /**
     * @param string \$prefix    A directory prefix
     * @param string \$pattern   A glob pattern
     * @param bool   \$recursive Whether directories should be scanned recursively or not
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(?string \$prefix, string \$pattern, bool \$recursive, bool \$forExclusion = false, array \$excludedPrefixes = [])
    {
        \$this->prefix = realpath(\$prefix) ?: (file_exists(\$prefix) ? \$prefix : false);
        \$this->pattern = \$pattern;
        \$this->recursive = \$recursive;
        \$this->forExclusion = \$forExclusion;
        \$this->excludedPrefixes = \$excludedPrefixes;

        if (false === \$this->prefix) {
            throw new \\InvalidArgumentException(sprintf('The path \"%s\" does not exist.', \$prefix));
        }
    }

    public function getPrefix()
    {
        return \$this->prefix;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return 'glob.'.\$this->prefix.\$this->pattern.(int) \$this->recursive;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(\$timestamp)
    {
        \$hash = \$this->computeHash();

        if (null === \$this->hash) {
            \$this->hash = \$hash;
        }

        return \$this->hash === \$hash;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        if (null === \$this->hash) {
            \$this->hash = \$this->computeHash();
        }

        return ['prefix', 'pattern', 'recursive', 'hash', 'forExclusion', 'excludedPrefixes'];
    }

    public function getIterator()
    {
        if (!file_exists(\$this->prefix) || (!\$this->recursive && '' === \$this->pattern)) {
            return;
        }
        \$prefix = str_replace('\\\\', '/', \$this->prefix);

        if (0 !== strpos(\$this->prefix, 'phar://') && false === strpos(\$this->pattern, '/**/') && (\\defined('GLOB_BRACE') || false === strpos(\$this->pattern, '{'))) {
            foreach (glob(\$this->prefix.\$this->pattern, \\defined('GLOB_BRACE') ? GLOB_BRACE : 0) as \$path) {
                if (\$this->excludedPrefixes) {
                    \$normalizedPath = str_replace('\\\\', '/', \$path);
                    do {
                        if (isset(\$this->excludedPrefixes[\$dirPath = \$normalizedPath])) {
                            continue 2;
                        }
                    } while (\$prefix !== \$dirPath && \$dirPath !== \$normalizedPath = \\dirname(\$dirPath));
                }

                if (is_file(\$path)) {
                    yield \$path => new \\SplFileInfo(\$path);
                }
                if (!is_dir(\$path)) {
                    continue;
                }
                if (\$this->forExclusion) {
                    yield \$path => new \\SplFileInfo(\$path);
                    continue;
                }
                if (!\$this->recursive || isset(\$this->excludedPrefixes[str_replace('\\\\', '/', \$path)])) {
                    continue;
                }
                \$files = iterator_to_array(new \\RecursiveIteratorIterator(
                    new \\RecursiveCallbackFilterIterator(
                        new \\RecursiveDirectoryIterator(\$path, \\FilesystemIterator::SKIP_DOTS | \\FilesystemIterator::FOLLOW_SYMLINKS),
                        function (\\SplFileInfo \$file, \$path) {
                            return !isset(\$this->excludedPrefixes[str_replace('\\\\', '/', \$path)]) && '.' !== \$file->getBasename()[0];
                        }
                    ),
                    \\RecursiveIteratorIterator::LEAVES_ONLY
                ));
                uasort(\$files, 'strnatcmp');

                foreach (\$files as \$path => \$info) {
                    if (\$info->isFile()) {
                        yield \$path => \$info;
                    }
                }
            }

            return;
        }

        if (!class_exists(Finder::class)) {
            throw new \\LogicException(sprintf('Extended glob pattern \"%s\" cannot be used as the Finder component is not installed.', \$this->pattern));
        }

        \$finder = new Finder();
        \$regex = Glob::toRegex(\$this->pattern);
        if (\$this->recursive) {
            \$regex = substr_replace(\$regex, '(/|\$)', -2, 1);
        }

        \$prefixLen = \\strlen(\$this->prefix);
        foreach (\$finder->followLinks()->sortByName()->in(\$this->prefix) as \$path => \$info) {
            \$normalizedPath = str_replace('\\\\', '/', \$path);
            if (!preg_match(\$regex, substr(\$normalizedPath, \$prefixLen)) || !\$info->isFile()) {
                continue;
            }
            if (\$this->excludedPrefixes) {
                do {
                    if (isset(\$this->excludedPrefixes[\$dirPath = \$normalizedPath])) {
                        continue 2;
                    }
                } while (\$prefix !== \$dirPath && \$dirPath !== \$normalizedPath = \\dirname(\$dirPath));
            }

            yield \$path => \$info;
        }
    }

    private function computeHash()
    {
        \$hash = hash_init('md5');

        foreach (\$this->getIterator() as \$path => \$info) {
            hash_update(\$hash, \$path.\"\\n\");
        }

        return hash_final(\$hash);
    }
}
", "vendor/symfony/config/Resource/GlobResource.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Resource/GlobResource.php");
    }
}
