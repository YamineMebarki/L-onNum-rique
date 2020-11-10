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

/* vendor/symfony/security-guard/AbstractGuardAuthenticator.php */
class __TwigTemplate_2c383863f76fbae3c89917e0b7eb988a5c33b0980ab8bb20942a84e49ccd4bad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/AbstractGuardAuthenticator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/AbstractGuardAuthenticator.php"));

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

namespace Symfony\\Component\\Security\\Guard;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Guard\\Token\\PostAuthenticationGuardToken;

/**
 * An optional base class that creates a PostAuthenticationGuardToken for you.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
abstract class AbstractGuardAuthenticator implements AuthenticatorInterface
{
    /**
     * Shortcut to create a PostAuthenticationGuardToken for you, if you don't really
     * care about which authenticated token you're using.
     *
     * @param string \$providerKey
     *
     * @return PostAuthenticationGuardToken
     */
    public function createAuthenticatedToken(UserInterface \$user, \$providerKey)
    {
        return new PostAuthenticationGuardToken(
            \$user,
            \$providerKey,
            \$user->getRoles()
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-guard/AbstractGuardAuthenticator.php";
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

namespace Symfony\\Component\\Security\\Guard;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Guard\\Token\\PostAuthenticationGuardToken;

/**
 * An optional base class that creates a PostAuthenticationGuardToken for you.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
abstract class AbstractGuardAuthenticator implements AuthenticatorInterface
{
    /**
     * Shortcut to create a PostAuthenticationGuardToken for you, if you don't really
     * care about which authenticated token you're using.
     *
     * @param string \$providerKey
     *
     * @return PostAuthenticationGuardToken
     */
    public function createAuthenticatedToken(UserInterface \$user, \$providerKey)
    {
        return new PostAuthenticationGuardToken(
            \$user,
            \$providerKey,
            \$user->getRoles()
        );
    }
}
", "vendor/symfony/security-guard/AbstractGuardAuthenticator.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-guard/AbstractGuardAuthenticator.php");
    }
}
