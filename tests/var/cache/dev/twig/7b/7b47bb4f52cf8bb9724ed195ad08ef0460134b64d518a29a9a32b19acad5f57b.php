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

/* vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php */
class __TwigTemplate_5c91ad1f68ec42a986401c593ed37549be7b1c0e80b8aa0aec84b8fddb320e14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php"));

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

use Symfony\\Component\\Mime\\MimeTypes;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', ExtensionGuesser::class, MimeTypes::class), E_USER_DEPRECATED);

/**
 * A singleton mime type to file extension guesser.
 *
 * A default guesser is provided.
 * You can register custom guessers by calling the register()
 * method on the singleton instance:
 *
 *     \$guesser = ExtensionGuesser::getInstance();
 *     \$guesser->register(new MyCustomExtensionGuesser());
 *
 * The last registered guesser is preferred over previously registered ones.
 *
 * @deprecated since Symfony 4.3, use {@link MimeTypes} instead
 */
class ExtensionGuesser implements ExtensionGuesserInterface
{
    /**
     * The singleton instance.
     *
     * @var ExtensionGuesser
     */
    private static \$instance = null;

    /**
     * All registered ExtensionGuesserInterface instances.
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
     * Registers all natively provided extension guessers.
     */
    private function __construct()
    {
        \$this->register(new MimeTypeExtensionGuesser());
    }

    /**
     * Registers a new extension guesser.
     *
     * When guessing, this guesser is preferred over previously registered ones.
     */
    public function register(ExtensionGuesserInterface \$guesser)
    {
        array_unshift(\$this->guessers, \$guesser);
    }

    /**
     * Tries to guess the extension.
     *
     * The mime type is passed to each registered mime type guesser in reverse order
     * of their register (last registered is queried first). Once a guesser
     * returns a value that is not NULL, this method terminates and returns the
     * value.
     *
     * @param string \$mimeType The mime type
     *
     * @return string The guessed extension or NULL, if none could be guessed
     */
    public function guess(\$mimeType)
    {
        foreach (\$this->guessers as \$guesser) {
            if (null !== \$extension = \$guesser->guess(\$mimeType)) {
                return \$extension;
            }
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
        return "vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php";
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

use Symfony\\Component\\Mime\\MimeTypes;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', ExtensionGuesser::class, MimeTypes::class), E_USER_DEPRECATED);

/**
 * A singleton mime type to file extension guesser.
 *
 * A default guesser is provided.
 * You can register custom guessers by calling the register()
 * method on the singleton instance:
 *
 *     \$guesser = ExtensionGuesser::getInstance();
 *     \$guesser->register(new MyCustomExtensionGuesser());
 *
 * The last registered guesser is preferred over previously registered ones.
 *
 * @deprecated since Symfony 4.3, use {@link MimeTypes} instead
 */
class ExtensionGuesser implements ExtensionGuesserInterface
{
    /**
     * The singleton instance.
     *
     * @var ExtensionGuesser
     */
    private static \$instance = null;

    /**
     * All registered ExtensionGuesserInterface instances.
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
     * Registers all natively provided extension guessers.
     */
    private function __construct()
    {
        \$this->register(new MimeTypeExtensionGuesser());
    }

    /**
     * Registers a new extension guesser.
     *
     * When guessing, this guesser is preferred over previously registered ones.
     */
    public function register(ExtensionGuesserInterface \$guesser)
    {
        array_unshift(\$this->guessers, \$guesser);
    }

    /**
     * Tries to guess the extension.
     *
     * The mime type is passed to each registered mime type guesser in reverse order
     * of their register (last registered is queried first). Once a guesser
     * returns a value that is not NULL, this method terminates and returns the
     * value.
     *
     * @param string \$mimeType The mime type
     *
     * @return string The guessed extension or NULL, if none could be guessed
     */
    public function guess(\$mimeType)
    {
        foreach (\$this->guessers as \$guesser) {
            if (null !== \$extension = \$guesser->guess(\$mimeType)) {
                return \$extension;
            }
        }

        return null;
    }
}
", "vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php");
    }
}
