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

/* vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php */
class __TwigTemplate_f182fd9a5e5b71df4e67f07fec4e7a59d99757573349a2c7956f3179f4393ac0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php"));

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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Sets the session onto the request on the \"kernel.request\" event and saves
 * it on the \"kernel.response\" event.
 *
 * In addition, if the session has been started it overrides the Cache-Control
 * header in such a way that all caching is disabled in that case.
 * If you have a scenario where caching responses with session information in
 * them makes sense, you can disable this behaviour by setting the header
 * AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER on the response.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Tobias Schultze <http://tobion.de>
 *
 * @internal since Symfony 4.3
 */
abstract class AbstractSessionListener implements EventSubscriberInterface
{
    const NO_AUTO_CACHE_CONTROL_HEADER = 'Symfony-Session-NoAutoCacheControl';

    protected \$container;
    private \$sessionUsageStack = [];

    public function __construct(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$session = null;
        \$request = \$event->getRequest();
        if (\$request->hasSession()) {
            // no-op
        } elseif (method_exists(\$request, 'setSessionFactory')) {
            \$request->setSessionFactory(function () { return \$this->getSession(); });
        } elseif (\$session = \$this->getSession()) {
            \$request->setSession(\$session);
        }

        \$session = \$session ?? (\$this->container && \$this->container->has('initialized_session') ? \$this->container->get('initialized_session') : null);
        \$this->sessionUsageStack[] = \$session instanceof Session ? \$session->getUsageIndex() : 0;
    }

    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$response = \$event->getResponse();
        \$autoCacheControl = !\$response->headers->has(self::NO_AUTO_CACHE_CONTROL_HEADER);
        // Always remove the internal header if present
        \$response->headers->remove(self::NO_AUTO_CACHE_CONTROL_HEADER);

        if (!\$session = \$this->container && \$this->container->has('initialized_session') ? \$this->container->get('initialized_session') : \$event->getRequest()->getSession()) {
            return;
        }

        if (\$session instanceof Session ? \$session->getUsageIndex() !== end(\$this->sessionUsageStack) : \$session->isStarted()) {
            if (\$autoCacheControl) {
                \$response
                    ->setExpires(new \\DateTime())
                    ->setPrivate()
                    ->setMaxAge(0)
                    ->headers->addCacheControlDirective('must-revalidate');
            }
        }

        if (\$session->isStarted()) {
            /*
             * Saves the session, in case it is still open, before sending the response/headers.
             *
             * This ensures several things in case the developer did not save the session explicitly:
             *
             *  * If a session save handler without locking is used, it ensures the data is available
             *    on the next request, e.g. after a redirect. PHPs auto-save at script end via
             *    session_register_shutdown is executed after fastcgi_finish_request. So in this case
             *    the data could be missing the next request because it might not be saved the moment
             *    the new request is processed.
             *  * A locking save handler (e.g. the native 'files') circumvents concurrency problems like
             *    the one above. But by saving the session before long-running things in the terminate event,
             *    we ensure the session is not blocked longer than needed.
             *  * When regenerating the session ID no locking is involved in PHPs session design. See
             *    https://bugs.php.net/61470 for a discussion. So in this case, the session must
             *    be saved anyway before sending the headers with the new session ID. Otherwise session
             *    data could get lost again for concurrent requests with the new ID. One result could be
             *    that you get logged out after just logging in.
             *
             * This listener should be executed as one of the last listeners, so that previous listeners
             * can still operate on the open session. This prevents the overhead of restarting it.
             * Listeners after closing the session can still work with the session as usual because
             * Symfonys session implementation starts the session on demand. So writing to it after
             * it is saved will just restart it.
             */
            \$session->save();
        }
    }

    /**
     * @internal
     */
    public function onFinishRequest(FinishRequestEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            array_pop(\$this->sessionUsageStack);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 128],
            // low priority to come after regular response listeners, but higher than StreamedResponseListener
            KernelEvents::RESPONSE => ['onKernelResponse', -1000],
            KernelEvents::FINISH_REQUEST => ['onFinishRequest'],
        ];
    }

    /**
     * Gets the session object.
     *
     * @return SessionInterface|null A SessionInterface instance or null if no session is available
     */
    abstract protected function getSession();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php";
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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Sets the session onto the request on the \"kernel.request\" event and saves
 * it on the \"kernel.response\" event.
 *
 * In addition, if the session has been started it overrides the Cache-Control
 * header in such a way that all caching is disabled in that case.
 * If you have a scenario where caching responses with session information in
 * them makes sense, you can disable this behaviour by setting the header
 * AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER on the response.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Tobias Schultze <http://tobion.de>
 *
 * @internal since Symfony 4.3
 */
abstract class AbstractSessionListener implements EventSubscriberInterface
{
    const NO_AUTO_CACHE_CONTROL_HEADER = 'Symfony-Session-NoAutoCacheControl';

    protected \$container;
    private \$sessionUsageStack = [];

    public function __construct(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$session = null;
        \$request = \$event->getRequest();
        if (\$request->hasSession()) {
            // no-op
        } elseif (method_exists(\$request, 'setSessionFactory')) {
            \$request->setSessionFactory(function () { return \$this->getSession(); });
        } elseif (\$session = \$this->getSession()) {
            \$request->setSession(\$session);
        }

        \$session = \$session ?? (\$this->container && \$this->container->has('initialized_session') ? \$this->container->get('initialized_session') : null);
        \$this->sessionUsageStack[] = \$session instanceof Session ? \$session->getUsageIndex() : 0;
    }

    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$response = \$event->getResponse();
        \$autoCacheControl = !\$response->headers->has(self::NO_AUTO_CACHE_CONTROL_HEADER);
        // Always remove the internal header if present
        \$response->headers->remove(self::NO_AUTO_CACHE_CONTROL_HEADER);

        if (!\$session = \$this->container && \$this->container->has('initialized_session') ? \$this->container->get('initialized_session') : \$event->getRequest()->getSession()) {
            return;
        }

        if (\$session instanceof Session ? \$session->getUsageIndex() !== end(\$this->sessionUsageStack) : \$session->isStarted()) {
            if (\$autoCacheControl) {
                \$response
                    ->setExpires(new \\DateTime())
                    ->setPrivate()
                    ->setMaxAge(0)
                    ->headers->addCacheControlDirective('must-revalidate');
            }
        }

        if (\$session->isStarted()) {
            /*
             * Saves the session, in case it is still open, before sending the response/headers.
             *
             * This ensures several things in case the developer did not save the session explicitly:
             *
             *  * If a session save handler without locking is used, it ensures the data is available
             *    on the next request, e.g. after a redirect. PHPs auto-save at script end via
             *    session_register_shutdown is executed after fastcgi_finish_request. So in this case
             *    the data could be missing the next request because it might not be saved the moment
             *    the new request is processed.
             *  * A locking save handler (e.g. the native 'files') circumvents concurrency problems like
             *    the one above. But by saving the session before long-running things in the terminate event,
             *    we ensure the session is not blocked longer than needed.
             *  * When regenerating the session ID no locking is involved in PHPs session design. See
             *    https://bugs.php.net/61470 for a discussion. So in this case, the session must
             *    be saved anyway before sending the headers with the new session ID. Otherwise session
             *    data could get lost again for concurrent requests with the new ID. One result could be
             *    that you get logged out after just logging in.
             *
             * This listener should be executed as one of the last listeners, so that previous listeners
             * can still operate on the open session. This prevents the overhead of restarting it.
             * Listeners after closing the session can still work with the session as usual because
             * Symfonys session implementation starts the session on demand. So writing to it after
             * it is saved will just restart it.
             */
            \$session->save();
        }
    }

    /**
     * @internal
     */
    public function onFinishRequest(FinishRequestEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            array_pop(\$this->sessionUsageStack);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 128],
            // low priority to come after regular response listeners, but higher than StreamedResponseListener
            KernelEvents::RESPONSE => ['onKernelResponse', -1000],
            KernelEvents::FINISH_REQUEST => ['onFinishRequest'],
        ];
    }

    /**
     * Gets the session object.
     *
     * @return SessionInterface|null A SessionInterface instance or null if no session is available
     */
    abstract protected function getSession();
}
", "vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php");
    }
}
