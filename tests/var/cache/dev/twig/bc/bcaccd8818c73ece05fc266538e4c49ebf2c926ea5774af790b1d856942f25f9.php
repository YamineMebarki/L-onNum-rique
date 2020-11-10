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

/* vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php */
class __TwigTemplate_f4b38b39abb3bee7d8b58b958fcac9892904799ee7df0817dcf0b3d61ad73c6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Provides integration with the HttpKernel component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpKernelRuntime
{
    private \$handler;

    public function __construct(FragmentHandler \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * Renders a fragment.
     *
     * @param string|ControllerReference \$uri     A URI as a string or a ControllerReference instance
     * @param array                      \$options An array of options
     *
     * @return string The fragment content
     *
     * @see FragmentHandler::render()
     */
    public function renderFragment(\$uri, \$options = [])
    {
        \$strategy = isset(\$options['strategy']) ? \$options['strategy'] : 'inline';
        unset(\$options['strategy']);

        return \$this->handler->render(\$uri, \$strategy, \$options);
    }

    /**
     * Renders a fragment.
     *
     * @param string                     \$strategy A strategy name
     * @param string|ControllerReference \$uri      A URI as a string or a ControllerReference instance
     * @param array                      \$options  An array of options
     *
     * @return string The fragment content
     *
     * @see FragmentHandler::render()
     */
    public function renderFragmentStrategy(\$strategy, \$uri, \$options = [])
    {
        return \$this->handler->render(\$uri, \$strategy, \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Provides integration with the HttpKernel component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpKernelRuntime
{
    private \$handler;

    public function __construct(FragmentHandler \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * Renders a fragment.
     *
     * @param string|ControllerReference \$uri     A URI as a string or a ControllerReference instance
     * @param array                      \$options An array of options
     *
     * @return string The fragment content
     *
     * @see FragmentHandler::render()
     */
    public function renderFragment(\$uri, \$options = [])
    {
        \$strategy = isset(\$options['strategy']) ? \$options['strategy'] : 'inline';
        unset(\$options['strategy']);

        return \$this->handler->render(\$uri, \$strategy, \$options);
    }

    /**
     * Renders a fragment.
     *
     * @param string                     \$strategy A strategy name
     * @param string|ControllerReference \$uri      A URI as a string or a ControllerReference instance
     * @param array                      \$options  An array of options
     *
     * @return string The fragment content
     *
     * @see FragmentHandler::render()
     */
    public function renderFragmentStrategy(\$strategy, \$uri, \$options = [])
    {
        return \$this->handler->render(\$uri, \$strategy, \$options);
    }
}
", "vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php");
    }
}
