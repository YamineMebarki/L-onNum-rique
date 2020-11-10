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

/* vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php */
class __TwigTemplate_823fe4e770fd4390f66868b6354dc8747757afeb73e5b5a7d7ca4af69391e2ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php"));

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

namespace Symfony\\Component\\Security\\Core\\Validator\\Constraints;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class UserPasswordValidator extends ConstraintValidator
{
    private \$tokenStorage;
    private \$encoderFactory;

    public function __construct(TokenStorageInterface \$tokenStorage, EncoderFactoryInterface \$encoderFactory)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->encoderFactory = \$encoderFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$password, Constraint \$constraint)
    {
        if (!\$constraint instanceof UserPassword) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\UserPassword');
        }

        if (null === \$password || '' === \$password) {
            \$this->context->addViolation(\$constraint->message);

            return;
        }

        \$user = \$this->tokenStorage->getToken()->getUser();

        if (!\$user instanceof UserInterface) {
            throw new ConstraintDefinitionException('The User object must implement the UserInterface interface.');
        }

        \$encoder = \$this->encoderFactory->getEncoder(\$user);

        if (!\$encoder->isPasswordValid(\$user->getPassword(), \$password, \$user->getSalt())) {
            \$this->context->addViolation(\$constraint->message);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php";
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

namespace Symfony\\Component\\Security\\Core\\Validator\\Constraints;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class UserPasswordValidator extends ConstraintValidator
{
    private \$tokenStorage;
    private \$encoderFactory;

    public function __construct(TokenStorageInterface \$tokenStorage, EncoderFactoryInterface \$encoderFactory)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->encoderFactory = \$encoderFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$password, Constraint \$constraint)
    {
        if (!\$constraint instanceof UserPassword) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\UserPassword');
        }

        if (null === \$password || '' === \$password) {
            \$this->context->addViolation(\$constraint->message);

            return;
        }

        \$user = \$this->tokenStorage->getToken()->getUser();

        if (!\$user instanceof UserInterface) {
            throw new ConstraintDefinitionException('The User object must implement the UserInterface interface.');
        }

        \$encoder = \$this->encoderFactory->getEncoder(\$user);

        if (!\$encoder->isPasswordValid(\$user->getPassword(), \$password, \$user->getSalt())) {
            \$this->context->addViolation(\$constraint->message);
        }
    }
}
", "vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php");
    }
}
