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

/* vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginFactory.php */
class __TwigTemplate_40aa9fdeb70e990d7afec3397f6e1837a937d6d4416d2210ec2be9c579fdbee1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginFactory.php"));

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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * JsonLoginFactory creates services for JSON login authentication.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class JsonLoginFactory extends AbstractFactory
{
    public function __construct()
    {
        \$this->addOption('username_path', 'username');
        \$this->addOption('password_path', 'password');
        \$this->defaultFailureHandlerOptions = [];
        \$this->defaultSuccessHandlerOptions = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return 'json-login';
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
    protected function getListenerId()
    {
        return 'security.authentication.listener.json';
    }

    /**
     * {@inheritdoc}
     */
    protected function isRememberMeAware(\$config)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function createListener(\$container, \$id, \$config, \$userProvider)
    {
        \$listenerId = \$this->getListenerId();
        \$listener = new ChildDefinition(\$listenerId);
        \$listener->replaceArgument(3, \$id);
        \$listener->replaceArgument(4, isset(\$config['success_handler']) ? new Reference(\$this->createAuthenticationSuccessHandler(\$container, \$id, \$config)) : null);
        \$listener->replaceArgument(5, isset(\$config['failure_handler']) ? new Reference(\$this->createAuthenticationFailureHandler(\$container, \$id, \$config)) : null);
        \$listener->replaceArgument(6, array_intersect_key(\$config, \$this->options));
        \$listener->addMethodCall('setSessionAuthenticationStrategy', [new Reference('security.authentication.session_strategy.'.\$id)]);

        \$listenerId .= '.'.\$id;
        \$container->setDefinition(\$listenerId, \$listener);

        return \$listenerId;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginFactory.php";
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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * JsonLoginFactory creates services for JSON login authentication.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class JsonLoginFactory extends AbstractFactory
{
    public function __construct()
    {
        \$this->addOption('username_path', 'username');
        \$this->addOption('password_path', 'password');
        \$this->defaultFailureHandlerOptions = [];
        \$this->defaultSuccessHandlerOptions = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return 'json-login';
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
    protected function getListenerId()
    {
        return 'security.authentication.listener.json';
    }

    /**
     * {@inheritdoc}
     */
    protected function isRememberMeAware(\$config)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function createListener(\$container, \$id, \$config, \$userProvider)
    {
        \$listenerId = \$this->getListenerId();
        \$listener = new ChildDefinition(\$listenerId);
        \$listener->replaceArgument(3, \$id);
        \$listener->replaceArgument(4, isset(\$config['success_handler']) ? new Reference(\$this->createAuthenticationSuccessHandler(\$container, \$id, \$config)) : null);
        \$listener->replaceArgument(5, isset(\$config['failure_handler']) ? new Reference(\$this->createAuthenticationFailureHandler(\$container, \$id, \$config)) : null);
        \$listener->replaceArgument(6, array_intersect_key(\$config, \$this->options));
        \$listener->addMethodCall('setSessionAuthenticationStrategy', [new Reference('security.authentication.session_strategy.'.\$id)]);

        \$listenerId .= '.'.\$id;
        \$container->setDefinition(\$listenerId, \$listener);

        return \$listenerId;
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/Factory/JsonLoginFactory.php");
    }
}
