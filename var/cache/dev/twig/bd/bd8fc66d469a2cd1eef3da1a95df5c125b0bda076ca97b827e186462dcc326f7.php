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

/* vendor/symfony/doctrine-bridge/Tests/Fixtures/CompositeObjectNoToStringIdEntity.php */
class __TwigTemplate_334674d6c6dd2e8dc8773b4728c3ebb19ec6cbed6b3d6b47e4334c71692efed6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/CompositeObjectNoToStringIdEntity.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/CompositeObjectNoToStringIdEntity.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * an entity that has two objects (class without toString methods) as primary key.
 *
 * @ORM\\Entity
 */
class CompositeObjectNoToStringIdEntity
{
    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\\Id
     * @ORM\\ManyToOne(targetEntity=\"SingleIntIdNoToStringEntity\", cascade={\"persist\"})
     * @ORM\\JoinColumn(name=\"object_one_id\")
     */
    protected \$objectOne;

    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\\Id
     * @ORM\\ManyToOne(targetEntity=\"SingleIntIdNoToStringEntity\", cascade={\"persist\"})
     * @ORM\\JoinColumn(name=\"object_two_id\")
     */
    protected \$objectTwo;

    public function __construct(SingleIntIdNoToStringEntity \$objectOne, SingleIntIdNoToStringEntity \$objectTwo)
    {
        \$this->objectOne = \$objectOne;
        \$this->objectTwo = \$objectTwo;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectOne()
    {
        return \$this->objectOne;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectTwo()
    {
        return \$this->objectTwo;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Fixtures/CompositeObjectNoToStringIdEntity.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * an entity that has two objects (class without toString methods) as primary key.
 *
 * @ORM\\Entity
 */
class CompositeObjectNoToStringIdEntity
{
    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\\Id
     * @ORM\\ManyToOne(targetEntity=\"SingleIntIdNoToStringEntity\", cascade={\"persist\"})
     * @ORM\\JoinColumn(name=\"object_one_id\")
     */
    protected \$objectOne;

    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\\Id
     * @ORM\\ManyToOne(targetEntity=\"SingleIntIdNoToStringEntity\", cascade={\"persist\"})
     * @ORM\\JoinColumn(name=\"object_two_id\")
     */
    protected \$objectTwo;

    public function __construct(SingleIntIdNoToStringEntity \$objectOne, SingleIntIdNoToStringEntity \$objectTwo)
    {
        \$this->objectOne = \$objectOne;
        \$this->objectTwo = \$objectTwo;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectOne()
    {
        return \$this->objectOne;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectTwo()
    {
        return \$this->objectTwo;
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Fixtures/CompositeObjectNoToStringIdEntity.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Fixtures/CompositeObjectNoToStringIdEntity.php");
    }
}
