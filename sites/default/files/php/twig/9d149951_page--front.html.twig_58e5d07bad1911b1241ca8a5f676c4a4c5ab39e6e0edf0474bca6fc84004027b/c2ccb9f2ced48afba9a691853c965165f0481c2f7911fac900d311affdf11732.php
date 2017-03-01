<?php

/* themes/custom/mybootstrap/templates/page--front.html.twig */
class __TwigTemplate_5141c115ee273dfb6b907091221509f4af042cde2b891fa67786854ace76fc7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bandeau_header' => array($this, 'block_bandeau_header'),
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'actu' => array($this, 'block_actu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cddf821e2baa832f09536d3f10c0a1bbc7973b9c0a2df2f179d55a0d2451687c = $this->env->getExtension("native_profiler");
        $__internal_cddf821e2baa832f09536d3f10c0a1bbc7973b9c0a2df2f179d55a0d2451687c->enter($__internal_cddf821e2baa832f09536d3f10c0a1bbc7973b9c0a2df2f179d55a0d2451687c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/mybootstrap/templates/page--front.html.twig"));

        $tags = array("set" => 60, "if" => 63, "block" => 64);
        $filters = array("clean_class" => 76, "t" => 88);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        echo "
";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bandeau_header", array())) {
            // line 64
            echo "  ";
            $this->displayBlock('bandeau_header', $context, $blocks);
        }
        // line 68
        echo "
";
        // line 70
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 71
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 108
        echo "
";
        // line 110
        $this->displayBlock('main', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 197
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_cddf821e2baa832f09536d3f10c0a1bbc7973b9c0a2df2f179d55a0d2451687c->leave($__internal_cddf821e2baa832f09536d3f10c0a1bbc7973b9c0a2df2f179d55a0d2451687c_prof);

    }

    // line 64
    public function block_bandeau_header($context, array $blocks = array())
    {
        $__internal_623fb9076eb8f4d5fb95144990d684e5782ae86255a2853d81d48f3be17e553b = $this->env->getExtension("native_profiler");
        $__internal_623fb9076eb8f4d5fb95144990d684e5782ae86255a2853d81d48f3be17e553b->enter($__internal_623fb9076eb8f4d5fb95144990d684e5782ae86255a2853d81d48f3be17e553b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bandeau_header"));

        // line 65
        echo "        <div class=\"bandeau_header\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bandeau_header", array()), "html", null, true));
        echo "</div>
  ";
        
        $__internal_623fb9076eb8f4d5fb95144990d684e5782ae86255a2853d81d48f3be17e553b->leave($__internal_623fb9076eb8f4d5fb95144990d684e5782ae86255a2853d81d48f3be17e553b_prof);

    }

    // line 71
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_dc9d02c82032cd18f6ae39f5e9b68b0e6835164e8c1fee5ccad00d5d924560c3 = $this->env->getExtension("native_profiler");
        $__internal_dc9d02c82032cd18f6ae39f5e9b68b0e6835164e8c1fee5ccad00d5d924560c3->enter($__internal_dc9d02c82032cd18f6ae39f5e9b68b0e6835164e8c1fee5ccad00d5d924560c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 72
        echo "    ";
        // line 73
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 75
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 76
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 79
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 80
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 81
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 83
        echo "      <div class=\"navbar-header\">
        ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 86
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 87
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 94
        echo "      </div>

      ";
        // line 97
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 98
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 102
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 103
            echo "        </div>
      ";
        }
        // line 105
        echo "    </header>
  ";
        
        $__internal_dc9d02c82032cd18f6ae39f5e9b68b0e6835164e8c1fee5ccad00d5d924560c3->leave($__internal_dc9d02c82032cd18f6ae39f5e9b68b0e6835164e8c1fee5ccad00d5d924560c3_prof);

    }

    // line 110
    public function block_main($context, array $blocks = array())
    {
        $__internal_58a08e2718f821ff8ac80fe12253ec2474a8fcc723c0c8a92b0a7ecdd01479f8 = $this->env->getExtension("native_profiler");
        $__internal_58a08e2718f821ff8ac80fe12253ec2474a8fcc723c0c8a92b0a7ecdd01479f8->enter($__internal_58a08e2718f821ff8ac80fe12253ec2474a8fcc723c0c8a92b0a7ecdd01479f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 111
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 115
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 116
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 121
            echo "      ";
        }
        // line 122
        echo "
      ";
        // line 124
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 125
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 130
            echo "      ";
        }
        // line 131
        echo "
      ";
        // line 133
        echo "      ";
        // line 134
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 135
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 136
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 137
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 138
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 141
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 144
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 145
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "
        ";
        // line 151
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 152
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 159
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 166
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 169
            echo "        ";
        }
        // line 170
        echo "
        ";
        // line 172
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 176
        echo "      </section>

      ";
        // line 179
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 180
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 185
            echo "      ";
        }
        // line 186
        echo "    </div>
      ";
        // line 188
        echo "      ";
        $this->displayBlock('actu', $context, $blocks);
        // line 193
        echo "  </div>
";
        
        $__internal_58a08e2718f821ff8ac80fe12253ec2474a8fcc723c0c8a92b0a7ecdd01479f8->leave($__internal_58a08e2718f821ff8ac80fe12253ec2474a8fcc723c0c8a92b0a7ecdd01479f8_prof);

    }

    // line 116
    public function block_header($context, array $blocks = array())
    {
        $__internal_985552ac25150af510a2abfbd511519ab67ec5e35d62a850a3585d9884499409 = $this->env->getExtension("native_profiler");
        $__internal_985552ac25150af510a2abfbd511519ab67ec5e35d62a850a3585d9884499409->enter($__internal_985552ac25150af510a2abfbd511519ab67ec5e35d62a850a3585d9884499409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 117
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_985552ac25150af510a2abfbd511519ab67ec5e35d62a850a3585d9884499409->leave($__internal_985552ac25150af510a2abfbd511519ab67ec5e35d62a850a3585d9884499409_prof);

    }

    // line 125
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_b3d3e4895abe57aff674a4d8e5db18d56752224bbf153f27f2537a1421fb0fbe = $this->env->getExtension("native_profiler");
        $__internal_b3d3e4895abe57aff674a4d8e5db18d56752224bbf153f27f2537a1421fb0fbe->enter($__internal_b3d3e4895abe57aff674a4d8e5db18d56752224bbf153f27f2537a1421fb0fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 126
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 127
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_b3d3e4895abe57aff674a4d8e5db18d56752224bbf153f27f2537a1421fb0fbe->leave($__internal_b3d3e4895abe57aff674a4d8e5db18d56752224bbf153f27f2537a1421fb0fbe_prof);

    }

    // line 145
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_6fa36cafa7e599cc5fa3715e5e55ca20389e56ac2209346ff30733a04d8e8af2 = $this->env->getExtension("native_profiler");
        $__internal_6fa36cafa7e599cc5fa3715e5e55ca20389e56ac2209346ff30733a04d8e8af2->enter($__internal_6fa36cafa7e599cc5fa3715e5e55ca20389e56ac2209346ff30733a04d8e8af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 146
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_6fa36cafa7e599cc5fa3715e5e55ca20389e56ac2209346ff30733a04d8e8af2->leave($__internal_6fa36cafa7e599cc5fa3715e5e55ca20389e56ac2209346ff30733a04d8e8af2_prof);

    }

    // line 152
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dfe0711a875577302400c5331178105722f793098ab9395351a9c29c4e6a2503 = $this->env->getExtension("native_profiler");
        $__internal_dfe0711a875577302400c5331178105722f793098ab9395351a9c29c4e6a2503->enter($__internal_dfe0711a875577302400c5331178105722f793098ab9395351a9c29c4e6a2503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 153
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_dfe0711a875577302400c5331178105722f793098ab9395351a9c29c4e6a2503->leave($__internal_dfe0711a875577302400c5331178105722f793098ab9395351a9c29c4e6a2503_prof);

    }

    // line 159
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_0203b65817bdcf42f5f713e1879333d7f938ad767459dcef3cd0b18d6e598ced = $this->env->getExtension("native_profiler");
        $__internal_0203b65817bdcf42f5f713e1879333d7f938ad767459dcef3cd0b18d6e598ced->enter($__internal_0203b65817bdcf42f5f713e1879333d7f938ad767459dcef3cd0b18d6e598ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 160
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_0203b65817bdcf42f5f713e1879333d7f938ad767459dcef3cd0b18d6e598ced->leave($__internal_0203b65817bdcf42f5f713e1879333d7f938ad767459dcef3cd0b18d6e598ced_prof);

    }

    // line 166
    public function block_help($context, array $blocks = array())
    {
        $__internal_b4c3070e712c888b3c80fb4f7775fe03394fa6242c931f8e4e6e2a898ac86d57 = $this->env->getExtension("native_profiler");
        $__internal_b4c3070e712c888b3c80fb4f7775fe03394fa6242c931f8e4e6e2a898ac86d57->enter($__internal_b4c3070e712c888b3c80fb4f7775fe03394fa6242c931f8e4e6e2a898ac86d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 167
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_b4c3070e712c888b3c80fb4f7775fe03394fa6242c931f8e4e6e2a898ac86d57->leave($__internal_b4c3070e712c888b3c80fb4f7775fe03394fa6242c931f8e4e6e2a898ac86d57_prof);

    }

    // line 172
    public function block_content($context, array $blocks = array())
    {
        $__internal_b87139fe38a7ba7b88c7b9bfd7e4455c0bd7494902043fa3b2002e25e977a4d0 = $this->env->getExtension("native_profiler");
        $__internal_b87139fe38a7ba7b88c7b9bfd7e4455c0bd7494902043fa3b2002e25e977a4d0->enter($__internal_b87139fe38a7ba7b88c7b9bfd7e4455c0bd7494902043fa3b2002e25e977a4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 173
        echo "          <a id=\"main-content\"></a>
          ";
        // line 174
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_b87139fe38a7ba7b88c7b9bfd7e4455c0bd7494902043fa3b2002e25e977a4d0->leave($__internal_b87139fe38a7ba7b88c7b9bfd7e4455c0bd7494902043fa3b2002e25e977a4d0_prof);

    }

    // line 180
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_7d90b8390ed9a09675aa4978d55ee52f4157002b81cbc67817b0c0d8d572e0d8 = $this->env->getExtension("native_profiler");
        $__internal_7d90b8390ed9a09675aa4978d55ee52f4157002b81cbc67817b0c0d8d572e0d8->enter($__internal_7d90b8390ed9a09675aa4978d55ee52f4157002b81cbc67817b0c0d8d572e0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 181
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 182
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_7d90b8390ed9a09675aa4978d55ee52f4157002b81cbc67817b0c0d8d572e0d8->leave($__internal_7d90b8390ed9a09675aa4978d55ee52f4157002b81cbc67817b0c0d8d572e0d8_prof);

    }

    // line 188
    public function block_actu($context, array $blocks = array())
    {
        $__internal_83b9b1755a52d05727d3336044988f61f9c76ef41ff8b04730b0c523055bae81 = $this->env->getExtension("native_profiler");
        $__internal_83b9b1755a52d05727d3336044988f61f9c76ef41ff8b04730b0c523055bae81->enter($__internal_83b9b1755a52d05727d3336044988f61f9c76ef41ff8b04730b0c523055bae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actu"));

        // line 189
        echo "          <section>
              ";
        // line 190
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "actu", array()), "html", null, true));
        echo "
          </section>
      ";
        
        $__internal_83b9b1755a52d05727d3336044988f61f9c76ef41ff8b04730b0c523055bae81->leave($__internal_83b9b1755a52d05727d3336044988f61f9c76ef41ff8b04730b0c523055bae81_prof);

    }

    // line 197
    public function block_footer($context, array $blocks = array())
    {
        $__internal_da554acb872a18d921041373a5ae9a8c038c31ce916cde19079d1196ad934aef = $this->env->getExtension("native_profiler");
        $__internal_da554acb872a18d921041373a5ae9a8c038c31ce916cde19079d1196ad934aef->enter($__internal_da554acb872a18d921041373a5ae9a8c038c31ce916cde19079d1196ad934aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 198
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 199
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_da554acb872a18d921041373a5ae9a8c038c31ce916cde19079d1196ad934aef->leave($__internal_da554acb872a18d921041373a5ae9a8c038c31ce916cde19079d1196ad934aef_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/mybootstrap/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 199,  485 => 198,  479 => 197,  469 => 190,  466 => 189,  460 => 188,  450 => 182,  447 => 181,  441 => 180,  432 => 174,  429 => 173,  423 => 172,  413 => 167,  407 => 166,  397 => 160,  391 => 159,  381 => 153,  375 => 152,  365 => 146,  359 => 145,  349 => 127,  346 => 126,  340 => 125,  330 => 118,  327 => 117,  321 => 116,  313 => 193,  310 => 188,  307 => 186,  304 => 185,  301 => 180,  298 => 179,  294 => 176,  291 => 172,  288 => 170,  285 => 169,  282 => 166,  279 => 165,  276 => 163,  273 => 162,  270 => 159,  267 => 158,  264 => 156,  261 => 155,  258 => 152,  255 => 151,  252 => 149,  249 => 148,  246 => 145,  243 => 144,  237 => 141,  235 => 138,  234 => 137,  233 => 136,  232 => 135,  231 => 134,  229 => 133,  226 => 131,  223 => 130,  220 => 125,  217 => 124,  214 => 122,  211 => 121,  208 => 116,  205 => 115,  198 => 111,  192 => 110,  184 => 105,  180 => 103,  177 => 102,  171 => 99,  168 => 98,  165 => 97,  161 => 94,  152 => 88,  149 => 87,  146 => 86,  142 => 84,  139 => 83,  133 => 81,  131 => 80,  126 => 79,  124 => 76,  123 => 75,  122 => 73,  120 => 72,  114 => 71,  104 => 65,  98 => 64,  89 => 197,  87 => 196,  84 => 195,  82 => 110,  79 => 108,  75 => 71,  73 => 70,  70 => 68,  66 => 64,  64 => 63,  61 => 61,  59 => 60,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.bandeau_header: Items for the header region.*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* */
/* {# Bandeau header #}*/
/* {% if page.bandeau_header %}*/
/*   {% block bandeau_header %}*/
/*         <div class="bandeau_header">{{ page.bandeau_header }}</div>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         <div class="{{ container }}">*/
/*       {% endif %}*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div id="navbar-collapse" class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*       {# Actu #}*/
/*       {% block actu %}*/
/*           <section>*/
/*               {{ page.actu }}*/
/*           </section>*/
/*       {% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
