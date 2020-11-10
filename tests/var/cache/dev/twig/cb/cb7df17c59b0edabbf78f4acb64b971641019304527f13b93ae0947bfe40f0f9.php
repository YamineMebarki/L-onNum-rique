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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddSwiftMailerTransportPassTest.php */
class __TwigTemplate_2dc0f33dbdbf6cc5ab36bb099ab74fa02fde388169359ea4d3478aa42f529c0a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddSwiftMailerTransportPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddSwiftMailerTransportPassTest.php"));

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

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddSwiftMailerTransportPass;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class AddSwiftMailerTransportPassTest extends TestCase
{
    private \$compilerPass;

    private \$container;

    private \$definition;

    protected function setUp()
    {
        \$this->compilerPass = new AddSwiftMailerTransportPass();
        \$this->definition = \$this->getMockBuilder('\\Symfony\\Component\\DependencyInjection\\Definition')->getMock();
        \$this->definition->expects(\$this->any())
            ->method('getArgument')
            ->with(0)
            ->will(\$this->returnValue(new Reference('swiftmailer')));
        \$this->container = \$this->getMockBuilder('\\Symfony\\Component\\DependencyInjection\\ContainerBuilder')
            ->setMethods(array('getParameter', 'getDefinition', 'hasDefinition', 'addMethodCall'))->getMock();
        \$this->container->expects(\$this->any())
            ->method('getParameter')
            ->with('monolog.swift_mailer.handlers')
            ->will(\$this->returnValue(array('foo')));
        \$this->container->expects(\$this->any())
            ->method('getDefinition')
            ->with('foo')
            ->will(\$this->returnValue(\$this->definition));
    }

    public function testWithRealTransport()
    {
        \$this->container
            ->expects(\$this->any())
            ->method('hasDefinition')
            ->with('swiftmailer.transport.real')
            ->will(\$this->returnValue(true));
        \$this->definition
            ->expects(\$this->once())
            ->method('addMethodCall')
            ->with(
                'setTransport',
                \$this->equalTo(array(new Reference('swiftmailer.transport.real')))
            );

        \$this->compilerPass->process(\$this->container);
    }

    public function testWithoutRealTransport()
    {
        \$this->container
            ->expects(\$this->any())
            ->method('hasDefinition')
            ->will(\$this->returnValueMap(
                array(
                    array('swiftmailer.transport.real', false),
                    array('swiftmailer.transport', true),
                )
            ));
        \$this->definition
            ->expects(\$this->once())
            ->method('addMethodCall')
            ->with(
                'setTransport',
                \$this->equalTo(array(new Reference('swiftmailer.transport')))
            );

        \$this->compilerPass->process(\$this->container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddSwiftMailerTransportPassTest.php";
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

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddSwiftMailerTransportPass;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class AddSwiftMailerTransportPassTest extends TestCase
{
    private \$compilerPass;

    private \$container;

    private \$definition;

    protected function setUp()
    {
        \$this->compilerPass = new AddSwiftMailerTransportPass();
        \$this->definition = \$this->getMockBuilder('\\Symfony\\Component\\DependencyInjection\\Definition')->getMock();
        \$this->definition->expects(\$this->any())
            ->method('getArgument')
            ->with(0)
            ->will(\$this->returnValue(new Reference('swiftmailer')));
        \$this->container = \$this->getMockBuilder('\\Symfony\\Component\\DependencyInjection\\ContainerBuilder')
            ->setMethods(array('getParameter', 'getDefinition', 'hasDefinition', 'addMethodCall'))->getMock();
        \$this->container->expects(\$this->any())
            ->method('getParameter')
            ->with('monolog.swift_mailer.handlers')
            ->will(\$this->returnValue(array('foo')));
        \$this->container->expects(\$this->any())
            ->method('getDefinition')
            ->with('foo')
            ->will(\$this->returnValue(\$this->definition));
    }

    public function testWithRealTransport()
    {
        \$this->container
            ->expects(\$this->any())
            ->method('hasDefinition')
            ->with('swiftmailer.transport.real')
            ->will(\$this->returnValue(true));
        \$this->definition
            ->expects(\$this->once())
            ->method('addMethodCall')
            ->with(
                'setTransport',
                \$this->equalTo(array(new Reference('swiftmailer.transport.real')))
            );

        \$this->compilerPass->process(\$this->container);
    }

    public function testWithoutRealTransport()
    {
        \$this->container
            ->expects(\$this->any())
            ->method('hasDefinition')
            ->will(\$this->returnValueMap(
                array(
                    array('swiftmailer.transport.real', false),
                    array('swiftmailer.transport', true),
                )
            ));
        \$this->definition
            ->expects(\$this->once())
            ->method('addMethodCall')
            ->with(
                'setTransport',
                \$this->equalTo(array(new Reference('swiftmailer.transport')))
            );

        \$this->compilerPass->process(\$this->container);
    }
}
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddSwiftMailerTransportPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Compiler/AddSwiftMailerTransportPassTest.php");
    }
}
