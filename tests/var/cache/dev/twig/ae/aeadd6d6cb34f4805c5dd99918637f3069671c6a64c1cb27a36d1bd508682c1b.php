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

/* vendor/symfony/security-bundle/DependencyInjection/Compiler/RegisterCsrfTokenClearingLogoutHandlerPass.php */
class __TwigTemplate_ce5830c61f486747cd664e6a5a00e22bde5fe103298a54cfde87dcd9a7b05f49 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Compiler/RegisterCsrfTokenClearingLogoutHandlerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Compiler/RegisterCsrfTokenClearingLogoutHandlerPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class RegisterCsrfTokenClearingLogoutHandlerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('security.logout_listener') || !\$container->has('security.csrf.token_storage')) {
            return;
        }

        \$csrfTokenStorage = \$container->findDefinition('security.csrf.token_storage');
        \$csrfTokenStorageClass = \$container->getParameterBag()->resolveValue(\$csrfTokenStorage->getClass());

        if (!is_subclass_of(\$csrfTokenStorageClass, 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\ClearableTokenStorageInterface')) {
            return;
        }

        \$container->register('security.logout.handler.csrf_token_clearing', 'Symfony\\Component\\Security\\Http\\Logout\\CsrfTokenClearingLogoutHandler')
            ->addArgument(new Reference('security.csrf.token_storage'))
            ->setPublic(false);

        \$container->findDefinition('security.logout_listener')->addMethodCall('addHandler', [new Reference('security.logout.handler.csrf_token_clearing')]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Compiler/RegisterCsrfTokenClearingLogoutHandlerPass.php";
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

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class RegisterCsrfTokenClearingLogoutHandlerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('security.logout_listener') || !\$container->has('security.csrf.token_storage')) {
            return;
        }

        \$csrfTokenStorage = \$container->findDefinition('security.csrf.token_storage');
        \$csrfTokenStorageClass = \$container->getParameterBag()->resolveValue(\$csrfTokenStorage->getClass());

        if (!is_subclass_of(\$csrfTokenStorageClass, 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\ClearableTokenStorageInterface')) {
            return;
        }

        \$container->register('security.logout.handler.csrf_token_clearing', 'Symfony\\Component\\Security\\Http\\Logout\\CsrfTokenClearingLogoutHandler')
            ->addArgument(new Reference('security.csrf.token_storage'))
            ->setPublic(false);

        \$container->findDefinition('security.logout_listener')->addMethodCall('addHandler', [new Reference('security.logout.handler.csrf_token_clearing')]);
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Compiler/RegisterCsrfTokenClearingLogoutHandlerPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Compiler/RegisterCsrfTokenClearingLogoutHandlerPass.php");
    }
}
