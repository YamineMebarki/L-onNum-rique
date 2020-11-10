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

/* vendor/symfony/security-core/Authorization/AuthorizationChecker.php */
class __TwigTemplate_65617fbb698f017cee6b4ed8df2ec9115d21f6781dd44cd42b8b521f25783162 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/AuthorizationChecker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/AuthorizationChecker.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;

/**
 * AuthorizationChecker is the main authorization point of the Security component.
 *
 * It gives access to the token representing the current user authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthorizationChecker implements AuthorizationCheckerInterface
{
    private \$tokenStorage;
    private \$accessDecisionManager;
    private \$authenticationManager;
    private \$alwaysAuthenticate;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, AccessDecisionManagerInterface \$accessDecisionManager, bool \$alwaysAuthenticate = false)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->accessDecisionManager = \$accessDecisionManager;
        \$this->alwaysAuthenticate = \$alwaysAuthenticate;
    }

    /**
     * {@inheritdoc}
     *
     * @throws AuthenticationCredentialsNotFoundException when the token storage has no authentication token
     */
    final public function isGranted(\$attributes, \$subject = null)
    {
        if (null === (\$token = \$this->tokenStorage->getToken())) {
            throw new AuthenticationCredentialsNotFoundException('The token storage contains no authentication token. One possible reason may be that there is no firewall configured for this URL.');
        }

        if (\$this->alwaysAuthenticate || !\$token->isAuthenticated()) {
            \$this->tokenStorage->setToken(\$token = \$this->authenticationManager->authenticate(\$token));
        }

        if (!\\is_array(\$attributes)) {
            \$attributes = [\$attributes];
        }

        return \$this->accessDecisionManager->decide(\$token, \$attributes, \$subject);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/AuthorizationChecker.php";
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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;

/**
 * AuthorizationChecker is the main authorization point of the Security component.
 *
 * It gives access to the token representing the current user authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthorizationChecker implements AuthorizationCheckerInterface
{
    private \$tokenStorage;
    private \$accessDecisionManager;
    private \$authenticationManager;
    private \$alwaysAuthenticate;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, AccessDecisionManagerInterface \$accessDecisionManager, bool \$alwaysAuthenticate = false)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->accessDecisionManager = \$accessDecisionManager;
        \$this->alwaysAuthenticate = \$alwaysAuthenticate;
    }

    /**
     * {@inheritdoc}
     *
     * @throws AuthenticationCredentialsNotFoundException when the token storage has no authentication token
     */
    final public function isGranted(\$attributes, \$subject = null)
    {
        if (null === (\$token = \$this->tokenStorage->getToken())) {
            throw new AuthenticationCredentialsNotFoundException('The token storage contains no authentication token. One possible reason may be that there is no firewall configured for this URL.');
        }

        if (\$this->alwaysAuthenticate || !\$token->isAuthenticated()) {
            \$this->tokenStorage->setToken(\$token = \$this->authenticationManager->authenticate(\$token));
        }

        if (!\\is_array(\$attributes)) {
            \$attributes = [\$attributes];
        }

        return \$this->accessDecisionManager->decide(\$token, \$attributes, \$subject);
    }
}
", "vendor/symfony/security-core/Authorization/AuthorizationChecker.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/AuthorizationChecker.php");
    }
}
