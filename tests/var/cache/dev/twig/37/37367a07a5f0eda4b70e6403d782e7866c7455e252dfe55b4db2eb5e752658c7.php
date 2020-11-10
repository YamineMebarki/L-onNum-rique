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

/* vendor/symfony/security-http/Firewall/X509AuthenticationListener.php */
class __TwigTemplate_6cb70e285f553faf21ed1f1a1646a45415ed836f3f6af1785107d1c78958ba16 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/X509AuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/X509AuthenticationListener.php"));

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

namespace Symfony\\Component\\Security\\Http\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * X509 authentication listener.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class X509AuthenticationListener extends AbstractPreAuthenticatedListener
{
    private \$userKey;
    private \$credentialKey;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, string \$userKey = 'SSL_CLIENT_S_DN_Email', string \$credentialKey = 'SSL_CLIENT_S_DN', LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null)
    {
        parent::__construct(\$tokenStorage, \$authenticationManager, \$providerKey, \$logger, \$dispatcher);

        \$this->userKey = \$userKey;
        \$this->credentialKey = \$credentialKey;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPreAuthenticatedData(Request \$request)
    {
        \$user = null;
        if (\$request->server->has(\$this->userKey)) {
            \$user = \$request->server->get(\$this->userKey);
        } elseif (
            \$request->server->has(\$this->credentialKey)
            && preg_match('#emailAddress=([^,/@]++@[^,/]++)#', \$request->server->get(\$this->credentialKey), \$matches)
        ) {
            \$user = \$matches[1];
        }

        if (null === \$user) {
            throw new BadCredentialsException(sprintf('SSL credentials not found: %s, %s', \$this->userKey, \$this->credentialKey));
        }

        return [\$user, \$request->server->get(\$this->credentialKey, '')];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/X509AuthenticationListener.php";
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

namespace Symfony\\Component\\Security\\Http\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * X509 authentication listener.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class X509AuthenticationListener extends AbstractPreAuthenticatedListener
{
    private \$userKey;
    private \$credentialKey;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, string \$userKey = 'SSL_CLIENT_S_DN_Email', string \$credentialKey = 'SSL_CLIENT_S_DN', LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null)
    {
        parent::__construct(\$tokenStorage, \$authenticationManager, \$providerKey, \$logger, \$dispatcher);

        \$this->userKey = \$userKey;
        \$this->credentialKey = \$credentialKey;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPreAuthenticatedData(Request \$request)
    {
        \$user = null;
        if (\$request->server->has(\$this->userKey)) {
            \$user = \$request->server->get(\$this->userKey);
        } elseif (
            \$request->server->has(\$this->credentialKey)
            && preg_match('#emailAddress=([^,/@]++@[^,/]++)#', \$request->server->get(\$this->credentialKey), \$matches)
        ) {
            \$user = \$matches[1];
        }

        if (null === \$user) {
            throw new BadCredentialsException(sprintf('SSL credentials not found: %s, %s', \$this->userKey, \$this->credentialKey));
        }

        return [\$user, \$request->server->get(\$this->credentialKey, '')];
    }
}
", "vendor/symfony/security-http/Firewall/X509AuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/X509AuthenticationListener.php");
    }
}
