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

/* vendor/symfony/dependency-injection/Tests/CrossCheckTest.php */
class __TwigTemplate_bc7515c895a653edef85913b49f1f24b54074159cd9ea898ebf4328939efe1d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/CrossCheckTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/CrossCheckTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class CrossCheckTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = __DIR__.'/Fixtures/';

        require_once self::\$fixturesPath.'/includes/classes.php';
        require_once self::\$fixturesPath.'/includes/foo.php';
    }

    /**
     * @dataProvider crossCheckLoadersDumpers
     */
    public function testCrossCheck(\$fixture, \$type)
    {
        \$loaderClass = 'Symfony\\\\Component\\\\DependencyInjection\\\\Loader\\\\'.ucfirst(\$type).'FileLoader';
        \$dumperClass = 'Symfony\\\\Component\\\\DependencyInjection\\\\Dumper\\\\'.ucfirst(\$type).'Dumper';

        \$tmp = tempnam(sys_get_temp_dir(), 'sf');

        copy(self::\$fixturesPath.'/'.\$type.'/'.\$fixture, \$tmp);

        \$container1 = new ContainerBuilder();
        \$loader1 = new \$loaderClass(\$container1, new FileLocator());
        \$loader1->load(\$tmp);

        \$dumper = new \$dumperClass(\$container1);
        file_put_contents(\$tmp, \$dumper->dump());

        \$container2 = new ContainerBuilder();
        \$loader2 = new \$loaderClass(\$container2, new FileLocator());
        \$loader2->load(\$tmp);

        unlink(\$tmp);

        \$this->assertEquals(\$container2->getAliases(), \$container1->getAliases(), 'loading a dump from a previously loaded container returns the same container');
        \$this->assertEquals(\$container2->getDefinitions(), \$container1->getDefinitions(), 'loading a dump from a previously loaded container returns the same container');
        \$this->assertEquals(\$container2->getParameterBag()->all(), \$container1->getParameterBag()->all(), '->getParameterBag() returns the same value for both containers');
        \$this->assertEquals(serialize(\$container2), serialize(\$container1), 'loading a dump from a previously loaded container returns the same container');

        \$services1 = [];
        foreach (\$container1 as \$id => \$service) {
            \$services1[\$id] = serialize(\$service);
        }
        \$services2 = [];
        foreach (\$container2 as \$id => \$service) {
            \$services2[\$id] = serialize(\$service);
        }

        unset(\$services1['service_container'], \$services2['service_container']);

        \$this->assertEquals(\$services2, \$services1, 'Iterator on the containers returns the same services');
    }

    public function crossCheckLoadersDumpers()
    {
        return [
            ['services1.xml', 'xml'],
            ['services2.xml', 'xml'],
            ['services6.xml', 'xml'],
            ['services8.xml', 'xml'],
            ['services9.xml', 'xml'],
            ['services1.yml', 'yaml'],
            ['services2.yml', 'yaml'],
            ['services6.yml', 'yaml'],
            ['services8.yml', 'yaml'],
            ['services9.yml', 'yaml'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/CrossCheckTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class CrossCheckTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = __DIR__.'/Fixtures/';

        require_once self::\$fixturesPath.'/includes/classes.php';
        require_once self::\$fixturesPath.'/includes/foo.php';
    }

    /**
     * @dataProvider crossCheckLoadersDumpers
     */
    public function testCrossCheck(\$fixture, \$type)
    {
        \$loaderClass = 'Symfony\\\\Component\\\\DependencyInjection\\\\Loader\\\\'.ucfirst(\$type).'FileLoader';
        \$dumperClass = 'Symfony\\\\Component\\\\DependencyInjection\\\\Dumper\\\\'.ucfirst(\$type).'Dumper';

        \$tmp = tempnam(sys_get_temp_dir(), 'sf');

        copy(self::\$fixturesPath.'/'.\$type.'/'.\$fixture, \$tmp);

        \$container1 = new ContainerBuilder();
        \$loader1 = new \$loaderClass(\$container1, new FileLocator());
        \$loader1->load(\$tmp);

        \$dumper = new \$dumperClass(\$container1);
        file_put_contents(\$tmp, \$dumper->dump());

        \$container2 = new ContainerBuilder();
        \$loader2 = new \$loaderClass(\$container2, new FileLocator());
        \$loader2->load(\$tmp);

        unlink(\$tmp);

        \$this->assertEquals(\$container2->getAliases(), \$container1->getAliases(), 'loading a dump from a previously loaded container returns the same container');
        \$this->assertEquals(\$container2->getDefinitions(), \$container1->getDefinitions(), 'loading a dump from a previously loaded container returns the same container');
        \$this->assertEquals(\$container2->getParameterBag()->all(), \$container1->getParameterBag()->all(), '->getParameterBag() returns the same value for both containers');
        \$this->assertEquals(serialize(\$container2), serialize(\$container1), 'loading a dump from a previously loaded container returns the same container');

        \$services1 = [];
        foreach (\$container1 as \$id => \$service) {
            \$services1[\$id] = serialize(\$service);
        }
        \$services2 = [];
        foreach (\$container2 as \$id => \$service) {
            \$services2[\$id] = serialize(\$service);
        }

        unset(\$services1['service_container'], \$services2['service_container']);

        \$this->assertEquals(\$services2, \$services1, 'Iterator on the containers returns the same services');
    }

    public function crossCheckLoadersDumpers()
    {
        return [
            ['services1.xml', 'xml'],
            ['services2.xml', 'xml'],
            ['services6.xml', 'xml'],
            ['services8.xml', 'xml'],
            ['services9.xml', 'xml'],
            ['services1.yml', 'yaml'],
            ['services2.yml', 'yaml'],
            ['services6.yml', 'yaml'],
            ['services8.yml', 'yaml'],
            ['services9.yml', 'yaml'],
        ];
    }
}
", "vendor/symfony/dependency-injection/Tests/CrossCheckTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/CrossCheckTest.php");
    }
}
