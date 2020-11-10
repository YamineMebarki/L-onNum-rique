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

/* vendor/symfony/form/Tests/ButtonBuilderTest.php */
class __TwigTemplate_920504d86ef82c18ac4376ce95fc723c08391c1bdecb7deb04b4466598351ee8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ButtonBuilderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ButtonBuilderTest.php"));

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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ButtonBuilder;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;

/**
 * @author Alexander Cheprasov <cheprasov.84@ya.ru>
 */
class ButtonBuilderTest extends TestCase
{
    public function getValidNames()
    {
        return [
            ['reset'],
            ['submit'],
            ['foo'],
            ['0'],
            [0],
        ];
    }

    /**
     * @dataProvider getValidNames
     */
    public function testValidNames(\$name)
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ButtonBuilder', new ButtonBuilder(\$name));
    }

    /**
     * @group legacy
     */
    public function testNameContainingIllegalCharacters()
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ButtonBuilder', new ButtonBuilder('button[]'));
    }

    /**
     * @group legacy
     */
    public function testNameStartingWithIllegalCharacters()
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ButtonBuilder', new ButtonBuilder('Button'));
    }

    public function getInvalidNames()
    {
        return [
            [''],
            [false],
            [null],
        ];
    }

    /**
     * @dataProvider getInvalidNames
     */
    public function testInvalidNames(\$name)
    {
        \$this->expectException(InvalidArgumentException::class);
        \$this->expectExceptionMessage('Buttons cannot have empty names.');
        new ButtonBuilder(\$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/ButtonBuilderTest.php";
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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ButtonBuilder;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;

/**
 * @author Alexander Cheprasov <cheprasov.84@ya.ru>
 */
class ButtonBuilderTest extends TestCase
{
    public function getValidNames()
    {
        return [
            ['reset'],
            ['submit'],
            ['foo'],
            ['0'],
            [0],
        ];
    }

    /**
     * @dataProvider getValidNames
     */
    public function testValidNames(\$name)
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ButtonBuilder', new ButtonBuilder(\$name));
    }

    /**
     * @group legacy
     */
    public function testNameContainingIllegalCharacters()
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ButtonBuilder', new ButtonBuilder('button[]'));
    }

    /**
     * @group legacy
     */
    public function testNameStartingWithIllegalCharacters()
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ButtonBuilder', new ButtonBuilder('Button'));
    }

    public function getInvalidNames()
    {
        return [
            [''],
            [false],
            [null],
        ];
    }

    /**
     * @dataProvider getInvalidNames
     */
    public function testInvalidNames(\$name)
    {
        \$this->expectException(InvalidArgumentException::class);
        \$this->expectExceptionMessage('Buttons cannot have empty names.');
        new ButtonBuilder(\$name);
    }
}
", "vendor/symfony/form/Tests/ButtonBuilderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/ButtonBuilderTest.php");
    }
}
