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

/* vendor/symfony/framework-bundle/Tests/Functional/SerializerTest.php */
class __TwigTemplate_7a5ba8fba473d6546e1a8f14610bb7e88dc2848ba21aa16355a668c38348a78f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/SerializerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/SerializerTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class SerializerTest extends AbstractWebTestCase
{
    public function testDeserializeArrayOfObject()
    {
        static::bootKernel(['test_case' => 'Serializer']);

        \$result = static::\$container->get('serializer')->deserialize('{\"bars\": [{\"id\": 1}, {\"id\": 2}]}', Foo::class, 'json');

        \$bar1 = new Bar();
        \$bar1->id = 1;
        \$bar2 = new Bar();
        \$bar2->id = 2;

        \$expected = new Foo();
        \$expected->bars = [\$bar1, \$bar2];

        \$this->assertEquals(\$expected, \$result);
    }
}

class Foo
{
    /**
     * @var Bar[]
     */
    public \$bars;
}

class Bar
{
    /**
     * @var int
     */
    public \$id;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/SerializerTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class SerializerTest extends AbstractWebTestCase
{
    public function testDeserializeArrayOfObject()
    {
        static::bootKernel(['test_case' => 'Serializer']);

        \$result = static::\$container->get('serializer')->deserialize('{\"bars\": [{\"id\": 1}, {\"id\": 2}]}', Foo::class, 'json');

        \$bar1 = new Bar();
        \$bar1->id = 1;
        \$bar2 = new Bar();
        \$bar2->id = 2;

        \$expected = new Foo();
        \$expected->bars = [\$bar1, \$bar2];

        \$this->assertEquals(\$expected, \$result);
    }
}

class Foo
{
    /**
     * @var Bar[]
     */
    public \$bars;
}

class Bar
{
    /**
     * @var int
     */
    public \$id;
}
", "vendor/symfony/framework-bundle/Tests/Functional/SerializerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/SerializerTest.php");
    }
}
