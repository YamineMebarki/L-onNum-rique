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

/* vendor/symfony/twig-bundle/Tests/Loader/NativeFilesystemLoaderTest.php */
class __TwigTemplate_7d711019b48aa74e80c1b1cb91643e447952832bfa9bad52f95119b0b3a96ea7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Loader/NativeFilesystemLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Loader/NativeFilesystemLoaderTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Loader;

use Symfony\\Bundle\\TwigBundle\\Loader\\NativeFilesystemLoader;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;

class NativeFilesystemLoaderTest extends TestCase
{
    public function testWithNativeNamespace()
    {
        \$loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        \$loader->addPath('Fixtures/templates', 'DevLaon');

        \$this->assertSame('Fixtures'.\\DIRECTORY_SEPARATOR.'templates'.\\DIRECTORY_SEPARATOR.'Foo'.\\DIRECTORY_SEPARATOR.'site.html.twig', \$loader->getCacheKey('@DevLaon/Foo/site.html.twig'));
    }

    public function testWithLegacyStyle1()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$this->expectExceptionMessage('Template reference \"TestBundle::Foo/site.html.twig\" not found, did you mean \"@DevLaon/Foo/site.html.twig\"?');
        \$loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        \$loader->addPath('Fixtures/templates', 'DevLaon');

        \$loader->getCacheKey('TestBundle::Foo/site.html.twig');
    }

    public function testWithLegacyStyle2()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$this->expectExceptionMessage('Template reference \"TestBundle:Foo:site.html.twig\" not found, did you mean \"@DevLaon/Foo/site.html.twig\"?');
        \$loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        \$loader->addPath('Fixtures/templates', 'DevLaon');

        \$loader->getCacheKey('TestBundle:Foo:site.html.twig');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/Loader/NativeFilesystemLoaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Loader;

use Symfony\\Bundle\\TwigBundle\\Loader\\NativeFilesystemLoader;
use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;

class NativeFilesystemLoaderTest extends TestCase
{
    public function testWithNativeNamespace()
    {
        \$loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        \$loader->addPath('Fixtures/templates', 'DevLaon');

        \$this->assertSame('Fixtures'.\\DIRECTORY_SEPARATOR.'templates'.\\DIRECTORY_SEPARATOR.'Foo'.\\DIRECTORY_SEPARATOR.'site.html.twig', \$loader->getCacheKey('@DevLaon/Foo/site.html.twig'));
    }

    public function testWithLegacyStyle1()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$this->expectExceptionMessage('Template reference \"TestBundle::Foo/site.html.twig\" not found, did you mean \"@DevLaon/Foo/site.html.twig\"?');
        \$loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        \$loader->addPath('Fixtures/templates', 'DevLaon');

        \$loader->getCacheKey('TestBundle::Foo/site.html.twig');
    }

    public function testWithLegacyStyle2()
    {
        \$this->expectException('Twig\\Error\\LoaderError');
        \$this->expectExceptionMessage('Template reference \"TestBundle:Foo:site.html.twig\" not found, did you mean \"@DevLaon/Foo/site.html.twig\"?');
        \$loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        \$loader->addPath('Fixtures/templates', 'DevLaon');

        \$loader->getCacheKey('TestBundle:Foo:site.html.twig');
    }
}
", "vendor/symfony/twig-bundle/Tests/Loader/NativeFilesystemLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/Loader/NativeFilesystemLoaderTest.php");
    }
}
