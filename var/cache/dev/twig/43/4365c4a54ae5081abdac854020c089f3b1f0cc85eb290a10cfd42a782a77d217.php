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

/* vendor/symfony/security-bundle/Tests/Functional/LocalizedRoutesAsPathTest.php */
class __TwigTemplate_8ebcbc596f30f78ad84bb6d2d4cfe1a646cc2b6819039092280efd6825e20078 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/LocalizedRoutesAsPathTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/LocalizedRoutesAsPathTest.php"));

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

class LocalizedRoutesAsPathTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getLocales
     */
    public function testLoginLogoutProcedure(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        \$crawler = \$client->request('GET', '/'.\$locale.'/login');
        \$form = \$crawler->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/profile');
        \$this->assertEquals('Profile', \$client->followRedirect()->text());

        \$client->request('GET', '/'.\$locale.'/logout');
        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/');
        \$this->assertEquals('Homepage', \$client->followRedirect()->text());
    }

    /**
     * @dataProvider getLocales
     */
    public function testLoginFailureWithLocalizedFailurePath(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_form_failure_handler.yml']);

        \$crawler = \$client->request('GET', '/'.\$locale.'/login');
        \$form = \$crawler->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'foobar';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResource(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        \$client->request('GET', '/'.\$locale.'/secure/');
        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResourceWithForward(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes_with_forward.yml']);

        \$crawler = \$client->request('GET', '/'.\$locale.'/secure/');
        \$this->assertCount(1, \$crawler->selectButton('login'), (string) \$client->getResponse());
    }

    public function getLocales()
    {
        return [['en'], ['de']];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/LocalizedRoutesAsPathTest.php";
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

class LocalizedRoutesAsPathTest extends AbstractWebTestCase
{
    /**
     * @dataProvider getLocales
     */
    public function testLoginLogoutProcedure(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        \$crawler = \$client->request('GET', '/'.\$locale.'/login');
        \$form = \$crawler->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'test';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/profile');
        \$this->assertEquals('Profile', \$client->followRedirect()->text());

        \$client->request('GET', '/'.\$locale.'/logout');
        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/');
        \$this->assertEquals('Homepage', \$client->followRedirect()->text());
    }

    /**
     * @dataProvider getLocales
     */
    public function testLoginFailureWithLocalizedFailurePath(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_form_failure_handler.yml']);

        \$crawler = \$client->request('GET', '/'.\$locale.'/login');
        \$form = \$crawler->selectButton('login')->form();
        \$form['_username'] = 'johannes';
        \$form['_password'] = 'foobar';
        \$client->submit(\$form);

        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResource(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes.yml']);

        \$client->request('GET', '/'.\$locale.'/secure/');
        \$this->assertRedirect(\$client->getResponse(), '/'.\$locale.'/login');
    }

    /**
     * @dataProvider getLocales
     */
    public function testAccessRestrictedResourceWithForward(\$locale)
    {
        \$client = \$this->createClient(['test_case' => 'StandardFormLogin', 'root_config' => 'localized_routes_with_forward.yml']);

        \$crawler = \$client->request('GET', '/'.\$locale.'/secure/');
        \$this->assertCount(1, \$crawler->selectButton('login'), (string) \$client->getResponse());
    }

    public function getLocales()
    {
        return [['en'], ['de']];
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/LocalizedRoutesAsPathTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/LocalizedRoutesAsPathTest.php");
    }
}
