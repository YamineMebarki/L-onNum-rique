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

/* vendor/symfony/intl/Tests/Data/Bundle/Writer/TextBundleWriterTest.php */
class __TwigTemplate_8448e0f24936842d60c76eb8474adb0c07f5ef94e5dd9169ab77cf95c50d8cad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Writer/TextBundleWriterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Writer/TextBundleWriterTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Bundle\\Writer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Data\\Bundle\\Writer\\TextBundleWriter;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see http://source.icu-project.org/repos/icu/icuhtml/trunk/design/bnf_rb.txt
 */
class TextBundleWriterTest extends TestCase
{
    /**
     * @var TextBundleWriter
     */
    private \$writer;

    private \$directory;

    /**
     * @var Filesystem
     */
    private \$filesystem;

    protected function setUp(): void
    {
        \$this->writer = new TextBundleWriter();
        \$this->directory = sys_get_temp_dir().'/TextBundleWriterTest/'.mt_rand(1000, 9999);
        \$this->filesystem = new Filesystem();

        \$this->filesystem->mkdir(\$this->directory);
    }

    protected function tearDown(): void
    {
        \$this->filesystem->remove(\$this->directory);
    }

    public function testWrite()
    {
        \$this->writer->write(\$this->directory, 'en', [
            'Entry1' => [
                'Array' => ['foo', 'bar', ['Key' => 'value']],
                'Integer' => 5,
                'IntVector' => [0, 1, 2, 3],
                'NotAnIntVector' => [0 => 0, 2 => 1, 1 => 2, 3 => 3],
                'IntVectorWithStringKeys' => ['a' => 0, 'b' => 1, 'c' => 2],
                'TableWithIntKeys' => [0 => 0, 1 => 1, 3 => 3],
                'FalseBoolean' => false,
                'TrueBoolean' => true,
                'Null' => null,
                'Float' => 1.23,
            ],
            'Entry2' => 'String',
        ]);

        \$this->assertFileEquals(__DIR__.'/Fixtures/en.txt', \$this->directory.'/en.txt');
    }

    public function testWriteTraversable()
    {
        \$this->writer->write(\$this->directory, 'en', new \\ArrayIterator([
            'Entry1' => new \\ArrayIterator([
                'Array' => ['foo', 'bar', ['Key' => 'value']],
                'Integer' => 5,
                'IntVector' => [0, 1, 2, 3],
                'NotAnIntVector' => [0 => 0, 2 => 1, 1 => 2, 3 => 3],
                'IntVectorWithStringKeys' => ['a' => 0, 'b' => 1, 'c' => 2],
                'TableWithIntKeys' => [0 => 0, 1 => 1, 3 => 3],
                'FalseBoolean' => false,
                'TrueBoolean' => true,
                'Null' => null,
                'Float' => 1.23,
            ]),
            'Entry2' => 'String',
        ]));

        \$this->assertFileEquals(__DIR__.'/Fixtures/en.txt', \$this->directory.'/en.txt');
    }

    public function testWriteNoFallback()
    {
        \$data = [
            'Entry' => 'Value',
        ];

        \$this->writer->write(\$this->directory, 'en_nofallback', \$data, \$fallback = false);

        \$this->assertFileEquals(__DIR__.'/Fixtures/en_nofallback.txt', \$this->directory.'/en_nofallback.txt');
    }

    public function testEscapeKeysIfNecessary()
    {
        \$this->writer->write(\$this->directory, 'escaped', [
            // Keys with colons must be escaped, otherwise the part after the
            // colon is interpreted as resource type
            'EntryWith:Colon' => 'Value',
            // Keys with spaces must be escaped
            'Entry With Spaces' => 'Value',
        ]);

        \$this->assertFileEquals(__DIR__.'/Fixtures/escaped.txt', \$this->directory.'/escaped.txt');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Bundle/Writer/TextBundleWriterTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Bundle\\Writer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Data\\Bundle\\Writer\\TextBundleWriter;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see http://source.icu-project.org/repos/icu/icuhtml/trunk/design/bnf_rb.txt
 */
class TextBundleWriterTest extends TestCase
{
    /**
     * @var TextBundleWriter
     */
    private \$writer;

    private \$directory;

    /**
     * @var Filesystem
     */
    private \$filesystem;

    protected function setUp(): void
    {
        \$this->writer = new TextBundleWriter();
        \$this->directory = sys_get_temp_dir().'/TextBundleWriterTest/'.mt_rand(1000, 9999);
        \$this->filesystem = new Filesystem();

        \$this->filesystem->mkdir(\$this->directory);
    }

    protected function tearDown(): void
    {
        \$this->filesystem->remove(\$this->directory);
    }

    public function testWrite()
    {
        \$this->writer->write(\$this->directory, 'en', [
            'Entry1' => [
                'Array' => ['foo', 'bar', ['Key' => 'value']],
                'Integer' => 5,
                'IntVector' => [0, 1, 2, 3],
                'NotAnIntVector' => [0 => 0, 2 => 1, 1 => 2, 3 => 3],
                'IntVectorWithStringKeys' => ['a' => 0, 'b' => 1, 'c' => 2],
                'TableWithIntKeys' => [0 => 0, 1 => 1, 3 => 3],
                'FalseBoolean' => false,
                'TrueBoolean' => true,
                'Null' => null,
                'Float' => 1.23,
            ],
            'Entry2' => 'String',
        ]);

        \$this->assertFileEquals(__DIR__.'/Fixtures/en.txt', \$this->directory.'/en.txt');
    }

    public function testWriteTraversable()
    {
        \$this->writer->write(\$this->directory, 'en', new \\ArrayIterator([
            'Entry1' => new \\ArrayIterator([
                'Array' => ['foo', 'bar', ['Key' => 'value']],
                'Integer' => 5,
                'IntVector' => [0, 1, 2, 3],
                'NotAnIntVector' => [0 => 0, 2 => 1, 1 => 2, 3 => 3],
                'IntVectorWithStringKeys' => ['a' => 0, 'b' => 1, 'c' => 2],
                'TableWithIntKeys' => [0 => 0, 1 => 1, 3 => 3],
                'FalseBoolean' => false,
                'TrueBoolean' => true,
                'Null' => null,
                'Float' => 1.23,
            ]),
            'Entry2' => 'String',
        ]));

        \$this->assertFileEquals(__DIR__.'/Fixtures/en.txt', \$this->directory.'/en.txt');
    }

    public function testWriteNoFallback()
    {
        \$data = [
            'Entry' => 'Value',
        ];

        \$this->writer->write(\$this->directory, 'en_nofallback', \$data, \$fallback = false);

        \$this->assertFileEquals(__DIR__.'/Fixtures/en_nofallback.txt', \$this->directory.'/en_nofallback.txt');
    }

    public function testEscapeKeysIfNecessary()
    {
        \$this->writer->write(\$this->directory, 'escaped', [
            // Keys with colons must be escaped, otherwise the part after the
            // colon is interpreted as resource type
            'EntryWith:Colon' => 'Value',
            // Keys with spaces must be escaped
            'Entry With Spaces' => 'Value',
        ]);

        \$this->assertFileEquals(__DIR__.'/Fixtures/escaped.txt', \$this->directory.'/escaped.txt');
    }
}
", "vendor/symfony/intl/Tests/Data/Bundle/Writer/TextBundleWriterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Bundle/Writer/TextBundleWriterTest.php");
    }
}
