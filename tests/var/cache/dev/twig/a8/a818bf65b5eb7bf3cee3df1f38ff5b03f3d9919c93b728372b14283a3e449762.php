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

/* vendor/symfony/config/Resource/DirectoryResource.php */
class __TwigTemplate_fb80552a988125195ce50b6625d1d729db27e8e2fe28ae0fb91c9db3e9b6a25b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/DirectoryResource.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/DirectoryResource.php"));

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

/**
 * DirectoryResource represents a resources stored in a subdirectory tree.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class DirectoryResource implements SelfCheckingResourceInterface
{
    private \$resource;
    private \$pattern;

    /**
     * @param string      \$resource The file path to the resource
     * @param string|null \$pattern  A pattern to restrict monitored files
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$resource, string \$pattern = null)
    {
        \$this->resource = realpath(\$resource) ?: (file_exists(\$resource) ? \$resource : false);
        \$this->pattern = \$pattern;

        if (false === \$this->resource || !is_dir(\$this->resource)) {
            throw new \\InvalidArgumentException(sprintf('The directory \"%s\" does not exist.', \$resource));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return md5(serialize([\$this->resource, \$this->pattern]));
    }

    /**
     * @return string The file path to the resource
     */
    public function getResource()
    {
        return \$this->resource;
    }

    /**
     * Returns the pattern to restrict monitored files.
     *
     * @return string|null
     */
    public function getPattern()
    {
        return \$this->pattern;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(\$timestamp)
    {
        if (!is_dir(\$this->resource)) {
            return false;
        }

        if (\$timestamp < filemtime(\$this->resource)) {
            return false;
        }

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->resource), \\RecursiveIteratorIterator::SELF_FIRST) as \$file) {
            // if regex filtering is enabled only check matching files
            if (\$this->pattern && \$file->isFile() && !preg_match(\$this->pattern, \$file->getBasename())) {
                continue;
            }

            // always monitor directories for changes, except the .. entries
            // (otherwise deleted files wouldn't get detected)
            if (\$file->isDir() && '/..' === substr(\$file, -3)) {
                continue;
            }

            // for broken links
            try {
                \$fileMTime = \$file->getMTime();
            } catch (\\RuntimeException \$e) {
                continue;
            }

            // early return if a file's mtime exceeds the passed timestamp
            if (\$timestamp < \$fileMTime) {
                return false;
            }
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Resource/DirectoryResource.php";
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

/**
 * DirectoryResource represents a resources stored in a subdirectory tree.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class DirectoryResource implements SelfCheckingResourceInterface
{
    private \$resource;
    private \$pattern;

    /**
     * @param string      \$resource The file path to the resource
     * @param string|null \$pattern  A pattern to restrict monitored files
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$resource, string \$pattern = null)
    {
        \$this->resource = realpath(\$resource) ?: (file_exists(\$resource) ? \$resource : false);
        \$this->pattern = \$pattern;

        if (false === \$this->resource || !is_dir(\$this->resource)) {
            throw new \\InvalidArgumentException(sprintf('The directory \"%s\" does not exist.', \$resource));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return md5(serialize([\$this->resource, \$this->pattern]));
    }

    /**
     * @return string The file path to the resource
     */
    public function getResource()
    {
        return \$this->resource;
    }

    /**
     * Returns the pattern to restrict monitored files.
     *
     * @return string|null
     */
    public function getPattern()
    {
        return \$this->pattern;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(\$timestamp)
    {
        if (!is_dir(\$this->resource)) {
            return false;
        }

        if (\$timestamp < filemtime(\$this->resource)) {
            return false;
        }

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->resource), \\RecursiveIteratorIterator::SELF_FIRST) as \$file) {
            // if regex filtering is enabled only check matching files
            if (\$this->pattern && \$file->isFile() && !preg_match(\$this->pattern, \$file->getBasename())) {
                continue;
            }

            // always monitor directories for changes, except the .. entries
            // (otherwise deleted files wouldn't get detected)
            if (\$file->isDir() && '/..' === substr(\$file, -3)) {
                continue;
            }

            // for broken links
            try {
                \$fileMTime = \$file->getMTime();
            } catch (\\RuntimeException \$e) {
                continue;
            }

            // early return if a file's mtime exceeds the passed timestamp
            if (\$timestamp < \$fileMTime) {
                return false;
            }
        }

        return true;
    }
}
", "vendor/symfony/config/Resource/DirectoryResource.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Resource/DirectoryResource.php");
    }
}
