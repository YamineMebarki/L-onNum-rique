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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Attachment.php */
class __TwigTemplate_dfab8a6ce3a85dd9fa23101cd1bfc48354fbbb7fb45c797142c2b329c40538d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Attachment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Attachment.php"));

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
 * Attachment class for attaching files to a {@link Swift_Mime_SimpleMessage}.
 *
 * @author Chris Corbyn
 */
class Swift_Attachment extends Swift_Mime_Attachment
{
    /**
     * Create a new Attachment.
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
            [\$this, 'Swift_Mime_Attachment::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.attachment')
            );

        \$this->setBody(\$data, \$contentType);
        \$this->setFilename(\$filename);
    }

    /**
     * Create a new Attachment from a filesystem path.
     *
     * @param string \$path
     * @param string \$contentType optional
     *
     * @return self
     */
    public static function fromPath(\$path, \$contentType = null)
    {
        return (new self())->setFile(
            new Swift_ByteStream_FileByteStream(\$path),
            \$contentType
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Attachment.php";
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
 * Attachment class for attaching files to a {@link Swift_Mime_SimpleMessage}.
 *
 * @author Chris Corbyn
 */
class Swift_Attachment extends Swift_Mime_Attachment
{
    /**
     * Create a new Attachment.
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
            [\$this, 'Swift_Mime_Attachment::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.attachment')
            );

        \$this->setBody(\$data, \$contentType);
        \$this->setFilename(\$filename);
    }

    /**
     * Create a new Attachment from a filesystem path.
     *
     * @param string \$path
     * @param string \$contentType optional
     *
     * @return self
     */
    public static function fromPath(\$path, \$contentType = null)
    {
        return (new self())->setFile(
            new Swift_ByteStream_FileByteStream(\$path),
            \$contentType
        );
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Attachment.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Attachment.php");
    }
}
