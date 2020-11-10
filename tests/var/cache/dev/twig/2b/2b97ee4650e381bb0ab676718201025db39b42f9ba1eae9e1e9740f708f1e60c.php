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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventObject.php */
class __TwigTemplate_df2f1e5f09d00ee74318d5fc71cec313eb6c36fff60e7f0b139ae069cbeb1768 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventObject.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventObject.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A base Event which all Event classes inherit from.
 *
 * @author Chris Corbyn
 */
class Swift_Events_EventObject implements Swift_Events_Event
{
    /** The source of this Event */
    private \$source;

    /** The state of this Event (should it bubble up the stack?) */
    private \$bubbleCancelled = false;

    /**
     * Create a new EventObject originating at \$source.
     *
     * @param object \$source
     */
    public function __construct(\$source)
    {
        \$this->source = \$source;
    }

    /**
     * Get the source object of this event.
     *
     * @return object
     */
    public function getSource()
    {
        return \$this->source;
    }

    /**
     * Prevent this Event from bubbling any further up the stack.
     */
    public function cancelBubble(\$cancel = true)
    {
        \$this->bubbleCancelled = \$cancel;
    }

    /**
     * Returns true if this Event will not bubble any further up the stack.
     *
     * @return bool
     */
    public function bubbleCancelled()
    {
        return \$this->bubbleCancelled;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventObject.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A base Event which all Event classes inherit from.
 *
 * @author Chris Corbyn
 */
class Swift_Events_EventObject implements Swift_Events_Event
{
    /** The source of this Event */
    private \$source;

    /** The state of this Event (should it bubble up the stack?) */
    private \$bubbleCancelled = false;

    /**
     * Create a new EventObject originating at \$source.
     *
     * @param object \$source
     */
    public function __construct(\$source)
    {
        \$this->source = \$source;
    }

    /**
     * Get the source object of this event.
     *
     * @return object
     */
    public function getSource()
    {
        return \$this->source;
    }

    /**
     * Prevent this Event from bubbling any further up the stack.
     */
    public function cancelBubble(\$cancel = true)
    {
        \$this->bubbleCancelled = \$cancel;
    }

    /**
     * Returns true if this Event will not bubble any further up the stack.
     *
     * @return bool
     */
    public function bubbleCancelled()
    {
        return \$this->bubbleCancelled;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventObject.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventObject.php");
    }
}
