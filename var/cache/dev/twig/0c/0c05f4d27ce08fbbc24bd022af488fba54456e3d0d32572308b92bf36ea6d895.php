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

/* vendor/symfony/intl/Data/Util/LocaleScanner.php */
class __TwigTemplate_1fa3639af972f0610eb5e4df75731ace388af5c45e574188fe80a6f182cbe187 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/LocaleScanner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/LocaleScanner.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Util;

/**
 * Scans a directory with data files for locales.
 *
 * The name of each file with the extension \".txt\" is considered, if it \"looks\"
 * like a locale:
 *
 *  - the name must start with two letters;
 *  - the two letters may optionally be followed by an underscore and any
 *    sequence of other symbols.
 *
 * For example, \"de\" and \"de_DE\" are considered to be locales. \"root\" and \"meta\"
 * are not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class LocaleScanner
{
    /**
     * Returns all locales found in the given directory.
     *
     * @param string \$sourceDir The directory with ICU files
     *
     * @return array An array of locales. The result also contains locales that
     *               are in fact just aliases for other locales. Use
     *               {@link scanAliases()} to determine which of the locales
     *               are aliases
     */
    public function scanLocales(\$sourceDir)
    {
        \$locales = glob(\$sourceDir.'/*.txt', GLOB_NOSORT);

        // Remove file extension and sort
        array_walk(\$locales, function (&\$locale) { \$locale = basename(\$locale, '.txt'); });

        // Remove non-locales
        \$locales = array_filter(\$locales, function (\$locale) {
            return preg_match('/^[a-z]{2}(_.+)?\$/', \$locale);
        });

        sort(\$locales);

        return \$locales;
    }

    /**
     * Returns all locale aliases found in the given directory.
     *
     * @param string \$sourceDir The directory with ICU files
     *
     * @return array An array with the locale aliases as keys and the aliased
     *               locales as values
     */
    public function scanAliases(\$sourceDir)
    {
        \$locales = \$this->scanLocales(\$sourceDir);
        \$aliases = [];

        // Delete locales that are no aliases
        foreach (\$locales as \$locale) {
            \$content = file_get_contents(\$sourceDir.'/'.\$locale.'.txt');

            // Aliases contain the text \"%%ALIAS\" followed by the aliased locale
            if (preg_match('/\"%%ALIAS\"\\{\"([^\"]+)\"\\}/', \$content, \$matches)) {
                \$aliases[\$locale] = \$matches[1];
            }
        }

        return \$aliases;
    }

    /**
     * Returns all locale parents found in the given directory.
     */
    public function scanParents(string \$sourceDir): array
    {
        \$locales = \$this->scanLocales(\$sourceDir);
        \$fallbacks = [];

        foreach (\$locales as \$locale) {
            \$content = file_get_contents(\$sourceDir.'/'.\$locale.'.txt');

            // Aliases contain the text \"%%PARENT\" followed by the aliased locale
            if (preg_match('/%%Parent{\"([^\"]+)\"}/', \$content, \$matches)) {
                \$fallbacks[\$locale] = \$matches[1];
            }
        }

        return \$fallbacks;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Util/LocaleScanner.php";
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

namespace Symfony\\Component\\Intl\\Data\\Util;

/**
 * Scans a directory with data files for locales.
 *
 * The name of each file with the extension \".txt\" is considered, if it \"looks\"
 * like a locale:
 *
 *  - the name must start with two letters;
 *  - the two letters may optionally be followed by an underscore and any
 *    sequence of other symbols.
 *
 * For example, \"de\" and \"de_DE\" are considered to be locales. \"root\" and \"meta\"
 * are not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class LocaleScanner
{
    /**
     * Returns all locales found in the given directory.
     *
     * @param string \$sourceDir The directory with ICU files
     *
     * @return array An array of locales. The result also contains locales that
     *               are in fact just aliases for other locales. Use
     *               {@link scanAliases()} to determine which of the locales
     *               are aliases
     */
    public function scanLocales(\$sourceDir)
    {
        \$locales = glob(\$sourceDir.'/*.txt', GLOB_NOSORT);

        // Remove file extension and sort
        array_walk(\$locales, function (&\$locale) { \$locale = basename(\$locale, '.txt'); });

        // Remove non-locales
        \$locales = array_filter(\$locales, function (\$locale) {
            return preg_match('/^[a-z]{2}(_.+)?\$/', \$locale);
        });

        sort(\$locales);

        return \$locales;
    }

    /**
     * Returns all locale aliases found in the given directory.
     *
     * @param string \$sourceDir The directory with ICU files
     *
     * @return array An array with the locale aliases as keys and the aliased
     *               locales as values
     */
    public function scanAliases(\$sourceDir)
    {
        \$locales = \$this->scanLocales(\$sourceDir);
        \$aliases = [];

        // Delete locales that are no aliases
        foreach (\$locales as \$locale) {
            \$content = file_get_contents(\$sourceDir.'/'.\$locale.'.txt');

            // Aliases contain the text \"%%ALIAS\" followed by the aliased locale
            if (preg_match('/\"%%ALIAS\"\\{\"([^\"]+)\"\\}/', \$content, \$matches)) {
                \$aliases[\$locale] = \$matches[1];
            }
        }

        return \$aliases;
    }

    /**
     * Returns all locale parents found in the given directory.
     */
    public function scanParents(string \$sourceDir): array
    {
        \$locales = \$this->scanLocales(\$sourceDir);
        \$fallbacks = [];

        foreach (\$locales as \$locale) {
            \$content = file_get_contents(\$sourceDir.'/'.\$locale.'.txt');

            // Aliases contain the text \"%%PARENT\" followed by the aliased locale
            if (preg_match('/%%Parent{\"([^\"]+)\"}/', \$content, \$matches)) {
                \$fallbacks[\$locale] = \$matches[1];
            }
        }

        return \$fallbacks;
    }
}
", "vendor/symfony/intl/Data/Util/LocaleScanner.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Util/LocaleScanner.php");
    }
}
