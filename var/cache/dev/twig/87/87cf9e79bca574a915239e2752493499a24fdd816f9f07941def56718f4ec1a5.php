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

/* vendor/symfony/validator/Tests/Fixtures/FilesLoader.php */
class __TwigTemplate_a2745048affe6bb52ab3bb4e2bb51ee2305ea8310143fbdb243314ada3a74cf7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Fixtures/FilesLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Fixtures/FilesLoader.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Fixtures;

use Symfony\\Component\\Validator\\Mapping\\Loader\\FilesLoader as BaseFilesLoader;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

abstract class FilesLoader extends BaseFilesLoader
{
    protected \$timesCalled = 0;
    protected \$loader;

    public function __construct(array \$paths, LoaderInterface \$loader)
    {
        \$this->loader = \$loader;
        parent::__construct(\$paths);
    }

    protected function getFileLoaderInstance(\$file)
    {
        ++\$this->timesCalled;

        return \$this->loader;
    }

    public function getTimesCalled()
    {
        return \$this->timesCalled;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Fixtures/FilesLoader.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Fixtures;

use Symfony\\Component\\Validator\\Mapping\\Loader\\FilesLoader as BaseFilesLoader;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

abstract class FilesLoader extends BaseFilesLoader
{
    protected \$timesCalled = 0;
    protected \$loader;

    public function __construct(array \$paths, LoaderInterface \$loader)
    {
        \$this->loader = \$loader;
        parent::__construct(\$paths);
    }

    protected function getFileLoaderInstance(\$file)
    {
        ++\$this->timesCalled;

        return \$this->loader;
    }

    public function getTimesCalled()
    {
        return \$this->timesCalled;
    }
}
", "vendor/symfony/validator/Tests/Fixtures/FilesLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Fixtures/FilesLoader.php");
    }
}
