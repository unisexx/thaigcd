<a href="home"><div id="url" class="TxtWhite">http://thaigcd.ddc.moph.go.th</div></a>
<div id="logo"><h3><span></span> Txt Logo</h3></div>
<div id="search">

<form method="get" action="home/search" target="_top">

<input type="hidden" name="domains" value="http://thaigcd.ddc.moph.go.th"></input>
<input type="text" name="q" class="textbox" value="" id="sbi"></input>
<input type="submit" name="sa" value="search" id="sbb" class="btn_search">
</input>
<div style="padding-top:5px;">
	<a href="home/sitemap" class="sitemap">Site map</a>
  <input type="radio" name="sitesearch" value="" id="ss0"></input>
  <label for="ss0" title="Search the Web" class="f11 txtGray"><?php echo lang('other_sites')?></label>
 
  <input type="radio" name="sitesearch" value="http://thaigcd.ddc.moph.go.th" checked id="ss1"></input>
  <label for="ss1" title="Search ThaiGCD" class="f11 txtGray">ThaiGCD</label>
  
  </div>

<input type="hidden" name="client" value="pub-6956175194622836"></input>
<input type="hidden" name="forid" value="1"></input>
<input type="hidden" name="ie" value="UTF-8"></input>
<input type="hidden" name="oe" value="UTF-8"></input>
<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:333333;GFNT:0000FF;GIMP:0000FF;FORID:11"></input>
<input type="hidden" name="hl" value="en"></input>
</form>

<br />
<div id="advs"><!--<a href="av_search.php" class="TxtGray2 f10 link_advs">advanced search</a>--></div>
</div>

<div id="flag"><a href="home/lang/th" class="thai">Thai Flag</a><a href="home/lang/en" class="eng">Eng Flag</a></div>

<?php if(@$this->session->userdata('lang') == "th"):?>
<div id="menu">
	<ul>
		<li><a href="home"><?php echo lang('home')?></a></li>
		<li><a href="pages/aboutus"><?php echo lang('about')?></a></li>
		<li><a href="executives"><?php echo lang('executives')?></a></li>
		<li><a href="groups"><?php echo lang('structures')?></a></li>
		<!-- <li><a href="webboards"><?php echo lang('webboard')?></a></li> -->
		<li><a href="pages/contactus"><?php echo lang('contact')?></a></li>
		<div class="clear"></div>
	</ul>
</div>
<?php else:?>
<div id="menu" style="left: 205px;">
	<ul style="width: 770px;">
		<li><a href="home"><?php echo lang('home')?></a></li>
		<li><a href="pages/aboutus"><?php echo lang('about')?></a></li>
		<li><a href="executives"><?php echo lang('executives')?></a></li>
		<li><a href="groups"><?php echo lang('structures')?></a></li>
		<!-- <li><a href="webboards"><?php echo lang('webboard')?></a></li> -->
		<li><a href="pages/contactus"><?php echo lang('contact')?></a></li>
		<div class="clear"></div>
	</ul>
</div>
<?php endif;?>
