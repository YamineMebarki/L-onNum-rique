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

/* vendor/symfony/framework-bundle/Tests/Functional/ContainerDumpTest.php */
class __TwigTemplate_9b6ff16503226571c237b6f702bd0888f41229f0e2d16ac8af5111816c8261f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ContainerDumpTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/ContainerDumpTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

/**
 * Checks that the container compiles correctly when all the bundle features are enabled.
 */
class ContainerDumpTest extends AbstractWebTestCase
{
    public function testContainerCompilationInDebug()
    {
        \$client = \$this->createClient(['test_case' => 'ContainerDump', 'root_config' => 'config.yml']);

        \$this->assertTrue(static::\$container->has('serializer'));
    }

    public function testContainerCompilation()
    {
        \$client = \$this->createClient(['test_case' => 'ContainerDump', 'root_config' => 'config.yml', 'debug' => false]);

        \$this->assertTrue(static::\$container->has('serializer'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/ContainerDumpTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

/**
 * Checks that the container compiles correctly when all the bundle features are enabled.
 */
class ContainerDumpTest extends AbstractWebTestCase
{
    public function testContainerCompilationInDebug()
    {
        \$client = \$this->createClient(['test_case' => 'ContainerDump', 'root_config' => 'config.yml']);

        \$this->assertTrue(static::\$container->has('serializer'));
    }

    public function testContainerCompilation()
    {
        \$client = \$this->createClient(['test_case' => 'ContainerDump', 'root_config' => 'config.yml', 'debug' => false]);

        \$this->assertTrue(static::\$container->has('serializer'));
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/ContainerDumpTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/ContainerDumpTest.php");
    }
}
