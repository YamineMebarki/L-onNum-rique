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

/* vendor/symfony/security-bundle/Tests/Security/FirewallConfigTest.php */
class __TwigTemplate_a78e370e7cdf76007f76f2a6375663bf8fb1f2d08619cc7c2112eafc95df2d3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Security/FirewallConfigTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Security/FirewallConfigTest.php"));

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

class FirewallConfigTest extends TestCase
{
    public function testGetters()
    {
        \$listeners = ['logout', 'remember_me', 'anonymous'];
        \$options = [
            'request_matcher' => 'foo_request_matcher',
            'security' => false,
            'stateless' => false,
            'provider' => 'foo_provider',
            'context' => 'foo_context',
            'entry_point' => 'foo_entry_point',
            'access_denied_url' => 'foo_access_denied_url',
            'access_denied_handler' => 'foo_access_denied_handler',
            'user_checker' => 'foo_user_checker',
            'switch_user' => ['provider' => null, 'parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH'],
        ];

        \$config = new FirewallConfig(
            'foo_firewall',
            \$options['user_checker'],
            \$options['request_matcher'],
            \$options['security'],
            \$options['stateless'],
            \$options['provider'],
            \$options['context'],
            \$options['entry_point'],
            \$options['access_denied_handler'],
            \$options['access_denied_url'],
            \$listeners,
            \$options['switch_user']
        );

        \$this->assertSame('foo_firewall', \$config->getName());
        \$this->assertSame(\$options['request_matcher'], \$config->getRequestMatcher());
        \$this->assertSame(\$options['security'], \$config->isSecurityEnabled());
        \$this->assertSame(\$options['stateless'], \$config->isStateless());
        \$this->assertSame(\$options['provider'], \$config->getProvider());
        \$this->assertSame(\$options['context'], \$config->getContext());
        \$this->assertSame(\$options['entry_point'], \$config->getEntryPoint());
        \$this->assertSame(\$options['access_denied_handler'], \$config->getAccessDeniedHandler());
        \$this->assertSame(\$options['access_denied_url'], \$config->getAccessDeniedUrl());
        \$this->assertSame(\$options['user_checker'], \$config->getUserChecker());
        \$this->assertTrue(\$config->allowsAnonymous());
        \$this->assertSame(\$listeners, \$config->getListeners());
        \$this->assertSame(\$options['switch_user'], \$config->getSwitchUser());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Security/FirewallConfigTest.php";
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

class FirewallConfigTest extends TestCase
{
    public function testGetters()
    {
        \$listeners = ['logout', 'remember_me', 'anonymous'];
        \$options = [
            'request_matcher' => 'foo_request_matcher',
            'security' => false,
            'stateless' => false,
            'provider' => 'foo_provider',
            'context' => 'foo_context',
            'entry_point' => 'foo_entry_point',
            'access_denied_url' => 'foo_access_denied_url',
            'access_denied_handler' => 'foo_access_denied_handler',
            'user_checker' => 'foo_user_checker',
            'switch_user' => ['provider' => null, 'parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH'],
        ];

        \$config = new FirewallConfig(
            'foo_firewall',
            \$options['user_checker'],
            \$options['request_matcher'],
            \$options['security'],
            \$options['stateless'],
            \$options['provider'],
            \$options['context'],
            \$options['entry_point'],
            \$options['access_denied_handler'],
            \$options['access_denied_url'],
            \$listeners,
            \$options['switch_user']
        );

        \$this->assertSame('foo_firewall', \$config->getName());
        \$this->assertSame(\$options['request_matcher'], \$config->getRequestMatcher());
        \$this->assertSame(\$options['security'], \$config->isSecurityEnabled());
        \$this->assertSame(\$options['stateless'], \$config->isStateless());
        \$this->assertSame(\$options['provider'], \$config->getProvider());
        \$this->assertSame(\$options['context'], \$config->getContext());
        \$this->assertSame(\$options['entry_point'], \$config->getEntryPoint());
        \$this->assertSame(\$options['access_denied_handler'], \$config->getAccessDeniedHandler());
        \$this->assertSame(\$options['access_denied_url'], \$config->getAccessDeniedUrl());
        \$this->assertSame(\$options['user_checker'], \$config->getUserChecker());
        \$this->assertTrue(\$config->allowsAnonymous());
        \$this->assertSame(\$listeners, \$config->getListeners());
        \$this->assertSame(\$options['switch_user'], \$config->getSwitchUser());
    }
}
", "vendor/symfony/security-bundle/Tests/Security/FirewallConfigTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Security/FirewallConfigTest.php");
    }
}
