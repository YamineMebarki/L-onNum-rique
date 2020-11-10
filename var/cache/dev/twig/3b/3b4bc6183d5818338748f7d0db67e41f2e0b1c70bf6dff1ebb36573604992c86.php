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

/* vendor/symfony/security-bundle/DependencyInjection/Security/Factory/SimplePreAuthenticationFactory.php */
class __TwigTemplate_bce52ecbd066c3642aee575bc5bcd5c55e845721364385b066e7b5e63d12ac05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/SimplePreAuthenticationFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/SimplePreAuthenticationFactory.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimplePreAuthenticationFactory implements SecurityFactoryInterface
{
    public function __construct(bool \$triggerDeprecation = true)
    {
        if (\$triggerDeprecation) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', __CLASS__), E_USER_DEPRECATED);
        }
    }

    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'simple-preauth';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->children()
                ->scalarNode('provider')->end()
                ->scalarNode('authenticator')->cannotBeEmpty()->end()
            ->end()
        ;
    }

    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        \$provider = 'security.authentication.provider.simple_preauth.'.\$id;
        \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.simple'))
            ->replaceArgument(0, new Reference(\$config['authenticator']))
            ->replaceArgument(1, new Reference(\$userProvider))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference('security.user_checker.'.\$id))
        ;

        // listener
        \$listenerId = 'security.authentication.listener.simple_preauth.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.simple_preauth'));
        \$listener->replaceArgument(2, \$id);
        \$listener->replaceArgument(3, new Reference(\$config['authenticator']));
        \$listener->addMethodCall('setSessionAuthenticationStrategy', [new Reference('security.authentication.session_strategy.'.\$id)]);

        return [\$provider, \$listenerId, null];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/SimplePreAuthenticationFactory.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimplePreAuthenticationFactory implements SecurityFactoryInterface
{
    public function __construct(bool \$triggerDeprecation = true)
    {
        if (\$triggerDeprecation) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', __CLASS__), E_USER_DEPRECATED);
        }
    }

    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'simple-preauth';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->children()
                ->scalarNode('provider')->end()
                ->scalarNode('authenticator')->cannotBeEmpty()->end()
            ->end()
        ;
    }

    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        \$provider = 'security.authentication.provider.simple_preauth.'.\$id;
        \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.simple'))
            ->replaceArgument(0, new Reference(\$config['authenticator']))
            ->replaceArgument(1, new Reference(\$userProvider))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference('security.user_checker.'.\$id))
        ;

        // listener
        \$listenerId = 'security.authentication.listener.simple_preauth.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.simple_preauth'));
        \$listener->replaceArgument(2, \$id);
        \$listener->replaceArgument(3, new Reference(\$config['authenticator']));
        \$listener->addMethodCall('setSessionAuthenticationStrategy', [new Reference('security.authentication.session_strategy.'.\$id)]);

        return [\$provider, \$listenerId, null];
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/SimplePreAuthenticationFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/Factory/SimplePreAuthenticationFactory.php");
    }
}
