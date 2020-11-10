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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug650Test.php */
class __TwigTemplate_4be3e987181ad43f240967a4539d6c3076897813363e42bbdb21dec318f0222c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug650Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug650Test.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Bug650Test extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider encodingDataProvider
     *
     * @param string \$name
     * @param string \$expectedEncodedName
     */
    public function testMailboxHeaderEncoding(\$name, \$expectedEncodedName)
    {
        \$factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
        \$charStream = new Swift_CharacterStream_NgCharacterStream(\$factory, 'utf-8');
        \$encoder = new Swift_Mime_HeaderEncoder_QpHeaderEncoder(\$charStream);
        \$header = new Swift_Mime_Headers_MailboxHeader('To', \$encoder, new EmailValidator());
        \$header->setCharset('utf-8');

        \$header->setNameAddresses([
            'test@example.com' => \$name,
        ]);

        \$this->assertSame('To: '.\$expectedEncodedName.\" <test@example.com>\\r\\n\", \$header->toString());
    }

    public function encodingDataProvider()
    {
        return [
            ['this is \" a test ö', 'this is =?utf-8?Q?=22?= a test =?utf-8?Q?=C3=B6?='],
            [': this is a test ö', '=?utf-8?Q?=3A?= this is a test =?utf-8?Q?=C3=B6?='],
            ['( test ö', '=?utf-8?Q?=28?= test =?utf-8?Q?=C3=B6?='],
            ['[ test ö', '=?utf-8?Q?=5B?= test =?utf-8?Q?=C3=B6?='],
            ['@ test ö)', '=?utf-8?Q?=40?= test =?utf-8?Q?=C3=B6=29?='],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug650Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Bug650Test extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider encodingDataProvider
     *
     * @param string \$name
     * @param string \$expectedEncodedName
     */
    public function testMailboxHeaderEncoding(\$name, \$expectedEncodedName)
    {
        \$factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
        \$charStream = new Swift_CharacterStream_NgCharacterStream(\$factory, 'utf-8');
        \$encoder = new Swift_Mime_HeaderEncoder_QpHeaderEncoder(\$charStream);
        \$header = new Swift_Mime_Headers_MailboxHeader('To', \$encoder, new EmailValidator());
        \$header->setCharset('utf-8');

        \$header->setNameAddresses([
            'test@example.com' => \$name,
        ]);

        \$this->assertSame('To: '.\$expectedEncodedName.\" <test@example.com>\\r\\n\", \$header->toString());
    }

    public function encodingDataProvider()
    {
        return [
            ['this is \" a test ö', 'this is =?utf-8?Q?=22?= a test =?utf-8?Q?=C3=B6?='],
            [': this is a test ö', '=?utf-8?Q?=3A?= this is a test =?utf-8?Q?=C3=B6?='],
            ['( test ö', '=?utf-8?Q?=28?= test =?utf-8?Q?=C3=B6?='],
            ['[ test ö', '=?utf-8?Q?=5B?= test =?utf-8?Q?=C3=B6?='],
            ['@ test ö)', '=?utf-8?Q?=40?= test =?utf-8?Q?=C3=B6=29?='],
        ];
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug650Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug650Test.php");
    }
}
