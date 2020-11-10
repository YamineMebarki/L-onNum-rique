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

/* vendor/symfony/mime/Tests/CharacterStreamTest.php */
class __TwigTemplate_3e52ef529934517349c077ef2cf587002ce96dfef87db174f8567e87d04567aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/CharacterStreamTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/CharacterStreamTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\CharacterStream;

class CharacterStreamTest extends TestCase
{
    public function testReadCharactersAreInTact()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
        ));
        \$this->assertSame(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD0, 0xB6, 0xD0, 0xBE), \$stream->read(2));
        \$this->assertSame(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B), \$stream->read(3));
        \$this->assertSame(pack('C*', 0xD1, 0x85), \$stream->read(1));
        \$this->assertNull(\$stream->read(1));
    }

    public function testCharactersCanBeReadAsByteArrays()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
        ));
        \$this->assertEquals([0xD0, 0x94], \$stream->readBytes(1));
        \$this->assertEquals([0xD0, 0xB6, 0xD0, 0xBE], \$stream->readBytes(2));
        \$this->assertEquals([0xD0, 0xBB], \$stream->readBytes(1));
        \$this->assertEquals([0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B], \$stream->readBytes(3));
        \$this->assertEquals([0xD1, 0x85], \$stream->readBytes(1));
        \$this->assertNull(\$stream->readBytes(1));
    }

    public function testRequestingLargeCharCountPastEndOfStream()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$this->assertSame(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE), \$stream->read(100));
        \$this->assertNull(\$stream->read(1));
    }

    public function testRequestingByteArrayCountPastEndOfStream()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$this->assertEquals([0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE], \$stream->readBytes(100));
        \$this->assertNull(\$stream->readBytes(1));
    }

    public function testPointerOffsetCanBeSet()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$this->assertSame(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$stream->setPointer(0);
        \$this->assertSame(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$stream->setPointer(2);
        \$this->assertSame(pack('C*', 0xD0, 0xBE), \$stream->read(1));
    }

    public function testAlgorithmWithFixedWidthCharsets()
    {
        \$stream = new CharacterStream(pack('C*', 0xD1, 0x8D, 0xD0, 0xBB, 0xD0, 0xB0));
        \$this->assertSame(pack('C*', 0xD1, 0x8D), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD0, 0xB0), \$stream->read(1));
        \$this->assertNull(\$stream->read(1));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/CharacterStreamTest.php";
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

namespace Symfony\\Component\\Mime\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\CharacterStream;

class CharacterStreamTest extends TestCase
{
    public function testReadCharactersAreInTact()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
        ));
        \$this->assertSame(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD0, 0xB6, 0xD0, 0xBE), \$stream->read(2));
        \$this->assertSame(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B), \$stream->read(3));
        \$this->assertSame(pack('C*', 0xD1, 0x85), \$stream->read(1));
        \$this->assertNull(\$stream->read(1));
    }

    public function testCharactersCanBeReadAsByteArrays()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$stream->write(pack('C*',
            0xD0, 0xBB,
            0xD1, 0x8E,
            0xD0, 0xB1,
            0xD1, 0x8B,
            0xD1, 0x85
        ));
        \$this->assertEquals([0xD0, 0x94], \$stream->readBytes(1));
        \$this->assertEquals([0xD0, 0xB6, 0xD0, 0xBE], \$stream->readBytes(2));
        \$this->assertEquals([0xD0, 0xBB], \$stream->readBytes(1));
        \$this->assertEquals([0xD1, 0x8E, 0xD0, 0xB1, 0xD1, 0x8B], \$stream->readBytes(3));
        \$this->assertEquals([0xD1, 0x85], \$stream->readBytes(1));
        \$this->assertNull(\$stream->readBytes(1));
    }

    public function testRequestingLargeCharCountPastEndOfStream()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$this->assertSame(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE), \$stream->read(100));
        \$this->assertNull(\$stream->read(1));
    }

    public function testRequestingByteArrayCountPastEndOfStream()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$this->assertEquals([0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE], \$stream->readBytes(100));
        \$this->assertNull(\$stream->readBytes(1));
    }

    public function testPointerOffsetCanBeSet()
    {
        \$stream = new CharacterStream(pack('C*', 0xD0, 0x94, 0xD0, 0xB6, 0xD0, 0xBE));
        \$this->assertSame(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$stream->setPointer(0);
        \$this->assertSame(pack('C*', 0xD0, 0x94), \$stream->read(1));
        \$stream->setPointer(2);
        \$this->assertSame(pack('C*', 0xD0, 0xBE), \$stream->read(1));
    }

    public function testAlgorithmWithFixedWidthCharsets()
    {
        \$stream = new CharacterStream(pack('C*', 0xD1, 0x8D, 0xD0, 0xBB, 0xD0, 0xB0));
        \$this->assertSame(pack('C*', 0xD1, 0x8D), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD0, 0xBB), \$stream->read(1));
        \$this->assertSame(pack('C*', 0xD0, 0xB0), \$stream->read(1));
        \$this->assertNull(\$stream->read(1));
    }
}
", "vendor/symfony/mime/Tests/CharacterStreamTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/CharacterStreamTest.php");
    }
}
