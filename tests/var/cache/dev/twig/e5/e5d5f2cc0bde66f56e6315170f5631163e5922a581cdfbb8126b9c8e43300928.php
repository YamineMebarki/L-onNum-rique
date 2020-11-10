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

/* vendor/symfony/intl/Tests/NumberFormatter/Verification/NumberFormatterTest.php */
class __TwigTemplate_d85064e3f678ec09afd8f218b10f8e4748c893a9c3b8dafaa88547292adc5a2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/NumberFormatter/Verification/NumberFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/NumberFormatter/Verification/NumberFormatterTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\NumberFormatter\\Verification;

use Symfony\\Component\\Intl\\Tests\\NumberFormatter\\AbstractNumberFormatterTest;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

/**
 * Note that there are some values written like -2147483647 - 1. This is the lower 32bit int max and is a known
 * behavior of PHP.
 */
class NumberFormatterTest extends AbstractNumberFormatterTest
{
    protected function setUp(): void
    {
        IntlTestHelper::requireFullIntl(\$this, '55.1');

        parent::setUp();
    }

    public function testCreate()
    {
        \$this->assertInstanceOf('\\NumberFormatter', \\NumberFormatter::create('en', \\NumberFormatter::DECIMAL));
    }

    public function testGetTextAttribute()
    {
        IntlTestHelper::requireFullIntl(\$this, '57.1');

        parent::testGetTextAttribute();
    }

    protected function getNumberFormatter(\$locale = 'en', \$style = null, \$pattern = null)
    {
        return new \\NumberFormatter(\$locale, \$style, \$pattern);
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
        return "vendor/symfony/intl/Tests/NumberFormatter/Verification/NumberFormatterTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\NumberFormatter\\Verification;

use Symfony\\Component\\Intl\\Tests\\NumberFormatter\\AbstractNumberFormatterTest;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

/**
 * Note that there are some values written like -2147483647 - 1. This is the lower 32bit int max and is a known
 * behavior of PHP.
 */
class NumberFormatterTest extends AbstractNumberFormatterTest
{
    protected function setUp(): void
    {
        IntlTestHelper::requireFullIntl(\$this, '55.1');

        parent::setUp();
    }

    public function testCreate()
    {
        \$this->assertInstanceOf('\\NumberFormatter', \\NumberFormatter::create('en', \\NumberFormatter::DECIMAL));
    }

    public function testGetTextAttribute()
    {
        IntlTestHelper::requireFullIntl(\$this, '57.1');

        parent::testGetTextAttribute();
    }

    protected function getNumberFormatter(\$locale = 'en', \$style = null, \$pattern = null)
    {
        return new \\NumberFormatter(\$locale, \$style, \$pattern);
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
", "vendor/symfony/intl/Tests/NumberFormatter/Verification/NumberFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/NumberFormatter/Verification/NumberFormatterTest.php");
    }
}
