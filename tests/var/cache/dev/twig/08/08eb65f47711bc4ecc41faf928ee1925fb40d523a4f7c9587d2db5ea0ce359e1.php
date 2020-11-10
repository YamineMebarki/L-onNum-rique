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

/* vendor/symfony/http-kernel/Tests/TestHttpKernel.php */
class __TwigTemplate_cb6268ded050961dac9124a6cdf5881b886a4c5ed5f273b671d2f86d40c1926b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/TestHttpKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/TestHttpKernel.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\HttpKernel;

class TestHttpKernel extends HttpKernel implements ControllerResolverInterface, ArgumentResolverInterface
{
    public function __construct()
    {
        parent::__construct(new EventDispatcher(), \$this, null, \$this);
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
        return new Response('Request: '.\$request->getRequestUri());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/TestHttpKernel.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\HttpKernel;

class TestHttpKernel extends HttpKernel implements ControllerResolverInterface, ArgumentResolverInterface
{
    public function __construct()
    {
        parent::__construct(new EventDispatcher(), \$this, null, \$this);
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
        return new Response('Request: '.\$request->getRequestUri());
    }
}
", "vendor/symfony/http-kernel/Tests/TestHttpKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/TestHttpKernel.php");
    }
}
