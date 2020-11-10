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

/* vendor/symfony/var-dumper/Caster/DoctrineCaster.php */
class __TwigTemplate_55df52afb2a5a0c3a72b3176c1069d87122092878f40ae86b06b4842029cae09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/DoctrineCaster.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/DoctrineCaster.php"));

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

use Doctrine\\Common\\Proxy\\Proxy as CommonProxy;
use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Proxy\\Proxy as OrmProxy;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Doctrine related classes to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DoctrineCaster
{
    public static function castCommonProxy(CommonProxy \$proxy, array \$a, Stub \$stub, \$isNested)
    {
        foreach (['__cloner__', '__initializer__'] as \$k) {
            if (\\array_key_exists(\$k, \$a)) {
                unset(\$a[\$k]);
                ++\$stub->cut;
            }
        }

        return \$a;
    }

    public static function castOrmProxy(OrmProxy \$proxy, array \$a, Stub \$stub, \$isNested)
    {
        foreach (['_entityPersister', '_identifier'] as \$k) {
            if (\\array_key_exists(\$k = \"\\0Doctrine\\\\ORM\\\\Proxy\\\\Proxy\\0\".\$k, \$a)) {
                unset(\$a[\$k]);
                ++\$stub->cut;
            }
        }

        return \$a;
    }

    public static function castPersistentCollection(PersistentCollection \$coll, array \$a, Stub \$stub, \$isNested)
    {
        foreach (['snapshot', 'association', 'typeClass'] as \$k) {
            if (\\array_key_exists(\$k = \"\\0Doctrine\\\\ORM\\\\PersistentCollection\\0\".\$k, \$a)) {
                \$a[\$k] = new CutStub(\$a[\$k]);
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
        return "vendor/symfony/var-dumper/Caster/DoctrineCaster.php";
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

use Doctrine\\Common\\Proxy\\Proxy as CommonProxy;
use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Proxy\\Proxy as OrmProxy;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Doctrine related classes to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DoctrineCaster
{
    public static function castCommonProxy(CommonProxy \$proxy, array \$a, Stub \$stub, \$isNested)
    {
        foreach (['__cloner__', '__initializer__'] as \$k) {
            if (\\array_key_exists(\$k, \$a)) {
                unset(\$a[\$k]);
                ++\$stub->cut;
            }
        }

        return \$a;
    }

    public static function castOrmProxy(OrmProxy \$proxy, array \$a, Stub \$stub, \$isNested)
    {
        foreach (['_entityPersister', '_identifier'] as \$k) {
            if (\\array_key_exists(\$k = \"\\0Doctrine\\\\ORM\\\\Proxy\\\\Proxy\\0\".\$k, \$a)) {
                unset(\$a[\$k]);
                ++\$stub->cut;
            }
        }

        return \$a;
    }

    public static function castPersistentCollection(PersistentCollection \$coll, array \$a, Stub \$stub, \$isNested)
    {
        foreach (['snapshot', 'association', 'typeClass'] as \$k) {
            if (\\array_key_exists(\$k = \"\\0Doctrine\\\\ORM\\\\PersistentCollection\\0\".\$k, \$a)) {
                \$a[\$k] = new CutStub(\$a[\$k]);
            }
        }

        return \$a;
    }
}
", "vendor/symfony/var-dumper/Caster/DoctrineCaster.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/DoctrineCaster.php");
    }
}
