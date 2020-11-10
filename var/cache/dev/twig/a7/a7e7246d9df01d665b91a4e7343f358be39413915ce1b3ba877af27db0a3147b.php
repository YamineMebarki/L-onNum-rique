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

/* vendor/symfony/translation/Tests/Loader/IcuDatFileLoaderTest.php */
class __TwigTemplate_7fa957ab3094b9cb512b1f7675ac72f5f82a41467518b780770a62f21cd4324a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/IcuDatFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Loader/IcuDatFileLoaderTest.php"));

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

use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader;

/**
 * @requires extension intl
 */
class IcuDatFileLoaderTest extends LocalizedTestCase
{
    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new IcuDatFileLoader();
        \$loader->load(__DIR__.'/../fixtures/resourcebundle/corrupted/resources', 'es', 'domain2');
    }

    public function testDatEnglishLoad()
    {
        // bundled resource is build using pkgdata command which at least in ICU 4.2 comes in extremely! buggy form
        // you must specify an temporary build directory which is not the same as current directory and
        // MUST reside on the same partition. pkgdata -p resources -T /srv -d.packagelist.txt
        \$loader = new IcuDatFileLoader();
        \$resource = __DIR__.'/../fixtures/resourcebundle/dat/resources';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['symfony' => 'Symfony 2 is great'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource.'.dat')], \$catalogue->getResources());
    }

    public function testDatFrenchLoad()
    {
        \$loader = new IcuDatFileLoader();
        \$resource = __DIR__.'/../fixtures/resourcebundle/dat/resources';
        \$catalogue = \$loader->load(\$resource, 'fr', 'domain1');

        \$this->assertEquals(['symfony' => 'Symfony 2 est génial'], \$catalogue->all('domain1'));
        \$this->assertEquals('fr', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource.'.dat')], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new IcuDatFileLoader();
        \$loader->load(__DIR__.'/../fixtures/non-existing.txt', 'en', 'domain1');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Loader/IcuDatFileLoaderTest.php";
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

use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader;

/**
 * @requires extension intl
 */
class IcuDatFileLoaderTest extends LocalizedTestCase
{
    public function testLoadInvalidResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidResourceException');
        \$loader = new IcuDatFileLoader();
        \$loader->load(__DIR__.'/../fixtures/resourcebundle/corrupted/resources', 'es', 'domain2');
    }

    public function testDatEnglishLoad()
    {
        // bundled resource is build using pkgdata command which at least in ICU 4.2 comes in extremely! buggy form
        // you must specify an temporary build directory which is not the same as current directory and
        // MUST reside on the same partition. pkgdata -p resources -T /srv -d.packagelist.txt
        \$loader = new IcuDatFileLoader();
        \$resource = __DIR__.'/../fixtures/resourcebundle/dat/resources';
        \$catalogue = \$loader->load(\$resource, 'en', 'domain1');

        \$this->assertEquals(['symfony' => 'Symfony 2 is great'], \$catalogue->all('domain1'));
        \$this->assertEquals('en', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource.'.dat')], \$catalogue->getResources());
    }

    public function testDatFrenchLoad()
    {
        \$loader = new IcuDatFileLoader();
        \$resource = __DIR__.'/../fixtures/resourcebundle/dat/resources';
        \$catalogue = \$loader->load(\$resource, 'fr', 'domain1');

        \$this->assertEquals(['symfony' => 'Symfony 2 est génial'], \$catalogue->all('domain1'));
        \$this->assertEquals('fr', \$catalogue->getLocale());
        \$this->assertEquals([new FileResource(\$resource.'.dat')], \$catalogue->getResources());
    }

    public function testLoadNonExistingResource()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\NotFoundResourceException');
        \$loader = new IcuDatFileLoader();
        \$loader->load(__DIR__.'/../fixtures/non-existing.txt', 'en', 'domain1');
    }
}
", "vendor/symfony/translation/Tests/Loader/IcuDatFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Loader/IcuDatFileLoaderTest.php");
    }
}
