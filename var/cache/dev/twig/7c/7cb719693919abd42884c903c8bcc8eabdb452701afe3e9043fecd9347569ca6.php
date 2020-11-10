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

/* vendor/symfony/security-core/Tests/Encoder/SodiumPasswordEncoderTest.php */
class __TwigTemplate_0cd91d35070194c144b52e06c76b7dcb241d74ee4e2ddc27017a27b5f483a7fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/SodiumPasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/SodiumPasswordEncoderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Encoder\\SodiumPasswordEncoder;

class SodiumPasswordEncoderTest extends TestCase
{
    protected function setUp(): void
    {
        if (!SodiumPasswordEncoder::isSupported()) {
            \$this->markTestSkipped('Libsodium is not available.');
        }
    }

    public function testValidation()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$result = \$encoder->encodePassword('password', null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, 'password', null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testBCryptValidation()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$this->assertTrue(\$encoder->isPasswordValid('\$2y\$04\$M8GDODMoGQLQRpkYCdoJh.lbiZPee3SZI32RcYK49XYTolDGwoRMm', 'abc', null));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new SodiumPasswordEncoder();
        \$encoder->encodePassword(str_repeat('a', 4097), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$result = \$encoder->encodePassword(str_repeat('a', 4096), null);
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, str_repeat('a', 4097), null));
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, str_repeat('a', 4096), null));
    }

    public function testUserProvidedSaltIsNotUsed()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$result = \$encoder->encodePassword('password', 'salt');
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, 'password', 'anotherSalt'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/SodiumPasswordEncoderTest.php";
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
use Symfony\\Component\\Security\\Core\\Encoder\\SodiumPasswordEncoder;

class SodiumPasswordEncoderTest extends TestCase
{
    protected function setUp(): void
    {
        if (!SodiumPasswordEncoder::isSupported()) {
            \$this->markTestSkipped('Libsodium is not available.');
        }
    }

    public function testValidation()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$result = \$encoder->encodePassword('password', null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, 'password', null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testBCryptValidation()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$this->assertTrue(\$encoder->isPasswordValid('\$2y\$04\$M8GDODMoGQLQRpkYCdoJh.lbiZPee3SZI32RcYK49XYTolDGwoRMm', 'abc', null));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new SodiumPasswordEncoder();
        \$encoder->encodePassword(str_repeat('a', 4097), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$result = \$encoder->encodePassword(str_repeat('a', 4096), null);
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, str_repeat('a', 4097), null));
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, str_repeat('a', 4096), null));
    }

    public function testUserProvidedSaltIsNotUsed()
    {
        \$encoder = new SodiumPasswordEncoder();
        \$result = \$encoder->encodePassword('password', 'salt');
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, 'password', 'anotherSalt'));
    }
}
", "vendor/symfony/security-core/Tests/Encoder/SodiumPasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/SodiumPasswordEncoderTest.php");
    }
}
