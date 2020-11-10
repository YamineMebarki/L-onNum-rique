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

/* vendor/symfony/http-kernel/Tests/Exception/HttpExceptionTest.php */
class __TwigTemplate_9ace9fc14e01030c1759205d5e064dac6b15019660be035a26ecec98d5958fd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/HttpExceptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Exception/HttpExceptionTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

class HttpExceptionTest extends TestCase
{
    public function headerDataProvider()
    {
        return [
            [['X-DevLaon' => 'DevLaon']],
            [['X-DevLaon' => 1]],
            [
                [
                    ['X-DevLaon' => 'DevLaon'],
                    ['X-DevLaon-2' => 'DevLaon-2'],
                ],
            ],
        ];
    }

    public function testHeadersDefault()
    {
        \$exception = \$this->createException();
        \$this->assertSame([], \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersConstructor(\$headers)
    {
        \$exception = new HttpException(200, null, null, \$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter(\$headers)
    {
        \$exception = \$this->createException();
        \$exception->setHeaders(\$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    public function testThrowableIsAllowedForPrevious()
    {
        \$previous = new class('Error of PHP 7+') extends \\Error {
        };
        \$exception = \$this->createException(null, \$previous);
        \$this->assertSame(\$previous, \$exception->getPrevious());
    }

    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new HttpException(200, \$message, \$previous, \$headers, \$code);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Exception/HttpExceptionTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\HttpKernel\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

class HttpExceptionTest extends TestCase
{
    public function headerDataProvider()
    {
        return [
            [['X-DevLaon' => 'DevLaon']],
            [['X-DevLaon' => 1]],
            [
                [
                    ['X-DevLaon' => 'DevLaon'],
                    ['X-DevLaon-2' => 'DevLaon-2'],
                ],
            ],
        ];
    }

    public function testHeadersDefault()
    {
        \$exception = \$this->createException();
        \$this->assertSame([], \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersConstructor(\$headers)
    {
        \$exception = new HttpException(200, null, null, \$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter(\$headers)
    {
        \$exception = \$this->createException();
        \$exception->setHeaders(\$headers);
        \$this->assertSame(\$headers, \$exception->getHeaders());
    }

    public function testThrowableIsAllowedForPrevious()
    {
        \$previous = new class('Error of PHP 7+') extends \\Error {
        };
        \$exception = \$this->createException(null, \$previous);
        \$this->assertSame(\$previous, \$exception->getPrevious());
    }

    protected function createException(string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        return new HttpException(200, \$message, \$previous, \$headers, \$code);
    }
}
", "vendor/symfony/http-kernel/Tests/Exception/HttpExceptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Exception/HttpExceptionTest.php");
    }
}
