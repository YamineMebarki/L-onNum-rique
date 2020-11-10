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

/* vendor/symfony/twig-bundle/Tests/DependencyInjection/ConfigurationTest.php */
class __TwigTemplate_0791436ed3219ab3a83f5941afbfbd77ef6454237039e646e0ee9f1836346210 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/ConfigurationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/ConfigurationTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configuration;
use Symfony\\Component\\Config\\Definition\\Processor;

class ConfigurationTest extends TestCase
{
    public function testDoNoDuplicateDefaultFormResources()
    {
        \$input = [
            'strict_variables' => false, // to be removed in 5.0 relying on default
            'form_themes' => ['form_div_layout.html.twig'],
        ];

        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [\$input]);

        \$this->assertEquals(['form_div_layout.html.twig'], \$config['form_themes']);
    }

    /**
     * @group legacy
     * @expectedDeprecation Relying on the default value (\"false\") of the \"twig.strict_variables\" configuration option is deprecated since Symfony 4.1. You should use \"%kernel.debug%\" explicitly instead, which will be the new default in 5.0.
     */
    public function testGetStrictVariablesDefaultFalse()
    {
        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [[]]);

        \$this->assertFalse(\$config['strict_variables']);
    }

    public function testGlobalsAreNotNormalized()
    {
        \$input = [
            'strict_variables' => false, // to be removed in 5.0 relying on default
            'globals' => ['some-global' => true],
        ];

        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [\$input]);

        \$this->assertSame(['some-global' => ['value' => true]], \$config['globals']);
    }

    public function testArrayKeysInGlobalsAreNotNormalized()
    {
        \$input = [
            'strict_variables' => false, // to be removed in 5.0 relying on default
            'globals' => ['global' => ['some-key' => 'some-value']],
        ];

        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [\$input]);

        \$this->assertSame(['global' => ['value' => ['some-key' => 'some-value']]], \$config['globals']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/DependencyInjection/ConfigurationTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configuration;
use Symfony\\Component\\Config\\Definition\\Processor;

class ConfigurationTest extends TestCase
{
    public function testDoNoDuplicateDefaultFormResources()
    {
        \$input = [
            'strict_variables' => false, // to be removed in 5.0 relying on default
            'form_themes' => ['form_div_layout.html.twig'],
        ];

        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [\$input]);

        \$this->assertEquals(['form_div_layout.html.twig'], \$config['form_themes']);
    }

    /**
     * @group legacy
     * @expectedDeprecation Relying on the default value (\"false\") of the \"twig.strict_variables\" configuration option is deprecated since Symfony 4.1. You should use \"%kernel.debug%\" explicitly instead, which will be the new default in 5.0.
     */
    public function testGetStrictVariablesDefaultFalse()
    {
        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [[]]);

        \$this->assertFalse(\$config['strict_variables']);
    }

    public function testGlobalsAreNotNormalized()
    {
        \$input = [
            'strict_variables' => false, // to be removed in 5.0 relying on default
            'globals' => ['some-global' => true],
        ];

        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [\$input]);

        \$this->assertSame(['some-global' => ['value' => true]], \$config['globals']);
    }

    public function testArrayKeysInGlobalsAreNotNormalized()
    {
        \$input = [
            'strict_variables' => false, // to be removed in 5.0 relying on default
            'globals' => ['global' => ['some-key' => 'some-value']],
        ];

        \$processor = new Processor();
        \$config = \$processor->processConfiguration(new Configuration(), [\$input]);

        \$this->assertSame(['global' => ['value' => ['some-key' => 'some-value']]], \$config['globals']);
    }
}
", "vendor/symfony/twig-bundle/Tests/DependencyInjection/ConfigurationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/DependencyInjection/ConfigurationTest.php");
    }
}
