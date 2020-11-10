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

/* vendor/symfony/var-dumper/Tests/Caster/StubCasterTest.php */
class __TwigTemplate_b8b02ca1f76c2ee5b61f6e2038ba1695bf2da3261da4b0080316223bf5344898 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/StubCasterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/StubCasterTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Caster\\ArgsStub;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Component\\VarDumper\\Caster\\LinkStub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;
use Symfony\\Component\\VarDumper\\Tests\\Fixtures\\FooInterface;

class StubCasterTest extends TestCase
{
    use VarDumperTestTrait;

    public function testArgsStubWithDefaults(\$foo = 234, \$bar = 456)
    {
        \$args = [new ArgsStub([123], __FUNCTION__, __CLASS__)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    \$foo: 123
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testArgsStubWithExtraArgs(\$foo = 234)
    {
        \$args = [new ArgsStub([123, 456], __FUNCTION__, __CLASS__)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    \$foo: 123
    ...: {
      456
    }
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testArgsStubNoParamWithExtraArgs()
    {
        \$args = [new ArgsStub([123], __FUNCTION__, __CLASS__)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    123
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testArgsStubWithClosure()
    {
        \$args = [new ArgsStub([123], '{closure}', null)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    123
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testLinkStub()
    {
        \$var = [new LinkStub(__CLASS__, 0, __FILE__)];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dumper->setDisplayOptions(['fileLinkFormat' => '%f:%l']);
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sStubCasterTest.php:0\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"55 characters\">Symfony\\Component\\VarDumper\\Tests\\Caster\\StubCasterTest</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testLinkStubWithNoFileLink()
    {
        \$var = [new LinkStub('example.com', 0, 'http://example.com')];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dumper->setDisplayOptions(['fileLinkFormat' => '%f:%l']);
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"http://example.com\" target=\"_blank\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"11 characters\">example.com</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStub()
    {
        \$var = [new ClassStub('hello', [FooInterface::class, 'foo'])];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true, ['fileLinkFormat' => '%f:%l']);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sFooInterface.php:10\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"39 characters\">hello(?stdClass \$a, stdClass \$b = null)</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStubWithNotExistingClass()
    {
        \$var = [new ClassStub(NotExisting::class)];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<span class=sf-dump-str title=\"Symfony\\Component\\VarDumper\\Tests\\Caster\\NotExisting
52 characters\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-class\">Symfony\\Component\\VarDumper\\Tests\\Caster</span><span class=sf-dump-ellipsis>\\</span>NotExisting</span>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStubWithNotExistingMethod()
    {
        \$var = [new ClassStub('hello', [FooInterface::class, 'missing'])];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true, ['fileLinkFormat' => '%f:%l']);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sFooInterface.php:5\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"5 characters\">hello</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStubWithAnonymousClass()
    {
        \$var = [new ClassStub(\\get_class(new class() extends \\Exception {
        }))];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true, ['fileLinkFormat' => '%f:%l']);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sStubCasterTest.php:195\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"19 characters\">Exception@anonymous</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Caster/StubCasterTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Caster\\ArgsStub;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Component\\VarDumper\\Caster\\LinkStub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;
use Symfony\\Component\\VarDumper\\Tests\\Fixtures\\FooInterface;

class StubCasterTest extends TestCase
{
    use VarDumperTestTrait;

    public function testArgsStubWithDefaults(\$foo = 234, \$bar = 456)
    {
        \$args = [new ArgsStub([123], __FUNCTION__, __CLASS__)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    \$foo: 123
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testArgsStubWithExtraArgs(\$foo = 234)
    {
        \$args = [new ArgsStub([123, 456], __FUNCTION__, __CLASS__)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    \$foo: 123
    ...: {
      456
    }
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testArgsStubNoParamWithExtraArgs()
    {
        \$args = [new ArgsStub([123], __FUNCTION__, __CLASS__)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    123
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testArgsStubWithClosure()
    {
        \$args = [new ArgsStub([123], '{closure}', null)];

        \$expectedDump = <<<'EODUMP'
array:1 [
  0 => {
    123
  }
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$args);
    }

    public function testLinkStub()
    {
        \$var = [new LinkStub(__CLASS__, 0, __FILE__)];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dumper->setDisplayOptions(['fileLinkFormat' => '%f:%l']);
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sStubCasterTest.php:0\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"55 characters\">Symfony\\Component\\VarDumper\\Tests\\Caster\\StubCasterTest</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testLinkStubWithNoFileLink()
    {
        \$var = [new LinkStub('example.com', 0, 'http://example.com')];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dumper->setDisplayOptions(['fileLinkFormat' => '%f:%l']);
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"http://example.com\" target=\"_blank\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"11 characters\">example.com</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStub()
    {
        \$var = [new ClassStub('hello', [FooInterface::class, 'foo'])];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true, ['fileLinkFormat' => '%f:%l']);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sFooInterface.php:10\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"39 characters\">hello(?stdClass \$a, stdClass \$b = null)</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStubWithNotExistingClass()
    {
        \$var = [new ClassStub(NotExisting::class)];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<span class=sf-dump-str title=\"Symfony\\Component\\VarDumper\\Tests\\Caster\\NotExisting
52 characters\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-class\">Symfony\\Component\\VarDumper\\Tests\\Caster</span><span class=sf-dump-ellipsis>\\</span>NotExisting</span>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStubWithNotExistingMethod()
    {
        \$var = [new ClassStub('hello', [FooInterface::class, 'missing'])];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true, ['fileLinkFormat' => '%f:%l']);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sFooInterface.php:5\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"5 characters\">hello</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    public function testClassStubWithAnonymousClass()
    {
        \$var = [new ClassStub(\\get_class(new class() extends \\Exception {
        }))];

        \$cloner = new VarCloner();
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$var), true, ['fileLinkFormat' => '%f:%l']);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>array:1</span> [<samp>
  <span class=sf-dump-index>0</span> => \"<a href=\"%sStubCasterTest.php:195\" rel=\"noopener noreferrer\"><span class=sf-dump-str title=\"19 characters\">Exception@anonymous</span></a>\"
</samp>]
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }
}
", "vendor/symfony/var-dumper/Tests/Caster/StubCasterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Caster/StubCasterTest.php");
    }
}
