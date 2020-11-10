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

/* vendor/symfony/framework-bundle/Controller/AbstractController.php */
class __TwigTemplate_f9d0b4ef7e1bf243cae08347c8fcf9a8c1b0df2337382b26b4e1976c3ab855dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/AbstractController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/AbstractController.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Messenger\\MessageBusInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Serializer\\SerializerInterface;
use Symfony\\Component\\Templating\\EngineInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Twig\\Environment;

/**
 * Provides common features needed in controllers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractController implements ServiceSubscriberInterface
{
    use ControllerTrait;

    /**
     * @var ContainerInterface
     */
    protected \$container;

    /**
     * @internal
     * @required
     */
    public function setContainer(ContainerInterface \$container)
    {
        \$previous = \$this->container;
        \$this->container = \$container;

        return \$previous;
    }

    /**
     * Gets a container parameter by its name.
     *
     * @return mixed
     *
     * @final
     */
    protected function getParameter(string \$name)
    {
        if (!\$this->container->has('parameter_bag')) {
            throw new ServiceNotFoundException('parameter_bag', null, null, [], sprintf('The \"%s::getParameter()\" method is missing a parameter bag to work properly. Did you forget to register your controller as a service subscriber? This can be fixed either by using autoconfiguration or by manually wiring a \"parameter_bag\" in the service locator passed to the controller.', \\get_class(\$this)));
        }

        return \$this->container->get('parameter_bag')->get(\$name);
    }

    public static function getSubscribedServices()
    {
        return [
            'router' => '?'.RouterInterface::class,
            'request_stack' => '?'.RequestStack::class,
            'http_kernel' => '?'.HttpKernelInterface::class,
            'serializer' => '?'.SerializerInterface::class,
            'session' => '?'.SessionInterface::class,
            'security.authorization_checker' => '?'.AuthorizationCheckerInterface::class,
            'templating' => '?'.EngineInterface::class,
            'twig' => '?'.Environment::class,
            'doctrine' => '?'.ManagerRegistry::class,
            'form.factory' => '?'.FormFactoryInterface::class,
            'security.token_storage' => '?'.TokenStorageInterface::class,
            'security.csrf.token_manager' => '?'.CsrfTokenManagerInterface::class,
            'parameter_bag' => '?'.ContainerBagInterface::class,
            'message_bus' => '?'.MessageBusInterface::class,
            'messenger.default_bus' => '?'.MessageBusInterface::class,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Controller/AbstractController.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Messenger\\MessageBusInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Serializer\\SerializerInterface;
use Symfony\\Component\\Templating\\EngineInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Twig\\Environment;

/**
 * Provides common features needed in controllers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractController implements ServiceSubscriberInterface
{
    use ControllerTrait;

    /**
     * @var ContainerInterface
     */
    protected \$container;

    /**
     * @internal
     * @required
     */
    public function setContainer(ContainerInterface \$container)
    {
        \$previous = \$this->container;
        \$this->container = \$container;

        return \$previous;
    }

    /**
     * Gets a container parameter by its name.
     *
     * @return mixed
     *
     * @final
     */
    protected function getParameter(string \$name)
    {
        if (!\$this->container->has('parameter_bag')) {
            throw new ServiceNotFoundException('parameter_bag', null, null, [], sprintf('The \"%s::getParameter()\" method is missing a parameter bag to work properly. Did you forget to register your controller as a service subscriber? This can be fixed either by using autoconfiguration or by manually wiring a \"parameter_bag\" in the service locator passed to the controller.', \\get_class(\$this)));
        }

        return \$this->container->get('parameter_bag')->get(\$name);
    }

    public static function getSubscribedServices()
    {
        return [
            'router' => '?'.RouterInterface::class,
            'request_stack' => '?'.RequestStack::class,
            'http_kernel' => '?'.HttpKernelInterface::class,
            'serializer' => '?'.SerializerInterface::class,
            'session' => '?'.SessionInterface::class,
            'security.authorization_checker' => '?'.AuthorizationCheckerInterface::class,
            'templating' => '?'.EngineInterface::class,
            'twig' => '?'.Environment::class,
            'doctrine' => '?'.ManagerRegistry::class,
            'form.factory' => '?'.FormFactoryInterface::class,
            'security.token_storage' => '?'.TokenStorageInterface::class,
            'security.csrf.token_manager' => '?'.CsrfTokenManagerInterface::class,
            'parameter_bag' => '?'.ContainerBagInterface::class,
            'message_bus' => '?'.MessageBusInterface::class,
            'messenger.default_bus' => '?'.MessageBusInterface::class,
        ];
    }
}
", "vendor/symfony/framework-bundle/Controller/AbstractController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Controller/AbstractController.php");
    }
}
