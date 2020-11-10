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

/* vendor/symfony/routing/Tests/Loader/AnnotationDirectoryLoaderTest.php */
class __TwigTemplate_6d3df5d06c56ff804ea6eaa49d453f90f61d1fd4db036cd712e83252be1dcbef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/AnnotationDirectoryLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/AnnotationDirectoryLoaderTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests\\Loader;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader;

class AnnotationDirectoryLoaderTest extends AbstractAnnotationLoaderTest
{
    protected \$loader;
    protected \$reader;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->reader = \$this->getReader();
        \$this->loader = new AnnotationDirectoryLoader(new FileLocator(), \$this->getClassLoader(\$this->reader));
    }

    public function testLoad()
    {
        \$this->reader->expects(\$this->exactly(4))->method('getClassAnnotation');

        \$this->reader
            ->expects(\$this->any())
            ->method('getMethodAnnotations')
            ->willReturn([])
        ;

        \$this->reader
            ->expects(\$this->any())
            ->method('getClassAnnotations')
            ->willReturn([])
        ;

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses');
    }

    public function testLoadIgnoresHiddenDirectories()
    {
        \$this->expectAnnotationsToBeReadFrom([
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\BarClass',
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\BazClass',
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\FooClass',
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\EncodingClass',
        ]);

        \$this->reader
            ->expects(\$this->any())
            ->method('getMethodAnnotations')
            ->willReturn([])
        ;

        \$this->reader
            ->expects(\$this->any())
            ->method('getClassAnnotations')
            ->willReturn([])
        ;

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses');
    }

    public function testSupports()
    {
        \$fixturesDir = __DIR__.'/../Fixtures';

        \$this->assertTrue(\$this->loader->supports(\$fixturesDir), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$this->loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$this->loader->supports(\$fixturesDir, 'annotation'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$this->loader->supports(\$fixturesDir, 'foo'), '->supports() checks the resource type if specified');
    }

    public function testItSupportsAnyAnnotation()
    {
        \$this->assertTrue(\$this->loader->supports(__DIR__.'/../Fixtures/even-with-not-existing-folder', 'annotation'));
    }

    public function testLoadFileIfLocatedResourceIsFile()
    {
        \$this->reader->expects(\$this->exactly(1))->method('getClassAnnotation');

        \$this->reader
            ->expects(\$this->any())
            ->method('getMethodAnnotations')
            ->willReturn([])
        ;

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/FooClass.php');
    }

    private function expectAnnotationsToBeReadFrom(array \$classes)
    {
        \$this->reader->expects(\$this->exactly(\\count(\$classes)))
            ->method('getClassAnnotation')
            ->with(\$this->callback(function (\\ReflectionClass \$class) use (\$classes) {
                return \\in_array(\$class->getName(), \$classes);
            }));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Loader/AnnotationDirectoryLoaderTest.php";
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

namespace Symfony\\Component\\Routing\\Tests\\Loader;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader;

class AnnotationDirectoryLoaderTest extends AbstractAnnotationLoaderTest
{
    protected \$loader;
    protected \$reader;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->reader = \$this->getReader();
        \$this->loader = new AnnotationDirectoryLoader(new FileLocator(), \$this->getClassLoader(\$this->reader));
    }

    public function testLoad()
    {
        \$this->reader->expects(\$this->exactly(4))->method('getClassAnnotation');

        \$this->reader
            ->expects(\$this->any())
            ->method('getMethodAnnotations')
            ->willReturn([])
        ;

        \$this->reader
            ->expects(\$this->any())
            ->method('getClassAnnotations')
            ->willReturn([])
        ;

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses');
    }

    public function testLoadIgnoresHiddenDirectories()
    {
        \$this->expectAnnotationsToBeReadFrom([
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\BarClass',
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\BazClass',
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\FooClass',
            'Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotatedClasses\\EncodingClass',
        ]);

        \$this->reader
            ->expects(\$this->any())
            ->method('getMethodAnnotations')
            ->willReturn([])
        ;

        \$this->reader
            ->expects(\$this->any())
            ->method('getClassAnnotations')
            ->willReturn([])
        ;

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses');
    }

    public function testSupports()
    {
        \$fixturesDir = __DIR__.'/../Fixtures';

        \$this->assertTrue(\$this->loader->supports(\$fixturesDir), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$this->loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$this->loader->supports(\$fixturesDir, 'annotation'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$this->loader->supports(\$fixturesDir, 'foo'), '->supports() checks the resource type if specified');
    }

    public function testItSupportsAnyAnnotation()
    {
        \$this->assertTrue(\$this->loader->supports(__DIR__.'/../Fixtures/even-with-not-existing-folder', 'annotation'));
    }

    public function testLoadFileIfLocatedResourceIsFile()
    {
        \$this->reader->expects(\$this->exactly(1))->method('getClassAnnotation');

        \$this->reader
            ->expects(\$this->any())
            ->method('getMethodAnnotations')
            ->willReturn([])
        ;

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/FooClass.php');
    }

    private function expectAnnotationsToBeReadFrom(array \$classes)
    {
        \$this->reader->expects(\$this->exactly(\\count(\$classes)))
            ->method('getClassAnnotation')
            ->with(\$this->callback(function (\\ReflectionClass \$class) use (\$classes) {
                return \\in_array(\$class->getName(), \$classes);
            }));
    }
}
", "vendor/symfony/routing/Tests/Loader/AnnotationDirectoryLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Loader/AnnotationDirectoryLoaderTest.php");
    }
}
