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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php */
class __TwigTemplate_26597e6ac3951d1477edc8483d2c4b4a4eec2400a4fb51d557e070354c68ad5f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Exception;

use UnexpectedValueException;

/**
 * Exception for non writable files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileNotWritableException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidMoveOperation(string \$fromPath, string \$toPath) : self
    {
        return new self(sprintf(
            'Could not move file \"%s\" to location \"%s\": '
            . 'either the source file is not readable, or the destination is not writable',
            \$fromPath,
            \$toPath
        ));
    }

    /**
     * @deprecated this method is unused, and will be removed in ProxyManager 3.0.0
     */
    public static function fromNonWritableLocation(\$path) : self
    {
        \$messages    = [];
        \$destination = realpath(\$path);

        if (! \$destination) {
            \$messages[] = 'path does not exist';
        }

        if (\$destination && ! is_file(\$destination)) {
            \$messages[] = 'exists and is not a file';
        }

        if (\$destination && ! is_writable(\$destination)) {
            \$messages[] = 'is not writable';
        }

        return new self(sprintf('Could not write to path \"%s\": %s', \$path, implode(', ', \$messages)));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Exception;

use UnexpectedValueException;

/**
 * Exception for non writable files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileNotWritableException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidMoveOperation(string \$fromPath, string \$toPath) : self
    {
        return new self(sprintf(
            'Could not move file \"%s\" to location \"%s\": '
            . 'either the source file is not readable, or the destination is not writable',
            \$fromPath,
            \$toPath
        ));
    }

    /**
     * @deprecated this method is unused, and will be removed in ProxyManager 3.0.0
     */
    public static function fromNonWritableLocation(\$path) : self
    {
        \$messages    = [];
        \$destination = realpath(\$path);

        if (! \$destination) {
            \$messages[] = 'path does not exist';
        }

        if (\$destination && ! is_file(\$destination)) {
            \$messages[] = 'exists and is not a file';
        }

        if (\$destination && ! is_writable(\$destination)) {
            \$messages[] = 'is not writable';
        }

        return new self(sprintf('Could not write to path \"%s\": %s', \$path, implode(', ', \$messages)));
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php");
    }
}
