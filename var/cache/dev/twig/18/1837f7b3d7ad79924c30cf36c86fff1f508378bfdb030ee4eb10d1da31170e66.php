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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeListener.php */
class __TwigTemplate_6bf21b0406c16ae7e21fdda63eaa58b92cd1c6fbb3ef7187a37e62d6444ae718 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeListener.php"));

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
 * Listens for changes within the Transport system.
 *
 * @author Chris Corbyn
 */
interface Swift_Events_TransportChangeListener extends Swift_Events_EventListener
{
    /**
     * Invoked just before a Transport is started.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function beforeTransportStarted(Swift_Events_TransportChangeEvent \$evt);

    /**
     * Invoked immediately after the Transport is started.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function transportStarted(Swift_Events_TransportChangeEvent \$evt);

    /**
     * Invoked just before a Transport is stopped.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function beforeTransportStopped(Swift_Events_TransportChangeEvent \$evt);

    /**
     * Invoked immediately after the Transport is stopped.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function transportStopped(Swift_Events_TransportChangeEvent \$evt);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeListener.php";
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
 * Listens for changes within the Transport system.
 *
 * @author Chris Corbyn
 */
interface Swift_Events_TransportChangeListener extends Swift_Events_EventListener
{
    /**
     * Invoked just before a Transport is started.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function beforeTransportStarted(Swift_Events_TransportChangeEvent \$evt);

    /**
     * Invoked immediately after the Transport is started.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function transportStarted(Swift_Events_TransportChangeEvent \$evt);

    /**
     * Invoked just before a Transport is stopped.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function beforeTransportStopped(Swift_Events_TransportChangeEvent \$evt);

    /**
     * Invoked immediately after the Transport is stopped.
     *
     * @param Swift_Events_TransportChangeEvent \$evt
     */
    public function transportStopped(Swift_Events_TransportChangeEvent \$evt);
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeListener.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeListener.php");
    }
}
