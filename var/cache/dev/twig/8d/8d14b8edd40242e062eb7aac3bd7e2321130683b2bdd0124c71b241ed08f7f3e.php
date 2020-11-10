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

/* vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php */
class __TwigTemplate_967b500ae1ce684b8a22a0ff9c16af7290e8cde0e30ff5d04d6c28c866c37e9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php"));

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

namespace Symfony\\Component\\Finder\\Iterator;

use Symfony\\Component\\Finder\\Exception\\AccessDeniedException;
use Symfony\\Component\\Finder\\SplFileInfo;

/**
 * Extends the \\RecursiveDirectoryIterator to support relative paths.
 *
 * @author Victor Berchet <victor@suumit.com>
 */
class RecursiveDirectoryIterator extends \\RecursiveDirectoryIterator
{
    /**
     * @var bool
     */
    private \$ignoreUnreadableDirs;

    /**
     * @var bool
     */
    private \$rewindable;

    // these 3 properties take part of the performance optimization to avoid redoing the same work in all iterations
    private \$rootPath;
    private \$subPath;
    private \$directorySeparator = '/';

    /**
     * @throws \\RuntimeException
     */
    public function __construct(string \$path, int \$flags, bool \$ignoreUnreadableDirs = false)
    {
        if (\$flags & (self::CURRENT_AS_PATHNAME | self::CURRENT_AS_SELF)) {
            throw new \\RuntimeException('This iterator only support returning current as fileinfo.');
        }

        parent::__construct(\$path, \$flags);
        \$this->ignoreUnreadableDirs = \$ignoreUnreadableDirs;
        \$this->rootPath = \$path;
        if ('/' !== \\DIRECTORY_SEPARATOR && !(\$flags & self::UNIX_PATHS)) {
            \$this->directorySeparator = \\DIRECTORY_SEPARATOR;
        }
    }

    /**
     * Return an instance of SplFileInfo with support for relative paths.
     *
     * @return SplFileInfo File information
     */
    public function current()
    {
        // the logic here avoids redoing the same work in all iterations

        if (null === \$subPathname = \$this->subPath) {
            \$subPathname = \$this->subPath = (string) \$this->getSubPath();
        }
        if ('' !== \$subPathname) {
            \$subPathname .= \$this->directorySeparator;
        }
        \$subPathname .= \$this->getFilename();

        return new SplFileInfo(\$this->rootPath.\$this->directorySeparator.\$subPathname, \$this->subPath, \$subPathname);
    }

    /**
     * @return \\RecursiveIterator
     *
     * @throws AccessDeniedException
     */
    public function getChildren()
    {
        try {
            \$children = parent::getChildren();

            if (\$children instanceof self) {
                // parent method will call the constructor with default arguments, so unreadable dirs won't be ignored anymore
                \$children->ignoreUnreadableDirs = \$this->ignoreUnreadableDirs;

                // performance optimization to avoid redoing the same work in all children
                \$children->rewindable = &\$this->rewindable;
                \$children->rootPath = \$this->rootPath;
            }

            return \$children;
        } catch (\\UnexpectedValueException \$e) {
            if (\$this->ignoreUnreadableDirs) {
                // If directory is unreadable and finder is set to ignore it, a fake empty content is returned.
                return new \\RecursiveArrayIterator([]);
            } else {
                throw new AccessDeniedException(\$e->getMessage(), \$e->getCode(), \$e);
            }
        }
    }

    /**
     * Do nothing for non rewindable stream.
     */
    public function rewind()
    {
        if (false === \$this->isRewindable()) {
            return;
        }

        parent::rewind();
    }

    /**
     * Checks if the stream is rewindable.
     *
     * @return bool true when the stream is rewindable, false otherwise
     */
    public function isRewindable()
    {
        if (null !== \$this->rewindable) {
            return \$this->rewindable;
        }

        if (false !== \$stream = @opendir(\$this->getPath())) {
            \$infos = stream_get_meta_data(\$stream);
            closedir(\$stream);

            if (\$infos['seekable']) {
                return \$this->rewindable = true;
            }
        }

        return \$this->rewindable = false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php";
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

namespace Symfony\\Component\\Finder\\Iterator;

use Symfony\\Component\\Finder\\Exception\\AccessDeniedException;
use Symfony\\Component\\Finder\\SplFileInfo;

/**
 * Extends the \\RecursiveDirectoryIterator to support relative paths.
 *
 * @author Victor Berchet <victor@suumit.com>
 */
class RecursiveDirectoryIterator extends \\RecursiveDirectoryIterator
{
    /**
     * @var bool
     */
    private \$ignoreUnreadableDirs;

    /**
     * @var bool
     */
    private \$rewindable;

    // these 3 properties take part of the performance optimization to avoid redoing the same work in all iterations
    private \$rootPath;
    private \$subPath;
    private \$directorySeparator = '/';

    /**
     * @throws \\RuntimeException
     */
    public function __construct(string \$path, int \$flags, bool \$ignoreUnreadableDirs = false)
    {
        if (\$flags & (self::CURRENT_AS_PATHNAME | self::CURRENT_AS_SELF)) {
            throw new \\RuntimeException('This iterator only support returning current as fileinfo.');
        }

        parent::__construct(\$path, \$flags);
        \$this->ignoreUnreadableDirs = \$ignoreUnreadableDirs;
        \$this->rootPath = \$path;
        if ('/' !== \\DIRECTORY_SEPARATOR && !(\$flags & self::UNIX_PATHS)) {
            \$this->directorySeparator = \\DIRECTORY_SEPARATOR;
        }
    }

    /**
     * Return an instance of SplFileInfo with support for relative paths.
     *
     * @return SplFileInfo File information
     */
    public function current()
    {
        // the logic here avoids redoing the same work in all iterations

        if (null === \$subPathname = \$this->subPath) {
            \$subPathname = \$this->subPath = (string) \$this->getSubPath();
        }
        if ('' !== \$subPathname) {
            \$subPathname .= \$this->directorySeparator;
        }
        \$subPathname .= \$this->getFilename();

        return new SplFileInfo(\$this->rootPath.\$this->directorySeparator.\$subPathname, \$this->subPath, \$subPathname);
    }

    /**
     * @return \\RecursiveIterator
     *
     * @throws AccessDeniedException
     */
    public function getChildren()
    {
        try {
            \$children = parent::getChildren();

            if (\$children instanceof self) {
                // parent method will call the constructor with default arguments, so unreadable dirs won't be ignored anymore
                \$children->ignoreUnreadableDirs = \$this->ignoreUnreadableDirs;

                // performance optimization to avoid redoing the same work in all children
                \$children->rewindable = &\$this->rewindable;
                \$children->rootPath = \$this->rootPath;
            }

            return \$children;
        } catch (\\UnexpectedValueException \$e) {
            if (\$this->ignoreUnreadableDirs) {
                // If directory is unreadable and finder is set to ignore it, a fake empty content is returned.
                return new \\RecursiveArrayIterator([]);
            } else {
                throw new AccessDeniedException(\$e->getMessage(), \$e->getCode(), \$e);
            }
        }
    }

    /**
     * Do nothing for non rewindable stream.
     */
    public function rewind()
    {
        if (false === \$this->isRewindable()) {
            return;
        }

        parent::rewind();
    }

    /**
     * Checks if the stream is rewindable.
     *
     * @return bool true when the stream is rewindable, false otherwise
     */
    public function isRewindable()
    {
        if (null !== \$this->rewindable) {
            return \$this->rewindable;
        }

        if (false !== \$stream = @opendir(\$this->getPath())) {
            \$infos = stream_get_meta_data(\$stream);
            closedir(\$stream);

            if (\$infos['seekable']) {
                return \$this->rewindable = true;
            }
        }

        return \$this->rewindable = false;
    }
}
", "vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php");
    }
}
