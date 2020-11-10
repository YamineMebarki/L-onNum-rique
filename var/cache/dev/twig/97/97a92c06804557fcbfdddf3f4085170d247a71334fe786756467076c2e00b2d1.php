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

/* vendor/symfony/security-bundle/Tests/Security/FirewallContextTest.php */
class __TwigTemplate_1ceb21ef3d4947319d745df528d1b4a113a0e130278847404b9beaa2f9205171 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Security/FirewallContextTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Security/FirewallContextTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Security;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

class FirewallContextTest extends TestCase
{
    public function testGetters()
    {
        \$config = new FirewallConfig('main', 'user_checker', 'request_matcher');
        \$exceptionListener = \$this->getExceptionListenerMock();
        \$logoutListener = \$this->getLogoutListenerMock();
        \$listeners = [function () {}];

        \$context = new FirewallContext(\$listeners, \$exceptionListener, \$logoutListener, \$config);

        \$this->assertEquals(\$listeners, \$context->getListeners());
        \$this->assertEquals(\$exceptionListener, \$context->getExceptionListener());
        \$this->assertEquals(\$logoutListener, \$context->getLogoutListener());
        \$this->assertEquals(\$config, \$context->getConfig());
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing an instance of Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig as the 3rd argument to \"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext::__construct()\" is deprecated since Symfony 4.2. Pass a Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener instance instead.
     */
    public function testFirewallConfigAs3rdConstructorArgument()
    {
        new FirewallContext([], \$this->getExceptionListenerMock(), new FirewallConfig('main', 'user_checker', 'request_matcher'));
    }

    private function getExceptionListenerMock()
    {
        return \$this
            ->getMockBuilder(ExceptionListener::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    private function getLogoutListenerMock()
    {
        return \$this
            ->getMockBuilder(LogoutListener::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Security/FirewallContextTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Security;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

class FirewallContextTest extends TestCase
{
    public function testGetters()
    {
        \$config = new FirewallConfig('main', 'user_checker', 'request_matcher');
        \$exceptionListener = \$this->getExceptionListenerMock();
        \$logoutListener = \$this->getLogoutListenerMock();
        \$listeners = [function () {}];

        \$context = new FirewallContext(\$listeners, \$exceptionListener, \$logoutListener, \$config);

        \$this->assertEquals(\$listeners, \$context->getListeners());
        \$this->assertEquals(\$exceptionListener, \$context->getExceptionListener());
        \$this->assertEquals(\$logoutListener, \$context->getLogoutListener());
        \$this->assertEquals(\$config, \$context->getConfig());
    }

    /**
     * @group legacy
     * @expectedDeprecation Passing an instance of Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig as the 3rd argument to \"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext::__construct()\" is deprecated since Symfony 4.2. Pass a Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener instance instead.
     */
    public function testFirewallConfigAs3rdConstructorArgument()
    {
        new FirewallContext([], \$this->getExceptionListenerMock(), new FirewallConfig('main', 'user_checker', 'request_matcher'));
    }

    private function getExceptionListenerMock()
    {
        return \$this
            ->getMockBuilder(ExceptionListener::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    private function getLogoutListenerMock()
    {
        return \$this
            ->getMockBuilder(LogoutListener::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
", "vendor/symfony/security-bundle/Tests/Security/FirewallContextTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Security/FirewallContextTest.php");
    }
}
