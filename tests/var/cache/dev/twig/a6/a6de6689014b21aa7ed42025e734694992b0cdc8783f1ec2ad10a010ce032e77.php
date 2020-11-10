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

/* vendor/symfony/form/Tests/Extension/Core/Type/IntegerTypeTest.php */
class __TwigTemplate_c81a253d76187fcff57fd4df200875eec4dfe2360be6bababf2a2ccda01c28ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/IntegerTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/IntegerTypeTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class IntegerTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType';

    protected function setUp(): void
    {
        IntlTestHelper::requireIntl(\$this, false);

        parent::setUp();
    }

    public function testSubmitRejectsFloats()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);

        \$form->submit('1.678');

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertFalse(\$form->isValid());
        \$this->assertFalse(\$form->isSynchronized());
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = '10', \$expectedData = 10)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    public function testSubmittedLargeIntegersAreNotCastToFloat()
    {
        if (4 === \\PHP_INT_SIZE) {
            \$this->markTestSkipped('This test requires a 64bit PHP.');
        }

        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit('201803221011791');

        \$this->assertSame(201803221011791, \$form->getData());
        \$this->assertSame('201803221011791', \$form->getViewData());
    }

    public function testTooSmallIntegersAreNotValid()
    {
        if (4 === \\PHP_INT_SIZE) {
            \$min = '-2147483649';
        } else {
            \$min = '-9223372036854775808';
        }

        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit(\$min);

        \$this->assertFalse(\$form->isSynchronized());
    }

    public function testTooGreatIntegersAreNotValid()
    {
        if (4 === \\PHP_INT_SIZE) {
            \$max = '2147483648';
        } else {
            \$max = '9223372036854775808';
        }

        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit(\$max);

        \$this->assertFalse(\$form->isSynchronized());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/IntegerTypeTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class IntegerTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType';

    protected function setUp(): void
    {
        IntlTestHelper::requireIntl(\$this, false);

        parent::setUp();
    }

    public function testSubmitRejectsFloats()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);

        \$form->submit('1.678');

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertFalse(\$form->isValid());
        \$this->assertFalse(\$form->isSynchronized());
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = '10', \$expectedData = 10)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    public function testSubmittedLargeIntegersAreNotCastToFloat()
    {
        if (4 === \\PHP_INT_SIZE) {
            \$this->markTestSkipped('This test requires a 64bit PHP.');
        }

        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit('201803221011791');

        \$this->assertSame(201803221011791, \$form->getData());
        \$this->assertSame('201803221011791', \$form->getViewData());
    }

    public function testTooSmallIntegersAreNotValid()
    {
        if (4 === \\PHP_INT_SIZE) {
            \$min = '-2147483649';
        } else {
            \$min = '-9223372036854775808';
        }

        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit(\$min);

        \$this->assertFalse(\$form->isSynchronized());
    }

    public function testTooGreatIntegersAreNotValid()
    {
        if (4 === \\PHP_INT_SIZE) {
            \$max = '2147483648';
        } else {
            \$max = '9223372036854775808';
        }

        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit(\$max);

        \$this->assertFalse(\$form->isSynchronized());
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/IntegerTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/IntegerTypeTest.php");
    }
}
