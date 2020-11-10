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

/* vendor/symfony/form/Tests/Extension/Core/Type/BaseTypeTest.php */
class __TwigTemplate_7ac87a4dc2bb9d8486efe51ba4a5bb3af8f67a488e8f76ed163953e82eec6115 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/BaseTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/BaseTypeTest.php"));

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

use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Form\\Tests\\VersionAwareTest;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class BaseTypeTest extends TypeTestCase
{
    use VersionAwareTest;

    const TESTED_TYPE = '';

    public function testPassDisabledAsOption()
    {
        \$form = \$this->factory->create(\$this->getTestedType(), null, ['disabled' => true]);

        \$this->assertTrue(\$form->isDisabled());
    }

    public function testPassIdAndNameToView()
    {
        \$view = \$this->factory->createNamed('name', \$this->getTestedType())
            ->createView();

        \$this->assertEquals('name', \$view->vars['id']);
        \$this->assertEquals('name', \$view->vars['name']);
        \$this->assertEquals('name', \$view->vars['full_name']);
    }

    public function testStripLeadingUnderscoresAndDigitsFromId()
    {
        \$view = \$this->factory->createNamed('_09name', \$this->getTestedType())
            ->createView();

        \$this->assertEquals('name', \$view->vars['id']);
        \$this->assertEquals('_09name', \$view->vars['name']);
        \$this->assertEquals('_09name', \$view->vars['full_name']);
    }

    public function testPassIdAndNameToViewWithParent()
    {
        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals('parent_child', \$view['child']->vars['id']);
        \$this->assertEquals('child', \$view['child']->vars['name']);
        \$this->assertEquals('parent[child]', \$view['child']->vars['full_name']);
    }

    public function testPassIdAndNameToViewWithGrandParent()
    {
        \$builder = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', FormTypeTest::TESTED_TYPE);
        \$builder->get('child')->add('grand_child', \$this->getTestedType());
        \$view = \$builder->getForm()->createView();

        \$this->assertEquals('parent_child_grand_child', \$view['child']['grand_child']->vars['id']);
        \$this->assertEquals('grand_child', \$view['child']['grand_child']->vars['name']);
        \$this->assertEquals('parent[child][grand_child]', \$view['child']['grand_child']->vars['full_name']);
    }

    public function testPassTranslationDomainToView()
    {
        \$view = \$this->factory->create(\$this->getTestedType(), null, [
            'translation_domain' => 'domain',
        ])
            ->createView();

        \$this->assertSame('domain', \$view->vars['translation_domain']);
    }

    public function testInheritTranslationDomainFromParent()
    {
        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'translation_domain' => 'domain',
            ])
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals('domain', \$view['child']->vars['translation_domain']);
    }

    public function testPreferOwnTranslationDomain()
    {
        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'translation_domain' => 'parent_domain',
            ])
            ->add('child', \$this->getTestedType(), [
                'translation_domain' => 'domain',
            ])
            ->getForm()
            ->createView();

        \$this->assertEquals('domain', \$view['child']->vars['translation_domain']);
    }

    public function testDefaultTranslationDomain()
    {
        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertNull(\$view['child']->vars['translation_domain']);
    }

    public function testPassLabelTranslationParametersToView()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->create(\$this->getTestedType(), null, [
            'label_translation_parameters' => ['%param%' => 'value'],
        ])
            ->createView();

        \$this->assertSame(['%param%' => 'value'], \$view->vars['label_translation_parameters']);
    }

    public function testPassAttrTranslationParametersToView()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->create(\$this->getTestedType(), null, [
            'attr_translation_parameters' => ['%param%' => 'value'],
        ])
            ->createView();

        \$this->assertSame(['%param%' => 'value'], \$view->vars['attr_translation_parameters']);
    }

    public function testInheritLabelTranslationParametersFromParent()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'label_translation_parameters' => ['%param%' => 'value'],
            ])
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals(['%param%' => 'value'], \$view['child']->vars['label_translation_parameters']);
    }

    public function testInheritAttrTranslationParametersFromParent()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'attr_translation_parameters' => ['%param%' => 'value'],
            ])
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals(['%param%' => 'value'], \$view['child']->vars['attr_translation_parameters']);
    }

    public function testPreferOwnLabelTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'label_translation_parameters' => ['%parent_param%' => 'parent_value', '%override_param%' => 'parent_override_value'],
            ])
            ->add('child', \$this->getTestedType(), [
                'label_translation_parameters' => ['%override_param%' => 'child_value'],
            ])
            ->getForm()
            ->createView();

        \$this->assertEquals(['%parent_param%' => 'parent_value', '%override_param%' => 'child_value'], \$view['child']->vars['label_translation_parameters']);
    }

    public function testPreferOwnAttrTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'attr_translation_parameters' => ['%parent_param%' => 'parent_value', '%override_param%' => 'parent_override_value'],
            ])
            ->add('child', \$this->getTestedType(), [
                'attr_translation_parameters' => ['%override_param%' => 'child_value'],
            ])
            ->getForm()
            ->createView();

        \$this->assertEquals(['%parent_param%' => 'parent_value', '%override_param%' => 'child_value'], \$view['child']->vars['attr_translation_parameters']);
    }

    public function testDefaultLabelTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals([], \$view['child']->vars['label_translation_parameters']);
    }

    public function testDefaultAttrTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals([], \$view['child']->vars['attr_translation_parameters']);
    }

    public function testPassLabelToView()
    {
        \$view = \$this->factory->createNamed('__test___field', \$this->getTestedType(), null, ['label' => 'My label'])
            ->createView();

        \$this->assertSame('My label', \$view->vars['label']);
    }

    public function testPassMultipartFalseToView()
    {
        \$view = \$this->factory->create(\$this->getTestedType())
            ->createView();

        \$this->assertFalse(\$view->vars['multipart']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        \$form = \$this->factory->create(\$this->getTestedType());
        \$form->submit(null);

        \$this->assertSame(\$expected, \$form->getData());
        \$this->assertSame(\$norm, \$form->getNormData());
        \$this->assertSame(\$view, \$form->getViewData());
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'empty', \$expectedData = null)
    {
        \$builder = \$this->factory->createBuilder(\$this->getTestedType());

        if (\$builder->getCompound()) {
            \$emptyData = [];
            foreach (\$builder as \$field) {
                // empty children should map null (model data) in the compound view data
                \$emptyData[\$field->getName()] = null;
            }
        } else {
            // simple fields share the view and the model format, unless they use a transformer
            \$expectedData = \$emptyData;
        }

        \$form = \$builder->setEmptyData(\$emptyData)->getForm()->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    protected function getTestedType()
    {
        return static::TESTED_TYPE;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/BaseTypeTest.php";
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

use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Form\\Tests\\VersionAwareTest;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class BaseTypeTest extends TypeTestCase
{
    use VersionAwareTest;

    const TESTED_TYPE = '';

    public function testPassDisabledAsOption()
    {
        \$form = \$this->factory->create(\$this->getTestedType(), null, ['disabled' => true]);

        \$this->assertTrue(\$form->isDisabled());
    }

    public function testPassIdAndNameToView()
    {
        \$view = \$this->factory->createNamed('name', \$this->getTestedType())
            ->createView();

        \$this->assertEquals('name', \$view->vars['id']);
        \$this->assertEquals('name', \$view->vars['name']);
        \$this->assertEquals('name', \$view->vars['full_name']);
    }

    public function testStripLeadingUnderscoresAndDigitsFromId()
    {
        \$view = \$this->factory->createNamed('_09name', \$this->getTestedType())
            ->createView();

        \$this->assertEquals('name', \$view->vars['id']);
        \$this->assertEquals('_09name', \$view->vars['name']);
        \$this->assertEquals('_09name', \$view->vars['full_name']);
    }

    public function testPassIdAndNameToViewWithParent()
    {
        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals('parent_child', \$view['child']->vars['id']);
        \$this->assertEquals('child', \$view['child']->vars['name']);
        \$this->assertEquals('parent[child]', \$view['child']->vars['full_name']);
    }

    public function testPassIdAndNameToViewWithGrandParent()
    {
        \$builder = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', FormTypeTest::TESTED_TYPE);
        \$builder->get('child')->add('grand_child', \$this->getTestedType());
        \$view = \$builder->getForm()->createView();

        \$this->assertEquals('parent_child_grand_child', \$view['child']['grand_child']->vars['id']);
        \$this->assertEquals('grand_child', \$view['child']['grand_child']->vars['name']);
        \$this->assertEquals('parent[child][grand_child]', \$view['child']['grand_child']->vars['full_name']);
    }

    public function testPassTranslationDomainToView()
    {
        \$view = \$this->factory->create(\$this->getTestedType(), null, [
            'translation_domain' => 'domain',
        ])
            ->createView();

        \$this->assertSame('domain', \$view->vars['translation_domain']);
    }

    public function testInheritTranslationDomainFromParent()
    {
        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'translation_domain' => 'domain',
            ])
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals('domain', \$view['child']->vars['translation_domain']);
    }

    public function testPreferOwnTranslationDomain()
    {
        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'translation_domain' => 'parent_domain',
            ])
            ->add('child', \$this->getTestedType(), [
                'translation_domain' => 'domain',
            ])
            ->getForm()
            ->createView();

        \$this->assertEquals('domain', \$view['child']->vars['translation_domain']);
    }

    public function testDefaultTranslationDomain()
    {
        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertNull(\$view['child']->vars['translation_domain']);
    }

    public function testPassLabelTranslationParametersToView()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->create(\$this->getTestedType(), null, [
            'label_translation_parameters' => ['%param%' => 'value'],
        ])
            ->createView();

        \$this->assertSame(['%param%' => 'value'], \$view->vars['label_translation_parameters']);
    }

    public function testPassAttrTranslationParametersToView()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->create(\$this->getTestedType(), null, [
            'attr_translation_parameters' => ['%param%' => 'value'],
        ])
            ->createView();

        \$this->assertSame(['%param%' => 'value'], \$view->vars['attr_translation_parameters']);
    }

    public function testInheritLabelTranslationParametersFromParent()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'label_translation_parameters' => ['%param%' => 'value'],
            ])
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals(['%param%' => 'value'], \$view['child']->vars['label_translation_parameters']);
    }

    public function testInheritAttrTranslationParametersFromParent()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'attr_translation_parameters' => ['%param%' => 'value'],
            ])
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals(['%param%' => 'value'], \$view['child']->vars['attr_translation_parameters']);
    }

    public function testPreferOwnLabelTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'label_translation_parameters' => ['%parent_param%' => 'parent_value', '%override_param%' => 'parent_override_value'],
            ])
            ->add('child', \$this->getTestedType(), [
                'label_translation_parameters' => ['%override_param%' => 'child_value'],
            ])
            ->getForm()
            ->createView();

        \$this->assertEquals(['%parent_param%' => 'parent_value', '%override_param%' => 'child_value'], \$view['child']->vars['label_translation_parameters']);
    }

    public function testPreferOwnAttrTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory
            ->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE, null, [
                'attr_translation_parameters' => ['%parent_param%' => 'parent_value', '%override_param%' => 'parent_override_value'],
            ])
            ->add('child', \$this->getTestedType(), [
                'attr_translation_parameters' => ['%override_param%' => 'child_value'],
            ])
            ->getForm()
            ->createView();

        \$this->assertEquals(['%parent_param%' => 'parent_value', '%override_param%' => 'child_value'], \$view['child']->vars['attr_translation_parameters']);
    }

    public function testDefaultLabelTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals([], \$view['child']->vars['label_translation_parameters']);
    }

    public function testDefaultAttrTranslationParameters()
    {
        \$this->requiresFeatureSet(403);

        \$view = \$this->factory->createNamedBuilder('parent', FormTypeTest::TESTED_TYPE)
            ->add('child', \$this->getTestedType())
            ->getForm()
            ->createView();

        \$this->assertEquals([], \$view['child']->vars['attr_translation_parameters']);
    }

    public function testPassLabelToView()
    {
        \$view = \$this->factory->createNamed('__test___field', \$this->getTestedType(), null, ['label' => 'My label'])
            ->createView();

        \$this->assertSame('My label', \$view->vars['label']);
    }

    public function testPassMultipartFalseToView()
    {
        \$view = \$this->factory->create(\$this->getTestedType())
            ->createView();

        \$this->assertFalse(\$view->vars['multipart']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        \$form = \$this->factory->create(\$this->getTestedType());
        \$form->submit(null);

        \$this->assertSame(\$expected, \$form->getData());
        \$this->assertSame(\$norm, \$form->getNormData());
        \$this->assertSame(\$view, \$form->getViewData());
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'empty', \$expectedData = null)
    {
        \$builder = \$this->factory->createBuilder(\$this->getTestedType());

        if (\$builder->getCompound()) {
            \$emptyData = [];
            foreach (\$builder as \$field) {
                // empty children should map null (model data) in the compound view data
                \$emptyData[\$field->getName()] = null;
            }
        } else {
            // simple fields share the view and the model format, unless they use a transformer
            \$expectedData = \$emptyData;
        }

        \$form = \$builder->setEmptyData(\$emptyData)->getForm()->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    protected function getTestedType()
    {
        return static::TESTED_TYPE;
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/BaseTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/BaseTypeTest.php");
    }
}
