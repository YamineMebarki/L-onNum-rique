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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/SimpleKeyCacheInputStreamTest.php */
class __TwigTemplate_025b0020872141bf34fb8625b1947e4df94180159bdb02a9ecbd90e55e075c2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/SimpleKeyCacheInputStreamTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/SimpleKeyCacheInputStreamTest.php"));

        // line 1
        echo "<?php

class Swift_KeyCache_SimpleKeyCacheInputStreamTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$nsKey = 'ns1';

    public function testStreamWritesToCacheInAppendMode()
    {
        \$cache = \$this->getMockBuilder('Swift_KeyCache')->getMock();
        \$cache->expects(\$this->at(0))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'a', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(1))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'b', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(2))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'c', Swift_KeyCache::MODE_APPEND);

        \$stream = new Swift_KeyCache_SimpleKeyCacheInputStream();
        \$stream->setKeyCache(\$cache);
        \$stream->setNsKey(\$this->nsKey);
        \$stream->setItemKey('foo');

        \$stream->write('a');
        \$stream->write('b');
        \$stream->write('c');
    }

    public function testFlushContentClearsKey()
    {
        \$cache = \$this->getMockBuilder('Swift_KeyCache')->getMock();
        \$cache->expects(\$this->once())
              ->method('clearKey')
              ->with(\$this->nsKey, 'foo');

        \$stream = new Swift_KeyCache_SimpleKeyCacheInputStream();
        \$stream->setKeyCache(\$cache);
        \$stream->setNsKey(\$this->nsKey);
        \$stream->setItemKey('foo');

        \$stream->flushBuffers();
    }

    public function testClonedStreamStillReferencesSameCache()
    {
        \$cache = \$this->getMockBuilder('Swift_KeyCache')->getMock();
        \$cache->expects(\$this->at(0))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'a', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(1))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'b', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(2))
              ->method('setString')
              ->with('test', 'bar', 'x', Swift_KeyCache::MODE_APPEND);

        \$stream = new Swift_KeyCache_SimpleKeyCacheInputStream();
        \$stream->setKeyCache(\$cache);
        \$stream->setNsKey(\$this->nsKey);
        \$stream->setItemKey('foo');

        \$stream->write('a');
        \$stream->write('b');

        \$newStream = clone \$stream;
        \$newStream->setKeyCache(\$cache);
        \$newStream->setNsKey('test');
        \$newStream->setItemKey('bar');

        \$newStream->write('x');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/SimpleKeyCacheInputStreamTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_KeyCache_SimpleKeyCacheInputStreamTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$nsKey = 'ns1';

    public function testStreamWritesToCacheInAppendMode()
    {
        \$cache = \$this->getMockBuilder('Swift_KeyCache')->getMock();
        \$cache->expects(\$this->at(0))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'a', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(1))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'b', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(2))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'c', Swift_KeyCache::MODE_APPEND);

        \$stream = new Swift_KeyCache_SimpleKeyCacheInputStream();
        \$stream->setKeyCache(\$cache);
        \$stream->setNsKey(\$this->nsKey);
        \$stream->setItemKey('foo');

        \$stream->write('a');
        \$stream->write('b');
        \$stream->write('c');
    }

    public function testFlushContentClearsKey()
    {
        \$cache = \$this->getMockBuilder('Swift_KeyCache')->getMock();
        \$cache->expects(\$this->once())
              ->method('clearKey')
              ->with(\$this->nsKey, 'foo');

        \$stream = new Swift_KeyCache_SimpleKeyCacheInputStream();
        \$stream->setKeyCache(\$cache);
        \$stream->setNsKey(\$this->nsKey);
        \$stream->setItemKey('foo');

        \$stream->flushBuffers();
    }

    public function testClonedStreamStillReferencesSameCache()
    {
        \$cache = \$this->getMockBuilder('Swift_KeyCache')->getMock();
        \$cache->expects(\$this->at(0))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'a', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(1))
              ->method('setString')
              ->with(\$this->nsKey, 'foo', 'b', Swift_KeyCache::MODE_APPEND);
        \$cache->expects(\$this->at(2))
              ->method('setString')
              ->with('test', 'bar', 'x', Swift_KeyCache::MODE_APPEND);

        \$stream = new Swift_KeyCache_SimpleKeyCacheInputStream();
        \$stream->setKeyCache(\$cache);
        \$stream->setNsKey(\$this->nsKey);
        \$stream->setItemKey('foo');

        \$stream->write('a');
        \$stream->write('b');

        \$newStream = clone \$stream;
        \$newStream->setKeyCache(\$cache);
        \$newStream->setNsKey('test');
        \$newStream->setItemKey('bar');

        \$newStream->write('x');
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/SimpleKeyCacheInputStreamTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/KeyCache/SimpleKeyCacheInputStreamTest.php");
    }
}
