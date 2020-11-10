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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SessionController.php */
class __TwigTemplate_43dadc57fa3f175a54bef48ccbaba4e110182c2a6eb6eeb6b6faa9775dfb46e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SessionController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SessionController.php"));

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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class SessionController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function welcomeAction(Request \$request, \$name = null)
    {
        \$session = \$request->getSession();

        // new session case
        if (!\$session->has('name')) {
            if (!\$name) {
                return new Response('<html><body>You are new here and gave no name.</body></html>');
            }

            // remember name
            \$session->set('name', \$name);

            return new Response(sprintf('<html><body>Hello %s, nice to meet you.</body></html>', \$name));
        }

        // existing session
        \$name = \$session->get('name');

        return new Response(sprintf('<html><body>Welcome back %s, nice to meet you.</body></html>', \$name));
    }

    public function cacheableAction()
    {
        \$response = new Response('all good');
        \$response->setSharedMaxAge(100);

        return \$response;
    }

    public function logoutAction(Request \$request)
    {
        \$request->getSession()->invalidate();

        return new Response('<html><body>Session cleared.</body></html>');
    }

    public function setFlashAction(Request \$request, \$message)
    {
        \$session = \$request->getSession();
        \$session->getFlashBag()->set('notice', \$message);

        return new RedirectResponse(\$this->container->get('router')->generate('session_showflash'));
    }

    public function showFlashAction(Request \$request)
    {
        \$session = \$request->getSession();

        if (\$session->getFlashBag()->has('notice')) {
            list(\$output) = \$session->getFlashBag()->get('notice');
        } else {
            \$output = 'No flash was set.';
        }

        return new Response('<html><body>'.\$output.'</body></html>');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SessionController.php";
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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class SessionController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function welcomeAction(Request \$request, \$name = null)
    {
        \$session = \$request->getSession();

        // new session case
        if (!\$session->has('name')) {
            if (!\$name) {
                return new Response('<html><body>You are new here and gave no name.</body></html>');
            }

            // remember name
            \$session->set('name', \$name);

            return new Response(sprintf('<html><body>Hello %s, nice to meet you.</body></html>', \$name));
        }

        // existing session
        \$name = \$session->get('name');

        return new Response(sprintf('<html><body>Welcome back %s, nice to meet you.</body></html>', \$name));
    }

    public function cacheableAction()
    {
        \$response = new Response('all good');
        \$response->setSharedMaxAge(100);

        return \$response;
    }

    public function logoutAction(Request \$request)
    {
        \$request->getSession()->invalidate();

        return new Response('<html><body>Session cleared.</body></html>');
    }

    public function setFlashAction(Request \$request, \$message)
    {
        \$session = \$request->getSession();
        \$session->getFlashBag()->set('notice', \$message);

        return new RedirectResponse(\$this->container->get('router')->generate('session_showflash'));
    }

    public function showFlashAction(Request \$request)
    {
        \$session = \$request->getSession();

        if (\$session->getFlashBag()->has('notice')) {
            list(\$output) = \$session->getFlashBag()->get('notice');
        } else {
            \$output = 'No flash was set.';
        }

        return new Response('<html><body>'.\$output.'</body></html>');
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SessionController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/SessionController.php");
    }
}
