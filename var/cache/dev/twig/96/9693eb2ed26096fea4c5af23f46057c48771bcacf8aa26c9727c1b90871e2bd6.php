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

/* vendor/symfony/routing/Tests/Loader/AnnotationFileLoaderTest.php */
class __TwigTemplate_e3f2f15e3dbc9d98c526b812b635c24fdde87a03fdf7175a8e721273324e38ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/AnnotationFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Loader/AnnotationFileLoaderTest.php"));

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
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader;

class AnnotationFileLoaderTest extends AbstractAnnotationLoaderTest
{
    protected \$loader;
    protected \$reader;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->reader = \$this->getReader();
        \$this->loader = new AnnotationFileLoader(new FileLocator(), \$this->getClassLoader(\$this->reader));
    }

    public function testLoad()
    {
        \$this->reader->expects(\$this->once())->method('getClassAnnotation');

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/FooClass.php');
    }

    public function testLoadTraitWithClassConstant()
    {
        \$this->reader->expects(\$this->never())->method('getClassAnnotation');

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/FooTrait.php');
    }

    public function testLoadFileWithoutStartTag()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Did you forgot to add the \"<?php\" start tag at the beginning of the file?');
        \$this->loader->load(__DIR__.'/../Fixtures/OtherAnnotatedClasses/NoStartTagClass.php');
    }

    public function testLoadVariadic()
    {
        \$route = new Route(['path' => '/path/to/{id}']);
        \$this->reader->expects(\$this->once())->method('getClassAnnotation');
        \$this->reader->expects(\$this->once())->method('getMethodAnnotations')
            ->willReturn([\$route]);

        \$this->loader->load(__DIR__.'/../Fixtures/OtherAnnotatedClasses/VariadicClass.php');
    }

    /**
     * @requires PHP 7.0
     */
    public function testLoadAnonymousClass()
    {
        \$this->reader->expects(\$this->never())->method('getClassAnnotation');
        \$this->reader->expects(\$this->never())->method('getMethodAnnotations');

        \$this->loader->load(__DIR__.'/../Fixtures/OtherAnnotatedClasses/AnonymousClassInTrait.php');
    }

    public function testLoadAbstractClass()
    {
        \$this->reader->expects(\$this->never())->method('getClassAnnotation');
        \$this->reader->expects(\$this->never())->method('getMethodAnnotations');

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/AbstractClass.php');
    }

    public function testSupports()
    {
        \$fixture = __DIR__.'/../Fixtures/annotated.php';

        \$this->assertTrue(\$this->loader->supports(\$fixture), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$this->loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$this->loader->supports(\$fixture, 'annotation'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$this->loader->supports(\$fixture, 'foo'), '->supports() checks the resource type if specified');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Loader/AnnotationFileLoaderTest.php";
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
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader;

class AnnotationFileLoaderTest extends AbstractAnnotationLoaderTest
{
    protected \$loader;
    protected \$reader;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->reader = \$this->getReader();
        \$this->loader = new AnnotationFileLoader(new FileLocator(), \$this->getClassLoader(\$this->reader));
    }

    public function testLoad()
    {
        \$this->reader->expects(\$this->once())->method('getClassAnnotation');

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/FooClass.php');
    }

    public function testLoadTraitWithClassConstant()
    {
        \$this->reader->expects(\$this->never())->method('getClassAnnotation');

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/FooTrait.php');
    }

    public function testLoadFileWithoutStartTag()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Did you forgot to add the \"<?php\" start tag at the beginning of the file?');
        \$this->loader->load(__DIR__.'/../Fixtures/OtherAnnotatedClasses/NoStartTagClass.php');
    }

    public function testLoadVariadic()
    {
        \$route = new Route(['path' => '/path/to/{id}']);
        \$this->reader->expects(\$this->once())->method('getClassAnnotation');
        \$this->reader->expects(\$this->once())->method('getMethodAnnotations')
            ->willReturn([\$route]);

        \$this->loader->load(__DIR__.'/../Fixtures/OtherAnnotatedClasses/VariadicClass.php');
    }

    /**
     * @requires PHP 7.0
     */
    public function testLoadAnonymousClass()
    {
        \$this->reader->expects(\$this->never())->method('getClassAnnotation');
        \$this->reader->expects(\$this->never())->method('getMethodAnnotations');

        \$this->loader->load(__DIR__.'/../Fixtures/OtherAnnotatedClasses/AnonymousClassInTrait.php');
    }

    public function testLoadAbstractClass()
    {
        \$this->reader->expects(\$this->never())->method('getClassAnnotation');
        \$this->reader->expects(\$this->never())->method('getMethodAnnotations');

        \$this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses/AbstractClass.php');
    }

    public function testSupports()
    {
        \$fixture = __DIR__.'/../Fixtures/annotated.php';

        \$this->assertTrue(\$this->loader->supports(\$fixture), '->supports() returns true if the resource is loadable');
        \$this->assertFalse(\$this->loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        \$this->assertTrue(\$this->loader->supports(\$fixture, 'annotation'), '->supports() checks the resource type if specified');
        \$this->assertFalse(\$this->loader->supports(\$fixture, 'foo'), '->supports() checks the resource type if specified');
    }
}
", "vendor/symfony/routing/Tests/Loader/AnnotationFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Loader/AnnotationFileLoaderTest.php");
    }
}
