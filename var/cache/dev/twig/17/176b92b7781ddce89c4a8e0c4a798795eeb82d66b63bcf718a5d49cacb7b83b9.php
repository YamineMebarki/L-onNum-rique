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

/* vendor/symfony/validator/Tests/Mapping/Loader/StaticMethodLoaderTest.php */
class __TwigTemplate_9071bf32f726c73e7cea8686c2426c784279b5c056035a2c92e08139ff204481 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/StaticMethodLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/StaticMethodLoaderTest.php"));

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
use Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;

class StaticMethodLoaderTest extends TestCase
{
    private \$errorLevel;

    protected function setUp(): void
    {
        \$this->errorLevel = error_reporting();
    }

    protected function tearDown(): void
    {
        error_reporting(\$this->errorLevel);
    }

    public function testLoadClassMetadataReturnsTrueIfSuccessful()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderEntity');

        \$this->assertTrue(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadataReturnsFalseIfNotSuccessful()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata('\\stdClass');

        \$this->assertFalse(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadata()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderEntity');

        \$loader->loadClassMetadata(\$metadata);

        \$this->assertEquals(StaticLoaderEntity::\$invokedWith, \$metadata);
    }

    public function testLoadClassMetadataDoesNotRepeatLoadWithParentClasses()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderDocument');
        \$loader->loadClassMetadata(\$metadata);
        \$this->assertCount(0, \$metadata->getConstraints());

        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\BaseStaticLoaderDocument');
        \$loader->loadClassMetadata(\$metadata);
        \$this->assertCount(1, \$metadata->getConstraints());
    }

    public function testLoadClassMetadataIgnoresInterfaces()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderInterface');

        \$loader->loadClassMetadata(\$metadata);

        \$this->assertCount(0, \$metadata->getConstraints());
    }

    public function testLoadClassMetadataInAbstractClasses()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\AbstractStaticLoader');

        \$loader->loadClassMetadata(\$metadata);

        \$this->assertCount(1, \$metadata->getConstraints());
    }

    public function testLoadClassMetadataIgnoresAbstractMethods()
    {
        // Disable error reporting, as AbstractStaticMethodLoader produces a
        // strict standards error
        error_reporting(0);

        \$metadata = new ClassMetadata(__NAMESPACE__.'\\AbstractStaticMethodLoader');

        \$loader = new StaticMethodLoader('loadMetadata');
        \$loader->loadClassMetadata(\$metadata);

        \$this->assertCount(0, \$metadata->getConstraints());
    }
}

interface StaticLoaderInterface
{
    public static function loadMetadata(ClassMetadata \$metadata);
}

abstract class AbstractStaticLoader
{
    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addConstraint(new ConstraintA());
    }
}

class StaticLoaderEntity
{
    public static \$invokedWith = null;

    public static function loadMetadata(ClassMetadata \$metadata)
    {
        self::\$invokedWith = \$metadata;
    }
}

class StaticLoaderDocument extends BaseStaticLoaderDocument
{
}

class BaseStaticLoaderDocument
{
    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addConstraint(new ConstraintA());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Loader/StaticMethodLoaderTest.php";
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
use Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;

class StaticMethodLoaderTest extends TestCase
{
    private \$errorLevel;

    protected function setUp(): void
    {
        \$this->errorLevel = error_reporting();
    }

    protected function tearDown(): void
    {
        error_reporting(\$this->errorLevel);
    }

    public function testLoadClassMetadataReturnsTrueIfSuccessful()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderEntity');

        \$this->assertTrue(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadataReturnsFalseIfNotSuccessful()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata('\\stdClass');

        \$this->assertFalse(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadata()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderEntity');

        \$loader->loadClassMetadata(\$metadata);

        \$this->assertEquals(StaticLoaderEntity::\$invokedWith, \$metadata);
    }

    public function testLoadClassMetadataDoesNotRepeatLoadWithParentClasses()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderDocument');
        \$loader->loadClassMetadata(\$metadata);
        \$this->assertCount(0, \$metadata->getConstraints());

        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\BaseStaticLoaderDocument');
        \$loader->loadClassMetadata(\$metadata);
        \$this->assertCount(1, \$metadata->getConstraints());
    }

    public function testLoadClassMetadataIgnoresInterfaces()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\StaticLoaderInterface');

        \$loader->loadClassMetadata(\$metadata);

        \$this->assertCount(0, \$metadata->getConstraints());
    }

    public function testLoadClassMetadataInAbstractClasses()
    {
        \$loader = new StaticMethodLoader('loadMetadata');
        \$metadata = new ClassMetadata(__NAMESPACE__.'\\AbstractStaticLoader');

        \$loader->loadClassMetadata(\$metadata);

        \$this->assertCount(1, \$metadata->getConstraints());
    }

    public function testLoadClassMetadataIgnoresAbstractMethods()
    {
        // Disable error reporting, as AbstractStaticMethodLoader produces a
        // strict standards error
        error_reporting(0);

        \$metadata = new ClassMetadata(__NAMESPACE__.'\\AbstractStaticMethodLoader');

        \$loader = new StaticMethodLoader('loadMetadata');
        \$loader->loadClassMetadata(\$metadata);

        \$this->assertCount(0, \$metadata->getConstraints());
    }
}

interface StaticLoaderInterface
{
    public static function loadMetadata(ClassMetadata \$metadata);
}

abstract class AbstractStaticLoader
{
    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addConstraint(new ConstraintA());
    }
}

class StaticLoaderEntity
{
    public static \$invokedWith = null;

    public static function loadMetadata(ClassMetadata \$metadata)
    {
        self::\$invokedWith = \$metadata;
    }
}

class StaticLoaderDocument extends BaseStaticLoaderDocument
{
}

class BaseStaticLoaderDocument
{
    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addConstraint(new ConstraintA());
    }
}
", "vendor/symfony/validator/Tests/Mapping/Loader/StaticMethodLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Loader/StaticMethodLoaderTest.php");
    }
}
