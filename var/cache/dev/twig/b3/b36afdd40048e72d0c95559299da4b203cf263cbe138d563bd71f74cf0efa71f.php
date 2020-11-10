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

/* vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Controller/LoginController.php */
class __TwigTemplate_7ada6e344d278e37a185724a5f81da6994a50196643e3344064ff5b1d9641a5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Controller/LoginController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Controller/LoginController.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

class LoginController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function loginAction()
    {
        \$form = \$this->container->get('form.factory')->create('Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Form\\UserLoginType');

        return new Response(\$this->container->get('twig')->render('@CsrfFormLogin/Login/login.html.twig', [
            'form' => \$form->createView(),
        ]));
    }

    public function afterLoginAction()
    {
        return new Response(\$this->container->get('twig')->render('@CsrfFormLogin/Login/after_login.html.twig'));
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
        return "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Controller/LoginController.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

class LoginController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function loginAction()
    {
        \$form = \$this->container->get('form.factory')->create('Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Form\\UserLoginType');

        return new Response(\$this->container->get('twig')->render('@CsrfFormLogin/Login/login.html.twig', [
            'form' => \$form->createView(),
        ]));
    }

    public function afterLoginAction()
    {
        return new Response(\$this->container->get('twig')->render('@CsrfFormLogin/Login/after_login.html.twig'));
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
", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Controller/LoginController.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Controller/LoginController.php");
    }
}
