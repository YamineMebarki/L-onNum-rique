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

/* vendor/symfony/http-kernel/Event/GetResponseForControllerResultEvent.php */
class __TwigTemplate_6cc8a8d04f2a9313f17284d2acf8c59f2c04d860ab76222643ef001a624ae49a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Event/GetResponseForControllerResultEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Event/GetResponseForControllerResultEvent.php"));

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

namespace Symfony\\Component\\HttpKernel\\Event;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * @deprecated since Symfony 4.3, use ViewEvent instead
 */
class GetResponseForControllerResultEvent extends RequestEvent
{
    /**
     * The return value of the controller.
     *
     * @var mixed
     */
    private \$controllerResult;

    public function __construct(HttpKernelInterface \$kernel, Request \$request, int \$requestType, \$controllerResult)
    {
        parent::__construct(\$kernel, \$request, \$requestType);

        \$this->controllerResult = \$controllerResult;
    }

    /**
     * Returns the return value of the controller.
     *
     * @return mixed The controller return value
     */
    public function getControllerResult()
    {
        return \$this->controllerResult;
    }

    /**
     * Assigns the return value of the controller.
     *
     * @param mixed \$controllerResult The controller return value
     */
    public function setControllerResult(\$controllerResult)
    {
        \$this->controllerResult = \$controllerResult;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Event/GetResponseForControllerResultEvent.php";
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

namespace Symfony\\Component\\HttpKernel\\Event;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * @deprecated since Symfony 4.3, use ViewEvent instead
 */
class GetResponseForControllerResultEvent extends RequestEvent
{
    /**
     * The return value of the controller.
     *
     * @var mixed
     */
    private \$controllerResult;

    public function __construct(HttpKernelInterface \$kernel, Request \$request, int \$requestType, \$controllerResult)
    {
        parent::__construct(\$kernel, \$request, \$requestType);

        \$this->controllerResult = \$controllerResult;
    }

    /**
     * Returns the return value of the controller.
     *
     * @return mixed The controller return value
     */
    public function getControllerResult()
    {
        return \$this->controllerResult;
    }

    /**
     * Assigns the return value of the controller.
     *
     * @param mixed \$controllerResult The controller return value
     */
    public function setControllerResult(\$controllerResult)
    {
        \$this->controllerResult = \$controllerResult;
    }
}
", "vendor/symfony/http-kernel/Event/GetResponseForControllerResultEvent.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Event/GetResponseForControllerResultEvent.php");
    }
}
