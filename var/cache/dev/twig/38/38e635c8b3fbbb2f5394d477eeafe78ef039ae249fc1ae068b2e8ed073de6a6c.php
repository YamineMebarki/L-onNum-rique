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

/* vendor/symfony/dependency-injection/Tests/Compiler/PassConfigTest.php */
class __TwigTemplate_5fe2a6f74b28f8ad3fee3be0377424fc29012df403414cb55ad060d06e390202 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/PassConfigTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/PassConfigTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;

/**
 * @author Guilhem N <egetick@gmail.com>
 */
class PassConfigTest extends TestCase
{
    public function testPassOrdering()
    {
        \$config = new PassConfig();
        \$config->setBeforeOptimizationPasses([]);

        \$pass1 = \$this->getMockBuilder(CompilerPassInterface::class)->getMock();
        \$config->addPass(\$pass1, PassConfig::TYPE_BEFORE_OPTIMIZATION, 10);

        \$pass2 = \$this->getMockBuilder(CompilerPassInterface::class)->getMock();
        \$config->addPass(\$pass2, PassConfig::TYPE_BEFORE_OPTIMIZATION, 30);

        \$passes = \$config->getBeforeOptimizationPasses();
        \$this->assertSame(\$pass2, \$passes[0]);
        \$this->assertSame(\$pass1, \$passes[1]);
    }

    public function testPassOrderingWithoutPasses()
    {
        \$config = new PassConfig();
        \$config->setBeforeOptimizationPasses([]);
        \$config->setAfterRemovingPasses([]);
        \$config->setBeforeRemovingPasses([]);
        \$config->setOptimizationPasses([]);
        \$config->setRemovingPasses([]);

        \$this->assertEmpty(\$config->getBeforeOptimizationPasses());
        \$this->assertEmpty(\$config->getAfterRemovingPasses());
        \$this->assertEmpty(\$config->getBeforeRemovingPasses());
        \$this->assertEmpty(\$config->getOptimizationPasses());
        \$this->assertEmpty(\$config->getRemovingPasses());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/PassConfigTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;

/**
 * @author Guilhem N <egetick@gmail.com>
 */
class PassConfigTest extends TestCase
{
    public function testPassOrdering()
    {
        \$config = new PassConfig();
        \$config->setBeforeOptimizationPasses([]);

        \$pass1 = \$this->getMockBuilder(CompilerPassInterface::class)->getMock();
        \$config->addPass(\$pass1, PassConfig::TYPE_BEFORE_OPTIMIZATION, 10);

        \$pass2 = \$this->getMockBuilder(CompilerPassInterface::class)->getMock();
        \$config->addPass(\$pass2, PassConfig::TYPE_BEFORE_OPTIMIZATION, 30);

        \$passes = \$config->getBeforeOptimizationPasses();
        \$this->assertSame(\$pass2, \$passes[0]);
        \$this->assertSame(\$pass1, \$passes[1]);
    }

    public function testPassOrderingWithoutPasses()
    {
        \$config = new PassConfig();
        \$config->setBeforeOptimizationPasses([]);
        \$config->setAfterRemovingPasses([]);
        \$config->setBeforeRemovingPasses([]);
        \$config->setOptimizationPasses([]);
        \$config->setRemovingPasses([]);

        \$this->assertEmpty(\$config->getBeforeOptimizationPasses());
        \$this->assertEmpty(\$config->getAfterRemovingPasses());
        \$this->assertEmpty(\$config->getBeforeRemovingPasses());
        \$this->assertEmpty(\$config->getOptimizationPasses());
        \$this->assertEmpty(\$config->getRemovingPasses());
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/PassConfigTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/PassConfigTest.php");
    }
}
