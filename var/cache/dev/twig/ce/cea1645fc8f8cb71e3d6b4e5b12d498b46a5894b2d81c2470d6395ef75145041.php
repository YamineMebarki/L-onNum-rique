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

/* vendor/symfony/twig-bridge/Tests/Mime/TemplatedEmailTest.php */
class __TwigTemplate_2ceb0a6719f5af19d40b2e96c65c2ea22546e1a719203f0da2a5f3cf98b34d71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Mime/TemplatedEmailTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Mime/TemplatedEmailTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bridge\\Twig\\Tests\\Mime;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Mime\\TemplatedEmail;

class TemplatedEmailTest extends TestCase
{
    public function test()
    {
        \$email = new TemplatedEmail();
        \$email->context(\$context = ['product' => 'Symfony']);
        \$this->assertEquals(\$context, \$email->getContext());

        \$email->textTemplate(\$template = 'text');
        \$this->assertEquals(\$template, \$email->getTextTemplate());

        \$email->htmlTemplate(\$template = 'html');
        \$this->assertEquals(\$template, \$email->getHtmlTemplate());
    }

    public function testSerialize()
    {
        \$email = (new TemplatedEmail())
            ->textTemplate('text.txt.twig')
            ->htmlTemplate('text.html.twig')
            ->context(\$context = ['a' => 'b'])
        ;

        \$email = unserialize(serialize(\$email));
        \$this->assertEquals('text.txt.twig', \$email->getTextTemplate());
        \$this->assertEquals('text.html.twig', \$email->getHtmlTemplate());
        \$this->assertEquals(\$context, \$email->getContext());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Mime/TemplatedEmailTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bridge\\Twig\\Tests\\Mime;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Mime\\TemplatedEmail;

class TemplatedEmailTest extends TestCase
{
    public function test()
    {
        \$email = new TemplatedEmail();
        \$email->context(\$context = ['product' => 'Symfony']);
        \$this->assertEquals(\$context, \$email->getContext());

        \$email->textTemplate(\$template = 'text');
        \$this->assertEquals(\$template, \$email->getTextTemplate());

        \$email->htmlTemplate(\$template = 'html');
        \$this->assertEquals(\$template, \$email->getHtmlTemplate());
    }

    public function testSerialize()
    {
        \$email = (new TemplatedEmail())
            ->textTemplate('text.txt.twig')
            ->htmlTemplate('text.html.twig')
            ->context(\$context = ['a' => 'b'])
        ;

        \$email = unserialize(serialize(\$email));
        \$this->assertEquals('text.txt.twig', \$email->getTextTemplate());
        \$this->assertEquals('text.html.twig', \$email->getHtmlTemplate());
        \$this->assertEquals(\$context, \$email->getContext());
    }
}
", "vendor/symfony/twig-bridge/Tests/Mime/TemplatedEmailTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Mime/TemplatedEmailTest.php");
    }
}
