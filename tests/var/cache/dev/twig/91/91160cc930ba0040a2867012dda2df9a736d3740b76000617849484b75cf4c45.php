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

/* vendor/symfony/intl/Tests/Data/Provider/AbstractLocaleDataProviderTest.php */
class __TwigTemplate_aa49c6748b8da061e2cd3db88e172ab1e03b777ef58ad136279e2b599a915d99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Provider/AbstractLocaleDataProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Provider/AbstractLocaleDataProviderTest.php"));

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

use Symfony\\Component\\Intl\\Data\\Provider\\LocaleDataProvider;
use Symfony\\Component\\Intl\\Intl;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @group legacy
 */
abstract class AbstractLocaleDataProviderTest extends AbstractDataProviderTest
{
    /**
     * @var LocaleDataProvider
     */
    protected \$dataProvider;
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dataProvider = new LocaleDataProvider(
            \$this->getDataDirectory().'/'.Intl::LOCALE_DIR,
            \$this->createEntryReader()
        );

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        \\Locale::setDefault(\$this->defaultLocale);
    }

    abstract protected function getDataDirectory();

    public function testGetLocales()
    {
        \$this->assertSame(\$this->getLocales(), \$this->dataProvider->getLocales());
    }

    public function testGetLocaleAliases()
    {
        \$this->assertSame(\$this->getLocaleAliases(), \$this->dataProvider->getAliases());
    }

    /**
     * @dataProvider provideLocales
     */
    public function testGetNames(\$displayLocale)
    {
        \$locales = array_keys(\$this->dataProvider->getNames(\$displayLocale));

        sort(\$locales);

        // We can't assert on exact list of locale, as there's too many variations.
        // The best we can do is to make sure getNames() returns a subset of what getLocales() returns.
        \$this->assertNotEmpty(\$locales);
        \$this->assertEmpty(array_diff(\$locales, \$this->getLocales()));
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

        foreach (\$names as \$locale => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$locale, \$displayLocale));
        }
    }

    public function testGetNameDefaultLocale()
    {
        \\Locale::setDefault('de_AT');

        \$names = \$this->dataProvider->getNames('de_AT');

        foreach (\$names as \$locale => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$locale));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Provider/AbstractLocaleDataProviderTest.php";
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

use Symfony\\Component\\Intl\\Data\\Provider\\LocaleDataProvider;
use Symfony\\Component\\Intl\\Intl;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @group legacy
 */
abstract class AbstractLocaleDataProviderTest extends AbstractDataProviderTest
{
    /**
     * @var LocaleDataProvider
     */
    protected \$dataProvider;
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dataProvider = new LocaleDataProvider(
            \$this->getDataDirectory().'/'.Intl::LOCALE_DIR,
            \$this->createEntryReader()
        );

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        \\Locale::setDefault(\$this->defaultLocale);
    }

    abstract protected function getDataDirectory();

    public function testGetLocales()
    {
        \$this->assertSame(\$this->getLocales(), \$this->dataProvider->getLocales());
    }

    public function testGetLocaleAliases()
    {
        \$this->assertSame(\$this->getLocaleAliases(), \$this->dataProvider->getAliases());
    }

    /**
     * @dataProvider provideLocales
     */
    public function testGetNames(\$displayLocale)
    {
        \$locales = array_keys(\$this->dataProvider->getNames(\$displayLocale));

        sort(\$locales);

        // We can't assert on exact list of locale, as there's too many variations.
        // The best we can do is to make sure getNames() returns a subset of what getLocales() returns.
        \$this->assertNotEmpty(\$locales);
        \$this->assertEmpty(array_diff(\$locales, \$this->getLocales()));
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

        foreach (\$names as \$locale => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$locale, \$displayLocale));
        }
    }

    public function testGetNameDefaultLocale()
    {
        \\Locale::setDefault('de_AT');

        \$names = \$this->dataProvider->getNames('de_AT');

        foreach (\$names as \$locale => \$name) {
            \$this->assertSame(\$name, \$this->dataProvider->getName(\$locale));
        }
    }
}
", "vendor/symfony/intl/Tests/Data/Provider/AbstractLocaleDataProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Provider/AbstractLocaleDataProviderTest.php");
    }
}
