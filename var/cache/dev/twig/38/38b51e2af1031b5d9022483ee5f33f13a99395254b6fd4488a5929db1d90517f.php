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

/* vendor/symfony/translation/Tests/Loader/PoFileLoaderTest.php */
class __TwigTemplate_f44c2dcbf34fc07786ce3555bb67525343ee583d778862bddb9acda717a35949 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/PoFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/PoFileLoaderTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Translation\\Loader\\PoFileLoader;

class PoFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar', 'bar' => 'foo'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadPlurals()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/plurals.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([
            'foo|foos' => 'bar|bars',
            '{0} no foos|one foo|%count% foos' => '{0} no bars|one bar|%count% bars',
        ], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.po';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadEmptyTranslation()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty-translation.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => ''], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testEscapedId()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/escaped-id.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$messages = \$catalogue->all('domain1');
        \$this->assertArrayHasKey('escaped \"foo\"', \$messages);
        \$this->assertEquals('escaped \"bar\"', \$messages['escaped \"foo\"']);
    }

    public function testEscapedIdPlurals()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/escaped-id-plurals.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$messages = \$catalogue->all('domain1');
        \$this->assertArrayHasKey('escaped \"foo\"|escaped \"foos\"', \$messages);
        \$this->assertEquals('escaped \"bar\"|escaped \"bars\"', \$messages['escaped \"foo\"|escaped \"foos\"']);
    }

    public function testSkipFuzzyTranslations()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/fuzzy-translations.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$messages = \$catalogue->all('domain1');
        \$this->assertArrayHasKey('foo1', \$messages);
        \$this->assertArrayNotHasKey('foo2', \$messages);
        \$this->assertArrayHasKey('foo3', \$messages);
    }

    public function testMissingPlurals()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/missing-plurals.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([
            'foo|foos' => '-|bar|-|bars',
        ], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Loader/PoFileLoaderTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Translation\\Loader\\PoFileLoader;

class PoFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar', 'bar' => 'foo'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadPlurals()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/plurals.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([
            'foo|foos' => 'bar|bars',
            '{0} no foos|one foo|%count% foos' => '{0} no bars|one bar|%count% bars',
        ], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.po';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadEmptyTranslation()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty-translation.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => ''], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testEscapedId()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/escaped-id.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$messages = \$catalogue->all('domain1');
        \$this->assertArrayHasKey('escaped \"foo\"', \$messages);
        \$this->assertEquals('escaped \"bar\"', \$messages['escaped \"foo\"']);
    }

    public function testEscapedIdPlurals()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/escaped-id-plurals.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$messages = \$catalogue->all('domain1');
        \$this->assertArrayHasKey('escaped \"foo\"|escaped \"foos\"', \$messages);
        \$this->assertEquals('escaped \"bar\"|escaped \"bars\"', \$messages['escaped \"foo\"|escaped \"foos\"']);
    }

    public function testSkipFuzzyTranslations()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/fuzzy-translations.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$messages = \$catalogue->all('domain1');
        \$this->assertArrayHasKey('foo1', \$messages);
        \$this->assertArrayNotHasKey('foo2', \$messages);
        \$this->assertArrayHasKey('foo3', \$messages);
    }

    public function testMissingPlurals()
    {
        \$loader = new PoFileLoader();
        \$resource = __DIR__.'/../fixtures/missing-plurals.po';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([
            'foo|foos' => '-|bar|-|bars',
        ], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
    }
}
", "vendor/symfony/translation/Tests/Loader/PoFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Loader/PoFileLoaderTest.php");
    }
}
