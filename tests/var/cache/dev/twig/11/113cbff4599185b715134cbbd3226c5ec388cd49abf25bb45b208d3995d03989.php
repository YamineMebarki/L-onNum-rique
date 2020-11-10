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

/* vendor/symfony/security-bundle/Tests/Functional/SwitchUserTest.php */
class __TwigTemplate_a872000d5f84fb3df46142d3f572466922add430e00de8ddc6efe4026e6e84e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/SwitchUserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/SwitchUserTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional;

use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener;

class SwitchUserTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getTestParameters
     */
    public function testSwitchUser(\$originalUser, \$targetUser, \$expectedUser, \$expectedStatus)
    {
        \$client = \$this->createAuthenticatedClient(\$originalUser);

        \$client->request('GET', '/profile?_switch_user='.\$targetUser);

        \$this->assertEquals(\$expectedStatus, \$client->getResponse()->getStatusCode());
        \$this->assertEquals(\$expectedUser, \$client->getProfile()->getCollector('security')->getUser());
    }

    public function testSwitchedUserCannotSwitchToOther()
    {
        \$client = \$this->createAuthenticatedClient('user_can_switch');

        \$client->request('GET', '/profile?_switch_user=user_cannot_switch_1');
        \$client->request('GET', '/profile?_switch_user=user_cannot_switch_2');

        \$this->assertEquals(500, \$client->getResponse()->getStatusCode());
        \$this->assertEquals('user_cannot_switch_1', \$client->getProfile()->getCollector('security')->getUser());
    }

    public function testSwitchedUserExit()
    {
        \$client = \$this->createAuthenticatedClient('user_can_switch');

        \$client->request('GET', '/profile?_switch_user=user_cannot_switch_1');
        \$client->request('GET', '/profile?_switch_user='.SwitchUserListener::EXIT_VALUE);

        \$this->assertEquals(200, \$client->getResponse()->getStatusCode());
        \$this->assertEquals('user_can_switch', \$client->getProfile()->getCollector('security')->getUser());
    }

    public function testSwitchUserStateless()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'switchuser_stateless.yml']);
        \$client->request('POST', '/chk', [], [], ['HTTP_X_SWITCH_USER' => 'dunglas', 'CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"user_can_switch\", \"password\": \"test\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Welcome @dunglas!'], json_decode(\$response->getContent(), true));
        \$this->assertSame('dunglas', \$client->getProfile()->getCollector('security')->getUser());
    }

    public function getTestParameters()
    {
        return [
            'unauthorized_user_cannot_switch' => ['user_cannot_switch_1', 'user_cannot_switch_1', 'user_cannot_switch_1', 403],
            'authorized_user_can_switch' => ['user_can_switch', 'user_cannot_switch_1', 'user_cannot_switch_1', 200],
            'authorized_user_cannot_switch_to_non_existent' => ['user_can_switch', 'user_does_not_exist', 'user_can_switch', 500],
            'authorized_user_can_switch_to_himself' => ['user_can_switch', 'user_can_switch', 'user_can_switch', 200],
        ];
    }

    protected function createAuthenticatedClient(\$username)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'switchuser.yml']);
        \$client->followRedirects(true);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = \$username;
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        return \$client;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/SwitchUserTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional;

use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener;

class SwitchUserTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getTestParameters
     */
    public function testSwitchUser(\$originalUser, \$targetUser, \$expectedUser, \$expectedStatus)
    {
        \$client = \$this->createAuthenticatedClient(\$originalUser);

        \$client->request('GET', '/profile?_switch_user='.\$targetUser);

        \$this->assertEquals(\$expectedStatus, \$client->getResponse()->getStatusCode());
        \$this->assertEquals(\$expectedUser, \$client->getProfile()->getCollector('security')->getUser());
    }

    public function testSwitchedUserCannotSwitchToOther()
    {
        \$client = \$this->createAuthenticatedClient('user_can_switch');

        \$client->request('GET', '/profile?_switch_user=user_cannot_switch_1');
        \$client->request('GET', '/profile?_switch_user=user_cannot_switch_2');

        \$this->assertEquals(500, \$client->getResponse()->getStatusCode());
        \$this->assertEquals('user_cannot_switch_1', \$client->getProfile()->getCollector('security')->getUser());
    }

    public function testSwitchedUserExit()
    {
        \$client = \$this->createAuthenticatedClient('user_can_switch');

        \$client->request('GET', '/profile?_switch_user=user_cannot_switch_1');
        \$client->request('GET', '/profile?_switch_user='.SwitchUserListener::EXIT_VALUE);

        \$this->assertEquals(200, \$client->getResponse()->getStatusCode());
        \$this->assertEquals('user_can_switch', \$client->getProfile()->getCollector('security')->getUser());
    }

    public function testSwitchUserStateless()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'switchuser_stateless.yml']);
        \$client->request('POST', '/chk', [], [], ['HTTP_X_SWITCH_USER' => 'dunglas', 'CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"user_can_switch\", \"password\": \"test\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Welcome @dunglas!'], json_decode(\$response->getContent(), true));
        \$this->assertSame('dunglas', \$client->getProfile()->getCollector('security')->getUser());
    }

    public function getTestParameters()
    {
        return [
            'unauthorized_user_cannot_switch' => ['user_cannot_switch_1', 'user_cannot_switch_1', 'user_cannot_switch_1', 403],
            'authorized_user_can_switch' => ['user_can_switch', 'user_cannot_switch_1', 'user_cannot_switch_1', 200],
            'authorized_user_cannot_switch_to_non_existent' => ['user_can_switch', 'user_does_not_exist', 'user_can_switch', 500],
            'authorized_user_can_switch_to_himself' => ['user_can_switch', 'user_can_switch', 'user_can_switch', 200],
        ];
    }

    protected function createAuthenticatedClient(\$username)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'switchuser.yml']);
        \$client->followRedirects(true);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = \$username;
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        return \$client;
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/SwitchUserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/SwitchUserTest.php");
    }
}
