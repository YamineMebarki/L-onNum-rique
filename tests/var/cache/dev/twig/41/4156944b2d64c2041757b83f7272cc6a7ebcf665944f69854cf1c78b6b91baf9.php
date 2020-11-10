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

/* vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php */
class __TwigTemplate_c378b605269631085a708b2fdd8b8d4444cf326dc6625559e4b47680eb1c827e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterDataCollector extends DataCollector
{
    /**
     * @var \\SplObjectStorage
     */
    protected \$controllers;

    public function __construct()
    {
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (\$response instanceof RedirectResponse) {
            \$this->data['redirect'] = true;
            \$this->data['url'] = \$response->getTargetUrl();

            if (\$this->controllers->contains(\$request)) {
                \$this->data['route'] = \$this->guessRoute(\$request, \$this->controllers[\$request]);
            }
        }

        unset(\$this->controllers[\$request]);
    }

    public function reset()
    {
        \$this->controllers = new \\SplObjectStorage();

        \$this->data = [
            'redirect' => false,
            'url' => null,
            'route' => null,
        ];
    }

    protected function guessRoute(Request \$request, \$controller)
    {
        return 'n/a';
    }

    /**
     * Remembers the controller associated to each request.
     *
     * @final since Symfony 4.3
     */
    public function onKernelController(FilterControllerEvent \$event)
    {
        \$this->controllers[\$event->getRequest()] = \$event->getController();
    }

    /**
     * @return bool Whether this request will result in a redirect
     */
    public function getRedirect()
    {
        return \$this->data['redirect'];
    }

    /**
     * @return string|null The target URL
     */
    public function getTargetUrl()
    {
        return \$this->data['url'];
    }

    /**
     * @return string|null The target route
     */
    public function getTargetRoute()
    {
        return \$this->data['route'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'router';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterDataCollector extends DataCollector
{
    /**
     * @var \\SplObjectStorage
     */
    protected \$controllers;

    public function __construct()
    {
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (\$response instanceof RedirectResponse) {
            \$this->data['redirect'] = true;
            \$this->data['url'] = \$response->getTargetUrl();

            if (\$this->controllers->contains(\$request)) {
                \$this->data['route'] = \$this->guessRoute(\$request, \$this->controllers[\$request]);
            }
        }

        unset(\$this->controllers[\$request]);
    }

    public function reset()
    {
        \$this->controllers = new \\SplObjectStorage();

        \$this->data = [
            'redirect' => false,
            'url' => null,
            'route' => null,
        ];
    }

    protected function guessRoute(Request \$request, \$controller)
    {
        return 'n/a';
    }

    /**
     * Remembers the controller associated to each request.
     *
     * @final since Symfony 4.3
     */
    public function onKernelController(FilterControllerEvent \$event)
    {
        \$this->controllers[\$event->getRequest()] = \$event->getController();
    }

    /**
     * @return bool Whether this request will result in a redirect
     */
    public function getRedirect()
    {
        return \$this->data['redirect'];
    }

    /**
     * @return string|null The target URL
     */
    public function getTargetUrl()
    {
        return \$this->data['url'];
    }

    /**
     * @return string|null The target route
     */
    public function getTargetRoute()
    {
        return \$this->data['route'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'router';
    }
}
", "vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php");
    }
}
