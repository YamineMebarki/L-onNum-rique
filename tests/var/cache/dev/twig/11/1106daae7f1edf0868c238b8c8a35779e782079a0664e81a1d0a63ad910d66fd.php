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

/* vendor/symfony/twig-bridge/Tests/Node/FormThemeTest.php */
class __TwigTemplate_1240d8a7b9f1ccb8f15375511f35a4a5d1f52a2111e4bd02fa527b4740e93476 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/FormThemeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/FormThemeTest.php"));

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
use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Symfony\\Bridge\\Twig\\Tests\\Extension\\RuntimeLoaderProvider;
use Symfony\\Component\\Form\\FormRenderer;
use Symfony\\Component\\Form\\FormRendererEngineInterface;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class FormThemeTest extends TestCase
{
    use RuntimeLoaderProvider;

    public function testConstructor()
    {
        \$form = new NameExpression('form', 0);
        \$resources = new Node([
            new ConstantExpression('tpl1', 0),
            new ConstantExpression('tpl2', 0),
        ]);

        \$node = new FormThemeNode(\$form, \$resources, 0);

        \$this->assertEquals(\$form, \$node->getNode('form'));
        \$this->assertEquals(\$resources, \$node->getNode('resources'));
        \$this->assertFalse(\$node->getAttribute('only'));
    }

    public function testCompile()
    {
        \$form = new NameExpression('form', 0);
        \$resources = new ArrayExpression([
            new ConstantExpression(0, 0),
            new ConstantExpression('tpl1', 0),
            new ConstantExpression(1, 0),
            new ConstantExpression('tpl2', 0),
        ], 0);

        \$node = new FormThemeNode(\$form, \$resources, 0);

        \$environment = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$formRenderer = new FormRenderer(\$this->getMockBuilder(FormRendererEngineInterface::class)->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$formRenderer);
        \$compiler = new Compiler(\$environment);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, [0 => \"tpl1\", 1 => \"tpl2\"], true);',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );

        \$node = new FormThemeNode(\$form, \$resources, 0, null, true);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, [0 => \"tpl1\", 1 => \"tpl2\"], false);',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );

        \$resources = new ConstantExpression('tpl1', 0);

        \$node = new FormThemeNode(\$form, \$resources, 0);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, \"tpl1\", true);',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );

        \$node = new FormThemeNode(\$form, \$resources, 0, null, true);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, \"tpl1\", false);',
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
        return "vendor/symfony/twig-bridge/Tests/Node/FormThemeTest.php";
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
use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Symfony\\Bridge\\Twig\\Tests\\Extension\\RuntimeLoaderProvider;
use Symfony\\Component\\Form\\FormRenderer;
use Symfony\\Component\\Form\\FormRendererEngineInterface;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class FormThemeTest extends TestCase
{
    use RuntimeLoaderProvider;

    public function testConstructor()
    {
        \$form = new NameExpression('form', 0);
        \$resources = new Node([
            new ConstantExpression('tpl1', 0),
            new ConstantExpression('tpl2', 0),
        ]);

        \$node = new FormThemeNode(\$form, \$resources, 0);

        \$this->assertEquals(\$form, \$node->getNode('form'));
        \$this->assertEquals(\$resources, \$node->getNode('resources'));
        \$this->assertFalse(\$node->getAttribute('only'));
    }

    public function testCompile()
    {
        \$form = new NameExpression('form', 0);
        \$resources = new ArrayExpression([
            new ConstantExpression(0, 0),
            new ConstantExpression('tpl1', 0),
            new ConstantExpression(1, 0),
            new ConstantExpression('tpl2', 0),
        ], 0);

        \$node = new FormThemeNode(\$form, \$resources, 0);

        \$environment = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$formRenderer = new FormRenderer(\$this->getMockBuilder(FormRendererEngineInterface::class)->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$formRenderer);
        \$compiler = new Compiler(\$environment);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, [0 => \"tpl1\", 1 => \"tpl2\"], true);',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );

        \$node = new FormThemeNode(\$form, \$resources, 0, null, true);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, [0 => \"tpl1\", 1 => \"tpl2\"], false);',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );

        \$resources = new ConstantExpression('tpl1', 0);

        \$node = new FormThemeNode(\$form, \$resources, 0);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, \"tpl1\", true);',
                \$this->getVariableGetter('form')
             ),
            trim(\$compiler->compile(\$node)->getSource())
        );

        \$node = new FormThemeNode(\$form, \$resources, 0, null, true);

        \$this->assertEquals(
            sprintf(
                '\$this->env->getRuntime(\"Symfony\\\\\\\\Component\\\\\\\\Form\\\\\\\\FormRenderer\")->setTheme(%s, \"tpl1\", false);',
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
", "vendor/symfony/twig-bridge/Tests/Node/FormThemeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Node/FormThemeTest.php");
    }
}
