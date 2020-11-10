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

/* vendor/symfony/intl/Intl.php */
class __TwigTemplate_c53e1d8a83f3eac32202b9129abebf4c7edab76b8def63d883499e13e0ebab04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Intl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Intl.php"));

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

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BufferedBundleReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\JsonBundleReader;
use Symfony\\Component\\Intl\\Data\\Provider\\LocaleDataProvider;
use Symfony\\Component\\Intl\\Data\\Provider\\ScriptDataProvider;
use Symfony\\Component\\Intl\\ResourceBundle\\CurrencyBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\CurrencyBundleInterface;
use Symfony\\Component\\Intl\\ResourceBundle\\LanguageBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\LanguageBundleInterface;
use Symfony\\Component\\Intl\\ResourceBundle\\LocaleBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\LocaleBundleInterface;
use Symfony\\Component\\Intl\\ResourceBundle\\RegionBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\RegionBundleInterface;

/**
 * Gives access to internationalization data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class Intl
{
    /**
     * The number of resource bundles to buffer. Loading the same resource
     * bundle for n locales takes up n spots in the buffer.
     */
    const BUFFER_SIZE = 10;

    /**
     * The directory name of the currency data.
     */
    const CURRENCY_DIR = 'currencies';

    /**
     * The directory name of the language data.
     */
    const LANGUAGE_DIR = 'languages';

    /**
     * The directory name of the script data.
     */
    const SCRIPT_DIR = 'scripts';

    /**
     * The directory name of the locale data.
     */
    const LOCALE_DIR = 'locales';

    /**
     * The directory name of the region data.
     */
    const REGION_DIR = 'regions';

    /**
     * The directory name of the zone data.
     */
    public const TIMEZONE_DIR = 'timezones';

    /**
     * @var ResourceBundle\\CurrencyBundleInterface
     */
    private static \$currencyBundle;

    /**
     * @var ResourceBundle\\LanguageBundleInterface
     */
    private static \$languageBundle;

    /**
     * @var ResourceBundle\\LocaleBundleInterface
     */
    private static \$localeBundle;

    /**
     * @var ResourceBundle\\RegionBundleInterface
     */
    private static \$regionBundle;

    /**
     * @var string|bool|null
     */
    private static \$icuVersion = false;

    /**
     * @var string
     */
    private static \$icuDataVersion = false;

    /**
     * @var BundleEntryReaderInterface
     */
    private static \$entryReader;

    /**
     * Returns whether the intl extension is installed.
     *
     * @return bool Returns true if the intl extension is installed, false otherwise
     */
    public static function isExtensionLoaded()
    {
        return class_exists('\\ResourceBundle');
    }

    /**
     * Returns the bundle containing currency information.
     *
     * @return CurrencyBundleInterface The currency resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Currencies} instead.
     */
    public static function getCurrencyBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" instead.', __METHOD__, Currencies::class), E_USER_DEPRECATED);

        if (null === self::\$currencyBundle) {
            self::\$currencyBundle = new CurrencyBundle(
                self::getDataDirectory().'/'.self::CURRENCY_DIR,
                self::getEntryReader(),
                self::\$localeBundle ?? self::\$localeBundle = new LocaleBundle(self::getDataDirectory().'/'.self::LOCALE_DIR, self::getEntryReader())
            );
        }

        return self::\$currencyBundle;
    }

    /**
     * Returns the bundle containing language information.
     *
     * @return LanguageBundleInterface The language resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Languages} or {@see Scripts} instead.
     */
    public static function getLanguageBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" or \"%s\" instead.', __METHOD__, Languages::class, Scripts::class), E_USER_DEPRECATED);

        if (null === self::\$languageBundle) {
            self::\$languageBundle = new LanguageBundle(
                self::getDataDirectory().'/'.self::LANGUAGE_DIR,
                self::getEntryReader(),
                self::\$localeBundle ?? self::\$localeBundle = new LocaleBundle(self::getDataDirectory().'/'.self::LOCALE_DIR, self::getEntryReader()),
                new ScriptDataProvider(
                    self::getDataDirectory().'/'.self::SCRIPT_DIR,
                    self::getEntryReader()
                )
            );
        }

        return self::\$languageBundle;
    }

    /**
     * Returns the bundle containing locale information.
     *
     * @return LocaleBundleInterface The locale resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Locales} instead.
     */
    public static function getLocaleBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" instead.', __METHOD__, Locales::class), E_USER_DEPRECATED);

        if (null === self::\$localeBundle) {
            self::\$localeBundle = new LocaleBundle(
                self::getDataDirectory().'/'.self::LOCALE_DIR,
                self::getEntryReader()
            );
        }

        return self::\$localeBundle;
    }

    /**
     * Returns the bundle containing region information.
     *
     * @return RegionBundleInterface The region resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Countries} instead.
     */
    public static function getRegionBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" instead.', __METHOD__, Countries::class), E_USER_DEPRECATED);

        if (null === self::\$regionBundle) {
            self::\$regionBundle = new RegionBundle(
                self::getDataDirectory().'/'.self::REGION_DIR,
                self::getEntryReader(),
                self::\$localeBundle ?? self::\$localeBundle = new LocaleBundle(self::getDataDirectory().'/'.self::LOCALE_DIR, self::getEntryReader())
            );
        }

        return self::\$regionBundle;
    }

    /**
     * Returns the version of the installed ICU library.
     *
     * @return string|null The ICU version or NULL if it could not be determined
     */
    public static function getIcuVersion()
    {
        if (false === self::\$icuVersion) {
            if (!self::isExtensionLoaded()) {
                self::\$icuVersion = self::getIcuStubVersion();
            } elseif (\\defined('INTL_ICU_VERSION')) {
                self::\$icuVersion = INTL_ICU_VERSION;
            } else {
                try {
                    \$reflector = new \\ReflectionExtension('intl');
                    ob_start();
                    \$reflector->info();
                    \$output = strip_tags(ob_get_clean());
                    preg_match('/^ICU version (?:=>)?(.*)\$/m', \$output, \$matches);

                    self::\$icuVersion = trim(\$matches[1]);
                } catch (\\ReflectionException \$e) {
                    self::\$icuVersion = null;
                }
            }
        }

        return self::\$icuVersion;
    }

    /**
     * Returns the version of the installed ICU data.
     *
     * @return string The version of the installed ICU data
     */
    public static function getIcuDataVersion()
    {
        if (false === self::\$icuDataVersion) {
            self::\$icuDataVersion = trim(file_get_contents(self::getDataDirectory().'/version.txt'));
        }

        return self::\$icuDataVersion;
    }

    /**
     * Returns the ICU version that the stub classes mimic.
     *
     * @return string The ICU version of the stub classes
     */
    public static function getIcuStubVersion()
    {
        return '65.1';
    }

    /**
     * Returns the absolute path to the data directory.
     *
     * @return string The absolute path to the data directory
     */
    public static function getDataDirectory()
    {
        return __DIR__.'/Resources/data';
    }

    /**
     * Returns the cached bundle entry reader.
     *
     * @return BundleEntryReaderInterface The bundle entry reader
     */
    private static function getEntryReader()
    {
        if (null === self::\$entryReader) {
            self::\$entryReader = new BundleEntryReader(new BufferedBundleReader(
                new JsonBundleReader(),
                self::BUFFER_SIZE
            ));
            \$localeDataProvider = new LocaleDataProvider(
                self::getDataDirectory().'/'.self::LOCALE_DIR,
                self::\$entryReader
            );
            self::\$entryReader->setLocaleAliases(\$localeDataProvider->getAliases());
        }

        return self::\$entryReader;
    }

    /**
     * This class must not be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Intl.php";
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

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BufferedBundleReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\JsonBundleReader;
use Symfony\\Component\\Intl\\Data\\Provider\\LocaleDataProvider;
use Symfony\\Component\\Intl\\Data\\Provider\\ScriptDataProvider;
use Symfony\\Component\\Intl\\ResourceBundle\\CurrencyBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\CurrencyBundleInterface;
use Symfony\\Component\\Intl\\ResourceBundle\\LanguageBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\LanguageBundleInterface;
use Symfony\\Component\\Intl\\ResourceBundle\\LocaleBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\LocaleBundleInterface;
use Symfony\\Component\\Intl\\ResourceBundle\\RegionBundle;
use Symfony\\Component\\Intl\\ResourceBundle\\RegionBundleInterface;

/**
 * Gives access to internationalization data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class Intl
{
    /**
     * The number of resource bundles to buffer. Loading the same resource
     * bundle for n locales takes up n spots in the buffer.
     */
    const BUFFER_SIZE = 10;

    /**
     * The directory name of the currency data.
     */
    const CURRENCY_DIR = 'currencies';

    /**
     * The directory name of the language data.
     */
    const LANGUAGE_DIR = 'languages';

    /**
     * The directory name of the script data.
     */
    const SCRIPT_DIR = 'scripts';

    /**
     * The directory name of the locale data.
     */
    const LOCALE_DIR = 'locales';

    /**
     * The directory name of the region data.
     */
    const REGION_DIR = 'regions';

    /**
     * The directory name of the zone data.
     */
    public const TIMEZONE_DIR = 'timezones';

    /**
     * @var ResourceBundle\\CurrencyBundleInterface
     */
    private static \$currencyBundle;

    /**
     * @var ResourceBundle\\LanguageBundleInterface
     */
    private static \$languageBundle;

    /**
     * @var ResourceBundle\\LocaleBundleInterface
     */
    private static \$localeBundle;

    /**
     * @var ResourceBundle\\RegionBundleInterface
     */
    private static \$regionBundle;

    /**
     * @var string|bool|null
     */
    private static \$icuVersion = false;

    /**
     * @var string
     */
    private static \$icuDataVersion = false;

    /**
     * @var BundleEntryReaderInterface
     */
    private static \$entryReader;

    /**
     * Returns whether the intl extension is installed.
     *
     * @return bool Returns true if the intl extension is installed, false otherwise
     */
    public static function isExtensionLoaded()
    {
        return class_exists('\\ResourceBundle');
    }

    /**
     * Returns the bundle containing currency information.
     *
     * @return CurrencyBundleInterface The currency resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Currencies} instead.
     */
    public static function getCurrencyBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" instead.', __METHOD__, Currencies::class), E_USER_DEPRECATED);

        if (null === self::\$currencyBundle) {
            self::\$currencyBundle = new CurrencyBundle(
                self::getDataDirectory().'/'.self::CURRENCY_DIR,
                self::getEntryReader(),
                self::\$localeBundle ?? self::\$localeBundle = new LocaleBundle(self::getDataDirectory().'/'.self::LOCALE_DIR, self::getEntryReader())
            );
        }

        return self::\$currencyBundle;
    }

    /**
     * Returns the bundle containing language information.
     *
     * @return LanguageBundleInterface The language resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Languages} or {@see Scripts} instead.
     */
    public static function getLanguageBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" or \"%s\" instead.', __METHOD__, Languages::class, Scripts::class), E_USER_DEPRECATED);

        if (null === self::\$languageBundle) {
            self::\$languageBundle = new LanguageBundle(
                self::getDataDirectory().'/'.self::LANGUAGE_DIR,
                self::getEntryReader(),
                self::\$localeBundle ?? self::\$localeBundle = new LocaleBundle(self::getDataDirectory().'/'.self::LOCALE_DIR, self::getEntryReader()),
                new ScriptDataProvider(
                    self::getDataDirectory().'/'.self::SCRIPT_DIR,
                    self::getEntryReader()
                )
            );
        }

        return self::\$languageBundle;
    }

    /**
     * Returns the bundle containing locale information.
     *
     * @return LocaleBundleInterface The locale resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Locales} instead.
     */
    public static function getLocaleBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" instead.', __METHOD__, Locales::class), E_USER_DEPRECATED);

        if (null === self::\$localeBundle) {
            self::\$localeBundle = new LocaleBundle(
                self::getDataDirectory().'/'.self::LOCALE_DIR,
                self::getEntryReader()
            );
        }

        return self::\$localeBundle;
    }

    /**
     * Returns the bundle containing region information.
     *
     * @return RegionBundleInterface The region resource bundle
     *
     * @deprecated since Symfony 4.3, to be removed in 5.0. Use {@see Countries} instead.
     */
    public static function getRegionBundle()
    {
        @trigger_error(sprintf('The method \"%s()\" is deprecated since Symfony 4.3, use \"%s\" instead.', __METHOD__, Countries::class), E_USER_DEPRECATED);

        if (null === self::\$regionBundle) {
            self::\$regionBundle = new RegionBundle(
                self::getDataDirectory().'/'.self::REGION_DIR,
                self::getEntryReader(),
                self::\$localeBundle ?? self::\$localeBundle = new LocaleBundle(self::getDataDirectory().'/'.self::LOCALE_DIR, self::getEntryReader())
            );
        }

        return self::\$regionBundle;
    }

    /**
     * Returns the version of the installed ICU library.
     *
     * @return string|null The ICU version or NULL if it could not be determined
     */
    public static function getIcuVersion()
    {
        if (false === self::\$icuVersion) {
            if (!self::isExtensionLoaded()) {
                self::\$icuVersion = self::getIcuStubVersion();
            } elseif (\\defined('INTL_ICU_VERSION')) {
                self::\$icuVersion = INTL_ICU_VERSION;
            } else {
                try {
                    \$reflector = new \\ReflectionExtension('intl');
                    ob_start();
                    \$reflector->info();
                    \$output = strip_tags(ob_get_clean());
                    preg_match('/^ICU version (?:=>)?(.*)\$/m', \$output, \$matches);

                    self::\$icuVersion = trim(\$matches[1]);
                } catch (\\ReflectionException \$e) {
                    self::\$icuVersion = null;
                }
            }
        }

        return self::\$icuVersion;
    }

    /**
     * Returns the version of the installed ICU data.
     *
     * @return string The version of the installed ICU data
     */
    public static function getIcuDataVersion()
    {
        if (false === self::\$icuDataVersion) {
            self::\$icuDataVersion = trim(file_get_contents(self::getDataDirectory().'/version.txt'));
        }

        return self::\$icuDataVersion;
    }

    /**
     * Returns the ICU version that the stub classes mimic.
     *
     * @return string The ICU version of the stub classes
     */
    public static function getIcuStubVersion()
    {
        return '65.1';
    }

    /**
     * Returns the absolute path to the data directory.
     *
     * @return string The absolute path to the data directory
     */
    public static function getDataDirectory()
    {
        return __DIR__.'/Resources/data';
    }

    /**
     * Returns the cached bundle entry reader.
     *
     * @return BundleEntryReaderInterface The bundle entry reader
     */
    private static function getEntryReader()
    {
        if (null === self::\$entryReader) {
            self::\$entryReader = new BundleEntryReader(new BufferedBundleReader(
                new JsonBundleReader(),
                self::BUFFER_SIZE
            ));
            \$localeDataProvider = new LocaleDataProvider(
                self::getDataDirectory().'/'.self::LOCALE_DIR,
                self::\$entryReader
            );
            self::\$entryReader->setLocaleAliases(\$localeDataProvider->getAliases());
        }

        return self::\$entryReader;
    }

    /**
     * This class must not be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/intl/Intl.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Intl.php");
    }
}
