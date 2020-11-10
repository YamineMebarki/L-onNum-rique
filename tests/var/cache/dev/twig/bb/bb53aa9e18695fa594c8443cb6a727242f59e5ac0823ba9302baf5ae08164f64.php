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

/* vendor/fzaninotto/faker/test/Faker/Provider/el_GR/TextTest.php */
class __TwigTemplate_78935c4a5c14cf035edd0a7da9dac5824028504c68196c091ad3cc6188ddb131 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/el_GR/TextTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/el_GR/TextTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\el_GR;

use PHPUnit\\Framework\\TestCase;

class TextTest extends TestCase
{
    private \$textClass;

    public function setUp()
    {
        \$this->textClass = new \\ReflectionClass('Faker\\Provider\\el_GR\\Text');
    }

    protected function getMethod(\$name) {
        \$method = \$this->textClass->getMethod(\$name);

        \$method->setAccessible(true);

        return \$method;
    }

    /** @test */
    function testItShouldAppendEndPunctToTheEndOfString()
    {
        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ '))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ—'))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ,'))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ!.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ! '))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ; '))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ: '))
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/el_GR/TextTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\el_GR;

use PHPUnit\\Framework\\TestCase;

class TextTest extends TestCase
{
    private \$textClass;

    public function setUp()
    {
        \$this->textClass = new \\ReflectionClass('Faker\\Provider\\el_GR\\Text');
    }

    protected function getMethod(\$name) {
        \$method = \$this->textClass->getMethod(\$name);

        \$method->setAccessible(true);

        return \$method;
    }

    /** @test */
    function testItShouldAppendEndPunctToTheEndOfString()
    {
        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ '))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ—'))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ,'))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ!.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ! '))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ; '))
        );

        \$this->assertSame(
            'Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ.',
            \$this->getMethod('appendEnd')->invokeArgs(null, array('Και δεν άκουσες το κλοπακλόπ, κλοπακλόπ, κλοπακλόπ: '))
        );
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/el_GR/TextTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/el_GR/TextTest.php");
    }
}
