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

/* vendor/symfony/twig-bridge/Tests/Node/DumpNodeTest.php */
class __TwigTemplate_193fb4eef009d2bf7450e3904b5f1831d130296974e5cf0121e55f3688bdfbcb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/DumpNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/DumpNodeTest.php"));

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
use Symfony\\Bridge\\Twig\\Node\\DumpNode;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class DumpNodeTest extends TestCase
{
    public function testNoVar()
    {
        \$node = new DumpNode('bar', null, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
if (\$this->env->isDebug()) {
    \$barvars = [];
    foreach (\$context as \$barkey => \$barval) {
        if (!\$barval instanceof \\Twig\\Template) {
            \$barvars[\$barkey] = \$barval;
        }
    }
    // line 7
    \\Symfony\\Component\\VarDumper\\VarDumper::dump(\$barvars);
}

EOTXT;

        \$this->assertSame(\$expected, \$compiler->compile(\$node)->getSource());
    }

    public function testIndented()
    {
        \$node = new DumpNode('bar', null, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
    if (\$this->env->isDebug()) {
        \$barvars = [];
        foreach (\$context as \$barkey => \$barval) {
            if (!\$barval instanceof \\Twig\\Template) {
                \$barvars[\$barkey] = \$barval;
            }
        }
        // line 7
        \\Symfony\\Component\\VarDumper\\VarDumper::dump(\$barvars);
    }

EOTXT;

        \$this->assertSame(\$expected, \$compiler->compile(\$node, 1)->getSource());
    }

    public function testOneVar()
    {
        \$vars = new Node([
            new NameExpression('foo', 7),
        ]);
        \$node = new DumpNode('bar', \$vars, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
if (\$this->env->isDebug()) {
    // line 7
    \\Symfony\\Component\\VarDumper\\VarDumper::dump(%foo%);
}

EOTXT;

        \$expected = preg_replace('/%(.*?)%/', '(\$context[\"\$1\"] ?? null)', \$expected);

        \$this->assertSame(\$expected, \$compiler->compile(\$node)->getSource());
    }

    public function testMultiVars()
    {
        \$vars = new Node([
            new NameExpression('foo', 7),
            new NameExpression('bar', 7),
        ]);
        \$node = new DumpNode('bar', \$vars, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
if (\$this->env->isDebug()) {
    // line 7
    \\Symfony\\Component\\VarDumper\\VarDumper::dump([
        \"foo\" => %foo%,
        \"bar\" => %bar%,
    ]);
}

EOTXT;

        \$expected = preg_replace('/%(.*?)%/', '(\$context[\"\$1\"] ?? null)', \$expected);

        \$this->assertSame(\$expected, \$compiler->compile(\$node)->getSource());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Node/DumpNodeTest.php";
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
use Symfony\\Bridge\\Twig\\Node\\DumpNode;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;

class DumpNodeTest extends TestCase
{
    public function testNoVar()
    {
        \$node = new DumpNode('bar', null, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
if (\$this->env->isDebug()) {
    \$barvars = [];
    foreach (\$context as \$barkey => \$barval) {
        if (!\$barval instanceof \\Twig\\Template) {
            \$barvars[\$barkey] = \$barval;
        }
    }
    // line 7
    \\Symfony\\Component\\VarDumper\\VarDumper::dump(\$barvars);
}

EOTXT;

        \$this->assertSame(\$expected, \$compiler->compile(\$node)->getSource());
    }

    public function testIndented()
    {
        \$node = new DumpNode('bar', null, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
    if (\$this->env->isDebug()) {
        \$barvars = [];
        foreach (\$context as \$barkey => \$barval) {
            if (!\$barval instanceof \\Twig\\Template) {
                \$barvars[\$barkey] = \$barval;
            }
        }
        // line 7
        \\Symfony\\Component\\VarDumper\\VarDumper::dump(\$barvars);
    }

EOTXT;

        \$this->assertSame(\$expected, \$compiler->compile(\$node, 1)->getSource());
    }

    public function testOneVar()
    {
        \$vars = new Node([
            new NameExpression('foo', 7),
        ]);
        \$node = new DumpNode('bar', \$vars, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
if (\$this->env->isDebug()) {
    // line 7
    \\Symfony\\Component\\VarDumper\\VarDumper::dump(%foo%);
}

EOTXT;

        \$expected = preg_replace('/%(.*?)%/', '(\$context[\"\$1\"] ?? null)', \$expected);

        \$this->assertSame(\$expected, \$compiler->compile(\$node)->getSource());
    }

    public function testMultiVars()
    {
        \$vars = new Node([
            new NameExpression('foo', 7),
            new NameExpression('bar', 7),
        ]);
        \$node = new DumpNode('bar', \$vars, 7);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$compiler = new Compiler(\$env);

        \$expected = <<<'EOTXT'
if (\$this->env->isDebug()) {
    // line 7
    \\Symfony\\Component\\VarDumper\\VarDumper::dump([
        \"foo\" => %foo%,
        \"bar\" => %bar%,
    ]);
}

EOTXT;

        \$expected = preg_replace('/%(.*?)%/', '(\$context[\"\$1\"] ?? null)', \$expected);

        \$this->assertSame(\$expected, \$compiler->compile(\$node)->getSource());
    }
}
", "vendor/symfony/twig-bridge/Tests/Node/DumpNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Node/DumpNodeTest.php");
    }
}
