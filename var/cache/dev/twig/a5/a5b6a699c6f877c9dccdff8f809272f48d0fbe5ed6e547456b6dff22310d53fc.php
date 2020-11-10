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

/* vendor/symfony/security-http/Tests/EntryPoint/RetryAuthenticationEntryPointTest.php */
class __TwigTemplate_b6917a8ec8a16ec599eacc8c1c8bf6050e3bd1c6546f0f4b957e252edc35ecc1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/EntryPoint/RetryAuthenticationEntryPointTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/EntryPoint/RetryAuthenticationEntryPointTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\EntryPoint;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint;

class RetryAuthenticationEntryPointTest extends TestCase
{
    /**
     * @dataProvider dataForStart
     */
    public function testStart(\$httpPort, \$httpsPort, \$request, \$expectedUrl)
    {
        \$entryPoint = new RetryAuthenticationEntryPoint(\$httpPort, \$httpsPort);
        \$response = \$entryPoint->start(\$request);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\RedirectResponse', \$response);
        \$this->assertEquals(\$expectedUrl, \$response->headers->get('Location'));
    }

    public function dataForStart()
    {
        if (!class_exists('Symfony\\Component\\HttpFoundation\\Request')) {
            return [[]];
        }

        return [
            [
                80,
                443,
                Request::create('http://localhost/foo/bar?baz=bat'),
                'https://localhost/foo/bar?baz=bat',
            ],
            [
                80,
                443,
                Request::create('https://localhost/foo/bar?baz=bat'),
                'http://localhost/foo/bar?baz=bat',
            ],
            [
                80,
                123,
                Request::create('http://localhost/foo/bar?baz=bat'),
                'https://localhost:123/foo/bar?baz=bat',
            ],
            [
                8080,
                443,
                Request::create('https://localhost/foo/bar?baz=bat'),
                'http://localhost:8080/foo/bar?baz=bat',
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
        return "vendor/symfony/security-http/Tests/EntryPoint/RetryAuthenticationEntryPointTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\EntryPoint;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint;

class RetryAuthenticationEntryPointTest extends TestCase
{
    /**
     * @dataProvider dataForStart
     */
    public function testStart(\$httpPort, \$httpsPort, \$request, \$expectedUrl)
    {
        \$entryPoint = new RetryAuthenticationEntryPoint(\$httpPort, \$httpsPort);
        \$response = \$entryPoint->start(\$request);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\RedirectResponse', \$response);
        \$this->assertEquals(\$expectedUrl, \$response->headers->get('Location'));
    }

    public function dataForStart()
    {
        if (!class_exists('Symfony\\Component\\HttpFoundation\\Request')) {
            return [[]];
        }

        return [
            [
                80,
                443,
                Request::create('http://localhost/foo/bar?baz=bat'),
                'https://localhost/foo/bar?baz=bat',
            ],
            [
                80,
                443,
                Request::create('https://localhost/foo/bar?baz=bat'),
                'http://localhost/foo/bar?baz=bat',
            ],
            [
                80,
                123,
                Request::create('http://localhost/foo/bar?baz=bat'),
                'https://localhost:123/foo/bar?baz=bat',
            ],
            [
                8080,
                443,
                Request::create('https://localhost/foo/bar?baz=bat'),
                'http://localhost:8080/foo/bar?baz=bat',
            ],
        ];
    }
}
", "vendor/symfony/security-http/Tests/EntryPoint/RetryAuthenticationEntryPointTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/EntryPoint/RetryAuthenticationEntryPointTest.php");
    }
}
