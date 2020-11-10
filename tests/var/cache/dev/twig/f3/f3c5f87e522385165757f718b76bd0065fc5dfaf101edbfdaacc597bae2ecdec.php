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

/* vendor/bin/php-parse */
class __TwigTemplate_5eacfcfc24a1c49c8f3e99cd64bd1c85eb88cc178baa3dffeaf465cde15aa862 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/bin/php-parse"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/bin/php-parse"));

        // line 1
        echo "#!/usr/bin/env php
<?php

foreach ([__DIR__ . '/../../../autoload.php', __DIR__ . '/../vendor/autoload.php'] as \$file) {
    if (file_exists(\$file)) {
        require \$file;
        break;
    }
}

ini_set('xdebug.max_nesting_level', 3000);

// Disable XDebug var_dump() output truncation
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

list(\$operations, \$files, \$attributes) = parseArgs(\$argv);

/* Dump nodes by default */
if (empty(\$operations)) {
    \$operations[] = 'dump';
}

if (empty(\$files)) {
    showHelp(\"Must specify at least one file.\");
}

\$lexer = new PhpParser\\Lexer\\Emulative(['usedAttributes' => [
    'startLine', 'endLine', 'startFilePos', 'endFilePos', 'comments'
]]);
\$parser = (new PhpParser\\ParserFactory)->create(
    PhpParser\\ParserFactory::PREFER_PHP7,
    \$lexer
);
\$dumper = new PhpParser\\NodeDumper([
    'dumpComments' => true,
    'dumpPositions' => \$attributes['with-positions'],
]);
\$prettyPrinter = new PhpParser\\PrettyPrinter\\Standard;

\$traverser = new PhpParser\\NodeTraverser();
\$traverser->addVisitor(new PhpParser\\NodeVisitor\\NameResolver);

foreach (\$files as \$file) {
    if (strpos(\$file, '<?php') === 0) {
        \$code = \$file;
        fwrite(STDERR, \"====> Code \$code\\n\");
    } else {
        if (!file_exists(\$file)) {
            fwrite(STDERR, \"File \$file does not exist.\\n\");
            exit(1);
        }

        \$code = file_get_contents(\$file);
        fwrite(STDERR, \"====> File \$file:\\n\");
    }

    if (\$attributes['with-recovery']) {
        \$errorHandler = new PhpParser\\ErrorHandler\\Collecting;
        \$stmts = \$parser->parse(\$code, \$errorHandler);
        foreach (\$errorHandler->getErrors() as \$error) {
            \$message = formatErrorMessage(\$error, \$code, \$attributes['with-column-info']);
            fwrite(STDERR, \$message . \"\\n\");
        }
        if (null === \$stmts) {
            continue;
        }
    } else {
        try {
            \$stmts = \$parser->parse(\$code);
        } catch (PhpParser\\Error \$error) {
            \$message = formatErrorMessage(\$error, \$code, \$attributes['with-column-info']);
            fwrite(STDERR, \$message . \"\\n\");
            exit(1);
        }
    }

    foreach (\$operations as \$operation) {
        if ('dump' === \$operation) {
            fwrite(STDERR, \"==> Node dump:\\n\");
            echo \$dumper->dump(\$stmts, \$code), \"\\n\";
        } elseif ('pretty-print' === \$operation) {
            fwrite(STDERR, \"==> Pretty print:\\n\");
            echo \$prettyPrinter->prettyPrintFile(\$stmts), \"\\n\";
        } elseif ('json-dump' === \$operation) {
            fwrite(STDERR, \"==> JSON dump:\\n\");
            echo json_encode(\$stmts, JSON_PRETTY_PRINT), \"\\n\";
        } elseif ('var-dump' === \$operation) {
            fwrite(STDERR, \"==> var_dump():\\n\");
            var_dump(\$stmts);
        } elseif ('resolve-names' === \$operation) {
            fwrite(STDERR, \"==> Resolved names.\\n\");
            \$stmts = \$traverser->traverse(\$stmts);
        }
    }
}

function formatErrorMessage(PhpParser\\Error \$e, \$code, \$withColumnInfo) {
    if (\$withColumnInfo && \$e->hasColumnInfo()) {
        return \$e->getMessageWithColumnInfo(\$code);
    } else {
        return \$e->getMessage();
    }
}

function showHelp(\$error = '') {
    if (\$error) {
        fwrite(STDERR, \$error . \"\\n\\n\");
    }
    fwrite(\$error ? STDERR : STDOUT, <<<OUTPUT
Usage: php-parse [operations] file1.php [file2.php ...]
   or: php-parse [operations] \"<?php code\"
Turn PHP source code into an abstract syntax tree.

Operations is a list of the following options (--dump by default):

    -d, --dump              Dump nodes using NodeDumper
    -p, --pretty-print      Pretty print file using PrettyPrinter\\Standard
    -j, --json-dump         Print json_encode() result
        --var-dump          var_dump() nodes (for exact structure)
    -N, --resolve-names     Resolve names using NodeVisitor\\NameResolver
    -c, --with-column-info  Show column-numbers for errors (if available)
    -P, --with-positions    Show positions in node dumps
    -r, --with-recovery     Use parsing with error recovery
    -h, --help              Display this page

Example:
    php-parse -d -p -N -d file.php

    Dumps nodes, pretty prints them, then resolves names and dumps them again.


OUTPUT
    );
    exit(\$error ? 1 : 0);
}

function parseArgs(\$args) {
    \$operations = [];
    \$files = [];
    \$attributes = [
        'with-column-info' => false,
        'with-positions' => false,
        'with-recovery' => false,
    ];

    array_shift(\$args);
    \$parseOptions = true;
    foreach (\$args as \$arg) {
        if (!\$parseOptions) {
            \$files[] = \$arg;
            continue;
        }

        switch (\$arg) {
            case '--dump':
            case '-d':
                \$operations[] = 'dump';
                break;
            case '--pretty-print':
            case '-p':
                \$operations[] = 'pretty-print';
                break;
            case '--json-dump':
            case '-j':
                \$operations[] = 'json-dump';
                break;
            case '--var-dump':
                \$operations[] = 'var-dump';
                break;
            case '--resolve-names':
            case '-N';
                \$operations[] = 'resolve-names';
                break;
            case '--with-column-info':
            case '-c';
                \$attributes['with-column-info'] = true;
                break;
            case '--with-positions':
            case '-P':
                \$attributes['with-positions'] = true;
                break;
            case '--with-recovery':
            case '-r':
                \$attributes['with-recovery'] = true;
                break;
            case '--help':
            case '-h';
                showHelp();
                break;
            case '--':
                \$parseOptions = false;
                break;
            default:
                if (\$arg[0] === '-') {
                    showHelp(\"Invalid operation \$arg.\");
                } else {
                    \$files[] = \$arg;
                }
        }
    }

    return [\$operations, \$files, \$attributes];
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/bin/php-parse";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/usr/bin/env php
<?php

foreach ([__DIR__ . '/../../../autoload.php', __DIR__ . '/../vendor/autoload.php'] as \$file) {
    if (file_exists(\$file)) {
        require \$file;
        break;
    }
}

ini_set('xdebug.max_nesting_level', 3000);

// Disable XDebug var_dump() output truncation
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

list(\$operations, \$files, \$attributes) = parseArgs(\$argv);

/* Dump nodes by default */
if (empty(\$operations)) {
    \$operations[] = 'dump';
}

if (empty(\$files)) {
    showHelp(\"Must specify at least one file.\");
}

\$lexer = new PhpParser\\Lexer\\Emulative(['usedAttributes' => [
    'startLine', 'endLine', 'startFilePos', 'endFilePos', 'comments'
]]);
\$parser = (new PhpParser\\ParserFactory)->create(
    PhpParser\\ParserFactory::PREFER_PHP7,
    \$lexer
);
\$dumper = new PhpParser\\NodeDumper([
    'dumpComments' => true,
    'dumpPositions' => \$attributes['with-positions'],
]);
\$prettyPrinter = new PhpParser\\PrettyPrinter\\Standard;

\$traverser = new PhpParser\\NodeTraverser();
\$traverser->addVisitor(new PhpParser\\NodeVisitor\\NameResolver);

foreach (\$files as \$file) {
    if (strpos(\$file, '<?php') === 0) {
        \$code = \$file;
        fwrite(STDERR, \"====> Code \$code\\n\");
    } else {
        if (!file_exists(\$file)) {
            fwrite(STDERR, \"File \$file does not exist.\\n\");
            exit(1);
        }

        \$code = file_get_contents(\$file);
        fwrite(STDERR, \"====> File \$file:\\n\");
    }

    if (\$attributes['with-recovery']) {
        \$errorHandler = new PhpParser\\ErrorHandler\\Collecting;
        \$stmts = \$parser->parse(\$code, \$errorHandler);
        foreach (\$errorHandler->getErrors() as \$error) {
            \$message = formatErrorMessage(\$error, \$code, \$attributes['with-column-info']);
            fwrite(STDERR, \$message . \"\\n\");
        }
        if (null === \$stmts) {
            continue;
        }
    } else {
        try {
            \$stmts = \$parser->parse(\$code);
        } catch (PhpParser\\Error \$error) {
            \$message = formatErrorMessage(\$error, \$code, \$attributes['with-column-info']);
            fwrite(STDERR, \$message . \"\\n\");
            exit(1);
        }
    }

    foreach (\$operations as \$operation) {
        if ('dump' === \$operation) {
            fwrite(STDERR, \"==> Node dump:\\n\");
            echo \$dumper->dump(\$stmts, \$code), \"\\n\";
        } elseif ('pretty-print' === \$operation) {
            fwrite(STDERR, \"==> Pretty print:\\n\");
            echo \$prettyPrinter->prettyPrintFile(\$stmts), \"\\n\";
        } elseif ('json-dump' === \$operation) {
            fwrite(STDERR, \"==> JSON dump:\\n\");
            echo json_encode(\$stmts, JSON_PRETTY_PRINT), \"\\n\";
        } elseif ('var-dump' === \$operation) {
            fwrite(STDERR, \"==> var_dump():\\n\");
            var_dump(\$stmts);
        } elseif ('resolve-names' === \$operation) {
            fwrite(STDERR, \"==> Resolved names.\\n\");
            \$stmts = \$traverser->traverse(\$stmts);
        }
    }
}

function formatErrorMessage(PhpParser\\Error \$e, \$code, \$withColumnInfo) {
    if (\$withColumnInfo && \$e->hasColumnInfo()) {
        return \$e->getMessageWithColumnInfo(\$code);
    } else {
        return \$e->getMessage();
    }
}

function showHelp(\$error = '') {
    if (\$error) {
        fwrite(STDERR, \$error . \"\\n\\n\");
    }
    fwrite(\$error ? STDERR : STDOUT, <<<OUTPUT
Usage: php-parse [operations] file1.php [file2.php ...]
   or: php-parse [operations] \"<?php code\"
Turn PHP source code into an abstract syntax tree.

Operations is a list of the following options (--dump by default):

    -d, --dump              Dump nodes using NodeDumper
    -p, --pretty-print      Pretty print file using PrettyPrinter\\Standard
    -j, --json-dump         Print json_encode() result
        --var-dump          var_dump() nodes (for exact structure)
    -N, --resolve-names     Resolve names using NodeVisitor\\NameResolver
    -c, --with-column-info  Show column-numbers for errors (if available)
    -P, --with-positions    Show positions in node dumps
    -r, --with-recovery     Use parsing with error recovery
    -h, --help              Display this page

Example:
    php-parse -d -p -N -d file.php

    Dumps nodes, pretty prints them, then resolves names and dumps them again.


OUTPUT
    );
    exit(\$error ? 1 : 0);
}

function parseArgs(\$args) {
    \$operations = [];
    \$files = [];
    \$attributes = [
        'with-column-info' => false,
        'with-positions' => false,
        'with-recovery' => false,
    ];

    array_shift(\$args);
    \$parseOptions = true;
    foreach (\$args as \$arg) {
        if (!\$parseOptions) {
            \$files[] = \$arg;
            continue;
        }

        switch (\$arg) {
            case '--dump':
            case '-d':
                \$operations[] = 'dump';
                break;
            case '--pretty-print':
            case '-p':
                \$operations[] = 'pretty-print';
                break;
            case '--json-dump':
            case '-j':
                \$operations[] = 'json-dump';
                break;
            case '--var-dump':
                \$operations[] = 'var-dump';
                break;
            case '--resolve-names':
            case '-N';
                \$operations[] = 'resolve-names';
                break;
            case '--with-column-info':
            case '-c';
                \$attributes['with-column-info'] = true;
                break;
            case '--with-positions':
            case '-P':
                \$attributes['with-positions'] = true;
                break;
            case '--with-recovery':
            case '-r':
                \$attributes['with-recovery'] = true;
                break;
            case '--help':
            case '-h';
                showHelp();
                break;
            case '--':
                \$parseOptions = false;
                break;
            default:
                if (\$arg[0] === '-') {
                    showHelp(\"Invalid operation \$arg.\");
                } else {
                    \$files[] = \$arg;
                }
        }
    }

    return [\$operations, \$files, \$attributes];
}
", "vendor/bin/php-parse", "/var/www/public/DevLaon/templates/vendor/bin/php-parse");
    }
}
