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
        $__internal_1d865c8b75dec78a82d73e0de6050d214956cf33f67a3a307d4843e75d5b6866 = $this->env->getExtension("native_profiler");
        $__internal_1d865c8b75dec78a82d73e0de6050d214956cf33f67a3a307d4843e75d5b6866->enter($__internal_1d865c8b75dec78a82d73e0de6050d214956cf33f67a3a307d4843e75d5b6866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d865c8b75dec78a82d73e0de6050d214956cf33f67a3a307d4843e75d5b6866->leave($__internal_1d865c8b75dec78a82d73e0de6050d214956cf33f67a3a307d4843e75d5b6866_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8274932c755497428b57c3a3812cb6838a38a92bdc2a86284a3e9fbfbdf6a076 = $this->env->getExtension("native_profiler");
        $__internal_8274932c755497428b57c3a3812cb6838a38a92bdc2a86284a3e9fbfbdf6a076->enter($__internal_8274932c755497428b57c3a3812cb6838a38a92bdc2a86284a3e9fbfbdf6a076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8274932c755497428b57c3a3812cb6838a38a92bdc2a86284a3e9fbfbdf6a076->leave($__internal_8274932c755497428b57c3a3812cb6838a38a92bdc2a86284a3e9fbfbdf6a076_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4b252198bf056def14812b28e1bdab36007c0af66c8fc4fbc4a13bb328b641d = $this->env->getExtension("native_profiler");
        $__internal_e4b252198bf056def14812b28e1bdab36007c0af66c8fc4fbc4a13bb328b641d->enter($__internal_e4b252198bf056def14812b28e1bdab36007c0af66c8fc4fbc4a13bb328b641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4b252198bf056def14812b28e1bdab36007c0af66c8fc4fbc4a13bb328b641d->leave($__internal_e4b252198bf056def14812b28e1bdab36007c0af66c8fc4fbc4a13bb328b641d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa6ad798461770b92713e19843a31adba6bd418ed179106cdc9600f252d3c0e5 = $this->env->getExtension("native_profiler");
        $__internal_aa6ad798461770b92713e19843a31adba6bd418ed179106cdc9600f252d3c0e5->enter($__internal_aa6ad798461770b92713e19843a31adba6bd418ed179106cdc9600f252d3c0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_aa6ad798461770b92713e19843a31adba6bd418ed179106cdc9600f252d3c0e5->leave($__internal_aa6ad798461770b92713e19843a31adba6bd418ed179106cdc9600f252d3c0e5_prof);

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
