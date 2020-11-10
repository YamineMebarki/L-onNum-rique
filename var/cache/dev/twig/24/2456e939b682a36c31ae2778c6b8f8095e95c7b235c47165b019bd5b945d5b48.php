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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/Utf8AddressEncoder.php */
class __TwigTemplate_039cce9a8157c79f6effac3edddf00723fd07821c2b939635cd7557187581e73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/Utf8AddressEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/Utf8AddressEncoder.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2018 Christian Schmidt
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A UTF-8 email address encoder.
 *
 * Returns the email address verbatimly in UTF-8 as permitted by RFC 6531 and
 * RFC 6532. It supports addresses containing non-ASCII characters in both
 * local-part and domain (i.e. on both sides of @).
 *
 * This encoder must be used together with Swift_Transport_Esmtp_SmtpUtf8Handler
 * and requires that the outbound SMTP server supports the SMTPUTF8 extension.
 *
 * If your outbound SMTP server does not support SMTPUTF8, use
 * Swift_AddressEncoder_IdnAddressEncoder instead. This allows sending to email
 * addresses with non-ASCII characters in the domain, but not in local-part.
 *
 * @author Christian Schmidt
 */
class Swift_AddressEncoder_Utf8AddressEncoder implements Swift_AddressEncoder
{
    /**
     * Returns the address verbatimly.
     */
    public function encodeString(string \$address): string
    {
        return \$address;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/Utf8AddressEncoder.php";
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
 * (c) 2018 Christian Schmidt
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A UTF-8 email address encoder.
 *
 * Returns the email address verbatimly in UTF-8 as permitted by RFC 6531 and
 * RFC 6532. It supports addresses containing non-ASCII characters in both
 * local-part and domain (i.e. on both sides of @).
 *
 * This encoder must be used together with Swift_Transport_Esmtp_SmtpUtf8Handler
 * and requires that the outbound SMTP server supports the SMTPUTF8 extension.
 *
 * If your outbound SMTP server does not support SMTPUTF8, use
 * Swift_AddressEncoder_IdnAddressEncoder instead. This allows sending to email
 * addresses with non-ASCII characters in the domain, but not in local-part.
 *
 * @author Christian Schmidt
 */
class Swift_AddressEncoder_Utf8AddressEncoder implements Swift_AddressEncoder
{
    /**
     * Returns the address verbatimly.
     */
    public function encodeString(string \$address): string
    {
        return \$address;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/Utf8AddressEncoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/Utf8AddressEncoder.php");
    }
}
