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

/* vendor/symfony/security-core/Authentication/Token/TokenInterface.php */
class __TwigTemplate_2c9cf9d246a990b3a35bd781cd112e6b88f4c07ad712360985ed82f2a6d7cc37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/TokenInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/TokenInterface.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Token;

use Symfony\\Component\\Security\\Core\\Role\\Role;

/**
 * TokenInterface is the interface for the user authentication information.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @method array    __serialize()                                                                             Returns all the necessary state of the object for serialization purposes - not implementing it is deprecated since Symfony 4.3
 * @method void     __unserialize(array \$data) Restores the object state from an array given by __serialize() - not implementing it is deprecated since Symfony 4.3
 * @method string[] getRoleNames()                                                                            The associated roles - not implementing it is deprecated since Symfony 4.3
 */
interface TokenInterface extends \\Serializable
{
    /**
     * Returns a string representation of the Token.
     *
     * This is only to be used for debugging purposes.
     *
     * @return string
     */
    public function __toString();

    /**
     * Returns the user roles.
     *
     * @return Role[] An array of Role instances
     *
     * @deprecated since Symfony 4.3, use the getRoleNames() method instead
     */
    public function getRoles();

    /**
     * Returns the user credentials.
     *
     * @return mixed The user credentials
     */
    public function getCredentials();

    /**
     * Returns a user representation.
     *
     * @return string|object Can be a UserInterface instance, an object implementing a __toString method,
     *                       or the username as a regular string
     *
     * @see AbstractToken::setUser()
     */
    public function getUser();

    /**
     * Sets the user in the token.
     *
     * The user can be a UserInterface instance, or an object implementing
     * a __toString method or the username as a regular string.
     *
     * @param string|object \$user The user
     *
     * @throws \\InvalidArgumentException
     */
    public function setUser(\$user);

    /**
     * Returns the username.
     *
     * @return string
     */
    public function getUsername();

    /**
     * Returns whether the user is authenticated or not.
     *
     * @return bool true if the token has been authenticated, false otherwise
     */
    public function isAuthenticated();

    /**
     * Sets the authenticated flag.
     *
     * @param bool \$isAuthenticated The authenticated flag
     */
    public function setAuthenticated(\$isAuthenticated);

    /**
     * Removes sensitive information from the token.
     */
    public function eraseCredentials();

    /**
     * Returns the token attributes.
     *
     * @return array The token attributes
     */
    public function getAttributes();

    /**
     * Sets the token attributes.
     *
     * @param array \$attributes The token attributes
     */
    public function setAttributes(array \$attributes);

    /**
     * Returns true if the attribute exists.
     *
     * @param string \$name The attribute name
     *
     * @return bool true if the attribute exists, false otherwise
     */
    public function hasAttribute(\$name);

    /**
     * Returns an attribute value.
     *
     * @param string \$name The attribute name
     *
     * @return mixed The attribute value
     *
     * @throws \\InvalidArgumentException When attribute doesn't exist for this token
     */
    public function getAttribute(\$name);

    /**
     * Sets an attribute.
     *
     * @param string \$name  The attribute name
     * @param mixed  \$value The attribute value
     */
    public function setAttribute(\$name, \$value);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Token/TokenInterface.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Token;

use Symfony\\Component\\Security\\Core\\Role\\Role;

/**
 * TokenInterface is the interface for the user authentication information.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @method array    __serialize()                                                                             Returns all the necessary state of the object for serialization purposes - not implementing it is deprecated since Symfony 4.3
 * @method void     __unserialize(array \$data) Restores the object state from an array given by __serialize() - not implementing it is deprecated since Symfony 4.3
 * @method string[] getRoleNames()                                                                            The associated roles - not implementing it is deprecated since Symfony 4.3
 */
interface TokenInterface extends \\Serializable
{
    /**
     * Returns a string representation of the Token.
     *
     * This is only to be used for debugging purposes.
     *
     * @return string
     */
    public function __toString();

    /**
     * Returns the user roles.
     *
     * @return Role[] An array of Role instances
     *
     * @deprecated since Symfony 4.3, use the getRoleNames() method instead
     */
    public function getRoles();

    /**
     * Returns the user credentials.
     *
     * @return mixed The user credentials
     */
    public function getCredentials();

    /**
     * Returns a user representation.
     *
     * @return string|object Can be a UserInterface instance, an object implementing a __toString method,
     *                       or the username as a regular string
     *
     * @see AbstractToken::setUser()
     */
    public function getUser();

    /**
     * Sets the user in the token.
     *
     * The user can be a UserInterface instance, or an object implementing
     * a __toString method or the username as a regular string.
     *
     * @param string|object \$user The user
     *
     * @throws \\InvalidArgumentException
     */
    public function setUser(\$user);

    /**
     * Returns the username.
     *
     * @return string
     */
    public function getUsername();

    /**
     * Returns whether the user is authenticated or not.
     *
     * @return bool true if the token has been authenticated, false otherwise
     */
    public function isAuthenticated();

    /**
     * Sets the authenticated flag.
     *
     * @param bool \$isAuthenticated The authenticated flag
     */
    public function setAuthenticated(\$isAuthenticated);

    /**
     * Removes sensitive information from the token.
     */
    public function eraseCredentials();

    /**
     * Returns the token attributes.
     *
     * @return array The token attributes
     */
    public function getAttributes();

    /**
     * Sets the token attributes.
     *
     * @param array \$attributes The token attributes
     */
    public function setAttributes(array \$attributes);

    /**
     * Returns true if the attribute exists.
     *
     * @param string \$name The attribute name
     *
     * @return bool true if the attribute exists, false otherwise
     */
    public function hasAttribute(\$name);

    /**
     * Returns an attribute value.
     *
     * @param string \$name The attribute name
     *
     * @return mixed The attribute value
     *
     * @throws \\InvalidArgumentException When attribute doesn't exist for this token
     */
    public function getAttribute(\$name);

    /**
     * Sets an attribute.
     *
     * @param string \$name  The attribute name
     * @param mixed  \$value The attribute value
     */
    public function setAttribute(\$name, \$value);
}
", "vendor/symfony/security-core/Authentication/Token/TokenInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Token/TokenInterface.php");
    }
}
