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

/* vendor/symfony/cache/DependencyInjection/CachePoolClearerPass.php */
class __TwigTemplate_eaf8934563f0ea8c560eaaba83fde0a5b0eb67c51db2ee00166c4d41734c64a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/DependencyInjection/CachePoolClearerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/DependencyInjection/CachePoolClearerPass.php"));

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

namespace Symfony\\Component\\Cache\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CachePoolClearerPass implements CompilerPassInterface
{
    private \$cachePoolClearerTag;

    public function __construct(string \$cachePoolClearerTag = 'cache.pool.clearer')
    {
        \$this->cachePoolClearerTag = \$cachePoolClearerTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$container->getParameterBag()->remove('cache.prefix.seed');

        foreach (\$container->findTaggedServiceIds(\$this->cachePoolClearerTag) as \$id => \$attr) {
            \$clearer = \$container->getDefinition(\$id);
            \$pools = [];
            foreach (\$clearer->getArgument(0) as \$name => \$ref) {
                if (\$container->hasDefinition(\$ref)) {
                    \$pools[\$name] = new Reference(\$ref);
                }
            }
            \$clearer->replaceArgument(0, \$pools);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/DependencyInjection/CachePoolClearerPass.php";
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

namespace Symfony\\Component\\Cache\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CachePoolClearerPass implements CompilerPassInterface
{
    private \$cachePoolClearerTag;

    public function __construct(string \$cachePoolClearerTag = 'cache.pool.clearer')
    {
        \$this->cachePoolClearerTag = \$cachePoolClearerTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$container->getParameterBag()->remove('cache.prefix.seed');

        foreach (\$container->findTaggedServiceIds(\$this->cachePoolClearerTag) as \$id => \$attr) {
            \$clearer = \$container->getDefinition(\$id);
            \$pools = [];
            foreach (\$clearer->getArgument(0) as \$name => \$ref) {
                if (\$container->hasDefinition(\$ref)) {
                    \$pools[\$name] = new Reference(\$ref);
                }
            }
            \$clearer->replaceArgument(0, \$pools);
        }
    }
}
", "vendor/symfony/cache/DependencyInjection/CachePoolClearerPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/DependencyInjection/CachePoolClearerPass.php");
    }
}
