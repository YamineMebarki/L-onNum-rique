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

/* vendor/symfony/http-kernel/Tests/Exception/ServiceUnavailableHttpExceptionTest.php */
class __TwigTemplate_4d9b3e6c4684ad84f7573d2f9e2d223deb7b7ffae87978a04f655c36fab87670 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/ServiceUnavailableHttpExceptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/ServiceUnavailableHttpExceptionTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use Symfony\\Component\\HttpKernel\\Exception\\ServiceUnavailableHttpException;

class ServiceUnavailableHttpExceptionTest extends HttpExceptionTest
{
    public function testHeadersDefaultRetryAfter()
    {
        \$exception = new ServiceUnavailableHttpException(10);
        \$this->assertSame(['Retry-After' => 10], \$exception->getHeaders());
    }

    public function testWithHeaderConstruct()
    {
        \$headers = [
            'Cache-Control' => 'public, s-maxage=1337',
        ];

        \$exception = new ServiceUnavailableHttpException(1337, null, null, null, \$headers);

        \$headers['Retry-After'] = 1337;

        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter(\$headers)
    {
        \$exception = new ServiceUnavailableHttpException(10);
        \$exception->setHeaders(\$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new ServiceUnavailableHttpException(null, \$message, \$previous, \$code, \$headers);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Exception/ServiceUnavailableHttpExceptionTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use Symfony\\Component\\HttpKernel\\Exception\\ServiceUnavailableHttpException;

class ServiceUnavailableHttpExceptionTest extends HttpExceptionTest
{
    public function testHeadersDefaultRetryAfter()
    {
        \$exception = new ServiceUnavailableHttpException(10);
        \$this->assertSame(['Retry-After' => 10], \$exception->getHeaders());
    }

    public function testWithHeaderConstruct()
    {
        \$headers = [
            'Cache-Control' => 'public, s-maxage=1337',
        ];

        \$exception = new ServiceUnavailableHttpException(1337, null, null, null, \$headers);

        \$headers['Retry-After'] = 1337;

        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter(\$headers)
    {
        \$exception = new ServiceUnavailableHttpException(10);
        \$exception->setHeaders(\$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new ServiceUnavailableHttpException(null, \$message, \$previous, \$code, \$headers);
    }
}
", "vendor/symfony/http-kernel/Tests/Exception/ServiceUnavailableHttpExceptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Exception/ServiceUnavailableHttpExceptionTest.php");
    }
}
