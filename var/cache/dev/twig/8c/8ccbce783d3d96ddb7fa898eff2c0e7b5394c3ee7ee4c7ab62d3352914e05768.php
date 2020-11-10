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

/* vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php */
class __TwigTemplate_fe320c7ce42d9c8e6df18a3f787fd96a0f1afc42dddcc3c0660dc85104a38934 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php"));

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

namespace Symfony\\Component\\Security\\Http\\EntryPoint;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\HttpUtils;

/**
 * FormAuthenticationEntryPoint starts an authentication via a login form.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormAuthenticationEntryPoint implements AuthenticationEntryPointInterface
{
    private \$loginPath;
    private \$useForward;
    private \$httpKernel;
    private \$httpUtils;

    /**
     * @param HttpUtils \$httpUtils  An HttpUtils instance
     * @param string    \$loginPath  The path to the login form
     * @param bool      \$useForward Whether to forward or redirect to the login form
     */
    public function __construct(HttpKernelInterface \$kernel, HttpUtils \$httpUtils, string \$loginPath, bool \$useForward = false)
    {
        \$this->httpKernel = \$kernel;
        \$this->httpUtils = \$httpUtils;
        \$this->loginPath = \$loginPath;
        \$this->useForward = \$useForward;
    }

    /**
     * {@inheritdoc}
     */
    public function start(Request \$request, AuthenticationException \$authException = null)
    {
        if (\$this->useForward) {
            \$subRequest = \$this->httpUtils->createRequest(\$request, \$this->loginPath);

            \$response = \$this->httpKernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
            if (200 === \$response->getStatusCode()) {
                \$response->setStatusCode(401);
            }

            return \$response;
        }

        return \$this->httpUtils->createRedirectResponse(\$request, \$this->loginPath);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php";
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

namespace Symfony\\Component\\Security\\Http\\EntryPoint;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\HttpUtils;

/**
 * FormAuthenticationEntryPoint starts an authentication via a login form.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormAuthenticationEntryPoint implements AuthenticationEntryPointInterface
{
    private \$loginPath;
    private \$useForward;
    private \$httpKernel;
    private \$httpUtils;

    /**
     * @param HttpUtils \$httpUtils  An HttpUtils instance
     * @param string    \$loginPath  The path to the login form
     * @param bool      \$useForward Whether to forward or redirect to the login form
     */
    public function __construct(HttpKernelInterface \$kernel, HttpUtils \$httpUtils, string \$loginPath, bool \$useForward = false)
    {
        \$this->httpKernel = \$kernel;
        \$this->httpUtils = \$httpUtils;
        \$this->loginPath = \$loginPath;
        \$this->useForward = \$useForward;
    }

    /**
     * {@inheritdoc}
     */
    public function start(Request \$request, AuthenticationException \$authException = null)
    {
        if (\$this->useForward) {
            \$subRequest = \$this->httpUtils->createRequest(\$request, \$this->loginPath);

            \$response = \$this->httpKernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
            if (200 === \$response->getStatusCode()) {
                \$response->setStatusCode(401);
            }

            return \$response;
        }

        return \$this->httpUtils->createRedirectResponse(\$request, \$this->loginPath);
    }
}
", "vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php");
    }
}
