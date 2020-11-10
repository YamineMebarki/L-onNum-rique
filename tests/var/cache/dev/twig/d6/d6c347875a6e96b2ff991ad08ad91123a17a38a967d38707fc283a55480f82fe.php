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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/DependencyInjectionTest.php */
class __TwigTemplate_5f91866a1ff8789e2780f1a975bdd45837c5459b10bf534cf2a9f87b5056ee25 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/DependencyInjectionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/DependencyInjectionTest.php"));

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

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;

abstract class DependencyInjectionTest extends TestCase
{
    /**
     * Assertion on the Class of a DIC Service Definition.
     *
     * @param \\Symfony\\Component\\DependencyInjection\\Definition \$definition
     * @param string                                            \$expectedClass
     */
    protected function assertDICDefinitionClass(\$definition, \$expectedClass)
    {
        \$this->assertEquals(\$expectedClass, \$definition->getClass(), \"Expected Class of the DIC Container Service Definition is wrong.\");
    }

    protected function assertDICConstructorArguments(\$definition, \$args)
    {
        \$this->assertEquals(\$args, \$definition->getArguments(), \"Expected and actual DIC Service constructor arguments of definition '\".\$definition->getClass().\"' don't match.\");
    }

    protected function assertDICDefinitionMethodCallAt(\$pos, \$definition, \$methodName, array \$params = null)
    {
        \$calls = \$definition->getMethodCalls();
        if (isset(\$calls[\$pos][0])) {
            \$this->assertEquals(\$methodName, \$calls[\$pos][0], \"Method '\".\$methodName.\"' is expected to be called at position \$pos.\");

            if (\$params !== null) {
                \$this->assertEquals(\$params, \$calls[\$pos][1], \"Expected parameters to methods '\".\$methodName.\"' do not match the actual parameters.\");
            }
        } else {
            \$this->fail(\"Method '\".\$methodName.\"' is expected to be called at position \$pos.\");
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/DependencyInjectionTest.php";
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

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;

abstract class DependencyInjectionTest extends TestCase
{
    /**
     * Assertion on the Class of a DIC Service Definition.
     *
     * @param \\Symfony\\Component\\DependencyInjection\\Definition \$definition
     * @param string                                            \$expectedClass
     */
    protected function assertDICDefinitionClass(\$definition, \$expectedClass)
    {
        \$this->assertEquals(\$expectedClass, \$definition->getClass(), \"Expected Class of the DIC Container Service Definition is wrong.\");
    }

    protected function assertDICConstructorArguments(\$definition, \$args)
    {
        \$this->assertEquals(\$args, \$definition->getArguments(), \"Expected and actual DIC Service constructor arguments of definition '\".\$definition->getClass().\"' don't match.\");
    }

    protected function assertDICDefinitionMethodCallAt(\$pos, \$definition, \$methodName, array \$params = null)
    {
        \$calls = \$definition->getMethodCalls();
        if (isset(\$calls[\$pos][0])) {
            \$this->assertEquals(\$methodName, \$calls[\$pos][0], \"Method '\".\$methodName.\"' is expected to be called at position \$pos.\");

            if (\$params !== null) {
                \$this->assertEquals(\$params, \$calls[\$pos][1], \"Expected parameters to methods '\".\$methodName.\"' do not match the actual parameters.\");
            }
        } else {
            \$this->fail(\"Method '\".\$methodName.\"' is expected to be called at position \$pos.\");
        }
    }
}
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/DependencyInjectionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/DependencyInjectionTest.php");
    }
}
