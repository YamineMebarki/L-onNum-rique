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

/* vendor/symfony/security-core/Authentication/Provider/LdapBindAuthenticationProvider.php */
class __TwigTemplate_6a6567177c89df68003089377b6088404dbff1e8ad79691c65ffe7a55c38d1bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/LdapBindAuthenticationProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/LdapBindAuthenticationProvider.php"));

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

use Symfony\\Component\\Ldap\\Exception\\ConnectionException;
use Symfony\\Component\\Ldap\\LdapInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * LdapBindAuthenticationProvider authenticates a user against an LDAP server.
 *
 * The only way to check user credentials is to try to connect the user with its
 * credentials to the ldap.
 *
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class LdapBindAuthenticationProvider extends UserAuthenticationProvider
{
    private \$userProvider;
    private \$ldap;
    private \$dnString;
    private \$queryString;

    public function __construct(UserProviderInterface \$userProvider, UserCheckerInterface \$userChecker, string \$providerKey, LdapInterface \$ldap, string \$dnString = '{username}', bool \$hideUserNotFoundExceptions = true)
    {
        parent::__construct(\$userChecker, \$providerKey, \$hideUserNotFoundExceptions);

        \$this->userProvider = \$userProvider;
        \$this->ldap = \$ldap;
        \$this->dnString = \$dnString;
    }

    /**
     * Set a query string to use in order to find a DN for the username.
     *
     * @param string \$queryString
     */
    public function setQueryString(\$queryString)
    {
        \$this->queryString = \$queryString;
    }

    /**
     * {@inheritdoc}
     */
    protected function retrieveUser(\$username, UsernamePasswordToken \$token)
    {
        if (AuthenticationProviderInterface::USERNAME_NONE_PROVIDED === \$username) {
            throw new UsernameNotFoundException('Username can not be null');
        }

        return \$this->userProvider->loadUserByUsername(\$username);
    }

    /**
     * {@inheritdoc}
     */
    protected function checkAuthentication(UserInterface \$user, UsernamePasswordToken \$token)
    {
        \$username = \$token->getUsername();
        \$password = \$token->getCredentials();

        if ('' === (string) \$password) {
            throw new BadCredentialsException('The presented password must not be empty.');
        }

        try {
            \$username = \$this->ldap->escape(\$username, '', LdapInterface::ESCAPE_DN);

            if (\$this->queryString) {
                \$query = str_replace('{username}', \$username, \$this->queryString);
                \$result = \$this->ldap->query(\$this->dnString, \$query)->execute();
                if (1 !== \$result->count()) {
                    throw new BadCredentialsException('The presented username is invalid.');
                }

                \$dn = \$result[0]->getDn();
            } else {
                \$dn = str_replace('{username}', \$username, \$this->dnString);
            }

            \$this->ldap->bind(\$dn, \$password);
        } catch (ConnectionException \$e) {
            throw new BadCredentialsException('The presented password is invalid.');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Provider/LdapBindAuthenticationProvider.php";
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

use Symfony\\Component\\Ldap\\Exception\\ConnectionException;
use Symfony\\Component\\Ldap\\LdapInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * LdapBindAuthenticationProvider authenticates a user against an LDAP server.
 *
 * The only way to check user credentials is to try to connect the user with its
 * credentials to the ldap.
 *
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class LdapBindAuthenticationProvider extends UserAuthenticationProvider
{
    private \$userProvider;
    private \$ldap;
    private \$dnString;
    private \$queryString;

    public function __construct(UserProviderInterface \$userProvider, UserCheckerInterface \$userChecker, string \$providerKey, LdapInterface \$ldap, string \$dnString = '{username}', bool \$hideUserNotFoundExceptions = true)
    {
        parent::__construct(\$userChecker, \$providerKey, \$hideUserNotFoundExceptions);

        \$this->userProvider = \$userProvider;
        \$this->ldap = \$ldap;
        \$this->dnString = \$dnString;
    }

    /**
     * Set a query string to use in order to find a DN for the username.
     *
     * @param string \$queryString
     */
    public function setQueryString(\$queryString)
    {
        \$this->queryString = \$queryString;
    }

    /**
     * {@inheritdoc}
     */
    protected function retrieveUser(\$username, UsernamePasswordToken \$token)
    {
        if (AuthenticationProviderInterface::USERNAME_NONE_PROVIDED === \$username) {
            throw new UsernameNotFoundException('Username can not be null');
        }

        return \$this->userProvider->loadUserByUsername(\$username);
    }

    /**
     * {@inheritdoc}
     */
    protected function checkAuthentication(UserInterface \$user, UsernamePasswordToken \$token)
    {
        \$username = \$token->getUsername();
        \$password = \$token->getCredentials();

        if ('' === (string) \$password) {
            throw new BadCredentialsException('The presented password must not be empty.');
        }

        try {
            \$username = \$this->ldap->escape(\$username, '', LdapInterface::ESCAPE_DN);

            if (\$this->queryString) {
                \$query = str_replace('{username}', \$username, \$this->queryString);
                \$result = \$this->ldap->query(\$this->dnString, \$query)->execute();
                if (1 !== \$result->count()) {
                    throw new BadCredentialsException('The presented username is invalid.');
                }

                \$dn = \$result[0]->getDn();
            } else {
                \$dn = str_replace('{username}', \$username, \$this->dnString);
            }

            \$this->ldap->bind(\$dn, \$password);
        } catch (ConnectionException \$e) {
            throw new BadCredentialsException('The presented password is invalid.');
        }
    }
}
", "vendor/symfony/security-core/Authentication/Provider/LdapBindAuthenticationProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Provider/LdapBindAuthenticationProvider.php");
    }
}
