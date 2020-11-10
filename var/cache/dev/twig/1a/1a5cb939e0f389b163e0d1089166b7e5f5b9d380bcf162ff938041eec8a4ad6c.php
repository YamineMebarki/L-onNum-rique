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

/* vendor/symfony/form/Tests/Extension/Validator/EventListener/ValidationListenerTest.php */
class __TwigTemplate_1cab424c4c9351f27031d5921452ec80484b78ea512a11306027b612641d4d10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/EventListener/ValidationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/EventListener/ValidationListenerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form as FormConstraint;
use Symfony\\Component\\Form\\Extension\\Validator\\EventListener\\ValidationListener;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationMapper;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormConfigBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationInterface;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Validation;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class ValidationListenerTest extends TestCase
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var FormFactoryInterface
     */
    private \$factory;

    /**
     * @var ValidatorInterface
     */
    private \$validator;

    /**
     * @var ValidationListener
     */
    private \$listener;

    private \$message;

    private \$messageTemplate;

    private \$params;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();
        \$this->validator = Validation::createValidator();
        \$this->listener = new ValidationListener(\$this->validator, new ViolationMapper());
        \$this->message = 'Message';
        \$this->messageTemplate = 'Message template';
        \$this->params = ['foo' => 'bar'];
    }

    private function createForm(\$name = '', \$compound = false)
    {
        \$config = new FormBuilder(\$name, null, new EventDispatcher(), (new FormFactoryBuilder())->getFormFactory());
        \$config->setCompound(\$compound);

        if (\$compound) {
            \$config->setDataMapper(new PropertyPathMapper());
        }

        return new Form(\$config);
    }

    // More specific mapping tests can be found in ViolationMapperTest
    public function testMapViolation()
    {
        \$violation = new ConstraintViolation(\$this->message, \$this->messageTemplate, \$this->params, null, 'data', null, null, null, new FormConstraint());
        \$form = new Form(new FormConfigBuilder('street', null, new EventDispatcher()));
        \$form->submit(null);

        \$validator = new DummyValidator(\$violation);
        \$listener = new ValidationListener(\$validator, new ViolationMapper());
        \$listener->validateForm(new FormEvent(\$form, null));

        \$this->assertCount(1, \$form->getErrors());
        \$this->assertSame(\$violation, \$form->getErrors()[0]->getCause());
    }

    public function testMapViolationAllowsNonSyncIfInvalid()
    {
        \$violation = new ConstraintViolation(\$this->message, \$this->messageTemplate, \$this->params, null, 'data', null, null, FormConstraint::NOT_SYNCHRONIZED_ERROR, new FormConstraint());
        \$form = new SubmittedNotSynchronizedForm(new FormConfigBuilder('street', null, new EventDispatcher()));

        \$validator = new DummyValidator(\$violation);
        \$listener = new ValidationListener(\$validator, new ViolationMapper());
        \$listener->validateForm(new FormEvent(\$form, null));

        \$this->assertCount(1, \$form->getErrors());
        \$this->assertSame(\$violation, \$form->getErrors()[0]->getCause());
    }

    public function testValidateIgnoresNonRoot()
    {
        \$childForm = \$this->createForm('child');

        \$form = \$this->createForm('', true);
        \$form->add(\$childForm);

        \$form->submit(['child' => null]);

        \$this->listener->validateForm(new FormEvent(\$childForm, null));

        \$this->assertTrue(\$childForm->isValid());
    }

    public function testValidateWithEmptyViolationList()
    {
        \$form = \$this->createForm();
        \$form->submit(null);

        \$this->listener->validateForm(new FormEvent(\$form, null));

        \$this->assertTrue(\$form->isValid());
    }
}

class SubmittedNotSynchronizedForm extends Form
{
    public function isSubmitted()
    {
        return true;
    }

    public function isSynchronized()
    {
        return false;
    }
}

class DummyValidator implements ValidatorInterface
{
    private \$violation;

    public function __construct(ConstraintViolationInterface \$violation)
    {
        \$this->violation = \$violation;
    }

    public function getMetadataFor(\$value)
    {
    }

    public function hasMetadataFor(\$value)
    {
    }

    public function validate(\$value, \$constraints = null, \$groups = null)
    {
        return new ConstraintViolationList([\$this->violation]);
    }

    public function validateProperty(\$object, \$propertyName, \$groups = null)
    {
    }

    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null)
    {
    }

    public function startContext()
    {
    }

    public function inContext(ExecutionContextInterface \$context)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/EventListener/ValidationListenerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form as FormConstraint;
use Symfony\\Component\\Form\\Extension\\Validator\\EventListener\\ValidationListener;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationMapper;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormConfigBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationInterface;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Validation;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class ValidationListenerTest extends TestCase
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var FormFactoryInterface
     */
    private \$factory;

    /**
     * @var ValidatorInterface
     */
    private \$validator;

    /**
     * @var ValidationListener
     */
    private \$listener;

    private \$message;

    private \$messageTemplate;

    private \$params;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();
        \$this->validator = Validation::createValidator();
        \$this->listener = new ValidationListener(\$this->validator, new ViolationMapper());
        \$this->message = 'Message';
        \$this->messageTemplate = 'Message template';
        \$this->params = ['foo' => 'bar'];
    }

    private function createForm(\$name = '', \$compound = false)
    {
        \$config = new FormBuilder(\$name, null, new EventDispatcher(), (new FormFactoryBuilder())->getFormFactory());
        \$config->setCompound(\$compound);

        if (\$compound) {
            \$config->setDataMapper(new PropertyPathMapper());
        }

        return new Form(\$config);
    }

    // More specific mapping tests can be found in ViolationMapperTest
    public function testMapViolation()
    {
        \$violation = new ConstraintViolation(\$this->message, \$this->messageTemplate, \$this->params, null, 'data', null, null, null, new FormConstraint());
        \$form = new Form(new FormConfigBuilder('street', null, new EventDispatcher()));
        \$form->submit(null);

        \$validator = new DummyValidator(\$violation);
        \$listener = new ValidationListener(\$validator, new ViolationMapper());
        \$listener->validateForm(new FormEvent(\$form, null));

        \$this->assertCount(1, \$form->getErrors());
        \$this->assertSame(\$violation, \$form->getErrors()[0]->getCause());
    }

    public function testMapViolationAllowsNonSyncIfInvalid()
    {
        \$violation = new ConstraintViolation(\$this->message, \$this->messageTemplate, \$this->params, null, 'data', null, null, FormConstraint::NOT_SYNCHRONIZED_ERROR, new FormConstraint());
        \$form = new SubmittedNotSynchronizedForm(new FormConfigBuilder('street', null, new EventDispatcher()));

        \$validator = new DummyValidator(\$violation);
        \$listener = new ValidationListener(\$validator, new ViolationMapper());
        \$listener->validateForm(new FormEvent(\$form, null));

        \$this->assertCount(1, \$form->getErrors());
        \$this->assertSame(\$violation, \$form->getErrors()[0]->getCause());
    }

    public function testValidateIgnoresNonRoot()
    {
        \$childForm = \$this->createForm('child');

        \$form = \$this->createForm('', true);
        \$form->add(\$childForm);

        \$form->submit(['child' => null]);

        \$this->listener->validateForm(new FormEvent(\$childForm, null));

        \$this->assertTrue(\$childForm->isValid());
    }

    public function testValidateWithEmptyViolationList()
    {
        \$form = \$this->createForm();
        \$form->submit(null);

        \$this->listener->validateForm(new FormEvent(\$form, null));

        \$this->assertTrue(\$form->isValid());
    }
}

class SubmittedNotSynchronizedForm extends Form
{
    public function isSubmitted()
    {
        return true;
    }

    public function isSynchronized()
    {
        return false;
    }
}

class DummyValidator implements ValidatorInterface
{
    private \$violation;

    public function __construct(ConstraintViolationInterface \$violation)
    {
        \$this->violation = \$violation;
    }

    public function getMetadataFor(\$value)
    {
    }

    public function hasMetadataFor(\$value)
    {
    }

    public function validate(\$value, \$constraints = null, \$groups = null)
    {
        return new ConstraintViolationList([\$this->violation]);
    }

    public function validateProperty(\$object, \$propertyName, \$groups = null)
    {
    }

    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null)
    {
    }

    public function startContext()
    {
    }

    public function inContext(ExecutionContextInterface \$context)
    {
    }
}
", "vendor/symfony/form/Tests/Extension/Validator/EventListener/ValidationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/EventListener/ValidationListenerTest.php");
    }
}
