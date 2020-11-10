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

/* vendor/symfony/form/FormFactory.php */
class __TwigTemplate_4a7b87bf45bc8bcf91c47169b0fbcea502ea3ff8382d8ad268a6b8c6f185b011 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactory.php"));

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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

class FormFactory implements FormFactoryInterface
{
    private \$registry;

    public function __construct(FormRegistryInterface \$registry)
    {
        \$this->registry = \$registry;
    }

    /**
     * {@inheritdoc}
     */
    public function create(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        return \$this->createBuilder(\$type, \$data, \$options)->getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function createNamed(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        return \$this->createNamedBuilder(\$name, \$type, \$data, \$options)->getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function createForProperty(\$class, \$property, \$data = null, array \$options = [])
    {
        return \$this->createBuilderForProperty(\$class, \$property, \$data, \$options)->getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilder(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        if (!\\is_string(\$type)) {
            throw new UnexpectedTypeException(\$type, 'string');
        }

        return \$this->createNamedBuilder(\$this->registry->getType(\$type)->getBlockPrefix(), \$type, \$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedBuilder(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        if (null !== \$data && !\\array_key_exists('data', \$options)) {
            \$options['data'] = \$data;
        }

        if (!\\is_string(\$type)) {
            throw new UnexpectedTypeException(\$type, 'string');
        }

        \$type = \$this->registry->getType(\$type);

        \$builder = \$type->createBuilder(\$this, \$name, \$options);

        // Explicitly call buildForm() in order to be able to override either
        // createBuilder() or buildForm() in the resolved form type
        \$type->buildForm(\$builder, \$builder->getOptions());

        return \$builder;
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilderForProperty(\$class, \$property, \$data = null, array \$options = [])
    {
        if (null === \$guesser = \$this->registry->getTypeGuesser()) {
            return \$this->createNamedBuilder(\$property, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', \$data, \$options);
        }

        \$typeGuess = \$guesser->guessType(\$class, \$property);
        \$maxLengthGuess = \$guesser->guessMaxLength(\$class, \$property);
        \$requiredGuess = \$guesser->guessRequired(\$class, \$property);
        \$patternGuess = \$guesser->guessPattern(\$class, \$property);

        \$type = \$typeGuess ? \$typeGuess->getType() : 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType';

        \$maxLength = \$maxLengthGuess ? \$maxLengthGuess->getValue() : null;
        \$pattern = \$patternGuess ? \$patternGuess->getValue() : null;

        if (null !== \$pattern) {
            \$options = array_replace_recursive(['attr' => ['pattern' => \$pattern]], \$options);
        }

        if (null !== \$maxLength) {
            \$options = array_replace_recursive(['attr' => ['maxlength' => \$maxLength]], \$options);
        }

        if (\$requiredGuess) {
            \$options = array_merge(['required' => \$requiredGuess->getValue()], \$options);
        }

        // user options may override guessed options
        if (\$typeGuess) {
            \$attrs = [];
            \$typeGuessOptions = \$typeGuess->getOptions();
            if (isset(\$typeGuessOptions['attr']) && isset(\$options['attr'])) {
                \$attrs = ['attr' => array_merge(\$typeGuessOptions['attr'], \$options['attr'])];
            }

            \$options = array_merge(\$typeGuessOptions, \$options, \$attrs);
        }

        return \$this->createNamedBuilder(\$property, \$type, \$data, \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormFactory.php";
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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;

class FormFactory implements FormFactoryInterface
{
    private \$registry;

    public function __construct(FormRegistryInterface \$registry)
    {
        \$this->registry = \$registry;
    }

    /**
     * {@inheritdoc}
     */
    public function create(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        return \$this->createBuilder(\$type, \$data, \$options)->getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function createNamed(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        return \$this->createNamedBuilder(\$name, \$type, \$data, \$options)->getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function createForProperty(\$class, \$property, \$data = null, array \$options = [])
    {
        return \$this->createBuilderForProperty(\$class, \$property, \$data, \$options)->getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilder(\$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        if (!\\is_string(\$type)) {
            throw new UnexpectedTypeException(\$type, 'string');
        }

        return \$this->createNamedBuilder(\$this->registry->getType(\$type)->getBlockPrefix(), \$type, \$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedBuilder(\$name, \$type = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$data = null, array \$options = [])
    {
        if (null !== \$data && !\\array_key_exists('data', \$options)) {
            \$options['data'] = \$data;
        }

        if (!\\is_string(\$type)) {
            throw new UnexpectedTypeException(\$type, 'string');
        }

        \$type = \$this->registry->getType(\$type);

        \$builder = \$type->createBuilder(\$this, \$name, \$options);

        // Explicitly call buildForm() in order to be able to override either
        // createBuilder() or buildForm() in the resolved form type
        \$type->buildForm(\$builder, \$builder->getOptions());

        return \$builder;
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilderForProperty(\$class, \$property, \$data = null, array \$options = [])
    {
        if (null === \$guesser = \$this->registry->getTypeGuesser()) {
            return \$this->createNamedBuilder(\$property, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', \$data, \$options);
        }

        \$typeGuess = \$guesser->guessType(\$class, \$property);
        \$maxLengthGuess = \$guesser->guessMaxLength(\$class, \$property);
        \$requiredGuess = \$guesser->guessRequired(\$class, \$property);
        \$patternGuess = \$guesser->guessPattern(\$class, \$property);

        \$type = \$typeGuess ? \$typeGuess->getType() : 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType';

        \$maxLength = \$maxLengthGuess ? \$maxLengthGuess->getValue() : null;
        \$pattern = \$patternGuess ? \$patternGuess->getValue() : null;

        if (null !== \$pattern) {
            \$options = array_replace_recursive(['attr' => ['pattern' => \$pattern]], \$options);
        }

        if (null !== \$maxLength) {
            \$options = array_replace_recursive(['attr' => ['maxlength' => \$maxLength]], \$options);
        }

        if (\$requiredGuess) {
            \$options = array_merge(['required' => \$requiredGuess->getValue()], \$options);
        }

        // user options may override guessed options
        if (\$typeGuess) {
            \$attrs = [];
            \$typeGuessOptions = \$typeGuess->getOptions();
            if (isset(\$typeGuessOptions['attr']) && isset(\$options['attr'])) {
                \$attrs = ['attr' => array_merge(\$typeGuessOptions['attr'], \$options['attr'])];
            }

            \$options = array_merge(\$typeGuessOptions, \$options, \$attrs);
        }

        return \$this->createNamedBuilder(\$property, \$type, \$data, \$options);
    }
}
", "vendor/symfony/form/FormFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormFactory.php");
    }
}
