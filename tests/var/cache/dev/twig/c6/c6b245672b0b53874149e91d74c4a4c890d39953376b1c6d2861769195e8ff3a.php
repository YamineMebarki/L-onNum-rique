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

/* vendor/symfony/security-core/Tests/Validator/Constraints/UserPasswordValidatorTest.php */
class __TwigTemplate_db17f1134a3083311d1f709da179e8dc77ea3f86d514ba76ac8ec047044c0d49 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Validator/Constraints/UserPasswordValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Validator/Constraints/UserPasswordValidatorTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Validator\\Constraints;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface;
use Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPassword;
use Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class UserPasswordValidatorTest extends ConstraintValidatorTestCase
{
    const PASSWORD = 's3Cr3t';
    const SALT = '^S4lt\$';

    /**
     * @var TokenStorageInterface
     */
    protected \$tokenStorage;

    /**
     * @var PasswordEncoderInterface
     */
    protected \$encoder;

    /**
     * @var EncoderFactoryInterface
     */
    protected \$encoderFactory;

    protected function createValidator()
    {
        return new UserPasswordValidator(\$this->tokenStorage, \$this->encoderFactory);
    }

    protected function setUp(): void
    {
        \$user = \$this->createUser();
        \$this->tokenStorage = \$this->createTokenStorage(\$user);
        \$this->encoder = \$this->createPasswordEncoder();
        \$this->encoderFactory = \$this->createEncoderFactory(\$this->encoder);

        parent::setUp();
    }

    public function testPasswordIsValid()
    {
        \$constraint = new UserPassword([
            'message' => 'myMessage',
        ]);

        \$this->encoder->expects(\$this->once())
            ->method('isPasswordValid')
            ->with(static::PASSWORD, 'secret', static::SALT)
            ->willReturn(true);

        \$this->validator->validate('secret', \$constraint);

        \$this->assertNoViolation();
    }

    public function testPasswordIsNotValid()
    {
        \$constraint = new UserPassword([
            'message' => 'myMessage',
        ]);

        \$this->encoder->expects(\$this->once())
            ->method('isPasswordValid')
            ->with(static::PASSWORD, 'secret', static::SALT)
            ->willReturn(false);

        \$this->validator->validate('secret', \$constraint);

        \$this->buildViolation('myMessage')
            ->assertRaised();
    }

    /**
     * @dataProvider emptyPasswordData
     */
    public function testEmptyPasswordsAreNotValid(\$password)
    {
        \$constraint = new UserPassword([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$password, \$constraint);

        \$this->buildViolation('myMessage')
            ->assertRaised();
    }

    public function emptyPasswordData()
    {
        return [
            [null],
            [''],
        ];
    }

    public function testUserIsNotValid()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$user = \$this->getMockBuilder('Foo\\Bar\\User')->getMock();

        \$this->tokenStorage = \$this->createTokenStorage(\$user);
        \$this->validator = \$this->createValidator();
        \$this->validator->initialize(\$this->context);

        \$this->validator->validate('secret', new UserPassword());
    }

    protected function createUser()
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();

        \$mock
            ->expects(\$this->any())
            ->method('getPassword')
            ->willReturn(static::PASSWORD)
        ;

        \$mock
            ->expects(\$this->any())
            ->method('getSalt')
            ->willReturn(static::SALT)
        ;

        return \$mock;
    }

    protected function createPasswordEncoder(\$isPasswordValid = true)
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface')->getMock();
    }

    protected function createEncoderFactory(\$encoder = null)
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface')->getMock();

        \$mock
            ->expects(\$this->any())
            ->method('getEncoder')
            ->willReturn(\$encoder)
        ;

        return \$mock;
    }

    protected function createTokenStorage(\$user = null)
    {
        \$token = \$this->createAuthenticationToken(\$user);

        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$mock
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$token)
        ;

        return \$mock;
    }

    protected function createAuthenticationToken(\$user = null)
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$mock
            ->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user)
        ;

        return \$mock;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Validator/Constraints/UserPasswordValidatorTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Validator\\Constraints;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface;
use Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPassword;
use Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class UserPasswordValidatorTest extends ConstraintValidatorTestCase
{
    const PASSWORD = 's3Cr3t';
    const SALT = '^S4lt\$';

    /**
     * @var TokenStorageInterface
     */
    protected \$tokenStorage;

    /**
     * @var PasswordEncoderInterface
     */
    protected \$encoder;

    /**
     * @var EncoderFactoryInterface
     */
    protected \$encoderFactory;

    protected function createValidator()
    {
        return new UserPasswordValidator(\$this->tokenStorage, \$this->encoderFactory);
    }

    protected function setUp(): void
    {
        \$user = \$this->createUser();
        \$this->tokenStorage = \$this->createTokenStorage(\$user);
        \$this->encoder = \$this->createPasswordEncoder();
        \$this->encoderFactory = \$this->createEncoderFactory(\$this->encoder);

        parent::setUp();
    }

    public function testPasswordIsValid()
    {
        \$constraint = new UserPassword([
            'message' => 'myMessage',
        ]);

        \$this->encoder->expects(\$this->once())
            ->method('isPasswordValid')
            ->with(static::PASSWORD, 'secret', static::SALT)
            ->willReturn(true);

        \$this->validator->validate('secret', \$constraint);

        \$this->assertNoViolation();
    }

    public function testPasswordIsNotValid()
    {
        \$constraint = new UserPassword([
            'message' => 'myMessage',
        ]);

        \$this->encoder->expects(\$this->once())
            ->method('isPasswordValid')
            ->with(static::PASSWORD, 'secret', static::SALT)
            ->willReturn(false);

        \$this->validator->validate('secret', \$constraint);

        \$this->buildViolation('myMessage')
            ->assertRaised();
    }

    /**
     * @dataProvider emptyPasswordData
     */
    public function testEmptyPasswordsAreNotValid(\$password)
    {
        \$constraint = new UserPassword([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$password, \$constraint);

        \$this->buildViolation('myMessage')
            ->assertRaised();
    }

    public function emptyPasswordData()
    {
        return [
            [null],
            [''],
        ];
    }

    public function testUserIsNotValid()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$user = \$this->getMockBuilder('Foo\\Bar\\User')->getMock();

        \$this->tokenStorage = \$this->createTokenStorage(\$user);
        \$this->validator = \$this->createValidator();
        \$this->validator->initialize(\$this->context);

        \$this->validator->validate('secret', new UserPassword());
    }

    protected function createUser()
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();

        \$mock
            ->expects(\$this->any())
            ->method('getPassword')
            ->willReturn(static::PASSWORD)
        ;

        \$mock
            ->expects(\$this->any())
            ->method('getSalt')
            ->willReturn(static::SALT)
        ;

        return \$mock;
    }

    protected function createPasswordEncoder(\$isPasswordValid = true)
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface')->getMock();
    }

    protected function createEncoderFactory(\$encoder = null)
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface')->getMock();

        \$mock
            ->expects(\$this->any())
            ->method('getEncoder')
            ->willReturn(\$encoder)
        ;

        return \$mock;
    }

    protected function createTokenStorage(\$user = null)
    {
        \$token = \$this->createAuthenticationToken(\$user);

        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$mock
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$token)
        ;

        return \$mock;
    }

    protected function createAuthenticationToken(\$user = null)
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$mock
            ->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user)
        ;

        return \$mock;
    }
}
", "vendor/symfony/security-core/Tests/Validator/Constraints/UserPasswordValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Validator/Constraints/UserPasswordValidatorTest.php");
    }
}
