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

/* vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php */
class __TwigTemplate_c2cf147e7e690844ba3692eebee8dfa4c0baa3b3f4ad4247d80209f524f13bbe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace PackageVersions;

use Generator;
use OutOfBoundsException;
use UnexpectedValueException;
use function array_key_exists;
use function array_merge;
use function file_exists;
use function file_get_contents;
use function iterator_to_array;
use function json_decode;
use function json_encode;
use function sprintf;

/**
 * @internal
 *
 * This is a fallback for {@see \\PackageVersions\\Versions::getVersion()}
 * Do not use this class directly: it is intended to be only used when
 * {@see \\PackageVersions\\Versions} fails to be generated, which typically
 * happens when running composer with `--no-scripts` flag)
 */
final class FallbackVersions
{
    public const ROOT_PACKAGE_NAME = 'unknown/root-package@UNKNOWN';

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     * @throws UnexpectedValueException If the composer.lock file could not be located.
     */
    public static function getVersion(string \$packageName) : string
    {
        \$versions = iterator_to_array(self::getVersions(self::getComposerLockPath()));

        if (! array_key_exists(\$packageName, \$versions)) {
            throw new OutOfBoundsException(
                'Required package \"' . \$packageName . '\" is not installed: cannot detect its version'
            );
        }

        return \$versions[\$packageName];
    }

    /**
     * @throws UnexpectedValueException
     */
    private static function getComposerLockPath() : string
    {
        // bold assumption, but there's not here to fix everyone's problems.
        \$checkedPaths = [__DIR__ . '/../../../../../composer.lock', __DIR__ . '/../../composer.lock'];

        foreach (\$checkedPaths as \$path) {
            if (file_exists(\$path)) {
                return \$path;
            }
        }

        throw new UnexpectedValueException(sprintf(
            'PackageVersions could not locate your `composer.lock` location. This is assumed to be in %s. '
            . 'If you customized your composer vendor directory and ran composer installation with --no-scripts, '
            . 'then you are on your own, and we can\\'t really help you. Fix your shit and cut the tooling some slack.',
            json_encode(\$checkedPaths)
        ));
    }

    private static function getVersions(string \$composerLockFile) : Generator
    {
        \$lockData = json_decode(file_get_contents(\$composerLockFile), true);

        \$lockData['packages-dev'] = \$lockData['packages-dev'] ?? [];

        foreach (array_merge(\$lockData['packages'], \$lockData['packages-dev']) as \$package) {
            yield \$package['name'] => \$package['version'] . '@' . (
                \$package['source']['reference']?? \$package['dist']['reference'] ?? ''
            );
        }

        yield self::ROOT_PACKAGE_NAME;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace PackageVersions;

use Generator;
use OutOfBoundsException;
use UnexpectedValueException;
use function array_key_exists;
use function array_merge;
use function file_exists;
use function file_get_contents;
use function iterator_to_array;
use function json_decode;
use function json_encode;
use function sprintf;

/**
 * @internal
 *
 * This is a fallback for {@see \\PackageVersions\\Versions::getVersion()}
 * Do not use this class directly: it is intended to be only used when
 * {@see \\PackageVersions\\Versions} fails to be generated, which typically
 * happens when running composer with `--no-scripts` flag)
 */
final class FallbackVersions
{
    public const ROOT_PACKAGE_NAME = 'unknown/root-package@UNKNOWN';

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     * @throws UnexpectedValueException If the composer.lock file could not be located.
     */
    public static function getVersion(string \$packageName) : string
    {
        \$versions = iterator_to_array(self::getVersions(self::getComposerLockPath()));

        if (! array_key_exists(\$packageName, \$versions)) {
            throw new OutOfBoundsException(
                'Required package \"' . \$packageName . '\" is not installed: cannot detect its version'
            );
        }

        return \$versions[\$packageName];
    }

    /**
     * @throws UnexpectedValueException
     */
    private static function getComposerLockPath() : string
    {
        // bold assumption, but there's not here to fix everyone's problems.
        \$checkedPaths = [__DIR__ . '/../../../../../composer.lock', __DIR__ . '/../../composer.lock'];

        foreach (\$checkedPaths as \$path) {
            if (file_exists(\$path)) {
                return \$path;
            }
        }

        throw new UnexpectedValueException(sprintf(
            'PackageVersions could not locate your `composer.lock` location. This is assumed to be in %s. '
            . 'If you customized your composer vendor directory and ran composer installation with --no-scripts, '
            . 'then you are on your own, and we can\\'t really help you. Fix your shit and cut the tooling some slack.',
            json_encode(\$checkedPaths)
        ));
    }

    private static function getVersions(string \$composerLockFile) : Generator
    {
        \$lockData = json_decode(file_get_contents(\$composerLockFile), true);

        \$lockData['packages-dev'] = \$lockData['packages-dev'] ?? [];

        foreach (array_merge(\$lockData['packages'], \$lockData['packages-dev']) as \$package) {
            yield \$package['name'] => \$package['version'] . '@' . (
                \$package['source']['reference']?? \$package['dist']['reference'] ?? ''
            );
        }

        yield self::ROOT_PACKAGE_NAME;
    }
}
", "vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php", "/var/www/public/DevLaon/templates/vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php");
    }
}
