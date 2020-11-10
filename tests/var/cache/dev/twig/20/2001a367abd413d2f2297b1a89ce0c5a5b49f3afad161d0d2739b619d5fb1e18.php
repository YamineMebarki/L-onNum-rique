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

/* vendor/fig/link-util/test/TemplatedHrefTraitTest.php */
class __TwigTemplate_67dc9f27dd5c1e237285c4c045e58b32a0fc4b61caf323780eba37ed325c3ac4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/test/TemplatedHrefTraitTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/test/TemplatedHrefTraitTest.php"));

        // line 1
        echo "<?php


namespace Fig\\Link\\Tests;


use Fig\\Link\\Link;

class TemplatedHrefTraitTest extends \\PHPUnit_Framework_TestCase {

    /**
     *
     * @dataProvider templatedHrefProvider
     *
     * @param string \$href
     *   The href to check.
     */
    public function test_templated(\$href)
    {
        \$link = (new Link())
            ->withHref(\$href);

        \$this->assertTrue(\$link->isTemplated());
    }

    /**
     *
     * @dataProvider notTemplatedHrefProvider
     *
     * @param string \$href
     *   The href to check.
     */
    public function test_not_templated(\$href)
    {
        \$link = (new Link())
            ->withHref(\$href);

        \$this->assertFalse(\$link->isTemplated());
    }

    public function templatedHrefProvider()
    {
        return [
            ['http://www.google.com/{param}/foo'],
            ['http://www.google.com/foo?q={param}'],
        ];
    }

    public function notTemplatedHrefProvider()
    {
        return [
            ['http://www.google.com/foo'],
            ['/foo/bar/baz'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/test/TemplatedHrefTraitTest.php";
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

class TemplatedHrefTraitTest extends \\PHPUnit_Framework_TestCase {

    /**
     *
     * @dataProvider templatedHrefProvider
     *
     * @param string \$href
     *   The href to check.
     */
    public function test_templated(\$href)
    {
        \$link = (new Link())
            ->withHref(\$href);

        \$this->assertTrue(\$link->isTemplated());
    }

    /**
     *
     * @dataProvider notTemplatedHrefProvider
     *
     * @param string \$href
     *   The href to check.
     */
    public function test_not_templated(\$href)
    {
        \$link = (new Link())
            ->withHref(\$href);

        \$this->assertFalse(\$link->isTemplated());
    }

    public function templatedHrefProvider()
    {
        return [
            ['http://www.google.com/{param}/foo'],
            ['http://www.google.com/foo?q={param}'],
        ];
    }

    public function notTemplatedHrefProvider()
    {
        return [
            ['http://www.google.com/foo'],
            ['/foo/bar/baz'],
        ];
    }
}
", "vendor/fig/link-util/test/TemplatedHrefTraitTest.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/test/TemplatedHrefTraitTest.php");
    }
}
