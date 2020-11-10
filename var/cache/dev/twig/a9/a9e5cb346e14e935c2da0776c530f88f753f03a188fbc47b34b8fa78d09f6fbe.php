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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/ArrayLogger.php */
class __TwigTemplate_203df33e85481b91d80d705f99f1fb330e7b043626ebc20cdb850a7fbb677148 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/ArrayLogger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/ArrayLogger.php"));

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
 * Logs to an Array backend.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_Loggers_ArrayLogger implements Swift_Plugins_Logger
{
    /**
     * The log contents.
     *
     * @var array
     */
    private \$log = [];

    /**
     * Max size of the log.
     *
     * @var int
     */
    private \$size = 0;

    /**
     * Create a new ArrayLogger with a maximum of \$size entries.
     *
     * @var int
     */
    public function __construct(\$size = 50)
    {
        \$this->size = \$size;
    }

    /**
     * Add a log entry.
     *
     * @param string \$entry
     */
    public function add(\$entry)
    {
        \$this->log[] = \$entry;
        while (count(\$this->log) > \$this->size) {
            array_shift(\$this->log);
        }
    }

    /**
     * Clear the log contents.
     */
    public function clear()
    {
        \$this->log = [];
    }

    /**
     * Get this log as a string.
     *
     * @return string
     */
    public function dump()
    {
        return implode(PHP_EOL, \$this->log);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/ArrayLogger.php";
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
 * Logs to an Array backend.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_Loggers_ArrayLogger implements Swift_Plugins_Logger
{
    /**
     * The log contents.
     *
     * @var array
     */
    private \$log = [];

    /**
     * Max size of the log.
     *
     * @var int
     */
    private \$size = 0;

    /**
     * Create a new ArrayLogger with a maximum of \$size entries.
     *
     * @var int
     */
    public function __construct(\$size = 50)
    {
        \$this->size = \$size;
    }

    /**
     * Add a log entry.
     *
     * @param string \$entry
     */
    public function add(\$entry)
    {
        \$this->log[] = \$entry;
        while (count(\$this->log) > \$this->size) {
            array_shift(\$this->log);
        }
    }

    /**
     * Clear the log contents.
     */
    public function clear()
    {
        \$this->log = [];
    }

    /**
     * Get this log as a string.
     *
     * @return string
     */
    public function dump()
    {
        return implode(PHP_EOL, \$this->log);
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/ArrayLogger.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/ArrayLogger.php");
    }
}
