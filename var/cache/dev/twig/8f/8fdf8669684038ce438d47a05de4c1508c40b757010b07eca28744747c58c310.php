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

/* vendor/symfony/intl/Tests/Data/Provider/AbstractScriptDataProviderTest.php */
class __TwigTemplate_414d0c11739c5c155f3937dcaf9941c812e5f4f578eea14d6f54ee5fabcf355c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Provider/AbstractScriptDataProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Provider/AbstractScriptDataProviderTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Provider;

use Symfony\\Component\\Intl\\Data\\Provider\\ScriptDataProvider;
use Symfony\\Component\\Intl\\Intl;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @group intl-data
 * @group legacy
 */
abstract class AbstractScriptDataProviderTest extends AbstractDataProviderTest
{
    // The below arrays document the state of the ICU data bundled with this package.

    protected static \$scripts = [
        'Adlm',
        'Afak',
        'Aghb',
        'Ahom',
        'Arab',
        'Armi',
        'Armn',
        'Avst',
        'Bali',
        'Bamu',
        'Bass',
        'Batk',
        'Beng',
        'Bhks',
        'Blis',
        'Bopo',
        'Brah',
        'Brai',
        'Bugi',
        'Buhd',
        'Cakm',
        'Cans',
        'Cari',
        'Cham',
        'Cher',
        'Cirt',
        'Copt',
        'Cprt',
        'Cyrl',
        'Cyrs',
        'Deva',
        'Dogr',
        'Dsrt',
        'Dupl',
        'Egyd',
        'Egyh',
        'Egyp',
        'Elba',
        'Elym',
        'Ethi',
        'Geok',
        'Geor',
        'Glag',
        'Gong',
        'Gonm',
        'Goth',
        'Gran',
        'Grek',
        'Gujr',
        'Guru',
        'Hanb',
        'Hang',
        'Hani',
        'Hano',
        'Hans',
        'Hant',
        'Hatr',
        'Hebr',
        'Hira',
        'Hluw',
        'Hmng',
        'Hmnp',
        'Hrkt',
        'Hung',
        'Inds',
        'Ital',
        'Jamo',
        'Java',
        'Jpan',
        'Jurc',
        'Kali',
        'Kana',
        'Khar',
        'Khmr',
        'Khoj',
        'Knda',
        'Kore',
        'Kpel',
        'Kthi',
        'Lana',
        'Laoo',
        'Latf',
        'Latg',
        'Latn',
        'Lepc',
        'Limb',
        'Lina',
        'Linb',
        'Lisu',
        'Loma',
        'Lyci',
        'Lydi',
        'Mahj',
        'Maka',
        'Mand',
        'Mani',
        'Marc',
        'Maya',
        'Medf',
        'Mend',
        'Merc',
        'Mero',
        'Mlym',
        'Modi',
        'Mong',
        'Moon',
        'Mroo',
        'Mtei',
        'Mult',
        'Mymr',
        'Nand',
        'Narb',
        'Nbat',
        'Newa',
        'Nkgb',
        'Nkoo',
        'Nshu',
        'Ogam',
        'Olck',
        'Orkh',
        'Orya',
        'Osge',
        'Osma',
        'Palm',
        'Pauc',
        'Perm',
        'Phag',
        'Phli',
        'Phlp',
        'Phlv',
        'Phnx',
        'Plrd',
        'Prti',
        'Qaag',
        'Rjng',
        'Rohg',
        'Roro',
        'Runr',
        'Samr',
        'Sara',
        'Sarb',
        'Saur',
        'Sgnw',
        'Shaw',
        'Shrd',
        'Sidd',
        'Sind',
        'Sinh',
        'Sogd',
        'Sogo',
        'Sora',
        'Soyo',
        'Sund',
        'Sylo',
        'Syrc',
        'Syre',
        'Syrj',
        'Syrn',
        'Tagb',
        'Takr',
        'Tale',
        'Talu',
        'Taml',
        'Tang',
        'Tavt',
        'Telu',
        'Teng',
        'Tfng',
        'Tglg',
        'Thaa',
        'Thai',
        'Tibt',
        'Tirh',
        'Ugar',
        'Vaii',
        'Visp',
        'Wara',
        'Wcho',
        'Wole',
        'Xpeo',
        'Xsux',
        'Yiii',
        'Zanb',
        'Zinh',
        'Zmth',
        'Zsye',
        'Zsym',
        'Zxxx',
        'Zyyy',
    ];

    /**
     * @var ScriptDataProvider
     */
    protected \$dataProvider;
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dataProvider = new ScriptDataProvider(
            \$this->getDataDirectory().'/'.Intl::SCRIPT_DIR,
            \$this->createEntryReader()
        );

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    abstract protected function getDataDirectory();

    public function testGetScripts()
    {
        \$this->assertSame(static::\$scripts, \$this->dataProvider->getScripts());
    }

    /**
     * @dataProvider provideLocales
     */
    public function testGetNames(\$displayLocale)
    {
        \$scripts = array_keys(\$this->dataProvider->getNames(\$displayLocale));

        sort(\$scripts);

        // We can't assert on exact list of scripts, as there's too many variations between locales.
        // The best we can do is to make sure getNames() returns a subset of what getScripts() returns.
        \$this->assertNotEmpty(\$scripts);
        \$this->assertEmpty(array_diff(\$scripts, self::\$scripts));
    }

    public function testGetNamesDefaultLocale()
    {
        \\Locale::setDefault('de_AT');

        \$this->assertSame(
            \$this->dataProvider->getNames('de_AT'),
            \$this->dataProvider->getNames()
        );
    }

    /**
     * @dataProvider provideLocaleAliases
     */
    public function testGetNamesSupportsAliases(\$alias, \$ofLocale)
    {
        // Can't use assertSame(), because some aliases contain scripts with
        // different collation (=order of output) than their aliased locale
        // e.g. sr_Latn_ME => sr_ME
        \$this->assertEquals(
            \$this->dataProvider->getNames(\$ofLocale),
            \$this->dataProvider->getNames(\$alias)
        );
    }

    /**
     * @dataProvider provideLocales
     */
    public function testGetName(\$displayLocale)
    {
        \$names = \$this->dataProvider->getNames(\$displayLocale);

        foreach (\$names as \$script => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$script, \$displayLocale));
        }
    }

    public function testGetNameDefaultLocale()
    {
        \\Locale::setDefault('de_AT');

        \$names = \$this->dataProvider->getNames('de_AT');

        foreach (\$names as \$script => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$script));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Provider/AbstractScriptDataProviderTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Provider;

use Symfony\\Component\\Intl\\Data\\Provider\\ScriptDataProvider;
use Symfony\\Component\\Intl\\Intl;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @group intl-data
 * @group legacy
 */
abstract class AbstractScriptDataProviderTest extends AbstractDataProviderTest
{
    // The below arrays document the state of the ICU data bundled with this package.

    protected static \$scripts = [
        'Adlm',
        'Afak',
        'Aghb',
        'Ahom',
        'Arab',
        'Armi',
        'Armn',
        'Avst',
        'Bali',
        'Bamu',
        'Bass',
        'Batk',
        'Beng',
        'Bhks',
        'Blis',
        'Bopo',
        'Brah',
        'Brai',
        'Bugi',
        'Buhd',
        'Cakm',
        'Cans',
        'Cari',
        'Cham',
        'Cher',
        'Cirt',
        'Copt',
        'Cprt',
        'Cyrl',
        'Cyrs',
        'Deva',
        'Dogr',
        'Dsrt',
        'Dupl',
        'Egyd',
        'Egyh',
        'Egyp',
        'Elba',
        'Elym',
        'Ethi',
        'Geok',
        'Geor',
        'Glag',
        'Gong',
        'Gonm',
        'Goth',
        'Gran',
        'Grek',
        'Gujr',
        'Guru',
        'Hanb',
        'Hang',
        'Hani',
        'Hano',
        'Hans',
        'Hant',
        'Hatr',
        'Hebr',
        'Hira',
        'Hluw',
        'Hmng',
        'Hmnp',
        'Hrkt',
        'Hung',
        'Inds',
        'Ital',
        'Jamo',
        'Java',
        'Jpan',
        'Jurc',
        'Kali',
        'Kana',
        'Khar',
        'Khmr',
        'Khoj',
        'Knda',
        'Kore',
        'Kpel',
        'Kthi',
        'Lana',
        'Laoo',
        'Latf',
        'Latg',
        'Latn',
        'Lepc',
        'Limb',
        'Lina',
        'Linb',
        'Lisu',
        'Loma',
        'Lyci',
        'Lydi',
        'Mahj',
        'Maka',
        'Mand',
        'Mani',
        'Marc',
        'Maya',
        'Medf',
        'Mend',
        'Merc',
        'Mero',
        'Mlym',
        'Modi',
        'Mong',
        'Moon',
        'Mroo',
        'Mtei',
        'Mult',
        'Mymr',
        'Nand',
        'Narb',
        'Nbat',
        'Newa',
        'Nkgb',
        'Nkoo',
        'Nshu',
        'Ogam',
        'Olck',
        'Orkh',
        'Orya',
        'Osge',
        'Osma',
        'Palm',
        'Pauc',
        'Perm',
        'Phag',
        'Phli',
        'Phlp',
        'Phlv',
        'Phnx',
        'Plrd',
        'Prti',
        'Qaag',
        'Rjng',
        'Rohg',
        'Roro',
        'Runr',
        'Samr',
        'Sara',
        'Sarb',
        'Saur',
        'Sgnw',
        'Shaw',
        'Shrd',
        'Sidd',
        'Sind',
        'Sinh',
        'Sogd',
        'Sogo',
        'Sora',
        'Soyo',
        'Sund',
        'Sylo',
        'Syrc',
        'Syre',
        'Syrj',
        'Syrn',
        'Tagb',
        'Takr',
        'Tale',
        'Talu',
        'Taml',
        'Tang',
        'Tavt',
        'Telu',
        'Teng',
        'Tfng',
        'Tglg',
        'Thaa',
        'Thai',
        'Tibt',
        'Tirh',
        'Ugar',
        'Vaii',
        'Visp',
        'Wara',
        'Wcho',
        'Wole',
        'Xpeo',
        'Xsux',
        'Yiii',
        'Zanb',
        'Zinh',
        'Zmth',
        'Zsye',
        'Zsym',
        'Zxxx',
        'Zyyy',
    ];

    /**
     * @var ScriptDataProvider
     */
    protected \$dataProvider;
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dataProvider = new ScriptDataProvider(
            \$this->getDataDirectory().'/'.Intl::SCRIPT_DIR,
            \$this->createEntryReader()
        );

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    abstract protected function getDataDirectory();

    public function testGetScripts()
    {
        \$this->assertSame(static::\$scripts, \$this->dataProvider->getScripts());
    }

    /**
     * @dataProvider provideLocales
     */
    public function testGetNames(\$displayLocale)
    {
        \$scripts = array_keys(\$this->dataProvider->getNames(\$displayLocale));

        sort(\$scripts);

        // We can't assert on exact list of scripts, as there's too many variations between locales.
        // The best we can do is to make sure getNames() returns a subset of what getScripts() returns.
        \$this->assertNotEmpty(\$scripts);
        \$this->assertEmpty(array_diff(\$scripts, self::\$scripts));
    }

    public function testGetNamesDefaultLocale()
    {
        \\Locale::setDefault('de_AT');

        \$this->assertSame(
            \$this->dataProvider->getNames('de_AT'),
            \$this->dataProvider->getNames()
        );
    }

    /**
     * @dataProvider provideLocaleAliases
     */
    public function testGetNamesSupportsAliases(\$alias, \$ofLocale)
    {
        // Can't use assertSame(), because some aliases contain scripts with
        // different collation (=order of output) than their aliased locale
        // e.g. sr_Latn_ME => sr_ME
        \$this->assertEquals(
            \$this->dataProvider->getNames(\$ofLocale),
            \$this->dataProvider->getNames(\$alias)
        );
    }

    /**
     * @dataProvider provideLocales
     */
    public function testGetName(\$displayLocale)
    {
        \$names = \$this->dataProvider->getNames(\$displayLocale);

        foreach (\$names as \$script => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$script, \$displayLocale));
        }
    }

    public function testGetNameDefaultLocale()
    {
        \\Locale::setDefault('de_AT');

        \$names = \$this->dataProvider->getNames('de_AT');

        foreach (\$names as \$script => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$script));
        }
    }
}
", "vendor/symfony/intl/Tests/Data/Provider/AbstractScriptDataProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Provider/AbstractScriptDataProviderTest.php");
    }
}
