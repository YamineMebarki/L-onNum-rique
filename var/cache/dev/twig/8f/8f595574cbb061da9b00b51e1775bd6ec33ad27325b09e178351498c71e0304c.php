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

/* vendor/symfony/security-http/Tests/EntryPoint/FormAuthenticationEntryPointTest.php */
class __TwigTemplate_df82e680df7f0282052c1f76cc712da73a05af422c7cb873c8adfc743802c198 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/EntryPoint/FormAuthenticationEntryPointTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/EntryPoint/FormAuthenticationEntryPointTest.php"));

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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint;

class FormAuthenticationEntryPointTest extends TestCase
{
    public function testStart()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$response = new RedirectResponse('/the/login/path');

        \$httpKernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils
            ->expects(\$this->once())
            ->method('createRedirectResponse')
            ->with(\$this->equalTo(\$request), \$this->equalTo('/the/login/path'))
            ->willReturn(\$response)
        ;

        \$entryPoint = new FormAuthenticationEntryPoint(\$httpKernel, \$httpUtils, '/the/login/path', false);

        \$this->assertEquals(\$response, \$entryPoint->start(\$request));
    }

    public function testStartWithUseForward()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$subRequest = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$response = new Response('', 200);

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils
            ->expects(\$this->once())
            ->method('createRequest')
            ->with(\$this->equalTo(\$request), \$this->equalTo('/the/login/path'))
            ->willReturn(\$subRequest)
        ;

        \$httpKernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$httpKernel
            ->expects(\$this->once())
            ->method('handle')
            ->with(\$this->equalTo(\$subRequest), \$this->equalTo(HttpKernelInterface::SUB_REQUEST))
            ->willReturn(\$response)
        ;

        \$entryPoint = new FormAuthenticationEntryPoint(\$httpKernel, \$httpUtils, '/the/login/path', true);

        \$entryPointResponse = \$entryPoint->start(\$request);

        \$this->assertEquals(\$response, \$entryPointResponse);
        \$this->assertEquals(401, \$entryPointResponse->getStatusCode());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/EntryPoint/FormAuthenticationEntryPointTest.php";
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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint;

class FormAuthenticationEntryPointTest extends TestCase
{
    public function testStart()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$response = new RedirectResponse('/the/login/path');

        \$httpKernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils
            ->expects(\$this->once())
            ->method('createRedirectResponse')
            ->with(\$this->equalTo(\$request), \$this->equalTo('/the/login/path'))
            ->willReturn(\$response)
        ;

        \$entryPoint = new FormAuthenticationEntryPoint(\$httpKernel, \$httpUtils, '/the/login/path', false);

        \$this->assertEquals(\$response, \$entryPoint->start(\$request));
    }

    public function testStartWithUseForward()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$subRequest = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$response = new Response('', 200);

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils
            ->expects(\$this->once())
            ->method('createRequest')
            ->with(\$this->equalTo(\$request), \$this->equalTo('/the/login/path'))
            ->willReturn(\$subRequest)
        ;

        \$httpKernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$httpKernel
            ->expects(\$this->once())
            ->method('handle')
            ->with(\$this->equalTo(\$subRequest), \$this->equalTo(HttpKernelInterface::SUB_REQUEST))
            ->willReturn(\$response)
        ;

        \$entryPoint = new FormAuthenticationEntryPoint(\$httpKernel, \$httpUtils, '/the/login/path', true);

        \$entryPointResponse = \$entryPoint->start(\$request);

        \$this->assertEquals(\$response, \$entryPointResponse);
        \$this->assertEquals(401, \$entryPointResponse->getStatusCode());
    }
}
", "vendor/symfony/security-http/Tests/EntryPoint/FormAuthenticationEntryPointTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/EntryPoint/FormAuthenticationEntryPointTest.php");
    }
}
