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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/ConfigurableSpool.php */
class __TwigTemplate_16b447c83c38d6aac54fffcb40e2773baecfebf401eeb0e5fb9ad7fc18b53852 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ConfigurableSpool.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ConfigurableSpool.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Base class for Spools (implements time and message limits).
 *
 * @author Fabien Potencier
 */
abstract class Swift_ConfigurableSpool implements Swift_Spool
{
    /** The maximum number of messages to send per flush */
    private \$message_limit;

    /** The time limit per flush */
    private \$time_limit;

    /**
     * Sets the maximum number of messages to send per flush.
     *
     * @param int \$limit
     */
    public function setMessageLimit(\$limit)
    {
        \$this->message_limit = (int) \$limit;
    }

    /**
     * Gets the maximum number of messages to send per flush.
     *
     * @return int The limit
     */
    public function getMessageLimit()
    {
        return \$this->message_limit;
    }

    /**
     * Sets the time limit (in seconds) per flush.
     *
     * @param int \$limit The limit
     */
    public function setTimeLimit(\$limit)
    {
        \$this->time_limit = (int) \$limit;
    }

    /**
     * Gets the time limit (in seconds) per flush.
     *
     * @return int The limit
     */
    public function getTimeLimit()
    {
        return \$this->time_limit;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ConfigurableSpool.php";
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
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Base class for Spools (implements time and message limits).
 *
 * @author Fabien Potencier
 */
abstract class Swift_ConfigurableSpool implements Swift_Spool
{
    /** The maximum number of messages to send per flush */
    private \$message_limit;

    /** The time limit per flush */
    private \$time_limit;

    /**
     * Sets the maximum number of messages to send per flush.
     *
     * @param int \$limit
     */
    public function setMessageLimit(\$limit)
    {
        \$this->message_limit = (int) \$limit;
    }

    /**
     * Gets the maximum number of messages to send per flush.
     *
     * @return int The limit
     */
    public function getMessageLimit()
    {
        return \$this->message_limit;
    }

    /**
     * Sets the time limit (in seconds) per flush.
     *
     * @param int \$limit The limit
     */
    public function setTimeLimit(\$limit)
    {
        \$this->time_limit = (int) \$limit;
    }

    /**
     * Gets the time limit (in seconds) per flush.
     *
     * @return int The limit
     */
    public function getTimeLimit()
    {
        return \$this->time_limit;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ConfigurableSpool.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ConfigurableSpool.php");
    }
}
