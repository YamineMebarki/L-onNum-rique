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

/* vendor/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php */
class __TwigTemplate_ea239157eb1be18ed95d60b918d42eab07c2293117907e12de930caf30a7b0af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php"));

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
use Symfony\\Component\\Mime\\FileinfoMimeTypeGuesser as NewFileinfoMimeTypeGuesser;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', FileinfoMimeTypeGuesser::class, NewFileinfoMimeTypeGuesser::class), E_USER_DEPRECATED);

/**
 * Guesses the mime type using the PECL extension FileInfo.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link NewFileinfoMimeTypeGuesser} instead
 */
class FileinfoMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$magicFile;

    /**
     * @param string \$magicFile A magic file to use with the finfo instance
     *
     * @see https://php.net/finfo-open
     */
    public function __construct(string \$magicFile = null)
    {
        \$this->magicFile = \$magicFile;
    }

    /**
     * Returns whether this guesser is supported on the current OS/PHP setup.
     *
     * @return bool
     */
    public static function isSupported()
    {
        return \\function_exists('finfo_open');
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

        if (!\$finfo = new \\finfo(FILEINFO_MIME_TYPE, \$this->magicFile)) {
            return null;
        }

        return \$finfo->file(\$path);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php";
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
use Symfony\\Component\\Mime\\FileinfoMimeTypeGuesser as NewFileinfoMimeTypeGuesser;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" instead.', FileinfoMimeTypeGuesser::class, NewFileinfoMimeTypeGuesser::class), E_USER_DEPRECATED);

/**
 * Guesses the mime type using the PECL extension FileInfo.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link NewFileinfoMimeTypeGuesser} instead
 */
class FileinfoMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$magicFile;

    /**
     * @param string \$magicFile A magic file to use with the finfo instance
     *
     * @see https://php.net/finfo-open
     */
    public function __construct(string \$magicFile = null)
    {
        \$this->magicFile = \$magicFile;
    }

    /**
     * Returns whether this guesser is supported on the current OS/PHP setup.
     *
     * @return bool
     */
    public static function isSupported()
    {
        return \\function_exists('finfo_open');
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

        if (!\$finfo = new \\finfo(FILEINFO_MIME_TYPE, \$this->magicFile)) {
            return null;
        }

        return \$finfo->file(\$path);
    }
}
", "vendor/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php");
    }
}
