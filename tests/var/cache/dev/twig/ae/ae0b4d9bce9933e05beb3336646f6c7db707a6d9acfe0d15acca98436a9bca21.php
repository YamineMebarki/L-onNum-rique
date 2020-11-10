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

/* vendor/symfony/security-bundle/Tests/Functional/FirewallEntryPointTest.php */
class __TwigTemplate_99e2fc35f5fe02cc846b7c05cc7d0be94966df2b2319cc1e99249edc3fc4077d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/FirewallEntryPointTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/FirewallEntryPointTest.php"));

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

use Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FirewallEntryPointBundle\\Security\\EntryPointStub;

class FirewallEntryPointTest extends AbstractWebTestCase
{
    public function testItUsesTheConfiguredEntryPointWhenUsingUnknownCredentials()
    {
        \$client = \$this->createClient(['test_case' => 'FirewallEntryPoint']);

        \$client->request('GET', '/secure/resource', [], [], [
            'PHP_AUTH_USER' => 'unknown',
            'PHP_AUTH_PW' => 'credentials',
        ]);

        \$this->assertEquals(
            EntryPointStub::RESPONSE_TEXT,
            \$client->getResponse()->getContent(),
            \"Custom entry point wasn't started\"
        );
    }

    public function testItUsesTheConfiguredEntryPointFromTheExceptionListenerWithFormLoginAndNoCredentials()
    {
        \$client = \$this->createClient(['test_case' => 'FirewallEntryPoint', 'root_config' => 'config_form_login.yml']);

        \$client->request('GET', '/secure/resource');

        \$this->assertEquals(
            EntryPointStub::RESPONSE_TEXT,
            \$client->getResponse()->getContent(),
            \"Custom entry point wasn't started\"
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/FirewallEntryPointTest.php";
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

use Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FirewallEntryPointBundle\\Security\\EntryPointStub;

class FirewallEntryPointTest extends AbstractWebTestCase
{
    public function testItUsesTheConfiguredEntryPointWhenUsingUnknownCredentials()
    {
        \$client = \$this->createClient(['test_case' => 'FirewallEntryPoint']);

        \$client->request('GET', '/secure/resource', [], [], [
            'PHP_AUTH_USER' => 'unknown',
            'PHP_AUTH_PW' => 'credentials',
        ]);

        \$this->assertEquals(
            EntryPointStub::RESPONSE_TEXT,
            \$client->getResponse()->getContent(),
            \"Custom entry point wasn't started\"
        );
    }

    public function testItUsesTheConfiguredEntryPointFromTheExceptionListenerWithFormLoginAndNoCredentials()
    {
        \$client = \$this->createClient(['test_case' => 'FirewallEntryPoint', 'root_config' => 'config_form_login.yml']);

        \$client->request('GET', '/secure/resource');

        \$this->assertEquals(
            EntryPointStub::RESPONSE_TEXT,
            \$client->getResponse()->getContent(),
            \"Custom entry point wasn't started\"
        );
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/FirewallEntryPointTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/FirewallEntryPointTest.php");
    }
}
