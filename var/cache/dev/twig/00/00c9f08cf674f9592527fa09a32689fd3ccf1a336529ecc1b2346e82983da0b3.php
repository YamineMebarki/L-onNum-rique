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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php */
class __TwigTemplate_0def3fbee7eb2cbaf8f46b093c36a9d674da0efa7a86c6bf728790234342b275 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php"));

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
 * An abstract means of reading data.
 *
 * Classes implementing this interface may use a subsystem which requires less
 * memory than working with large strings of data.
 *
 * @author Chris Corbyn
 */
interface Swift_OutputByteStream
{
    /**
     * Reads \$length bytes from the stream into a string and moves the pointer
     * through the stream by \$length.
     *
     * If less bytes exist than are requested the remaining bytes are given instead.
     * If no bytes are remaining at all, boolean false is returned.
     *
     * @param int \$length
     *
     * @throws Swift_IoException
     *
     * @return string|bool
     */
    public function read(\$length);

    /**
     * Move the internal read pointer to \$byteOffset in the stream.
     *
     * @param int \$byteOffset
     *
     * @throws Swift_IoException
     *
     * @return bool
     */
    public function setReadPointer(\$byteOffset);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php";
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
 * An abstract means of reading data.
 *
 * Classes implementing this interface may use a subsystem which requires less
 * memory than working with large strings of data.
 *
 * @author Chris Corbyn
 */
interface Swift_OutputByteStream
{
    /**
     * Reads \$length bytes from the stream into a string and moves the pointer
     * through the stream by \$length.
     *
     * If less bytes exist than are requested the remaining bytes are given instead.
     * If no bytes are remaining at all, boolean false is returned.
     *
     * @param int \$length
     *
     * @throws Swift_IoException
     *
     * @return string|bool
     */
    public function read(\$length);

    /**
     * Move the internal read pointer to \$byteOffset in the stream.
     *
     * @param int \$byteOffset
     *
     * @throws Swift_IoException
     *
     * @return bool
     */
    public function setReadPointer(\$byteOffset);
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php");
    }
}
