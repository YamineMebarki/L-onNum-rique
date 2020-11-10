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

/* vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php */
class __TwigTemplate_db433573fb0050b8a7da65698da8ad8541e566e955e8886622b3ddcb8465b1a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * HttpCacheListener handles HTTP cache headers.
 *
 * It can be configured via the Cache annotation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpCacheListener implements EventSubscriberInterface
{
    private \$lastModifiedDates;
    private \$etags;
    private \$expressionLanguage;

    public function __construct()
    {
        \$this->lastModifiedDates = new \\SplObjectStorage();
        \$this->etags = new \\SplObjectStorage();
    }

    /**
     * Handles HTTP validation headers.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        if (!\$configuration = \$request->attributes->get('_cache')) {
            return;
        }

        \$response = new Response();

        \$lastModifiedDate = '';
        if (\$configuration->getLastModified()) {
            \$lastModifiedDate = \$this->getExpressionLanguage()->evaluate(\$configuration->getLastModified(), \$request->attributes->all());
            \$response->setLastModified(\$lastModifiedDate);
        }

        \$etag = '';
        if (\$configuration->getEtag()) {
            \$etag = hash('sha256', \$this->getExpressionLanguage()->evaluate(\$configuration->getEtag(), \$request->attributes->all()));
            \$response->setEtag(\$etag);
        }

        if (\$response->isNotModified(\$request)) {
            \$event->setController(function () use (\$response) {
                return \$response;
            });
            \$event->stopPropagation();
        } else {
            if (\$etag) {
                \$this->etags[\$request] = \$etag;
            }
            if (\$lastModifiedDate) {
                \$this->lastModifiedDates[\$request] = \$lastModifiedDate;
            }
        }
    }

    /**
     * Modifies the response to apply HTTP cache headers when needed.
     */
    public function onKernelResponse(KernelEvent \$event)
    {
        \$request = \$event->getRequest();

        if (!\$configuration = \$request->attributes->get('_cache')) {
            return;
        }

        \$response = \$event->getResponse();

        // http://tools.ietf.org/html/draft-ietf-httpbis-p4-conditional-12#section-3.1
        if (!\\in_array(\$response->getStatusCode(), [200, 203, 300, 301, 302, 304, 404, 410])) {
            return;
        }

        if (!\$response->headers->hasCacheControlDirective('s-maxage') && null !== \$age = \$configuration->getSMaxAge()) {
            \$age = \$this->convertToSecondsIfNeeded(\$age);

            \$response->setSharedMaxAge(\$age);
        }

        if (\$configuration->mustRevalidate()) {
            \$response->headers->addCacheControlDirective('must-revalidate');
        }

        if (!\$response->headers->hasCacheControlDirective('max-age') && null !== \$age = \$configuration->getMaxAge()) {
            \$age = \$this->convertToSecondsIfNeeded(\$age);

            \$response->setMaxAge(\$age);
        }

        if (!\$response->headers->hasCacheControlDirective('max-stale') && null !== \$stale = \$configuration->getMaxStale()) {
            \$stale = \$this->convertToSecondsIfNeeded(\$stale);

            \$response->headers->addCacheControlDirective('max-stale', \$stale);
        }

        if (!\$response->headers->has('Expires') && null !== \$configuration->getExpires()) {
            \$date = \\DateTime::createFromFormat('U', strtotime(\$configuration->getExpires()), new \\DateTimeZone('UTC'));
            \$response->setExpires(\$date);
        }

        if (!\$response->headers->has('Vary') && null !== \$configuration->getVary()) {
            \$response->setVary(\$configuration->getVary());
        }

        if (\$configuration->isPublic()) {
            \$response->setPublic();
        }

        if (\$configuration->isPrivate()) {
            \$response->setPrivate();
        }

        if (!\$response->headers->has('Last-Modified') && isset(\$this->lastModifiedDates[\$request])) {
            \$response->setLastModified(\$this->lastModifiedDates[\$request]);

            unset(\$this->lastModifiedDates[\$request]);
        }

        if (!\$response->headers->has('Etag') && isset(\$this->etags[\$request])) {
            \$response->setEtag(\$this->etags[\$request]);

            unset(\$this->etags[\$request]);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }

    private function getExpressionLanguage()
    {
        if (null === \$this->expressionLanguage) {
            if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) {
                throw new \\RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
            }
            \$this->expressionLanguage = new ExpressionLanguage();
        }

        return \$this->expressionLanguage;
    }

    /**
     * @param int|string \$time Time that can be either expressed in seconds or with relative time format (1 day, 2 weeks, ...)
     *
     * @return int
     */
    private function convertToSecondsIfNeeded(\$time)
    {
        if (!is_numeric(\$time)) {
            \$now = microtime(true);

            \$time = ceil(strtotime(\$time, \$now) - \$now);
        }

        return \$time;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * HttpCacheListener handles HTTP cache headers.
 *
 * It can be configured via the Cache annotation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpCacheListener implements EventSubscriberInterface
{
    private \$lastModifiedDates;
    private \$etags;
    private \$expressionLanguage;

    public function __construct()
    {
        \$this->lastModifiedDates = new \\SplObjectStorage();
        \$this->etags = new \\SplObjectStorage();
    }

    /**
     * Handles HTTP validation headers.
     */
    public function onKernelController(KernelEvent \$event)
    {
        \$request = \$event->getRequest();
        if (!\$configuration = \$request->attributes->get('_cache')) {
            return;
        }

        \$response = new Response();

        \$lastModifiedDate = '';
        if (\$configuration->getLastModified()) {
            \$lastModifiedDate = \$this->getExpressionLanguage()->evaluate(\$configuration->getLastModified(), \$request->attributes->all());
            \$response->setLastModified(\$lastModifiedDate);
        }

        \$etag = '';
        if (\$configuration->getEtag()) {
            \$etag = hash('sha256', \$this->getExpressionLanguage()->evaluate(\$configuration->getEtag(), \$request->attributes->all()));
            \$response->setEtag(\$etag);
        }

        if (\$response->isNotModified(\$request)) {
            \$event->setController(function () use (\$response) {
                return \$response;
            });
            \$event->stopPropagation();
        } else {
            if (\$etag) {
                \$this->etags[\$request] = \$etag;
            }
            if (\$lastModifiedDate) {
                \$this->lastModifiedDates[\$request] = \$lastModifiedDate;
            }
        }
    }

    /**
     * Modifies the response to apply HTTP cache headers when needed.
     */
    public function onKernelResponse(KernelEvent \$event)
    {
        \$request = \$event->getRequest();

        if (!\$configuration = \$request->attributes->get('_cache')) {
            return;
        }

        \$response = \$event->getResponse();

        // http://tools.ietf.org/html/draft-ietf-httpbis-p4-conditional-12#section-3.1
        if (!\\in_array(\$response->getStatusCode(), [200, 203, 300, 301, 302, 304, 404, 410])) {
            return;
        }

        if (!\$response->headers->hasCacheControlDirective('s-maxage') && null !== \$age = \$configuration->getSMaxAge()) {
            \$age = \$this->convertToSecondsIfNeeded(\$age);

            \$response->setSharedMaxAge(\$age);
        }

        if (\$configuration->mustRevalidate()) {
            \$response->headers->addCacheControlDirective('must-revalidate');
        }

        if (!\$response->headers->hasCacheControlDirective('max-age') && null !== \$age = \$configuration->getMaxAge()) {
            \$age = \$this->convertToSecondsIfNeeded(\$age);

            \$response->setMaxAge(\$age);
        }

        if (!\$response->headers->hasCacheControlDirective('max-stale') && null !== \$stale = \$configuration->getMaxStale()) {
            \$stale = \$this->convertToSecondsIfNeeded(\$stale);

            \$response->headers->addCacheControlDirective('max-stale', \$stale);
        }

        if (!\$response->headers->has('Expires') && null !== \$configuration->getExpires()) {
            \$date = \\DateTime::createFromFormat('U', strtotime(\$configuration->getExpires()), new \\DateTimeZone('UTC'));
            \$response->setExpires(\$date);
        }

        if (!\$response->headers->has('Vary') && null !== \$configuration->getVary()) {
            \$response->setVary(\$configuration->getVary());
        }

        if (\$configuration->isPublic()) {
            \$response->setPublic();
        }

        if (\$configuration->isPrivate()) {
            \$response->setPrivate();
        }

        if (!\$response->headers->has('Last-Modified') && isset(\$this->lastModifiedDates[\$request])) {
            \$response->setLastModified(\$this->lastModifiedDates[\$request]);

            unset(\$this->lastModifiedDates[\$request]);
        }

        if (!\$response->headers->has('Etag') && isset(\$this->etags[\$request])) {
            \$response->setEtag(\$this->etags[\$request]);

            unset(\$this->etags[\$request]);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }

    private function getExpressionLanguage()
    {
        if (null === \$this->expressionLanguage) {
            if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) {
                throw new \\RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
            }
            \$this->expressionLanguage = new ExpressionLanguage();
        }

        return \$this->expressionLanguage;
    }

    /**
     * @param int|string \$time Time that can be either expressed in seconds or with relative time format (1 day, 2 weeks, ...)
     *
     * @return int
     */
    private function convertToSecondsIfNeeded(\$time)
    {
        if (!is_numeric(\$time)) {
            \$now = microtime(true);

            \$time = ceil(strtotime(\$time, \$now) - \$now);
        }

        return \$time;
    }
}
", "vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php");
    }
}
