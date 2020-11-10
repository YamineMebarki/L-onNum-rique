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

/* vendor/symfony/security-http/Authentication/AuthenticationUtils.php */
class __TwigTemplate_748d740ce63e2698bd39fea97ed849acf3896acd4b0ad2a3126589bfe22e489b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/AuthenticationUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/AuthenticationUtils.php"));

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

namespace Symfony\\Component\\Security\\Http\\Authentication;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Security;

/**
 * Extracts Security Errors from Request.
 *
 * @author Boris Vujicic <boris.vujicic@gmail.com>
 */
class AuthenticationUtils
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * @param bool \$clearSession
     *
     * @return AuthenticationException|null
     */
    public function getLastAuthenticationError(\$clearSession = true)
    {
        \$request = \$this->getRequest();
        \$session = \$request->getSession();
        \$authenticationException = null;

        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$authenticationException = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } elseif (null !== \$session && \$session->has(Security::AUTHENTICATION_ERROR)) {
            \$authenticationException = \$session->get(Security::AUTHENTICATION_ERROR);

            if (\$clearSession) {
                \$session->remove(Security::AUTHENTICATION_ERROR);
            }
        }

        return \$authenticationException;
    }

    /**
     * @return string
     */
    public function getLastUsername()
    {
        \$request = \$this->getRequest();

        if (\$request->attributes->has(Security::LAST_USERNAME)) {
            return \$request->attributes->get(Security::LAST_USERNAME, '');
        }

        \$session = \$request->getSession();

        return null === \$session ? '' : \$session->get(Security::LAST_USERNAME, '');
    }

    /**
     * @throws \\LogicException
     */
    private function getRequest(): Request
    {
        \$request = \$this->requestStack->getCurrentRequest();

        if (null === \$request) {
            throw new \\LogicException('Request should exist so it can be processed for error.');
        }

        return \$request;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Authentication/AuthenticationUtils.php";
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

namespace Symfony\\Component\\Security\\Http\\Authentication;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Security;

/**
 * Extracts Security Errors from Request.
 *
 * @author Boris Vujicic <boris.vujicic@gmail.com>
 */
class AuthenticationUtils
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * @param bool \$clearSession
     *
     * @return AuthenticationException|null
     */
    public function getLastAuthenticationError(\$clearSession = true)
    {
        \$request = \$this->getRequest();
        \$session = \$request->getSession();
        \$authenticationException = null;

        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$authenticationException = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } elseif (null !== \$session && \$session->has(Security::AUTHENTICATION_ERROR)) {
            \$authenticationException = \$session->get(Security::AUTHENTICATION_ERROR);

            if (\$clearSession) {
                \$session->remove(Security::AUTHENTICATION_ERROR);
            }
        }

        return \$authenticationException;
    }

    /**
     * @return string
     */
    public function getLastUsername()
    {
        \$request = \$this->getRequest();

        if (\$request->attributes->has(Security::LAST_USERNAME)) {
            return \$request->attributes->get(Security::LAST_USERNAME, '');
        }

        \$session = \$request->getSession();

        return null === \$session ? '' : \$session->get(Security::LAST_USERNAME, '');
    }

    /**
     * @throws \\LogicException
     */
    private function getRequest(): Request
    {
        \$request = \$this->requestStack->getCurrentRequest();

        if (null === \$request) {
            throw new \\LogicException('Request should exist so it can be processed for error.');
        }

        return \$request;
    }
}
", "vendor/symfony/security-http/Authentication/AuthenticationUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Authentication/AuthenticationUtils.php");
    }
}
