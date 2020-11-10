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

/* vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php */
class __TwigTemplate_b755cd077ec1d5db7d6e029cb87271f3604772eead0fb632dbc3d9bc7a8647f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php"));

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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * Provides timing information via the stopwatch.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class TraceableValueResolver implements ArgumentValueResolverInterface
{
    private \$inner;
    private \$stopwatch;

    public function __construct(ArgumentValueResolverInterface \$inner, Stopwatch \$stopwatch)
    {
        \$this->inner = \$inner;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument): bool
    {
        \$method = \\get_class(\$this->inner).'::'.__FUNCTION__;
        \$this->stopwatch->start(\$method, 'controller.argument_value_resolver');

        \$return = \$this->inner->supports(\$request, \$argument);

        \$this->stopwatch->stop(\$method);

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
    {
        \$method = \\get_class(\$this->inner).'::'.__FUNCTION__;
        \$this->stopwatch->start(\$method, 'controller.argument_value_resolver');

        yield from \$this->inner->resolve(\$request, \$argument);

        \$this->stopwatch->stop(\$method);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php";
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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * Provides timing information via the stopwatch.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class TraceableValueResolver implements ArgumentValueResolverInterface
{
    private \$inner;
    private \$stopwatch;

    public function __construct(ArgumentValueResolverInterface \$inner, Stopwatch \$stopwatch)
    {
        \$this->inner = \$inner;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument): bool
    {
        \$method = \\get_class(\$this->inner).'::'.__FUNCTION__;
        \$this->stopwatch->start(\$method, 'controller.argument_value_resolver');

        \$return = \$this->inner->supports(\$request, \$argument);

        \$this->stopwatch->stop(\$method);

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
    {
        \$method = \\get_class(\$this->inner).'::'.__FUNCTION__;
        \$this->stopwatch->start(\$method, 'controller.argument_value_resolver');

        yield from \$this->inner->resolve(\$request, \$argument);

        \$this->stopwatch->stop(\$method);
    }
}
", "vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php");
    }
}
