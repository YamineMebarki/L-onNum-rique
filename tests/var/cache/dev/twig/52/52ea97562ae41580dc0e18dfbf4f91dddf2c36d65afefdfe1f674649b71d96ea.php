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

/* vendor/symfony/http-kernel/Tests/HttpCache/TestHttpKernel.php */
class __TwigTemplate_4515fefab275f4fbc1919b1b4669c7ba297586dcacf3d6d7d390f696cfda443f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/HttpCache/TestHttpKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/HttpCache/TestHttpKernel.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\HttpCache;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\HttpKernel;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class TestHttpKernel extends HttpKernel implements ControllerResolverInterface, ArgumentResolverInterface
{
    protected \$body;
    protected \$status;
    protected \$headers;
    protected \$called = false;
    protected \$customizer;
    protected \$catch = false;
    protected \$backendRequest;

    public function __construct(\$body, \$status, \$headers, \\Closure \$customizer = null)
    {
        \$this->body = \$body;
        \$this->status = \$status;
        \$this->headers = \$headers;
        \$this->customizer = \$customizer;

        parent::__construct(new EventDispatcher(), \$this, null, \$this);
    }

    public function assert(\\Closure \$callback)
    {
        \$trustedConfig = [Request::getTrustedProxies(), Request::getTrustedHeaderSet()];

        list(\$trustedProxies, \$trustedHeaderSet, \$backendRequest) = \$this->backendRequest;
        Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet);

        try {
            \$callback(\$backendRequest);
        } finally {
            list(\$trustedProxies, \$trustedHeaderSet) = \$trustedConfig;
            Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet);
        }
    }

    public function handle(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, \$catch = false)
    {
        \$this->catch = \$catch;
        \$this->backendRequest = [Request::getTrustedProxies(), Request::getTrustedHeaderSet(), \$request];

        return parent::handle(\$request, \$type, \$catch);
    }

    public function isCatchingExceptions()
    {
        return \$this->catch;
    }

    public function getController(Request \$request)
    {
        return [\$this, 'callController'];
    }

    public function getArguments(Request \$request, \$controller)
    {
        return [\$request];
    }

    public function callController(Request \$request)
    {
        \$this->called = true;

        \$response = new Response(\$this->body, \$this->status, \$this->headers);

        if (null !== \$customizer = \$this->customizer) {
            \$customizer(\$request, \$response);
        }

        return \$response;
    }

    public function hasBeenCalled()
    {
        return \$this->called;
    }

    public function reset()
    {
        \$this->called = false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/HttpCache/TestHttpKernel.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\HttpCache;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\HttpKernel;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class TestHttpKernel extends HttpKernel implements ControllerResolverInterface, ArgumentResolverInterface
{
    protected \$body;
    protected \$status;
    protected \$headers;
    protected \$called = false;
    protected \$customizer;
    protected \$catch = false;
    protected \$backendRequest;

    public function __construct(\$body, \$status, \$headers, \\Closure \$customizer = null)
    {
        \$this->body = \$body;
        \$this->status = \$status;
        \$this->headers = \$headers;
        \$this->customizer = \$customizer;

        parent::__construct(new EventDispatcher(), \$this, null, \$this);
    }

    public function assert(\\Closure \$callback)
    {
        \$trustedConfig = [Request::getTrustedProxies(), Request::getTrustedHeaderSet()];

        list(\$trustedProxies, \$trustedHeaderSet, \$backendRequest) = \$this->backendRequest;
        Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet);

        try {
            \$callback(\$backendRequest);
        } finally {
            list(\$trustedProxies, \$trustedHeaderSet) = \$trustedConfig;
            Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet);
        }
    }

    public function handle(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, \$catch = false)
    {
        \$this->catch = \$catch;
        \$this->backendRequest = [Request::getTrustedProxies(), Request::getTrustedHeaderSet(), \$request];

        return parent::handle(\$request, \$type, \$catch);
    }

    public function isCatchingExceptions()
    {
        return \$this->catch;
    }

    public function getController(Request \$request)
    {
        return [\$this, 'callController'];
    }

    public function getArguments(Request \$request, \$controller)
    {
        return [\$request];
    }

    public function callController(Request \$request)
    {
        \$this->called = true;

        \$response = new Response(\$this->body, \$this->status, \$this->headers);

        if (null !== \$customizer = \$this->customizer) {
            \$customizer(\$request, \$response);
        }

        return \$response;
    }

    public function hasBeenCalled()
    {
        return \$this->called;
    }

    public function reset()
    {
        \$this->called = false;
    }
}
", "vendor/symfony/http-kernel/Tests/HttpCache/TestHttpKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/HttpCache/TestHttpKernel.php");
    }
}
