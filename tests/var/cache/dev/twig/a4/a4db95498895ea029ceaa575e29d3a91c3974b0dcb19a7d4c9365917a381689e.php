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

/* vendor/symfony/intl/Tests/Util/VersionTest.php */
class __TwigTemplate_1ff590a1b74e9b2b036c44e4b7d0df3adc172c6dacca34c93d11ca5b83466e60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Util/VersionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Util/VersionTest.php"));

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
use Symfony\\Component\\Intl\\Util\\Version;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class VersionTest extends TestCase
{
    public function normalizeProvider()
    {
        return [
            [null, '1', '1'],
            [null, '1.2', '1.2'],
            [null, '1.2.3', '1.2.3'],
            [null, '1.2.3.4', '1.2.3.4'],
            [1, '1', '1'],
            [1, '1.2', '1'],
            [1, '1.2.3', '1'],
            [1, '1.2.3.4', '1'],
            [2, '1', '1'],
            [2, '1.2', '1.2'],
            [2, '1.2.3', '1.2'],
            [2, '1.2.3.4', '1.2'],
            [3, '1', '1'],
            [3, '1.2', '1.2'],
            [3, '1.2.3', '1.2.3'],
            [3, '1.2.3.4', '1.2.3'],
            [4, '1', '1'],
            [4, '1.2', '1.2'],
            [4, '1.2.3', '1.2.3'],
            [4, '1.2.3.4', '1.2.3.4'],
        ];
    }

    /**
     * @dataProvider normalizeProvider
     */
    public function testNormalize(\$precision, \$version, \$result)
    {
        \$this->assertSame(\$result, Version::normalize(\$version, \$precision));
    }

    public function compareProvider()
    {
        return [
            [null, '1', '==', '1', true],
            [null, '1.0', '==', '1.1', false],
            [null, '1.0.0', '==', '1.0.1', false],
            [null, '1.0.0.0', '==', '1.0.0.1', false],

            [1, '1', '==', '1', true],
            [1, '1.0', '==', '1.1', true],
            [1, '1.0.0', '==', '1.0.1', true],
            [1, '1.0.0.0', '==', '1.0.0.1', true],

            [2, '1', '==', '1', true],
            [2, '1.0', '==', '1.1', false],
            [2, '1.0.0', '==', '1.0.1', true],
            [2, '1.0.0.0', '==', '1.0.0.1', true],

            [3, '1', '==', '1', true],
            [3, '1.0', '==', '1.1', false],
            [3, '1.0.0', '==', '1.0.1', false],
            [3, '1.0.0.0', '==', '1.0.0.1', true],
        ];
    }

    /**
     * @dataProvider compareProvider
     */
    public function testCompare(\$precision, \$version1, \$operator, \$version2, \$result)
    {
        \$this->assertSame(\$result, Version::compare(\$version1, \$version2, \$operator, \$precision));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Util/VersionTest.php";
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
use Symfony\\Component\\Intl\\Util\\Version;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class VersionTest extends TestCase
{
    public function normalizeProvider()
    {
        return [
            [null, '1', '1'],
            [null, '1.2', '1.2'],
            [null, '1.2.3', '1.2.3'],
            [null, '1.2.3.4', '1.2.3.4'],
            [1, '1', '1'],
            [1, '1.2', '1'],
            [1, '1.2.3', '1'],
            [1, '1.2.3.4', '1'],
            [2, '1', '1'],
            [2, '1.2', '1.2'],
            [2, '1.2.3', '1.2'],
            [2, '1.2.3.4', '1.2'],
            [3, '1', '1'],
            [3, '1.2', '1.2'],
            [3, '1.2.3', '1.2.3'],
            [3, '1.2.3.4', '1.2.3'],
            [4, '1', '1'],
            [4, '1.2', '1.2'],
            [4, '1.2.3', '1.2.3'],
            [4, '1.2.3.4', '1.2.3.4'],
        ];
    }

    /**
     * @dataProvider normalizeProvider
     */
    public function testNormalize(\$precision, \$version, \$result)
    {
        \$this->assertSame(\$result, Version::normalize(\$version, \$precision));
    }

    public function compareProvider()
    {
        return [
            [null, '1', '==', '1', true],
            [null, '1.0', '==', '1.1', false],
            [null, '1.0.0', '==', '1.0.1', false],
            [null, '1.0.0.0', '==', '1.0.0.1', false],

            [1, '1', '==', '1', true],
            [1, '1.0', '==', '1.1', true],
            [1, '1.0.0', '==', '1.0.1', true],
            [1, '1.0.0.0', '==', '1.0.0.1', true],

            [2, '1', '==', '1', true],
            [2, '1.0', '==', '1.1', false],
            [2, '1.0.0', '==', '1.0.1', true],
            [2, '1.0.0.0', '==', '1.0.0.1', true],

            [3, '1', '==', '1', true],
            [3, '1.0', '==', '1.1', false],
            [3, '1.0.0', '==', '1.0.1', false],
            [3, '1.0.0.0', '==', '1.0.0.1', true],
        ];
    }

    /**
     * @dataProvider compareProvider
     */
    public function testCompare(\$precision, \$version1, \$operator, \$version2, \$result)
    {
        \$this->assertSame(\$result, Version::compare(\$version1, \$version2, \$operator, \$precision));
    }
}
", "vendor/symfony/intl/Tests/Util/VersionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Util/VersionTest.php");
    }
}
