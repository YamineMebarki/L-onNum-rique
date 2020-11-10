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

/* vendor/symfony/var-dumper/Caster/StubCaster.php */
class __TwigTemplate_4e83742a5cf3b3d687bbaaf9ec79f5ac76ba74584c349b73548f8f4d447ffe80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/StubCaster.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/StubCaster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts a caster's Stub.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class StubCaster
{
    public static function castStub(Stub \$c, array \$a, Stub \$stub, \$isNested)
    {
        if (\$isNested) {
            \$stub->type = \$c->type;
            \$stub->class = \$c->class;
            \$stub->value = \$c->value;
            \$stub->handle = \$c->handle;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            if (Stub::TYPE_REF === \$c->type && !\$c->class && \\is_string(\$c->value) && !preg_match('//u', \$c->value)) {
                \$stub->type = Stub::TYPE_STRING;
                \$stub->class = Stub::STRING_BINARY;
            }

            \$a = [];
        }

        return \$a;
    }

    public static function castCutArray(CutArrayStub \$c, array \$a, Stub \$stub, \$isNested)
    {
        return \$isNested ? \$c->preservedSubset : \$a;
    }

    public static function cutInternals(\$obj, array \$a, Stub \$stub, \$isNested)
    {
        if (\$isNested) {
            \$stub->cut += \\count(\$a);

            return [];
        }

        return \$a;
    }

    public static function castEnum(EnumStub \$c, array \$a, Stub \$stub, \$isNested)
    {
        if (\$isNested) {
            \$stub->class = \$c->dumpKeys ? '' : null;
            \$stub->handle = 0;
            \$stub->value = null;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            \$a = [];

            if (\$c->value) {
                foreach (array_keys(\$c->value) as \$k) {
                    \$keys[] = !isset(\$k[0]) || \"\\0\" !== \$k[0] ? Caster::PREFIX_VIRTUAL.\$k : \$k;
                }
                // Preserve references with array_combine()
                \$a = array_combine(\$keys, \$c->value);
            }
        }

        return \$a;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/StubCaster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts a caster's Stub.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class StubCaster
{
    public static function castStub(Stub \$c, array \$a, Stub \$stub, \$isNested)
    {
        if (\$isNested) {
            \$stub->type = \$c->type;
            \$stub->class = \$c->class;
            \$stub->value = \$c->value;
            \$stub->handle = \$c->handle;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            if (Stub::TYPE_REF === \$c->type && !\$c->class && \\is_string(\$c->value) && !preg_match('//u', \$c->value)) {
                \$stub->type = Stub::TYPE_STRING;
                \$stub->class = Stub::STRING_BINARY;
            }

            \$a = [];
        }

        return \$a;
    }

    public static function castCutArray(CutArrayStub \$c, array \$a, Stub \$stub, \$isNested)
    {
        return \$isNested ? \$c->preservedSubset : \$a;
    }

    public static function cutInternals(\$obj, array \$a, Stub \$stub, \$isNested)
    {
        if (\$isNested) {
            \$stub->cut += \\count(\$a);

            return [];
        }

        return \$a;
    }

    public static function castEnum(EnumStub \$c, array \$a, Stub \$stub, \$isNested)
    {
        if (\$isNested) {
            \$stub->class = \$c->dumpKeys ? '' : null;
            \$stub->handle = 0;
            \$stub->value = null;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            \$a = [];

            if (\$c->value) {
                foreach (array_keys(\$c->value) as \$k) {
                    \$keys[] = !isset(\$k[0]) || \"\\0\" !== \$k[0] ? Caster::PREFIX_VIRTUAL.\$k : \$k;
                }
                // Preserve references with array_combine()
                \$a = array_combine(\$keys, \$c->value);
            }
        }

        return \$a;
    }
}
", "vendor/symfony/var-dumper/Caster/StubCaster.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/StubCaster.php");
    }
}
