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

/* vendor/swiftmailer/swiftmailer/tests/acceptance.conf.php.default */
class __TwigTemplate_a894820b7dec1219a76d2e48eb4e468d9580f75b3d7e239ac9ac2409d35e2ed9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance.conf.php.default"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance.conf.php.default"));

        // line 1
        echo "<?php

/*
 Swift Mailer acceptance test configuration.

 YOU ONLY NEED TO EDIT THIS FILE IF YOU WISH TO RUN THE ACCEPTANCE TESTS.

 The acceptance tests are run by default when \"All Tests\" are run with the
 testing suite, however, without configuration options here only the unit tests
 will be run and the acceptance tests will be skipped.
 
 You can fill out only the parts you know and leave the other bits.
 */

/*
 Defines: The name and port of a SMTP server you can connect to.
 Recommended: smtp.gmail.com:25
 */
define('SWIFT_SMTP_HOST', 'localhost:4456');

/*
 Defines: An SMTP server and port which uses TLS encryption.
 Recommended: smtp.gmail.com:465
 */
define('SWIFT_TLS_HOST', 'smtp.gmail.com:465');

/*
 Defines: An SMTP server and port which uses SSL encryption.
 Recommended: smtp.gmail.com:465
 */
define('SWIFT_SSL_HOST', 'smtp.gmail.com:465');

/*
 Defines: The path to a sendmail binary (one which can run in -bs mode).
 Recommended: /usr/sbin/sendmail
 */
define('SWIFT_SENDMAIL_PATH', '/usr/sbin/sendmail -bs');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance.conf.php.default";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 Swift Mailer acceptance test configuration.

 YOU ONLY NEED TO EDIT THIS FILE IF YOU WISH TO RUN THE ACCEPTANCE TESTS.

 The acceptance tests are run by default when \"All Tests\" are run with the
 testing suite, however, without configuration options here only the unit tests
 will be run and the acceptance tests will be skipped.
 
 You can fill out only the parts you know and leave the other bits.
 */

/*
 Defines: The name and port of a SMTP server you can connect to.
 Recommended: smtp.gmail.com:25
 */
define('SWIFT_SMTP_HOST', 'localhost:4456');

/*
 Defines: An SMTP server and port which uses TLS encryption.
 Recommended: smtp.gmail.com:465
 */
define('SWIFT_TLS_HOST', 'smtp.gmail.com:465');

/*
 Defines: An SMTP server and port which uses SSL encryption.
 Recommended: smtp.gmail.com:465
 */
define('SWIFT_SSL_HOST', 'smtp.gmail.com:465');

/*
 Defines: The path to a sendmail binary (one which can run in -bs mode).
 Recommended: /usr/sbin/sendmail
 */
define('SWIFT_SENDMAIL_PATH', '/usr/sbin/sendmail -bs');
", "vendor/swiftmailer/swiftmailer/tests/acceptance.conf.php.default", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance.conf.php.default");
    }
}
