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

/* vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php */
class __TwigTemplate_f4b108e5ea1af6bf6e08fda4f66c16bcc5cfcf2417ecc41a2d474992de24549c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Overwrites a service but keeps the overridden one.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Diego Saint Esteben <diego@saintesteben.me>
 */
class DecoratorServicePass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        \$definitions = new \\SplPriorityQueue();
        \$order = PHP_INT_MAX;

        foreach (\$container->getDefinitions() as \$id => \$definition) {
            if (!\$decorated = \$definition->getDecoratedService()) {
                continue;
            }
            \$definitions->insert([\$id, \$definition], [\$decorated[2], --\$order]);
        }
        \$decoratingDefinitions = [];

        foreach (\$definitions as list(\$id, \$definition)) {
            list(\$inner, \$renamedId) = \$definition->getDecoratedService();

            \$definition->setDecoratedService(null);

            if (!\$renamedId) {
                \$renamedId = \$id.'.inner';
            }
            \$definition->innerServiceId = \$renamedId;

            // we create a new alias/service for the service we are replacing
            // to be able to reference it in the new one
            if (\$container->hasAlias(\$inner)) {
                \$alias = \$container->getAlias(\$inner);
                \$public = \$alias->isPublic();
                \$private = \$alias->isPrivate();
                \$container->setAlias(\$renamedId, new Alias((string) \$alias, false));
            } else {
                \$decoratedDefinition = \$container->getDefinition(\$inner);
                \$public = \$decoratedDefinition->isPublic();
                \$private = \$decoratedDefinition->isPrivate();
                \$decoratedDefinition->setPublic(false);
                \$container->setDefinition(\$renamedId, \$decoratedDefinition);
                \$decoratingDefinitions[\$inner] = \$decoratedDefinition;
            }

            if (isset(\$decoratingDefinitions[\$inner])) {
                \$decoratingDefinition = \$decoratingDefinitions[\$inner];
                \$definition->setTags(array_merge(\$decoratingDefinition->getTags(), \$definition->getTags()));
                \$decoratingDefinition->setTags([]);
                \$decoratingDefinitions[\$inner] = \$definition;
            }

            \$container->setAlias(\$inner, \$id)->setPublic(\$public)->setPrivate(\$private);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Overwrites a service but keeps the overridden one.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Diego Saint Esteben <diego@saintesteben.me>
 */
class DecoratorServicePass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        \$definitions = new \\SplPriorityQueue();
        \$order = PHP_INT_MAX;

        foreach (\$container->getDefinitions() as \$id => \$definition) {
            if (!\$decorated = \$definition->getDecoratedService()) {
                continue;
            }
            \$definitions->insert([\$id, \$definition], [\$decorated[2], --\$order]);
        }
        \$decoratingDefinitions = [];

        foreach (\$definitions as list(\$id, \$definition)) {
            list(\$inner, \$renamedId) = \$definition->getDecoratedService();

            \$definition->setDecoratedService(null);

            if (!\$renamedId) {
                \$renamedId = \$id.'.inner';
            }
            \$definition->innerServiceId = \$renamedId;

            // we create a new alias/service for the service we are replacing
            // to be able to reference it in the new one
            if (\$container->hasAlias(\$inner)) {
                \$alias = \$container->getAlias(\$inner);
                \$public = \$alias->isPublic();
                \$private = \$alias->isPrivate();
                \$container->setAlias(\$renamedId, new Alias((string) \$alias, false));
            } else {
                \$decoratedDefinition = \$container->getDefinition(\$inner);
                \$public = \$decoratedDefinition->isPublic();
                \$private = \$decoratedDefinition->isPrivate();
                \$decoratedDefinition->setPublic(false);
                \$container->setDefinition(\$renamedId, \$decoratedDefinition);
                \$decoratingDefinitions[\$inner] = \$decoratedDefinition;
            }

            if (isset(\$decoratingDefinitions[\$inner])) {
                \$decoratingDefinition = \$decoratingDefinitions[\$inner];
                \$definition->setTags(array_merge(\$decoratingDefinition->getTags(), \$definition->getTags()));
                \$decoratingDefinition->setTags([]);
                \$decoratingDefinitions[\$inner] = \$definition;
            }

            \$container->setAlias(\$inner, \$id)->setPublic(\$public)->setPrivate(\$private);
        }
    }
}
", "vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php");
    }
}
