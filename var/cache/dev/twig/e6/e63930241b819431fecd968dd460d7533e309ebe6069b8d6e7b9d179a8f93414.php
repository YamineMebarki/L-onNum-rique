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

/* vendor/symfony/security-core/User/InMemoryUserProvider.php */
class __TwigTemplate_5810de34aa61a0be0cdfbca3a482a8e3305aeec4acf48e02f2b85139e5d42de5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/InMemoryUserProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/InMemoryUserProvider.php"));

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

namespace Symfony\\Component\\Security\\Core\\User;

use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;

/**
 * InMemoryUserProvider is a simple non persistent user provider.
 *
 * Useful for testing, demonstration, prototyping, and for simple needs
 * (a backend with a unique admin for instance)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InMemoryUserProvider implements UserProviderInterface
{
    private \$users;

    /**
     * The user array is a hash where the keys are usernames and the values are
     * an array of attributes: 'password', 'enabled', and 'roles'.
     *
     * @param array \$users An array of users
     */
    public function __construct(array \$users = [])
    {
        foreach (\$users as \$username => \$attributes) {
            \$password = isset(\$attributes['password']) ? \$attributes['password'] : null;
            \$enabled = isset(\$attributes['enabled']) ? \$attributes['enabled'] : true;
            \$roles = isset(\$attributes['roles']) ? \$attributes['roles'] : [];
            \$user = new User(\$username, \$password, \$roles, \$enabled, true, true, true);

            \$this->createUser(\$user);
        }
    }

    /**
     * Adds a new User to the provider.
     *
     * @throws \\LogicException
     */
    public function createUser(UserInterface \$user)
    {
        if (isset(\$this->users[strtolower(\$user->getUsername())])) {
            throw new \\LogicException('Another user with the same username already exists.');
        }

        \$this->users[strtolower(\$user->getUsername())] = \$user;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername(\$username)
    {
        \$user = \$this->getUser(\$username);

        return new User(\$user->getUsername(), \$user->getPassword(), \$user->getRoles(), \$user->isEnabled(), \$user->isAccountNonExpired(), \$user->isCredentialsNonExpired(), \$user->isAccountNonLocked());
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface \$user)
    {
        if (!\$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of \"%s\" are not supported.', \\get_class(\$user)));
        }

        \$storedUser = \$this->getUser(\$user->getUsername());

        return new User(\$storedUser->getUsername(), \$storedUser->getPassword(), \$storedUser->getRoles(), \$storedUser->isEnabled(), \$storedUser->isAccountNonExpired(), \$storedUser->isCredentialsNonExpired() && \$storedUser->getPassword() === \$user->getPassword(), \$storedUser->isAccountNonLocked());
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass(\$class)
    {
        return 'Symfony\\Component\\Security\\Core\\User\\User' === \$class;
    }

    /**
     * Returns the user by given username.
     *
     * @param string \$username The username
     *
     * @return User
     *
     * @throws UsernameNotFoundException if user whose given username does not exist
     */
    private function getUser(\$username)
    {
        if (!isset(\$this->users[strtolower(\$username)])) {
            \$ex = new UsernameNotFoundException(sprintf('Username \"%s\" does not exist.', \$username));
            \$ex->setUsername(\$username);

            throw \$ex;
        }

        return \$this->users[strtolower(\$username)];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/User/InMemoryUserProvider.php";
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

namespace Symfony\\Component\\Security\\Core\\User;

use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;

/**
 * InMemoryUserProvider is a simple non persistent user provider.
 *
 * Useful for testing, demonstration, prototyping, and for simple needs
 * (a backend with a unique admin for instance)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InMemoryUserProvider implements UserProviderInterface
{
    private \$users;

    /**
     * The user array is a hash where the keys are usernames and the values are
     * an array of attributes: 'password', 'enabled', and 'roles'.
     *
     * @param array \$users An array of users
     */
    public function __construct(array \$users = [])
    {
        foreach (\$users as \$username => \$attributes) {
            \$password = isset(\$attributes['password']) ? \$attributes['password'] : null;
            \$enabled = isset(\$attributes['enabled']) ? \$attributes['enabled'] : true;
            \$roles = isset(\$attributes['roles']) ? \$attributes['roles'] : [];
            \$user = new User(\$username, \$password, \$roles, \$enabled, true, true, true);

            \$this->createUser(\$user);
        }
    }

    /**
     * Adds a new User to the provider.
     *
     * @throws \\LogicException
     */
    public function createUser(UserInterface \$user)
    {
        if (isset(\$this->users[strtolower(\$user->getUsername())])) {
            throw new \\LogicException('Another user with the same username already exists.');
        }

        \$this->users[strtolower(\$user->getUsername())] = \$user;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername(\$username)
    {
        \$user = \$this->getUser(\$username);

        return new User(\$user->getUsername(), \$user->getPassword(), \$user->getRoles(), \$user->isEnabled(), \$user->isAccountNonExpired(), \$user->isCredentialsNonExpired(), \$user->isAccountNonLocked());
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface \$user)
    {
        if (!\$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of \"%s\" are not supported.', \\get_class(\$user)));
        }

        \$storedUser = \$this->getUser(\$user->getUsername());

        return new User(\$storedUser->getUsername(), \$storedUser->getPassword(), \$storedUser->getRoles(), \$storedUser->isEnabled(), \$storedUser->isAccountNonExpired(), \$storedUser->isCredentialsNonExpired() && \$storedUser->getPassword() === \$user->getPassword(), \$storedUser->isAccountNonLocked());
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass(\$class)
    {
        return 'Symfony\\Component\\Security\\Core\\User\\User' === \$class;
    }

    /**
     * Returns the user by given username.
     *
     * @param string \$username The username
     *
     * @return User
     *
     * @throws UsernameNotFoundException if user whose given username does not exist
     */
    private function getUser(\$username)
    {
        if (!isset(\$this->users[strtolower(\$username)])) {
            \$ex = new UsernameNotFoundException(sprintf('Username \"%s\" does not exist.', \$username));
            \$ex->setUsername(\$username);

            throw \$ex;
        }

        return \$this->users[strtolower(\$username)];
    }
}
", "vendor/symfony/security-core/User/InMemoryUserProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/User/InMemoryUserProvider.php");
    }
}
