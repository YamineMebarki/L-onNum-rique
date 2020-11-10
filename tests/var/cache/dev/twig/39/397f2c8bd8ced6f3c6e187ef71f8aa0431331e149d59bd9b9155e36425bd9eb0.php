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

/* vendor/symfony/event-dispatcher/LegacyEventProxy.php */
class __TwigTemplate_575b88737e4b20a8d3e2ed3f0b6b84f1b8bf7c8173bcea6ef2993b0ec4a9360a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/LegacyEventProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/LegacyEventProxy.php"));

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

namespace Symfony\\Component\\EventDispatcher;

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

/**
 * @internal to be removed in 5.0.
 */
final class LegacyEventProxy extends Event
{
    private \$event;

    /**
     * @param object \$event
     */
    public function __construct(\$event)
    {
        \$this->event = \$event;
    }

    /**
     * @return object \$event
     */
    public function getEvent()
    {
        return \$this->event;
    }

    public function isPropagationStopped()
    {
        if (!\$this->event instanceof ContractsEvent && !\$this->event instanceof StoppableEventInterface) {
            return false;
        }

        return \$this->event->isPropagationStopped();
    }

    public function stopPropagation()
    {
        if (!\$this->event instanceof ContractsEvent) {
            return;
        }

        \$this->event->stopPropagation();
    }

    public function __call(\$name, \$args)
    {
        return \$this->event->{\$name}(...\$args);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/LegacyEventProxy.php";
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

namespace Symfony\\Component\\EventDispatcher;

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

/**
 * @internal to be removed in 5.0.
 */
final class LegacyEventProxy extends Event
{
    private \$event;

    /**
     * @param object \$event
     */
    public function __construct(\$event)
    {
        \$this->event = \$event;
    }

    /**
     * @return object \$event
     */
    public function getEvent()
    {
        return \$this->event;
    }

    public function isPropagationStopped()
    {
        if (!\$this->event instanceof ContractsEvent && !\$this->event instanceof StoppableEventInterface) {
            return false;
        }

        return \$this->event->isPropagationStopped();
    }

    public function stopPropagation()
    {
        if (!\$this->event instanceof ContractsEvent) {
            return;
        }

        \$this->event->stopPropagation();
    }

    public function __call(\$name, \$args)
    {
        return \$this->event->{\$name}(...\$args);
    }
}
", "vendor/symfony/event-dispatcher/LegacyEventProxy.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/LegacyEventProxy.php");
    }
}
