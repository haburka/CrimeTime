<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_30ac2f3317caef5dcc5aa5d8c5013a65571bc6bdb7449b7da8f46cfdd61beb14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd22166db3edc830e037329dfc84180180d063a85a3ff6de9da3f2d13a94ba6 = $this->env->getExtension("native_profiler");
        $__internal_9dd22166db3edc830e037329dfc84180180d063a85a3ff6de9da3f2d13a94ba6->enter($__internal_9dd22166db3edc830e037329dfc84180180d063a85a3ff6de9da3f2d13a94ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd22166db3edc830e037329dfc84180180d063a85a3ff6de9da3f2d13a94ba6->leave($__internal_9dd22166db3edc830e037329dfc84180180d063a85a3ff6de9da3f2d13a94ba6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41b0becd3349862c1716de319184a8c86d7dc3e988c60d857aff740142851ca1 = $this->env->getExtension("native_profiler");
        $__internal_41b0becd3349862c1716de319184a8c86d7dc3e988c60d857aff740142851ca1->enter($__internal_41b0becd3349862c1716de319184a8c86d7dc3e988c60d857aff740142851ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41b0becd3349862c1716de319184a8c86d7dc3e988c60d857aff740142851ca1->leave($__internal_41b0becd3349862c1716de319184a8c86d7dc3e988c60d857aff740142851ca1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3874d13e7dbd68eb09dc101e9bffa5a90346fc86e1662f398a356680a42c76e = $this->env->getExtension("native_profiler");
        $__internal_c3874d13e7dbd68eb09dc101e9bffa5a90346fc86e1662f398a356680a42c76e->enter($__internal_c3874d13e7dbd68eb09dc101e9bffa5a90346fc86e1662f398a356680a42c76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3874d13e7dbd68eb09dc101e9bffa5a90346fc86e1662f398a356680a42c76e->leave($__internal_c3874d13e7dbd68eb09dc101e9bffa5a90346fc86e1662f398a356680a42c76e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d40679b619ea1c5b4478b7c69614157c372e55fc47d1c7a1ea2acb16ca0c96b = $this->env->getExtension("native_profiler");
        $__internal_4d40679b619ea1c5b4478b7c69614157c372e55fc47d1c7a1ea2acb16ca0c96b->enter($__internal_4d40679b619ea1c5b4478b7c69614157c372e55fc47d1c7a1ea2acb16ca0c96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4d40679b619ea1c5b4478b7c69614157c372e55fc47d1c7a1ea2acb16ca0c96b->leave($__internal_4d40679b619ea1c5b4478b7c69614157c372e55fc47d1c7a1ea2acb16ca0c96b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
