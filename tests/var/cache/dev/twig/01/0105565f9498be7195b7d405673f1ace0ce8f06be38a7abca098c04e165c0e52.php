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

/* vendor/symfony/security-http/Logout/CookieClearingLogoutHandler.php */
class __TwigTemplate_08c2fa86c1105d4d34e6371858456e29434ec0bd0abaa29d4ea0f2679a9267a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Logout/CookieClearingLogoutHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Logout/CookieClearingLogoutHandler.php"));

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

namespace Symfony\\Component\\Security\\Http\\Logout;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * This handler clears the passed cookies when a user log out.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CookieClearingLogoutHandler implements LogoutHandlerInterface
{
    private \$cookies;

    /**
     * @param array \$cookies An array of cookie names to unset
     */
    public function __construct(array \$cookies)
    {
        \$this->cookies = \$cookies;
    }

    /**
     * Implementation for the LogoutHandlerInterface. Deletes all requested cookies.
     */
    public function logout(Request \$request, Response \$response, TokenInterface \$token)
    {
        foreach (\$this->cookies as \$cookieName => \$cookieData) {
            \$response->headers->clearCookie(\$cookieName, \$cookieData['path'], \$cookieData['domain']);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Logout/CookieClearingLogoutHandler.php";
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

namespace Symfony\\Component\\Security\\Http\\Logout;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * This handler clears the passed cookies when a user log out.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CookieClearingLogoutHandler implements LogoutHandlerInterface
{
    private \$cookies;

    /**
     * @param array \$cookies An array of cookie names to unset
     */
    public function __construct(array \$cookies)
    {
        \$this->cookies = \$cookies;
    }

    /**
     * Implementation for the LogoutHandlerInterface. Deletes all requested cookies.
     */
    public function logout(Request \$request, Response \$response, TokenInterface \$token)
    {
        foreach (\$this->cookies as \$cookieName => \$cookieData) {
            \$response->headers->clearCookie(\$cookieName, \$cookieData['path'], \$cookieData['domain']);
        }
    }
}
", "vendor/symfony/security-http/Logout/CookieClearingLogoutHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Logout/CookieClearingLogoutHandler.php");
    }
}
