<?php

/* base.html.twig */
class __TwigTemplate_a95136920fe4109e138fbf00d5134e80303b1c1cbd753cbeb8069e8f287d0325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a261dc4e341bbef76156bea9925bc9ca6ea72853d0eec9fca86760865c12b611 = $this->env->getExtension("native_profiler");
        $__internal_a261dc4e341bbef76156bea9925bc9ca6ea72853d0eec9fca86760865c12b611->enter($__internal_a261dc4e341bbef76156bea9925bc9ca6ea72853d0eec9fca86760865c12b611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a261dc4e341bbef76156bea9925bc9ca6ea72853d0eec9fca86760865c12b611->leave($__internal_a261dc4e341bbef76156bea9925bc9ca6ea72853d0eec9fca86760865c12b611_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bea2c205dc19ea86076ecb3463b5893dda86062c686f1b6cac3e07a452c02df = $this->env->getExtension("native_profiler");
        $__internal_5bea2c205dc19ea86076ecb3463b5893dda86062c686f1b6cac3e07a452c02df->enter($__internal_5bea2c205dc19ea86076ecb3463b5893dda86062c686f1b6cac3e07a452c02df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5bea2c205dc19ea86076ecb3463b5893dda86062c686f1b6cac3e07a452c02df->leave($__internal_5bea2c205dc19ea86076ecb3463b5893dda86062c686f1b6cac3e07a452c02df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94b14bba1db19f631bf2bde7998b5e920b5e8588ffb2b0b0a706abd7aa6c7364 = $this->env->getExtension("native_profiler");
        $__internal_94b14bba1db19f631bf2bde7998b5e920b5e8588ffb2b0b0a706abd7aa6c7364->enter($__internal_94b14bba1db19f631bf2bde7998b5e920b5e8588ffb2b0b0a706abd7aa6c7364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94b14bba1db19f631bf2bde7998b5e920b5e8588ffb2b0b0a706abd7aa6c7364->leave($__internal_94b14bba1db19f631bf2bde7998b5e920b5e8588ffb2b0b0a706abd7aa6c7364_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_94603109b0dd27ebf3f66c617848094fb84651ee99addc4a2f741298e7f78557 = $this->env->getExtension("native_profiler");
        $__internal_94603109b0dd27ebf3f66c617848094fb84651ee99addc4a2f741298e7f78557->enter($__internal_94603109b0dd27ebf3f66c617848094fb84651ee99addc4a2f741298e7f78557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94603109b0dd27ebf3f66c617848094fb84651ee99addc4a2f741298e7f78557->leave($__internal_94603109b0dd27ebf3f66c617848094fb84651ee99addc4a2f741298e7f78557_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_760f7bd47d3002b9643467a31ee77e75fc351c5083d1c96e6662db133d5898e2 = $this->env->getExtension("native_profiler");
        $__internal_760f7bd47d3002b9643467a31ee77e75fc351c5083d1c96e6662db133d5898e2->enter($__internal_760f7bd47d3002b9643467a31ee77e75fc351c5083d1c96e6662db133d5898e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_760f7bd47d3002b9643467a31ee77e75fc351c5083d1c96e6662db133d5898e2->leave($__internal_760f7bd47d3002b9643467a31ee77e75fc351c5083d1c96e6662db133d5898e2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
