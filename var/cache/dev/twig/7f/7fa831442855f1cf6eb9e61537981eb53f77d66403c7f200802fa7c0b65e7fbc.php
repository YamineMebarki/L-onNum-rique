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

/* vendor/symfony/dependency-injection/Compiler/AutoAliasServicePass.php */
class __TwigTemplate_95266ccd6ccf1fe4f25197a92e555541eddd28663d88c1850378aa4ef62d56d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/AutoAliasServicePass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/AutoAliasServicePass.php"));

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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * Sets a service to be an alias of another one, given a format pattern.
 */
class AutoAliasServicePass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->findTaggedServiceIds('auto_alias') as \$serviceId => \$tags) {
            foreach (\$tags as \$tag) {
                if (!isset(\$tag['format'])) {
                    throw new InvalidArgumentException(sprintf('Missing tag information \"format\" on auto_alias service \"%s\".', \$serviceId));
                }

                \$aliasId = \$container->getParameterBag()->resolveValue(\$tag['format']);
                if (\$container->hasDefinition(\$aliasId) || \$container->hasAlias(\$aliasId)) {
                    \$container->setAlias(\$serviceId, new Alias(\$aliasId, true));
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/AutoAliasServicePass.php";
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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * Sets a service to be an alias of another one, given a format pattern.
 */
class AutoAliasServicePass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->findTaggedServiceIds('auto_alias') as \$serviceId => \$tags) {
            foreach (\$tags as \$tag) {
                if (!isset(\$tag['format'])) {
                    throw new InvalidArgumentException(sprintf('Missing tag information \"format\" on auto_alias service \"%s\".', \$serviceId));
                }

                \$aliasId = \$container->getParameterBag()->resolveValue(\$tag['format']);
                if (\$container->hasDefinition(\$aliasId) || \$container->hasAlias(\$aliasId)) {
                    \$container->setAlias(\$serviceId, new Alias(\$aliasId, true));
                }
            }
        }
    }
}
", "vendor/symfony/dependency-injection/Compiler/AutoAliasServicePass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/AutoAliasServicePass.php");
    }
}
