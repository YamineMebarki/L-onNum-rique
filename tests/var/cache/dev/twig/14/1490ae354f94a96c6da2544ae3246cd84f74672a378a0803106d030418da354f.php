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

/* vendor/symfony/serializer/Tests/Annotation/GroupsTest.php */
class __TwigTemplate_f7434c2abc785534fa3667f78f10ff1fe6a0fb5e5097cf02f012e0180c331aa5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Annotation/GroupsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Annotation/GroupsTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Annotation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Annotation\\Groups;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class GroupsTest extends TestCase
{
    public function testEmptyGroupsParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        new Groups(['value' => []]);
    }

    public function testNotAnArrayGroupsParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        new Groups(['value' => 12]);
    }

    public function testInvalidGroupsParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        new Groups(['value' => ['a', 1, new \\stdClass()]]);
    }

    public function testGroupsParameters()
    {
        \$validData = ['a', 'b'];

        \$groups = new Groups(['value' => \$validData]);
        \$this->assertEquals(\$validData, \$groups->getGroups());
    }

    public function testSingleGroup()
    {
        \$groups = new Groups(['value' => 'a']);
        \$this->assertEquals(['a'], \$groups->getGroups());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Annotation/GroupsTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Annotation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Annotation\\Groups;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class GroupsTest extends TestCase
{
    public function testEmptyGroupsParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        new Groups(['value' => []]);
    }

    public function testNotAnArrayGroupsParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        new Groups(['value' => 12]);
    }

    public function testInvalidGroupsParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        new Groups(['value' => ['a', 1, new \\stdClass()]]);
    }

    public function testGroupsParameters()
    {
        \$validData = ['a', 'b'];

        \$groups = new Groups(['value' => \$validData]);
        \$this->assertEquals(\$validData, \$groups->getGroups());
    }

    public function testSingleGroup()
    {
        \$groups = new Groups(['value' => 'a']);
        \$this->assertEquals(['a'], \$groups->getGroups());
    }
}
", "vendor/symfony/serializer/Tests/Annotation/GroupsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Annotation/GroupsTest.php");
    }
}
