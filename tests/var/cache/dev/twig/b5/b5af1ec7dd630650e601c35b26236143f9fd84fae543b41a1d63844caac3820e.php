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

/* vendor/nikic/php-parser/grammar/README.md */
class __TwigTemplate_43b95bc40627222789f3106aefedbfa7bc31ff12ed5362e53cde08f3e631f109 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/grammar/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/grammar/README.md"));

        // line 1
        echo "What do all those files mean?
=============================

 * `php5.y`:             PHP 5 grammar written in a pseudo language
 * `php7.y`:             PHP 7 grammar written in a pseudo language
 * `tokens.y`:           Tokens definition shared between PHP 5 and PHP 7 grammars
 * `parser.template`:    A `kmyacc` parser prototype file for PHP
 * `tokens.template`:    A `kmyacc` prototype file for the `Tokens` class
 * `rebuildParsers.php`: Preprocesses the grammar and builds the parser using `kmyacc`

.phpy pseudo language
=====================

The `.y` file is a normal grammar in `kmyacc` (`yacc`) style, with some transformations
applied to it:

 * Nodes are created using the syntax `Name[..., ...]`. This is transformed into
   `new Name(..., ..., attributes())`
 * Some function-like constructs are resolved (see `rebuildParsers.php` for a list)

Building the parser
===================

Run `php grammar/rebuildParsers.php` to rebuild the parsers. Additional options:

 * The `KMYACC` environment variable can be used to specify an alternative `kmyacc` binary.
   By default the `phpyacc` dev dependency will be used. To use the original `kmyacc`, you
   need to compile [moriyoshi's fork](https://github.com/moriyoshi/kmyacc-forked).
 * The `--debug` option enables emission of debug symbols and creates the `y.output` file.
 * The `--keep-tmp-grammar` option preserves the preprocessed grammar file.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/grammar/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("What do all those files mean?
=============================

 * `php5.y`:             PHP 5 grammar written in a pseudo language
 * `php7.y`:             PHP 7 grammar written in a pseudo language
 * `tokens.y`:           Tokens definition shared between PHP 5 and PHP 7 grammars
 * `parser.template`:    A `kmyacc` parser prototype file for PHP
 * `tokens.template`:    A `kmyacc` prototype file for the `Tokens` class
 * `rebuildParsers.php`: Preprocesses the grammar and builds the parser using `kmyacc`

.phpy pseudo language
=====================

The `.y` file is a normal grammar in `kmyacc` (`yacc`) style, with some transformations
applied to it:

 * Nodes are created using the syntax `Name[..., ...]`. This is transformed into
   `new Name(..., ..., attributes())`
 * Some function-like constructs are resolved (see `rebuildParsers.php` for a list)

Building the parser
===================

Run `php grammar/rebuildParsers.php` to rebuild the parsers. Additional options:

 * The `KMYACC` environment variable can be used to specify an alternative `kmyacc` binary.
   By default the `phpyacc` dev dependency will be used. To use the original `kmyacc`, you
   need to compile [moriyoshi's fork](https://github.com/moriyoshi/kmyacc-forked).
 * The `--debug` option enables emission of debug symbols and creates the `y.output` file.
 * The `--keep-tmp-grammar` option preserves the preprocessed grammar file.
", "vendor/nikic/php-parser/grammar/README.md", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/grammar/README.md");
    }
}
