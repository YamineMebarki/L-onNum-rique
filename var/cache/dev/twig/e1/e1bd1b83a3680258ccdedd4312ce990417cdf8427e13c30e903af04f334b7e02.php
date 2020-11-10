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

/* vendor/symfony/form/Tests/Extension/Core/EventListener/ResizeFormListenerTest.php */
class __TwigTemplate_c856418bb72bd051d1a4f6e793c6fe7c8fbd87583f9869c8283a81708fcc9cec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/EventListener/ResizeFormListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/EventListener/ResizeFormListenerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\EventListener;

use Doctrine\\Common\\Collections\\ArrayCollection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\ResizeFormListener;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormFactoryBuilder;

class ResizeFormListenerTest extends TestCase
{
    private \$factory;
    private \$form;

    protected function setUp(): void
    {
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();
        \$this->form = \$this->getBuilder()
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
    }

    protected function tearDown(): void
    {
        \$this->factory = null;
        \$this->form = null;
    }

    protected function getBuilder(\$name = 'name')
    {
        return new FormBuilder(\$name, null, new EventDispatcher(), \$this->factory);
    }

    protected function getForm(\$name = 'name')
    {
        return \$this->getBuilder(\$name)->getForm();
    }

    public function testPreSetDataResizesForm()
    {
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [1 => 'string', 2 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener(TextType::class, ['attr' => ['maxlength' => 10]], false, false);
        \$listener->preSetData(\$event);

        \$this->assertFalse(\$this->form->has('0'));
        \$this->assertTrue(\$this->form->has('1'));
        \$this->assertTrue(\$this->form->has('2'));
    }

    public function testPreSetDataRequiresArrayOrTraversable()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$data = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->preSetData(\$event);
    }

    public function testPreSetDataDealsWithNullData()
    {
        \$data = null;
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener(TextType::class, [], false, false);
        \$listener->preSetData(\$event);

        \$this->assertSame(0, \$this->form->count());
    }

    public function testPreSubmitResizesUpIfAllowAdd()
    {
        \$this->form->add(\$this->getForm('0'));

        \$data = [0 => 'string', 1 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener(TextType::class, ['attr' => ['maxlength' => 10]], true, false);
        \$listener->preSubmit(\$event);

        \$this->assertTrue(\$this->form->has('0'));
        \$this->assertTrue(\$this->form->has('1'));
    }

    public function testPreSubmitResizesDownIfAllowDelete()
    {
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertTrue(\$this->form->has('0'));
        \$this->assertFalse(\$this->form->has('1'));
    }

    // fix for https://github.com/symfony/symfony/pull/493
    public function testPreSubmitRemovesZeroKeys()
    {
        \$this->form->add(\$this->getForm('0'));

        \$data = [];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('0'));
    }

    public function testPreSubmitDoesNothingIfNotAllowAddNorAllowDelete()
    {
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'string', 2 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->preSubmit(\$event);

        \$this->assertTrue(\$this->form->has('0'));
        \$this->assertTrue(\$this->form->has('1'));
        \$this->assertFalse(\$this->form->has('2'));
    }

    public function testPreSubmitDealsWithNoArrayOrTraversable()
    {
        \$data = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('1'));
    }

    public function testPreSubmitDealsWithNullData()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = null;
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('1'));
    }

    // fixes https://github.com/symfony/symfony/pull/40
    public function testPreSubmitDealsWithEmptyData()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = '';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('1'));
    }

    public function testOnSubmitNormDataRemovesEntriesMissingInTheFormIfAllowDelete()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'first', 1 => 'second', 2 => 'third'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertEquals([1 => 'second'], \$event->getData());
    }

    public function testOnSubmitNormDataDoesNothingIfNotAllowDelete()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'first', 1 => 'second', 2 => 'third'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->onSubmit(\$event);

        \$this->assertEquals(\$data, \$event->getData());
    }

    public function testOnSubmitNormDataRequiresArrayOrTraversable()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$data = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->onSubmit(\$event);
    }

    public function testOnSubmitNormDataDealsWithNullData()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = null;
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertEquals([], \$event->getData());
    }

    public function testOnSubmitDealsWithObjectBackedIteratorAggregate()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = new \\ArrayObject([0 => 'first', 1 => 'second', 2 => 'third']);
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertArrayNotHasKey(0, \$event->getData());
        \$this->assertArrayNotHasKey(2, \$event->getData());
    }

    public function testOnSubmitDealsWithArrayBackedIteratorAggregate()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = new ArrayCollection([0 => 'first', 1 => 'second', 2 => 'third']);
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertArrayNotHasKey(0, \$event->getData());
        \$this->assertArrayNotHasKey(2, \$event->getData());
    }

    public function testOnSubmitDeleteEmptyNotCompoundEntriesIfAllowDelete()
    {
        \$this->form->setData(['0' => 'first', '1' => 'second']);
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'first', 1 => ''];
        foreach (\$data as \$child => \$dat) {
            \$this->form->get(\$child)->setData(\$dat);
        }
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true, true);
        \$listener->onSubmit(\$event);

        \$this->assertEquals([0 => 'first'], \$event->getData());
    }

    public function testOnSubmitDeleteEmptyCompoundEntriesIfAllowDelete()
    {
        \$this->form->setData(['0' => ['name' => 'John'], '1' => ['name' => 'Jane']]);
        \$form1 = \$this->getBuilder('0')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form1->add(\$this->getForm('name'));
        \$form2 = \$this->getBuilder('1')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form2->add(\$this->getForm('name'));
        \$this->form->add(\$form1);
        \$this->form->add(\$form2);

        \$data = ['0' => ['name' => 'John'], '1' => ['name' => '']];
        foreach (\$data as \$child => \$dat) {
            \$this->form->get(\$child)->setData(\$dat);
        }
        \$event = new FormEvent(\$this->form, \$data);
        \$callback = function (\$data) {
            return '' === \$data['name'];
        };
        \$listener = new ResizeFormListener('text', [], false, true, \$callback);
        \$listener->onSubmit(\$event);

        \$this->assertEquals(['0' => ['name' => 'John']], \$event->getData());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/EventListener/ResizeFormListenerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\EventListener;

use Doctrine\\Common\\Collections\\ArrayCollection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\ResizeFormListener;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormFactoryBuilder;

class ResizeFormListenerTest extends TestCase
{
    private \$factory;
    private \$form;

    protected function setUp(): void
    {
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();
        \$this->form = \$this->getBuilder()
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
    }

    protected function tearDown(): void
    {
        \$this->factory = null;
        \$this->form = null;
    }

    protected function getBuilder(\$name = 'name')
    {
        return new FormBuilder(\$name, null, new EventDispatcher(), \$this->factory);
    }

    protected function getForm(\$name = 'name')
    {
        return \$this->getBuilder(\$name)->getForm();
    }

    public function testPreSetDataResizesForm()
    {
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [1 => 'string', 2 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener(TextType::class, ['attr' => ['maxlength' => 10]], false, false);
        \$listener->preSetData(\$event);

        \$this->assertFalse(\$this->form->has('0'));
        \$this->assertTrue(\$this->form->has('1'));
        \$this->assertTrue(\$this->form->has('2'));
    }

    public function testPreSetDataRequiresArrayOrTraversable()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$data = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->preSetData(\$event);
    }

    public function testPreSetDataDealsWithNullData()
    {
        \$data = null;
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener(TextType::class, [], false, false);
        \$listener->preSetData(\$event);

        \$this->assertSame(0, \$this->form->count());
    }

    public function testPreSubmitResizesUpIfAllowAdd()
    {
        \$this->form->add(\$this->getForm('0'));

        \$data = [0 => 'string', 1 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener(TextType::class, ['attr' => ['maxlength' => 10]], true, false);
        \$listener->preSubmit(\$event);

        \$this->assertTrue(\$this->form->has('0'));
        \$this->assertTrue(\$this->form->has('1'));
    }

    public function testPreSubmitResizesDownIfAllowDelete()
    {
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertTrue(\$this->form->has('0'));
        \$this->assertFalse(\$this->form->has('1'));
    }

    // fix for https://github.com/symfony/symfony/pull/493
    public function testPreSubmitRemovesZeroKeys()
    {
        \$this->form->add(\$this->getForm('0'));

        \$data = [];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('0'));
    }

    public function testPreSubmitDoesNothingIfNotAllowAddNorAllowDelete()
    {
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'string', 2 => 'string'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->preSubmit(\$event);

        \$this->assertTrue(\$this->form->has('0'));
        \$this->assertTrue(\$this->form->has('1'));
        \$this->assertFalse(\$this->form->has('2'));
    }

    public function testPreSubmitDealsWithNoArrayOrTraversable()
    {
        \$data = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('1'));
    }

    public function testPreSubmitDealsWithNullData()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = null;
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('1'));
    }

    // fixes https://github.com/symfony/symfony/pull/40
    public function testPreSubmitDealsWithEmptyData()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = '';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->preSubmit(\$event);

        \$this->assertFalse(\$this->form->has('1'));
    }

    public function testOnSubmitNormDataRemovesEntriesMissingInTheFormIfAllowDelete()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'first', 1 => 'second', 2 => 'third'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertEquals([1 => 'second'], \$event->getData());
    }

    public function testOnSubmitNormDataDoesNothingIfNotAllowDelete()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'first', 1 => 'second', 2 => 'third'];
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->onSubmit(\$event);

        \$this->assertEquals(\$data, \$event->getData());
    }

    public function testOnSubmitNormDataRequiresArrayOrTraversable()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$data = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, false);
        \$listener->onSubmit(\$event);
    }

    public function testOnSubmitNormDataDealsWithNullData()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = null;
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertEquals([], \$event->getData());
    }

    public function testOnSubmitDealsWithObjectBackedIteratorAggregate()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = new \\ArrayObject([0 => 'first', 1 => 'second', 2 => 'third']);
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertArrayNotHasKey(0, \$event->getData());
        \$this->assertArrayNotHasKey(2, \$event->getData());
    }

    public function testOnSubmitDealsWithArrayBackedIteratorAggregate()
    {
        \$this->form->add(\$this->getForm('1'));

        \$data = new ArrayCollection([0 => 'first', 1 => 'second', 2 => 'third']);
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true);
        \$listener->onSubmit(\$event);

        \$this->assertArrayNotHasKey(0, \$event->getData());
        \$this->assertArrayNotHasKey(2, \$event->getData());
    }

    public function testOnSubmitDeleteEmptyNotCompoundEntriesIfAllowDelete()
    {
        \$this->form->setData(['0' => 'first', '1' => 'second']);
        \$this->form->add(\$this->getForm('0'));
        \$this->form->add(\$this->getForm('1'));

        \$data = [0 => 'first', 1 => ''];
        foreach (\$data as \$child => \$dat) {
            \$this->form->get(\$child)->setData(\$dat);
        }
        \$event = new FormEvent(\$this->form, \$data);
        \$listener = new ResizeFormListener('text', [], false, true, true);
        \$listener->onSubmit(\$event);

        \$this->assertEquals([0 => 'first'], \$event->getData());
    }

    public function testOnSubmitDeleteEmptyCompoundEntriesIfAllowDelete()
    {
        \$this->form->setData(['0' => ['name' => 'John'], '1' => ['name' => 'Jane']]);
        \$form1 = \$this->getBuilder('0')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form1->add(\$this->getForm('name'));
        \$form2 = \$this->getBuilder('1')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form2->add(\$this->getForm('name'));
        \$this->form->add(\$form1);
        \$this->form->add(\$form2);

        \$data = ['0' => ['name' => 'John'], '1' => ['name' => '']];
        foreach (\$data as \$child => \$dat) {
            \$this->form->get(\$child)->setData(\$dat);
        }
        \$event = new FormEvent(\$this->form, \$data);
        \$callback = function (\$data) {
            return '' === \$data['name'];
        };
        \$listener = new ResizeFormListener('text', [], false, true, \$callback);
        \$listener->onSubmit(\$event);

        \$this->assertEquals(['0' => ['name' => 'John']], \$event->getData());
    }
}
", "vendor/symfony/form/Tests/Extension/Core/EventListener/ResizeFormListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/EventListener/ResizeFormListenerTest.php");
    }
}
