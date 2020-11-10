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

/* vendor/symfony/framework-bundle/Test/WebTestCase.php */
class __TwigTemplate_836fb38b7457391d0cb95b99cca34f6a2a08a1af7a1c7ce0660a98a788035b96 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Test/WebTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Test/WebTestCase.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use Symfony\\Bundle\\FrameworkBundle\\KernelBrowser;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * WebTestCase is the base class for functional tests.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class WebTestCase extends KernelTestCase
{
    use ForwardCompatTestTrait;
    use WebTestAssertionsTrait;

    private function doTearDown()
    {
        parent::tearDown();
        self::getClient(null);
    }

    /**
     * Creates a KernelBrowser.
     *
     * @param array \$options An array of options to pass to the createKernel method
     * @param array \$server  An array of server parameters
     *
     * @return KernelBrowser A KernelBrowser instance
     */
    protected static function createClient(array \$options = [], array \$server = [])
    {
        \$kernel = static::bootKernel(\$options);

        try {
            \$client = \$kernel->getContainer()->get('test.client');
        } catch (ServiceNotFoundException \$e) {
            if (class_exists(KernelBrowser::class)) {
                throw new \\LogicException('You cannot create the client used in functional tests if the \"framework.test\" config is not set to true.');
            }
            throw new \\LogicException('You cannot create the client used in functional tests if the BrowserKit component is not available. Try running \"composer require symfony/browser-kit\"');
        }

        \$client->setServerParameters(\$server);

        return self::getClient(\$client);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Test/WebTestCase.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use Symfony\\Bundle\\FrameworkBundle\\KernelBrowser;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * WebTestCase is the base class for functional tests.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class WebTestCase extends KernelTestCase
{
    use ForwardCompatTestTrait;
    use WebTestAssertionsTrait;

    private function doTearDown()
    {
        parent::tearDown();
        self::getClient(null);
    }

    /**
     * Creates a KernelBrowser.
     *
     * @param array \$options An array of options to pass to the createKernel method
     * @param array \$server  An array of server parameters
     *
     * @return KernelBrowser A KernelBrowser instance
     */
    protected static function createClient(array \$options = [], array \$server = [])
    {
        \$kernel = static::bootKernel(\$options);

        try {
            \$client = \$kernel->getContainer()->get('test.client');
        } catch (ServiceNotFoundException \$e) {
            if (class_exists(KernelBrowser::class)) {
                throw new \\LogicException('You cannot create the client used in functional tests if the \"framework.test\" config is not set to true.');
            }
            throw new \\LogicException('You cannot create the client used in functional tests if the BrowserKit component is not available. Try running \"composer require symfony/browser-kit\"');
        }

        \$client->setServerParameters(\$server);

        return self::getClient(\$client);
    }
}
", "vendor/symfony/framework-bundle/Test/WebTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Test/WebTestCase.php");
    }
}
