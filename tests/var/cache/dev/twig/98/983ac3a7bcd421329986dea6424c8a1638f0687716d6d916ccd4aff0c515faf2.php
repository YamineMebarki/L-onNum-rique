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

/* vendor/ocramius/proxy-manager/doc-template/css/highlight.dark.css */
class __TwigTemplate_9ce226a68cf2dd54bdeda1ae8a6691aff8a0a71d709df3d79c9f357584257003 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/doc-template/css/highlight.dark.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/doc-template/css/highlight.dark.css"));

        // line 1
        echo "﻿/*
\tCopyright (c) 2006, Ivan Sagalaev
\tAll rights reserved.
\tRedistribution and use in source and binary forms, with or without
\tmodification, are permitted provided that the following conditions are met:

\t    * Redistributions of source code must retain the above copyright
\t      notice, this list of conditions and the following disclaimer.
\t    * Redistributions in binary form must reproduce the above copyright
\t      notice, this list of conditions and the following disclaimer in the
\t      documentation and/or other materials provided with the distribution.
\t    * Neither the name of highlight.js nor the names of its contributors 
\t      may be used to endorse or promote products derived from this software 
\t      without specific prior written permission.

\tTHIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS ``AS IS'' AND ANY
\tEXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
\tWARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
\tDISCLAIMED. IN NO EVENT SHALL THE REGENTS AND CONTRIBUTORS BE LIABLE FOR ANY
\tDIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
\t(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
\tLOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
\tON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
\t(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
\tSOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

.hljs {
  display: block;
  overflow-x: auto;
  padding: 0.5em;
  background: #444;
  -webkit-text-size-adjust: none;
}

.hljs-keyword,
.hljs-literal,
.hljs-change,
.hljs-winutils,
.hljs-flow,
.nginx .hljs-title,
.tex .hljs-special {
  color: white;
}

.hljs,
.hljs-subst {
  color: #ddd;
}

.hljs-string,
.hljs-title,
.hljs-type,
.ini .hljs-title,
.hljs-tag .hljs-value,
.css .hljs-rules .hljs-value,
.hljs-preprocessor,
.hljs-pragma,
.ruby .hljs-symbol,
.ruby .hljs-symbol .hljs-string,
.ruby .hljs-class .hljs-parent,
.hljs-built_in,
.django .hljs-template_tag,
.django .hljs-variable,
.smalltalk .hljs-class,
.hljs-javadoc,
.ruby .hljs-string,
.django .hljs-filter .hljs-argument,
.smalltalk .hljs-localvars,
.smalltalk .hljs-array,
.hljs-attr_selector,
.hljs-pseudo,
.hljs-addition,
.hljs-stream,
.hljs-envvar,
.apache .hljs-tag,
.apache .hljs-cbracket,
.tex .hljs-command,
.hljs-prompt,
.coffeescript .hljs-attribute {
  color: #d88;
}

.hljs-comment,
.hljs-annotation,
.hljs-decorator,
.hljs-pi,
.hljs-doctype,
.hljs-deletion,
.hljs-shebang,
.apache .hljs-sqbracket,
.tex .hljs-formula {
  color: #777;
}

.hljs-keyword,
.hljs-literal,
.hljs-title,
.css .hljs-id,
.hljs-phpdoc,
.hljs-dartdoc,
.hljs-type,
.vbscript .hljs-built_in,
.rsl .hljs-built_in,
.smalltalk .hljs-class,
.diff .hljs-header,
.hljs-chunk,
.hljs-winutils,
.bash .hljs-variable,
.apache .hljs-tag,
.tex .hljs-special,
.hljs-request,
.hljs-status {
  font-weight: bold;
}

.coffeescript .javascript,
.javascript .xml,
.tex .hljs-formula,
.xml .javascript,
.xml .vbscript,
.xml .css,
.xml .hljs-cdata {
  opacity: 0.5;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/doc-template/css/highlight.dark.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿/*
\tCopyright (c) 2006, Ivan Sagalaev
\tAll rights reserved.
\tRedistribution and use in source and binary forms, with or without
\tmodification, are permitted provided that the following conditions are met:

\t    * Redistributions of source code must retain the above copyright
\t      notice, this list of conditions and the following disclaimer.
\t    * Redistributions in binary form must reproduce the above copyright
\t      notice, this list of conditions and the following disclaimer in the
\t      documentation and/or other materials provided with the distribution.
\t    * Neither the name of highlight.js nor the names of its contributors 
\t      may be used to endorse or promote products derived from this software 
\t      without specific prior written permission.

\tTHIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS ``AS IS'' AND ANY
\tEXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
\tWARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
\tDISCLAIMED. IN NO EVENT SHALL THE REGENTS AND CONTRIBUTORS BE LIABLE FOR ANY
\tDIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
\t(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
\tLOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
\tON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
\t(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
\tSOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

.hljs {
  display: block;
  overflow-x: auto;
  padding: 0.5em;
  background: #444;
  -webkit-text-size-adjust: none;
}

.hljs-keyword,
.hljs-literal,
.hljs-change,
.hljs-winutils,
.hljs-flow,
.nginx .hljs-title,
.tex .hljs-special {
  color: white;
}

.hljs,
.hljs-subst {
  color: #ddd;
}

.hljs-string,
.hljs-title,
.hljs-type,
.ini .hljs-title,
.hljs-tag .hljs-value,
.css .hljs-rules .hljs-value,
.hljs-preprocessor,
.hljs-pragma,
.ruby .hljs-symbol,
.ruby .hljs-symbol .hljs-string,
.ruby .hljs-class .hljs-parent,
.hljs-built_in,
.django .hljs-template_tag,
.django .hljs-variable,
.smalltalk .hljs-class,
.hljs-javadoc,
.ruby .hljs-string,
.django .hljs-filter .hljs-argument,
.smalltalk .hljs-localvars,
.smalltalk .hljs-array,
.hljs-attr_selector,
.hljs-pseudo,
.hljs-addition,
.hljs-stream,
.hljs-envvar,
.apache .hljs-tag,
.apache .hljs-cbracket,
.tex .hljs-command,
.hljs-prompt,
.coffeescript .hljs-attribute {
  color: #d88;
}

.hljs-comment,
.hljs-annotation,
.hljs-decorator,
.hljs-pi,
.hljs-doctype,
.hljs-deletion,
.hljs-shebang,
.apache .hljs-sqbracket,
.tex .hljs-formula {
  color: #777;
}

.hljs-keyword,
.hljs-literal,
.hljs-title,
.css .hljs-id,
.hljs-phpdoc,
.hljs-dartdoc,
.hljs-type,
.vbscript .hljs-built_in,
.rsl .hljs-built_in,
.smalltalk .hljs-class,
.diff .hljs-header,
.hljs-chunk,
.hljs-winutils,
.bash .hljs-variable,
.apache .hljs-tag,
.tex .hljs-special,
.hljs-request,
.hljs-status {
  font-weight: bold;
}

.coffeescript .javascript,
.javascript .xml,
.tex .hljs-formula,
.xml .javascript,
.xml .vbscript,
.xml .css,
.xml .hljs-cdata {
  opacity: 0.5;
}
", "vendor/ocramius/proxy-manager/doc-template/css/highlight.dark.css", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/doc-template/css/highlight.dark.css");
    }
}
