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

/* vendor/symfony/translation/Tests/Loader/MoFileLoaderTest.php */
class __TwigTemplate_79ea986e93cd58716f4a1aab50e79346829d3fe5fe1e01c66ea0fdb3692ca9a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/MoFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/MoFileLoaderTest.php"));

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
use Symfony\\Component\\Translation\\Loader\\MoFileLoader;

class MoFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.mo';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadPlurals()
    {
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/plurals.mo';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([
            'foo|foos' => 'bar|bars',
            '{0} no foos|one foo|%count% foos' => '{0} no bars|one bar|%count% bars',
        ], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.mo';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.mo';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadEmptyTranslation()
    {
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty-translation.mo';
        \$catalogue = \$loader->load(\$resource, 'en', 'message');

        \$this->assertEquals([], \$catalogue->all('message'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Loader/MoFileLoaderTest.php";
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
use Symfony\\Component\\Translation\\Loader\\MoFileLoader;

class MoFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.mo';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadPlurals()
    {
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/plurals.mo';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([
            'foo|foos' => 'bar|bars',
            '{0} no foos|one foo|%count% foos' => '{0} no bars|one bar|%count% bars',
        ], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.mo';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.mo';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadEmptyTranslation()
    {
        \$loader = new MoFileLoader();
        \$resource = __DIR__.'/../fixtures/empty-translation.mo';
        \$catalogue = \$loader->load(\$resource, 'en', 'message');

        \$this->assertEquals([], \$catalogue->all('message'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }
}
", "vendor/symfony/translation/Tests/Loader/MoFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Loader/MoFileLoaderTest.php");
    }
}
