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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/ByteArrayReplacementFilterTest.php */
class __TwigTemplate_9ff93d2b0316834db9c59b1016b5f6c4cb020894cc4333b56bec2ef03a2f6eaa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/ByteArrayReplacementFilterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/ByteArrayReplacementFilterTest.php"));

        // line 1
        echo "<?php

class Swift_StreamFilters_ByteArrayReplacementFilterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBasicReplacementsAreMade()
    {
        \$filter = \$this->createFilter([0x61, 0x62], [0x63, 0x64]);
        \$this->assertEquals(
            [0x59, 0x60, 0x63, 0x64, 0x65],
            \$filter->filter([0x59, 0x60, 0x61, 0x62, 0x65])
            );
    }

    public function testShouldBufferReturnsTrueIfPartialMatchAtEndOfBuffer()
    {
        \$filter = \$this->createFilter([0x61, 0x62], [0x63, 0x64]);
        \$this->assertTrue(\$filter->shouldBuffer([0x59, 0x60, 0x61]),
            '%s: Filter should buffer since 0x61 0x62 is the needle and the ending '.
            '0x61 could be from 0x61 0x62'
            );
    }

    public function testFilterCanMakeMultipleReplacements()
    {
        \$filter = \$this->createFilter([[0x61], [0x62]], [0x63]);
        \$this->assertEquals(
            [0x60, 0x63, 0x60, 0x63, 0x60],
            \$filter->filter([0x60, 0x61, 0x60, 0x62, 0x60])
            );
    }

    public function testMultipleReplacementsCanBeDifferent()
    {
        \$filter = \$this->createFilter([[0x61], [0x62]], [[0x63], [0x64]]);
        \$this->assertEquals(
            [0x60, 0x63, 0x60, 0x64, 0x60],
            \$filter->filter([0x60, 0x61, 0x60, 0x62, 0x60])
            );
    }

    public function testShouldBufferReturnsFalseIfPartialMatchNotAtEndOfString()
    {
        \$filter = \$this->createFilter([0x0D, 0x0A], [0x0A]);
        \$this->assertFalse(\$filter->shouldBuffer([0x61, 0x62, 0x0D, 0x0A, 0x63]),
            '%s: Filter should not buffer since x0Dx0A is the needle and is not at EOF'
            );
    }

    public function testShouldBufferReturnsTrueIfAnyOfMultipleMatchesAtEndOfString()
    {
        \$filter = \$this->createFilter([[0x61, 0x62], [0x63]], [0x64]);
        \$this->assertTrue(\$filter->shouldBuffer([0x59, 0x60, 0x61]),
            '%s: Filter should buffer since 0x61 0x62 is a needle and the ending '.
            '0x61 could be from 0x61 0x62'
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsLF()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0A, 0x61, 0x0A, 0x62, 0x0A, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsCR()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0D, 0x61, 0x0D, 0x62, 0x0D, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsCRLF()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsLFCR()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0A, 0x0D, 0x61, 0x0A, 0x0D, 0x62, 0x0A, 0x0D, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputContainsLFLF()
    {
        //Lighthouse Bug #23

        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0A, 0x0A, 0x61, 0x0A, 0x0A, 0x62, 0x0A, 0x0A, 0x63])
            );
    }

    private function createFilter(\$search, \$replace)
    {
        return new Swift_StreamFilters_ByteArrayReplacementFilter(\$search, \$replace);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/ByteArrayReplacementFilterTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_StreamFilters_ByteArrayReplacementFilterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBasicReplacementsAreMade()
    {
        \$filter = \$this->createFilter([0x61, 0x62], [0x63, 0x64]);
        \$this->assertEquals(
            [0x59, 0x60, 0x63, 0x64, 0x65],
            \$filter->filter([0x59, 0x60, 0x61, 0x62, 0x65])
            );
    }

    public function testShouldBufferReturnsTrueIfPartialMatchAtEndOfBuffer()
    {
        \$filter = \$this->createFilter([0x61, 0x62], [0x63, 0x64]);
        \$this->assertTrue(\$filter->shouldBuffer([0x59, 0x60, 0x61]),
            '%s: Filter should buffer since 0x61 0x62 is the needle and the ending '.
            '0x61 could be from 0x61 0x62'
            );
    }

    public function testFilterCanMakeMultipleReplacements()
    {
        \$filter = \$this->createFilter([[0x61], [0x62]], [0x63]);
        \$this->assertEquals(
            [0x60, 0x63, 0x60, 0x63, 0x60],
            \$filter->filter([0x60, 0x61, 0x60, 0x62, 0x60])
            );
    }

    public function testMultipleReplacementsCanBeDifferent()
    {
        \$filter = \$this->createFilter([[0x61], [0x62]], [[0x63], [0x64]]);
        \$this->assertEquals(
            [0x60, 0x63, 0x60, 0x64, 0x60],
            \$filter->filter([0x60, 0x61, 0x60, 0x62, 0x60])
            );
    }

    public function testShouldBufferReturnsFalseIfPartialMatchNotAtEndOfString()
    {
        \$filter = \$this->createFilter([0x0D, 0x0A], [0x0A]);
        \$this->assertFalse(\$filter->shouldBuffer([0x61, 0x62, 0x0D, 0x0A, 0x63]),
            '%s: Filter should not buffer since x0Dx0A is the needle and is not at EOF'
            );
    }

    public function testShouldBufferReturnsTrueIfAnyOfMultipleMatchesAtEndOfString()
    {
        \$filter = \$this->createFilter([[0x61, 0x62], [0x63]], [0x64]);
        \$this->assertTrue(\$filter->shouldBuffer([0x59, 0x60, 0x61]),
            '%s: Filter should buffer since 0x61 0x62 is a needle and the ending '.
            '0x61 could be from 0x61 0x62'
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsLF()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0A, 0x61, 0x0A, 0x62, 0x0A, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsCR()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0D, 0x61, 0x0D, 0x62, 0x0D, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsCRLF()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputIsLFCR()
    {
        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0A, 0x0D, 0x61, 0x0A, 0x0D, 0x62, 0x0A, 0x0D, 0x63])
            );
    }

    public function testConvertingAllLineEndingsToCRLFWhenInputContainsLFLF()
    {
        //Lighthouse Bug #23

        \$filter = \$this->createFilter(
            [[0x0D, 0x0A], [0x0D], [0x0A]],
            [[0x0A], [0x0A], [0x0D, 0x0A]]
            );

        \$this->assertEquals(
            [0x60, 0x0D, 0x0A, 0x0D, 0x0A, 0x61, 0x0D, 0x0A, 0x0D, 0x0A, 0x62, 0x0D, 0x0A, 0x0D, 0x0A, 0x63],
            \$filter->filter([0x60, 0x0A, 0x0A, 0x61, 0x0A, 0x0A, 0x62, 0x0A, 0x0A, 0x63])
            );
    }

    private function createFilter(\$search, \$replace)
    {
        return new Swift_StreamFilters_ByteArrayReplacementFilter(\$search, \$replace);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/ByteArrayReplacementFilterTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/ByteArrayReplacementFilterTest.php");
    }
}
