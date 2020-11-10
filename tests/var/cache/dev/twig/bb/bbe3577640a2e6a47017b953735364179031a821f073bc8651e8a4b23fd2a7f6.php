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

/* vendor/symfony/form/Tests/Extension/Csrf/Type/FormTypeCsrfExtensionTest.php */
class __TwigTemplate_8e053ac5e8e2548b94283b282a6970ed4d776b181bf1e163cf0e914fc10bb7de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Csrf/Type/FormTypeCsrfExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Csrf/Type/FormTypeCsrfExtensionTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Csrf\\Type;

use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Csrf\\CsrfExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class FormTypeCsrfExtensionTest_ChildType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // The form needs a child in order to trigger CSRF protection by
        // default
        \$builder->add('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
    }
}

class FormTypeCsrfExtensionTest extends TypeTestCase
{
    /**
     * @var MockObject
     */
    protected \$tokenManager;

    /**
     * @var MockObject
     */
    protected \$translator;

    protected function setUp(): void
    {
        \$this->tokenManager = \$this->getMockBuilder(CsrfTokenManagerInterface::class)->getMock();
        \$this->translator = \$this->getMockBuilder(TranslatorInterface::class)->getMock();

        parent::setUp();
    }

    protected function tearDown(): void
    {
        \$this->tokenManager = null;
        \$this->translator = null;

        parent::tearDown();
    }

    protected function getExtensions()
    {
        return array_merge(parent::getExtensions(), [
            new CsrfExtension(\$this->tokenManager, \$this->translator),
        ]);
    }

    public function testCsrfProtectionByDefaultIfRootAndCompound()
    {
        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'compound' => true,
            ])
            ->createView();

        \$this->assertArrayHasKey('csrf', \$view);
    }

    public function testNoCsrfProtectionByDefaultIfCompoundButNotRoot()
    {
        \$view = \$this->factory
            ->createNamedBuilder('root', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
            ->add(\$this->factory
                ->createNamedBuilder('form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                    'csrf_field_name' => 'csrf',
                    'compound' => true,
                ])
            )
            ->getForm()
            ->get('form')
            ->createView();

        \$this->assertArrayNotHasKey('csrf', \$view);
    }

    public function testNoCsrfProtectionByDefaultIfRootButNotCompound()
    {
        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'compound' => false,
            ])
            ->createView();

        \$this->assertArrayNotHasKey('csrf', \$view);
    }

    public function testCsrfProtectionCanBeDisabled()
    {
        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_protection' => false,
                'compound' => true,
            ])
            ->createView();

        \$this->assertArrayNotHasKey('csrf', \$view);
    }

    public function testGenerateCsrfToken()
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('getToken')
            ->with('TOKEN_ID')
            ->willReturn(new CsrfToken('TOKEN_ID', 'token'));

        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->createView();

        \$this->assertEquals('token', \$view['csrf']->vars['value']);
    }

    public function testGenerateCsrfTokenUsesFormNameAsIntentionByDefault()
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('getToken')
            ->with('FORM_NAME')
            ->willReturn(new CsrfToken('TOKEN_ID', 'token'));

        \$view = \$this->factory
            ->createNamed('FORM_NAME', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->createView();

        \$this->assertEquals('token', \$view['csrf']->vars['value']);
    }

    public function testGenerateCsrfTokenUsesTypeClassAsIntentionIfEmptyFormName()
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('getToken')
            ->with('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
            ->willReturn(new CsrfToken('TOKEN_ID', 'token'));

        \$view = \$this->factory
            ->createNamed('', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->createView();

        \$this->assertEquals('token', \$view['csrf']->vars['value']);
    }

    public function provideBoolean()
    {
        return [
            [true],
            [false],
        ];
    }

    /**
     * @dataProvider provideBoolean
     */
    public function testValidateTokenOnSubmitIfRootAndCompound(\$valid)
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(new CsrfToken('TOKEN_ID', 'token'))
            ->willReturn(\$valid);

        \$form = \$this->factory
            ->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertSame(\$valid, \$form->isValid());
    }

    /**
     * @dataProvider provideBoolean
     */
    public function testValidateTokenOnSubmitIfRootAndCompoundUsesFormNameAsIntentionByDefault(\$valid)
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(new CsrfToken('FORM_NAME', 'token'))
            ->willReturn(\$valid);

        \$form = \$this->factory
            ->createNamedBuilder('FORM_NAME', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertSame(\$valid, \$form->isValid());
    }

    /**
     * @dataProvider provideBoolean
     */
    public function testValidateTokenOnSubmitIfRootAndCompoundUsesTypeClassAsIntentionIfEmptyFormName(\$valid)
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(new CsrfToken('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'token'))
            ->willReturn(\$valid);

        \$form = \$this->factory
            ->createNamedBuilder('', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertSame(\$valid, \$form->isValid());
    }

    public function testFailIfRootAndCompoundAndTokenMissing()
    {
        \$this->tokenManager->expects(\$this->never())
            ->method('isTokenValid');

        \$form = \$this->factory
            ->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            // token is missing
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertFalse(\$form->isValid());
    }

    public function testDontValidateTokenIfCompoundButNoRoot()
    {
        \$this->tokenManager->expects(\$this->never())
            ->method('isTokenValid');

        \$form = \$this->factory
            ->createNamedBuilder('root', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
            ->add(\$this->factory
                ->createNamedBuilder('form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                    'csrf_field_name' => 'csrf',
                    'csrf_token_manager' => \$this->tokenManager,
                    'csrf_token_id' => 'TOKEN_ID',
                    'compound' => true,
                ])
            )
            ->getForm()
            ->get('form');

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);
    }

    public function testDontValidateTokenIfRootButNotCompound()
    {
        \$this->tokenManager->expects(\$this->never())
            ->method('isTokenValid');

        \$form = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => false,
            ]);

        \$form->submit([
            'csrf' => 'token',
        ]);
    }

    public function testNoCsrfProtectionOnPrototype()
    {
        \$prototypeView = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', null, [
                'entry_type' => __CLASS__.'_ChildType',
                'entry_options' => [
                    'csrf_field_name' => 'csrf',
                ],
                'prototype' => true,
                'allow_add' => true,
            ])
            ->createView()
            ->vars['prototype'];

        \$this->assertArrayNotHasKey('csrf', \$prototypeView);
        \$this->assertCount(1, \$prototypeView);
    }

    public function testsTranslateCustomErrorMessage()
    {
        \$csrfToken = new CsrfToken('TOKEN_ID', 'token');
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(\$csrfToken)
            ->willReturn(false);

        \$this->translator->expects(\$this->once())
             ->method('trans')
             ->with('Foobar')
             ->willReturn('[trans]Foobar[/trans]');

        \$form = \$this->factory
            ->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_message' => 'Foobar',
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->getForm();

        \$form->submit([
            'csrf' => 'token',
        ]);

        \$errors = \$form->getErrors();
        \$expected = new FormError('[trans]Foobar[/trans]', null, [], null, \$csrfToken);
        \$expected->setOrigin(\$form);

        \$this->assertGreaterThan(0, \\count(\$errors));
        \$this->assertEquals(\$expected, \$errors[0]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Csrf/Type/FormTypeCsrfExtensionTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Csrf\\Type;

use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Csrf\\CsrfExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class FormTypeCsrfExtensionTest_ChildType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // The form needs a child in order to trigger CSRF protection by
        // default
        \$builder->add('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
    }
}

class FormTypeCsrfExtensionTest extends TypeTestCase
{
    /**
     * @var MockObject
     */
    protected \$tokenManager;

    /**
     * @var MockObject
     */
    protected \$translator;

    protected function setUp(): void
    {
        \$this->tokenManager = \$this->getMockBuilder(CsrfTokenManagerInterface::class)->getMock();
        \$this->translator = \$this->getMockBuilder(TranslatorInterface::class)->getMock();

        parent::setUp();
    }

    protected function tearDown(): void
    {
        \$this->tokenManager = null;
        \$this->translator = null;

        parent::tearDown();
    }

    protected function getExtensions()
    {
        return array_merge(parent::getExtensions(), [
            new CsrfExtension(\$this->tokenManager, \$this->translator),
        ]);
    }

    public function testCsrfProtectionByDefaultIfRootAndCompound()
    {
        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'compound' => true,
            ])
            ->createView();

        \$this->assertArrayHasKey('csrf', \$view);
    }

    public function testNoCsrfProtectionByDefaultIfCompoundButNotRoot()
    {
        \$view = \$this->factory
            ->createNamedBuilder('root', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
            ->add(\$this->factory
                ->createNamedBuilder('form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                    'csrf_field_name' => 'csrf',
                    'compound' => true,
                ])
            )
            ->getForm()
            ->get('form')
            ->createView();

        \$this->assertArrayNotHasKey('csrf', \$view);
    }

    public function testNoCsrfProtectionByDefaultIfRootButNotCompound()
    {
        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'compound' => false,
            ])
            ->createView();

        \$this->assertArrayNotHasKey('csrf', \$view);
    }

    public function testCsrfProtectionCanBeDisabled()
    {
        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_protection' => false,
                'compound' => true,
            ])
            ->createView();

        \$this->assertArrayNotHasKey('csrf', \$view);
    }

    public function testGenerateCsrfToken()
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('getToken')
            ->with('TOKEN_ID')
            ->willReturn(new CsrfToken('TOKEN_ID', 'token'));

        \$view = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->createView();

        \$this->assertEquals('token', \$view['csrf']->vars['value']);
    }

    public function testGenerateCsrfTokenUsesFormNameAsIntentionByDefault()
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('getToken')
            ->with('FORM_NAME')
            ->willReturn(new CsrfToken('TOKEN_ID', 'token'));

        \$view = \$this->factory
            ->createNamed('FORM_NAME', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->createView();

        \$this->assertEquals('token', \$view['csrf']->vars['value']);
    }

    public function testGenerateCsrfTokenUsesTypeClassAsIntentionIfEmptyFormName()
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('getToken')
            ->with('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
            ->willReturn(new CsrfToken('TOKEN_ID', 'token'));

        \$view = \$this->factory
            ->createNamed('', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->createView();

        \$this->assertEquals('token', \$view['csrf']->vars['value']);
    }

    public function provideBoolean()
    {
        return [
            [true],
            [false],
        ];
    }

    /**
     * @dataProvider provideBoolean
     */
    public function testValidateTokenOnSubmitIfRootAndCompound(\$valid)
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(new CsrfToken('TOKEN_ID', 'token'))
            ->willReturn(\$valid);

        \$form = \$this->factory
            ->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertSame(\$valid, \$form->isValid());
    }

    /**
     * @dataProvider provideBoolean
     */
    public function testValidateTokenOnSubmitIfRootAndCompoundUsesFormNameAsIntentionByDefault(\$valid)
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(new CsrfToken('FORM_NAME', 'token'))
            ->willReturn(\$valid);

        \$form = \$this->factory
            ->createNamedBuilder('FORM_NAME', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertSame(\$valid, \$form->isValid());
    }

    /**
     * @dataProvider provideBoolean
     */
    public function testValidateTokenOnSubmitIfRootAndCompoundUsesTypeClassAsIntentionIfEmptyFormName(\$valid)
    {
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(new CsrfToken('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'token'))
            ->willReturn(\$valid);

        \$form = \$this->factory
            ->createNamedBuilder('', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertSame(\$valid, \$form->isValid());
    }

    public function testFailIfRootAndCompoundAndTokenMissing()
    {
        \$this->tokenManager->expects(\$this->never())
            ->method('isTokenValid');

        \$form = \$this->factory
            ->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->add('child', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->getForm();

        \$form->submit([
            'child' => 'foobar',
            // token is missing
        ]);

        // Remove token from data
        \$this->assertSame(['child' => 'foobar'], \$form->getData());

        // Validate accordingly
        \$this->assertFalse(\$form->isValid());
    }

    public function testDontValidateTokenIfCompoundButNoRoot()
    {
        \$this->tokenManager->expects(\$this->never())
            ->method('isTokenValid');

        \$form = \$this->factory
            ->createNamedBuilder('root', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
            ->add(\$this->factory
                ->createNamedBuilder('form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                    'csrf_field_name' => 'csrf',
                    'csrf_token_manager' => \$this->tokenManager,
                    'csrf_token_id' => 'TOKEN_ID',
                    'compound' => true,
                ])
            )
            ->getForm()
            ->get('form');

        \$form->submit([
            'child' => 'foobar',
            'csrf' => 'token',
        ]);
    }

    public function testDontValidateTokenIfRootButNotCompound()
    {
        \$this->tokenManager->expects(\$this->never())
            ->method('isTokenValid');

        \$form = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => false,
            ]);

        \$form->submit([
            'csrf' => 'token',
        ]);
    }

    public function testNoCsrfProtectionOnPrototype()
    {
        \$prototypeView = \$this->factory
            ->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', null, [
                'entry_type' => __CLASS__.'_ChildType',
                'entry_options' => [
                    'csrf_field_name' => 'csrf',
                ],
                'prototype' => true,
                'allow_add' => true,
            ])
            ->createView()
            ->vars['prototype'];

        \$this->assertArrayNotHasKey('csrf', \$prototypeView);
        \$this->assertCount(1, \$prototypeView);
    }

    public function testsTranslateCustomErrorMessage()
    {
        \$csrfToken = new CsrfToken('TOKEN_ID', 'token');
        \$this->tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->with(\$csrfToken)
            ->willReturn(false);

        \$this->translator->expects(\$this->once())
             ->method('trans')
             ->with('Foobar')
             ->willReturn('[trans]Foobar[/trans]');

        \$form = \$this->factory
            ->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'csrf_field_name' => 'csrf',
                'csrf_token_manager' => \$this->tokenManager,
                'csrf_message' => 'Foobar',
                'csrf_token_id' => 'TOKEN_ID',
                'compound' => true,
            ])
            ->getForm();

        \$form->submit([
            'csrf' => 'token',
        ]);

        \$errors = \$form->getErrors();
        \$expected = new FormError('[trans]Foobar[/trans]', null, [], null, \$csrfToken);
        \$expected->setOrigin(\$form);

        \$this->assertGreaterThan(0, \\count(\$errors));
        \$this->assertEquals(\$expected, \$errors[0]);
    }
}
", "vendor/symfony/form/Tests/Extension/Csrf/Type/FormTypeCsrfExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Csrf/Type/FormTypeCsrfExtensionTest.php");
    }
}
