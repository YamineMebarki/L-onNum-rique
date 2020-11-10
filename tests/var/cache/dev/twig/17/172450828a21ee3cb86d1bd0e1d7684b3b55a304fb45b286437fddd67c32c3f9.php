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

/* vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php */
class __TwigTemplate_759bf59090d203c98c040a9cc10e4eae0dee4035313b4b570a4a9617d69a7b33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php"));

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
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;

/**
 * Maps arrays/objects to/from forms using property paths.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPathMapper implements DataMapperInterface
{
    private \$propertyAccessor;

    public function __construct(PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
    }

    /**
     * {@inheritdoc}
     */
    public function mapDataToForms(\$data, \$forms)
    {
        \$empty = null === \$data || [] === \$data;

        if (!\$empty && !\\is_array(\$data) && !\\is_object(\$data)) {
            throw new UnexpectedTypeException(\$data, 'object, array or empty');
        }

        foreach (\$forms as \$form) {
            \$propertyPath = \$form->getPropertyPath();
            \$config = \$form->getConfig();

            if (!\$empty && null !== \$propertyPath && \$config->getMapped()) {
                \$form->setData(\$this->propertyAccessor->getValue(\$data, \$propertyPath));
            } else {
                \$form->setData(\$config->getData());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapFormsToData(\$forms, &\$data)
    {
        if (null === \$data) {
            return;
        }

        if (!\\is_array(\$data) && !\\is_object(\$data)) {
            throw new UnexpectedTypeException(\$data, 'object, array or empty');
        }

        foreach (\$forms as \$form) {
            \$propertyPath = \$form->getPropertyPath();
            \$config = \$form->getConfig();

            // Write-back is disabled if the form is not synchronized (transformation failed),
            // if the form was not submitted and if the form is disabled (modification not allowed)
            if (null !== \$propertyPath && \$config->getMapped() && \$form->isSubmitted() && \$form->isSynchronized() && !\$form->isDisabled()) {
                \$propertyValue = \$form->getData();
                // If the field is of type DateTimeInterface and the data is the same skip the update to
                // keep the original object hash
                if (\$propertyValue instanceof \\DateTimeInterface && \$propertyValue == \$this->propertyAccessor->getValue(\$data, \$propertyPath)) {
                    continue;
                }

                // If the data is identical to the value in \$data, we are
                // dealing with a reference
                if (!\\is_object(\$data) || !\$config->getByReference() || \$propertyValue !== \$this->propertyAccessor->getValue(\$data, \$propertyPath)) {
                    \$this->propertyAccessor->setValue(\$data, \$propertyPath, \$propertyValue);
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php";
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
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;

/**
 * Maps arrays/objects to/from forms using property paths.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPathMapper implements DataMapperInterface
{
    private \$propertyAccessor;

    public function __construct(PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
    }

    /**
     * {@inheritdoc}
     */
    public function mapDataToForms(\$data, \$forms)
    {
        \$empty = null === \$data || [] === \$data;

        if (!\$empty && !\\is_array(\$data) && !\\is_object(\$data)) {
            throw new UnexpectedTypeException(\$data, 'object, array or empty');
        }

        foreach (\$forms as \$form) {
            \$propertyPath = \$form->getPropertyPath();
            \$config = \$form->getConfig();

            if (!\$empty && null !== \$propertyPath && \$config->getMapped()) {
                \$form->setData(\$this->propertyAccessor->getValue(\$data, \$propertyPath));
            } else {
                \$form->setData(\$config->getData());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapFormsToData(\$forms, &\$data)
    {
        if (null === \$data) {
            return;
        }

        if (!\\is_array(\$data) && !\\is_object(\$data)) {
            throw new UnexpectedTypeException(\$data, 'object, array or empty');
        }

        foreach (\$forms as \$form) {
            \$propertyPath = \$form->getPropertyPath();
            \$config = \$form->getConfig();

            // Write-back is disabled if the form is not synchronized (transformation failed),
            // if the form was not submitted and if the form is disabled (modification not allowed)
            if (null !== \$propertyPath && \$config->getMapped() && \$form->isSubmitted() && \$form->isSynchronized() && !\$form->isDisabled()) {
                \$propertyValue = \$form->getData();
                // If the field is of type DateTimeInterface and the data is the same skip the update to
                // keep the original object hash
                if (\$propertyValue instanceof \\DateTimeInterface && \$propertyValue == \$this->propertyAccessor->getValue(\$data, \$propertyPath)) {
                    continue;
                }

                // If the data is identical to the value in \$data, we are
                // dealing with a reference
                if (!\\is_object(\$data) || !\$config->getByReference() || \$propertyValue !== \$this->propertyAccessor->getValue(\$data, \$propertyPath)) {
                    \$this->propertyAccessor->setValue(\$data, \$propertyPath, \$propertyValue);
                }
            }
        }
    }
}
", "vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php");
    }
}
