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

/* vendor/symfony/security-http/Firewall/RemoteUserAuthenticationListener.php */
class __TwigTemplate_c3ff5d0910149a93cfe63b6213a31ecb3cdee80a65459c46185c72dde8a59f75 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/RemoteUserAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/RemoteUserAuthenticationListener.php"));

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
 * REMOTE_USER authentication listener.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Maxime Douailin <maxime.douailin@gmail.com>
 */
class RemoteUserAuthenticationListener extends AbstractPreAuthenticatedListener
{
    private \$userKey;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, string \$userKey = 'REMOTE_USER', LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null)
    {
        parent::__construct(\$tokenStorage, \$authenticationManager, \$providerKey, \$logger, \$dispatcher);

        \$this->userKey = \$userKey;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPreAuthenticatedData(Request \$request)
    {
        if (!\$request->server->has(\$this->userKey)) {
            throw new BadCredentialsException(sprintf('User key was not found: %s', \$this->userKey));
        }

        return [\$request->server->get(\$this->userKey), null];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/RemoteUserAuthenticationListener.php";
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
 * REMOTE_USER authentication listener.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Maxime Douailin <maxime.douailin@gmail.com>
 */
class RemoteUserAuthenticationListener extends AbstractPreAuthenticatedListener
{
    private \$userKey;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, string \$userKey = 'REMOTE_USER', LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null)
    {
        parent::__construct(\$tokenStorage, \$authenticationManager, \$providerKey, \$logger, \$dispatcher);

        \$this->userKey = \$userKey;
    }

    /**
     * {@inheritdoc}
     */
    protected function getPreAuthenticatedData(Request \$request)
    {
        if (!\$request->server->has(\$this->userKey)) {
            throw new BadCredentialsException(sprintf('User key was not found: %s', \$this->userKey));
        }

        return [\$request->server->get(\$this->userKey), null];
    }
}
", "vendor/symfony/security-http/Firewall/RemoteUserAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/RemoteUserAuthenticationListener.php");
    }
}
