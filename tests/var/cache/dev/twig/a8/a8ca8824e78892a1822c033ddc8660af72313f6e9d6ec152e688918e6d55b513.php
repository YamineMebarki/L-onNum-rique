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

/* vendor/symfony/dependency-injection/Tests/ParameterBag/EnvPlaceholderParameterBagTest.php */
class __TwigTemplate_a1f16ca6ef58edfbe597371f0f92165b1c115778ecc3d1544408ab5ec0ec90fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/ParameterBag/EnvPlaceholderParameterBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/ParameterBag/EnvPlaceholderParameterBagTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\ParameterBag;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;

class EnvPlaceholderParameterBagTest extends TestCase
{
    public function testGetThrowsInvalidArgumentExceptionIfEnvNameContainsNonWordCharacters()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(%foo%)');
    }

    public function testMergeWillNotDuplicateIdenticalParameters()
    {
        \$envVariableName = 'DB_HOST';
        \$parameter = sprintf('env(%s)', \$envVariableName);
        \$firstBag = new EnvPlaceholderParameterBag();

        // initialize placeholders
        \$firstBag->get(\$parameter);
        \$secondBag = clone \$firstBag;

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$mergedPlaceholders = \$firstBag->getEnvPlaceholders();

        \$placeholderForVariable = \$mergedPlaceholders[\$envVariableName];
        \$placeholder = array_values(\$placeholderForVariable)[0];

        \$this->assertCount(1, \$placeholderForVariable);
        \$this->assertIsString(\$placeholder);
        \$this->assertStringContainsString(\$envVariableName, \$placeholder);
    }

    public function testMergeWhereFirstBagIsEmptyWillWork()
    {
        \$envVariableName = 'DB_HOST';
        \$parameter = sprintf('env(%s)', \$envVariableName);
        \$firstBag = new EnvPlaceholderParameterBag();
        \$secondBag = new EnvPlaceholderParameterBag();

        // initialize placeholder only in second bag
        \$secondBag->get(\$parameter);

        \$this->assertEmpty(\$firstBag->getEnvPlaceholders());

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$mergedPlaceholders = \$firstBag->getEnvPlaceholders();

        \$placeholderForVariable = \$mergedPlaceholders[\$envVariableName];
        \$placeholder = array_values(\$placeholderForVariable)[0];

        \$this->assertCount(1, \$placeholderForVariable);
        \$this->assertIsString(\$placeholder);
        \$this->assertStringContainsString(\$envVariableName, \$placeholder);
    }

    public function testMergeWherePlaceholderOnlyExistsInSecond()
    {
        \$uniqueEnvName = 'DB_HOST';
        \$commonEnvName = 'DB_USER';

        \$uniqueParamName = sprintf('env(%s)', \$uniqueEnvName);
        \$commonParamName = sprintf('env(%s)', \$commonEnvName);

        \$firstBag = new EnvPlaceholderParameterBag();
        // initialize common placeholder
        \$firstBag->get(\$commonParamName);
        \$secondBag = clone \$firstBag;

        // initialize unique placeholder
        \$secondBag->get(\$uniqueParamName);

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$merged = \$firstBag->getEnvPlaceholders();

        \$this->assertCount(1, \$merged[\$uniqueEnvName]);
        // second bag has same placeholder for commonEnvName
        \$this->assertCount(1, \$merged[\$commonEnvName]);
    }

    public function testMergeWithDifferentIdentifiersForPlaceholders()
    {
        \$envName = 'DB_USER';
        \$paramName = sprintf('env(%s)', \$envName);

        \$firstBag = new EnvPlaceholderParameterBag();
        \$secondBag = new EnvPlaceholderParameterBag();
        // initialize placeholders
        \$firstPlaceholder = \$firstBag->get(\$paramName);
        \$secondPlaceholder = \$secondBag->get(\$paramName);

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$merged = \$firstBag->getEnvPlaceholders();

        \$this->assertNotEquals(\$firstPlaceholder, \$secondPlaceholder);
        \$this->assertCount(2, \$merged[\$envName]);
    }

    /**
     * @group legacy
     * @expectedDeprecation A non-string default value of env parameter \"INT_VAR\" is deprecated since 4.3, cast it to string instead.
     */
    public function testResolveEnvCastsIntToString()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(INT_VAR)');
        \$bag->set('env(INT_VAR)', 2);
        \$bag->resolve();
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
    }

    /**
     * @group legacy
     * @expectedDeprecation A non-string default value of an env() parameter is deprecated since 4.3, cast \"env(INT_VAR)\" to string instead.
     * @expectedDeprecation A non-string default value of env parameter \"INT_VAR\" is deprecated since 4.3, cast it to string instead.
     */
    public function testGetDefaultScalarEnv()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->set('env(INT_VAR)', 2);
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame(2, \$bag->all()['env(INT_VAR)']);
        \$bag->resolve();
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
    }

    public function testGetDefaultEnv()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$bag->set('env(INT_VAR)', '2');
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
        \$bag->resolve();
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
    }

    public function testResolveEnvAllowsNull()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(NULL_VAR)');
        \$bag->set('env(NULL_VAR)', null);
        \$bag->resolve();
        \$this->assertNull(\$bag->all()['env(NULL_VAR)']);
    }

    public function testResolveThrowsOnBadDefaultValue()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The default value of env parameter \"ARRAY_VAR\" must be scalar or null, array given.');
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(ARRAY_VAR)');
        \$bag->set('env(ARRAY_VAR)', []);
        \$bag->resolve();
    }

    public function testGetEnvAllowsNull()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->set('env(NULL_VAR)', null);
        \$bag->get('env(NULL_VAR)');
        \$bag->resolve();

        \$this->assertNull(\$bag->all()['env(NULL_VAR)']);
    }

    public function testGetThrowsOnBadDefaultValue()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The default value of an env() parameter must be scalar or null, but \"array\" given to \"env(ARRAY_VAR)\".');
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->set('env(ARRAY_VAR)', []);
        \$bag->get('env(ARRAY_VAR)');
        \$bag->resolve();
    }

    public function testDefaultToNullAllowed()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->resolve();
        \$this->assertNotNull(\$bag->get('env(default::BAR)'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/ParameterBag/EnvPlaceholderParameterBagTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\ParameterBag;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;

class EnvPlaceholderParameterBagTest extends TestCase
{
    public function testGetThrowsInvalidArgumentExceptionIfEnvNameContainsNonWordCharacters()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(%foo%)');
    }

    public function testMergeWillNotDuplicateIdenticalParameters()
    {
        \$envVariableName = 'DB_HOST';
        \$parameter = sprintf('env(%s)', \$envVariableName);
        \$firstBag = new EnvPlaceholderParameterBag();

        // initialize placeholders
        \$firstBag->get(\$parameter);
        \$secondBag = clone \$firstBag;

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$mergedPlaceholders = \$firstBag->getEnvPlaceholders();

        \$placeholderForVariable = \$mergedPlaceholders[\$envVariableName];
        \$placeholder = array_values(\$placeholderForVariable)[0];

        \$this->assertCount(1, \$placeholderForVariable);
        \$this->assertIsString(\$placeholder);
        \$this->assertStringContainsString(\$envVariableName, \$placeholder);
    }

    public function testMergeWhereFirstBagIsEmptyWillWork()
    {
        \$envVariableName = 'DB_HOST';
        \$parameter = sprintf('env(%s)', \$envVariableName);
        \$firstBag = new EnvPlaceholderParameterBag();
        \$secondBag = new EnvPlaceholderParameterBag();

        // initialize placeholder only in second bag
        \$secondBag->get(\$parameter);

        \$this->assertEmpty(\$firstBag->getEnvPlaceholders());

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$mergedPlaceholders = \$firstBag->getEnvPlaceholders();

        \$placeholderForVariable = \$mergedPlaceholders[\$envVariableName];
        \$placeholder = array_values(\$placeholderForVariable)[0];

        \$this->assertCount(1, \$placeholderForVariable);
        \$this->assertIsString(\$placeholder);
        \$this->assertStringContainsString(\$envVariableName, \$placeholder);
    }

    public function testMergeWherePlaceholderOnlyExistsInSecond()
    {
        \$uniqueEnvName = 'DB_HOST';
        \$commonEnvName = 'DB_USER';

        \$uniqueParamName = sprintf('env(%s)', \$uniqueEnvName);
        \$commonParamName = sprintf('env(%s)', \$commonEnvName);

        \$firstBag = new EnvPlaceholderParameterBag();
        // initialize common placeholder
        \$firstBag->get(\$commonParamName);
        \$secondBag = clone \$firstBag;

        // initialize unique placeholder
        \$secondBag->get(\$uniqueParamName);

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$merged = \$firstBag->getEnvPlaceholders();

        \$this->assertCount(1, \$merged[\$uniqueEnvName]);
        // second bag has same placeholder for commonEnvName
        \$this->assertCount(1, \$merged[\$commonEnvName]);
    }

    public function testMergeWithDifferentIdentifiersForPlaceholders()
    {
        \$envName = 'DB_USER';
        \$paramName = sprintf('env(%s)', \$envName);

        \$firstBag = new EnvPlaceholderParameterBag();
        \$secondBag = new EnvPlaceholderParameterBag();
        // initialize placeholders
        \$firstPlaceholder = \$firstBag->get(\$paramName);
        \$secondPlaceholder = \$secondBag->get(\$paramName);

        \$firstBag->mergeEnvPlaceholders(\$secondBag);
        \$merged = \$firstBag->getEnvPlaceholders();

        \$this->assertNotEquals(\$firstPlaceholder, \$secondPlaceholder);
        \$this->assertCount(2, \$merged[\$envName]);
    }

    /**
     * @group legacy
     * @expectedDeprecation A non-string default value of env parameter \"INT_VAR\" is deprecated since 4.3, cast it to string instead.
     */
    public function testResolveEnvCastsIntToString()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(INT_VAR)');
        \$bag->set('env(INT_VAR)', 2);
        \$bag->resolve();
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
    }

    /**
     * @group legacy
     * @expectedDeprecation A non-string default value of an env() parameter is deprecated since 4.3, cast \"env(INT_VAR)\" to string instead.
     * @expectedDeprecation A non-string default value of env parameter \"INT_VAR\" is deprecated since 4.3, cast it to string instead.
     */
    public function testGetDefaultScalarEnv()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->set('env(INT_VAR)', 2);
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame(2, \$bag->all()['env(INT_VAR)']);
        \$bag->resolve();
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
    }

    public function testGetDefaultEnv()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$bag->set('env(INT_VAR)', '2');
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
        \$bag->resolve();
        \$this->assertStringMatchesFormat('env_%s_INT_VAR_%s', \$bag->get('env(INT_VAR)'));
        \$this->assertSame('2', \$bag->all()['env(INT_VAR)']);
    }

    public function testResolveEnvAllowsNull()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(NULL_VAR)');
        \$bag->set('env(NULL_VAR)', null);
        \$bag->resolve();
        \$this->assertNull(\$bag->all()['env(NULL_VAR)']);
    }

    public function testResolveThrowsOnBadDefaultValue()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The default value of env parameter \"ARRAY_VAR\" must be scalar or null, array given.');
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->get('env(ARRAY_VAR)');
        \$bag->set('env(ARRAY_VAR)', []);
        \$bag->resolve();
    }

    public function testGetEnvAllowsNull()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->set('env(NULL_VAR)', null);
        \$bag->get('env(NULL_VAR)');
        \$bag->resolve();

        \$this->assertNull(\$bag->all()['env(NULL_VAR)']);
    }

    public function testGetThrowsOnBadDefaultValue()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The default value of an env() parameter must be scalar or null, but \"array\" given to \"env(ARRAY_VAR)\".');
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->set('env(ARRAY_VAR)', []);
        \$bag->get('env(ARRAY_VAR)');
        \$bag->resolve();
    }

    public function testDefaultToNullAllowed()
    {
        \$bag = new EnvPlaceholderParameterBag();
        \$bag->resolve();
        \$this->assertNotNull(\$bag->get('env(default::BAR)'));
    }
}
", "vendor/symfony/dependency-injection/Tests/ParameterBag/EnvPlaceholderParameterBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/ParameterBag/EnvPlaceholderParameterBagTest.php");
    }
}
