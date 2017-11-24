<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CodeShaala</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="sty.css">

<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
				<nav class="navbar navbar-default">
				 <div class="navbar-header">
					 <!-- Mobile Toggle Menu Button -->
			 <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="index.html">CodeShaala</a>
				 </div>
				 <div id="navbar" class="navbar-collapse collapse">
					 <ul class="nav navbar-nav navbar-right">
						 <li ><a href="homeout.html" data-nav-section="home"><span>Home</span></a></li>
						 <li class="active"><a href="catalog.html"><span>Course Catalog</span></a></li>
						 <li ><a href="forum.html"><span>Forum</span></a></li>
						 <li ><a href="profile.php"><span>Profile</span></a></li>
						 <li ><a href="homeout.php"><span>logout</span></a></li>
						 <li ><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
					 </ul>
				 </div>
			 </nav>
			  <!-- </div> -->
		  </div>
	</header>
<br><br><br><br><br>


  <!--for demo wrap-->
  <center><h1 style="font-size: 60px;"><br>Quiz-Time!</h1></center>
        <center><h2 style="font-size: 25px;color:whitesmoke;  ">Ready.Steady.Go!</h2></center><br>
<?php
include 'conn.php';
session_start();
$usr=$_SESSION['usr'];
$sql="UPDATE prog SET js=2 WHERE email='$usr';";
$result=mysqli_query($link,$sql);
 ?>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>

    var quiztitle = "";
    /**
    * Set the information about your questions here. The correct answer string needs to match
    * the correct choice exactly, as it does string matching. (case sensitive)
    *
    */
    var quiz = [
        {
            "question"      :   "Q1: how many variable types does javascript have",

            "choices"       :   [
                                    "6",
                                    "4",
                                    "5",
                                    "7"
                                ],
            "correct"       :   "5",
            "explanation"   :   "",
        },
        {
            "question"      :   "Q2: what paradigm does javascript follow ?",

            "choices"       :   [
                                    "object orieted programming",
                                    "object based model",
                                    "document object model",
                                    "linear model"
                                ],
            "correct"       :   "object based model",
            "explanation"   :   "",
        },
        {
            "question"      :   "Q3: the floating point integer is accomadated by which data type?",

            "choices"       :   [
                                    "number",
                                    "float",
                                    "flo",
                                    "num"
                                ],
            "correct"       :   "number",
            "explanation"   :   "",
        },
        {
            "question"      :   "Q4: variable  in javascript are given datatypes ____?",

            "choices"       :   [
                                    "implictly",
                                    "explicitly"

                                ],
            "correct"       :   "implicitly",
            "explanation"   :   "",
        },
        {
            "question"      :   "Q5: which of the following is not a valid variable ?",

            "choices"       :   [
                                    "x1",
                                    "$x1",
                                    "1x",
                                    "_x"
                                ],
            "correct"       :   "<html>",
            "explanation"   :   "",
        },
    ];
    /******* No need to edit below this line *********/
    var currentquestion = 0, score = 0, submt=true, picked;
    jQuery(document).ready(function($){
        /**
         * HTML Encoding function for alt tags and attributes to prevent messy
         * data appearing inside tag attributes.
         */
        function htmlEncode(value){
          return $(document.createElement('div')).text(value).html();
        }
        /**
         * This will add the individual choices for each question to the ul#choice-block
         *
         * @param {choices} array The choices from each question
         */
        function addChoices(choices){
            if(typeof choices !== "undefined" && $.type(choices) == "array"){
                $('#choice-block').empty();
                for(var i=0;i<choices.length; i++){
                    $(document.createElement('li')).addClass('choice btn btn-primary btn-lg').attr('data-index', i).text(choices[i]).appendTo('#choice-block');
                     $(document.createElement('br'));
                }
            }
        }

        /**
         * Resets all of the fields to prepare for next question
         */
        function nextQuestion(){
            submt = true;
            $('#explanation').empty();
            $('#question').text(quiz[currentquestion]['question']);
            $('#pager').text('Question ' + Number(currentquestion + 1) + ' of ' + quiz.length);

            addChoices(quiz[currentquestion]['choices']);
            setupButtons();
        }
        /**
         * After a selection is submitted, checks if its the right answer
         *
         * @param {choice} number The li zero-based index of the choice picked
         */
        function processQuestion(choice){
            if(quiz[currentquestion]['choices'][choice] == quiz[currentquestion]['correct']){
                $('.choice').eq(choice).css({'background-color':'#50D943'});
                $('#explanation').html('<strong>Correct!</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
                score++;
            } else {
                $('.choice').eq(choice).css({'background-color':'#D92623'});
                $('#explanation').html('<strong>Incorrect.</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
            }
            currentquestion++;
            $('#submitbutton').html('NEXT QUESTION &raquo;').on('click', function(){
                if(currentquestion == quiz.length){
                    endQuiz();
                } else {
                    $(this).text('Check Answer').css({'color':'#222'}).off('click');
                    nextQuestion();
                }
            })
        }
        /**
         * Sets up the event listeners for each button.
         */
        function setupButtons(){
            $('.choice').on('mouseover', function(){
                $(this).css({'background-color':'#e1e1e1'});
            });
            $('.choice').on('mouseout', function(){
                $(this).css({'background-color':'#fff'});
            })
            $('.choice').on('click', function(){
                picked = $(this).attr('data-index');
                $('.choice').removeAttr('style').off('mouseout mouseover');
                $(this).css({'border-color':'#222','font-weight':700,'background-color':'#c1c1c1'});
                if(submt){
                    submt=false;
                    $('#submitbutton').css({'color':'#000'}).on('click', function(){
                        $('.choice').off('click');
                        $(this).off('click');
                        processQuestion(picked);
                    });
                }
            })
        }

        /**
         * Quiz ends, display a message.
         */
        function endQuiz(){
            $('#explanation').empty();
            $('#question').empty();
            $('#choice-block').empty();
            $('#submitbutton').remove();
            $('#question').text("You got " + score + " out of " + quiz.length + " correct.");
            $(document.createElement('h2')).css({'text-align':'center', 'font-size':'4em'}).text(Math.round(score/quiz.length * 100) + '%').insertAfter('#question');
        }
        /**
         * Runs the first time and creates all of the elements for the quiz
         */
        function init(){
            //add title
            if(typeof quiztitle !== "undefined" && $.type(quiztitle) === "string"){
                $(document.createElement('h1')).text(quiztitle).appendTo('#frame');
            } else {
                $(document.createElement('h1')).text("Quiz").appendTo('#frame');
            }
            //add pager and questions
            if(typeof quiz !== "undefined" && $.type(quiz) === "array"){
                //add pager
                $(document.createElement('p')).addClass('pager').attr('id','pager').text('Question 1 of ' + quiz.length).appendTo('#frame');
                //add first question
                $(document.createElement('h2')).addClass('question').attr('id', 'question').text(quiz[0]['question']).appendTo('#frame');
                //add image if present

                $(document.createElement('p')).addClass('explanation').attr('id','explanation').html('&nbsp;').appendTo('#frame');

                //questions holder
                $(document.createElement('ul')).attr('id', 'choice-block').appendTo('#frame');

                //add choices
                addChoices(quiz[0]['choices']);

                //add submit button
                $(document.createElement('div')).addClass('btn btn-primary btn-lg').attr('id', 'submitbutton').text('Check Answer').css({'font-weight':700,'color':'#222','padding':'30px 0'}).appendTo('#frame');

                setupButtons();
            }
        }

        init();
    });
    </script>
    <style type="text/css" media="all">
        /*css reset */
        html,body,div,span,h2,h3,h4,h5,h6,p,code,small,strike,strong,sub,sup,b,u,i{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0;}


        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}



        ol,ul{list-style:none;}
        strong{font-weight:700;}


        #frame{max-width:620px;border:1px solid #ccc;background:#67d2bd;padding:10px;margin:3px;}


        p.pager{margin:5px 0 5px; font:bold 1em/1em ;font-family: "Source Sans Pro"; font-size:30px;color: azure;}

        #choice-block{display:block;list-style:none;margin:0;padding:0;}
        #submitbutton{background:#5a6b8c;}
        #submitbutton:hover{background:#7b8da6;width:300px;  }

        .btn{ margin-left: 30px;margin-right: 30px; margin-top: 20px; align-content: center;min-width:500px; font-family: "Source Sans Pro";}
        #explanation{margin:0 auto;padding:20px;  }
        h2{font-family: "Source Sans Pro";color: azure;}
        .navbar-brand{font-family: "Source Sans Pro";color: azure;}
        #question{font-family: "Source Sans Pro"; font-size:30px;margin: auto;color: azure;}
    </style>







     <center>
     <div id="frame" role="content"></div>
         </center>

        <br><br><br><br><br><br>
	</body>
</html>
