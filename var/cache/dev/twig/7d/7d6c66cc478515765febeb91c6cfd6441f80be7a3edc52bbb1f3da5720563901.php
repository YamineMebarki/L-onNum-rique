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

/* vendor/symfony/form/Extension/Core/DataMapper/RadioListMapper.php */
class __TwigTemplate_a4a83cabd45e707756a438bd65e42225415aad7c6d434ab188ebc3ea112157a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataMapper/RadioListMapper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataMapper/RadioListMapper.php"));

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
 * Maps choices to/from radio forms.
 *
 * A {@link ChoiceListInterface} implementation is used to find the
 * corresponding string values for the choices. The radio form whose \"value\"
 * option corresponds to the selected value is marked as selected.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RadioListMapper implements DataMapperInterface
{
    /**
     * {@inheritdoc}
     */
    public function mapDataToForms(\$choice, \$radios)
    {
        if (!\\is_string(\$choice)) {
            throw new UnexpectedTypeException(\$choice, 'string');
        }

        foreach (\$radios as \$radio) {
            \$value = \$radio->getConfig()->getOption('value');
            \$radio->setData(\$choice === \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapFormsToData(\$radios, &\$choice)
    {
        if (null !== \$choice && !\\is_string(\$choice)) {
            throw new UnexpectedTypeException(\$choice, 'null or string');
        }

        \$choice = null;

        foreach (\$radios as \$radio) {
            if (\$radio->getData()) {
                if ('placeholder' === \$radio->getName()) {
                    return;
                }

                \$choice = \$radio->getConfig()->getOption('value');

                return;
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
        return "vendor/symfony/form/Extension/Core/DataMapper/RadioListMapper.php";
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
 * Maps choices to/from radio forms.
 *
 * A {@link ChoiceListInterface} implementation is used to find the
 * corresponding string values for the choices. The radio form whose \"value\"
 * option corresponds to the selected value is marked as selected.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RadioListMapper implements DataMapperInterface
{
    /**
     * {@inheritdoc}
     */
    public function mapDataToForms(\$choice, \$radios)
    {
        if (!\\is_string(\$choice)) {
            throw new UnexpectedTypeException(\$choice, 'string');
        }

        foreach (\$radios as \$radio) {
            \$value = \$radio->getConfig()->getOption('value');
            \$radio->setData(\$choice === \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapFormsToData(\$radios, &\$choice)
    {
        if (null !== \$choice && !\\is_string(\$choice)) {
            throw new UnexpectedTypeException(\$choice, 'null or string');
        }

        \$choice = null;

        foreach (\$radios as \$radio) {
            if (\$radio->getData()) {
                if ('placeholder' === \$radio->getName()) {
                    return;
                }

                \$choice = \$radio->getConfig()->getOption('value');

                return;
            }
        }
    }
}
", "vendor/symfony/form/Extension/Core/DataMapper/RadioListMapper.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataMapper/RadioListMapper.php");
    }
}
