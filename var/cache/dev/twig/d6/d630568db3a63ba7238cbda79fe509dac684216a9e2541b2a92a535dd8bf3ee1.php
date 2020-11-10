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

/* vendor/symfony/form/Extension/Core/DataTransformer/ChoiceToValueTransformer.php */
class __TwigTemplate_aebf6594de41d9fb7f5384831e3478ae43a7e5466c049514597d2c16d635599c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ChoiceToValueTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ChoiceToValueTransformer.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceToValueTransformer implements DataTransformerInterface
{
    private \$choiceList;

    public function __construct(ChoiceListInterface \$choiceList)
    {
        \$this->choiceList = \$choiceList;
    }

    public function transform(\$choice)
    {
        return (string) current(\$this->choiceList->getValuesForChoices([\$choice]));
    }

    public function reverseTransform(\$value)
    {
        if (null !== \$value && !\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string or null.');
        }

        \$choices = \$this->choiceList->getChoicesForValues([(string) \$value]);

        if (1 !== \\count(\$choices)) {
            if (null === \$value || '' === \$value) {
                return null;
            }

            throw new TransformationFailedException(sprintf('The choice \"%s\" does not exist or is not unique', \$value));
        }

        return current(\$choices);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/ChoiceToValueTransformer.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceToValueTransformer implements DataTransformerInterface
{
    private \$choiceList;

    public function __construct(ChoiceListInterface \$choiceList)
    {
        \$this->choiceList = \$choiceList;
    }

    public function transform(\$choice)
    {
        return (string) current(\$this->choiceList->getValuesForChoices([\$choice]));
    }

    public function reverseTransform(\$value)
    {
        if (null !== \$value && !\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string or null.');
        }

        \$choices = \$this->choiceList->getChoicesForValues([(string) \$value]);

        if (1 !== \\count(\$choices)) {
            if (null === \$value || '' === \$value) {
                return null;
            }

            throw new TransformationFailedException(sprintf('The choice \"%s\" does not exist or is not unique', \$value));
        }

        return current(\$choices);
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/ChoiceToValueTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/ChoiceToValueTransformer.php");
    }
}
