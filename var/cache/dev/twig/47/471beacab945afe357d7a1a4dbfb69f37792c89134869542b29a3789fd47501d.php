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

/* vendor/symfony/config/Tests/Resource/ClassExistenceResourceTest.php */
class __TwigTemplate_e7e66afc268dd7f127e94b75513e0dc2668b0208748f36fc615f0f546f7b6db5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/ClassExistenceResourceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/ClassExistenceResourceTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Resource;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\Config\\Tests\\Fixtures\\BadParent;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Resource\\ConditionalClass;

class ClassExistenceResourceTest extends TestCase
{
    public function testToString()
    {
        \$res = new ClassExistenceResource('BarClass');
        \$this->assertSame('BarClass', (string) \$res);
    }

    public function testGetResource()
    {
        \$res = new ClassExistenceResource('BarClass');
        \$this->assertSame('BarClass', \$res->getResource());
    }

    public function testIsFreshWhenClassDoesNotExist()
    {
        \$res = new ClassExistenceResource('Symfony\\Component\\Config\\Tests\\Fixtures\\BarClass');

        \$this->assertTrue(\$res->isFresh(time()));

        eval(<<<EOF
namespace Symfony\\Component\\Config\\Tests\\Fixtures;

class BarClass
{
}
EOF
        );

        \$this->assertFalse(\$res->isFresh(time()));
    }

    public function testIsFreshWhenClassExists()
    {
        \$res = new ClassExistenceResource('Symfony\\Component\\Config\\Tests\\Resource\\ClassExistenceResourceTest');

        \$this->assertTrue(\$res->isFresh(time()));
    }

    public function testExistsKo()
    {
        spl_autoload_register(\$autoloader = function (\$class) use (&\$loadedClass) { \$loadedClass = \$class; });

        try {
            \$res = new ClassExistenceResource('MissingFooClass');
            \$this->assertTrue(\$res->isFresh(0));

            \$this->assertSame('MissingFooClass', \$loadedClass);

            \$loadedClass = 123;

            \$res = new ClassExistenceResource('MissingFooClass', false);

            \$this->assertSame(123, \$loadedClass);
        } finally {
            spl_autoload_unregister(\$autoloader);
        }
    }

    public function testBadParentWithTimestamp()
    {
        \$res = new ClassExistenceResource(BadParent::class, false);
        \$this->assertTrue(\$res->isFresh(time()));
    }

    public function testBadParentWithNoTimestamp()
    {
        \$this->expectException('ReflectionException');
        \$this->expectExceptionMessage('Class Symfony\\Component\\Config\\Tests\\Fixtures\\MissingParent not found');

        \$res = new ClassExistenceResource(BadParent::class, false);
        \$res->isFresh(0);
    }

    public function testConditionalClass()
    {
        \$res = new ClassExistenceResource(ConditionalClass::class, false);

        \$this->assertFalse(\$res->isFresh(0));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Resource/ClassExistenceResourceTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Resource;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\Config\\Tests\\Fixtures\\BadParent;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Resource\\ConditionalClass;

class ClassExistenceResourceTest extends TestCase
{
    public function testToString()
    {
        \$res = new ClassExistenceResource('BarClass');
        \$this->assertSame('BarClass', (string) \$res);
    }

    public function testGetResource()
    {
        \$res = new ClassExistenceResource('BarClass');
        \$this->assertSame('BarClass', \$res->getResource());
    }

    public function testIsFreshWhenClassDoesNotExist()
    {
        \$res = new ClassExistenceResource('Symfony\\Component\\Config\\Tests\\Fixtures\\BarClass');

        \$this->assertTrue(\$res->isFresh(time()));

        eval(<<<EOF
namespace Symfony\\Component\\Config\\Tests\\Fixtures;

class BarClass
{
}
EOF
        );

        \$this->assertFalse(\$res->isFresh(time()));
    }

    public function testIsFreshWhenClassExists()
    {
        \$res = new ClassExistenceResource('Symfony\\Component\\Config\\Tests\\Resource\\ClassExistenceResourceTest');

        \$this->assertTrue(\$res->isFresh(time()));
    }

    public function testExistsKo()
    {
        spl_autoload_register(\$autoloader = function (\$class) use (&\$loadedClass) { \$loadedClass = \$class; });

        try {
            \$res = new ClassExistenceResource('MissingFooClass');
            \$this->assertTrue(\$res->isFresh(0));

            \$this->assertSame('MissingFooClass', \$loadedClass);

            \$loadedClass = 123;

            \$res = new ClassExistenceResource('MissingFooClass', false);

            \$this->assertSame(123, \$loadedClass);
        } finally {
            spl_autoload_unregister(\$autoloader);
        }
    }

    public function testBadParentWithTimestamp()
    {
        \$res = new ClassExistenceResource(BadParent::class, false);
        \$this->assertTrue(\$res->isFresh(time()));
    }

    public function testBadParentWithNoTimestamp()
    {
        \$this->expectException('ReflectionException');
        \$this->expectExceptionMessage('Class Symfony\\Component\\Config\\Tests\\Fixtures\\MissingParent not found');

        \$res = new ClassExistenceResource(BadParent::class, false);
        \$res->isFresh(0);
    }

    public function testConditionalClass()
    {
        \$res = new ClassExistenceResource(ConditionalClass::class, false);

        \$this->assertFalse(\$res->isFresh(0));
    }
}
", "vendor/symfony/config/Tests/Resource/ClassExistenceResourceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Resource/ClassExistenceResourceTest.php");
    }
}
