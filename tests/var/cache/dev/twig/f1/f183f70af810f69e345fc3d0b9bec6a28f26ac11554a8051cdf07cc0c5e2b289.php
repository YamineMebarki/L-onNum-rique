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

/* vendor/symfony/framework-bundle/Tests/Functional/AbstractWebTestCase.php */
class __TwigTemplate_46fb91a4cd2a2981a09e3a3caf0f59fc8d816bd3ea50b35aea4e365fdd1dce85 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/AbstractWebTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/AbstractWebTestCase.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase as BaseWebTestCase;
use Symfony\\Component\\Filesystem\\Filesystem;

abstract class AbstractWebTestCase extends BaseWebTestCase
{
    public static function assertRedirect(\$response, \$location)
    {
        self::assertTrue(\$response->isRedirect(), 'Response is not a redirect, got status code: '.\$response->getStatusCode());
        self::assertEquals('http://localhost'.\$location, \$response->headers->get('Location'));
    }

    public static function setUpBeforeClass(): void
    {
        static::deleteTmpDir();
    }

    public static function tearDownAfterClass(): void
    {
        static::deleteTmpDir();
    }

    protected static function deleteTmpDir()
    {
        if (!file_exists(\$dir = sys_get_temp_dir().'/'.static::getVarDir())) {
            return;
        }

        \$fs = new Filesystem();
        \$fs->remove(\$dir);
    }

    protected static function getKernelClass()
    {
        require_once __DIR__.'/app/AppKernel.php';

        return 'Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\app\\AppKernel';
    }

    protected static function createKernel(array \$options = [])
    {
        \$class = self::getKernelClass();

        if (!isset(\$options['test_case'])) {
            throw new \\InvalidArgumentException('The option \"test_case\" must be set.');
        }

        return new \$class(
            static::getVarDir(),
            \$options['test_case'],
            isset(\$options['root_config']) ? \$options['root_config'] : 'config.yml',
            isset(\$options['environment']) ? \$options['environment'] : strtolower(static::getVarDir().\$options['test_case']),
            isset(\$options['debug']) ? \$options['debug'] : false
        );
    }

    protected static function getVarDir()
    {
        return 'FB'.substr(strrchr(\\get_called_class(), '\\\\'), 1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/AbstractWebTestCase.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase as BaseWebTestCase;
use Symfony\\Component\\Filesystem\\Filesystem;

abstract class AbstractWebTestCase extends BaseWebTestCase
{
    public static function assertRedirect(\$response, \$location)
    {
        self::assertTrue(\$response->isRedirect(), 'Response is not a redirect, got status code: '.\$response->getStatusCode());
        self::assertEquals('http://localhost'.\$location, \$response->headers->get('Location'));
    }

    public static function setUpBeforeClass(): void
    {
        static::deleteTmpDir();
    }

    public static function tearDownAfterClass(): void
    {
        static::deleteTmpDir();
    }

    protected static function deleteTmpDir()
    {
        if (!file_exists(\$dir = sys_get_temp_dir().'/'.static::getVarDir())) {
            return;
        }

        \$fs = new Filesystem();
        \$fs->remove(\$dir);
    }

    protected static function getKernelClass()
    {
        require_once __DIR__.'/app/AppKernel.php';

        return 'Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\app\\AppKernel';
    }

    protected static function createKernel(array \$options = [])
    {
        \$class = self::getKernelClass();

        if (!isset(\$options['test_case'])) {
            throw new \\InvalidArgumentException('The option \"test_case\" must be set.');
        }

        return new \$class(
            static::getVarDir(),
            \$options['test_case'],
            isset(\$options['root_config']) ? \$options['root_config'] : 'config.yml',
            isset(\$options['environment']) ? \$options['environment'] : strtolower(static::getVarDir().\$options['test_case']),
            isset(\$options['debug']) ? \$options['debug'] : false
        );
    }

    protected static function getVarDir()
    {
        return 'FB'.substr(strrchr(\\get_called_class(), '\\\\'), 1);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/AbstractWebTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/AbstractWebTestCase.php");
    }
}
