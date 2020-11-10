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

/* vendor/symfony/validator/Constraints/Collection.php */
class __TwigTemplate_1d7b051a3eb8ac280572a124ebff703dc856514920f6edfaf3989aab79c61c16 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Collection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Collection.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Collection extends Composite
{
    const MISSING_FIELD_ERROR = '2fa2158c-2a7f-484b-98aa-975522539ff8';
    const NO_SUCH_FIELD_ERROR = '7703c766-b5d5-4cef-ace7-ae0dd82304e9';

    protected static \$errorNames = [
        self::MISSING_FIELD_ERROR => 'MISSING_FIELD_ERROR',
        self::NO_SUCH_FIELD_ERROR => 'NO_SUCH_FIELD_ERROR',
    ];

    public \$fields = [];
    public \$allowExtraFields = false;
    public \$allowMissingFields = false;
    public \$extraFieldsMessage = 'This field was not expected.';
    public \$missingFieldsMessage = 'This field is missing.';

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        // no known options set? \$options is the fields array
        if (\\is_array(\$options)
            && !array_intersect(array_keys(\$options), ['groups', 'fields', 'allowExtraFields', 'allowMissingFields', 'extraFieldsMessage', 'missingFieldsMessage'])) {
            \$options = ['fields' => \$options];
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeNestedConstraints()
    {
        parent::initializeNestedConstraints();

        if (!\\is_array(\$this->fields)) {
            throw new ConstraintDefinitionException(sprintf('The option \"fields\" is expected to be an array in constraint %s', __CLASS__));
        }

        foreach (\$this->fields as \$fieldName => \$field) {
            // the XmlFileLoader and YamlFileLoader pass the field Optional
            // and Required constraint as an array with exactly one element
            if (\\is_array(\$field) && 1 == \\count(\$field)) {
                \$this->fields[\$fieldName] = \$field = \$field[0];
            }

            if (!\$field instanceof Optional && !\$field instanceof Required) {
                \$this->fields[\$fieldName] = new Required(\$field);
            }
        }
    }

    public function getRequiredOptions()
    {
        return ['fields'];
    }

    protected function getCompositeOption()
    {
        return 'fields';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Collection.php";
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Collection extends Composite
{
    const MISSING_FIELD_ERROR = '2fa2158c-2a7f-484b-98aa-975522539ff8';
    const NO_SUCH_FIELD_ERROR = '7703c766-b5d5-4cef-ace7-ae0dd82304e9';

    protected static \$errorNames = [
        self::MISSING_FIELD_ERROR => 'MISSING_FIELD_ERROR',
        self::NO_SUCH_FIELD_ERROR => 'NO_SUCH_FIELD_ERROR',
    ];

    public \$fields = [];
    public \$allowExtraFields = false;
    public \$allowMissingFields = false;
    public \$extraFieldsMessage = 'This field was not expected.';
    public \$missingFieldsMessage = 'This field is missing.';

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        // no known options set? \$options is the fields array
        if (\\is_array(\$options)
            && !array_intersect(array_keys(\$options), ['groups', 'fields', 'allowExtraFields', 'allowMissingFields', 'extraFieldsMessage', 'missingFieldsMessage'])) {
            \$options = ['fields' => \$options];
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeNestedConstraints()
    {
        parent::initializeNestedConstraints();

        if (!\\is_array(\$this->fields)) {
            throw new ConstraintDefinitionException(sprintf('The option \"fields\" is expected to be an array in constraint %s', __CLASS__));
        }

        foreach (\$this->fields as \$fieldName => \$field) {
            // the XmlFileLoader and YamlFileLoader pass the field Optional
            // and Required constraint as an array with exactly one element
            if (\\is_array(\$field) && 1 == \\count(\$field)) {
                \$this->fields[\$fieldName] = \$field = \$field[0];
            }

            if (!\$field instanceof Optional && !\$field instanceof Required) {
                \$this->fields[\$fieldName] = new Required(\$field);
            }
        }
    }

    public function getRequiredOptions()
    {
        return ['fields'];
    }

    protected function getCompositeOption()
    {
        return 'fields';
    }
}
", "vendor/symfony/validator/Constraints/Collection.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Collection.php");
    }
}
