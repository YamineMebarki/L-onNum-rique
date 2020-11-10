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

/* vendor/symfony/intl/Tests/Data/Bundle/Reader/IntlBundleReaderTest.php */
class __TwigTemplate_9f4ab62fcee868098ca9ebece0876e60356ca0b4ed5edee154084c8ec6450092 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/IntlBundleReaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/IntlBundleReaderTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Bundle\\Reader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\IntlBundleReader;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @requires extension intl
 */
class IntlBundleReaderTest extends TestCase
{
    /**
     * @var IntlBundleReader
     */
    private \$reader;

    protected function setUp(): void
    {
        \$this->reader = new IntlBundleReader();
    }

    public function testReadReturnsArrayAccess()
    {
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'ro');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bar', \$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadFollowsAlias()
    {
        // \"alias\" = \"ro\"
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'alias');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bar', \$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadDoesNotFollowFallback()
    {
        // \"ro_MD\" -> \"ro\"
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'ro_MD');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bam', \$data['Baz']);
        \$this->assertArrayNotHasKey('Foo', \$data);
        \$this->assertNull(\$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadDoesNotFollowFallbackAlias()
    {
        // \"mo\" = \"ro_MD\" -> \"ro\"
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'mo');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bam', \$data['Baz'], 'data from the aliased locale can be accessed');
        \$this->assertArrayNotHasKey('Foo', \$data);
        \$this->assertNull(\$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadFailsIfNonExistingLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/res', 'foo');
    }

    public function testReadFailsIfNonExistingFallbackLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/res', 'ro_AT');
    }

    public function testReadFailsIfNonExistingDirectory()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/foo', 'ro');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Bundle/Reader/IntlBundleReaderTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Bundle\\Reader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\IntlBundleReader;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @requires extension intl
 */
class IntlBundleReaderTest extends TestCase
{
    /**
     * @var IntlBundleReader
     */
    private \$reader;

    protected function setUp(): void
    {
        \$this->reader = new IntlBundleReader();
    }

    public function testReadReturnsArrayAccess()
    {
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'ro');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bar', \$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadFollowsAlias()
    {
        // \"alias\" = \"ro\"
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'alias');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bar', \$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadDoesNotFollowFallback()
    {
        // \"ro_MD\" -> \"ro\"
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'ro_MD');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bam', \$data['Baz']);
        \$this->assertArrayNotHasKey('Foo', \$data);
        \$this->assertNull(\$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadDoesNotFollowFallbackAlias()
    {
        // \"mo\" = \"ro_MD\" -> \"ro\"
        \$data = \$this->reader->read(__DIR__.'/Fixtures/res', 'mo');

        \$this->assertInstanceOf('\\ArrayAccess', \$data);
        \$this->assertSame('Bam', \$data['Baz'], 'data from the aliased locale can be accessed');
        \$this->assertArrayNotHasKey('Foo', \$data);
        \$this->assertNull(\$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadFailsIfNonExistingLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/res', 'foo');
    }

    public function testReadFailsIfNonExistingFallbackLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/res', 'ro_AT');
    }

    public function testReadFailsIfNonExistingDirectory()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/foo', 'ro');
    }
}
", "vendor/symfony/intl/Tests/Data/Bundle/Reader/IntlBundleReaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Bundle/Reader/IntlBundleReaderTest.php");
    }
}
