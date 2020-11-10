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

/* vendor/symfony/validator/ValidatorBuilderInterface.php */
class __TwigTemplate_f7b8c84ef12ea168c78f2c1605fafad357ac91f5358b2339efc4004698d864bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ValidatorBuilderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ValidatorBuilderInterface.php"));

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

namespace Symfony\\Component\\Validator;

use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * A configurable builder for ValidatorInterface objects.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.2, use the ValidatorBuilder class instead
 */
interface ValidatorBuilderInterface
{
    /**
     * Adds an object initializer to the validator.
     *
     * @return \$this
     */
    public function addObjectInitializer(ObjectInitializerInterface \$initializer);

    /**
     * Adds a list of object initializers to the validator.
     *
     * @param ObjectInitializerInterface[] \$initializers
     *
     * @return \$this
     */
    public function addObjectInitializers(array \$initializers);

    /**
     * Adds an XML constraint mapping file to the validator.
     *
     * @param string \$path The path to the mapping file
     *
     * @return \$this
     */
    public function addXmlMapping(\$path);

    /**
     * Adds a list of XML constraint mapping files to the validator.
     *
     * @param string[] \$paths The paths to the mapping files
     *
     * @return \$this
     */
    public function addXmlMappings(array \$paths);

    /**
     * Adds a YAML constraint mapping file to the validator.
     *
     * @param string \$path The path to the mapping file
     *
     * @return \$this
     */
    public function addYamlMapping(\$path);

    /**
     * Adds a list of YAML constraint mappings file to the validator.
     *
     * @param string[] \$paths The paths to the mapping files
     *
     * @return \$this
     */
    public function addYamlMappings(array \$paths);

    /**
     * Enables constraint mapping using the given static method.
     *
     * @param string \$methodName The name of the method
     *
     * @return \$this
     */
    public function addMethodMapping(\$methodName);

    /**
     * Enables constraint mapping using the given static methods.
     *
     * @param string[] \$methodNames The names of the methods
     *
     * @return \$this
     */
    public function addMethodMappings(array \$methodNames);

    /**
     * Enables annotation based constraint mapping.
     *
     * @return \$this
     */
    public function enableAnnotationMapping(Reader \$annotationReader = null);

    /**
     * Disables annotation based constraint mapping.
     *
     * @return \$this
     */
    public function disableAnnotationMapping();

    /**
     * Sets the class metadata factory used by the validator.
     *
     * @return \$this
     */
    public function setMetadataFactory(MetadataFactoryInterface \$metadataFactory);

    /**
     * Sets the cache for caching class metadata.
     *
     * @return \$this
     */
    public function setMetadataCache(CacheInterface \$cache);

    /**
     * Sets the constraint validator factory used by the validator.
     *
     * @return \$this
     */
    public function setConstraintValidatorFactory(ConstraintValidatorFactoryInterface \$validatorFactory);

    /**
     * Sets the translator used for translating violation messages.
     *
     * @return \$this
     */
    public function setTranslator(TranslatorInterface \$translator);

    /**
     * Sets the default translation domain of violation messages.
     *
     * The same message can have different translations in different domains.
     * Pass the domain that is used for violation messages by default to this
     * method.
     *
     * @param string \$translationDomain The translation domain of the violation messages
     *
     * @return \$this
     */
    public function setTranslationDomain(\$translationDomain);

    /**
     * Builds and returns a new validator object.
     *
     * @return ValidatorInterface The built validator
     */
    public function getValidator();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/ValidatorBuilderInterface.php";
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

namespace Symfony\\Component\\Validator;

use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * A configurable builder for ValidatorInterface objects.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.2, use the ValidatorBuilder class instead
 */
interface ValidatorBuilderInterface
{
    /**
     * Adds an object initializer to the validator.
     *
     * @return \$this
     */
    public function addObjectInitializer(ObjectInitializerInterface \$initializer);

    /**
     * Adds a list of object initializers to the validator.
     *
     * @param ObjectInitializerInterface[] \$initializers
     *
     * @return \$this
     */
    public function addObjectInitializers(array \$initializers);

    /**
     * Adds an XML constraint mapping file to the validator.
     *
     * @param string \$path The path to the mapping file
     *
     * @return \$this
     */
    public function addXmlMapping(\$path);

    /**
     * Adds a list of XML constraint mapping files to the validator.
     *
     * @param string[] \$paths The paths to the mapping files
     *
     * @return \$this
     */
    public function addXmlMappings(array \$paths);

    /**
     * Adds a YAML constraint mapping file to the validator.
     *
     * @param string \$path The path to the mapping file
     *
     * @return \$this
     */
    public function addYamlMapping(\$path);

    /**
     * Adds a list of YAML constraint mappings file to the validator.
     *
     * @param string[] \$paths The paths to the mapping files
     *
     * @return \$this
     */
    public function addYamlMappings(array \$paths);

    /**
     * Enables constraint mapping using the given static method.
     *
     * @param string \$methodName The name of the method
     *
     * @return \$this
     */
    public function addMethodMapping(\$methodName);

    /**
     * Enables constraint mapping using the given static methods.
     *
     * @param string[] \$methodNames The names of the methods
     *
     * @return \$this
     */
    public function addMethodMappings(array \$methodNames);

    /**
     * Enables annotation based constraint mapping.
     *
     * @return \$this
     */
    public function enableAnnotationMapping(Reader \$annotationReader = null);

    /**
     * Disables annotation based constraint mapping.
     *
     * @return \$this
     */
    public function disableAnnotationMapping();

    /**
     * Sets the class metadata factory used by the validator.
     *
     * @return \$this
     */
    public function setMetadataFactory(MetadataFactoryInterface \$metadataFactory);

    /**
     * Sets the cache for caching class metadata.
     *
     * @return \$this
     */
    public function setMetadataCache(CacheInterface \$cache);

    /**
     * Sets the constraint validator factory used by the validator.
     *
     * @return \$this
     */
    public function setConstraintValidatorFactory(ConstraintValidatorFactoryInterface \$validatorFactory);

    /**
     * Sets the translator used for translating violation messages.
     *
     * @return \$this
     */
    public function setTranslator(TranslatorInterface \$translator);

    /**
     * Sets the default translation domain of violation messages.
     *
     * The same message can have different translations in different domains.
     * Pass the domain that is used for violation messages by default to this
     * method.
     *
     * @param string \$translationDomain The translation domain of the violation messages
     *
     * @return \$this
     */
    public function setTranslationDomain(\$translationDomain);

    /**
     * Builds and returns a new validator object.
     *
     * @return ValidatorInterface The built validator
     */
    public function getValidator();
}
", "vendor/symfony/validator/ValidatorBuilderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/ValidatorBuilderInterface.php");
    }
}
