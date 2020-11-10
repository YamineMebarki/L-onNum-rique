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

/* vendor/monolog/monolog/src/Monolog/Handler/SamplingHandler.php */
class __TwigTemplate_78f91cde2816298179bd2186dcbf1e3cbe178c03549782a5ca8f69d694de1b71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SamplingHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SamplingHandler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

/**
 * Sampling handler
 *
 * A sampled event stream can be useful for logging high frequency events in
 * a production environment where you only need an idea of what is happening
 * and are not concerned with capturing every occurrence. Since the decision to
 * handle or not handle a particular event is determined randomly, the
 * resulting sampled log is not guaranteed to contain 1/N of the events that
 * occurred in the application, but based on the Law of large numbers, it will
 * tend to be close to this ratio with a large number of attempts.
 *
 * @author Bryan Davis <bd808@wikimedia.org>
 * @author Kunal Mehta <legoktm@gmail.com>
 */
class SamplingHandler extends AbstractHandler
{
    /**
     * @var callable|HandlerInterface \$handler
     */
    protected \$handler;

    /**
     * @var int \$factor
     */
    protected \$factor;

    /**
     * @param callable|HandlerInterface \$handler Handler or factory callable(\$record, \$fingersCrossedHandler).
     * @param int                       \$factor  Sample factor
     */
    public function __construct(\$handler, \$factor)
    {
        parent::__construct();
        \$this->handler = \$handler;
        \$this->factor = \$factor;

        if (!\$this->handler instanceof HandlerInterface && !is_callable(\$this->handler)) {
            throw new \\RuntimeException(\"The given handler (\".json_encode(\$this->handler).\") is not a callable nor a Monolog\\Handler\\HandlerInterface object\");
        }
    }

    public function isHandling(array \$record)
    {
        return \$this->handler->isHandling(\$record);
    }

    public function handle(array \$record)
    {
        if (\$this->isHandling(\$record) && mt_rand(1, \$this->factor) === 1) {
            // The same logic as in FingersCrossedHandler
            if (!\$this->handler instanceof HandlerInterface) {
                \$this->handler = call_user_func(\$this->handler, \$record, \$this);
                if (!\$this->handler instanceof HandlerInterface) {
                    throw new \\RuntimeException(\"The factory callable should return a HandlerInterface\");
                }
            }

            if (\$this->processors) {
                foreach (\$this->processors as \$processor) {
                    \$record = call_user_func(\$processor, \$record);
                }
            }

            \$this->handler->handle(\$record);
        }

        return false === \$this->bubble;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/SamplingHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

/**
 * Sampling handler
 *
 * A sampled event stream can be useful for logging high frequency events in
 * a production environment where you only need an idea of what is happening
 * and are not concerned with capturing every occurrence. Since the decision to
 * handle or not handle a particular event is determined randomly, the
 * resulting sampled log is not guaranteed to contain 1/N of the events that
 * occurred in the application, but based on the Law of large numbers, it will
 * tend to be close to this ratio with a large number of attempts.
 *
 * @author Bryan Davis <bd808@wikimedia.org>
 * @author Kunal Mehta <legoktm@gmail.com>
 */
class SamplingHandler extends AbstractHandler
{
    /**
     * @var callable|HandlerInterface \$handler
     */
    protected \$handler;

    /**
     * @var int \$factor
     */
    protected \$factor;

    /**
     * @param callable|HandlerInterface \$handler Handler or factory callable(\$record, \$fingersCrossedHandler).
     * @param int                       \$factor  Sample factor
     */
    public function __construct(\$handler, \$factor)
    {
        parent::__construct();
        \$this->handler = \$handler;
        \$this->factor = \$factor;

        if (!\$this->handler instanceof HandlerInterface && !is_callable(\$this->handler)) {
            throw new \\RuntimeException(\"The given handler (\".json_encode(\$this->handler).\") is not a callable nor a Monolog\\Handler\\HandlerInterface object\");
        }
    }

    public function isHandling(array \$record)
    {
        return \$this->handler->isHandling(\$record);
    }

    public function handle(array \$record)
    {
        if (\$this->isHandling(\$record) && mt_rand(1, \$this->factor) === 1) {
            // The same logic as in FingersCrossedHandler
            if (!\$this->handler instanceof HandlerInterface) {
                \$this->handler = call_user_func(\$this->handler, \$record, \$this);
                if (!\$this->handler instanceof HandlerInterface) {
                    throw new \\RuntimeException(\"The factory callable should return a HandlerInterface\");
                }
            }

            if (\$this->processors) {
                foreach (\$this->processors as \$processor) {
                    \$record = call_user_func(\$processor, \$record);
                }
            }

            \$this->handler->handle(\$record);
        }

        return false === \$this->bubble;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/SamplingHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SamplingHandler.php");
    }
}
