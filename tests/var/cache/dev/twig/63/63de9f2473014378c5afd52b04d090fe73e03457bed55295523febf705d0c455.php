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

/* vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php */
class __TwigTemplate_e580c31f0d2cdcce60044e381c3ff1dbb0e752c390fe7cfa14a06d1002c5f2be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Lexer\\TokenEmulator;

use PhpParser\\Lexer\\Emulative;

final class FnTokenEmulator implements TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code) : bool
    {
        // skip version where this is supported
        if (version_compare(\\PHP_VERSION, Emulative::PHP_7_4, '>=')) {
            return false;
        }

        return strpos(\$code, 'fn') !== false;
    }

    public function emulate(string \$code, array \$tokens): array
    {
        // We need to manually iterate and manage a count because we'll change
        // the tokens array on the way
        foreach (\$tokens as \$i => \$token) {
            if (\$token[0] === T_STRING && \$token[1] === 'fn') {
                \$previousNonSpaceToken = \$this->getPreviousNonSpaceToken(\$tokens, \$i);
                if (\$previousNonSpaceToken !== null && \$previousNonSpaceToken[0] === T_OBJECT_OPERATOR) {
                    continue;
                }

                \$tokens[\$i][0] = Emulative::T_FN;
            }
        }

        return \$tokens;
    }

    /**
     * @param mixed[] \$tokens
     * @return mixed[]|null
     */
    private function getPreviousNonSpaceToken(array \$tokens, int \$start)
    {
        for (\$i = \$start - 1; \$i >= 0; --\$i) {
            if (\$tokens[\$i][0] === T_WHITESPACE) {
                continue;
            }

            return \$tokens[\$i];
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php";
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

final class FnTokenEmulator implements TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code) : bool
    {
        // skip version where this is supported
        if (version_compare(\\PHP_VERSION, Emulative::PHP_7_4, '>=')) {
            return false;
        }

        return strpos(\$code, 'fn') !== false;
    }

    public function emulate(string \$code, array \$tokens): array
    {
        // We need to manually iterate and manage a count because we'll change
        // the tokens array on the way
        foreach (\$tokens as \$i => \$token) {
            if (\$token[0] === T_STRING && \$token[1] === 'fn') {
                \$previousNonSpaceToken = \$this->getPreviousNonSpaceToken(\$tokens, \$i);
                if (\$previousNonSpaceToken !== null && \$previousNonSpaceToken[0] === T_OBJECT_OPERATOR) {
                    continue;
                }

                \$tokens[\$i][0] = Emulative::T_FN;
            }
        }

        return \$tokens;
    }

    /**
     * @param mixed[] \$tokens
     * @return mixed[]|null
     */
    private function getPreviousNonSpaceToken(array \$tokens, int \$start)
    {
        for (\$i = \$start - 1; \$i >= 0; --\$i) {
            if (\$tokens[\$i][0] === T_WHITESPACE) {
                continue;
            }

            return \$tokens[\$i];
        }

        return null;
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php");
    }
}
