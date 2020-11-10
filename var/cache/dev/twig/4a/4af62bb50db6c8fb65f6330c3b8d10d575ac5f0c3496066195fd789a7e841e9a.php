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

/* vendor/symfony/intl/Tests/Data/Bundle/Writer/JsonBundleWriterTest.php */
class __TwigTemplate_8a67ad4742039ad6274dcc5d6171a08fc24a7cd4e6ef1a40c374fbc3355dc4dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Writer/JsonBundleWriterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Writer/JsonBundleWriterTest.php"));

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
use Symfony\\Component\\Intl\\Data\\Bundle\\Writer\\JsonBundleWriter;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class JsonBundleWriterTest extends TestCase
{
    /**
     * @var JsonBundleWriter
     */
    private \$writer;

    private \$directory;

    /**
     * @var Filesystem
     */
    private \$filesystem;

    protected function setUp(): void
    {
        \$this->writer = new JsonBundleWriter();
        \$this->directory = sys_get_temp_dir().'/JsonBundleWriterTest/'.mt_rand(1000, 9999);
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
                'Array' => ['foo', 'bar'],
                'Integer' => 5,
                'Boolean' => false,
                'Float' => 1.23,
            ],
            'Entry2' => 'String',
            'Traversable' => new \\ArrayIterator([
                'Foo' => 'Bar',
            ]),
        ]);

        \$this->assertFileEquals(__DIR__.'/Fixtures/en.json', \$this->directory.'/en.json');
    }

    /**
     * @requires extension intl
     */
    public function testWriteResourceBundle()
    {
        \$bundle = new \\ResourceBundle('rb', __DIR__.'/Fixtures', false);

        \$this->writer->write(\$this->directory, 'en', \$bundle);

        \$this->assertFileEquals(__DIR__.'/Fixtures/rb.json', \$this->directory.'/en.json');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Bundle/Writer/JsonBundleWriterTest.php";
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
use Symfony\\Component\\Intl\\Data\\Bundle\\Writer\\JsonBundleWriter;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class JsonBundleWriterTest extends TestCase
{
    /**
     * @var JsonBundleWriter
     */
    private \$writer;

    private \$directory;

    /**
     * @var Filesystem
     */
    private \$filesystem;

    protected function setUp(): void
    {
        \$this->writer = new JsonBundleWriter();
        \$this->directory = sys_get_temp_dir().'/JsonBundleWriterTest/'.mt_rand(1000, 9999);
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
                'Array' => ['foo', 'bar'],
                'Integer' => 5,
                'Boolean' => false,
                'Float' => 1.23,
            ],
            'Entry2' => 'String',
            'Traversable' => new \\ArrayIterator([
                'Foo' => 'Bar',
            ]),
        ]);

        \$this->assertFileEquals(__DIR__.'/Fixtures/en.json', \$this->directory.'/en.json');
    }

    /**
     * @requires extension intl
     */
    public function testWriteResourceBundle()
    {
        \$bundle = new \\ResourceBundle('rb', __DIR__.'/Fixtures', false);

        \$this->writer->write(\$this->directory, 'en', \$bundle);

        \$this->assertFileEquals(__DIR__.'/Fixtures/rb.json', \$this->directory.'/en.json');
    }
}
", "vendor/symfony/intl/Tests/Data/Bundle/Writer/JsonBundleWriterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Bundle/Writer/JsonBundleWriterTest.php");
    }
}
