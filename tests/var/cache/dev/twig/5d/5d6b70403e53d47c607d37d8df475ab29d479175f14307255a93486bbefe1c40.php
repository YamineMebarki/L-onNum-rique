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

/* vendor/symfony/dependency-injection/Tests/ChildDefinitionTest.php */
class __TwigTemplate_fb0169c34f0a4d94145e67b3b3c3e34e98aede8255080b33035145ab50eabeae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/ChildDefinitionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/ChildDefinitionTest.php"));

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
use Symfony\\Component\\DependencyInjection\\ChildDefinition;

class ChildDefinitionTest extends TestCase
{
    public function testConstructor()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertSame('foo', \$def->getParent());
        \$this->assertSame([], \$def->getChanges());
    }

    /**
     * @dataProvider getPropertyTests
     */
    public function testSetProperty(\$property, \$changeKey)
    {
        \$def = new ChildDefinition('foo');

        \$getter = 'get'.ucfirst(\$property);
        \$setter = 'set'.ucfirst(\$property);

        \$this->assertNull(\$def->\$getter());
        \$this->assertSame(\$def, \$def->\$setter('foo'));
        \$this->assertSame('foo', \$def->\$getter());
        \$this->assertSame([\$changeKey => true], \$def->getChanges());
    }

    public function getPropertyTests()
    {
        return [
            ['class', 'class'],
            ['factory', 'factory'],
            ['configurator', 'configurator'],
            ['file', 'file'],
        ];
    }

    public function testSetPublic()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertTrue(\$def->isPublic());
        \$this->assertSame(\$def, \$def->setPublic(false));
        \$this->assertFalse(\$def->isPublic());
        \$this->assertSame(['public' => true], \$def->getChanges());
    }

    public function testSetLazy()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertFalse(\$def->isLazy());
        \$this->assertSame(\$def, \$def->setLazy(false));
        \$this->assertFalse(\$def->isLazy());
        \$this->assertSame(['lazy' => true], \$def->getChanges());
    }

    public function testSetAutowired()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertFalse(\$def->isAutowired());
        \$this->assertSame(\$def, \$def->setAutowired(true));
        \$this->assertTrue(\$def->isAutowired());
        \$this->assertSame(['autowired' => true], \$def->getChanges());
    }

    public function testSetArgument()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertSame([], \$def->getArguments());
        \$this->assertSame(\$def, \$def->replaceArgument(0, 'foo'));
        \$this->assertSame(['index_0' => 'foo'], \$def->getArguments());
    }

    public function testReplaceArgumentShouldRequireIntegerIndex()
    {
        \$this->expectException('InvalidArgumentException');
        \$def = new ChildDefinition('foo');

        \$def->replaceArgument('0', 'foo');
    }

    public function testReplaceArgument()
    {
        \$def = new ChildDefinition('foo');

        \$def->setArguments([0 => 'foo', 1 => 'bar']);
        \$this->assertSame('foo', \$def->getArgument(0));
        \$this->assertSame('bar', \$def->getArgument(1));

        \$this->assertSame(\$def, \$def->replaceArgument(1, 'baz'));
        \$this->assertSame('foo', \$def->getArgument(0));
        \$this->assertSame('baz', \$def->getArgument(1));

        \$this->assertSame([0 => 'foo', 1 => 'bar', 'index_1' => 'baz'], \$def->getArguments());

        \$this->assertSame(\$def, \$def->replaceArgument('\$bar', 'val'));
        \$this->assertSame('val', \$def->getArgument('\$bar'));
        \$this->assertSame([0 => 'foo', 1 => 'bar', 'index_1' => 'baz', '\$bar' => 'val'], \$def->getArguments());
    }

    public function testGetArgumentShouldCheckBounds()
    {
        \$this->expectException('OutOfBoundsException');
        \$def = new ChildDefinition('foo');

        \$def->setArguments([0 => 'foo']);
        \$def->replaceArgument(0, 'foo');

        \$def->getArgument(1);
    }

    public function testCannotCallSetAutoconfigured()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException');
        \$def = new ChildDefinition('foo');
        \$def->setAutoconfigured(true);
    }

    public function testCannotCallSetInstanceofConditionals()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException');
        \$def = new ChildDefinition('foo');
        \$def->setInstanceofConditionals(['Foo' => new ChildDefinition('')]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/ChildDefinitionTest.php";
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
use Symfony\\Component\\DependencyInjection\\ChildDefinition;

class ChildDefinitionTest extends TestCase
{
    public function testConstructor()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertSame('foo', \$def->getParent());
        \$this->assertSame([], \$def->getChanges());
    }

    /**
     * @dataProvider getPropertyTests
     */
    public function testSetProperty(\$property, \$changeKey)
    {
        \$def = new ChildDefinition('foo');

        \$getter = 'get'.ucfirst(\$property);
        \$setter = 'set'.ucfirst(\$property);

        \$this->assertNull(\$def->\$getter());
        \$this->assertSame(\$def, \$def->\$setter('foo'));
        \$this->assertSame('foo', \$def->\$getter());
        \$this->assertSame([\$changeKey => true], \$def->getChanges());
    }

    public function getPropertyTests()
    {
        return [
            ['class', 'class'],
            ['factory', 'factory'],
            ['configurator', 'configurator'],
            ['file', 'file'],
        ];
    }

    public function testSetPublic()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertTrue(\$def->isPublic());
        \$this->assertSame(\$def, \$def->setPublic(false));
        \$this->assertFalse(\$def->isPublic());
        \$this->assertSame(['public' => true], \$def->getChanges());
    }

    public function testSetLazy()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertFalse(\$def->isLazy());
        \$this->assertSame(\$def, \$def->setLazy(false));
        \$this->assertFalse(\$def->isLazy());
        \$this->assertSame(['lazy' => true], \$def->getChanges());
    }

    public function testSetAutowired()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertFalse(\$def->isAutowired());
        \$this->assertSame(\$def, \$def->setAutowired(true));
        \$this->assertTrue(\$def->isAutowired());
        \$this->assertSame(['autowired' => true], \$def->getChanges());
    }

    public function testSetArgument()
    {
        \$def = new ChildDefinition('foo');

        \$this->assertSame([], \$def->getArguments());
        \$this->assertSame(\$def, \$def->replaceArgument(0, 'foo'));
        \$this->assertSame(['index_0' => 'foo'], \$def->getArguments());
    }

    public function testReplaceArgumentShouldRequireIntegerIndex()
    {
        \$this->expectException('InvalidArgumentException');
        \$def = new ChildDefinition('foo');

        \$def->replaceArgument('0', 'foo');
    }

    public function testReplaceArgument()
    {
        \$def = new ChildDefinition('foo');

        \$def->setArguments([0 => 'foo', 1 => 'bar']);
        \$this->assertSame('foo', \$def->getArgument(0));
        \$this->assertSame('bar', \$def->getArgument(1));

        \$this->assertSame(\$def, \$def->replaceArgument(1, 'baz'));
        \$this->assertSame('foo', \$def->getArgument(0));
        \$this->assertSame('baz', \$def->getArgument(1));

        \$this->assertSame([0 => 'foo', 1 => 'bar', 'index_1' => 'baz'], \$def->getArguments());

        \$this->assertSame(\$def, \$def->replaceArgument('\$bar', 'val'));
        \$this->assertSame('val', \$def->getArgument('\$bar'));
        \$this->assertSame([0 => 'foo', 1 => 'bar', 'index_1' => 'baz', '\$bar' => 'val'], \$def->getArguments());
    }

    public function testGetArgumentShouldCheckBounds()
    {
        \$this->expectException('OutOfBoundsException');
        \$def = new ChildDefinition('foo');

        \$def->setArguments([0 => 'foo']);
        \$def->replaceArgument(0, 'foo');

        \$def->getArgument(1);
    }

    public function testCannotCallSetAutoconfigured()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException');
        \$def = new ChildDefinition('foo');
        \$def->setAutoconfigured(true);
    }

    public function testCannotCallSetInstanceofConditionals()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException');
        \$def = new ChildDefinition('foo');
        \$def->setInstanceofConditionals(['Foo' => new ChildDefinition('')]);
    }
}
", "vendor/symfony/dependency-injection/Tests/ChildDefinitionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/ChildDefinitionTest.php");
    }
}
