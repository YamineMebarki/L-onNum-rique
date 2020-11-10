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

/* vendor/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php */
class __TwigTemplate_f18226463070b0f96b6e9095565b991db2fcb349a9cdac2e192812703c0b77d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator\\Validation;

use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\Exception\\InvalidEmail;
use Egulias\\EmailValidator\\Warning\\NoDNSMXRecord;
use Egulias\\EmailValidator\\Exception\\NoDNSRecord;

class DNSCheckValidation implements EmailValidation
{
    /**
     * @var array
     */
    private \$warnings = [];

    /**
     * @var InvalidEmail
     */
    private \$error;
    
    public function __construct()
    {
        if (!extension_loaded('intl')) {
            throw new \\LogicException(sprintf('The %s class requires the Intl extension.', __CLASS__));
        }
    }

    public function isValid(\$email, EmailLexer \$emailLexer)
    {
        // use the input to check DNS if we cannot extract something similar to a domain
        \$host = \$email;

        // Arguable pattern to extract the domain. Not aiming to validate the domain nor the email
        if (false !== \$lastAtPos = strrpos(\$email, '@')) {
            \$host = substr(\$email, \$lastAtPos + 1);
        }

        return \$this->checkDNS(\$host);
    }

    public function getError()
    {
        return \$this->error;
    }

    public function getWarnings()
    {
        return \$this->warnings;
    }

    protected function checkDNS(\$host)
    {
        \$variant = INTL_IDNA_VARIANT_2003;
        if ( defined('INTL_IDNA_VARIANT_UTS46') ) {
            \$variant = INTL_IDNA_VARIANT_UTS46;
        }
        \$host = rtrim(idn_to_ascii(\$host, IDNA_DEFAULT, \$variant), '.') . '.';

        \$Aresult = true;
        \$MXresult = checkdnsrr(\$host, 'MX');

        if (!\$MXresult) {
            \$this->warnings[NoDNSMXRecord::CODE] = new NoDNSMXRecord();
            \$Aresult = checkdnsrr(\$host, 'A') || checkdnsrr(\$host, 'AAAA');
            if (!\$Aresult) {
                \$this->error = new NoDNSRecord();
            }
        }
        return \$MXresult || \$Aresult;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Egulias\\EmailValidator\\Validation;

use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\Exception\\InvalidEmail;
use Egulias\\EmailValidator\\Warning\\NoDNSMXRecord;
use Egulias\\EmailValidator\\Exception\\NoDNSRecord;

class DNSCheckValidation implements EmailValidation
{
    /**
     * @var array
     */
    private \$warnings = [];

    /**
     * @var InvalidEmail
     */
    private \$error;
    
    public function __construct()
    {
        if (!extension_loaded('intl')) {
            throw new \\LogicException(sprintf('The %s class requires the Intl extension.', __CLASS__));
        }
    }

    public function isValid(\$email, EmailLexer \$emailLexer)
    {
        // use the input to check DNS if we cannot extract something similar to a domain
        \$host = \$email;

        // Arguable pattern to extract the domain. Not aiming to validate the domain nor the email
        if (false !== \$lastAtPos = strrpos(\$email, '@')) {
            \$host = substr(\$email, \$lastAtPos + 1);
        }

        return \$this->checkDNS(\$host);
    }

    public function getError()
    {
        return \$this->error;
    }

    public function getWarnings()
    {
        return \$this->warnings;
    }

    protected function checkDNS(\$host)
    {
        \$variant = INTL_IDNA_VARIANT_2003;
        if ( defined('INTL_IDNA_VARIANT_UTS46') ) {
            \$variant = INTL_IDNA_VARIANT_UTS46;
        }
        \$host = rtrim(idn_to_ascii(\$host, IDNA_DEFAULT, \$variant), '.') . '.';

        \$Aresult = true;
        \$MXresult = checkdnsrr(\$host, 'MX');

        if (!\$MXresult) {
            \$this->warnings[NoDNSMXRecord::CODE] = new NoDNSMXRecord();
            \$Aresult = checkdnsrr(\$host, 'A') || checkdnsrr(\$host, 'AAAA');
            if (!\$Aresult) {
                \$this->error = new NoDNSRecord();
            }
        }
        return \$MXresult || \$Aresult;
    }
}
", "vendor/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php");
    }
}
