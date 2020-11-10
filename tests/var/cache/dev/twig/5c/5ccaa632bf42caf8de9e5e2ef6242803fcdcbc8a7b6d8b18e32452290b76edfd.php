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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformerTest.php */
class __TwigTemplate_c85ad3d702f41ec70223c377e88362b228ace153cbac010469235af36df1fbe8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\MoneyToLocalizedStringTransformer;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class MoneyToLocalizedStringTransformerTest extends TestCase
{
    private \$previousLocale;

    protected function setUp(): void
    {
        \$this->previousLocale = setlocale(LC_ALL, '0');
    }

    protected function tearDown(): void
    {
        setlocale(LC_ALL, \$this->previousLocale);
    }

    public function testTransform()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->assertEquals('1,23', \$transformer->transform(123));
    }

    public function testTransformExpectsNumeric()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('abcd');
    }

    public function testTransformEmpty()
    {
        \$transformer = new MoneyToLocalizedStringTransformer();

        \$this->assertSame('', \$transformer->transform(null));
    }

    public function testReverseTransform()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->assertEquals(123, \$transformer->reverseTransform('1,23'));
    }

    public function testReverseTransformExpectsString()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->reverseTransform(12345);
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new MoneyToLocalizedStringTransformer();

        \$this->assertNull(\$transformer->reverseTransform(''));
    }

    public function testFloatToIntConversionMismatchOnReverseTransform()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);
        IntlTestHelper::requireFullIntl(\$this, false);
        \\Locale::setDefault('de_AT');

        \$this->assertSame(3655, (int) \$transformer->reverseTransform('36,55'));
    }

    public function testFloatToIntConversionMismatchOnTransform()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, MoneyToLocalizedStringTransformer::ROUND_DOWN, 100);
        IntlTestHelper::requireFullIntl(\$this, false);
        \\Locale::setDefault('de_AT');

        \$this->assertSame('10,20', \$transformer->transform(1020));
    }

    public function testValidNumericValuesWithNonDotDecimalPointCharacter()
    {
        // calling setlocale() here is important as it changes the representation of floats when being cast to strings
        setlocale(LC_ALL, 'de_AT.UTF-8');

        \$transformer = new MoneyToLocalizedStringTransformer(4, null, null, 100);
        IntlTestHelper::requireFullIntl(\$this, false);
        \\Locale::setDefault('de_AT');

        \$this->assertSame('0,0035', \$transformer->transform(12 / 34));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\MoneyToLocalizedStringTransformer;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class MoneyToLocalizedStringTransformerTest extends TestCase
{
    private \$previousLocale;

    protected function setUp(): void
    {
        \$this->previousLocale = setlocale(LC_ALL, '0');
    }

    protected function tearDown(): void
    {
        setlocale(LC_ALL, \$this->previousLocale);
    }

    public function testTransform()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->assertEquals('1,23', \$transformer->transform(123));
    }

    public function testTransformExpectsNumeric()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->transform('abcd');
    }

    public function testTransformEmpty()
    {
        \$transformer = new MoneyToLocalizedStringTransformer();

        \$this->assertSame('', \$transformer->transform(null));
    }

    public function testReverseTransform()
    {
        // Since we test against \"de_AT\", we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('de_AT');

        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->assertEquals(123, \$transformer->reverseTransform('1,23'));
    }

    public function testReverseTransformExpectsString()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);

        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');

        \$transformer->reverseTransform(12345);
    }

    public function testReverseTransformEmpty()
    {
        \$transformer = new MoneyToLocalizedStringTransformer();

        \$this->assertNull(\$transformer->reverseTransform(''));
    }

    public function testFloatToIntConversionMismatchOnReverseTransform()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 100);
        IntlTestHelper::requireFullIntl(\$this, false);
        \\Locale::setDefault('de_AT');

        \$this->assertSame(3655, (int) \$transformer->reverseTransform('36,55'));
    }

    public function testFloatToIntConversionMismatchOnTransform()
    {
        \$transformer = new MoneyToLocalizedStringTransformer(null, null, MoneyToLocalizedStringTransformer::ROUND_DOWN, 100);
        IntlTestHelper::requireFullIntl(\$this, false);
        \\Locale::setDefault('de_AT');

        \$this->assertSame('10,20', \$transformer->transform(1020));
    }

    public function testValidNumericValuesWithNonDotDecimalPointCharacter()
    {
        // calling setlocale() here is important as it changes the representation of floats when being cast to strings
        setlocale(LC_ALL, 'de_AT.UTF-8');

        \$transformer = new MoneyToLocalizedStringTransformer(4, null, null, 100);
        IntlTestHelper::requireFullIntl(\$this, false);
        \\Locale::setDefault('de_AT');

        \$this->assertSame('0,0035', \$transformer->transform(12 / 34));
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformerTest.php");
    }
}
