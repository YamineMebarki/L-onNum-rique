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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/UnusedTagsPassTest.php */
class __TwigTemplate_e719881824c4aec06db9b9c157bb0fcb75cdec7d32d9a01faf13af3d1127860f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/UnusedTagsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/UnusedTagsPassTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\UnusedTagsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class UnusedTagsPassTest extends TestCase
{
    public function testProcess()
    {
        \$pass = new UnusedTagsPass();

        \$container = new ContainerBuilder();
        \$container->register('foo')
            ->addTag('kenrel.event_subscriber');
        \$container->register('bar')
            ->addTag('kenrel.event_subscriber');

        \$pass->process(\$container);

        \$this->assertSame([sprintf('%s: Tag \"kenrel.event_subscriber\" was defined on service(s) \"foo\", \"bar\", but was never used. Did you mean \"kernel.event_subscriber\"?', UnusedTagsPass::class)], \$container->getCompiler()->getLog());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/UnusedTagsPassTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\UnusedTagsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class UnusedTagsPassTest extends TestCase
{
    public function testProcess()
    {
        \$pass = new UnusedTagsPass();

        \$container = new ContainerBuilder();
        \$container->register('foo')
            ->addTag('kenrel.event_subscriber');
        \$container->register('bar')
            ->addTag('kenrel.event_subscriber');

        \$pass->process(\$container);

        \$this->assertSame([sprintf('%s: Tag \"kenrel.event_subscriber\" was defined on service(s) \"foo\", \"bar\", but was never used. Did you mean \"kernel.event_subscriber\"?', UnusedTagsPass::class)], \$container->getCompiler()->getLog());
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/UnusedTagsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Compiler/UnusedTagsPassTest.php");
    }
}
