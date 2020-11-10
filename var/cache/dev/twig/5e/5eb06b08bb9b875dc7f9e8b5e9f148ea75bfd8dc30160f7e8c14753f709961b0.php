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

/* vendor/symfony/framework-bundle/Tests/Templating/Helper/StopwatchHelperTest.php */
class __TwigTemplate_c89e10aecc1c20d5553804c25231d8025ee5c2a9d1100393f2bf8eab68c14f11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/StopwatchHelperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/StopwatchHelperTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper;

/**
 * @group legacy
 */
class StopwatchHelperTest extends TestCase
{
    public function testDevEnvironment()
    {
        \$stopwatch = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')->getMock();
        \$stopwatch->expects(\$this->once())
            ->method('start')
            ->with('foo');

        \$helper = new StopwatchHelper(\$stopwatch);
        \$helper->start('foo');
    }

    public function testProdEnvironment()
    {
        \$helper = new StopwatchHelper(null);
        \$helper->start('foo');

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        \$this->addToAssertionCount(1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/Helper/StopwatchHelperTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper;

/**
 * @group legacy
 */
class StopwatchHelperTest extends TestCase
{
    public function testDevEnvironment()
    {
        \$stopwatch = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')->getMock();
        \$stopwatch->expects(\$this->once())
            ->method('start')
            ->with('foo');

        \$helper = new StopwatchHelper(\$stopwatch);
        \$helper->start('foo');
    }

    public function testProdEnvironment()
    {
        \$helper = new StopwatchHelper(null);
        \$helper->start('foo');

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        \$this->addToAssertionCount(1);
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/Helper/StopwatchHelperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/Helper/StopwatchHelperTest.php");
    }
}
