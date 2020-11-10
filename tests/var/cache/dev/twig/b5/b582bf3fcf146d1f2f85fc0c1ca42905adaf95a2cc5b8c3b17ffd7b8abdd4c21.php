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

/* vendor/symfony/twig-bridge/Tests/Node/TransNodeTest.php */
class __TwigTemplate_a2dccad5380df028b5786207af754815c214ffff3901a0194af065af60c30c1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/TransNodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Node/TransNodeTest.php"));

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
use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\TextNode;

/**
 * @author Asmir Mustafic <goetas@gmail.com>
 */
class TransNodeTest extends TestCase
{
    public function testCompileStrict()
    {
        \$body = new TextNode('trans %var%', 0);
        \$vars = new NameExpression('foo', 0);
        \$node = new TransNode(\$body, null, null, \$vars);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['strict_variables' => true]);
        \$compiler = new Compiler(\$env);

        \$this->assertEquals(
            sprintf(
                'echo \$this->env->getExtension(\\'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\\')->trans(\"trans %%var%%\", array_merge([\"%%var%%\" => %s], %s), \"messages\");',
                \$this->getVariableGetterWithoutStrictCheck('var'),
                \$this->getVariableGetterWithStrictCheck('foo')
             ),
             trim(\$compiler->compile(\$node)->getSource())
        );
    }

    protected function getVariableGetterWithoutStrictCheck(\$name)
    {
        return sprintf('(\$context[\"%s\"] ?? null)', \$name);
    }

    protected function getVariableGetterWithStrictCheck(\$name)
    {
        if (Environment::MAJOR_VERSION >= 2) {
            return sprintf('(isset(\$context[\"%1\$s\"]) || array_key_exists(\"%1\$s\", \$context) ? \$context[\"%1\$s\"] : (function () { throw new %2\$s(\\'Variable \"%1\$s\" does not exist.\\', 0, \$this->source); })())', \$name, Environment::VERSION_ID >= 20700 ? 'RuntimeError' : 'Twig_Error_Runtime');
        }

        return sprintf('(\$context[\"%s\"] ?? \$this->getContext(\$context, \"%1\$s\"))', \$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Node/TransNodeTest.php";
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
use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Compiler;
use Twig\\Environment;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\TextNode;

/**
 * @author Asmir Mustafic <goetas@gmail.com>
 */
class TransNodeTest extends TestCase
{
    public function testCompileStrict()
    {
        \$body = new TextNode('trans %var%', 0);
        \$vars = new NameExpression('foo', 0);
        \$node = new TransNode(\$body, null, null, \$vars);

        \$env = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), ['strict_variables' => true]);
        \$compiler = new Compiler(\$env);

        \$this->assertEquals(
            sprintf(
                'echo \$this->env->getExtension(\\'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\\')->trans(\"trans %%var%%\", array_merge([\"%%var%%\" => %s], %s), \"messages\");',
                \$this->getVariableGetterWithoutStrictCheck('var'),
                \$this->getVariableGetterWithStrictCheck('foo')
             ),
             trim(\$compiler->compile(\$node)->getSource())
        );
    }

    protected function getVariableGetterWithoutStrictCheck(\$name)
    {
        return sprintf('(\$context[\"%s\"] ?? null)', \$name);
    }

    protected function getVariableGetterWithStrictCheck(\$name)
    {
        if (Environment::MAJOR_VERSION >= 2) {
            return sprintf('(isset(\$context[\"%1\$s\"]) || array_key_exists(\"%1\$s\", \$context) ? \$context[\"%1\$s\"] : (function () { throw new %2\$s(\\'Variable \"%1\$s\" does not exist.\\', 0, \$this->source); })())', \$name, Environment::VERSION_ID >= 20700 ? 'RuntimeError' : 'Twig_Error_Runtime');
        }

        return sprintf('(\$context[\"%s\"] ?? \$this->getContext(\$context, \"%1\$s\"))', \$name);
    }
}
", "vendor/symfony/twig-bridge/Tests/Node/TransNodeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Node/TransNodeTest.php");
    }
}
