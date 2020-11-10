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

/* vendor/symfony/framework-bundle/Tests/Functional/SessionTest.php */
class __TwigTemplate_5f93fd77992cb9a218485191cf915f9400d8c1c542ee49742d0e3f34978413d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/SessionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/SessionTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

class SessionTest extends AbstractWebTestCase
{
    /**
     * Tests session attributes persist.
     *
     * @dataProvider getConfigs
     */
    public function testWelcome(\$config, \$insulate)
    {
        \$client = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client->insulate();
        }

        // no session
        \$crawler = \$client->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler->text());

        // remember name
        \$crawler = \$client->request('GET', '/session/drak');
        \$this->assertStringContainsString('Hello drak, nice to meet you.', \$crawler->text());

        // prove remembered name
        \$crawler = \$client->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back drak, nice to meet you.', \$crawler->text());

        // clear session
        \$crawler = \$client->request('GET', '/session_logout');
        \$this->assertStringContainsString('Session cleared.', \$crawler->text());

        // prove cleared session
        \$crawler = \$client->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler->text());
    }

    /**
     * Tests flash messages work in practice.
     *
     * @dataProvider getConfigs
     */
    public function testFlash(\$config, \$insulate)
    {
        \$client = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client->insulate();
        }

        // set flash
        \$crawler = \$client->request('GET', '/session_setflash/Hello%20world.');

        // check flash displays on redirect
        \$this->assertStringContainsString('Hello world.', \$client->followRedirect()->text());

        // check flash is gone
        \$crawler = \$client->request('GET', '/session_showflash');
        \$this->assertStringContainsString('No flash was set.', \$crawler->text());
    }

    /**
     * See if two separate insulated clients can run without
     * polluting each other's session data.
     *
     * @dataProvider getConfigs
     */
    public function testTwoClients(\$config, \$insulate)
    {
        // start first client
        \$client1 = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client1->insulate();
        }

        // start second client
        \$client2 = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client2->insulate();
        }

        // new session, so no name set.
        \$crawler1 = \$client1->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler1->text());

        // set name of client1
        \$crawler1 = \$client1->request('GET', '/session/client1');
        \$this->assertStringContainsString('Hello client1, nice to meet you.', \$crawler1->text());

        // no session for client2
        \$crawler2 = \$client2->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler2->text());

        // remember name client2
        \$crawler2 = \$client2->request('GET', '/session/client2');
        \$this->assertStringContainsString('Hello client2, nice to meet you.', \$crawler2->text());

        // prove remembered name of client1
        \$crawler1 = \$client1->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back client1, nice to meet you.', \$crawler1->text());

        // prove remembered name of client2
        \$crawler2 = \$client2->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back client2, nice to meet you.', \$crawler2->text());

        // clear client1
        \$crawler1 = \$client1->request('GET', '/session_logout');
        \$this->assertStringContainsString('Session cleared.', \$crawler1->text());

        // prove client1 data is cleared
        \$crawler1 = \$client1->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler1->text());

        // prove remembered name of client2 remains untouched.
        \$crawler2 = \$client2->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back client2, nice to meet you.', \$crawler2->text());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testCorrectCacheControlHeadersForCacheableAction(\$config, \$insulate)
    {
        \$client = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client->insulate();
        }

        \$client->request('GET', '/cacheable');

        \$response = \$client->getResponse();
        \$this->assertSame('public, s-maxage=100', \$response->headers->get('cache-control'));
    }

    public function getConfigs()
    {
        return [
            // configfile, insulate
            ['config.yml', true],
            ['config.yml', false],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/SessionTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

class SessionTest extends AbstractWebTestCase
{
    /**
     * Tests session attributes persist.
     *
     * @dataProvider getConfigs
     */
    public function testWelcome(\$config, \$insulate)
    {
        \$client = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client->insulate();
        }

        // no session
        \$crawler = \$client->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler->text());

        // remember name
        \$crawler = \$client->request('GET', '/session/drak');
        \$this->assertStringContainsString('Hello drak, nice to meet you.', \$crawler->text());

        // prove remembered name
        \$crawler = \$client->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back drak, nice to meet you.', \$crawler->text());

        // clear session
        \$crawler = \$client->request('GET', '/session_logout');
        \$this->assertStringContainsString('Session cleared.', \$crawler->text());

        // prove cleared session
        \$crawler = \$client->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler->text());
    }

    /**
     * Tests flash messages work in practice.
     *
     * @dataProvider getConfigs
     */
    public function testFlash(\$config, \$insulate)
    {
        \$client = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client->insulate();
        }

        // set flash
        \$crawler = \$client->request('GET', '/session_setflash/Hello%20world.');

        // check flash displays on redirect
        \$this->assertStringContainsString('Hello world.', \$client->followRedirect()->text());

        // check flash is gone
        \$crawler = \$client->request('GET', '/session_showflash');
        \$this->assertStringContainsString('No flash was set.', \$crawler->text());
    }

    /**
     * See if two separate insulated clients can run without
     * polluting each other's session data.
     *
     * @dataProvider getConfigs
     */
    public function testTwoClients(\$config, \$insulate)
    {
        // start first client
        \$client1 = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client1->insulate();
        }

        // start second client
        \$client2 = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client2->insulate();
        }

        // new session, so no name set.
        \$crawler1 = \$client1->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler1->text());

        // set name of client1
        \$crawler1 = \$client1->request('GET', '/session/client1');
        \$this->assertStringContainsString('Hello client1, nice to meet you.', \$crawler1->text());

        // no session for client2
        \$crawler2 = \$client2->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler2->text());

        // remember name client2
        \$crawler2 = \$client2->request('GET', '/session/client2');
        \$this->assertStringContainsString('Hello client2, nice to meet you.', \$crawler2->text());

        // prove remembered name of client1
        \$crawler1 = \$client1->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back client1, nice to meet you.', \$crawler1->text());

        // prove remembered name of client2
        \$crawler2 = \$client2->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back client2, nice to meet you.', \$crawler2->text());

        // clear client1
        \$crawler1 = \$client1->request('GET', '/session_logout');
        \$this->assertStringContainsString('Session cleared.', \$crawler1->text());

        // prove client1 data is cleared
        \$crawler1 = \$client1->request('GET', '/session');
        \$this->assertStringContainsString('You are new here and gave no name.', \$crawler1->text());

        // prove remembered name of client2 remains untouched.
        \$crawler2 = \$client2->request('GET', '/session');
        \$this->assertStringContainsString('Welcome back client2, nice to meet you.', \$crawler2->text());
    }

    /**
     * @dataProvider getConfigs
     */
    public function testCorrectCacheControlHeadersForCacheableAction(\$config, \$insulate)
    {
        \$client = \$this->createClient(['test_case' => 'Session', 'root_config' => \$config]);
        if (\$insulate) {
            \$client->insulate();
        }

        \$client->request('GET', '/cacheable');

        \$response = \$client->getResponse();
        \$this->assertSame('public, s-maxage=100', \$response->headers->get('cache-control'));
    }

    public function getConfigs()
    {
        return [
            // configfile, insulate
            ['config.yml', true],
            ['config.yml', false],
        ];
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/SessionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/SessionTest.php");
    }
}
