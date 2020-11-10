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

/* vendor/symfony/form/Test/Traits/ValidatorExtensionTrait.php */
class __TwigTemplate_4cf9b4d20dccd2154455e28170c552214d92ec588f4f8a843d719ac11b1f13c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Test/Traits/ValidatorExtensionTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Test/Traits/ValidatorExtensionTrait.php"));

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

namespace Symfony\\Component\\Form\\Test\\Traits;

use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

trait ValidatorExtensionTrait
{
    /**
     * @var ValidatorInterface|null
     */
    protected \$validator;

    /**
     * @return ValidatorExtension
     */
    protected function getValidatorExtension()
    {
        if (!interface_exists(ValidatorInterface::class)) {
            throw new \\Exception('In order to use the \"ValidatorExtensionTrait\", the symfony/validator component must be installed');
        }

        if (!\$this instanceof TypeTestCase) {
            throw new \\Exception(sprintf('The trait \"ValidatorExtensionTrait\" can only be added to a class that extends %s', TypeTestCase::class));
        }

        \$this->validator = \$this->getMockBuilder(ValidatorInterface::class)->getMock();
        \$metadata = \$this->getMockBuilder(ClassMetadata::class)->setConstructorArgs([''])->setMethods(['addPropertyConstraint'])->getMock();
        \$this->validator->expects(\$this->any())->method('getMetadataFor')->will(\$this->returnValue(\$metadata));
        \$this->validator->expects(\$this->any())->method('validate')->will(\$this->returnValue(new ConstraintViolationList()));

        return new ValidatorExtension(\$this->validator);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Test/Traits/ValidatorExtensionTrait.php";
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

namespace Symfony\\Component\\Form\\Test\\Traits;

use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

trait ValidatorExtensionTrait
{
    /**
     * @var ValidatorInterface|null
     */
    protected \$validator;

    /**
     * @return ValidatorExtension
     */
    protected function getValidatorExtension()
    {
        if (!interface_exists(ValidatorInterface::class)) {
            throw new \\Exception('In order to use the \"ValidatorExtensionTrait\", the symfony/validator component must be installed');
        }

        if (!\$this instanceof TypeTestCase) {
            throw new \\Exception(sprintf('The trait \"ValidatorExtensionTrait\" can only be added to a class that extends %s', TypeTestCase::class));
        }

        \$this->validator = \$this->getMockBuilder(ValidatorInterface::class)->getMock();
        \$metadata = \$this->getMockBuilder(ClassMetadata::class)->setConstructorArgs([''])->setMethods(['addPropertyConstraint'])->getMock();
        \$this->validator->expects(\$this->any())->method('getMetadataFor')->will(\$this->returnValue(\$metadata));
        \$this->validator->expects(\$this->any())->method('validate')->will(\$this->returnValue(new ConstraintViolationList()));

        return new ValidatorExtension(\$this->validator);
    }
}
", "vendor/symfony/form/Test/Traits/ValidatorExtensionTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Test/Traits/ValidatorExtensionTrait.php");
    }
}
