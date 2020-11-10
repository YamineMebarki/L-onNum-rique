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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/DateHeader.php */
class __TwigTemplate_22f689ddc1752c4c7afae27b77743c0f633f58ef11115e19203b013ff89abfb1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/DateHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/DateHeader.php"));

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
 * A Date MIME Header for Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_DateHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * Date-time value of this Header.
     *
     * @var DateTimeImmutable
     */
    private \$dateTime;

    /**
     * Creates a new DateHeader with \$name.
     *
     * @param string \$name of Header
     */
    public function __construct(\$name)
    {
        \$this->setFieldName(\$name);
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
        return self::TYPE_DATE;
    }

    /**
     * Set the model for the field body.
     *
     * @param DateTimeInterface \$model
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setDateTime(\$model);
    }

    /**
     * Get the model for the field body.
     *
     * @return DateTimeImmutable
     */
    public function getFieldBodyModel()
    {
        return \$this->getDateTime();
    }

    /**
     * Get the date-time representing the Date in this Header.
     *
     * @return DateTimeImmutable
     */
    public function getDateTime()
    {
        return \$this->dateTime;
    }

    /**
     * Set the date-time of the Date in this Header.
     *
     * If a DateTime instance is provided, it is converted to DateTimeImmutable.
     */
    public function setDateTime(DateTimeInterface \$dateTime)
    {
        \$this->clearCachedValueIf(\$this->getCachedValue() != \$dateTime->format(DateTime::RFC2822));
        if (\$dateTime instanceof DateTime) {
            \$immutable = new DateTimeImmutable('@'.\$dateTime->getTimestamp());
            \$dateTime = \$immutable->setTimezone(\$dateTime->getTimezone());
        }
        \$this->dateTime = \$dateTime;
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
            if (isset(\$this->dateTime)) {
                \$this->setCachedValue(\$this->dateTime->format(DateTime::RFC2822));
            }
        }

        return \$this->getCachedValue();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/DateHeader.php";
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
 * A Date MIME Header for Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_DateHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * Date-time value of this Header.
     *
     * @var DateTimeImmutable
     */
    private \$dateTime;

    /**
     * Creates a new DateHeader with \$name.
     *
     * @param string \$name of Header
     */
    public function __construct(\$name)
    {
        \$this->setFieldName(\$name);
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
        return self::TYPE_DATE;
    }

    /**
     * Set the model for the field body.
     *
     * @param DateTimeInterface \$model
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setDateTime(\$model);
    }

    /**
     * Get the model for the field body.
     *
     * @return DateTimeImmutable
     */
    public function getFieldBodyModel()
    {
        return \$this->getDateTime();
    }

    /**
     * Get the date-time representing the Date in this Header.
     *
     * @return DateTimeImmutable
     */
    public function getDateTime()
    {
        return \$this->dateTime;
    }

    /**
     * Set the date-time of the Date in this Header.
     *
     * If a DateTime instance is provided, it is converted to DateTimeImmutable.
     */
    public function setDateTime(DateTimeInterface \$dateTime)
    {
        \$this->clearCachedValueIf(\$this->getCachedValue() != \$dateTime->format(DateTime::RFC2822));
        if (\$dateTime instanceof DateTime) {
            \$immutable = new DateTimeImmutable('@'.\$dateTime->getTimestamp());
            \$dateTime = \$immutable->setTimezone(\$dateTime->getTimezone());
        }
        \$this->dateTime = \$dateTime;
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
            if (isset(\$this->dateTime)) {
                \$this->setCachedValue(\$this->dateTime->format(DateTime::RFC2822));
            }
        }

        return \$this->getCachedValue();
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/DateHeader.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/DateHeader.php");
    }
}
