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

/* vendor/symfony/http-foundation/File/File.php */
class __TwigTemplate_771afec06956a389f5d9ec1f4fae9a3e1097cf27c3d104b78b6265e684444e53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/File.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/File.php"));

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

namespace Symfony\\Component\\HttpFoundation\\File;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException;
use Symfony\\Component\\Mime\\MimeTypes;

/**
 * A file in the file system.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class File extends \\SplFileInfo
{
    /**
     * Constructs a new file from the given path.
     *
     * @param string \$path      The path to the file
     * @param bool   \$checkPath Whether to check the path or not
     *
     * @throws FileNotFoundException If the given path is not a file
     */
    public function __construct(string \$path, bool \$checkPath = true)
    {
        if (\$checkPath && !is_file(\$path)) {
            throw new FileNotFoundException(\$path);
        }

        parent::__construct(\$path);
    }

    /**
     * Returns the extension based on the mime type.
     *
     * If the mime type is unknown, returns null.
     *
     * This method uses the mime type as guessed by getMimeType()
     * to guess the file extension.
     *
     * @return string|null The guessed extension or null if it cannot be guessed
     *
     * @see MimeTypes
     * @see getMimeType()
     */
    public function guessExtension()
    {
        return MimeTypes::getDefault()->getExtensions(\$this->getMimeType())[0] ?? null;
    }

    /**
     * Returns the mime type of the file.
     *
     * The mime type is guessed using a MimeTypeGuesserInterface instance,
     * which uses finfo_file() then the \"file\" system binary,
     * depending on which of those are available.
     *
     * @return string|null The guessed mime type (e.g. \"application/pdf\")
     *
     * @see MimeTypes
     */
    public function getMimeType()
    {
        return MimeTypes::getDefault()->guessMimeType(\$this->getPathname());
    }

    /**
     * Moves the file to a new location.
     *
     * @param string \$directory The destination folder
     * @param string \$name      The new file name
     *
     * @return self A File object representing the new file
     *
     * @throws FileException if the target file could not be created
     */
    public function move(\$directory, \$name = null)
    {
        \$target = \$this->getTargetFile(\$directory, \$name);

        set_error_handler(function (\$type, \$msg) use (&\$error) { \$error = \$msg; });
        \$renamed = rename(\$this->getPathname(), \$target);
        restore_error_handler();
        if (!\$renamed) {
            throw new FileException(sprintf('Could not move the file \"%s\" to \"%s\" (%s)', \$this->getPathname(), \$target, strip_tags(\$error)));
        }

        @chmod(\$target, 0666 & ~umask());

        return \$target;
    }

    protected function getTargetFile(\$directory, \$name = null)
    {
        if (!is_dir(\$directory)) {
            if (false === @mkdir(\$directory, 0777, true) && !is_dir(\$directory)) {
                throw new FileException(sprintf('Unable to create the \"%s\" directory', \$directory));
            }
        } elseif (!is_writable(\$directory)) {
            throw new FileException(sprintf('Unable to write in the \"%s\" directory', \$directory));
        }

        \$target = rtrim(\$directory, '/\\\\').\\DIRECTORY_SEPARATOR.(null === \$name ? \$this->getBasename() : \$this->getName(\$name));

        return new self(\$target, false);
    }

    /**
     * Returns locale independent base name of the given path.
     *
     * @param string \$name The new file name
     *
     * @return string containing
     */
    protected function getName(\$name)
    {
        \$originalName = str_replace('\\\\', '/', \$name);
        \$pos = strrpos(\$originalName, '/');
        \$originalName = false === \$pos ? \$originalName : substr(\$originalName, \$pos + 1);

        return \$originalName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/File/File.php";
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

namespace Symfony\\Component\\HttpFoundation\\File;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException;
use Symfony\\Component\\Mime\\MimeTypes;

/**
 * A file in the file system.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class File extends \\SplFileInfo
{
    /**
     * Constructs a new file from the given path.
     *
     * @param string \$path      The path to the file
     * @param bool   \$checkPath Whether to check the path or not
     *
     * @throws FileNotFoundException If the given path is not a file
     */
    public function __construct(string \$path, bool \$checkPath = true)
    {
        if (\$checkPath && !is_file(\$path)) {
            throw new FileNotFoundException(\$path);
        }

        parent::__construct(\$path);
    }

    /**
     * Returns the extension based on the mime type.
     *
     * If the mime type is unknown, returns null.
     *
     * This method uses the mime type as guessed by getMimeType()
     * to guess the file extension.
     *
     * @return string|null The guessed extension or null if it cannot be guessed
     *
     * @see MimeTypes
     * @see getMimeType()
     */
    public function guessExtension()
    {
        return MimeTypes::getDefault()->getExtensions(\$this->getMimeType())[0] ?? null;
    }

    /**
     * Returns the mime type of the file.
     *
     * The mime type is guessed using a MimeTypeGuesserInterface instance,
     * which uses finfo_file() then the \"file\" system binary,
     * depending on which of those are available.
     *
     * @return string|null The guessed mime type (e.g. \"application/pdf\")
     *
     * @see MimeTypes
     */
    public function getMimeType()
    {
        return MimeTypes::getDefault()->guessMimeType(\$this->getPathname());
    }

    /**
     * Moves the file to a new location.
     *
     * @param string \$directory The destination folder
     * @param string \$name      The new file name
     *
     * @return self A File object representing the new file
     *
     * @throws FileException if the target file could not be created
     */
    public function move(\$directory, \$name = null)
    {
        \$target = \$this->getTargetFile(\$directory, \$name);

        set_error_handler(function (\$type, \$msg) use (&\$error) { \$error = \$msg; });
        \$renamed = rename(\$this->getPathname(), \$target);
        restore_error_handler();
        if (!\$renamed) {
            throw new FileException(sprintf('Could not move the file \"%s\" to \"%s\" (%s)', \$this->getPathname(), \$target, strip_tags(\$error)));
        }

        @chmod(\$target, 0666 & ~umask());

        return \$target;
    }

    protected function getTargetFile(\$directory, \$name = null)
    {
        if (!is_dir(\$directory)) {
            if (false === @mkdir(\$directory, 0777, true) && !is_dir(\$directory)) {
                throw new FileException(sprintf('Unable to create the \"%s\" directory', \$directory));
            }
        } elseif (!is_writable(\$directory)) {
            throw new FileException(sprintf('Unable to write in the \"%s\" directory', \$directory));
        }

        \$target = rtrim(\$directory, '/\\\\').\\DIRECTORY_SEPARATOR.(null === \$name ? \$this->getBasename() : \$this->getName(\$name));

        return new self(\$target, false);
    }

    /**
     * Returns locale independent base name of the given path.
     *
     * @param string \$name The new file name
     *
     * @return string containing
     */
    protected function getName(\$name)
    {
        \$originalName = str_replace('\\\\', '/', \$name);
        \$pos = strrpos(\$originalName, '/');
        \$originalName = false === \$pos ? \$originalName : substr(\$originalName, \$pos + 1);

        return \$originalName;
    }
}
", "vendor/symfony/http-foundation/File/File.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/File/File.php");
    }
}
