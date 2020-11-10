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

/* vendor/symfony/process/PhpExecutableFinder.php */
class __TwigTemplate_4db987828a1a9e606c8ddc3d8026133f89adcdb1c991e3111f070e9585699546 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/PhpExecutableFinder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/PhpExecutableFinder.php"));

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

namespace Symfony\\Component\\Process;

/**
 * An executable finder specifically designed for the PHP executable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PhpExecutableFinder
{
    private \$executableFinder;

    public function __construct()
    {
        \$this->executableFinder = new ExecutableFinder();
    }

    /**
     * Finds The PHP executable.
     *
     * @param bool \$includeArgs Whether or not include command arguments
     *
     * @return string|false The PHP executable path or false if it cannot be found
     */
    public function find(\$includeArgs = true)
    {
        if (\$php = getenv('PHP_BINARY')) {
            if (!is_executable(\$php)) {
                \$command = '\\\\' === \\DIRECTORY_SEPARATOR ? 'where' : 'command -v';
                if (\$php = strtok(exec(\$command.' '.escapeshellarg(\$php)), PHP_EOL)) {
                    if (!is_executable(\$php)) {
                        return false;
                    }
                } else {
                    return false;
                }
            }

            return \$php;
        }

        \$args = \$this->findArguments();
        \$args = \$includeArgs && \$args ? ' '.implode(' ', \$args) : '';

        // PHP_BINARY return the current sapi executable
        if (PHP_BINARY && \\in_array(\\PHP_SAPI, ['cli', 'cli-server', 'phpdbg'], true)) {
            return PHP_BINARY.\$args;
        }

        if (\$php = getenv('PHP_PATH')) {
            if (!@is_executable(\$php)) {
                return false;
            }

            return \$php;
        }

        if (\$php = getenv('PHP_PEAR_PHP_BIN')) {
            if (@is_executable(\$php)) {
                return \$php;
            }
        }

        if (@is_executable(\$php = PHP_BINDIR.('\\\\' === \\DIRECTORY_SEPARATOR ? '\\\\php.exe' : '/php'))) {
            return \$php;
        }

        \$dirs = [PHP_BINDIR];
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$dirs[] = 'C:\\xampp\\php\\\\';
        }

        return \$this->executableFinder->find('php', false, \$dirs);
    }

    /**
     * Finds the PHP executable arguments.
     *
     * @return array The PHP executable arguments
     */
    public function findArguments()
    {
        \$arguments = [];
        if ('phpdbg' === \\PHP_SAPI) {
            \$arguments[] = '-qrr';
        }

        return \$arguments;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/PhpExecutableFinder.php";
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

namespace Symfony\\Component\\Process;

/**
 * An executable finder specifically designed for the PHP executable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PhpExecutableFinder
{
    private \$executableFinder;

    public function __construct()
    {
        \$this->executableFinder = new ExecutableFinder();
    }

    /**
     * Finds The PHP executable.
     *
     * @param bool \$includeArgs Whether or not include command arguments
     *
     * @return string|false The PHP executable path or false if it cannot be found
     */
    public function find(\$includeArgs = true)
    {
        if (\$php = getenv('PHP_BINARY')) {
            if (!is_executable(\$php)) {
                \$command = '\\\\' === \\DIRECTORY_SEPARATOR ? 'where' : 'command -v';
                if (\$php = strtok(exec(\$command.' '.escapeshellarg(\$php)), PHP_EOL)) {
                    if (!is_executable(\$php)) {
                        return false;
                    }
                } else {
                    return false;
                }
            }

            return \$php;
        }

        \$args = \$this->findArguments();
        \$args = \$includeArgs && \$args ? ' '.implode(' ', \$args) : '';

        // PHP_BINARY return the current sapi executable
        if (PHP_BINARY && \\in_array(\\PHP_SAPI, ['cli', 'cli-server', 'phpdbg'], true)) {
            return PHP_BINARY.\$args;
        }

        if (\$php = getenv('PHP_PATH')) {
            if (!@is_executable(\$php)) {
                return false;
            }

            return \$php;
        }

        if (\$php = getenv('PHP_PEAR_PHP_BIN')) {
            if (@is_executable(\$php)) {
                return \$php;
            }
        }

        if (@is_executable(\$php = PHP_BINDIR.('\\\\' === \\DIRECTORY_SEPARATOR ? '\\\\php.exe' : '/php'))) {
            return \$php;
        }

        \$dirs = [PHP_BINDIR];
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$dirs[] = 'C:\\xampp\\php\\\\';
        }

        return \$this->executableFinder->find('php', false, \$dirs);
    }

    /**
     * Finds the PHP executable arguments.
     *
     * @return array The PHP executable arguments
     */
    public function findArguments()
    {
        \$arguments = [];
        if ('phpdbg' === \\PHP_SAPI) {
            \$arguments[] = '-qrr';
        }

        return \$arguments;
    }
}
", "vendor/symfony/process/PhpExecutableFinder.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/PhpExecutableFinder.php");
    }
}
