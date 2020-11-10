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

/* vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php */
class __TwigTemplate_16365610ef2fc0b8f73b83a6618effc1d8a55adf878871e85eff5a4930dcbbd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php"));

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

namespace Symfony\\Component\\WebLink\\EventListener;

use Psr\\Link\\LinkProviderInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\WebLink\\HttpHeaderSerializer;

/**
 * Adds the Link HTTP header to the response.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class AddLinkHeaderListener implements EventSubscriberInterface
{
    private \$serializer;

    public function __construct()
    {
        \$this->serializer = new HttpHeaderSerializer();
    }

    public function onKernelResponse(ResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$linkProvider = \$event->getRequest()->attributes->get('_links');
        if (!\$linkProvider instanceof LinkProviderInterface || !\$links = \$linkProvider->getLinks()) {
            return;
        }

        \$event->getResponse()->headers->set('Link', \$this->serializer->serialize(\$links), false);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php";
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

namespace Symfony\\Component\\WebLink\\EventListener;

use Psr\\Link\\LinkProviderInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\WebLink\\HttpHeaderSerializer;

/**
 * Adds the Link HTTP header to the response.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class AddLinkHeaderListener implements EventSubscriberInterface
{
    private \$serializer;

    public function __construct()
    {
        \$this->serializer = new HttpHeaderSerializer();
    }

    public function onKernelResponse(ResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$linkProvider = \$event->getRequest()->attributes->get('_links');
        if (!\$linkProvider instanceof LinkProviderInterface || !\$links = \$linkProvider->getLinks()) {
            return;
        }

        \$event->getResponse()->headers->set('Link', \$this->serializer->serialize(\$links), false);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
", "vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php");
    }
}
