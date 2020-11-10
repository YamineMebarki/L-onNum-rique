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

/* vendor/symfony/intl/Data/Provider/CurrencyDataProvider.php */
class __TwigTemplate_f494d8fbfcb784a20a12d384809d54e1e1f278c66fdd796ed679092686886974 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Provider/CurrencyDataProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Provider/CurrencyDataProvider.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Provider;

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Data provider for currency-related data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class CurrencyDataProvider
{
    const INDEX_SYMBOL = 0;
    const INDEX_NAME = 1;
    const INDEX_FRACTION_DIGITS = 0;
    const INDEX_ROUNDING_INCREMENT = 1;

    private \$path;
    private \$reader;

    /**
     * Creates a data provider that reads currency-related data from a
     * resource bundle.
     *
     * @param string                     \$path   The path to the resource bundle
     * @param BundleEntryReaderInterface \$reader The reader for reading the resource bundle
     */
    public function __construct(string \$path, BundleEntryReaderInterface \$reader)
    {
        \$this->path = \$path;
        \$this->reader = \$reader;
    }

    public function getCurrencies()
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['Currencies']);
    }

    public function getSymbol(\$currency, \$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        return \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names', \$currency, static::INDEX_SYMBOL]);
    }

    public function getName(\$currency, \$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        return \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names', \$currency, static::INDEX_NAME]);
    }

    public function getNames(\$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        // ====================================================================
        // For reference: It is NOT possible to return names indexed by
        // numeric code here, because some numeric codes map to multiple
        // 3-letter codes (e.g. 32 => \"ARA\", \"ARP\", \"ARS\")
        // ====================================================================

        \$names = \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names']);

        if (\$names instanceof \\Traversable) {
            \$names = iterator_to_array(\$names);
        }

        \$index = static::INDEX_NAME;

        array_walk(\$names, function (&\$value) use (\$index) {
            \$value = \$value[\$index];
        });

        // Sorting by value cannot be done during bundle generation, because
        // binary bundles are always sorted by keys
        \$collator = new \\Collator(\$displayLocale);
        \$collator->asort(\$names);

        return \$names;
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::getFractionDigits()}.
     */
    public function getFractionDigits(\$currency)
    {
        try {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', \$currency, static::INDEX_FRACTION_DIGITS]);
        } catch (MissingResourceException \$e) {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', 'DEFAULT', static::INDEX_FRACTION_DIGITS]);
        }
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::getRoundingIncrement()}.
     */
    public function getRoundingIncrement(\$currency)
    {
        try {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', \$currency, static::INDEX_ROUNDING_INCREMENT]);
        } catch (MissingResourceException \$e) {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', 'DEFAULT', static::INDEX_ROUNDING_INCREMENT]);
        }
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::getNumericCode()}.
     */
    public function getNumericCode(\$currency)
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['Alpha3ToNumeric', \$currency]);
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::forNumericCode()}.
     */
    public function forNumericCode(\$numericCode)
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['NumericToAlpha3', (string) \$numericCode]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Provider/CurrencyDataProvider.php";
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

namespace Symfony\\Component\\Intl\\Data\\Provider;

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Data provider for currency-related data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class CurrencyDataProvider
{
    const INDEX_SYMBOL = 0;
    const INDEX_NAME = 1;
    const INDEX_FRACTION_DIGITS = 0;
    const INDEX_ROUNDING_INCREMENT = 1;

    private \$path;
    private \$reader;

    /**
     * Creates a data provider that reads currency-related data from a
     * resource bundle.
     *
     * @param string                     \$path   The path to the resource bundle
     * @param BundleEntryReaderInterface \$reader The reader for reading the resource bundle
     */
    public function __construct(string \$path, BundleEntryReaderInterface \$reader)
    {
        \$this->path = \$path;
        \$this->reader = \$reader;
    }

    public function getCurrencies()
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['Currencies']);
    }

    public function getSymbol(\$currency, \$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        return \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names', \$currency, static::INDEX_SYMBOL]);
    }

    public function getName(\$currency, \$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        return \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names', \$currency, static::INDEX_NAME]);
    }

    public function getNames(\$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        // ====================================================================
        // For reference: It is NOT possible to return names indexed by
        // numeric code here, because some numeric codes map to multiple
        // 3-letter codes (e.g. 32 => \"ARA\", \"ARP\", \"ARS\")
        // ====================================================================

        \$names = \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names']);

        if (\$names instanceof \\Traversable) {
            \$names = iterator_to_array(\$names);
        }

        \$index = static::INDEX_NAME;

        array_walk(\$names, function (&\$value) use (\$index) {
            \$value = \$value[\$index];
        });

        // Sorting by value cannot be done during bundle generation, because
        // binary bundles are always sorted by keys
        \$collator = new \\Collator(\$displayLocale);
        \$collator->asort(\$names);

        return \$names;
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::getFractionDigits()}.
     */
    public function getFractionDigits(\$currency)
    {
        try {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', \$currency, static::INDEX_FRACTION_DIGITS]);
        } catch (MissingResourceException \$e) {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', 'DEFAULT', static::INDEX_FRACTION_DIGITS]);
        }
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::getRoundingIncrement()}.
     */
    public function getRoundingIncrement(\$currency)
    {
        try {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', \$currency, static::INDEX_ROUNDING_INCREMENT]);
        } catch (MissingResourceException \$e) {
            return \$this->reader->readEntry(\$this->path, 'meta', ['Meta', 'DEFAULT', static::INDEX_ROUNDING_INCREMENT]);
        }
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::getNumericCode()}.
     */
    public function getNumericCode(\$currency)
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['Alpha3ToNumeric', \$currency]);
    }

    /**
     * Data provider for {@link \\Symfony\\Component\\Intl\\Currency::forNumericCode()}.
     */
    public function forNumericCode(\$numericCode)
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['NumericToAlpha3', (string) \$numericCode]);
    }
}
", "vendor/symfony/intl/Data/Provider/CurrencyDataProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Provider/CurrencyDataProvider.php");
    }
}
