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

/* vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/ExtensionPassTest.php */
class __TwigTemplate_cbb910f41590bdd899d8b906dbdaaab2544e00c0457db1ab65acb624499d433c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/ExtensionPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/ExtensionPassTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExtensionPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class ExtensionPassTest extends TestCase
{
    public function testProcessDoesNotDropExistingFileLoaderMethodCalls()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.debug', false);

        \$container->register('twig.app_variable', '\\Symfony\\Bridge\\Twig\\AppVariable');
        \$container->register('templating', '\\Symfony\\Bundle\\TwigBundle\\TwigEngine');
        \$container->register('twig.extension.yaml');
        \$container->register('twig.extension.debug.stopwatch');
        \$container->register('twig.extension.expression');

        \$nativeTwigLoader = new Definition('\\Twig\\Loader\\FilesystemLoader');
        \$nativeTwigLoader->addMethodCall('addPath', []);
        \$container->setDefinition('twig.loader.native_filesystem', \$nativeTwigLoader);

        \$filesystemLoader = new Definition('\\Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader');
        \$filesystemLoader->setArguments([null, null, null]);
        \$filesystemLoader->addMethodCall('addPath', []);
        \$container->setDefinition('twig.loader.filesystem', \$filesystemLoader);

        \$extensionPass = new ExtensionPass();
        \$extensionPass->process(\$container);

        \$this->assertCount(2, \$filesystemLoader->getMethodCalls());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/ExtensionPassTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExtensionPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class ExtensionPassTest extends TestCase
{
    public function testProcessDoesNotDropExistingFileLoaderMethodCalls()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('kernel.debug', false);

        \$container->register('twig.app_variable', '\\Symfony\\Bridge\\Twig\\AppVariable');
        \$container->register('templating', '\\Symfony\\Bundle\\TwigBundle\\TwigEngine');
        \$container->register('twig.extension.yaml');
        \$container->register('twig.extension.debug.stopwatch');
        \$container->register('twig.extension.expression');

        \$nativeTwigLoader = new Definition('\\Twig\\Loader\\FilesystemLoader');
        \$nativeTwigLoader->addMethodCall('addPath', []);
        \$container->setDefinition('twig.loader.native_filesystem', \$nativeTwigLoader);

        \$filesystemLoader = new Definition('\\Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader');
        \$filesystemLoader->setArguments([null, null, null]);
        \$filesystemLoader->addMethodCall('addPath', []);
        \$container->setDefinition('twig.loader.filesystem', \$filesystemLoader);

        \$extensionPass = new ExtensionPass();
        \$extensionPass->process(\$container);

        \$this->assertCount(2, \$filesystemLoader->getMethodCalls());
    }
}
", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/ExtensionPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/DependencyInjection/Compiler/ExtensionPassTest.php");
    }
}
