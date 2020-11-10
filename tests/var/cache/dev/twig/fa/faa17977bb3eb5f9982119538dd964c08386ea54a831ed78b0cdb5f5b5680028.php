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

/* vendor/symfony/phpunit-bridge/Tests/Fixtures/coverage/tests/bootstrap.php */
class __TwigTemplate_fb3bfd88a3cfe228ca2f41d8034c9c190269a27189d74b61c688a7dcb3ffac00 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/Fixtures/coverage/tests/bootstrap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/Fixtures/coverage/tests/bootstrap.php"));

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

require __DIR__.'/../src/BarCov.php';
require __DIR__.'/../src/FooCov.php';

require __DIR__.'/../../../../Legacy/CoverageListenerTrait.php';

if (class_exists('PHPUnit_Runner_Version') && version_compare(\\PHPUnit_Runner_Version::id(), '6.0.0', '<')) {
    require_once __DIR__.'/../../../../Legacy/CoverageListenerForV5.php';
} elseif (version_compare(\\PHPUnit\\Runner\\Version::id(), '7.0.0', '<')) {
    require_once __DIR__.'/../../../../Legacy/CoverageListenerForV6.php';
} else {
    require_once __DIR__.'/../../../../Legacy/CoverageListenerForV7.php';
}

require __DIR__.'/../../../../CoverageListener.php';
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/Fixtures/coverage/tests/bootstrap.php";
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

require __DIR__.'/../src/BarCov.php';
require __DIR__.'/../src/FooCov.php';

require __DIR__.'/../../../../Legacy/CoverageListenerTrait.php';

if (class_exists('PHPUnit_Runner_Version') && version_compare(\\PHPUnit_Runner_Version::id(), '6.0.0', '<')) {
    require_once __DIR__.'/../../../../Legacy/CoverageListenerForV5.php';
} elseif (version_compare(\\PHPUnit\\Runner\\Version::id(), '7.0.0', '<')) {
    require_once __DIR__.'/../../../../Legacy/CoverageListenerForV6.php';
} else {
    require_once __DIR__.'/../../../../Legacy/CoverageListenerForV7.php';
}

require __DIR__.'/../../../../CoverageListener.php';
", "vendor/symfony/phpunit-bridge/Tests/Fixtures/coverage/tests/bootstrap.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/Fixtures/coverage/tests/bootstrap.php");
    }
}
