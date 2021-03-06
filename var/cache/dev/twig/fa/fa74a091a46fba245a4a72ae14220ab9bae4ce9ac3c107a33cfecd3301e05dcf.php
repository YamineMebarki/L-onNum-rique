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

/* vendor/symfony/dependency-injection/Tests/Compiler/ReplaceAliasByActualDefinitionPassTest.php */
class __TwigTemplate_5ee7834118a26613d269606421f9cf57383f149c4c0f32120c7774872d2de648 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ReplaceAliasByActualDefinitionPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ReplaceAliasByActualDefinitionPassTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

require_once __DIR__.'/../Fixtures/includes/foo.php';

class ReplaceAliasByActualDefinitionPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$aDefinition = \$container->register('a', '\\stdClass');
        \$aDefinition->setFactory([new Reference('b'), 'createA']);

        \$bDefinition = new Definition('\\stdClass');
        \$bDefinition->setPublic(false);
        \$container->setDefinition('b', \$bDefinition);

        \$container->setAlias('a_alias', 'a');
        \$container->setAlias('b_alias', 'b');

        \$container->setAlias('container', 'service_container');

        \$this->process(\$container);

        \$this->assertTrue(\$container->has('a'), '->process() does nothing to public definitions.');
        \$this->assertTrue(\$container->hasAlias('a_alias'));
        \$this->assertFalse(\$container->has('b'), '->process() removes non-public definitions.');
        \$this->assertTrue(
            \$container->has('b_alias') && !\$container->hasAlias('b_alias'),
            '->process() replaces alias to actual.'
        );

        \$this->assertTrue(\$container->has('container'));

        \$resolvedFactory = \$aDefinition->getFactory();
        \$this->assertSame('b_alias', (string) \$resolvedFactory[0]);
    }

    public function testProcessWithInvalidAlias()
    {
        \$this->expectException('InvalidArgumentException');
        \$container = new ContainerBuilder();
        \$container->setAlias('a_alias', 'a');
        \$this->process(\$container);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new ReplaceAliasByActualDefinitionPass();
        \$pass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ReplaceAliasByActualDefinitionPassTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

require_once __DIR__.'/../Fixtures/includes/foo.php';

class ReplaceAliasByActualDefinitionPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$aDefinition = \$container->register('a', '\\stdClass');
        \$aDefinition->setFactory([new Reference('b'), 'createA']);

        \$bDefinition = new Definition('\\stdClass');
        \$bDefinition->setPublic(false);
        \$container->setDefinition('b', \$bDefinition);

        \$container->setAlias('a_alias', 'a');
        \$container->setAlias('b_alias', 'b');

        \$container->setAlias('container', 'service_container');

        \$this->process(\$container);

        \$this->assertTrue(\$container->has('a'), '->process() does nothing to public definitions.');
        \$this->assertTrue(\$container->hasAlias('a_alias'));
        \$this->assertFalse(\$container->has('b'), '->process() removes non-public definitions.');
        \$this->assertTrue(
            \$container->has('b_alias') && !\$container->hasAlias('b_alias'),
            '->process() replaces alias to actual.'
        );

        \$this->assertTrue(\$container->has('container'));

        \$resolvedFactory = \$aDefinition->getFactory();
        \$this->assertSame('b_alias', (string) \$resolvedFactory[0]);
    }

    public function testProcessWithInvalidAlias()
    {
        \$this->expectException('InvalidArgumentException');
        \$container = new ContainerBuilder();
        \$container->setAlias('a_alias', 'a');
        \$this->process(\$container);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new ReplaceAliasByActualDefinitionPass();
        \$pass->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ReplaceAliasByActualDefinitionPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ReplaceAliasByActualDefinitionPassTest.php");
    }
}
