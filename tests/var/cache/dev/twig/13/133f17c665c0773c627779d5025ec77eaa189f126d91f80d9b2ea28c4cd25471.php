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

/* vendor/symfony/browser-kit/Tests/RequestTest.php */
class __TwigTemplate_8305b9c5a22c34d93dc4c605de96677febedd07d9f3d8a9043e5af9b89ede2a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/RequestTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/RequestTest.php"));

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

namespace Symfony\\Component\\BrowserKit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\Request;

class RequestTest extends TestCase
{
    public function testGetUri()
    {
        \$request = new Request('http://www.example.com/', 'get');
        \$this->assertEquals('http://www.example.com/', \$request->getUri(), '->getUri() returns the URI of the request');
    }

    public function testGetMethod()
    {
        \$request = new Request('http://www.example.com/', 'get');
        \$this->assertEquals('get', \$request->getMethod(), '->getMethod() returns the method of the request');
    }

    public function testGetParameters()
    {
        \$request = new Request('http://www.example.com/', 'get', ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getParameters(), '->getParameters() returns the parameters of the request');
    }

    public function testGetFiles()
    {
        \$request = new Request('http://www.example.com/', 'get', [], ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getFiles(), '->getFiles() returns the uploaded files of the request');
    }

    public function testGetCookies()
    {
        \$request = new Request('http://www.example.com/', 'get', [], [], ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getCookies(), '->getCookies() returns the cookies of the request');
    }

    public function testGetServer()
    {
        \$request = new Request('http://www.example.com/', 'get', [], [], [], ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getServer(), '->getServer() returns the server parameters of the request');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/RequestTest.php";
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

namespace Symfony\\Component\\BrowserKit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\Request;

class RequestTest extends TestCase
{
    public function testGetUri()
    {
        \$request = new Request('http://www.example.com/', 'get');
        \$this->assertEquals('http://www.example.com/', \$request->getUri(), '->getUri() returns the URI of the request');
    }

    public function testGetMethod()
    {
        \$request = new Request('http://www.example.com/', 'get');
        \$this->assertEquals('get', \$request->getMethod(), '->getMethod() returns the method of the request');
    }

    public function testGetParameters()
    {
        \$request = new Request('http://www.example.com/', 'get', ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getParameters(), '->getParameters() returns the parameters of the request');
    }

    public function testGetFiles()
    {
        \$request = new Request('http://www.example.com/', 'get', [], ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getFiles(), '->getFiles() returns the uploaded files of the request');
    }

    public function testGetCookies()
    {
        \$request = new Request('http://www.example.com/', 'get', [], [], ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getCookies(), '->getCookies() returns the cookies of the request');
    }

    public function testGetServer()
    {
        \$request = new Request('http://www.example.com/', 'get', [], [], [], ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$request->getServer(), '->getServer() returns the server parameters of the request');
    }
}
", "vendor/symfony/browser-kit/Tests/RequestTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/RequestTest.php");
    }
}
