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

/* vendor/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php */
class __TwigTemplate_50e52ade43b14ee6d58bd3b505fdffb21cf3f0c4766261aa75f282ef02043ee1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php"));

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

/**
 * CSS selector tokenizer escaping applier.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class TokenizerEscaping
{
    private \$patterns;

    public function __construct(TokenizerPatterns \$patterns)
    {
        \$this->patterns = \$patterns;
    }

    public function escapeUnicode(string \$value): string
    {
        \$value = \$this->replaceUnicodeSequences(\$value);

        return preg_replace(\$this->patterns->getSimpleEscapePattern(), '\$1', \$value);
    }

    public function escapeUnicodeAndNewLine(string \$value): string
    {
        \$value = preg_replace(\$this->patterns->getNewLineEscapePattern(), '', \$value);

        return \$this->escapeUnicode(\$value);
    }

    private function replaceUnicodeSequences(string \$value): string
    {
        return preg_replace_callback(\$this->patterns->getUnicodeEscapePattern(), function (\$match) {
            \$c = hexdec(\$match[1]);

            if (0x80 > \$c %= 0x200000) {
                return \\chr(\$c);
            }
            if (0x800 > \$c) {
                return \\chr(0xC0 | \$c >> 6).\\chr(0x80 | \$c & 0x3F);
            }
            if (0x10000 > \$c) {
                return \\chr(0xE0 | \$c >> 12).\\chr(0x80 | \$c >> 6 & 0x3F).\\chr(0x80 | \$c & 0x3F);
            }

            return '';
        }, \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php";
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

/**
 * CSS selector tokenizer escaping applier.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class TokenizerEscaping
{
    private \$patterns;

    public function __construct(TokenizerPatterns \$patterns)
    {
        \$this->patterns = \$patterns;
    }

    public function escapeUnicode(string \$value): string
    {
        \$value = \$this->replaceUnicodeSequences(\$value);

        return preg_replace(\$this->patterns->getSimpleEscapePattern(), '\$1', \$value);
    }

    public function escapeUnicodeAndNewLine(string \$value): string
    {
        \$value = preg_replace(\$this->patterns->getNewLineEscapePattern(), '', \$value);

        return \$this->escapeUnicode(\$value);
    }

    private function replaceUnicodeSequences(string \$value): string
    {
        return preg_replace_callback(\$this->patterns->getUnicodeEscapePattern(), function (\$match) {
            \$c = hexdec(\$match[1]);

            if (0x80 > \$c %= 0x200000) {
                return \\chr(\$c);
            }
            if (0x800 > \$c) {
                return \\chr(0xC0 | \$c >> 6).\\chr(0x80 | \$c & 0x3F);
            }
            if (0x10000 > \$c) {
                return \\chr(0xE0 | \$c >> 12).\\chr(0x80 | \$c >> 6 & 0x3F).\\chr(0x80 | \$c & 0x3F);
            }

            return '';
        }, \$value);
    }
}
", "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php");
    }
}
