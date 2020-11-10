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

/* vendor/swiftmailer/swiftmailer/tests/smoke.conf.php.default */
class __TwigTemplate_eab774a2255a2555519d86b861163326876aef85c02d7fd516c563ac435c99af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/smoke.conf.php.default"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/smoke.conf.php.default"));

        // line 1
        echo "<?php

/*
 Swift Mailer smoke test configuration.

 YOU ONLY NEED TO EDIT THIS FILE IF YOU WISH TO RUN THE SMOKE TESTS.

 The smoke tests are run by default when \"All Tests\" are run with the
 testing suite, however, without configuration options here only the unit tests
 will be run and the smoke tests will be skipped.
 */

/*
 Defines: The an address which Swift can send to (it will also send \"from\" this address).
 Recommended: (your own email address?)
 */
define('SWIFT_SMOKE_EMAIL_ADDRESS', 'test@swiftmailer.org');

/*
 Defines: The specific transport you want to mail with.
 Recommended: Any of 'smtp', 'sendmail' or 'mail'
 */
define('SWIFT_SMOKE_TRANSPORT_TYPE', 'smtp');

// SMTP-specific settings

/*
 Defines: An SMTP server to connect to
 Recommended: smtp.your-isp.com (varies wildly!)
 */
define('SWIFT_SMOKE_SMTP_HOST', 'localhost');

/*
 Defines: The SMTP port to connect to
 Recommended: 25
 */
define('SWIFT_SMOKE_SMTP_PORT', '4456');

/*
 Defines: A username to authenticate with SMTP (if needed).
 Recommended: (none)
 */
define('SWIFT_SMOKE_SMTP_USER', '');

/*
 Defines: A password to authenticate with SMTP (if needed).
 Recommended: (none)
 */
define('SWIFT_SMOKE_SMTP_PASS', '');

/*
 Defines: The encryption needed on your SMTP server.
 Recommended: (none), or 'tls' or 'ssl'
 */
define('SWIFT_SMOKE_SMTP_ENCRYPTION', '');

// Sendmail specific settings

/*
 Defines: The command to use when sending via sendmail
 Recommended: /usr/sbin/sendmail -bs (or \"-oi -t\")
 */
define('SWIFT_SMOKE_SENDMAIL_COMMAND', '/usr/sbin/sendmail -bs');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/smoke.conf.php.default";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 Swift Mailer smoke test configuration.

 YOU ONLY NEED TO EDIT THIS FILE IF YOU WISH TO RUN THE SMOKE TESTS.

 The smoke tests are run by default when \"All Tests\" are run with the
 testing suite, however, without configuration options here only the unit tests
 will be run and the smoke tests will be skipped.
 */

/*
 Defines: The an address which Swift can send to (it will also send \"from\" this address).
 Recommended: (your own email address?)
 */
define('SWIFT_SMOKE_EMAIL_ADDRESS', 'test@swiftmailer.org');

/*
 Defines: The specific transport you want to mail with.
 Recommended: Any of 'smtp', 'sendmail' or 'mail'
 */
define('SWIFT_SMOKE_TRANSPORT_TYPE', 'smtp');

// SMTP-specific settings

/*
 Defines: An SMTP server to connect to
 Recommended: smtp.your-isp.com (varies wildly!)
 */
define('SWIFT_SMOKE_SMTP_HOST', 'localhost');

/*
 Defines: The SMTP port to connect to
 Recommended: 25
 */
define('SWIFT_SMOKE_SMTP_PORT', '4456');

/*
 Defines: A username to authenticate with SMTP (if needed).
 Recommended: (none)
 */
define('SWIFT_SMOKE_SMTP_USER', '');

/*
 Defines: A password to authenticate with SMTP (if needed).
 Recommended: (none)
 */
define('SWIFT_SMOKE_SMTP_PASS', '');

/*
 Defines: The encryption needed on your SMTP server.
 Recommended: (none), or 'tls' or 'ssl'
 */
define('SWIFT_SMOKE_SMTP_ENCRYPTION', '');

// Sendmail specific settings

/*
 Defines: The command to use when sending via sendmail
 Recommended: /usr/sbin/sendmail -bs (or \"-oi -t\")
 */
define('SWIFT_SMOKE_SENDMAIL_COMMAND', '/usr/sbin/sendmail -bs');
", "vendor/swiftmailer/swiftmailer/tests/smoke.conf.php.default", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/smoke.conf.php.default");
    }
}
