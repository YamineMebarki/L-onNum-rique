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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug111Test.php */
class __TwigTemplate_47eee2b139f180923c749b5a9dfbc731737b110075c77109b67532d90fd2823a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug111Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug111Test.php"));

        // line 1
        echo "<?php

class Swift_Bug111Test extends \\PHPUnit\\Framework\\TestCase
{
    public function testUnstructuredHeaderSlashesShouldNotBeEscaped()
    {
        \$complicated_header = [
            'to' => [
                'email1@example.com',
                'email2@example.com',
                'email3@example.com',
                'email4@example.com',
                'email5@example.com',
            ],
            'sub' => [
                '-name-' => [
                    'email1',
                    '\"email2\"',
                    'email3\\\\',
                    'email4',
                    'email5',
                ],
                '-url-' => [
                    'http://google.com',
                    'http://yahoo.com',
                    'http://hotmail.com',
                    'http://aol.com',
                    'http://facebook.com',
                ],
            ],
        ];
        \$json = json_encode(\$complicated_header);

        \$message = new Swift_Message();
        \$headers = \$message->getHeaders();
        \$headers->addTextHeader('X-SMTPAPI', \$json);
        \$header = \$headers->get('X-SMTPAPI');

        \$this->assertEquals('Swift_Mime_Headers_UnstructuredHeader', get_class(\$header));
        \$this->assertEquals(\$json, \$header->getFieldBody());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug111Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug111Test extends \\PHPUnit\\Framework\\TestCase
{
    public function testUnstructuredHeaderSlashesShouldNotBeEscaped()
    {
        \$complicated_header = [
            'to' => [
                'email1@example.com',
                'email2@example.com',
                'email3@example.com',
                'email4@example.com',
                'email5@example.com',
            ],
            'sub' => [
                '-name-' => [
                    'email1',
                    '\"email2\"',
                    'email3\\\\',
                    'email4',
                    'email5',
                ],
                '-url-' => [
                    'http://google.com',
                    'http://yahoo.com',
                    'http://hotmail.com',
                    'http://aol.com',
                    'http://facebook.com',
                ],
            ],
        ];
        \$json = json_encode(\$complicated_header);

        \$message = new Swift_Message();
        \$headers = \$message->getHeaders();
        \$headers->addTextHeader('X-SMTPAPI', \$json);
        \$header = \$headers->get('X-SMTPAPI');

        \$this->assertEquals('Swift_Mime_Headers_UnstructuredHeader', get_class(\$header));
        \$this->assertEquals(\$json, \$header->getFieldBody());
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug111Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug111Test.php");
    }
}
