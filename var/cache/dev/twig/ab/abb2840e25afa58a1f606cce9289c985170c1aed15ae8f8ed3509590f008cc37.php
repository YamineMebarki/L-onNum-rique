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

/* vendor/symfony/form/Extension/Validator/ViolationMapper/ViolationPath.php */
class __TwigTemplate_65b7d4a9b8a16c2c7ce206c35deda8c9ba84c5458020a97bdc93c37fc1e715f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/ViolationMapper/ViolationPath.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/ViolationMapper/ViolationPath.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper;

use Symfony\\Component\\Form\\Exception\\OutOfBoundsException;
use Symfony\\Component\\PropertyAccess\\PropertyPath;
use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ViolationPath implements \\IteratorAggregate, PropertyPathInterface
{
    /**
     * @var array
     */
    private \$elements = [];

    /**
     * @var array
     */
    private \$isIndex = [];

    /**
     * @var array
     */
    private \$mapsForm = [];

    /**
     * @var string
     */
    private \$pathAsString = '';

    /**
     * @var int
     */
    private \$length = 0;

    /**
     * Creates a new violation path from a string.
     *
     * @param string \$violationPath The property path of a {@link \\Symfony\\Component\\Validator\\ConstraintViolation} object
     */
    public function __construct(string \$violationPath)
    {
        \$path = new PropertyPath(\$violationPath);
        \$elements = \$path->getElements();
        \$data = false;

        for (\$i = 0, \$l = \\count(\$elements); \$i < \$l; ++\$i) {
            if (!\$data) {
                // The element \"data\" has not yet been passed
                if ('children' === \$elements[\$i] && \$path->isProperty(\$i)) {
                    // Skip element \"children\"
                    ++\$i;

                    // Next element must exist and must be an index
                    // Otherwise consider this the end of the path
                    if (\$i >= \$l || !\$path->isIndex(\$i)) {
                        break;
                    }

                    // All the following index items (regardless if .children is
                    // explicitly used) are children and grand-children
                    for (; \$i < \$l && \$path->isIndex(\$i); ++\$i) {
                        \$this->elements[] = \$elements[\$i];
                        \$this->isIndex[] = true;
                        \$this->mapsForm[] = true;
                    }

                    // Rewind the pointer as the last element above didn't match
                    // (even if the pointer was moved forward)
                    --\$i;
                } elseif ('data' === \$elements[\$i] && \$path->isProperty(\$i)) {
                    // Skip element \"data\"
                    ++\$i;

                    // End of path
                    if (\$i >= \$l) {
                        break;
                    }

                    \$this->elements[] = \$elements[\$i];
                    \$this->isIndex[] = \$path->isIndex(\$i);
                    \$this->mapsForm[] = false;
                    \$data = true;
                } else {
                    // Neither \"children\" nor \"data\" property found
                    // Consider this the end of the path
                    break;
                }
            } else {
                // Already after the \"data\" element
                // Pick everything as is
                \$this->elements[] = \$elements[\$i];
                \$this->isIndex[] = \$path->isIndex(\$i);
                \$this->mapsForm[] = false;
            }
        }

        \$this->length = \\count(\$this->elements);

        \$this->buildString();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return \$this->pathAsString;
    }

    /**
     * {@inheritdoc}
     */
    public function getLength()
    {
        return \$this->length;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        if (\$this->length <= 1) {
            return null;
        }

        \$parent = clone \$this;

        --\$parent->length;
        array_pop(\$parent->elements);
        array_pop(\$parent->isIndex);
        array_pop(\$parent->mapsForm);

        \$parent->buildString();

        return \$parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getElements()
    {
        return \$this->elements;
    }

    /**
     * {@inheritdoc}
     */
    public function getElement(\$index)
    {
        if (!isset(\$this->elements[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return \$this->elements[\$index];
    }

    /**
     * {@inheritdoc}
     */
    public function isProperty(\$index)
    {
        if (!isset(\$this->isIndex[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return !\$this->isIndex[\$index];
    }

    /**
     * {@inheritdoc}
     */
    public function isIndex(\$index)
    {
        if (!isset(\$this->isIndex[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return \$this->isIndex[\$index];
    }

    /**
     * Returns whether an element maps directly to a form.
     *
     * Consider the following violation path:
     *
     *     children[address].children[office].data.street
     *
     * In this example, \"address\" and \"office\" map to forms, while
     * \"street does not.
     *
     * @param int \$index The element index
     *
     * @return bool Whether the element maps to a form
     *
     * @throws OutOfBoundsException if the offset is invalid
     */
    public function mapsForm(\$index)
    {
        if (!isset(\$this->mapsForm[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return \$this->mapsForm[\$index];
    }

    /**
     * Returns a new iterator for this path.
     *
     * @return ViolationPathIterator
     */
    public function getIterator()
    {
        return new ViolationPathIterator(\$this);
    }

    /**
     * Builds the string representation from the elements.
     */
    private function buildString()
    {
        \$this->pathAsString = '';
        \$data = false;

        foreach (\$this->elements as \$index => \$element) {
            if (\$this->mapsForm[\$index]) {
                \$this->pathAsString .= \".children[\$element]\";
            } elseif (!\$data) {
                \$this->pathAsString .= '.data'.(\$this->isIndex[\$index] ? \"[\$element]\" : \".\$element\");
                \$data = true;
            } else {
                \$this->pathAsString .= \$this->isIndex[\$index] ? \"[\$element]\" : \".\$element\";
            }
        }

        if ('' !== \$this->pathAsString) {
            // remove leading dot
            \$this->pathAsString = substr(\$this->pathAsString, 1);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/ViolationMapper/ViolationPath.php";
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

namespace Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper;

use Symfony\\Component\\Form\\Exception\\OutOfBoundsException;
use Symfony\\Component\\PropertyAccess\\PropertyPath;
use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ViolationPath implements \\IteratorAggregate, PropertyPathInterface
{
    /**
     * @var array
     */
    private \$elements = [];

    /**
     * @var array
     */
    private \$isIndex = [];

    /**
     * @var array
     */
    private \$mapsForm = [];

    /**
     * @var string
     */
    private \$pathAsString = '';

    /**
     * @var int
     */
    private \$length = 0;

    /**
     * Creates a new violation path from a string.
     *
     * @param string \$violationPath The property path of a {@link \\Symfony\\Component\\Validator\\ConstraintViolation} object
     */
    public function __construct(string \$violationPath)
    {
        \$path = new PropertyPath(\$violationPath);
        \$elements = \$path->getElements();
        \$data = false;

        for (\$i = 0, \$l = \\count(\$elements); \$i < \$l; ++\$i) {
            if (!\$data) {
                // The element \"data\" has not yet been passed
                if ('children' === \$elements[\$i] && \$path->isProperty(\$i)) {
                    // Skip element \"children\"
                    ++\$i;

                    // Next element must exist and must be an index
                    // Otherwise consider this the end of the path
                    if (\$i >= \$l || !\$path->isIndex(\$i)) {
                        break;
                    }

                    // All the following index items (regardless if .children is
                    // explicitly used) are children and grand-children
                    for (; \$i < \$l && \$path->isIndex(\$i); ++\$i) {
                        \$this->elements[] = \$elements[\$i];
                        \$this->isIndex[] = true;
                        \$this->mapsForm[] = true;
                    }

                    // Rewind the pointer as the last element above didn't match
                    // (even if the pointer was moved forward)
                    --\$i;
                } elseif ('data' === \$elements[\$i] && \$path->isProperty(\$i)) {
                    // Skip element \"data\"
                    ++\$i;

                    // End of path
                    if (\$i >= \$l) {
                        break;
                    }

                    \$this->elements[] = \$elements[\$i];
                    \$this->isIndex[] = \$path->isIndex(\$i);
                    \$this->mapsForm[] = false;
                    \$data = true;
                } else {
                    // Neither \"children\" nor \"data\" property found
                    // Consider this the end of the path
                    break;
                }
            } else {
                // Already after the \"data\" element
                // Pick everything as is
                \$this->elements[] = \$elements[\$i];
                \$this->isIndex[] = \$path->isIndex(\$i);
                \$this->mapsForm[] = false;
            }
        }

        \$this->length = \\count(\$this->elements);

        \$this->buildString();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return \$this->pathAsString;
    }

    /**
     * {@inheritdoc}
     */
    public function getLength()
    {
        return \$this->length;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        if (\$this->length <= 1) {
            return null;
        }

        \$parent = clone \$this;

        --\$parent->length;
        array_pop(\$parent->elements);
        array_pop(\$parent->isIndex);
        array_pop(\$parent->mapsForm);

        \$parent->buildString();

        return \$parent;
    }

    /**
     * {@inheritdoc}
     */
    public function getElements()
    {
        return \$this->elements;
    }

    /**
     * {@inheritdoc}
     */
    public function getElement(\$index)
    {
        if (!isset(\$this->elements[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return \$this->elements[\$index];
    }

    /**
     * {@inheritdoc}
     */
    public function isProperty(\$index)
    {
        if (!isset(\$this->isIndex[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return !\$this->isIndex[\$index];
    }

    /**
     * {@inheritdoc}
     */
    public function isIndex(\$index)
    {
        if (!isset(\$this->isIndex[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return \$this->isIndex[\$index];
    }

    /**
     * Returns whether an element maps directly to a form.
     *
     * Consider the following violation path:
     *
     *     children[address].children[office].data.street
     *
     * In this example, \"address\" and \"office\" map to forms, while
     * \"street does not.
     *
     * @param int \$index The element index
     *
     * @return bool Whether the element maps to a form
     *
     * @throws OutOfBoundsException if the offset is invalid
     */
    public function mapsForm(\$index)
    {
        if (!isset(\$this->mapsForm[\$index])) {
            throw new OutOfBoundsException(sprintf('The index %s is not within the violation path', \$index));
        }

        return \$this->mapsForm[\$index];
    }

    /**
     * Returns a new iterator for this path.
     *
     * @return ViolationPathIterator
     */
    public function getIterator()
    {
        return new ViolationPathIterator(\$this);
    }

    /**
     * Builds the string representation from the elements.
     */
    private function buildString()
    {
        \$this->pathAsString = '';
        \$data = false;

        foreach (\$this->elements as \$index => \$element) {
            if (\$this->mapsForm[\$index]) {
                \$this->pathAsString .= \".children[\$element]\";
            } elseif (!\$data) {
                \$this->pathAsString .= '.data'.(\$this->isIndex[\$index] ? \"[\$element]\" : \".\$element\");
                \$data = true;
            } else {
                \$this->pathAsString .= \$this->isIndex[\$index] ? \"[\$element]\" : \".\$element\";
            }
        }

        if ('' !== \$this->pathAsString) {
            // remove leading dot
            \$this->pathAsString = substr(\$this->pathAsString, 1);
        }
    }
}
", "vendor/symfony/form/Extension/Validator/ViolationMapper/ViolationPath.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/ViolationMapper/ViolationPath.php");
    }
}
