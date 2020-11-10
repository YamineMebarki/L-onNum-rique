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

/* vendor/symfony/css-selector/Tests/Parser/Handler/AbstractHandlerTest.php */
class __TwigTemplate_18fdfb46ac8be2614f17c7d283789d84fe5a6511b7faf811669ae3fa8e52ccad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/Handler/AbstractHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/Handler/AbstractHandlerTest.php"));

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

namespace Symfony\\Component\\CssSelector\\Tests\\Parser\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
abstract class AbstractHandlerTest extends TestCase
{
    /** @dataProvider getHandleValueTestData */
    public function testHandleValue(\$value, Token \$expectedToken, \$remainingContent)
    {
        \$reader = new Reader(\$value);
        \$stream = new TokenStream();

        \$this->assertTrue(\$this->generateHandler()->handle(\$reader, \$stream));
        \$this->assertEquals(\$expectedToken, \$stream->getNext());
        \$this->assertRemainingContent(\$reader, \$remainingContent);
    }

    /** @dataProvider getDontHandleValueTestData */
    public function testDontHandleValue(\$value)
    {
        \$reader = new Reader(\$value);
        \$stream = new TokenStream();

        \$this->assertFalse(\$this->generateHandler()->handle(\$reader, \$stream));
        \$this->assertStreamEmpty(\$stream);
        \$this->assertRemainingContent(\$reader, \$value);
    }

    abstract public function getHandleValueTestData();

    abstract public function getDontHandleValueTestData();

    abstract protected function generateHandler();

    protected function assertStreamEmpty(TokenStream \$stream)
    {
        \$property = new \\ReflectionProperty(\$stream, 'tokens');
        \$property->setAccessible(true);

        \$this->assertEquals([], \$property->getValue(\$stream));
    }

    protected function assertRemainingContent(Reader \$reader, \$remainingContent)
    {
        if ('' === \$remainingContent) {
            \$this->assertEquals(0, \$reader->getRemainingLength());
            \$this->assertTrue(\$reader->isEOF());
        } else {
            \$this->assertEquals(\\strlen(\$remainingContent), \$reader->getRemainingLength());
            \$this->assertEquals(0, \$reader->getOffset(\$remainingContent));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Parser/Handler/AbstractHandlerTest.php";
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

namespace Symfony\\Component\\CssSelector\\Tests\\Parser\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
abstract class AbstractHandlerTest extends TestCase
{
    /** @dataProvider getHandleValueTestData */
    public function testHandleValue(\$value, Token \$expectedToken, \$remainingContent)
    {
        \$reader = new Reader(\$value);
        \$stream = new TokenStream();

        \$this->assertTrue(\$this->generateHandler()->handle(\$reader, \$stream));
        \$this->assertEquals(\$expectedToken, \$stream->getNext());
        \$this->assertRemainingContent(\$reader, \$remainingContent);
    }

    /** @dataProvider getDontHandleValueTestData */
    public function testDontHandleValue(\$value)
    {
        \$reader = new Reader(\$value);
        \$stream = new TokenStream();

        \$this->assertFalse(\$this->generateHandler()->handle(\$reader, \$stream));
        \$this->assertStreamEmpty(\$stream);
        \$this->assertRemainingContent(\$reader, \$value);
    }

    abstract public function getHandleValueTestData();

    abstract public function getDontHandleValueTestData();

    abstract protected function generateHandler();

    protected function assertStreamEmpty(TokenStream \$stream)
    {
        \$property = new \\ReflectionProperty(\$stream, 'tokens');
        \$property->setAccessible(true);

        \$this->assertEquals([], \$property->getValue(\$stream));
    }

    protected function assertRemainingContent(Reader \$reader, \$remainingContent)
    {
        if ('' === \$remainingContent) {
            \$this->assertEquals(0, \$reader->getRemainingLength());
            \$this->assertTrue(\$reader->isEOF());
        } else {
            \$this->assertEquals(\\strlen(\$remainingContent), \$reader->getRemainingLength());
            \$this->assertEquals(0, \$reader->getOffset(\$remainingContent));
        }
    }
}
", "vendor/symfony/css-selector/Tests/Parser/Handler/AbstractHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Parser/Handler/AbstractHandlerTest.php");
    }
}
