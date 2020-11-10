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

/* vendor/symfony/security-core/User/User.php */
class __TwigTemplate_51a6cf770477124c9804d60494f7e421fb9add6ae7c122bf87e7a990e4fe7409 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/User.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/User.php"));

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

/**
 * User is the user implementation used by the in-memory user provider.
 *
 * This should not be used for anything else.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class User implements UserInterface, EquatableInterface, AdvancedUserInterface
{
    private \$username;
    private \$password;
    private \$enabled;
    private \$accountNonExpired;
    private \$credentialsNonExpired;
    private \$accountNonLocked;
    private \$roles;

    public function __construct(?string \$username, ?string \$password, array \$roles = [], bool \$enabled = true, bool \$userNonExpired = true, bool \$credentialsNonExpired = true, bool \$userNonLocked = true)
    {
        if ('' === \$username || null === \$username) {
            throw new \\InvalidArgumentException('The username cannot be empty.');
        }

        \$this->username = \$username;
        \$this->password = \$password;
        \$this->enabled = \$enabled;
        \$this->accountNonExpired = \$userNonExpired;
        \$this->credentialsNonExpired = \$credentialsNonExpired;
        \$this->accountNonLocked = \$userNonLocked;
        \$this->roles = \$roles;
    }

    public function __toString()
    {
        return \$this->getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        return \$this->roles;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return \$this->password;
    }

    /**
     * {@inheritdoc}
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return \$this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccountNonExpired()
    {
        return \$this->accountNonExpired;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccountNonLocked()
    {
        return \$this->accountNonLocked;
    }

    /**
     * {@inheritdoc}
     */
    public function isCredentialsNonExpired()
    {
        return \$this->credentialsNonExpired;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return \$this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(UserInterface \$user)
    {
        if (!\$user instanceof self) {
            return false;
        }

        if (\$this->getPassword() !== \$user->getPassword()) {
            return false;
        }

        if (\$this->getSalt() !== \$user->getSalt()) {
            return false;
        }

        if (\$this->getUsername() !== \$user->getUsername()) {
            return false;
        }

        if (\$this->isAccountNonExpired() !== \$user->isAccountNonExpired()) {
            return false;
        }

        if (\$this->isAccountNonLocked() !== \$user->isAccountNonLocked()) {
            return false;
        }

        if (\$this->isCredentialsNonExpired() !== \$user->isCredentialsNonExpired()) {
            return false;
        }

        if (\$this->isEnabled() !== \$user->isEnabled()) {
            return false;
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/User/User.php";
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

/**
 * User is the user implementation used by the in-memory user provider.
 *
 * This should not be used for anything else.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class User implements UserInterface, EquatableInterface, AdvancedUserInterface
{
    private \$username;
    private \$password;
    private \$enabled;
    private \$accountNonExpired;
    private \$credentialsNonExpired;
    private \$accountNonLocked;
    private \$roles;

    public function __construct(?string \$username, ?string \$password, array \$roles = [], bool \$enabled = true, bool \$userNonExpired = true, bool \$credentialsNonExpired = true, bool \$userNonLocked = true)
    {
        if ('' === \$username || null === \$username) {
            throw new \\InvalidArgumentException('The username cannot be empty.');
        }

        \$this->username = \$username;
        \$this->password = \$password;
        \$this->enabled = \$enabled;
        \$this->accountNonExpired = \$userNonExpired;
        \$this->credentialsNonExpired = \$credentialsNonExpired;
        \$this->accountNonLocked = \$userNonLocked;
        \$this->roles = \$roles;
    }

    public function __toString()
    {
        return \$this->getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        return \$this->roles;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return \$this->password;
    }

    /**
     * {@inheritdoc}
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return \$this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccountNonExpired()
    {
        return \$this->accountNonExpired;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccountNonLocked()
    {
        return \$this->accountNonLocked;
    }

    /**
     * {@inheritdoc}
     */
    public function isCredentialsNonExpired()
    {
        return \$this->credentialsNonExpired;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return \$this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(UserInterface \$user)
    {
        if (!\$user instanceof self) {
            return false;
        }

        if (\$this->getPassword() !== \$user->getPassword()) {
            return false;
        }

        if (\$this->getSalt() !== \$user->getSalt()) {
            return false;
        }

        if (\$this->getUsername() !== \$user->getUsername()) {
            return false;
        }

        if (\$this->isAccountNonExpired() !== \$user->isAccountNonExpired()) {
            return false;
        }

        if (\$this->isAccountNonLocked() !== \$user->isAccountNonLocked()) {
            return false;
        }

        if (\$this->isCredentialsNonExpired() !== \$user->isCredentialsNonExpired()) {
            return false;
        }

        if (\$this->isEnabled() !== \$user->isEnabled()) {
            return false;
        }

        return true;
    }
}
", "vendor/symfony/security-core/User/User.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/User/User.php");
    }
}
