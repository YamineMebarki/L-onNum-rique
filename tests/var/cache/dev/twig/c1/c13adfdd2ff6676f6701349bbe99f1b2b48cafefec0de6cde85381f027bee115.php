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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/UnstructuredHeader.php */
class __TwigTemplate_74f89e9bc53dfbd01a5bb370770695ae48d7e3f41d0152cea2a387812b87f09d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/UnstructuredHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/UnstructuredHeader.php"));

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
 * A Simple MIME Header.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_UnstructuredHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * The value of this Header.
     *
     * @var string
     */
    private \$value;

    /**
     * Creates a new SimpleHeader with \$name.
     *
     * @param string \$name
     */
    public function __construct(\$name, Swift_Mime_HeaderEncoder \$encoder)
    {
        \$this->setFieldName(\$name);
        \$this->setEncoder(\$encoder);
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
        return self::TYPE_TEXT;
    }

    /**
     * Set the model for the field body.
     *
     * This method takes a string for the field value.
     *
     * @param string \$model
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setValue(\$model);
    }

    /**
     * Get the model for the field body.
     *
     * This method returns a string.
     *
     * @return string
     */
    public function getFieldBodyModel()
    {
        return \$this->getValue();
    }

    /**
     * Get the (unencoded) value of this header.
     *
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Set the (unencoded) value of this header.
     *
     * @param string \$value
     */
    public function setValue(\$value)
    {
        \$this->clearCachedValueIf(\$this->value != \$value);
        \$this->value = \$value;
    }

    /**
     * Get the value of this header prepared for rendering.
     *
     * @return string
     */
    public function getFieldBody()
    {
        if (!\$this->getCachedValue()) {
            \$this->setCachedValue(
                \$this->encodeWords(\$this, \$this->value)
                );
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
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/UnstructuredHeader.php";
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
 * A Simple MIME Header.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_Headers_UnstructuredHeader extends Swift_Mime_Headers_AbstractHeader
{
    /**
     * The value of this Header.
     *
     * @var string
     */
    private \$value;

    /**
     * Creates a new SimpleHeader with \$name.
     *
     * @param string \$name
     */
    public function __construct(\$name, Swift_Mime_HeaderEncoder \$encoder)
    {
        \$this->setFieldName(\$name);
        \$this->setEncoder(\$encoder);
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
        return self::TYPE_TEXT;
    }

    /**
     * Set the model for the field body.
     *
     * This method takes a string for the field value.
     *
     * @param string \$model
     */
    public function setFieldBodyModel(\$model)
    {
        \$this->setValue(\$model);
    }

    /**
     * Get the model for the field body.
     *
     * This method returns a string.
     *
     * @return string
     */
    public function getFieldBodyModel()
    {
        return \$this->getValue();
    }

    /**
     * Get the (unencoded) value of this header.
     *
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Set the (unencoded) value of this header.
     *
     * @param string \$value
     */
    public function setValue(\$value)
    {
        \$this->clearCachedValueIf(\$this->value != \$value);
        \$this->value = \$value;
    }

    /**
     * Get the value of this header prepared for rendering.
     *
     * @return string
     */
    public function getFieldBody()
    {
        if (!\$this->getCachedValue()) {
            \$this->setCachedValue(
                \$this->encodeWords(\$this, \$this->value)
                );
        }

        return \$this->getCachedValue();
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/UnstructuredHeader.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/UnstructuredHeader.php");
    }
}
