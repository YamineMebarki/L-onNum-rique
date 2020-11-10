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

/* vendor/symfony/var-dumper/Caster/MemcachedCaster.php */
class __TwigTemplate_f05764450b7c1601b75f6f002621dfbd7e1afdf68dda1d7ae7b229c8a00d8c8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/MemcachedCaster.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/MemcachedCaster.php"));

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
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class MemcachedCaster
{
    private static \$optionConstants;
    private static \$defaultOptions;

    public static function castMemcached(\\Memcached \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'servers' => \$c->getServerList(),
            Caster::PREFIX_VIRTUAL.'options' => new EnumStub(
                self::getNonDefaultOptions(\$c)
            ),
        ];

        return \$a;
    }

    private static function getNonDefaultOptions(\\Memcached \$c)
    {
        self::\$defaultOptions = self::\$defaultOptions ?? self::discoverDefaultOptions();
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        \$nonDefaultOptions = [];
        foreach (self::\$optionConstants as \$constantKey => \$value) {
            if (self::\$defaultOptions[\$constantKey] !== \$option = \$c->getOption(\$value)) {
                \$nonDefaultOptions[\$constantKey] = \$option;
            }
        }

        return \$nonDefaultOptions;
    }

    private static function discoverDefaultOptions()
    {
        \$defaultMemcached = new \\Memcached();
        \$defaultMemcached->addServer('127.0.0.1', 11211);

        \$defaultOptions = [];
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        foreach (self::\$optionConstants as \$constantKey => \$value) {
            \$defaultOptions[\$constantKey] = \$defaultMemcached->getOption(\$value);
        }

        return \$defaultOptions;
    }

    private static function getOptionConstants()
    {
        \$reflectedMemcached = new \\ReflectionClass(\\Memcached::class);

        \$optionConstants = [];
        foreach (\$reflectedMemcached->getConstants() as \$constantKey => \$value) {
            if (0 === strpos(\$constantKey, 'OPT_')) {
                \$optionConstants[\$constantKey] = \$value;
            }
        }

        return \$optionConstants;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/MemcachedCaster.php";
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
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class MemcachedCaster
{
    private static \$optionConstants;
    private static \$defaultOptions;

    public static function castMemcached(\\Memcached \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'servers' => \$c->getServerList(),
            Caster::PREFIX_VIRTUAL.'options' => new EnumStub(
                self::getNonDefaultOptions(\$c)
            ),
        ];

        return \$a;
    }

    private static function getNonDefaultOptions(\\Memcached \$c)
    {
        self::\$defaultOptions = self::\$defaultOptions ?? self::discoverDefaultOptions();
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        \$nonDefaultOptions = [];
        foreach (self::\$optionConstants as \$constantKey => \$value) {
            if (self::\$defaultOptions[\$constantKey] !== \$option = \$c->getOption(\$value)) {
                \$nonDefaultOptions[\$constantKey] = \$option;
            }
        }

        return \$nonDefaultOptions;
    }

    private static function discoverDefaultOptions()
    {
        \$defaultMemcached = new \\Memcached();
        \$defaultMemcached->addServer('127.0.0.1', 11211);

        \$defaultOptions = [];
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        foreach (self::\$optionConstants as \$constantKey => \$value) {
            \$defaultOptions[\$constantKey] = \$defaultMemcached->getOption(\$value);
        }

        return \$defaultOptions;
    }

    private static function getOptionConstants()
    {
        \$reflectedMemcached = new \\ReflectionClass(\\Memcached::class);

        \$optionConstants = [];
        foreach (\$reflectedMemcached->getConstants() as \$constantKey => \$value) {
            if (0 === strpos(\$constantKey, 'OPT_')) {
                \$optionConstants[\$constantKey] = \$value;
            }
        }

        return \$optionConstants;
    }
}
", "vendor/symfony/var-dumper/Caster/MemcachedCaster.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/MemcachedCaster.php");
    }
}
