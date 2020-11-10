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

/* vendor/symfony/twig-bridge/Tests/TokenParser/FormThemeTokenParserTest.php */
class __TwigTemplate_b15de5c2ba70a144376f5814aedac04182b0775659977a473773296e6d73cf83 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/TokenParser/FormThemeTokenParserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/TokenParser/FormThemeTokenParserTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\TokenParser;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Symfony\\Bridge\\Twig\\TokenParser\\FormThemeTokenParser;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Parser;
use Twig\\Source;

class FormThemeTokenParserTest extends TestCase
{
    /**
     * @dataProvider getTestsForFormTheme
     */
    public function testCompile(\$source, \$expected)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$env->addTokenParser(new FormThemeTokenParser());
        \$source = new Source(\$source, '');
        \$stream = \$env->tokenize(\$source);
        \$parser = new Parser(\$env);

        \$expected->setSourceContext(\$source);

        \$this->assertEquals(\$expected, \$parser->parse(\$stream)->getNode('body')->getNode(0));
    }

    public function getTestsForFormTheme()
    {
        return [
            [
                '";
        // line 46
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), [0 => "tpl1"], true);
        echo "',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '";
        // line 58
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), [0 => "tpl1", 1 => "tpl2"], true);
        echo "',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '";
        // line 72
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "tpl1", true);
        echo "',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ConstantExpression('tpl1', 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '";
        // line 81
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), [0 => "tpl1"], true);
        echo "',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '";
        // line 93
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), [0 => "tpl1", 1 => "tpl2"], true);
        echo "',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '";
        // line 107
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), [0 => "tpl1", 1 => "tpl2"], false);
        echo "',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme',
                    true
                ),
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/TokenParser/FormThemeTokenParserTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 107,  149 => 93,  134 => 81,  122 => 72,  105 => 58,  90 => 46,  43 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Tests\\TokenParser;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Symfony\\Bridge\\Twig\\TokenParser\\FormThemeTokenParser;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Parser;
use Twig\\Source;

class FormThemeTokenParserTest extends TestCase
{
    /**
     * @dataProvider getTestsForFormTheme
     */
    public function testCompile(\$source, \$expected)
    {
        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        \$env->addTokenParser(new FormThemeTokenParser());
        \$source = new Source(\$source, '');
        \$stream = \$env->tokenize(\$source);
        \$parser = new Parser(\$env);

        \$expected->setSourceContext(\$source);

        \$this->assertEquals(\$expected, \$parser->parse(\$stream)->getNode('body')->getNode(0));
    }

    public function getTestsForFormTheme()
    {
        return [
            [
                '{% form_theme form \"tpl1\" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form \"tpl1\" \"tpl2\" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with \"tpl1\" %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ConstantExpression('tpl1', 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with [\"tpl1\"] %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with [\"tpl1\", \"tpl2\"] %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme'
                ),
            ],
            [
                '{% form_theme form with [\"tpl1\", \"tpl2\"] only %}',
                new FormThemeNode(
                    new NameExpression('form', 1),
                    new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression('tpl1', 1),
                        new ConstantExpression(1, 1),
                        new ConstantExpression('tpl2', 1),
                    ], 1),
                    1,
                    'form_theme',
                    true
                ),
            ],
        ];
    }
}
", "vendor/symfony/twig-bridge/Tests/TokenParser/FormThemeTokenParserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/TokenParser/FormThemeTokenParserTest.php");
    }
}
