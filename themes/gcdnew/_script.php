<link rel="stylesheet" type="text/css" href="media/css/btn.css"/>

<link rel="stylesheet" type="text/css" href="themes/gcdnew/css/template.css"/>
<link rel="stylesheet" href="media/css/icons.css" type="text/css" media="screen" charset="utf-8" />
<link type="text/css" href="themes/gcdnew/css/ui-lightness/jquery.ui.all.css" rel="stylesheet" />
<link type="text/css" href="themes/gcdnew/css/ui-lightness/jquery.ui.tabs.css" rel="stylesheet" />
<link type="text/css" href="media/css/pagination.css" rel="stylesheet" />
<link href='media/js/star/jquery.rating.css' type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="themes/gcdnew/js/SWFSupport.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/jquery.min.js" ></script>
<script type="text/javascript" src="themes/gcdnew/js/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/easySlider1.5.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/jquery.marquee.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/jquery.slideheader.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/jquery.tooltip.v.1.1.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/jquery.faq.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="themes/gcdnew/css/jScrollPane.css" />
<link rel="stylesheet" type="text/css" media="all" href="themes/gcdnew/css/colorbox.css" />
<script type="text/javascript" src="themes/gcdnew/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="themes/gcdnew/js/jScrollPane.js"></script>
<script src='media/js/star/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
<script src='media/js/star/jquery.rating.js' type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="media/js/cufon/cufon-yui.js"></script>
<script type="text/javascript" src="media/js/cufon/PSLxThaiCommon.font.js"></script>
<script type="text/javascript" src="media/js/jquery.reject.js"></script>
<script type="text/javascript" src="media/js/highchart/highcharts.js"></script>
<script type="text/javascript" src="media/js/highchart/modules/exporting.js"></script>
<script type="text/javascript">
	$(function(){		
		$(".corner").append('<div class="tl"></div><div class="tr"></div><div class="bl"></div><div class="br"></div><div class="shadow"></div>');
		//$(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' ,changeMonth: true,changeYear: true, yearRange: '1940:<?php echo date('Y') ?>'});

	


	var dateBefore=null;
	$(".datepicker").datepicker({
		dateFormat: 'dd/mm/yy',
		yearRange: '1940:<?php echo date('Y') ?>',
		dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'], 
		monthNamesShort: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
		changeMonth: true,
		changeYear: true ,
		beforeShow:function(){
			if($(this).val()!=""){
				var arrayDate=$(this).val().split("/");		
				arrayDate[2]=parseInt(arrayDate[2])-543;
				$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
			}
			setTimeout(function(){
				$.each($(".ui-datepicker-year option"),function(j,k){
					var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
					$(".ui-datepicker-year option").eq(j).text(textYear);
				});				
			},50);

		},
		onChangeMonthYear: function(){
			setTimeout(function(){
				$.each($(".ui-datepicker-year option"),function(j,k){
					var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
					$(".ui-datepicker-year option").eq(j).text(textYear);
				});
			},50);
		},
		onClose:function(){
			if($(this).val()!="" && $(this).val()==dateBefore){			
				var arrayDate=dateBefore.split("/");
				arrayDate[2]=parseInt(arrayDate[2])+543;
				$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);	
			}		
		},
		onSelect: function(dateText, inst){ 
			dateBefore=$(this).val();
			var arrayDate=dateText.split("/");
			arrayDate[2]=parseInt(arrayDate[2])+543;
			$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
		}

	});
		$("#tabs,#tabs2").tabs();
		$('#pane3').jScrollPane();
		$('#pane4').jScrollPane({scrollbarOnLeft:true});
		// $("#slider").easySlider();
		setInterval( "slideSwitch()", 4000 );
		$(".imgtooltip").simpletooltip()
		SSS_faq.init();
		$.post("dashboards/inc_index",function(data){
			$("#pageview img").remove();
			$("#pageview").append(data);
		})
			Cufon.replace('#menu li a,.cufon', { hover: true });
			
			$('#menu li').hover(function(){
				$(this).stop().animate({
					borderColor:'#5DD2FD',
					lineHeight:'46px'
				})
			},function(data){
				$(this).stop().animate({
					borderColor:'#004566',
					lineHeight:'36px'
				})
			})
		$('a[rel=external]').click(function(){
  			this.target = "_blank";
		});

});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16496558-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


