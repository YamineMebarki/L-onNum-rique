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

/* vendor/symfony/var-dumper/Tests/Caster/ExceptionCasterTest.php */
class __TwigTemplate_cb0cca29ad18e7f75fde36aaa71effb7d28acd80d900dcb07b6bb9987eb87dc0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/ExceptionCasterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/ExceptionCasterTest.php"));

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
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster;
use Symfony\\Component\\VarDumper\\Caster\\FrameStub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

class ExceptionCasterTest extends TestCase
{
    use VarDumperTestTrait;

    private function getTestException(\$msg, &\$ref = null)
    {
        return new \\Exception(''.\$msg);
    }

    protected function tearDown(): void
    {
        ExceptionCaster::\$srcContext = 1;
        ExceptionCaster::\$traceArgs = true;
    }

    public function testDefaultSettings()
    {
        \$ref = ['foo'];
        \$e = \$this->getTestException('foo', \$ref);

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"foo\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
  trace: {
    %s%eTests%eCaster%eExceptionCasterTest.php:28 {
      › {
      ›     return new \\Exception(''.\$msg);
      › }
    }
    %s%eTests%eCaster%eExceptionCasterTest.php:40 { …}
%A
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e);
        \$this->assertSame(['foo'], \$ref);
    }

    public function testSeek()
    {
        \$e = \$this->getTestException(2);

        \$expectedDump = <<<'EODUMP'
{
  %s%eTests%eCaster%eExceptionCasterTest.php:28 {
    › {
    ›     return new \\Exception(''.\$msg);
    › }
  }
  %s%eTests%eCaster%eExceptionCasterTest.php:64 { …}
%A
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$this->getDump(\$e, 'trace'));
    }

    public function testNoArgs()
    {
        \$e = \$this->getTestException(1);
        ExceptionCaster::\$traceArgs = false;

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"1\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
  trace: {
    %sExceptionCasterTest.php:28 {
      › {
      ›     return new \\Exception(''.\$msg);
      › }
    }
    %s%eTests%eCaster%eExceptionCasterTest.php:82 { …}
%A
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e);
    }

    public function testNoSrcContext()
    {
        \$e = \$this->getTestException(1);
        ExceptionCaster::\$srcContext = -1;

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"1\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
  trace: {
    %s%eTests%eCaster%eExceptionCasterTest.php:28
    %s%eTests%eCaster%eExceptionCasterTest.php:%d
%A
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e);
    }

    public function testHtmlDump()
    {
        if (ini_get('xdebug.file_link_format') || get_cfg_var('xdebug.file_link_format')) {
            \$this->markTestSkipped('A custom file_link_format is defined.');
        }

        \$e = \$this->getTestException(1);
        ExceptionCaster::\$srcContext = -1;

        \$cloner = new VarCloner();
        \$cloner->setMaxItems(1);
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$e)->withRefHandles(false), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>Exception</span> {<samp>
  #<span class=sf-dump-protected title=\"Protected property\">message</span>: \"<span class=sf-dump-str>1</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">code</span>: <span class=sf-dump-num>0</span>
  #<span class=sf-dump-protected title=\"Protected property\">file</span>: \"<span class=sf-dump-str title=\"%sExceptionCasterTest.php
%d characters\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-path\">%s%eVarDumper</span><span class=sf-dump-ellipsis>%e</span>Tests%eCaster%eExceptionCasterTest.php</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">line</span>: <span class=sf-dump-num>28</span>
  <span class=sf-dump-meta>trace</span>: {<samp>
    <span class=sf-dump-meta title=\"%sExceptionCasterTest.php
Stack level %d.\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-path\">%s%eVarDumper</span><span class=sf-dump-ellipsis>%e</span>Tests%eCaster%eExceptionCasterTest.php</span>:<span class=sf-dump-num>28</span>
     &hellip;%d
  </samp>}
</samp>}
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    /**
     * @requires function Twig\\Template::getSourceContext
     */
    public function testFrameWithTwig()
    {
        require_once \\dirname(__DIR__).'/Fixtures/Twig.php';

        \$f = [
            new FrameStub([
                'file' => \\dirname(__DIR__).'/Fixtures/Twig.php',
                'line' => 20,
                'class' => '__TwigTemplate_VarDumperFixture_u75a09',
            ]),
            new FrameStub([
                'file' => \\dirname(__DIR__).'/Fixtures/Twig.php',
                'line' => 21,
                'class' => '__TwigTemplate_VarDumperFixture_u75a09',
                'object' => new \\__TwigTemplate_VarDumperFixture_u75a09(null, __FILE__),
            ]),
        ];

        \$expectedDump = <<<'EODUMP'
array:2 [
  0 => {
    class: \"__TwigTemplate_VarDumperFixture_u75a09\"
    src: {
      %sTwig.php:1 {
        › 
        › foo bar
        ›   twig source
      }
    }
  }
  1 => {
    class: \"__TwigTemplate_VarDumperFixture_u75a09\"
    object: __TwigTemplate_VarDumperFixture_u75a09 {
    %A
    }
    src: {
      %sExceptionCasterTest.php:2 {
        › foo bar
        ›   twig source
        › 
      }
    }
  }
]

EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$f);
    }

    public function testExcludeVerbosity()
    {
        \$e = \$this->getTestException('foo');

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"foo\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
}
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e, Caster::EXCLUDE_VERBOSE);
    }

    public function testAnonymous()
    {
        \$e = new \\Exception(sprintf('Boo \"%s\" ba.', \\get_class(new class('Foo') extends \\Exception {
        })));

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"Boo \"Exception@anonymous\" ba.\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: %d
}
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e, Caster::EXCLUDE_VERBOSE);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Caster/ExceptionCasterTest.php";
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
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster;
use Symfony\\Component\\VarDumper\\Caster\\FrameStub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

class ExceptionCasterTest extends TestCase
{
    use VarDumperTestTrait;

    private function getTestException(\$msg, &\$ref = null)
    {
        return new \\Exception(''.\$msg);
    }

    protected function tearDown(): void
    {
        ExceptionCaster::\$srcContext = 1;
        ExceptionCaster::\$traceArgs = true;
    }

    public function testDefaultSettings()
    {
        \$ref = ['foo'];
        \$e = \$this->getTestException('foo', \$ref);

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"foo\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
  trace: {
    %s%eTests%eCaster%eExceptionCasterTest.php:28 {
      › {
      ›     return new \\Exception(''.\$msg);
      › }
    }
    %s%eTests%eCaster%eExceptionCasterTest.php:40 { …}
%A
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e);
        \$this->assertSame(['foo'], \$ref);
    }

    public function testSeek()
    {
        \$e = \$this->getTestException(2);

        \$expectedDump = <<<'EODUMP'
{
  %s%eTests%eCaster%eExceptionCasterTest.php:28 {
    › {
    ›     return new \\Exception(''.\$msg);
    › }
  }
  %s%eTests%eCaster%eExceptionCasterTest.php:64 { …}
%A
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$this->getDump(\$e, 'trace'));
    }

    public function testNoArgs()
    {
        \$e = \$this->getTestException(1);
        ExceptionCaster::\$traceArgs = false;

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"1\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
  trace: {
    %sExceptionCasterTest.php:28 {
      › {
      ›     return new \\Exception(''.\$msg);
      › }
    }
    %s%eTests%eCaster%eExceptionCasterTest.php:82 { …}
%A
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e);
    }

    public function testNoSrcContext()
    {
        \$e = \$this->getTestException(1);
        ExceptionCaster::\$srcContext = -1;

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"1\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
  trace: {
    %s%eTests%eCaster%eExceptionCasterTest.php:28
    %s%eTests%eCaster%eExceptionCasterTest.php:%d
%A
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e);
    }

    public function testHtmlDump()
    {
        if (ini_get('xdebug.file_link_format') || get_cfg_var('xdebug.file_link_format')) {
            \$this->markTestSkipped('A custom file_link_format is defined.');
        }

        \$e = \$this->getTestException(1);
        ExceptionCaster::\$srcContext = -1;

        \$cloner = new VarCloner();
        \$cloner->setMaxItems(1);
        \$dumper = new HtmlDumper();
        \$dumper->setDumpHeader('<foo></foo>');
        \$dumper->setDumpBoundaries('<bar>', '</bar>');
        \$dump = \$dumper->dump(\$cloner->cloneVar(\$e)->withRefHandles(false), true);

        \$expectedDump = <<<'EODUMP'
<foo></foo><bar><span class=sf-dump-note>Exception</span> {<samp>
  #<span class=sf-dump-protected title=\"Protected property\">message</span>: \"<span class=sf-dump-str>1</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">code</span>: <span class=sf-dump-num>0</span>
  #<span class=sf-dump-protected title=\"Protected property\">file</span>: \"<span class=sf-dump-str title=\"%sExceptionCasterTest.php
%d characters\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-path\">%s%eVarDumper</span><span class=sf-dump-ellipsis>%e</span>Tests%eCaster%eExceptionCasterTest.php</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">line</span>: <span class=sf-dump-num>28</span>
  <span class=sf-dump-meta>trace</span>: {<samp>
    <span class=sf-dump-meta title=\"%sExceptionCasterTest.php
Stack level %d.\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-path\">%s%eVarDumper</span><span class=sf-dump-ellipsis>%e</span>Tests%eCaster%eExceptionCasterTest.php</span>:<span class=sf-dump-num>28</span>
     &hellip;%d
  </samp>}
</samp>}
</bar>
EODUMP;

        \$this->assertStringMatchesFormat(\$expectedDump, \$dump);
    }

    /**
     * @requires function Twig\\Template::getSourceContext
     */
    public function testFrameWithTwig()
    {
        require_once \\dirname(__DIR__).'/Fixtures/Twig.php';

        \$f = [
            new FrameStub([
                'file' => \\dirname(__DIR__).'/Fixtures/Twig.php',
                'line' => 20,
                'class' => '__TwigTemplate_VarDumperFixture_u75a09',
            ]),
            new FrameStub([
                'file' => \\dirname(__DIR__).'/Fixtures/Twig.php',
                'line' => 21,
                'class' => '__TwigTemplate_VarDumperFixture_u75a09',
                'object' => new \\__TwigTemplate_VarDumperFixture_u75a09(null, __FILE__),
            ]),
        ];

        \$expectedDump = <<<'EODUMP'
array:2 [
  0 => {
    class: \"__TwigTemplate_VarDumperFixture_u75a09\"
    src: {
      %sTwig.php:1 {
        › 
        › foo bar
        ›   twig source
      }
    }
  }
  1 => {
    class: \"__TwigTemplate_VarDumperFixture_u75a09\"
    object: __TwigTemplate_VarDumperFixture_u75a09 {
    %A
    }
    src: {
      %sExceptionCasterTest.php:2 {
        › foo bar
        ›   twig source
        › 
      }
    }
  }
]

EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$f);
    }

    public function testExcludeVerbosity()
    {
        \$e = \$this->getTestException('foo');

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"foo\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: 28
}
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e, Caster::EXCLUDE_VERBOSE);
    }

    public function testAnonymous()
    {
        \$e = new \\Exception(sprintf('Boo \"%s\" ba.', \\get_class(new class('Foo') extends \\Exception {
        })));

        \$expectedDump = <<<'EODUMP'
Exception {
  #message: \"Boo \"Exception@anonymous\" ba.\"
  #code: 0
  #file: \"%sExceptionCasterTest.php\"
  #line: %d
}
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$e, Caster::EXCLUDE_VERBOSE);
    }
}
", "vendor/symfony/var-dumper/Tests/Caster/ExceptionCasterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Caster/ExceptionCasterTest.php");
    }
}
