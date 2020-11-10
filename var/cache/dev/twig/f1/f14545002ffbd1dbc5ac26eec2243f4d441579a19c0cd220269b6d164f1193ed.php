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

/* vendor/fig/link-util/test/LinkTest.php */
class __TwigTemplate_00116cef92e4ede9c213793a912a517c0ffb44944eb96098f73a6539519efc89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/test/LinkTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/test/LinkTest.php"));

        // line 1
        echo "<?php

namespace Fig\\Link\\Tests;

use Fig\\Link\\Link;

class LinkTest extends \\PHPUnit_Framework_TestCase
{

    public function test_can_set_and_retrieve_values()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$this->assertEquals('http://www.google.com', \$link->getHref());
        \$this->assertContains('next', \$link->getRels());
        \$this->assertArrayHasKey('me', \$link->getAttributes());
        \$this->assertEquals('you', \$link->getAttributes()['me']);
    }

    public function test_can_remove_values()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$link = \$link->withoutAttribute('me')
            ->withoutRel('next');

        \$this->assertEquals('http://www.google.com', \$link->getHref());
        \$this->assertFalse(in_array('next', \$link->getRels()));
        \$this->assertFalse(array_key_exists('me', \$link->getAttributes()));
    }

    public function test_multiple_rels()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withRel('reference');

        \$this->assertCount(2, \$link->getRels());
        \$this->assertContains('next', \$link->getRels());
        \$this->assertContains('reference', \$link->getRels());
    }

    public function test_constructor()
    {
        \$link = new Link('next', 'http://www.google.com');

        \$this->assertEquals('http://www.google.com', \$link->getHref());
        \$this->assertContains('next', \$link->getRels());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/test/LinkTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Fig\\Link\\Tests;

use Fig\\Link\\Link;

class LinkTest extends \\PHPUnit_Framework_TestCase
{

    public function test_can_set_and_retrieve_values()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$this->assertEquals('http://www.google.com', \$link->getHref());
        \$this->assertContains('next', \$link->getRels());
        \$this->assertArrayHasKey('me', \$link->getAttributes());
        \$this->assertEquals('you', \$link->getAttributes()['me']);
    }

    public function test_can_remove_values()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$link = \$link->withoutAttribute('me')
            ->withoutRel('next');

        \$this->assertEquals('http://www.google.com', \$link->getHref());
        \$this->assertFalse(in_array('next', \$link->getRels()));
        \$this->assertFalse(array_key_exists('me', \$link->getAttributes()));
    }

    public function test_multiple_rels()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withRel('reference');

        \$this->assertCount(2, \$link->getRels());
        \$this->assertContains('next', \$link->getRels());
        \$this->assertContains('reference', \$link->getRels());
    }

    public function test_constructor()
    {
        \$link = new Link('next', 'http://www.google.com');

        \$this->assertEquals('http://www.google.com', \$link->getHref());
        \$this->assertContains('next', \$link->getRels());
    }
}
", "vendor/fig/link-util/test/LinkTest.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/test/LinkTest.php");
    }
}
