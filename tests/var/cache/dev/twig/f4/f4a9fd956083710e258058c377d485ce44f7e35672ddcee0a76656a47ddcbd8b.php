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

/* vendor/symfony/config/Tests/Resource/FileResourceTest.php */
class __TwigTemplate_6f3e66d6bc963eef9fc572493dbb016932b8ac3bca4defbbecfb1f5473ef5009 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/FileResourceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/FileResourceTest.php"));

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
use Symfony\\Component\\Config\\Resource\\FileResource;

class FileResourceTest extends TestCase
{
    protected \$resource;
    protected \$file;
    protected \$time;

    protected function setUp(): void
    {
        \$this->file = sys_get_temp_dir().'/tmp.xml';
        \$this->time = time();
        touch(\$this->file, \$this->time);
        \$this->resource = new FileResource(\$this->file);
    }

    protected function tearDown(): void
    {
        if (!file_exists(\$this->file)) {
            return;
        }

        unlink(\$this->file);
    }

    public function testGetResource()
    {
        \$this->assertSame(realpath(\$this->file), \$this->resource->getResource(), '->getResource() returns the path to the resource');
    }

    public function testGetResourceWithScheme()
    {
        \$resource = new FileResource('file://'.\$this->file);
        \$this->assertSame('file://'.\$this->file, \$resource->getResource(), '->getResource() returns the path to the schemed resource');
    }

    public function testToString()
    {
        \$this->assertSame(realpath(\$this->file), (string) \$this->resource);
    }

    public function testResourceDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessageRegExp('/The file \".*\" does not exist./');
        \$resource = new FileResource('/____foo/foobar'.mt_rand(1, 999999));
    }

    public function testIsFresh()
    {
        \$this->assertTrue(\$this->resource->isFresh(\$this->time), '->isFresh() returns true if the resource has not changed in same second');
        \$this->assertTrue(\$this->resource->isFresh(\$this->time + 10), '->isFresh() returns true if the resource has not changed');
        \$this->assertFalse(\$this->resource->isFresh(\$this->time - 86400), '->isFresh() returns false if the resource has been updated');
    }

    public function testIsFreshForDeletedResources()
    {
        unlink(\$this->file);

        \$this->assertFalse(\$this->resource->isFresh(\$this->time), '->isFresh() returns false if the resource does not exist');
    }

    public function testSerializeUnserialize()
    {
        \$unserialized = unserialize(serialize(\$this->resource));

        \$this->assertSame(realpath(\$this->file), \$this->resource->getResource());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Resource/FileResourceTest.php";
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
use Symfony\\Component\\Config\\Resource\\FileResource;

class FileResourceTest extends TestCase
{
    protected \$resource;
    protected \$file;
    protected \$time;

    protected function setUp(): void
    {
        \$this->file = sys_get_temp_dir().'/tmp.xml';
        \$this->time = time();
        touch(\$this->file, \$this->time);
        \$this->resource = new FileResource(\$this->file);
    }

    protected function tearDown(): void
    {
        if (!file_exists(\$this->file)) {
            return;
        }

        unlink(\$this->file);
    }

    public function testGetResource()
    {
        \$this->assertSame(realpath(\$this->file), \$this->resource->getResource(), '->getResource() returns the path to the resource');
    }

    public function testGetResourceWithScheme()
    {
        \$resource = new FileResource('file://'.\$this->file);
        \$this->assertSame('file://'.\$this->file, \$resource->getResource(), '->getResource() returns the path to the schemed resource');
    }

    public function testToString()
    {
        \$this->assertSame(realpath(\$this->file), (string) \$this->resource);
    }

    public function testResourceDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessageRegExp('/The file \".*\" does not exist./');
        \$resource = new FileResource('/____foo/foobar'.mt_rand(1, 999999));
    }

    public function testIsFresh()
    {
        \$this->assertTrue(\$this->resource->isFresh(\$this->time), '->isFresh() returns true if the resource has not changed in same second');
        \$this->assertTrue(\$this->resource->isFresh(\$this->time + 10), '->isFresh() returns true if the resource has not changed');
        \$this->assertFalse(\$this->resource->isFresh(\$this->time - 86400), '->isFresh() returns false if the resource has been updated');
    }

    public function testIsFreshForDeletedResources()
    {
        unlink(\$this->file);

        \$this->assertFalse(\$this->resource->isFresh(\$this->time), '->isFresh() returns false if the resource does not exist');
    }

    public function testSerializeUnserialize()
    {
        \$unserialized = unserialize(serialize(\$this->resource));

        \$this->assertSame(realpath(\$this->file), \$this->resource->getResource());
    }
}
", "vendor/symfony/config/Tests/Resource/FileResourceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Resource/FileResourceTest.php");
    }
}
