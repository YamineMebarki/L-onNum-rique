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

/* vendor/symfony/intl/Tests/DateFormatter/Verification/IntlDateFormatterTest.php */
class __TwigTemplate_5bfd52c0b52bbb0ab982ea012c8a76bde0c5a1e0a8fd43d52918109d876e3e26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/DateFormatter/Verification/IntlDateFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/DateFormatter/Verification/IntlDateFormatterTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\DateFormatter\\Verification;

use Symfony\\Component\\Intl\\DateFormatter\\IntlDateFormatter;
use Symfony\\Component\\Intl\\Tests\\DateFormatter\\AbstractIntlDateFormatterTest;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

/**
 * Verifies that {@link AbstractIntlDateFormatterTest} matches the behavior of
 * the {@link \\IntlDateFormatter} class in a specific version of ICU.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntlDateFormatterTest extends AbstractIntlDateFormatterTest
{
    protected function setUp(): void
    {
        IntlTestHelper::requireFullIntl(\$this, false);

        parent::setUp();
    }

    /**
     * @dataProvider formatTimezoneProvider
     */
    public function testFormatTimezone(\$pattern, \$timezone, \$expected)
    {
        IntlTestHelper::requireFullIntl(\$this, '59.1');

        parent::testFormatTimezone(\$pattern, \$timezone, \$expected);
    }

    public function testFormatUtcAndGmtAreSplit()
    {
        IntlTestHelper::requireFullIntl(\$this, '59.1');

        parent::testFormatUtcAndGmtAreSplit();
    }

    /**
     * @dataProvider dateAndTimeTypeProvider
     */
    public function testDateAndTimeType(\$timestamp, \$datetype, \$timetype, \$expected)
    {
        IntlTestHelper::requireFullIntl(\$this, '59.1');

        parent::testDateAndTimeType(\$timestamp, \$datetype, \$timetype, \$expected);
    }

    protected function getDateFormatter(\$locale, \$datetype, \$timetype, \$timezone = null, \$calendar = IntlDateFormatter::GREGORIAN, \$pattern = null)
    {
        IntlTestHelper::requireFullIntl(\$this, '55.1');

        if (!\$formatter = new \\IntlDateFormatter(\$locale, \$datetype, \$timetype, \$timezone, \$calendar, \$pattern)) {
            throw new \\InvalidArgumentException(intl_get_error_message());
        }

        return \$formatter;
    }

    protected function getIntlErrorMessage()
    {
        return intl_get_error_message();
    }

    protected function getIntlErrorCode()
    {
        return intl_get_error_code();
    }

    protected function isIntlFailure(\$errorCode)
    {
        return intl_is_failure(\$errorCode);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/DateFormatter/Verification/IntlDateFormatterTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\DateFormatter\\Verification;

use Symfony\\Component\\Intl\\DateFormatter\\IntlDateFormatter;
use Symfony\\Component\\Intl\\Tests\\DateFormatter\\AbstractIntlDateFormatterTest;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

/**
 * Verifies that {@link AbstractIntlDateFormatterTest} matches the behavior of
 * the {@link \\IntlDateFormatter} class in a specific version of ICU.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntlDateFormatterTest extends AbstractIntlDateFormatterTest
{
    protected function setUp(): void
    {
        IntlTestHelper::requireFullIntl(\$this, false);

        parent::setUp();
    }

    /**
     * @dataProvider formatTimezoneProvider
     */
    public function testFormatTimezone(\$pattern, \$timezone, \$expected)
    {
        IntlTestHelper::requireFullIntl(\$this, '59.1');

        parent::testFormatTimezone(\$pattern, \$timezone, \$expected);
    }

    public function testFormatUtcAndGmtAreSplit()
    {
        IntlTestHelper::requireFullIntl(\$this, '59.1');

        parent::testFormatUtcAndGmtAreSplit();
    }

    /**
     * @dataProvider dateAndTimeTypeProvider
     */
    public function testDateAndTimeType(\$timestamp, \$datetype, \$timetype, \$expected)
    {
        IntlTestHelper::requireFullIntl(\$this, '59.1');

        parent::testDateAndTimeType(\$timestamp, \$datetype, \$timetype, \$expected);
    }

    protected function getDateFormatter(\$locale, \$datetype, \$timetype, \$timezone = null, \$calendar = IntlDateFormatter::GREGORIAN, \$pattern = null)
    {
        IntlTestHelper::requireFullIntl(\$this, '55.1');

        if (!\$formatter = new \\IntlDateFormatter(\$locale, \$datetype, \$timetype, \$timezone, \$calendar, \$pattern)) {
            throw new \\InvalidArgumentException(intl_get_error_message());
        }

        return \$formatter;
    }

    protected function getIntlErrorMessage()
    {
        return intl_get_error_message();
    }

    protected function getIntlErrorCode()
    {
        return intl_get_error_code();
    }

    protected function isIntlFailure(\$errorCode)
    {
        return intl_is_failure(\$errorCode);
    }
}
", "vendor/symfony/intl/Tests/DateFormatter/Verification/IntlDateFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/DateFormatter/Verification/IntlDateFormatterTest.php");
    }
}
