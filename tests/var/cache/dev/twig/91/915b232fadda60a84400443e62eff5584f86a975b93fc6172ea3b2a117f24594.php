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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/EchoLogger.php */
class __TwigTemplate_8393fb99a3381c570e747cd8343cd94d9b835a1731cd705fa3b67d1cf1482ac4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/EchoLogger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/EchoLogger.php"));

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
 * Prints all log messages in real time.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_Loggers_EchoLogger implements Swift_Plugins_Logger
{
    /** Whether or not HTML should be output */
    private \$isHtml;

    /**
     * Create a new EchoLogger.
     *
     * @param bool \$isHtml
     */
    public function __construct(\$isHtml = true)
    {
        \$this->isHtml = \$isHtml;
    }

    /**
     * Add a log entry.
     *
     * @param string \$entry
     */
    public function add(\$entry)
    {
        if (\$this->isHtml) {
            printf('%s%s%s', htmlspecialchars(\$entry, ENT_QUOTES), '<br />', PHP_EOL);
        } else {
            printf('%s%s', \$entry, PHP_EOL);
        }
    }

    /**
     * Not implemented.
     */
    public function clear()
    {
    }

    /**
     * Not implemented.
     */
    public function dump()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/EchoLogger.php";
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
 * Prints all log messages in real time.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_Loggers_EchoLogger implements Swift_Plugins_Logger
{
    /** Whether or not HTML should be output */
    private \$isHtml;

    /**
     * Create a new EchoLogger.
     *
     * @param bool \$isHtml
     */
    public function __construct(\$isHtml = true)
    {
        \$this->isHtml = \$isHtml;
    }

    /**
     * Add a log entry.
     *
     * @param string \$entry
     */
    public function add(\$entry)
    {
        if (\$this->isHtml) {
            printf('%s%s%s', htmlspecialchars(\$entry, ENT_QUOTES), '<br />', PHP_EOL);
        } else {
            printf('%s%s', \$entry, PHP_EOL);
        }
    }

    /**
     * Not implemented.
     */
    public function clear()
    {
    }

    /**
     * Not implemented.
     */
    public function dump()
    {
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/EchoLogger.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/EchoLogger.php");
    }
}
