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

/* vendor/symfony/intl/Tests/Data/Bundle/Reader/JsonBundleReaderTest.php */
class __TwigTemplate_2aca9f0e9cec36893e760cd36506b4b858cfed6dcecf998a05c87bdcf1b2976a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/JsonBundleReaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/JsonBundleReaderTest.php"));

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
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\JsonBundleReader;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class JsonBundleReaderTest extends TestCase
{
    /**
     * @var JsonBundleReader
     */
    private \$reader;

    protected function setUp(): void
    {
        \$this->reader = new JsonBundleReader();
    }

    public function testReadReturnsArray()
    {
        \$data = \$this->reader->read(__DIR__.'/Fixtures/json', 'en');

        \$this->assertIsArray(\$data);
        \$this->assertSame('Bar', \$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadFailsIfNonExistingLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/json', 'foo');
    }

    public function testReadFailsIfNonExistingDirectory()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/foo', 'en');
    }

    public function testReadFailsIfNotAFile()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/Fixtures/NotAFile', 'en');
    }

    public function testReadFailsIfInvalidJson()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/Fixtures/json', 'en_Invalid');
    }

    public function testReaderDoesNotBreakOutOfGivenPath()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/json', '../invalid_directory/en');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Bundle/Reader/JsonBundleReaderTest.php";
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
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\JsonBundleReader;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class JsonBundleReaderTest extends TestCase
{
    /**
     * @var JsonBundleReader
     */
    private \$reader;

    protected function setUp(): void
    {
        \$this->reader = new JsonBundleReader();
    }

    public function testReadReturnsArray()
    {
        \$data = \$this->reader->read(__DIR__.'/Fixtures/json', 'en');

        \$this->assertIsArray(\$data);
        \$this->assertSame('Bar', \$data['Foo']);
        \$this->assertArrayNotHasKey('ExistsNot', \$data);
    }

    public function testReadFailsIfNonExistingLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/json', 'foo');
    }

    public function testReadFailsIfNonExistingDirectory()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/foo', 'en');
    }

    public function testReadFailsIfNotAFile()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/Fixtures/NotAFile', 'en');
    }

    public function testReadFailsIfInvalidJson()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\RuntimeException');
        \$this->reader->read(__DIR__.'/Fixtures/json', 'en_Invalid');
    }

    public function testReaderDoesNotBreakOutOfGivenPath()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException');
        \$this->reader->read(__DIR__.'/Fixtures/json', '../invalid_directory/en');
    }
}
", "vendor/symfony/intl/Tests/Data/Bundle/Reader/JsonBundleReaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Bundle/Reader/JsonBundleReaderTest.php");
    }
}
