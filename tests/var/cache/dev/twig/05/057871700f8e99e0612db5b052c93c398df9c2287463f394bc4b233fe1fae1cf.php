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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUse.php */
class __TwigTemplate_67e28d13b359128688ada04484a65e74b5c1fbddc74f24ecbbc676c9dfee6f74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUse.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUse.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class TraitUse implements Builder
{
    protected \$traits = [];
    protected \$adaptations = [];

    /**
     * Creates a trait use builder.
     *
     * @param Node\\Name|string ...\$traits Names of used traits
     */
    public function __construct(...\$traits) {
        foreach (\$traits as \$trait) {
            \$this->and(\$trait);
        }
    }

    /**
     * Adds used trait.
     *
     * @param Node\\Name|string \$trait Trait name
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function and(\$trait) {
        \$this->traits[] = BuilderHelpers::normalizeName(\$trait);
        return \$this;
    }

    /**
     * Adds trait adaptation.
     *
     * @param Stmt\\TraitUseAdaptation|Builder\\TraitUseAdaptation \$adaptation Trait adaptation
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function with(\$adaptation) {
        \$adaptation = BuilderHelpers::normalizeNode(\$adaptation);

        if (!\$adaptation instanceof Stmt\\TraitUseAdaptation) {
            throw new \\LogicException('Adaptation must have type TraitUseAdaptation');
        }

        \$this->adaptations[] = \$adaptation;
        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\TraitUse(\$this->traits, \$this->adaptations);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUse.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class TraitUse implements Builder
{
    protected \$traits = [];
    protected \$adaptations = [];

    /**
     * Creates a trait use builder.
     *
     * @param Node\\Name|string ...\$traits Names of used traits
     */
    public function __construct(...\$traits) {
        foreach (\$traits as \$trait) {
            \$this->and(\$trait);
        }
    }

    /**
     * Adds used trait.
     *
     * @param Node\\Name|string \$trait Trait name
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function and(\$trait) {
        \$this->traits[] = BuilderHelpers::normalizeName(\$trait);
        return \$this;
    }

    /**
     * Adds trait adaptation.
     *
     * @param Stmt\\TraitUseAdaptation|Builder\\TraitUseAdaptation \$adaptation Trait adaptation
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function with(\$adaptation) {
        \$adaptation = BuilderHelpers::normalizeNode(\$adaptation);

        if (!\$adaptation instanceof Stmt\\TraitUseAdaptation) {
            throw new \\LogicException('Adaptation must have type TraitUseAdaptation');
        }

        \$this->adaptations[] = \$adaptation;
        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\TraitUse(\$this->traits, \$this->adaptations);
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUse.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUse.php");
    }
}
