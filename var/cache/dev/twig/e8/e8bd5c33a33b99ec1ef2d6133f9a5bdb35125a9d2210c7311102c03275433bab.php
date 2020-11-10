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

/* vendor/symfony/dependency-injection/Tests/Dumper/GraphvizDumperTest.php */
class __TwigTemplate_29111a77481cc4be7d12527097f98ccf56862b0c550cec4c149e0e26a34f6ac3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Dumper/GraphvizDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Dumper/GraphvizDumperTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\GraphvizDumper;
use Symfony\\Component\\DependencyInjection\\Reference;

class GraphvizDumperTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = __DIR__.'/../Fixtures/';
    }

    public function testDump()
    {
        \$dumper = new GraphvizDumper(\$container = new ContainerBuilder());

        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services1.dot', \$dumper->dump(), '->dump() dumps an empty container as an empty dot file');

        \$container = include self::\$fixturesPath.'/containers/container9.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services9.dot', \$dumper->dump(), '->dump() dumps services');

        \$container = include self::\$fixturesPath.'/containers/container10.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services10.dot', \$dumper->dump(), '->dump() dumps services');

        \$container = include self::\$fixturesPath.'/containers/container10.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertEquals(\$dumper->dump([
            'graph' => ['ratio' => 'normal'],
            'node' => ['fontsize' => 13, 'fontname' => 'Verdana', 'shape' => 'square'],
            'edge' => ['fontsize' => 12, 'fontname' => 'Verdana', 'color' => 'white', 'arrowhead' => 'closed', 'arrowsize' => 1],
            'node.instance' => ['fillcolor' => 'green', 'style' => 'empty'],
            'node.definition' => ['fillcolor' => 'grey'],
            'node.missing' => ['fillcolor' => 'red', 'style' => 'empty'],
        ]), file_get_contents(self::\$fixturesPath.'/graphviz/services10-1.dot'), '->dump() dumps services');
    }

    public function testDumpWithFrozenContainer()
    {
        \$container = include self::\$fixturesPath.'/containers/container13.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services13.dot', \$dumper->dump(), '->dump() dumps services');
    }

    public function testDumpWithFrozenCustomClassContainer()
    {
        \$container = include self::\$fixturesPath.'/containers/container14.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services14.dot', \$dumper->dump(), '->dump() dumps services');
    }

    public function testDumpWithUnresolvedParameter()
    {
        \$container = include self::\$fixturesPath.'/containers/container17.php';
        \$dumper = new GraphvizDumper(\$container);

        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services17.dot', \$dumper->dump(), '->dump() dumps services');
    }

    public function testDumpWithInlineDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->addArgument(
            (new Definition('stdClass'))->addArgument(new Reference('bar'))
        );
        \$container->register('bar', 'stdClass');
        \$dumper = new GraphvizDumper(\$container);

        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services_inline.dot', \$dumper->dump(), '->dump() dumps nested references');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Dumper/GraphvizDumperTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\GraphvizDumper;
use Symfony\\Component\\DependencyInjection\\Reference;

class GraphvizDumperTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = __DIR__.'/../Fixtures/';
    }

    public function testDump()
    {
        \$dumper = new GraphvizDumper(\$container = new ContainerBuilder());

        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services1.dot', \$dumper->dump(), '->dump() dumps an empty container as an empty dot file');

        \$container = include self::\$fixturesPath.'/containers/container9.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services9.dot', \$dumper->dump(), '->dump() dumps services');

        \$container = include self::\$fixturesPath.'/containers/container10.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services10.dot', \$dumper->dump(), '->dump() dumps services');

        \$container = include self::\$fixturesPath.'/containers/container10.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertEquals(\$dumper->dump([
            'graph' => ['ratio' => 'normal'],
            'node' => ['fontsize' => 13, 'fontname' => 'Verdana', 'shape' => 'square'],
            'edge' => ['fontsize' => 12, 'fontname' => 'Verdana', 'color' => 'white', 'arrowhead' => 'closed', 'arrowsize' => 1],
            'node.instance' => ['fillcolor' => 'green', 'style' => 'empty'],
            'node.definition' => ['fillcolor' => 'grey'],
            'node.missing' => ['fillcolor' => 'red', 'style' => 'empty'],
        ]), file_get_contents(self::\$fixturesPath.'/graphviz/services10-1.dot'), '->dump() dumps services');
    }

    public function testDumpWithFrozenContainer()
    {
        \$container = include self::\$fixturesPath.'/containers/container13.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services13.dot', \$dumper->dump(), '->dump() dumps services');
    }

    public function testDumpWithFrozenCustomClassContainer()
    {
        \$container = include self::\$fixturesPath.'/containers/container14.php';
        \$dumper = new GraphvizDumper(\$container);
        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services14.dot', \$dumper->dump(), '->dump() dumps services');
    }

    public function testDumpWithUnresolvedParameter()
    {
        \$container = include self::\$fixturesPath.'/containers/container17.php';
        \$dumper = new GraphvizDumper(\$container);

        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services17.dot', \$dumper->dump(), '->dump() dumps services');
    }

    public function testDumpWithInlineDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->addArgument(
            (new Definition('stdClass'))->addArgument(new Reference('bar'))
        );
        \$container->register('bar', 'stdClass');
        \$dumper = new GraphvizDumper(\$container);

        \$this->assertStringEqualsFile(self::\$fixturesPath.'/graphviz/services_inline.dot', \$dumper->dump(), '->dump() dumps nested references');
    }
}
", "vendor/symfony/dependency-injection/Tests/Dumper/GraphvizDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Dumper/GraphvizDumperTest.php");
    }
}
