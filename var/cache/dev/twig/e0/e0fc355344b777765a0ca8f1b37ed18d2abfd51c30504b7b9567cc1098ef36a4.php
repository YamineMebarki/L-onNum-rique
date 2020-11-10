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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug71Test.php */
class __TwigTemplate_d638efa38ffd5eb2e165ad19dd6a99075a2d877908fef4f8944f4dea4cb53e41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug71Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug71Test.php"));

        // line 1
        echo "<?php

class Swift_Bug71Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$message;

    protected function setUp()
    {
        \$this->message = new Swift_Message('test');
    }

    public function testCallingToStringAfterSettingNewBodyReflectsChanges()
    {
        \$this->message->setBody('BODY1');
        \$this->assertRegExp('/BODY1/', \$this->message->toString());

        \$this->message->setBody('BODY2');
        \$this->assertRegExp('/BODY2/', \$this->message->toString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug71Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug71Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$message;

    protected function setUp()
    {
        \$this->message = new Swift_Message('test');
    }

    public function testCallingToStringAfterSettingNewBodyReflectsChanges()
    {
        \$this->message->setBody('BODY1');
        \$this->assertRegExp('/BODY1/', \$this->message->toString());

        \$this->message->setBody('BODY2');
        \$this->assertRegExp('/BODY2/', \$this->message->toString());
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug71Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug71Test.php");
    }
}
