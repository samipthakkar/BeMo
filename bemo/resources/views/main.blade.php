<html>
<head>
{{$data->google_analytics}} <!-- Global Site Tag (gtag.js) - Google Analytics -->

  @if($data->is_visible=='false')
    <meta name="robots" content="noindex" />
    @endif

<script>history.scrollRestoration = "manual"</script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
	<script
    src="https://code.jquery.com/jquery-3.3.1.js">
	</script>
	<meta name="desc" content="{{$data->meta_desc}}"/>
	<title>{{$data->meta_title}}</title>

{{$data->facebook_pixel}}<!-- Facebook Pixel Code  -->
</head>
<body>

	<div class="header">
	<div class="bg"></div>
	<a href="index.html"><img src="images/{{$data->logo}}" id="title_logo">
	<nav>
		<ul>
			<li><a href="{{'contact'}}">Contact Us</a></li>
			<li><a href="#">CDA Interview Questions</a></li>
			<li><a href="#">How To Prepare</a></li>
  			<li><a class="active" href="{{'main'}}">Main</a></li>
		</ul>
	</nav>
	</div>
	

	<div id="container">
	<img src="images/{{$data->image}}" id="hero_image">
	<div class="centered">{{$data->image_text}}</div>	
	</div>
	<h4>{!!$data->title!!}</h4>

	<h3>Overview:</h3>
	<p>The purpose of the dental school interview<br>
	History and rationale of the CDA interview<br>
	Types of Questions<br>
	The Seven Competencies<br>
	Structure of the CDA interview<br>


	<a href="#" class="para_links">How to prepare for your CDA Interview</a><br>
	<a href="#" class="para_links">Sample CDA interview questions</a><br>
	<a href="#" class="para_links">BeMo CDA-structured interview prep program</a><br>
	<a href="#" class="para_links">Contact us</a><br>

	<h3>{{$data->header_1}}</h3>
	<p>
		{!!$data->para_1!!}
	</p>
	<p>
		What are NCSs? By these we mean the following: Communication skills, interpersonal skills, ethical and moral decision making capacity, maturity, professionalism, sense of social responsibility, service to community, leadership, initiative, scholarship, ability to collaborate with others, conflict resolution skills, etc.
	</p>
	<p>
		Research has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are "conscientious" and "open to new experiences" perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part.
	</p>
	<p>
		Thus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association's structured interview or CDA structured interviews.
	</p>

	<h3>{{$data->header_2}}/h3>
	<p>{{$data->para_2}}</p>
	<p>The CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview.</p>

	<h3>Types of Questions</h3>

	<p>The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example,</p>
	<p>"You are babysitting your sister’s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?"</p>
	<p>Conversely, PBDI type questions, ask the candidates "about past behaviour with the assumption that past behaviour is the best predictor of future behaviour." An example of a PBDI type questions is:</p>
	<p>Many of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome?</p>
	<p>Notice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies</p>

	<h3>The Seven Competencies</h3>

	<p>1. Communication: does the applicant have excellent communication skills?<br>
	2. Conscientiousness: is the applicant thorough, careful to do tasks well?<br>
	3. Integrity : is the applicant honest with themselves and others?<br>
	4. Judgment and analysis: does the applicant have the capability to make sound judgments? Do they gather all the facts before making a decision?<br>
	5. self-control : Does the applicant remain calm and in control in difficult situations?<br>
	6. sensitivity to others : Does the applicant show empathy towards others? Do they take the feelings of others into consideration?<br>
	7. Tact and diplomacy : Does the applicant show sensitivity in dealing with difficult issues? Does the applicant possess the necessary skills to deal with others without causing negative feelings?</p>

	<p>Notice in the above examples that the SI sample question is addressing the competencies of self-control, sensitivity to others, communication, while the PBDI question addresses the competencies of conscientiousness, Integrity, and judgement and analysis. In all of the questions that will be asked of you during your interview, the competency of communication is a constant that is continuously tested and retested. In order to be successful, however, you will have to be able to know which other competencies also apply to the question so that you can formulate an appropriate response, which touches on the key factors essential for the interviewers.</p>

	<h3>Structure of the CDA interview</h3>

	<p>The CDA structured interview is comprised of seven questions, one for each of the seven competencies described above. Each question, which can either be a SI or a PBDI type, is scored on a 5-point scale for a total and a maximum of 35 points by two interviewers who are either a pair of dentists, or senior dental students. The interview usually takes about 20-30 minutes to be completed.</p>

	<p>Click <span><a href="#" class="para_links">here</a></span> to learn how to prepare for your CDA interview</p>
	<p>Click <span><a href="#" class="para_links">here</a></span> to practice with our sample CDA interview questions</p>
	<p>Click <span><a href="#" class="para_links">here</a></span> to learn more about our money-back guarantee CDA interview preparation programs.</p>

	<h3>Reference:</h3>
	<p>Poole A., Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental schools: the new CDA structured interview, a new personality assessment, and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.</p>


	<footer>
		<div id="footer">
			©2013-2016 BeMo Academic Consulting Inc. All rights reserved <span><a class="para_links" href="#">Disclaimer & Privacy Policy </a> <a class="para_links" href="#">Contact Us</a></span>

			<a class="footer_links" href="#">Twitter</a></span>
			<a class="footer_links" href="#">Facebook</a> <span>

		</div>
	</footer>

	    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
    <script> 
         $(document).ready(function(){ 
            $(window).scroll(function(){ 
            	$('.header').fadeIn();
                $('.header').css("opacity", 1- $(window).scrollTop()/90000) ;
            }) 
        }) 
    </script> 
</body>
</html>