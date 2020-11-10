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

/* vendor/swiftmailer/swiftmailer/tests/fixtures/MimeEntityFixture.php */
class __TwigTemplate_433dd4b5e8920372fd984cd216f908d3fe2ad0fc5b249ce0b678d446e215f3ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/fixtures/MimeEntityFixture.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/fixtures/MimeEntityFixture.php"));

        // line 1
        echo "<?php

class MimeEntityFixture extends Swift_Mime_SimpleMimeEntity
{
    private \$level;
    private \$string;
    private \$contentType;

    public function __construct(\$level = null, \$string = '', \$contentType = null)
    {
        \$this->level = \$level;
        \$this->string = \$string;
        \$this->contentType = \$contentType;
    }

    public function getNestingLevel()
    {
        return \$this->level;
    }

    public function toString()
    {
        return \$this->string;
    }

    public function getContentType()
    {
        return \$this->contentType;
    }

    // These methods are here to account for the implemented interfaces
    public function getId()
    {
    }

    public function getHeaders()
    {
    }

    public function getBody()
    {
    }

    public function setBody(\$body, \$contentType = null)
    {
    }

    public function toByteStream(Swift_InputByteStream \$is)
    {
    }

    public function charsetChanged(\$charset)
    {
    }

    public function encoderChanged(Swift_Mime_ContentEncoder \$encoder)
    {
    }

    public function getChildren()
    {
    }

    public function setChildren(array \$children, \$compoundLevel = null)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/fixtures/MimeEntityFixture.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class MimeEntityFixture extends Swift_Mime_SimpleMimeEntity
{
    private \$level;
    private \$string;
    private \$contentType;

    public function __construct(\$level = null, \$string = '', \$contentType = null)
    {
        \$this->level = \$level;
        \$this->string = \$string;
        \$this->contentType = \$contentType;
    }

    public function getNestingLevel()
    {
        return \$this->level;
    }

    public function toString()
    {
        return \$this->string;
    }

    public function getContentType()
    {
        return \$this->contentType;
    }

    // These methods are here to account for the implemented interfaces
    public function getId()
    {
    }

    public function getHeaders()
    {
    }

    public function getBody()
    {
    }

    public function setBody(\$body, \$contentType = null)
    {
    }

    public function toByteStream(Swift_InputByteStream \$is)
    {
    }

    public function charsetChanged(\$charset)
    {
    }

    public function encoderChanged(Swift_Mime_ContentEncoder \$encoder)
    {
    }

    public function getChildren()
    {
    }

    public function setChildren(array \$children, \$compoundLevel = null)
    {
    }
}
", "vendor/swiftmailer/swiftmailer/tests/fixtures/MimeEntityFixture.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/fixtures/MimeEntityFixture.php");
    }
}
