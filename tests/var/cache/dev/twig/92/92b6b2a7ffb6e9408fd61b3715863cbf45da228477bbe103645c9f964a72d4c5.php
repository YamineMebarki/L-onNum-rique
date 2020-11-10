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

/* vendor/symfony/security-core/Authentication/Provider/SimpleAuthenticationProvider.php */
class __TwigTemplate_72aeb360e56fbef5f078c05d75b1e8d7947b75d8098d956282b361ac5bc2e447 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/SimpleAuthenticationProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/SimpleAuthenticationProvider.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Provider;

use Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserChecker;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimpleAuthenticationProvider::class), E_USER_DEPRECATED);

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$simpleAuthenticator;
    private \$userProvider;
    private \$providerKey;
    private \$userChecker;

    public function __construct(SimpleAuthenticatorInterface \$simpleAuthenticator, UserProviderInterface \$userProvider, string \$providerKey, UserCheckerInterface \$userChecker = null)
    {
        \$this->simpleAuthenticator = \$simpleAuthenticator;
        \$this->userProvider = \$userProvider;
        \$this->providerKey = \$providerKey;
        \$this->userChecker = \$userChecker ?: new UserChecker();
    }

    public function authenticate(TokenInterface \$token)
    {
        \$authToken = \$this->simpleAuthenticator->authenticateToken(\$token, \$this->userProvider, \$this->providerKey);

        if (!\$authToken instanceof TokenInterface) {
            throw new AuthenticationException('Simple authenticator failed to return an authenticated token.');
        }

        \$user = \$authToken->getUser();

        if (!\$user instanceof UserInterface) {
            return \$authToken;
        }

        \$this->userChecker->checkPreAuth(\$user);
        \$this->userChecker->checkPostAuth(\$user);

        return \$authToken;
    }

    public function supports(TokenInterface \$token)
    {
        return \$this->simpleAuthenticator->supportsToken(\$token, \$this->providerKey);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Provider/SimpleAuthenticationProvider.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Provider;

use Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserChecker;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimpleAuthenticationProvider::class), E_USER_DEPRECATED);

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$simpleAuthenticator;
    private \$userProvider;
    private \$providerKey;
    private \$userChecker;

    public function __construct(SimpleAuthenticatorInterface \$simpleAuthenticator, UserProviderInterface \$userProvider, string \$providerKey, UserCheckerInterface \$userChecker = null)
    {
        \$this->simpleAuthenticator = \$simpleAuthenticator;
        \$this->userProvider = \$userProvider;
        \$this->providerKey = \$providerKey;
        \$this->userChecker = \$userChecker ?: new UserChecker();
    }

    public function authenticate(TokenInterface \$token)
    {
        \$authToken = \$this->simpleAuthenticator->authenticateToken(\$token, \$this->userProvider, \$this->providerKey);

        if (!\$authToken instanceof TokenInterface) {
            throw new AuthenticationException('Simple authenticator failed to return an authenticated token.');
        }

        \$user = \$authToken->getUser();

        if (!\$user instanceof UserInterface) {
            return \$authToken;
        }

        \$this->userChecker->checkPreAuth(\$user);
        \$this->userChecker->checkPostAuth(\$user);

        return \$authToken;
    }

    public function supports(TokenInterface \$token)
    {
        return \$this->simpleAuthenticator->supportsToken(\$token, \$this->providerKey);
    }
}
", "vendor/symfony/security-core/Authentication/Provider/SimpleAuthenticationProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Provider/SimpleAuthenticationProvider.php");
    }
}
