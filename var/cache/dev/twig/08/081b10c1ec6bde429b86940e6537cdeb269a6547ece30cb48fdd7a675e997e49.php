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

/* vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LoginController.php */
class __TwigTemplate_f725fd905a3201536ee8f93aabcf37f0c3dacea69e0176524296aa1bbbf706f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LoginController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LoginController.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class LoginController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function loginAction(Request \$request, UserInterface \$user = null)
    {
        // get the login error if there is one
        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            \$error = \$request->getSession()->get(Security::AUTHENTICATION_ERROR);
        }

        return new Response(\$this->container->get('twig')->render('@FormLogin/Login/login.html.twig', [
            // last username entered by the user
            'last_username' => \$request->getSession()->get(Security::LAST_USERNAME),
            'error' => \$error,
        ]));
    }

    public function afterLoginAction(UserInterface \$user)
    {
        return new Response(\$this->container->get('twig')->render('@FormLogin/Login/after_login.html.twig', ['user' => \$user]));
    }

    public function loginCheckAction()
    {
        return new Response('', 400);
    }

    public function secureAction()
    {
        throw new \\Exception('Wrapper', 0, new \\Exception('Another Wrapper', 0, new AccessDeniedException()));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LoginController.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class LoginController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function loginAction(Request \$request, UserInterface \$user = null)
    {
        // get the login error if there is one
        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            \$error = \$request->getSession()->get(Security::AUTHENTICATION_ERROR);
        }

        return new Response(\$this->container->get('twig')->render('@FormLogin/Login/login.html.twig', [
            // last username entered by the user
            'last_username' => \$request->getSession()->get(Security::LAST_USERNAME),
            'error' => \$error,
        ]));
    }

    public function afterLoginAction(UserInterface \$user)
    {
        return new Response(\$this->container->get('twig')->render('@FormLogin/Login/after_login.html.twig', ['user' => \$user]));
    }

    public function loginCheckAction()
    {
        return new Response('', 400);
    }

    public function secureAction()
    {
        throw new \\Exception('Wrapper', 0, new \\Exception('Another Wrapper', 0, new AccessDeniedException()));
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LoginController.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LoginController.php");
    }
}
