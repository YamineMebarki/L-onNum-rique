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

/* vendor/symfony/validator/Tests/Mapping/Loader/FilesLoaderTest.php */
class __TwigTemplate_b4b89d8436a2296cb961cfa86acf273d891b7d3a92e50151f72c3567c256409d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/FilesLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/FilesLoaderTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

class FilesLoaderTest extends TestCase
{
    public function testCallsGetFileLoaderInstanceForeachPath()
    {
        \$loader = \$this->getFilesLoader(\$this->getFileLoader());
        \$this->assertEquals(4, \$loader->getTimesCalled());
    }

    public function testCallsActualFileLoaderForMetadata()
    {
        \$fileLoader = \$this->getFileLoader();
        \$fileLoader->expects(\$this->exactly(4))
            ->method('loadClassMetadata');
        \$loader = \$this->getFilesLoader(\$fileLoader);
        \$loader->loadClassMetadata(new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity'));
    }

    public function getFilesLoader(LoaderInterface \$loader)
    {
        return \$this->getMockForAbstractClass('Symfony\\Component\\Validator\\Tests\\Fixtures\\FilesLoader', [[
            __DIR__.'/constraint-mapping.xml',
            __DIR__.'/constraint-mapping.yaml',
            __DIR__.'/constraint-mapping.test',
            __DIR__.'/constraint-mapping.txt',
        ], \$loader]);
    }

    public function getFileLoader()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Loader/FilesLoaderTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

class FilesLoaderTest extends TestCase
{
    public function testCallsGetFileLoaderInstanceForeachPath()
    {
        \$loader = \$this->getFilesLoader(\$this->getFileLoader());
        \$this->assertEquals(4, \$loader->getTimesCalled());
    }

    public function testCallsActualFileLoaderForMetadata()
    {
        \$fileLoader = \$this->getFileLoader();
        \$fileLoader->expects(\$this->exactly(4))
            ->method('loadClassMetadata');
        \$loader = \$this->getFilesLoader(\$fileLoader);
        \$loader->loadClassMetadata(new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity'));
    }

    public function getFilesLoader(LoaderInterface \$loader)
    {
        return \$this->getMockForAbstractClass('Symfony\\Component\\Validator\\Tests\\Fixtures\\FilesLoader', [[
            __DIR__.'/constraint-mapping.xml',
            __DIR__.'/constraint-mapping.yaml',
            __DIR__.'/constraint-mapping.test',
            __DIR__.'/constraint-mapping.txt',
        ], \$loader]);
    }

    public function getFileLoader()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface')->getMock();
    }
}
", "vendor/symfony/validator/Tests/Mapping/Loader/FilesLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Loader/FilesLoaderTest.php");
    }
}
