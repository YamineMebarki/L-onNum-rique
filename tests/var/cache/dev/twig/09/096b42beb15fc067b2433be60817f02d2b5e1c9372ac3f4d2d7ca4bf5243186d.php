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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mailer/ArrayRecipientIteratorTest.php */
class __TwigTemplate_d124bce4349e7a76a87becada34fbb7c09fe2f1fe8494e0ece4d29415cac7cf2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mailer/ArrayRecipientIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mailer/ArrayRecipientIteratorTest.php"));

        // line 1
        echo "<?php

class Swift_Mailer_ArrayRecipientIteratorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testHasNextReturnsFalseForEmptyArray()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator([]);
        \$this->assertFalse(\$it->hasNext());
    }

    public function testHasNextReturnsTrueIfItemsLeft()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator(['foo@bar' => 'Foo']);
        \$this->assertTrue(\$it->hasNext());
    }

    public function testReadingToEndOfListCausesHasNextToReturnFalse()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator(['foo@bar' => 'Foo']);
        \$this->assertTrue(\$it->hasNext());
        \$it->nextRecipient();
        \$this->assertFalse(\$it->hasNext());
    }

    public function testReturnedValueHasPreservedKeyValuePair()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator(['foo@bar' => 'Foo']);
        \$this->assertEquals(['foo@bar' => 'Foo'], \$it->nextRecipient());
    }

    public function testIteratorMovesNextAfterEachIteration()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator([
            'foo@bar' => 'Foo',
            'zip@button' => 'Zip thing',
            'test@test' => null,
            ]);
        \$this->assertEquals(['foo@bar' => 'Foo'], \$it->nextRecipient());
        \$this->assertEquals(['zip@button' => 'Zip thing'], \$it->nextRecipient());
        \$this->assertEquals(['test@test' => null], \$it->nextRecipient());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mailer/ArrayRecipientIteratorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mailer_ArrayRecipientIteratorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testHasNextReturnsFalseForEmptyArray()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator([]);
        \$this->assertFalse(\$it->hasNext());
    }

    public function testHasNextReturnsTrueIfItemsLeft()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator(['foo@bar' => 'Foo']);
        \$this->assertTrue(\$it->hasNext());
    }

    public function testReadingToEndOfListCausesHasNextToReturnFalse()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator(['foo@bar' => 'Foo']);
        \$this->assertTrue(\$it->hasNext());
        \$it->nextRecipient();
        \$this->assertFalse(\$it->hasNext());
    }

    public function testReturnedValueHasPreservedKeyValuePair()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator(['foo@bar' => 'Foo']);
        \$this->assertEquals(['foo@bar' => 'Foo'], \$it->nextRecipient());
    }

    public function testIteratorMovesNextAfterEachIteration()
    {
        \$it = new Swift_Mailer_ArrayRecipientIterator([
            'foo@bar' => 'Foo',
            'zip@button' => 'Zip thing',
            'test@test' => null,
            ]);
        \$this->assertEquals(['foo@bar' => 'Foo'], \$it->nextRecipient());
        \$this->assertEquals(['zip@button' => 'Zip thing'], \$it->nextRecipient());
        \$this->assertEquals(['test@test' => null], \$it->nextRecipient());
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mailer/ArrayRecipientIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mailer/ArrayRecipientIteratorTest.php");
    }
}
