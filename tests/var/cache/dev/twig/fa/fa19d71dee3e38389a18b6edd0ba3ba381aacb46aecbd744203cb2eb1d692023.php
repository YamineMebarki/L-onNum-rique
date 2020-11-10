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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/KeyCache/ArrayKeyCacheAcceptanceTest.php */
class __TwigTemplate_2a6456a5150530be38065c6b1f862c3f821424370f77e9993ee0739feac4d652 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/KeyCache/ArrayKeyCacheAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/KeyCache/ArrayKeyCacheAcceptanceTest.php"));

        // line 1
        echo "<?php

class Swift_KeyCache_ArrayKeyCacheAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cache;
    private \$key1 = 'key1';
    private \$key2 = 'key2';

    protected function setUp()
    {
        \$this->cache = new Swift_KeyCache_ArrayKeyCache(
            new Swift_KeyCache_SimpleKeyCacheInputStream()
            );
    }

    public function testStringDataCanBeSetAndFetched()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeOverwritten()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'foo', 'whatever', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('whatever', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeAppended()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'foo', 'ing', Swift_KeyCache::MODE_APPEND
            );
        \$this->assertEquals('testing', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testHasKeyReturnValue()
    {
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyIsWellPartitioned()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key2, 'foo', 'ing', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$this->cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$this->cache->getString(\$this->key2, 'foo'));
    }

    public function testItemKeyIsWellPartitioned()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'bar', 'ing', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$this->cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$this->cache->getString(\$this->key1, 'bar'));
    }

    public function testByteStreamCanBeImported()
    {
        \$os = new Swift_ByteStream_ArrayByteStream();
        \$os->write('abcdef');

        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('abcdef', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamCanBeAppended()
    {
        \$os1 = new Swift_ByteStream_ArrayByteStream();
        \$os1->write('abcdef');

        \$os2 = new Swift_ByteStream_ArrayByteStream();
        \$os2->write('xyzuvw');

        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os1, Swift_KeyCache::MODE_APPEND
            );
        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os2, Swift_KeyCache::MODE_APPEND
            );

        \$this->assertEquals('abcdefxyzuvw', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamAndStringCanBeAppended()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_APPEND
            );

        \$os = new Swift_ByteStream_ArrayByteStream();
        \$os->write('abcdef');

        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_APPEND
            );
        \$this->assertEquals('testabcdef', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testDataCanBeExportedToByteStream()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );

        \$is = new Swift_ByteStream_ArrayByteStream();

        \$this->cache->exportToByteStream(\$this->key1, 'foo', \$is);

        \$string = '';
        while (false !== \$bytes = \$is->read(8192)) {
            \$string .= \$bytes;
        }

        \$this->assertEquals('test', \$string);
    }

    public function testKeyCanBeCleared()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->cache->clearKey(\$this->key1, 'foo');
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyCanBeCleared()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'bar', 'xyz', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'bar'));
        \$this->cache->clearAll(\$this->key1);
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'bar'));
    }

    public function testKeyCacheInputStream()
    {
        \$is = \$this->cache->getInputByteStream(\$this->key1, 'foo');
        \$is->write('abc');
        \$is->write('xyz');
        \$this->assertEquals('abcxyz', \$this->cache->getString(\$this->key1, 'foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/KeyCache/ArrayKeyCacheAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_KeyCache_ArrayKeyCacheAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cache;
    private \$key1 = 'key1';
    private \$key2 = 'key2';

    protected function setUp()
    {
        \$this->cache = new Swift_KeyCache_ArrayKeyCache(
            new Swift_KeyCache_SimpleKeyCacheInputStream()
            );
    }

    public function testStringDataCanBeSetAndFetched()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeOverwritten()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'foo', 'whatever', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('whatever', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeAppended()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'foo', 'ing', Swift_KeyCache::MODE_APPEND
            );
        \$this->assertEquals('testing', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testHasKeyReturnValue()
    {
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyIsWellPartitioned()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key2, 'foo', 'ing', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$this->cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$this->cache->getString(\$this->key2, 'foo'));
    }

    public function testItemKeyIsWellPartitioned()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'bar', 'ing', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$this->cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$this->cache->getString(\$this->key1, 'bar'));
    }

    public function testByteStreamCanBeImported()
    {
        \$os = new Swift_ByteStream_ArrayByteStream();
        \$os->write('abcdef');

        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('abcdef', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamCanBeAppended()
    {
        \$os1 = new Swift_ByteStream_ArrayByteStream();
        \$os1->write('abcdef');

        \$os2 = new Swift_ByteStream_ArrayByteStream();
        \$os2->write('xyzuvw');

        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os1, Swift_KeyCache::MODE_APPEND
            );
        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os2, Swift_KeyCache::MODE_APPEND
            );

        \$this->assertEquals('abcdefxyzuvw', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamAndStringCanBeAppended()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_APPEND
            );

        \$os = new Swift_ByteStream_ArrayByteStream();
        \$os->write('abcdef');

        \$this->cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_APPEND
            );
        \$this->assertEquals('testabcdef', \$this->cache->getString(\$this->key1, 'foo'));
    }

    public function testDataCanBeExportedToByteStream()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );

        \$is = new Swift_ByteStream_ArrayByteStream();

        \$this->cache->exportToByteStream(\$this->key1, 'foo', \$is);

        \$string = '';
        while (false !== \$bytes = \$is->read(8192)) {
            \$string .= \$bytes;
        }

        \$this->assertEquals('test', \$string);
    }

    public function testKeyCanBeCleared()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->cache->clearKey(\$this->key1, 'foo');
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyCanBeCleared()
    {
        \$this->cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->cache->setString(
            \$this->key1, 'bar', 'xyz', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->assertTrue(\$this->cache->hasKey(\$this->key1, 'bar'));
        \$this->cache->clearAll(\$this->key1);
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'foo'));
        \$this->assertFalse(\$this->cache->hasKey(\$this->key1, 'bar'));
    }

    public function testKeyCacheInputStream()
    {
        \$is = \$this->cache->getInputByteStream(\$this->key1, 'foo');
        \$is->write('abc');
        \$is->write('xyz');
        \$this->assertEquals('abcxyz', \$this->cache->getString(\$this->key1, 'foo'));
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/KeyCache/ArrayKeyCacheAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/KeyCache/ArrayKeyCacheAcceptanceTest.php");
    }
}
