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

/* vendor/doctrine/orm/docs/en/_exts/configurationblock.py */
class __TwigTemplate_0ef448b4f500e18be5414577d875c406dd19f32a27dbf1c2fb63f22de041bdce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/_exts/configurationblock.py"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/_exts/configurationblock.py"));

        // line 1
        echo "#Copyright (c) 2010 Fabien Potencier
#
#Permission is hereby granted, free of charge, to any person obtaining a copy
#of this software and associated documentation files (the \"Software\"), to deal
#in the Software without restriction, including without limitation the rights
#to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
#copies of the Software, and to permit persons to whom the Software is furnished
#to do so, subject to the following conditions:
#
#The above copyright notice and this permission notice shall be included in all
#copies or substantial portions of the Software.
#
#THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
#IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
#FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
#AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
#LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
#OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
#THE SOFTWARE.

from docutils.parsers.rst import Directive, directives
from docutils import nodes
from string import upper

class configurationblock(nodes.General, nodes.Element):
    pass

class ConfigurationBlock(Directive):
    has_content = True
    required_arguments = 0
    optional_arguments = 0
    final_argument_whitespace = True
    option_spec = {}
    formats = {
        'html':            'HTML',
        'xml':             'XML',
        'php':             'PHP',
        'yaml':            'YAML',
        'jinja':           'Twig',
        'html+jinja':      'Twig',
        'jinja+html':      'Twig',
        'php+html':        'PHP',
        'html+php':        'PHP',
        'ini':             'INI',
        'php-annotations': 'Annotations',
    }

    def run(self):
        env = self.state.document.settings.env

        node = nodes.Element()
        node.document = self.state.document
        self.state.nested_parse(self.content, self.content_offset, node)

        entries = []
        for i, child in enumerate(node):
            if isinstance(child, nodes.literal_block):
                # add a title (the language name) before each block
                #targetid = \"configuration-block-%d\" % env.new_serialno('configuration-block')
                #targetnode = nodes.target('', '', ids=[targetid])
                #targetnode.append(child)

                innernode = nodes.emphasis(self.formats[child['language']], self.formats[child['language']])

                para = nodes.paragraph()
                para += [innernode, child]

                entry = nodes.list_item('')
                entry.append(para)
                entries.append(entry)

        resultnode = configurationblock()
        resultnode.append(nodes.bullet_list('', *entries))

        return [resultnode]

def visit_configurationblock_html(self, node):
    self.body.append(self.starttag(node, 'div', CLASS='configuration-block'))

def depart_configurationblock_html(self, node):
    self.body.append('</div>\\n')

def visit_configurationblock_latex(self, node):
    pass

def depart_configurationblock_latex(self, node):
    pass

def setup(app):
    app.add_node(configurationblock,
                 html=(visit_configurationblock_html, depart_configurationblock_html),
                 latex=(visit_configurationblock_latex, depart_configurationblock_latex))
    app.add_directive('configuration-block', ConfigurationBlock)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/_exts/configurationblock.py";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#Copyright (c) 2010 Fabien Potencier
#
#Permission is hereby granted, free of charge, to any person obtaining a copy
#of this software and associated documentation files (the \"Software\"), to deal
#in the Software without restriction, including without limitation the rights
#to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
#copies of the Software, and to permit persons to whom the Software is furnished
#to do so, subject to the following conditions:
#
#The above copyright notice and this permission notice shall be included in all
#copies or substantial portions of the Software.
#
#THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
#IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
#FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
#AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
#LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
#OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
#THE SOFTWARE.

from docutils.parsers.rst import Directive, directives
from docutils import nodes
from string import upper

class configurationblock(nodes.General, nodes.Element):
    pass

class ConfigurationBlock(Directive):
    has_content = True
    required_arguments = 0
    optional_arguments = 0
    final_argument_whitespace = True
    option_spec = {}
    formats = {
        'html':            'HTML',
        'xml':             'XML',
        'php':             'PHP',
        'yaml':            'YAML',
        'jinja':           'Twig',
        'html+jinja':      'Twig',
        'jinja+html':      'Twig',
        'php+html':        'PHP',
        'html+php':        'PHP',
        'ini':             'INI',
        'php-annotations': 'Annotations',
    }

    def run(self):
        env = self.state.document.settings.env

        node = nodes.Element()
        node.document = self.state.document
        self.state.nested_parse(self.content, self.content_offset, node)

        entries = []
        for i, child in enumerate(node):
            if isinstance(child, nodes.literal_block):
                # add a title (the language name) before each block
                #targetid = \"configuration-block-%d\" % env.new_serialno('configuration-block')
                #targetnode = nodes.target('', '', ids=[targetid])
                #targetnode.append(child)

                innernode = nodes.emphasis(self.formats[child['language']], self.formats[child['language']])

                para = nodes.paragraph()
                para += [innernode, child]

                entry = nodes.list_item('')
                entry.append(para)
                entries.append(entry)

        resultnode = configurationblock()
        resultnode.append(nodes.bullet_list('', *entries))

        return [resultnode]

def visit_configurationblock_html(self, node):
    self.body.append(self.starttag(node, 'div', CLASS='configuration-block'))

def depart_configurationblock_html(self, node):
    self.body.append('</div>\\n')

def visit_configurationblock_latex(self, node):
    pass

def depart_configurationblock_latex(self, node):
    pass

def setup(app):
    app.add_node(configurationblock,
                 html=(visit_configurationblock_html, depart_configurationblock_html),
                 latex=(visit_configurationblock_latex, depart_configurationblock_latex))
    app.add_directive('configuration-block', ConfigurationBlock)
", "vendor/doctrine/orm/docs/en/_exts/configurationblock.py", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/_exts/configurationblock.py");
    }
}
