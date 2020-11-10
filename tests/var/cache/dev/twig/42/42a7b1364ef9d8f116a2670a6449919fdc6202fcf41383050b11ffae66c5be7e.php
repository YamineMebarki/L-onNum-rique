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

/* vendor/symfony/security-core/Tests/Encoder/BasePasswordEncoderTest.php */
class __TwigTemplate_bf33ddb928dd147310fbd8a49c944e06d5b1f7b07ce0f0f8e96a31afe6788904 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/BasePasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/BasePasswordEncoderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Encoder\\BasePasswordEncoder;

class PasswordEncoder extends BasePasswordEncoder
{
    public function encodePassword(\$raw, \$salt)
    {
    }

    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
    }
}

class BasePasswordEncoderTest extends TestCase
{
    public function testComparePassword()
    {
        \$this->assertTrue(\$this->invokeComparePasswords('password', 'password'));
        \$this->assertFalse(\$this->invokeComparePasswords('password', 'foo'));
    }

    public function testDemergePasswordAndSalt()
    {
        \$this->assertEquals(['password', 'salt'], \$this->invokeDemergePasswordAndSalt('password{salt}'));
        \$this->assertEquals(['password', ''], \$this->invokeDemergePasswordAndSalt('password'));
        \$this->assertEquals(['', ''], \$this->invokeDemergePasswordAndSalt(''));
    }

    public function testMergePasswordAndSalt()
    {
        \$this->assertEquals('password{salt}', \$this->invokeMergePasswordAndSalt('password', 'salt'));
        \$this->assertEquals('password', \$this->invokeMergePasswordAndSalt('password', ''));
    }

    public function testMergePasswordAndSaltWithException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->invokeMergePasswordAndSalt('password', '{foo}');
    }

    public function testIsPasswordTooLong()
    {
        \$this->assertTrue(\$this->invokeIsPasswordTooLong(str_repeat('a', 10000)));
        \$this->assertFalse(\$this->invokeIsPasswordTooLong(str_repeat('a', 10)));
    }

    protected function invokeDemergePasswordAndSalt(\$password)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('demergePasswordAndSalt');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$password);
    }

    protected function invokeMergePasswordAndSalt(\$password, \$salt)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('mergePasswordAndSalt');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$password, \$salt);
    }

    protected function invokeComparePasswords(\$p1, \$p2)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('comparePasswords');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$p1, \$p2);
    }

    protected function invokeIsPasswordTooLong(\$p)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('isPasswordTooLong');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$p);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/BasePasswordEncoderTest.php";
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
use Symfony\\Component\\Security\\Core\\Encoder\\BasePasswordEncoder;

class PasswordEncoder extends BasePasswordEncoder
{
    public function encodePassword(\$raw, \$salt)
    {
    }

    public function isPasswordValid(\$encoded, \$raw, \$salt)
    {
    }
}

class BasePasswordEncoderTest extends TestCase
{
    public function testComparePassword()
    {
        \$this->assertTrue(\$this->invokeComparePasswords('password', 'password'));
        \$this->assertFalse(\$this->invokeComparePasswords('password', 'foo'));
    }

    public function testDemergePasswordAndSalt()
    {
        \$this->assertEquals(['password', 'salt'], \$this->invokeDemergePasswordAndSalt('password{salt}'));
        \$this->assertEquals(['password', ''], \$this->invokeDemergePasswordAndSalt('password'));
        \$this->assertEquals(['', ''], \$this->invokeDemergePasswordAndSalt(''));
    }

    public function testMergePasswordAndSalt()
    {
        \$this->assertEquals('password{salt}', \$this->invokeMergePasswordAndSalt('password', 'salt'));
        \$this->assertEquals('password', \$this->invokeMergePasswordAndSalt('password', ''));
    }

    public function testMergePasswordAndSaltWithException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->invokeMergePasswordAndSalt('password', '{foo}');
    }

    public function testIsPasswordTooLong()
    {
        \$this->assertTrue(\$this->invokeIsPasswordTooLong(str_repeat('a', 10000)));
        \$this->assertFalse(\$this->invokeIsPasswordTooLong(str_repeat('a', 10)));
    }

    protected function invokeDemergePasswordAndSalt(\$password)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('demergePasswordAndSalt');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$password);
    }

    protected function invokeMergePasswordAndSalt(\$password, \$salt)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('mergePasswordAndSalt');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$password, \$salt);
    }

    protected function invokeComparePasswords(\$p1, \$p2)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('comparePasswords');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$p1, \$p2);
    }

    protected function invokeIsPasswordTooLong(\$p)
    {
        \$encoder = new PasswordEncoder();
        \$r = new \\ReflectionObject(\$encoder);
        \$m = \$r->getMethod('isPasswordTooLong');
        \$m->setAccessible(true);

        return \$m->invoke(\$encoder, \$p);
    }
}
", "vendor/symfony/security-core/Tests/Encoder/BasePasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/BasePasswordEncoderTest.php");
    }
}
