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

/* vendor/symfony/debug/Debug.php */
class __TwigTemplate_dfee8b100d4454e3deb353d5e01c6d71ad510e21d5ea9722fbedb41d5c3d65c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Debug.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Debug.php"));

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

namespace Symfony\\Component\\Debug;

/**
 * Registers all the debug tools.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Debug
{
    private static \$enabled = false;

    /**
     * Enables the debug tools.
     *
     * This method registers an error handler and an exception handler.
     *
     * @param int  \$errorReportingLevel The level of error reporting you want
     * @param bool \$displayErrors       Whether to display errors (for development) or just log them (for production)
     */
    public static function enable(\$errorReportingLevel = E_ALL, \$displayErrors = true)
    {
        if (static::\$enabled) {
            return;
        }

        static::\$enabled = true;

        if (null !== \$errorReportingLevel) {
            error_reporting(\$errorReportingLevel);
        } else {
            error_reporting(E_ALL);
        }

        if (!\\in_array(\\PHP_SAPI, ['cli', 'phpdbg'], true)) {
            ini_set('display_errors', 0);
            ExceptionHandler::register();
        } elseif (\$displayErrors && (!filter_var(ini_get('log_errors'), FILTER_VALIDATE_BOOLEAN) || ini_get('error_log'))) {
            // CLI - display errors only if they're not already logged to STDERR
            ini_set('display_errors', 1);
        }
        if (\$displayErrors) {
            ErrorHandler::register(new ErrorHandler(new BufferingLogger()));
        } else {
            ErrorHandler::register()->throwAt(0, true);
        }

        DebugClassLoader::enable();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Debug.php";
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

namespace Symfony\\Component\\Debug;

/**
 * Registers all the debug tools.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Debug
{
    private static \$enabled = false;

    /**
     * Enables the debug tools.
     *
     * This method registers an error handler and an exception handler.
     *
     * @param int  \$errorReportingLevel The level of error reporting you want
     * @param bool \$displayErrors       Whether to display errors (for development) or just log them (for production)
     */
    public static function enable(\$errorReportingLevel = E_ALL, \$displayErrors = true)
    {
        if (static::\$enabled) {
            return;
        }

        static::\$enabled = true;

        if (null !== \$errorReportingLevel) {
            error_reporting(\$errorReportingLevel);
        } else {
            error_reporting(E_ALL);
        }

        if (!\\in_array(\\PHP_SAPI, ['cli', 'phpdbg'], true)) {
            ini_set('display_errors', 0);
            ExceptionHandler::register();
        } elseif (\$displayErrors && (!filter_var(ini_get('log_errors'), FILTER_VALIDATE_BOOLEAN) || ini_get('error_log'))) {
            // CLI - display errors only if they're not already logged to STDERR
            ini_set('display_errors', 1);
        }
        if (\$displayErrors) {
            ErrorHandler::register(new ErrorHandler(new BufferingLogger()));
        } else {
            ErrorHandler::register()->throwAt(0, true);
        }

        DebugClassLoader::enable();
    }
}
", "vendor/symfony/debug/Debug.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Debug.php");
    }
}
