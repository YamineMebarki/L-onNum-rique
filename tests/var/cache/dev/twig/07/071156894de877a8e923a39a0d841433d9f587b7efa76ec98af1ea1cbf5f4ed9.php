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

/* vendor/symfony/css-selector/Parser/Handler/NumberHandler.php */
class __TwigTemplate_6f2f9fa25ab73d85fd0762c3d702e9722bfa9facd8014722caad3f3edc74b96f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Handler/NumberHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Handler/NumberHandler.php"));

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

namespace Symfony\\Component\\CssSelector\\Parser\\Handler;

use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * CSS selector comment handler.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class NumberHandler implements HandlerInterface
{
    private \$patterns;

    public function __construct(TokenizerPatterns \$patterns)
    {
        \$this->patterns = \$patterns;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Reader \$reader, TokenStream \$stream): bool
    {
        \$match = \$reader->findPattern(\$this->patterns->getNumberPattern());

        if (!\$match) {
            return false;
        }

        \$stream->push(new Token(Token::TYPE_NUMBER, \$match[0], \$reader->getPosition()));
        \$reader->moveForward(\\strlen(\$match[0]));

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Handler/NumberHandler.php";
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

namespace Symfony\\Component\\CssSelector\\Parser\\Handler;

use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * CSS selector comment handler.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class NumberHandler implements HandlerInterface
{
    private \$patterns;

    public function __construct(TokenizerPatterns \$patterns)
    {
        \$this->patterns = \$patterns;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Reader \$reader, TokenStream \$stream): bool
    {
        \$match = \$reader->findPattern(\$this->patterns->getNumberPattern());

        if (!\$match) {
            return false;
        }

        \$stream->push(new Token(Token::TYPE_NUMBER, \$match[0], \$reader->getPosition()));
        \$reader->moveForward(\\strlen(\$match[0]));

        return true;
    }
}
", "vendor/symfony/css-selector/Parser/Handler/NumberHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Handler/NumberHandler.php");
    }
}
