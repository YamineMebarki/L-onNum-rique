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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporter.php */
class __TwigTemplate_5153960f0300751fffbed40fb06318610e3559cb5e329d7fa4a95fb6f3a5f372 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporter.php"));

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
 * The Reporter plugin sends pass/fail notification to a Reporter.
 *
 * @author Chris Corbyn
 */
interface Swift_Plugins_Reporter
{
    /** The recipient was accepted for delivery */
    const RESULT_PASS = 0x01;

    /** The recipient could not be accepted */
    const RESULT_FAIL = 0x10;

    /**
     * Notifies this ReportNotifier that \$address failed or succeeded.
     *
     * @param Swift_Mime_SimpleMessage \$message
     * @param string                   \$address
     * @param int                      \$result  from {@link RESULT_PASS, RESULT_FAIL}
     */
    public function notify(Swift_Mime_SimpleMessage \$message, \$address, \$result);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporter.php";
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
 * The Reporter plugin sends pass/fail notification to a Reporter.
 *
 * @author Chris Corbyn
 */
interface Swift_Plugins_Reporter
{
    /** The recipient was accepted for delivery */
    const RESULT_PASS = 0x01;

    /** The recipient could not be accepted */
    const RESULT_FAIL = 0x10;

    /**
     * Notifies this ReportNotifier that \$address failed or succeeded.
     *
     * @param Swift_Mime_SimpleMessage \$message
     * @param string                   \$address
     * @param int                      \$result  from {@link RESULT_PASS, RESULT_FAIL}
     */
    public function notify(Swift_Mime_SimpleMessage \$message, \$address, \$result);
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporter.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporter.php");
    }
}
