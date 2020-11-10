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

/* vendor/symfony/config/Tests/Resource/ReflectionClassResourceTest.php */
class __TwigTemplate_198a33311ec1056a101cfa09fa4d10a82ad801362533489c19e7aaa76d291f82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/ReflectionClassResourceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Resource/ReflectionClassResourceTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Resource;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\ReflectionClassResource;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Handler\\MessageSubscriberInterface;

class ReflectionClassResourceTest extends TestCase
{
    public function testToString()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass('ErrorException'));

        \$this->assertSame('reflection.ErrorException', (string) \$res);
    }

    public function testSerializeUnserialize()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(DummyInterface::class));
        \$ser = unserialize(serialize(\$res));

        \$this->assertTrue(\$res->isFresh(0));
        \$this->assertTrue(\$ser->isFresh(0));

        \$this->assertSame((string) \$res, (string) \$ser);
    }

    public function testIsFresh()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(__CLASS__));
        \$mtime = filemtime(__FILE__);

        \$this->assertTrue(\$res->isFresh(\$mtime), '->isFresh() returns true if the resource has not changed in same second');
        \$this->assertTrue(\$res->isFresh(\$mtime + 10), '->isFresh() returns true if the resource has not changed');
        \$this->assertTrue(\$res->isFresh(\$mtime - 86400), '->isFresh() returns true if the resource has not changed');
    }

    public function testIsFreshForDeletedResources()
    {
        \$now = time();
        \$tmp = sys_get_temp_dir().'/tmp.php';
        file_put_contents(\$tmp, '<?php class ReflectionClassResourceTestClass {}');
        require \$tmp;

        \$res = new ReflectionClassResource(new \\ReflectionClass('ReflectionClassResourceTestClass'));
        \$this->assertTrue(\$res->isFresh(\$now));

        unlink(\$tmp);
        \$this->assertFalse(\$res->isFresh(\$now), '->isFresh() returns false if the resource does not exist');
    }

    /**
     * @dataProvider provideHashedSignature
     */
    public function testHashedSignature(\$changeExpected, \$changedLine, \$changedCode)
    {
        \$code = <<<'EOPHP'
/* 0*/
/* 1*/  class %s extends ErrorException
/* 2*/  {
/* 3*/      const FOO = 123;
/* 4*/
/* 5*/      public \$pub = [];
/* 6*/
/* 7*/      protected \$prot;
/* 8*/
/* 9*/      private \$priv;
/*10*/
/*11*/      public function pub(\$arg = null) {}
/*12*/
/*13*/      protected function prot(\$a = []) {}
/*14*/
/*15*/      private function priv() {}
/*16*/  }
EOPHP;

        static \$expectedSignature, \$generateSignature;

        if (null === \$expectedSignature) {
            eval(sprintf(\$code, \$class = 'Foo'.str_replace('.', '_', uniqid('', true))));
            \$r = new \\ReflectionClass(ReflectionClassResource::class);
            \$generateSignature = \$r->getMethod('generateSignature');
            \$generateSignature->setAccessible(true);
            \$generateSignature = \$generateSignature->getClosure(\$r->newInstanceWithoutConstructor());
            \$expectedSignature = implode(\"\\n\", iterator_to_array(\$generateSignature(new \\ReflectionClass(\$class))));
        }

        \$code = explode(\"\\n\", \$code);
        \$code[\$changedLine] = \$changedCode;
        eval(sprintf(implode(\"\\n\", \$code), \$class = 'Foo'.str_replace('.', '_', uniqid('', true))));
        \$signature = implode(\"\\n\", iterator_to_array(\$generateSignature(new \\ReflectionClass(\$class))));

        if (\$changeExpected) {
            \$this->assertNotSame(\$expectedSignature, \$signature);
        } else {
            \$this->assertSame(\$expectedSignature, \$signature);
        }
    }

    public function provideHashedSignature()
    {
        yield [0, 0, \"// line change\\n\\n\"];
        yield [1, 0, '/** class docblock */'];
        yield [1, 1, 'abstract class %s'];
        yield [1, 1, 'final class %s'];
        yield [1, 1, 'class %s extends Exception'];
        yield [1, 1, 'class %s implements '.DummyInterface::class];
        yield [1, 3, 'const FOO = 456;'];
        yield [1, 3, 'const BAR = 123;'];
        yield [1, 4, '/** pub docblock */'];
        yield [1, 5, 'protected \$pub = [];'];
        yield [1, 5, 'public \$pub = [123];'];
        yield [1, 6, '/** prot docblock */'];
        yield [1, 7, 'private \$prot;'];
        yield [0, 8, '/** priv docblock */'];
        yield [0, 9, 'private \$priv = 123;'];
        yield [1, 10, '/** pub docblock */'];
        yield [1, 11, 'public function pub(...\$arg) {}'];
        yield [1, 11, 'public function pub(\$arg = null): Foo {}'];
        yield [0, 11, \"public function pub(\\\$arg = null) {\\nreturn 123;\\n}\"];
        yield [1, 12, '/** prot docblock */'];
        yield [1, 13, 'protected function prot(\$a = [123]) {}'];
        yield [0, 14, '/** priv docblock */'];
        yield [0, 15, ''];

        if (\\PHP_VERSION_ID >= 70400) {
            // PHP7.4 typed properties without default value are
            // undefined, make sure this doesn't throw an error
            yield [1, 5, 'public array \$pub;'];
            yield [0, 7, 'protected int \$prot;'];
            yield [0, 9, 'private string \$priv;'];
        }
    }

    public function testEventSubscriber()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestEventSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestEventSubscriber::\$subscribedEvents = [123];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestEventSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));
    }

    public function testMessageSubscriber()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestMessageSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestMessageSubscriberConfigHolder::\$handledMessages = ['SomeMessageClass' => []];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestMessageSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestMessageSubscriberConfigHolder::\$handledMessages = ['OtherMessageClass' => []];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestMessageSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));
    }

    public function testServiceSubscriber()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestServiceSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestServiceSubscriber::\$subscribedServices = [123];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestServiceSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));
    }

    public function testIgnoresObjectsInSignature()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestServiceWithStaticProperty::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestServiceWithStaticProperty::\$initializedObject = new TestServiceWithStaticProperty();
        \$this->assertTrue(\$res->isFresh(0));
    }
}

interface DummyInterface
{
}

class TestEventSubscriber implements EventSubscriberInterface
{
    public static \$subscribedEvents = [];

    public static function getSubscribedEvents()
    {
        return self::\$subscribedEvents;
    }
}

class TestMessageSubscriber implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        foreach (TestMessageSubscriberConfigHolder::\$handledMessages as \$key => \$subscribedMessage) {
            yield \$key => \$subscribedMessage;
        }
    }
}
class TestMessageSubscriberConfigHolder
{
    public static \$handledMessages = [];
}

class TestServiceSubscriber implements ServiceSubscriberInterface
{
    public static \$subscribedServices = [];

    public static function getSubscribedServices()
    {
        return self::\$subscribedServices;
    }
}

class TestServiceWithStaticProperty
{
    public static \$initializedObject;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Resource/ReflectionClassResourceTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Resource;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Resource\\ReflectionClassResource;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Handler\\MessageSubscriberInterface;

class ReflectionClassResourceTest extends TestCase
{
    public function testToString()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass('ErrorException'));

        \$this->assertSame('reflection.ErrorException', (string) \$res);
    }

    public function testSerializeUnserialize()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(DummyInterface::class));
        \$ser = unserialize(serialize(\$res));

        \$this->assertTrue(\$res->isFresh(0));
        \$this->assertTrue(\$ser->isFresh(0));

        \$this->assertSame((string) \$res, (string) \$ser);
    }

    public function testIsFresh()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(__CLASS__));
        \$mtime = filemtime(__FILE__);

        \$this->assertTrue(\$res->isFresh(\$mtime), '->isFresh() returns true if the resource has not changed in same second');
        \$this->assertTrue(\$res->isFresh(\$mtime + 10), '->isFresh() returns true if the resource has not changed');
        \$this->assertTrue(\$res->isFresh(\$mtime - 86400), '->isFresh() returns true if the resource has not changed');
    }

    public function testIsFreshForDeletedResources()
    {
        \$now = time();
        \$tmp = sys_get_temp_dir().'/tmp.php';
        file_put_contents(\$tmp, '<?php class ReflectionClassResourceTestClass {}');
        require \$tmp;

        \$res = new ReflectionClassResource(new \\ReflectionClass('ReflectionClassResourceTestClass'));
        \$this->assertTrue(\$res->isFresh(\$now));

        unlink(\$tmp);
        \$this->assertFalse(\$res->isFresh(\$now), '->isFresh() returns false if the resource does not exist');
    }

    /**
     * @dataProvider provideHashedSignature
     */
    public function testHashedSignature(\$changeExpected, \$changedLine, \$changedCode)
    {
        \$code = <<<'EOPHP'
/* 0*/
/* 1*/  class %s extends ErrorException
/* 2*/  {
/* 3*/      const FOO = 123;
/* 4*/
/* 5*/      public \$pub = [];
/* 6*/
/* 7*/      protected \$prot;
/* 8*/
/* 9*/      private \$priv;
/*10*/
/*11*/      public function pub(\$arg = null) {}
/*12*/
/*13*/      protected function prot(\$a = []) {}
/*14*/
/*15*/      private function priv() {}
/*16*/  }
EOPHP;

        static \$expectedSignature, \$generateSignature;

        if (null === \$expectedSignature) {
            eval(sprintf(\$code, \$class = 'Foo'.str_replace('.', '_', uniqid('', true))));
            \$r = new \\ReflectionClass(ReflectionClassResource::class);
            \$generateSignature = \$r->getMethod('generateSignature');
            \$generateSignature->setAccessible(true);
            \$generateSignature = \$generateSignature->getClosure(\$r->newInstanceWithoutConstructor());
            \$expectedSignature = implode(\"\\n\", iterator_to_array(\$generateSignature(new \\ReflectionClass(\$class))));
        }

        \$code = explode(\"\\n\", \$code);
        \$code[\$changedLine] = \$changedCode;
        eval(sprintf(implode(\"\\n\", \$code), \$class = 'Foo'.str_replace('.', '_', uniqid('', true))));
        \$signature = implode(\"\\n\", iterator_to_array(\$generateSignature(new \\ReflectionClass(\$class))));

        if (\$changeExpected) {
            \$this->assertNotSame(\$expectedSignature, \$signature);
        } else {
            \$this->assertSame(\$expectedSignature, \$signature);
        }
    }

    public function provideHashedSignature()
    {
        yield [0, 0, \"// line change\\n\\n\"];
        yield [1, 0, '/** class docblock */'];
        yield [1, 1, 'abstract class %s'];
        yield [1, 1, 'final class %s'];
        yield [1, 1, 'class %s extends Exception'];
        yield [1, 1, 'class %s implements '.DummyInterface::class];
        yield [1, 3, 'const FOO = 456;'];
        yield [1, 3, 'const BAR = 123;'];
        yield [1, 4, '/** pub docblock */'];
        yield [1, 5, 'protected \$pub = [];'];
        yield [1, 5, 'public \$pub = [123];'];
        yield [1, 6, '/** prot docblock */'];
        yield [1, 7, 'private \$prot;'];
        yield [0, 8, '/** priv docblock */'];
        yield [0, 9, 'private \$priv = 123;'];
        yield [1, 10, '/** pub docblock */'];
        yield [1, 11, 'public function pub(...\$arg) {}'];
        yield [1, 11, 'public function pub(\$arg = null): Foo {}'];
        yield [0, 11, \"public function pub(\\\$arg = null) {\\nreturn 123;\\n}\"];
        yield [1, 12, '/** prot docblock */'];
        yield [1, 13, 'protected function prot(\$a = [123]) {}'];
        yield [0, 14, '/** priv docblock */'];
        yield [0, 15, ''];

        if (\\PHP_VERSION_ID >= 70400) {
            // PHP7.4 typed properties without default value are
            // undefined, make sure this doesn't throw an error
            yield [1, 5, 'public array \$pub;'];
            yield [0, 7, 'protected int \$prot;'];
            yield [0, 9, 'private string \$priv;'];
        }
    }

    public function testEventSubscriber()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestEventSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestEventSubscriber::\$subscribedEvents = [123];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestEventSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));
    }

    public function testMessageSubscriber()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestMessageSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestMessageSubscriberConfigHolder::\$handledMessages = ['SomeMessageClass' => []];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestMessageSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestMessageSubscriberConfigHolder::\$handledMessages = ['OtherMessageClass' => []];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestMessageSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));
    }

    public function testServiceSubscriber()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestServiceSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestServiceSubscriber::\$subscribedServices = [123];
        \$this->assertFalse(\$res->isFresh(0));

        \$res = new ReflectionClassResource(new \\ReflectionClass(TestServiceSubscriber::class));
        \$this->assertTrue(\$res->isFresh(0));
    }

    public function testIgnoresObjectsInSignature()
    {
        \$res = new ReflectionClassResource(new \\ReflectionClass(TestServiceWithStaticProperty::class));
        \$this->assertTrue(\$res->isFresh(0));

        TestServiceWithStaticProperty::\$initializedObject = new TestServiceWithStaticProperty();
        \$this->assertTrue(\$res->isFresh(0));
    }
}

interface DummyInterface
{
}

class TestEventSubscriber implements EventSubscriberInterface
{
    public static \$subscribedEvents = [];

    public static function getSubscribedEvents()
    {
        return self::\$subscribedEvents;
    }
}

class TestMessageSubscriber implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        foreach (TestMessageSubscriberConfigHolder::\$handledMessages as \$key => \$subscribedMessage) {
            yield \$key => \$subscribedMessage;
        }
    }
}
class TestMessageSubscriberConfigHolder
{
    public static \$handledMessages = [];
}

class TestServiceSubscriber implements ServiceSubscriberInterface
{
    public static \$subscribedServices = [];

    public static function getSubscribedServices()
    {
        return self::\$subscribedServices;
    }
}

class TestServiceWithStaticProperty
{
    public static \$initializedObject;
}
", "vendor/symfony/config/Tests/Resource/ReflectionClassResourceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Resource/ReflectionClassResourceTest.php");
    }
}
