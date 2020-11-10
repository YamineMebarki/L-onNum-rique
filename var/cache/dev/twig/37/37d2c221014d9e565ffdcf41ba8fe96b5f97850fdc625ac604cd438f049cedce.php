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

/* vendor/symfony/security-bundle/Security/FirewallConfig.php */
class __TwigTemplate_465cb2c3d9747539f05c7f5d03f70a387eb20e07707754028fe63f7243ddf3ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Security/FirewallConfig.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Security/FirewallConfig.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Security;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class FirewallConfig
{
    private \$name;
    private \$userChecker;
    private \$requestMatcher;
    private \$securityEnabled;
    private \$stateless;
    private \$provider;
    private \$context;
    private \$entryPoint;
    private \$accessDeniedHandler;
    private \$accessDeniedUrl;
    private \$listeners;
    private \$switchUser;

    public function __construct(string \$name, string \$userChecker, string \$requestMatcher = null, bool \$securityEnabled = true, bool \$stateless = false, string \$provider = null, string \$context = null, string \$entryPoint = null, string \$accessDeniedHandler = null, string \$accessDeniedUrl = null, array \$listeners = [], \$switchUser = null)
    {
        \$this->name = \$name;
        \$this->userChecker = \$userChecker;
        \$this->requestMatcher = \$requestMatcher;
        \$this->securityEnabled = \$securityEnabled;
        \$this->stateless = \$stateless;
        \$this->provider = \$provider;
        \$this->context = \$context;
        \$this->entryPoint = \$entryPoint;
        \$this->accessDeniedHandler = \$accessDeniedHandler;
        \$this->accessDeniedUrl = \$accessDeniedUrl;
        \$this->listeners = \$listeners;
        \$this->switchUser = \$switchUser;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * @return string|null The request matcher service id or null if neither the request matcher, pattern or host
     *                     options were provided
     */
    public function getRequestMatcher(): ?string
    {
        return \$this->requestMatcher;
    }

    public function isSecurityEnabled(): bool
    {
        return \$this->securityEnabled;
    }

    public function allowsAnonymous(): bool
    {
        return \\in_array('anonymous', \$this->listeners, true);
    }

    public function isStateless(): bool
    {
        return \$this->stateless;
    }

    public function getProvider(): ?string
    {
        return \$this->provider;
    }

    /**
     * @return string|null The context key (will be null if the firewall is stateless)
     */
    public function getContext(): ?string
    {
        return \$this->context;
    }

    public function getEntryPoint(): ?string
    {
        return \$this->entryPoint;
    }

    public function getUserChecker(): string
    {
        return \$this->userChecker;
    }

    public function getAccessDeniedHandler(): ?string
    {
        return \$this->accessDeniedHandler;
    }

    public function getAccessDeniedUrl(): ?string
    {
        return \$this->accessDeniedUrl;
    }

    public function getListeners(): array
    {
        return \$this->listeners;
    }

    public function getSwitchUser(): ?array
    {
        return \$this->switchUser;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Security/FirewallConfig.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Security;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class FirewallConfig
{
    private \$name;
    private \$userChecker;
    private \$requestMatcher;
    private \$securityEnabled;
    private \$stateless;
    private \$provider;
    private \$context;
    private \$entryPoint;
    private \$accessDeniedHandler;
    private \$accessDeniedUrl;
    private \$listeners;
    private \$switchUser;

    public function __construct(string \$name, string \$userChecker, string \$requestMatcher = null, bool \$securityEnabled = true, bool \$stateless = false, string \$provider = null, string \$context = null, string \$entryPoint = null, string \$accessDeniedHandler = null, string \$accessDeniedUrl = null, array \$listeners = [], \$switchUser = null)
    {
        \$this->name = \$name;
        \$this->userChecker = \$userChecker;
        \$this->requestMatcher = \$requestMatcher;
        \$this->securityEnabled = \$securityEnabled;
        \$this->stateless = \$stateless;
        \$this->provider = \$provider;
        \$this->context = \$context;
        \$this->entryPoint = \$entryPoint;
        \$this->accessDeniedHandler = \$accessDeniedHandler;
        \$this->accessDeniedUrl = \$accessDeniedUrl;
        \$this->listeners = \$listeners;
        \$this->switchUser = \$switchUser;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    /**
     * @return string|null The request matcher service id or null if neither the request matcher, pattern or host
     *                     options were provided
     */
    public function getRequestMatcher(): ?string
    {
        return \$this->requestMatcher;
    }

    public function isSecurityEnabled(): bool
    {
        return \$this->securityEnabled;
    }

    public function allowsAnonymous(): bool
    {
        return \\in_array('anonymous', \$this->listeners, true);
    }

    public function isStateless(): bool
    {
        return \$this->stateless;
    }

    public function getProvider(): ?string
    {
        return \$this->provider;
    }

    /**
     * @return string|null The context key (will be null if the firewall is stateless)
     */
    public function getContext(): ?string
    {
        return \$this->context;
    }

    public function getEntryPoint(): ?string
    {
        return \$this->entryPoint;
    }

    public function getUserChecker(): string
    {
        return \$this->userChecker;
    }

    public function getAccessDeniedHandler(): ?string
    {
        return \$this->accessDeniedHandler;
    }

    public function getAccessDeniedUrl(): ?string
    {
        return \$this->accessDeniedUrl;
    }

    public function getListeners(): array
    {
        return \$this->listeners;
    }

    public function getSwitchUser(): ?array
    {
        return \$this->switchUser;
    }
}
", "vendor/symfony/security-bundle/Security/FirewallConfig.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Security/FirewallConfig.php");
    }
}
