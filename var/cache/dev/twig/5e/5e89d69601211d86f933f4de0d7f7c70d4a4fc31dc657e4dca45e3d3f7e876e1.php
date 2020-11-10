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

/* vendor/symfony/config/Tests/Definition/Dumper/XmlReferenceDumperTest.php */
class __TwigTemplate_d16d760537a7be929ecbfbe35c1620010abf5978b9a70630df075e4275803779 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Dumper/XmlReferenceDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Dumper/XmlReferenceDumperTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Dumper\\XmlReferenceDumper;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Configuration\\ExampleConfiguration;

class XmlReferenceDumperTest extends TestCase
{
    public function testDumper()
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new XmlReferenceDumper();
        \$this->assertEquals(\$this->getConfigurationAsString(), \$dumper->dump(\$configuration));
    }

    public function testNamespaceDumper()
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new XmlReferenceDumper();
        \$this->assertEquals(str_replace('http://example.org/schema/dic/acme_root', 'http://symfony.com/schema/dic/symfony', \$this->getConfigurationAsString()), \$dumper->dump(\$configuration, 'http://symfony.com/schema/dic/symfony'));
    }

    private function getConfigurationAsString()
    {
        return str_replace(\"\\n\", PHP_EOL, <<<'EOL'
<!-- Namespace: http://example.org/schema/dic/acme_root -->
<!-- scalar-required: Required -->
<!-- scalar-deprecated: Deprecated (The child node \"scalar_deprecated\" at path \"acme_root\" is deprecated.) -->
<!-- scalar-deprecated-with-message: Deprecated (Deprecation custom message for \"scalar_deprecated_with_message\" at \"acme_root\") -->
<!-- enum-with-default: One of \"this\"; \"that\" -->
<!-- enum: One of \"this\"; \"that\" -->
<config
    boolean=\"true\"
    scalar-empty=\"\"
    scalar-null=\"null\"
    scalar-true=\"true\"
    scalar-false=\"false\"
    scalar-default=\"default\"
    scalar-array-empty=\"\"
    scalar-array-defaults=\"elem1,elem2\"
    scalar-required=\"\"
    scalar-deprecated=\"\"
    scalar-deprecated-with-message=\"\"
    node-with-a-looong-name=\"\"
    enum-with-default=\"this\"
    enum=\"\"
>

    <!-- some info -->
    <!--
        child3: this is a long
                multi-line info text
                which should be indented;
                Example: example setting
    -->
    <array
        child1=\"\"
        child2=\"\"
        child3=\"\"
    />

    <!-- prototype -->
    <scalar-prototyped>scalar value</scalar-prototyped>

    <!-- prototype: Parameter name -->
    <parameter name=\"parameter name\">scalar value</parameter>

    <!-- prototype -->
    <connection
        user=\"\"
        pass=\"\"
    />

    <!-- prototype -->
    <cms-page page=\"cms page page\">

        <!-- prototype -->
        <!-- title: Required -->
        <!-- path: Required -->
        <page
            locale=\"page locale\"
            title=\"\"
            path=\"\"
        />

    </cms-page>

    <!-- prototype -->
    <pipou name=\"pipou name\">

        <!-- prototype -->
        <name didou=\"\" />

    </pipou>

</config>

EOL
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Dumper/XmlReferenceDumperTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Dumper\\XmlReferenceDumper;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Configuration\\ExampleConfiguration;

class XmlReferenceDumperTest extends TestCase
{
    public function testDumper()
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new XmlReferenceDumper();
        \$this->assertEquals(\$this->getConfigurationAsString(), \$dumper->dump(\$configuration));
    }

    public function testNamespaceDumper()
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new XmlReferenceDumper();
        \$this->assertEquals(str_replace('http://example.org/schema/dic/acme_root', 'http://symfony.com/schema/dic/symfony', \$this->getConfigurationAsString()), \$dumper->dump(\$configuration, 'http://symfony.com/schema/dic/symfony'));
    }

    private function getConfigurationAsString()
    {
        return str_replace(\"\\n\", PHP_EOL, <<<'EOL'
<!-- Namespace: http://example.org/schema/dic/acme_root -->
<!-- scalar-required: Required -->
<!-- scalar-deprecated: Deprecated (The child node \"scalar_deprecated\" at path \"acme_root\" is deprecated.) -->
<!-- scalar-deprecated-with-message: Deprecated (Deprecation custom message for \"scalar_deprecated_with_message\" at \"acme_root\") -->
<!-- enum-with-default: One of \"this\"; \"that\" -->
<!-- enum: One of \"this\"; \"that\" -->
<config
    boolean=\"true\"
    scalar-empty=\"\"
    scalar-null=\"null\"
    scalar-true=\"true\"
    scalar-false=\"false\"
    scalar-default=\"default\"
    scalar-array-empty=\"\"
    scalar-array-defaults=\"elem1,elem2\"
    scalar-required=\"\"
    scalar-deprecated=\"\"
    scalar-deprecated-with-message=\"\"
    node-with-a-looong-name=\"\"
    enum-with-default=\"this\"
    enum=\"\"
>

    <!-- some info -->
    <!--
        child3: this is a long
                multi-line info text
                which should be indented;
                Example: example setting
    -->
    <array
        child1=\"\"
        child2=\"\"
        child3=\"\"
    />

    <!-- prototype -->
    <scalar-prototyped>scalar value</scalar-prototyped>

    <!-- prototype: Parameter name -->
    <parameter name=\"parameter name\">scalar value</parameter>

    <!-- prototype -->
    <connection
        user=\"\"
        pass=\"\"
    />

    <!-- prototype -->
    <cms-page page=\"cms page page\">

        <!-- prototype -->
        <!-- title: Required -->
        <!-- path: Required -->
        <page
            locale=\"page locale\"
            title=\"\"
            path=\"\"
        />

    </cms-page>

    <!-- prototype -->
    <pipou name=\"pipou name\">

        <!-- prototype -->
        <name didou=\"\" />

    </pipou>

</config>

EOL
        );
    }
}
", "vendor/symfony/config/Tests/Definition/Dumper/XmlReferenceDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Dumper/XmlReferenceDumperTest.php");
    }
}
