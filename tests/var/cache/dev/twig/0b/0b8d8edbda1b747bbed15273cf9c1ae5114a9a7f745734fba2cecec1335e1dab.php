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

/* vendor/symfony/var-dumper/Cloner/Cursor.php */
class __TwigTemplate_3da89d290a994a9fd371d833ffa3271c66ab452a7663e8c30a1cc122b9aed7e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Cloner/Cursor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Cloner/Cursor.php"));

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
 * Represents the current state of a dumper while dumping.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Cursor
{
    const HASH_INDEXED = Stub::ARRAY_INDEXED;
    const HASH_ASSOC = Stub::ARRAY_ASSOC;
    const HASH_OBJECT = Stub::TYPE_OBJECT;
    const HASH_RESOURCE = Stub::TYPE_RESOURCE;

    public \$depth = 0;
    public \$refIndex = 0;
    public \$softRefTo = 0;
    public \$softRefCount = 0;
    public \$softRefHandle = 0;
    public \$hardRefTo = 0;
    public \$hardRefCount = 0;
    public \$hardRefHandle = 0;
    public \$hashType;
    public \$hashKey;
    public \$hashKeyIsBinary;
    public \$hashIndex = 0;
    public \$hashLength = 0;
    public \$hashCut = 0;
    public \$stop = false;
    public \$attr = [];
    public \$skipChildren = false;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Cloner/Cursor.php";
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
 * Represents the current state of a dumper while dumping.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Cursor
{
    const HASH_INDEXED = Stub::ARRAY_INDEXED;
    const HASH_ASSOC = Stub::ARRAY_ASSOC;
    const HASH_OBJECT = Stub::TYPE_OBJECT;
    const HASH_RESOURCE = Stub::TYPE_RESOURCE;

    public \$depth = 0;
    public \$refIndex = 0;
    public \$softRefTo = 0;
    public \$softRefCount = 0;
    public \$softRefHandle = 0;
    public \$hardRefTo = 0;
    public \$hardRefCount = 0;
    public \$hardRefHandle = 0;
    public \$hashType;
    public \$hashKey;
    public \$hashKeyIsBinary;
    public \$hashIndex = 0;
    public \$hashLength = 0;
    public \$hashCut = 0;
    public \$stop = false;
    public \$attr = [];
    public \$skipChildren = false;
}
", "vendor/symfony/var-dumper/Cloner/Cursor.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Cloner/Cursor.php");
    }
}
