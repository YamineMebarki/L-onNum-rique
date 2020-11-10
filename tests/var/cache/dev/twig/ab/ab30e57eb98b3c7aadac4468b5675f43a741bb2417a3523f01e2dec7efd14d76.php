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

/* vendor/symfony/http-kernel/Fragment/FragmentHandler.php */
class __TwigTemplate_7e579bdfc0cfa1d86c2bdaf5382af53e909b72587341a8d487b90b8115bb08ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/FragmentHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/FragmentHandler.php"));

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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\StreamedResponse;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;

/**
 * Renders a URI that represents a resource fragment.
 *
 * This class handles the rendering of resource fragments that are included into
 * a main resource. The handling of the rendering is managed by specialized renderers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see FragmentRendererInterface
 */
class FragmentHandler
{
    private \$debug;
    private \$renderers = [];
    private \$requestStack;

    /**
     * @param RequestStack                \$requestStack The Request stack that controls the lifecycle of requests
     * @param FragmentRendererInterface[] \$renderers    An array of FragmentRendererInterface instances
     * @param bool                        \$debug        Whether the debug mode is enabled or not
     */
    public function __construct(RequestStack \$requestStack, array \$renderers = [], bool \$debug = false)
    {
        \$this->requestStack = \$requestStack;
        foreach (\$renderers as \$renderer) {
            \$this->addRenderer(\$renderer);
        }
        \$this->debug = \$debug;
    }

    /**
     * Adds a renderer.
     */
    public function addRenderer(FragmentRendererInterface \$renderer)
    {
        \$this->renderers[\$renderer->getName()] = \$renderer;
    }

    /**
     * Renders a URI and returns the Response content.
     *
     * Available options:
     *
     *  * ignore_errors: true to return an empty string in case of an error
     *
     * @param string|ControllerReference \$uri      A URI as a string or a ControllerReference instance
     * @param string                     \$renderer The renderer name
     * @param array                      \$options  An array of options
     *
     * @return string|null The Response content or null when the Response is streamed
     *
     * @throws \\InvalidArgumentException when the renderer does not exist
     * @throws \\LogicException           when no master request is being handled
     */
    public function render(\$uri, \$renderer = 'inline', array \$options = [])
    {
        if (!isset(\$options['ignore_errors'])) {
            \$options['ignore_errors'] = !\$this->debug;
        }

        if (!isset(\$this->renderers[\$renderer])) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" renderer does not exist.', \$renderer));
        }

        if (!\$request = \$this->requestStack->getCurrentRequest()) {
            throw new \\LogicException('Rendering a fragment can only be done when handling a Request.');
        }

        return \$this->deliver(\$this->renderers[\$renderer]->render(\$uri, \$request, \$options));
    }

    /**
     * Delivers the Response as a string.
     *
     * When the Response is a StreamedResponse, the content is streamed immediately
     * instead of being returned.
     *
     * @return string|null The Response content or null when the Response is streamed
     *
     * @throws \\RuntimeException when the Response is not successful
     */
    protected function deliver(Response \$response)
    {
        if (!\$response->isSuccessful()) {
            throw new \\RuntimeException(sprintf('Error when rendering \"%s\" (Status code is %s).', \$this->requestStack->getCurrentRequest()->getUri(), \$response->getStatusCode()));
        }

        if (!\$response instanceof StreamedResponse) {
            return \$response->getContent();
        }

        \$response->sendContent();

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Fragment/FragmentHandler.php";
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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\StreamedResponse;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;

/**
 * Renders a URI that represents a resource fragment.
 *
 * This class handles the rendering of resource fragments that are included into
 * a main resource. The handling of the rendering is managed by specialized renderers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see FragmentRendererInterface
 */
class FragmentHandler
{
    private \$debug;
    private \$renderers = [];
    private \$requestStack;

    /**
     * @param RequestStack                \$requestStack The Request stack that controls the lifecycle of requests
     * @param FragmentRendererInterface[] \$renderers    An array of FragmentRendererInterface instances
     * @param bool                        \$debug        Whether the debug mode is enabled or not
     */
    public function __construct(RequestStack \$requestStack, array \$renderers = [], bool \$debug = false)
    {
        \$this->requestStack = \$requestStack;
        foreach (\$renderers as \$renderer) {
            \$this->addRenderer(\$renderer);
        }
        \$this->debug = \$debug;
    }

    /**
     * Adds a renderer.
     */
    public function addRenderer(FragmentRendererInterface \$renderer)
    {
        \$this->renderers[\$renderer->getName()] = \$renderer;
    }

    /**
     * Renders a URI and returns the Response content.
     *
     * Available options:
     *
     *  * ignore_errors: true to return an empty string in case of an error
     *
     * @param string|ControllerReference \$uri      A URI as a string or a ControllerReference instance
     * @param string                     \$renderer The renderer name
     * @param array                      \$options  An array of options
     *
     * @return string|null The Response content or null when the Response is streamed
     *
     * @throws \\InvalidArgumentException when the renderer does not exist
     * @throws \\LogicException           when no master request is being handled
     */
    public function render(\$uri, \$renderer = 'inline', array \$options = [])
    {
        if (!isset(\$options['ignore_errors'])) {
            \$options['ignore_errors'] = !\$this->debug;
        }

        if (!isset(\$this->renderers[\$renderer])) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" renderer does not exist.', \$renderer));
        }

        if (!\$request = \$this->requestStack->getCurrentRequest()) {
            throw new \\LogicException('Rendering a fragment can only be done when handling a Request.');
        }

        return \$this->deliver(\$this->renderers[\$renderer]->render(\$uri, \$request, \$options));
    }

    /**
     * Delivers the Response as a string.
     *
     * When the Response is a StreamedResponse, the content is streamed immediately
     * instead of being returned.
     *
     * @return string|null The Response content or null when the Response is streamed
     *
     * @throws \\RuntimeException when the Response is not successful
     */
    protected function deliver(Response \$response)
    {
        if (!\$response->isSuccessful()) {
            throw new \\RuntimeException(sprintf('Error when rendering \"%s\" (Status code is %s).', \$this->requestStack->getCurrentRequest()->getUri(), \$response->getStatusCode()));
        }

        if (!\$response instanceof StreamedResponse) {
            return \$response->getContent();
        }

        \$response->sendContent();

        return null;
    }
}
", "vendor/symfony/http-kernel/Fragment/FragmentHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Fragment/FragmentHandler.php");
    }
}
