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

/* vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/CoaleseEqualTokenEmulator.php */
class __TwigTemplate_a732a706c5a82f0b02df6cd847adf1fc6a14a593ebc40813904cf61838a37e36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/CoaleseEqualTokenEmulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/CoaleseEqualTokenEmulator.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Lexer\\TokenEmulator;

use PhpParser\\Lexer\\Emulative;

final class CoaleseEqualTokenEmulator implements TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code) : bool
    {
        // skip version where this is supported
        if (version_compare(\\PHP_VERSION, Emulative::PHP_7_4, '>=')) {
            return false;
        }

        return strpos(\$code, '??=') !== false;
    }

    public function emulate(string \$code, array \$tokens): array
    {
        // We need to manually iterate and manage a count because we'll change
        // the tokens array on the way
        \$line = 1;
        for (\$i = 0, \$c = count(\$tokens); \$i < \$c; ++\$i) {
            if (isset(\$tokens[\$i + 1])) {
                if (\$tokens[\$i][0] === T_COALESCE && \$tokens[\$i + 1] === '=') {
                    array_splice(\$tokens, \$i, 2, [
                        [Emulative::T_COALESCE_EQUAL, '??=', \$line]
                    ]);
                    \$c--;
                    continue;
                }
            }
            if (\\is_array(\$tokens[\$i])) {
                \$line += substr_count(\$tokens[\$i][1], \"\\n\");
            }
        }

        return \$tokens;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/CoaleseEqualTokenEmulator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Lexer\\TokenEmulator;

use PhpParser\\Lexer\\Emulative;

final class CoaleseEqualTokenEmulator implements TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code) : bool
    {
        // skip version where this is supported
        if (version_compare(\\PHP_VERSION, Emulative::PHP_7_4, '>=')) {
            return false;
        }

        return strpos(\$code, '??=') !== false;
    }

    public function emulate(string \$code, array \$tokens): array
    {
        // We need to manually iterate and manage a count because we'll change
        // the tokens array on the way
        \$line = 1;
        for (\$i = 0, \$c = count(\$tokens); \$i < \$c; ++\$i) {
            if (isset(\$tokens[\$i + 1])) {
                if (\$tokens[\$i][0] === T_COALESCE && \$tokens[\$i + 1] === '=') {
                    array_splice(\$tokens, \$i, 2, [
                        [Emulative::T_COALESCE_EQUAL, '??=', \$line]
                    ]);
                    \$c--;
                    continue;
                }
            }
            if (\\is_array(\$tokens[\$i])) {
                \$line += substr_count(\$tokens[\$i][1], \"\\n\");
            }
        }

        return \$tokens;
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/CoaleseEqualTokenEmulator.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/CoaleseEqualTokenEmulator.php");
    }
}
