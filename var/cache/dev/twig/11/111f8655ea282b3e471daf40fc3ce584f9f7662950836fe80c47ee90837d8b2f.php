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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug206Test.php */
class __TwigTemplate_180bbab77b9bcf29962063bfda715bb2c0ccc5fb1ed99210c2bcc3b06acbae60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug206Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug206Test.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Bug206Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$factory;

    protected function setUp()
    {
        \$factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
        \$headerEncoder = new Swift_Mime_HeaderEncoder_QpHeaderEncoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
        );
        \$paramEncoder = new Swift_Encoder_Rfc2231Encoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
        );
        \$emailValidator = new EmailValidator();
        \$this->factory = new Swift_Mime_SimpleHeaderFactory(\$headerEncoder, \$paramEncoder, \$emailValidator);
    }

    public function testMailboxHeaderEncoding()
    {
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Name, Name', ' \"Family Name, Name\" <email@example.org>');
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Namé, Name', ' Family =?utf-8?Q?Nam=C3=A9=2C?= Name');
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Namé , Name', ' Family =?utf-8?Q?Nam=C3=A9_=2C?= Name');
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Namé ;Name', ' Family =?utf-8?Q?Nam=C3=A9_=3BName?= ');
    }

    private function doTestHeaderIsFullyEncoded(\$email, \$name, \$expected)
    {
        \$mailboxHeader = \$this->factory->createMailboxHeader('To', [
            \$email => \$name,
        ]);

        \$headerBody = substr(\$mailboxHeader->toString(), 3, strlen(\$expected));

        \$this->assertEquals(\$expected, \$headerBody);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug206Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Bug206Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$factory;

    protected function setUp()
    {
        \$factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
        \$headerEncoder = new Swift_Mime_HeaderEncoder_QpHeaderEncoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
        );
        \$paramEncoder = new Swift_Encoder_Rfc2231Encoder(
            new Swift_CharacterStream_ArrayCharacterStream(\$factory, 'utf-8')
        );
        \$emailValidator = new EmailValidator();
        \$this->factory = new Swift_Mime_SimpleHeaderFactory(\$headerEncoder, \$paramEncoder, \$emailValidator);
    }

    public function testMailboxHeaderEncoding()
    {
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Name, Name', ' \"Family Name, Name\" <email@example.org>');
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Namé, Name', ' Family =?utf-8?Q?Nam=C3=A9=2C?= Name');
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Namé , Name', ' Family =?utf-8?Q?Nam=C3=A9_=2C?= Name');
        \$this->doTestHeaderIsFullyEncoded('email@example.org', 'Family Namé ;Name', ' Family =?utf-8?Q?Nam=C3=A9_=3BName?= ');
    }

    private function doTestHeaderIsFullyEncoded(\$email, \$name, \$expected)
    {
        \$mailboxHeader = \$this->factory->createMailboxHeader('To', [
            \$email => \$name,
        ]);

        \$headerBody = substr(\$mailboxHeader->toString(), 3, strlen(\$expected));

        \$this->assertEquals(\$expected, \$headerBody);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug206Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug206Test.php");
    }
}
