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

/* vendor/symfony/twig-bridge/Tests/Node/SearchAndRenderBlockNodeTest.php */
class __TwigTemplate_a5fa37884bbe950cad2806fe11e053b080a037cee65115130e1a2c37b2210e5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/SearchAndRenderBlockNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/SearchAndRenderBlockNodeTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Node;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConditionalExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class SearchAndRenderBlockNodeTest extends TestCase
{
    public function testCompileWidget()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_widget', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'widget\\')',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileWidgetWithVariables()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_widget', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'widget\\', [\"foo\" => \"bar\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression('my label', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"label\" => \"my label\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithNullLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression(null, 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\')',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithEmptyStringLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression('', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\')',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithDefaultLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\')',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithAttributes()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression(null, 0),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        // https://github.com/symfony/symfony/issues/5029
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"foo\" => \"bar\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabelAndAttributes()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression('value in argument', 0),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
                new ConstantExpression('label', 0),
                new ConstantExpression('value in attributes', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"foo\" => \"bar\", \"label\" => \"value in argument\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabelThatEvaluatesToNull()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConditionalExpression(
                // if
                new ConstantExpression(true, 0),
                // then
                new ConstantExpression(null, 0),
                // else
                new ConstantExpression(null, 0),
                0
            ),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        // https://github.com/symfony/symfony/issues/5029
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', (twig_test_empty(\$_label_ = ((true) ? (null) : (null))) ? [] : [\"label\" => \$_label_]))',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabelThatEvaluatesToNullAndAttributes()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConditionalExpression(
                // if
                new ConstantExpression(true, 0),
                // then
                new ConstantExpression(null, 0),
                // else
                new ConstantExpression(null, 0),
                0
            ),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
                new ConstantExpression('label', 0),
                new ConstantExpression('value in attributes', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        // https://github.com/symfony/symfony/issues/5029
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"foo\" => \"bar\", \"label\" => \"value in attributes\"] + (twig_test_empty(\$_label_ = ((true) ? (null) : (null))) ? [] : [\"label\" => \$_label_]))',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    protected function getVariableGetter(\$name)
    {
        return sprintf('(\$context[\"%s\"] ?? null)', \$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Node/SearchAndRenderBlockNodeTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Tests\\Node;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConditionalExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class SearchAndRenderBlockNodeTest extends TestCase
{
    public function testCompileWidget()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_widget', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'widget\\')',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileWidgetWithVariables()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_widget', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'widget\\', [\"foo\" => \"bar\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression('my label', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"label\" => \"my label\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithNullLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression(null, 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\')',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithEmptyStringLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression('', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\')',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithDefaultLabel()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\')',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithAttributes()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression(null, 0),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        // https://github.com/symfony/symfony/issues/5029
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"foo\" => \"bar\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabelAndAttributes()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConstantExpression('value in argument', 0),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
                new ConstantExpression('label', 0),
                new ConstantExpression('value in attributes', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"foo\" => \"bar\", \"label\" => \"value in argument\"])',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabelThatEvaluatesToNull()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConditionalExpression(
                // if
                new ConstantExpression(true, 0),
                // then
                new ConstantExpression(null, 0),
                // else
                new ConstantExpression(null, 0),
                0
            ),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        // https://github.com/symfony/symfony/issues/5029
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', (twig_test_empty(\$_label_ = ((true) ? (null) : (null))) ? [] : [\"label\" => \$_label_]))',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    public function testCompileLabelWithLabelThatEvaluatesToNullAndAttributes()
    {
        \$arguments = new Node([
            new NameExpression('form', 0),
            new ConditionalExpression(
                // if
                new ConstantExpression(true, 0),
                // then
                new ConstantExpression(null, 0),
                // else
                new ConstantExpression(null, 0),
                0
            ),
            new ArrayExpression([
                new ConstantExpression('foo', 0),
                new ConstantExpression('bar', 0),
                new ConstantExpression('label', 0),
                new ConstantExpression('value in attributes', 0),
            ], 0),
        ]);

        \$node = new SearchAndRenderBlockNode('form_label', \$arguments, 0);

        \$compiler = new Compiler(new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock()));

        // \"label\" => null must not be included in the output!
        // Otherwise the default label is overwritten with null.
        // https://github.com/symfony/symfony/issues/5029
        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(%s, \\'label\\', [\"foo\" => \"bar\", \"label\" => \"value in attributes\"] + (twig_test_empty(\$_label_ = ((true) ? (null) : (null))) ? [] : [\"label\" => \$_label_]))',
                \$this->getVariableGetter('form')
            ),
            trim(\$compiler->compile(\$node)->getSource())
        );
    }

    protected function getVariableGetter(\$name)
    {
        return sprintf('(\$context[\"%s\"] ?? null)', \$name);
    }
}
", "vendor/symfony/twig-bridge/Tests/Node/SearchAndRenderBlockNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Node/SearchAndRenderBlockNodeTest.php");
    }
}
