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

/* vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataFactoryTest.php */
class __TwigTemplate_ecfaebad925bcb58f1bcb26799ba9b89383e060840eab409ed19de03c2b93f1b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataFactoryTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\ControllerMetadata;

use Fake\\ImportedAndFake;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\Controller\\BasicTypesController;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\Controller\\NullableController;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\Controller\\VariadicController;

class ArgumentMetadataFactoryTest extends TestCase
{
    /**
     * @var ArgumentMetadataFactory
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->factory = new ArgumentMetadataFactory();
    }

    public function testSignature1()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature1']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', self::class, false, false, null),
            new ArgumentMetadata('bar', 'array', false, false, null),
            new ArgumentMetadata('baz', 'callable', false, false, null),
        ], \$arguments);
    }

    public function testSignature2()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature2']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', self::class, false, true, null, true),
            new ArgumentMetadata('bar', __NAMESPACE__.'\\FakeClassThatDoesNotExist', false, true, null, true),
            new ArgumentMetadata('baz', 'Fake\\ImportedAndFake', false, true, null, true),
        ], \$arguments);
    }

    public function testSignature3()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature3']);

        \$this->assertEquals([
            new ArgumentMetadata('bar', __NAMESPACE__.'\\FakeClassThatDoesNotExist', false, false, null),
            new ArgumentMetadata('baz', 'Fake\\ImportedAndFake', false, false, null),
        ], \$arguments);
    }

    public function testSignature4()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature4']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', null, false, true, 'default'),
            new ArgumentMetadata('bar', null, false, true, 500),
            new ArgumentMetadata('baz', null, false, true, []),
        ], \$arguments);
    }

    public function testSignature5()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature5']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', 'array', false, true, null, true),
            new ArgumentMetadata('bar', null, false, false, null),
        ], \$arguments);
    }

    public function testVariadicSignature()
    {
        \$arguments = \$this->factory->createArgumentMetadata([new VariadicController(), 'action']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', null, false, false, null),
            new ArgumentMetadata('bar', null, true, false, null),
        ], \$arguments);
    }

    public function testBasicTypesSignature()
    {
        \$arguments = \$this->factory->createArgumentMetadata([new BasicTypesController(), 'action']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', 'string', false, false, null),
            new ArgumentMetadata('bar', 'int', false, false, null),
            new ArgumentMetadata('baz', 'float', false, false, null),
        ], \$arguments);
    }

    public function testNullableTypesSignature()
    {
        \$arguments = \$this->factory->createArgumentMetadata([new NullableController(), 'action']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', 'string', false, false, null, true),
            new ArgumentMetadata('bar', \\stdClass::class, false, false, null, true),
            new ArgumentMetadata('baz', 'string', false, true, 'value', true),
            new ArgumentMetadata('mandatory', null, false, false, null, true),
        ], \$arguments);
    }

    private function signature1(self \$foo, array \$bar, callable \$baz)
    {
    }

    private function signature2(self \$foo = null, FakeClassThatDoesNotExist \$bar = null, ImportedAndFake \$baz = null)
    {
    }

    private function signature3(FakeClassThatDoesNotExist \$bar, ImportedAndFake \$baz)
    {
    }

    private function signature4(\$foo = 'default', \$bar = 500, \$baz = [])
    {
    }

    private function signature5(array \$foo = null, \$bar)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataFactoryTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\ControllerMetadata;

use Fake\\ImportedAndFake;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\Controller\\BasicTypesController;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\Controller\\NullableController;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\Controller\\VariadicController;

class ArgumentMetadataFactoryTest extends TestCase
{
    /**
     * @var ArgumentMetadataFactory
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->factory = new ArgumentMetadataFactory();
    }

    public function testSignature1()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature1']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', self::class, false, false, null),
            new ArgumentMetadata('bar', 'array', false, false, null),
            new ArgumentMetadata('baz', 'callable', false, false, null),
        ], \$arguments);
    }

    public function testSignature2()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature2']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', self::class, false, true, null, true),
            new ArgumentMetadata('bar', __NAMESPACE__.'\\FakeClassThatDoesNotExist', false, true, null, true),
            new ArgumentMetadata('baz', 'Fake\\ImportedAndFake', false, true, null, true),
        ], \$arguments);
    }

    public function testSignature3()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature3']);

        \$this->assertEquals([
            new ArgumentMetadata('bar', __NAMESPACE__.'\\FakeClassThatDoesNotExist', false, false, null),
            new ArgumentMetadata('baz', 'Fake\\ImportedAndFake', false, false, null),
        ], \$arguments);
    }

    public function testSignature4()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature4']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', null, false, true, 'default'),
            new ArgumentMetadata('bar', null, false, true, 500),
            new ArgumentMetadata('baz', null, false, true, []),
        ], \$arguments);
    }

    public function testSignature5()
    {
        \$arguments = \$this->factory->createArgumentMetadata([\$this, 'signature5']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', 'array', false, true, null, true),
            new ArgumentMetadata('bar', null, false, false, null),
        ], \$arguments);
    }

    public function testVariadicSignature()
    {
        \$arguments = \$this->factory->createArgumentMetadata([new VariadicController(), 'action']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', null, false, false, null),
            new ArgumentMetadata('bar', null, true, false, null),
        ], \$arguments);
    }

    public function testBasicTypesSignature()
    {
        \$arguments = \$this->factory->createArgumentMetadata([new BasicTypesController(), 'action']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', 'string', false, false, null),
            new ArgumentMetadata('bar', 'int', false, false, null),
            new ArgumentMetadata('baz', 'float', false, false, null),
        ], \$arguments);
    }

    public function testNullableTypesSignature()
    {
        \$arguments = \$this->factory->createArgumentMetadata([new NullableController(), 'action']);

        \$this->assertEquals([
            new ArgumentMetadata('foo', 'string', false, false, null, true),
            new ArgumentMetadata('bar', \\stdClass::class, false, false, null, true),
            new ArgumentMetadata('baz', 'string', false, true, 'value', true),
            new ArgumentMetadata('mandatory', null, false, false, null, true),
        ], \$arguments);
    }

    private function signature1(self \$foo, array \$bar, callable \$baz)
    {
    }

    private function signature2(self \$foo = null, FakeClassThatDoesNotExist \$bar = null, ImportedAndFake \$baz = null)
    {
    }

    private function signature3(FakeClassThatDoesNotExist \$bar, ImportedAndFake \$baz)
    {
    }

    private function signature4(\$foo = 'default', \$bar = 500, \$baz = [])
    {
    }

    private function signature5(array \$foo = null, \$bar)
    {
    }
}
", "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataFactoryTest.php");
    }
}
