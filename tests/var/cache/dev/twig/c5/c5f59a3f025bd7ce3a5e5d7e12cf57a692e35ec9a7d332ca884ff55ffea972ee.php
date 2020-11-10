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

/* vendor/symfony/validator/Mapping/Loader/AnnotationLoader.php */
class __TwigTemplate_03808fd822f5d1b3541fa883d99adcb70594ac4889a8b0f45f27302fa565511e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/AnnotationLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/AnnotationLoader.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\GroupSequenceProvider;
use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata using a Doctrine annotation {@link Reader}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AnnotationLoader implements LoaderInterface
{
    protected \$reader;

    public function __construct(Reader \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        \$reflClass = \$metadata->getReflectionClass();
        \$className = \$reflClass->name;
        \$success = false;

        foreach (\$this->reader->getClassAnnotations(\$reflClass) as \$constraint) {
            if (\$constraint instanceof GroupSequence) {
                \$metadata->setGroupSequence(\$constraint->groups);
            } elseif (\$constraint instanceof GroupSequenceProvider) {
                \$metadata->setGroupSequenceProvider(true);
            } elseif (\$constraint instanceof Constraint) {
                \$metadata->addConstraint(\$constraint);
            }

            \$success = true;
        }

        foreach (\$reflClass->getProperties() as \$property) {
            if (\$property->getDeclaringClass()->name === \$className) {
                foreach (\$this->reader->getPropertyAnnotations(\$property) as \$constraint) {
                    if (\$constraint instanceof Constraint) {
                        \$metadata->addPropertyConstraint(\$property->name, \$constraint);
                    }

                    \$success = true;
                }
            }
        }

        foreach (\$reflClass->getMethods() as \$method) {
            if (\$method->getDeclaringClass()->name === \$className) {
                foreach (\$this->reader->getMethodAnnotations(\$method) as \$constraint) {
                    if (\$constraint instanceof Callback) {
                        \$constraint->callback = \$method->getName();

                        \$metadata->addConstraint(\$constraint);
                    } elseif (\$constraint instanceof Constraint) {
                        if (preg_match('/^(get|is|has)(.+)\$/i', \$method->name, \$matches)) {
                            \$metadata->addGetterMethodConstraint(lcfirst(\$matches[2]), \$matches[0], \$constraint);
                        } else {
                            throw new MappingException(sprintf('The constraint on \"%s::%s\" cannot be added. Constraints can only be added on methods beginning with \"get\", \"is\" or \"has\".', \$className, \$method->name));
                        }
                    }

                    \$success = true;
                }
            }
        }

        return \$success;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Loader/AnnotationLoader.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\GroupSequenceProvider;
use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata using a Doctrine annotation {@link Reader}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AnnotationLoader implements LoaderInterface
{
    protected \$reader;

    public function __construct(Reader \$reader)
    {
        \$this->reader = \$reader;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        \$reflClass = \$metadata->getReflectionClass();
        \$className = \$reflClass->name;
        \$success = false;

        foreach (\$this->reader->getClassAnnotations(\$reflClass) as \$constraint) {
            if (\$constraint instanceof GroupSequence) {
                \$metadata->setGroupSequence(\$constraint->groups);
            } elseif (\$constraint instanceof GroupSequenceProvider) {
                \$metadata->setGroupSequenceProvider(true);
            } elseif (\$constraint instanceof Constraint) {
                \$metadata->addConstraint(\$constraint);
            }

            \$success = true;
        }

        foreach (\$reflClass->getProperties() as \$property) {
            if (\$property->getDeclaringClass()->name === \$className) {
                foreach (\$this->reader->getPropertyAnnotations(\$property) as \$constraint) {
                    if (\$constraint instanceof Constraint) {
                        \$metadata->addPropertyConstraint(\$property->name, \$constraint);
                    }

                    \$success = true;
                }
            }
        }

        foreach (\$reflClass->getMethods() as \$method) {
            if (\$method->getDeclaringClass()->name === \$className) {
                foreach (\$this->reader->getMethodAnnotations(\$method) as \$constraint) {
                    if (\$constraint instanceof Callback) {
                        \$constraint->callback = \$method->getName();

                        \$metadata->addConstraint(\$constraint);
                    } elseif (\$constraint instanceof Constraint) {
                        if (preg_match('/^(get|is|has)(.+)\$/i', \$method->name, \$matches)) {
                            \$metadata->addGetterMethodConstraint(lcfirst(\$matches[2]), \$matches[0], \$constraint);
                        } else {
                            throw new MappingException(sprintf('The constraint on \"%s::%s\" cannot be added. Constraints can only be added on methods beginning with \"get\", \"is\" or \"has\".', \$className, \$method->name));
                        }
                    }

                    \$success = true;
                }
            }
        }

        return \$success;
    }
}
", "vendor/symfony/validator/Mapping/Loader/AnnotationLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/AnnotationLoader.php");
    }
}
