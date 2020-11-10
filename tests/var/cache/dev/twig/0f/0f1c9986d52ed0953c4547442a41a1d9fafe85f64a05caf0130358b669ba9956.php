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

/* vendor/symfony/form/Tests/Extension/Core/Type/CollectionTypeTest.php */
class __TwigTemplate_8b8b44023ea6dcb072c6685fc9a1a99133f20bd28824881d4f695125ac21e6e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/CollectionTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/CollectionTypeTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\Tests\\Fixtures\\Author;
use Symfony\\Component\\Form\\Tests\\Fixtures\\AuthorType;

class CollectionTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType';

    public function testContainsNoChildByDefault()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);

        \$this->assertCount(0, \$form);
    }

    public function testSetDataAdjustsSize()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'entry_options' => [
                'attr' => ['maxlength' => 20],
            ],
        ]);
        \$form->setData(['foo@foo.com', 'foo@bar.com']);

        \$this->assertInstanceOf('Symfony\\Component\\Form\\Form', \$form[0]);
        \$this->assertInstanceOf('Symfony\\Component\\Form\\Form', \$form[1]);
        \$this->assertCount(2, \$form);
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals('foo@bar.com', \$form[1]->getData());
        \$formAttrs0 = \$form[0]->getConfig()->getOption('attr');
        \$formAttrs1 = \$form[1]->getConfig()->getOption('attr');
        \$this->assertEquals(20, \$formAttrs0['maxlength']);
        \$this->assertEquals(20, \$formAttrs1['maxlength']);

        \$form->setData(['foo@baz.com']);
        \$this->assertInstanceOf('Symfony\\Component\\Form\\Form', \$form[0]);
        \$this->assertArrayNotHasKey(1, \$form);
        \$this->assertCount(1, \$form);
        \$this->assertEquals('foo@baz.com', \$form[0]->getData());
        \$formAttrs0 = \$form[0]->getConfig()->getOption('attr');
        \$this->assertEquals(20, \$formAttrs0['maxlength']);
    }

    public function testThrowsExceptionIfObjectIsNotTraversable()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$form->setData(new \\stdClass());
    }

    public function testNotResizedIfSubmittedWithMissingData()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);
        \$form->setData(['foo@foo.com', 'bar@bar.com']);
        \$form->submit(['foo@bar.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertTrue(\$form->has('1'));
        \$this->assertEquals('foo@bar.com', \$form[0]->getData());
        \$this->assertEquals('', \$form[1]->getData());
    }

    public function testResizedDownIfSubmittedWithMissingDataAndAllowDelete()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_delete' => true,
        ]);
        \$form->setData(['foo@foo.com', 'bar@bar.com']);
        \$form->submit(['foo@foo.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals(['foo@foo.com'], \$form->getData());
    }

    public function testResizedDownIfSubmittedWithEmptyDataAndDeleteEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_delete' => true,
            'delete_empty' => true,
        ]);

        \$form->setData(['foo@foo.com', 'bar@bar.com']);
        \$form->submit(['foo@foo.com', '']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals(['foo@foo.com'], \$form->getData());
    }

    public function testResizedDownWithDeleteEmptyCallable()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => AuthorType::class,
            'allow_delete' => true,
            'delete_empty' => function (Author \$obj = null) {
                return null === \$obj || empty(\$obj->firstName);
            },
        ]);

        \$form->setData([new Author('Bob'), new Author('Alice')]);
        \$form->submit([['firstName' => 'Bob'], ['firstName' => '']]);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals(new Author('Bob'), \$form[0]->getData());
        \$this->assertEquals([new Author('Bob')], \$form->getData());
    }

    public function testResizedDownIfSubmittedWithCompoundEmptyDataDeleteEmptyAndNoDataClass()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => AuthorType::class,
            // If the field is not required, no new Author will be created if the
            // form is completely empty
            'entry_options' => ['data_class' => null],
            'allow_add' => true,
            'allow_delete' => true,
            'delete_empty' => function (\$author) {
                return empty(\$author['firstName']);
            },
        ]);
        \$form->setData([['firstName' => 'first', 'lastName' => 'last']]);
        \$form->submit([
            ['firstName' => 's_first', 'lastName' => 's_last'],
            ['firstName' => '', 'lastName' => ''],
        ]);
        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals(['firstName' => 's_first', 'lastName' => 's_last'], \$form[0]->getData());
        \$this->assertEquals([['firstName' => 's_first', 'lastName' => 's_last']], \$form->getData());
    }

    public function testDontAddEmptyDataIfDeleteEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'delete_empty' => true,
        ]);

        \$form->setData(['foo@foo.com']);
        \$form->submit(['foo@foo.com', '']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals(['foo@foo.com'], \$form->getData());
    }

    public function testNoDeleteEmptyIfDeleteNotAllowed()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_delete' => false,
            'delete_empty' => true,
        ]);

        \$form->setData(['foo@foo.com']);
        \$form->submit(['']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertEquals('', \$form[0]->getData());
    }

    public function testResizedDownIfSubmittedWithCompoundEmptyDataAndDeleteEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => 'Symfony\\Component\\Form\\Tests\\Fixtures\\AuthorType',
            // If the field is not required, no new Author will be created if the
            // form is completely empty
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'delete_empty' => true,
        ]);

        \$form->setData([new Author('first', 'last')]);
        \$form->submit([
            ['firstName' => 's_first', 'lastName' => 's_last'],
            ['firstName' => '', 'lastName' => ''],
        ]);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals(new Author('s_first', 's_last'), \$form[0]->getData());
        \$this->assertEquals([new Author('s_first', 's_last')], \$form->getData());
    }

    public function testNotResizedIfSubmittedWithExtraData()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);
        \$form->setData(['foo@bar.com']);
        \$form->submit(['foo@foo.com', 'bar@bar.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
    }

    public function testResizedUpIfSubmittedWithExtraDataAndAllowAdd()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_add' => true,
        ]);
        \$form->setData(['foo@bar.com']);
        \$form->submit(['foo@bar.com', 'bar@bar.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertTrue(\$form->has('1'));
        \$this->assertEquals('foo@bar.com', \$form[0]->getData());
        \$this->assertEquals('bar@bar.com', \$form[1]->getData());
        \$this->assertEquals(['foo@bar.com', 'bar@bar.com'], \$form->getData());
    }

    public function testAllowAddButNoPrototype()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => FormTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => false,
        ]);

        \$this->assertFalse(\$form->has('__name__'));
    }

    public function testPrototypeMultipartPropagation()
    {
        \$form = \$this->factory
            ->create(static::TESTED_TYPE, null, [
                'entry_type' => FileTypeTest::TESTED_TYPE,
                'allow_add' => true,
                'prototype' => true,
            ])
        ;

        \$this->assertTrue(\$form->createView()->vars['multipart']);
    }

    public function testGetDataDoesNotContainsPrototypeNameBeforeDataAreSet()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'prototype' => true,
            'allow_add' => true,
        ]);

        \$data = \$form->getData();
        \$this->assertArrayNotHasKey('__name__', \$data);
    }

    public function testGetDataDoesNotContainsPrototypeNameAfterDataAreSet()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
        ]);

        \$form->setData(['foobar.png']);
        \$data = \$form->getData();
        \$this->assertArrayNotHasKey('__name__', \$data);
    }

    public function testPrototypeNameOption()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => FormTypeTest::TESTED_TYPE,
            'prototype' => true,
            'allow_add' => true,
        ]);

        \$this->assertSame('__name__', \$form->getConfig()->getAttribute('prototype')->getName(), '__name__ is the default');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => FormTypeTest::TESTED_TYPE,
            'prototype' => true,
            'allow_add' => true,
            'prototype_name' => '__test__',
        ]);

        \$this->assertSame('__test__', \$form->getConfig()->getAttribute('prototype')->getName());
    }

    public function testPrototypeDefaultLabel()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
        ]);

        \$this->assertSame('__test__label__', \$form->createView()->vars['prototype']->vars['label']);
    }

    public function testPrototypeData()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'allow_add' => true,
            'prototype' => true,
            'prototype_data' => 'foo',
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'entry_options' => [
                'data' => 'bar',
                'label' => false,
            ],
        ]);

        \$this->assertSame('foo', \$form->createView()->vars['prototype']->vars['value']);
        \$this->assertFalse(\$form->createView()->vars['prototype']->vars['label']);
    }

    public function testPrototypeDefaultRequired()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
        ]);

        \$this->assertTrue(\$form->createView()->vars['prototype']->vars['required']);
    }

    public function testPrototypeSetNotRequired()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
            'required' => false,
        ]);

        \$this->assertFalse(\$form->createView()->vars['required'], 'collection is not required');
        \$this->assertFalse(\$form->createView()->vars['prototype']->vars['required'], '\"prototype\" should not be required');
    }

    public function testPrototypeSetNotRequiredIfParentNotRequired()
    {
        \$child = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
        ]);

        \$parent = \$this->factory->create(FormTypeTest::TESTED_TYPE, [], [
            'required' => false,
        ]);

        \$child->setParent(\$parent);
        \$this->assertFalse(\$parent->createView()->vars['required'], 'Parent is not required');
        \$this->assertFalse(\$child->createView()->vars['required'], 'Child is not required');
        \$this->assertFalse(\$child->createView()->vars['prototype']->vars['required'], '\"Prototype\" should not be required');
    }

    public function testPrototypeNotOverrideRequiredByEntryOptionsInFavorOfParent()
    {
        \$child = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
            'entry_options' => [
                'required' => true,
            ],
        ]);

        \$parent = \$this->factory->create(FormTypeTest::TESTED_TYPE, [], [
            'required' => false,
        ]);

        \$child->setParent(\$parent);

        \$this->assertFalse(\$parent->createView()->vars['required'], 'Parent is not required');
        \$this->assertFalse(\$child->createView()->vars['required'], 'Child is not required');
        \$this->assertFalse(\$child->createView()->vars['prototype']->vars['required'], '\"Prototype\" should not be required');
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull([], [], []);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = [], \$expectedData = [])
    {
        // resize form listener always set an empty array
        parent::testSubmitNullUsesDefaultEmptyData(\$emptyData, \$expectedData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/CollectionTypeTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\Tests\\Fixtures\\Author;
use Symfony\\Component\\Form\\Tests\\Fixtures\\AuthorType;

class CollectionTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType';

    public function testContainsNoChildByDefault()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);

        \$this->assertCount(0, \$form);
    }

    public function testSetDataAdjustsSize()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'entry_options' => [
                'attr' => ['maxlength' => 20],
            ],
        ]);
        \$form->setData(['foo@foo.com', 'foo@bar.com']);

        \$this->assertInstanceOf('Symfony\\Component\\Form\\Form', \$form[0]);
        \$this->assertInstanceOf('Symfony\\Component\\Form\\Form', \$form[1]);
        \$this->assertCount(2, \$form);
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals('foo@bar.com', \$form[1]->getData());
        \$formAttrs0 = \$form[0]->getConfig()->getOption('attr');
        \$formAttrs1 = \$form[1]->getConfig()->getOption('attr');
        \$this->assertEquals(20, \$formAttrs0['maxlength']);
        \$this->assertEquals(20, \$formAttrs1['maxlength']);

        \$form->setData(['foo@baz.com']);
        \$this->assertInstanceOf('Symfony\\Component\\Form\\Form', \$form[0]);
        \$this->assertArrayNotHasKey(1, \$form);
        \$this->assertCount(1, \$form);
        \$this->assertEquals('foo@baz.com', \$form[0]->getData());
        \$formAttrs0 = \$form[0]->getConfig()->getOption('attr');
        \$this->assertEquals(20, \$formAttrs0['maxlength']);
    }

    public function testThrowsExceptionIfObjectIsNotTraversable()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$form->setData(new \\stdClass());
    }

    public function testNotResizedIfSubmittedWithMissingData()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);
        \$form->setData(['foo@foo.com', 'bar@bar.com']);
        \$form->submit(['foo@bar.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertTrue(\$form->has('1'));
        \$this->assertEquals('foo@bar.com', \$form[0]->getData());
        \$this->assertEquals('', \$form[1]->getData());
    }

    public function testResizedDownIfSubmittedWithMissingDataAndAllowDelete()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_delete' => true,
        ]);
        \$form->setData(['foo@foo.com', 'bar@bar.com']);
        \$form->submit(['foo@foo.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals(['foo@foo.com'], \$form->getData());
    }

    public function testResizedDownIfSubmittedWithEmptyDataAndDeleteEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_delete' => true,
            'delete_empty' => true,
        ]);

        \$form->setData(['foo@foo.com', 'bar@bar.com']);
        \$form->submit(['foo@foo.com', '']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals(['foo@foo.com'], \$form->getData());
    }

    public function testResizedDownWithDeleteEmptyCallable()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => AuthorType::class,
            'allow_delete' => true,
            'delete_empty' => function (Author \$obj = null) {
                return null === \$obj || empty(\$obj->firstName);
            },
        ]);

        \$form->setData([new Author('Bob'), new Author('Alice')]);
        \$form->submit([['firstName' => 'Bob'], ['firstName' => '']]);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals(new Author('Bob'), \$form[0]->getData());
        \$this->assertEquals([new Author('Bob')], \$form->getData());
    }

    public function testResizedDownIfSubmittedWithCompoundEmptyDataDeleteEmptyAndNoDataClass()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => AuthorType::class,
            // If the field is not required, no new Author will be created if the
            // form is completely empty
            'entry_options' => ['data_class' => null],
            'allow_add' => true,
            'allow_delete' => true,
            'delete_empty' => function (\$author) {
                return empty(\$author['firstName']);
            },
        ]);
        \$form->setData([['firstName' => 'first', 'lastName' => 'last']]);
        \$form->submit([
            ['firstName' => 's_first', 'lastName' => 's_last'],
            ['firstName' => '', 'lastName' => ''],
        ]);
        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals(['firstName' => 's_first', 'lastName' => 's_last'], \$form[0]->getData());
        \$this->assertEquals([['firstName' => 's_first', 'lastName' => 's_last']], \$form->getData());
    }

    public function testDontAddEmptyDataIfDeleteEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'delete_empty' => true,
        ]);

        \$form->setData(['foo@foo.com']);
        \$form->submit(['foo@foo.com', '']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
        \$this->assertEquals(['foo@foo.com'], \$form->getData());
    }

    public function testNoDeleteEmptyIfDeleteNotAllowed()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_delete' => false,
            'delete_empty' => true,
        ]);

        \$form->setData(['foo@foo.com']);
        \$form->submit(['']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertEquals('', \$form[0]->getData());
    }

    public function testResizedDownIfSubmittedWithCompoundEmptyDataAndDeleteEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => 'Symfony\\Component\\Form\\Tests\\Fixtures\\AuthorType',
            // If the field is not required, no new Author will be created if the
            // form is completely empty
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'delete_empty' => true,
        ]);

        \$form->setData([new Author('first', 'last')]);
        \$form->submit([
            ['firstName' => 's_first', 'lastName' => 's_last'],
            ['firstName' => '', 'lastName' => ''],
        ]);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals(new Author('s_first', 's_last'), \$form[0]->getData());
        \$this->assertEquals([new Author('s_first', 's_last')], \$form->getData());
    }

    public function testNotResizedIfSubmittedWithExtraData()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
        ]);
        \$form->setData(['foo@bar.com']);
        \$form->submit(['foo@foo.com', 'bar@bar.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertFalse(\$form->has('1'));
        \$this->assertEquals('foo@foo.com', \$form[0]->getData());
    }

    public function testResizedUpIfSubmittedWithExtraDataAndAllowAdd()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'allow_add' => true,
        ]);
        \$form->setData(['foo@bar.com']);
        \$form->submit(['foo@bar.com', 'bar@bar.com']);

        \$this->assertTrue(\$form->has('0'));
        \$this->assertTrue(\$form->has('1'));
        \$this->assertEquals('foo@bar.com', \$form[0]->getData());
        \$this->assertEquals('bar@bar.com', \$form[1]->getData());
        \$this->assertEquals(['foo@bar.com', 'bar@bar.com'], \$form->getData());
    }

    public function testAllowAddButNoPrototype()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => FormTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => false,
        ]);

        \$this->assertFalse(\$form->has('__name__'));
    }

    public function testPrototypeMultipartPropagation()
    {
        \$form = \$this->factory
            ->create(static::TESTED_TYPE, null, [
                'entry_type' => FileTypeTest::TESTED_TYPE,
                'allow_add' => true,
                'prototype' => true,
            ])
        ;

        \$this->assertTrue(\$form->createView()->vars['multipart']);
    }

    public function testGetDataDoesNotContainsPrototypeNameBeforeDataAreSet()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'prototype' => true,
            'allow_add' => true,
        ]);

        \$data = \$form->getData();
        \$this->assertArrayNotHasKey('__name__', \$data);
    }

    public function testGetDataDoesNotContainsPrototypeNameAfterDataAreSet()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
        ]);

        \$form->setData(['foobar.png']);
        \$data = \$form->getData();
        \$this->assertArrayNotHasKey('__name__', \$data);
    }

    public function testPrototypeNameOption()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => FormTypeTest::TESTED_TYPE,
            'prototype' => true,
            'allow_add' => true,
        ]);

        \$this->assertSame('__name__', \$form->getConfig()->getAttribute('prototype')->getName(), '__name__ is the default');

        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'entry_type' => FormTypeTest::TESTED_TYPE,
            'prototype' => true,
            'allow_add' => true,
            'prototype_name' => '__test__',
        ]);

        \$this->assertSame('__test__', \$form->getConfig()->getAttribute('prototype')->getName());
    }

    public function testPrototypeDefaultLabel()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
        ]);

        \$this->assertSame('__test__label__', \$form->createView()->vars['prototype']->vars['label']);
    }

    public function testPrototypeData()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'allow_add' => true,
            'prototype' => true,
            'prototype_data' => 'foo',
            'entry_type' => TextTypeTest::TESTED_TYPE,
            'entry_options' => [
                'data' => 'bar',
                'label' => false,
            ],
        ]);

        \$this->assertSame('foo', \$form->createView()->vars['prototype']->vars['value']);
        \$this->assertFalse(\$form->createView()->vars['prototype']->vars['label']);
    }

    public function testPrototypeDefaultRequired()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
        ]);

        \$this->assertTrue(\$form->createView()->vars['prototype']->vars['required']);
    }

    public function testPrototypeSetNotRequired()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
            'required' => false,
        ]);

        \$this->assertFalse(\$form->createView()->vars['required'], 'collection is not required');
        \$this->assertFalse(\$form->createView()->vars['prototype']->vars['required'], '\"prototype\" should not be required');
    }

    public function testPrototypeSetNotRequiredIfParentNotRequired()
    {
        \$child = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
        ]);

        \$parent = \$this->factory->create(FormTypeTest::TESTED_TYPE, [], [
            'required' => false,
        ]);

        \$child->setParent(\$parent);
        \$this->assertFalse(\$parent->createView()->vars['required'], 'Parent is not required');
        \$this->assertFalse(\$child->createView()->vars['required'], 'Child is not required');
        \$this->assertFalse(\$child->createView()->vars['prototype']->vars['required'], '\"Prototype\" should not be required');
    }

    public function testPrototypeNotOverrideRequiredByEntryOptionsInFavorOfParent()
    {
        \$child = \$this->factory->create(static::TESTED_TYPE, [], [
            'entry_type' => FileTypeTest::TESTED_TYPE,
            'allow_add' => true,
            'prototype' => true,
            'prototype_name' => '__test__',
            'entry_options' => [
                'required' => true,
            ],
        ]);

        \$parent = \$this->factory->create(FormTypeTest::TESTED_TYPE, [], [
            'required' => false,
        ]);

        \$child->setParent(\$parent);

        \$this->assertFalse(\$parent->createView()->vars['required'], 'Parent is not required');
        \$this->assertFalse(\$child->createView()->vars['required'], 'Child is not required');
        \$this->assertFalse(\$child->createView()->vars['prototype']->vars['required'], '\"Prototype\" should not be required');
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull([], [], []);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = [], \$expectedData = [])
    {
        // resize form listener always set an empty array
        parent::testSubmitNullUsesDefaultEmptyData(\$emptyData, \$expectedData);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/CollectionTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/CollectionTypeTest.php");
    }
}
