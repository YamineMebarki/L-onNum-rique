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

/* vendor/symfony/routing/Tests/Loader/GlobFileLoaderTest.php */
class __TwigTemplate_0f5fda27bd8edf3aebb67a22628af70e0fa64732ac4d5fe523598d96d38cc980 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/GlobFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/GlobFileLoaderTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Resource\\GlobResource;
use Symfony\\Component\\Routing\\Loader\\GlobFileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

class GlobFileLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new GlobFileLoader(new FileLocator());

        \$this->assertTrue(\$loader->supports('any-path', 'glob'), '->supports() returns true if the resource has the glob type');
        \$this->assertFalse(\$loader->supports('any-path'), '->supports() returns false if the resource is not of glob type');
    }

    public function testLoadAddsTheGlobResourceToTheContainer()
    {
        \$loader = new GlobFileLoaderWithoutImport(new FileLocator());
        \$collection = \$loader->load(__DIR__.'/../Fixtures/directory/*.yml');

        \$this->assertEquals(new GlobResource(__DIR__.'/../Fixtures/directory', '/*.yml', false), \$collection->getResources()[0]);
    }
}

class GlobFileLoaderWithoutImport extends GlobFileLoader
{
    public function import(\$resource, \$type = null, \$ignoreErrors = false, \$sourceResource = null)
    {
        return new RouteCollection();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Loader/GlobFileLoaderTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Resource\\GlobResource;
use Symfony\\Component\\Routing\\Loader\\GlobFileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

class GlobFileLoaderTest extends TestCase
{
    public function testSupports()
    {
        \$loader = new GlobFileLoader(new FileLocator());

        \$this->assertTrue(\$loader->supports('any-path', 'glob'), '->supports() returns true if the resource has the glob type');
        \$this->assertFalse(\$loader->supports('any-path'), '->supports() returns false if the resource is not of glob type');
    }

    public function testLoadAddsTheGlobResourceToTheContainer()
    {
        \$loader = new GlobFileLoaderWithoutImport(new FileLocator());
        \$collection = \$loader->load(__DIR__.'/../Fixtures/directory/*.yml');

        \$this->assertEquals(new GlobResource(__DIR__.'/../Fixtures/directory', '/*.yml', false), \$collection->getResources()[0]);
    }
}

class GlobFileLoaderWithoutImport extends GlobFileLoader
{
    public function import(\$resource, \$type = null, \$ignoreErrors = false, \$sourceResource = null)
    {
        return new RouteCollection();
    }
}
", "vendor/symfony/routing/Tests/Loader/GlobFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Loader/GlobFileLoaderTest.php");
    }
}
