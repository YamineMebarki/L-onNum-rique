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

/* vendor/symfony/validator/Tests/Validator/TraceableValidatorTest.php */
class __TwigTemplate_9cbeadf917298a9a43af39cbcf4b5b9e3dc1c64fb6e66526f3dd7813762f5422 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Validator/TraceableValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Validator/TraceableValidatorTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\MetadataInterface;
use Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface;
use Symfony\\Component\\Validator\\Validator\\TraceableValidator;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class TraceableValidatorTest extends TestCase
{
    public function testValidate()
    {
        \$originalValidator = \$this->createMock(ValidatorInterface::class);
        \$violations = new ConstraintViolationList([
            \$this->createMock(ConstraintViolation::class),
            \$this->createMock(ConstraintViolation::class),
        ]);
        \$originalValidator->expects(\$this->exactly(2))->method('validate')->willReturn(\$violations);

        \$validator = new TraceableValidator(\$originalValidator);

        \$object = new \\stdClass();
        \$constraints = [\$this->createMock(Constraint::class)];
        \$groups = ['Default', 'Create'];

        \$validator->validate(\$object, \$constraints, \$groups);
        \$line = __LINE__ - 1;

        \$collectedData = \$validator->getCollectedData();

        \$this->assertCount(1, \$collectedData);

        \$callData = \$collectedData[0];

        \$this->assertSame(iterator_to_array(\$violations), \$callData['violations']);

        \$this->assertSame([
            'value' => \$object,
            'constraints' => \$constraints,
            'groups' => \$groups,
        ], \$callData['context']);

        \$this->assertEquals([
            'name' => 'TraceableValidatorTest.php',
            'file' => __FILE__,
            'line' => \$line,
        ], \$callData['caller']);

        \$validator->validate(\$object, \$constraints, \$groups);
        \$collectedData = \$validator->getCollectedData();

        \$this->assertCount(2, \$collectedData);
    }

    public function testForwardsToOriginalValidator()
    {
        \$originalValidator = \$this->createMock(ValidatorInterface::class);
        \$validator = new TraceableValidator(\$originalValidator);

        \$expects = function (\$method) use (\$originalValidator) { return \$originalValidator->expects(\$this->once())->method(\$method); };

        \$expects('getMetadataFor')->willReturn(\$expected = \$this->createMock(MetadataInterface::class));
        \$this->assertSame(\$expected, \$validator->getMetadataFor('value'), 'returns original validator getMetadataFor() result');

        \$expects('hasMetadataFor')->willReturn(\$expected = false);
        \$this->assertSame(\$expected, \$validator->hasMetadataFor('value'), 'returns original validator hasMetadataFor() result');

        \$expects('inContext')->willReturn(\$expected = \$this->createMock(ContextualValidatorInterface::class));
        \$this->assertSame(\$expected, \$validator->inContext(\$this->createMock(ExecutionContextInterface::class)), 'returns original validator inContext() result');

        \$expects('startContext')->willReturn(\$expected = \$this->createMock(ContextualValidatorInterface::class));
        \$this->assertSame(\$expected, \$validator->startContext(), 'returns original validator startContext() result');

        \$expects('validate')->willReturn(\$expected = new ConstraintViolationList());
        \$this->assertSame(\$expected, \$validator->validate('value'), 'returns original validator validate() result');

        \$expects('validateProperty')->willReturn(\$expected = new ConstraintViolationList());
        \$this->assertSame(\$expected, \$validator->validateProperty(new \\stdClass(), 'property'), 'returns original validator validateProperty() result');

        \$expects('validatePropertyValue')->willReturn(\$expected = new ConstraintViolationList());
        \$this->assertSame(\$expected, \$validator->validatePropertyValue(new \\stdClass(), 'property', 'value'), 'returns original validator validatePropertyValue() result');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Validator/TraceableValidatorTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\MetadataInterface;
use Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface;
use Symfony\\Component\\Validator\\Validator\\TraceableValidator;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class TraceableValidatorTest extends TestCase
{
    public function testValidate()
    {
        \$originalValidator = \$this->createMock(ValidatorInterface::class);
        \$violations = new ConstraintViolationList([
            \$this->createMock(ConstraintViolation::class),
            \$this->createMock(ConstraintViolation::class),
        ]);
        \$originalValidator->expects(\$this->exactly(2))->method('validate')->willReturn(\$violations);

        \$validator = new TraceableValidator(\$originalValidator);

        \$object = new \\stdClass();
        \$constraints = [\$this->createMock(Constraint::class)];
        \$groups = ['Default', 'Create'];

        \$validator->validate(\$object, \$constraints, \$groups);
        \$line = __LINE__ - 1;

        \$collectedData = \$validator->getCollectedData();

        \$this->assertCount(1, \$collectedData);

        \$callData = \$collectedData[0];

        \$this->assertSame(iterator_to_array(\$violations), \$callData['violations']);

        \$this->assertSame([
            'value' => \$object,
            'constraints' => \$constraints,
            'groups' => \$groups,
        ], \$callData['context']);

        \$this->assertEquals([
            'name' => 'TraceableValidatorTest.php',
            'file' => __FILE__,
            'line' => \$line,
        ], \$callData['caller']);

        \$validator->validate(\$object, \$constraints, \$groups);
        \$collectedData = \$validator->getCollectedData();

        \$this->assertCount(2, \$collectedData);
    }

    public function testForwardsToOriginalValidator()
    {
        \$originalValidator = \$this->createMock(ValidatorInterface::class);
        \$validator = new TraceableValidator(\$originalValidator);

        \$expects = function (\$method) use (\$originalValidator) { return \$originalValidator->expects(\$this->once())->method(\$method); };

        \$expects('getMetadataFor')->willReturn(\$expected = \$this->createMock(MetadataInterface::class));
        \$this->assertSame(\$expected, \$validator->getMetadataFor('value'), 'returns original validator getMetadataFor() result');

        \$expects('hasMetadataFor')->willReturn(\$expected = false);
        \$this->assertSame(\$expected, \$validator->hasMetadataFor('value'), 'returns original validator hasMetadataFor() result');

        \$expects('inContext')->willReturn(\$expected = \$this->createMock(ContextualValidatorInterface::class));
        \$this->assertSame(\$expected, \$validator->inContext(\$this->createMock(ExecutionContextInterface::class)), 'returns original validator inContext() result');

        \$expects('startContext')->willReturn(\$expected = \$this->createMock(ContextualValidatorInterface::class));
        \$this->assertSame(\$expected, \$validator->startContext(), 'returns original validator startContext() result');

        \$expects('validate')->willReturn(\$expected = new ConstraintViolationList());
        \$this->assertSame(\$expected, \$validator->validate('value'), 'returns original validator validate() result');

        \$expects('validateProperty')->willReturn(\$expected = new ConstraintViolationList());
        \$this->assertSame(\$expected, \$validator->validateProperty(new \\stdClass(), 'property'), 'returns original validator validateProperty() result');

        \$expects('validatePropertyValue')->willReturn(\$expected = new ConstraintViolationList());
        \$this->assertSame(\$expected, \$validator->validatePropertyValue(new \\stdClass(), 'property', 'value'), 'returns original validator validatePropertyValue() result');
    }
}
", "vendor/symfony/validator/Tests/Validator/TraceableValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Validator/TraceableValidatorTest.php");
    }
}
