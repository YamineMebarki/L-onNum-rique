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

/* vendor/symfony/form/Tests/FormRegistryTest.php */
class __TwigTemplate_93723686853671acb3e14a2fa226e2a534ef31ca33a2ba87ae265d1c3f6a34bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormRegistryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormRegistryTest.php"));

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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormRegistry;
use Symfony\\Component\\Form\\FormTypeGuesserChain;
use Symfony\\Component\\Form\\ResolvedFormType;
use Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooSubType;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooType;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooTypeBarExtension;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooTypeBazExtension;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType;
use Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBar;
use Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBaz;
use Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo;
use Symfony\\Component\\Form\\Tests\\Fixtures\\TestExtension;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormRegistryTest extends TestCase
{
    /**
     * @var FormRegistry
     */
    private \$registry;

    /**
     * @var MockObject|ResolvedFormTypeFactoryInterface
     */
    private \$resolvedTypeFactory;

    /**
     * @var MockObject
     */
    private \$guesser1;

    /**
     * @var MockObject
     */
    private \$guesser2;

    /**
     * @var TestExtension
     */
    private \$extension1;

    /**
     * @var TestExtension
     */
    private \$extension2;

    protected function setUp(): void
    {
        \$this->resolvedTypeFactory = \$this->getMockBuilder('Symfony\\Component\\Form\\ResolvedFormTypeFactory')->getMock();
        \$this->guesser1 = \$this->getMockBuilder('Symfony\\Component\\Form\\FormTypeGuesserInterface')->getMock();
        \$this->guesser2 = \$this->getMockBuilder('Symfony\\Component\\Form\\FormTypeGuesserInterface')->getMock();
        \$this->extension1 = new TestExtension(\$this->guesser1);
        \$this->extension2 = new TestExtension(\$this->guesser2);
        \$this->registry = new FormRegistry([
            \$this->extension1,
            \$this->extension2,
        ], \$this->resolvedTypeFactory);
    }

    public function testGetTypeFromExtension()
    {
        \$type = new FooType();
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->extension2->addType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type)
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType(\\get_class(\$type)));
    }

    public function testLoadUnregisteredType()
    {
        \$type = new FooType();
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type)
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType('Symfony\\Component\\Form\\Tests\\Fixtures\\FooType'));
    }

    public function testFailIfUnregisteredTypeNoClass()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->registry->getType('Symfony\\Blubb');
    }

    public function testFailIfUnregisteredTypeNoFormType()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->registry->getType('stdClass');
    }

    public function testGetTypeWithTypeExtensions()
    {
        \$type = new FooType();
        \$ext1 = new FooTypeBarExtension();
        \$ext2 = new FooTypeBazExtension();
        \$resolvedType = new ResolvedFormType(\$type, [\$ext1, \$ext2]);

        \$this->extension2->addType(\$type);
        \$this->extension1->addTypeExtension(\$ext1);
        \$this->extension2->addTypeExtension(\$ext2);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type, [\$ext1, \$ext2])
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType(\\get_class(\$type)));
    }

    public function testGetTypeConnectsParent()
    {
        \$parentType = new FooType();
        \$type = new FooSubType();
        \$parentResolvedType = new ResolvedFormType(\$parentType);
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->extension1->addType(\$parentType);
        \$this->extension2->addType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->at(0))
            ->method('createResolvedType')
            ->with(\$parentType)
            ->willReturn(\$parentResolvedType);

        \$this->resolvedTypeFactory->expects(\$this->at(1))
            ->method('createResolvedType')
            ->with(\$type, [], \$parentResolvedType)
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType(\\get_class(\$type)));
    }

    public function testFormCannotHaveItselfAsAParent()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\LogicException');
        \$this->expectExceptionMessage('Circular reference detected for form type \"Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType\" (Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType > Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType).');
        \$type = new FormWithSameParentType();

        \$this->extension2->addType(\$type);

        \$this->registry->getType(FormWithSameParentType::class);
    }

    public function testRecursiveFormDependencies()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\LogicException');
        \$this->expectExceptionMessage('Circular reference detected for form type \"Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo\" (Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo > Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBar > Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBaz > Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo).');
        \$foo = new RecursiveFormTypeFoo();
        \$bar = new RecursiveFormTypeBar();
        \$baz = new RecursiveFormTypeBaz();

        \$this->extension2->addType(\$foo);
        \$this->extension2->addType(\$bar);
        \$this->extension2->addType(\$baz);

        \$this->registry->getType(RecursiveFormTypeFoo::class);
    }

    public function testGetTypeThrowsExceptionIfTypeNotFound()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->registry->getType('bar');
    }

    public function testHasTypeAfterLoadingFromExtension()
    {
        \$type = new FooType();
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type)
            ->willReturn(\$resolvedType);

        \$this->extension2->addType(\$type);

        \$this->assertTrue(\$this->registry->hasType(\\get_class(\$type)));
    }

    public function testHasTypeIfFQCN()
    {
        \$this->assertTrue(\$this->registry->hasType('Symfony\\Component\\Form\\Tests\\Fixtures\\FooType'));
    }

    public function testDoesNotHaveTypeIfNonExistingClass()
    {
        \$this->assertFalse(\$this->registry->hasType('Symfony\\Blubb'));
    }

    public function testDoesNotHaveTypeIfNoFormType()
    {
        \$this->assertFalse(\$this->registry->hasType('stdClass'));
    }

    public function testGetTypeGuesser()
    {
        \$expectedGuesser = new FormTypeGuesserChain([\$this->guesser1, \$this->guesser2]);

        \$this->assertEquals(\$expectedGuesser, \$this->registry->getTypeGuesser());

        \$registry = new FormRegistry(
            [\$this->getMockBuilder('Symfony\\Component\\Form\\FormExtensionInterface')->getMock()],
            \$this->resolvedTypeFactory
        );

        \$this->assertNull(\$registry->getTypeGuesser());
    }

    public function testGetExtensions()
    {
        \$expectedExtensions = [\$this->extension1, \$this->extension2];

        \$this->assertEquals(\$expectedExtensions, \$this->registry->getExtensions());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/FormRegistryTest.php";
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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormRegistry;
use Symfony\\Component\\Form\\FormTypeGuesserChain;
use Symfony\\Component\\Form\\ResolvedFormType;
use Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooSubType;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooType;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooTypeBarExtension;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooTypeBazExtension;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType;
use Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBar;
use Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBaz;
use Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo;
use Symfony\\Component\\Form\\Tests\\Fixtures\\TestExtension;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormRegistryTest extends TestCase
{
    /**
     * @var FormRegistry
     */
    private \$registry;

    /**
     * @var MockObject|ResolvedFormTypeFactoryInterface
     */
    private \$resolvedTypeFactory;

    /**
     * @var MockObject
     */
    private \$guesser1;

    /**
     * @var MockObject
     */
    private \$guesser2;

    /**
     * @var TestExtension
     */
    private \$extension1;

    /**
     * @var TestExtension
     */
    private \$extension2;

    protected function setUp(): void
    {
        \$this->resolvedTypeFactory = \$this->getMockBuilder('Symfony\\Component\\Form\\ResolvedFormTypeFactory')->getMock();
        \$this->guesser1 = \$this->getMockBuilder('Symfony\\Component\\Form\\FormTypeGuesserInterface')->getMock();
        \$this->guesser2 = \$this->getMockBuilder('Symfony\\Component\\Form\\FormTypeGuesserInterface')->getMock();
        \$this->extension1 = new TestExtension(\$this->guesser1);
        \$this->extension2 = new TestExtension(\$this->guesser2);
        \$this->registry = new FormRegistry([
            \$this->extension1,
            \$this->extension2,
        ], \$this->resolvedTypeFactory);
    }

    public function testGetTypeFromExtension()
    {
        \$type = new FooType();
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->extension2->addType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type)
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType(\\get_class(\$type)));
    }

    public function testLoadUnregisteredType()
    {
        \$type = new FooType();
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type)
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType('Symfony\\Component\\Form\\Tests\\Fixtures\\FooType'));
    }

    public function testFailIfUnregisteredTypeNoClass()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->registry->getType('Symfony\\Blubb');
    }

    public function testFailIfUnregisteredTypeNoFormType()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->registry->getType('stdClass');
    }

    public function testGetTypeWithTypeExtensions()
    {
        \$type = new FooType();
        \$ext1 = new FooTypeBarExtension();
        \$ext2 = new FooTypeBazExtension();
        \$resolvedType = new ResolvedFormType(\$type, [\$ext1, \$ext2]);

        \$this->extension2->addType(\$type);
        \$this->extension1->addTypeExtension(\$ext1);
        \$this->extension2->addTypeExtension(\$ext2);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type, [\$ext1, \$ext2])
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType(\\get_class(\$type)));
    }

    public function testGetTypeConnectsParent()
    {
        \$parentType = new FooType();
        \$type = new FooSubType();
        \$parentResolvedType = new ResolvedFormType(\$parentType);
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->extension1->addType(\$parentType);
        \$this->extension2->addType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->at(0))
            ->method('createResolvedType')
            ->with(\$parentType)
            ->willReturn(\$parentResolvedType);

        \$this->resolvedTypeFactory->expects(\$this->at(1))
            ->method('createResolvedType')
            ->with(\$type, [], \$parentResolvedType)
            ->willReturn(\$resolvedType);

        \$this->assertSame(\$resolvedType, \$this->registry->getType(\\get_class(\$type)));
    }

    public function testFormCannotHaveItselfAsAParent()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\LogicException');
        \$this->expectExceptionMessage('Circular reference detected for form type \"Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType\" (Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType > Symfony\\Component\\Form\\Tests\\Fixtures\\FormWithSameParentType).');
        \$type = new FormWithSameParentType();

        \$this->extension2->addType(\$type);

        \$this->registry->getType(FormWithSameParentType::class);
    }

    public function testRecursiveFormDependencies()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\LogicException');
        \$this->expectExceptionMessage('Circular reference detected for form type \"Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo\" (Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo > Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBar > Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeBaz > Symfony\\Component\\Form\\Tests\\Fixtures\\RecursiveFormTypeFoo).');
        \$foo = new RecursiveFormTypeFoo();
        \$bar = new RecursiveFormTypeBar();
        \$baz = new RecursiveFormTypeBaz();

        \$this->extension2->addType(\$foo);
        \$this->extension2->addType(\$bar);
        \$this->extension2->addType(\$baz);

        \$this->registry->getType(RecursiveFormTypeFoo::class);
    }

    public function testGetTypeThrowsExceptionIfTypeNotFound()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->registry->getType('bar');
    }

    public function testHasTypeAfterLoadingFromExtension()
    {
        \$type = new FooType();
        \$resolvedType = new ResolvedFormType(\$type);

        \$this->resolvedTypeFactory->expects(\$this->once())
            ->method('createResolvedType')
            ->with(\$type)
            ->willReturn(\$resolvedType);

        \$this->extension2->addType(\$type);

        \$this->assertTrue(\$this->registry->hasType(\\get_class(\$type)));
    }

    public function testHasTypeIfFQCN()
    {
        \$this->assertTrue(\$this->registry->hasType('Symfony\\Component\\Form\\Tests\\Fixtures\\FooType'));
    }

    public function testDoesNotHaveTypeIfNonExistingClass()
    {
        \$this->assertFalse(\$this->registry->hasType('Symfony\\Blubb'));
    }

    public function testDoesNotHaveTypeIfNoFormType()
    {
        \$this->assertFalse(\$this->registry->hasType('stdClass'));
    }

    public function testGetTypeGuesser()
    {
        \$expectedGuesser = new FormTypeGuesserChain([\$this->guesser1, \$this->guesser2]);

        \$this->assertEquals(\$expectedGuesser, \$this->registry->getTypeGuesser());

        \$registry = new FormRegistry(
            [\$this->getMockBuilder('Symfony\\Component\\Form\\FormExtensionInterface')->getMock()],
            \$this->resolvedTypeFactory
        );

        \$this->assertNull(\$registry->getTypeGuesser());
    }

    public function testGetExtensions()
    {
        \$expectedExtensions = [\$this->extension1, \$this->extension2];

        \$this->assertEquals(\$expectedExtensions, \$this->registry->getExtensions());
    }
}
", "vendor/symfony/form/Tests/FormRegistryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/FormRegistryTest.php");
    }
}
