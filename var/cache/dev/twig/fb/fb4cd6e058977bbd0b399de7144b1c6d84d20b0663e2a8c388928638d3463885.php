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

/* vendor/symfony/mime/Header/MailboxHeader.php */
class __TwigTemplate_f2d7a5c2bd80454911a15c02a569b96e33600eb6b70e4ee5122a14d4dfc8fc78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/MailboxHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/MailboxHeader.php"));

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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;
use Symfony\\Component\\Mime\\NamedAddress;

/**
 * A Mailbox MIME Header for something like Sender (one named address).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class MailboxHeader extends AbstractHeader
{
    private \$address;

    public function __construct(string \$name, Address \$address)
    {
        parent::__construct(\$name);

        \$this->setAddress(\$address);
    }

    /**
     * @param Address \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddress(\$body);
    }

    /**
     * @throws RfcComplianceException
     *
     * @return Address
     */
    public function getBody()
    {
        return \$this->getAddress();
    }

    /**
     * @throws RfcComplianceException
     */
    public function setAddress(Address \$address)
    {
        \$this->address = \$address;
    }

    public function getAddress(): Address
    {
        return \$this->address;
    }

    public function getBodyAsString(): string
    {
        \$str = \$this->address->getEncodedAddress();
        if (\$this->address instanceof NamedAddress && \$name = \$this->address->getName()) {
            \$str = \$this->createPhrase(\$this, \$name, \$this->getCharset(), true).' <'.\$str.'>';
        }

        return \$str;
    }

    /**
     * Redefine the encoding requirements for an address.
     *
     * All \"specials\" must be encoded as the full header value will not be quoted
     *
     * @see RFC 2822 3.2.1
     */
    protected function tokenNeedsEncoding(string \$token): bool
    {
        return preg_match('/[()<>\\[\\]:;@\\,.\"]/', \$token) || parent::tokenNeedsEncoding(\$token);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Header/MailboxHeader.php";
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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;
use Symfony\\Component\\Mime\\NamedAddress;

/**
 * A Mailbox MIME Header for something like Sender (one named address).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class MailboxHeader extends AbstractHeader
{
    private \$address;

    public function __construct(string \$name, Address \$address)
    {
        parent::__construct(\$name);

        \$this->setAddress(\$address);
    }

    /**
     * @param Address \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddress(\$body);
    }

    /**
     * @throws RfcComplianceException
     *
     * @return Address
     */
    public function getBody()
    {
        return \$this->getAddress();
    }

    /**
     * @throws RfcComplianceException
     */
    public function setAddress(Address \$address)
    {
        \$this->address = \$address;
    }

    public function getAddress(): Address
    {
        return \$this->address;
    }

    public function getBodyAsString(): string
    {
        \$str = \$this->address->getEncodedAddress();
        if (\$this->address instanceof NamedAddress && \$name = \$this->address->getName()) {
            \$str = \$this->createPhrase(\$this, \$name, \$this->getCharset(), true).' <'.\$str.'>';
        }

        return \$str;
    }

    /**
     * Redefine the encoding requirements for an address.
     *
     * All \"specials\" must be encoded as the full header value will not be quoted
     *
     * @see RFC 2822 3.2.1
     */
    protected function tokenNeedsEncoding(string \$token): bool
    {
        return preg_match('/[()<>\\[\\]:;@\\,.\"]/', \$token) || parent::tokenNeedsEncoding(\$token);
    }
}
", "vendor/symfony/mime/Header/MailboxHeader.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Header/MailboxHeader.php");
    }
}
