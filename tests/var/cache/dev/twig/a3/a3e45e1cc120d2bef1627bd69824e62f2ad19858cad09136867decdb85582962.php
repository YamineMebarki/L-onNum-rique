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

/* vendor/symfony/security-bundle/DependencyInjection/Security/Factory/HttpBasicLdapFactory.php */
class __TwigTemplate_d770a5f25b471b58cfff03a485bf5add692d0a61b3d78d1fb312e72864b31faf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/HttpBasicLdapFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/HttpBasicLdapFactory.php"));

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
 * HttpBasicFactory creates services for HTTP basic authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class HttpBasicLdapFactory extends HttpBasicFactory
{
    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        \$provider = 'security.authentication.provider.ldap_bind.'.\$id;
        \$definition = \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.ldap_bind'))
            ->replaceArgument(0, new Reference(\$userProvider))
            ->replaceArgument(1, new Reference('security.user_checker.'.\$id))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference(\$config['service']))
            ->replaceArgument(4, \$config['dn_string'])
        ;

        // entry point
        \$entryPointId = \$this->createEntryPoint(\$container, \$id, \$config, \$defaultEntryPoint);

        if (!empty(\$config['query_string'])) {
            \$definition->addMethodCall('setQueryString', [\$config['query_string']]);
        }

        // listener
        \$listenerId = 'security.authentication.listener.basic.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.basic'));
        \$listener->replaceArgument(2, \$id);
        \$listener->replaceArgument(3, new Reference(\$entryPointId));

        return [\$provider, \$listenerId, \$entryPointId];
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        parent::addConfiguration(\$node);

        \$node
            ->children()
                ->scalarNode('service')->defaultValue('ldap')->end()
                ->scalarNode('dn_string')->defaultValue('{username}')->end()
                ->scalarNode('query_string')->end()
            ->end()
        ;
    }

    public function getKey()
    {
        return 'http-basic-ldap';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/HttpBasicLdapFactory.php";
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
 * HttpBasicFactory creates services for HTTP basic authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class HttpBasicLdapFactory extends HttpBasicFactory
{
    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        \$provider = 'security.authentication.provider.ldap_bind.'.\$id;
        \$definition = \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.ldap_bind'))
            ->replaceArgument(0, new Reference(\$userProvider))
            ->replaceArgument(1, new Reference('security.user_checker.'.\$id))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference(\$config['service']))
            ->replaceArgument(4, \$config['dn_string'])
        ;

        // entry point
        \$entryPointId = \$this->createEntryPoint(\$container, \$id, \$config, \$defaultEntryPoint);

        if (!empty(\$config['query_string'])) {
            \$definition->addMethodCall('setQueryString', [\$config['query_string']]);
        }

        // listener
        \$listenerId = 'security.authentication.listener.basic.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.basic'));
        \$listener->replaceArgument(2, \$id);
        \$listener->replaceArgument(3, new Reference(\$entryPointId));

        return [\$provider, \$listenerId, \$entryPointId];
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        parent::addConfiguration(\$node);

        \$node
            ->children()
                ->scalarNode('service')->defaultValue('ldap')->end()
                ->scalarNode('dn_string')->defaultValue('{username}')->end()
                ->scalarNode('query_string')->end()
            ->end()
        ;
    }

    public function getKey()
    {
        return 'http-basic-ldap';
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/HttpBasicLdapFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/Factory/HttpBasicLdapFactory.php");
    }
}
