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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream.php */
class __TwigTemplate_3d533b16104a927662c95a9c2d7fa83533978627439a872231f82928a79f144d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream.php"));

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
 * An abstract means of reading and writing data in terms of characters as opposed
 * to bytes.
 *
 * Classes implementing this interface may use a subsystem which requires less
 * memory than working with large strings of data.
 *
 * @author Chris Corbyn
 */
interface Swift_CharacterStream
{
    /**
     * Set the character set used in this CharacterStream.
     *
     * @param string \$charset
     */
    public function setCharacterSet(\$charset);

    /**
     * Set the CharacterReaderFactory for multi charset support.
     *
     * @param Swift_CharacterReaderFactory \$factory
     */
    public function setCharacterReaderFactory(Swift_CharacterReaderFactory \$factory);

    /**
     * Overwrite this character stream using the byte sequence in the byte stream.
     *
     * @param Swift_OutputByteStream \$os output stream to read from
     */
    public function importByteStream(Swift_OutputByteStream \$os);

    /**
     * Import a string a bytes into this CharacterStream, overwriting any existing
     * data in the stream.
     *
     * @param string \$string
     */
    public function importString(\$string);

    /**
     * Read \$length characters from the stream and move the internal pointer
     * \$length further into the stream.
     *
     * @param int \$length
     *
     * @return string
     */
    public function read(\$length);

    /**
     * Read \$length characters from the stream and return a 1-dimensional array
     * containing there octet values.
     *
     * @param int \$length
     *
     * @return int[]
     */
    public function readBytes(\$length);

    /**
     * Write \$chars to the end of the stream.
     *
     * @param string \$chars
     */
    public function write(\$chars);

    /**
     * Move the internal pointer to \$charOffset in the stream.
     *
     * @param int \$charOffset
     */
    public function setPointer(\$charOffset);

    /**
     * Empty the stream and reset the internal pointer.
     */
    public function flushContents();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream.php";
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
 * An abstract means of reading and writing data in terms of characters as opposed
 * to bytes.
 *
 * Classes implementing this interface may use a subsystem which requires less
 * memory than working with large strings of data.
 *
 * @author Chris Corbyn
 */
interface Swift_CharacterStream
{
    /**
     * Set the character set used in this CharacterStream.
     *
     * @param string \$charset
     */
    public function setCharacterSet(\$charset);

    /**
     * Set the CharacterReaderFactory for multi charset support.
     *
     * @param Swift_CharacterReaderFactory \$factory
     */
    public function setCharacterReaderFactory(Swift_CharacterReaderFactory \$factory);

    /**
     * Overwrite this character stream using the byte sequence in the byte stream.
     *
     * @param Swift_OutputByteStream \$os output stream to read from
     */
    public function importByteStream(Swift_OutputByteStream \$os);

    /**
     * Import a string a bytes into this CharacterStream, overwriting any existing
     * data in the stream.
     *
     * @param string \$string
     */
    public function importString(\$string);

    /**
     * Read \$length characters from the stream and move the internal pointer
     * \$length further into the stream.
     *
     * @param int \$length
     *
     * @return string
     */
    public function read(\$length);

    /**
     * Read \$length characters from the stream and return a 1-dimensional array
     * containing there octet values.
     *
     * @param int \$length
     *
     * @return int[]
     */
    public function readBytes(\$length);

    /**
     * Write \$chars to the end of the stream.
     *
     * @param string \$chars
     */
    public function write(\$chars);

    /**
     * Move the internal pointer to \$charOffset in the stream.
     *
     * @param int \$charOffset
     */
    public function setPointer(\$charOffset);

    /**
     * Empty the stream and reset the internal pointer.
     */
    public function flushContents();
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream.php");
    }
}
