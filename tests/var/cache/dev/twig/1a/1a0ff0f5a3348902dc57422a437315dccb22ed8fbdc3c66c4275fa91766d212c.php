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

/* vendor/symfony/flex/src/CurlDownloader.php */
class __TwigTemplate_06c31dcd5e56923add8d2f3a1ab85be6b6033852e68b6e3f096425c32c7e5713 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/CurlDownloader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/CurlDownloader.php"));

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

use Composer\\Downloader\\TransportException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CurlDownloader
{
    private \$multiHandle;
    private \$shareHandle;
    private \$jobs = [];
    private \$exceptions = [];

    private static \$options = [
        'http' => [
            'method' => CURLOPT_CUSTOMREQUEST,
            'content' => CURLOPT_POSTFIELDS,
        ],
        'ssl' => [
            'cafile' => CURLOPT_CAINFO,
            'capath' => CURLOPT_CAPATH,
        ],
    ];

    private static \$timeInfo = [
        'total_time' => true,
        'namelookup_time' => true,
        'connect_time' => true,
        'pretransfer_time' => true,
        'starttransfer_time' => true,
        'redirect_time' => true,
    ];

    public function __construct()
    {
        \$this->multiHandle = \$mh = curl_multi_init();
        curl_multi_setopt(\$mh, CURLMOPT_PIPELINING, /*CURLPIPE_MULTIPLEX*/ 2);
        if (\\defined('CURLMOPT_MAX_HOST_CONNECTIONS')) {
            curl_multi_setopt(\$mh, CURLMOPT_MAX_HOST_CONNECTIONS, 8);
        }

        \$this->shareHandle = \$sh = curl_share_init();
        curl_share_setopt(\$sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_COOKIE);
        curl_share_setopt(\$sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_DNS);
        curl_share_setopt(\$sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_SSL_SESSION);
    }

    public function get(\$origin, \$url, \$context, \$file)
    {
        \$params = stream_context_get_params(\$context);

        \$ch = curl_init();
        \$hd = fopen('php://temp/maxmemory:32768', 'w+b');
        if (\$file && !\$fd = @fopen(\$file.'~', 'w+b')) {
            \$file = null;
        }
        if (!\$file) {
            \$fd = @fopen('php://temp/maxmemory:524288', 'w+b');
        }
        \$headers = array_diff(\$params['options']['http']['header'], ['Connection: close']);

        if (!isset(\$params['options']['http']['protocol_version'])) {
            curl_setopt(\$ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        } else {
            \$headers[] = 'Connection: keep-alive';
            if (0 === strpos(\$url, 'https://') && \\defined('CURL_VERSION_HTTP2') && \\defined('CURL_HTTP_VERSION_2_0') && (CURL_VERSION_HTTP2 & curl_version()['features'])) {
                curl_setopt(\$ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
            }
        }

        curl_setopt(\$ch, CURLOPT_URL, \$url);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$headers);
        curl_setopt(\$ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt(\$ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false);
        curl_setopt(\$ch, CURLOPT_WRITEHEADER, \$hd);
        curl_setopt(\$ch, CURLOPT_FILE, \$fd);
        curl_setopt(\$ch, CURLOPT_SHARE, \$this->shareHandle);

        foreach (self::\$options as \$type => \$options) {
            foreach (\$options as \$name => \$curlopt) {
                if (isset(\$params['options'][\$type][\$name])) {
                    curl_setopt(\$ch, \$curlopt, \$params['options'][\$type][\$name]);
                }
            }
        }

        \$progress = array_diff_key(curl_getinfo(\$ch), self::\$timeInfo);
        \$this->jobs[(int) \$ch] = [
            'progress' => \$progress,
            'ch' => \$ch,
            'callback' => \$params['notification'],
            'file' => \$file,
            'fd' => \$fd,
        ];

        curl_multi_add_handle(\$this->multiHandle, \$ch);
        \$params['notification'](STREAM_NOTIFY_RESOLVE, STREAM_NOTIFY_SEVERITY_INFO, '', 0, 0, 0, false);
        \$active = true;

        try {
            while (\$active && isset(\$this->jobs[(int) \$ch])) {
                curl_multi_exec(\$this->multiHandle, \$active);
                curl_multi_select(\$this->multiHandle);

                while (\$progress = curl_multi_info_read(\$this->multiHandle)) {
                    if (!isset(\$this->jobs[\$i = (int) \$h = \$progress['handle']])) {
                        continue;
                    }
                    \$progress = array_diff_key(curl_getinfo(\$h), self::\$timeInfo);
                    \$job = \$this->jobs[\$i];
                    unset(\$this->jobs[\$i]);
                    curl_multi_remove_handle(\$this->multiHandle, \$h);
                    try {
                        \$this->onProgress(\$h, \$job['callback'], \$progress, \$job['progress']);

                        if ('' !== curl_error(\$h)) {
                            throw new TransportException(curl_error(\$h));
                        }
                        if (\$job['file'] && CURLE_OK === curl_errno(\$h) && !isset(\$this->exceptions[\$i])) {
                            fclose(\$job['fd']);
                            rename(\$job['file'].'~', \$job['file']);
                        }
                    } catch (TransportException \$e) {
                        \$this->exceptions[\$i] = \$e;
                    }
                }

                foreach (\$this->jobs as \$i => \$h) {
                    if (!isset(\$this->jobs[\$i])) {
                        continue;
                    }
                    \$h = \$this->jobs[\$i]['ch'];
                    \$progress = array_diff_key(curl_getinfo(\$h), self::\$timeInfo);

                    if (\$this->jobs[\$i]['progress'] !== \$progress) {
                        \$previousProgress = \$this->jobs[\$i]['progress'];
                        \$this->jobs[\$i]['progress'] = \$progress;
                        try {
                            \$this->onProgress(\$h, \$this->jobs[\$i]['callback'], \$progress, \$previousProgress);
                        } catch (TransportException \$e) {
                            unset(\$this->jobs[\$i]);
                            curl_multi_remove_handle(\$this->multiHandle, \$h);
                            \$this->exceptions[\$i] = \$e;
                        }
                    }
                }
            }

            if ('' !== curl_error(\$ch) || CURLE_OK !== curl_errno(\$ch)) {
                \$this->exceptions[(int) \$ch] = new TransportException(curl_error(\$ch), curl_getinfo(\$ch, CURLINFO_HTTP_CODE) ?: 0);
            }
            if (isset(\$this->exceptions[(int) \$ch])) {
                throw \$this->exceptions[(int) \$ch];
            }
        } finally {
            if (\$file && !isset(\$this->exceptions[(int) \$ch])) {
                \$fd = fopen(\$file, 'rb');
            }
            unset(\$this->jobs[(int) \$ch], \$this->exceptions[(int) \$ch]);
            curl_multi_remove_handle(\$this->multiHandle, \$ch);
            curl_close(\$ch);

            rewind(\$hd);
            \$headers = explode(\"\\r\\n\", rtrim(stream_get_contents(\$hd)));
            fclose(\$hd);

            rewind(\$fd);
            \$contents = stream_get_contents(\$fd);
            fclose(\$fd);
        }

        return [\$headers, \$contents];
    }

    private function onProgress(\$ch, callable \$notify, array \$progress, array \$previousProgress)
    {
        if (300 <= \$progress['http_code'] && \$progress['http_code'] < 400) {
            return;
        }

        if (!\$previousProgress['http_code'] && \$progress['http_code'] && \$progress['http_code'] < 200 || 400 <= \$progress['http_code']) {
            \$code = 403 === \$progress['http_code'] ? STREAM_NOTIFY_AUTH_RESULT : STREAM_NOTIFY_FAILURE;
            \$notify(\$code, STREAM_NOTIFY_SEVERITY_ERR, curl_error(\$ch), \$progress['http_code'], 0, 0, false);
        }

        if (\$previousProgress['download_content_length'] < \$progress['download_content_length']) {
            \$notify(STREAM_NOTIFY_FILE_SIZE_IS, STREAM_NOTIFY_SEVERITY_INFO, '', 0, 0, (int) \$progress['download_content_length'], false);
        }

        if (\$previousProgress['size_download'] < \$progress['size_download']) {
            \$notify(STREAM_NOTIFY_PROGRESS, STREAM_NOTIFY_SEVERITY_INFO, '', 0, (int) \$progress['size_download'], (int) \$progress['download_content_length'], false);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/CurlDownloader.php";
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

use Composer\\Downloader\\TransportException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CurlDownloader
{
    private \$multiHandle;
    private \$shareHandle;
    private \$jobs = [];
    private \$exceptions = [];

    private static \$options = [
        'http' => [
            'method' => CURLOPT_CUSTOMREQUEST,
            'content' => CURLOPT_POSTFIELDS,
        ],
        'ssl' => [
            'cafile' => CURLOPT_CAINFO,
            'capath' => CURLOPT_CAPATH,
        ],
    ];

    private static \$timeInfo = [
        'total_time' => true,
        'namelookup_time' => true,
        'connect_time' => true,
        'pretransfer_time' => true,
        'starttransfer_time' => true,
        'redirect_time' => true,
    ];

    public function __construct()
    {
        \$this->multiHandle = \$mh = curl_multi_init();
        curl_multi_setopt(\$mh, CURLMOPT_PIPELINING, /*CURLPIPE_MULTIPLEX*/ 2);
        if (\\defined('CURLMOPT_MAX_HOST_CONNECTIONS')) {
            curl_multi_setopt(\$mh, CURLMOPT_MAX_HOST_CONNECTIONS, 8);
        }

        \$this->shareHandle = \$sh = curl_share_init();
        curl_share_setopt(\$sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_COOKIE);
        curl_share_setopt(\$sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_DNS);
        curl_share_setopt(\$sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_SSL_SESSION);
    }

    public function get(\$origin, \$url, \$context, \$file)
    {
        \$params = stream_context_get_params(\$context);

        \$ch = curl_init();
        \$hd = fopen('php://temp/maxmemory:32768', 'w+b');
        if (\$file && !\$fd = @fopen(\$file.'~', 'w+b')) {
            \$file = null;
        }
        if (!\$file) {
            \$fd = @fopen('php://temp/maxmemory:524288', 'w+b');
        }
        \$headers = array_diff(\$params['options']['http']['header'], ['Connection: close']);

        if (!isset(\$params['options']['http']['protocol_version'])) {
            curl_setopt(\$ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        } else {
            \$headers[] = 'Connection: keep-alive';
            if (0 === strpos(\$url, 'https://') && \\defined('CURL_VERSION_HTTP2') && \\defined('CURL_HTTP_VERSION_2_0') && (CURL_VERSION_HTTP2 & curl_version()['features'])) {
                curl_setopt(\$ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
            }
        }

        curl_setopt(\$ch, CURLOPT_URL, \$url);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$headers);
        curl_setopt(\$ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt(\$ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false);
        curl_setopt(\$ch, CURLOPT_WRITEHEADER, \$hd);
        curl_setopt(\$ch, CURLOPT_FILE, \$fd);
        curl_setopt(\$ch, CURLOPT_SHARE, \$this->shareHandle);

        foreach (self::\$options as \$type => \$options) {
            foreach (\$options as \$name => \$curlopt) {
                if (isset(\$params['options'][\$type][\$name])) {
                    curl_setopt(\$ch, \$curlopt, \$params['options'][\$type][\$name]);
                }
            }
        }

        \$progress = array_diff_key(curl_getinfo(\$ch), self::\$timeInfo);
        \$this->jobs[(int) \$ch] = [
            'progress' => \$progress,
            'ch' => \$ch,
            'callback' => \$params['notification'],
            'file' => \$file,
            'fd' => \$fd,
        ];

        curl_multi_add_handle(\$this->multiHandle, \$ch);
        \$params['notification'](STREAM_NOTIFY_RESOLVE, STREAM_NOTIFY_SEVERITY_INFO, '', 0, 0, 0, false);
        \$active = true;

        try {
            while (\$active && isset(\$this->jobs[(int) \$ch])) {
                curl_multi_exec(\$this->multiHandle, \$active);
                curl_multi_select(\$this->multiHandle);

                while (\$progress = curl_multi_info_read(\$this->multiHandle)) {
                    if (!isset(\$this->jobs[\$i = (int) \$h = \$progress['handle']])) {
                        continue;
                    }
                    \$progress = array_diff_key(curl_getinfo(\$h), self::\$timeInfo);
                    \$job = \$this->jobs[\$i];
                    unset(\$this->jobs[\$i]);
                    curl_multi_remove_handle(\$this->multiHandle, \$h);
                    try {
                        \$this->onProgress(\$h, \$job['callback'], \$progress, \$job['progress']);

                        if ('' !== curl_error(\$h)) {
                            throw new TransportException(curl_error(\$h));
                        }
                        if (\$job['file'] && CURLE_OK === curl_errno(\$h) && !isset(\$this->exceptions[\$i])) {
                            fclose(\$job['fd']);
                            rename(\$job['file'].'~', \$job['file']);
                        }
                    } catch (TransportException \$e) {
                        \$this->exceptions[\$i] = \$e;
                    }
                }

                foreach (\$this->jobs as \$i => \$h) {
                    if (!isset(\$this->jobs[\$i])) {
                        continue;
                    }
                    \$h = \$this->jobs[\$i]['ch'];
                    \$progress = array_diff_key(curl_getinfo(\$h), self::\$timeInfo);

                    if (\$this->jobs[\$i]['progress'] !== \$progress) {
                        \$previousProgress = \$this->jobs[\$i]['progress'];
                        \$this->jobs[\$i]['progress'] = \$progress;
                        try {
                            \$this->onProgress(\$h, \$this->jobs[\$i]['callback'], \$progress, \$previousProgress);
                        } catch (TransportException \$e) {
                            unset(\$this->jobs[\$i]);
                            curl_multi_remove_handle(\$this->multiHandle, \$h);
                            \$this->exceptions[\$i] = \$e;
                        }
                    }
                }
            }

            if ('' !== curl_error(\$ch) || CURLE_OK !== curl_errno(\$ch)) {
                \$this->exceptions[(int) \$ch] = new TransportException(curl_error(\$ch), curl_getinfo(\$ch, CURLINFO_HTTP_CODE) ?: 0);
            }
            if (isset(\$this->exceptions[(int) \$ch])) {
                throw \$this->exceptions[(int) \$ch];
            }
        } finally {
            if (\$file && !isset(\$this->exceptions[(int) \$ch])) {
                \$fd = fopen(\$file, 'rb');
            }
            unset(\$this->jobs[(int) \$ch], \$this->exceptions[(int) \$ch]);
            curl_multi_remove_handle(\$this->multiHandle, \$ch);
            curl_close(\$ch);

            rewind(\$hd);
            \$headers = explode(\"\\r\\n\", rtrim(stream_get_contents(\$hd)));
            fclose(\$hd);

            rewind(\$fd);
            \$contents = stream_get_contents(\$fd);
            fclose(\$fd);
        }

        return [\$headers, \$contents];
    }

    private function onProgress(\$ch, callable \$notify, array \$progress, array \$previousProgress)
    {
        if (300 <= \$progress['http_code'] && \$progress['http_code'] < 400) {
            return;
        }

        if (!\$previousProgress['http_code'] && \$progress['http_code'] && \$progress['http_code'] < 200 || 400 <= \$progress['http_code']) {
            \$code = 403 === \$progress['http_code'] ? STREAM_NOTIFY_AUTH_RESULT : STREAM_NOTIFY_FAILURE;
            \$notify(\$code, STREAM_NOTIFY_SEVERITY_ERR, curl_error(\$ch), \$progress['http_code'], 0, 0, false);
        }

        if (\$previousProgress['download_content_length'] < \$progress['download_content_length']) {
            \$notify(STREAM_NOTIFY_FILE_SIZE_IS, STREAM_NOTIFY_SEVERITY_INFO, '', 0, 0, (int) \$progress['download_content_length'], false);
        }

        if (\$previousProgress['size_download'] < \$progress['size_download']) {
            \$notify(STREAM_NOTIFY_PROGRESS, STREAM_NOTIFY_SEVERITY_INFO, '', 0, (int) \$progress['size_download'], (int) \$progress['download_content_length'], false);
        }
    }
}
", "vendor/symfony/flex/src/CurlDownloader.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/CurlDownloader.php");
    }
}
