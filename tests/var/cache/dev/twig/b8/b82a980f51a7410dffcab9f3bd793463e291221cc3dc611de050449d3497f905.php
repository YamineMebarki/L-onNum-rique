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

/* vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php */
class __TwigTemplate_6b9e2a855803cbd1904f9c9c61109f66bcffecc89bda43cdeef10c39c3492fcf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php"));

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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableControllerResolver implements ControllerResolverInterface
{
    private \$resolver;
    private \$stopwatch;

    public function __construct(ControllerResolverInterface \$resolver, Stopwatch \$stopwatch)
    {
        \$this->resolver = \$resolver;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     */
    public function getController(Request \$request)
    {
        \$e = \$this->stopwatch->start('controller.get_callable');

        \$ret = \$this->resolver->getController(\$request);

        \$e->stop();

        return \$ret;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php";
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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableControllerResolver implements ControllerResolverInterface
{
    private \$resolver;
    private \$stopwatch;

    public function __construct(ControllerResolverInterface \$resolver, Stopwatch \$stopwatch)
    {
        \$this->resolver = \$resolver;
        \$this->stopwatch = \$stopwatch;
    }

    /**
     * {@inheritdoc}
     */
    public function getController(Request \$request)
    {
        \$e = \$this->stopwatch->start('controller.get_callable');

        \$ret = \$this->resolver->getController(\$request);

        \$e->stop();

        return \$ret;
    }
}
", "vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php");
    }
}
