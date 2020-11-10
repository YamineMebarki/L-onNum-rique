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

/* vendor/symfony/security-bundle/DependencyInjection/Security/Factory/FormLoginFactory.php */
class __TwigTemplate_e5f9f3dd15c4850985910e9142be61a9d354395dad51fed21c48e52b7991ecbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/FormLoginFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/FormLoginFactory.php"));

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
 * FormLoginFactory creates services for form login authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FormLoginFactory extends AbstractFactory
{
    public function __construct()
    {
        \$this->addOption('username_parameter', '_username');
        \$this->addOption('password_parameter', '_password');
        \$this->addOption('csrf_parameter', '_csrf_token');
        \$this->addOption('csrf_token_id', 'authenticate');
        \$this->addOption('post_only', true);
    }

    public function getPosition()
    {
        return 'form';
    }

    public function getKey()
    {
        return 'form-login';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        parent::addConfiguration(\$node);

        \$node
            ->children()
                ->scalarNode('csrf_token_generator')->cannotBeEmpty()->end()
            ->end()
        ;
    }

    protected function getListenerId()
    {
        return 'security.authentication.listener.form';
    }

    protected function createAuthProvider(ContainerBuilder \$container, \$id, \$config, \$userProviderId)
    {
        \$provider = 'security.authentication.provider.dao.'.\$id;
        \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.dao'))
            ->replaceArgument(0, new Reference(\$userProviderId))
            ->replaceArgument(1, new Reference('security.user_checker.'.\$id))
            ->replaceArgument(2, \$id)
        ;

        return \$provider;
    }

    protected function createListener(\$container, \$id, \$config, \$userProvider)
    {
        \$listenerId = parent::createListener(\$container, \$id, \$config, \$userProvider);

        \$container
            ->getDefinition(\$listenerId)
            ->addArgument(isset(\$config['csrf_token_generator']) ? new Reference(\$config['csrf_token_generator']) : null)
        ;

        return \$listenerId;
    }

    protected function createEntryPoint(\$container, \$id, \$config, \$defaultEntryPoint)
    {
        \$entryPointId = 'security.authentication.form_entry_point.'.\$id;
        \$container
            ->setDefinition(\$entryPointId, new ChildDefinition('security.authentication.form_entry_point'))
            ->addArgument(new Reference('security.http_utils'))
            ->addArgument(\$config['login_path'])
            ->addArgument(\$config['use_forward'])
        ;

        return \$entryPointId;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/FormLoginFactory.php";
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
 * FormLoginFactory creates services for form login authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FormLoginFactory extends AbstractFactory
{
    public function __construct()
    {
        \$this->addOption('username_parameter', '_username');
        \$this->addOption('password_parameter', '_password');
        \$this->addOption('csrf_parameter', '_csrf_token');
        \$this->addOption('csrf_token_id', 'authenticate');
        \$this->addOption('post_only', true);
    }

    public function getPosition()
    {
        return 'form';
    }

    public function getKey()
    {
        return 'form-login';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        parent::addConfiguration(\$node);

        \$node
            ->children()
                ->scalarNode('csrf_token_generator')->cannotBeEmpty()->end()
            ->end()
        ;
    }

    protected function getListenerId()
    {
        return 'security.authentication.listener.form';
    }

    protected function createAuthProvider(ContainerBuilder \$container, \$id, \$config, \$userProviderId)
    {
        \$provider = 'security.authentication.provider.dao.'.\$id;
        \$container
            ->setDefinition(\$provider, new ChildDefinition('security.authentication.provider.dao'))
            ->replaceArgument(0, new Reference(\$userProviderId))
            ->replaceArgument(1, new Reference('security.user_checker.'.\$id))
            ->replaceArgument(2, \$id)
        ;

        return \$provider;
    }

    protected function createListener(\$container, \$id, \$config, \$userProvider)
    {
        \$listenerId = parent::createListener(\$container, \$id, \$config, \$userProvider);

        \$container
            ->getDefinition(\$listenerId)
            ->addArgument(isset(\$config['csrf_token_generator']) ? new Reference(\$config['csrf_token_generator']) : null)
        ;

        return \$listenerId;
    }

    protected function createEntryPoint(\$container, \$id, \$config, \$defaultEntryPoint)
    {
        \$entryPointId = 'security.authentication.form_entry_point.'.\$id;
        \$container
            ->setDefinition(\$entryPointId, new ChildDefinition('security.authentication.form_entry_point'))
            ->addArgument(new Reference('security.http_utils'))
            ->addArgument(\$config['login_path'])
            ->addArgument(\$config['use_forward'])
        ;

        return \$entryPointId;
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/FormLoginFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/Factory/FormLoginFactory.php");
    }
}
