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

/* vendor/symfony/cache/Tests/DependencyInjection/CachePoolClearerPassTest.php */
class __TwigTemplate_1a1d48550c9cac1e04b6ee98af83d2b6205215d4114c220859eba792517c5aa7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/DependencyInjection/CachePoolClearerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/DependencyInjection/CachePoolClearerPassTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolClearerPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\RepeatedPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

class CachePoolClearerPassTest extends TestCase
{
    public function testPoolRefsAreWeak()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');

        \$globalClearer = new Definition(Psr6CacheClearer::class);
        \$container->setDefinition('cache.global_clearer', \$globalClearer);

        \$publicPool = new Definition();
        \$publicPool->addArgument('namespace');
        \$publicPool->addTag('cache.pool', ['clearer' => 'clearer_alias']);
        \$container->setDefinition('public.pool', \$publicPool);

        \$publicPool = new Definition();
        \$publicPool->addArgument('namespace');
        \$publicPool->addTag('cache.pool', ['clearer' => 'clearer_alias', 'name' => 'pool2']);
        \$container->setDefinition('public.pool2', \$publicPool);

        \$privatePool = new Definition();
        \$privatePool->setPublic(false);
        \$privatePool->addArgument('namespace');
        \$privatePool->addTag('cache.pool', ['clearer' => 'clearer_alias']);
        \$container->setDefinition('private.pool', \$privatePool);

        \$clearer = new Definition();
        \$container->setDefinition('clearer', \$clearer);
        \$container->setAlias('clearer_alias', 'clearer');

        \$pass = new RemoveUnusedDefinitionsPass();
        foreach (\$container->getCompiler()->getPassConfig()->getRemovingPasses() as \$removingPass) {
            if (\$removingPass instanceof RepeatedPass) {
                \$pass->setRepeatedPass(new RepeatedPass([\$pass]));
                break;
            }
        }
        foreach ([new CachePoolPass(), \$pass, new CachePoolClearerPass()] as \$pass) {
            \$pass->process(\$container);
        }

        \$expected = [[
            'public.pool' => new Reference('public.pool'),
            'pool2' => new Reference('public.pool2'),
        ]];
        \$this->assertEquals(\$expected, \$clearer->getArguments());
        \$this->assertEquals(\$expected, \$globalClearer->getArguments());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/DependencyInjection/CachePoolClearerPassTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolClearerPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\RepeatedPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

class CachePoolClearerPassTest extends TestCase
{
    public function testPoolRefsAreWeak()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.container_class', 'app');
        \$container->setParameter('kernel.project_dir', 'foo');

        \$globalClearer = new Definition(Psr6CacheClearer::class);
        \$container->setDefinition('cache.global_clearer', \$globalClearer);

        \$publicPool = new Definition();
        \$publicPool->addArgument('namespace');
        \$publicPool->addTag('cache.pool', ['clearer' => 'clearer_alias']);
        \$container->setDefinition('public.pool', \$publicPool);

        \$publicPool = new Definition();
        \$publicPool->addArgument('namespace');
        \$publicPool->addTag('cache.pool', ['clearer' => 'clearer_alias', 'name' => 'pool2']);
        \$container->setDefinition('public.pool2', \$publicPool);

        \$privatePool = new Definition();
        \$privatePool->setPublic(false);
        \$privatePool->addArgument('namespace');
        \$privatePool->addTag('cache.pool', ['clearer' => 'clearer_alias']);
        \$container->setDefinition('private.pool', \$privatePool);

        \$clearer = new Definition();
        \$container->setDefinition('clearer', \$clearer);
        \$container->setAlias('clearer_alias', 'clearer');

        \$pass = new RemoveUnusedDefinitionsPass();
        foreach (\$container->getCompiler()->getPassConfig()->getRemovingPasses() as \$removingPass) {
            if (\$removingPass instanceof RepeatedPass) {
                \$pass->setRepeatedPass(new RepeatedPass([\$pass]));
                break;
            }
        }
        foreach ([new CachePoolPass(), \$pass, new CachePoolClearerPass()] as \$pass) {
            \$pass->process(\$container);
        }

        \$expected = [[
            'public.pool' => new Reference('public.pool'),
            'pool2' => new Reference('public.pool2'),
        ]];
        \$this->assertEquals(\$expected, \$clearer->getArguments());
        \$this->assertEquals(\$expected, \$globalClearer->getArguments());
    }
}
", "vendor/symfony/cache/Tests/DependencyInjection/CachePoolClearerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/DependencyInjection/CachePoolClearerPassTest.php");
    }
}
