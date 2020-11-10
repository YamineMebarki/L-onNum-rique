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

/* vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReader.php */
class __TwigTemplate_b3b00287c3a92d9d285254cb16209beff9374c670c04939ddfa9772b828fadef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReader.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Reader;

use Symfony\\Component\\Intl\\Data\\Util\\RecursiveArrayAccess;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Exception\\OutOfBoundsException;
use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;
use Symfony\\Component\\Intl\\Locale;

/**
 * Default implementation of {@link BundleEntryReaderInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see BundleEntryReaderInterface
 *
 * @internal
 */
class BundleEntryReader implements BundleEntryReaderInterface
{
    private \$reader;

    /**
     * A mapping of locale aliases to locales.
     */
    private \$localeAliases = [];

    /**
     * Creates an entry reader based on the given resource bundle reader.
     */
    public function __construct(BundleReaderInterface \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * Stores a mapping of locale aliases to locales.
     *
     * This mapping is used when reading entries and merging them with their
     * fallback locales. If an entry is read for a locale alias (e.g. \"mo\")
     * that points to a locale with a fallback locale (\"ro_MD\"), the reader
     * can continue at the correct fallback locale (\"ro\").
     *
     * @param array \$localeAliases A mapping of locale aliases to locales
     */
    public function setLocaleAliases(\$localeAliases)
    {
        \$this->localeAliases = \$localeAliases;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$path, \$locale)
    {
        return \$this->reader->read(\$path, \$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function readEntry(\$path, \$locale, array \$indices, \$fallback = true)
    {
        \$entry = null;
        \$isMultiValued = false;
        \$readSucceeded = false;
        \$exception = null;
        \$currentLocale = \$locale;
        \$testedLocales = [];

        while (null !== \$currentLocale) {
            // Resolve any aliases to their target locales
            if (isset(\$this->localeAliases[\$currentLocale])) {
                \$currentLocale = \$this->localeAliases[\$currentLocale];
            }

            try {
                \$data = \$this->reader->read(\$path, \$currentLocale);
                \$currentEntry = RecursiveArrayAccess::get(\$data, \$indices);
                \$readSucceeded = true;

                \$isCurrentTraversable = \$currentEntry instanceof \\Traversable;
                \$isCurrentMultiValued = \$isCurrentTraversable || \\is_array(\$currentEntry);

                // Return immediately if fallback is disabled or we are dealing
                // with a scalar non-null entry
                if (!\$fallback || (!\$isCurrentMultiValued && null !== \$currentEntry)) {
                    return \$currentEntry;
                }

                // =========================================================
                // Fallback is enabled, entry is either multi-valued or NULL
                // =========================================================

                // If entry is multi-valued, convert to array
                if (\$isCurrentTraversable) {
                    \$currentEntry = iterator_to_array(\$currentEntry);
                }

                // If previously read entry was multi-valued too, merge them
                if (\$isCurrentMultiValued && \$isMultiValued) {
                    \$currentEntry = array_merge(\$currentEntry, \$entry);
                }

                // Keep the previous entry if the current entry is NULL
                if (null !== \$currentEntry) {
                    \$entry = \$currentEntry;
                }

                // If this or the previous entry was multi-valued, we are dealing
                // with a merged, multi-valued entry now
                \$isMultiValued = \$isMultiValued || \$isCurrentMultiValued;
            } catch (ResourceBundleNotFoundException \$e) {
                // Continue if there is a fallback locale for the current
                // locale
                \$exception = \$e;
            } catch (OutOfBoundsException \$e) {
                // Remember exception and rethrow if we cannot find anything in
                // the fallback locales either
                \$exception = \$e;
            }

            // Remember which locales we tried
            \$testedLocales[] = \$currentLocale;

            // Check whether fallback is allowed
            if (!\$fallback) {
                break;
            }

            // Then determine fallback locale
            \$currentLocale = Locale::getFallback(\$currentLocale);
        }

        // Multi-valued entry was merged
        if (\$isMultiValued) {
            return \$entry;
        }

        // Entry is still NULL, but no read error occurred
        if (\$readSucceeded) {
            return \$entry;
        }

        // Entry is still NULL, read error occurred. Throw an exception
        // containing the detailed path and locale
        \$errorMessage = sprintf(
            'Couldn\\'t read the indices [%s] for the locale \"%s\" in \"%s\".',
            implode('][', \$indices),
            \$locale,
            \$path
        );

        // Append fallback locales, if any
        if (\\count(\$testedLocales) > 1) {
            // Remove original locale
            array_shift(\$testedLocales);

            \$errorMessage .= sprintf(
                ' The indices also couldn\\'t be found for the fallback locale(s) \"%s\".',
                implode('\", \"', \$testedLocales)
            );
        }

        throw new MissingResourceException(\$errorMessage, 0, \$exception);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReader.php";
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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Reader;

use Symfony\\Component\\Intl\\Data\\Util\\RecursiveArrayAccess;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Exception\\OutOfBoundsException;
use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;
use Symfony\\Component\\Intl\\Locale;

/**
 * Default implementation of {@link BundleEntryReaderInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see BundleEntryReaderInterface
 *
 * @internal
 */
class BundleEntryReader implements BundleEntryReaderInterface
{
    private \$reader;

    /**
     * A mapping of locale aliases to locales.
     */
    private \$localeAliases = [];

    /**
     * Creates an entry reader based on the given resource bundle reader.
     */
    public function __construct(BundleReaderInterface \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * Stores a mapping of locale aliases to locales.
     *
     * This mapping is used when reading entries and merging them with their
     * fallback locales. If an entry is read for a locale alias (e.g. \"mo\")
     * that points to a locale with a fallback locale (\"ro_MD\"), the reader
     * can continue at the correct fallback locale (\"ro\").
     *
     * @param array \$localeAliases A mapping of locale aliases to locales
     */
    public function setLocaleAliases(\$localeAliases)
    {
        \$this->localeAliases = \$localeAliases;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$path, \$locale)
    {
        return \$this->reader->read(\$path, \$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function readEntry(\$path, \$locale, array \$indices, \$fallback = true)
    {
        \$entry = null;
        \$isMultiValued = false;
        \$readSucceeded = false;
        \$exception = null;
        \$currentLocale = \$locale;
        \$testedLocales = [];

        while (null !== \$currentLocale) {
            // Resolve any aliases to their target locales
            if (isset(\$this->localeAliases[\$currentLocale])) {
                \$currentLocale = \$this->localeAliases[\$currentLocale];
            }

            try {
                \$data = \$this->reader->read(\$path, \$currentLocale);
                \$currentEntry = RecursiveArrayAccess::get(\$data, \$indices);
                \$readSucceeded = true;

                \$isCurrentTraversable = \$currentEntry instanceof \\Traversable;
                \$isCurrentMultiValued = \$isCurrentTraversable || \\is_array(\$currentEntry);

                // Return immediately if fallback is disabled or we are dealing
                // with a scalar non-null entry
                if (!\$fallback || (!\$isCurrentMultiValued && null !== \$currentEntry)) {
                    return \$currentEntry;
                }

                // =========================================================
                // Fallback is enabled, entry is either multi-valued or NULL
                // =========================================================

                // If entry is multi-valued, convert to array
                if (\$isCurrentTraversable) {
                    \$currentEntry = iterator_to_array(\$currentEntry);
                }

                // If previously read entry was multi-valued too, merge them
                if (\$isCurrentMultiValued && \$isMultiValued) {
                    \$currentEntry = array_merge(\$currentEntry, \$entry);
                }

                // Keep the previous entry if the current entry is NULL
                if (null !== \$currentEntry) {
                    \$entry = \$currentEntry;
                }

                // If this or the previous entry was multi-valued, we are dealing
                // with a merged, multi-valued entry now
                \$isMultiValued = \$isMultiValued || \$isCurrentMultiValued;
            } catch (ResourceBundleNotFoundException \$e) {
                // Continue if there is a fallback locale for the current
                // locale
                \$exception = \$e;
            } catch (OutOfBoundsException \$e) {
                // Remember exception and rethrow if we cannot find anything in
                // the fallback locales either
                \$exception = \$e;
            }

            // Remember which locales we tried
            \$testedLocales[] = \$currentLocale;

            // Check whether fallback is allowed
            if (!\$fallback) {
                break;
            }

            // Then determine fallback locale
            \$currentLocale = Locale::getFallback(\$currentLocale);
        }

        // Multi-valued entry was merged
        if (\$isMultiValued) {
            return \$entry;
        }

        // Entry is still NULL, but no read error occurred
        if (\$readSucceeded) {
            return \$entry;
        }

        // Entry is still NULL, read error occurred. Throw an exception
        // containing the detailed path and locale
        \$errorMessage = sprintf(
            'Couldn\\'t read the indices [%s] for the locale \"%s\" in \"%s\".',
            implode('][', \$indices),
            \$locale,
            \$path
        );

        // Append fallback locales, if any
        if (\\count(\$testedLocales) > 1) {
            // Remove original locale
            array_shift(\$testedLocales);

            \$errorMessage .= sprintf(
                ' The indices also couldn\\'t be found for the fallback locale(s) \"%s\".',
                implode('\", \"', \$testedLocales)
            );
        }

        throw new MissingResourceException(\$errorMessage, 0, \$exception);
    }
}
", "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReader.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReader.php");
    }
}
