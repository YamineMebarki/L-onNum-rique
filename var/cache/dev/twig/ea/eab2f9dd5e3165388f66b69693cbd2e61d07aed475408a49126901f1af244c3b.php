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

/* vendor/symfony/process/Pipes/PipesInterface.php */
class __TwigTemplate_b48f6f612ce234afd339df58a612246eefa802d86110a28889ed53c39d2d1c63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/PipesInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Pipes/PipesInterface.php"));

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

namespace Symfony\\Component\\Process\\Pipes;

/**
 * PipesInterface manages descriptors and pipes for the use of proc_open.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
interface PipesInterface
{
    const CHUNK_SIZE = 16384;

    /**
     * Returns an array of descriptors for the use of proc_open.
     *
     * @return array
     */
    public function getDescriptors();

    /**
     * Returns an array of filenames indexed by their related stream in case these pipes use temporary files.
     *
     * @return string[]
     */
    public function getFiles();

    /**
     * Reads data in file handles and pipes.
     *
     * @param bool \$blocking Whether to use blocking calls or not
     * @param bool \$close    Whether to close pipes if they've reached EOF
     *
     * @return string[] An array of read data indexed by their fd
     */
    public function readAndWrite(\$blocking, \$close = false);

    /**
     * Returns if the current state has open file handles or pipes.
     *
     * @return bool
     */
    public function areOpen();

    /**
     * Returns if pipes are able to read output.
     *
     * @return bool
     */
    public function haveReadSupport();

    /**
     * Closes file handles and pipes.
     */
    public function close();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Pipes/PipesInterface.php";
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

namespace Symfony\\Component\\Process\\Pipes;

/**
 * PipesInterface manages descriptors and pipes for the use of proc_open.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
interface PipesInterface
{
    const CHUNK_SIZE = 16384;

    /**
     * Returns an array of descriptors for the use of proc_open.
     *
     * @return array
     */
    public function getDescriptors();

    /**
     * Returns an array of filenames indexed by their related stream in case these pipes use temporary files.
     *
     * @return string[]
     */
    public function getFiles();

    /**
     * Reads data in file handles and pipes.
     *
     * @param bool \$blocking Whether to use blocking calls or not
     * @param bool \$close    Whether to close pipes if they've reached EOF
     *
     * @return string[] An array of read data indexed by their fd
     */
    public function readAndWrite(\$blocking, \$close = false);

    /**
     * Returns if the current state has open file handles or pipes.
     *
     * @return bool
     */
    public function areOpen();

    /**
     * Returns if pipes are able to read output.
     *
     * @return bool
     */
    public function haveReadSupport();

    /**
     * Closes file handles and pipes.
     */
    public function close();
}
", "vendor/symfony/process/Pipes/PipesInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Pipes/PipesInterface.php");
    }
}
