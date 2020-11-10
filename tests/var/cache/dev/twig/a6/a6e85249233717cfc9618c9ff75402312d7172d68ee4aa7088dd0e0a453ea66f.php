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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php */
class __TwigTemplate_9a8ef1803911fad312b0a897e08d8cf23960ebecb7bd07dc88317ba830a842bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class AddExpressionLanguageProvidersPassTest extends TestCase
{
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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class AddExpressionLanguageProvidersPassTest extends TestCase
{
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
}
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Compiler/AddExpressionLanguageProvidersPassTest.php");
    }
}
