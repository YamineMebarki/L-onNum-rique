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

/* vendor/symfony/config/Tests/Resource/FileExistenceResourceTest.php */
class __TwigTemplate_e1f539d30b1fa792f7c504ebd8c2cd2abb096390e59c02a05239e28987c6073c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/FileExistenceResourceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/FileExistenceResourceTest.php"));

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
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;

class FileExistenceResourceTest extends TestCase
{
    protected \$resource;
    protected \$file;
    protected \$time;

    protected function setUp(): void
    {
        \$this->file = realpath(sys_get_temp_dir()).'/tmp.xml';
        \$this->time = time();
        \$this->resource = new FileExistenceResource(\$this->file);
    }

    protected function tearDown(): void
    {
        if (file_exists(\$this->file)) {
            unlink(\$this->file);
        }
    }

    public function testToString()
    {
        \$this->assertSame(\$this->file, (string) \$this->resource);
    }

    public function testGetResource()
    {
        \$this->assertSame(\$this->file, \$this->resource->getResource(), '->getResource() returns the path to the resource');
    }

    public function testIsFreshWithExistingResource()
    {
        touch(\$this->file, \$this->time);
        \$serialized = serialize(new FileExistenceResource(\$this->file));

        \$resource = unserialize(\$serialized);
        \$this->assertTrue(\$resource->isFresh(\$this->time), '->isFresh() returns true if the resource is still present');

        unlink(\$this->file);
        \$resource = unserialize(\$serialized);
        \$this->assertFalse(\$resource->isFresh(\$this->time), '->isFresh() returns false if the resource has been deleted');
    }

    public function testIsFreshWithAbsentResource()
    {
        \$serialized = serialize(new FileExistenceResource(\$this->file));

        \$resource = unserialize(\$serialized);
        \$this->assertTrue(\$resource->isFresh(\$this->time), '->isFresh() returns true if the resource is still absent');

        touch(\$this->file, \$this->time);
        \$resource = unserialize(\$serialized);
        \$this->assertFalse(\$resource->isFresh(\$this->time), '->isFresh() returns false if the resource has been created');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Resource/FileExistenceResourceTest.php";
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
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;

class FileExistenceResourceTest extends TestCase
{
    protected \$resource;
    protected \$file;
    protected \$time;

    protected function setUp(): void
    {
        \$this->file = realpath(sys_get_temp_dir()).'/tmp.xml';
        \$this->time = time();
        \$this->resource = new FileExistenceResource(\$this->file);
    }

    protected function tearDown(): void
    {
        if (file_exists(\$this->file)) {
            unlink(\$this->file);
        }
    }

    public function testToString()
    {
        \$this->assertSame(\$this->file, (string) \$this->resource);
    }

    public function testGetResource()
    {
        \$this->assertSame(\$this->file, \$this->resource->getResource(), '->getResource() returns the path to the resource');
    }

    public function testIsFreshWithExistingResource()
    {
        touch(\$this->file, \$this->time);
        \$serialized = serialize(new FileExistenceResource(\$this->file));

        \$resource = unserialize(\$serialized);
        \$this->assertTrue(\$resource->isFresh(\$this->time), '->isFresh() returns true if the resource is still present');

        unlink(\$this->file);
        \$resource = unserialize(\$serialized);
        \$this->assertFalse(\$resource->isFresh(\$this->time), '->isFresh() returns false if the resource has been deleted');
    }

    public function testIsFreshWithAbsentResource()
    {
        \$serialized = serialize(new FileExistenceResource(\$this->file));

        \$resource = unserialize(\$serialized);
        \$this->assertTrue(\$resource->isFresh(\$this->time), '->isFresh() returns true if the resource is still absent');

        touch(\$this->file, \$this->time);
        \$resource = unserialize(\$serialized);
        \$this->assertFalse(\$resource->isFresh(\$this->time), '->isFresh() returns false if the resource has been created');
    }
}
", "vendor/symfony/config/Tests/Resource/FileExistenceResourceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Resource/FileExistenceResourceTest.php");
    }
}
