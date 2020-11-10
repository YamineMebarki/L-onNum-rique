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

/* vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php */
class __TwigTemplate_7149a21a17f91cd9d32b2a4f3e82d4ee94fda02cb502d5b56616f69661ec70ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Renderer;

use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @internal
 */
final class FormTypeRenderer
{
    private \$generator;

    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    public function render(ClassNameDetails \$formClassDetails, array \$formFields, ClassNameDetails \$boundClassDetails = null, array \$constraintClasses = [])
    {
        \$fieldTypeUseStatements = [];
        \$fields = [];
        foreach (\$formFields as \$name => \$fieldTypeOptions) {
            \$fieldTypeOptions = \$fieldTypeOptions ?? ['type' => null, 'options_code' => null];

            if (isset(\$fieldTypeOptions['type'])) {
                \$fieldTypeUseStatements[] = \$fieldTypeOptions['type'];
                \$fieldTypeOptions['type'] = Str::getShortClassName(\$fieldTypeOptions['type']);
            }

            \$fields[\$name] = \$fieldTypeOptions;
        }

        \$this->generator->generateClass(
            \$formClassDetails->getFullName(),
            'form/Type.tpl.php',
            [
                'bounded_full_class_name' => \$boundClassDetails ? \$boundClassDetails->getFullName() : null,
                'bounded_class_name' => \$boundClassDetails ? \$boundClassDetails->getShortName() : null,
                'form_fields' => \$fields,
                'field_type_use_statements' => \$fieldTypeUseStatements,
                'constraint_use_statements' => \$constraintClasses,
            ]
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Renderer;

use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @internal
 */
final class FormTypeRenderer
{
    private \$generator;

    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    public function render(ClassNameDetails \$formClassDetails, array \$formFields, ClassNameDetails \$boundClassDetails = null, array \$constraintClasses = [])
    {
        \$fieldTypeUseStatements = [];
        \$fields = [];
        foreach (\$formFields as \$name => \$fieldTypeOptions) {
            \$fieldTypeOptions = \$fieldTypeOptions ?? ['type' => null, 'options_code' => null];

            if (isset(\$fieldTypeOptions['type'])) {
                \$fieldTypeUseStatements[] = \$fieldTypeOptions['type'];
                \$fieldTypeOptions['type'] = Str::getShortClassName(\$fieldTypeOptions['type']);
            }

            \$fields[\$name] = \$fieldTypeOptions;
        }

        \$this->generator->generateClass(
            \$formClassDetails->getFullName(),
            'form/Type.tpl.php',
            [
                'bounded_full_class_name' => \$boundClassDetails ? \$boundClassDetails->getFullName() : null,
                'bounded_class_name' => \$boundClassDetails ? \$boundClassDetails->getShortName() : null,
                'form_fields' => \$fields,
                'field_type_use_statements' => \$fieldTypeUseStatements,
                'constraint_use_statements' => \$constraintClasses,
            ]
        );
    }
}
", "vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php");
    }
}
