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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/HeaderEncoder/Base64HeaderEncoderTest.php */
class __TwigTemplate_f58abf145b7e80707575731cf663aea8ec9670f37672966b64ef8b1fe71935dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/HeaderEncoder/Base64HeaderEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/HeaderEncoder/Base64HeaderEncoderTest.php"));

        // line 1
        echo "<?php

class Swift_Mime_HeaderEncoder_Base64HeaderEncoderTest extends \\PHPUnit\\Framework\\TestCase
{
    //Most tests are already covered in Base64EncoderTest since this subclass only
    // adds a getName() method

    public function testNameIsB()
    {
        \$encoder = new Swift_Mime_HeaderEncoder_Base64HeaderEncoder();
        \$this->assertEquals('B', \$encoder->getName());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/HeaderEncoder/Base64HeaderEncoderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mime_HeaderEncoder_Base64HeaderEncoderTest extends \\PHPUnit\\Framework\\TestCase
{
    //Most tests are already covered in Base64EncoderTest since this subclass only
    // adds a getName() method

    public function testNameIsB()
    {
        \$encoder = new Swift_Mime_HeaderEncoder_Base64HeaderEncoder();
        \$this->assertEquals('B', \$encoder->getName());
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/HeaderEncoder/Base64HeaderEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/HeaderEncoder/Base64HeaderEncoderTest.php");
    }
}
