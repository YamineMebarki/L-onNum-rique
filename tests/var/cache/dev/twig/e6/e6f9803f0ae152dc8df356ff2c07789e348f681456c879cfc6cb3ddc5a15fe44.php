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

/* vendor/symfony/translation/Tests/Loader/IniFileLoaderTest.php */
class __TwigTemplate_3e04045b411275f5807a3ad5aab1a448135bfe27f3dc52b9422abdc570e0d9e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/IniFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/IniFileLoaderTest.php"));

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
use Symfony\\Component\\Translation\\Loader\\IniFileLoader;

class IniFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new IniFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.ini';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new IniFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.ini';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new IniFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.ini';
        \$loader->load(\$resource, 'en', 'domain1');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Loader/IniFileLoaderTest.php";
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
use Symfony\\Component\\Translation\\Loader\\IniFileLoader;

class IniFileLoaderTest extends TestCase
{
    public function testLoad()
    {
        \$loader = new IniFileLoader();
        \$resource = __DIR__.'/../fixtures/resources.ini';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        \$loader = new IniFileLoader();
        \$resource = __DIR__.'/../fixtures/empty.ini';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals([], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new IniFileLoader();
        \$resource = __DIR__.'/../fixtures/non-existing.ini';
        \$loader->load(\$resource, 'en', 'domain1');
    }
}
", "vendor/symfony/translation/Tests/Loader/IniFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Loader/IniFileLoaderTest.php");
    }
}
