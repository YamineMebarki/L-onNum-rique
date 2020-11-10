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

/* vendor/symfony/security-guard/Token/PreAuthenticationGuardToken.php */
class __TwigTemplate_f66b866b82b68995a9856308e0eb74206f80c99aa5fd01c1baf488d559953563 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Token/PreAuthenticationGuardToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Token/PreAuthenticationGuardToken.php"));

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

namespace Symfony\\Component\\Security\\Guard\\Token;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;

/**
 * The token used by the guard auth system before authentication.
 *
 * The GuardAuthenticationListener creates this, which is then consumed
 * immediately by the GuardAuthenticationProvider. If authentication is
 * successful, a different authenticated token is returned
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class PreAuthenticationGuardToken extends AbstractToken implements GuardTokenInterface
{
    private \$credentials;
    private \$guardProviderKey;

    /**
     * @param mixed  \$credentials
     * @param string \$guardProviderKey Unique key that bind this token to a specific AuthenticatorInterface
     */
    public function __construct(\$credentials, string \$guardProviderKey)
    {
        \$this->credentials = \$credentials;
        \$this->guardProviderKey = \$guardProviderKey;

        parent::__construct([]);

        // never authenticated
        parent::setAuthenticated(false);
    }

    public function getGuardProviderKey()
    {
        return \$this->guardProviderKey;
    }

    /**
     * Returns the user credentials, which might be an array of anything you
     * wanted to put in there (e.g. username, password, favoriteColor).
     *
     * @return mixed The user credentials
     */
    public function getCredentials()
    {
        return \$this->credentials;
    }

    public function setAuthenticated(\$authenticated)
    {
        throw new \\LogicException('The PreAuthenticationGuardToken is *never* authenticated.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-guard/Token/PreAuthenticationGuardToken.php";
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

namespace Symfony\\Component\\Security\\Guard\\Token;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;

/**
 * The token used by the guard auth system before authentication.
 *
 * The GuardAuthenticationListener creates this, which is then consumed
 * immediately by the GuardAuthenticationProvider. If authentication is
 * successful, a different authenticated token is returned
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class PreAuthenticationGuardToken extends AbstractToken implements GuardTokenInterface
{
    private \$credentials;
    private \$guardProviderKey;

    /**
     * @param mixed  \$credentials
     * @param string \$guardProviderKey Unique key that bind this token to a specific AuthenticatorInterface
     */
    public function __construct(\$credentials, string \$guardProviderKey)
    {
        \$this->credentials = \$credentials;
        \$this->guardProviderKey = \$guardProviderKey;

        parent::__construct([]);

        // never authenticated
        parent::setAuthenticated(false);
    }

    public function getGuardProviderKey()
    {
        return \$this->guardProviderKey;
    }

    /**
     * Returns the user credentials, which might be an array of anything you
     * wanted to put in there (e.g. username, password, favoriteColor).
     *
     * @return mixed The user credentials
     */
    public function getCredentials()
    {
        return \$this->credentials;
    }

    public function setAuthenticated(\$authenticated)
    {
        throw new \\LogicException('The PreAuthenticationGuardToken is *never* authenticated.');
    }
}
", "vendor/symfony/security-guard/Token/PreAuthenticationGuardToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-guard/Token/PreAuthenticationGuardToken.php");
    }
}
