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

/* vendor/symfony/var-dumper/Cloner/Stub.php */
class __TwigTemplate_84aecdfbb84d8c914861d6823ed6d1ecef2d149a98a424f987d4baaa30d3a840 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Cloner/Stub.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Cloner/Stub.php"));

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

namespace Symfony\\Component\\VarDumper\\Cloner;

/**
 * Represents the main properties of a PHP variable.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Stub
{
    const TYPE_REF = 1;
    const TYPE_STRING = 2;
    const TYPE_ARRAY = 3;
    const TYPE_OBJECT = 4;
    const TYPE_RESOURCE = 5;

    const STRING_BINARY = 1;
    const STRING_UTF8 = 2;

    const ARRAY_ASSOC = 1;
    const ARRAY_INDEXED = 2;

    public \$type = self::TYPE_REF;
    public \$class = '';
    public \$value;
    public \$cut = 0;
    public \$handle = 0;
    public \$refCount = 0;
    public \$position = 0;
    public \$attr = [];

    private static \$defaultProperties = [];

    /**
     * @internal
     */
    public function __sleep()
    {
        \$properties = [];

        if (!isset(self::\$defaultProperties[\$c = \\get_class(\$this)])) {
            self::\$defaultProperties[\$c] = get_class_vars(\$c);

            foreach ((new \\ReflectionClass(\$c))->getStaticProperties() as \$k => \$v) {
                unset(self::\$defaultProperties[\$c][\$k]);
            }
        }

        foreach (self::\$defaultProperties[\$c] as \$k => \$v) {
            if (\$this->\$k !== \$v) {
                \$properties[] = \$k;
            }
        }

        return \$properties;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Cloner/Stub.php";
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

namespace Symfony\\Component\\VarDumper\\Cloner;

/**
 * Represents the main properties of a PHP variable.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Stub
{
    const TYPE_REF = 1;
    const TYPE_STRING = 2;
    const TYPE_ARRAY = 3;
    const TYPE_OBJECT = 4;
    const TYPE_RESOURCE = 5;

    const STRING_BINARY = 1;
    const STRING_UTF8 = 2;

    const ARRAY_ASSOC = 1;
    const ARRAY_INDEXED = 2;

    public \$type = self::TYPE_REF;
    public \$class = '';
    public \$value;
    public \$cut = 0;
    public \$handle = 0;
    public \$refCount = 0;
    public \$position = 0;
    public \$attr = [];

    private static \$defaultProperties = [];

    /**
     * @internal
     */
    public function __sleep()
    {
        \$properties = [];

        if (!isset(self::\$defaultProperties[\$c = \\get_class(\$this)])) {
            self::\$defaultProperties[\$c] = get_class_vars(\$c);

            foreach ((new \\ReflectionClass(\$c))->getStaticProperties() as \$k => \$v) {
                unset(self::\$defaultProperties[\$c][\$k]);
            }
        }

        foreach (self::\$defaultProperties[\$c] as \$k => \$v) {
            if (\$this->\$k !== \$v) {
                \$properties[] = \$k;
            }
        }

        return \$properties;
    }
}
", "vendor/symfony/var-dumper/Cloner/Stub.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Cloner/Stub.php");
    }
}
