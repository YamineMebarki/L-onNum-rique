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

/* vendor/symfony/validator/Tests/Constraints/FileTest.php */
class __TwigTemplate_28dd9910403e8a49862c16aeaeb785bf020292541898dbd7ba006cb793e64798 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/FileTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/FileTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\File;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

class FileTest extends TestCase
{
    /**
     * @dataProvider provideValidSizes
     */
    public function testMaxSize(\$maxSize, \$bytes, \$binaryFormat)
    {
        \$file = new File(['maxSize' => \$maxSize]);

        \$this->assertSame(\$bytes, \$file->maxSize);
        \$this->assertSame(\$binaryFormat, \$file->binaryFormat);
        \$this->assertTrue(\$file->__isset('maxSize'));
    }

    public function testMagicIsset()
    {
        \$file = new File(['maxSize' => 1]);

        \$this->assertTrue(\$file->__isset('maxSize'));
        \$this->assertTrue(\$file->__isset('groups'));
        \$this->assertFalse(\$file->__isset('toto'));
    }

    /**
     * @dataProvider provideValidSizes
     */
    public function testMaxSizeCanBeSetAfterInitialization(\$maxSize, \$bytes, \$binaryFormat)
    {
        \$file = new File();
        \$file->maxSize = \$maxSize;

        \$this->assertSame(\$bytes, \$file->maxSize);
        \$this->assertSame(\$binaryFormat, \$file->binaryFormat);
    }

    /**
     * @dataProvider provideInvalidSizes
     */
    public function testInvalidValueForMaxSizeThrowsExceptionAfterInitialization(\$maxSize)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$file = new File(['maxSize' => 1000]);
        \$file->maxSize = \$maxSize;
    }

    /**
     * @dataProvider provideInvalidSizes
     */
    public function testMaxSizeCannotBeSetToInvalidValueAfterInitialization(\$maxSize)
    {
        \$file = new File(['maxSize' => 1000]);

        try {
            \$file->maxSize = \$maxSize;
        } catch (ConstraintDefinitionException \$e) {
        }

        \$this->assertSame(1000, \$file->maxSize);
    }

    /**
     * @dataProvider provideInValidSizes
     */
    public function testInvalidMaxSize(\$maxSize)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new File(['maxSize' => \$maxSize]);
    }

    public function provideValidSizes()
    {
        return [
            ['500', 500, false],
            [12300, 12300, false],
            ['1ki', 1024, true],
            ['1KI', 1024, true],
            ['2k', 2000, false],
            ['2K', 2000, false],
            ['1mi', 1048576, true],
            ['1MI', 1048576, true],
            ['3m', 3000000, false],
            ['3M', 3000000, false],
            ['1gi', 1073741824, true],
            ['1GI', 1073741824, true],
            ['4g', 4000000000, false],
            ['4G', 4000000000, false],
        ];
    }

    public function provideInvalidSizes()
    {
        return [
            ['+100'],
            ['foo'],
            ['1Ko'],
            ['1kio'],
        ];
    }

    /**
     * @dataProvider provideFormats
     */
    public function testBinaryFormat(\$maxSize, \$guessedFormat, \$binaryFormat)
    {
        \$file = new File(['maxSize' => \$maxSize, 'binaryFormat' => \$guessedFormat]);

        \$this->assertSame(\$binaryFormat, \$file->binaryFormat);
    }

    public function provideFormats()
    {
        return [
            [100, null, false],
            [100, true, true],
            [100, false, false],
            ['100K', null, false],
            ['100K', true, true],
            ['100K', false, false],
            ['100Ki', null, true],
            ['100Ki', true, true],
            ['100Ki', false, false],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/FileTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\File;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

class FileTest extends TestCase
{
    /**
     * @dataProvider provideValidSizes
     */
    public function testMaxSize(\$maxSize, \$bytes, \$binaryFormat)
    {
        \$file = new File(['maxSize' => \$maxSize]);

        \$this->assertSame(\$bytes, \$file->maxSize);
        \$this->assertSame(\$binaryFormat, \$file->binaryFormat);
        \$this->assertTrue(\$file->__isset('maxSize'));
    }

    public function testMagicIsset()
    {
        \$file = new File(['maxSize' => 1]);

        \$this->assertTrue(\$file->__isset('maxSize'));
        \$this->assertTrue(\$file->__isset('groups'));
        \$this->assertFalse(\$file->__isset('toto'));
    }

    /**
     * @dataProvider provideValidSizes
     */
    public function testMaxSizeCanBeSetAfterInitialization(\$maxSize, \$bytes, \$binaryFormat)
    {
        \$file = new File();
        \$file->maxSize = \$maxSize;

        \$this->assertSame(\$bytes, \$file->maxSize);
        \$this->assertSame(\$binaryFormat, \$file->binaryFormat);
    }

    /**
     * @dataProvider provideInvalidSizes
     */
    public function testInvalidValueForMaxSizeThrowsExceptionAfterInitialization(\$maxSize)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$file = new File(['maxSize' => 1000]);
        \$file->maxSize = \$maxSize;
    }

    /**
     * @dataProvider provideInvalidSizes
     */
    public function testMaxSizeCannotBeSetToInvalidValueAfterInitialization(\$maxSize)
    {
        \$file = new File(['maxSize' => 1000]);

        try {
            \$file->maxSize = \$maxSize;
        } catch (ConstraintDefinitionException \$e) {
        }

        \$this->assertSame(1000, \$file->maxSize);
    }

    /**
     * @dataProvider provideInValidSizes
     */
    public function testInvalidMaxSize(\$maxSize)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new File(['maxSize' => \$maxSize]);
    }

    public function provideValidSizes()
    {
        return [
            ['500', 500, false],
            [12300, 12300, false],
            ['1ki', 1024, true],
            ['1KI', 1024, true],
            ['2k', 2000, false],
            ['2K', 2000, false],
            ['1mi', 1048576, true],
            ['1MI', 1048576, true],
            ['3m', 3000000, false],
            ['3M', 3000000, false],
            ['1gi', 1073741824, true],
            ['1GI', 1073741824, true],
            ['4g', 4000000000, false],
            ['4G', 4000000000, false],
        ];
    }

    public function provideInvalidSizes()
    {
        return [
            ['+100'],
            ['foo'],
            ['1Ko'],
            ['1kio'],
        ];
    }

    /**
     * @dataProvider provideFormats
     */
    public function testBinaryFormat(\$maxSize, \$guessedFormat, \$binaryFormat)
    {
        \$file = new File(['maxSize' => \$maxSize, 'binaryFormat' => \$guessedFormat]);

        \$this->assertSame(\$binaryFormat, \$file->binaryFormat);
    }

    public function provideFormats()
    {
        return [
            [100, null, false],
            [100, true, true],
            [100, false, false],
            ['100K', null, false],
            ['100K', true, true],
            ['100K', false, false],
            ['100Ki', null, true],
            ['100Ki', true, true],
            ['100Ki', false, false],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/FileTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/FileTest.php");
    }
}
