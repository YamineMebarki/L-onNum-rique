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

/* vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigLoaderPass.php */
class __TwigTemplate_2fe0359f2719a5ec27d7ab20c158a51215a00b0ad540f6e9935f71fce9ccbde1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigLoaderPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigLoaderPass.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds services tagged twig.loader as Twig loaders.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class TwigLoaderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('twig')) {
            return;
        }

        \$prioritizedLoaders = [];
        \$found = 0;

        foreach (\$container->findTaggedServiceIds('twig.loader', true) as \$id => \$attributes) {
            \$priority = isset(\$attributes[0]['priority']) ? \$attributes[0]['priority'] : 0;
            \$prioritizedLoaders[\$priority][] = \$id;
            ++\$found;
        }

        if (!\$found) {
            throw new LogicException('No twig loaders found. You need to tag at least one loader with \"twig.loader\"');
        }

        if (1 === \$found) {
            \$container->setAlias('twig.loader', \$id)->setPrivate(true);
        } else {
            \$chainLoader = \$container->getDefinition('twig.loader.chain');
            krsort(\$prioritizedLoaders);

            foreach (\$prioritizedLoaders as \$loaders) {
                foreach (\$loaders as \$loader) {
                    \$chainLoader->addMethodCall('addLoader', [new Reference(\$loader)]);
                }
            }

            \$container->setAlias('twig.loader', 'twig.loader.chain')->setPrivate(true);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigLoaderPass.php";
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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds services tagged twig.loader as Twig loaders.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class TwigLoaderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('twig')) {
            return;
        }

        \$prioritizedLoaders = [];
        \$found = 0;

        foreach (\$container->findTaggedServiceIds('twig.loader', true) as \$id => \$attributes) {
            \$priority = isset(\$attributes[0]['priority']) ? \$attributes[0]['priority'] : 0;
            \$prioritizedLoaders[\$priority][] = \$id;
            ++\$found;
        }

        if (!\$found) {
            throw new LogicException('No twig loaders found. You need to tag at least one loader with \"twig.loader\"');
        }

        if (1 === \$found) {
            \$container->setAlias('twig.loader', \$id)->setPrivate(true);
        } else {
            \$chainLoader = \$container->getDefinition('twig.loader.chain');
            krsort(\$prioritizedLoaders);

            foreach (\$prioritizedLoaders as \$loaders) {
                foreach (\$loaders as \$loader) {
                    \$chainLoader->addMethodCall('addLoader', [new Reference(\$loader)]);
                }
            }

            \$container->setAlias('twig.loader', 'twig.loader.chain')->setPrivate(true);
        }
    }
}
", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigLoaderPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigLoaderPass.php");
    }
}
