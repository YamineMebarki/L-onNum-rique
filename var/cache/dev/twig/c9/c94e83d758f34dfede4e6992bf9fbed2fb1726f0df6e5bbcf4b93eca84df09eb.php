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

/* vendor/symfony/security-core/Tests/Encoder/Pbkdf2PasswordEncoderTest.php */
class __TwigTemplate_a6e00f969712b80ff468a4bb3091ea469c967003c40bf5f5df8a65f1b52d022d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/Pbkdf2PasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/Pbkdf2PasswordEncoderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder;

class Pbkdf2PasswordEncoderTest extends TestCase
{
    public function testIsPasswordValid()
    {
        \$encoder = new Pbkdf2PasswordEncoder('sha256', false, 1, 40);

        \$this->assertTrue(\$encoder->isPasswordValid('c1232f10f62715fda06ae7c0a2037ca19b33cf103b727ba56d870c11f290a2ab106974c75607c8a3', 'password', ''));
    }

    public function testEncodePassword()
    {
        \$encoder = new Pbkdf2PasswordEncoder('sha256', false, 1, 40);
        \$this->assertSame('c1232f10f62715fda06ae7c0a2037ca19b33cf103b727ba56d870c11f290a2ab106974c75607c8a3', \$encoder->encodePassword('password', ''));

        \$encoder = new Pbkdf2PasswordEncoder('sha256', true, 1, 40);
        \$this->assertSame('wSMvEPYnFf2gaufAogN8oZszzxA7cnulbYcMEfKQoqsQaXTHVgfIow==', \$encoder->encodePassword('password', ''));

        \$encoder = new Pbkdf2PasswordEncoder('sha256', false, 2, 40);
        \$this->assertSame('8bc2f9167a81cdcfad1235cd9047f1136271c1f978fcfcb35e22dbeafa4634f6fd2214218ed63ebb', \$encoder->encodePassword('password', ''));
    }

    public function testEncodePasswordAlgorithmDoesNotExist()
    {
        \$this->expectException('LogicException');
        \$encoder = new Pbkdf2PasswordEncoder('foobar');
        \$encoder->encodePassword('password', '');
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new Pbkdf2PasswordEncoder('foobar');

        \$encoder->encodePassword(str_repeat('a', 5000), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new Pbkdf2PasswordEncoder('foobar');

        \$this->assertFalse(\$encoder->isPasswordValid('encoded', str_repeat('a', 5000), 'salt'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/Pbkdf2PasswordEncoderTest.php";
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
use Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder;

class Pbkdf2PasswordEncoderTest extends TestCase
{
    public function testIsPasswordValid()
    {
        \$encoder = new Pbkdf2PasswordEncoder('sha256', false, 1, 40);

        \$this->assertTrue(\$encoder->isPasswordValid('c1232f10f62715fda06ae7c0a2037ca19b33cf103b727ba56d870c11f290a2ab106974c75607c8a3', 'password', ''));
    }

    public function testEncodePassword()
    {
        \$encoder = new Pbkdf2PasswordEncoder('sha256', false, 1, 40);
        \$this->assertSame('c1232f10f62715fda06ae7c0a2037ca19b33cf103b727ba56d870c11f290a2ab106974c75607c8a3', \$encoder->encodePassword('password', ''));

        \$encoder = new Pbkdf2PasswordEncoder('sha256', true, 1, 40);
        \$this->assertSame('wSMvEPYnFf2gaufAogN8oZszzxA7cnulbYcMEfKQoqsQaXTHVgfIow==', \$encoder->encodePassword('password', ''));

        \$encoder = new Pbkdf2PasswordEncoder('sha256', false, 2, 40);
        \$this->assertSame('8bc2f9167a81cdcfad1235cd9047f1136271c1f978fcfcb35e22dbeafa4634f6fd2214218ed63ebb', \$encoder->encodePassword('password', ''));
    }

    public function testEncodePasswordAlgorithmDoesNotExist()
    {
        \$this->expectException('LogicException');
        \$encoder = new Pbkdf2PasswordEncoder('foobar');
        \$encoder->encodePassword('password', '');
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new Pbkdf2PasswordEncoder('foobar');

        \$encoder->encodePassword(str_repeat('a', 5000), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new Pbkdf2PasswordEncoder('foobar');

        \$this->assertFalse(\$encoder->isPasswordValid('encoded', str_repeat('a', 5000), 'salt'));
    }
}
", "vendor/symfony/security-core/Tests/Encoder/Pbkdf2PasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/Pbkdf2PasswordEncoderTest.php");
    }
}
