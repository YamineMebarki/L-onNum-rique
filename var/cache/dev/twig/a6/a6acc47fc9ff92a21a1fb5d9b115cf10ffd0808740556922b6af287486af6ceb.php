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

/* vendor/symfony/cache/Tests/Traits/PdoPruneableTrait.php */
class __TwigTemplate_e4883dcd07c0a7781da0319ed7fbaca2a6119c3efeb90f7c0939df2691f901ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Traits/PdoPruneableTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Traits/PdoPruneableTrait.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Traits;

trait PdoPruneableTrait
{
    protected function isPruned(\$cache, \$name)
    {
        \$o = new \\ReflectionObject(\$cache);

        if (!\$o->hasMethod('getConnection')) {
            self::fail('Cache does not have \"getConnection()\" method.');
        }

        \$getPdoConn = \$o->getMethod('getConnection');
        \$getPdoConn->setAccessible(true);

        /** @var \\Doctrine\\DBAL\\Statement \$select */
        \$select = \$getPdoConn->invoke(\$cache)->prepare('SELECT 1 FROM cache_items WHERE item_id LIKE :id');
        \$select->bindValue(':id', sprintf('%%%s', \$name));
        \$select->execute();

        return 0 === \\count(\$select->fetchAll(\\PDO::FETCH_COLUMN));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Traits/PdoPruneableTrait.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Traits;

trait PdoPruneableTrait
{
    protected function isPruned(\$cache, \$name)
    {
        \$o = new \\ReflectionObject(\$cache);

        if (!\$o->hasMethod('getConnection')) {
            self::fail('Cache does not have \"getConnection()\" method.');
        }

        \$getPdoConn = \$o->getMethod('getConnection');
        \$getPdoConn->setAccessible(true);

        /** @var \\Doctrine\\DBAL\\Statement \$select */
        \$select = \$getPdoConn->invoke(\$cache)->prepare('SELECT 1 FROM cache_items WHERE item_id LIKE :id');
        \$select->bindValue(':id', sprintf('%%%s', \$name));
        \$select->execute();

        return 0 === \\count(\$select->fetchAll(\\PDO::FETCH_COLUMN));
    }
}
", "vendor/symfony/cache/Tests/Traits/PdoPruneableTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Traits/PdoPruneableTrait.php");
    }
}
