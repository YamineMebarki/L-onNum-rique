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

/* vendor/symfony/config/Tests/Definition/Dumper/YamlReferenceDumperTest.php */
class __TwigTemplate_0a00fa11871c91c89dcd86cf7d4d0fdfc578e6b5b27e5c609810ad14223d207c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Dumper/YamlReferenceDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Dumper/YamlReferenceDumperTest.php"));

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
use Symfony\\Component\\Config\\Definition\\Dumper\\YamlReferenceDumper;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Configuration\\ExampleConfiguration;

class YamlReferenceDumperTest extends TestCase
{
    public function testDumper()
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new YamlReferenceDumper();

        \$this->assertEquals(\$this->getConfigurationAsString(), \$dumper->dump(\$configuration));
    }

    public function provideDumpAtPath()
    {
        return [
            'Regular node' => ['scalar_true', <<<EOL
scalar_true:          true
EOL
            ],
            'Array node' => ['array', <<<EOL
# some info
array:
    child1:               ~
    child2:               ~

    # this is a long
    # multi-line info text
    # which should be indented
    child3:               ~ # Example: example setting
EOL
            ],
            'Regular nested' => ['array.child2', <<<EOL
child2:               ~
EOL
            ],
            'Prototype' => ['cms_pages.page', <<<EOL
# Prototype
page:

    # Prototype
    locale:
        title:                ~ # Required
        path:                 ~ # Required
EOL
            ],
            'Nested prototype' => ['cms_pages.page.locale', <<<EOL
# Prototype
locale:
    title:                ~ # Required
    path:                 ~ # Required
EOL
            ],
        ];
    }

    /**
     * @dataProvider provideDumpAtPath
     */
    public function testDumpAtPath(\$path, \$expected)
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new YamlReferenceDumper();

        \$this->assertSame(trim(\$expected), trim(\$dumper->dumpAtPath(\$configuration, \$path)));
    }

    private function getConfigurationAsString()
    {
        return <<<'EOL'
acme_root:
    boolean:              true
    scalar_empty:         ~
    scalar_null:          null
    scalar_true:          true
    scalar_false:         false
    scalar_default:       default
    scalar_array_empty:   []
    scalar_array_defaults:

        # Defaults:
        - elem1
        - elem2
    scalar_required:      ~ # Required
    scalar_deprecated:    ~ # Deprecated (The child node \"scalar_deprecated\" at path \"acme_root\" is deprecated.)
    scalar_deprecated_with_message: ~ # Deprecated (Deprecation custom message for \"scalar_deprecated_with_message\" at \"acme_root\")
    node_with_a_looong_name: ~
    enum_with_default:    this # One of \"this\"; \"that\"
    enum:                 ~ # One of \"this\"; \"that\"

    # some info
    array:
        child1:               ~
        child2:               ~

        # this is a long
        # multi-line info text
        # which should be indented
        child3:               ~ # Example: example setting
    scalar_prototyped:    []
    parameters:

        # Prototype: Parameter name
        name:                 ~
    connections:

        # Prototype
        -
            user:                 ~
            pass:                 ~
    cms_pages:

        # Prototype
        page:

            # Prototype
            locale:
                title:                ~ # Required
                path:                 ~ # Required
    pipou:

        # Prototype
        name:                 []

EOL;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Dumper/YamlReferenceDumperTest.php";
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
use Symfony\\Component\\Config\\Definition\\Dumper\\YamlReferenceDumper;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Configuration\\ExampleConfiguration;

class YamlReferenceDumperTest extends TestCase
{
    public function testDumper()
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new YamlReferenceDumper();

        \$this->assertEquals(\$this->getConfigurationAsString(), \$dumper->dump(\$configuration));
    }

    public function provideDumpAtPath()
    {
        return [
            'Regular node' => ['scalar_true', <<<EOL
scalar_true:          true
EOL
            ],
            'Array node' => ['array', <<<EOL
# some info
array:
    child1:               ~
    child2:               ~

    # this is a long
    # multi-line info text
    # which should be indented
    child3:               ~ # Example: example setting
EOL
            ],
            'Regular nested' => ['array.child2', <<<EOL
child2:               ~
EOL
            ],
            'Prototype' => ['cms_pages.page', <<<EOL
# Prototype
page:

    # Prototype
    locale:
        title:                ~ # Required
        path:                 ~ # Required
EOL
            ],
            'Nested prototype' => ['cms_pages.page.locale', <<<EOL
# Prototype
locale:
    title:                ~ # Required
    path:                 ~ # Required
EOL
            ],
        ];
    }

    /**
     * @dataProvider provideDumpAtPath
     */
    public function testDumpAtPath(\$path, \$expected)
    {
        \$configuration = new ExampleConfiguration();

        \$dumper = new YamlReferenceDumper();

        \$this->assertSame(trim(\$expected), trim(\$dumper->dumpAtPath(\$configuration, \$path)));
    }

    private function getConfigurationAsString()
    {
        return <<<'EOL'
acme_root:
    boolean:              true
    scalar_empty:         ~
    scalar_null:          null
    scalar_true:          true
    scalar_false:         false
    scalar_default:       default
    scalar_array_empty:   []
    scalar_array_defaults:

        # Defaults:
        - elem1
        - elem2
    scalar_required:      ~ # Required
    scalar_deprecated:    ~ # Deprecated (The child node \"scalar_deprecated\" at path \"acme_root\" is deprecated.)
    scalar_deprecated_with_message: ~ # Deprecated (Deprecation custom message for \"scalar_deprecated_with_message\" at \"acme_root\")
    node_with_a_looong_name: ~
    enum_with_default:    this # One of \"this\"; \"that\"
    enum:                 ~ # One of \"this\"; \"that\"

    # some info
    array:
        child1:               ~
        child2:               ~

        # this is a long
        # multi-line info text
        # which should be indented
        child3:               ~ # Example: example setting
    scalar_prototyped:    []
    parameters:

        # Prototype: Parameter name
        name:                 ~
    connections:

        # Prototype
        -
            user:                 ~
            pass:                 ~
    cms_pages:

        # Prototype
        page:

            # Prototype
            locale:
                title:                ~ # Required
                path:                 ~ # Required
    pipou:

        # Prototype
        name:                 []

EOL;
    }
}
", "vendor/symfony/config/Tests/Definition/Dumper/YamlReferenceDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Dumper/YamlReferenceDumperTest.php");
    }
}
