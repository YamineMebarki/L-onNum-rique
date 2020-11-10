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

/* vendor/symfony/security-core/Tests/Encoder/UserPasswordEncoderTest.php */
class __TwigTemplate_fa2d0f0c4e716e11544d936078871a927a10964b51829de6b253e9fedfa34dee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/UserPasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/UserPasswordEncoderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder;

class UserPasswordEncoderTest extends TestCase
{
    public function testEncodePassword()
    {
        \$userMock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$userMock->expects(\$this->any())
            ->method('getSalt')
            ->willReturn('userSalt');

        \$mockEncoder = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface')->getMock();
        \$mockEncoder->expects(\$this->any())
            ->method('encodePassword')
            ->with(\$this->equalTo('plainPassword'), \$this->equalTo('userSalt'))
            ->willReturn('encodedPassword');

        \$mockEncoderFactory = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface')->getMock();
        \$mockEncoderFactory->expects(\$this->any())
            ->method('getEncoder')
            ->with(\$this->equalTo(\$userMock))
            ->willReturn(\$mockEncoder);

        \$passwordEncoder = new UserPasswordEncoder(\$mockEncoderFactory);

        \$encoded = \$passwordEncoder->encodePassword(\$userMock, 'plainPassword');
        \$this->assertEquals('encodedPassword', \$encoded);
    }

    public function testIsPasswordValid()
    {
        \$userMock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$userMock->expects(\$this->any())
            ->method('getSalt')
            ->willReturn('userSalt');
        \$userMock->expects(\$this->any())
            ->method('getPassword')
            ->willReturn('encodedPassword');

        \$mockEncoder = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface')->getMock();
        \$mockEncoder->expects(\$this->any())
            ->method('isPasswordValid')
            ->with(\$this->equalTo('encodedPassword'), \$this->equalTo('plainPassword'), \$this->equalTo('userSalt'))
            ->willReturn(true);

        \$mockEncoderFactory = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface')->getMock();
        \$mockEncoderFactory->expects(\$this->any())
            ->method('getEncoder')
            ->with(\$this->equalTo(\$userMock))
            ->willReturn(\$mockEncoder);

        \$passwordEncoder = new UserPasswordEncoder(\$mockEncoderFactory);

        \$isValid = \$passwordEncoder->isPasswordValid(\$userMock, 'plainPassword');
        \$this->assertTrue(\$isValid);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/UserPasswordEncoderTest.php";
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
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder;

class UserPasswordEncoderTest extends TestCase
{
    public function testEncodePassword()
    {
        \$userMock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$userMock->expects(\$this->any())
            ->method('getSalt')
            ->willReturn('userSalt');

        \$mockEncoder = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface')->getMock();
        \$mockEncoder->expects(\$this->any())
            ->method('encodePassword')
            ->with(\$this->equalTo('plainPassword'), \$this->equalTo('userSalt'))
            ->willReturn('encodedPassword');

        \$mockEncoderFactory = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface')->getMock();
        \$mockEncoderFactory->expects(\$this->any())
            ->method('getEncoder')
            ->with(\$this->equalTo(\$userMock))
            ->willReturn(\$mockEncoder);

        \$passwordEncoder = new UserPasswordEncoder(\$mockEncoderFactory);

        \$encoded = \$passwordEncoder->encodePassword(\$userMock, 'plainPassword');
        \$this->assertEquals('encodedPassword', \$encoded);
    }

    public function testIsPasswordValid()
    {
        \$userMock = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$userMock->expects(\$this->any())
            ->method('getSalt')
            ->willReturn('userSalt');
        \$userMock->expects(\$this->any())
            ->method('getPassword')
            ->willReturn('encodedPassword');

        \$mockEncoder = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\PasswordEncoderInterface')->getMock();
        \$mockEncoder->expects(\$this->any())
            ->method('isPasswordValid')
            ->with(\$this->equalTo('encodedPassword'), \$this->equalTo('plainPassword'), \$this->equalTo('userSalt'))
            ->willReturn(true);

        \$mockEncoderFactory = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface')->getMock();
        \$mockEncoderFactory->expects(\$this->any())
            ->method('getEncoder')
            ->with(\$this->equalTo(\$userMock))
            ->willReturn(\$mockEncoder);

        \$passwordEncoder = new UserPasswordEncoder(\$mockEncoderFactory);

        \$isValid = \$passwordEncoder->isPasswordValid(\$userMock, 'plainPassword');
        \$this->assertTrue(\$isValid);
    }
}
", "vendor/symfony/security-core/Tests/Encoder/UserPasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/UserPasswordEncoderTest.php");
    }
}
