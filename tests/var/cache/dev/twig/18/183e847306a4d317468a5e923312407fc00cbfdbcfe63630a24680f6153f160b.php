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

/* vendor/symfony/console/Tests/Helper/HelperTest.php */
class __TwigTemplate_30b31ec84e550db1e8bea660e83fce8f0493106ce16bac0a8bef352e3b58519e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/HelperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/HelperTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Helper\\Helper;

class HelperTest extends TestCase
{
    public function formatTimeProvider()
    {
        return [
            [0,      '< 1 sec'],
            [1,      '1 sec'],
            [2,      '2 secs'],
            [59,     '59 secs'],
            [60,     '1 min'],
            [61,     '1 min'],
            [119,    '1 min'],
            [120,    '2 mins'],
            [121,    '2 mins'],
            [3599,   '59 mins'],
            [3600,   '1 hr'],
            [7199,   '1 hr'],
            [7200,   '2 hrs'],
            [7201,   '2 hrs'],
            [86399,  '23 hrs'],
            [86400,  '1 day'],
            [86401,  '1 day'],
            [172799, '1 day'],
            [172800, '2 days'],
            [172801, '2 days'],
        ];
    }

    /**
     * @dataProvider formatTimeProvider
     *
     * @param int    \$secs
     * @param string \$expectedFormat
     */
    public function testFormatTime(\$secs, \$expectedFormat)
    {
        \$this->assertEquals(\$expectedFormat, Helper::formatTime(\$secs));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Helper/HelperTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Helper\\Helper;

class HelperTest extends TestCase
{
    public function formatTimeProvider()
    {
        return [
            [0,      '< 1 sec'],
            [1,      '1 sec'],
            [2,      '2 secs'],
            [59,     '59 secs'],
            [60,     '1 min'],
            [61,     '1 min'],
            [119,    '1 min'],
            [120,    '2 mins'],
            [121,    '2 mins'],
            [3599,   '59 mins'],
            [3600,   '1 hr'],
            [7199,   '1 hr'],
            [7200,   '2 hrs'],
            [7201,   '2 hrs'],
            [86399,  '23 hrs'],
            [86400,  '1 day'],
            [86401,  '1 day'],
            [172799, '1 day'],
            [172800, '2 days'],
            [172801, '2 days'],
        ];
    }

    /**
     * @dataProvider formatTimeProvider
     *
     * @param int    \$secs
     * @param string \$expectedFormat
     */
    public function testFormatTime(\$secs, \$expectedFormat)
    {
        \$this->assertEquals(\$expectedFormat, Helper::formatTime(\$secs));
    }
}
", "vendor/symfony/console/Tests/Helper/HelperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Helper/HelperTest.php");
    }
}
