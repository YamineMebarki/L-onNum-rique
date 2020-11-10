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

/* vendor/fzaninotto/faker/src/Faker/Provider/Uuid.php */
class __TwigTemplate_a445b90a3ab1dddb93e8abdf9d0cad3e471cd24f75a11d9042e3abeda4f5d71c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Uuid.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Uuid.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

class Uuid extends Base
{
    /**
     * Generate name based md5 UUID (version 3).
     * @example '7e57d004-2b97-0e7a-b45f-5387367791cd'
     */
    public static function uuid()
    {
        // fix for compatibility with 32bit architecture; seed range restricted to 62bit
        \$seed = mt_rand(0, 2147483647) . '#' . mt_rand(0, 2147483647);

        // Hash the seed and convert to a byte array
        \$val = md5(\$seed, true);
        \$byte = array_values(unpack('C16', \$val));

        // extract fields from byte array
        \$tLo = (\$byte[0] << 24) | (\$byte[1] << 16) | (\$byte[2] << 8) | \$byte[3];
        \$tMi = (\$byte[4] << 8) | \$byte[5];
        \$tHi = (\$byte[6] << 8) | \$byte[7];
        \$csLo = \$byte[9];
        \$csHi = \$byte[8] & 0x3f | (1 << 7);

        // correct byte order for big edian architecture
        if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
            \$tLo = ((\$tLo & 0x000000ff) << 24) | ((\$tLo & 0x0000ff00) << 8)
                | ((\$tLo & 0x00ff0000) >> 8) | ((\$tLo & 0xff000000) >> 24);
            \$tMi = ((\$tMi & 0x00ff) << 8) | ((\$tMi & 0xff00) >> 8);
            \$tHi = ((\$tHi & 0x00ff) << 8) | ((\$tHi & 0xff00) >> 8);
        }

        // apply version number
        \$tHi &= 0x0fff;
        \$tHi |= (3 << 12);

        // cast to string
        \$uuid = sprintf(
            '%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
            \$tLo,
            \$tMi,
            \$tHi,
            \$csHi,
            \$csLo,
            \$byte[10],
            \$byte[11],
            \$byte[12],
            \$byte[13],
            \$byte[14],
            \$byte[15]
        );

        return \$uuid;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Uuid.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

class Uuid extends Base
{
    /**
     * Generate name based md5 UUID (version 3).
     * @example '7e57d004-2b97-0e7a-b45f-5387367791cd'
     */
    public static function uuid()
    {
        // fix for compatibility with 32bit architecture; seed range restricted to 62bit
        \$seed = mt_rand(0, 2147483647) . '#' . mt_rand(0, 2147483647);

        // Hash the seed and convert to a byte array
        \$val = md5(\$seed, true);
        \$byte = array_values(unpack('C16', \$val));

        // extract fields from byte array
        \$tLo = (\$byte[0] << 24) | (\$byte[1] << 16) | (\$byte[2] << 8) | \$byte[3];
        \$tMi = (\$byte[4] << 8) | \$byte[5];
        \$tHi = (\$byte[6] << 8) | \$byte[7];
        \$csLo = \$byte[9];
        \$csHi = \$byte[8] & 0x3f | (1 << 7);

        // correct byte order for big edian architecture
        if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
            \$tLo = ((\$tLo & 0x000000ff) << 24) | ((\$tLo & 0x0000ff00) << 8)
                | ((\$tLo & 0x00ff0000) >> 8) | ((\$tLo & 0xff000000) >> 24);
            \$tMi = ((\$tMi & 0x00ff) << 8) | ((\$tMi & 0xff00) >> 8);
            \$tHi = ((\$tHi & 0x00ff) << 8) | ((\$tHi & 0xff00) >> 8);
        }

        // apply version number
        \$tHi &= 0x0fff;
        \$tHi |= (3 << 12);

        // cast to string
        \$uuid = sprintf(
            '%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
            \$tLo,
            \$tMi,
            \$tHi,
            \$csHi,
            \$csLo,
            \$byte[10],
            \$byte[11],
            \$byte[12],
            \$byte[13],
            \$byte[14],
            \$byte[15]
        );

        return \$uuid;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Uuid.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Uuid.php");
    }
}
