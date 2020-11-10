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

/* vendor/symfony/validator/Tests/Constraints/LocaleValidatorTest.php */
class __TwigTemplate_84988ab2994fe93f6fe8c093c9aebcc94b470f76f3026e3aa325d74ac390dd0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LocaleValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LocaleValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Locale;
use Symfony\\Component\\Validator\\Constraints\\LocaleValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LocaleValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new LocaleValidator();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     *
     * @dataProvider getValidLocales
     */
    public function testLegacyNullIsValid()
    {
        \$this->validator->validate(null, new Locale());

        \$this->assertNoViolation();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Locale(['canonicalize' => true]));

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     *
     * @dataProvider getValidLocales
     */
    public function testLegacyEmptyStringIsValid()
    {
        \$this->validator->validate('', new Locale());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Locale(['canonicalize' => true]));

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     */
    public function testLegacyExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException');
        \$this->validator->validate(new \\stdClass(), new Locale());
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Locale(['canonicalize' => true]));
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     *
     * @dataProvider getValidLocales
     */
    public function testLegacyValidLocales(string \$locale)
    {
        \$this->validator->validate(\$locale, new Locale());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidLocales
     */
    public function testValidLocales(\$locale, array \$options)
    {
        \$this->validator->validate(\$locale, new Locale(\$options));

        \$this->assertNoViolation();
    }

    public function getValidLocales()
    {
        return [
            ['en', ['canonicalize' => true]],
            ['en_US', ['canonicalize' => true]],
            ['pt', ['canonicalize' => true]],
            ['pt_PT', ['canonicalize' => true]],
            ['zh_Hans', ['canonicalize' => true]],
            ['tl_PH', ['canonicalize' => true]],
            ['fil_PH', ['canonicalize' => true]], // alias for \"tl_PH\"
        ];
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     * @dataProvider getLegacyInvalidLocales
     */
    public function testLegacyInvalidLocales(string \$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "', '\"'.\$locale.'\"')
            ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
            ->assertRaised();
    }

    public function getLegacyInvalidLocales()
    {
        return [
            ['EN'],
            ['foobar'],
        ];
    }

    /**
     * @dataProvider getInvalidLocales
     */
    public function testInvalidLocales(\$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
            'canonicalize' => true,
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "', '\"'.\$locale.'\"')
            ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
            ->assertRaised();
    }

    public function getInvalidLocales()
    {
        return [
            ['baz'],
            ['foobar'],
        ];
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     * @dataProvider getUncanonicalizedLocales
     */
    public function testInvalidLocalesWithoutCanonicalization(string \$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "', '\"'.\$locale.'\"')
            ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getUncanonicalizedLocales
     */
    public function testValidLocalesWithCanonicalization(string \$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
            'canonicalize' => true,
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->assertNoViolation();
    }

    public function getUncanonicalizedLocales(): iterable
    {
        return [
            ['en-US'],
            ['es-AR'],
            ['fr_FR.utf8'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/LocaleValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 184,  204 => 157,  175 => 131,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Locale;
use Symfony\\Component\\Validator\\Constraints\\LocaleValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LocaleValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new LocaleValidator();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     *
     * @dataProvider getValidLocales
     */
    public function testLegacyNullIsValid()
    {
        \$this->validator->validate(null, new Locale());

        \$this->assertNoViolation();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Locale(['canonicalize' => true]));

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     *
     * @dataProvider getValidLocales
     */
    public function testLegacyEmptyStringIsValid()
    {
        \$this->validator->validate('', new Locale());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Locale(['canonicalize' => true]));

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     */
    public function testLegacyExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException');
        \$this->validator->validate(new \\stdClass(), new Locale());
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Locale(['canonicalize' => true]));
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     *
     * @dataProvider getValidLocales
     */
    public function testLegacyValidLocales(string \$locale)
    {
        \$this->validator->validate(\$locale, new Locale());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidLocales
     */
    public function testValidLocales(\$locale, array \$options)
    {
        \$this->validator->validate(\$locale, new Locale(\$options));

        \$this->assertNoViolation();
    }

    public function getValidLocales()
    {
        return [
            ['en', ['canonicalize' => true]],
            ['en_US', ['canonicalize' => true]],
            ['pt', ['canonicalize' => true]],
            ['pt_PT', ['canonicalize' => true]],
            ['zh_Hans', ['canonicalize' => true]],
            ['tl_PH', ['canonicalize' => true]],
            ['fil_PH', ['canonicalize' => true]], // alias for \"tl_PH\"
        ];
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     * @dataProvider getLegacyInvalidLocales
     */
    public function testLegacyInvalidLocales(string \$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$locale.'\"')
            ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
            ->assertRaised();
    }

    public function getLegacyInvalidLocales()
    {
        return [
            ['EN'],
            ['foobar'],
        ];
    }

    /**
     * @dataProvider getInvalidLocales
     */
    public function testInvalidLocales(\$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
            'canonicalize' => true,
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$locale.'\"')
            ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
            ->assertRaised();
    }

    public function getInvalidLocales()
    {
        return [
            ['baz'],
            ['foobar'],
        ];
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.
     * @dataProvider getUncanonicalizedLocales
     */
    public function testInvalidLocalesWithoutCanonicalization(string \$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$locale.'\"')
            ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getUncanonicalizedLocales
     */
    public function testValidLocalesWithCanonicalization(string \$locale)
    {
        \$constraint = new Locale([
            'message' => 'myMessage',
            'canonicalize' => true,
        ]);

        \$this->validator->validate(\$locale, \$constraint);

        \$this->assertNoViolation();
    }

    public function getUncanonicalizedLocales(): iterable
    {
        return [
            ['en-US'],
            ['es-AR'],
            ['fr_FR.utf8'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/LocaleValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/LocaleValidatorTest.php");
    }
}
