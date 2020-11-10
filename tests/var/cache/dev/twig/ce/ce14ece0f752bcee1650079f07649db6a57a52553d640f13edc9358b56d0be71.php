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

/* vendor/symfony/security-core/Tests/Authentication/Token/AnonymousTokenTest.php */
class __TwigTemplate_4b83ef909354912dbe1f5171350e0df0bd3351fafcbec9ee241b50bf16d93df6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Token/AnonymousTokenTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Token/AnonymousTokenTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;

class AnonymousTokenTest extends TestCase
{
    public function testConstructor()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertTrue(\$token->isAuthenticated());

        \$token = new AnonymousToken('foo', 'bar', ['ROLE_FOO']);
        \$this->assertEquals(['ROLE_FOO'], \$token->getRoleNames());
    }

    public function testGetKey()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertEquals('foo', \$token->getSecret());
    }

    public function testGetCredentials()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertEquals('', \$token->getCredentials());
    }

    public function testGetUser()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertEquals('bar', \$token->getUser());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/Token/AnonymousTokenTest.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;

class AnonymousTokenTest extends TestCase
{
    public function testConstructor()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertTrue(\$token->isAuthenticated());

        \$token = new AnonymousToken('foo', 'bar', ['ROLE_FOO']);
        \$this->assertEquals(['ROLE_FOO'], \$token->getRoleNames());
    }

    public function testGetKey()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertEquals('foo', \$token->getSecret());
    }

    public function testGetCredentials()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertEquals('', \$token->getCredentials());
    }

    public function testGetUser()
    {
        \$token = new AnonymousToken('foo', 'bar');
        \$this->assertEquals('bar', \$token->getUser());
    }
}
", "vendor/symfony/security-core/Tests/Authentication/Token/AnonymousTokenTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/Token/AnonymousTokenTest.php");
    }
}
