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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug518Test.php */
class __TwigTemplate_0fd7ca2aa0794dad3e77df1247e777e6dc2737dc105b470b480088233a8acd77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug518Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug518Test.php"));

        // line 1
        echo "<?php

use Mockery as m;

class Swift_Bug518Test extends \\SwiftMailerTestCase
{
    public function testIfEmailChangesAfterQueued()
    {
        \$failedRecipients = 'value';
        \$message = new Swift_Message();
        \$message->setTo('foo@bar.com');

        \$that = \$this;
        \$messageValidation = function (\$m) use (\$that) {
            //the getTo should return the same value as we put in
            \$that->assertEquals('foo@bar.com', key(\$m->getTo()), 'The message has changed after it was put to the memory queue');

            return true;
        };

        \$transport = m::mock('Swift_Transport');
        \$transport->shouldReceive('isStarted')->andReturn(true);
        \$transport->shouldReceive('send')
            ->with(m::on(\$messageValidation), \$failedRecipients)
            ->andReturn(1);

        \$memorySpool = new Swift_MemorySpool();
        \$memorySpool->queueMessage(\$message);

        /*
         * The message is queued in memory.
         * Lets change the message
         */
        \$message->setTo('other@value.com');

        \$memorySpool->flushQueue(\$transport, \$failedRecipients);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug518Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Mockery as m;

class Swift_Bug518Test extends \\SwiftMailerTestCase
{
    public function testIfEmailChangesAfterQueued()
    {
        \$failedRecipients = 'value';
        \$message = new Swift_Message();
        \$message->setTo('foo@bar.com');

        \$that = \$this;
        \$messageValidation = function (\$m) use (\$that) {
            //the getTo should return the same value as we put in
            \$that->assertEquals('foo@bar.com', key(\$m->getTo()), 'The message has changed after it was put to the memory queue');

            return true;
        };

        \$transport = m::mock('Swift_Transport');
        \$transport->shouldReceive('isStarted')->andReturn(true);
        \$transport->shouldReceive('send')
            ->with(m::on(\$messageValidation), \$failedRecipients)
            ->andReturn(1);

        \$memorySpool = new Swift_MemorySpool();
        \$memorySpool->queueMessage(\$message);

        /*
         * The message is queued in memory.
         * Lets change the message
         */
        \$message->setTo('other@value.com');

        \$memorySpool->flushQueue(\$transport, \$failedRecipients);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug518Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug518Test.php");
    }
}
