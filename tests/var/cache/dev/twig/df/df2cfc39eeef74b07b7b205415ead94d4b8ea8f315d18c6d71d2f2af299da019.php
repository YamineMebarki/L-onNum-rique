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

/* vendor/symfony/intl/Util/IntlTestHelper.php */
class __TwigTemplate_67a01dcc75c1a72b5dcdce11aa54e332e8ae41bcfbc48abe3358e7cb1b7532f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/IntlTestHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/IntlTestHelper.php"));

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

namespace Symfony\\Component\\Intl\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Intl;

/**
 * Helper class for preparing test cases that rely on the Intl component.
 *
 * Any test that tests functionality relying on either the intl classes or
 * the resource bundle data should call either of the methods
 * {@link requireIntl()} or {@link requireFullIntl()}. Calling
 * {@link requireFullIntl()} is only necessary if you use functionality in the
 * test that is not provided by the stub intl implementation.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntlTestHelper
{
    /**
     * Should be called before tests that work fine with the stub implementation.
     */
    public static function requireIntl(TestCase \$testCase, \$minimumIcuVersion = null)
    {
        if (null === \$minimumIcuVersion) {
            \$minimumIcuVersion = Intl::getIcuStubVersion();
        }

        // We only run tests if the version is *one specific version*.
        // This condition is satisfied if
        //
        //   * the intl extension is loaded with version Intl::getIcuStubVersion()
        //   * the intl extension is not loaded

        if (\$minimumIcuVersion && IcuVersion::compare(Intl::getIcuVersion(), \$minimumIcuVersion, '<', 1)) {
            \$testCase->markTestSkipped('ICU version '.\$minimumIcuVersion.' is required.');
        }

        // Normalize the default locale in case this is not done explicitly
        // in the test
        \\Locale::setDefault('en');

        // Consequently, tests will
        //
        //   * run only for one ICU version (see Intl::getIcuStubVersion())
        //     there is no need to add control structures to your tests that
        //     change the test depending on the ICU version.
        //
        // Tests should only rely on functionality that is implemented in the
        // stub classes.
    }

    /**
     * Should be called before tests that require a feature-complete intl
     * implementation.
     */
    public static function requireFullIntl(TestCase \$testCase, \$minimumIcuVersion = null)
    {
        // We only run tests if the intl extension is loaded...
        if (!Intl::isExtensionLoaded()) {
            \$testCase->markTestSkipped('Extension intl is required.');
        }

        self::requireIntl(\$testCase, \$minimumIcuVersion);

        // Consequently, tests will
        //
        //   * run only for one ICU version (see Intl::getIcuStubVersion())
        //     there is no need to add control structures to your tests that
        //     change the test depending on the ICU version.
        //   * always use the C intl classes
    }

    /**
     * Skips the test unless the current system has a 32bit architecture.
     */
    public static function require32Bit(TestCase \$testCase)
    {
        if (4 !== PHP_INT_SIZE) {
            \$testCase->markTestSkipped('PHP 32 bit is required.');
        }
    }

    /**
     * Skips the test unless the current system has a 64bit architecture.
     */
    public static function require64Bit(TestCase \$testCase)
    {
        if (8 !== PHP_INT_SIZE) {
            \$testCase->markTestSkipped('PHP 64 bit is required.');
        }
    }

    /**
     * Must not be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Util/IntlTestHelper.php";
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

namespace Symfony\\Component\\Intl\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Intl;

/**
 * Helper class for preparing test cases that rely on the Intl component.
 *
 * Any test that tests functionality relying on either the intl classes or
 * the resource bundle data should call either of the methods
 * {@link requireIntl()} or {@link requireFullIntl()}. Calling
 * {@link requireFullIntl()} is only necessary if you use functionality in the
 * test that is not provided by the stub intl implementation.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntlTestHelper
{
    /**
     * Should be called before tests that work fine with the stub implementation.
     */
    public static function requireIntl(TestCase \$testCase, \$minimumIcuVersion = null)
    {
        if (null === \$minimumIcuVersion) {
            \$minimumIcuVersion = Intl::getIcuStubVersion();
        }

        // We only run tests if the version is *one specific version*.
        // This condition is satisfied if
        //
        //   * the intl extension is loaded with version Intl::getIcuStubVersion()
        //   * the intl extension is not loaded

        if (\$minimumIcuVersion && IcuVersion::compare(Intl::getIcuVersion(), \$minimumIcuVersion, '<', 1)) {
            \$testCase->markTestSkipped('ICU version '.\$minimumIcuVersion.' is required.');
        }

        // Normalize the default locale in case this is not done explicitly
        // in the test
        \\Locale::setDefault('en');

        // Consequently, tests will
        //
        //   * run only for one ICU version (see Intl::getIcuStubVersion())
        //     there is no need to add control structures to your tests that
        //     change the test depending on the ICU version.
        //
        // Tests should only rely on functionality that is implemented in the
        // stub classes.
    }

    /**
     * Should be called before tests that require a feature-complete intl
     * implementation.
     */
    public static function requireFullIntl(TestCase \$testCase, \$minimumIcuVersion = null)
    {
        // We only run tests if the intl extension is loaded...
        if (!Intl::isExtensionLoaded()) {
            \$testCase->markTestSkipped('Extension intl is required.');
        }

        self::requireIntl(\$testCase, \$minimumIcuVersion);

        // Consequently, tests will
        //
        //   * run only for one ICU version (see Intl::getIcuStubVersion())
        //     there is no need to add control structures to your tests that
        //     change the test depending on the ICU version.
        //   * always use the C intl classes
    }

    /**
     * Skips the test unless the current system has a 32bit architecture.
     */
    public static function require32Bit(TestCase \$testCase)
    {
        if (4 !== PHP_INT_SIZE) {
            \$testCase->markTestSkipped('PHP 32 bit is required.');
        }
    }

    /**
     * Skips the test unless the current system has a 64bit architecture.
     */
    public static function require64Bit(TestCase \$testCase)
    {
        if (8 !== PHP_INT_SIZE) {
            \$testCase->markTestSkipped('PHP 64 bit is required.');
        }
    }

    /**
     * Must not be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/intl/Util/IntlTestHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Util/IntlTestHelper.php");
    }
}
