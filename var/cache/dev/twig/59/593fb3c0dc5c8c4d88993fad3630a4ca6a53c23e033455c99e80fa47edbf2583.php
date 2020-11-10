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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/ArrayKeyCacheTest.php */
class __TwigTemplate_037e44ac7afde4d57e808be3b1fef41d6ab43aaca0842bc77f33959c2ce21324 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/ArrayKeyCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/ArrayKeyCacheTest.php"));

        // line 1
        echo "<?php

class Swift_KeyCache_ArrayKeyCacheTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$key1 = 'key1';
    private \$key2 = 'key2';

    public function testStringDataCanBeSetAndFetched()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeOverwritten()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'foo', 'whatever', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertEquals('whatever', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeAppended()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'foo', 'ing', Swift_KeyCache::MODE_APPEND
            );

        \$this->assertEquals('testing', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testHasKeyReturnValue()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyIsWellPartitioned()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key2, 'foo', 'ing', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertEquals('test', \$cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$cache->getString(\$this->key2, 'foo'));
    }

    public function testItemKeyIsWellPartitioned()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'bar', 'ing', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertEquals('test', \$cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$cache->getString(\$this->key1, 'bar'));
    }

    public function testByteStreamCanBeImported()
    {
        \$os = \$this->createOutputStream();
        \$os->expects(\$this->at(0))
           ->method('read')
           ->will(\$this->returnValue('abc'));
        \$os->expects(\$this->at(1))
           ->method('read')
           ->will(\$this->returnValue('def'));
        \$os->expects(\$this->at(2))
           ->method('read')
           ->will(\$this->returnValue(false));

        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('abcdef', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamCanBeAppended()
    {
        \$os1 = \$this->createOutputStream();
        \$os1->expects(\$this->at(0))
            ->method('read')
            ->will(\$this->returnValue('abc'));
        \$os1->expects(\$this->at(1))
            ->method('read')
            ->will(\$this->returnValue('def'));
        \$os1->expects(\$this->at(2))
            ->method('read')
            ->will(\$this->returnValue(false));

        \$os2 = \$this->createOutputStream();
        \$os2->expects(\$this->at(0))
            ->method('read')
            ->will(\$this->returnValue('xyz'));
        \$os2->expects(\$this->at(1))
            ->method('read')
            ->will(\$this->returnValue('uvw'));
        \$os2->expects(\$this->at(2))
            ->method('read')
            ->will(\$this->returnValue(false));

        \$is = \$this->createKeyCacheInputStream(true);

        \$cache = \$this->createCache(\$is);

        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os1, Swift_KeyCache::MODE_APPEND
            );
        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os2, Swift_KeyCache::MODE_APPEND
            );

        \$this->assertEquals('abcdefxyzuvw', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamAndStringCanBeAppended()
    {
        \$os = \$this->createOutputStream();
        \$os->expects(\$this->at(0))
           ->method('read')
           ->will(\$this->returnValue('abc'));
        \$os->expects(\$this->at(1))
           ->method('read')
           ->will(\$this->returnValue('def'));
        \$os->expects(\$this->at(2))
           ->method('read')
           ->will(\$this->returnValue(false));

        \$is = \$this->createKeyCacheInputStream(true);

        \$cache = \$this->createCache(\$is);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_APPEND
            );
        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_APPEND
            );
        \$this->assertEquals('testabcdef', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testDataCanBeExportedToByteStream()
    {
        //See acceptance test for more detail
        \$is = \$this->createInputStream();
        \$is->expects(\$this->atLeastOnce())
           ->method('write');

        \$kcis = \$this->createKeyCacheInputStream(true);

        \$cache = \$this->createCache(\$kcis);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );

        \$cache->exportToByteStream(\$this->key1, 'foo', \$is);
    }

    public function testKeyCanBeCleared()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'foo'));
        \$cache->clearKey(\$this->key1, 'foo');
        \$this->assertFalse(\$cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyCanBeCleared()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'bar', 'xyz', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'foo'));
        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'bar'));
        \$cache->clearAll(\$this->key1);
        \$this->assertFalse(\$cache->hasKey(\$this->key1, 'foo'));
        \$this->assertFalse(\$cache->hasKey(\$this->key1, 'bar'));
    }

    private function createCache(\$is)
    {
        return new Swift_KeyCache_ArrayKeyCache(\$is);
    }

    private function createKeyCacheInputStream()
    {
        return \$this->getMockBuilder('Swift_KeyCache_KeyCacheInputStream')->getMock();
    }

    private function createOutputStream()
    {
        return \$this->getMockBuilder('Swift_OutputByteStream')->getMock();
    }

    private function createInputStream()
    {
        return \$this->getMockBuilder('Swift_InputByteStream')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/ArrayKeyCacheTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_KeyCache_ArrayKeyCacheTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$key1 = 'key1';
    private \$key2 = 'key2';

    public function testStringDataCanBeSetAndFetched()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('test', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeOverwritten()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'foo', 'whatever', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertEquals('whatever', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testStringDataCanBeAppended()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'foo', 'ing', Swift_KeyCache::MODE_APPEND
            );

        \$this->assertEquals('testing', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testHasKeyReturnValue()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyIsWellPartitioned()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key2, 'foo', 'ing', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertEquals('test', \$cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$cache->getString(\$this->key2, 'foo'));
    }

    public function testItemKeyIsWellPartitioned()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'bar', 'ing', Swift_KeyCache::MODE_WRITE
            );

        \$this->assertEquals('test', \$cache->getString(\$this->key1, 'foo'));
        \$this->assertEquals('ing', \$cache->getString(\$this->key1, 'bar'));
    }

    public function testByteStreamCanBeImported()
    {
        \$os = \$this->createOutputStream();
        \$os->expects(\$this->at(0))
           ->method('read')
           ->will(\$this->returnValue('abc'));
        \$os->expects(\$this->at(1))
           ->method('read')
           ->will(\$this->returnValue('def'));
        \$os->expects(\$this->at(2))
           ->method('read')
           ->will(\$this->returnValue(false));

        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);
        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_WRITE
            );
        \$this->assertEquals('abcdef', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamCanBeAppended()
    {
        \$os1 = \$this->createOutputStream();
        \$os1->expects(\$this->at(0))
            ->method('read')
            ->will(\$this->returnValue('abc'));
        \$os1->expects(\$this->at(1))
            ->method('read')
            ->will(\$this->returnValue('def'));
        \$os1->expects(\$this->at(2))
            ->method('read')
            ->will(\$this->returnValue(false));

        \$os2 = \$this->createOutputStream();
        \$os2->expects(\$this->at(0))
            ->method('read')
            ->will(\$this->returnValue('xyz'));
        \$os2->expects(\$this->at(1))
            ->method('read')
            ->will(\$this->returnValue('uvw'));
        \$os2->expects(\$this->at(2))
            ->method('read')
            ->will(\$this->returnValue(false));

        \$is = \$this->createKeyCacheInputStream(true);

        \$cache = \$this->createCache(\$is);

        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os1, Swift_KeyCache::MODE_APPEND
            );
        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os2, Swift_KeyCache::MODE_APPEND
            );

        \$this->assertEquals('abcdefxyzuvw', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testByteStreamAndStringCanBeAppended()
    {
        \$os = \$this->createOutputStream();
        \$os->expects(\$this->at(0))
           ->method('read')
           ->will(\$this->returnValue('abc'));
        \$os->expects(\$this->at(1))
           ->method('read')
           ->will(\$this->returnValue('def'));
        \$os->expects(\$this->at(2))
           ->method('read')
           ->will(\$this->returnValue(false));

        \$is = \$this->createKeyCacheInputStream(true);

        \$cache = \$this->createCache(\$is);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_APPEND
            );
        \$cache->importFromByteStream(
            \$this->key1, 'foo', \$os, Swift_KeyCache::MODE_APPEND
            );
        \$this->assertEquals('testabcdef', \$cache->getString(\$this->key1, 'foo'));
    }

    public function testDataCanBeExportedToByteStream()
    {
        //See acceptance test for more detail
        \$is = \$this->createInputStream();
        \$is->expects(\$this->atLeastOnce())
           ->method('write');

        \$kcis = \$this->createKeyCacheInputStream(true);

        \$cache = \$this->createCache(\$kcis);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );

        \$cache->exportToByteStream(\$this->key1, 'foo', \$is);
    }

    public function testKeyCanBeCleared()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'foo'));
        \$cache->clearKey(\$this->key1, 'foo');
        \$this->assertFalse(\$cache->hasKey(\$this->key1, 'foo'));
    }

    public function testNsKeyCanBeCleared()
    {
        \$is = \$this->createKeyCacheInputStream();
        \$cache = \$this->createCache(\$is);

        \$cache->setString(
            \$this->key1, 'foo', 'test', Swift_KeyCache::MODE_WRITE
            );
        \$cache->setString(
            \$this->key1, 'bar', 'xyz', Swift_KeyCache::MODE_WRITE
            );
        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'foo'));
        \$this->assertTrue(\$cache->hasKey(\$this->key1, 'bar'));
        \$cache->clearAll(\$this->key1);
        \$this->assertFalse(\$cache->hasKey(\$this->key1, 'foo'));
        \$this->assertFalse(\$cache->hasKey(\$this->key1, 'bar'));
    }

    private function createCache(\$is)
    {
        return new Swift_KeyCache_ArrayKeyCache(\$is);
    }

    private function createKeyCacheInputStream()
    {
        return \$this->getMockBuilder('Swift_KeyCache_KeyCacheInputStream')->getMock();
    }

    private function createOutputStream()
    {
        return \$this->getMockBuilder('Swift_OutputByteStream')->getMock();
    }

    private function createInputStream()
    {
        return \$this->getMockBuilder('Swift_InputByteStream')->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/ArrayKeyCacheTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/ArrayKeyCacheTest.php");
    }
}
