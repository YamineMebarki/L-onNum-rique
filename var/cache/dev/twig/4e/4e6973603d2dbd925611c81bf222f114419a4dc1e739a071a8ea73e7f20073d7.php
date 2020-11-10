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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/HeaderEncoder/Base64HeaderEncoderAcceptanceTest.php */
class __TwigTemplate_6b2d3f2dfd3845c1fc28755e4ad78b4873962773cb50948ac8d842dd362d0acf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/HeaderEncoder/Base64HeaderEncoderAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/HeaderEncoder/Base64HeaderEncoderAcceptanceTest.php"));

        // line 1
        echo "<?php

class Swift_Mime_HeaderEncoder_Base64HeaderEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$encoder;

    protected function setUp()
    {
        \$this->encoder = new Swift_Mime_HeaderEncoder_Base64HeaderEncoder();
    }

    public function testEncodingJIS()
    {
        if (function_exists('mb_convert_encoding')) {
            // base64_encode and split cannot handle long JIS text to fold
            \$subject = '長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い件名';

            \$encodedWrapperLength = strlen('=?iso-2022-jp?'.\$this->encoder->getName().'??=');

            \$old = mb_internal_encoding();
            mb_internal_encoding('utf-8');
            \$newstring = mb_encode_mimeheader(\$subject, 'iso-2022-jp', 'B', \"\\r\\n\");
            mb_internal_encoding(\$old);

            \$encoded = \$this->encoder->encodeString(\$subject, 0, 75 - \$encodedWrapperLength, 'iso-2022-jp');
            \$this->assertEquals(
                \$encoded, \$newstring,
                'Encoded string should decode back to original string for sample '
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/HeaderEncoder/Base64HeaderEncoderAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mime_HeaderEncoder_Base64HeaderEncoderAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$encoder;

    protected function setUp()
    {
        \$this->encoder = new Swift_Mime_HeaderEncoder_Base64HeaderEncoder();
    }

    public function testEncodingJIS()
    {
        if (function_exists('mb_convert_encoding')) {
            // base64_encode and split cannot handle long JIS text to fold
            \$subject = '長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い長い件名';

            \$encodedWrapperLength = strlen('=?iso-2022-jp?'.\$this->encoder->getName().'??=');

            \$old = mb_internal_encoding();
            mb_internal_encoding('utf-8');
            \$newstring = mb_encode_mimeheader(\$subject, 'iso-2022-jp', 'B', \"\\r\\n\");
            mb_internal_encoding(\$old);

            \$encoded = \$this->encoder->encodeString(\$subject, 0, 75 - \$encodedWrapperLength, 'iso-2022-jp');
            \$this->assertEquals(
                \$encoded, \$newstring,
                'Encoded string should decode back to original string for sample '
            );
        }
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/HeaderEncoder/Base64HeaderEncoderAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Mime/HeaderEncoder/Base64HeaderEncoderAcceptanceTest.php");
    }
}
