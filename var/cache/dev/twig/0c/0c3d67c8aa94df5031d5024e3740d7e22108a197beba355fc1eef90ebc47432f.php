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

/* vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php */
class __TwigTemplate_1357b60df6eab3dc5f07ba9e86295e2b0a12737795d85585aa97217e9fbba418 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php"));

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

namespace Symfony\\Component\\HttpKernel\\Debug;

use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher as BaseTraceableEventDispatcher;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Collects some data about event listeners.
 *
 * This event dispatcher delegates the dispatching to another one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableEventDispatcher extends BaseTraceableEventDispatcher
{
    /**
     * {@inheritdoc}
     */
    protected function beforeDispatch(string \$eventName, \$event)
    {
        switch (\$eventName) {
            case KernelEvents::REQUEST:
                \$this->stopwatch->openSection();
                break;
            case KernelEvents::VIEW:
            case KernelEvents::RESPONSE:
                // stop only if a controller has been executed
                if (\$this->stopwatch->isStarted('controller')) {
                    \$this->stopwatch->stop('controller');
                }
                break;
            case KernelEvents::TERMINATE:
                \$token = \$event->getResponse()->headers->get('X-Debug-Token');
                if (null === \$token) {
                    break;
                }
                // There is a very special case when using built-in AppCache class as kernel wrapper, in the case
                // of an ESI request leading to a `stale` response [B]  inside a `fresh` cached response [A].
                // In this case, `\$token` contains the [B] debug token, but the  open `stopwatch` section ID
                // is equal to the [A] debug token. Trying to reopen section with the [B] token throws an exception
                // which must be caught.
                try {
                    \$this->stopwatch->openSection(\$token);
                } catch (\\LogicException \$e) {
                }
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function afterDispatch(string \$eventName, \$event)
    {
        switch (\$eventName) {
            case KernelEvents::CONTROLLER_ARGUMENTS:
                \$this->stopwatch->start('controller', 'section');
                break;
            case KernelEvents::RESPONSE:
                \$token = \$event->getResponse()->headers->get('X-Debug-Token');
                if (null === \$token) {
                    break;
                }
                \$this->stopwatch->stopSection(\$token);
                break;
            case KernelEvents::TERMINATE:
                // In the special case described in the `preDispatch` method above, the `\$token` section
                // does not exist, then closing it throws an exception which must be caught.
                \$token = \$event->getResponse()->headers->get('X-Debug-Token');
                if (null === \$token) {
                    break;
                }
                try {
                    \$this->stopwatch->stopSection(\$token);
                } catch (\\LogicException \$e) {
                }
                break;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php";
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

namespace Symfony\\Component\\HttpKernel\\Debug;

use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher as BaseTraceableEventDispatcher;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Collects some data about event listeners.
 *
 * This event dispatcher delegates the dispatching to another one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableEventDispatcher extends BaseTraceableEventDispatcher
{
    /**
     * {@inheritdoc}
     */
    protected function beforeDispatch(string \$eventName, \$event)
    {
        switch (\$eventName) {
            case KernelEvents::REQUEST:
                \$this->stopwatch->openSection();
                break;
            case KernelEvents::VIEW:
            case KernelEvents::RESPONSE:
                // stop only if a controller has been executed
                if (\$this->stopwatch->isStarted('controller')) {
                    \$this->stopwatch->stop('controller');
                }
                break;
            case KernelEvents::TERMINATE:
                \$token = \$event->getResponse()->headers->get('X-Debug-Token');
                if (null === \$token) {
                    break;
                }
                // There is a very special case when using built-in AppCache class as kernel wrapper, in the case
                // of an ESI request leading to a `stale` response [B]  inside a `fresh` cached response [A].
                // In this case, `\$token` contains the [B] debug token, but the  open `stopwatch` section ID
                // is equal to the [A] debug token. Trying to reopen section with the [B] token throws an exception
                // which must be caught.
                try {
                    \$this->stopwatch->openSection(\$token);
                } catch (\\LogicException \$e) {
                }
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function afterDispatch(string \$eventName, \$event)
    {
        switch (\$eventName) {
            case KernelEvents::CONTROLLER_ARGUMENTS:
                \$this->stopwatch->start('controller', 'section');
                break;
            case KernelEvents::RESPONSE:
                \$token = \$event->getResponse()->headers->get('X-Debug-Token');
                if (null === \$token) {
                    break;
                }
                \$this->stopwatch->stopSection(\$token);
                break;
            case KernelEvents::TERMINATE:
                // In the special case described in the `preDispatch` method above, the `\$token` section
                // does not exist, then closing it throws an exception which must be caught.
                \$token = \$event->getResponse()->headers->get('X-Debug-Token');
                if (null === \$token) {
                    break;
                }
                try {
                    \$this->stopwatch->stopSection(\$token);
                } catch (\\LogicException \$e) {
                }
                break;
        }
    }
}
", "vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php");
    }
}
