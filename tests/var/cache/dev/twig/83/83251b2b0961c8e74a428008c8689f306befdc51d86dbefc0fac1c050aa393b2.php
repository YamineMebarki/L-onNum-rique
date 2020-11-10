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

/* vendor/symfony/security-core/Tests/Encoder/MessageDigestPasswordEncoderTest.php */
class __TwigTemplate_d4c106d1b66973ef48ca9cb9b0c245298679691a1336232727af08c312a7925d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/MessageDigestPasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/MessageDigestPasswordEncoderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder;

class MessageDigestPasswordEncoderTest extends TestCase
{
    public function testIsPasswordValid()
    {
        \$encoder = new MessageDigestPasswordEncoder('sha256', false, 1);

        \$this->assertTrue(\$encoder->isPasswordValid(hash('sha256', 'password'), 'password', ''));
    }

    public function testEncodePassword()
    {
        \$encoder = new MessageDigestPasswordEncoder('sha256', false, 1);
        \$this->assertSame(hash('sha256', 'password'), \$encoder->encodePassword('password', ''));

        \$encoder = new MessageDigestPasswordEncoder('sha256', true, 1);
        \$this->assertSame(base64_encode(hash('sha256', 'password', true)), \$encoder->encodePassword('password', ''));

        \$encoder = new MessageDigestPasswordEncoder('sha256', false, 2);
        \$this->assertSame(hash('sha256', hash('sha256', 'password', true).'password'), \$encoder->encodePassword('password', ''));
    }

    public function testEncodePasswordAlgorithmDoesNotExist()
    {
        \$this->expectException('LogicException');
        \$encoder = new MessageDigestPasswordEncoder('foobar');
        \$encoder->encodePassword('password', '');
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new MessageDigestPasswordEncoder();

        \$encoder->encodePassword(str_repeat('a', 5000), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new MessageDigestPasswordEncoder();

        \$this->assertFalse(\$encoder->isPasswordValid('encoded', str_repeat('a', 5000), 'salt'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/MessageDigestPasswordEncoderTest.php";
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
use Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder;

class MessageDigestPasswordEncoderTest extends TestCase
{
    public function testIsPasswordValid()
    {
        \$encoder = new MessageDigestPasswordEncoder('sha256', false, 1);

        \$this->assertTrue(\$encoder->isPasswordValid(hash('sha256', 'password'), 'password', ''));
    }

    public function testEncodePassword()
    {
        \$encoder = new MessageDigestPasswordEncoder('sha256', false, 1);
        \$this->assertSame(hash('sha256', 'password'), \$encoder->encodePassword('password', ''));

        \$encoder = new MessageDigestPasswordEncoder('sha256', true, 1);
        \$this->assertSame(base64_encode(hash('sha256', 'password', true)), \$encoder->encodePassword('password', ''));

        \$encoder = new MessageDigestPasswordEncoder('sha256', false, 2);
        \$this->assertSame(hash('sha256', hash('sha256', 'password', true).'password'), \$encoder->encodePassword('password', ''));
    }

    public function testEncodePasswordAlgorithmDoesNotExist()
    {
        \$this->expectException('LogicException');
        \$encoder = new MessageDigestPasswordEncoder('foobar');
        \$encoder->encodePassword('password', '');
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new MessageDigestPasswordEncoder();

        \$encoder->encodePassword(str_repeat('a', 5000), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new MessageDigestPasswordEncoder();

        \$this->assertFalse(\$encoder->isPasswordValid('encoded', str_repeat('a', 5000), 'salt'));
    }
}
", "vendor/symfony/security-core/Tests/Encoder/MessageDigestPasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/MessageDigestPasswordEncoderTest.php");
    }
}
