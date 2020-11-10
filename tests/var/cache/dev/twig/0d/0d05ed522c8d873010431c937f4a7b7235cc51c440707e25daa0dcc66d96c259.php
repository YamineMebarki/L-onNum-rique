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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php */
class __TwigTemplate_4063741964a2b4866b831dddd6a414b86d1bc33fc663e44728d1c269bafde329 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class AddExpressionLanguageProvidersPassTest extends TestCase
{
    public function testProcessForRouter()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('routing.expression_language_provider');
        \$container->setDefinition('some_routing_provider', \$definition->setPublic(true));

        \$container->register('router', '\\stdClass')->setPublic(true);
        \$container->compile();

        \$router = \$container->getDefinition('router');
        \$calls = \$router->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('addExpressionLanguageProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_routing_provider'), \$calls[0][1][0]);
    }

    public function testProcessForRouterAlias()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('routing.expression_language_provider');
        \$container->setDefinition('some_routing_provider', \$definition->setPublic(true));

        \$container->register('my_router', '\\stdClass')->setPublic(true);
        \$container->setAlias('router', 'my_router');
        \$container->compile();

        \$router = \$container->getDefinition('my_router');
        \$calls = \$router->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('addExpressionLanguageProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_routing_provider'), \$calls[0][1][0]);
    }

    /**
     * @group legacy
     * @expectedDeprecation Registering services tagged \"security.expression_language_provider\" with \"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" is deprecated since Symfony 4.2, use the \"Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" instead.
     */
    public function testProcessForSecurity()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass());

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('security.expression_language', '\\stdClass')->setPublic(true);
        \$container->compile();

        \$calls = \$container->getDefinition('security.expression_language')->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('registerProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_security_provider'), \$calls[0][1][0]);
    }

    /**
     * @group legacy
     * @expectedDeprecation Registering services tagged \"security.expression_language_provider\" with \"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" is deprecated since Symfony 4.2, use the \"Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" instead.
     */
    public function testProcessForSecurityAlias()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass());

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('my_security.expression_language', '\\stdClass')->setPublic(true);
        \$container->setAlias('security.expression_language', 'my_security.expression_language');
        \$container->compile();

        \$calls = \$container->getDefinition('my_security.expression_language')->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('registerProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_security_provider'), \$calls[0][1][0]);
    }

    /**
     * @group legacy
     */
    public function testProcessIgnoreSecurity()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('security.expression_language', '\\stdClass')->setPublic(true);
        \$container->compile();

        \$calls = \$container->getDefinition('security.expression_language')->getMethodCalls();
        \$this->assertCount(0, \$calls);
    }

    /**
     * @group legacy
     */
    public function testProcessIgnoreSecurityAlias()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('my_security.expression_language', '\\stdClass')->setPublic(true);
        \$container->setAlias('security.expression_language', 'my_security.expression_language');
        \$container->compile();

        \$calls = \$container->getDefinition('my_security.expression_language')->getMethodCalls();
        \$this->assertCount(0, \$calls);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class AddExpressionLanguageProvidersPassTest extends TestCase
{
    public function testProcessForRouter()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('routing.expression_language_provider');
        \$container->setDefinition('some_routing_provider', \$definition->setPublic(true));

        \$container->register('router', '\\stdClass')->setPublic(true);
        \$container->compile();

        \$router = \$container->getDefinition('router');
        \$calls = \$router->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('addExpressionLanguageProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_routing_provider'), \$calls[0][1][0]);
    }

    public function testProcessForRouterAlias()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('routing.expression_language_provider');
        \$container->setDefinition('some_routing_provider', \$definition->setPublic(true));

        \$container->register('my_router', '\\stdClass')->setPublic(true);
        \$container->setAlias('router', 'my_router');
        \$container->compile();

        \$router = \$container->getDefinition('my_router');
        \$calls = \$router->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('addExpressionLanguageProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_routing_provider'), \$calls[0][1][0]);
    }

    /**
     * @group legacy
     * @expectedDeprecation Registering services tagged \"security.expression_language_provider\" with \"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" is deprecated since Symfony 4.2, use the \"Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" instead.
     */
    public function testProcessForSecurity()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass());

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('security.expression_language', '\\stdClass')->setPublic(true);
        \$container->compile();

        \$calls = \$container->getDefinition('security.expression_language')->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('registerProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_security_provider'), \$calls[0][1][0]);
    }

    /**
     * @group legacy
     * @expectedDeprecation Registering services tagged \"security.expression_language_provider\" with \"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" is deprecated since Symfony 4.2, use the \"Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass\" instead.
     */
    public function testProcessForSecurityAlias()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass());

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('my_security.expression_language', '\\stdClass')->setPublic(true);
        \$container->setAlias('security.expression_language', 'my_security.expression_language');
        \$container->compile();

        \$calls = \$container->getDefinition('my_security.expression_language')->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('registerProvider', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_security_provider'), \$calls[0][1][0]);
    }

    /**
     * @group legacy
     */
    public function testProcessIgnoreSecurity()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('security.expression_language', '\\stdClass')->setPublic(true);
        \$container->compile();

        \$calls = \$container->getDefinition('security.expression_language')->getMethodCalls();
        \$this->assertCount(0, \$calls);
    }

    /**
     * @group legacy
     */
    public function testProcessIgnoreSecurityAlias()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));

        \$definition = new Definition('\\stdClass');
        \$definition->addTag('security.expression_language_provider');
        \$container->setDefinition('some_security_provider', \$definition->setPublic(true));

        \$container->register('my_security.expression_language', '\\stdClass')->setPublic(true);
        \$container->setAlias('security.expression_language', 'my_security.expression_language');
        \$container->compile();

        \$calls = \$container->getDefinition('my_security.expression_language')->getMethodCalls();
        \$this->assertCount(0, \$calls);
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php");
    }
}
