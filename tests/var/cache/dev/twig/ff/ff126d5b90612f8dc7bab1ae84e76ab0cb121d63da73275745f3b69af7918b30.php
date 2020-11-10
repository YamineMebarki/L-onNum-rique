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

/* vendor/twig/twig/src/Test/NodeTestCase.php */
class __TwigTemplate_d0d60792883d9aebc60173039a64a412be7ae49968fe53403d447c2a6bd94932 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Test/NodeTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Test/NodeTestCase.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Test;

use PHPUnit\\Framework\\TestCase;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;
use Twig\\Node\\Node;

abstract class NodeTestCase extends TestCase
{
    abstract public function getTests();

    /**
     * @dataProvider getTests
     */
    public function testCompile(\$node, \$source, \$environment = null, \$isPattern = false)
    {
        \$this->assertNodeCompilation(\$source, \$node, \$environment, \$isPattern);
    }

    public function assertNodeCompilation(\$source, Node \$node, Environment \$environment = null, \$isPattern = false)
    {
        \$compiler = \$this->getCompiler(\$environment);
        \$compiler->compile(\$node);

        if (\$isPattern) {
            \$this->assertStringMatchesFormat(\$source, trim(\$compiler->getSource()));
        } else {
            \$this->assertEquals(\$source, trim(\$compiler->getSource()));
        }
    }

    protected function getCompiler(Environment \$environment = null)
    {
        return new Compiler(null === \$environment ? \$this->getEnvironment() : \$environment);
    }

    protected function getEnvironment()
    {
        return new Environment(new ArrayLoader([]));
    }

    protected function getVariableGetter(\$name, \$line = false)
    {
        \$line = \$line > 0 ? \"// line {\$line}\\n\" : '';

        return sprintf('%s(\$context[\"%s\"] ?? null)', \$line, \$name);
    }

    protected function getAttributeGetter()
    {
        return 'twig_get_attribute(\$this->env, \$this->source, ';
    }
}

class_alias('Twig\\Test\\NodeTestCase', 'Twig_Test_NodeTestCase');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Test/NodeTestCase.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Test;

use PHPUnit\\Framework\\TestCase;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;
use Twig\\Node\\Node;

abstract class NodeTestCase extends TestCase
{
    abstract public function getTests();

    /**
     * @dataProvider getTests
     */
    public function testCompile(\$node, \$source, \$environment = null, \$isPattern = false)
    {
        \$this->assertNodeCompilation(\$source, \$node, \$environment, \$isPattern);
    }

    public function assertNodeCompilation(\$source, Node \$node, Environment \$environment = null, \$isPattern = false)
    {
        \$compiler = \$this->getCompiler(\$environment);
        \$compiler->compile(\$node);

        if (\$isPattern) {
            \$this->assertStringMatchesFormat(\$source, trim(\$compiler->getSource()));
        } else {
            \$this->assertEquals(\$source, trim(\$compiler->getSource()));
        }
    }

    protected function getCompiler(Environment \$environment = null)
    {
        return new Compiler(null === \$environment ? \$this->getEnvironment() : \$environment);
    }

    protected function getEnvironment()
    {
        return new Environment(new ArrayLoader([]));
    }

    protected function getVariableGetter(\$name, \$line = false)
    {
        \$line = \$line > 0 ? \"// line {\$line}\\n\" : '';

        return sprintf('%s(\$context[\"%s\"] ?? null)', \$line, \$name);
    }

    protected function getAttributeGetter()
    {
        return 'twig_get_attribute(\$this->env, \$this->source, ';
    }
}

class_alias('Twig\\Test\\NodeTestCase', 'Twig_Test_NodeTestCase');
", "vendor/twig/twig/src/Test/NodeTestCase.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Test/NodeTestCase.php");
    }
}
