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

/* vendor/symfony/debug/Tests/ExceptionHandlerTest.php */
class __TwigTemplate_972734653639f6a6ba3ec684242e5fbdcbd9838194b1505af1691ed5c779d753 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/ExceptionHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/ExceptionHandlerTest.php"));

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

namespace Symfony\\Component\\Debug\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\Exception\\OutOfMemoryException;
use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

require_once __DIR__.'/HeaderMock.php';

class ExceptionHandlerTest extends TestCase
{
    protected function setUp(): void
    {
        testHeader();
    }

    protected function tearDown(): void
    {
        testHeader();
    }

    public function testDebug()
    {
        \$handler = new ExceptionHandler(false);

        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException('Foo'));
        \$response = ob_get_clean();

        \$this->assertStringContainsString('Whoops, looks like something went wrong.', \$response);
        \$this->assertStringNotContainsString('<div class=\"trace trace-as-html\">', \$response);

        \$handler = new ExceptionHandler(true);

        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException('Foo'));
        \$response = ob_get_clean();

        \$this->assertStringContainsString('<h1 class=\"break-long-words exception-message\">Foo</h1>', \$response);
        \$this->assertStringContainsString('<div class=\"trace trace-as-html\">', \$response);

        // taken from https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)
        \$htmlWithXss = '<body onload=alert(\\'test1\\')> <b onmouseover=alert(\\'Wufff!\\')>click me!</b> <img src=\"j&#X41vascript:alert(\\'test2\\')\"> <meta http-equiv=\"refresh\"
content=\"0;url=data:text/html;base64,PHNjcmlwdD5hbGVydCgndGVzdDMnKTwvc2NyaXB0Pg\">';
        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException(\$htmlWithXss));
        \$response = ob_get_clean();

        \$this->assertStringContainsString(sprintf('<h1 class=\"break-long-words exception-message\">%s</h1>', htmlspecialchars(\$htmlWithXss, ENT_COMPAT | ENT_SUBSTITUTE, 'UTF-8')), \$response);
    }

    public function testStatusCode()
    {
        \$handler = new ExceptionHandler(false, 'iso8859-1');

        ob_start();
        \$handler->sendPhpResponse(new NotFoundHttpException('Foo'));
        \$response = ob_get_clean();

        \$this->assertStringContainsString('Sorry, the page you are looking for could not be found.', \$response);

        \$expectedHeaders = [
            ['HTTP/1.0 404', true, null],
            ['Content-Type: text/html; charset=iso8859-1', true, null],
        ];

        \$this->assertSame(\$expectedHeaders, testHeader());
    }

    public function testHeaders()
    {
        \$handler = new ExceptionHandler(false, 'iso8859-1');

        ob_start();
        \$handler->sendPhpResponse(new MethodNotAllowedHttpException(['POST']));
        ob_get_clean();

        \$expectedHeaders = [
            ['HTTP/1.0 405', true, null],
            ['Allow: POST', false, null],
            ['Content-Type: text/html; charset=iso8859-1', true, null],
        ];

        \$this->assertSame(\$expectedHeaders, testHeader());
    }

    public function testNestedExceptions()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException('Foo', 0, new \\RuntimeException('Bar')));
        \$response = ob_get_clean();

        \$this->assertStringMatchesFormat('%A<p class=\"break-long-words trace-message\">Foo</p>%A<p class=\"break-long-words trace-message\">Bar</p>%A', \$response);
    }

    public function testHandle()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();

        \$handler->handle(new \\Exception('foo'));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), \\Exception::class, 'Exception', 'foo');
    }

    public function testHandleWithACustomHandlerThatOutputsSomething()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();
        \$handler->setHandler(function () {
            echo 'ccc';
        });

        \$handler->handle(new \\Exception());
        ob_end_flush(); // Necessary because of this PHP bug : https://bugs.php.net/76563
        \$this->assertSame('ccc', ob_get_clean());
    }

    public function testHandleWithACustomHandlerThatOutputsNothing()
    {
        \$handler = new ExceptionHandler(true);
        \$handler->setHandler(function () {});

        \$handler->handle(new \\Exception('ccc'));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), \\Exception::class, 'Exception', 'ccc');
    }

    public function testHandleWithACustomHandlerThatFails()
    {
        \$handler = new ExceptionHandler(true);
        \$handler->setHandler(function () {
            throw new \\RuntimeException();
        });

        \$handler->handle(new \\Exception('ccc'));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), \\Exception::class, 'Exception', 'ccc');
    }

    public function testHandleOutOfMemoryException()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();
        \$handler->setHandler(function () {
            \$this->fail('OutOfMemoryException should bypass the handler');
        });

        \$handler->handle(new OutOfMemoryException('foo', 0, E_ERROR, __FILE__, __LINE__));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), OutOfMemoryException::class, 'OutOfMemoryException', 'foo');
    }

    private function assertThatTheExceptionWasOutput(\$content, \$expectedClass, \$expectedTitle, \$expectedMessage)
    {
        \$this->assertStringContainsString(sprintf('<span class=\"exception_title\"><abbr title=\"%s\">%s</abbr></span>', \$expectedClass, \$expectedTitle), \$content);
        \$this->assertStringContainsString(sprintf('<p class=\"break-long-words trace-message\">%s</p>', \$expectedMessage), \$content);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/ExceptionHandlerTest.php";
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

namespace Symfony\\Component\\Debug\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\Exception\\OutOfMemoryException;
use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

require_once __DIR__.'/HeaderMock.php';

class ExceptionHandlerTest extends TestCase
{
    protected function setUp(): void
    {
        testHeader();
    }

    protected function tearDown(): void
    {
        testHeader();
    }

    public function testDebug()
    {
        \$handler = new ExceptionHandler(false);

        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException('Foo'));
        \$response = ob_get_clean();

        \$this->assertStringContainsString('Whoops, looks like something went wrong.', \$response);
        \$this->assertStringNotContainsString('<div class=\"trace trace-as-html\">', \$response);

        \$handler = new ExceptionHandler(true);

        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException('Foo'));
        \$response = ob_get_clean();

        \$this->assertStringContainsString('<h1 class=\"break-long-words exception-message\">Foo</h1>', \$response);
        \$this->assertStringContainsString('<div class=\"trace trace-as-html\">', \$response);

        // taken from https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)
        \$htmlWithXss = '<body onload=alert(\\'test1\\')> <b onmouseover=alert(\\'Wufff!\\')>click me!</b> <img src=\"j&#X41vascript:alert(\\'test2\\')\"> <meta http-equiv=\"refresh\"
content=\"0;url=data:text/html;base64,PHNjcmlwdD5hbGVydCgndGVzdDMnKTwvc2NyaXB0Pg\">';
        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException(\$htmlWithXss));
        \$response = ob_get_clean();

        \$this->assertStringContainsString(sprintf('<h1 class=\"break-long-words exception-message\">%s</h1>', htmlspecialchars(\$htmlWithXss, ENT_COMPAT | ENT_SUBSTITUTE, 'UTF-8')), \$response);
    }

    public function testStatusCode()
    {
        \$handler = new ExceptionHandler(false, 'iso8859-1');

        ob_start();
        \$handler->sendPhpResponse(new NotFoundHttpException('Foo'));
        \$response = ob_get_clean();

        \$this->assertStringContainsString('Sorry, the page you are looking for could not be found.', \$response);

        \$expectedHeaders = [
            ['HTTP/1.0 404', true, null],
            ['Content-Type: text/html; charset=iso8859-1', true, null],
        ];

        \$this->assertSame(\$expectedHeaders, testHeader());
    }

    public function testHeaders()
    {
        \$handler = new ExceptionHandler(false, 'iso8859-1');

        ob_start();
        \$handler->sendPhpResponse(new MethodNotAllowedHttpException(['POST']));
        ob_get_clean();

        \$expectedHeaders = [
            ['HTTP/1.0 405', true, null],
            ['Allow: POST', false, null],
            ['Content-Type: text/html; charset=iso8859-1', true, null],
        ];

        \$this->assertSame(\$expectedHeaders, testHeader());
    }

    public function testNestedExceptions()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();
        \$handler->sendPhpResponse(new \\RuntimeException('Foo', 0, new \\RuntimeException('Bar')));
        \$response = ob_get_clean();

        \$this->assertStringMatchesFormat('%A<p class=\"break-long-words trace-message\">Foo</p>%A<p class=\"break-long-words trace-message\">Bar</p>%A', \$response);
    }

    public function testHandle()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();

        \$handler->handle(new \\Exception('foo'));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), \\Exception::class, 'Exception', 'foo');
    }

    public function testHandleWithACustomHandlerThatOutputsSomething()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();
        \$handler->setHandler(function () {
            echo 'ccc';
        });

        \$handler->handle(new \\Exception());
        ob_end_flush(); // Necessary because of this PHP bug : https://bugs.php.net/76563
        \$this->assertSame('ccc', ob_get_clean());
    }

    public function testHandleWithACustomHandlerThatOutputsNothing()
    {
        \$handler = new ExceptionHandler(true);
        \$handler->setHandler(function () {});

        \$handler->handle(new \\Exception('ccc'));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), \\Exception::class, 'Exception', 'ccc');
    }

    public function testHandleWithACustomHandlerThatFails()
    {
        \$handler = new ExceptionHandler(true);
        \$handler->setHandler(function () {
            throw new \\RuntimeException();
        });

        \$handler->handle(new \\Exception('ccc'));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), \\Exception::class, 'Exception', 'ccc');
    }

    public function testHandleOutOfMemoryException()
    {
        \$handler = new ExceptionHandler(true);
        ob_start();
        \$handler->setHandler(function () {
            \$this->fail('OutOfMemoryException should bypass the handler');
        });

        \$handler->handle(new OutOfMemoryException('foo', 0, E_ERROR, __FILE__, __LINE__));

        \$this->assertThatTheExceptionWasOutput(ob_get_clean(), OutOfMemoryException::class, 'OutOfMemoryException', 'foo');
    }

    private function assertThatTheExceptionWasOutput(\$content, \$expectedClass, \$expectedTitle, \$expectedMessage)
    {
        \$this->assertStringContainsString(sprintf('<span class=\"exception_title\"><abbr title=\"%s\">%s</abbr></span>', \$expectedClass, \$expectedTitle), \$content);
        \$this->assertStringContainsString(sprintf('<p class=\"break-long-words trace-message\">%s</p>', \$expectedMessage), \$content);
    }
}
", "vendor/symfony/debug/Tests/ExceptionHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/ExceptionHandlerTest.php");
    }
}
