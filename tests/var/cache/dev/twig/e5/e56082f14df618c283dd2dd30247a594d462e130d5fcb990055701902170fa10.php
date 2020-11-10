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

/* vendor/symfony/validator/Tests/Validator/RecursiveValidatorTest.php */
class __TwigTemplate_b8c96afb90d717faf45db215c6b7089d2873f7718146113d795a64d560d00a48 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Validator/RecursiveValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Validator/RecursiveValidatorTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Validator;

use Symfony\\Component\\Translation\\IdentityTranslator;
use Symfony\\Component\\Validator\\Constraints\\All;
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\ConstraintValidatorFactory;
use Symfony\\Component\\Validator\\Context\\ExecutionContextFactory;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\Tests\\Constraints\\Fixtures\\ChildA;
use Symfony\\Component\\Validator\\Tests\\Constraints\\Fixtures\\ChildB;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;
use Symfony\\Component\\Validator\\Validator\\RecursiveValidator;

class RecursiveValidatorTest extends AbstractTest
{
    protected function createValidator(MetadataFactoryInterface \$metadataFactory, array \$objectInitializers = [])
    {
        \$translator = new IdentityTranslator();
        \$translator->setLocale('en');

        \$contextFactory = new ExecutionContextFactory(\$translator);
        \$validatorFactory = new ConstraintValidatorFactory();

        return new RecursiveValidator(\$contextFactory, \$metadataFactory, \$validatorFactory, \$objectInitializers);
    }

    public function testEmptyGroupsArrayDoesNotTriggerDeprecation()
    {
        \$entity = new Entity();
        \$childA = new ChildA();
        \$childB = new ChildB();
        \$childA->name = false;
        \$childB->name = 'fake';
        \$entity->childA = [\$childA];
        \$entity->childB = [\$childB];
        \$validatorContext = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface')->getMock();
        \$validatorContext
            ->expects(\$this->once())
            ->method('validate')
            ->with(\$entity, null, [])
            ->willReturnSelf();

        \$validator = \$this
            ->getMockBuilder('Symfony\\Component\\Validator\\Validator\\RecursiveValidator')
            ->disableOriginalConstructor()
            ->setMethods(['startContext'])
            ->getMock();
        \$validator
            ->expects(\$this->once())
            ->method('startContext')
            ->willReturn(\$validatorContext);

        \$validator->validate(\$entity, null, []);
    }

    public function testRelationBetweenChildAAndChildB()
    {
        \$entity = new Entity();
        \$childA = new ChildA();
        \$childB = new ChildB();

        \$childA->childB = \$childB;
        \$childB->childA = \$childA;

        \$childA->name = false;
        \$childB->name = 'fake';
        \$entity->childA = [\$childA];
        \$entity->childB = [\$childB];

        \$validatorContext = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface')->getMock();
        \$validatorContext
            ->expects(\$this->once())
            ->method('validate')
            ->with(\$entity, null, [])
            ->willReturnSelf();

        \$validator = \$this
            ->getMockBuilder('Symfony\\Component\\Validator\\Validator\\RecursiveValidator')
            ->disableOriginalConstructor()
            ->setMethods(['startContext'])
            ->getMock();
        \$validator
            ->expects(\$this->once())
            ->method('startContext')
            ->willReturn(\$validatorContext);

        \$validator->validate(\$entity, null, []);
    }

    public function testCollectionConstraintValidateAllGroupsForNestedConstraints()
    {
        \$this->metadata->addPropertyConstraint('data', new Collection(['fields' => [
            'one' => [new NotBlank(['groups' => 'one']), new Length(['min' => 2, 'groups' => 'two'])],
            'two' => [new NotBlank(['groups' => 'two'])],
        ]]));

        \$entity = new Entity();
        \$entity->data = ['one' => 't', 'two' => ''];

        \$violations = \$this->validator->validate(\$entity, null, ['one', 'two']);

        \$this->assertCount(2, \$violations);
        \$this->assertInstanceOf(Length::class, \$violations->get(0)->getConstraint());
        \$this->assertInstanceOf(NotBlank::class, \$violations->get(1)->getConstraint());
    }

    public function testAllConstraintValidateAllGroupsForNestedConstraints()
    {
        \$this->metadata->addPropertyConstraint('data', new All(['constraints' => [
            new NotBlank(['groups' => 'one']),
            new Length(['min' => 2, 'groups' => 'two']),
        ]]));

        \$entity = new Entity();
        \$entity->data = ['one' => 't', 'two' => ''];

        \$violations = \$this->validator->validate(\$entity, null, ['one', 'two']);

        \$this->assertCount(2, \$violations);
        \$this->assertInstanceOf(NotBlank::class, \$violations->get(0)->getConstraint());
        \$this->assertInstanceOf(Length::class, \$violations->get(1)->getConstraint());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Validator/RecursiveValidatorTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Validator;

use Symfony\\Component\\Translation\\IdentityTranslator;
use Symfony\\Component\\Validator\\Constraints\\All;
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\ConstraintValidatorFactory;
use Symfony\\Component\\Validator\\Context\\ExecutionContextFactory;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\Tests\\Constraints\\Fixtures\\ChildA;
use Symfony\\Component\\Validator\\Tests\\Constraints\\Fixtures\\ChildB;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;
use Symfony\\Component\\Validator\\Validator\\RecursiveValidator;

class RecursiveValidatorTest extends AbstractTest
{
    protected function createValidator(MetadataFactoryInterface \$metadataFactory, array \$objectInitializers = [])
    {
        \$translator = new IdentityTranslator();
        \$translator->setLocale('en');

        \$contextFactory = new ExecutionContextFactory(\$translator);
        \$validatorFactory = new ConstraintValidatorFactory();

        return new RecursiveValidator(\$contextFactory, \$metadataFactory, \$validatorFactory, \$objectInitializers);
    }

    public function testEmptyGroupsArrayDoesNotTriggerDeprecation()
    {
        \$entity = new Entity();
        \$childA = new ChildA();
        \$childB = new ChildB();
        \$childA->name = false;
        \$childB->name = 'fake';
        \$entity->childA = [\$childA];
        \$entity->childB = [\$childB];
        \$validatorContext = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface')->getMock();
        \$validatorContext
            ->expects(\$this->once())
            ->method('validate')
            ->with(\$entity, null, [])
            ->willReturnSelf();

        \$validator = \$this
            ->getMockBuilder('Symfony\\Component\\Validator\\Validator\\RecursiveValidator')
            ->disableOriginalConstructor()
            ->setMethods(['startContext'])
            ->getMock();
        \$validator
            ->expects(\$this->once())
            ->method('startContext')
            ->willReturn(\$validatorContext);

        \$validator->validate(\$entity, null, []);
    }

    public function testRelationBetweenChildAAndChildB()
    {
        \$entity = new Entity();
        \$childA = new ChildA();
        \$childB = new ChildB();

        \$childA->childB = \$childB;
        \$childB->childA = \$childA;

        \$childA->name = false;
        \$childB->name = 'fake';
        \$entity->childA = [\$childA];
        \$entity->childB = [\$childB];

        \$validatorContext = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface')->getMock();
        \$validatorContext
            ->expects(\$this->once())
            ->method('validate')
            ->with(\$entity, null, [])
            ->willReturnSelf();

        \$validator = \$this
            ->getMockBuilder('Symfony\\Component\\Validator\\Validator\\RecursiveValidator')
            ->disableOriginalConstructor()
            ->setMethods(['startContext'])
            ->getMock();
        \$validator
            ->expects(\$this->once())
            ->method('startContext')
            ->willReturn(\$validatorContext);

        \$validator->validate(\$entity, null, []);
    }

    public function testCollectionConstraintValidateAllGroupsForNestedConstraints()
    {
        \$this->metadata->addPropertyConstraint('data', new Collection(['fields' => [
            'one' => [new NotBlank(['groups' => 'one']), new Length(['min' => 2, 'groups' => 'two'])],
            'two' => [new NotBlank(['groups' => 'two'])],
        ]]));

        \$entity = new Entity();
        \$entity->data = ['one' => 't', 'two' => ''];

        \$violations = \$this->validator->validate(\$entity, null, ['one', 'two']);

        \$this->assertCount(2, \$violations);
        \$this->assertInstanceOf(Length::class, \$violations->get(0)->getConstraint());
        \$this->assertInstanceOf(NotBlank::class, \$violations->get(1)->getConstraint());
    }

    public function testAllConstraintValidateAllGroupsForNestedConstraints()
    {
        \$this->metadata->addPropertyConstraint('data', new All(['constraints' => [
            new NotBlank(['groups' => 'one']),
            new Length(['min' => 2, 'groups' => 'two']),
        ]]));

        \$entity = new Entity();
        \$entity->data = ['one' => 't', 'two' => ''];

        \$violations = \$this->validator->validate(\$entity, null, ['one', 'two']);

        \$this->assertCount(2, \$violations);
        \$this->assertInstanceOf(NotBlank::class, \$violations->get(0)->getConstraint());
        \$this->assertInstanceOf(Length::class, \$violations->get(1)->getConstraint());
    }
}
", "vendor/symfony/validator/Tests/Validator/RecursiveValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Validator/RecursiveValidatorTest.php");
    }
}
