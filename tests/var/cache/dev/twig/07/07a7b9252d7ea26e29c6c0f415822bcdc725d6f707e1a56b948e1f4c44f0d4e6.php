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

/* vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/VarTag.php */
class __TwigTemplate_ac77647e7a97db39f6f8edad22117f7585fc097ec49c744468531eaf0aae36a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/VarTag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/VarTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

class VarTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var string[]
     */
    private \$types = [];

    /**
     * @var string|null
     */
    private \$variableName;

    /**
     * @var string|null
     */
    private \$description;

    /**
     * {@inheritDoc}
     */
    public function getName() : string
    {
        return 'var';
    }

    /**
     * {@inheritDoc}
     */
    public function initialize(\$tagDocblockLine) : void
    {
        \$match = [];

        if (! preg_match(
            '#^([^\\\$]\\S+)?\\s*(\\\$[\\S]+)?\\s*(.*)\$#m',
            \$tagDocblockLine,
            \$match
        )) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->types = explode('|', rtrim(\$match[1]));
        }

        if (\$match[2] !== '') {
            \$this->variableName = \$match[2];
        }

        if (\$match[3] !== '') {
            \$this->description = \$match[3];
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getTypes() : array
    {
        return \$this->types;
    }

    public function getVariableName() : ?string
    {
        return \$this->variableName;
    }

    public function getDescription() : ?string
    {
        return \$this->description;
    }

    public function __toString() : string
    {
        return 'DocBlock Tag [ * @' . \$this->getName() . ' ]' . PHP_EOL;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/VarTag.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

class VarTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var string[]
     */
    private \$types = [];

    /**
     * @var string|null
     */
    private \$variableName;

    /**
     * @var string|null
     */
    private \$description;

    /**
     * {@inheritDoc}
     */
    public function getName() : string
    {
        return 'var';
    }

    /**
     * {@inheritDoc}
     */
    public function initialize(\$tagDocblockLine) : void
    {
        \$match = [];

        if (! preg_match(
            '#^([^\\\$]\\S+)?\\s*(\\\$[\\S]+)?\\s*(.*)\$#m',
            \$tagDocblockLine,
            \$match
        )) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->types = explode('|', rtrim(\$match[1]));
        }

        if (\$match[2] !== '') {
            \$this->variableName = \$match[2];
        }

        if (\$match[3] !== '') {
            \$this->description = \$match[3];
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getTypes() : array
    {
        return \$this->types;
    }

    public function getVariableName() : ?string
    {
        return \$this->variableName;
    }

    public function getDescription() : ?string
    {
        return \$this->description;
    }

    public function __toString() : string
    {
        return 'DocBlock Tag [ * @' . \$this->getName() . ' ]' . PHP_EOL;
    }
}
", "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/VarTag.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/VarTag.php");
    }
}
