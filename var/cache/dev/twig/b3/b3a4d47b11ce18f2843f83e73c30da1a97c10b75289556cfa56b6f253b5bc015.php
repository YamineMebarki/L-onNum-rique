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

/* vendor/symfony/intl/Tests/Data/Util/RingBufferTest.php */
class __TwigTemplate_88e69ce2a70a48083a13c69bd5bbd14c1ed0dd204f9de83a52a8802b641b9193 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Util/RingBufferTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Util/RingBufferTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Data\\Util\\RingBuffer;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RingBufferTest extends TestCase
{
    /**
     * @var RingBuffer
     */
    private \$buffer;

    protected function setUp(): void
    {
        \$this->buffer = new RingBuffer(2);
    }

    public function testWriteWithinBuffer()
    {
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';

        \$this->assertArrayHasKey(0, \$this->buffer);
        \$this->assertArrayHasKey('bar', \$this->buffer);
        \$this->assertSame('foo', \$this->buffer[0]);
        \$this->assertSame('baz', \$this->buffer['bar']);
    }

    public function testWritePastBuffer()
    {
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';
        \$this->buffer[2] = 'bam';

        \$this->assertArrayHasKey('bar', \$this->buffer);
        \$this->assertArrayHasKey(2, \$this->buffer);
        \$this->assertSame('baz', \$this->buffer['bar']);
        \$this->assertSame('bam', \$this->buffer[2]);
    }

    public function testReadNonExistingFails()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\OutOfBoundsException');
        \$this->buffer['foo'];
    }

    public function testQueryNonExisting()
    {
        \$this->assertArrayNotHasKey('foo', \$this->buffer);
    }

    public function testUnsetNonExistingSucceeds()
    {
        unset(\$this->buffer['foo']);

        \$this->assertArrayNotHasKey('foo', \$this->buffer);
    }

    public function testReadOverwrittenFails()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\OutOfBoundsException');
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';
        \$this->buffer[2] = 'bam';

        \$this->buffer[0];
    }

    public function testQueryOverwritten()
    {
        \$this->assertArrayNotHasKey(0, \$this->buffer);
    }

    public function testUnsetOverwrittenSucceeds()
    {
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';
        \$this->buffer[2] = 'bam';

        unset(\$this->buffer[0]);

        \$this->assertArrayNotHasKey(0, \$this->buffer);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Util/RingBufferTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Data\\Util\\RingBuffer;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RingBufferTest extends TestCase
{
    /**
     * @var RingBuffer
     */
    private \$buffer;

    protected function setUp(): void
    {
        \$this->buffer = new RingBuffer(2);
    }

    public function testWriteWithinBuffer()
    {
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';

        \$this->assertArrayHasKey(0, \$this->buffer);
        \$this->assertArrayHasKey('bar', \$this->buffer);
        \$this->assertSame('foo', \$this->buffer[0]);
        \$this->assertSame('baz', \$this->buffer['bar']);
    }

    public function testWritePastBuffer()
    {
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';
        \$this->buffer[2] = 'bam';

        \$this->assertArrayHasKey('bar', \$this->buffer);
        \$this->assertArrayHasKey(2, \$this->buffer);
        \$this->assertSame('baz', \$this->buffer['bar']);
        \$this->assertSame('bam', \$this->buffer[2]);
    }

    public function testReadNonExistingFails()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\OutOfBoundsException');
        \$this->buffer['foo'];
    }

    public function testQueryNonExisting()
    {
        \$this->assertArrayNotHasKey('foo', \$this->buffer);
    }

    public function testUnsetNonExistingSucceeds()
    {
        unset(\$this->buffer['foo']);

        \$this->assertArrayNotHasKey('foo', \$this->buffer);
    }

    public function testReadOverwrittenFails()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\OutOfBoundsException');
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';
        \$this->buffer[2] = 'bam';

        \$this->buffer[0];
    }

    public function testQueryOverwritten()
    {
        \$this->assertArrayNotHasKey(0, \$this->buffer);
    }

    public function testUnsetOverwrittenSucceeds()
    {
        \$this->buffer[0] = 'foo';
        \$this->buffer['bar'] = 'baz';
        \$this->buffer[2] = 'bam';

        unset(\$this->buffer[0]);

        \$this->assertArrayNotHasKey(0, \$this->buffer);
    }
}
", "vendor/symfony/intl/Tests/Data/Util/RingBufferTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Util/RingBufferTest.php");
    }
}
