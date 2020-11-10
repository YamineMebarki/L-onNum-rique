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

/* vendor/symfony/form/Tests/Guess/GuessTest.php */
class __TwigTemplate_16b679ec312facaee6ae7a6454a5d8e0f833942721afc9bfa9a4ea3e0daa6349 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Guess/GuessTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Guess/GuessTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Guess;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Guess\\Guess;

class TestGuess extends Guess
{
}

class GuessTest extends TestCase
{
    public function testGetBestGuessReturnsGuessWithHighestConfidence()
    {
        \$guess1 = new TestGuess(Guess::MEDIUM_CONFIDENCE);
        \$guess2 = new TestGuess(Guess::LOW_CONFIDENCE);
        \$guess3 = new TestGuess(Guess::HIGH_CONFIDENCE);

        \$this->assertSame(\$guess3, Guess::getBestGuess([\$guess1, \$guess2, \$guess3]));
    }

    public function testGuessExpectsValidConfidence()
    {
        \$this->expectException('\\InvalidArgumentException');
        new TestGuess(5);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Guess/GuessTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Guess;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Guess\\Guess;

class TestGuess extends Guess
{
}

class GuessTest extends TestCase
{
    public function testGetBestGuessReturnsGuessWithHighestConfidence()
    {
        \$guess1 = new TestGuess(Guess::MEDIUM_CONFIDENCE);
        \$guess2 = new TestGuess(Guess::LOW_CONFIDENCE);
        \$guess3 = new TestGuess(Guess::HIGH_CONFIDENCE);

        \$this->assertSame(\$guess3, Guess::getBestGuess([\$guess1, \$guess2, \$guess3]));
    }

    public function testGuessExpectsValidConfidence()
    {
        \$this->expectException('\\InvalidArgumentException');
        new TestGuess(5);
    }
}
", "vendor/symfony/form/Tests/Guess/GuessTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Guess/GuessTest.php");
    }
}
