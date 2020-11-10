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

/* vendor/symfony/expression-language/Tests/Node/AbstractNodeTest.php */
class __TwigTemplate_14ad6f584b1941f059f3625c760fca3d1ff8043e28a3671723cf4acc5df9da5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/AbstractNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Node/AbstractNodeTest.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Tests\\Node;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\Compiler;

abstract class AbstractNodeTest extends TestCase
{
    /**
     * @dataProvider getEvaluateData
     */
    public function testEvaluate(\$expected, \$node, \$variables = [], \$functions = [])
    {
        \$this->assertSame(\$expected, \$node->evaluate(\$functions, \$variables));
    }

    abstract public function getEvaluateData();

    /**
     * @dataProvider getCompileData
     */
    public function testCompile(\$expected, \$node, \$functions = [])
    {
        \$compiler = new Compiler(\$functions);
        \$node->compile(\$compiler);
        \$this->assertSame(\$expected, \$compiler->getSource());
    }

    abstract public function getCompileData();

    /**
     * @dataProvider getDumpData
     */
    public function testDump(\$expected, \$node)
    {
        \$this->assertSame(\$expected, \$node->dump());
    }

    abstract public function getDumpData();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/Node/AbstractNodeTest.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Tests\\Node;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\Compiler;

abstract class AbstractNodeTest extends TestCase
{
    /**
     * @dataProvider getEvaluateData
     */
    public function testEvaluate(\$expected, \$node, \$variables = [], \$functions = [])
    {
        \$this->assertSame(\$expected, \$node->evaluate(\$functions, \$variables));
    }

    abstract public function getEvaluateData();

    /**
     * @dataProvider getCompileData
     */
    public function testCompile(\$expected, \$node, \$functions = [])
    {
        \$compiler = new Compiler(\$functions);
        \$node->compile(\$compiler);
        \$this->assertSame(\$expected, \$compiler->getSource());
    }

    abstract public function getCompileData();

    /**
     * @dataProvider getDumpData
     */
    public function testDump(\$expected, \$node)
    {
        \$this->assertSame(\$expected, \$node->dump());
    }

    abstract public function getDumpData();
}
", "vendor/symfony/expression-language/Tests/Node/AbstractNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/Node/AbstractNodeTest.php");
    }
}
