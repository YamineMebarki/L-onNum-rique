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

/* vendor/symfony/intl/Locales.php */
class __TwigTemplate_91801eb60a4fb05b216aacdb9460102ceae5d84edda7ebb561ce7744e011fe5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Locales.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Locales.php"));

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

namespace Symfony\\Component\\Intl;

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Gives access to locale-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Locales extends ResourceBundle
{
    /**
     * @return string[]
     */
    public static function getLocales(): array
    {
        return self::readEntry(['Locales'], 'meta');
    }

    /**
     * @return string[]
     */
    public static function getAliases(): array
    {
        return self::readEntry(['Aliases'], 'meta');
    }

    public static function exists(string \$locale): bool
    {
        try {
            self::readEntry(['Names', \$locale]);

            return true;
        } catch (MissingResourceException \$e) {
            return \\in_array(\$locale, self::getAliases(), true);
        }
    }

    /**
     * @throws MissingResourceException if the locale does not exists
     */
    public static function getName(string \$locale, string \$displayLocale = null): string
    {
        try {
            return self::readEntry(['Names', \$locale], \$displayLocale);
        } catch (MissingResourceException \$e) {
            if (false === \$aliased = array_search(\$locale, self::getAliases(), true)) {
                throw \$e;
            }

            return self::readEntry(['Names', \$aliased], \$displayLocale);
        }
    }

    /**
     * @return string[]
     */
    public static function getNames(\$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::LOCALE_DIR;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Locales.php";
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

namespace Symfony\\Component\\Intl;

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Gives access to locale-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Locales extends ResourceBundle
{
    /**
     * @return string[]
     */
    public static function getLocales(): array
    {
        return self::readEntry(['Locales'], 'meta');
    }

    /**
     * @return string[]
     */
    public static function getAliases(): array
    {
        return self::readEntry(['Aliases'], 'meta');
    }

    public static function exists(string \$locale): bool
    {
        try {
            self::readEntry(['Names', \$locale]);

            return true;
        } catch (MissingResourceException \$e) {
            return \\in_array(\$locale, self::getAliases(), true);
        }
    }

    /**
     * @throws MissingResourceException if the locale does not exists
     */
    public static function getName(string \$locale, string \$displayLocale = null): string
    {
        try {
            return self::readEntry(['Names', \$locale], \$displayLocale);
        } catch (MissingResourceException \$e) {
            if (false === \$aliased = array_search(\$locale, self::getAliases(), true)) {
                throw \$e;
            }

            return self::readEntry(['Names', \$aliased], \$displayLocale);
        }
    }

    /**
     * @return string[]
     */
    public static function getNames(\$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::LOCALE_DIR;
    }
}
", "vendor/symfony/intl/Locales.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Locales.php");
    }
}
