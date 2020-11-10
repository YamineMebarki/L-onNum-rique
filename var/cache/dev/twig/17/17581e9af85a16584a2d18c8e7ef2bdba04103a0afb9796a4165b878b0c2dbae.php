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

/* vendor/symfony/translation/Tests/Loader/YamlFileLoaderTest.php */
class __TwigTemplate_447a12c017b1a73db6d9062379022deb044c75329be0b41f236dd1a5751cf874 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/YamlFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/YamlFileLoaderTest.php"));

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
use Symfony\\Component\\Translation\\Loader\\YamlFileLoader;

class YamlFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.yml';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.yml';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.yml';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadThrowsAnExceptionIfFileNotLocal()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new YamlFileLoader();
        \$resource = 'http://example.com/resources.yml';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadThrowsAnExceptionIfNotAnArray()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/non-valid.yml';
        \$loader->load(\$resource, 'en', 'domain1');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Loader/YamlFileLoaderTest.php";
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
use Symfony\\Component\\Translation\\Loader\\YamlFileLoader;

class YamlFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.yml';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.yml';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.yml';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadThrowsAnExceptionIfFileNotLocal()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new YamlFileLoader();
        \$resource = 'http://example.com/resources.yml';
        \$loader->load(\$resource, 'en', 'domain1');
    }

    public function testLoadThrowsAnExceptionIfNotAnArray()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new YamlFileLoader();
        \$resource = __DIR__.'/../fixtures/non-valid.yml';
        \$loader->load(\$resource, 'en', 'domain1');
    }
}
", "vendor/symfony/translation/Tests/Loader/YamlFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Loader/YamlFileLoaderTest.php");
    }
}
