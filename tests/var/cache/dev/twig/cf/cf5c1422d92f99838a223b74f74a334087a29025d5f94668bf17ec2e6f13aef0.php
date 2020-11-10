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

/* vendor/symfony/twig-bridge/Tests/Extension/RoutingExtensionTest.php */
class __TwigTemplate_f1b4f298242e968015bd9b6324521aae1dcbe724b6cc38301e2d581d1863d62e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/RoutingExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/RoutingExtensionTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\RoutingExtension;
use Twig\\Environment;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Source;

class RoutingExtensionTest extends TestCase
{
    /**
     * @dataProvider getEscapingTemplates
     */
    public function testEscaping(\$template, \$mustBeEscaped)
    {
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['debug' => true, 'cache' => false, 'autoescape' => 'html', 'optimizations' => 0]);
        \$twig->addExtension(new RoutingExtension(\$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock()));

        \$nodes = \$twig->parse(\$twig->tokenize(new Source(\$template, '')));

        \$this->assertSame(\$mustBeEscaped, \$nodes->getNode('body')->getNode(0)->getNode('expr') instanceof FilterExpression);
    }

    public function getEscapingTemplates()
    {
        return [
            ['";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo");
        echo "', false],
            ['";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", []);
        echo "', false],
            ['";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => "foo"]);
        echo "', false],
            ['";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 41, $this->source); })())), "html", null, true);
        echo "', true],
            ['";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 42, $this->source); })())]), "html", null, true);
        echo "', true],
            ['";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => [0 => "foo", 1 => "bar"]]), "html", null, true);
        echo "', true],
            ['";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => "foo", "bar" => "bar"]), "html", null, true);
        echo "', true],

            ['";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", []);
        echo "', false],
            ['";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => "foo"]);
        echo "', false],
            ['";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 48, $this->source); })())), "html", null, true);
        echo "', true],
            ['";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => [0 => "foo", 1 => "bar"]]), "html", null, true);
        echo "', true],
            ['";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "', true],
            ['";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("foo", ["foo" => "foo", "bar" => "bar"]), "html", null, true);
        echo "', true],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/RoutingExtensionTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 51,  127 => 50,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  86 => 39,  82 => 38,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\RoutingExtension;
use Twig\\Environment;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Source;

class RoutingExtensionTest extends TestCase
{
    /**
     * @dataProvider getEscapingTemplates
     */
    public function testEscaping(\$template, \$mustBeEscaped)
    {
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['debug' => true, 'cache' => false, 'autoescape' => 'html', 'optimizations' => 0]);
        \$twig->addExtension(new RoutingExtension(\$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock()));

        \$nodes = \$twig->parse(\$twig->tokenize(new Source(\$template, '')));

        \$this->assertSame(\$mustBeEscaped, \$nodes->getNode('body')->getNode(0)->getNode('expr') instanceof FilterExpression);
    }

    public function getEscapingTemplates()
    {
        return [
            ['{{ path(\"foo\") }}', false],
            ['{{ path(\"foo\", {}) }}', false],
            ['{{ path(\"foo\", { foo: \"foo\" }) }}', false],
            ['{{ path(\"foo\", foo) }}', true],
            ['{{ path(\"foo\", { foo: foo }) }}', true],
            ['{{ path(\"foo\", { foo: [\"foo\", \"bar\"] }) }}', true],
            ['{{ path(\"foo\", { foo: \"foo\", bar: \"bar\" }) }}', true],

            ['{{ path(name = \"foo\", parameters = {}) }}', false],
            ['{{ path(name = \"foo\", parameters = { foo: \"foo\" }) }}', false],
            ['{{ path(name = \"foo\", parameters = foo) }}', true],
            ['{{ path(name = \"foo\", parameters = { foo: [\"foo\", \"bar\"] }) }}', true],
            ['{{ path(name = \"foo\", parameters = { foo: foo }) }}', true],
            ['{{ path(name = \"foo\", parameters = { foo: \"foo\", bar: \"bar\" }) }}', true],
        ];
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/RoutingExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/RoutingExtensionTest.php");
    }
}
