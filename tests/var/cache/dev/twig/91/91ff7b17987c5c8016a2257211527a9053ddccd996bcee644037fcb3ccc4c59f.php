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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddExpressionLanguageProvidersPass.php */
class __TwigTemplate_9ebb1ec04183d5771f9b2668253e51b41453e6fd237de7157012bc85f08ee788 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddExpressionLanguageProvidersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddExpressionLanguageProvidersPass.php"));

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

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass as SecurityExpressionLanguageProvidersPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers the expression language providers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddExpressionLanguageProvidersPass implements CompilerPassInterface
{
    private \$handleSecurityLanguageProviders;

    public function __construct(bool \$handleSecurityLanguageProviders = true)
    {
        if (\$handleSecurityLanguageProviders) {
            @trigger_error(sprintf('Registering services tagged \"security.expression_language_provider\" with \"%s\" is deprecated since Symfony 4.2, use the \"%s\" instead.', __CLASS__, SecurityExpressionLanguageProvidersPass::class), E_USER_DEPRECATED);
        }

        \$this->handleSecurityLanguageProviders = \$handleSecurityLanguageProviders;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        // routing
        if (\$container->has('router')) {
            \$definition = \$container->findDefinition('router');
            foreach (\$container->findTaggedServiceIds('routing.expression_language_provider', true) as \$id => \$attributes) {
                \$definition->addMethodCall('addExpressionLanguageProvider', [new Reference(\$id)]);
            }
        }

        // security
        if (\$this->handleSecurityLanguageProviders && \$container->has('security.expression_language')) {
            \$definition = \$container->findDefinition('security.expression_language');
            foreach (\$container->findTaggedServiceIds('security.expression_language_provider', true) as \$id => \$attributes) {
                \$definition->addMethodCall('registerProvider', [new Reference(\$id)]);
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
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddExpressionLanguageProvidersPass.php";
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

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass as SecurityExpressionLanguageProvidersPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers the expression language providers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddExpressionLanguageProvidersPass implements CompilerPassInterface
{
    private \$handleSecurityLanguageProviders;

    public function __construct(bool \$handleSecurityLanguageProviders = true)
    {
        if (\$handleSecurityLanguageProviders) {
            @trigger_error(sprintf('Registering services tagged \"security.expression_language_provider\" with \"%s\" is deprecated since Symfony 4.2, use the \"%s\" instead.', __CLASS__, SecurityExpressionLanguageProvidersPass::class), E_USER_DEPRECATED);
        }

        \$this->handleSecurityLanguageProviders = \$handleSecurityLanguageProviders;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        // routing
        if (\$container->has('router')) {
            \$definition = \$container->findDefinition('router');
            foreach (\$container->findTaggedServiceIds('routing.expression_language_provider', true) as \$id => \$attributes) {
                \$definition->addMethodCall('addExpressionLanguageProvider', [new Reference(\$id)]);
            }
        }

        // security
        if (\$this->handleSecurityLanguageProviders && \$container->has('security.expression_language')) {
            \$definition = \$container->findDefinition('security.expression_language');
            foreach (\$container->findTaggedServiceIds('security.expression_language_provider', true) as \$id => \$attributes) {
                \$definition->addMethodCall('registerProvider', [new Reference(\$id)]);
            }
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddExpressionLanguageProvidersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddExpressionLanguageProvidersPass.php");
    }
}
