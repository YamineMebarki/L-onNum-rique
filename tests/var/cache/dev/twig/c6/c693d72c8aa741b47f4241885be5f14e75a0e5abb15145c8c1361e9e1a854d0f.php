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

/* vendor/symfony/security-http/Tests/Session/SessionAuthenticationStrategyTest.php */
class __TwigTemplate_cd75e9b8d85323bebecee2cc456970264f902015a2ca02795528ac9a9c5b13eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Session/SessionAuthenticationStrategyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Session/SessionAuthenticationStrategyTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Session;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy;

class SessionAuthenticationStrategyTest extends TestCase
{
    public function testSessionIsNotChanged()
    {
        \$request = \$this->getRequest();
        \$request->expects(\$this->never())->method('getSession');

        \$strategy = new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE);
        \$strategy->onAuthentication(\$request, \$this->getToken());
    }

    public function testUnsupportedStrategy()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Invalid session authentication strategy \"foo\"');
        \$request = \$this->getRequest();
        \$request->expects(\$this->never())->method('getSession');

        \$strategy = new SessionAuthenticationStrategy('foo');
        \$strategy->onAuthentication(\$request, \$this->getToken());
    }

    public function testSessionIsMigrated()
    {
        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session->expects(\$this->once())->method('migrate')->with(\$this->equalTo(true));

        \$strategy = new SessionAuthenticationStrategy(SessionAuthenticationStrategy::MIGRATE);
        \$strategy->onAuthentication(\$this->getRequest(\$session), \$this->getToken());
    }

    public function testSessionIsInvalidated()
    {
        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session->expects(\$this->once())->method('invalidate');

        \$strategy = new SessionAuthenticationStrategy(SessionAuthenticationStrategy::INVALIDATE);
        \$strategy->onAuthentication(\$this->getRequest(\$session), \$this->getToken());
    }

    private function getRequest(\$session = null)
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();

        if (null !== \$session) {
            \$request->expects(\$this->any())->method('getSession')->willReturn(\$session);
        }

        return \$request;
    }

    private function getToken()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Session/SessionAuthenticationStrategyTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Session;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy;

class SessionAuthenticationStrategyTest extends TestCase
{
    public function testSessionIsNotChanged()
    {
        \$request = \$this->getRequest();
        \$request->expects(\$this->never())->method('getSession');

        \$strategy = new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE);
        \$strategy->onAuthentication(\$request, \$this->getToken());
    }

    public function testUnsupportedStrategy()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Invalid session authentication strategy \"foo\"');
        \$request = \$this->getRequest();
        \$request->expects(\$this->never())->method('getSession');

        \$strategy = new SessionAuthenticationStrategy('foo');
        \$strategy->onAuthentication(\$request, \$this->getToken());
    }

    public function testSessionIsMigrated()
    {
        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session->expects(\$this->once())->method('migrate')->with(\$this->equalTo(true));

        \$strategy = new SessionAuthenticationStrategy(SessionAuthenticationStrategy::MIGRATE);
        \$strategy->onAuthentication(\$this->getRequest(\$session), \$this->getToken());
    }

    public function testSessionIsInvalidated()
    {
        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session->expects(\$this->once())->method('invalidate');

        \$strategy = new SessionAuthenticationStrategy(SessionAuthenticationStrategy::INVALIDATE);
        \$strategy->onAuthentication(\$this->getRequest(\$session), \$this->getToken());
    }

    private function getRequest(\$session = null)
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();

        if (null !== \$session) {
            \$request->expects(\$this->any())->method('getSession')->willReturn(\$session);
        }

        return \$request;
    }

    private function getToken()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }
}
", "vendor/symfony/security-http/Tests/Session/SessionAuthenticationStrategyTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Session/SessionAuthenticationStrategyTest.php");
    }
}
