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

/* vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginLdapFactory.php */
class __TwigTemplate_9ab253d0792c030113dccb0585eb8303bfbc4f2a1b3e1fa8405a2b552520a122 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginLdapFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginLdapFactory.php"));

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
 * JsonLoginLdapFactory creates services for json login ldap authentication.
 */
class JsonLoginLdapFactory extends JsonLoginFactory
{
    public function getKey()
    {
        return 'json-login-ldap';
    }

    protected function createAuthProvider(ContainerBuilder \$container, \$id, \$config, \$userProviderId)
    {
        \$provider = 'security.authentication.provider.ldap_bind.'.\$id;
        \$definition = \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.ldap_bind'))
            ->replaceArgument(0, new Reference(\$userProviderId))
            ->replaceArgument(1, new Reference('security.user_checker.'.\$id))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference(\$config['service']))
            ->replaceArgument(4, \$config['dn_string'])
        ;

        if (!empty(\$config['query_string'])) {
            \$definition->addMethodCall('setQueryString', [\$config['query_string']]);
        }

        return \$provider;
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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginLdapFactory.php";
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
 * JsonLoginLdapFactory creates services for json login ldap authentication.
 */
class JsonLoginLdapFactory extends JsonLoginFactory
{
    public function getKey()
    {
        return 'json-login-ldap';
    }

    protected function createAuthProvider(ContainerBuilder \$container, \$id, \$config, \$userProviderId)
    {
        \$provider = 'security.authentication.provider.ldap_bind.'.\$id;
        \$definition = \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.ldap_bind'))
            ->replaceArgument(0, new Reference(\$userProviderId))
            ->replaceArgument(1, new Reference('security.user_checker.'.\$id))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference(\$config['service']))
            ->replaceArgument(4, \$config['dn_string'])
        ;

        if (!empty(\$config['query_string'])) {
            \$definition->addMethodCall('setQueryString', [\$config['query_string']]);
        }

        return \$provider;
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
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginLdapFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginLdapFactory.php");
    }
}
