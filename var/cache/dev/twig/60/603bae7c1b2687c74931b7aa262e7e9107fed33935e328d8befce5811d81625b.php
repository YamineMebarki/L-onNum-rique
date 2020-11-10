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

/* vendor/symfony/flex/src/Unpacker.php */
class __TwigTemplate_fc88a3093e89936fc3a9e3b9310d7de75820c5c6710ae2ae4d0a2ed3941cdc58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Unpacker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Unpacker.php"));

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

namespace Symfony\\Flex;

use Composer\\Composer;
use Composer\\Factory;
use Composer\\Json\\JsonFile;
use Composer\\Json\\JsonManipulator;
use Symfony\\Flex\\Unpack\\Operation;
use Symfony\\Flex\\Unpack\\Result;

class Unpacker
{
    private \$composer;
    private \$resolver;

    public function __construct(Composer \$composer, PackageResolver \$resolver)
    {
        \$this->composer = \$composer;
        \$this->resolver = \$resolver;
    }

    public function unpack(Operation \$op): Result
    {
        \$result = new Result();
        \$json = new JsonFile(Factory::getComposerFile());
        \$manipulator = new JsonManipulator(file_get_contents(\$json->getPath()));
        foreach (\$op->getPackages() as \$package) {
            \$pkg = \$this->composer->getRepositoryManager()->getLocalRepository()->findPackage(\$package['name'], \$package['version'] ?: '*');
            \$pkg = \$pkg ?? \$this->composer->getRepositoryManager()->findPackage(\$package['name'], \$package['version'] ?: '*');

            // not unpackable or no --unpack flag or empty packs (markers)
            if (
                null === \$pkg ||
                'symfony-pack' !== \$pkg->getType() ||
                !\$op->shouldUnpack() ||
                0 === \\count(\$pkg->getRequires()) + \\count(\$pkg->getDevRequires())
            ) {
                \$result->addRequired(\$package['name'].(\$package['version'] ? ':'.\$package['version'] : ''));

                continue;
            }

            \$result->addUnpacked(\$pkg);
            foreach (\$pkg->getRequires() as \$link) {
                if ('php' === \$link->getTarget()) {
                    continue;
                }

                \$constraint = \$link->getPrettyConstraint();
                \$constraint = substr(\$this->resolver->parseVersion(\$link->getTarget(), \$constraint, !\$package['dev']), 1) ?: \$constraint;

                if (!\$manipulator->addLink(\$package['dev'] ? 'require-dev' : 'require', \$link->getTarget(), \$constraint, \$op->shouldSort())) {
                    throw new \\RuntimeException(sprintf('Unable to unpack package \"%s\".', \$link->getTarget()));
                }
            }
        }

        file_put_contents(\$json->getPath(), \$manipulator->getContents());

        return \$result;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Unpacker.php";
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

namespace Symfony\\Flex;

use Composer\\Composer;
use Composer\\Factory;
use Composer\\Json\\JsonFile;
use Composer\\Json\\JsonManipulator;
use Symfony\\Flex\\Unpack\\Operation;
use Symfony\\Flex\\Unpack\\Result;

class Unpacker
{
    private \$composer;
    private \$resolver;

    public function __construct(Composer \$composer, PackageResolver \$resolver)
    {
        \$this->composer = \$composer;
        \$this->resolver = \$resolver;
    }

    public function unpack(Operation \$op): Result
    {
        \$result = new Result();
        \$json = new JsonFile(Factory::getComposerFile());
        \$manipulator = new JsonManipulator(file_get_contents(\$json->getPath()));
        foreach (\$op->getPackages() as \$package) {
            \$pkg = \$this->composer->getRepositoryManager()->getLocalRepository()->findPackage(\$package['name'], \$package['version'] ?: '*');
            \$pkg = \$pkg ?? \$this->composer->getRepositoryManager()->findPackage(\$package['name'], \$package['version'] ?: '*');

            // not unpackable or no --unpack flag or empty packs (markers)
            if (
                null === \$pkg ||
                'symfony-pack' !== \$pkg->getType() ||
                !\$op->shouldUnpack() ||
                0 === \\count(\$pkg->getRequires()) + \\count(\$pkg->getDevRequires())
            ) {
                \$result->addRequired(\$package['name'].(\$package['version'] ? ':'.\$package['version'] : ''));

                continue;
            }

            \$result->addUnpacked(\$pkg);
            foreach (\$pkg->getRequires() as \$link) {
                if ('php' === \$link->getTarget()) {
                    continue;
                }

                \$constraint = \$link->getPrettyConstraint();
                \$constraint = substr(\$this->resolver->parseVersion(\$link->getTarget(), \$constraint, !\$package['dev']), 1) ?: \$constraint;

                if (!\$manipulator->addLink(\$package['dev'] ? 'require-dev' : 'require', \$link->getTarget(), \$constraint, \$op->shouldSort())) {
                    throw new \\RuntimeException(sprintf('Unable to unpack package \"%s\".', \$link->getTarget()));
                }
            }
        }

        file_put_contents(\$json->getPath(), \$manipulator->getContents());

        return \$result;
    }
}
", "vendor/symfony/flex/src/Unpacker.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Unpacker.php");
    }
}
