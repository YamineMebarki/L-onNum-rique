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

/* vendor/symfony/form/Tests/Extension/Validator/Type/FormTypeValidatorExtensionTest.php */
class __TwigTemplate_5e8c80fe14da74023e3345429975243fb734ad57fc47bdbe42b2746624f0b2ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Type/FormTypeValidatorExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Type/FormTypeValidatorExtensionTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\Forms;
use Symfony\\Component\\Form\\Test\\Traits\\ValidatorExtensionTrait;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type\\FormTypeTest;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type\\TextTypeTest;
use Symfony\\Component\\Validator\\Constraints\\Email;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Validation;

class FormTypeValidatorExtensionTest extends BaseValidatorExtensionTest
{
    use ValidatorExtensionTrait;

    public function testSubmitValidatesData()
    {
        \$builder = \$this->factory->createBuilder(
            FormTypeTest::TESTED_TYPE,
            null,
            [
                'validation_groups' => 'group',
            ]
        );
        \$builder->add('firstName', FormTypeTest::TESTED_TYPE);
        \$form = \$builder->getForm();

        \$this->validator->expects(\$this->once())
            ->method('validate')
            ->with(\$this->equalTo(\$form))
            ->willReturn(new ConstraintViolationList());

        // specific data is irrelevant
        \$form->submit([]);
    }

    public function testValidConstraint()
    {
        \$form = \$this->createForm(['constraints' => \$valid = new Valid()]);

        \$this->assertSame([\$valid], \$form->getConfig()->getOption('constraints'));
    }

    public function testGroupSequenceWithConstraintsOption()
    {
        \$form = Forms::createFormFactoryBuilder()
            ->addExtension(new ValidatorExtension(Validation::createValidator()))
            ->getFormFactory()
            ->create(FormTypeTest::TESTED_TYPE, null, (['validation_groups' => new GroupSequence(['First', 'Second'])]))
            ->add('field', TextTypeTest::TESTED_TYPE, [
                'constraints' => [
                    new Length(['min' => 10, 'groups' => ['First']]),
                    new Email(['groups' => ['Second']]),
                ],
            ])
        ;

        \$form->submit(['field' => 'wrong']);

        \$this->assertCount(1, \$form->getErrors(true));
    }

    protected function createForm(array \$options = [])
    {
        return \$this->factory->create(FormTypeTest::TESTED_TYPE, null, \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/Type/FormTypeValidatorExtensionTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\Forms;
use Symfony\\Component\\Form\\Test\\Traits\\ValidatorExtensionTrait;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type\\FormTypeTest;
use Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type\\TextTypeTest;
use Symfony\\Component\\Validator\\Constraints\\Email;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Validation;

class FormTypeValidatorExtensionTest extends BaseValidatorExtensionTest
{
    use ValidatorExtensionTrait;

    public function testSubmitValidatesData()
    {
        \$builder = \$this->factory->createBuilder(
            FormTypeTest::TESTED_TYPE,
            null,
            [
                'validation_groups' => 'group',
            ]
        );
        \$builder->add('firstName', FormTypeTest::TESTED_TYPE);
        \$form = \$builder->getForm();

        \$this->validator->expects(\$this->once())
            ->method('validate')
            ->with(\$this->equalTo(\$form))
            ->willReturn(new ConstraintViolationList());

        // specific data is irrelevant
        \$form->submit([]);
    }

    public function testValidConstraint()
    {
        \$form = \$this->createForm(['constraints' => \$valid = new Valid()]);

        \$this->assertSame([\$valid], \$form->getConfig()->getOption('constraints'));
    }

    public function testGroupSequenceWithConstraintsOption()
    {
        \$form = Forms::createFormFactoryBuilder()
            ->addExtension(new ValidatorExtension(Validation::createValidator()))
            ->getFormFactory()
            ->create(FormTypeTest::TESTED_TYPE, null, (['validation_groups' => new GroupSequence(['First', 'Second'])]))
            ->add('field', TextTypeTest::TESTED_TYPE, [
                'constraints' => [
                    new Length(['min' => 10, 'groups' => ['First']]),
                    new Email(['groups' => ['Second']]),
                ],
            ])
        ;

        \$form->submit(['field' => 'wrong']);

        \$this->assertCount(1, \$form->getErrors(true));
    }

    protected function createForm(array \$options = [])
    {
        return \$this->factory->create(FormTypeTest::TESTED_TYPE, null, \$options);
    }
}
", "vendor/symfony/form/Tests/Extension/Validator/Type/FormTypeValidatorExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/Type/FormTypeValidatorExtensionTest.php");
    }
}
