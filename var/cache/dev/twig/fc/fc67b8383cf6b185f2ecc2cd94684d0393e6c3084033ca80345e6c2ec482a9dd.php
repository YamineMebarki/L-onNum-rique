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

/* vendor/symfony/security-core/Tests/Encoder/Argon2iPasswordEncoderTest.php */
class __TwigTemplate_ea82215bc1e96720a3dcbb603f771651e3be37354b602a15dede500c74d199c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/Argon2iPasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/Argon2iPasswordEncoderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Encoder\\Argon2iPasswordEncoder;

/**
 * @author Zan Baldwin <hello@zanbaldwin.com>
 *
 * @group legacy
 */
class Argon2iPasswordEncoderTest extends TestCase
{
    const PASSWORD = 'password';

    protected function setUp(): void
    {
        if (!Argon2iPasswordEncoder::isSupported()) {
            \$this->markTestSkipped('Argon2i algorithm is not supported.');
        }
    }

    public function testValidationWithConfig()
    {
        \$encoder = new Argon2iPasswordEncoder(8, 4, 1);
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testValidation()
    {
        \$encoder = new Argon2iPasswordEncoder();
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new Argon2iPasswordEncoder();
        \$encoder->encodePassword(str_repeat('a', 4097), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new Argon2iPasswordEncoder();
        \$result = \$encoder->encodePassword(str_repeat('a', 4096), null);
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, str_repeat('a', 4097), null));
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, str_repeat('a', 4096), null));
    }

    public function testUserProvidedSaltIsNotUsed()
    {
        \$encoder = new Argon2iPasswordEncoder();
        \$result = \$encoder->encodePassword(self::PASSWORD, 'salt');
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, 'anotherSalt'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/Argon2iPasswordEncoderTest.php";
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
use Symfony\\Component\\Security\\Core\\Encoder\\Argon2iPasswordEncoder;

/**
 * @author Zan Baldwin <hello@zanbaldwin.com>
 *
 * @group legacy
 */
class Argon2iPasswordEncoderTest extends TestCase
{
    const PASSWORD = 'password';

    protected function setUp(): void
    {
        if (!Argon2iPasswordEncoder::isSupported()) {
            \$this->markTestSkipped('Argon2i algorithm is not supported.');
        }
    }

    public function testValidationWithConfig()
    {
        \$encoder = new Argon2iPasswordEncoder(8, 4, 1);
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testValidation()
    {
        \$encoder = new Argon2iPasswordEncoder();
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new Argon2iPasswordEncoder();
        \$encoder->encodePassword(str_repeat('a', 4097), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new Argon2iPasswordEncoder();
        \$result = \$encoder->encodePassword(str_repeat('a', 4096), null);
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, str_repeat('a', 4097), null));
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, str_repeat('a', 4096), null));
    }

    public function testUserProvidedSaltIsNotUsed()
    {
        \$encoder = new Argon2iPasswordEncoder();
        \$result = \$encoder->encodePassword(self::PASSWORD, 'salt');
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, 'anotherSalt'));
    }
}
", "vendor/symfony/security-core/Tests/Encoder/Argon2iPasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/Argon2iPasswordEncoderTest.php");
    }
}
