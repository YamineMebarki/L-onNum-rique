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

/* vendor/symfony/security-core/Tests/Exception/CustomUserMessageAuthenticationExceptionTest.php */
class __TwigTemplate_af6237cc0b413de8bca85659a97d2684446b71929ff896873ebfb719129c12d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Exception/CustomUserMessageAuthenticationExceptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Exception/CustomUserMessageAuthenticationExceptionTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Exception\\CustomUserMessageAuthenticationException;

class ChildCustomUserMessageAuthenticationException extends CustomUserMessageAuthenticationException
{
    public function __serialize(): array
    {
        return [\$this->childMember, parent::__serialize()];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->childMember, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
    }
}

class CustomUserMessageAuthenticationExceptionTest extends TestCase
{
    public function testConstructWithSAfeMessage()
    {
        \$e = new CustomUserMessageAuthenticationException('SAFE MESSAGE', ['foo' => true]);

        \$this->assertEquals('SAFE MESSAGE', \$e->getMessageKey());
        \$this->assertEquals(['foo' => true], \$e->getMessageData());
        \$this->assertEquals('SAFE MESSAGE', \$e->getMessage());
    }

    public function testSharedSerializedData()
    {
        \$token = new AnonymousToken('foo', 'bar');

        \$exception = new CustomUserMessageAuthenticationException();
        \$exception->setToken(\$token);
        \$exception->setSafeMessage('message', ['token' => \$token]);

        \$processed = unserialize(serialize(\$exception));
        \$this->assertEquals(\$token, \$processed->getToken());
        \$this->assertEquals(\$token, \$processed->getMessageData()['token']);
        \$this->assertSame(\$processed->getToken(), \$processed->getMessageData()['token']);
    }

    public function testSharedSerializedDataFromChild()
    {
        \$token = new AnonymousToken('foo', 'bar');

        \$exception = new ChildCustomUserMessageAuthenticationException();
        \$exception->childMember = \$token;
        \$exception->setToken(\$token);

        \$processed = unserialize(serialize(\$exception));
        \$this->assertEquals(\$token, \$processed->childMember);
        \$this->assertEquals(\$token, \$processed->getToken());
        \$this->assertSame(\$processed->getToken(), \$processed->childMember);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Exception/CustomUserMessageAuthenticationExceptionTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Exception\\CustomUserMessageAuthenticationException;

class ChildCustomUserMessageAuthenticationException extends CustomUserMessageAuthenticationException
{
    public function __serialize(): array
    {
        return [\$this->childMember, parent::__serialize()];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->childMember, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
    }
}

class CustomUserMessageAuthenticationExceptionTest extends TestCase
{
    public function testConstructWithSAfeMessage()
    {
        \$e = new CustomUserMessageAuthenticationException('SAFE MESSAGE', ['foo' => true]);

        \$this->assertEquals('SAFE MESSAGE', \$e->getMessageKey());
        \$this->assertEquals(['foo' => true], \$e->getMessageData());
        \$this->assertEquals('SAFE MESSAGE', \$e->getMessage());
    }

    public function testSharedSerializedData()
    {
        \$token = new AnonymousToken('foo', 'bar');

        \$exception = new CustomUserMessageAuthenticationException();
        \$exception->setToken(\$token);
        \$exception->setSafeMessage('message', ['token' => \$token]);

        \$processed = unserialize(serialize(\$exception));
        \$this->assertEquals(\$token, \$processed->getToken());
        \$this->assertEquals(\$token, \$processed->getMessageData()['token']);
        \$this->assertSame(\$processed->getToken(), \$processed->getMessageData()['token']);
    }

    public function testSharedSerializedDataFromChild()
    {
        \$token = new AnonymousToken('foo', 'bar');

        \$exception = new ChildCustomUserMessageAuthenticationException();
        \$exception->childMember = \$token;
        \$exception->setToken(\$token);

        \$processed = unserialize(serialize(\$exception));
        \$this->assertEquals(\$token, \$processed->childMember);
        \$this->assertEquals(\$token, \$processed->getToken());
        \$this->assertSame(\$processed->getToken(), \$processed->childMember);
    }
}
", "vendor/symfony/security-core/Tests/Exception/CustomUserMessageAuthenticationExceptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Exception/CustomUserMessageAuthenticationExceptionTest.php");
    }
}
