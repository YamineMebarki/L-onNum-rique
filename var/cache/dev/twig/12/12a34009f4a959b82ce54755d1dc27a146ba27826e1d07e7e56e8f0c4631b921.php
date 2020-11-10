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

/* vendor/symfony/security-bundle/Tests/Functional/CsrfFormLoginTest.php */
class __TwigTemplate_21e61e4a85dbd791adffd78c00174299feeee3934db1f8d2cee7947fc1fcbb8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/CsrfFormLoginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/CsrfFormLoginTest.php"));

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

class CsrfFormLoginTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginAndLogoutWithCsrfTokens(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['user_login[username]'] = 'johannes';
        \$form['user_login[password]'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/profile');

        \$crawler = \$client->followRedirect();

        \$text = \$crawler->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/profile\".', \$text);

        \$logoutLinks = \$crawler->selectLink('Log out')->links();
        \$this->assertCount(2, \$logoutLinks);
        \$this->assertStringContainsString('_csrf_token=', \$logoutLinks[0]->getUri());
        \$this->assertSame(\$logoutLinks[0]->getUri(), \$logoutLinks[1]->getUri());

        \$client->click(\$logoutLinks[0]);

        \$this->assertRedirect(\$client->getResponse(), '/');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginWithInvalidCsrfToken(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['user_login[_token]'] = '';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/login');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Invalid CSRF token.', \$text);
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginWithCustomTargetPath(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['user_login[username]'] = 'johannes';
        \$form['user_login[password]'] = 'test';
        \$form['user_login[_target_path]'] = '/foo';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/foo');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/foo\".', \$text);
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginRedirectsToProtectedResourceAfterLogin(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$client->request('GET', '/protected-resource');
        \$this->assertRedirect(\$client->getResponse(), '/login');

        \$form = \$client->followRedirect()->selectButton('login')->form();
        \$form['user_login[username]'] = 'johannes';
        \$form['user_login[password]'] = 'test';
        \$client->submit(\$form);
        \$this->assertRedirect(\$client->getResponse(), '/protected-resource');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/protected-resource\".', \$text);
    }

    public function getConfigs()
    {
        return [
            ['config.yml'],
            ['routes_as_path.yml'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/CsrfFormLoginTest.php";
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

class CsrfFormLoginTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginAndLogoutWithCsrfTokens(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['user_login[username]'] = 'johannes';
        \$form['user_login[password]'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/profile');

        \$crawler = \$client->followRedirect();

        \$text = \$crawler->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/profile\".', \$text);

        \$logoutLinks = \$crawler->selectLink('Log out')->links();
        \$this->assertCount(2, \$logoutLinks);
        \$this->assertStringContainsString('_csrf_token=', \$logoutLinks[0]->getUri());
        \$this->assertSame(\$logoutLinks[0]->getUri(), \$logoutLinks[1]->getUri());

        \$client->click(\$logoutLinks[0]);

        \$this->assertRedirect(\$client->getResponse(), '/');
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginWithInvalidCsrfToken(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['user_login[_token]'] = '';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/login');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Invalid CSRF token.', \$text);
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginWithCustomTargetPath(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['user_login[username]'] = 'johannes';
        \$form['user_login[password]'] = 'test';
        \$form['user_login[_target_path]'] = '/foo';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/foo');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/foo\".', \$text);
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginRedirectsToProtectedResourceAfterLogin(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'CsrfFormLogin', 'root_config' => \$config]);

        \$client->request('GET', '/protected-resource');
        \$this->assertRedirect(\$client->getResponse(), '/login');

        \$form = \$client->followRedirect()->selectButton('login')->form();
        \$form['user_login[username]'] = 'johannes';
        \$form['user_login[password]'] = 'test';
        \$client->submit(\$form);
        \$this->assertRedirect(\$client->getResponse(), '/protected-resource');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/protected-resource\".', \$text);
    }

    public function getConfigs()
    {
        return [
            ['config.yml'],
            ['routes_as_path.yml'],
        ];
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/CsrfFormLoginTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/CsrfFormLoginTest.php");
    }
}
