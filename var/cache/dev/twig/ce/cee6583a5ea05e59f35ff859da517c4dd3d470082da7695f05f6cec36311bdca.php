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

/* vendor/symfony/translation/Tests/Loader/IcuResFileLoaderTest.php */
class __TwigTemplate_55105d4f45a31a07fc01bb1180a07eaa5226d7f9d1fdf1331cd04d30c358ed39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/IcuResFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/IcuResFileLoaderTest.php"));

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

use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Translation\\Loader\\IcuResFileLoader;

/**
 * @requires extension intl
 */
class IcuResFileLoaderTest extends LocalizedTestCase
{
    public function testLoad()
    {
        // resource is build using genrb command
        \$loader = new IcuResFileLoader();
        \$resource = __DIR__.'/../fixtures/resourcebundle/res';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new DirectoryResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new IcuResFileLoader();
        \$loader->load(__DIR__.'/../fixtures/non-existing.txt', 'en', 'domain1');
    }

    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new IcuResFileLoader();
        \$loader->load(__DIR__.'/../fixtures/resourcebundle/corrupted', 'en', 'domain1');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Loader/IcuResFileLoaderTest.php";
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

use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Translation\\Loader\\IcuResFileLoader;

/**
 * @requires extension intl
 */
class IcuResFileLoaderTest extends LocalizedTestCase
{
    public function testLoad()
    {
        // resource is build using genrb command
        \$loader = new IcuResFileLoader();
        \$resource = __DIR__.'/../fixtures/resourcebundle/res';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['foo' => 'bar'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new DirectoryResource(\$resource)], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new IcuResFileLoader();
        \$loader->load(__DIR__.'/../fixtures/non-existing.txt', 'en', 'domain1');
    }

    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new IcuResFileLoader();
        \$loader->load(__DIR__.'/../fixtures/resourcebundle/corrupted', 'en', 'domain1');
    }
}
", "vendor/symfony/translation/Tests/Loader/IcuResFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Loader/IcuResFileLoaderTest.php");
    }
}
