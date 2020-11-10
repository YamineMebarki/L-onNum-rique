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

/* vendor/symfony/form/Tests/Extension/Core/DataMapper/PropertyPathMapperTest.php */
class __TwigTemplate_f7db44d3acb4e1d36364aeb89f7ab11b0e4ba6d113f638d48c456ebda7dbb7e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataMapper/PropertyPathMapperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataMapper/PropertyPathMapperTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataMapper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormConfigBuilder;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\PropertyAccess\\PropertyPath;

class PropertyPathMapperTest extends TestCase
{
    /**
     * @var PropertyPathMapper
     */
    private \$mapper;

    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var PropertyAccessorInterface
     */
    private \$propertyAccessor;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        \$this->mapper = new PropertyPathMapper(\$this->propertyAccessor);
    }

    public function testMapDataToFormsPassesObjectRefIfByReference()
    {
        \$car = new \\stdClass();
        \$engine = new \\stdClass();
        \$car->engine = \$engine;
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertSame(\$engine, \$form->getData());
    }

    public function testMapDataToFormsPassesObjectCloneIfNotByReference()
    {
        \$car = new \\stdClass();
        \$engine = new \\stdClass();
        \$engine->brand = 'Rolls-Royce';
        \$car->engine = \$engine;
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(false);
        \$config->setPropertyPath(\$propertyPath);
        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertNotSame(\$engine, \$form->getData());
        \$this->assertEquals(\$engine, \$form->getData());
    }

    public function testMapDataToFormsIgnoresEmptyPropertyPath()
    {
        \$car = new \\stdClass();

        \$config = new FormConfigBuilder(null, '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$form = new Form(\$config);

        \$this->assertNull(\$form->getPropertyPath());

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertNull(\$form->getData());
    }

    public function testMapDataToFormsIgnoresUnmapped()
    {
        \$car = new \\stdClass();
        \$car->engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setMapped(false);
        \$config->setPropertyPath(\$propertyPath);
        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertNull(\$form->getData());
    }

    public function testMapDataToFormsSetsDefaultDataIfPassedDataIsNull()
    {
        \$default = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$default);

        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(null, [\$form]);

        \$this->assertSame(\$default, \$form->getData());
    }

    public function testMapDataToFormsSetsDefaultDataIfPassedDataIsEmptyArray()
    {
        \$default = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$default);

        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms([], [\$form]);

        \$this->assertSame(\$default, \$form->getData());
    }

    public function testMapFormsToDataWritesBackIfNotByReference()
    {
        \$car = new \\stdClass();
        \$car->engine = new \\stdClass();
        \$engine = new \\stdClass();
        \$engine->brand = 'Rolls-Royce';
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(false);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertEquals(\$engine, \$car->engine);
        \$this->assertNotSame(\$engine, \$car->engine);
    }

    public function testMapFormsToDataWritesBackIfByReferenceButNoReference()
    {
        \$car = new \\stdClass();
        \$car->engine = new \\stdClass();
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$engine, \$car->engine);
    }

    public function testMapFormsToDataWritesBackIfByReferenceAndReference()
    {
        \$car = new \\stdClass();
        \$car->engine = 'BMW';
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('engine', null, \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData('Rolls-Royce');
        \$form = new SubmittedForm(\$config);

        \$car->engine = 'Rolls-Royce';

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame('Rolls-Royce', \$car->engine);
    }

    public function testMapFormsToDataIgnoresUnmapped()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$config->setMapped(false);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresUnsubmittedForms()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new Form(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresEmptyData()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(null);
        \$form = new Form(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresUnsynchronized()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new NotSynchronizedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresDisabled()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$config->setDisabled(true);
        \$form = new Form(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    /**
     * @dataProvider provideDate
     */
    public function testMapFormsToDataDoesNotChangeEqualDateTimeInstance(\$date)
    {
        \$article = [];
        \$publishedAt = \$date;
        \$publishedAtValue = clone \$publishedAt;
        \$article['publishedAt'] = \$publishedAtValue;
        \$propertyPath = new PropertyPath('[publishedAt]');

        \$config = new FormConfigBuilder('publishedAt', \\get_class(\$publishedAt), \$this->dispatcher);
        \$config->setByReference(false);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$publishedAt);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$article);

        \$this->assertSame(\$publishedAtValue, \$article['publishedAt']);
    }

    public function provideDate()
    {
        return [
            [new \\DateTime()],
            [new \\DateTimeImmutable()],
        ];
    }
}

class SubmittedForm extends Form
{
    public function isSubmitted()
    {
        return true;
    }
}

class NotSynchronizedForm extends Form
{
    public function isSynchronized()
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataMapper/PropertyPathMapperTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataMapper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormConfigBuilder;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\PropertyAccess\\PropertyPath;

class PropertyPathMapperTest extends TestCase
{
    /**
     * @var PropertyPathMapper
     */
    private \$mapper;

    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var PropertyAccessorInterface
     */
    private \$propertyAccessor;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        \$this->mapper = new PropertyPathMapper(\$this->propertyAccessor);
    }

    public function testMapDataToFormsPassesObjectRefIfByReference()
    {
        \$car = new \\stdClass();
        \$engine = new \\stdClass();
        \$car->engine = \$engine;
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertSame(\$engine, \$form->getData());
    }

    public function testMapDataToFormsPassesObjectCloneIfNotByReference()
    {
        \$car = new \\stdClass();
        \$engine = new \\stdClass();
        \$engine->brand = 'Rolls-Royce';
        \$car->engine = \$engine;
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(false);
        \$config->setPropertyPath(\$propertyPath);
        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertNotSame(\$engine, \$form->getData());
        \$this->assertEquals(\$engine, \$form->getData());
    }

    public function testMapDataToFormsIgnoresEmptyPropertyPath()
    {
        \$car = new \\stdClass();

        \$config = new FormConfigBuilder(null, '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$form = new Form(\$config);

        \$this->assertNull(\$form->getPropertyPath());

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertNull(\$form->getData());
    }

    public function testMapDataToFormsIgnoresUnmapped()
    {
        \$car = new \\stdClass();
        \$car->engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setMapped(false);
        \$config->setPropertyPath(\$propertyPath);
        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(\$car, [\$form]);

        \$this->assertNull(\$form->getData());
    }

    public function testMapDataToFormsSetsDefaultDataIfPassedDataIsNull()
    {
        \$default = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$default);

        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms(null, [\$form]);

        \$this->assertSame(\$default, \$form->getData());
    }

    public function testMapDataToFormsSetsDefaultDataIfPassedDataIsEmptyArray()
    {
        \$default = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$default);

        \$form = new Form(\$config);

        \$this->mapper->mapDataToForms([], [\$form]);

        \$this->assertSame(\$default, \$form->getData());
    }

    public function testMapFormsToDataWritesBackIfNotByReference()
    {
        \$car = new \\stdClass();
        \$car->engine = new \\stdClass();
        \$engine = new \\stdClass();
        \$engine->brand = 'Rolls-Royce';
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(false);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertEquals(\$engine, \$car->engine);
        \$this->assertNotSame(\$engine, \$car->engine);
    }

    public function testMapFormsToDataWritesBackIfByReferenceButNoReference()
    {
        \$car = new \\stdClass();
        \$car->engine = new \\stdClass();
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$engine, \$car->engine);
    }

    public function testMapFormsToDataWritesBackIfByReferenceAndReference()
    {
        \$car = new \\stdClass();
        \$car->engine = 'BMW';
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('engine', null, \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData('Rolls-Royce');
        \$form = new SubmittedForm(\$config);

        \$car->engine = 'Rolls-Royce';

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame('Rolls-Royce', \$car->engine);
    }

    public function testMapFormsToDataIgnoresUnmapped()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$config->setMapped(false);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresUnsubmittedForms()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new Form(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresEmptyData()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(null);
        \$form = new Form(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresUnsynchronized()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$form = new NotSynchronizedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    public function testMapFormsToDataIgnoresDisabled()
    {
        \$initialEngine = new \\stdClass();
        \$car = new \\stdClass();
        \$car->engine = \$initialEngine;
        \$engine = new \\stdClass();
        \$propertyPath = new PropertyPath('engine');

        \$config = new FormConfigBuilder('name', '\\stdClass', \$this->dispatcher);
        \$config->setByReference(true);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$engine);
        \$config->setDisabled(true);
        \$form = new Form(\$config);

        \$this->mapper->mapFormsToData([\$form], \$car);

        \$this->assertSame(\$initialEngine, \$car->engine);
    }

    /**
     * @dataProvider provideDate
     */
    public function testMapFormsToDataDoesNotChangeEqualDateTimeInstance(\$date)
    {
        \$article = [];
        \$publishedAt = \$date;
        \$publishedAtValue = clone \$publishedAt;
        \$article['publishedAt'] = \$publishedAtValue;
        \$propertyPath = new PropertyPath('[publishedAt]');

        \$config = new FormConfigBuilder('publishedAt', \\get_class(\$publishedAt), \$this->dispatcher);
        \$config->setByReference(false);
        \$config->setPropertyPath(\$propertyPath);
        \$config->setData(\$publishedAt);
        \$form = new SubmittedForm(\$config);

        \$this->mapper->mapFormsToData([\$form], \$article);

        \$this->assertSame(\$publishedAtValue, \$article['publishedAt']);
    }

    public function provideDate()
    {
        return [
            [new \\DateTime()],
            [new \\DateTimeImmutable()],
        ];
    }
}

class SubmittedForm extends Form
{
    public function isSubmitted()
    {
        return true;
    }
}

class NotSynchronizedForm extends Form
{
    public function isSynchronized()
    {
        return false;
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataMapper/PropertyPathMapperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataMapper/PropertyPathMapperTest.php");
    }
}
