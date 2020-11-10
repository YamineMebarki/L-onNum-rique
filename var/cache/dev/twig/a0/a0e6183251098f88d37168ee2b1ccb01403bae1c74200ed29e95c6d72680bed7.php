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

/* vendor/symfony/form/Extension/DataCollector/EventListener/DataCollectorListener.php */
class __TwigTemplate_088a2a393d4f35781f272c773ac070d00d479685fe24f639a1cd09aeeabfbb0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/EventListener/DataCollectorListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/EventListener/DataCollectorListener.php"));

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

namespace Symfony\\Component\\Form\\Extension\\DataCollector\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollectorInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * Listener that invokes a data collector for the {@link FormEvents::POST_SET_DATA}
 * and {@link FormEvents::POST_SUBMIT} events.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DataCollectorListener implements EventSubscriberInterface
{
    private \$dataCollector;

    public function __construct(FormDataCollectorInterface \$dataCollector)
    {
        \$this->dataCollector = \$dataCollector;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            // High priority in order to be called as soon as possible
            FormEvents::POST_SET_DATA => ['postSetData', 255],
            // Low priority in order to be called as late as possible
            FormEvents::POST_SUBMIT => ['postSubmit', -255],
        ];
    }

    /**
     * Listener for the {@link FormEvents::POST_SET_DATA} event.
     */
    public function postSetData(FormEvent \$event)
    {
        if (\$event->getForm()->isRoot()) {
            // Collect basic information about each form
            \$this->dataCollector->collectConfiguration(\$event->getForm());

            // Collect the default data
            \$this->dataCollector->collectDefaultData(\$event->getForm());
        }
    }

    /**
     * Listener for the {@link FormEvents::POST_SUBMIT} event.
     */
    public function postSubmit(FormEvent \$event)
    {
        if (\$event->getForm()->isRoot()) {
            // Collect the submitted data of each form
            \$this->dataCollector->collectSubmittedData(\$event->getForm());

            // Assemble a form tree
            // This is done again after the view is built, but we need it here as the view is not always created.
            \$this->dataCollector->buildPreliminaryFormTree(\$event->getForm());
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/DataCollector/EventListener/DataCollectorListener.php";
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

namespace Symfony\\Component\\Form\\Extension\\DataCollector\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollectorInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * Listener that invokes a data collector for the {@link FormEvents::POST_SET_DATA}
 * and {@link FormEvents::POST_SUBMIT} events.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DataCollectorListener implements EventSubscriberInterface
{
    private \$dataCollector;

    public function __construct(FormDataCollectorInterface \$dataCollector)
    {
        \$this->dataCollector = \$dataCollector;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            // High priority in order to be called as soon as possible
            FormEvents::POST_SET_DATA => ['postSetData', 255],
            // Low priority in order to be called as late as possible
            FormEvents::POST_SUBMIT => ['postSubmit', -255],
        ];
    }

    /**
     * Listener for the {@link FormEvents::POST_SET_DATA} event.
     */
    public function postSetData(FormEvent \$event)
    {
        if (\$event->getForm()->isRoot()) {
            // Collect basic information about each form
            \$this->dataCollector->collectConfiguration(\$event->getForm());

            // Collect the default data
            \$this->dataCollector->collectDefaultData(\$event->getForm());
        }
    }

    /**
     * Listener for the {@link FormEvents::POST_SUBMIT} event.
     */
    public function postSubmit(FormEvent \$event)
    {
        if (\$event->getForm()->isRoot()) {
            // Collect the submitted data of each form
            \$this->dataCollector->collectSubmittedData(\$event->getForm());

            // Assemble a form tree
            // This is done again after the view is built, but we need it here as the view is not always created.
            \$this->dataCollector->buildPreliminaryFormTree(\$event->getForm());
        }
    }
}
", "vendor/symfony/form/Extension/DataCollector/EventListener/DataCollectorListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/DataCollector/EventListener/DataCollectorListener.php");
    }
}
