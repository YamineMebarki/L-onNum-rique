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

/* vendor/symfony/mime/Encoder/IdnAddressEncoder.php */
class __TwigTemplate_d9e2d664b8b83cf1c4fc4e88b31108ccf066ac69db0faff035ca545806a32fcb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/IdnAddressEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/IdnAddressEncoder.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Mime\\Encoder;

use Symfony\\Component\\Mime\\Exception\\AddressEncoderException;

/**
 * An IDN email address encoder.
 *
 * Encodes the domain part of an address using IDN. This is compatible will all
 * SMTP servers.
 *
 * This encoder does not support email addresses with non-ASCII characters in
 * local-part (the substring before @). To send to such addresses, use
 * Utf8AddressEncoder together with SmtpUtf8Handler. Your outbound SMTP server must support
 * the SMTPUTF8 extension.
 *
 * @author Christian Schmidt
 *
 * @experimental in 4.3
 */
final class IdnAddressEncoder implements AddressEncoderInterface
{
    /**
     * Encodes the domain part of an address using IDN.
     *
     * @throws AddressEncoderException If local-part contains non-ASCII characters
     */
    public function encodeString(string \$address): string
    {
        \$i = strrpos(\$address, '@');
        if (false !== \$i) {
            \$local = substr(\$address, 0, \$i);
            \$domain = substr(\$address, \$i + 1);

            if (preg_match('/[^\\x00-\\x7F]/', \$local)) {
                throw new AddressEncoderException(sprintf('Non-ASCII characters not supported in local-part os \"%s\".', \$address));
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
        return "vendor/symfony/mime/Encoder/IdnAddressEncoder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Mime\\Encoder;

use Symfony\\Component\\Mime\\Exception\\AddressEncoderException;

/**
 * An IDN email address encoder.
 *
 * Encodes the domain part of an address using IDN. This is compatible will all
 * SMTP servers.
 *
 * This encoder does not support email addresses with non-ASCII characters in
 * local-part (the substring before @). To send to such addresses, use
 * Utf8AddressEncoder together with SmtpUtf8Handler. Your outbound SMTP server must support
 * the SMTPUTF8 extension.
 *
 * @author Christian Schmidt
 *
 * @experimental in 4.3
 */
final class IdnAddressEncoder implements AddressEncoderInterface
{
    /**
     * Encodes the domain part of an address using IDN.
     *
     * @throws AddressEncoderException If local-part contains non-ASCII characters
     */
    public function encodeString(string \$address): string
    {
        \$i = strrpos(\$address, '@');
        if (false !== \$i) {
            \$local = substr(\$address, 0, \$i);
            \$domain = substr(\$address, \$i + 1);

            if (preg_match('/[^\\x00-\\x7F]/', \$local)) {
                throw new AddressEncoderException(sprintf('Non-ASCII characters not supported in local-part os \"%s\".', \$address));
            }

            if (preg_match('/[^\\x00-\\x7F]/', \$domain)) {
                \$address = sprintf('%s@%s', \$local, idn_to_ascii(\$domain, 0, INTL_IDNA_VARIANT_UTS46));
            }
        }

        return \$address;
    }
}
", "vendor/symfony/mime/Encoder/IdnAddressEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Encoder/IdnAddressEncoder.php");
    }
}
