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

/* vendor/symfony/security-http/Firewall/AccessListener.php */
class __TwigTemplate_d3b102d45c52d450c0209904c056bf8dd6d817215ee8f69af5fdf8156ce80f4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/AccessListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/AccessListener.php"));

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

use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;
use Symfony\\Component\\Security\\Http\\AccessMapInterface;

/**
 * AccessListener enforces access control rules.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class AccessListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$accessDecisionManager;
    private \$map;
    private \$authManager;

    public function __construct(TokenStorageInterface \$tokenStorage, AccessDecisionManagerInterface \$accessDecisionManager, AccessMapInterface \$map, AuthenticationManagerInterface \$authManager)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->accessDecisionManager = \$accessDecisionManager;
        \$this->map = \$map;
        \$this->authManager = \$authManager;
    }

    /**
     * Handles access authorization.
     *
     * @throws AccessDeniedException
     * @throws AuthenticationCredentialsNotFoundException
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null === \$token = \$this->tokenStorage->getToken()) {
            throw new AuthenticationCredentialsNotFoundException('A Token was not found in the TokenStorage.');
        }

        \$request = \$event->getRequest();

        list(\$attributes) = \$this->map->getPatterns(\$request);

        if (null === \$attributes) {
            return;
        }

        if (!\$token->isAuthenticated()) {
            \$token = \$this->authManager->authenticate(\$token);
            \$this->tokenStorage->setToken(\$token);
        }

        if (!\$this->accessDecisionManager->decide(\$token, \$attributes, \$request)) {
            \$exception = new AccessDeniedException();
            \$exception->setAttributes(\$attributes);
            \$exception->setSubject(\$request);

            throw \$exception;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/AccessListener.php";
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

use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;
use Symfony\\Component\\Security\\Http\\AccessMapInterface;

/**
 * AccessListener enforces access control rules.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class AccessListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$accessDecisionManager;
    private \$map;
    private \$authManager;

    public function __construct(TokenStorageInterface \$tokenStorage, AccessDecisionManagerInterface \$accessDecisionManager, AccessMapInterface \$map, AuthenticationManagerInterface \$authManager)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->accessDecisionManager = \$accessDecisionManager;
        \$this->map = \$map;
        \$this->authManager = \$authManager;
    }

    /**
     * Handles access authorization.
     *
     * @throws AccessDeniedException
     * @throws AuthenticationCredentialsNotFoundException
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null === \$token = \$this->tokenStorage->getToken()) {
            throw new AuthenticationCredentialsNotFoundException('A Token was not found in the TokenStorage.');
        }

        \$request = \$event->getRequest();

        list(\$attributes) = \$this->map->getPatterns(\$request);

        if (null === \$attributes) {
            return;
        }

        if (!\$token->isAuthenticated()) {
            \$token = \$this->authManager->authenticate(\$token);
            \$this->tokenStorage->setToken(\$token);
        }

        if (!\$this->accessDecisionManager->decide(\$token, \$attributes, \$request)) {
            \$exception = new AccessDeniedException();
            \$exception->setAttributes(\$attributes);
            \$exception->setSubject(\$request);

            throw \$exception;
        }
    }
}
", "vendor/symfony/security-http/Firewall/AccessListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/AccessListener.php");
    }
}
