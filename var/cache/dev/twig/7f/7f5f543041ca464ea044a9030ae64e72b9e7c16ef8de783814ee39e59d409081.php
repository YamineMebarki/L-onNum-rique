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

/* vendor/symfony/monolog-bridge/Handler/FirePHPHandler.php */
class __TwigTemplate_46bd307a69a4c7c20b3689d8a22723d935549767f6ea6956a2b950e105af082a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/FirePHPHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/FirePHPHandler.php"));

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

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Handler\\FirePHPHandler as BaseFirePHPHandler;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;

/**
 * FirePHPHandler.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @final since Symfony 4.3
 */
class FirePHPHandler extends BaseFirePHPHandler
{
    private \$headers = [];

    /**
     * @var Response
     */
    private \$response;

    /**
     * Adds the headers to the response once it's created.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        if (!preg_match('{\\bFirePHP/\\d+\\.\\d+\\b}', \$request->headers->get('User-Agent'))
            && !\$request->headers->has('X-FirePHP-Version')) {
            self::\$sendHeaders = false;
            \$this->headers = [];

            return;
        }

        \$this->response = \$event->getResponse();
        foreach (\$this->headers as \$header => \$content) {
            \$this->response->headers->set(\$header, \$content);
        }
        \$this->headers = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function sendHeader(\$header, \$content)
    {
        if (!self::\$sendHeaders) {
            return;
        }

        if (\$this->response) {
            \$this->response->headers->set(\$header, \$content);
        } else {
            \$this->headers[\$header] = \$content;
        }
    }

    /**
     * Override default behavior since we check the user agent in onKernelResponse.
     */
    protected function headersAccepted()
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Handler/FirePHPHandler.php";
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

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Handler\\FirePHPHandler as BaseFirePHPHandler;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;

/**
 * FirePHPHandler.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @final since Symfony 4.3
 */
class FirePHPHandler extends BaseFirePHPHandler
{
    private \$headers = [];

    /**
     * @var Response
     */
    private \$response;

    /**
     * Adds the headers to the response once it's created.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        if (!preg_match('{\\bFirePHP/\\d+\\.\\d+\\b}', \$request->headers->get('User-Agent'))
            && !\$request->headers->has('X-FirePHP-Version')) {
            self::\$sendHeaders = false;
            \$this->headers = [];

            return;
        }

        \$this->response = \$event->getResponse();
        foreach (\$this->headers as \$header => \$content) {
            \$this->response->headers->set(\$header, \$content);
        }
        \$this->headers = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function sendHeader(\$header, \$content)
    {
        if (!self::\$sendHeaders) {
            return;
        }

        if (\$this->response) {
            \$this->response->headers->set(\$header, \$content);
        } else {
            \$this->headers[\$header] = \$content;
        }
    }

    /**
     * Override default behavior since we check the user agent in onKernelResponse.
     */
    protected function headersAccepted()
    {
        return true;
    }
}
", "vendor/symfony/monolog-bridge/Handler/FirePHPHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Handler/FirePHPHandler.php");
    }
}
