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

/* vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php */
class __TwigTemplate_04807f1c05d51629ea2ae69a8826e3c6e25391520e23b1e920b72e50a64b51a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php"));

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

namespace Symfony\\Component\\HttpFoundation\\File\\MimeType;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException;
use Symfony\\Component\\Mime\\MimeTypesInterface;

/**
 * Guesses the mime type of a file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link MimeTypesInterface} instead
 */
interface MimeTypeGuesserInterface
{
    /**
     * Guesses the mime type of the file with the given path.
     *
     * @param string \$path The path to the file
     *
     * @return string|null The mime type or NULL, if none could be guessed
     *
     * @throws FileNotFoundException If the file does not exist
     * @throws AccessDeniedException If the file could not be read
     */
    public function guess(\$path);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php";
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

namespace Symfony\\Component\\HttpFoundation\\File\\MimeType;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException;
use Symfony\\Component\\Mime\\MimeTypesInterface;

/**
 * Guesses the mime type of a file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link MimeTypesInterface} instead
 */
interface MimeTypeGuesserInterface
{
    /**
     * Guesses the mime type of the file with the given path.
     *
     * @param string \$path The path to the file
     *
     * @return string|null The mime type or NULL, if none could be guessed
     *
     * @throws FileNotFoundException If the file does not exist
     * @throws AccessDeniedException If the file could not be read
     */
    public function guess(\$path);
}
", "vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php");
    }
}
