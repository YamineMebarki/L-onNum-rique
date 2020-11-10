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

/* vendor/fzaninotto/faker/test/Faker/Provider/zh_TW/TextTest.php */
class __TwigTemplate_f51b0603db9af06fd926885c29f4bb11de8c8d9797fa975ea593f9c9f08b8b3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/zh_TW/TextTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/zh_TW/TextTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\zh_TW;

use PHPUnit\\Framework\\TestCase;

class TextTest extends TestCase
{
    private \$textClass;

    public function setUp()
    {
        \$this->textClass = new \\ReflectionClass('Faker\\Provider\\zh_TW\\Text');
    }

    protected function getMethod(\$name) {
        \$method = \$this->textClass->getMethod(\$name);

        \$method->setAccessible(true);

        return \$method;
    }

    /** @test */
    function testItShouldExplodeTheStringToArray()
    {
        \$this->assertSame(
            array('中', '文', '測', '試', '真', '有', '趣'),
            \$this->getMethod('explode')->invokeArgs(null, array('中文測試真有趣'))
        );

        \$this->assertSame(
            array('標', '點', '，', '符', '號', '！'),
            \$this->getMethod('explode')->invokeArgs(null, array('標點，符號！'))
        );
    }

    /** @test */
    function testItShouldReturnTheStringLength()
    {
        \$this->assertContains(
            \$this->getMethod('strlen')->invokeArgs(null, array('中文測試真有趣')),
            array(7, 21)
        );
    }

    /** @test */
    function testItShouldReturnTheCharacterIsValidStartOrNot()
    {
        \$this->assertTrue(\$this->getMethod('validStart')->invokeArgs(null, array('中')));

        \$this->assertTrue(\$this->getMethod('validStart')->invokeArgs(null, array('2')));

        \$this->assertTrue(\$this->getMethod('validStart')->invokeArgs(null, array('Hello')));

        \$this->assertFalse(\$this->getMethod('validStart')->invokeArgs(null, array('。')));

        \$this->assertFalse(\$this->getMethod('validStart')->invokeArgs(null, array('！')));
    }

    /** @test */
    function testItShouldAppendEndPunctToTheEndOfString()
    {
        \$this->assertSame(
            '中文測試真有趣。',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣'))
        );

        \$this->assertSame(
            '中文測試真有趣。',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣，'))
        );

        \$this->assertSame(
            '中文測試真有趣！',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣！'))
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/zh_TW/TextTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\zh_TW;

use PHPUnit\\Framework\\TestCase;

class TextTest extends TestCase
{
    private \$textClass;

    public function setUp()
    {
        \$this->textClass = new \\ReflectionClass('Faker\\Provider\\zh_TW\\Text');
    }

    protected function getMethod(\$name) {
        \$method = \$this->textClass->getMethod(\$name);

        \$method->setAccessible(true);

        return \$method;
    }

    /** @test */
    function testItShouldExplodeTheStringToArray()
    {
        \$this->assertSame(
            array('中', '文', '測', '試', '真', '有', '趣'),
            \$this->getMethod('explode')->invokeArgs(null, array('中文測試真有趣'))
        );

        \$this->assertSame(
            array('標', '點', '，', '符', '號', '！'),
            \$this->getMethod('explode')->invokeArgs(null, array('標點，符號！'))
        );
    }

    /** @test */
    function testItShouldReturnTheStringLength()
    {
        \$this->assertContains(
            \$this->getMethod('strlen')->invokeArgs(null, array('中文測試真有趣')),
            array(7, 21)
        );
    }

    /** @test */
    function testItShouldReturnTheCharacterIsValidStartOrNot()
    {
        \$this->assertTrue(\$this->getMethod('validStart')->invokeArgs(null, array('中')));

        \$this->assertTrue(\$this->getMethod('validStart')->invokeArgs(null, array('2')));

        \$this->assertTrue(\$this->getMethod('validStart')->invokeArgs(null, array('Hello')));

        \$this->assertFalse(\$this->getMethod('validStart')->invokeArgs(null, array('。')));

        \$this->assertFalse(\$this->getMethod('validStart')->invokeArgs(null, array('！')));
    }

    /** @test */
    function testItShouldAppendEndPunctToTheEndOfString()
    {
        \$this->assertSame(
            '中文測試真有趣。',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣'))
        );

        \$this->assertSame(
            '中文測試真有趣。',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣，'))
        );

        \$this->assertSame(
            '中文測試真有趣！',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('中文測試真有趣！'))
        );
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/zh_TW/TextTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/zh_TW/TextTest.php");
    }
}
