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

/* vendor/symfony/intl/Tests/LocaleTest.php */
class __TwigTemplate_fb963430cc6a31f6b37ffcb9b5f708d3242d469789d80b61e2972ab5b59b14f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/LocaleTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/LocaleTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Locale;

class LocaleTest extends TestCase
{
    public function provideGetFallbackTests()
    {
        \$tests = [
            ['sl_Latn_IT', 'sl_Latn_IT_nedis'],
            ['sl_Latn', 'sl_Latn_IT'],
            ['fr', 'fr_FR'],
            ['fr', 'fr-FR'],
            ['en', 'fr'],
            ['root', 'en'],
            [null, 'root'],
        ];

        if (\\function_exists('locale_parse')) {
            \$tests[] = ['sl_Latn_IT', 'sl-Latn-IT-nedis'];
            \$tests[] = ['sl_Latn', 'sl-Latn_IT'];
        } else {
            \$tests[] = ['sl-Latn-IT', 'sl-Latn-IT-nedis'];
            \$tests[] = ['sl-Latn', 'sl-Latn-IT'];
        }

        return \$tests;
    }

    /**
     * @dataProvider provideGetFallbackTests
     */
    public function testGetFallback(\$expected, \$locale)
    {
        \$this->assertSame(\$expected, Locale::getFallback(\$locale));
    }

    public function testNoDefaultFallback()
    {
        \$prev = Locale::getDefaultFallback();
        Locale::setDefaultFallback(null);

        \$this->assertSame('nl', Locale::getFallback('nl_NL'));
        \$this->assertNull(Locale::getFallback('nl'));
        \$this->assertNull(Locale::getFallback('root'));

        Locale::setDefaultFallback(\$prev);
    }

    public function testDefaultRootFallback()
    {
        \$prev = Locale::getDefaultFallback();
        Locale::setDefaultFallback('root');

        \$this->assertSame('nl', Locale::getFallback('nl_NL'));
        \$this->assertSame('root', Locale::getFallback('nl'));
        \$this->assertNull(Locale::getFallback('root'));

        Locale::setDefaultFallback(\$prev);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/LocaleTest.php";
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

namespace Symfony\\Component\\Intl\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Locale;

class LocaleTest extends TestCase
{
    public function provideGetFallbackTests()
    {
        \$tests = [
            ['sl_Latn_IT', 'sl_Latn_IT_nedis'],
            ['sl_Latn', 'sl_Latn_IT'],
            ['fr', 'fr_FR'],
            ['fr', 'fr-FR'],
            ['en', 'fr'],
            ['root', 'en'],
            [null, 'root'],
        ];

        if (\\function_exists('locale_parse')) {
            \$tests[] = ['sl_Latn_IT', 'sl-Latn-IT-nedis'];
            \$tests[] = ['sl_Latn', 'sl-Latn_IT'];
        } else {
            \$tests[] = ['sl-Latn-IT', 'sl-Latn-IT-nedis'];
            \$tests[] = ['sl-Latn', 'sl-Latn-IT'];
        }

        return \$tests;
    }

    /**
     * @dataProvider provideGetFallbackTests
     */
    public function testGetFallback(\$expected, \$locale)
    {
        \$this->assertSame(\$expected, Locale::getFallback(\$locale));
    }

    public function testNoDefaultFallback()
    {
        \$prev = Locale::getDefaultFallback();
        Locale::setDefaultFallback(null);

        \$this->assertSame('nl', Locale::getFallback('nl_NL'));
        \$this->assertNull(Locale::getFallback('nl'));
        \$this->assertNull(Locale::getFallback('root'));

        Locale::setDefaultFallback(\$prev);
    }

    public function testDefaultRootFallback()
    {
        \$prev = Locale::getDefaultFallback();
        Locale::setDefaultFallback('root');

        \$this->assertSame('nl', Locale::getFallback('nl_NL'));
        \$this->assertSame('root', Locale::getFallback('nl'));
        \$this->assertNull(Locale::getFallback('root'));

        Locale::setDefaultFallback(\$prev);
    }
}
", "vendor/symfony/intl/Tests/LocaleTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/LocaleTest.php");
    }
}
