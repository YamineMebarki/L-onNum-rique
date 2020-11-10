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

/* vendor/symfony/form/Tests/Extension/DependencyInjection/DependencyInjectionExtensionTest.php */
class __TwigTemplate_01dcfd2900565772ccd2a3082c810c1bd4d0ffb4d4a54b07a7e3846931ccff03 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/DependencyInjection/DependencyInjectionExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/DependencyInjection/DependencyInjectionExtensionTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension;
use Symfony\\Component\\Form\\FormTypeGuesserChain;
use Symfony\\Component\\Form\\FormTypeGuesserInterface;

class DependencyInjectionExtensionTest extends TestCase
{
    public function testGetTypeExtensions()
    {
        \$typeExtension1 = new TestTypeExtension();
        \$typeExtension2 = new TestTypeExtension();
        \$typeExtension3 = new OtherTypeExtension();
        \$typeExtension4 = new MultipleTypesTypeExtension();

        \$extensions = [
            'test' => new \\ArrayIterator([\$typeExtension1, \$typeExtension2, \$typeExtension4]),
            'other' => new \\ArrayIterator([\$typeExtension3, \$typeExtension4]),
        ];

        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), \$extensions, []);

        \$this->assertTrue(\$extension->hasTypeExtensions('test'));
        \$this->assertTrue(\$extension->hasTypeExtensions('other'));
        \$this->assertFalse(\$extension->hasTypeExtensions('unknown'));
        \$this->assertSame([\$typeExtension1, \$typeExtension2, \$typeExtension4], \$extension->getTypeExtensions('test'));
        \$this->assertSame([\$typeExtension3, \$typeExtension4], \$extension->getTypeExtensions('other'));
    }

    public function testThrowExceptionForInvalidExtendedType()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$extensions = [
            'unmatched' => new \\ArrayIterator([new TestTypeExtension()]),
        ];

        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), \$extensions, []);

        \$extension->getTypeExtensions('unmatched');
    }

    public function testGetTypeGuesser()
    {
        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), [], [\$this->getMockBuilder(FormTypeGuesserInterface::class)->getMock()]);

        \$this->assertInstanceOf(FormTypeGuesserChain::class, \$extension->getTypeGuesser());
    }

    public function testGetTypeGuesserReturnsNullWhenNoTypeGuessersHaveBeenConfigured()
    {
        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), [], []);

        \$this->assertNull(\$extension->getTypeGuesser());
    }
}

class TestTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return ['test'];
    }
}

class OtherTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return ['other'];
    }
}

class MultipleTypesTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        yield 'test';
        yield 'other';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/DependencyInjection/DependencyInjectionExtensionTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension;
use Symfony\\Component\\Form\\FormTypeGuesserChain;
use Symfony\\Component\\Form\\FormTypeGuesserInterface;

class DependencyInjectionExtensionTest extends TestCase
{
    public function testGetTypeExtensions()
    {
        \$typeExtension1 = new TestTypeExtension();
        \$typeExtension2 = new TestTypeExtension();
        \$typeExtension3 = new OtherTypeExtension();
        \$typeExtension4 = new MultipleTypesTypeExtension();

        \$extensions = [
            'test' => new \\ArrayIterator([\$typeExtension1, \$typeExtension2, \$typeExtension4]),
            'other' => new \\ArrayIterator([\$typeExtension3, \$typeExtension4]),
        ];

        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), \$extensions, []);

        \$this->assertTrue(\$extension->hasTypeExtensions('test'));
        \$this->assertTrue(\$extension->hasTypeExtensions('other'));
        \$this->assertFalse(\$extension->hasTypeExtensions('unknown'));
        \$this->assertSame([\$typeExtension1, \$typeExtension2, \$typeExtension4], \$extension->getTypeExtensions('test'));
        \$this->assertSame([\$typeExtension3, \$typeExtension4], \$extension->getTypeExtensions('other'));
    }

    public function testThrowExceptionForInvalidExtendedType()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$extensions = [
            'unmatched' => new \\ArrayIterator([new TestTypeExtension()]),
        ];

        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), \$extensions, []);

        \$extension->getTypeExtensions('unmatched');
    }

    public function testGetTypeGuesser()
    {
        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), [], [\$this->getMockBuilder(FormTypeGuesserInterface::class)->getMock()]);

        \$this->assertInstanceOf(FormTypeGuesserChain::class, \$extension->getTypeGuesser());
    }

    public function testGetTypeGuesserReturnsNullWhenNoTypeGuessersHaveBeenConfigured()
    {
        \$extension = new DependencyInjectionExtension(new ContainerBuilder(), [], []);

        \$this->assertNull(\$extension->getTypeGuesser());
    }
}

class TestTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return ['test'];
    }
}

class OtherTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return ['other'];
    }
}

class MultipleTypesTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        yield 'test';
        yield 'other';
    }
}
", "vendor/symfony/form/Tests/Extension/DependencyInjection/DependencyInjectionExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/DependencyInjection/DependencyInjectionExtensionTest.php");
    }
}
