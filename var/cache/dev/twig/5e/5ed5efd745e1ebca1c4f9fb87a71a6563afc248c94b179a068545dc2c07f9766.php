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

/* vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataTest.php */
class __TwigTemplate_1d2a0406bf473a3f87f6cfa11c6c38d1708c54ec510e80b8f99c75274fd7c984 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\ControllerMetadata;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

class ArgumentMetadataTest extends TestCase
{
    public function testWithBcLayerWithDefault()
    {
        \$argument = new ArgumentMetadata('foo', 'string', false, true, 'default value');

        \$this->assertFalse(\$argument->isNullable());
    }

    public function testDefaultValueAvailable()
    {
        \$argument = new ArgumentMetadata('foo', 'string', false, true, 'default value', true);

        \$this->assertTrue(\$argument->isNullable());
        \$this->assertTrue(\$argument->hasDefaultValue());
        \$this->assertSame('default value', \$argument->getDefaultValue());
    }

    public function testDefaultValueUnavailable()
    {
        \$this->expectException('LogicException');
        \$argument = new ArgumentMetadata('foo', 'string', false, false, null, false);

        \$this->assertFalse(\$argument->isNullable());
        \$this->assertFalse(\$argument->hasDefaultValue());
        \$argument->getDefaultValue();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\ControllerMetadata;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

class ArgumentMetadataTest extends TestCase
{
    public function testWithBcLayerWithDefault()
    {
        \$argument = new ArgumentMetadata('foo', 'string', false, true, 'default value');

        \$this->assertFalse(\$argument->isNullable());
    }

    public function testDefaultValueAvailable()
    {
        \$argument = new ArgumentMetadata('foo', 'string', false, true, 'default value', true);

        \$this->assertTrue(\$argument->isNullable());
        \$this->assertTrue(\$argument->hasDefaultValue());
        \$this->assertSame('default value', \$argument->getDefaultValue());
    }

    public function testDefaultValueUnavailable()
    {
        \$this->expectException('LogicException');
        \$argument = new ArgumentMetadata('foo', 'string', false, false, null, false);

        \$this->assertFalse(\$argument->isNullable());
        \$this->assertFalse(\$argument->hasDefaultValue());
        \$argument->getDefaultValue();
    }
}
", "vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/ControllerMetadata/ArgumentMetadataTest.php");
    }
}
