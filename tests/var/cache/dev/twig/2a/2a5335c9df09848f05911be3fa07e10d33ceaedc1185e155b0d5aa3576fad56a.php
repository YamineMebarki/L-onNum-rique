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

/* vendor/symfony/security-core/Tests/Encoder/EncoderFactoryTest.php */
class __TwigTemplate_2697f8b0c43100228e53875adf12da349510d044ec698b71894c3988faf26baa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/EncoderFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/EncoderFactoryTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderAwareInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory;
use Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class EncoderFactoryTest extends TestCase
{
    public function testGetEncoderWithMessageDigestEncoder()
    {
        \$factory = new EncoderFactory(['Symfony\\Component\\Security\\Core\\User\\UserInterface' => [
            'class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'arguments' => ['sha512', true, 5],
        ]]);

        \$encoder = \$factory->getEncoder(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock());
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha512', true, 5);

        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', 'moo'), \$encoder->encodePassword('foo', 'moo'));
    }

    public function testGetEncoderWithService()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\User\\UserInterface' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock());
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));

        \$encoder = \$factory->getEncoder(new User('user', 'pass'));
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetEncoderWithClassName()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\User\\UserInterface' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder('Symfony\\Component\\Security\\Core\\Tests\\Encoder\\SomeChildUser');
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetEncoderConfiguredForConcreteClassWithService()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\User\\User' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder(new User('user', 'pass'));
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetEncoderConfiguredForConcreteClassWithClassName()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\SomeUser' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder('Symfony\\Component\\Security\\Core\\Tests\\Encoder\\SomeChildUser');
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetNamedEncoderForEncoderAware()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha256'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder(new EncAwareUser('user', 'pass'));
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetNullNamedEncoderForEncoderAware()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha1'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha256'),
        ]);

        \$user = new EncAwareUser('user', 'pass');
        \$user->encoderName = null;
        \$encoder = \$factory->getEncoder(\$user);
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetInvalidNamedEncoderForEncoderAware()
    {
        \$this->expectException('RuntimeException');
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha1'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha256'),
        ]);

        \$user = new EncAwareUser('user', 'pass');
        \$user->encoderName = 'invalid_encoder_name';
        \$encoder = \$factory->getEncoder(\$user);
    }

    public function testGetEncoderForEncoderAwareWithClassName()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha1'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha256'),
        ]);

        \$encoder = \$factory->getEncoder('Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser');
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }
}

class SomeUser implements UserInterface
{
    public function getRoles()
    {
    }

    public function getPassword()
    {
    }

    public function getSalt()
    {
    }

    public function getUsername()
    {
    }

    public function eraseCredentials()
    {
    }
}

class SomeChildUser extends SomeUser
{
}

class EncAwareUser extends SomeUser implements EncoderAwareInterface
{
    public \$encoderName = 'encoder_name';

    public function getEncoderName()
    {
        return \$this->encoderName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/EncoderFactoryTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderAwareInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory;
use Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class EncoderFactoryTest extends TestCase
{
    public function testGetEncoderWithMessageDigestEncoder()
    {
        \$factory = new EncoderFactory(['Symfony\\Component\\Security\\Core\\User\\UserInterface' => [
            'class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'arguments' => ['sha512', true, 5],
        ]]);

        \$encoder = \$factory->getEncoder(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock());
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha512', true, 5);

        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', 'moo'), \$encoder->encodePassword('foo', 'moo'));
    }

    public function testGetEncoderWithService()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\User\\UserInterface' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock());
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));

        \$encoder = \$factory->getEncoder(new User('user', 'pass'));
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetEncoderWithClassName()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\User\\UserInterface' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder('Symfony\\Component\\Security\\Core\\Tests\\Encoder\\SomeChildUser');
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetEncoderConfiguredForConcreteClassWithService()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\User\\User' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder(new User('user', 'pass'));
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetEncoderConfiguredForConcreteClassWithClassName()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\SomeUser' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder('Symfony\\Component\\Security\\Core\\Tests\\Encoder\\SomeChildUser');
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetNamedEncoderForEncoderAware()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha256'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha1'),
        ]);

        \$encoder = \$factory->getEncoder(new EncAwareUser('user', 'pass'));
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetNullNamedEncoderForEncoderAware()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha1'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha256'),
        ]);

        \$user = new EncAwareUser('user', 'pass');
        \$user->encoderName = null;
        \$encoder = \$factory->getEncoder(\$user);
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }

    public function testGetInvalidNamedEncoderForEncoderAware()
    {
        \$this->expectException('RuntimeException');
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha1'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha256'),
        ]);

        \$user = new EncAwareUser('user', 'pass');
        \$user->encoderName = 'invalid_encoder_name';
        \$encoder = \$factory->getEncoder(\$user);
    }

    public function testGetEncoderForEncoderAwareWithClassName()
    {
        \$factory = new EncoderFactory([
            'Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser' => new MessageDigestPasswordEncoder('sha1'),
            'encoder_name' => new MessageDigestPasswordEncoder('sha256'),
        ]);

        \$encoder = \$factory->getEncoder('Symfony\\Component\\Security\\Core\\Tests\\Encoder\\EncAwareUser');
        \$expectedEncoder = new MessageDigestPasswordEncoder('sha1');
        \$this->assertEquals(\$expectedEncoder->encodePassword('foo', ''), \$encoder->encodePassword('foo', ''));
    }
}

class SomeUser implements UserInterface
{
    public function getRoles()
    {
    }

    public function getPassword()
    {
    }

    public function getSalt()
    {
    }

    public function getUsername()
    {
    }

    public function eraseCredentials()
    {
    }
}

class SomeChildUser extends SomeUser
{
}

class EncAwareUser extends SomeUser implements EncoderAwareInterface
{
    public \$encoderName = 'encoder_name';

    public function getEncoderName()
    {
        return \$this->encoderName;
    }
}
", "vendor/symfony/security-core/Tests/Encoder/EncoderFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/EncoderFactoryTest.php");
    }
}
