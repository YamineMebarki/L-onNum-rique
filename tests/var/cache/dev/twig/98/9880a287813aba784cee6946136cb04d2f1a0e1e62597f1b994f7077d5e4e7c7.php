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

/* vendor/symfony/security-core/Authentication/Provider/RememberMeAuthenticationProvider.php */
class __TwigTemplate_83edc561e569f35de4324f7708bbd49c0e71f09a25779a5a2887bb402dbd7f24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/RememberMeAuthenticationProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/RememberMeAuthenticationProvider.php"));

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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;

class RememberMeAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$userChecker;
    private \$secret;
    private \$providerKey;

    /**
     * @param UserCheckerInterface \$userChecker An UserCheckerInterface interface
     * @param string               \$secret      A secret
     * @param string               \$providerKey A provider secret
     */
    public function __construct(UserCheckerInterface \$userChecker, string \$secret, string \$providerKey)
    {
        \$this->userChecker = \$userChecker;
        \$this->secret = \$secret;
        \$this->providerKey = \$providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        if (\$this->secret !== \$token->getSecret()) {
            throw new BadCredentialsException('The presented secret does not match.');
        }

        \$user = \$token->getUser();
        \$this->userChecker->checkPreAuth(\$user);
        \$this->userChecker->checkPostAuth(\$user);

        \$authenticatedToken = new RememberMeToken(\$user, \$this->providerKey, \$this->secret);
        \$authenticatedToken->setAttributes(\$token->getAttributes());

        return \$authenticatedToken;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof RememberMeToken && \$token->getProviderKey() === \$this->providerKey;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Provider/RememberMeAuthenticationProvider.php";
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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;

class RememberMeAuthenticationProvider implements AuthenticationProviderInterface
{
    private \$userChecker;
    private \$secret;
    private \$providerKey;

    /**
     * @param UserCheckerInterface \$userChecker An UserCheckerInterface interface
     * @param string               \$secret      A secret
     * @param string               \$providerKey A provider secret
     */
    public function __construct(UserCheckerInterface \$userChecker, string \$secret, string \$providerKey)
    {
        \$this->userChecker = \$userChecker;
        \$this->secret = \$secret;
        \$this->providerKey = \$providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        if (\$this->secret !== \$token->getSecret()) {
            throw new BadCredentialsException('The presented secret does not match.');
        }

        \$user = \$token->getUser();
        \$this->userChecker->checkPreAuth(\$user);
        \$this->userChecker->checkPostAuth(\$user);

        \$authenticatedToken = new RememberMeToken(\$user, \$this->providerKey, \$this->secret);
        \$authenticatedToken->setAttributes(\$token->getAttributes());

        return \$authenticatedToken;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof RememberMeToken && \$token->getProviderKey() === \$this->providerKey;
    }
}
", "vendor/symfony/security-core/Authentication/Provider/RememberMeAuthenticationProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Provider/RememberMeAuthenticationProvider.php");
    }
}
