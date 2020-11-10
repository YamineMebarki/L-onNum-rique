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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/WorkflowGuardListenerPass.php */
class __TwigTemplate_5dd00851c31482086f5446679fa928ee3ae5129de71b65569b42f76365f54dac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/WorkflowGuardListenerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/WorkflowGuardListenerPass.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class WorkflowGuardListenerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasParameter('workflow.has_guard_listeners')) {
            return;
        }

        \$container->getParameterBag()->remove('workflow.has_guard_listeners');

        \$servicesNeeded = [
            'security.token_storage',
            'security.authorization_checker',
            'security.authentication.trust_resolver',
            'security.role_hierarchy',
        ];

        foreach (\$servicesNeeded as \$service) {
            if (!\$container->has(\$service)) {
                throw new LogicException(sprintf('The \"%s\" service is needed to be able to use the workflow guard listener.', \$service));
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
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/WorkflowGuardListenerPass.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class WorkflowGuardListenerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasParameter('workflow.has_guard_listeners')) {
            return;
        }

        \$container->getParameterBag()->remove('workflow.has_guard_listeners');

        \$servicesNeeded = [
            'security.token_storage',
            'security.authorization_checker',
            'security.authentication.trust_resolver',
            'security.role_hierarchy',
        ];

        foreach (\$servicesNeeded as \$service) {
            if (!\$container->has(\$service)) {
                throw new LogicException(sprintf('The \"%s\" service is needed to be able to use the workflow guard listener.', \$service));
            }
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/WorkflowGuardListenerPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/WorkflowGuardListenerPass.php");
    }
}
