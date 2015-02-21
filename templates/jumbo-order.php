<!-- <div class="container-full jumbo-order jumbo-full" data-stellar-background-ratio="0"> -->
<script language="javascript">
	var cLang = '<?php printf(ICL_LANGUAGE_CODE); ?>';
</script>

<?php
	global $woocommerce;
	$woocommerce->cart->empty_cart(); 

	// the_content();
?>

<!-- Modal size -->
<div id="helpSize" class="modal fade" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal"> ×<span class="sr-only">Close</span> </button>
<h4 id="myModalLabel" class="modal-title">BAGGAGE SIZE</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-3">ENVELOPE</div>
<div class="col-sm-9">Lorem ipsum dolor sit amet,</div>
</div>
<div class="row">
<div class="col-sm-3">BAG</div>
<div class="col-sm-9">Lorem ipsum dolor sit amet,</div>
</div>
<div class="row">
<div class="col-sm-3">HAVE TO EDIT !!!!!!</div>
<div class="col-sm-9">Lorem ipsum dolor sit amet,</div>
</div>
</div>
<div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button> <button class="btn btn-primary" type="button">Save changes</button></div>
</div>
</div>
</div>

<!-- Modal area -->
<div id="helpArea" class="modal fade" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal"> ×<span class="sr-only">Close</span> </button>
<h4 id="myModalLabel" class="modal-title">DELIVERY AREA</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-3">AREA PARIS</div>
<div class="col-sm-9">inside Paris</div>
</div>
<div class="row">
<div class="col-sm-3">AREA BANLIEUE</div>
<div class="col-sm-9">Paris - Banlieue , Banlieue - Banlieue</div>
</div>
</div>
<div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button> <button class="btn btn-primary" type="button">Save changes</button></div>
</div>
</div>
</div>

<!-- Modal speed -->
<div id="helpSpeed" class="modal fade" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal"> ×<span class="sr-only">Close</span> </button>
<h4 id="myModalLabel" class="modal-title">DELIVERY SPEED</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-3">NORMAL</div>
<div class="col-sm-9">Lorem ipsum dolor sit amet,</div>
</div>
<div class="row">
<div class="col-sm-3">RAPID</div>
<div class="col-sm-9">Lorem ipsum dolor sit amet,</div>
</div>
<div class="row">
<div class="col-sm-3">FLASH</div>
<div class="col-sm-9">Lorem ipsum dolor sit amet,</div>
</div>
</div>
<div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button> <button class="btn btn-primary" type="button">Save changes</button></div>
</div>
</div>
</div>

<div class="container-full jumbo-order jumbo-full">


<!-- <div class="progress-step">
<div class="row">
<div class="col-xs-4" id="progressType"><h5><span>1</span>type</h5></div>
<div class="col-xs-4" id="progressArea"><h5><span>2</span>area</h5></div>
<div class="col-xs-4" id="progressSpeed"><h5><span>3</span>speed</h5></div>
</div>
</div> -->

<div class="owl-carousel">

<div data-hash="type">
<div class="container">
<div class="row">
	<div class="title-s">
		<div class="col-sm-12">
			<h1 id="progress-title">SELECT YOUR BAGGAGE TYPE</h1>
		</div>
	</div>
</div>
<div class="row">
<div class="col-xs-12">
<p class="form-help"><a data-toggle="modal" href="#helpSize" class="smalllink"><i class="fa fa-question-circle"></i>about type</a></p>
</div>
</div>
<div class="row">
<div id="type-select" class="col-xs-12 order-select-block">
<div class="row" data-toggle="button">
<div class="col-xs-6 col-sm-4"><button class="btn btn-block btn-type btn-order" value="enveloppe"><i class="fa fa-envelope-o fa-3x hidden-xs"></i><i class="fa fa-envelope-o fa-3x visible-xs"></i><br />ENVELOPE<br /><span class="sub-text">Documents : A5 to A2</span></button></div>
<div class="col-xs-6 col-sm-4"><button class="btn btn-block btn-type btn-order" value="sac"><i class="fa fa-briefcase fa-3x"></i><br />BAG<br /><span class="sub-text">&lt; 25 * 30 * 10cm</span></button></div>
<div class="col-xs-6 col-sm-4"><button class="btn btn-block btn-type btn-order" value="sacshopping"><i class="fa fa-suitcase fa-3x"></i><br />SHOPPING BAG<br /><span class="sub-text">&lt; 60 * 40 * 30cm</span></button></div>
<div class="col-xs-6 col-sm-4"><button class="btn btn-block btn-type btn-order" value="petiteboite"><i class="fa fa-cube fa-3x"></i><br />SMALL BOX<br /><span class="sub-text">&lt; 20 cm ou &lt; 7kg</span></button></div>
<div class="col-xs-6 col-sm-4"><button class="btn btn-block btn-type btn-order" value="carton"><i class="fa fa-archive fa-3x"></i><br />BOX<br /><span class="sub-text">30 * 40 * 60cm et+</span></button></div>
<div class="col-xs-6 col-sm-4"><button class="btn btn-block btn-type btn-order" value="specialdimension"><i class="fa fa-arrows-alt fa-3x"></i><br /> SPECIALE DIMENSIONS<br /><span class="sub-text">Contact us</span></button></div>
</div>
</div>
</div>
</div>
</div>

<div data-hash="area">
<div class="container">
<div class="row">
	<div class="title-s">
		<div class="col-sm-12">
			<h1 id="progress-title">SELECT DELIVERY AREA</h1>
		</div>
	</div>
</div>
<div class="row">
<div class="col-xs-12">
<p class="form-help"><a data-toggle="modal" href="#helpArea" class="smalllink"><i class="fa fa-question-circle"></i>about area</a></p>
</div>
</div>
<div class="row">
<div id="area-select" class="col-xs-12 order-select-block">
<div class="row" data-toggle="buttons">
<div class="col-xs-12 col-sm-6"><button class="btn btn-primary btn-block btn-area btn-order" value="paris"><i class="fa fa-bullseye fa-3x"></i><br />PARIS<br /><span class="sub-text">inside of paris</span></button></div>
<div class="col-xs-12 col-sm-6"><button class="btn btn-primary btn-block btn-area btn-order" value="banlieue"><i class="fa fa-circle-o fa-3x"></i><br />BANLIEUE<br /><span class="sub-text">outside of paris</span></button></div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 backlink" id="backlink-area"><a href="#type"><i class="fa fa-angle-double-left fa-1x"></i> BACK</a></div>
</div>
</div>
</div>

<div data-hash="speed">
<div class="container">
<div class="row">
	<div class="title-s">
		<div class="col-sm-12">
			<h1 id="progress-title">SELECT DELIVERY SPEED</h1>
		</div>
	</div>
</div>
<div class="row">
<div class="col-xs-12">
<p class="form-help"><a data-toggle="modal" href="#helpSpeed" class="smalllink"><i class="fa fa-question-circle"></i>about speed</a></p>
</div>
</div>
<div class="row">
<div id="speed-select" class="col-xs-12 order-select-block">
<div class="row" data-toggle="buttons">
<div class="col-xs-12 col-sm-4"><button class="btn btn-primary btn-block btn-speed btn-order" value="8h"><i class="fa fa-paper-plane fa-3x"></i><br />NORMAL<br /><span class="sub-text">less 8 hours</span></button></div>
<div class="col-xs-12 col-sm-4"><button class="btn btn-primary btn-block btn-speed btn-order" value="2h"><i class="fa fa-plane fa-3x"></i><br />RAPID<br /><span class="sub-text">less 2 hours</span></button></div>
<div class="col-xs-12 col-sm-4"><button class="btn btn-primary btn-block btn-speed btn-order" value="1h"><i class="fa fa-rocket fa-3x"></i><br />FLASH<br /><span class="sub-text">less 1 hour</span></button></div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 backlink" id="backlink-speed"><a href="#area"><i class="fa fa-angle-double-left fa-1x"></i> BACK</a></div>
</div>
</div>
</div>

</div>
</div>
