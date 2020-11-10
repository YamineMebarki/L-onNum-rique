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

/* vendor/symfony/validator/Tests/Constraints/CollectionValidatorTest.php */
class __TwigTemplate_a295c653069eaa3108cae2c49c4b72892fc96c37877ad4757ecbbb59a77af687 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CollectionValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CollectionValidatorTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\CollectionValidator;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Optional;
use Symfony\\Component\\Validator\\Constraints\\Range;
use Symfony\\Component\\Validator\\Constraints\\Required;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

abstract class CollectionValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CollectionValidator();
    }

    abstract protected function prepareTestData(array \$contents);

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Collection(['fields' => [
            'foo' => new Range(['min' => 4]),
        ]]));

        \$this->assertNoViolation();
    }

    public function testFieldsAsDefaultOption()
    {
        \$constraint = new Range(['min' => 4]);

        \$data = \$this->prepareTestData(['foo' => 'foobar']);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => \$constraint,
        ]));

        \$this->assertNoViolation();
    }

    public function testThrowsExceptionIfNotTraversable()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate('foobar', new Collection(['fields' => [
            'foo' => new Range(['min' => 4]),
        ]]));
    }

    public function testWalkSingleConstraint()
    {
        \$constraint = new Range(['min' => 4]);

        \$array = [
            'foo' => 3,
            'bar' => 5,
        ];

        \$i = 0;

        foreach (\$array as \$key => \$value) {
            \$this->expectValidateValueAt(\$i++, '['.\$key.']', \$value, [\$constraint]);
        }

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
                'bar' => \$constraint,
            ],
        ]));

        \$this->assertNoViolation();
    }

    public function testWalkMultipleConstraints()
    {
        \$constraints = [
            new Range(['min' => 4]),
            new NotNull(),
        ];

        \$array = [
            'foo' => 3,
            'bar' => 5,
        ];

        \$i = 0;

        foreach (\$array as \$key => \$value) {
            \$this->expectValidateValueAt(\$i++, '['.\$key.']', \$value, \$constraints);
        }

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraints,
                'bar' => \$constraints,
            ],
        ]));

        \$this->assertNoViolation();
    }

    public function testExtraFieldsDisallowed()
    {
        \$constraint = new Range(['min' => 4]);

        \$data = \$this->prepareTestData([
            'foo' => 5,
            'baz' => 6,
        ]);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'extraFieldsMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "', '\"baz\"')
            ->atPath('property.path[baz]')
            ->setInvalidValue(6)
            ->setCode(Collection::NO_SUCH_FIELD_ERROR)
            ->assertRaised();
    }

    // bug fix
    public function testNullNotConsideredExtraField()
    {
        \$data = \$this->prepareTestData([
            'foo' => null,
        ]);

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
        ]));

        \$this->assertNoViolation();
    }

    public function testExtraFieldsAllowed()
    {
        \$data = \$this->prepareTestData([
            'foo' => 5,
            'bar' => 6,
        ]);

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'allowExtraFields' => true,
        ]));

        \$this->assertNoViolation();
    }

    public function testMissingFieldsDisallowed()
    {
        \$data = \$this->prepareTestData([]);

        \$constraint = new Range(['min' => 4]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'missingFieldsMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 201, $this->source); })()), "html", null, true);
        echo "', '\"foo\"')
            ->atPath('property.path[foo]')
            ->setInvalidValue(null)
            ->setCode(Collection::MISSING_FIELD_ERROR)
            ->assertRaised();
    }

    public function testMissingFieldsAllowed()
    {
        \$data = \$this->prepareTestData([]);

        \$constraint = new Range(['min' => 4]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'allowMissingFields' => true,
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldPresent()
    {
        \$data = \$this->prepareTestData([
            'foo' => null,
        ]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(),
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldNotPresent()
    {
        \$data = \$this->prepareTestData([]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(),
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldSingleConstraint()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], [\$constraint]);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(\$constraint),
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldMultipleConstraints()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraints = [
            new NotNull(),
            new Range(['min' => 4]),
        ];

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], \$constraints);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(\$constraints),
        ]));

        \$this->assertNoViolation();
    }

    public function testRequiredFieldPresent()
    {
        \$data = \$this->prepareTestData([
            'foo' => null,
        ]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Required(),
        ]));

        \$this->assertNoViolation();
    }

    public function testRequiredFieldNotPresent()
    {
        \$data = \$this->prepareTestData([]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => new Required(),
            ],
            'missingFieldsMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 314, $this->source); })()), "html", null, true);
        echo "', '\"foo\"')
            ->atPath('property.path[foo]')
            ->setInvalidValue(null)
            ->setCode(Collection::MISSING_FIELD_ERROR)
            ->assertRaised();
    }

    public function testRequiredFieldSingleConstraint()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], [\$constraint]);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Required(\$constraint),
        ]));

        \$this->assertNoViolation();
    }

    public function testRequiredFieldMultipleConstraints()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraints = [
            new NotNull(),
            new Range(['min' => 4]),
        ];

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], \$constraints);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Required(\$constraints),
        ]));

        \$this->assertNoViolation();
    }

    public function testObjectShouldBeLeftUnchanged()
    {
        \$value = new \\ArrayObject([
            'foo' => 3,
        ]);

        \$constraint = new Range(['min' => 2]);

        \$this->expectValidateValueAt(0, '[foo]', \$value['foo'], [\$constraint]);

        \$this->validator->validate(\$value, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
        ]));

        \$this->assertEquals([
            'foo' => 3,
        ], (array) \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/CollectionValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 314,  248 => 201,  183 => 139,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\CollectionValidator;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Optional;
use Symfony\\Component\\Validator\\Constraints\\Range;
use Symfony\\Component\\Validator\\Constraints\\Required;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

abstract class CollectionValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CollectionValidator();
    }

    abstract protected function prepareTestData(array \$contents);

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Collection(['fields' => [
            'foo' => new Range(['min' => 4]),
        ]]));

        \$this->assertNoViolation();
    }

    public function testFieldsAsDefaultOption()
    {
        \$constraint = new Range(['min' => 4]);

        \$data = \$this->prepareTestData(['foo' => 'foobar']);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => \$constraint,
        ]));

        \$this->assertNoViolation();
    }

    public function testThrowsExceptionIfNotTraversable()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate('foobar', new Collection(['fields' => [
            'foo' => new Range(['min' => 4]),
        ]]));
    }

    public function testWalkSingleConstraint()
    {
        \$constraint = new Range(['min' => 4]);

        \$array = [
            'foo' => 3,
            'bar' => 5,
        ];

        \$i = 0;

        foreach (\$array as \$key => \$value) {
            \$this->expectValidateValueAt(\$i++, '['.\$key.']', \$value, [\$constraint]);
        }

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
                'bar' => \$constraint,
            ],
        ]));

        \$this->assertNoViolation();
    }

    public function testWalkMultipleConstraints()
    {
        \$constraints = [
            new Range(['min' => 4]),
            new NotNull(),
        ];

        \$array = [
            'foo' => 3,
            'bar' => 5,
        ];

        \$i = 0;

        foreach (\$array as \$key => \$value) {
            \$this->expectValidateValueAt(\$i++, '['.\$key.']', \$value, \$constraints);
        }

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraints,
                'bar' => \$constraints,
            ],
        ]));

        \$this->assertNoViolation();
    }

    public function testExtraFieldsDisallowed()
    {
        \$constraint = new Range(['min' => 4]);

        \$data = \$this->prepareTestData([
            'foo' => 5,
            'baz' => 6,
        ]);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'extraFieldsMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('{{ field }}', '\"baz\"')
            ->atPath('property.path[baz]')
            ->setInvalidValue(6)
            ->setCode(Collection::NO_SUCH_FIELD_ERROR)
            ->assertRaised();
    }

    // bug fix
    public function testNullNotConsideredExtraField()
    {
        \$data = \$this->prepareTestData([
            'foo' => null,
        ]);

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
        ]));

        \$this->assertNoViolation();
    }

    public function testExtraFieldsAllowed()
    {
        \$data = \$this->prepareTestData([
            'foo' => 5,
            'bar' => 6,
        ]);

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$data['foo'], [\$constraint]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'allowExtraFields' => true,
        ]));

        \$this->assertNoViolation();
    }

    public function testMissingFieldsDisallowed()
    {
        \$data = \$this->prepareTestData([]);

        \$constraint = new Range(['min' => 4]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'missingFieldsMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('{{ field }}', '\"foo\"')
            ->atPath('property.path[foo]')
            ->setInvalidValue(null)
            ->setCode(Collection::MISSING_FIELD_ERROR)
            ->assertRaised();
    }

    public function testMissingFieldsAllowed()
    {
        \$data = \$this->prepareTestData([]);

        \$constraint = new Range(['min' => 4]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
            'allowMissingFields' => true,
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldPresent()
    {
        \$data = \$this->prepareTestData([
            'foo' => null,
        ]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(),
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldNotPresent()
    {
        \$data = \$this->prepareTestData([]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(),
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldSingleConstraint()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], [\$constraint]);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(\$constraint),
        ]));

        \$this->assertNoViolation();
    }

    public function testOptionalFieldMultipleConstraints()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraints = [
            new NotNull(),
            new Range(['min' => 4]),
        ];

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], \$constraints);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Optional(\$constraints),
        ]));

        \$this->assertNoViolation();
    }

    public function testRequiredFieldPresent()
    {
        \$data = \$this->prepareTestData([
            'foo' => null,
        ]);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Required(),
        ]));

        \$this->assertNoViolation();
    }

    public function testRequiredFieldNotPresent()
    {
        \$data = \$this->prepareTestData([]);

        \$this->validator->validate(\$data, new Collection([
            'fields' => [
                'foo' => new Required(),
            ],
            'missingFieldsMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('{{ field }}', '\"foo\"')
            ->atPath('property.path[foo]')
            ->setInvalidValue(null)
            ->setCode(Collection::MISSING_FIELD_ERROR)
            ->assertRaised();
    }

    public function testRequiredFieldSingleConstraint()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraint = new Range(['min' => 4]);

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], [\$constraint]);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Required(\$constraint),
        ]));

        \$this->assertNoViolation();
    }

    public function testRequiredFieldMultipleConstraints()
    {
        \$array = [
            'foo' => 5,
        ];

        \$constraints = [
            new NotNull(),
            new Range(['min' => 4]),
        ];

        \$this->expectValidateValueAt(0, '[foo]', \$array['foo'], \$constraints);

        \$data = \$this->prepareTestData(\$array);

        \$this->validator->validate(\$data, new Collection([
            'foo' => new Required(\$constraints),
        ]));

        \$this->assertNoViolation();
    }

    public function testObjectShouldBeLeftUnchanged()
    {
        \$value = new \\ArrayObject([
            'foo' => 3,
        ]);

        \$constraint = new Range(['min' => 2]);

        \$this->expectValidateValueAt(0, '[foo]', \$value['foo'], [\$constraint]);

        \$this->validator->validate(\$value, new Collection([
            'fields' => [
                'foo' => \$constraint,
            ],
        ]));

        \$this->assertEquals([
            'foo' => 3,
        ], (array) \$value);
    }
}
", "vendor/symfony/validator/Tests/Constraints/CollectionValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/CollectionValidatorTest.php");
    }
}
