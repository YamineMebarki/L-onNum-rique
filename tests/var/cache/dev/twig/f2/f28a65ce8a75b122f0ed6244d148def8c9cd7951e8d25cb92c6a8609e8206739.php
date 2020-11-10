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

/* vendor/symfony/dependency-injection/Tests/Extension/ExtensionTest.php */
class __TwigTemplate_945684eb5cf00939a7bebe810e54123cd760b3ef60fff23b37106b97c03ad1f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Extension/ExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Extension/ExtensionTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;

class ExtensionTest extends TestCase
{
    /**
     * @dataProvider getResolvedEnabledFixtures
     */
    public function testIsConfigEnabledReturnsTheResolvedValue(\$enabled)
    {
        \$extension = new EnableableExtension();
        \$this->assertSame(\$enabled, \$extension->isConfigEnabled(new ContainerBuilder(), ['enabled' => \$enabled]));
    }

    public function getResolvedEnabledFixtures()
    {
        return [
            [true],
            [false],
        ];
    }

    public function testIsConfigEnabledOnNonEnableableConfig()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The config array has no \\'enabled\\' key.');
        \$extension = new EnableableExtension();

        \$extension->isConfigEnabled(new ContainerBuilder(), []);
    }
}

class EnableableExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
    }

    public function isConfigEnabled(ContainerBuilder \$container, array \$config)
    {
        return parent::isConfigEnabled(\$container, \$config);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Extension/ExtensionTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;

class ExtensionTest extends TestCase
{
    /**
     * @dataProvider getResolvedEnabledFixtures
     */
    public function testIsConfigEnabledReturnsTheResolvedValue(\$enabled)
    {
        \$extension = new EnableableExtension();
        \$this->assertSame(\$enabled, \$extension->isConfigEnabled(new ContainerBuilder(), ['enabled' => \$enabled]));
    }

    public function getResolvedEnabledFixtures()
    {
        return [
            [true],
            [false],
        ];
    }

    public function testIsConfigEnabledOnNonEnableableConfig()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The config array has no \\'enabled\\' key.');
        \$extension = new EnableableExtension();

        \$extension->isConfigEnabled(new ContainerBuilder(), []);
    }
}

class EnableableExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
    }

    public function isConfigEnabled(ContainerBuilder \$container, array \$config)
    {
        return parent::isConfigEnabled(\$container, \$config);
    }
}
", "vendor/symfony/dependency-injection/Tests/Extension/ExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Extension/ExtensionTest.php");
    }
}
