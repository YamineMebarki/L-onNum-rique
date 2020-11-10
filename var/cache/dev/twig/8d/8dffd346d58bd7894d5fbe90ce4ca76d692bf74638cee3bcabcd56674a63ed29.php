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

/* vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php */
class __TwigTemplate_d7543a88e05f13ab492e451d20ba17ae9cffe8cf0a021af032542c736234742d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Profiler\\Node;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents a profile enter node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EnterProfileNode extends Node
{
    public function __construct(string \$extensionName, string \$type, string \$name, string \$varName)
    {
        parent::__construct([], ['extension_name' => \$extensionName, 'name' => \$name, 'type' => \$type, 'var_name' => \$varName]);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->write(sprintf('\$%s = \$this->extensions[', \$this->getAttribute('var_name')))
            ->repr(\$this->getAttribute('extension_name'))
            ->raw(\"];\\n\")
            ->write(sprintf('\$%s->enter(\$%s = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), ', \$this->getAttribute('var_name'), \$this->getAttribute('var_name').'_prof'))
            ->repr(\$this->getAttribute('type'))
            ->raw(', ')
            ->repr(\$this->getAttribute('name'))
            ->raw(\"));\\n\\n\")
        ;
    }
}

class_alias('Twig\\Profiler\\Node\\EnterProfileNode', 'Twig_Profiler_Node_EnterProfile');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Profiler\\Node;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents a profile enter node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EnterProfileNode extends Node
{
    public function __construct(string \$extensionName, string \$type, string \$name, string \$varName)
    {
        parent::__construct([], ['extension_name' => \$extensionName, 'name' => \$name, 'type' => \$type, 'var_name' => \$varName]);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->write(sprintf('\$%s = \$this->extensions[', \$this->getAttribute('var_name')))
            ->repr(\$this->getAttribute('extension_name'))
            ->raw(\"];\\n\")
            ->write(sprintf('\$%s->enter(\$%s = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), ', \$this->getAttribute('var_name'), \$this->getAttribute('var_name').'_prof'))
            ->repr(\$this->getAttribute('type'))
            ->raw(', ')
            ->repr(\$this->getAttribute('name'))
            ->raw(\"));\\n\\n\")
        ;
    }
}

class_alias('Twig\\Profiler\\Node\\EnterProfileNode', 'Twig_Profiler_Node_EnterProfile');
", "vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php");
    }
}
