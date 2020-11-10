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

/* vendor/symfony/cache/Tests/DependencyInjection/CachePoolPrunerPassTest.php */
class __TwigTemplate_2685c43e1ccd8956bef517eac730b6bb9363911f08f9b808f13b978d4addbb58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/DependencyInjection/CachePoolPrunerPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/DependencyInjection/CachePoolPrunerPassTest.php"));

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
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpFilesAdapter;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPrunerPass;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class CachePoolPrunerPassTest extends TestCase
{
    public function testCompilerPassReplacesCommandArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('console.command.cache_pool_prune')->addArgument([]);
        \$container->register('pool.foo', FilesystemAdapter::class)->addTag('cache.pool');
        \$container->register('pool.bar', PhpFilesAdapter::class)->addTag('cache.pool');

        \$pass = new CachePoolPrunerPass();
        \$pass->process(\$container);

        \$expected = [
            'pool.foo' => new Reference('pool.foo'),
            'pool.bar' => new Reference('pool.bar'),
        ];
        \$argument = \$container->getDefinition('console.command.cache_pool_prune')->getArgument(0);

        \$this->assertInstanceOf(IteratorArgument::class, \$argument);
        \$this->assertEquals(\$expected, \$argument->getValues());
    }

    public function testCompilePassIsIgnoredIfCommandDoesNotExist()
    {
        \$container = new ContainerBuilder();

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$pass = new CachePoolPrunerPass();
        \$pass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }

    public function testCompilerPassThrowsOnInvalidDefinitionClass()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Class \"Symfony\\Component\\Cache\\Tests\\DependencyInjection\\NotFound\" used for service \"pool.not-found\" cannot be found.');
        \$container = new ContainerBuilder();
        \$container->register('console.command.cache_pool_prune')->addArgument([]);
        \$container->register('pool.not-found', NotFound::class)->addTag('cache.pool');

        \$pass = new CachePoolPrunerPass();
        \$pass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/DependencyInjection/CachePoolPrunerPassTest.php";
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
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpFilesAdapter;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPrunerPass;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class CachePoolPrunerPassTest extends TestCase
{
    public function testCompilerPassReplacesCommandArgument()
    {
        \$container = new ContainerBuilder();
        \$container->register('console.command.cache_pool_prune')->addArgument([]);
        \$container->register('pool.foo', FilesystemAdapter::class)->addTag('cache.pool');
        \$container->register('pool.bar', PhpFilesAdapter::class)->addTag('cache.pool');

        \$pass = new CachePoolPrunerPass();
        \$pass->process(\$container);

        \$expected = [
            'pool.foo' => new Reference('pool.foo'),
            'pool.bar' => new Reference('pool.bar'),
        ];
        \$argument = \$container->getDefinition('console.command.cache_pool_prune')->getArgument(0);

        \$this->assertInstanceOf(IteratorArgument::class, \$argument);
        \$this->assertEquals(\$expected, \$argument->getValues());
    }

    public function testCompilePassIsIgnoredIfCommandDoesNotExist()
    {
        \$container = new ContainerBuilder();

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$pass = new CachePoolPrunerPass();
        \$pass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }

    public function testCompilerPassThrowsOnInvalidDefinitionClass()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Class \"Symfony\\Component\\Cache\\Tests\\DependencyInjection\\NotFound\" used for service \"pool.not-found\" cannot be found.');
        \$container = new ContainerBuilder();
        \$container->register('console.command.cache_pool_prune')->addArgument([]);
        \$container->register('pool.not-found', NotFound::class)->addTag('cache.pool');

        \$pass = new CachePoolPrunerPass();
        \$pass->process(\$container);
    }
}
", "vendor/symfony/cache/Tests/DependencyInjection/CachePoolPrunerPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/DependencyInjection/CachePoolPrunerPassTest.php");
    }
}
