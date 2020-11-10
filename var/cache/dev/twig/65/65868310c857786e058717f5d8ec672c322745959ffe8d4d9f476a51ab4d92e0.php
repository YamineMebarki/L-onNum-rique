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

/* vendor/symfony/http-kernel/Event/GetResponseForExceptionEvent.php */
class __TwigTemplate_9b5fb2c56d02d66cc54bb991172f9be1d574d41281060b769a3d82340561ca31 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Event/GetResponseForExceptionEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Event/GetResponseForExceptionEvent.php"));

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
 * @deprecated since Symfony 4.3, use ExceptionEvent instead
 */
class GetResponseForExceptionEvent extends RequestEvent
{
    /**
     * The exception object.
     *
     * @var \\Exception
     */
    private \$exception;

    /**
     * @var bool
     */
    private \$allowCustomResponseCode = false;

    public function __construct(HttpKernelInterface \$kernel, Request \$request, int \$requestType, \\Exception \$e)
    {
        parent::__construct(\$kernel, \$request, \$requestType);

        \$this->setException(\$e);
    }

    /**
     * Returns the thrown exception.
     *
     * @return \\Exception The thrown exception
     */
    public function getException()
    {
        return \$this->exception;
    }

    /**
     * Replaces the thrown exception.
     *
     * This exception will be thrown if no response is set in the event.
     *
     * @param \\Exception \$exception The thrown exception
     */
    public function setException(\\Exception \$exception)
    {
        \$this->exception = \$exception;
    }

    /**
     * Mark the event as allowing a custom response code.
     */
    public function allowCustomResponseCode()
    {
        \$this->allowCustomResponseCode = true;
    }

    /**
     * Returns true if the event allows a custom response code.
     *
     * @return bool
     */
    public function isAllowingCustomResponseCode()
    {
        return \$this->allowCustomResponseCode;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Event/GetResponseForExceptionEvent.php";
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
 * @deprecated since Symfony 4.3, use ExceptionEvent instead
 */
class GetResponseForExceptionEvent extends RequestEvent
{
    /**
     * The exception object.
     *
     * @var \\Exception
     */
    private \$exception;

    /**
     * @var bool
     */
    private \$allowCustomResponseCode = false;

    public function __construct(HttpKernelInterface \$kernel, Request \$request, int \$requestType, \\Exception \$e)
    {
        parent::__construct(\$kernel, \$request, \$requestType);

        \$this->setException(\$e);
    }

    /**
     * Returns the thrown exception.
     *
     * @return \\Exception The thrown exception
     */
    public function getException()
    {
        return \$this->exception;
    }

    /**
     * Replaces the thrown exception.
     *
     * This exception will be thrown if no response is set in the event.
     *
     * @param \\Exception \$exception The thrown exception
     */
    public function setException(\\Exception \$exception)
    {
        \$this->exception = \$exception;
    }

    /**
     * Mark the event as allowing a custom response code.
     */
    public function allowCustomResponseCode()
    {
        \$this->allowCustomResponseCode = true;
    }

    /**
     * Returns true if the event allows a custom response code.
     *
     * @return bool
     */
    public function isAllowingCustomResponseCode()
    {
        return \$this->allowCustomResponseCode;
    }
}
", "vendor/symfony/http-kernel/Event/GetResponseForExceptionEvent.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Event/GetResponseForExceptionEvent.php");
    }
}
