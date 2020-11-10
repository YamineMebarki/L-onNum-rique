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

/* vendor/symfony/asset/Tests/VersionStrategy/StaticVersionStrategyTest.php */
class __TwigTemplate_a65291d9cdc44439c54feab8fd0a9140260aceee5ff7483546923794fc6187f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/VersionStrategy/StaticVersionStrategyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/VersionStrategy/StaticVersionStrategyTest.php"));

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

namespace Symfony\\Component\\Asset\\Tests\\VersionStrategy;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class StaticVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        \$version = 'v1';
        \$path = 'test-path';
        \$staticVersionStrategy = new StaticVersionStrategy(\$version);
        \$this->assertEquals(\$version, \$staticVersionStrategy->getVersion(\$path));
    }

    /**
     * @dataProvider getConfigs
     */
    public function testApplyVersion(\$path, \$version, \$format)
    {
        \$staticVersionStrategy = new StaticVersionStrategy(\$version, \$format);
        \$formatted = sprintf(\$format ?: '%s?%s', \$path, \$version);
        \$this->assertEquals(\$formatted, \$staticVersionStrategy->applyVersion(\$path));
    }

    public function getConfigs()
    {
        return [
            ['test-path', 'v1', null],
            ['test-path', 'v2', '%s?test%s'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Tests/VersionStrategy/StaticVersionStrategyTest.php";
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

namespace Symfony\\Component\\Asset\\Tests\\VersionStrategy;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class StaticVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        \$version = 'v1';
        \$path = 'test-path';
        \$staticVersionStrategy = new StaticVersionStrategy(\$version);
        \$this->assertEquals(\$version, \$staticVersionStrategy->getVersion(\$path));
    }

    /**
     * @dataProvider getConfigs
     */
    public function testApplyVersion(\$path, \$version, \$format)
    {
        \$staticVersionStrategy = new StaticVersionStrategy(\$version, \$format);
        \$formatted = sprintf(\$format ?: '%s?%s', \$path, \$version);
        \$this->assertEquals(\$formatted, \$staticVersionStrategy->applyVersion(\$path));
    }

    public function getConfigs()
    {
        return [
            ['test-path', 'v1', null],
            ['test-path', 'v2', '%s?test%s'],
        ];
    }
}
", "vendor/symfony/asset/Tests/VersionStrategy/StaticVersionStrategyTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Tests/VersionStrategy/StaticVersionStrategyTest.php");
    }
}
