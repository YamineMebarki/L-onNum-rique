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

/* vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php */
class __TwigTemplate_9ed1488bdae1aa95a20e7c68736efcd14e598cb61b33f38bb1d8aa161539f580 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

/**
 * Utility class capable of generating unique
 * valid class/property/method identifiers
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class UniqueIdentifierGenerator
{
    const VALID_IDENTIFIER_FORMAT = '/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]+\$/';
    const DEFAULT_IDENTIFIER = 'g';

    /**
     * Generates a valid unique identifier from the given name
     */
    public static function getIdentifier(string \$name) : string
    {
        return str_replace(
            '.',
            '',
            uniqid(
                preg_match(static::VALID_IDENTIFIER_FORMAT, \$name)
                ? \$name
                : static::DEFAULT_IDENTIFIER,
                true
            )
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

/**
 * Utility class capable of generating unique
 * valid class/property/method identifiers
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class UniqueIdentifierGenerator
{
    const VALID_IDENTIFIER_FORMAT = '/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]+\$/';
    const DEFAULT_IDENTIFIER = 'g';

    /**
     * Generates a valid unique identifier from the given name
     */
    public static function getIdentifier(string \$name) : string
    {
        return str_replace(
            '.',
            '',
            uniqid(
                preg_match(static::VALID_IDENTIFIER_FORMAT, \$name)
                ? \$name
                : static::DEFAULT_IDENTIFIER,
                true
            )
        );
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php");
    }
}
