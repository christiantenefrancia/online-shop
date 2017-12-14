<?php include('header.php'); ?>
<body>
    <?php
    include('navtop.php');
    ?>

    <div class="ui grid">
    <div class="one wide column"></div>
                <div class="seven wide column">
                   <h1>&nbsp;CPShoppe</h1>
                </div>
                <div class="seven wide column">
                    <br>
                    <div class="blue six item ui secondary pointing menu">
                        <a class="item" href="index.php" id="home" style="font-size: 18px;">
                            Home
                        </a>
                        <a class="item" id="product" href="iPhone.php" style="font-size: 18px;">
                            Product
                        </a>
                        <a class="item" id="order" href="order.php" style="font-size: 18px;">
                            Order
                        </a>
                        <a class="item" id="contact" href="contact.php" style="font-size: 18px;">
                            Contact
                        </a>
                        <a class="item active" id="about" href="about.php" style="font-size: 18px;">
                            About Us
                        </a>
                        <a class="item" id="faq" href="faq.php" style="font-size: 18px;">
                            FAQ
                        </a>
                    </div>
                </div>
                <div class="one wide column"></div>
</div>
<hr>

    <br>
    <div class="ui two column centered grid">
		<div class="column">
			<h1 class="blue ui header">
				<i class="info icon"></i>
				<div class="content">
					About The Company
				</div>
			</h1>
			<div class="ui large floating message">
				<p style="padding-left: 40px;">
					CPShoppe, a cellphone company, retailers, distributes, 
					and markets various cellphones. The company store will be place on Polentes Building, second floor,
					Extension Street, Silay City The company offers electric guitars, bass guitars, acoustic guitars, guitar amplifiers, 
					drums, piano, bass amplifiers, basses, portable sound systems, audio products, and related equipment; and accessories,
					including strings, replacement parts, cases, straps, clothing, and more. The company was founded in 2006 and is based
					in Silay City, Negros Occidental , Philippines.  
				</p>
			</div>
		</div>

		<br>
		<div class="column">
			<h1 class="blue ui header">
				<br>
				<i class="mail icon"></i>
				<div class="content">
					Mission
				</div>
			</h1>
			<div class="ui large floating message">
				<p style="padding-left: 40px;">
					CPShoppe - an outlet that provide individuals the satisfaction of owning a wide range of high 
					quality and reliable cellphones.  
				</p>
			</div>
		</div>

		<br>
		<div class="column">
			<h1 class="blue ui header">
				<br>
				<i class="idea icon"></i>
				<div class="content">
					Vision
				</div>
			</h1>
			<div class="ui large floating message">
				<p style="padding-left: 40px;">
					We fill the joy of music into every household, through quality musical instruments and holistic music 
					tutorials. 
				</p>
			</div>
		</div>

		<br>
		<div class="column">
			<h1 class="blue ui header">
				<br>
				<i class="user icon"></i>
				<div class="content">
					About the Developer
				</div>
			</h1>
			<div class="ui large floating message">
				<p style="padding-left: 40px;">
					T and T (Tried and True ) Software Solutions is a software firm which provides software to cater every business needs. As our tag line
					says" Your Problem ,Our Solution". 
				</p>
			</div>
		</div>
	  	
	</div>

    <!-- <div id="background">
        <div id="page">
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
                        

                    </div>
                    <div id="body">
                        <h3>About US</h3>
                        <div class="hero-unit-table">

							<div id="accordion">
										<h3>About The Company</h3>
										<div>Moosikay Melos Musical Instruments Corporation, a musical instruments company, retailers, distributes, 
										and markets various musical instruments. The company store will be place on Polentes Building, second floor,
										Extension Street, Silay City The company offers electric guitars, bass guitars, acoustic guitars, guitar amplifiers, 
										drums, piano, bass amplifiers, basses, portable sound systems, audio products, and related equipment; and accessories,
										including strings, replacement parts, cases, straps, clothing, and more. The company was founded in 2006 and is based
										in Silay City, Negros Occidental , Philippines.  </div>
										<h3>Mission</h3>
										<div>Moosikay Melos- an outlet that provide individuals the satisfaction of owning a wide range of high 
											quality and reliable musical instruments.</div>
										<h3>Vision</h3>
										<div>We fill the joy of music into every household, through quality musical instruments and holistic music 
											tutorials.</div>
										<h3>About the Developer</h3>
										<div>T and T (Tried and True ) Software Solutions is a software firm which provides software to cater every business needs. As our tag line
										says" Your Problem ,Our Solution".</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <br>
    <br>
    <br>
    <?php
    include('footer_bottom.php');
    ?>

<!-- <script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script> -->

<script>

// $( "#accordion" ).accordion();



// var availableTags = [
// 	"ActionScript",
// 	"AppleScript",
// 	"Asp",
// 	"BASIC",
// 	"C",
// 	"C++",
// 	"Clojure",
// 	"COBOL",
// 	"ColdFusion",
// 	"Erlang",
// 	"Fortran",
// 	"Groovy",
// 	"Haskell",
// 	"Java",
// 	"JavaScript",
// 	"Lisp",
// 	"Perl",
// 	"PHP",
// 	"Python",
// 	"Ruby",
// 	"Scala",
// 	"Scheme"
// ];
// $( "#autocomplete" ).autocomplete({
// 	source: availableTags
// });



// $( "#button" ).button();
// $( "#radioset" ).buttonset();



// $( "#tabs" ).tabs();



// $( "#dialog" ).dialog({
// 	autoOpen: false,
// 	width: 400,
// 	buttons: [
// 		{
// 			text: "Ok",
// 			click: function() {
// 				$( this ).dialog( "close" );
// 			}
// 		},
// 		{
// 			text: "Cancel",
// 			click: function() {
// 				$( this ).dialog( "close" );
// 			}
// 		}
// 	]
// });

// // Link to open the dialog
// $( "#dialog-link" ).click(function( event ) {
// 	$( "#dialog" ).dialog( "open" );
// 	event.preventDefault();
// });



// $( "#datepicker" ).datepicker({
// 	inline: true
// });



// $( "#slider" ).slider({
// 	range: true,
// 	values: [ 17, 67 ]
// });



// $( "#progressbar" ).progressbar({
// 	value: 20
// });



// $( "#spinner" ).spinner();



// $( "#menu" ).menu();



// $( "#tooltip" ).tooltip();



// $( "#selectmenu" ).selectmenu();


// // Hover states on the static widgets
// $( "#dialog-link, #icons li" ).hover(
// 	function() {
// 		$( this ).addClass( "ui-state-hover" );
// 	},
// 	function() {
// 		$( this ).removeClass( "ui-state-hover" );
// 	}
// );
</script>
</body>
</html>