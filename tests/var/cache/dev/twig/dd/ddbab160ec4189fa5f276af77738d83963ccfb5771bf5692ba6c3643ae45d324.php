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

/* vendor/symfony/intl/Tests/Util/IcuVersionTest.php */
class __TwigTemplate_3f94e94fd3828a008f7fb7a320773e99559284c99e6320824577bd06e905b208 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Util/IcuVersionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Util/IcuVersionTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Util\\IcuVersion;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IcuVersionTest extends TestCase
{
    public function normalizeProvider()
    {
        return [
            [null, '1', '10'],
            [null, '1.2', '12'],
            [null, '1.2.3', '12.3'],
            [null, '1.2.3.4', '12.3.4'],
            [1, '1', '10'],
            [1, '1.2', '12'],
            [1, '1.2.3', '12'],
            [1, '1.2.3.4', '12'],
            [2, '1', '10'],
            [2, '1.2', '12'],
            [2, '1.2.3', '12.3'],
            [2, '1.2.3.4', '12.3'],
            [3, '1', '10'],
            [3, '1.2', '12'],
            [3, '1.2.3', '12.3'],
            [3, '1.2.3.4', '12.3.4'],
        ];
    }

    /**
     * @dataProvider normalizeProvider
     */
    public function testNormalize(\$precision, \$version, \$result)
    {
        \$this->assertSame(\$result, IcuVersion::normalize(\$version, \$precision));
    }

    public function compareProvider()
    {
        return [
            [null, '1', '==', '1', true],
            [null, '1.0', '==', '1.1', false],
            [null, '1.0.0', '==', '1.0.1', false],
            [null, '1.0.0.0', '==', '1.0.0.1', false],
            [null, '1.0.0.0.0', '==', '1.0.0.0.1', false],

            [null, '1', '==', '10', true],
            [null, '1.0', '==', '11', false],
            [null, '1.0.0', '==', '10.1', false],
            [null, '1.0.0.0', '==', '10.0.1', false],
            [null, '1.0.0.0.0', '==', '10.0.0.1', false],

            [1, '1', '==', '1', true],
            [1, '1.0', '==', '1.1', false],
            [1, '1.0.0', '==', '1.0.1', true],
            [1, '1.0.0.0', '==', '1.0.0.1', true],
            [1, '1.0.0.0.0', '==', '1.0.0.0.1', true],

            [1, '1', '==', '10', true],
            [1, '1.0', '==', '11', false],
            [1, '1.0.0', '==', '10.1', true],
            [1, '1.0.0.0', '==', '10.0.1', true],
            [1, '1.0.0.0.0', '==', '10.0.0.1', true],

            [2, '1', '==', '1', true],
            [2, '1.0', '==', '1.1', false],
            [2, '1.0.0', '==', '1.0.1', false],
            [2, '1.0.0.0', '==', '1.0.0.1', true],
            [2, '1.0.0.0.0', '==', '1.0.0.0.1', true],

            [2, '1', '==', '10', true],
            [2, '1.0', '==', '11', false],
            [2, '1.0.0', '==', '10.1', false],
            [2, '1.0.0.0', '==', '10.0.1', true],
            [2, '1.0.0.0.0', '==', '10.0.0.1', true],

            [3, '1', '==', '1', true],
            [3, '1.0', '==', '1.1', false],
            [3, '1.0.0', '==', '1.0.1', false],
            [3, '1.0.0.0', '==', '1.0.0.1', false],
            [3, '1.0.0.0.0', '==', '1.0.0.0.1', true],

            [3, '1', '==', '10', true],
            [3, '1.0', '==', '11', false],
            [3, '1.0.0', '==', '10.1', false],
            [3, '1.0.0.0', '==', '10.0.1', false],
            [3, '1.0.0.0.0', '==', '10.0.0.1', true],
        ];
    }

    /**
     * @dataProvider compareProvider
     */
    public function testCompare(\$precision, \$version1, \$operator, \$version2, \$result)
    {
        \$this->assertSame(\$result, IcuVersion::compare(\$version1, \$version2, \$operator, \$precision));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Util/IcuVersionTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Util\\IcuVersion;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IcuVersionTest extends TestCase
{
    public function normalizeProvider()
    {
        return [
            [null, '1', '10'],
            [null, '1.2', '12'],
            [null, '1.2.3', '12.3'],
            [null, '1.2.3.4', '12.3.4'],
            [1, '1', '10'],
            [1, '1.2', '12'],
            [1, '1.2.3', '12'],
            [1, '1.2.3.4', '12'],
            [2, '1', '10'],
            [2, '1.2', '12'],
            [2, '1.2.3', '12.3'],
            [2, '1.2.3.4', '12.3'],
            [3, '1', '10'],
            [3, '1.2', '12'],
            [3, '1.2.3', '12.3'],
            [3, '1.2.3.4', '12.3.4'],
        ];
    }

    /**
     * @dataProvider normalizeProvider
     */
    public function testNormalize(\$precision, \$version, \$result)
    {
        \$this->assertSame(\$result, IcuVersion::normalize(\$version, \$precision));
    }

    public function compareProvider()
    {
        return [
            [null, '1', '==', '1', true],
            [null, '1.0', '==', '1.1', false],
            [null, '1.0.0', '==', '1.0.1', false],
            [null, '1.0.0.0', '==', '1.0.0.1', false],
            [null, '1.0.0.0.0', '==', '1.0.0.0.1', false],

            [null, '1', '==', '10', true],
            [null, '1.0', '==', '11', false],
            [null, '1.0.0', '==', '10.1', false],
            [null, '1.0.0.0', '==', '10.0.1', false],
            [null, '1.0.0.0.0', '==', '10.0.0.1', false],

            [1, '1', '==', '1', true],
            [1, '1.0', '==', '1.1', false],
            [1, '1.0.0', '==', '1.0.1', true],
            [1, '1.0.0.0', '==', '1.0.0.1', true],
            [1, '1.0.0.0.0', '==', '1.0.0.0.1', true],

            [1, '1', '==', '10', true],
            [1, '1.0', '==', '11', false],
            [1, '1.0.0', '==', '10.1', true],
            [1, '1.0.0.0', '==', '10.0.1', true],
            [1, '1.0.0.0.0', '==', '10.0.0.1', true],

            [2, '1', '==', '1', true],
            [2, '1.0', '==', '1.1', false],
            [2, '1.0.0', '==', '1.0.1', false],
            [2, '1.0.0.0', '==', '1.0.0.1', true],
            [2, '1.0.0.0.0', '==', '1.0.0.0.1', true],

            [2, '1', '==', '10', true],
            [2, '1.0', '==', '11', false],
            [2, '1.0.0', '==', '10.1', false],
            [2, '1.0.0.0', '==', '10.0.1', true],
            [2, '1.0.0.0.0', '==', '10.0.0.1', true],

            [3, '1', '==', '1', true],
            [3, '1.0', '==', '1.1', false],
            [3, '1.0.0', '==', '1.0.1', false],
            [3, '1.0.0.0', '==', '1.0.0.1', false],
            [3, '1.0.0.0.0', '==', '1.0.0.0.1', true],

            [3, '1', '==', '10', true],
            [3, '1.0', '==', '11', false],
            [3, '1.0.0', '==', '10.1', false],
            [3, '1.0.0.0', '==', '10.0.1', false],
            [3, '1.0.0.0.0', '==', '10.0.0.1', true],
        ];
    }

    /**
     * @dataProvider compareProvider
     */
    public function testCompare(\$precision, \$version1, \$operator, \$version2, \$result)
    {
        \$this->assertSame(\$result, IcuVersion::compare(\$version1, \$version2, \$operator, \$precision));
    }
}
", "vendor/symfony/intl/Tests/Util/IcuVersionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Util/IcuVersionTest.php");
    }
}
