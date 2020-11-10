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

/* vendor/symfony/dependency-injection/Tests/Loader/DirectoryLoaderTest.php */
class __TwigTemplate_78edf670344817932429c468ac7e4bed4a4e22d676b2a290c587526b6f5b0a5f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/DirectoryLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Loader/DirectoryLoaderTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;

class DirectoryLoaderTest extends TestCase
{
    private static \$fixturesPath;

    private \$container;
    private \$loader;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');
    }

    protected function setUp(): void
    {
        \$locator = new FileLocator(self::\$fixturesPath);
        \$this->container = new ContainerBuilder();
        \$this->loader = new DirectoryLoader(\$this->container, \$locator);
        \$resolver = new LoaderResolver([
            new PhpFileLoader(\$this->container, \$locator),
            new IniFileLoader(\$this->container, \$locator),
            new YamlFileLoader(\$this->container, \$locator),
            \$this->loader,
        ]);
        \$this->loader->setResolver(\$resolver);
    }

    public function testDirectoryCanBeLoadedRecursively()
    {
        \$this->loader->load('directory/');
        \$this->assertEquals(['ini' => 'ini', 'yaml' => 'yaml', 'php' => 'php'], \$this->container->getParameterBag()->all(), '->load() takes a single directory');
    }

    public function testImports()
    {
        \$this->loader->resolve('directory/import/import.yml')->load('directory/import/import.yml');
        \$this->assertEquals(['ini' => 'ini', 'yaml' => 'yaml'], \$this->container->getParameterBag()->all(), '->load() takes a single file that imports a directory');
    }

    public function testExceptionIsRaisedWhenDirectoryDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The file \"foo\" does not exist (in:');
        \$this->loader->load('foo/');
    }

    public function testSupports()
    {
        \$loader = new DirectoryLoader(new ContainerBuilder(), new FileLocator());

        \$this->assertTrue(\$loader->supports('directory/'), '->supports(\"directory/\") returns true');
        \$this->assertTrue(\$loader->supports('directory/', 'directory'), '->supports(\"directory/\", \"directory\") returns true');
        \$this->assertFalse(\$loader->supports('directory'), '->supports(\"directory\") returns false');
        \$this->assertTrue(\$loader->supports('directory', 'directory'), '->supports(\"directory\", \"directory\") returns true');
        \$this->assertFalse(\$loader->supports('directory', 'foo'), '->supports(\"directory\", \"foo\") returns false');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Loader/DirectoryLoaderTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Loader\\LoaderResolver;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;

class DirectoryLoaderTest extends TestCase
{
    private static \$fixturesPath;

    private \$container;
    private \$loader;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = realpath(__DIR__.'/../Fixtures/');
    }

    protected function setUp(): void
    {
        \$locator = new FileLocator(self::\$fixturesPath);
        \$this->container = new ContainerBuilder();
        \$this->loader = new DirectoryLoader(\$this->container, \$locator);
        \$resolver = new LoaderResolver([
            new PhpFileLoader(\$this->container, \$locator),
            new IniFileLoader(\$this->container, \$locator),
            new YamlFileLoader(\$this->container, \$locator),
            \$this->loader,
        ]);
        \$this->loader->setResolver(\$resolver);
    }

    public function testDirectoryCanBeLoadedRecursively()
    {
        \$this->loader->load('directory/');
        \$this->assertEquals(['ini' => 'ini', 'yaml' => 'yaml', 'php' => 'php'], \$this->container->getParameterBag()->all(), '->load() takes a single directory');
    }

    public function testImports()
    {
        \$this->loader->resolve('directory/import/import.yml')->load('directory/import/import.yml');
        \$this->assertEquals(['ini' => 'ini', 'yaml' => 'yaml'], \$this->container->getParameterBag()->all(), '->load() takes a single file that imports a directory');
    }

    public function testExceptionIsRaisedWhenDirectoryDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The file \"foo\" does not exist (in:');
        \$this->loader->load('foo/');
    }

    public function testSupports()
    {
        \$loader = new DirectoryLoader(new ContainerBuilder(), new FileLocator());

        \$this->assertTrue(\$loader->supports('directory/'), '->supports(\"directory/\") returns true');
        \$this->assertTrue(\$loader->supports('directory/', 'directory'), '->supports(\"directory/\", \"directory\") returns true');
        \$this->assertFalse(\$loader->supports('directory'), '->supports(\"directory\") returns false');
        \$this->assertTrue(\$loader->supports('directory', 'directory'), '->supports(\"directory\", \"directory\") returns true');
        \$this->assertFalse(\$loader->supports('directory', 'foo'), '->supports(\"directory\", \"foo\") returns false');
    }
}
", "vendor/symfony/dependency-injection/Tests/Loader/DirectoryLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Loader/DirectoryLoaderTest.php");
    }
}
