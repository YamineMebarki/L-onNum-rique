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

/* vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/ConfigurationTest.php */
class __TwigTemplate_6e8fbd6c5dcccfa73491aa098fbd594838e3f2b04324d7f3b77c743c33be52d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/ConfigurationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/ConfigurationTest.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\WebProfilerBundle\\DependencyInjection\\Configuration;
use Symfony\\Component\\Config\\Definition\\Processor;

class ConfigurationTest extends TestCase
{
    /**
     * @dataProvider getDebugModes
     */
    public function testConfigTree(\$options, \$results)
    {
        \$processor = new Processor();
        \$configuration = new Configuration();
        \$config = \$processor->processConfiguration(\$configuration, [\$options]);

        \$this->assertEquals(\$results, \$config);
    }

    public function getDebugModes()
    {
        return [
            [[], ['intercept_redirects' => false, 'toolbar' => false, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['intercept_redirects' => true], ['intercept_redirects' => true, 'toolbar' => false, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['intercept_redirects' => false], ['intercept_redirects' => false, 'toolbar' => false, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['toolbar' => true], ['intercept_redirects' => false, 'toolbar' => true, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['excluded_ajax_paths' => 'test'], ['intercept_redirects' => false, 'toolbar' => false, 'excluded_ajax_paths' => 'test']],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/ConfigurationTest.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\WebProfilerBundle\\DependencyInjection\\Configuration;
use Symfony\\Component\\Config\\Definition\\Processor;

class ConfigurationTest extends TestCase
{
    /**
     * @dataProvider getDebugModes
     */
    public function testConfigTree(\$options, \$results)
    {
        \$processor = new Processor();
        \$configuration = new Configuration();
        \$config = \$processor->processConfiguration(\$configuration, [\$options]);

        \$this->assertEquals(\$results, \$config);
    }

    public function getDebugModes()
    {
        return [
            [[], ['intercept_redirects' => false, 'toolbar' => false, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['intercept_redirects' => true], ['intercept_redirects' => true, 'toolbar' => false, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['intercept_redirects' => false], ['intercept_redirects' => false, 'toolbar' => false, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['toolbar' => true], ['intercept_redirects' => false, 'toolbar' => true, 'excluded_ajax_paths' => '^/((index|app(_[\\w]+)?)\\.php/)?_wdt']],
            [['excluded_ajax_paths' => 'test'], ['intercept_redirects' => false, 'toolbar' => false, 'excluded_ajax_paths' => 'test']],
        ];
    }
}
", "vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/ConfigurationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Tests/DependencyInjection/ConfigurationTest.php");
    }
}
