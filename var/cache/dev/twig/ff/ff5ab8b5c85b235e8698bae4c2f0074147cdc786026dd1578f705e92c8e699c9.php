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

/* vendor/symfony/css-selector/Parser/Tokenizer/Tokenizer.php */
class __TwigTemplate_c5cc6e5915579bbd84ac8886d343399e315f06ebd3328f411461ca7ed58fe4eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Tokenizer/Tokenizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Tokenizer/Tokenizer.php"));

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

namespace Symfony\\Component\\CssSelector\\Parser\\Tokenizer;

use Symfony\\Component\\CssSelector\\Parser\\Handler;
use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * CSS selector tokenizer.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Tokenizer
{
    /**
     * @var Handler\\HandlerInterface[]
     */
    private \$handlers;

    public function __construct()
    {
        \$patterns = new TokenizerPatterns();
        \$escaping = new TokenizerEscaping(\$patterns);

        \$this->handlers = [
            new Handler\\WhitespaceHandler(),
            new Handler\\IdentifierHandler(\$patterns, \$escaping),
            new Handler\\HashHandler(\$patterns, \$escaping),
            new Handler\\StringHandler(\$patterns, \$escaping),
            new Handler\\NumberHandler(\$patterns),
            new Handler\\CommentHandler(),
        ];
    }

    /**
     * Tokenize selector source code.
     *
     * @return TokenStream
     */
    public function tokenize(Reader \$reader)
    {
        \$stream = new TokenStream();

        while (!\$reader->isEOF()) {
            foreach (\$this->handlers as \$handler) {
                if (\$handler->handle(\$reader, \$stream)) {
                    continue 2;
                }
            }

            \$stream->push(new Token(Token::TYPE_DELIMITER, \$reader->getSubstring(1), \$reader->getPosition()));
            \$reader->moveForward(1);
        }

        return \$stream
            ->push(new Token(Token::TYPE_FILE_END, null, \$reader->getPosition()))
            ->freeze();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Tokenizer/Tokenizer.php";
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

namespace Symfony\\Component\\CssSelector\\Parser\\Tokenizer;

use Symfony\\Component\\CssSelector\\Parser\\Handler;
use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * CSS selector tokenizer.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Tokenizer
{
    /**
     * @var Handler\\HandlerInterface[]
     */
    private \$handlers;

    public function __construct()
    {
        \$patterns = new TokenizerPatterns();
        \$escaping = new TokenizerEscaping(\$patterns);

        \$this->handlers = [
            new Handler\\WhitespaceHandler(),
            new Handler\\IdentifierHandler(\$patterns, \$escaping),
            new Handler\\HashHandler(\$patterns, \$escaping),
            new Handler\\StringHandler(\$patterns, \$escaping),
            new Handler\\NumberHandler(\$patterns),
            new Handler\\CommentHandler(),
        ];
    }

    /**
     * Tokenize selector source code.
     *
     * @return TokenStream
     */
    public function tokenize(Reader \$reader)
    {
        \$stream = new TokenStream();

        while (!\$reader->isEOF()) {
            foreach (\$this->handlers as \$handler) {
                if (\$handler->handle(\$reader, \$stream)) {
                    continue 2;
                }
            }

            \$stream->push(new Token(Token::TYPE_DELIMITER, \$reader->getSubstring(1), \$reader->getPosition()));
            \$reader->moveForward(1);
        }

        return \$stream
            ->push(new Token(Token::TYPE_FILE_END, null, \$reader->getPosition()))
            ->freeze();
    }
}
", "vendor/symfony/css-selector/Parser/Tokenizer/Tokenizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Tokenizer/Tokenizer.php");
    }
}
