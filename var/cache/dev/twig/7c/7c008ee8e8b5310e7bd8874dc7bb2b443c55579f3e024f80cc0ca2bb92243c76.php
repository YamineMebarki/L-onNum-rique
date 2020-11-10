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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/IdentificationHeader.php */
class __TwigTemplate_493765a5607811f061d2bee075766fde56ccb558ee37d417aeb4911501a415f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/IdentificationHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/IdentificationHeader.php"));

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
 * An ID MIME Header for something like Message-ID or Content-ID.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_IdentificationHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * The IDs used in the value of this Header.
     *
     * This may hold multiple IDs or just a single ID.
     *
     * @var string[]
     */
    private \$ids = [];

    /**
     * The strict EmailValidator.
     *
     * @var EmailValidator
     */
    private \$emailValidator;

    private \$addressEncoder;

    /**
     * Creates a new IdentificationHeader with the given \$name and \$id.
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
        return self::TYPE_ID;
    }

    /**
     * Set the model for the field body.
     *
     * This method takes a string ID, or an array of IDs.
     *
     * @param mixed \$model
     *
     * @throws Swift_RfcComplianceException
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setId(\$model);
    }

    /**
     * Get the model for the field body.
     *
     * This method returns an array of IDs
     *
     * @return array
     */
    public function getFieldBodyModel()
    {
        return \$this->getIds();
    }

    /**
     * Set the ID used in the value of this header.
     *
     * @param string|array \$id
     *
     * @throws Swift_RfcComplianceException
     */
    public function setId(\$id)
    {
        \$this->setIds(is_array(\$id) ? \$id : [\$id]);
    }

    /**
     * Get the ID used in the value of this Header.
     *
     * If multiple IDs are set only the first is returned.
     *
     * @return string
     */
    public function getId()
    {
        if (count(\$this->ids) > 0) {
            return \$this->ids[0];
        }
    }

    /**
     * Set a collection of IDs to use in the value of this Header.
     *
     * @param string[] \$ids
     *
     * @throws Swift_RfcComplianceException
     */
    public function setIds(array \$ids)
    {
        \$actualIds = [];

        foreach (\$ids as \$id) {
            \$this->assertValidId(\$id);
            \$actualIds[] = \$id;
        }

        \$this->clearCachedValueIf(\$this->ids != \$actualIds);
        \$this->ids = \$actualIds;
    }

    /**
     * Get the list of IDs used in this Header.
     *
     * @return string[]
     */
    public function getIds()
    {
        return \$this->ids;
    }

    /**
     * Get the string value of the body in this Header.
     *
     * This is not necessarily RFC 2822 compliant since folding white space will
     * not be added at this stage (see {@see toString()} for that).
     *
     * @see toString()
     *
     * @throws Swift_RfcComplianceException
     *
     * @return string
     */
    public function getFieldBody()
    {
        if (!\$this->getCachedValue()) {
            \$angleAddrs = [];

            foreach (\$this->ids as \$id) {
                \$angleAddrs[] = '<'.\$this->addressEncoder->encodeString(\$id).'>';
            }

            \$this->setCachedValue(implode(' ', \$angleAddrs));
        }

        return \$this->getCachedValue();
    }

    /**
     * Throws an Exception if the id passed does not comply with RFC 2822.
     *
     * @param string \$id
     *
     * @throws Swift_RfcComplianceException
     */
    private function assertValidId(\$id)
    {
        if (!\$this->emailValidator->isValid(\$id, new RFCValidation())) {
            throw new Swift_RfcComplianceException('Invalid ID given <'.\$id.'>');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/IdentificationHeader.php";
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
 * An ID MIME Header for something like Message-ID or Content-ID.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_IdentificationHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * The IDs used in the value of this Header.
     *
     * This may hold multiple IDs or just a single ID.
     *
     * @var string[]
     */
    private \$ids = [];

    /**
     * The strict EmailValidator.
     *
     * @var EmailValidator
     */
    private \$emailValidator;

    private \$addressEncoder;

    /**
     * Creates a new IdentificationHeader with the given \$name and \$id.
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
        return self::TYPE_ID;
    }

    /**
     * Set the model for the field body.
     *
     * This method takes a string ID, or an array of IDs.
     *
     * @param mixed \$model
     *
     * @throws Swift_RfcComplianceException
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setId(\$model);
    }

    /**
     * Get the model for the field body.
     *
     * This method returns an array of IDs
     *
     * @return array
     */
    public function getFieldBodyModel()
    {
        return \$this->getIds();
    }

    /**
     * Set the ID used in the value of this header.
     *
     * @param string|array \$id
     *
     * @throws Swift_RfcComplianceException
     */
    public function setId(\$id)
    {
        \$this->setIds(is_array(\$id) ? \$id : [\$id]);
    }

    /**
     * Get the ID used in the value of this Header.
     *
     * If multiple IDs are set only the first is returned.
     *
     * @return string
     */
    public function getId()
    {
        if (count(\$this->ids) > 0) {
            return \$this->ids[0];
        }
    }

    /**
     * Set a collection of IDs to use in the value of this Header.
     *
     * @param string[] \$ids
     *
     * @throws Swift_RfcComplianceException
     */
    public function setIds(array \$ids)
    {
        \$actualIds = [];

        foreach (\$ids as \$id) {
            \$this->assertValidId(\$id);
            \$actualIds[] = \$id;
        }

        \$this->clearCachedValueIf(\$this->ids != \$actualIds);
        \$this->ids = \$actualIds;
    }

    /**
     * Get the list of IDs used in this Header.
     *
     * @return string[]
     */
    public function getIds()
    {
        return \$this->ids;
    }

    /**
     * Get the string value of the body in this Header.
     *
     * This is not necessarily RFC 2822 compliant since folding white space will
     * not be added at this stage (see {@see toString()} for that).
     *
     * @see toString()
     *
     * @throws Swift_RfcComplianceException
     *
     * @return string
     */
    public function getFieldBody()
    {
        if (!\$this->getCachedValue()) {
            \$angleAddrs = [];

            foreach (\$this->ids as \$id) {
                \$angleAddrs[] = '<'.\$this->addressEncoder->encodeString(\$id).'>';
            }

            \$this->setCachedValue(implode(' ', \$angleAddrs));
        }

        return \$this->getCachedValue();
    }

    /**
     * Throws an Exception if the id passed does not comply with RFC 2822.
     *
     * @param string \$id
     *
     * @throws Swift_RfcComplianceException
     */
    private function assertValidId(\$id)
    {
        if (!\$this->emailValidator->isValid(\$id, new RFCValidation())) {
            throw new Swift_RfcComplianceException('Invalid ID given <'.\$id.'>');
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/IdentificationHeader.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/IdentificationHeader.php");
    }
}
