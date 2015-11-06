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
        $__internal_45ae65e54af6ebd19e701adb7f6d86241d4d5b29126abb85d61c79f57e92ba0f = $this->env->getExtension("native_profiler");
        $__internal_45ae65e54af6ebd19e701adb7f6d86241d4d5b29126abb85d61c79f57e92ba0f->enter($__internal_45ae65e54af6ebd19e701adb7f6d86241d4d5b29126abb85d61c79f57e92ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_45ae65e54af6ebd19e701adb7f6d86241d4d5b29126abb85d61c79f57e92ba0f->leave($__internal_45ae65e54af6ebd19e701adb7f6d86241d4d5b29126abb85d61c79f57e92ba0f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_909bc716fff78f2c8ab8b4a89c0cbf27716ad5f4adef258897481bdbdc23d8b1 = $this->env->getExtension("native_profiler");
        $__internal_909bc716fff78f2c8ab8b4a89c0cbf27716ad5f4adef258897481bdbdc23d8b1->enter($__internal_909bc716fff78f2c8ab8b4a89c0cbf27716ad5f4adef258897481bdbdc23d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_909bc716fff78f2c8ab8b4a89c0cbf27716ad5f4adef258897481bdbdc23d8b1->leave($__internal_909bc716fff78f2c8ab8b4a89c0cbf27716ad5f4adef258897481bdbdc23d8b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a142e4689a87b7bfb91ba694d5549282a38305415341fe72c95fe002336e932 = $this->env->getExtension("native_profiler");
        $__internal_7a142e4689a87b7bfb91ba694d5549282a38305415341fe72c95fe002336e932->enter($__internal_7a142e4689a87b7bfb91ba694d5549282a38305415341fe72c95fe002336e932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a142e4689a87b7bfb91ba694d5549282a38305415341fe72c95fe002336e932->leave($__internal_7a142e4689a87b7bfb91ba694d5549282a38305415341fe72c95fe002336e932_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3800289a069eb5eb7daa933dbc2017907e23dc13ac609d260357598a7df62cc = $this->env->getExtension("native_profiler");
        $__internal_e3800289a069eb5eb7daa933dbc2017907e23dc13ac609d260357598a7df62cc->enter($__internal_e3800289a069eb5eb7daa933dbc2017907e23dc13ac609d260357598a7df62cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3800289a069eb5eb7daa933dbc2017907e23dc13ac609d260357598a7df62cc->leave($__internal_e3800289a069eb5eb7daa933dbc2017907e23dc13ac609d260357598a7df62cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f46ad0147d6a29549b779522c25c4360971cc7306c267714904a3fe0115d03ff = $this->env->getExtension("native_profiler");
        $__internal_f46ad0147d6a29549b779522c25c4360971cc7306c267714904a3fe0115d03ff->enter($__internal_f46ad0147d6a29549b779522c25c4360971cc7306c267714904a3fe0115d03ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f46ad0147d6a29549b779522c25c4360971cc7306c267714904a3fe0115d03ff->leave($__internal_f46ad0147d6a29549b779522c25c4360971cc7306c267714904a3fe0115d03ff_prof);

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
