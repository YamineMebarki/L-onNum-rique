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

/* vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php */
class __TwigTemplate_8e8155ccf3251e92edc31ae37c37ab7ed9aafb301191757172240d8398bf2ee9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

/**
 * AnonymousAuthenticationListener automatically adds a Token if none is
 * already present.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class AnonymousAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$secret;
    private \$authenticationManager;
    private \$logger;

    public function __construct(TokenStorageInterface \$tokenStorage, string \$secret, LoggerInterface \$logger = null, AuthenticationManagerInterface \$authenticationManager = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->secret = \$secret;
        \$this->authenticationManager = \$authenticationManager;
        \$this->logger = \$logger;
    }

    /**
     * Handles anonymous authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null !== \$this->tokenStorage->getToken()) {
            return;
        }

        try {
            \$token = new AnonymousToken(\$this->secret, 'anon.', []);
            if (null !== \$this->authenticationManager) {
                \$token = \$this->authenticationManager->authenticate(\$token);
            }

            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->logger) {
                \$this->logger->info('Populated the TokenStorage with an anonymous Token.');
            }
        } catch (AuthenticationException \$failed) {
            if (null !== \$this->logger) {
                \$this->logger->info('Anonymous authentication failed.', ['exception' => \$failed]);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php";
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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

/**
 * AnonymousAuthenticationListener automatically adds a Token if none is
 * already present.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class AnonymousAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$secret;
    private \$authenticationManager;
    private \$logger;

    public function __construct(TokenStorageInterface \$tokenStorage, string \$secret, LoggerInterface \$logger = null, AuthenticationManagerInterface \$authenticationManager = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->secret = \$secret;
        \$this->authenticationManager = \$authenticationManager;
        \$this->logger = \$logger;
    }

    /**
     * Handles anonymous authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null !== \$this->tokenStorage->getToken()) {
            return;
        }

        try {
            \$token = new AnonymousToken(\$this->secret, 'anon.', []);
            if (null !== \$this->authenticationManager) {
                \$token = \$this->authenticationManager->authenticate(\$token);
            }

            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->logger) {
                \$this->logger->info('Populated the TokenStorage with an anonymous Token.');
            }
        } catch (AuthenticationException \$failed) {
            if (null !== \$this->logger) {
                \$this->logger->info('Anonymous authentication failed.', ['exception' => \$failed]);
            }
        }
    }
}
", "vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php");
    }
}
