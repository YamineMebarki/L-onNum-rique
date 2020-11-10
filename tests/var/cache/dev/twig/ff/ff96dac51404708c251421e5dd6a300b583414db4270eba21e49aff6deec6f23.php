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

/* vendor/symfony/http-kernel/Tests/Exception/NotAcceptableHttpExceptionTest.php */
class __TwigTemplate_a771b15cb9b9f6467eb0e07beb9b5e551b49b93f9141b1913b466be4d2fb5143 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/NotAcceptableHttpExceptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/NotAcceptableHttpExceptionTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use Symfony\\Component\\HttpKernel\\Exception\\NotAcceptableHttpException;

class NotAcceptableHttpExceptionTest extends HttpExceptionTest
{
    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new NotAcceptableHttpException(\$message, \$previous, \$code, \$headers);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Exception/NotAcceptableHttpExceptionTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use Symfony\\Component\\HttpKernel\\Exception\\NotAcceptableHttpException;

class NotAcceptableHttpExceptionTest extends HttpExceptionTest
{
    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new NotAcceptableHttpException(\$message, \$previous, \$code, \$headers);
    }
}
", "vendor/symfony/http-kernel/Tests/Exception/NotAcceptableHttpExceptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Exception/NotAcceptableHttpExceptionTest.php");
    }
}
