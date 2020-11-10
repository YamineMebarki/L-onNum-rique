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

/* vendor/symfony/framework-bundle/Tests/Controller/TestController.php */
class __TwigTemplate_58b1a6aaa76bfa9f1f222a1679560bfea86fcd8f741da49142ca7a4a9521107d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/TestController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/TestController.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerTrait;

class TestController extends Controller
{
    use ControllerTrait {
        generateUrl as public;
        redirect as public;
        forward as public;
        getUser as public;
        json as public;
        file as public;
        isGranted as public;
        denyAccessUnlessGranted as public;
        redirectToRoute as public;
        addFlash as public;
        isCsrfTokenValid as public;
        renderView as public;
        render as public;
        stream as public;
        createNotFoundException as public;
        createAccessDeniedException as public;
        createForm as public;
        createFormBuilder as public;
        getDoctrine as public;
        addLink as public;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Controller/TestController.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerTrait;

class TestController extends Controller
{
    use ControllerTrait {
        generateUrl as public;
        redirect as public;
        forward as public;
        getUser as public;
        json as public;
        file as public;
        isGranted as public;
        denyAccessUnlessGranted as public;
        redirectToRoute as public;
        addFlash as public;
        isCsrfTokenValid as public;
        renderView as public;
        render as public;
        stream as public;
        createNotFoundException as public;
        createAccessDeniedException as public;
        createForm as public;
        createFormBuilder as public;
        getDoctrine as public;
        addLink as public;
    }
}
", "vendor/symfony/framework-bundle/Tests/Controller/TestController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Controller/TestController.php");
    }
}
