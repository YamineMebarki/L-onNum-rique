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

/* vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSecurityVotersPass.php */
class __TwigTemplate_358ae438e6f7d78f07ae2e864c1d6126233554d2e211c3a248aea2a6d66bdd41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSecurityVotersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSecurityVotersPass.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

/**
 * Adds all configured security voters to the access decision manager.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AddSecurityVotersPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('security.access.decision_manager')) {
            return;
        }

        \$voters = \$this->findAndSortTaggedServices('security.voter', \$container);
        if (!\$voters) {
            throw new LogicException('No security voters found. You need to tag at least one with \"security.voter\".');
        }

        \$debug = \$container->getParameter('kernel.debug');
        \$voterServices = [];
        foreach (\$voters as \$voter) {
            \$voterServiceId = (string) \$voter;
            \$definition = \$container->getDefinition(\$voterServiceId);

            \$class = \$container->getParameterBag()->resolveValue(\$definition->getClass());

            if (!is_a(\$class, VoterInterface::class, true)) {
                throw new LogicException(sprintf('%s must implement the %s when used as a voter.', \$class, VoterInterface::class));
            }

            if (\$debug) {
                \$voterServices[] = new Reference(\$debugVoterServiceId = 'debug.security.voter.'.\$voterServiceId);

                \$container
                    ->register(\$debugVoterServiceId, TraceableVoter::class)
                    ->addArgument(\$voter)
                    ->addArgument(new Reference('event_dispatcher'));
            } else {
                \$voterServices[] = \$voter;
            }
        }

        \$container->getDefinition('security.access.decision_manager')
            ->replaceArgument(0, new IteratorArgument(\$voterServices));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSecurityVotersPass.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

/**
 * Adds all configured security voters to the access decision manager.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AddSecurityVotersPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('security.access.decision_manager')) {
            return;
        }

        \$voters = \$this->findAndSortTaggedServices('security.voter', \$container);
        if (!\$voters) {
            throw new LogicException('No security voters found. You need to tag at least one with \"security.voter\".');
        }

        \$debug = \$container->getParameter('kernel.debug');
        \$voterServices = [];
        foreach (\$voters as \$voter) {
            \$voterServiceId = (string) \$voter;
            \$definition = \$container->getDefinition(\$voterServiceId);

            \$class = \$container->getParameterBag()->resolveValue(\$definition->getClass());

            if (!is_a(\$class, VoterInterface::class, true)) {
                throw new LogicException(sprintf('%s must implement the %s when used as a voter.', \$class, VoterInterface::class));
            }

            if (\$debug) {
                \$voterServices[] = new Reference(\$debugVoterServiceId = 'debug.security.voter.'.\$voterServiceId);

                \$container
                    ->register(\$debugVoterServiceId, TraceableVoter::class)
                    ->addArgument(\$voter)
                    ->addArgument(new Reference('event_dispatcher'));
            } else {
                \$voterServices[] = \$voter;
            }
        }

        \$container->getDefinition('security.access.decision_manager')
            ->replaceArgument(0, new IteratorArgument(\$voterServices));
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSecurityVotersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSecurityVotersPass.php");
    }
}
