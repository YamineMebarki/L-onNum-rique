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

/* vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LocalizedController.php */
class __TwigTemplate_a9ba83956d9a12e1495a50b209e9fbd8f6be6cf3925a6e69d3bd62d6055bd981 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LocalizedController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LocalizedController.php"));

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
use Symfony\\Component\\Security\\Core\\Security;

class LocalizedController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function loginAction(Request \$request)
    {
        // get the login error if there is one
        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            \$error = \$request->getSession()->get(Security::AUTHENTICATION_ERROR);
        }

        return new Response(\$this->container->get('twig')->render('@FormLogin/Localized/login.html.twig', [
            // last username entered by the user
            'last_username' => \$request->getSession()->get(Security::LAST_USERNAME),
            'error' => \$error,
        ]));
    }

    public function loginCheckAction()
    {
        throw new \\RuntimeException('loginCheckAction() should never be called.');
    }

    public function logoutAction()
    {
        throw new \\RuntimeException('logoutAction() should never be called.');
    }

    public function secureAction()
    {
        throw new \\RuntimeException('secureAction() should never be called.');
    }

    public function profileAction()
    {
        return new Response('<html><body>Profile</body></html>');
    }

    public function homepageAction()
    {
        return new Response('<html><body>Homepage</body></html>');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LocalizedController.php";
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
use Symfony\\Component\\Security\\Core\\Security;

class LocalizedController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function loginAction(Request \$request)
    {
        // get the login error if there is one
        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            \$error = \$request->getSession()->get(Security::AUTHENTICATION_ERROR);
        }

        return new Response(\$this->container->get('twig')->render('@FormLogin/Localized/login.html.twig', [
            // last username entered by the user
            'last_username' => \$request->getSession()->get(Security::LAST_USERNAME),
            'error' => \$error,
        ]));
    }

    public function loginCheckAction()
    {
        throw new \\RuntimeException('loginCheckAction() should never be called.');
    }

    public function logoutAction()
    {
        throw new \\RuntimeException('logoutAction() should never be called.');
    }

    public function secureAction()
    {
        throw new \\RuntimeException('secureAction() should never be called.');
    }

    public function profileAction()
    {
        return new Response('<html><body>Profile</body></html>');
    }

    public function homepageAction()
    {
        return new Response('<html><body>Homepage</body></html>');
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LocalizedController.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Controller/LocalizedController.php");
    }
}
