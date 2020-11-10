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

/* vendor/symfony/http-kernel/Tests/Exception/MethodNotAllowedHttpExceptionTest.php */
class __TwigTemplate_fcb32502ec1aa5bec27f0acc1046482bd0e75561ec2342c328a4dc23d9e23f17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/MethodNotAllowedHttpExceptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/MethodNotAllowedHttpExceptionTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;

class MethodNotAllowedHttpExceptionTest extends HttpExceptionTest
{
    public function testHeadersDefault()
    {
        \$exception = new MethodNotAllowedHttpException(['GET', 'PUT']);
        \$this->assertSame(['Allow' => 'GET, PUT'], \$exception->getHeaders());
    }

    public function testWithHeaderConstruct()
    {
        \$headers = [
            'Cache-Control' => 'public, s-maxage=1200',
        ];

        \$exception = new MethodNotAllowedHttpException(['get'], null, null, null, \$headers);

        \$headers['Allow'] = 'GET';

        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter(\$headers)
    {
        \$exception = new MethodNotAllowedHttpException(['GET']);
        \$exception->setHeaders(\$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new MethodNotAllowedHttpException(['get'], \$message, \$previous, \$code, \$headers);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Exception/MethodNotAllowedHttpExceptionTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;

class MethodNotAllowedHttpExceptionTest extends HttpExceptionTest
{
    public function testHeadersDefault()
    {
        \$exception = new MethodNotAllowedHttpException(['GET', 'PUT']);
        \$this->assertSame(['Allow' => 'GET, PUT'], \$exception->getHeaders());
    }

    public function testWithHeaderConstruct()
    {
        \$headers = [
            'Cache-Control' => 'public, s-maxage=1200',
        ];

        \$exception = new MethodNotAllowedHttpException(['get'], null, null, null, \$headers);

        \$headers['Allow'] = 'GET';

        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter(\$headers)
    {
        \$exception = new MethodNotAllowedHttpException(['GET']);
        \$exception->setHeaders(\$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new MethodNotAllowedHttpException(['get'], \$message, \$previous, \$code, \$headers);
    }
}
", "vendor/symfony/http-kernel/Tests/Exception/MethodNotAllowedHttpExceptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Exception/MethodNotAllowedHttpExceptionTest.php");
    }
}
