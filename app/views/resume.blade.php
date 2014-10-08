@extends('layouts.master')

@section('content')
   
@stop

<html>
 <head>

<link type="text/css" rel="stylesheet"/>
<title></title>
</head>
<body>
	<style>

div
{
    border-radius: 5px;
    }
#header
{
    position: absolute;
    z-index: 1;
    height:50px;
    width: 98%;
    background-color: #668284;
    margin-bottom: 10px
    }

#name {
    float:left;
	margin-left: 60px;
	padding-bottom: 10px;
	font-size: 20px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
	
}

#email{
    float:right;
    margin-right: 20px;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
}

#contact
{
    margin-left:45%;
    padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
    }

a:hover {
    font-weight: bold;
}

.right
{
    float: left;
    margin-top: 50px;
    padding-left:5px;
    /*margin-right: -10px;
    margin-left: 14%;*/
    font-size: 16px;
    height: auto;
    width: 99%;
    background-color: #E3EDD8;
    }

/*.left
{
    float: left;
    margin-top: 50px;
    /*margin-right: -90px;
    height: relative;
    width: 10%;
    background-color: #4160E8;
    }*/
    
#footer
{
    height:40px;
    clear:both;
    position: relative;
    background-color: #C1E3E1;
    }
    
h3
{
    text-decoration: underline;
    }

#job-responsibilities
{
    padding: 1px;
    }
.job-title
{
    font-weight: bold;
    }
table
/*{
    border: 1px dashed black;
    }*/
td
{
    padding: 2px;
    border: 1px solid #E88741;
    }

#course-name
{
    font-weight:bold;
    }

#company-name
{
    height:2px;
    text-decoration:underline;
    }
#job-title
{
    height: 5px;
    }
.job-duration
{
    float:right;
    }
#heading
{
    font-weight:bold;
    }
{   
	text-align:center;
    }

	</style>
<div id="header">
<p id="name">Philip James Winrock</p>
         <a href="mailto:philipwinrock@aol.com" target="_blank"><p id="email">philipwinrock@aol.com</p></a>
         <p id="contact">1-469-360-5506</p>
     </div>
     <div class="left">
     </div>
     <div class="right">
         
            <h3>Personal Objective-</h3>
            <ul><h4><strong>To Incorporate programming with my previous experience in an Industrial Enviorment.</strong></h4>
            <h3>Professional Experience</h3>
            <h4 id="company-name">Nikon Metrology Inc. Brighton MI. Jan 1995 - Feb 2013</h4>
            <p id="job-title"><strong>Manager</strong></p>
            <p id="job-responsibilities"><strong>Job Responsbilities</strong></p>
            <p>
            <ul>
                <li>Opened Contract Field Service Office in Mexico for Nikon Metrology.</li>
                <li>Primary duties of our office was to calibrate , Install and Repair CMM Measuring Machines</li>
                <li>Directly interacted with customers in person to provide solutions for equipment or measurement problems.</li>
                <li>Contribute ideas to the team on how customers can be satisfied</li>
                <li>I am a determined and dedicated person. These attributes are proven through projects I have taken on in my career in USA and other Countries</li>
                <li>Good Communication Skills, Presentation Skills, Good attitude towards leadership, able to lead and/or delegate, experienced in conflict resolution and negotiation and a very good Team Player.</li>
            </ul>
            </p>
            <h3>Educational Qualifications</h3>
            <table>
                <tr id="heading">
                    <td>Qualification</td>
                    <td>Institute</td>
                    <td>Location</td>
                    <td>Year</td>
                </tr>
                 <tr>
                   <td>Associates Degree in Electronics</td>
                    <td>DeVry Institute Of Technology</td>
                    <td>Phoenix AZ.</td>
                    <td>1984</td>
                </tr>

                <tr>
                    <td>CNC Lathe Programming</td>
                    <td>McDonnell Douglas Aircraft</td>
                    <td>Southern California</td>
                    <td>1985</td>
                </tr>
                <tr>
                    <td>PCDMIS Programming</td>
                    <td>PCDMIS</td>
                    <td>Monterrey Mexico</td>
                    <td>1995</td>
                </tr>
                   
                <tr>
                    <td>HVAC Commercial</td>
                    <td>Capitol City Trade Institute</td>
                    <td>Austin TX.</td>
                    <td>2003</td>
                </tr>
                   
               
                    
                <tr>
                    <td>Codeup BootCamp for Programming</td>
                    <td>Codeup GeekDom Weston Building </td>
                    <td>San Antonio TX.</td>
                    <td>2014</td>
                </tr>
                  <tr>
                    <td>Allen-Bradley Program Logic Controlers</td>
                    <td>Manufacturers seminar </td>
                    <td>Dallas TX.</td>
                    <td>2014</td>
                </tr>

              
               
            </table>
            <!-- <h3>Independent Courses</h3> -->
            <p>


             <h3>Courses Attended</h3>
            <p>
                <ul><li>Codeup "Bootcamp of programming"  12 week intensive course in web developement programming August 12 - November 5 , 2014</li>
                <li>Learning basic PHP, HTML, CSS and Javascript at Codeup facilities located in Geekdom San Antonio Texas.</li>
                 <li>EM385 Safety Certification 2013 Guam USA.</li>
                </ul>
            </p>
                

            <h3>Technical Skills</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Operating Systems:</span>  Macintosh Computers (OS X), Linux (Ubuntu), Windows XP</li>
                <li>
                <span id="course-name">Application Software:</span> Office 97-2003; Office XP, Office 2007, Office for Mac 2012, Excell.</li>
                <li>
                <span id="course-name">Programming:</span>PHP, HTML, CSS, JavaScript on Laravel Framework.</li>
                <li>
                <span id="course-name">Programming:</span>PCDMIS Programming ver 2014 Windows based program for Precise Measuring Machine (CMM's)</li>

            </ul>
            </p>
            <h3></h3>
           
            <h3>Personal Information:</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Determined</span> hard and smart working person. I believe in task based roles and complete ownership of work.
                <li>
                <span id="course-name">Languages</span> English, Spanish</li>
                <li>
                <span id="course-name">Hobbies:</span> Enjoy IT related  magazines, playing guitar, swimming, cooking, listening music, surfing Internet, self-learning through e-courses.</li> </ul>
            </p>
            <h3>Other Information</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Expected</span> Salary: As per Industry <span>Standards</span></li>
                <li>
                <span id="course-name">Area</span> of Interest: Project Management, Start-ups, Technical Support, Support Engineer, Customer Satisfaction, Client service, </li>
                <li>
                <span id="course-name">Available</span> for employment- <strong>Immediately</strong</li></ul>
           
     </div>
     <div id="footer"></div>
    </body>
</html>
                    
