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

/* vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php */
class __TwigTemplate_9dd34a998b710e575d1bc4abf8afc650785143e0bad65eef8d8c9c04509534fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php"));

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

namespace Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/**
 * Provides an intuitive error message when controller fails because it is not registered as a service.
 *
 * @author Simeon Kolev <simeon.kolev9@gmail.com>
 */
final class NotTaggedControllerValueResolver implements ArgumentValueResolverInterface
{
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        \$controller = \$request->attributes->get('_controller');

        if (\\is_array(\$controller) && \\is_callable(\$controller, true) && \\is_string(\$controller[0])) {
            \$controller = \$controller[0].'::'.\$controller[1];
        } elseif (!\\is_string(\$controller) || '' === \$controller) {
            return false;
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller) && false !== \$i = strrpos(\$controller, ':')) {
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        return false === \$this->container->has(\$controller);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        if (\\is_array(\$controller = \$request->attributes->get('_controller'))) {
            \$controller = \$controller[0].'::'.\$controller[1];
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller)) {
            \$i = strrpos(\$controller, ':');
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        \$what = sprintf('argument \$%s of \"%s()\"', \$argument->getName(), \$controller);
        \$message = sprintf('Could not resolve %s, maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?', \$what);

        throw new RuntimeException(\$message);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php";
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

namespace Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/**
 * Provides an intuitive error message when controller fails because it is not registered as a service.
 *
 * @author Simeon Kolev <simeon.kolev9@gmail.com>
 */
final class NotTaggedControllerValueResolver implements ArgumentValueResolverInterface
{
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        \$controller = \$request->attributes->get('_controller');

        if (\\is_array(\$controller) && \\is_callable(\$controller, true) && \\is_string(\$controller[0])) {
            \$controller = \$controller[0].'::'.\$controller[1];
        } elseif (!\\is_string(\$controller) || '' === \$controller) {
            return false;
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller) && false !== \$i = strrpos(\$controller, ':')) {
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        return false === \$this->container->has(\$controller);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        if (\\is_array(\$controller = \$request->attributes->get('_controller'))) {
            \$controller = \$controller[0].'::'.\$controller[1];
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller)) {
            \$i = strrpos(\$controller, ':');
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        \$what = sprintf('argument \$%s of \"%s()\"', \$argument->getName(), \$controller);
        \$message = sprintf('Could not resolve %s, maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?', \$what);

        throw new RuntimeException(\$message);
    }
}
", "vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php");
    }
}
