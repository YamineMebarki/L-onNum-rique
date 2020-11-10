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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/IdnAddressEncoder.php */
class __TwigTemplate_0bbd9faacc222a0a0df2f0338640367bcade3dc6c125e9624452003d1b425109 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/IdnAddressEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/IdnAddressEncoder.php"));

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
 * An IDN email address encoder.
 *
 * Encodes the domain part of an address using IDN. This is compatible will all
 * SMTP servers.
 *
 * This encoder does not support email addresses with non-ASCII characters in
 * local-part (the substring before @). To send to such addresses, use
 * Swift_AddressEncoder_Utf8AddressEncoder together with
 * Swift_Transport_Esmtp_SmtpUtf8Handler. Your outbound SMTP server must support
 * the SMTPUTF8 extension.
 *
 * @author Christian Schmidt
 */
class Swift_AddressEncoder_IdnAddressEncoder implements Swift_AddressEncoder
{
    /**
     * Encodes the domain part of an address using IDN.
     *
     * @throws Swift_AddressEncoderException If local-part contains non-ASCII characters
     */
    public function encodeString(string \$address): string
    {
        \$i = strrpos(\$address, '@');
        if (false !== \$i) {
            \$local = substr(\$address, 0, \$i);
            \$domain = substr(\$address, \$i + 1);

            if (preg_match('/[^\\x00-\\x7F]/', \$local)) {
                throw new Swift_AddressEncoderException('Non-ASCII characters not supported in local-part', \$address);
            }

            if (preg_match('/[^\\x00-\\x7F]/', \$domain)) {
                \$address = sprintf('%s@%s', \$local, idn_to_ascii(\$domain, 0, INTL_IDNA_VARIANT_UTS46));
            }
        }

        return \$address;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/IdnAddressEncoder.php";
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
 * An IDN email address encoder.
 *
 * Encodes the domain part of an address using IDN. This is compatible will all
 * SMTP servers.
 *
 * This encoder does not support email addresses with non-ASCII characters in
 * local-part (the substring before @). To send to such addresses, use
 * Swift_AddressEncoder_Utf8AddressEncoder together with
 * Swift_Transport_Esmtp_SmtpUtf8Handler. Your outbound SMTP server must support
 * the SMTPUTF8 extension.
 *
 * @author Christian Schmidt
 */
class Swift_AddressEncoder_IdnAddressEncoder implements Swift_AddressEncoder
{
    /**
     * Encodes the domain part of an address using IDN.
     *
     * @throws Swift_AddressEncoderException If local-part contains non-ASCII characters
     */
    public function encodeString(string \$address): string
    {
        \$i = strrpos(\$address, '@');
        if (false !== \$i) {
            \$local = substr(\$address, 0, \$i);
            \$domain = substr(\$address, \$i + 1);

            if (preg_match('/[^\\x00-\\x7F]/', \$local)) {
                throw new Swift_AddressEncoderException('Non-ASCII characters not supported in local-part', \$address);
            }

            if (preg_match('/[^\\x00-\\x7F]/', \$domain)) {
                \$address = sprintf('%s@%s', \$local, idn_to_ascii(\$domain, 0, INTL_IDNA_VARIANT_UTS46));
            }
        }

        return \$address;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/IdnAddressEncoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/AddressEncoder/IdnAddressEncoder.php");
    }
}
