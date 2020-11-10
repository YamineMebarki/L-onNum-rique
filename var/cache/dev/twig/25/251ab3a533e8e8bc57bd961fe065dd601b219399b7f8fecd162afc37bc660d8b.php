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

/* vendor/symfony/validator/Tests/Constraints/IpValidatorTest.php */
class __TwigTemplate_811d82fecd4118640f721f5dde1c6d5cd445576675d67a9e41d1da70e97ef970 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IpValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IpValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Ip;
use Symfony\\Component\\Validator\\Constraints\\IpValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class IpValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new IpValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Ip());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Ip());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Ip());
    }

    public function testInvalidValidatorVersion()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Ip([
            'version' => 666,
        ]);
    }

    /**
     * @dataProvider getValidIpsV4
     */
    public function testValidIpsV4(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::V4,
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsV4()
    {
        return [
            ['0.0.0.0'],
            ['10.0.0.0'],
            ['123.45.67.178'],
            ['172.16.0.0'],
            ['192.168.1.0'],
            ['224.0.0.1'],
            ['255.255.255.255'],
            ['127.0.0.0'],
        ];
    }

    /**
     * @dataProvider getValidIpsV4WithWhitespaces
     */
    public function testValidIpsV4WithWhitespaces(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::V4,
            'normalizer' => 'trim',
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsV4WithWhitespaces()
    {
        return [
            [\"\\x200.0.0.0\"],
            [\"\\x09\\x0910.0.0.0\"],
            [\"123.45.67.178\\x0A\"],
            [\"172.16.0.0\\x0D\\x0D\"],
            [\"\\x00192.168.1.0\\x00\"],
            [\"\\x0B\\x0B224.0.0.1\\x0B\\x0B\"],
        ];
    }

    /**
     * @dataProvider getValidIpsV6
     */
    public function testValidIpsV6(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::V6,
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsV6()
    {
        return [
            ['2001:0db8:85a3:0000:0000:8a2e:0370:7334'],
            ['2001:0DB8:85A3:0000:0000:8A2E:0370:7334'],
            ['2001:0Db8:85a3:0000:0000:8A2e:0370:7334'],
            ['fdfe:dcba:9876:ffff:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:0000:8a2e:0370:7334'],
            ['fe80:0000:0000:0000:0202:b3ff:fe1e:8329'],
            ['fe80:0:0:0:202:b3ff:fe1e:8329'],
            ['fe80::202:b3ff:fe1e:8329'],
            ['0:0:0:0:0:0:0:0'],
            ['::'],
            ['0::'],
            ['::0'],
            ['0::0'],
            // IPv4 mapped to IPv6
            ['2001:0db8:85a3:0000:0000:8a2e:0.0.0.0'],
            ['::0.0.0.0'],
            ['::255.255.255.255'],
            ['::123.45.67.178'],
        ];
    }

    /**
     * @dataProvider getValidIpsAll
     */
    public function testValidIpsAll(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::ALL,
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsAll()
    {
        return array_merge(\$this->getValidIpsV4(), \$this->getValidIpsV6());
    }

    /**
     * @dataProvider getInvalidIpsV4
     */
    public function testInvalidIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidIpsV4()
    {
        return [
            ['0'],
            ['0.0'],
            ['0.0.0'],
            ['256.0.0.0'],
            ['0.256.0.0'],
            ['0.0.256.0'],
            ['0.0.0.256'],
            ['-1.0.0.0'],
            ['foobar'],
        ];
    }

    /**
     * @dataProvider getInvalidPrivateIpsV4
     */
    public function testInvalidPrivateIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4_NO_PRIV,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 204, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPrivateIpsV4()
    {
        return [
            ['10.0.0.0'],
            ['172.16.0.0'],
            ['192.168.1.0'],
        ];
    }

    /**
     * @dataProvider getInvalidReservedIpsV4
     */
    public function testInvalidReservedIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4_NO_RES,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidReservedIpsV4()
    {
        return [
            ['0.0.0.0'],
            ['240.0.0.1'],
            ['255.255.255.255'],
        ];
    }

    /**
     * @dataProvider getInvalidPublicIpsV4
     */
    public function testInvalidPublicIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4_ONLY_PUBLIC,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 258, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPublicIpsV4()
    {
        return array_merge(\$this->getInvalidPrivateIpsV4(), \$this->getInvalidReservedIpsV4());
    }

    /**
     * @dataProvider getInvalidIpsV6
     */
    public function testInvalidIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 281, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidIpsV6()
    {
        return [
            ['z001:0db8:85a3:0000:0000:8a2e:0370:7334'],
            ['fe80'],
            ['fe80:8329'],
            ['fe80:::202:b3ff:fe1e:8329'],
            ['fe80::202:b3ff::fe1e:8329'],
            // IPv4 mapped to IPv6
            ['2001:0db8:85a3:0000:0000:8a2e:0370:0.0.0.0'],
            ['::0.0'],
            ['::0.0.0'],
            ['::256.0.0.0'],
            ['::0.256.0.0'],
            ['::0.0.256.0'],
            ['::0.0.0.256'],
        ];
    }

    /**
     * @dataProvider getInvalidPrivateIpsV6
     */
    public function testInvalidPrivateIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6_NO_PRIV,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 318
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 318, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPrivateIpsV6()
    {
        return [
            ['fdfe:dcba:9876:ffff:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:0000:8a2e:0370:7334'],
        ];
    }

    /**
     * @dataProvider getInvalidReservedIpsV6
     */
    public function testInvalidReservedIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6_NO_RES,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 345
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 345, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidReservedIpsV6()
    {
        // Quoting after official filter documentation:
        // \"FILTER_FLAG_NO_RES_RANGE = This flag does not apply to IPv6 addresses.\"
        // Full description: https://php.net/filter.filters.flags
        return \$this->getInvalidIpsV6();
    }

    /**
     * @dataProvider getInvalidPublicIpsV6
     */
    public function testInvalidPublicIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6_ONLY_PUBLIC,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 371
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 371, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPublicIpsV6()
    {
        return array_merge(\$this->getInvalidPrivateIpsV6(), \$this->getInvalidReservedIpsV6());
    }

    /**
     * @dataProvider getInvalidIpsAll
     */
    public function testInvalidIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 394
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 394, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidIpsAll()
    {
        return array_merge(\$this->getInvalidIpsV4(), \$this->getInvalidIpsV6());
    }

    /**
     * @dataProvider getInvalidPrivateIpsAll
     */
    public function testInvalidPrivateIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL_NO_PRIV,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 417, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPrivateIpsAll()
    {
        return array_merge(\$this->getInvalidPrivateIpsV4(), \$this->getInvalidPrivateIpsV6());
    }

    /**
     * @dataProvider getInvalidReservedIpsAll
     */
    public function testInvalidReservedIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL_NO_RES,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 440, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidReservedIpsAll()
    {
        return array_merge(\$this->getInvalidReservedIpsV4(), \$this->getInvalidReservedIpsV6());
    }

    /**
     * @dataProvider getInvalidPublicIpsAll
     */
    public function testInvalidPublicIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL_ONLY_PUBLIC,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 463
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 463, $this->source); })()), "html", null, true);
        echo "', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPublicIpsAll()
    {
        return array_merge(\$this->getInvalidPublicIpsV4(), \$this->getInvalidPublicIpsV6());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/IpValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 463,  514 => 440,  488 => 417,  462 => 394,  436 => 371,  407 => 345,  377 => 318,  337 => 281,  311 => 258,  281 => 231,  251 => 204,  215 => 171,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Ip;
use Symfony\\Component\\Validator\\Constraints\\IpValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class IpValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new IpValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Ip());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Ip());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Ip());
    }

    public function testInvalidValidatorVersion()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Ip([
            'version' => 666,
        ]);
    }

    /**
     * @dataProvider getValidIpsV4
     */
    public function testValidIpsV4(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::V4,
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsV4()
    {
        return [
            ['0.0.0.0'],
            ['10.0.0.0'],
            ['123.45.67.178'],
            ['172.16.0.0'],
            ['192.168.1.0'],
            ['224.0.0.1'],
            ['255.255.255.255'],
            ['127.0.0.0'],
        ];
    }

    /**
     * @dataProvider getValidIpsV4WithWhitespaces
     */
    public function testValidIpsV4WithWhitespaces(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::V4,
            'normalizer' => 'trim',
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsV4WithWhitespaces()
    {
        return [
            [\"\\x200.0.0.0\"],
            [\"\\x09\\x0910.0.0.0\"],
            [\"123.45.67.178\\x0A\"],
            [\"172.16.0.0\\x0D\\x0D\"],
            [\"\\x00192.168.1.0\\x00\"],
            [\"\\x0B\\x0B224.0.0.1\\x0B\\x0B\"],
        ];
    }

    /**
     * @dataProvider getValidIpsV6
     */
    public function testValidIpsV6(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::V6,
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsV6()
    {
        return [
            ['2001:0db8:85a3:0000:0000:8a2e:0370:7334'],
            ['2001:0DB8:85A3:0000:0000:8A2E:0370:7334'],
            ['2001:0Db8:85a3:0000:0000:8A2e:0370:7334'],
            ['fdfe:dcba:9876:ffff:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:0000:8a2e:0370:7334'],
            ['fe80:0000:0000:0000:0202:b3ff:fe1e:8329'],
            ['fe80:0:0:0:202:b3ff:fe1e:8329'],
            ['fe80::202:b3ff:fe1e:8329'],
            ['0:0:0:0:0:0:0:0'],
            ['::'],
            ['0::'],
            ['::0'],
            ['0::0'],
            // IPv4 mapped to IPv6
            ['2001:0db8:85a3:0000:0000:8a2e:0.0.0.0'],
            ['::0.0.0.0'],
            ['::255.255.255.255'],
            ['::123.45.67.178'],
        ];
    }

    /**
     * @dataProvider getValidIpsAll
     */
    public function testValidIpsAll(\$ip)
    {
        \$this->validator->validate(\$ip, new Ip([
            'version' => Ip::ALL,
        ]));

        \$this->assertNoViolation();
    }

    public function getValidIpsAll()
    {
        return array_merge(\$this->getValidIpsV4(), \$this->getValidIpsV6());
    }

    /**
     * @dataProvider getInvalidIpsV4
     */
    public function testInvalidIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidIpsV4()
    {
        return [
            ['0'],
            ['0.0'],
            ['0.0.0'],
            ['256.0.0.0'],
            ['0.256.0.0'],
            ['0.0.256.0'],
            ['0.0.0.256'],
            ['-1.0.0.0'],
            ['foobar'],
        ];
    }

    /**
     * @dataProvider getInvalidPrivateIpsV4
     */
    public function testInvalidPrivateIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4_NO_PRIV,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPrivateIpsV4()
    {
        return [
            ['10.0.0.0'],
            ['172.16.0.0'],
            ['192.168.1.0'],
        ];
    }

    /**
     * @dataProvider getInvalidReservedIpsV4
     */
    public function testInvalidReservedIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4_NO_RES,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidReservedIpsV4()
    {
        return [
            ['0.0.0.0'],
            ['240.0.0.1'],
            ['255.255.255.255'],
        ];
    }

    /**
     * @dataProvider getInvalidPublicIpsV4
     */
    public function testInvalidPublicIpsV4(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V4_ONLY_PUBLIC,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPublicIpsV4()
    {
        return array_merge(\$this->getInvalidPrivateIpsV4(), \$this->getInvalidReservedIpsV4());
    }

    /**
     * @dataProvider getInvalidIpsV6
     */
    public function testInvalidIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidIpsV6()
    {
        return [
            ['z001:0db8:85a3:0000:0000:8a2e:0370:7334'],
            ['fe80'],
            ['fe80:8329'],
            ['fe80:::202:b3ff:fe1e:8329'],
            ['fe80::202:b3ff::fe1e:8329'],
            // IPv4 mapped to IPv6
            ['2001:0db8:85a3:0000:0000:8a2e:0370:0.0.0.0'],
            ['::0.0'],
            ['::0.0.0'],
            ['::256.0.0.0'],
            ['::0.256.0.0'],
            ['::0.0.256.0'],
            ['::0.0.0.256'],
        ];
    }

    /**
     * @dataProvider getInvalidPrivateIpsV6
     */
    public function testInvalidPrivateIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6_NO_PRIV,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPrivateIpsV6()
    {
        return [
            ['fdfe:dcba:9876:ffff:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:fdc6:c46b:bb8f:7d4c'],
            ['fdc6:c46b:bb8f:7d4c:0000:8a2e:0370:7334'],
        ];
    }

    /**
     * @dataProvider getInvalidReservedIpsV6
     */
    public function testInvalidReservedIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6_NO_RES,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidReservedIpsV6()
    {
        // Quoting after official filter documentation:
        // \"FILTER_FLAG_NO_RES_RANGE = This flag does not apply to IPv6 addresses.\"
        // Full description: https://php.net/filter.filters.flags
        return \$this->getInvalidIpsV6();
    }

    /**
     * @dataProvider getInvalidPublicIpsV6
     */
    public function testInvalidPublicIpsV6(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::V6_ONLY_PUBLIC,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPublicIpsV6()
    {
        return array_merge(\$this->getInvalidPrivateIpsV6(), \$this->getInvalidReservedIpsV6());
    }

    /**
     * @dataProvider getInvalidIpsAll
     */
    public function testInvalidIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidIpsAll()
    {
        return array_merge(\$this->getInvalidIpsV4(), \$this->getInvalidIpsV6());
    }

    /**
     * @dataProvider getInvalidPrivateIpsAll
     */
    public function testInvalidPrivateIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL_NO_PRIV,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPrivateIpsAll()
    {
        return array_merge(\$this->getInvalidPrivateIpsV4(), \$this->getInvalidPrivateIpsV6());
    }

    /**
     * @dataProvider getInvalidReservedIpsAll
     */
    public function testInvalidReservedIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL_NO_RES,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidReservedIpsAll()
    {
        return array_merge(\$this->getInvalidReservedIpsV4(), \$this->getInvalidReservedIpsV6());
    }

    /**
     * @dataProvider getInvalidPublicIpsAll
     */
    public function testInvalidPublicIpsAll(\$ip)
    {
        \$constraint = new Ip([
            'version' => Ip::ALL_ONLY_PUBLIC,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$ip, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$ip.'\"')
            ->setCode(Ip::INVALID_IP_ERROR)
            ->assertRaised();
    }

    public function getInvalidPublicIpsAll()
    {
        return array_merge(\$this->getInvalidPublicIpsV4(), \$this->getInvalidPublicIpsV6());
    }
}
", "vendor/symfony/validator/Tests/Constraints/IpValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/IpValidatorTest.php");
    }
}
