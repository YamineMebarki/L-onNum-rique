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

/* vendor/symfony/security-core/Tests/Encoder/PlaintextPasswordEncoderTest.php */
class __TwigTemplate_953c9ababd9fc4427794a29e0e1d466f51f47dbc2a8b177ba63f6f668f53441d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/PlaintextPasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/PlaintextPasswordEncoderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder;

class PlaintextPasswordEncoderTest extends TestCase
{
    public function testIsPasswordValid()
    {
        \$encoder = new PlaintextPasswordEncoder();

        \$this->assertTrue(\$encoder->isPasswordValid('foo', 'foo', ''));
        \$this->assertFalse(\$encoder->isPasswordValid('bar', 'foo', ''));
        \$this->assertFalse(\$encoder->isPasswordValid('FOO', 'foo', ''));

        \$encoder = new PlaintextPasswordEncoder(true);

        \$this->assertTrue(\$encoder->isPasswordValid('foo', 'foo', ''));
        \$this->assertFalse(\$encoder->isPasswordValid('bar', 'foo', ''));
        \$this->assertTrue(\$encoder->isPasswordValid('FOO', 'foo', ''));
    }

    public function testEncodePassword()
    {
        \$encoder = new PlaintextPasswordEncoder();

        \$this->assertSame('foo', \$encoder->encodePassword('foo', ''));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new PlaintextPasswordEncoder();

        \$encoder->encodePassword(str_repeat('a', 5000), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new PlaintextPasswordEncoder();

        \$this->assertFalse(\$encoder->isPasswordValid('encoded', str_repeat('a', 5000), 'salt'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/PlaintextPasswordEncoderTest.php";
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
use Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder;

class PlaintextPasswordEncoderTest extends TestCase
{
    public function testIsPasswordValid()
    {
        \$encoder = new PlaintextPasswordEncoder();

        \$this->assertTrue(\$encoder->isPasswordValid('foo', 'foo', ''));
        \$this->assertFalse(\$encoder->isPasswordValid('bar', 'foo', ''));
        \$this->assertFalse(\$encoder->isPasswordValid('FOO', 'foo', ''));

        \$encoder = new PlaintextPasswordEncoder(true);

        \$this->assertTrue(\$encoder->isPasswordValid('foo', 'foo', ''));
        \$this->assertFalse(\$encoder->isPasswordValid('bar', 'foo', ''));
        \$this->assertTrue(\$encoder->isPasswordValid('FOO', 'foo', ''));
    }

    public function testEncodePassword()
    {
        \$encoder = new PlaintextPasswordEncoder();

        \$this->assertSame('foo', \$encoder->encodePassword('foo', ''));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new PlaintextPasswordEncoder();

        \$encoder->encodePassword(str_repeat('a', 5000), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new PlaintextPasswordEncoder();

        \$this->assertFalse(\$encoder->isPasswordValid('encoded', str_repeat('a', 5000), 'salt'));
    }
}
", "vendor/symfony/security-core/Tests/Encoder/PlaintextPasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/PlaintextPasswordEncoderTest.php");
    }
}
