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

/* vendor/symfony/security-core/User/UserProviderInterface.php */
class __TwigTemplate_ba90660b95c001c16c2a3ac92ccff0fad71ddfe13ec46c6c7da0f285d4314ea2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/UserProviderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/UserProviderInterface.php"));

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
 * Represents a class that loads UserInterface objects from some source for the authentication system.
 *
 * In a typical authentication configuration, a username (i.e. some unique
 * user identifier) credential enters the system (via form login, or any
 * method). The user provider that is configured with that authentication
 * method is asked to load the UserInterface object for the given username
 * (via loadUserByUsername) so that the rest of the process can continue.
 *
 * Internally, a user provider can load users from any source (databases,
 * configuration, web service). This is totally independent of how the authentication
 * information is submitted or what the UserInterface object looks like.
 *
 * @see UserInterface
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface UserProviderInterface
{
    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string \$username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername(\$username);

    /**
     * Refreshes the user.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException  if the user is not supported
     * @throws UsernameNotFoundException if the user is not found
     */
    public function refreshUser(UserInterface \$user);

    /**
     * Whether this provider supports the given user class.
     *
     * @param string \$class
     *
     * @return bool
     */
    public function supportsClass(\$class);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/User/UserProviderInterface.php";
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
 * Represents a class that loads UserInterface objects from some source for the authentication system.
 *
 * In a typical authentication configuration, a username (i.e. some unique
 * user identifier) credential enters the system (via form login, or any
 * method). The user provider that is configured with that authentication
 * method is asked to load the UserInterface object for the given username
 * (via loadUserByUsername) so that the rest of the process can continue.
 *
 * Internally, a user provider can load users from any source (databases,
 * configuration, web service). This is totally independent of how the authentication
 * information is submitted or what the UserInterface object looks like.
 *
 * @see UserInterface
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface UserProviderInterface
{
    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string \$username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername(\$username);

    /**
     * Refreshes the user.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException  if the user is not supported
     * @throws UsernameNotFoundException if the user is not found
     */
    public function refreshUser(UserInterface \$user);

    /**
     * Whether this provider supports the given user class.
     *
     * @param string \$class
     *
     * @return bool
     */
    public function supportsClass(\$class);
}
", "vendor/symfony/security-core/User/UserProviderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/User/UserProviderInterface.php");
    }
}
