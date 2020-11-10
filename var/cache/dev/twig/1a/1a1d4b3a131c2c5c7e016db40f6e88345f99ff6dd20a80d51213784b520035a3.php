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

/* vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php */
class __TwigTemplate_6f5ca6c6c6ce025ccd8c857ac6c2e14f13994976220497de32533af2020e2337 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Native session handler using PHP's built in file storage.
 *
 * @author Drak <drak@zikula.org>
 */
class NativeFileSessionHandler extends \\SessionHandler
{
    /**
     * @param string \$savePath Path of directory to save session files
     *                         Default null will leave setting as defined by PHP.
     *                         '/path', 'N;/path', or 'N;octal-mode;/path
     *
     * @see https://php.net/session.configuration#ini.session.save-path for further details.
     *
     * @throws \\InvalidArgumentException On invalid \$savePath
     * @throws \\RuntimeException         When failing to create the save directory
     */
    public function __construct(string \$savePath = null)
    {
        if (null === \$savePath) {
            \$savePath = ini_get('session.save_path');
        }

        \$baseDir = \$savePath;

        if (\$count = substr_count(\$savePath, ';')) {
            if (\$count > 2) {
                throw new \\InvalidArgumentException(sprintf('Invalid argument \$savePath \\'%s\\'', \$savePath));
            }

            // characters after last ';' are the path
            \$baseDir = ltrim(strrchr(\$savePath, ';'), ';');
        }

        if (\$baseDir && !is_dir(\$baseDir) && !@mkdir(\$baseDir, 0777, true) && !is_dir(\$baseDir)) {
            throw new \\RuntimeException(sprintf('Session Storage was not able to create directory \"%s\"', \$baseDir));
        }

        ini_set('session.save_path', \$savePath);
        ini_set('session.save_handler', 'files');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Native session handler using PHP's built in file storage.
 *
 * @author Drak <drak@zikula.org>
 */
class NativeFileSessionHandler extends \\SessionHandler
{
    /**
     * @param string \$savePath Path of directory to save session files
     *                         Default null will leave setting as defined by PHP.
     *                         '/path', 'N;/path', or 'N;octal-mode;/path
     *
     * @see https://php.net/session.configuration#ini.session.save-path for further details.
     *
     * @throws \\InvalidArgumentException On invalid \$savePath
     * @throws \\RuntimeException         When failing to create the save directory
     */
    public function __construct(string \$savePath = null)
    {
        if (null === \$savePath) {
            \$savePath = ini_get('session.save_path');
        }

        \$baseDir = \$savePath;

        if (\$count = substr_count(\$savePath, ';')) {
            if (\$count > 2) {
                throw new \\InvalidArgumentException(sprintf('Invalid argument \$savePath \\'%s\\'', \$savePath));
            }

            // characters after last ';' are the path
            \$baseDir = ltrim(strrchr(\$savePath, ';'), ';');
        }

        if (\$baseDir && !is_dir(\$baseDir) && !@mkdir(\$baseDir, 0777, true) && !is_dir(\$baseDir)) {
            throw new \\RuntimeException(sprintf('Session Storage was not able to create directory \"%s\"', \$baseDir));
        }

        ini_set('session.save_path', \$savePath);
        ini_set('session.save_handler', 'files');
    }
}
", "vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php");
    }
}
