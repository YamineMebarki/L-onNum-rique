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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/security/UserProvider.tpl.php */
class __TwigTemplate_9538890d923dd97c84814ab28348e39aca5846090af59beb6e3c5e51f115273c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/security/UserProvider.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/security/UserProvider.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
<?= (\$password_upgrader = interface_exists('Symfony\\Component\\Security\\Core\\User\\PasswordUpgraderInterface')) ? \"use Symfony\\Component\\Security\\Core\\User\\PasswordUpgraderInterface;\\n\" : '' ?>
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

class <?= \$class_name ?> implements UserProviderInterface<?= \$password_upgrader ? \", PasswordUpgraderInterface\\n\" : \"\\n\" ?>
{
    /**
     * Symfony calls this method if you use features like switch_user
     * or remember_me.
     *
     * If you're not using these features, you do not need to implement
     * this method.
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername(\$username)
    {
        // Load a User object from your data source or throw UsernameNotFoundException.
        // The \$username argument may not actually be a username:
        // it is whatever value is being returned by the getUsername()
        // method in your User class.
        throw new \\Exception('Todo: fill in loadUserByUsername() inside '.__FILE__);
    }

    /**
     * Refreshes the user after being reloaded from the session.
     *
     * When a user is logged in, at the beginning of each request, the
     * User object is loaded from the session and then this method is
     * called. Your job is to make sure the user's data is still fresh by,
     * for example, re-querying for fresh User data.
     *
     * If your firewall is \"stateless: true\" (for a pure API), this
     * method is not called.
     *
     * @return UserInterface
     */
    public function refreshUser(UserInterface \$user)
    {
        if (!\$user instanceof <?= \$user_short_name ?>) {
            throw new UnsupportedUserException(sprintf('Invalid user class \"%s\".', get_class(\$user)));
        }

        // Return a User object after making sure its data is \"fresh\".
        // Or throw a UsernameNotFoundException if the user no longer exists.
        throw new \\Exception('Todo: fill in refreshUser() inside '.__FILE__);
    }

    /**
     * Tells Symfony to use this provider for this User class.
     */
    public function supportsClass(\$class)
    {
        return <?= \$user_short_name ?>::class === \$class;
    }
<?php if (\$password_upgrader): ?>

    /**
     * Upgrades the encoded password of a user, typically for using a better hash algorithm.
     */
    public function upgradePassword(UserInterface \$user, string \$newEncodedPassword): void
    {
        // Todo: when encoded passwords are in use, this method should:
        // 1. persist the new password in the user storage
        // 2. update the \$user object with \$user->setPassword(\$newEncodedPassword);
    }
<?php endif ?>
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/security/UserProvider.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
<?= (\$password_upgrader = interface_exists('Symfony\\Component\\Security\\Core\\User\\PasswordUpgraderInterface')) ? \"use Symfony\\Component\\Security\\Core\\User\\PasswordUpgraderInterface;\\n\" : '' ?>
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

class <?= \$class_name ?> implements UserProviderInterface<?= \$password_upgrader ? \", PasswordUpgraderInterface\\n\" : \"\\n\" ?>
{
    /**
     * Symfony calls this method if you use features like switch_user
     * or remember_me.
     *
     * If you're not using these features, you do not need to implement
     * this method.
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername(\$username)
    {
        // Load a User object from your data source or throw UsernameNotFoundException.
        // The \$username argument may not actually be a username:
        // it is whatever value is being returned by the getUsername()
        // method in your User class.
        throw new \\Exception('Todo: fill in loadUserByUsername() inside '.__FILE__);
    }

    /**
     * Refreshes the user after being reloaded from the session.
     *
     * When a user is logged in, at the beginning of each request, the
     * User object is loaded from the session and then this method is
     * called. Your job is to make sure the user's data is still fresh by,
     * for example, re-querying for fresh User data.
     *
     * If your firewall is \"stateless: true\" (for a pure API), this
     * method is not called.
     *
     * @return UserInterface
     */
    public function refreshUser(UserInterface \$user)
    {
        if (!\$user instanceof <?= \$user_short_name ?>) {
            throw new UnsupportedUserException(sprintf('Invalid user class \"%s\".', get_class(\$user)));
        }

        // Return a User object after making sure its data is \"fresh\".
        // Or throw a UsernameNotFoundException if the user no longer exists.
        throw new \\Exception('Todo: fill in refreshUser() inside '.__FILE__);
    }

    /**
     * Tells Symfony to use this provider for this User class.
     */
    public function supportsClass(\$class)
    {
        return <?= \$user_short_name ?>::class === \$class;
    }
<?php if (\$password_upgrader): ?>

    /**
     * Upgrades the encoded password of a user, typically for using a better hash algorithm.
     */
    public function upgradePassword(UserInterface \$user, string \$newEncodedPassword): void
    {
        // Todo: when encoded passwords are in use, this method should:
        // 1. persist the new password in the user storage
        // 2. update the \$user object with \$user->setPassword(\$newEncodedPassword);
    }
<?php endif ?>
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/security/UserProvider.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/security/UserProvider.tpl.php");
    }
}
