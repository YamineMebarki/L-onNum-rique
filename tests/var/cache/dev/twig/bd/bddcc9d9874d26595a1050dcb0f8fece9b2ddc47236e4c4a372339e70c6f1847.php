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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SubRequestController.php */
class __TwigTemplate_4c60b8e869c9ccca912df5060268330e1e3fcaea6799da8b5c46800d860c5aa0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SubRequestController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SubRequestController.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;

class SubRequestController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function indexAction(\$handler)
    {
        \$errorUrl = \$this->generateUrl('subrequest_fragment_error', ['_locale' => 'fr', '_format' => 'json']);
        \$altUrl = \$this->generateUrl('subrequest_fragment', ['_locale' => 'fr', '_format' => 'json']);

        // simulates a failure during the rendering of a fragment...
        // should render fr/json
        \$content = \$handler->render(\$errorUrl, 'inline', ['alt' => \$altUrl]);

        // ...to check that the FragmentListener still references the right Request
        // when rendering another fragment after the error occurred
        // should render en/html instead of fr/json
        \$content .= \$handler->render(new ControllerReference(self::class.'::fragmentAction'));

        // forces the LocaleListener to set fr for the locale...
        // should render fr/json
        \$content .= \$handler->render(\$altUrl);

        // ...and check that after the rendering, the original Request is back
        // and en is used as a locale
        // should use en/html instead of fr/json
        \$content .= '--'.\$this->generateUrl('subrequest_fragment');

        // The RouterListener is also tested as if it does not keep the right
        // Request in the context, a 301 would be generated
        return new Response(\$content);
    }

    public function fragmentAction(Request \$request)
    {
        return new Response('--'.\$request->getLocale().'/'.\$request->getRequestFormat());
    }

    public function fragmentErrorAction()
    {
        throw new \\RuntimeException('error');
    }

    protected function generateUrl(\$name, \$arguments = [])
    {
        return \$this->container->get('router')->generate(\$name, \$arguments);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SubRequestController.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;

class SubRequestController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function indexAction(\$handler)
    {
        \$errorUrl = \$this->generateUrl('subrequest_fragment_error', ['_locale' => 'fr', '_format' => 'json']);
        \$altUrl = \$this->generateUrl('subrequest_fragment', ['_locale' => 'fr', '_format' => 'json']);

        // simulates a failure during the rendering of a fragment...
        // should render fr/json
        \$content = \$handler->render(\$errorUrl, 'inline', ['alt' => \$altUrl]);

        // ...to check that the FragmentListener still references the right Request
        // when rendering another fragment after the error occurred
        // should render en/html instead of fr/json
        \$content .= \$handler->render(new ControllerReference(self::class.'::fragmentAction'));

        // forces the LocaleListener to set fr for the locale...
        // should render fr/json
        \$content .= \$handler->render(\$altUrl);

        // ...and check that after the rendering, the original Request is back
        // and en is used as a locale
        // should use en/html instead of fr/json
        \$content .= '--'.\$this->generateUrl('subrequest_fragment');

        // The RouterListener is also tested as if it does not keep the right
        // Request in the context, a 301 would be generated
        return new Response(\$content);
    }

    public function fragmentAction(Request \$request)
    {
        return new Response('--'.\$request->getLocale().'/'.\$request->getRequestFormat());
    }

    public function fragmentErrorAction()
    {
        throw new \\RuntimeException('error');
    }

    protected function generateUrl(\$name, \$arguments = [])
    {
        return \$this->container->get('router')->generate(\$name, \$arguments);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SubRequestController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SubRequestController.php");
    }
}
