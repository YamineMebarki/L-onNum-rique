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

/* vendor/symfony/css-selector/Tests/Parser/Handler/NumberHandlerTest.php */
class __TwigTemplate_1da26742a1a5e23f534fb6459525c016c6a325ae25d24811bd730dac8419f5bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/Handler/NumberHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/Handler/NumberHandlerTest.php"));

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

use Symfony\\Component\\CssSelector\\Parser\\Handler\\NumberHandler;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns;

class NumberHandlerTest extends AbstractHandlerTest
{
    public function getHandleValueTestData()
    {
        return [
            ['12', new Token(Token::TYPE_NUMBER, '12', 0), ''],
            ['12.34', new Token(Token::TYPE_NUMBER, '12.34', 0), ''],
            ['+12.34', new Token(Token::TYPE_NUMBER, '+12.34', 0), ''],
            ['-12.34', new Token(Token::TYPE_NUMBER, '-12.34', 0), ''],

            ['12 arg', new Token(Token::TYPE_NUMBER, '12', 0), ' arg'],
            ['12]', new Token(Token::TYPE_NUMBER, '12', 0), ']'],
        ];
    }

    public function getDontHandleValueTestData()
    {
        return [
            ['hello'],
            ['>'],
            ['+'],
            [' '],
            ['/* comment */'],
        ];
    }

    protected function generateHandler()
    {
        \$patterns = new TokenizerPatterns();

        return new NumberHandler(\$patterns);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Parser/Handler/NumberHandlerTest.php";
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

use Symfony\\Component\\CssSelector\\Parser\\Handler\\NumberHandler;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns;

class NumberHandlerTest extends AbstractHandlerTest
{
    public function getHandleValueTestData()
    {
        return [
            ['12', new Token(Token::TYPE_NUMBER, '12', 0), ''],
            ['12.34', new Token(Token::TYPE_NUMBER, '12.34', 0), ''],
            ['+12.34', new Token(Token::TYPE_NUMBER, '+12.34', 0), ''],
            ['-12.34', new Token(Token::TYPE_NUMBER, '-12.34', 0), ''],

            ['12 arg', new Token(Token::TYPE_NUMBER, '12', 0), ' arg'],
            ['12]', new Token(Token::TYPE_NUMBER, '12', 0), ']'],
        ];
    }

    public function getDontHandleValueTestData()
    {
        return [
            ['hello'],
            ['>'],
            ['+'],
            [' '],
            ['/* comment */'],
        ];
    }

    protected function generateHandler()
    {
        \$patterns = new TokenizerPatterns();

        return new NumberHandler(\$patterns);
    }
}
", "vendor/symfony/css-selector/Tests/Parser/Handler/NumberHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Parser/Handler/NumberHandlerTest.php");
    }
}
