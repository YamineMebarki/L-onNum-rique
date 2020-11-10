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

/* vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/ConfigurationTest.php */
class __TwigTemplate_d6a434b184755c4156c3fc2265818314902a650e27f2875cd75ba799f7c439d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/ConfigurationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/ConfigurationTest.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Tests\\DeprecationErrorHandler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Configuration;

class ConfigurationTest extends TestCase
{
    public function testItThrowsOnStringishValue()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('hi');
        Configuration::fromUrlEncodedString('hi');
    }

    public function testItThrowsOnUnknownConfigurationOption()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('min');
        Configuration::fromUrlEncodedString('min[total]=42');
    }

    public function testItThrowsOnUnknownThreshold()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('deep');
        Configuration::fromUrlEncodedString('max[deep]=42');
    }

    public function testItThrowsOnStringishThreshold()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('forty-two');
        Configuration::fromUrlEncodedString('max[total]=forty-two');
    }

    public function testItNoticesExceededTotalThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[total]=3');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1,
            'remaining selfCount' => 0,
            'legacyCount' => 1,
            'otherCount' => 0,
            'remaining directCount' => 1,
            'remaining indirectCount' => 1,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1,
            'remaining selfCount' => 1,
            'legacyCount' => 1,
            'otherCount' => 0,
            'remaining directCount' => 1,
            'remaining indirectCount' => 1,
        ]));
    }

    public function testItNoticesExceededSelfThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[self]=1');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 1,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 124,
            'remaining indirectCount' => 3244,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 2,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 124,
            'remaining indirectCount' => 3244,
        ]));
    }

    public function testItNoticesExceededDirectThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[direct]=1&max[self]=999999');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 123,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 1,
            'remaining indirectCount' => 3244,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 124,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 2,
            'remaining indirectCount' => 3244,
        ]));
    }

    public function testItNoticesExceededIndirectThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[indirect]=1&max[direct]=999999&max[self]=999999');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 123,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 1234,
            'remaining indirectCount' => 1,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 124,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 2324,
            'remaining indirectCount' => 2,
        ]));
    }

    public function testIndirectThresholdIsUsedAsADefaultForDirectAndSelfThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[indirect]=1');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 1,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 0,
            'remaining indirectCount' => 0,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 2,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 0,
            'remaining indirectCount' => 0,
        ]));
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 0,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 1,
            'remaining indirectCount' => 0,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 0,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 2,
            'remaining indirectCount' => 0,
        ]));
    }

    public function testItCanTellWhetherToDisplayAStackTrace()
    {
        \$configuration = Configuration::fromUrlEncodedString('');
        \$this->assertFalse(\$configuration->shouldDisplayStackTrace('interesting'));

        \$configuration = Configuration::fromRegex('/^interesting/');
        \$this->assertFalse(\$configuration->shouldDisplayStackTrace('uninteresting'));
        \$this->assertTrue(\$configuration->shouldDisplayStackTrace('interesting'));
    }

    public function testItCanBeDisabled()
    {
        \$configuration = Configuration::fromUrlEncodedString('disabled');
        \$this->assertFalse(\$configuration->isEnabled());
    }

    public function testItCanBeShushed()
    {
        \$configuration = Configuration::fromUrlEncodedString('verbose');
        \$this->assertFalse(\$configuration->verboseOutput());
    }

    public function testOutputIsNotVerboseInWeakMode()
    {
        \$configuration = Configuration::inWeakMode();
        \$this->assertFalse(\$configuration->verboseOutput());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/ConfigurationTest.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Tests\\DeprecationErrorHandler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Configuration;

class ConfigurationTest extends TestCase
{
    public function testItThrowsOnStringishValue()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('hi');
        Configuration::fromUrlEncodedString('hi');
    }

    public function testItThrowsOnUnknownConfigurationOption()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('min');
        Configuration::fromUrlEncodedString('min[total]=42');
    }

    public function testItThrowsOnUnknownThreshold()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('deep');
        Configuration::fromUrlEncodedString('max[deep]=42');
    }

    public function testItThrowsOnStringishThreshold()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('forty-two');
        Configuration::fromUrlEncodedString('max[total]=forty-two');
    }

    public function testItNoticesExceededTotalThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[total]=3');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1,
            'remaining selfCount' => 0,
            'legacyCount' => 1,
            'otherCount' => 0,
            'remaining directCount' => 1,
            'remaining indirectCount' => 1,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1,
            'remaining selfCount' => 1,
            'legacyCount' => 1,
            'otherCount' => 0,
            'remaining directCount' => 1,
            'remaining indirectCount' => 1,
        ]));
    }

    public function testItNoticesExceededSelfThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[self]=1');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 1,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 124,
            'remaining indirectCount' => 3244,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 2,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 124,
            'remaining indirectCount' => 3244,
        ]));
    }

    public function testItNoticesExceededDirectThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[direct]=1&max[self]=999999');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 123,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 1,
            'remaining indirectCount' => 3244,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 124,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 2,
            'remaining indirectCount' => 3244,
        ]));
    }

    public function testItNoticesExceededIndirectThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[indirect]=1&max[direct]=999999&max[self]=999999');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 123,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 1234,
            'remaining indirectCount' => 1,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 1234,
            'remaining selfCount' => 124,
            'legacyCount' => 23,
            'otherCount' => 13,
            'remaining directCount' => 2324,
            'remaining indirectCount' => 2,
        ]));
    }

    public function testIndirectThresholdIsUsedAsADefaultForDirectAndSelfThreshold()
    {
        \$configuration = Configuration::fromUrlEncodedString('max[indirect]=1');
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 1,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 0,
            'remaining indirectCount' => 0,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 2,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 0,
            'remaining indirectCount' => 0,
        ]));
        \$this->assertTrue(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 0,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 1,
            'remaining indirectCount' => 0,
        ]));
        \$this->assertFalse(\$configuration->tolerates([
            'unsilencedCount' => 0,
            'remaining selfCount' => 0,
            'legacyCount' => 0,
            'otherCount' => 0,
            'remaining directCount' => 2,
            'remaining indirectCount' => 0,
        ]));
    }

    public function testItCanTellWhetherToDisplayAStackTrace()
    {
        \$configuration = Configuration::fromUrlEncodedString('');
        \$this->assertFalse(\$configuration->shouldDisplayStackTrace('interesting'));

        \$configuration = Configuration::fromRegex('/^interesting/');
        \$this->assertFalse(\$configuration->shouldDisplayStackTrace('uninteresting'));
        \$this->assertTrue(\$configuration->shouldDisplayStackTrace('interesting'));
    }

    public function testItCanBeDisabled()
    {
        \$configuration = Configuration::fromUrlEncodedString('disabled');
        \$this->assertFalse(\$configuration->isEnabled());
    }

    public function testItCanBeShushed()
    {
        \$configuration = Configuration::fromUrlEncodedString('verbose');
        \$this->assertFalse(\$configuration->verboseOutput());
    }

    public function testOutputIsNotVerboseInWeakMode()
    {
        \$configuration = Configuration::inWeakMode();
        \$this->assertFalse(\$configuration->verboseOutput());
    }
}
", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/ConfigurationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/ConfigurationTest.php");
    }
}
