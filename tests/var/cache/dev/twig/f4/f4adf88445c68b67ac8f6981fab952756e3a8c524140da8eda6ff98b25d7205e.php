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

/* vendor/symfony/form/FormTypeGuesserChain.php */
class __TwigTemplate_43d337e87a0d8fa899ef1365318fbabaab356cf9a89dca6ed499f80a853946ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormTypeGuesserChain.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormTypeGuesserChain.php"));

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
use Symfony\\Component\\Form\\Guess\\Guess;

class FormTypeGuesserChain implements FormTypeGuesserInterface
{
    private \$guessers = [];

    /**
     * @param FormTypeGuesserInterface[] \$guessers
     *
     * @throws UnexpectedTypeException if any guesser does not implement FormTypeGuesserInterface
     */
    public function __construct(iterable \$guessers)
    {
        foreach (\$guessers as \$guesser) {
            if (!\$guesser instanceof FormTypeGuesserInterface) {
                throw new UnexpectedTypeException(\$guesser, 'Symfony\\Component\\Form\\FormTypeGuesserInterface');
            }

            if (\$guesser instanceof self) {
                \$this->guessers = array_merge(\$this->guessers, \$guesser->guessers);
            } else {
                \$this->guessers[] = \$guesser;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function guessType(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessType(\$class, \$property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessRequired(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessRequired(\$class, \$property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessMaxLength(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessMaxLength(\$class, \$property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessPattern(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessPattern(\$class, \$property);
        });
    }

    /**
     * Executes a closure for each guesser and returns the best guess from the
     * return values.
     *
     * @param \\Closure \$closure The closure to execute. Accepts a guesser
     *                          as argument and should return a Guess instance
     *
     * @return Guess|null The guess with the highest confidence
     */
    private function guess(\\Closure \$closure)
    {
        \$guesses = [];

        foreach (\$this->guessers as \$guesser) {
            if (\$guess = \$closure(\$guesser)) {
                \$guesses[] = \$guess;
            }
        }

        return Guess::getBestGuess(\$guesses);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormTypeGuesserChain.php";
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
use Symfony\\Component\\Form\\Guess\\Guess;

class FormTypeGuesserChain implements FormTypeGuesserInterface
{
    private \$guessers = [];

    /**
     * @param FormTypeGuesserInterface[] \$guessers
     *
     * @throws UnexpectedTypeException if any guesser does not implement FormTypeGuesserInterface
     */
    public function __construct(iterable \$guessers)
    {
        foreach (\$guessers as \$guesser) {
            if (!\$guesser instanceof FormTypeGuesserInterface) {
                throw new UnexpectedTypeException(\$guesser, 'Symfony\\Component\\Form\\FormTypeGuesserInterface');
            }

            if (\$guesser instanceof self) {
                \$this->guessers = array_merge(\$this->guessers, \$guesser->guessers);
            } else {
                \$this->guessers[] = \$guesser;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function guessType(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessType(\$class, \$property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessRequired(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessRequired(\$class, \$property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessMaxLength(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessMaxLength(\$class, \$property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessPattern(\$class, \$property)
    {
        return \$this->guess(function (\$guesser) use (\$class, \$property) {
            return \$guesser->guessPattern(\$class, \$property);
        });
    }

    /**
     * Executes a closure for each guesser and returns the best guess from the
     * return values.
     *
     * @param \\Closure \$closure The closure to execute. Accepts a guesser
     *                          as argument and should return a Guess instance
     *
     * @return Guess|null The guess with the highest confidence
     */
    private function guess(\\Closure \$closure)
    {
        \$guesses = [];

        foreach (\$this->guessers as \$guesser) {
            if (\$guess = \$closure(\$guesser)) {
                \$guesses[] = \$guess;
            }
        }

        return Guess::getBestGuess(\$guesses);
    }
}
", "vendor/symfony/form/FormTypeGuesserChain.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormTypeGuesserChain.php");
    }
}
