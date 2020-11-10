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

/* vendor/symfony/flex/src/Downloader.php */
class __TwigTemplate_da56f3c517818cbe75f41630610ae41c6dde76f45a0e7c8193802417695ddc43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Downloader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Downloader.php"));

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

use Composer\\Cache as ComposerCache;
use Composer\\Composer;
use Composer\\DependencyResolver\\Operation\\OperationInterface;
use Composer\\DependencyResolver\\Operation\\UninstallOperation;
use Composer\\DependencyResolver\\Operation\\UpdateOperation;
use Composer\\Downloader\\TransportException;
use Composer\\IO\\IOInterface;
use Composer\\Json\\JsonFile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Downloader
{
    private static \$DEFAULT_ENDPOINT = 'https://flex.symfony.com';
    private static \$MAX_LENGTH = 1000;
    private static \$versions;

    private \$io;
    private \$sess;
    private \$cache;
    private \$rfs;
    private \$degradedMode = false;
    private \$endpoint;
    private \$caFile;
    private \$flexId;
    private \$enabled = true;

    public function __construct(Composer \$composer, IoInterface \$io, ParallelDownloader \$rfs)
    {
        if (getenv('SYMFONY_CAFILE')) {
            \$this->caFile = getenv('SYMFONY_CAFILE');
        }

        \$this->endpoint = rtrim(getenv('SYMFONY_ENDPOINT') ?: (\$composer->getPackage()->getExtra()['symfony']['endpoint'] ?? self::\$DEFAULT_ENDPOINT), '/');
        \$this->io = \$io;
        \$config = \$composer->getConfig();
        \$this->rfs = \$rfs;
        \$this->cache = new ComposerCache(\$io, \$config->get('cache-repo-dir').'/'.preg_replace('{[^a-z0-9.]}i', '-', \$this->endpoint));
        \$this->sess = bin2hex(random_bytes(16));
    }

    public function getSessionId(): string
    {
        return \$this->sess;
    }

    public function setFlexId(string \$id = null)
    {
        \$this->flexId = \$id;
    }

    public function isEnabled()
    {
        return \$this->enabled;
    }

    public function disable()
    {
        \$this->enabled = false;
    }

    public function getVersions()
    {
        return self::\$versions ?? self::\$versions = \$this->get('/versions.json')->getBody();
    }

    /**
     * Downloads recipes.
     *
     * @param OperationInterface[] \$operations
     */
    public function getRecipes(array \$operations): array
    {
        \$paths = [];
        \$chunk = '';
        foreach (\$operations as \$i => \$operation) {
            \$o = 'i';
            if (\$operation instanceof UpdateOperation) {
                \$package = \$operation->getTargetPackage();
                \$o = 'u';
            } else {
                \$package = \$operation->getPackage();
                if (\$operation instanceof UninstallOperation) {
                    \$o = 'r';
                }
            }

            \$version = \$package->getPrettyVersion();
            if (0 === strpos(\$version, 'dev-') && isset(\$package->getExtra()['branch-alias'])) {
                \$branchAliases = \$package->getExtra()['branch-alias'];
                if (
                    (isset(\$branchAliases[\$version]) && \$alias = \$branchAliases[\$version]) ||
                    (isset(\$branchAliases['dev-master']) && \$alias = \$branchAliases['dev-master'])
                ) {
                    \$version = \$alias;
                }
            }

            // FIXME: Multi name with getNames()
            \$name = str_replace('/', ',', \$package->getName());
            \$path = sprintf('%s,%s%s', \$name, \$o, \$version);
            if (\$date = \$package->getReleaseDate()) {
                \$path .= ','.\$date->format('U');
            }
            if (\\strlen(\$chunk) + \\strlen(\$path) > self::\$MAX_LENGTH) {
                \$paths[] = ['/p/'.\$chunk];
                \$chunk = \$path;
            } elseif (\$chunk) {
                \$chunk .= ';'.\$path;
            } else {
                \$chunk = \$path;
            }
        }
        if (\$chunk) {
            \$paths[] = ['/p/'.\$chunk];
        }

        if (\$this->enabled && self::\$DEFAULT_ENDPOINT !== \$this->endpoint) {
            \$this->io->writeError('<warning>Using \"'.\$this->endpoint.'\" as the Symfony endpoint</warning>');
        }

        \$bodies = [];
        \$this->rfs->download(\$paths, function (\$path) use (&\$bodies) {
            if (\$body = \$this->get(\$path, [], false)->getBody()) {
                \$bodies[] = \$body;
            }
        });

        \$data = [];
        foreach (\$bodies as \$body) {
            foreach (\$body['manifests'] as \$name => \$manifest) {
                \$data['manifests'][\$name] = \$manifest;
            }
            foreach (\$body['locks'] ?? [] as \$name => \$lock) {
                \$data['locks'][\$name] = \$lock;
            }
        }

        return \$data;
    }

    /**
     * Decodes a JSON HTTP response body.
     *
     * @param string \$path    The path to get on the server
     * @param array  \$headers An array of HTTP headers
     */
    public function get(string \$path, array \$headers = [], \$cache = true): Response
    {
        if (!\$this->enabled && '/versions.json' !== \$path) {
            return new Response([]);
        }
        \$headers[] = 'Package-Session: '.\$this->sess;
        \$url = \$this->endpoint.'/'.ltrim(\$path, '/');
        \$cacheKey = \$cache ? ltrim(\$path, '/') : '';

        if (\$cacheKey && \$contents = \$this->cache->read(\$cacheKey)) {
            \$cachedResponse = Response::fromJson(json_decode(\$contents, true));
            if (\$lastModified = \$cachedResponse->getHeader('last-modified')) {
                \$response = \$this->fetchFileIfLastModified(\$url, \$cacheKey, \$lastModified, \$headers);
                if (304 === \$response->getStatusCode()) {
                    \$response = new Response(\$cachedResponse->getBody(), \$response->getOrigHeaders(), 304);
                }

                return \$response;
            }
        }

        return \$this->fetchFile(\$url, \$cacheKey, \$headers);
    }

    private function fetchFile(string \$url, string \$cacheKey, array \$headers): Response
    {
        \$options = \$this->getOptions(\$headers);
        \$retries = 3;
        while (\$retries--) {
            try {
                \$json = \$this->rfs->getContents(\$this->endpoint, \$url, false, \$options);

                return \$this->parseJson(\$json, \$url, \$cacheKey, \$this->rfs->getLastHeaders());
            } catch (\\Exception \$e) {
                if (\$e instanceof TransportException && 404 === \$e->getStatusCode()) {
                    throw \$e;
                }

                if (\$retries) {
                    usleep(100000);
                    continue;
                }

                if (\$cacheKey && \$contents = \$this->cache->read(\$cacheKey)) {
                    \$this->switchToDegradedMode(\$e, \$url);

                    return Response::fromJson(JsonFile::parseJson(\$contents, \$this->cache->getRoot().\$cacheKey));
                }

                throw \$e;
            }
        }
    }

    private function fetchFileIfLastModified(string \$url, string \$cacheKey, string \$lastModifiedTime, array \$headers): Response
    {
        \$headers[] = 'If-Modified-Since: '.\$lastModifiedTime;
        \$options = \$this->getOptions(\$headers);
        \$retries = 3;
        while (\$retries--) {
            try {
                \$json = \$this->rfs->getContents(\$this->endpoint, \$url, false, \$options);
                if (304 === \$this->rfs->findStatusCode(\$this->rfs->getLastHeaders())) {
                    return new Response('', \$this->rfs->getLastHeaders(), 304);
                }

                return \$this->parseJson(\$json, \$url, \$cacheKey, \$this->rfs->getLastHeaders());
            } catch (\\Exception \$e) {
                if (\$e instanceof TransportException && 404 === \$e->getStatusCode()) {
                    throw \$e;
                }

                if (\$retries) {
                    usleep(100000);
                    continue;
                }

                \$this->switchToDegradedMode(\$e, \$url);

                return new Response('', [], 304);
            }
        }
    }

    private function parseJson(string \$json, string \$url, string \$cacheKey, array \$lastHeaders): Response
    {
        \$data = JsonFile::parseJson(\$json, \$url);
        if (!empty(\$data['warning'])) {
            \$this->io->writeError('<warning>Warning from '.\$url.': '.\$data['warning'].'</warning>');
        }
        if (!empty(\$data['info'])) {
            \$this->io->writeError('<info>Info from '.\$url.': '.\$data['info'].'</info>');
        }

        \$response = new Response(\$data, \$lastHeaders);
        if (\$response->getHeader('last-modified')) {
            \$this->cache->write(\$cacheKey, json_encode(\$response));
        }

        return \$response;
    }

    private function switchToDegradedMode(\\Exception \$e, string \$url)
    {
        if (!\$this->degradedMode) {
            \$this->io->writeError('<warning>'.\$e->getMessage().'</warning>');
            \$this->io->writeError('<warning>'.\$url.' could not be fully loaded, package information was loaded from the local cache and may be out of date</warning>');
        }
        \$this->degradedMode = true;
    }

    private function getOptions(array \$headers): array
    {
        \$options = ['http' => ['header' => \$headers]];

        if (\$this->flexId) {
            \$options['http']['header'][] = 'Project: '.\$this->flexId;
        }

        if (null !== \$this->caFile) {
            \$options['ssl']['cafile'] = \$this->caFile;
        }

        return \$options;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Downloader.php";
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

use Composer\\Cache as ComposerCache;
use Composer\\Composer;
use Composer\\DependencyResolver\\Operation\\OperationInterface;
use Composer\\DependencyResolver\\Operation\\UninstallOperation;
use Composer\\DependencyResolver\\Operation\\UpdateOperation;
use Composer\\Downloader\\TransportException;
use Composer\\IO\\IOInterface;
use Composer\\Json\\JsonFile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Downloader
{
    private static \$DEFAULT_ENDPOINT = 'https://flex.symfony.com';
    private static \$MAX_LENGTH = 1000;
    private static \$versions;

    private \$io;
    private \$sess;
    private \$cache;
    private \$rfs;
    private \$degradedMode = false;
    private \$endpoint;
    private \$caFile;
    private \$flexId;
    private \$enabled = true;

    public function __construct(Composer \$composer, IoInterface \$io, ParallelDownloader \$rfs)
    {
        if (getenv('SYMFONY_CAFILE')) {
            \$this->caFile = getenv('SYMFONY_CAFILE');
        }

        \$this->endpoint = rtrim(getenv('SYMFONY_ENDPOINT') ?: (\$composer->getPackage()->getExtra()['symfony']['endpoint'] ?? self::\$DEFAULT_ENDPOINT), '/');
        \$this->io = \$io;
        \$config = \$composer->getConfig();
        \$this->rfs = \$rfs;
        \$this->cache = new ComposerCache(\$io, \$config->get('cache-repo-dir').'/'.preg_replace('{[^a-z0-9.]}i', '-', \$this->endpoint));
        \$this->sess = bin2hex(random_bytes(16));
    }

    public function getSessionId(): string
    {
        return \$this->sess;
    }

    public function setFlexId(string \$id = null)
    {
        \$this->flexId = \$id;
    }

    public function isEnabled()
    {
        return \$this->enabled;
    }

    public function disable()
    {
        \$this->enabled = false;
    }

    public function getVersions()
    {
        return self::\$versions ?? self::\$versions = \$this->get('/versions.json')->getBody();
    }

    /**
     * Downloads recipes.
     *
     * @param OperationInterface[] \$operations
     */
    public function getRecipes(array \$operations): array
    {
        \$paths = [];
        \$chunk = '';
        foreach (\$operations as \$i => \$operation) {
            \$o = 'i';
            if (\$operation instanceof UpdateOperation) {
                \$package = \$operation->getTargetPackage();
                \$o = 'u';
            } else {
                \$package = \$operation->getPackage();
                if (\$operation instanceof UninstallOperation) {
                    \$o = 'r';
                }
            }

            \$version = \$package->getPrettyVersion();
            if (0 === strpos(\$version, 'dev-') && isset(\$package->getExtra()['branch-alias'])) {
                \$branchAliases = \$package->getExtra()['branch-alias'];
                if (
                    (isset(\$branchAliases[\$version]) && \$alias = \$branchAliases[\$version]) ||
                    (isset(\$branchAliases['dev-master']) && \$alias = \$branchAliases['dev-master'])
                ) {
                    \$version = \$alias;
                }
            }

            // FIXME: Multi name with getNames()
            \$name = str_replace('/', ',', \$package->getName());
            \$path = sprintf('%s,%s%s', \$name, \$o, \$version);
            if (\$date = \$package->getReleaseDate()) {
                \$path .= ','.\$date->format('U');
            }
            if (\\strlen(\$chunk) + \\strlen(\$path) > self::\$MAX_LENGTH) {
                \$paths[] = ['/p/'.\$chunk];
                \$chunk = \$path;
            } elseif (\$chunk) {
                \$chunk .= ';'.\$path;
            } else {
                \$chunk = \$path;
            }
        }
        if (\$chunk) {
            \$paths[] = ['/p/'.\$chunk];
        }

        if (\$this->enabled && self::\$DEFAULT_ENDPOINT !== \$this->endpoint) {
            \$this->io->writeError('<warning>Using \"'.\$this->endpoint.'\" as the Symfony endpoint</warning>');
        }

        \$bodies = [];
        \$this->rfs->download(\$paths, function (\$path) use (&\$bodies) {
            if (\$body = \$this->get(\$path, [], false)->getBody()) {
                \$bodies[] = \$body;
            }
        });

        \$data = [];
        foreach (\$bodies as \$body) {
            foreach (\$body['manifests'] as \$name => \$manifest) {
                \$data['manifests'][\$name] = \$manifest;
            }
            foreach (\$body['locks'] ?? [] as \$name => \$lock) {
                \$data['locks'][\$name] = \$lock;
            }
        }

        return \$data;
    }

    /**
     * Decodes a JSON HTTP response body.
     *
     * @param string \$path    The path to get on the server
     * @param array  \$headers An array of HTTP headers
     */
    public function get(string \$path, array \$headers = [], \$cache = true): Response
    {
        if (!\$this->enabled && '/versions.json' !== \$path) {
            return new Response([]);
        }
        \$headers[] = 'Package-Session: '.\$this->sess;
        \$url = \$this->endpoint.'/'.ltrim(\$path, '/');
        \$cacheKey = \$cache ? ltrim(\$path, '/') : '';

        if (\$cacheKey && \$contents = \$this->cache->read(\$cacheKey)) {
            \$cachedResponse = Response::fromJson(json_decode(\$contents, true));
            if (\$lastModified = \$cachedResponse->getHeader('last-modified')) {
                \$response = \$this->fetchFileIfLastModified(\$url, \$cacheKey, \$lastModified, \$headers);
                if (304 === \$response->getStatusCode()) {
                    \$response = new Response(\$cachedResponse->getBody(), \$response->getOrigHeaders(), 304);
                }

                return \$response;
            }
        }

        return \$this->fetchFile(\$url, \$cacheKey, \$headers);
    }

    private function fetchFile(string \$url, string \$cacheKey, array \$headers): Response
    {
        \$options = \$this->getOptions(\$headers);
        \$retries = 3;
        while (\$retries--) {
            try {
                \$json = \$this->rfs->getContents(\$this->endpoint, \$url, false, \$options);

                return \$this->parseJson(\$json, \$url, \$cacheKey, \$this->rfs->getLastHeaders());
            } catch (\\Exception \$e) {
                if (\$e instanceof TransportException && 404 === \$e->getStatusCode()) {
                    throw \$e;
                }

                if (\$retries) {
                    usleep(100000);
                    continue;
                }

                if (\$cacheKey && \$contents = \$this->cache->read(\$cacheKey)) {
                    \$this->switchToDegradedMode(\$e, \$url);

                    return Response::fromJson(JsonFile::parseJson(\$contents, \$this->cache->getRoot().\$cacheKey));
                }

                throw \$e;
            }
        }
    }

    private function fetchFileIfLastModified(string \$url, string \$cacheKey, string \$lastModifiedTime, array \$headers): Response
    {
        \$headers[] = 'If-Modified-Since: '.\$lastModifiedTime;
        \$options = \$this->getOptions(\$headers);
        \$retries = 3;
        while (\$retries--) {
            try {
                \$json = \$this->rfs->getContents(\$this->endpoint, \$url, false, \$options);
                if (304 === \$this->rfs->findStatusCode(\$this->rfs->getLastHeaders())) {
                    return new Response('', \$this->rfs->getLastHeaders(), 304);
                }

                return \$this->parseJson(\$json, \$url, \$cacheKey, \$this->rfs->getLastHeaders());
            } catch (\\Exception \$e) {
                if (\$e instanceof TransportException && 404 === \$e->getStatusCode()) {
                    throw \$e;
                }

                if (\$retries) {
                    usleep(100000);
                    continue;
                }

                \$this->switchToDegradedMode(\$e, \$url);

                return new Response('', [], 304);
            }
        }
    }

    private function parseJson(string \$json, string \$url, string \$cacheKey, array \$lastHeaders): Response
    {
        \$data = JsonFile::parseJson(\$json, \$url);
        if (!empty(\$data['warning'])) {
            \$this->io->writeError('<warning>Warning from '.\$url.': '.\$data['warning'].'</warning>');
        }
        if (!empty(\$data['info'])) {
            \$this->io->writeError('<info>Info from '.\$url.': '.\$data['info'].'</info>');
        }

        \$response = new Response(\$data, \$lastHeaders);
        if (\$response->getHeader('last-modified')) {
            \$this->cache->write(\$cacheKey, json_encode(\$response));
        }

        return \$response;
    }

    private function switchToDegradedMode(\\Exception \$e, string \$url)
    {
        if (!\$this->degradedMode) {
            \$this->io->writeError('<warning>'.\$e->getMessage().'</warning>');
            \$this->io->writeError('<warning>'.\$url.' could not be fully loaded, package information was loaded from the local cache and may be out of date</warning>');
        }
        \$this->degradedMode = true;
    }

    private function getOptions(array \$headers): array
    {
        \$options = ['http' => ['header' => \$headers]];

        if (\$this->flexId) {
            \$options['http']['header'][] = 'Project: '.\$this->flexId;
        }

        if (null !== \$this->caFile) {
            \$options['ssl']['cafile'] = \$this->caFile;
        }

        return \$options;
    }
}
", "vendor/symfony/flex/src/Downloader.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Downloader.php");
    }
}
