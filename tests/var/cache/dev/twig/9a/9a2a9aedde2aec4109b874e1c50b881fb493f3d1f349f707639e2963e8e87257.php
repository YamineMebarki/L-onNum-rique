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

/* vendor/symfony/routing/Tests/Loader/DirectoryLoaderTest.php */
class __TwigTemplate_eebbab4c636f9eb56bd23144633c4636f37ea1c27f48a69eb9947b81b78737a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/DirectoryLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/DirectoryLoaderTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests\\Loader;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader;
use Symfony\\Component\\Routing\\Loader\\DirectoryLoader;
use Symfony\\Component\\Routing\\Loader\\YamlFileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

class DirectoryLoaderTest extends AbstractAnnotationLoaderTest
{
    private \$loader;
    private \$reader;

    protected function setUp(): void
    {
        parent::setUp();

        \$locator = new FileLocator();
        \$this->reader = \$this->getReader();
        \$this->loader = new DirectoryLoader(\$locator);
        \$resolver = new LoaderResolver([
            new YamlFileLoader(\$locator),
            new AnnotationFileLoader(\$locator, \$this->getClassLoader(\$this->reader)),
            \$this->loader,
        ]);
        \$this->loader->setResolver(\$resolver);
    }

    public function testLoadDirectory()
    {
        \$collection = \$this->loader->load(__DIR__.'/../Fixtures/directory', 'directory');
        \$this->verifyCollection(\$collection);
    }

    public function testImportDirectory()
    {
        \$collection = \$this->loader->load(__DIR__.'/../Fixtures/directory_import', 'directory');
        \$this->verifyCollection(\$collection);
    }

    private function verifyCollection(RouteCollection \$collection)
    {
        \$routes = \$collection->all();

        \$this->assertCount(3, \$routes, 'Three routes are loaded');
        \$this->assertContainsOnly('Symfony\\Component\\Routing\\Route', \$routes);

        for (\$i = 1; \$i <= 3; ++\$i) {
            \$this->assertSame('/route/'.\$i, \$routes['route'.\$i]->getPath());
        }
    }

    public function testSupports()
    {
        \$fixturesDir = __DIR__.'/../Fixtures';

        \$this->assertFalse(\$this->loader->supports(\$fixturesDir), '->supports(*) returns false');

        \$this->assertTrue(\$this->loader->supports(\$fixturesDir, 'directory'), '->supports(*, \"directory\") returns true');
        \$this->assertFalse(\$this->loader->supports(\$fixturesDir, 'foo'), '->supports(*, \"foo\") returns false');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Loader/DirectoryLoaderTest.php";
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

namespace Symfony\\Component\\Routing\\Tests\\Loader;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader;
use Symfony\\Component\\Routing\\Loader\\DirectoryLoader;
use Symfony\\Component\\Routing\\Loader\\YamlFileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

class DirectoryLoaderTest extends AbstractAnnotationLoaderTest
{
    private \$loader;
    private \$reader;

    protected function setUp(): void
    {
        parent::setUp();

        \$locator = new FileLocator();
        \$this->reader = \$this->getReader();
        \$this->loader = new DirectoryLoader(\$locator);
        \$resolver = new LoaderResolver([
            new YamlFileLoader(\$locator),
            new AnnotationFileLoader(\$locator, \$this->getClassLoader(\$this->reader)),
            \$this->loader,
        ]);
        \$this->loader->setResolver(\$resolver);
    }

    public function testLoadDirectory()
    {
        \$collection = \$this->loader->load(__DIR__.'/../Fixtures/directory', 'directory');
        \$this->verifyCollection(\$collection);
    }

    public function testImportDirectory()
    {
        \$collection = \$this->loader->load(__DIR__.'/../Fixtures/directory_import', 'directory');
        \$this->verifyCollection(\$collection);
    }

    private function verifyCollection(RouteCollection \$collection)
    {
        \$routes = \$collection->all();

        \$this->assertCount(3, \$routes, 'Three routes are loaded');
        \$this->assertContainsOnly('Symfony\\Component\\Routing\\Route', \$routes);

        for (\$i = 1; \$i <= 3; ++\$i) {
            \$this->assertSame('/route/'.\$i, \$routes['route'.\$i]->getPath());
        }
    }

    public function testSupports()
    {
        \$fixturesDir = __DIR__.'/../Fixtures';

        \$this->assertFalse(\$this->loader->supports(\$fixturesDir), '->supports(*) returns false');

        \$this->assertTrue(\$this->loader->supports(\$fixturesDir, 'directory'), '->supports(*, \"directory\") returns true');
        \$this->assertFalse(\$this->loader->supports(\$fixturesDir, 'foo'), '->supports(*, \"foo\") returns false');
    }
}
", "vendor/symfony/routing/Tests/Loader/DirectoryLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Loader/DirectoryLoaderTest.php");
    }
}
