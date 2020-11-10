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

/* vendor/fig/link-util/test/GenericLinkProviderTest.php */
class __TwigTemplate_9aedfd52e08241f4dd7af401383c2856208582c7505e4f5200907acba4bc1f3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/test/GenericLinkProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/test/GenericLinkProviderTest.php"));

        // line 1
        echo "<?php


namespace Fig\\Link\\Tests;

use Fig\\Link\\GenericLinkProvider;
use Fig\\Link\\Link;

class GenericLinkProviderTest extends \\PHPUnit_Framework_TestCase
{

    public function test_can_add_links_by_method()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link);

        \$this->assertContains(\$link, \$provider->getLinks());
    }


    public function test_can_add_links_by_constructor()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link);

        \$this->assertContains(\$link, \$provider->getLinks());
    }

    public function test_can_get_links_by_rel()
    {
        \$link1 = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;
        \$link2 = (new Link())
            ->withHref('http://www.php-fig.org/')
            ->withRel('home')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link1)
            ->withLink(\$link2);

        \$links = \$provider->getLinksByRel('home');
        \$this->assertContains(\$link2, \$links);
        \$this->assertFalse(in_array(\$link1, \$links));
    }

    public function test_can_remove_links()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link)
            ->withoutLink(\$link);

        \$this->assertFalse(in_array(\$link, \$provider->getLinks()));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/test/GenericLinkProviderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Fig\\Link\\Tests;

use Fig\\Link\\GenericLinkProvider;
use Fig\\Link\\Link;

class GenericLinkProviderTest extends \\PHPUnit_Framework_TestCase
{

    public function test_can_add_links_by_method()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link);

        \$this->assertContains(\$link, \$provider->getLinks());
    }


    public function test_can_add_links_by_constructor()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link);

        \$this->assertContains(\$link, \$provider->getLinks());
    }

    public function test_can_get_links_by_rel()
    {
        \$link1 = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;
        \$link2 = (new Link())
            ->withHref('http://www.php-fig.org/')
            ->withRel('home')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link1)
            ->withLink(\$link2);

        \$links = \$provider->getLinksByRel('home');
        \$this->assertContains(\$link2, \$links);
        \$this->assertFalse(in_array(\$link1, \$links));
    }

    public function test_can_remove_links()
    {
        \$link = (new Link())
            ->withHref('http://www.google.com')
            ->withRel('next')
            ->withAttribute('me', 'you')
        ;

        \$provider = (new GenericLinkProvider())
            ->withLink(\$link)
            ->withoutLink(\$link);

        \$this->assertFalse(in_array(\$link, \$provider->getLinks()));
    }
}
", "vendor/fig/link-util/test/GenericLinkProviderTest.php", "/var/www/public/DevLaon/templates/vendor/fig/link-util/test/GenericLinkProviderTest.php");
    }
}
