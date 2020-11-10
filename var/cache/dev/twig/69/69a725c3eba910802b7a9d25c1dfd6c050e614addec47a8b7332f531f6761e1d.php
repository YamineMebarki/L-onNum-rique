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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/EventObjectTest.php */
class __TwigTemplate_4abefcfa38e8df91a48495fb334e04135cebae687a849adf3ea4428e58ad3dec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/EventObjectTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/EventObjectTest.php"));

        // line 1
        echo "<?php

class Swift_Events_EventObjectTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEventSourceCanBeReturnedViaGetter()
    {
        \$source = new stdClass();
        \$evt = \$this->createEvent(\$source);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$source, \$ref);
    }

    public function testEventDoesNotHaveCancelledBubbleWhenNew()
    {
        \$source = new stdClass();
        \$evt = \$this->createEvent(\$source);
        \$this->assertFalse(\$evt->bubbleCancelled());
    }

    public function testBubbleCanBeCancelledInEvent()
    {
        \$source = new stdClass();
        \$evt = \$this->createEvent(\$source);
        \$evt->cancelBubble();
        \$this->assertTrue(\$evt->bubbleCancelled());
    }

    private function createEvent(\$source)
    {
        return new Swift_Events_EventObject(\$source);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/EventObjectTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Events_EventObjectTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEventSourceCanBeReturnedViaGetter()
    {
        \$source = new stdClass();
        \$evt = \$this->createEvent(\$source);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$source, \$ref);
    }

    public function testEventDoesNotHaveCancelledBubbleWhenNew()
    {
        \$source = new stdClass();
        \$evt = \$this->createEvent(\$source);
        \$this->assertFalse(\$evt->bubbleCancelled());
    }

    public function testBubbleCanBeCancelledInEvent()
    {
        \$source = new stdClass();
        \$evt = \$this->createEvent(\$source);
        \$evt->cancelBubble();
        \$this->assertTrue(\$evt->bubbleCancelled());
    }

    private function createEvent(\$source)
    {
        return new Swift_Events_EventObject(\$source);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/EventObjectTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/EventObjectTest.php");
    }
}
