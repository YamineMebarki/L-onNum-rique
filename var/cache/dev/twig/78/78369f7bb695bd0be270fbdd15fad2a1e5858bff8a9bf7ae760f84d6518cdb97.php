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

/* vendor/symfony/twig-bundle/Tests/Controller/ExceptionControllerTest.php */
class __TwigTemplate_b84d4024b7f06fb349ded87785a5a658571ac7bd7395d8f62ea96b6df0a43d86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Controller/ExceptionControllerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Controller/ExceptionControllerTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Controller;

use Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class ExceptionControllerTest extends TestCase
{
    public function testShowActionCanBeForcedToShowErrorPage()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/error404.html.twig' => '<html>not found</html>']);

        \$request = \$this->createRequest('html');
        \$request->attributes->set('showException', false);
        \$exception = FlattenException::create(new \\Exception(), 404);
        \$controller = new ExceptionController(\$twig, /* \"showException\" defaults to --> */ true);

        \$response = \$controller->showAction(\$request, \$exception, null);

        \$this->assertEquals(200, \$response->getStatusCode()); // successful request
        \$this->assertEquals('<html>not found</html>', \$response->getContent());
    }

    public function testFallbackToHtmlIfNoTemplateForRequestedFormat()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/error.html.twig' => '<html></html>']);

        \$request = \$this->createRequest('txt');
        \$exception = FlattenException::create(new \\Exception());
        \$controller = new ExceptionController(\$twig, false);

        \$controller->showAction(\$request, \$exception);

        \$this->assertEquals('html', \$request->getRequestFormat());
    }

    public function testFallbackToHtmlWithFullExceptionIfNoTemplateForRequestedFormatAndExceptionsShouldBeShown()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/exception_full.html.twig' => '<html></html>']);

        \$request = \$this->createRequest('txt');
        \$request->attributes->set('showException', true);
        \$exception = FlattenException::create(new \\Exception());
        \$controller = new ExceptionController(\$twig, false);

        \$controller->showAction(\$request, \$exception);

        \$this->assertEquals('html', \$request->getRequestFormat());
    }

    public function testResponseHasRequestedMimeType()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/error.json.twig' => '{}']);

        \$request = \$this->createRequest('json');
        \$exception = FlattenException::create(new \\Exception());
        \$controller = new ExceptionController(\$twig, false);

        \$response = \$controller->showAction(\$request, \$exception);

        \$this->assertEquals('json', \$request->getRequestFormat());
        \$this->assertEquals(\$request->getMimeType('json'), \$response->headers->get('Content-Type'));
    }

    private function createRequest(\$requestFormat)
    {
        \$request = Request::create('whatever');
        \$request->headers->set('X-Php-Ob-Level', 1);
        \$request->setRequestFormat(\$requestFormat);

        return \$request;
    }

    private function createTwigEnv(array \$templates)
    {
        return new Environment(new ArrayLoader(\$templates));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/Controller/ExceptionControllerTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Controller;

use Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class ExceptionControllerTest extends TestCase
{
    public function testShowActionCanBeForcedToShowErrorPage()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/error404.html.twig' => '<html>not found</html>']);

        \$request = \$this->createRequest('html');
        \$request->attributes->set('showException', false);
        \$exception = FlattenException::create(new \\Exception(), 404);
        \$controller = new ExceptionController(\$twig, /* \"showException\" defaults to --> */ true);

        \$response = \$controller->showAction(\$request, \$exception, null);

        \$this->assertEquals(200, \$response->getStatusCode()); // successful request
        \$this->assertEquals('<html>not found</html>', \$response->getContent());
    }

    public function testFallbackToHtmlIfNoTemplateForRequestedFormat()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/error.html.twig' => '<html></html>']);

        \$request = \$this->createRequest('txt');
        \$exception = FlattenException::create(new \\Exception());
        \$controller = new ExceptionController(\$twig, false);

        \$controller->showAction(\$request, \$exception);

        \$this->assertEquals('html', \$request->getRequestFormat());
    }

    public function testFallbackToHtmlWithFullExceptionIfNoTemplateForRequestedFormatAndExceptionsShouldBeShown()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/exception_full.html.twig' => '<html></html>']);

        \$request = \$this->createRequest('txt');
        \$request->attributes->set('showException', true);
        \$exception = FlattenException::create(new \\Exception());
        \$controller = new ExceptionController(\$twig, false);

        \$controller->showAction(\$request, \$exception);

        \$this->assertEquals('html', \$request->getRequestFormat());
    }

    public function testResponseHasRequestedMimeType()
    {
        \$twig = \$this->createTwigEnv(['@Twig/Exception/error.json.twig' => '{}']);

        \$request = \$this->createRequest('json');
        \$exception = FlattenException::create(new \\Exception());
        \$controller = new ExceptionController(\$twig, false);

        \$response = \$controller->showAction(\$request, \$exception);

        \$this->assertEquals('json', \$request->getRequestFormat());
        \$this->assertEquals(\$request->getMimeType('json'), \$response->headers->get('Content-Type'));
    }

    private function createRequest(\$requestFormat)
    {
        \$request = Request::create('whatever');
        \$request->headers->set('X-Php-Ob-Level', 1);
        \$request->setRequestFormat(\$requestFormat);

        return \$request;
    }

    private function createTwigEnv(array \$templates)
    {
        return new Environment(new ArrayLoader(\$templates));
    }
}
", "vendor/symfony/twig-bundle/Tests/Controller/ExceptionControllerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/Controller/ExceptionControllerTest.php");
    }
}
