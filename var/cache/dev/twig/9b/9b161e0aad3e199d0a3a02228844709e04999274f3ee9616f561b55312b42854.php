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

/* vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineDummy.php */
class __TwigTemplate_f6fc70eae5f4272165085e24d9872af126a8e5c1520e7e6f6a03985f9fc4a5c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineDummy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineDummy.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures;

use Doctrine\\ORM\\Mapping\\Column;
use Doctrine\\ORM\\Mapping\\Entity;
use Doctrine\\ORM\\Mapping\\Id;
use Doctrine\\ORM\\Mapping\\ManyToMany;
use Doctrine\\ORM\\Mapping\\ManyToOne;
use Doctrine\\ORM\\Mapping\\OneToMany;

/**
 * @Entity
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineDummy
{
    /**
     * @Id
     * @Column(type=\"smallint\")
     */
    public \$id;

    /**
     * @ManyToOne(targetEntity=\"DoctrineRelation\")
     */
    public \$foo;

    /**
     * @ManyToMany(targetEntity=\"DoctrineRelation\")
     */
    public \$bar;

    /**
     * @ManyToMany(targetEntity=\"DoctrineRelation\", indexBy=\"rguid\")
     */
    protected \$indexedBar;

    /**
     * @OneToMany(targetEntity=\"DoctrineRelation\", mappedBy=\"foo\", indexBy=\"foo\")
     */
    protected \$indexedFoo;

    /**
     * @Column(type=\"guid\")
     */
    protected \$guid;

    /**
     * @Column(type=\"time\")
     */
    private \$time;

    /**
     * @Column(type=\"time_immutable\")
     */
    private \$timeImmutable;

    /**
     * @Column(type=\"dateinterval\")
     */
    private \$dateInterval;

    /**
     * @Column(type=\"json_array\")
     */
    private \$json;

    /**
     * @Column(type=\"simple_array\")
     */
    private \$simpleArray;

    /**
     * @Column(type=\"float\")
     */
    private \$float;

    /**
     * @Column(type=\"decimal\", precision=10, scale=2)
     */
    private \$decimal;

    /**
     * @Column(type=\"boolean\")
     */
    private \$bool;

    /**
     * @Column(type=\"binary\")
     */
    private \$binary;

    /**
     * @Column(type=\"custom_foo\")
     */
    private \$customFoo;

    /**
     * @Column(type=\"bigint\")
     */
    private \$bigint;

    public \$notMapped;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineDummy.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures;

use Doctrine\\ORM\\Mapping\\Column;
use Doctrine\\ORM\\Mapping\\Entity;
use Doctrine\\ORM\\Mapping\\Id;
use Doctrine\\ORM\\Mapping\\ManyToMany;
use Doctrine\\ORM\\Mapping\\ManyToOne;
use Doctrine\\ORM\\Mapping\\OneToMany;

/**
 * @Entity
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineDummy
{
    /**
     * @Id
     * @Column(type=\"smallint\")
     */
    public \$id;

    /**
     * @ManyToOne(targetEntity=\"DoctrineRelation\")
     */
    public \$foo;

    /**
     * @ManyToMany(targetEntity=\"DoctrineRelation\")
     */
    public \$bar;

    /**
     * @ManyToMany(targetEntity=\"DoctrineRelation\", indexBy=\"rguid\")
     */
    protected \$indexedBar;

    /**
     * @OneToMany(targetEntity=\"DoctrineRelation\", mappedBy=\"foo\", indexBy=\"foo\")
     */
    protected \$indexedFoo;

    /**
     * @Column(type=\"guid\")
     */
    protected \$guid;

    /**
     * @Column(type=\"time\")
     */
    private \$time;

    /**
     * @Column(type=\"time_immutable\")
     */
    private \$timeImmutable;

    /**
     * @Column(type=\"dateinterval\")
     */
    private \$dateInterval;

    /**
     * @Column(type=\"json_array\")
     */
    private \$json;

    /**
     * @Column(type=\"simple_array\")
     */
    private \$simpleArray;

    /**
     * @Column(type=\"float\")
     */
    private \$float;

    /**
     * @Column(type=\"decimal\", precision=10, scale=2)
     */
    private \$decimal;

    /**
     * @Column(type=\"boolean\")
     */
    private \$bool;

    /**
     * @Column(type=\"binary\")
     */
    private \$binary;

    /**
     * @Column(type=\"custom_foo\")
     */
    private \$customFoo;

    /**
     * @Column(type=\"bigint\")
     */
    private \$bigint;

    public \$notMapped;
}
", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineDummy.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineDummy.php");
    }
}
