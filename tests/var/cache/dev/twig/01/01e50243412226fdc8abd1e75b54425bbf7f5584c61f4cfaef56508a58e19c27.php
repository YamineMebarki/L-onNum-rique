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

/* vendor/fzaninotto/faker/test/Faker/Provider/LoremTest.php */
class __TwigTemplate_271f9f49f421af9204d927ca1e970355139623de2a636bacac33b13335cf090a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/LoremTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/LoremTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Lorem;
use PHPUnit\\Framework\\TestCase;

class LoremTest extends TestCase
{
    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextThrowsExceptionWhenAskedTextSizeLessThan5()
    {
        Lorem::text(4);
    }

    public function testTextReturnsWordsWhenAskedSizeLessThan25()
    {
        \$this->assertEquals('Word word word word.', TestableLorem::text(24));
    }

    public function testTextReturnsSentencesWhenAskedSizeLessThan100()
    {
        \$this->assertEquals('This is a test sentence. This is a test sentence. This is a test sentence.', TestableLorem::text(99));
    }

    public function testTextReturnsParagraphsWhenAskedSizeGreaterOrEqualThanThan100()
    {
        \$this->assertEquals('This is a test paragraph. It has three sentences. Exactly three.', TestableLorem::text(100));
    }

    public function testSentenceWithZeroNbWordsReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::sentence(0));
    }

    public function testSentenceWithNegativeNbWordsReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::sentence(-1));
    }

    public function testParagraphWithZeroNbSentencesReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::paragraph(0));
    }

    public function testParagraphWithNegativeNbSentencesReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::paragraph(-1));
    }

    public function testSentenceWithPositiveNbWordsReturnsAtLeastOneWord()
    {
         \$sentence = Lorem::sentence(1);

        \$this->assertGreaterThan(1, strlen(\$sentence));
        \$this->assertGreaterThanOrEqual(1, count(explode(' ', \$sentence)));
    }

    public function testParagraphWithPositiveNbSentencesReturnsAtLeastOneWord()
    {
        \$paragraph = Lorem::paragraph(1);

        \$this->assertGreaterThan(1, strlen(\$paragraph));
        \$this->assertGreaterThanOrEqual(1, count(explode(' ', \$paragraph)));
    }

    public function testWordssAsText()
    {
        \$words = TestableLorem::words(2, true);

        \$this->assertEquals('word word', \$words);
    }

    public function testSentencesAsText()
    {
        \$sentences = TestableLorem::sentences(2, true);

        \$this->assertEquals('This is a test sentence. This is a test sentence.', \$sentences);
    }

    public function testParagraphsAsText()
    {
        \$paragraphs = TestableLorem::paragraphs(2, true);

        \$expected = \"This is a test paragraph. It has three sentences. Exactly three.\\n\\nThis is a test paragraph. It has three sentences. Exactly three.\";
        \$this->assertEquals(\$expected, \$paragraphs);
    }
}

class TestableLorem extends Lorem
{

    public static function word()
    {
        return 'word';
    }

    public static function sentence(\$nbWords = 5, \$variableNbWords = true)
    {
        return 'This is a test sentence.';
    }

    public static function paragraph(\$nbSentences = 3, \$variableNbSentences = true)
    {
        return 'This is a test paragraph. It has three sentences. Exactly three.';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/LoremTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Lorem;
use PHPUnit\\Framework\\TestCase;

class LoremTest extends TestCase
{
    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextThrowsExceptionWhenAskedTextSizeLessThan5()
    {
        Lorem::text(4);
    }

    public function testTextReturnsWordsWhenAskedSizeLessThan25()
    {
        \$this->assertEquals('Word word word word.', TestableLorem::text(24));
    }

    public function testTextReturnsSentencesWhenAskedSizeLessThan100()
    {
        \$this->assertEquals('This is a test sentence. This is a test sentence. This is a test sentence.', TestableLorem::text(99));
    }

    public function testTextReturnsParagraphsWhenAskedSizeGreaterOrEqualThanThan100()
    {
        \$this->assertEquals('This is a test paragraph. It has three sentences. Exactly three.', TestableLorem::text(100));
    }

    public function testSentenceWithZeroNbWordsReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::sentence(0));
    }

    public function testSentenceWithNegativeNbWordsReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::sentence(-1));
    }

    public function testParagraphWithZeroNbSentencesReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::paragraph(0));
    }

    public function testParagraphWithNegativeNbSentencesReturnsEmptyString()
    {
        \$this->assertEquals('', Lorem::paragraph(-1));
    }

    public function testSentenceWithPositiveNbWordsReturnsAtLeastOneWord()
    {
         \$sentence = Lorem::sentence(1);

        \$this->assertGreaterThan(1, strlen(\$sentence));
        \$this->assertGreaterThanOrEqual(1, count(explode(' ', \$sentence)));
    }

    public function testParagraphWithPositiveNbSentencesReturnsAtLeastOneWord()
    {
        \$paragraph = Lorem::paragraph(1);

        \$this->assertGreaterThan(1, strlen(\$paragraph));
        \$this->assertGreaterThanOrEqual(1, count(explode(' ', \$paragraph)));
    }

    public function testWordssAsText()
    {
        \$words = TestableLorem::words(2, true);

        \$this->assertEquals('word word', \$words);
    }

    public function testSentencesAsText()
    {
        \$sentences = TestableLorem::sentences(2, true);

        \$this->assertEquals('This is a test sentence. This is a test sentence.', \$sentences);
    }

    public function testParagraphsAsText()
    {
        \$paragraphs = TestableLorem::paragraphs(2, true);

        \$expected = \"This is a test paragraph. It has three sentences. Exactly three.\\n\\nThis is a test paragraph. It has three sentences. Exactly three.\";
        \$this->assertEquals(\$expected, \$paragraphs);
    }
}

class TestableLorem extends Lorem
{

    public static function word()
    {
        return 'word';
    }

    public static function sentence(\$nbWords = 5, \$variableNbWords = true)
    {
        return 'This is a test sentence.';
    }

    public static function paragraph(\$nbSentences = 3, \$variableNbSentences = true)
    {
        return 'This is a test paragraph. It has three sentences. Exactly three.';
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/LoremTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/LoremTest.php");
    }
}
