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

/* vendor/symfony/framework-bundle/Controller/ControllerResolver.php */
class __TwigTemplate_1a31734bfb5903b90061b7066f3ba2bb04d06f50211a032721307c19cbef40f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/ControllerResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/ControllerResolver.php"));

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

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ContainerControllerResolver;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ControllerResolver extends ContainerControllerResolver
{
    protected \$parser;

    public function __construct(ContainerInterface \$container, ControllerNameParser \$parser, LoggerInterface \$logger = null)
    {
        \$this->parser = \$parser;

        parent::__construct(\$container, \$logger);
    }

    /**
     * {@inheritdoc}
     */
    protected function createController(\$controller)
    {
        if (false === strpos(\$controller, '::') && 2 === substr_count(\$controller, ':')) {
            // controller in the a:b:c notation then
            \$deprecatedNotation = \$controller;
            \$controller = \$this->parser->parse(\$deprecatedNotation, false);

            @trigger_error(sprintf('Referencing controllers with %s is deprecated since Symfony 4.1. Use %s instead.', \$deprecatedNotation, \$controller), E_USER_DEPRECATED);
        }

        return parent::createController(\$controller);
    }

    /**
     * {@inheritdoc}
     */
    protected function instantiateController(\$class)
    {
        return \$this->configureController(parent::instantiateController(\$class), \$class);
    }

    private function configureController(\$controller, string \$class)
    {
        if (\$controller instanceof ContainerAwareInterface) {
            \$controller->setContainer(\$this->container);
        }
        if (\$controller instanceof AbstractController) {
            if (null === \$previousContainer = \$controller->setContainer(\$this->container)) {
                @trigger_error(sprintf('Auto-injection of the container for \"%s\" is deprecated since Symfony 4.2. Configure it as a service instead.', \$class), E_USER_DEPRECATED);
            // To be uncommented on Symfony 5:
                //throw new \\LogicException(sprintf('\"%s\" has no container set, did you forget to define it as a service subscriber?', \$class));
            } else {
                \$controller->setContainer(\$previousContainer);
            }
        }

        return \$controller;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Controller/ControllerResolver.php";
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

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ContainerControllerResolver;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ControllerResolver extends ContainerControllerResolver
{
    protected \$parser;

    public function __construct(ContainerInterface \$container, ControllerNameParser \$parser, LoggerInterface \$logger = null)
    {
        \$this->parser = \$parser;

        parent::__construct(\$container, \$logger);
    }

    /**
     * {@inheritdoc}
     */
    protected function createController(\$controller)
    {
        if (false === strpos(\$controller, '::') && 2 === substr_count(\$controller, ':')) {
            // controller in the a:b:c notation then
            \$deprecatedNotation = \$controller;
            \$controller = \$this->parser->parse(\$deprecatedNotation, false);

            @trigger_error(sprintf('Referencing controllers with %s is deprecated since Symfony 4.1. Use %s instead.', \$deprecatedNotation, \$controller), E_USER_DEPRECATED);
        }

        return parent::createController(\$controller);
    }

    /**
     * {@inheritdoc}
     */
    protected function instantiateController(\$class)
    {
        return \$this->configureController(parent::instantiateController(\$class), \$class);
    }

    private function configureController(\$controller, string \$class)
    {
        if (\$controller instanceof ContainerAwareInterface) {
            \$controller->setContainer(\$this->container);
        }
        if (\$controller instanceof AbstractController) {
            if (null === \$previousContainer = \$controller->setContainer(\$this->container)) {
                @trigger_error(sprintf('Auto-injection of the container for \"%s\" is deprecated since Symfony 4.2. Configure it as a service instead.', \$class), E_USER_DEPRECATED);
            // To be uncommented on Symfony 5:
                //throw new \\LogicException(sprintf('\"%s\" has no container set, did you forget to define it as a service subscriber?', \$class));
            } else {
                \$controller->setContainer(\$previousContainer);
            }
        }

        return \$controller;
    }
}
", "vendor/symfony/framework-bundle/Controller/ControllerResolver.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Controller/ControllerResolver.php");
    }
}
