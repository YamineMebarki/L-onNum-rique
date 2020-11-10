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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterTest.php */
class __TwigTemplate_6096f4a5b999e90e4b687d48b04975acdc413fcc4f496dac2db87e8949d0763d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterTest.php"));

        // line 1
        echo "<?php

class Swift_StreamFilters_StringReplacementFilterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBasicReplacementsAreMade()
    {
        \$filter = \$this->createFilter('foo', 'bar');
        \$this->assertEquals('XbarYbarZ', \$filter->filter('XfooYfooZ'));
    }

    public function testShouldBufferReturnsTrueIfPartialMatchAtEndOfBuffer()
    {
        \$filter = \$this->createFilter('foo', 'bar');
        \$this->assertTrue(\$filter->shouldBuffer('XfooYf'),
            '%s: Filter should buffer since \"foo\" is the needle and the ending '.
            '\"f\" could be from \"foo\"'
            );
    }

    public function testFilterCanMakeMultipleReplacements()
    {
        \$filter = \$this->createFilter(['a', 'b'], 'foo');
        \$this->assertEquals('XfooYfooZ', \$filter->filter('XaYbZ'));
    }

    public function testMultipleReplacementsCanBeDifferent()
    {
        \$filter = \$this->createFilter(['a', 'b'], ['foo', 'zip']);
        \$this->assertEquals('XfooYzipZ', \$filter->filter('XaYbZ'));
    }

    public function testShouldBufferReturnsFalseIfPartialMatchNotAtEndOfString()
    {
        \$filter = \$this->createFilter(\"\\r\\n\", \"\\n\");
        \$this->assertFalse(\$filter->shouldBuffer(\"foo\\r\\nbar\"),
            '%s: Filter should not buffer since x0Dx0A is the needle and is not at EOF'
            );
    }

    public function testShouldBufferReturnsTrueIfAnyOfMultipleMatchesAtEndOfString()
    {
        \$filter = \$this->createFilter(['foo', 'zip'], 'bar');
        \$this->assertTrue(\$filter->shouldBuffer('XfooYzi'),
            '%s: Filter should buffer since \"zip\" is a needle and the ending '.
            '\"zi\" could be from \"zip\"'
            );
    }

    public function testShouldBufferReturnsFalseOnEmptyBuffer()
    {
        \$filter = \$this->createFilter(\"\\r\\n\", \"\\n\");
        \$this->assertFalse(\$filter->shouldBuffer(''));
    }

    private function createFilter(\$search, \$replace)
    {
        return new Swift_StreamFilters_StringReplacementFilter(\$search, \$replace);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_StreamFilters_StringReplacementFilterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBasicReplacementsAreMade()
    {
        \$filter = \$this->createFilter('foo', 'bar');
        \$this->assertEquals('XbarYbarZ', \$filter->filter('XfooYfooZ'));
    }

    public function testShouldBufferReturnsTrueIfPartialMatchAtEndOfBuffer()
    {
        \$filter = \$this->createFilter('foo', 'bar');
        \$this->assertTrue(\$filter->shouldBuffer('XfooYf'),
            '%s: Filter should buffer since \"foo\" is the needle and the ending '.
            '\"f\" could be from \"foo\"'
            );
    }

    public function testFilterCanMakeMultipleReplacements()
    {
        \$filter = \$this->createFilter(['a', 'b'], 'foo');
        \$this->assertEquals('XfooYfooZ', \$filter->filter('XaYbZ'));
    }

    public function testMultipleReplacementsCanBeDifferent()
    {
        \$filter = \$this->createFilter(['a', 'b'], ['foo', 'zip']);
        \$this->assertEquals('XfooYzipZ', \$filter->filter('XaYbZ'));
    }

    public function testShouldBufferReturnsFalseIfPartialMatchNotAtEndOfString()
    {
        \$filter = \$this->createFilter(\"\\r\\n\", \"\\n\");
        \$this->assertFalse(\$filter->shouldBuffer(\"foo\\r\\nbar\"),
            '%s: Filter should not buffer since x0Dx0A is the needle and is not at EOF'
            );
    }

    public function testShouldBufferReturnsTrueIfAnyOfMultipleMatchesAtEndOfString()
    {
        \$filter = \$this->createFilter(['foo', 'zip'], 'bar');
        \$this->assertTrue(\$filter->shouldBuffer('XfooYzi'),
            '%s: Filter should buffer since \"zip\" is a needle and the ending '.
            '\"zi\" could be from \"zip\"'
            );
    }

    public function testShouldBufferReturnsFalseOnEmptyBuffer()
    {
        \$filter = \$this->createFilter(\"\\r\\n\", \"\\n\");
        \$this->assertFalse(\$filter->shouldBuffer(''));
    }

    private function createFilter(\$search, \$replace)
    {
        return new Swift_StreamFilters_StringReplacementFilter(\$search, \$replace);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterTest.php");
    }
}
