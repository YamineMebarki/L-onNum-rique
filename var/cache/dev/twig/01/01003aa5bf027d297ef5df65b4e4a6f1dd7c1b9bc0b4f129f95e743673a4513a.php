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

/* vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php */
class __TwigTemplate_775f570a6c0accf2fb5e9cb46a46c4b8db448789998b5908b27330dc1a0d0c70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php"));

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

namespace Symfony\\Component\\Security\\Http\\RememberMe;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * Interface that needs to be implemented by classes which provide remember-me
 * capabilities.
 *
 * We provide two implementations out-of-the-box:
 * - TokenBasedRememberMeServices (does not require a TokenProvider)
 * - PersistentTokenBasedRememberMeServices (requires a TokenProvider)
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface RememberMeServicesInterface
{
    /**
     * This attribute name can be used by the implementation if it needs to set
     * a cookie on the Request when there is no actual Response, yet.
     */
    const COOKIE_ATTR_NAME = '_security_remember_me_cookie';

    /**
     * This method will be called whenever the TokenStorage does not contain
     * a TokenInterface object and the framework wishes to provide an implementation
     * with an opportunity to authenticate the request using remember-me capabilities.
     *
     * No attempt whatsoever is made to determine whether the browser has requested
     * remember-me services or presented a valid cookie. Any and all such determinations
     * are left to the implementation of this method.
     *
     * If a browser has presented an unauthorised cookie for whatever reason,
     * make sure to throw an AuthenticationException as this will consequentially
     * result in a call to loginFail() and therefore an invalidation of the cookie.
     *
     * @return TokenInterface|null
     */
    public function autoLogin(Request \$request);

    /**
     * Called whenever an interactive authentication attempt was made, but the
     * credentials supplied by the user were missing or otherwise invalid.
     *
     * This method needs to take care of invalidating the cookie.
     */
    public function loginFail(Request \$request, \\Exception \$exception = null);

    /**
     * Called whenever an interactive authentication attempt is successful
     * (e.g. a form login).
     *
     * An implementation may always set a remember-me cookie in the Response,
     * although this is not recommended.
     *
     * Instead, implementations should typically look for a request parameter
     * (such as a HTTP POST parameter) that indicates the browser has explicitly
     * requested for the authentication to be remembered.
     */
    public function loginSuccess(Request \$request, Response \$response, TokenInterface \$token);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php";
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

namespace Symfony\\Component\\Security\\Http\\RememberMe;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * Interface that needs to be implemented by classes which provide remember-me
 * capabilities.
 *
 * We provide two implementations out-of-the-box:
 * - TokenBasedRememberMeServices (does not require a TokenProvider)
 * - PersistentTokenBasedRememberMeServices (requires a TokenProvider)
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface RememberMeServicesInterface
{
    /**
     * This attribute name can be used by the implementation if it needs to set
     * a cookie on the Request when there is no actual Response, yet.
     */
    const COOKIE_ATTR_NAME = '_security_remember_me_cookie';

    /**
     * This method will be called whenever the TokenStorage does not contain
     * a TokenInterface object and the framework wishes to provide an implementation
     * with an opportunity to authenticate the request using remember-me capabilities.
     *
     * No attempt whatsoever is made to determine whether the browser has requested
     * remember-me services or presented a valid cookie. Any and all such determinations
     * are left to the implementation of this method.
     *
     * If a browser has presented an unauthorised cookie for whatever reason,
     * make sure to throw an AuthenticationException as this will consequentially
     * result in a call to loginFail() and therefore an invalidation of the cookie.
     *
     * @return TokenInterface|null
     */
    public function autoLogin(Request \$request);

    /**
     * Called whenever an interactive authentication attempt was made, but the
     * credentials supplied by the user were missing or otherwise invalid.
     *
     * This method needs to take care of invalidating the cookie.
     */
    public function loginFail(Request \$request, \\Exception \$exception = null);

    /**
     * Called whenever an interactive authentication attempt is successful
     * (e.g. a form login).
     *
     * An implementation may always set a remember-me cookie in the Response,
     * although this is not recommended.
     *
     * Instead, implementations should typically look for a request parameter
     * (such as a HTTP POST parameter) that indicates the browser has explicitly
     * requested for the authentication to be remembered.
     */
    public function loginSuccess(Request \$request, Response \$response, TokenInterface \$token);
}
", "vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/RememberMe/RememberMeServicesInterface.php");
    }
}
