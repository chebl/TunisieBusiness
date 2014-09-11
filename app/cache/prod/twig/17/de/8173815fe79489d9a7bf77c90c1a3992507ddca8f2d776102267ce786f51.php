<?php

/* BusinessAnnuaireBundle:Profil:editannonce.html.twig */
class __TwigTemplate_17de8173815fe79489d9a7bf77c90c1a3992507ddca8f2d776102267ce786f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BusinessAnnuaireBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_login($context, array $blocks = array())
    {
        // line 7
        echo "
 ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "
<div id=\"loginContainer\">
\t\t        <a href=\"#\" id=\"loginButton\" title=\"cr&eacute;r une compte tunisie business\"><span style=\"min-width: 80px;\">
       ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nom"), "html", null, true);
            echo " </span><em></em></a>
        <div style=\"clear:both\"></div>
        <div id=\"loginBox\">           
            
   <ul id=\"loginForm\">
<fieldset id=\"body\">
<li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
<a title=\"mon espace pro tunisie business\" href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("annuaire_mescoordonness");
            echo "\">Mon Compte</a>
</li>
<li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
<a title=\"Ajouter une annonce | TunisieBusiness\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
            echo "\">Ajouter annonce</a>
</li>
<li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
<a title=\"Mes messages reçus | TunisieBusiness\" href=\"mes-messages-recu.html\">Message récu</a>
</li>
<li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
<a title=\"Déconnexion | TunisieBusiness\" href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
</li>
</fieldset>
</ul>
        </div>
</div>


";
        } else {
            // line 37
            echo " <div id=\"loginContainer\">
\t\t        <a href=\"#\" id=\"loginButton\" title=\"cr&eacute;r une compte tunisie business\"><span style=\"min-width: 80px;\">
        Connexion</span><em></em></a>
        <div style=\"clear:both\"></div>
        <div id=\"loginBox\">           
            <form id=\"loginForm\"  action=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
\t      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    <fieldset id=\"body\">
                        <fieldset>
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"_username\" id=\"email\" class=\"validate[required,custom[email]]\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\"/>
                        </fieldset>
                        <fieldset>
                            <label for=\"password\">Mot de Passe</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"validate[required]\"/>
                        </fieldset>
                        <fieldset>
                                                </fieldset> 
                        <input type=\"submit\" name=\"login\" id=\"login\" value=\"Connexion\" />
                    </fieldset>
                    <span><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("annuaire_registerpage");
            echo "\" title=\"\">Cr&eacute;er un compte</a></span><span><a href=\"#\" title=\"R&eacute;cuperer mon mot de passe | TunisieBusiness\">Mot de passe oubli&eacute; ?</a></span>
                </form>\t<!--Formulaire inscription-->
        \t</div>
</div>
";
        }
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        // line 68
        echo "
<div class=\"grid_1\"> 
<div class=\"box-stand\">
<h4>Modifier une annonce</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png); border-bottom:solid 1px #000;\">
    <td>Veuillez bien remplire le formulaire ci-dessus :</td>
  </tr>
</table>
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_editannonce", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<fieldset>
<br>
<label><span>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label');
        echo "</span>
";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "titreann", "name" => "titreann")));
        echo " 
</label>
<label><span>Catégorie :</span>
<select name=\"categann\" id=\"categannonce\" class=\"validate[required]\" onchange=\"return remplirsouscategorie(document.getElementById('categannonce').value,\$('#souscategoriesann'));\" >
\t<option value=\"\" >-----Choix-----</option>
        ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 88
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "nom"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "       

</select>
</label>
<div id=\"souscategoriesann\"></div>

<label><span>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureevalidite"), 'label');
        echo "</span>
   ";
        // line 98
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureevalidite"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "duree", "size" => "1", "name" => "duree")));
        echo " 
</label>
<label><span>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix"), 'label');
        echo "</span>
";
        // line 102
        echo "       ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix"), 'widget', array("attr" => array("id" => "prix", "name" => "prix")));
        echo " 
</label>
<label><span>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu"), 'label');
        echo "</span>
    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu"), 'widget', array("attr" => array("id" => "lieu", "name" => "lieu", "class" => "validate[required]", "size" => "1")));
        echo " 
         

</label>
<label><span>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
        echo "</span>
\t\t<table id='myTable'><tbody><tr id=\"fileRow_0\">
\t\t\t\t\t<!--<td>File 1</td>-->
\t\t\t\t\t<td>
                                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("id" => "file_0", "name" => "upFile[]")));
        echo " 
                                        </td>
\t\t\t\t\t
\t\t\t\t </tr></tbody></table></label>
<label><span>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "</span>
";
        // line 119
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("id" => "des", "name" => "des", "class" => "validate[required,length[10,800]]")));
        echo " 
</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"D&eacute;poser\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
<div class=\"clear\"></div>
</fieldset>
        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
</div> <!--Ajouter une annonce-->
<div class=\"clear\"></div>
<div class=\"clear\"></div><div class=\"clear\"></div>
</div> <!--End include left-->";
        // line 130
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 131
        echo "<div class=\"grid_2\">

<!--Pub right Annonceurs-->
<div class=\"box-stand\">
<div class=\"clear\"></div>
</div> <!--Annonceurs-->

</div> <!--FB like blocs-->

</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">



<div class=\"clear\"></div>
</div>



";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:editannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 131,  253 => 130,  245 => 124,  236 => 119,  232 => 117,  225 => 113,  218 => 109,  211 => 105,  207 => 104,  201 => 102,  197 => 100,  191 => 98,  187 => 96,  179 => 90,  168 => 88,  164 => 87,  156 => 82,  152 => 80,  144 => 77,  133 => 68,  130 => 67,  120 => 57,  107 => 47,  100 => 43,  96 => 42,  89 => 37,  77 => 28,  68 => 22,  62 => 19,  52 => 12,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  33 => 3,  30 => 2,);
    }
}
