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

/* vendor/symfony/security-bundle/Debug/WrappedListener.php */
class __TwigTemplate_02423e7814763133085db916d8ef11130dcd7b9eeb1aaf573604b101f325c761 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Debug/WrappedListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Debug/WrappedListener.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Debug;

use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\LegacyListenerTrait;
use Symfony\\Component\\Security\\Http\\Firewall\\ListenerInterface;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;

/**
 * Wraps a security listener for calls record.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @internal since Symfony 4.3
 */
final class WrappedListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$response;
    private \$listener;
    private \$time;
    private \$stub;
    private static \$hasVarDumper;

    /**
     * @param callable \$listener
     */
    public function __construct(\$listener)
    {
        \$this->listener = \$listener;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke(RequestEvent \$event)
    {
        \$startTime = microtime(true);
        if (\\is_callable(\$this->listener)) {
            (\$this->listener)(\$event);
        } else {
            @trigger_error(sprintf('Calling the \"%s::handle()\" method from the firewall is deprecated since Symfony 4.3, implement \"__invoke()\" instead.', \\get_class(\$this->listener)), E_USER_DEPRECATED);
            \$this->listener->handle(\$event);
        }
        \$this->time = microtime(true) - \$startTime;
        \$this->response = \$event->getResponse();
    }

    /**
     * Proxies all method calls to the original listener.
     */
    public function __call(\$method, \$arguments)
    {
        return \$this->listener->{\$method}(...\$arguments);
    }

    public function getWrappedListener()
    {
        return \$this->listener;
    }

    public function getInfo(): array
    {
        if (null !== \$this->stub) {
            // no-op
        } elseif (self::\$hasVarDumper ?? self::\$hasVarDumper = class_exists(ClassStub::class)) {
            \$this->stub = ClassStub::wrapCallable(\$this->listener);
        } elseif (\\is_array(\$this->listener)) {
            \$this->stub = (\\is_object(\$this->listener[0]) ? \\get_class(\$this->listener[0]) : \$this->listener[0]).'::'.\$this->listener[1];
        } elseif (\$this->listener instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$this->listener);
            if (false !== strpos(\$r->name, '{closure}')) {
                \$this->stub = 'closure';
            } elseif (\$class = \$r->getClosureScopeClass()) {
                \$this->stub = \$class->name.'::'.\$r->name;
            } else {
                \$this->stub = \$r->name;
            }
        } elseif (\\is_string(\$this->listener)) {
            \$this->stub = \$this->listener;
        } else {
            \$this->stub = \\get_class(\$this->listener).'::__invoke';
        }

        return [
            'response' => \$this->response,
            'time' => \$this->time,
            'stub' => \$this->stub,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Debug/WrappedListener.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Debug;

use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\LegacyListenerTrait;
use Symfony\\Component\\Security\\Http\\Firewall\\ListenerInterface;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;

/**
 * Wraps a security listener for calls record.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @internal since Symfony 4.3
 */
final class WrappedListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$response;
    private \$listener;
    private \$time;
    private \$stub;
    private static \$hasVarDumper;

    /**
     * @param callable \$listener
     */
    public function __construct(\$listener)
    {
        \$this->listener = \$listener;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke(RequestEvent \$event)
    {
        \$startTime = microtime(true);
        if (\\is_callable(\$this->listener)) {
            (\$this->listener)(\$event);
        } else {
            @trigger_error(sprintf('Calling the \"%s::handle()\" method from the firewall is deprecated since Symfony 4.3, implement \"__invoke()\" instead.', \\get_class(\$this->listener)), E_USER_DEPRECATED);
            \$this->listener->handle(\$event);
        }
        \$this->time = microtime(true) - \$startTime;
        \$this->response = \$event->getResponse();
    }

    /**
     * Proxies all method calls to the original listener.
     */
    public function __call(\$method, \$arguments)
    {
        return \$this->listener->{\$method}(...\$arguments);
    }

    public function getWrappedListener()
    {
        return \$this->listener;
    }

    public function getInfo(): array
    {
        if (null !== \$this->stub) {
            // no-op
        } elseif (self::\$hasVarDumper ?? self::\$hasVarDumper = class_exists(ClassStub::class)) {
            \$this->stub = ClassStub::wrapCallable(\$this->listener);
        } elseif (\\is_array(\$this->listener)) {
            \$this->stub = (\\is_object(\$this->listener[0]) ? \\get_class(\$this->listener[0]) : \$this->listener[0]).'::'.\$this->listener[1];
        } elseif (\$this->listener instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$this->listener);
            if (false !== strpos(\$r->name, '{closure}')) {
                \$this->stub = 'closure';
            } elseif (\$class = \$r->getClosureScopeClass()) {
                \$this->stub = \$class->name.'::'.\$r->name;
            } else {
                \$this->stub = \$r->name;
            }
        } elseif (\\is_string(\$this->listener)) {
            \$this->stub = \$this->listener;
        } else {
            \$this->stub = \\get_class(\$this->listener).'::__invoke';
        }

        return [
            'response' => \$this->response,
            'time' => \$this->time,
            'stub' => \$this->stub,
        ];
    }
}
", "vendor/symfony/security-bundle/Debug/WrappedListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Debug/WrappedListener.php");
    }
}
