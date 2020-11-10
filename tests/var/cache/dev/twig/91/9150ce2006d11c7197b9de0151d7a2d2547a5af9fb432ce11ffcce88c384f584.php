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

/* vendor/symfony/intl/Data/Generator/LanguageDataGenerator.php */
class __TwigTemplate_b562d8c0a3ef22c23eb7c61cb3a0c0169d8f0266f8cfa0223836c66905db8488 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/LanguageDataGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/LanguageDataGenerator.php"));

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
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * The rule for compiling the language bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class LanguageDataGenerator extends AbstractDataGenerator
{
    /**
     * Source: https://iso639-3.sil.org/code_tables/639/data.
     */
    private static \$preferredAlpha2ToAlpha3Mapping = [
        'ak' => 'aka',
        'ar' => 'ara',
        'ay' => 'aym',
        'az' => 'aze',
        'bo' => 'bod',
        'cr' => 'cre',
        'cs' => 'ces',
        'cy' => 'cym',
        'de' => 'deu',
        'dz' => 'dzo',
        'el' => 'ell',
        'et' => 'est',
        'eu' => 'eus',
        'fa' => 'fas',
        'ff' => 'ful',
        'fr' => 'fra',
        'gn' => 'grn',
        'hy' => 'hye',
        'hr' => 'hrv',
        'ik' => 'ipk',
        'is' => 'isl',
        'iu' => 'iku',
        'ka' => 'kat',
        'kr' => 'kau',
        'kg' => 'kon',
        'kv' => 'kom',
        'ku' => 'kur',
        'lv' => 'lav',
        'mg' => 'mlg',
        'mi' => 'mri',
        'mk' => 'mkd',
        'mn' => 'mon',
        'ms' => 'msa',
        'my' => 'mya',
        'nb' => 'nob',
        'ne' => 'nep',
        'nl' => 'nld',
        'oj' => 'oji',
        'om' => 'orm',
        'or' => 'ori',
        'ps' => 'pus',
        'qu' => 'que',
        'ro' => 'ron',
        'sc' => 'srd',
        'sk' => 'slk',
        'sq' => 'sqi',
        'sr' => 'srp',
        'sw' => 'swa',
        'uz' => 'uzb',
        'yi' => 'yid',
        'za' => 'zha',
        'zh' => 'zho',
    ];
    private static \$blacklist = [
        'mul' => true, // Multiple languages
        'mis' => true, // Uncoded language
        'und' => true, // Unknown language
        'zxx' => true, // No linguistic content
    ];

    /**
     * Collects all available language codes.
     *
     * @var string[]
     */
    private \$languageCodes = [];

    /**
     * {@inheritdoc}
     */
    protected function scanLocales(LocaleScanner \$scanner, \$sourceDir)
    {
        return \$scanner->scanLocales(\$sourceDir.'/lang');
    }

    /**
     * {@inheritdoc}
     */
    protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir)
    {
        \$compiler->compile(\$sourceDir.'/lang', \$tempDir);
        \$compiler->compile(\$sourceDir.'/misc/metadata.txt', \$tempDir);
    }

    /**
     * {@inheritdoc}
     */
    protected function preGenerate()
    {
        \$this->languageCodes = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale)
    {
        \$localeBundle = \$reader->read(\$tempDir, \$displayLocale);

        // isset() on \\ResourceBundle returns true even if the value is null
        if (isset(\$localeBundle['Languages']) && null !== \$localeBundle['Languages']) {
            \$data = [
                'Version' => \$localeBundle['Version'],
                'Names' => self::generateLanguageNames(\$localeBundle),
            ];

            \$this->languageCodes = array_merge(\$this->languageCodes, array_keys(\$data['Names']));

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
        \$metadataBundle = \$reader->read(\$tempDir, 'metadata');

        \$this->languageCodes = array_unique(\$this->languageCodes);

        sort(\$this->languageCodes);

        return [
            'Version' => \$rootBundle['Version'],
            'Languages' => \$this->languageCodes,
            'Alpha2ToAlpha3' => \$this->generateAlpha2ToAlpha3Mapping(\$metadataBundle),
        ];
    }

    private static function generateLanguageNames(ArrayAccessibleResourceBundle \$localeBundle): array
    {
        return array_diff_key(iterator_to_array(\$localeBundle['Languages']), self::\$blacklist);
    }

    private function generateAlpha2ToAlpha3Mapping(ArrayAccessibleResourceBundle \$metadataBundle)
    {
        \$aliases = iterator_to_array(\$metadataBundle['alias']['language']);
        \$alpha2ToAlpha3 = [];

        foreach (\$aliases as \$alias => \$data) {
            \$language = \$data['replacement'];
            if (2 === \\strlen(\$language) && 3 === \\strlen(\$alias) && 'overlong' === \$data['reason']) {
                if (isset(self::\$preferredAlpha2ToAlpha3Mapping[\$language])) {
                    // Validate to prevent typos
                    if (!isset(\$aliases[self::\$preferredAlpha2ToAlpha3Mapping[\$language]])) {
                        throw new RuntimeException('The statically set three-letter mapping '.self::\$preferredAlpha2ToAlpha3Mapping[\$language].' for the language code '.\$language.' seems to be invalid. Typo?');
                    }

                    \$alpha3 = self::\$preferredAlpha2ToAlpha3Mapping[\$language];
                    \$alpha2 = \$aliases[\$alpha3]['replacement'];

                    if (\$language !== \$alpha2) {
                        throw new RuntimeException('The statically set three-letter mapping '.\$alpha3.' for the language code '.\$language.' seems to be an alias for '.\$alpha2.'. Wrong mapping?');
                    }

                    \$alpha2ToAlpha3[\$language] = \$alpha3;
                } elseif (isset(\$alpha2ToAlpha3[\$language])) {
                    throw new RuntimeException('Multiple three-letter mappings exist for the language code '.\$language.'. Please add one of them to the property \$preferredAlpha2ToAlpha3Mapping.');
                } else {
                    \$alpha2ToAlpha3[\$language] = \$alias;
                }
            }
        }

        asort(\$alpha2ToAlpha3);

        return \$alpha2ToAlpha3;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Generator/LanguageDataGenerator.php";
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
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * The rule for compiling the language bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class LanguageDataGenerator extends AbstractDataGenerator
{
    /**
     * Source: https://iso639-3.sil.org/code_tables/639/data.
     */
    private static \$preferredAlpha2ToAlpha3Mapping = [
        'ak' => 'aka',
        'ar' => 'ara',
        'ay' => 'aym',
        'az' => 'aze',
        'bo' => 'bod',
        'cr' => 'cre',
        'cs' => 'ces',
        'cy' => 'cym',
        'de' => 'deu',
        'dz' => 'dzo',
        'el' => 'ell',
        'et' => 'est',
        'eu' => 'eus',
        'fa' => 'fas',
        'ff' => 'ful',
        'fr' => 'fra',
        'gn' => 'grn',
        'hy' => 'hye',
        'hr' => 'hrv',
        'ik' => 'ipk',
        'is' => 'isl',
        'iu' => 'iku',
        'ka' => 'kat',
        'kr' => 'kau',
        'kg' => 'kon',
        'kv' => 'kom',
        'ku' => 'kur',
        'lv' => 'lav',
        'mg' => 'mlg',
        'mi' => 'mri',
        'mk' => 'mkd',
        'mn' => 'mon',
        'ms' => 'msa',
        'my' => 'mya',
        'nb' => 'nob',
        'ne' => 'nep',
        'nl' => 'nld',
        'oj' => 'oji',
        'om' => 'orm',
        'or' => 'ori',
        'ps' => 'pus',
        'qu' => 'que',
        'ro' => 'ron',
        'sc' => 'srd',
        'sk' => 'slk',
        'sq' => 'sqi',
        'sr' => 'srp',
        'sw' => 'swa',
        'uz' => 'uzb',
        'yi' => 'yid',
        'za' => 'zha',
        'zh' => 'zho',
    ];
    private static \$blacklist = [
        'mul' => true, // Multiple languages
        'mis' => true, // Uncoded language
        'und' => true, // Unknown language
        'zxx' => true, // No linguistic content
    ];

    /**
     * Collects all available language codes.
     *
     * @var string[]
     */
    private \$languageCodes = [];

    /**
     * {@inheritdoc}
     */
    protected function scanLocales(LocaleScanner \$scanner, \$sourceDir)
    {
        return \$scanner->scanLocales(\$sourceDir.'/lang');
    }

    /**
     * {@inheritdoc}
     */
    protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir)
    {
        \$compiler->compile(\$sourceDir.'/lang', \$tempDir);
        \$compiler->compile(\$sourceDir.'/misc/metadata.txt', \$tempDir);
    }

    /**
     * {@inheritdoc}
     */
    protected function preGenerate()
    {
        \$this->languageCodes = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale)
    {
        \$localeBundle = \$reader->read(\$tempDir, \$displayLocale);

        // isset() on \\ResourceBundle returns true even if the value is null
        if (isset(\$localeBundle['Languages']) && null !== \$localeBundle['Languages']) {
            \$data = [
                'Version' => \$localeBundle['Version'],
                'Names' => self::generateLanguageNames(\$localeBundle),
            ];

            \$this->languageCodes = array_merge(\$this->languageCodes, array_keys(\$data['Names']));

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
        \$metadataBundle = \$reader->read(\$tempDir, 'metadata');

        \$this->languageCodes = array_unique(\$this->languageCodes);

        sort(\$this->languageCodes);

        return [
            'Version' => \$rootBundle['Version'],
            'Languages' => \$this->languageCodes,
            'Alpha2ToAlpha3' => \$this->generateAlpha2ToAlpha3Mapping(\$metadataBundle),
        ];
    }

    private static function generateLanguageNames(ArrayAccessibleResourceBundle \$localeBundle): array
    {
        return array_diff_key(iterator_to_array(\$localeBundle['Languages']), self::\$blacklist);
    }

    private function generateAlpha2ToAlpha3Mapping(ArrayAccessibleResourceBundle \$metadataBundle)
    {
        \$aliases = iterator_to_array(\$metadataBundle['alias']['language']);
        \$alpha2ToAlpha3 = [];

        foreach (\$aliases as \$alias => \$data) {
            \$language = \$data['replacement'];
            if (2 === \\strlen(\$language) && 3 === \\strlen(\$alias) && 'overlong' === \$data['reason']) {
                if (isset(self::\$preferredAlpha2ToAlpha3Mapping[\$language])) {
                    // Validate to prevent typos
                    if (!isset(\$aliases[self::\$preferredAlpha2ToAlpha3Mapping[\$language]])) {
                        throw new RuntimeException('The statically set three-letter mapping '.self::\$preferredAlpha2ToAlpha3Mapping[\$language].' for the language code '.\$language.' seems to be invalid. Typo?');
                    }

                    \$alpha3 = self::\$preferredAlpha2ToAlpha3Mapping[\$language];
                    \$alpha2 = \$aliases[\$alpha3]['replacement'];

                    if (\$language !== \$alpha2) {
                        throw new RuntimeException('The statically set three-letter mapping '.\$alpha3.' for the language code '.\$language.' seems to be an alias for '.\$alpha2.'. Wrong mapping?');
                    }

                    \$alpha2ToAlpha3[\$language] = \$alpha3;
                } elseif (isset(\$alpha2ToAlpha3[\$language])) {
                    throw new RuntimeException('Multiple three-letter mappings exist for the language code '.\$language.'. Please add one of them to the property \$preferredAlpha2ToAlpha3Mapping.');
                } else {
                    \$alpha2ToAlpha3[\$language] = \$alias;
                }
            }
        }

        asort(\$alpha2ToAlpha3);

        return \$alpha2ToAlpha3;
    }
}
", "vendor/symfony/intl/Data/Generator/LanguageDataGenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Generator/LanguageDataGenerator.php");
    }
}
