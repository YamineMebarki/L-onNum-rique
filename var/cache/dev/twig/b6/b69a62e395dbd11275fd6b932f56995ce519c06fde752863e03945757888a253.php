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

/* vendor/symfony/process/ExecutableFinder.php */
class __TwigTemplate_15f185562ddf231b71b16d44d4f3a0ca32d58c15ac2eb73e5d3991928e9bc6b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/ExecutableFinder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/ExecutableFinder.php"));

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
 * Generic executable finder.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ExecutableFinder
{
    private \$suffixes = ['.exe', '.bat', '.cmd', '.com'];

    /**
     * Replaces default suffixes of executable.
     */
    public function setSuffixes(array \$suffixes)
    {
        \$this->suffixes = \$suffixes;
    }

    /**
     * Adds new possible suffix to check for executable.
     *
     * @param string \$suffix
     */
    public function addSuffix(\$suffix)
    {
        \$this->suffixes[] = \$suffix;
    }

    /**
     * Finds an executable by name.
     *
     * @param string      \$name      The executable name (without the extension)
     * @param string|null \$default   The default to return if no executable is found
     * @param array       \$extraDirs Additional dirs to check into
     *
     * @return string|null The executable path or default value
     */
    public function find(\$name, \$default = null, array \$extraDirs = [])
    {
        if (ini_get('open_basedir')) {
            \$searchPath = array_merge(explode(PATH_SEPARATOR, ini_get('open_basedir')), \$extraDirs);
            \$dirs = [];
            foreach (\$searchPath as \$path) {
                // Silencing against https://bugs.php.net/69240
                if (@is_dir(\$path)) {
                    \$dirs[] = \$path;
                } else {
                    if (basename(\$path) == \$name && @is_executable(\$path)) {
                        return \$path;
                    }
                }
            }
        } else {
            \$dirs = array_merge(
                explode(PATH_SEPARATOR, getenv('PATH') ?: getenv('Path')),
                \$extraDirs
            );
        }

        \$suffixes = [''];
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$pathExt = getenv('PATHEXT');
            \$suffixes = array_merge(\$pathExt ? explode(PATH_SEPARATOR, \$pathExt) : \$this->suffixes, \$suffixes);
        }
        foreach (\$suffixes as \$suffix) {
            foreach (\$dirs as \$dir) {
                if (@is_file(\$file = \$dir.\\DIRECTORY_SEPARATOR.\$name.\$suffix) && ('\\\\' === \\DIRECTORY_SEPARATOR || @is_executable(\$file))) {
                    return \$file;
                }
            }
        }

        return \$default;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/ExecutableFinder.php";
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
 * Generic executable finder.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ExecutableFinder
{
    private \$suffixes = ['.exe', '.bat', '.cmd', '.com'];

    /**
     * Replaces default suffixes of executable.
     */
    public function setSuffixes(array \$suffixes)
    {
        \$this->suffixes = \$suffixes;
    }

    /**
     * Adds new possible suffix to check for executable.
     *
     * @param string \$suffix
     */
    public function addSuffix(\$suffix)
    {
        \$this->suffixes[] = \$suffix;
    }

    /**
     * Finds an executable by name.
     *
     * @param string      \$name      The executable name (without the extension)
     * @param string|null \$default   The default to return if no executable is found
     * @param array       \$extraDirs Additional dirs to check into
     *
     * @return string|null The executable path or default value
     */
    public function find(\$name, \$default = null, array \$extraDirs = [])
    {
        if (ini_get('open_basedir')) {
            \$searchPath = array_merge(explode(PATH_SEPARATOR, ini_get('open_basedir')), \$extraDirs);
            \$dirs = [];
            foreach (\$searchPath as \$path) {
                // Silencing against https://bugs.php.net/69240
                if (@is_dir(\$path)) {
                    \$dirs[] = \$path;
                } else {
                    if (basename(\$path) == \$name && @is_executable(\$path)) {
                        return \$path;
                    }
                }
            }
        } else {
            \$dirs = array_merge(
                explode(PATH_SEPARATOR, getenv('PATH') ?: getenv('Path')),
                \$extraDirs
            );
        }

        \$suffixes = [''];
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$pathExt = getenv('PATHEXT');
            \$suffixes = array_merge(\$pathExt ? explode(PATH_SEPARATOR, \$pathExt) : \$this->suffixes, \$suffixes);
        }
        foreach (\$suffixes as \$suffix) {
            foreach (\$dirs as \$dir) {
                if (@is_file(\$file = \$dir.\\DIRECTORY_SEPARATOR.\$name.\$suffix) && ('\\\\' === \\DIRECTORY_SEPARATOR || @is_executable(\$file))) {
                    return \$file;
                }
            }
        }

        return \$default;
    }
}
", "vendor/symfony/process/ExecutableFinder.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/ExecutableFinder.php");
    }
}
