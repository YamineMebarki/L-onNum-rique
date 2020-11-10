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

/* vendor/symfony/http-foundation/Tests/ApacheRequestTest.php */
class __TwigTemplate_49f5170eeff475b94f5abe682cd65fe7dabea6004867744e2cc3bb1be1df94ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ApacheRequestTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ApacheRequestTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ApacheRequest;

class ApacheRequestTest extends TestCase
{
    /**
     * @dataProvider provideServerVars
     */
    public function testUriMethods(\$server, \$expectedRequestUri, \$expectedBaseUrl, \$expectedPathInfo)
    {
        \$request = new ApacheRequest();
        \$request->server->replace(\$server);

        \$this->assertEquals(\$expectedRequestUri, \$request->getRequestUri(), '->getRequestUri() is correct');
        \$this->assertEquals(\$expectedBaseUrl, \$request->getBaseUrl(), '->getBaseUrl() is correct');
        \$this->assertEquals(\$expectedPathInfo, \$request->getPathInfo(), '->getPathInfo() is correct');
    }

    public function provideServerVars()
    {
        return [
            [
                [
                    'REQUEST_URI' => '/foo/app_dev.php/bar',
                    'SCRIPT_NAME' => '/foo/app_dev.php',
                    'PATH_INFO' => '/bar',
                ],
                '/foo/app_dev.php/bar',
                '/foo/app_dev.php',
                '/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/foo/bar',
                    'SCRIPT_NAME' => '/foo/app_dev.php',
                ],
                '/foo/bar',
                '/foo',
                '/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/app_dev.php/foo/bar',
                    'SCRIPT_NAME' => '/app_dev.php',
                    'PATH_INFO' => '/foo/bar',
                ],
                '/app_dev.php/foo/bar',
                '/app_dev.php',
                '/foo/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/foo/bar',
                    'SCRIPT_NAME' => '/app_dev.php',
                ],
                '/foo/bar',
                '',
                '/foo/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/app_dev.php',
                    'SCRIPT_NAME' => '/app_dev.php',
                ],
                '/app_dev.php',
                '/app_dev.php',
                '/',
            ],
            [
                [
                    'REQUEST_URI' => '/',
                    'SCRIPT_NAME' => '/app_dev.php',
                ],
                '/',
                '',
                '/',
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/ApacheRequestTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ApacheRequest;

class ApacheRequestTest extends TestCase
{
    /**
     * @dataProvider provideServerVars
     */
    public function testUriMethods(\$server, \$expectedRequestUri, \$expectedBaseUrl, \$expectedPathInfo)
    {
        \$request = new ApacheRequest();
        \$request->server->replace(\$server);

        \$this->assertEquals(\$expectedRequestUri, \$request->getRequestUri(), '->getRequestUri() is correct');
        \$this->assertEquals(\$expectedBaseUrl, \$request->getBaseUrl(), '->getBaseUrl() is correct');
        \$this->assertEquals(\$expectedPathInfo, \$request->getPathInfo(), '->getPathInfo() is correct');
    }

    public function provideServerVars()
    {
        return [
            [
                [
                    'REQUEST_URI' => '/foo/app_dev.php/bar',
                    'SCRIPT_NAME' => '/foo/app_dev.php',
                    'PATH_INFO' => '/bar',
                ],
                '/foo/app_dev.php/bar',
                '/foo/app_dev.php',
                '/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/foo/bar',
                    'SCRIPT_NAME' => '/foo/app_dev.php',
                ],
                '/foo/bar',
                '/foo',
                '/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/app_dev.php/foo/bar',
                    'SCRIPT_NAME' => '/app_dev.php',
                    'PATH_INFO' => '/foo/bar',
                ],
                '/app_dev.php/foo/bar',
                '/app_dev.php',
                '/foo/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/foo/bar',
                    'SCRIPT_NAME' => '/app_dev.php',
                ],
                '/foo/bar',
                '',
                '/foo/bar',
            ],
            [
                [
                    'REQUEST_URI' => '/app_dev.php',
                    'SCRIPT_NAME' => '/app_dev.php',
                ],
                '/app_dev.php',
                '/app_dev.php',
                '/',
            ],
            [
                [
                    'REQUEST_URI' => '/',
                    'SCRIPT_NAME' => '/app_dev.php',
                ],
                '/',
                '',
                '/',
            ],
        ];
    }
}
", "vendor/symfony/http-foundation/Tests/ApacheRequestTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/ApacheRequestTest.php");
    }
}
