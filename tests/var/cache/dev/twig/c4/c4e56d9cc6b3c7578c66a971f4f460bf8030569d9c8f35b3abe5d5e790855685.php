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

/* vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php */
class __TwigTemplate_30cc638ca926905e24af1ea9ed67bab845f14f4dfed3aae763730092c7e533f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php"));

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
use Symfony\\Component\\Mime\\MimeTypes;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', MimeTypeGuesser::class, MimeTypes::class), E_USER_DEPRECATED);

/**
 * A singleton mime type guesser.
 *
 * By default, all mime type guessers provided by the framework are installed
 * (if available on the current OS/PHP setup).
 *
 * You can register custom guessers by calling the register() method on the
 * singleton instance. Custom guessers are always called before any default ones.
 *
 *     \$guesser = MimeTypeGuesser::getInstance();
 *     \$guesser->register(new MyCustomMimeTypeGuesser());
 *
 * If you want to change the order of the default guessers, just re-register your
 * preferred one as a custom one. The last registered guesser is preferred over
 * previously registered ones.
 *
 * Re-registering a built-in guesser also allows you to configure it:
 *
 *     \$guesser = MimeTypeGuesser::getInstance();
 *     \$guesser->register(new FileinfoMimeTypeGuesser('/path/to/magic/file'));
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class MimeTypeGuesser implements MimeTypeGuesserInterface
{
    /**
     * The singleton instance.
     *
     * @var MimeTypeGuesser
     */
    private static \$instance = null;

    /**
     * All registered MimeTypeGuesserInterface instances.
     *
     * @var array
     */
    protected \$guessers = [];

    /**
     * Returns the singleton instance.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === self::\$instance) {
            self::\$instance = new self();
        }

        return self::\$instance;
    }

    /**
     * Resets the singleton instance.
     */
    public static function reset()
    {
        self::\$instance = null;
    }

    /**
     * Registers all natively provided mime type guessers.
     */
    private function __construct()
    {
        \$this->register(new FileBinaryMimeTypeGuesser());
        \$this->register(new FileinfoMimeTypeGuesser());
    }

    /**
     * Registers a new mime type guesser.
     *
     * When guessing, this guesser is preferred over previously registered ones.
     */
    public function register(MimeTypeGuesserInterface \$guesser)
    {
        array_unshift(\$this->guessers, \$guesser);
    }

    /**
     * Tries to guess the mime type of the given file.
     *
     * The file is passed to each registered mime type guesser in reverse order
     * of their register (last registered is queried first). Once a guesser
     * returns a value that is not NULL, this method terminates and returns the
     * value.
     *
     * @param string \$path The path to the file
     *
     * @return string The mime type or NULL, if none could be guessed
     *
     * @throws \\LogicException
     * @throws FileNotFoundException
     * @throws AccessDeniedException
     */
    public function guess(\$path)
    {
        if (!is_file(\$path)) {
            throw new FileNotFoundException(\$path);
        }

        if (!is_readable(\$path)) {
            throw new AccessDeniedException(\$path);
        }

        foreach (\$this->guessers as \$guesser) {
            if (null !== \$mimeType = \$guesser->guess(\$path)) {
                return \$mimeType;
            }
        }

        if (2 === \\count(\$this->guessers) && !FileBinaryMimeTypeGuesser::isSupported() && !FileinfoMimeTypeGuesser::isSupported()) {
            throw new \\LogicException('Unable to guess the mime type as no guessers are available (Did you enable the php_fileinfo extension?)');
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php";
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
use Symfony\\Component\\Mime\\MimeTypes;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', MimeTypeGuesser::class, MimeTypes::class), E_USER_DEPRECATED);

/**
 * A singleton mime type guesser.
 *
 * By default, all mime type guessers provided by the framework are installed
 * (if available on the current OS/PHP setup).
 *
 * You can register custom guessers by calling the register() method on the
 * singleton instance. Custom guessers are always called before any default ones.
 *
 *     \$guesser = MimeTypeGuesser::getInstance();
 *     \$guesser->register(new MyCustomMimeTypeGuesser());
 *
 * If you want to change the order of the default guessers, just re-register your
 * preferred one as a custom one. The last registered guesser is preferred over
 * previously registered ones.
 *
 * Re-registering a built-in guesser also allows you to configure it:
 *
 *     \$guesser = MimeTypeGuesser::getInstance();
 *     \$guesser->register(new FileinfoMimeTypeGuesser('/path/to/magic/file'));
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class MimeTypeGuesser implements MimeTypeGuesserInterface
{
    /**
     * The singleton instance.
     *
     * @var MimeTypeGuesser
     */
    private static \$instance = null;

    /**
     * All registered MimeTypeGuesserInterface instances.
     *
     * @var array
     */
    protected \$guessers = [];

    /**
     * Returns the singleton instance.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === self::\$instance) {
            self::\$instance = new self();
        }

        return self::\$instance;
    }

    /**
     * Resets the singleton instance.
     */
    public static function reset()
    {
        self::\$instance = null;
    }

    /**
     * Registers all natively provided mime type guessers.
     */
    private function __construct()
    {
        \$this->register(new FileBinaryMimeTypeGuesser());
        \$this->register(new FileinfoMimeTypeGuesser());
    }

    /**
     * Registers a new mime type guesser.
     *
     * When guessing, this guesser is preferred over previously registered ones.
     */
    public function register(MimeTypeGuesserInterface \$guesser)
    {
        array_unshift(\$this->guessers, \$guesser);
    }

    /**
     * Tries to guess the mime type of the given file.
     *
     * The file is passed to each registered mime type guesser in reverse order
     * of their register (last registered is queried first). Once a guesser
     * returns a value that is not NULL, this method terminates and returns the
     * value.
     *
     * @param string \$path The path to the file
     *
     * @return string The mime type or NULL, if none could be guessed
     *
     * @throws \\LogicException
     * @throws FileNotFoundException
     * @throws AccessDeniedException
     */
    public function guess(\$path)
    {
        if (!is_file(\$path)) {
            throw new FileNotFoundException(\$path);
        }

        if (!is_readable(\$path)) {
            throw new AccessDeniedException(\$path);
        }

        foreach (\$this->guessers as \$guesser) {
            if (null !== \$mimeType = \$guesser->guess(\$path)) {
                return \$mimeType;
            }
        }

        if (2 === \\count(\$this->guessers) && !FileBinaryMimeTypeGuesser::isSupported() && !FileinfoMimeTypeGuesser::isSupported()) {
            throw new \\LogicException('Unable to guess the mime type as no guessers are available (Did you enable the php_fileinfo extension?)');
        }

        return null;
    }
}
", "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php");
    }
}
