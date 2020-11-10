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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug118Test.php */
class __TwigTemplate_6d0a685f5d810a8d8e78eb0eb8aba8ca22b5a915da6b350e1f76618b551f89d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug118Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug118Test.php"));

        // line 1
        echo "<?php

class Swift_Bug118Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$message;

    protected function setUp()
    {
        \$this->message = new Swift_Message();
    }

    public function testCallingGenerateIdChangesTheMessageId()
    {
        \$currentId = \$this->message->getId();
        \$this->message->generateId();
        \$newId = \$this->message->getId();

        \$this->assertNotEquals(\$currentId, \$newId);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug118Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug118Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$message;

    protected function setUp()
    {
        \$this->message = new Swift_Message();
    }

    public function testCallingGenerateIdChangesTheMessageId()
    {
        \$currentId = \$this->message->getId();
        \$this->message->generateId();
        \$newId = \$this->message->getId();

        \$this->assertNotEquals(\$currentId, \$newId);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug118Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug118Test.php");
    }
}
