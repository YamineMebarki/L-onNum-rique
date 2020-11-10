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

/* vendor/symfony/asset/Tests/Context/RequestStackContextTest.php */
class __TwigTemplate_52a4dcac0595aae554f0808ad344c01f6c8152e0c47d7e475eec57a9b7b070a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/Context/RequestStackContextTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/Context/RequestStackContextTest.php"));

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

namespace Symfony\\Component\\Asset\\Tests\\Context;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\Context\\RequestStackContext;

class RequestStackContextTest extends TestCase
{
    public function testGetBasePathEmpty()
    {
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertEmpty(\$requestStackContext->getBasePath());
    }

    public function testGetBasePathSet()
    {
        \$testBasePath = 'test-path';

        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('getBasePath')
            ->willReturn(\$testBasePath);
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStack->method('getMasterRequest')
            ->willReturn(\$request);

        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertEquals(\$testBasePath, \$requestStackContext->getBasePath());
    }

    public function testIsSecureFalse()
    {
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertFalse(\$requestStackContext->isSecure());
    }

    public function testIsSecureTrue()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('isSecure')
            ->willReturn(true);
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStack->method('getMasterRequest')
            ->willReturn(\$request);

        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertTrue(\$requestStackContext->isSecure());
    }

    public function testDefaultContext()
    {
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackContext = new RequestStackContext(\$requestStack, 'default-path', true);

        \$this->assertSame('default-path', \$requestStackContext->getBasePath());
        \$this->assertTrue(\$requestStackContext->isSecure());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Tests/Context/RequestStackContextTest.php";
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

namespace Symfony\\Component\\Asset\\Tests\\Context;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\Context\\RequestStackContext;

class RequestStackContextTest extends TestCase
{
    public function testGetBasePathEmpty()
    {
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertEmpty(\$requestStackContext->getBasePath());
    }

    public function testGetBasePathSet()
    {
        \$testBasePath = 'test-path';

        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('getBasePath')
            ->willReturn(\$testBasePath);
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStack->method('getMasterRequest')
            ->willReturn(\$request);

        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertEquals(\$testBasePath, \$requestStackContext->getBasePath());
    }

    public function testIsSecureFalse()
    {
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertFalse(\$requestStackContext->isSecure());
    }

    public function testIsSecureTrue()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->method('isSecure')
            ->willReturn(true);
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStack->method('getMasterRequest')
            ->willReturn(\$request);

        \$requestStackContext = new RequestStackContext(\$requestStack);

        \$this->assertTrue(\$requestStackContext->isSecure());
    }

    public function testDefaultContext()
    {
        \$requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->getMock();
        \$requestStackContext = new RequestStackContext(\$requestStack, 'default-path', true);

        \$this->assertSame('default-path', \$requestStackContext->getBasePath());
        \$this->assertTrue(\$requestStackContext->isSecure());
    }
}
", "vendor/symfony/asset/Tests/Context/RequestStackContextTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Tests/Context/RequestStackContextTest.php");
    }
}
