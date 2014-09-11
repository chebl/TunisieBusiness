<?php

/* BusinessAnnuaireBundle:Profil:coordonnesociete.html.twig */
class __TwigTemplate_a3e38df46dc5cba610c0df68227cd5ab1a4174119358d348b113c7ae648db18c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
        echo "<!--Form Validator-->

";
        // line 5
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "


";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"grid_1\"> 

<div class=\"box-stand\">
<h4>Connexion</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td>&nbsp;</td>
  </tr>
</table>
<div style=\" margin-top: 10px; \">
<p style=\"text-align:justify; color:#000;\">
Vous désirez déposée une annonce gratuitement, rien de plus facile ! Vous devez évidement  être 
inscrit, si ce n’est pas le cas complétez les champs ci-dessous « Créer mon compte ».</p>
<p style=\"text-align:justify; color:#000;margin-top: 10px;\">Si vous êtes déjà inscrit, connectez vous à votre compte et choisissez la rubrique dans laquelle vous 
désirez poster une annonce, remplissez ensuite tous les champs de votre annonce et cliquez sur poster. 
Votre annonce sera envoyée à notre service modération pour validation et sera publiée prochainement. 
</p>
</div>
<div class=\"wrap \" style=\" box-shadow: 2px 2px 10px #888888; margin-top:20px;\">
<form method=\"post\" id=\"rech_form\">
<table style=\"width:100%; height:164px;\" class=\"tabinsc\">
  <tr>
    <td colspan=\"2\"><span style=\"color:#8c0101; text-transform:uppercase;font-weight: bold;font-size: 14px;\">Pour Poster une annonce, connectez vous :</span></td>
    </tr>
  <tr>
    <td>E-mail :</td>
    <td><input class=\"validate[required,custom[email]]\" name=\"email\" id=\"email\" type=\"text\" value=\"\"/></td>
  </tr>
  <tr>
    <td>Mot de passe</td>
    <td><input class=\"validate[required]\" name=\"password\" id=\"password\" type=\"password\"/></td>
  </tr>
  <tr>
    <td></td>
    <td><input name=\"signup\" type=\"submit\" value=\"Connexion\" class=\"button_rech\" style=\" float: left; \" /><p style=\" margin: 8px 8px; \"><a href=\"mot-de-passe-oublie.html\">Mot de passe oublier ?</a></p></td>
  </tr>
</table>
     </form>   
</div>
<div class=\"clear\"></div>
</div>

    <div class=\"box-stand\">
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("annuaire_editpage");
        echo "\" style=\"box-shadow: 2px 2px 10px #888888;\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">


<span style=\"color:#8c0101; text-transform:uppercase;font-weight: bold;font-size: 14px;\">Pas encore inscrit ?</span>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td>Inscrivez-vous, confirmer votre inscription et profiter de nos services</td>
  </tr>
</table>
<fieldset>
<br>
<label><span style=\" float: left; \">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsociete"), 'label');
        echo "</span>
";
        // line 67
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsociete"), 'widget', array("attr" => array("class" => "validate[required]", "style" => "margin-left: 173px;", "id" => "nom")));
        echo "  
</label>
<br>
<label><span style=\" float: left; \">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</span>
";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "validate[required,custom[email]]", "style" => "margin-left: 164px;", "id" => "email", "name" => "email")));
        echo " 

</label>
<br>
<label><span style=\" float: left; \">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label');
        echo "</span>
";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "validate[required,length[6,25]]", "style" => "margin-left: 115px;", "id" => "passwor")));
        echo " 

    </label>
<br>
<label><span style=\" float: left; \">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label');
        echo "</span>
";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "validate[required,confirm[passwor],length[6,25]]", "style" => "margin-left: 22px;", "id" => "confirmpassword")));
        echo " 
        
</label>

<br>
<label><span style=\" float: left; \">Recopier le code de sécurité :</span>
<input class=\"validate[required]\" name=\"in_code\" type=\"text\" id=\"in_code\" size=\"12\" style=\" width: 128px; margin-left: 14px; \"> &nbsp;
    \t<img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/captcha/captcha_code_file7052.jpg?rand=2079080691"), "html", null, true);
        echo "\" id='captchaimg' />
</label>
<br>
<label>
<input name=\"certifier\" id=\"certifier\" type=\"checkbox\" class=\"validate[required]\" style=\"float: left;\"/><p style=\" margin-left: 22px; color: black; \">Je certifie que les donn&eacute;es ci-dessus sont exactess et r&eacute;elles</p>
</label>
<div class=\"clear\"></div>
</fieldset>



<h4>Mes coordonnées</h4>

<fieldset>
<br>
<label><span>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'label');
        echo "</span>
";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "adresee", "name" => "adresse")));
        echo " 

</label>
<br>
<label><span>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal"), 'label');
        echo "</span>
";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal"), 'widget', array("attr" => array("id" => "codp", "name" => "codp")));
        echo " 

</label>
<br>
<label><span>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label');
        echo "</span>
";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget', array("attr" => array("id" => "ville", "name" => "ville", "class" => "validate[required]")));
        echo " 

</label>
<br>
<label><span>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label');
        echo "</span>
";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget', array("attr" => array("id" => "tel", "name" => "tel")));
        echo " 

</label>
<br>
<label><span>Domaine société :</span>

<select name=\"domainetab\" id=\"domainesoc\" class=\"validate[required]\" onchange=\"return remplirspecialite(document.getElementById('domainesoc').value,\$('#speccat'));\">
        <option value=\"nothing\">--Choisir un domaine--</option>
    ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domaines"]) ? $context["domaines"] : $this->getContext($context, "domaines")));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 135
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "nom"), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
    </select>
</label>
<div id=\"speccat\">
</div>
<br>
<label><span>";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
        echo "</span>
";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("id" => "logo")));
        echo " 

</label>
<br>
<label><span>";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "</span>
";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("id" => "des", "name" => "des")));
        echo " 

</label>
<br>
<div class=\"btns\"><input name=\"modifcorsoc\" id=\"submit\" type=\"submit\" value=\"Inscrire\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
<div class=\"clear\"></div>
</fieldset>
";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

</form>
</div>

</div> <!--End include left-->

";
        // line 163
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 164
        echo "
<!--include right-->
<div class=\"grid_2\">

<!--Pub right Annonceurs-->
<div class=\"box-stand\">
<div class=\"clear\"></div>
</div> <!--Annonceurs-->

<div class=\"box-pub\">
\t\t\t\t<!-- Start photoslider-mini -->
\t\t\t";
        // line 197
        echo "
\t\t\t\t<!-- // end of photoslider-mini -->
\t<div class=\"clear\"></div>
</div> <!--Bloc pub Carée-->
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
        return "BusinessAnnuaireBundle:Profil:coordonnesociete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 197,  281 => 164,  279 => 163,  269 => 156,  259 => 149,  255 => 148,  248 => 144,  244 => 143,  236 => 137,  225 => 135,  221 => 134,  210 => 126,  206 => 124,  199 => 120,  195 => 118,  188 => 114,  184 => 112,  177 => 108,  173 => 106,  155 => 91,  145 => 84,  141 => 82,  134 => 78,  130 => 76,  123 => 72,  119 => 70,  112 => 67,  108 => 65,  92 => 54,  47 => 11,  44 => 10,  36 => 5,  32 => 3,  29 => 2,);
    }
}
