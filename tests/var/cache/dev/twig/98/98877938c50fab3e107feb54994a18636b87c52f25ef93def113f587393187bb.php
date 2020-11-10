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

/* vendor/symfony/security-core/Tests/Authentication/Token/PreAuthenticatedTokenTest.php */
class __TwigTemplate_ec7d6c415a37b0355498af9350c7a0fea51467c9a460952c67b56251f6fe1261 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Token/PreAuthenticatedTokenTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Token/PreAuthenticatedTokenTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication\\Token;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken;

class PreAuthenticatedTokenTest extends TestCase
{
    public function testConstructor()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$this->assertFalse(\$token->isAuthenticated());

        \$token = new PreAuthenticatedToken('foo', 'bar', 'key', ['ROLE_FOO']);
        \$this->assertTrue(\$token->isAuthenticated());
        \$this->assertEquals(['ROLE_FOO'], \$token->getRoleNames());
        \$this->assertEquals('key', \$token->getProviderKey());
    }

    public function testGetCredentials()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$this->assertEquals('bar', \$token->getCredentials());
    }

    public function testGetUser()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$this->assertEquals('foo', \$token->getUser());
    }

    public function testEraseCredentials()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$token->eraseCredentials();
        \$this->assertEquals('', \$token->getCredentials());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/Token/PreAuthenticatedTokenTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication\\Token;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken;

class PreAuthenticatedTokenTest extends TestCase
{
    public function testConstructor()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$this->assertFalse(\$token->isAuthenticated());

        \$token = new PreAuthenticatedToken('foo', 'bar', 'key', ['ROLE_FOO']);
        \$this->assertTrue(\$token->isAuthenticated());
        \$this->assertEquals(['ROLE_FOO'], \$token->getRoleNames());
        \$this->assertEquals('key', \$token->getProviderKey());
    }

    public function testGetCredentials()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$this->assertEquals('bar', \$token->getCredentials());
    }

    public function testGetUser()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$this->assertEquals('foo', \$token->getUser());
    }

    public function testEraseCredentials()
    {
        \$token = new PreAuthenticatedToken('foo', 'bar', 'key');
        \$token->eraseCredentials();
        \$this->assertEquals('', \$token->getCredentials());
    }
}
", "vendor/symfony/security-core/Tests/Authentication/Token/PreAuthenticatedTokenTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/Token/PreAuthenticatedTokenTest.php");
    }
}
