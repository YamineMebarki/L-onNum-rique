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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/EmbeddedFile.php */
class __TwigTemplate_6fd88d95630684b9fda17e9f2b234ae559607d3b3071f2a0e8a7e6f5bad3b4f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/EmbeddedFile.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/EmbeddedFile.php"));

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
 * An embedded file, in a multipart message.
 *
 * @author Chris Corbyn
 */
class Swift_EmbeddedFile extends Swift_Mime_EmbeddedFile
{
    /**
     * Create a new EmbeddedFile.
     *
     * Details may be optionally provided to the constructor.
     *
     * @param string|Swift_OutputByteStream \$data
     * @param string                        \$filename
     * @param string                        \$contentType
     */
    public function __construct(\$data = null, \$filename = null, \$contentType = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Mime_EmbeddedFile::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.embeddedfile')
            );

        \$this->setBody(\$data);
        \$this->setFilename(\$filename);
        if (\$contentType) {
            \$this->setContentType(\$contentType);
        }
    }

    /**
     * Create a new EmbeddedFile from a filesystem path.
     *
     * @param string \$path
     *
     * @return Swift_Mime_EmbeddedFile
     */
    public static function fromPath(\$path)
    {
        return (new self())->setFile(new Swift_ByteStream_FileByteStream(\$path));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/EmbeddedFile.php";
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
 * An embedded file, in a multipart message.
 *
 * @author Chris Corbyn
 */
class Swift_EmbeddedFile extends Swift_Mime_EmbeddedFile
{
    /**
     * Create a new EmbeddedFile.
     *
     * Details may be optionally provided to the constructor.
     *
     * @param string|Swift_OutputByteStream \$data
     * @param string                        \$filename
     * @param string                        \$contentType
     */
    public function __construct(\$data = null, \$filename = null, \$contentType = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Mime_EmbeddedFile::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.embeddedfile')
            );

        \$this->setBody(\$data);
        \$this->setFilename(\$filename);
        if (\$contentType) {
            \$this->setContentType(\$contentType);
        }
    }

    /**
     * Create a new EmbeddedFile from a filesystem path.
     *
     * @param string \$path
     *
     * @return Swift_Mime_EmbeddedFile
     */
    public static function fromPath(\$path)
    {
        return (new self())->setFile(new Swift_ByteStream_FileByteStream(\$path));
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/EmbeddedFile.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/EmbeddedFile.php");
    }
}
