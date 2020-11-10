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

/* vendor/symfony/twig-bridge/Tests/Extension/DumpExtensionTest.php */
class __TwigTemplate_f4fd65b42f7182fd763c52d64f6bafbfffb2b226bcd23e7b8c7e43a3bdd0f837 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/DumpExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/DumpExtensionTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\DumpExtension;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\VarDumper;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class DumpExtensionTest extends TestCase
{
    /**
     * @dataProvider getDumpTags
     */
    public function testDumpTag(\$template, \$debug, \$expectedOutput, \$expectedDumped)
    {
        \$extension = new DumpExtension(new VarCloner());
        \$twig = new Environment(new ArrayLoader(['template' => \$template]), [
            'debug' => \$debug,
            'cache' => false,
            'optimizations' => 0,
        ]);
        \$twig->addExtension(\$extension);

        \$dumped = null;
        \$exception = null;
        \$prevDumper = VarDumper::setHandler(function (\$var) use (&\$dumped) { \$dumped = \$var; });

        try {
            \$this->assertEquals(\$expectedOutput, \$twig->render('template'));
        } catch (\\Exception \$exception) {
        }

        VarDumper::setHandler(\$prevDumper);

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertSame(\$expectedDumped, \$dumped);
    }

    public function getDumpTags()
    {
        return [
            ['A";
        if ($this->env->isDebug()) {
            $__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52cevars = [];
            foreach ($context as $__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52cekey => $__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52ceval) {
                if (!$__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52ceval instanceof \Twig\Template) {
                    $__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52cevars[$__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52cekey] = $__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52ceval;
                }
            }
            // line 58
            \Symfony\Component\VarDumper\VarDumper::dump($__internal_87674c3c06da4aa445ec67c3b330a05b2fdb2a20479cdea766c24adc65ac52cevars);
        }
        echo "B', true, 'AB', []],
            ['A";
        // line 59
        $context["foo"] = "bar";
        echo "B";
        if ($this->env->isDebug()) {
            $__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4vars = [];
            foreach ($context as $__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4key => $__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4val) {
                if (!$__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4val instanceof \Twig\Template) {
                    $__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4vars[$__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4key] = $__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4val;
                }
            }
            \Symfony\Component\VarDumper\VarDumper::dump($__internal_60f7d45645e9e825fb3fb0396830ee2845086bcb62102fc6328dfdfbb5b6cde4vars);
        }
        echo "C', true, 'ABC', ['foo' => 'bar']],
            ['A";
        if ($this->env->isDebug()) {
            $__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4vars = [];
            foreach ($context as $__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4key => $__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4val) {
                if (!$__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4val instanceof \Twig\Template) {
                    $__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4vars[$__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4key] = $__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4val;
                }
            }
            // line 60
            \Symfony\Component\VarDumper\VarDumper::dump($__internal_f066811c6c7b9eb2dd442e0f0181b3753bc2d93220ddf02b93c52b3585d481d4vars);
        }
        echo "B', false, 'AB', null],
        ];
    }

    /**
     * @dataProvider getDumpArgs
     */
    public function testDump(\$context, \$args, \$expectedOutput, \$debug = true)
    {
        \$extension = new DumpExtension(new VarCloner());
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), [
            'debug' => \$debug,
            'cache' => false,
            'optimizations' => 0,
        ]);

        array_unshift(\$args, \$context);
        array_unshift(\$args, \$twig);

        \$dump = \$extension->dump(...\$args);

        if (\$debug) {
            \$this->assertStringStartsWith('<script>', \$dump);
            \$dump = preg_replace('/^.*?<pre/', '<pre', \$dump);
            \$dump = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$dump);
        }
        \$this->assertEquals(\$expectedOutput, \$dump);
    }

    public function getDumpArgs()
    {
        return [
            [[], [], '', false],
            [[], [], \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\">[]\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\"],
            [
                [],
                [123, 456],
                \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-num>123</span>\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\"
                .\"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-num>456</span>\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
            ],
            [
                ['foo' => 'bar'],
                [],
                \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:1</span> [<samp>\\n\"
                .\"  \\\"<span class=sf-dump-key>foo</span>\\\" => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">bar</span>\\\"\\n\"
                .\"</samp>]\\n\"
                .\"</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
            ],
        ];
    }

    public function testCustomDumper()
    {
        \$output = '';
        \$lineDumper = function (\$line) use (&\$output) {
            \$output .= \$line;
        };

        \$dumper = new HtmlDumper(\$lineDumper);

        \$dumper->setDumpHeader('');
        \$dumper->setDumpBoundaries(
            '<pre class=sf-dump-test id=%s data-indent-pad=\"%s\">',
            '</pre><script>Sfdump(\"%s\")</script>'
        );
        \$extension = new DumpExtension(new VarCloner(), \$dumper);
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), [
            'debug' => true,
            'cache' => false,
            'optimizations' => 0,
        ]);

        \$dump = \$extension->dump(\$twig, [], 'foo');
        \$dump = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$dump);

        \$this->assertEquals(
            '<pre class=sf-dump-test id=sf-dump data-indent-pad=\"  \">\"'.
            \"<span class=sf-dump-str title=\\\"3 characters\\\">foo</span>\\\"\\n\".
            \"</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
            \$dump,
            'Custom dumper should be used to dump data.'
        );

        \$this->assertEmpty(\$output, 'Dumper output should be ignored.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/DumpExtensionTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 60,  114 => 59,  109 => 58,  43 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\DumpExtension;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;
use Symfony\\Component\\VarDumper\\VarDumper;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class DumpExtensionTest extends TestCase
{
    /**
     * @dataProvider getDumpTags
     */
    public function testDumpTag(\$template, \$debug, \$expectedOutput, \$expectedDumped)
    {
        \$extension = new DumpExtension(new VarCloner());
        \$twig = new Environment(new ArrayLoader(['template' => \$template]), [
            'debug' => \$debug,
            'cache' => false,
            'optimizations' => 0,
        ]);
        \$twig->addExtension(\$extension);

        \$dumped = null;
        \$exception = null;
        \$prevDumper = VarDumper::setHandler(function (\$var) use (&\$dumped) { \$dumped = \$var; });

        try {
            \$this->assertEquals(\$expectedOutput, \$twig->render('template'));
        } catch (\\Exception \$exception) {
        }

        VarDumper::setHandler(\$prevDumper);

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertSame(\$expectedDumped, \$dumped);
    }

    public function getDumpTags()
    {
        return [
            ['A{% dump %}B', true, 'AB', []],
            ['A{% set foo=\"bar\"%}B{% dump %}C', true, 'ABC', ['foo' => 'bar']],
            ['A{% dump %}B', false, 'AB', null],
        ];
    }

    /**
     * @dataProvider getDumpArgs
     */
    public function testDump(\$context, \$args, \$expectedOutput, \$debug = true)
    {
        \$extension = new DumpExtension(new VarCloner());
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), [
            'debug' => \$debug,
            'cache' => false,
            'optimizations' => 0,
        ]);

        array_unshift(\$args, \$context);
        array_unshift(\$args, \$twig);

        \$dump = \$extension->dump(...\$args);

        if (\$debug) {
            \$this->assertStringStartsWith('<script>', \$dump);
            \$dump = preg_replace('/^.*?<pre/', '<pre', \$dump);
            \$dump = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$dump);
        }
        \$this->assertEquals(\$expectedOutput, \$dump);
    }

    public function getDumpArgs()
    {
        return [
            [[], [], '', false],
            [[], [], \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\">[]\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\"],
            [
                [],
                [123, 456],
                \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-num>123</span>\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\"
                .\"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-num>456</span>\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
            ],
            [
                ['foo' => 'bar'],
                [],
                \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-note>array:1</span> [<samp>\\n\"
                .\"  \\\"<span class=sf-dump-key>foo</span>\\\" => \\\"<span class=sf-dump-str title=\\\"3 characters\\\">bar</span>\\\"\\n\"
                .\"</samp>]\\n\"
                .\"</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
            ],
        ];
    }

    public function testCustomDumper()
    {
        \$output = '';
        \$lineDumper = function (\$line) use (&\$output) {
            \$output .= \$line;
        };

        \$dumper = new HtmlDumper(\$lineDumper);

        \$dumper->setDumpHeader('');
        \$dumper->setDumpBoundaries(
            '<pre class=sf-dump-test id=%s data-indent-pad=\"%s\">',
            '</pre><script>Sfdump(\"%s\")</script>'
        );
        \$extension = new DumpExtension(new VarCloner(), \$dumper);
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock(), [
            'debug' => true,
            'cache' => false,
            'optimizations' => 0,
        ]);

        \$dump = \$extension->dump(\$twig, [], 'foo');
        \$dump = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$dump);

        \$this->assertEquals(
            '<pre class=sf-dump-test id=sf-dump data-indent-pad=\"  \">\"'.
            \"<span class=sf-dump-str title=\\\"3 characters\\\">foo</span>\\\"\\n\".
            \"</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
            \$dump,
            'Custom dumper should be used to dump data.'
        );

        \$this->assertEmpty(\$output, 'Dumper output should be ignored.');
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/DumpExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/DumpExtensionTest.php");
    }
}
