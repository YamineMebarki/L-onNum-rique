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

/* vendor/symfony/validator/Tests/Constraints/IssnValidatorTest.php */
class __TwigTemplate_d8ee0e1d3953f8d722589ce77d18ef9254fd71fa449f4f7957e11fb270970aef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IssnValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IssnValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Issn;
use Symfony\\Component\\Validator\\Constraints\\IssnValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @see https://en.wikipedia.org/wiki/Issn
 */
class IssnValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new IssnValidator();
    }

    public function getValidLowerCasedIssn()
    {
        return [
            ['2162-321x'],
            ['2160-200x'],
            ['1537-453x'],
            ['1937-710x'],
            ['0002-922x'],
            ['1553-345x'],
            ['1553-619x'],
        ];
    }

    public function getValidNonHyphenatedIssn()
    {
        return [
            ['2162321X'],
            ['01896016'],
            ['15744647'],
            ['14350645'],
            ['07174055'],
            ['20905076'],
            ['14401592'],
        ];
    }

    public function getFullValidIssn()
    {
        return [
            ['1550-7416'],
            ['1539-8560'],
            ['2156-5376'],
            ['1119-023X'],
            ['1684-5315'],
            ['1996-0786'],
            ['1684-5374'],
            ['1996-0794'],
        ];
    }

    public function getValidIssn()
    {
        return array_merge(
            \$this->getValidLowerCasedIssn(),
            \$this->getValidNonHyphenatedIssn(),
            \$this->getFullValidIssn()
        );
    }

    public function getInvalidIssn()
    {
        return [
            [0, Issn::TOO_SHORT_ERROR],
            ['1539', Issn::TOO_SHORT_ERROR],
            ['2156-537A', Issn::INVALID_CHARACTERS_ERROR],
            ['1119-0231', Issn::CHECKSUM_FAILED_ERROR],
            ['1684-5312', Issn::CHECKSUM_FAILED_ERROR],
            ['1996-0783', Issn::CHECKSUM_FAILED_ERROR],
            ['1684-537X', Issn::CHECKSUM_FAILED_ERROR],
            ['1996-0795', Issn::CHECKSUM_FAILED_ERROR],
        ];
    }

    public function testNullIsValid()
    {
        \$constraint = new Issn();

        \$this->validator->validate(null, \$constraint);

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$constraint = new Issn();

        \$this->validator->validate('', \$constraint);

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$constraint = new Issn();
        \$this->validator->validate(new \\stdClass(), \$constraint);
    }

    /**
     * @dataProvider getValidLowerCasedIssn
     */
    public function testCaseSensitiveIssns(\$issn)
    {
        \$constraint = new Issn([
            'caseSensitive' => true,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$issn, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "', '\"'.\$issn.'\"')
            ->setCode(Issn::INVALID_CASE_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidNonHyphenatedIssn
     */
    public function testRequireHyphenIssns(\$issn)
    {
        \$constraint = new Issn([
            'requireHyphen' => true,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$issn, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "', '\"'.\$issn.'\"')
            ->setCode(Issn::MISSING_HYPHEN_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidIssn
     */
    public function testValidIssn(\$issn)
    {
        \$constraint = new Issn();

        \$this->validator->validate(\$issn, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidIssn
     */
    public function testInvalidIssn(\$issn, \$code)
    {
        \$constraint = new Issn([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$issn, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "', '\"'.\$issn.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/IssnValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 176,  194 => 147,  173 => 129,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Issn;
use Symfony\\Component\\Validator\\Constraints\\IssnValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @see https://en.wikipedia.org/wiki/Issn
 */
class IssnValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new IssnValidator();
    }

    public function getValidLowerCasedIssn()
    {
        return [
            ['2162-321x'],
            ['2160-200x'],
            ['1537-453x'],
            ['1937-710x'],
            ['0002-922x'],
            ['1553-345x'],
            ['1553-619x'],
        ];
    }

    public function getValidNonHyphenatedIssn()
    {
        return [
            ['2162321X'],
            ['01896016'],
            ['15744647'],
            ['14350645'],
            ['07174055'],
            ['20905076'],
            ['14401592'],
        ];
    }

    public function getFullValidIssn()
    {
        return [
            ['1550-7416'],
            ['1539-8560'],
            ['2156-5376'],
            ['1119-023X'],
            ['1684-5315'],
            ['1996-0786'],
            ['1684-5374'],
            ['1996-0794'],
        ];
    }

    public function getValidIssn()
    {
        return array_merge(
            \$this->getValidLowerCasedIssn(),
            \$this->getValidNonHyphenatedIssn(),
            \$this->getFullValidIssn()
        );
    }

    public function getInvalidIssn()
    {
        return [
            [0, Issn::TOO_SHORT_ERROR],
            ['1539', Issn::TOO_SHORT_ERROR],
            ['2156-537A', Issn::INVALID_CHARACTERS_ERROR],
            ['1119-0231', Issn::CHECKSUM_FAILED_ERROR],
            ['1684-5312', Issn::CHECKSUM_FAILED_ERROR],
            ['1996-0783', Issn::CHECKSUM_FAILED_ERROR],
            ['1684-537X', Issn::CHECKSUM_FAILED_ERROR],
            ['1996-0795', Issn::CHECKSUM_FAILED_ERROR],
        ];
    }

    public function testNullIsValid()
    {
        \$constraint = new Issn();

        \$this->validator->validate(null, \$constraint);

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$constraint = new Issn();

        \$this->validator->validate('', \$constraint);

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$constraint = new Issn();
        \$this->validator->validate(new \\stdClass(), \$constraint);
    }

    /**
     * @dataProvider getValidLowerCasedIssn
     */
    public function testCaseSensitiveIssns(\$issn)
    {
        \$constraint = new Issn([
            'caseSensitive' => true,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$issn, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$issn.'\"')
            ->setCode(Issn::INVALID_CASE_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidNonHyphenatedIssn
     */
    public function testRequireHyphenIssns(\$issn)
    {
        \$constraint = new Issn([
            'requireHyphen' => true,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$issn, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$issn.'\"')
            ->setCode(Issn::MISSING_HYPHEN_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidIssn
     */
    public function testValidIssn(\$issn)
    {
        \$constraint = new Issn();

        \$this->validator->validate(\$issn, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidIssn
     */
    public function testInvalidIssn(\$issn, \$code)
    {
        \$constraint = new Issn([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$issn, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$issn.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }
}
", "vendor/symfony/validator/Tests/Constraints/IssnValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/IssnValidatorTest.php");
    }
}
