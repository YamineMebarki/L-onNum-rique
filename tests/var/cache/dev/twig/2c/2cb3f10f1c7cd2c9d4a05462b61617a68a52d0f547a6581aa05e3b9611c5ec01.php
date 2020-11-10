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

/* vendor/symfony/security-bundle/Tests/Functional/LogoutTest.php */
class __TwigTemplate_d6faab1718e10ae482a417ffd1b7ed2f3c8365ec4e74aa4484caeb58986054e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/LogoutTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/LogoutTest.php"));

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

class LogoutTest extends AbstractWebTestCase
{
    public function testSessionLessRememberMeLogout()
    {
        \$client = \$this->createClient(['test_case' => 'RememberMeLogout', 'root_config' => 'config.yml']);

        \$client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        \$cookieJar = \$client->getCookieJar();
        \$cookieJar->expire(session_name());

        \$this->assertNotNull(\$cookieJar->get('REMEMBERME'));
        \$this->assertSame('lax', \$cookieJar->get('REMEMBERME')->getSameSite());

        \$client->request('GET', '/logout');

        \$this->assertNull(\$cookieJar->get('REMEMBERME'));
    }

    public function testCsrfTokensAreClearedOnLogout()
    {
        \$client = \$this->createClient(['test_case' => 'LogoutWithoutSessionInvalidation', 'root_config' => 'config.yml']);
        static::\$container->get('security.csrf.token_storage')->setToken('foo', 'bar');

        \$client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        \$this->assertTrue(static::\$container->get('security.csrf.token_storage')->hasToken('foo'));
        \$this->assertSame('bar', static::\$container->get('security.csrf.token_storage')->getToken('foo'));

        \$client->request('GET', '/logout');

        \$this->assertFalse(static::\$container->get('security.csrf.token_storage')->hasToken('foo'));
    }

    public function testAccessControlDoesNotApplyOnLogout()
    {
        \$client = \$this->createClient(['test_case' => 'LogoutAccess', 'root_config' => 'config.yml']);

        \$client->request('POST', '/login', ['_username' => 'johannes', '_password' => 'test']);
        \$client->request('GET', '/logout');

        \$this->assertRedirect(\$client->getResponse(), '/');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/LogoutTest.php";
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

class LogoutTest extends AbstractWebTestCase
{
    public function testSessionLessRememberMeLogout()
    {
        \$client = \$this->createClient(['test_case' => 'RememberMeLogout', 'root_config' => 'config.yml']);

        \$client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        \$cookieJar = \$client->getCookieJar();
        \$cookieJar->expire(session_name());

        \$this->assertNotNull(\$cookieJar->get('REMEMBERME'));
        \$this->assertSame('lax', \$cookieJar->get('REMEMBERME')->getSameSite());

        \$client->request('GET', '/logout');

        \$this->assertNull(\$cookieJar->get('REMEMBERME'));
    }

    public function testCsrfTokensAreClearedOnLogout()
    {
        \$client = \$this->createClient(['test_case' => 'LogoutWithoutSessionInvalidation', 'root_config' => 'config.yml']);
        static::\$container->get('security.csrf.token_storage')->setToken('foo', 'bar');

        \$client->request('POST', '/login', [
            '_username' => 'johannes',
            '_password' => 'test',
        ]);

        \$this->assertTrue(static::\$container->get('security.csrf.token_storage')->hasToken('foo'));
        \$this->assertSame('bar', static::\$container->get('security.csrf.token_storage')->getToken('foo'));

        \$client->request('GET', '/logout');

        \$this->assertFalse(static::\$container->get('security.csrf.token_storage')->hasToken('foo'));
    }

    public function testAccessControlDoesNotApplyOnLogout()
    {
        \$client = \$this->createClient(['test_case' => 'LogoutAccess', 'root_config' => 'config.yml']);

        \$client->request('POST', '/login', ['_username' => 'johannes', '_password' => 'test']);
        \$client->request('GET', '/logout');

        \$this->assertRedirect(\$client->getResponse(), '/');
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/LogoutTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/LogoutTest.php");
    }
}
