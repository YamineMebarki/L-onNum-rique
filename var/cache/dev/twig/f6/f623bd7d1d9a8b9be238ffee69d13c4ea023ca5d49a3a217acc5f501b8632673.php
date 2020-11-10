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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NullContentEncoder.php */
class __TwigTemplate_2f2464057777bbc02ce16ca9a405b0bdf22734e83dc4cbcc64d59f1e405e76dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NullContentEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NullContentEncoder.php"));

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
 * Handles the case where the email body is already encoded and you just need specify the correct
 * encoding without actually changing the encoding of the body.
 *
 * @author Jan Flora <jf@penneo.com>
 */
class Swift_Mime_ContentEncoder_NullContentEncoder implements Swift_Mime_ContentEncoder
{
    /**
     * The name of this encoding scheme (probably 7bit or 8bit).
     *
     * @var string
     */
    private \$_name;

    /**
     * Creates a new NullContentEncoder with \$name (probably 7bit or 8bit).
     *
     * @param string \$name
     */
    public function __construct(\$name)
    {
        \$this->_name = \$name;
    }

    /**
     * Encode a given string to produce an encoded string.
     *
     * @param string \$string
     * @param int    \$firstLineOffset ignored
     * @param int    \$maxLineLength   ignored
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        return \$string;
    }

    /**
     * Encode stream \$in to stream \$out.
     *
     * @param int \$firstLineOffset ignored
     * @param int \$maxLineLength   ignored
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        while (false !== (\$bytes = \$os->read(8192))) {
            \$is->write(\$bytes);
        }
    }

    /**
     * Get the name of this encoding scheme.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->_name;
    }

    /**
     * Not used.
     */
    public function charsetChanged(\$charset)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NullContentEncoder.php";
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
 * Handles the case where the email body is already encoded and you just need specify the correct
 * encoding without actually changing the encoding of the body.
 *
 * @author Jan Flora <jf@penneo.com>
 */
class Swift_Mime_ContentEncoder_NullContentEncoder implements Swift_Mime_ContentEncoder
{
    /**
     * The name of this encoding scheme (probably 7bit or 8bit).
     *
     * @var string
     */
    private \$_name;

    /**
     * Creates a new NullContentEncoder with \$name (probably 7bit or 8bit).
     *
     * @param string \$name
     */
    public function __construct(\$name)
    {
        \$this->_name = \$name;
    }

    /**
     * Encode a given string to produce an encoded string.
     *
     * @param string \$string
     * @param int    \$firstLineOffset ignored
     * @param int    \$maxLineLength   ignored
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        return \$string;
    }

    /**
     * Encode stream \$in to stream \$out.
     *
     * @param int \$firstLineOffset ignored
     * @param int \$maxLineLength   ignored
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        while (false !== (\$bytes = \$os->read(8192))) {
            \$is->write(\$bytes);
        }
    }

    /**
     * Get the name of this encoding scheme.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->_name;
    }

    /**
     * Not used.
     */
    public function charsetChanged(\$charset)
    {
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NullContentEncoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NullContentEncoder.php");
    }
}
