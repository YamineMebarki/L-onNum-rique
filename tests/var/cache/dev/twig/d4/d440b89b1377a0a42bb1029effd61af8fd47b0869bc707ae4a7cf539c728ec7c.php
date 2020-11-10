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

/* vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php */
class __TwigTemplate_e19c4bb4c4299a78fd20f7b6e4acba9d4b5cd9a23b405a8641bb106765beca7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php"));

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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener;

/**
 * Adds the possibility to generate a fragment URI for a given Controller.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class RoutableFragmentRenderer implements FragmentRendererInterface
{
    private \$fragmentPath = '/_fragment';

    /**
     * Sets the fragment path that triggers the fragment listener.
     *
     * @param string \$path The path
     *
     * @see FragmentListener
     */
    public function setFragmentPath(\$path)
    {
        \$this->fragmentPath = \$path;
    }

    /**
     * Generates a fragment URI for a given controller.
     *
     * @param ControllerReference \$reference A ControllerReference instance
     * @param Request             \$request   A Request instance
     * @param bool                \$absolute  Whether to generate an absolute URL or not
     * @param bool                \$strict    Whether to allow non-scalar attributes or not
     *
     * @return string A fragment URI
     */
    protected function generateFragmentUri(ControllerReference \$reference, Request \$request, \$absolute = false, \$strict = true)
    {
        if (\$strict) {
            \$this->checkNonScalar(\$reference->attributes);
        }

        // We need to forward the current _format and _locale values as we don't have
        // a proper routing pattern to do the job for us.
        // This makes things inconsistent if you switch from rendering a controller
        // to rendering a route if the route pattern does not contain the special
        // _format and _locale placeholders.
        if (!isset(\$reference->attributes['_format'])) {
            \$reference->attributes['_format'] = \$request->getRequestFormat();
        }
        if (!isset(\$reference->attributes['_locale'])) {
            \$reference->attributes['_locale'] = \$request->getLocale();
        }

        \$reference->attributes['_controller'] = \$reference->controller;

        \$reference->query['_path'] = http_build_query(\$reference->attributes, '', '&');

        \$path = \$this->fragmentPath.'?'.http_build_query(\$reference->query, '', '&');

        if (\$absolute) {
            return \$request->getUriForPath(\$path);
        }

        return \$request->getBaseUrl().\$path;
    }

    private function checkNonScalar(\$values)
    {
        foreach (\$values as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$this->checkNonScalar(\$value);
            } elseif (!is_scalar(\$value) && null !== \$value) {
                throw new \\LogicException(sprintf('Controller attributes cannot contain non-scalar/non-null values (value for key \"%s\" is not a scalar or null).', \$key));
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php";
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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener;

/**
 * Adds the possibility to generate a fragment URI for a given Controller.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class RoutableFragmentRenderer implements FragmentRendererInterface
{
    private \$fragmentPath = '/_fragment';

    /**
     * Sets the fragment path that triggers the fragment listener.
     *
     * @param string \$path The path
     *
     * @see FragmentListener
     */
    public function setFragmentPath(\$path)
    {
        \$this->fragmentPath = \$path;
    }

    /**
     * Generates a fragment URI for a given controller.
     *
     * @param ControllerReference \$reference A ControllerReference instance
     * @param Request             \$request   A Request instance
     * @param bool                \$absolute  Whether to generate an absolute URL or not
     * @param bool                \$strict    Whether to allow non-scalar attributes or not
     *
     * @return string A fragment URI
     */
    protected function generateFragmentUri(ControllerReference \$reference, Request \$request, \$absolute = false, \$strict = true)
    {
        if (\$strict) {
            \$this->checkNonScalar(\$reference->attributes);
        }

        // We need to forward the current _format and _locale values as we don't have
        // a proper routing pattern to do the job for us.
        // This makes things inconsistent if you switch from rendering a controller
        // to rendering a route if the route pattern does not contain the special
        // _format and _locale placeholders.
        if (!isset(\$reference->attributes['_format'])) {
            \$reference->attributes['_format'] = \$request->getRequestFormat();
        }
        if (!isset(\$reference->attributes['_locale'])) {
            \$reference->attributes['_locale'] = \$request->getLocale();
        }

        \$reference->attributes['_controller'] = \$reference->controller;

        \$reference->query['_path'] = http_build_query(\$reference->attributes, '', '&');

        \$path = \$this->fragmentPath.'?'.http_build_query(\$reference->query, '', '&');

        if (\$absolute) {
            return \$request->getUriForPath(\$path);
        }

        return \$request->getBaseUrl().\$path;
    }

    private function checkNonScalar(\$values)
    {
        foreach (\$values as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$this->checkNonScalar(\$value);
            } elseif (!is_scalar(\$value) && null !== \$value) {
                throw new \\LogicException(sprintf('Controller attributes cannot contain non-scalar/non-null values (value for key \"%s\" is not a scalar or null).', \$key));
            }
        }
    }
}
", "vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php");
    }
}
