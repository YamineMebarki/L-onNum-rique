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

/* vendor/symfony/form/Tests/Extension/HttpFoundation/HttpFoundationRequestHandlerTest.php */
class __TwigTemplate_46f9164b7a316a9506dd3cc3e92b9cdb1c5becc502c2c33df7cbbff990f549be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/HttpFoundation/HttpFoundationRequestHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/HttpFoundation/HttpFoundationRequestHandlerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\HttpFoundation;

use Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler;
use Symfony\\Component\\Form\\Tests\\AbstractRequestHandlerTest;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class HttpFoundationRequestHandlerTest extends AbstractRequestHandlerTest
{
    public function testRequestShouldNotBeNull()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$this->requestHandler->handleRequest(\$this->createForm('name', 'GET'));
    }

    public function testRequestShouldBeInstanceOfRequest()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$this->requestHandler->handleRequest(\$this->createForm('name', 'GET'), new \\stdClass());
    }

    protected function setRequestData(\$method, \$data, \$files = [])
    {
        \$this->request = Request::create('http://localhost', \$method, \$data, [], \$files);
    }

    protected function getRequestHandler()
    {
        return new HttpFoundationRequestHandler(\$this->serverParams);
    }

    protected function getUploadedFile(\$suffix = '')
    {
        return new UploadedFile(__DIR__.'/../../Fixtures/foo'.\$suffix, 'foo'.\$suffix);
    }

    protected function getInvalidFile()
    {
        return 'file:///etc/passwd';
    }

    protected function getFailedUploadedFile(\$errorCode)
    {
        \$class = new \\ReflectionClass(UploadedFile::class);

        if (5 === \$class->getConstructor()->getNumberOfParameters()) {
            return new UploadedFile(__DIR__.'/../../Fixtures/foo', 'foo', null, \$errorCode, true);
        }

        return new UploadedFile(__DIR__.'/../../Fixtures/foo', 'foo', null, null, \$errorCode, true);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/HttpFoundation/HttpFoundationRequestHandlerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\HttpFoundation;

use Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler;
use Symfony\\Component\\Form\\Tests\\AbstractRequestHandlerTest;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class HttpFoundationRequestHandlerTest extends AbstractRequestHandlerTest
{
    public function testRequestShouldNotBeNull()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$this->requestHandler->handleRequest(\$this->createForm('name', 'GET'));
    }

    public function testRequestShouldBeInstanceOfRequest()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$this->requestHandler->handleRequest(\$this->createForm('name', 'GET'), new \\stdClass());
    }

    protected function setRequestData(\$method, \$data, \$files = [])
    {
        \$this->request = Request::create('http://localhost', \$method, \$data, [], \$files);
    }

    protected function getRequestHandler()
    {
        return new HttpFoundationRequestHandler(\$this->serverParams);
    }

    protected function getUploadedFile(\$suffix = '')
    {
        return new UploadedFile(__DIR__.'/../../Fixtures/foo'.\$suffix, 'foo'.\$suffix);
    }

    protected function getInvalidFile()
    {
        return 'file:///etc/passwd';
    }

    protected function getFailedUploadedFile(\$errorCode)
    {
        \$class = new \\ReflectionClass(UploadedFile::class);

        if (5 === \$class->getConstructor()->getNumberOfParameters()) {
            return new UploadedFile(__DIR__.'/../../Fixtures/foo', 'foo', null, \$errorCode, true);
        }

        return new UploadedFile(__DIR__.'/../../Fixtures/foo', 'foo', null, null, \$errorCode, true);
    }
}
", "vendor/symfony/form/Tests/Extension/HttpFoundation/HttpFoundationRequestHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/HttpFoundation/HttpFoundationRequestHandlerTest.php");
    }
}
