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

/* vendor/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php */
class __TwigTemplate_2523a100ad1a0ce7306348f4bf811bc2b93e2560178b5b991bb26786a2d31b6e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php"));

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

namespace Symfony\\Component\\HttpFoundation\\File\\MimeType;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException;
use Symfony\\Component\\Mime\\FileBinaryMimeTypeGuesser as NewFileBinaryMimeTypeGuesser;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', FileBinaryMimeTypeGuesser::class, NewFileBinaryMimeTypeGuesser::class), E_USER_DEPRECATED);

/**
 * Guesses the mime type with the binary \"file\" (only available on *nix).
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link NewFileBinaryMimeTypeGuesser} instead
 */
class FileBinaryMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$cmd;

    /**
     * The \$cmd pattern must contain a \"%s\" string that will be replaced
     * with the file name to guess.
     *
     * The command output must start with the mime type of the file.
     *
     * @param string \$cmd The command to run to get the mime type of a file
     */
    public function __construct(string \$cmd = 'file -b --mime %s 2>/dev/null')
    {
        \$this->cmd = \$cmd;
    }

    /**
     * Returns whether this guesser is supported on the current OS.
     *
     * @return bool
     */
    public static function isSupported()
    {
        static \$supported = null;

        if (null !== \$supported) {
            return \$supported;
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR || !\\function_exists('passthru') || !\\function_exists('escapeshellarg')) {
            return \$supported = false;
        }

        ob_start();
        passthru('command -v file', \$exitStatus);
        \$binPath = trim(ob_get_clean());

        return \$supported = 0 === \$exitStatus && '' !== \$binPath;
    }

    /**
     * {@inheritdoc}
     */
    public function guess(\$path)
    {
        if (!is_file(\$path)) {
            throw new FileNotFoundException(\$path);
        }

        if (!is_readable(\$path)) {
            throw new AccessDeniedException(\$path);
        }

        if (!self::isSupported()) {
            return null;
        }

        ob_start();

        // need to use --mime instead of -i. see #6641
        passthru(sprintf(\$this->cmd, escapeshellarg(\$path)), \$return);
        if (\$return > 0) {
            ob_end_clean();

            return null;
        }

        \$type = trim(ob_get_clean());

        if (!preg_match('#^([a-z0-9\\-]+/[a-z0-9\\-\\.]+)#i', \$type, \$match)) {
            // it's not a type, but an error message
            return null;
        }

        return \$match[1];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php";
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

namespace Symfony\\Component\\HttpFoundation\\File\\MimeType;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException;
use Symfony\\Component\\Mime\\FileBinaryMimeTypeGuesser as NewFileBinaryMimeTypeGuesser;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', FileBinaryMimeTypeGuesser::class, NewFileBinaryMimeTypeGuesser::class), E_USER_DEPRECATED);

/**
 * Guesses the mime type with the binary \"file\" (only available on *nix).
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link NewFileBinaryMimeTypeGuesser} instead
 */
class FileBinaryMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$cmd;

    /**
     * The \$cmd pattern must contain a \"%s\" string that will be replaced
     * with the file name to guess.
     *
     * The command output must start with the mime type of the file.
     *
     * @param string \$cmd The command to run to get the mime type of a file
     */
    public function __construct(string \$cmd = 'file -b --mime %s 2>/dev/null')
    {
        \$this->cmd = \$cmd;
    }

    /**
     * Returns whether this guesser is supported on the current OS.
     *
     * @return bool
     */
    public static function isSupported()
    {
        static \$supported = null;

        if (null !== \$supported) {
            return \$supported;
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR || !\\function_exists('passthru') || !\\function_exists('escapeshellarg')) {
            return \$supported = false;
        }

        ob_start();
        passthru('command -v file', \$exitStatus);
        \$binPath = trim(ob_get_clean());

        return \$supported = 0 === \$exitStatus && '' !== \$binPath;
    }

    /**
     * {@inheritdoc}
     */
    public function guess(\$path)
    {
        if (!is_file(\$path)) {
            throw new FileNotFoundException(\$path);
        }

        if (!is_readable(\$path)) {
            throw new AccessDeniedException(\$path);
        }

        if (!self::isSupported()) {
            return null;
        }

        ob_start();

        // need to use --mime instead of -i. see #6641
        passthru(sprintf(\$this->cmd, escapeshellarg(\$path)), \$return);
        if (\$return > 0) {
            ob_end_clean();

            return null;
        }

        \$type = trim(ob_get_clean());

        if (!preg_match('#^([a-z0-9\\-]+/[a-z0-9\\-\\.]+)#i', \$type, \$match)) {
            // it's not a type, but an error message
            return null;
        }

        return \$match[1];
    }
}
", "vendor/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php");
    }
}
