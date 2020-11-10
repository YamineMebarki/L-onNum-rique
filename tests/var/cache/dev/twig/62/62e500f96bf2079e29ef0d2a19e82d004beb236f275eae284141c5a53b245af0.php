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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseEvent.php */
class __TwigTemplate_b001747435bd95cca656b9d343af935c53fa9f50c4f18f4232bd86b5908ad0eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseEvent.php"));

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
 * Generated when a response is received on a SMTP connection.
 *
 * @author Chris Corbyn
 */
class Swift_Events_ResponseEvent extends Swift_Events_EventObject
{
    /**
     * The overall result.
     *
     * @var bool
     */
    private \$valid;

    /**
     * The response received from the server.
     *
     * @var string
     */
    private \$response;

    /**
     * Create a new ResponseEvent for \$source and \$response.
     *
     * @param string \$response
     * @param bool   \$valid
     */
    public function __construct(Swift_Transport \$source, \$response, \$valid = false)
    {
        parent::__construct(\$source);
        \$this->response = \$response;
        \$this->valid = \$valid;
    }

    /**
     * Get the response which was received from the server.
     *
     * @return string
     */
    public function getResponse()
    {
        return \$this->response;
    }

    /**
     * Get the success status of this Event.
     *
     * @return bool
     */
    public function isValid()
    {
        return \$this->valid;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseEvent.php";
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
 * Generated when a response is received on a SMTP connection.
 *
 * @author Chris Corbyn
 */
class Swift_Events_ResponseEvent extends Swift_Events_EventObject
{
    /**
     * The overall result.
     *
     * @var bool
     */
    private \$valid;

    /**
     * The response received from the server.
     *
     * @var string
     */
    private \$response;

    /**
     * Create a new ResponseEvent for \$source and \$response.
     *
     * @param string \$response
     * @param bool   \$valid
     */
    public function __construct(Swift_Transport \$source, \$response, \$valid = false)
    {
        parent::__construct(\$source);
        \$this->response = \$response;
        \$this->valid = \$valid;
    }

    /**
     * Get the response which was received from the server.
     *
     * @return string
     */
    public function getResponse()
    {
        return \$this->response;
    }

    /**
     * Get the success status of this Event.
     *
     * @return bool
     */
    public function isValid()
    {
        return \$this->valid;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseEvent.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseEvent.php");
    }
}
