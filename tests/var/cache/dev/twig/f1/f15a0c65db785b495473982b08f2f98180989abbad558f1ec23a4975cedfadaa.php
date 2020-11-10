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

/* vendor/symfony/intl/Tests/Locale/LocaleTest.php */
class __TwigTemplate_1d5d8acaa16849a1b33ca936e6f71b5655c43a522c0a4f87c17bfd150a9d76fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Locale/LocaleTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Locale/LocaleTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Locale;

use Symfony\\Component\\Intl\\Locale\\Locale;

class LocaleTest extends AbstractLocaleTest
{
    public function testAcceptFromHttp()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('acceptFromHttp', 'pt-br,en-us;q=0.7,en;q=0.5');
    }

    public function testCanonicalize()
    {
        \$this->assertSame('en', \$this->call('canonicalize', ''));
        \$this->assertSame('en', \$this->call('canonicalize', '.utf8'));
        \$this->assertSame('fr_FR', \$this->call('canonicalize', 'FR-fr'));
        \$this->assertSame('fr_FR', \$this->call('canonicalize', 'FR-fr.utf8'));
        \$this->assertSame('uz_Latn', \$this->call('canonicalize', 'UZ-lATN'));
        \$this->assertSame('uz_Cyrl_UZ', \$this->call('canonicalize', 'UZ-cYRL-uz'));
        \$this->assertSame('123', \$this->call('canonicalize', 123));
    }

    public function testComposeLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$subtags = [
            'language' => 'pt',
            'script' => 'Latn',
            'region' => 'BR',
        ];
        \$this->call('composeLocale', \$subtags);
    }

    public function testFilterMatches()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('filterMatches', 'pt-BR', 'pt-BR');
    }

    public function testGetAllVariants()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getAllVariants', 'pt_BR_Latn');
    }

    public function testGetDisplayLanguage()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayLanguage', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayName()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayName', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayRegion()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayRegion', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayScript()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayScript', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayVariant()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayVariant', 'pt-Latn-BR', 'en');
    }

    public function testGetKeywords()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getKeywords', 'pt-BR@currency=BRL');
    }

    public function testGetPrimaryLanguage()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getPrimaryLanguage', 'pt-Latn-BR');
    }

    public function testGetRegion()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getRegion', 'pt-Latn-BR');
    }

    public function testGetScript()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getScript', 'pt-Latn-BR');
    }

    public function testLookup()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$langtag = [
            'pt-Latn-BR',
            'pt-BR',
        ];
        \$this->call('lookup', \$langtag, 'pt-BR-x-priv1');
    }

    public function testParseLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('parseLocale', 'pt-Latn-BR');
    }

    public function testSetDefault()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('setDefault', 'pt_BR');
    }

    public function testSetDefaultAcceptsEn()
    {
        \$this->call('setDefault', 'en');

        \$this->assertSame('en', \$this->call('getDefault'));
    }

    protected function call(\$methodName)
    {
        \$args = \\array_slice(\\func_get_args(), 1);

        return Locale::{\$methodName}(...\$args);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Locale/LocaleTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Locale;

use Symfony\\Component\\Intl\\Locale\\Locale;

class LocaleTest extends AbstractLocaleTest
{
    public function testAcceptFromHttp()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('acceptFromHttp', 'pt-br,en-us;q=0.7,en;q=0.5');
    }

    public function testCanonicalize()
    {
        \$this->assertSame('en', \$this->call('canonicalize', ''));
        \$this->assertSame('en', \$this->call('canonicalize', '.utf8'));
        \$this->assertSame('fr_FR', \$this->call('canonicalize', 'FR-fr'));
        \$this->assertSame('fr_FR', \$this->call('canonicalize', 'FR-fr.utf8'));
        \$this->assertSame('uz_Latn', \$this->call('canonicalize', 'UZ-lATN'));
        \$this->assertSame('uz_Cyrl_UZ', \$this->call('canonicalize', 'UZ-cYRL-uz'));
        \$this->assertSame('123', \$this->call('canonicalize', 123));
    }

    public function testComposeLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$subtags = [
            'language' => 'pt',
            'script' => 'Latn',
            'region' => 'BR',
        ];
        \$this->call('composeLocale', \$subtags);
    }

    public function testFilterMatches()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('filterMatches', 'pt-BR', 'pt-BR');
    }

    public function testGetAllVariants()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getAllVariants', 'pt_BR_Latn');
    }

    public function testGetDisplayLanguage()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayLanguage', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayName()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayName', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayRegion()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayRegion', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayScript()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayScript', 'pt-Latn-BR', 'en');
    }

    public function testGetDisplayVariant()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getDisplayVariant', 'pt-Latn-BR', 'en');
    }

    public function testGetKeywords()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getKeywords', 'pt-BR@currency=BRL');
    }

    public function testGetPrimaryLanguage()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getPrimaryLanguage', 'pt-Latn-BR');
    }

    public function testGetRegion()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getRegion', 'pt-Latn-BR');
    }

    public function testGetScript()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('getScript', 'pt-Latn-BR');
    }

    public function testLookup()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$langtag = [
            'pt-Latn-BR',
            'pt-BR',
        ];
        \$this->call('lookup', \$langtag, 'pt-BR-x-priv1');
    }

    public function testParseLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('parseLocale', 'pt-Latn-BR');
    }

    public function testSetDefault()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$this->call('setDefault', 'pt_BR');
    }

    public function testSetDefaultAcceptsEn()
    {
        \$this->call('setDefault', 'en');

        \$this->assertSame('en', \$this->call('getDefault'));
    }

    protected function call(\$methodName)
    {
        \$args = \\array_slice(\\func_get_args(), 1);

        return Locale::{\$methodName}(...\$args);
    }
}
", "vendor/symfony/intl/Tests/Locale/LocaleTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Locale/LocaleTest.php");
    }
}
