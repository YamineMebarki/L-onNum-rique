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

/* vendor/symfony/security-core/User/UserChecker.php */
class __TwigTemplate_096a85e0022f3569ab28182a06e5cbc520256db60246ca1b5a87ce931b45d7a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/UserChecker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/User/UserChecker.php"));

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

use Symfony\\Component\\Security\\Core\\Exception\\AccountExpiredException;
use Symfony\\Component\\Security\\Core\\Exception\\CredentialsExpiredException;
use Symfony\\Component\\Security\\Core\\Exception\\DisabledException;
use Symfony\\Component\\Security\\Core\\Exception\\LockedException;

/**
 * UserChecker checks the user account flags.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UserChecker implements UserCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function checkPreAuth(UserInterface \$user)
    {
        if (!\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            return;
        }

        if (\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            @trigger_error(sprintf('Calling \"%s()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.', __METHOD__), E_USER_DEPRECATED);
        }

        if (!\$user->isAccountNonLocked()) {
            \$ex = new LockedException('User account is locked.');
            \$ex->setUser(\$user);
            throw \$ex;
        }

        if (!\$user->isEnabled()) {
            \$ex = new DisabledException('User account is disabled.');
            \$ex->setUser(\$user);
            throw \$ex;
        }

        if (!\$user->isAccountNonExpired()) {
            \$ex = new AccountExpiredException('User account has expired.');
            \$ex->setUser(\$user);
            throw \$ex;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkPostAuth(UserInterface \$user)
    {
        if (!\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            return;
        }

        if (\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            @trigger_error(sprintf('Calling \"%s()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.', __METHOD__), E_USER_DEPRECATED);
        }

        if (!\$user->isCredentialsNonExpired()) {
            \$ex = new CredentialsExpiredException('User credentials have expired.');
            \$ex->setUser(\$user);
            throw \$ex;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/User/UserChecker.php";
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

use Symfony\\Component\\Security\\Core\\Exception\\AccountExpiredException;
use Symfony\\Component\\Security\\Core\\Exception\\CredentialsExpiredException;
use Symfony\\Component\\Security\\Core\\Exception\\DisabledException;
use Symfony\\Component\\Security\\Core\\Exception\\LockedException;

/**
 * UserChecker checks the user account flags.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UserChecker implements UserCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function checkPreAuth(UserInterface \$user)
    {
        if (!\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            return;
        }

        if (\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            @trigger_error(sprintf('Calling \"%s()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.', __METHOD__), E_USER_DEPRECATED);
        }

        if (!\$user->isAccountNonLocked()) {
            \$ex = new LockedException('User account is locked.');
            \$ex->setUser(\$user);
            throw \$ex;
        }

        if (!\$user->isEnabled()) {
            \$ex = new DisabledException('User account is disabled.');
            \$ex->setUser(\$user);
            throw \$ex;
        }

        if (!\$user->isAccountNonExpired()) {
            \$ex = new AccountExpiredException('User account has expired.');
            \$ex->setUser(\$user);
            throw \$ex;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkPostAuth(UserInterface \$user)
    {
        if (!\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            return;
        }

        if (\$user instanceof AdvancedUserInterface && !\$user instanceof User) {
            @trigger_error(sprintf('Calling \"%s()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.', __METHOD__), E_USER_DEPRECATED);
        }

        if (!\$user->isCredentialsNonExpired()) {
            \$ex = new CredentialsExpiredException('User credentials have expired.');
            \$ex->setUser(\$user);
            throw \$ex;
        }
    }
}
", "vendor/symfony/security-core/User/UserChecker.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/User/UserChecker.php");
    }
}
