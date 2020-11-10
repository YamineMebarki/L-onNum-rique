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

/* vendor/symfony/form/Extension/Core/DataMapper/CheckboxListMapper.php */
class __TwigTemplate_ff0372c2116b587f7956f2207a0c70aa65687f4cdb3033301fcfbc3c2f1c9992 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataMapper/CheckboxListMapper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataMapper/CheckboxListMapper.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataMapper;

use Symfony\\Component\\Form\\DataMapperInterface;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * Maps choices to/from checkbox forms.
 *
 * A {@link ChoiceListInterface} implementation is used to find the
 * corresponding string values for the choices. Each checkbox form whose \"value\"
 * option corresponds to any of the selected values is marked as selected.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CheckboxListMapper implements DataMapperInterface
{
    /**
     * {@inheritdoc}
     */
    public function mapDataToForms(\$choices, \$checkboxes)
    {
        if (null === \$choices) {
            \$choices = [];
        }

        if (!\\is_array(\$choices)) {
            throw new UnexpectedTypeException(\$choices, 'array');
        }

        foreach (\$checkboxes as \$checkbox) {
            \$value = \$checkbox->getConfig()->getOption('value');
            \$checkbox->setData(\\in_array(\$value, \$choices, true));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapFormsToData(\$checkboxes, &\$choices)
    {
        if (!\\is_array(\$choices)) {
            throw new UnexpectedTypeException(\$choices, 'array');
        }

        \$values = [];

        foreach (\$checkboxes as \$checkbox) {
            if (\$checkbox->getData()) {
                // construct an array of choice values
                \$values[] = \$checkbox->getConfig()->getOption('value');
            }
        }

        \$choices = \$values;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataMapper/CheckboxListMapper.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataMapper;

use Symfony\\Component\\Form\\DataMapperInterface;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

/**
 * Maps choices to/from checkbox forms.
 *
 * A {@link ChoiceListInterface} implementation is used to find the
 * corresponding string values for the choices. Each checkbox form whose \"value\"
 * option corresponds to any of the selected values is marked as selected.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CheckboxListMapper implements DataMapperInterface
{
    /**
     * {@inheritdoc}
     */
    public function mapDataToForms(\$choices, \$checkboxes)
    {
        if (null === \$choices) {
            \$choices = [];
        }

        if (!\\is_array(\$choices)) {
            throw new UnexpectedTypeException(\$choices, 'array');
        }

        foreach (\$checkboxes as \$checkbox) {
            \$value = \$checkbox->getConfig()->getOption('value');
            \$checkbox->setData(\\in_array(\$value, \$choices, true));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapFormsToData(\$checkboxes, &\$choices)
    {
        if (!\\is_array(\$choices)) {
            throw new UnexpectedTypeException(\$choices, 'array');
        }

        \$values = [];

        foreach (\$checkboxes as \$checkbox) {
            if (\$checkbox->getData()) {
                // construct an array of choice values
                \$values[] = \$checkbox->getConfig()->getOption('value');
            }
        }

        \$choices = \$values;
    }
}
", "vendor/symfony/form/Extension/Core/DataMapper/CheckboxListMapper.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataMapper/CheckboxListMapper.php");
    }
}
