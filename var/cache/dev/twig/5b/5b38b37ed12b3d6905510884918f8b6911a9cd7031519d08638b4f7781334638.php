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

/* vendor/symfony/http-kernel/EventListener/SurrogateListener.php */
class __TwigTemplate_983b58c296d9a35c8d8d6d0087adb7c3de84cfdf963ea1ea2ab7a2da35f82ec9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/SurrogateListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/SurrogateListener.php"));

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

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * SurrogateListener adds a Surrogate-Control HTTP header when the Response needs to be parsed for Surrogates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class SurrogateListener implements EventSubscriberInterface
{
    private \$surrogate;

    public function __construct(SurrogateInterface \$surrogate = null)
    {
        \$this->surrogate = \$surrogate;
    }

    /**
     * Filters the Response.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$kernel = \$event->getKernel();
        \$surrogate = \$this->surrogate;
        if (\$kernel instanceof HttpCache) {
            \$surrogate = \$kernel->getSurrogate();
            if (null !== \$this->surrogate && \$this->surrogate->getName() !== \$surrogate->getName()) {
                \$surrogate = \$this->surrogate;
            }
        }

        if (null === \$surrogate) {
            return;
        }

        \$surrogate->addSurrogateControl(\$event->getResponse());
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/SurrogateListener.php";
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

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * SurrogateListener adds a Surrogate-Control HTTP header when the Response needs to be parsed for Surrogates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class SurrogateListener implements EventSubscriberInterface
{
    private \$surrogate;

    public function __construct(SurrogateInterface \$surrogate = null)
    {
        \$this->surrogate = \$surrogate;
    }

    /**
     * Filters the Response.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$kernel = \$event->getKernel();
        \$surrogate = \$this->surrogate;
        if (\$kernel instanceof HttpCache) {
            \$surrogate = \$kernel->getSurrogate();
            if (null !== \$this->surrogate && \$this->surrogate->getName() !== \$surrogate->getName()) {
                \$surrogate = \$this->surrogate;
            }
        }

        if (null === \$surrogate) {
            return;
        }

        \$surrogate->addSurrogateControl(\$event->getResponse());
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }
}
", "vendor/symfony/http-kernel/EventListener/SurrogateListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/SurrogateListener.php");
    }
}
