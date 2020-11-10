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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandEvent.php */
class __TwigTemplate_e78e78b184eb672223adbfaa655ebc04f0ea4379a0c93fe9a0ecda8b04ffe092 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandEvent.php"));

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
 * Generated when a command is sent over an SMTP connection.
 *
 * @author Chris Corbyn
 */
class Swift_Events_CommandEvent extends Swift_Events_EventObject
{
    /**
     * The command sent to the server.
     *
     * @var string
     */
    private \$command;

    /**
     * An array of codes which a successful response will contain.
     *
     * @var int[]
     */
    private \$successCodes = [];

    /**
     * Create a new CommandEvent for \$source with \$command.
     *
     * @param string \$command
     * @param array  \$successCodes
     */
    public function __construct(Swift_Transport \$source, \$command, \$successCodes = [])
    {
        parent::__construct(\$source);
        \$this->command = \$command;
        \$this->successCodes = \$successCodes;
    }

    /**
     * Get the command which was sent to the server.
     *
     * @return string
     */
    public function getCommand()
    {
        return \$this->command;
    }

    /**
     * Get the numeric response codes which indicate success for this command.
     *
     * @return int[]
     */
    public function getSuccessCodes()
    {
        return \$this->successCodes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandEvent.php";
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
 * Generated when a command is sent over an SMTP connection.
 *
 * @author Chris Corbyn
 */
class Swift_Events_CommandEvent extends Swift_Events_EventObject
{
    /**
     * The command sent to the server.
     *
     * @var string
     */
    private \$command;

    /**
     * An array of codes which a successful response will contain.
     *
     * @var int[]
     */
    private \$successCodes = [];

    /**
     * Create a new CommandEvent for \$source with \$command.
     *
     * @param string \$command
     * @param array  \$successCodes
     */
    public function __construct(Swift_Transport \$source, \$command, \$successCodes = [])
    {
        parent::__construct(\$source);
        \$this->command = \$command;
        \$this->successCodes = \$successCodes;
    }

    /**
     * Get the command which was sent to the server.
     *
     * @return string
     */
    public function getCommand()
    {
        return \$this->command;
    }

    /**
     * Get the numeric response codes which indicate success for this command.
     *
     * @return int[]
     */
    public function getSuccessCodes()
    {
        return \$this->successCodes;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandEvent.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandEvent.php");
    }
}
