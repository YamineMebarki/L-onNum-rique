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

/* vendor/symfony/filesystem/Tests/Fixtures/MockStream/MockStream.php */
class __TwigTemplate_8701f270518b61973a52458fd96fca49795685d8f4c1180deae110edce6155a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/filesystem/Tests/Fixtures/MockStream/MockStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/filesystem/Tests/Fixtures/MockStream/MockStream.php"));

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

namespace Symfony\\Component\\Filesystem\\Tests\\Fixtures\\MockStream;

/**
 * Mock stream class to be used with stream_wrapper_register.
 * stream_wrapper_register('mock', 'Symfony\\Component\\Filesystem\\Tests\\Fixtures\\MockStream\\MockStream').
 */
class MockStream
{
    /**
     * Opens file or URL.
     *
     * @param string \$path        Specifies the URL that was passed to the original function
     * @param string \$mode        The mode used to open the file, as detailed for fopen()
     * @param int    \$options     Holds additional flags set by the streams API
     * @param string \$opened_path If the path is opened successfully, and STREAM_USE_PATH is set in options,
     *                            opened_path should be set to the full path of the file/resource that was actually opened
     *
     * @return bool
     */
    public function stream_open(\$path, \$mode, \$options, &\$opened_path)
    {
        return true;
    }

    /**
     * @param string \$path  The file path or URL to stat
     * @param array  \$flags Holds additional flags set by the streams API
     *
     * @return array File stats
     */
    public function url_stat(\$path, \$flags)
    {
        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/filesystem/Tests/Fixtures/MockStream/MockStream.php";
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

namespace Symfony\\Component\\Filesystem\\Tests\\Fixtures\\MockStream;

/**
 * Mock stream class to be used with stream_wrapper_register.
 * stream_wrapper_register('mock', 'Symfony\\Component\\Filesystem\\Tests\\Fixtures\\MockStream\\MockStream').
 */
class MockStream
{
    /**
     * Opens file or URL.
     *
     * @param string \$path        Specifies the URL that was passed to the original function
     * @param string \$mode        The mode used to open the file, as detailed for fopen()
     * @param int    \$options     Holds additional flags set by the streams API
     * @param string \$opened_path If the path is opened successfully, and STREAM_USE_PATH is set in options,
     *                            opened_path should be set to the full path of the file/resource that was actually opened
     *
     * @return bool
     */
    public function stream_open(\$path, \$mode, \$options, &\$opened_path)
    {
        return true;
    }

    /**
     * @param string \$path  The file path or URL to stat
     * @param array  \$flags Holds additional flags set by the streams API
     *
     * @return array File stats
     */
    public function url_stat(\$path, \$flags)
    {
        return [];
    }
}
", "vendor/symfony/filesystem/Tests/Fixtures/MockStream/MockStream.php", "/var/www/public/DevLaon/templates/vendor/symfony/filesystem/Tests/Fixtures/MockStream/MockStream.php");
    }
}
