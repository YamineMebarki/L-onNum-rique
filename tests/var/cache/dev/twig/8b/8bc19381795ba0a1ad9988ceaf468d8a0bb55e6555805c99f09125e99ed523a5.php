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

/* vendor/symfony/twig-bundle/Tests/Controller/PreviewErrorControllerTest.php */
class __TwigTemplate_7ba5c0084f995c3ac1b5af10260f63e844b99780a91dee105f56b92dbb4205be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Controller/PreviewErrorControllerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Controller/PreviewErrorControllerTest.php"));

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

use Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class PreviewErrorControllerTest extends TestCase
{
    public function testForwardRequestToConfiguredController()
    {
        \$request = Request::create('whatever');
        \$response = new Response('');
        \$code = 123;
        \$logicalControllerName = 'foo:bar:baz';

        \$kernel = \$this->getMockBuilder('\\Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel
            ->expects(\$this->once())
            ->method('handle')
            ->with(
                \$this->callback(function (Request \$request) use (\$logicalControllerName, \$code) {
                    \$this->assertEquals(\$logicalControllerName, \$request->attributes->get('_controller'));

                    \$exception = \$request->attributes->get('exception');
                    \$this->assertInstanceOf(FlattenException::class, \$exception);
                    \$this->assertEquals(\$code, \$exception->getStatusCode());
                    \$this->assertFalse(\$request->attributes->get('showException'));

                    return true;
                }),
                \$this->equalTo(HttpKernelInterface::SUB_REQUEST)
            )
            ->willReturn(\$response);

        \$controller = new PreviewErrorController(\$kernel, \$logicalControllerName);

        \$this->assertSame(\$response, \$controller->previewErrorPageAction(\$request, \$code));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/Controller/PreviewErrorControllerTest.php";
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

use Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class PreviewErrorControllerTest extends TestCase
{
    public function testForwardRequestToConfiguredController()
    {
        \$request = Request::create('whatever');
        \$response = new Response('');
        \$code = 123;
        \$logicalControllerName = 'foo:bar:baz';

        \$kernel = \$this->getMockBuilder('\\Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel
            ->expects(\$this->once())
            ->method('handle')
            ->with(
                \$this->callback(function (Request \$request) use (\$logicalControllerName, \$code) {
                    \$this->assertEquals(\$logicalControllerName, \$request->attributes->get('_controller'));

                    \$exception = \$request->attributes->get('exception');
                    \$this->assertInstanceOf(FlattenException::class, \$exception);
                    \$this->assertEquals(\$code, \$exception->getStatusCode());
                    \$this->assertFalse(\$request->attributes->get('showException'));

                    return true;
                }),
                \$this->equalTo(HttpKernelInterface::SUB_REQUEST)
            )
            ->willReturn(\$response);

        \$controller = new PreviewErrorController(\$kernel, \$logicalControllerName);

        \$this->assertSame(\$response, \$controller->previewErrorPageAction(\$request, \$code));
    }
}
", "vendor/symfony/twig-bundle/Tests/Controller/PreviewErrorControllerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/Controller/PreviewErrorControllerTest.php");
    }
}
