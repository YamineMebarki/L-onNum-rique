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

/* vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/InMemoryFactory.php */
class __TwigTemplate_09d4131f1400435900686a808035baf88c838dd31633eea889e835a38b2ecb54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/InMemoryFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/InMemoryFactory.php"));

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
use Symfony\\Component\\DependencyInjection\\Parameter;

/**
 * InMemoryFactory creates services for the memory provider.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class InMemoryFactory implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder \$container, \$id, \$config)
    {
        \$definition = \$container->setDefinition(\$id, new ChildDefinition('security.user.provider.in_memory'));
        \$defaultPassword = new Parameter('container.build_id');
        \$users = [];

        foreach (\$config['users'] as \$username => \$user) {
            \$users[\$username] = ['password' => null !== \$user['password'] ? (string) \$user['password'] : \$defaultPassword, 'roles' => \$user['roles']];
        }

        \$definition->addArgument(\$users);
    }

    public function getKey()
    {
        return 'memory';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->fixXmlConfig('user')
            ->children()
                ->arrayNode('users')
                    ->useAttributeAsKey('name')
                    ->normalizeKeys(false)
                    ->prototype('array')
                        ->children()
                            ->scalarNode('password')->defaultNull()->end()
                            ->arrayNode('roles')
                                ->beforeNormalization()->ifString()->then(function (\$v) { return preg_split('/\\s*,\\s*/', \$v); })->end()
                                ->prototype('scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
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
        return "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/InMemoryFactory.php";
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
use Symfony\\Component\\DependencyInjection\\Parameter;

/**
 * InMemoryFactory creates services for the memory provider.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class InMemoryFactory implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder \$container, \$id, \$config)
    {
        \$definition = \$container->setDefinition(\$id, new ChildDefinition('security.user.provider.in_memory'));
        \$defaultPassword = new Parameter('container.build_id');
        \$users = [];

        foreach (\$config['users'] as \$username => \$user) {
            \$users[\$username] = ['password' => null !== \$user['password'] ? (string) \$user['password'] : \$defaultPassword, 'roles' => \$user['roles']];
        }

        \$definition->addArgument(\$users);
    }

    public function getKey()
    {
        return 'memory';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->fixXmlConfig('user')
            ->children()
                ->arrayNode('users')
                    ->useAttributeAsKey('name')
                    ->normalizeKeys(false)
                    ->prototype('array')
                        ->children()
                            ->scalarNode('password')->defaultNull()->end()
                            ->arrayNode('roles')
                                ->beforeNormalization()->ifString()->then(function (\$v) { return preg_split('/\\s*,\\s*/', \$v); })->end()
                                ->prototype('scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/InMemoryFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/UserProvider/InMemoryFactory.php");
    }
}
