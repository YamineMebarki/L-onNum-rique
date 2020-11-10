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

/* vendor/symfony/intl/Data/Generator/RegionDataGenerator.php */
class __TwigTemplate_b2553f9668404fd0440640bf2f4cf68bfd5c31d15bda1f41dce5afe90fc59610 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/RegionDataGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/RegionDataGenerator.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Generator;

use Symfony\\Component\\Intl\\Data\\Bundle\\Compiler\\BundleCompilerInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Util\\ArrayAccessibleResourceBundle;
use Symfony\\Component\\Intl\\Data\\Util\\LocaleScanner;

/**
 * The rule for compiling the region bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see http://source.icu-project.org/repos/icu/icu4j/trunk/main/classes/core/src/com/ibm/icu/util/Region.java
 *
 * @internal
 */
class RegionDataGenerator extends AbstractDataGenerator
{
    private static \$blacklist = [
        // Exceptional reservations
        'AC' => true, // Ascension Island
        'CP' => true, // Clipperton Island
        'DG' => true, // Diego Garcia
        'EA' => true, // Ceuta & Melilla
        'EU' => true, // European Union
        'EZ' => true, // Eurozone
        'IC' => true, // Canary Islands
        'TA' => true, // Tristan da Cunha
        'UN' => true, // United Nations
        // User-assigned
        'QO' => true, // Outlying Oceania
        'XA' => true, // Pseudo-Accents
        'XB' => true, // Pseudo-Bidi
        'XK' => true, // Kosovo
        // Misc
        'ZZ' => true, // Unknown Region
    ];

    /**
     * Collects all available language codes.
     *
     * @var string[]
     */
    private \$regionCodes = [];

    public static function isValidCountryCode(\$region)
    {
        if (isset(self::\$blacklist[\$region])) {
            return false;
        }

        // WORLD/CONTINENT/SUBCONTINENT/GROUPING
        if (ctype_digit(\$region) || \\is_int(\$region)) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function scanLocales(LocaleScanner \$scanner, \$sourceDir)
    {
        return \$scanner->scanLocales(\$sourceDir.'/region');
    }

    /**
     * {@inheritdoc}
     */
    protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir)
    {
        \$compiler->compile(\$sourceDir.'/region', \$tempDir);
    }

    /**
     * {@inheritdoc}
     */
    protected function preGenerate()
    {
        \$this->regionCodes = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale)
    {
        \$localeBundle = \$reader->read(\$tempDir, \$displayLocale);

        // isset() on \\ResourceBundle returns true even if the value is null
        if (isset(\$localeBundle['Countries']) && null !== \$localeBundle['Countries']) {
            \$data = [
                'Version' => \$localeBundle['Version'],
                'Names' => \$this->generateRegionNames(\$localeBundle),
            ];

            \$this->regionCodes = array_merge(\$this->regionCodes, array_keys(\$data['Names']));

            return \$data;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForMeta(BundleEntryReaderInterface \$reader, \$tempDir)
    {
        \$rootBundle = \$reader->read(\$tempDir, 'root');

        \$this->regionCodes = array_unique(\$this->regionCodes);

        sort(\$this->regionCodes);

        return [
            'Version' => \$rootBundle['Version'],
            'Regions' => \$this->regionCodes,
        ];
    }

    /**
     * @return array
     */
    protected function generateRegionNames(ArrayAccessibleResourceBundle \$localeBundle)
    {
        \$unfilteredRegionNames = iterator_to_array(\$localeBundle['Countries']);
        \$regionNames = [];

        foreach (\$unfilteredRegionNames as \$region => \$regionName) {
            if (!self::isValidCountryCode(\$region)) {
                continue;
            }

            \$regionNames[\$region] = \$regionName;
        }

        return \$regionNames;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Generator/RegionDataGenerator.php";
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

namespace Symfony\\Component\\Intl\\Data\\Generator;

use Symfony\\Component\\Intl\\Data\\Bundle\\Compiler\\BundleCompilerInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Util\\ArrayAccessibleResourceBundle;
use Symfony\\Component\\Intl\\Data\\Util\\LocaleScanner;

/**
 * The rule for compiling the region bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see http://source.icu-project.org/repos/icu/icu4j/trunk/main/classes/core/src/com/ibm/icu/util/Region.java
 *
 * @internal
 */
class RegionDataGenerator extends AbstractDataGenerator
{
    private static \$blacklist = [
        // Exceptional reservations
        'AC' => true, // Ascension Island
        'CP' => true, // Clipperton Island
        'DG' => true, // Diego Garcia
        'EA' => true, // Ceuta & Melilla
        'EU' => true, // European Union
        'EZ' => true, // Eurozone
        'IC' => true, // Canary Islands
        'TA' => true, // Tristan da Cunha
        'UN' => true, // United Nations
        // User-assigned
        'QO' => true, // Outlying Oceania
        'XA' => true, // Pseudo-Accents
        'XB' => true, // Pseudo-Bidi
        'XK' => true, // Kosovo
        // Misc
        'ZZ' => true, // Unknown Region
    ];

    /**
     * Collects all available language codes.
     *
     * @var string[]
     */
    private \$regionCodes = [];

    public static function isValidCountryCode(\$region)
    {
        if (isset(self::\$blacklist[\$region])) {
            return false;
        }

        // WORLD/CONTINENT/SUBCONTINENT/GROUPING
        if (ctype_digit(\$region) || \\is_int(\$region)) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function scanLocales(LocaleScanner \$scanner, \$sourceDir)
    {
        return \$scanner->scanLocales(\$sourceDir.'/region');
    }

    /**
     * {@inheritdoc}
     */
    protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir)
    {
        \$compiler->compile(\$sourceDir.'/region', \$tempDir);
    }

    /**
     * {@inheritdoc}
     */
    protected function preGenerate()
    {
        \$this->regionCodes = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale)
    {
        \$localeBundle = \$reader->read(\$tempDir, \$displayLocale);

        // isset() on \\ResourceBundle returns true even if the value is null
        if (isset(\$localeBundle['Countries']) && null !== \$localeBundle['Countries']) {
            \$data = [
                'Version' => \$localeBundle['Version'],
                'Names' => \$this->generateRegionNames(\$localeBundle),
            ];

            \$this->regionCodes = array_merge(\$this->regionCodes, array_keys(\$data['Names']));

            return \$data;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForMeta(BundleEntryReaderInterface \$reader, \$tempDir)
    {
        \$rootBundle = \$reader->read(\$tempDir, 'root');

        \$this->regionCodes = array_unique(\$this->regionCodes);

        sort(\$this->regionCodes);

        return [
            'Version' => \$rootBundle['Version'],
            'Regions' => \$this->regionCodes,
        ];
    }

    /**
     * @return array
     */
    protected function generateRegionNames(ArrayAccessibleResourceBundle \$localeBundle)
    {
        \$unfilteredRegionNames = iterator_to_array(\$localeBundle['Countries']);
        \$regionNames = [];

        foreach (\$unfilteredRegionNames as \$region => \$regionName) {
            if (!self::isValidCountryCode(\$region)) {
                continue;
            }

            \$regionNames[\$region] = \$regionName;
        }

        return \$regionNames;
    }
}
", "vendor/symfony/intl/Data/Generator/RegionDataGenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Generator/RegionDataGenerator.php");
    }
}
