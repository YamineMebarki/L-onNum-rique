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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/PathHeader.php */
class __TwigTemplate_8c068e15c1b612c27b1a85413ce6911b2ae0de8246f5532f0ea08a3716e24810 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/PathHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/PathHeader.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\RFCValidation;

/**
 * A Path Header in Swift Mailer, such a Return-Path.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_PathHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * The address in this Header (if specified).
     *
     * @var string
     */
    private \$address;

    /**
     * The strict EmailValidator.
     *
     * @var EmailValidator
     */
    private \$emailValidator;

    private \$addressEncoder;

    /**
     * Creates a new PathHeader with the given \$name.
     *
     * @param string \$name
     */
    public function __construct(\$name, EmailValidator \$emailValidator, Swift_AddressEncoder \$addressEncoder = null)
    {
        \$this->setFieldName(\$name);
        \$this->emailValidator = \$emailValidator;
        \$this->addressEncoder = \$addressEncoder ?? new Swift_AddressEncoder_IdnAddressEncoder();
    }

    /**
     * Get the type of Header that this instance represents.
     *
     * @see TYPE_TEXT, TYPE_PARAMETERIZED, TYPE_MAILBOX
     * @see TYPE_DATE, TYPE_ID, TYPE_PATH
     *
     * @return int
     */
    public function getFieldType()
    {
        return self::TYPE_PATH;
    }

    /**
     * Set the model for the field body.
     * This method takes a string for an address.
     *
     * @param string \$model
     *
     * @throws Swift_RfcComplianceException
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setAddress(\$model);
    }

    /**
     * Get the model for the field body.
     * This method returns a string email address.
     *
     * @return mixed
     */
    public function getFieldBodyModel()
    {
        return \$this->getAddress();
    }

    /**
     * Set the Address which should appear in this Header.
     *
     * @param string \$address
     *
     * @throws Swift_RfcComplianceException
     */
    public function setAddress(\$address)
    {
        if (null === \$address) {
            \$this->address = null;
        } elseif ('' == \$address) {
            \$this->address = '';
        } else {
            \$this->assertValidAddress(\$address);
            \$this->address = \$address;
        }
        \$this->setCachedValue(null);
    }

    /**
     * Get the address which is used in this Header (if any).
     *
     * Null is returned if no address is set.
     *
     * @return string
     */
    public function getAddress()
    {
        return \$this->address;
    }

    /**
     * Get the string value of the body in this Header.
     *
     * This is not necessarily RFC 2822 compliant since folding white space will
     * not be added at this stage (see {@link toString()} for that).
     *
     * @see toString()
     *
     * @return string
     */
    public function getFieldBody()
    {
        if (!\$this->getCachedValue()) {
            if (isset(\$this->address)) {
                \$address = \$this->addressEncoder->encodeString(\$this->address);
                \$this->setCachedValue('<'.\$address.'>');
            }
        }

        return \$this->getCachedValue();
    }

    /**
     * Throws an Exception if the address passed does not comply with RFC 2822.
     *
     * @param string \$address
     *
     * @throws Swift_RfcComplianceException If address is invalid
     */
    private function assertValidAddress(\$address)
    {
        if (!\$this->emailValidator->isValid(\$address, new RFCValidation())) {
            throw new Swift_RfcComplianceException(
                'Address set in PathHeader does not comply with addr-spec of RFC 2822.'
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/PathHeader.php";
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

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\RFCValidation;

/**
 * A Path Header in Swift Mailer, such a Return-Path.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_PathHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * The address in this Header (if specified).
     *
     * @var string
     */
    private \$address;

    /**
     * The strict EmailValidator.
     *
     * @var EmailValidator
     */
    private \$emailValidator;

    private \$addressEncoder;

    /**
     * Creates a new PathHeader with the given \$name.
     *
     * @param string \$name
     */
    public function __construct(\$name, EmailValidator \$emailValidator, Swift_AddressEncoder \$addressEncoder = null)
    {
        \$this->setFieldName(\$name);
        \$this->emailValidator = \$emailValidator;
        \$this->addressEncoder = \$addressEncoder ?? new Swift_AddressEncoder_IdnAddressEncoder();
    }

    /**
     * Get the type of Header that this instance represents.
     *
     * @see TYPE_TEXT, TYPE_PARAMETERIZED, TYPE_MAILBOX
     * @see TYPE_DATE, TYPE_ID, TYPE_PATH
     *
     * @return int
     */
    public function getFieldType()
    {
        return self::TYPE_PATH;
    }

    /**
     * Set the model for the field body.
     * This method takes a string for an address.
     *
     * @param string \$model
     *
     * @throws Swift_RfcComplianceException
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setAddress(\$model);
    }

    /**
     * Get the model for the field body.
     * This method returns a string email address.
     *
     * @return mixed
     */
    public function getFieldBodyModel()
    {
        return \$this->getAddress();
    }

    /**
     * Set the Address which should appear in this Header.
     *
     * @param string \$address
     *
     * @throws Swift_RfcComplianceException
     */
    public function setAddress(\$address)
    {
        if (null === \$address) {
            \$this->address = null;
        } elseif ('' == \$address) {
            \$this->address = '';
        } else {
            \$this->assertValidAddress(\$address);
            \$this->address = \$address;
        }
        \$this->setCachedValue(null);
    }

    /**
     * Get the address which is used in this Header (if any).
     *
     * Null is returned if no address is set.
     *
     * @return string
     */
    public function getAddress()
    {
        return \$this->address;
    }

    /**
     * Get the string value of the body in this Header.
     *
     * This is not necessarily RFC 2822 compliant since folding white space will
     * not be added at this stage (see {@link toString()} for that).
     *
     * @see toString()
     *
     * @return string
     */
    public function getFieldBody()
    {
        if (!\$this->getCachedValue()) {
            if (isset(\$this->address)) {
                \$address = \$this->addressEncoder->encodeString(\$this->address);
                \$this->setCachedValue('<'.\$address.'>');
            }
        }

        return \$this->getCachedValue();
    }

    /**
     * Throws an Exception if the address passed does not comply with RFC 2822.
     *
     * @param string \$address
     *
     * @throws Swift_RfcComplianceException If address is invalid
     */
    private function assertValidAddress(\$address)
    {
        if (!\$this->emailValidator->isValid(\$address, new RFCValidation())) {
            throw new Swift_RfcComplianceException(
                'Address set in PathHeader does not comply with addr-spec of RFC 2822.'
            );
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/PathHeader.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/PathHeader.php");
    }
}
