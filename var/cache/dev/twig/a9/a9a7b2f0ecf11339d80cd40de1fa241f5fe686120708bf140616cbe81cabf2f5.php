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

/* vendor/symfony/form/Extension/Core/CoreExtension.php */
class __TwigTemplate_47c1de53100a4774e37c4f4d755d0231cec739ec5b14d2ed6ebb5d94527f5862 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/CoreExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/CoreExtension.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core;

use Symfony\\Component\\Form\\AbstractExtension;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\ChoiceListFactoryInterface;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Represents the main form extension, which loads the core functionality.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CoreExtension extends AbstractExtension
{
    private \$propertyAccessor;
    private \$choiceListFactory;
    private \$translator;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(PropertyAccessorInterface \$propertyAccessor = null, ChoiceListFactoryInterface \$choiceListFactory = null, \$translator = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 3 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
        \$this->choiceListFactory = \$choiceListFactory ?: new CachingFactoryDecorator(new PropertyAccessDecorator(new DefaultChoiceListFactory(), \$this->propertyAccessor));
        \$this->translator = \$translator;
    }

    protected function loadTypes()
    {
        return [
            new Type\\FormType(\$this->propertyAccessor),
            new Type\\BirthdayType(),
            new Type\\CheckboxType(),
            new Type\\ChoiceType(\$this->choiceListFactory),
            new Type\\CollectionType(),
            new Type\\CountryType(),
            new Type\\DateIntervalType(),
            new Type\\DateType(),
            new Type\\DateTimeType(),
            new Type\\EmailType(),
            new Type\\HiddenType(),
            new Type\\IntegerType(),
            new Type\\LanguageType(),
            new Type\\LocaleType(),
            new Type\\MoneyType(),
            new Type\\NumberType(),
            new Type\\PasswordType(),
            new Type\\PercentType(),
            new Type\\RadioType(),
            new Type\\RangeType(),
            new Type\\RepeatedType(),
            new Type\\SearchType(),
            new Type\\TextareaType(),
            new Type\\TextType(),
            new Type\\TimeType(),
            new Type\\TimezoneType(),
            new Type\\UrlType(),
            new Type\\FileType(\$this->translator),
            new Type\\ButtonType(),
            new Type\\SubmitType(),
            new Type\\ResetType(),
            new Type\\CurrencyType(),
            new Type\\TelType(),
            new Type\\ColorType(),
        ];
    }

    protected function loadTypeExtensions()
    {
        return [
            new TransformationFailureExtension(\$this->translator),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/CoreExtension.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core;

use Symfony\\Component\\Form\\AbstractExtension;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\ChoiceListFactoryInterface;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Represents the main form extension, which loads the core functionality.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CoreExtension extends AbstractExtension
{
    private \$propertyAccessor;
    private \$choiceListFactory;
    private \$translator;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(PropertyAccessorInterface \$propertyAccessor = null, ChoiceListFactoryInterface \$choiceListFactory = null, \$translator = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 3 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
        \$this->choiceListFactory = \$choiceListFactory ?: new CachingFactoryDecorator(new PropertyAccessDecorator(new DefaultChoiceListFactory(), \$this->propertyAccessor));
        \$this->translator = \$translator;
    }

    protected function loadTypes()
    {
        return [
            new Type\\FormType(\$this->propertyAccessor),
            new Type\\BirthdayType(),
            new Type\\CheckboxType(),
            new Type\\ChoiceType(\$this->choiceListFactory),
            new Type\\CollectionType(),
            new Type\\CountryType(),
            new Type\\DateIntervalType(),
            new Type\\DateType(),
            new Type\\DateTimeType(),
            new Type\\EmailType(),
            new Type\\HiddenType(),
            new Type\\IntegerType(),
            new Type\\LanguageType(),
            new Type\\LocaleType(),
            new Type\\MoneyType(),
            new Type\\NumberType(),
            new Type\\PasswordType(),
            new Type\\PercentType(),
            new Type\\RadioType(),
            new Type\\RangeType(),
            new Type\\RepeatedType(),
            new Type\\SearchType(),
            new Type\\TextareaType(),
            new Type\\TextType(),
            new Type\\TimeType(),
            new Type\\TimezoneType(),
            new Type\\UrlType(),
            new Type\\FileType(\$this->translator),
            new Type\\ButtonType(),
            new Type\\SubmitType(),
            new Type\\ResetType(),
            new Type\\CurrencyType(),
            new Type\\TelType(),
            new Type\\ColorType(),
        ];
    }

    protected function loadTypeExtensions()
    {
        return [
            new TransformationFailureExtension(\$this->translator),
        ];
    }
}
", "vendor/symfony/form/Extension/Core/CoreExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/CoreExtension.php");
    }
}
