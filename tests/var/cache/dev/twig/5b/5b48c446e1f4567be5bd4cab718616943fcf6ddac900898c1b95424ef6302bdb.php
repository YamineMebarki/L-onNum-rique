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

/* vendor/symfony/translation/Tests/Loader/QtFileLoaderTest.php */
class __TwigTemplate_ad1b82d0a572db8d220385b96eb966f5651454737888446fc83656b823d3e6e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/QtFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/QtFileLoaderTest.php"));

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
use Symfony\\Component\\Translation\\Loader\\QtFileLoader;

class QtFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.ts';
        \$catalogue = \$loader->load(\$resource, 'en', 'resources');

        \$this->assertEquals([
            'foo' => 'bar',
            'foo_bar' => 'foobar',
            'bar_foo' => 'barfoo',
        ], \$catalogue->all('resources'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.ts';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadNonLocalResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new QtFileLoader();
        \$resource = 'http://domain1.com/resources.ts';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/invalid-xml-resources.xlf';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadEmptyResource()
    {
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.xlf';

        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$this->expectExceptionMessage(sprintf('Unable to load \"%s\".', \$resource));

        \$loader->load(\$resource, 'en', 'domain1');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Loader/QtFileLoaderTest.php";
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
use Symfony\\Component\\Translation\\Loader\\QtFileLoader;

class QtFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.ts';
        \$catalogue = \$loader->load(\$resource, 'en', 'resources');

        \$this->assertEquals([
            'foo' => 'bar',
            'foo_bar' => 'foobar',
            'bar_foo' => 'barfoo',
        ], \$catalogue->all('resources'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.ts';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadNonLocalResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new QtFileLoader();
        \$resource = 'http://domain1.com/resources.ts';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/invalid-xml-resources.xlf';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadEmptyResource()
    {
        \$loader = new QtFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.xlf';

        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$this->expectExceptionMessage(sprintf('Unable to load \"%s\".', \$resource));

        \$loader->load(\$resource, 'en', 'domain1');
    }
}
", "vendor/symfony/translation/Tests/Loader/QtFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Loader/QtFileLoaderTest.php");
    }
}
