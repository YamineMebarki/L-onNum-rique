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

/* vendor/symfony/form/Extension/Validator/ValidatorExtension.php */
class __TwigTemplate_23a6bf7db295f7bd110977b5b8f5953244897572651a2fd06aafcce33a42667b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/ValidatorExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/ValidatorExtension.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Validator;

use Symfony\\Component\\Form\\AbstractExtension;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * Extension supporting the Symfony Validator component in forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValidatorExtension extends AbstractExtension
{
    private \$validator;

    public function __construct(ValidatorInterface \$validator)
    {
        \$metadata = \$validator->getMetadataFor('Symfony\\Component\\Form\\Form');

        // Register the form constraints in the validator programmatically.
        // This functionality is required when using the Form component without
        // the DIC, where the XML file is loaded automatically. Thus the following
        // code must be kept synchronized with validation.xml

        /* @var \$metadata ClassMetadata */
        \$metadata->addConstraint(new Form());
        \$metadata->addPropertyConstraint('children', new Valid());

        \$this->validator = \$validator;
    }

    public function loadTypeGuesser()
    {
        return new ValidatorTypeGuesser(\$this->validator);
    }

    protected function loadTypeExtensions()
    {
        return [
            new Type\\FormTypeValidatorExtension(\$this->validator),
            new Type\\RepeatedTypeValidatorExtension(),
            new Type\\SubmitTypeValidatorExtension(),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/ValidatorExtension.php";
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

namespace Symfony\\Component\\Form\\Extension\\Validator;

use Symfony\\Component\\Form\\AbstractExtension;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * Extension supporting the Symfony Validator component in forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValidatorExtension extends AbstractExtension
{
    private \$validator;

    public function __construct(ValidatorInterface \$validator)
    {
        \$metadata = \$validator->getMetadataFor('Symfony\\Component\\Form\\Form');

        // Register the form constraints in the validator programmatically.
        // This functionality is required when using the Form component without
        // the DIC, where the XML file is loaded automatically. Thus the following
        // code must be kept synchronized with validation.xml

        /* @var \$metadata ClassMetadata */
        \$metadata->addConstraint(new Form());
        \$metadata->addPropertyConstraint('children', new Valid());

        \$this->validator = \$validator;
    }

    public function loadTypeGuesser()
    {
        return new ValidatorTypeGuesser(\$this->validator);
    }

    protected function loadTypeExtensions()
    {
        return [
            new Type\\FormTypeValidatorExtension(\$this->validator),
            new Type\\RepeatedTypeValidatorExtension(),
            new Type\\SubmitTypeValidatorExtension(),
        ];
    }
}
", "vendor/symfony/form/Extension/Validator/ValidatorExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/ValidatorExtension.php");
    }
}
