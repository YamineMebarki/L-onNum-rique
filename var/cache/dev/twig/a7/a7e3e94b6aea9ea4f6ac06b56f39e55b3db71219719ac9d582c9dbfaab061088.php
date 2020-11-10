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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/AnnotatedController.php */
class __TwigTemplate_2f8f4f99d98408dcb1702ec72f75fc4731aa5ce8aa9dc923ff04ad5e2c1df435 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/AnnotatedController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/AnnotatedController.php"));

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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class AnnotatedController
{
    /**
     * @Route(\"/null_request\", name=\"null_request\")
     */
    public function requestDefaultNullAction(Request \$request = null)
    {
        return new Response(\$request ? \\get_class(\$request) : null);
    }

    /**
     * @Route(\"/null_argument\", name=\"null_argument\")
     */
    public function argumentDefaultNullWithoutRouteParamAction(\$value = null)
    {
        return new Response(\$value);
    }

    /**
     * @Route(\"/null_argument_with_route_param/{value}\", name=\"null_argument_with_route_param\")
     */
    public function argumentDefaultNullWithRouteParamAction(\$value = null)
    {
        return new Response(\$value);
    }

    /**
     * @Route(\"/argument_with_route_param_and_default/{value}\", defaults={\"value\": \"value\"}, name=\"argument_with_route_param_and_default\")
     */
    public function argumentWithoutDefaultWithRouteParamAndDefaultAction(\$value)
    {
        return new Response(\$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/AnnotatedController.php";
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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class AnnotatedController
{
    /**
     * @Route(\"/null_request\", name=\"null_request\")
     */
    public function requestDefaultNullAction(Request \$request = null)
    {
        return new Response(\$request ? \\get_class(\$request) : null);
    }

    /**
     * @Route(\"/null_argument\", name=\"null_argument\")
     */
    public function argumentDefaultNullWithoutRouteParamAction(\$value = null)
    {
        return new Response(\$value);
    }

    /**
     * @Route(\"/null_argument_with_route_param/{value}\", name=\"null_argument_with_route_param\")
     */
    public function argumentDefaultNullWithRouteParamAction(\$value = null)
    {
        return new Response(\$value);
    }

    /**
     * @Route(\"/argument_with_route_param_and_default/{value}\", defaults={\"value\": \"value\"}, name=\"argument_with_route_param_and_default\")
     */
    public function argumentWithoutDefaultWithRouteParamAndDefaultAction(\$value)
    {
        return new Response(\$value);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/AnnotatedController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Controller/AnnotatedController.php");
    }
}
