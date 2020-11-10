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

/* vendor/symfony/security-bundle/Tests/Functional/FormLoginTest.php */
class __TwigTemplate_c9ff1441a48c9ff5679390de42cfafd1aa9f29283961bd6b9ca5c65ad286bdb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/FormLoginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/FormLoginTest.php"));

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

class FormLoginTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testFormLogin(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/profile');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/profile\".', \$text);
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLogout(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/profile');

        \$crawler = \$client->followRedirect();
        \$text = \$crawler->text();

        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/profile\".', \$text);

        \$logoutLinks = \$crawler->selectLink('Log out')->links();
        \$this->assertCount(6, \$logoutLinks);
        \$this->assertSame(\$logoutLinks[0]->getUri(), \$logoutLinks[1]->getUri());
        \$this->assertSame(\$logoutLinks[2]->getUri(), \$logoutLinks[3]->getUri());
        \$this->assertSame(\$logoutLinks[4]->getUri(), \$logoutLinks[5]->getUri());

        \$this->assertNotSame(\$logoutLinks[0]->getUri(), \$logoutLinks[2]->getUri());
        \$this->assertNotSame(\$logoutLinks[1]->getUri(), \$logoutLinks[3]->getUri());

        \$this->assertSame(\$logoutLinks[0]->getUri(), \$logoutLinks[4]->getUri());
        \$this->assertSame(\$logoutLinks[1]->getUri(), \$logoutLinks[5]->getUri());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginWithCustomTargetPath(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$form['_target_path'] = '/foo';
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
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$client->request('GET', '/protected_resource');
        \$this->assertRedirect(\$client->getResponse(), '/login');

        \$form = \$client->followRedirect()->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);
        \$this->assertRedirect(\$client->getResponse(), '/protected_resource');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/protected_resource\".', \$text);
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
        return "vendor/symfony/security-bundle/Tests/Functional/FormLoginTest.php";
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

class FormLoginTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testFormLogin(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/profile');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/profile\".', \$text);
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLogout(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/profile');

        \$crawler = \$client->followRedirect();
        \$text = \$crawler->text();

        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/profile\".', \$text);

        \$logoutLinks = \$crawler->selectLink('Log out')->links();
        \$this->assertCount(6, \$logoutLinks);
        \$this->assertSame(\$logoutLinks[0]->getUri(), \$logoutLinks[1]->getUri());
        \$this->assertSame(\$logoutLinks[2]->getUri(), \$logoutLinks[3]->getUri());
        \$this->assertSame(\$logoutLinks[4]->getUri(), \$logoutLinks[5]->getUri());

        \$this->assertNotSame(\$logoutLinks[0]->getUri(), \$logoutLinks[2]->getUri());
        \$this->assertNotSame(\$logoutLinks[1]->getUri(), \$logoutLinks[3]->getUri());

        \$this->assertSame(\$logoutLinks[0]->getUri(), \$logoutLinks[4]->getUri());
        \$this->assertSame(\$logoutLinks[1]->getUri(), \$logoutLinks[5]->getUri());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testFormLoginWithCustomTargetPath(\$config)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$form = \$client->request('GET', '/login')->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$form['_target_path'] = '/foo';
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
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => \$config]);

        \$client->request('GET', '/protected_resource');
        \$this->assertRedirect(\$client->getResponse(), '/login');

        \$form = \$client->followRedirect()->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);
        \$this->assertRedirect(\$client->getResponse(), '/protected_resource');

        \$text = \$client->followRedirect()->text();
        \$this->assertStringContainsString('Hello johannes!', \$text);
        \$this->assertStringContainsString('You\\'re browsing to path \"/protected_resource\".', \$text);
    }

    public function getConfigs()
    {
        return [
            ['config.yml'],
            ['routes_as_path.yml'],
        ];
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/FormLoginTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/FormLoginTest.php");
    }
}
