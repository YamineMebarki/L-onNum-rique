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

/* vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php */
class __TwigTemplate_fc15492ea86562cbe5631ac8d290f891d34cd12cbcb4266d77944780240fe2d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass;

use Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

class MakeCommandRegistrationPass implements CompilerPassInterface
{
    const MAKER_TAG = 'maker.command';

    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->findTaggedServiceIds(self::MAKER_TAG) as \$id => \$tags) {
            \$def = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$def->getClass());
            if (!is_subclass_of(\$class, MakerInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, MakerInterface::class));
            }

            \$commandDefinition = new ChildDefinition('maker.auto_command.abstract');
            \$commandDefinition->setClass(MakerCommand::class);
            \$commandDefinition->replaceArgument(0, new Reference(\$id));
            \$commandDefinition->addTag('console.command', ['command' => \$class::getCommandName()]);

            \$container->setDefinition(sprintf('maker.auto_command.%s', Str::asTwigVariable(\$class::getCommandName())), \$commandDefinition);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass;

use Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

class MakeCommandRegistrationPass implements CompilerPassInterface
{
    const MAKER_TAG = 'maker.command';

    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->findTaggedServiceIds(self::MAKER_TAG) as \$id => \$tags) {
            \$def = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$def->getClass());
            if (!is_subclass_of(\$class, MakerInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, MakerInterface::class));
            }

            \$commandDefinition = new ChildDefinition('maker.auto_command.abstract');
            \$commandDefinition->setClass(MakerCommand::class);
            \$commandDefinition->replaceArgument(0, new Reference(\$id));
            \$commandDefinition->addTag('console.command', ['command' => \$class::getCommandName()]);

            \$container->setDefinition(sprintf('maker.auto_command.%s', Str::asTwigVariable(\$class::getCommandName())), \$commandDefinition);
        }
    }
}
", "vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php");
    }
}
