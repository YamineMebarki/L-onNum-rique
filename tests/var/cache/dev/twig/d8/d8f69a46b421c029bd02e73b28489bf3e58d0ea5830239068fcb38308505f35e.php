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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HitReporter.php */
class __TwigTemplate_467334d9efdd8796e0a04d8def35ba00ed68f673f23c0b045dfc226fe54d1625 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HitReporter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HitReporter.php"));

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
 * A reporter which \"collects\" failures for the Reporter plugin.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_Reporters_HitReporter implements Swift_Plugins_Reporter
{
    /**
     * The list of failures.
     *
     * @var array
     */
    private \$failures = [];

    private \$failures_cache = [];

    /**
     * Notifies this ReportNotifier that \$address failed or succeeded.
     *
     * @param string \$address
     * @param int    \$result  from {@link RESULT_PASS, RESULT_FAIL}
     */
    public function notify(Swift_Mime_SimpleMessage \$message, \$address, \$result)
    {
        if (self::RESULT_FAIL == \$result && !isset(\$this->failures_cache[\$address])) {
            \$this->failures[] = \$address;
            \$this->failures_cache[\$address] = true;
        }
    }

    /**
     * Get an array of addresses for which delivery failed.
     *
     * @return array
     */
    public function getFailedRecipients()
    {
        return \$this->failures;
    }

    /**
     * Clear the buffer (empty the list).
     */
    public function clear()
    {
        \$this->failures = \$this->failures_cache = [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HitReporter.php";
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
 * A reporter which \"collects\" failures for the Reporter plugin.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_Reporters_HitReporter implements Swift_Plugins_Reporter
{
    /**
     * The list of failures.
     *
     * @var array
     */
    private \$failures = [];

    private \$failures_cache = [];

    /**
     * Notifies this ReportNotifier that \$address failed or succeeded.
     *
     * @param string \$address
     * @param int    \$result  from {@link RESULT_PASS, RESULT_FAIL}
     */
    public function notify(Swift_Mime_SimpleMessage \$message, \$address, \$result)
    {
        if (self::RESULT_FAIL == \$result && !isset(\$this->failures_cache[\$address])) {
            \$this->failures[] = \$address;
            \$this->failures_cache[\$address] = true;
        }
    }

    /**
     * Get an array of addresses for which delivery failed.
     *
     * @return array
     */
    public function getFailedRecipients()
    {
        return \$this->failures;
    }

    /**
     * Clear the buffer (empty the list).
     */
    public function clear()
    {
        \$this->failures = \$this->failures_cache = [];
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HitReporter.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HitReporter.php");
    }
}
