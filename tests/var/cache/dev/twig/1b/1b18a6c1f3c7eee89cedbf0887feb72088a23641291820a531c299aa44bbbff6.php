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

/* vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/LdapFactory.php */
class __TwigTemplate_b24253dca181fe316ec569b4e0b55a6a02cb8760d0c6fbf45bc77c4d2abf2636 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/LdapFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/LdapFactory.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * LdapFactory creates services for Ldap user provider.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class LdapFactory implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder \$container, \$id, \$config)
    {
        \$container
            ->setDefinition(\$id, new ChildDefinition('security.user.provider.ldap'))
            ->replaceArgument(0, new Reference(\$config['service']))
            ->replaceArgument(1, \$config['base_dn'])
            ->replaceArgument(2, \$config['search_dn'])
            ->replaceArgument(3, \$config['search_password'])
            ->replaceArgument(4, \$config['default_roles'])
            ->replaceArgument(5, \$config['uid_key'])
            ->replaceArgument(6, \$config['filter'])
            ->replaceArgument(7, \$config['password_attribute'])
        ;
    }

    public function getKey()
    {
        return 'ldap';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->children()
                ->scalarNode('service')->isRequired()->cannotBeEmpty()->defaultValue('ldap')->end()
                ->scalarNode('base_dn')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('search_dn')->end()
                ->scalarNode('search_password')->end()
                ->arrayNode('default_roles')
                    ->beforeNormalization()->ifString()->then(function (\$v) { return preg_split('/\\s*,\\s*/', \$v); })->end()
                    ->requiresAtLeastOneElement()
                    ->prototype('scalar')->end()
                ->end()
                ->scalarNode('uid_key')->defaultValue('sAMAccountName')->end()
                ->scalarNode('filter')->defaultValue('({uid_key}={username})')->end()
                ->scalarNode('password_attribute')->defaultNull()->end()
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
        return "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/LdapFactory.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * LdapFactory creates services for Ldap user provider.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class LdapFactory implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder \$container, \$id, \$config)
    {
        \$container
            ->setDefinition(\$id, new ChildDefinition('security.user.provider.ldap'))
            ->replaceArgument(0, new Reference(\$config['service']))
            ->replaceArgument(1, \$config['base_dn'])
            ->replaceArgument(2, \$config['search_dn'])
            ->replaceArgument(3, \$config['search_password'])
            ->replaceArgument(4, \$config['default_roles'])
            ->replaceArgument(5, \$config['uid_key'])
            ->replaceArgument(6, \$config['filter'])
            ->replaceArgument(7, \$config['password_attribute'])
        ;
    }

    public function getKey()
    {
        return 'ldap';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->children()
                ->scalarNode('service')->isRequired()->cannotBeEmpty()->defaultValue('ldap')->end()
                ->scalarNode('base_dn')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('search_dn')->end()
                ->scalarNode('search_password')->end()
                ->arrayNode('default_roles')
                    ->beforeNormalization()->ifString()->then(function (\$v) { return preg_split('/\\s*,\\s*/', \$v); })->end()
                    ->requiresAtLeastOneElement()
                    ->prototype('scalar')->end()
                ->end()
                ->scalarNode('uid_key')->defaultValue('sAMAccountName')->end()
                ->scalarNode('filter')->defaultValue('({uid_key}={username})')->end()
                ->scalarNode('password_attribute')->defaultNull()->end()
            ->end()
        ;
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/LdapFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/LdapFactory.php");
    }
}
