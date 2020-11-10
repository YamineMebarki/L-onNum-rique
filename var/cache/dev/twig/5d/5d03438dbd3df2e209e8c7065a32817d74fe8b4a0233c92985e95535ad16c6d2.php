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

/* vendor/symfony/validator/Tests/Constraints/UuidValidatorTest.php */
class __TwigTemplate_e895d70f9ca87a32f2a5684d9126188f22230edc60e92aa06a4b95b3f096a89e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UuidValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UuidValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Uuid;
use Symfony\\Component\\Validator\\Constraints\\UuidValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class UuidValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new UuidValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Uuid());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Uuid());

        \$this->assertNoViolation();
    }

    public function testExpectsUuidConstraintCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException');
        \$constraint = \$this->getMockForAbstractClass('Symfony\\\\Component\\\\Validator\\\\Constraint');

        \$this->validator->validate('216fff40-98d9-11e3-a5e2-0800200c9a66', \$constraint);
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Uuid());
    }

    /**
     * @dataProvider getValidStrictUuids
     */
    public function testValidStrictUuids(\$uuid, \$versions = null)
    {
        \$constraint = new Uuid();

        if (null !== \$versions) {
            \$constraint->versions = \$versions;
        }

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2-0800200c9a66'], // Version 1 UUID in lowercase
            ['216fff40-98d9-11e3-a5e2-0800200c9a66', [Uuid::V1_MAC]],
            ['216FFF40-98D9-11E3-A5E2-0800200C9A66'], // Version 1 UUID in UPPERCASE
            ['456daefb-5aa6-41b5-8dbc-068b05a8b201'], // Version 4 UUID in lowercase
            ['456daEFb-5AA6-41B5-8DBC-068B05A8B201'], // Version 4 UUID in mixed case
            ['456daEFb-5AA6-41B5-8DBC-068B05A8B201', [Uuid::V4_RANDOM]],
        ];
    }

    /**
     * @dataProvider getValidStrictUuidsWithWhitespaces
     */
    public function testValidStrictUuidsWithWhitespaces(\$uuid, \$versions = null)
    {
        \$constraint = new Uuid(['normalizer' => 'trim']);

        if (null !== \$versions) {
            \$constraint->versions = \$versions;
        }

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidStrictUuidsWithWhitespaces()
    {
        return [
            [\"\\x20216fff40-98d9-11e3-a5e2-0800200c9a66\"], // Version 1 UUID in lowercase
            [\"\\x09\\x09216fff40-98d9-11e3-a5e2-0800200c9a66\", [Uuid::V1_MAC]],
            [\"216FFF40-98D9-11E3-A5E2-0800200C9A66\\x0A\"], // Version 1 UUID in UPPERCASE
            [\"456daefb-5aa6-41b5-8dbc-068b05a8b201\\x0D\\x0D\"], // Version 4 UUID in lowercase
            [\"\\x00456daEFb-5AA6-41B5-8DBC-068B05A8B201\\x00\"], // Version 4 UUID in mixed case
            [\"\\x0B\\x0B456daEFb-5AA6-41B5-8DBC-068B05A8B201\\x0B\\x0B\", [Uuid::V4_RANDOM]],
        ];
    }

    /**
     * @dataProvider getInvalidStrictUuids
     */
    public function testInvalidStrictUuids(\$uuid, \$code, \$versions = null)
    {
        \$constraint = new Uuid([
            'message' => 'testMessage',
        ]);

        if (null !== \$versions) {
            \$constraint->versions = \$versions;
        }

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->buildViolation('testMessage')
            ->setParameter('";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 128, $this->source); })()), "html", null, true);
        echo "', '\"'.\$uuid.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2_0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216Gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216fff40-98d9-11e3-a5e-20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216f-ff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800-200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c-9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff4098d911e3a5e20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a6', Uuid::TOO_SHORT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a666', Uuid::TOO_LONG_ERROR],
            ['216fff40-98d9-01e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-61e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-71e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-81e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-91e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-a1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-b1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-c1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-d1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-e1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-f1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR, [Uuid::V2_DCE, Uuid::V3_MD5, Uuid::V4_RANDOM, Uuid::V5_SHA1]],
            ['216fff40-98d9-21e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR, [Uuid::V1_MAC, Uuid::V3_MD5, Uuid::V4_RANDOM, Uuid::V5_SHA1]],
            ['216fff40-98d9-11e3-05e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-15e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-25e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-35e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-45e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-55e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-65e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-75e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-c5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-d5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-e5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-f5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],

            // Non-standard UUID allowed by some other systems
            ['{216fff40-98d9-11e3-a5e2-0800200c9a66}', Uuid::INVALID_CHARACTERS_ERROR],
            ['[216fff40-98d9-11e3-a5e2-0800200c9a66]', Uuid::INVALID_CHARACTERS_ERROR],
        ];
    }

    /**
     * @dataProvider getValidNonStrictUuids
     */
    public function testValidNonStrictUuids(\$uuid)
    {
        \$constraint = new Uuid([
            'strict' => false,
        ]);

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidNonStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2-0800200c9a66'],    // Version 1 UUID in lowercase
            ['216FFF40-98D9-11E3-A5E2-0800200C9A66'],    // Version 1 UUID in UPPERCASE
            ['456daefb-5aa6-41b5-8dbc-068b05a8b201'],    // Version 4 UUID in lowercase
            ['456DAEFb-5AA6-41B5-8DBC-068b05a8B201'],    // Version 4 UUID in mixed case

            // Non-standard UUIDs allowed by some other systems
            ['216f-ff40-98d9-11e3-a5e2-0800-200c-9a66'], // Non-standard dash positions (every 4 chars)
            ['216fff40-98d911e3-a5e20800-200c9a66'],     // Non-standard dash positions (every 8 chars)
            ['216fff4098d911e3a5e20800200c9a66'],        // No dashes at all
            ['{216fff40-98d9-11e3-a5e2-0800200c9a66}'],  // Wrapped with curly braces
            ['[216fff40-98d9-11e3-a5e2-0800200c9a66]'],  // Wrapped with squared braces
        ];
    }

    /**
     * @dataProvider getInvalidNonStrictUuids
     */
    public function testInvalidNonStrictUuids(\$uuid, \$code)
    {
        \$constraint = new Uuid([
            'strict' => false,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 223, $this->source); })()), "html", null, true);
        echo "', '\"'.\$uuid.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidNonStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2_0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216Gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216fff40-98d9-11e3-a5e2_0800200c9a6', Uuid::INVALID_CHARACTERS_ERROR],
            ['216fff40-98d9-11e3-a5e-20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a6', Uuid::TOO_SHORT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a666', Uuid::TOO_LONG_ERROR],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/UuidValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 223,  172 => 128,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Uuid;
use Symfony\\Component\\Validator\\Constraints\\UuidValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class UuidValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new UuidValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Uuid());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Uuid());

        \$this->assertNoViolation();
    }

    public function testExpectsUuidConstraintCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException');
        \$constraint = \$this->getMockForAbstractClass('Symfony\\\\Component\\\\Validator\\\\Constraint');

        \$this->validator->validate('216fff40-98d9-11e3-a5e2-0800200c9a66', \$constraint);
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Uuid());
    }

    /**
     * @dataProvider getValidStrictUuids
     */
    public function testValidStrictUuids(\$uuid, \$versions = null)
    {
        \$constraint = new Uuid();

        if (null !== \$versions) {
            \$constraint->versions = \$versions;
        }

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2-0800200c9a66'], // Version 1 UUID in lowercase
            ['216fff40-98d9-11e3-a5e2-0800200c9a66', [Uuid::V1_MAC]],
            ['216FFF40-98D9-11E3-A5E2-0800200C9A66'], // Version 1 UUID in UPPERCASE
            ['456daefb-5aa6-41b5-8dbc-068b05a8b201'], // Version 4 UUID in lowercase
            ['456daEFb-5AA6-41B5-8DBC-068B05A8B201'], // Version 4 UUID in mixed case
            ['456daEFb-5AA6-41B5-8DBC-068B05A8B201', [Uuid::V4_RANDOM]],
        ];
    }

    /**
     * @dataProvider getValidStrictUuidsWithWhitespaces
     */
    public function testValidStrictUuidsWithWhitespaces(\$uuid, \$versions = null)
    {
        \$constraint = new Uuid(['normalizer' => 'trim']);

        if (null !== \$versions) {
            \$constraint->versions = \$versions;
        }

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidStrictUuidsWithWhitespaces()
    {
        return [
            [\"\\x20216fff40-98d9-11e3-a5e2-0800200c9a66\"], // Version 1 UUID in lowercase
            [\"\\x09\\x09216fff40-98d9-11e3-a5e2-0800200c9a66\", [Uuid::V1_MAC]],
            [\"216FFF40-98D9-11E3-A5E2-0800200C9A66\\x0A\"], // Version 1 UUID in UPPERCASE
            [\"456daefb-5aa6-41b5-8dbc-068b05a8b201\\x0D\\x0D\"], // Version 4 UUID in lowercase
            [\"\\x00456daEFb-5AA6-41B5-8DBC-068B05A8B201\\x00\"], // Version 4 UUID in mixed case
            [\"\\x0B\\x0B456daEFb-5AA6-41B5-8DBC-068B05A8B201\\x0B\\x0B\", [Uuid::V4_RANDOM]],
        ];
    }

    /**
     * @dataProvider getInvalidStrictUuids
     */
    public function testInvalidStrictUuids(\$uuid, \$code, \$versions = null)
    {
        \$constraint = new Uuid([
            'message' => 'testMessage',
        ]);

        if (null !== \$versions) {
            \$constraint->versions = \$versions;
        }

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->buildViolation('testMessage')
            ->setParameter('{{ value }}', '\"'.\$uuid.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2_0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216Gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216fff40-98d9-11e3-a5e-20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216f-ff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800-200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c-9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff4098d911e3a5e20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a6', Uuid::TOO_SHORT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a666', Uuid::TOO_LONG_ERROR],
            ['216fff40-98d9-01e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-61e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-71e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-81e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-91e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-a1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-b1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-c1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-d1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-e1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-f1e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR, [Uuid::V2_DCE, Uuid::V3_MD5, Uuid::V4_RANDOM, Uuid::V5_SHA1]],
            ['216fff40-98d9-21e3-a5e2-0800200c9a66', Uuid::INVALID_VERSION_ERROR, [Uuid::V1_MAC, Uuid::V3_MD5, Uuid::V4_RANDOM, Uuid::V5_SHA1]],
            ['216fff40-98d9-11e3-05e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-15e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-25e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-35e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-45e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-55e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-65e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-75e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-c5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-d5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-e5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],
            ['216fff40-98d9-11e3-f5e2-0800200c9a66', Uuid::INVALID_VARIANT_ERROR],

            // Non-standard UUID allowed by some other systems
            ['{216fff40-98d9-11e3-a5e2-0800200c9a66}', Uuid::INVALID_CHARACTERS_ERROR],
            ['[216fff40-98d9-11e3-a5e2-0800200c9a66]', Uuid::INVALID_CHARACTERS_ERROR],
        ];
    }

    /**
     * @dataProvider getValidNonStrictUuids
     */
    public function testValidNonStrictUuids(\$uuid)
    {
        \$constraint = new Uuid([
            'strict' => false,
        ]);

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidNonStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2-0800200c9a66'],    // Version 1 UUID in lowercase
            ['216FFF40-98D9-11E3-A5E2-0800200C9A66'],    // Version 1 UUID in UPPERCASE
            ['456daefb-5aa6-41b5-8dbc-068b05a8b201'],    // Version 4 UUID in lowercase
            ['456DAEFb-5AA6-41B5-8DBC-068b05a8B201'],    // Version 4 UUID in mixed case

            // Non-standard UUIDs allowed by some other systems
            ['216f-ff40-98d9-11e3-a5e2-0800-200c-9a66'], // Non-standard dash positions (every 4 chars)
            ['216fff40-98d911e3-a5e20800-200c9a66'],     // Non-standard dash positions (every 8 chars)
            ['216fff4098d911e3a5e20800200c9a66'],        // No dashes at all
            ['{216fff40-98d9-11e3-a5e2-0800200c9a66}'],  // Wrapped with curly braces
            ['[216fff40-98d9-11e3-a5e2-0800200c9a66]'],  // Wrapped with squared braces
        ];
    }

    /**
     * @dataProvider getInvalidNonStrictUuids
     */
    public function testInvalidNonStrictUuids(\$uuid, \$code)
    {
        \$constraint = new Uuid([
            'strict' => false,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$uuid, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$uuid.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidNonStrictUuids()
    {
        return [
            ['216fff40-98d9-11e3-a5e2_0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216Gff40-98d9-11e3-a5e2-0800200c9a66', Uuid::INVALID_CHARACTERS_ERROR],
            ['216fff40-98d9-11e3-a5e2_0800200c9a6', Uuid::INVALID_CHARACTERS_ERROR],
            ['216fff40-98d9-11e3-a5e-20800200c9a66', Uuid::INVALID_HYPHEN_PLACEMENT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a6', Uuid::TOO_SHORT_ERROR],
            ['216fff40-98d9-11e3-a5e2-0800200c9a666', Uuid::TOO_LONG_ERROR],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/UuidValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/UuidValidatorTest.php");
    }
}
