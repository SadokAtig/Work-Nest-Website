<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Seekars Website</title>
        <link rel="stylesheet" href="demandeur.css">
        <script></script>

        <!-- UniIcons CDN Link  -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/a67b783cc0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
    </head>

    <body>
    <!--Profile card end-->
    

        <!-- Navigation Menu  -->
        <div class="navigation_menu">
            <div class="left_menu">
                <img src="WN LOGO45.png" id="logo" width="50px">
                <p id="#">Category</p>
                <p>Featured Jobs</p>
                <p><a href="login.html">Log Out </a></p>
                <p><a href="applied_job.php">Applied Jobs</a></p>
            </div>
        </div>
   
<div class="contair">
            <div class="crd">
            <div class="crd__border">
                <div class="crd__perfil">
                    <img src="profile.png"  class="card__img">
                </div>
            </div> 
            <h3 class="crd__name"><?php echo($_SESSION['pseudo']);?></span></h3>   
           <span class="crd__profession">Work Nest Employee</span> 
        <div class="info">
            <div class="info__icon">
                <i class="ri-information-line"></i>
            </div>
            <div class="info__border">
                <div class="info__perfil">
                    <img src="WN LOGO45.png"  class="info__img">
                </div>
            </div>

            <div class="info__data">
                <h3 class="info__name">Work Nest</h3>
                <span class="info__profession">The Place To Go</span>
                <span class="info__location">Manouba</span>
            </div>
            <div class="info__social">
                <a href="https://dribbble.com/" target="_blank" class="info__social-link">
                <span class="info__social-icon">
<i class="ri-dribbble-fill"></i>
                </span>
            </a>


            <a href="https://fr.linkedin.com/" target="_blank" class="info__social-link">
                <span class="info__social-icon">
<i class="ri-linkedin-box-line"></i>
                </span>
            </a>


            <a href="https://github.com/" target="_blank" class="info__social-link">
                <span class="info__social-icon">
<i class="ri-github-fill"></i>
                </span>
            </a>
            </div>
        </div>
        </div>
        </div>

       






        <!-- Search Bar  -->
        <div class="search_bar">
            <p>Find your <br>dream job here</p>
            <div class="input_field">
                <i id="search_icon" class="uil uil-search"></i>
                <input type="text" placeholder="job title or keyword">
                <button>Search jobs</button>
            </div>
        </div>

        <!-- Job Section  -->
        <div class="job_section">
            <div class="job_card">
                <h3>Full-time jobs</h3>
                <p>Looking for a full time job as developer designer or sales professional</p>
                <a href="#" class="job_link">
                    <p>view all jobs</p>
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>
            <div class="job_card">
                <h3>Part-time jobs</h3>
                <p>Looking for a part time job as developer designer or sales professional</p>
                <a href="#" class="job_link">
                    <p>view all jobs</p>
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>
            <div class="job_card">
                <h3>Remote jobs</h3>
                <p>Looking for a remote job as developer designer or sales professional</p>
                <a href="#" class="job_link">
                    <p>view all jobs</p>
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Job Category Section  -->
        <div class="job_category">
            <h3>Explore <br>by Category</h3>
            <div class="job_category_container">

                <div class="category_card">
                    <img src="1.png" width="40px">
                    <h4>Design & development</h4>
                    <p>The design and development engineers, in the context of embedded systems engineering activities.</p>
                </div>
                <div class="category_card">
                    <img src="2.png" width="40px">
                    <h4>Office administrative</h4>
                    <p>Office Manager, performs various types of administrative functions in an organisationTheir .</p>
                </div>
                <div class="category_card">
                    <img src="3.png" width="40px">
                    <h4>Science & technology</h4>
                    <p>The Science and Technology degree is a multidisciplinary scientific training .</p>
                </div>
                <div class="category_card">
                    <img src="4.png" width="40px">
                    <h4>Property development</h4>
                    <p>This post provides exhaustive information on the job description of a property developer.</p>
                </div>
                <div class="category_card">
                    <img src="5.png" width="40px">
                    <h4>Business Development</h4>
                    <p>Development departments are also known as business development departments. Its members are responsible.</p>
                </div>
                <div class="category_card">
                    <img src="6.png" width="40px">
                    <h4>Admin & accountmant</h4>
                    <p>Post this Accounts Administrator job description template to careers pages and job boards to attract qualified candidates.</p>
                </div>
                <div class="category_card">
                    <img src="7.png" width="40px">
                    <h4>Industry manufacturing</h4>
                    <p>Manufacturing department is involved in the conversion of the raw material. The process plan is given by the MSE team.</p>
                </div>
                <div class="category_card">
                    <a href="#">
                        <p>See All Category</p>
                        <i class="uil uil-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>

        <main class="table">
            <section class="table__header">
                <h1>Available Offers</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="search.png" alt="">
                </div>
              
            </section>
            <section class="table__body">
                

                    <?php

$con = new mysqli('localhost','root','','test');
$tal=$_SESSION['pseudo'];

$table='<table class="table">
    <thead>
      <tr>
     
      <th> Job <span class="icon-arrow">&UpArrow;</span></th>
      <th> Diplomas <span class="icon-arrow">&UpArrow;</span></th>
      <th> Competance <span class="icon-arrow">&UpArrow;</span></th>
      <th> Experience <span class="icon-arrow">&UpArrow;</span></th>
      <th>  Score <span class="icon-arrow">&UpArrow;</span></th>
      <th> Salary <span class="icon-arrow">&UpArrow;</span></th>
     
      <th> Operation <span class="icon-arrow">&UpArrow;</span></th>
      </tr>
    </thead>';
    $sql="select * from offer,cv where offer.competance=cv.competancecv or offer.diplomas=cv.diplomascv or offer.experience= cv.experiencecv  and cv.pseudo='$tal' ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
      
        $job=$row['job'];
        $diplomas=$row['diplomas'];
        $diplomascv=$row['diplomascv'];
        $competance=$row['competance'];
        $competancecv=$row['competancecv'];
        $experience=$row['experience'];
        $experiencecv=$row['experiencecv'];
        $salary=$row['salary'];  
        $score=0;

        if ($competance==$competancecv){
            $score=$score+5;
          }
         if($experiencecv>=$experience){
            $score=$score+(2*($experiencecv-$experience));
         }
        if ($diplomas!=$diplomascv){
            $score=$score*0;
        }
          
          $table.='<tr>
          
          <td>'.$job.'</td>
          <td>'.$diplomas.'</td>
          <td>'.$competance.'</td>
          <td>'.$experience.'</td>
          <td>'.$score.'</td>
          <td>'.$salary.'</td>
      <td><button>Apply</button></td>
      <div class="alert hide">
      <span class="fa-solid fa-circle-check"></span>
      <span class="msg">Success : You Have Applied For The Job  !</span>
      <div class="close-btn">
         <span class="fas fa-times"></span>
      </div>
   </div>
 <br>
      </tr>';
      
    }
    $table.='</table>';
    echo $table;
                    ?>
                    </tbody>
                </table>
            </section>
        </main>
       
        

        <!---  Featured Jobs Section  --->
        <div class="featured_jobs">
            <div class="featured_jobs_title">
                <h3>Featured jobs</h3>
                <a href="#">
                    <p>See all <span class="tooltip">Click to see more featured jobs</span></p>
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>

            <div class="featured_jobs_cards">

                <div class="job_cards">
                    <a  class="h" href="">  <img src="job_2.png" width="47px"></a>
                    <h3>UI/UX designer</h3>
                    <p>We are looking for a skilled UX Designer who has a focus on end-user ease of use and functionality of the application. The UX designer will work with designers and trend analysts to develop applications that reach as many users as possible.
                        .</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Jaipur, RJ</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$579 -.</span>
                    </ul>
                </div>
                <div class="job_cards">
                    <img src="job_3.png" width="47px">
                    <h3>Content Writer</a></h3>
                    <p>We are looking for a Content Writer to join our editorial team and enrich our websites with new blog posts, guides and marketing copy.
                        Content Writer responsibilities include conducting thorough research on industry-related topics, </p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Jaipur, RJ</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$800 -.</span>
                    </ul>
                </div>
                <div class="job_cards">
                    <img src="meeting.png" width="60px">
                    <h3>Sales Professional</h3>
                    <p>ou’ll work as a manager overseeing a sales team of 10 covering Illinois and online retailers. We love numbers, and you should too! Tracking, measuring, assessing and projecting are how we’ve become successful, so we want to hear</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Jaipur, RJ</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$300 -.</span>
                    </ul>
                </div>
                <div class="job_cards">
                    <img src="engineer.png" width="60px">
                    <h3>Computer Security Engineer</h3>
                    <p>An Engineering Manager uses their industry knowledge to oversee a variety of activities. They may coordinate and direct building activities on a construction site or activities related to maintenance, testing, quality assurance.</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Jaipur, RJ</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$900 -.</span>
                    </ul>
                </div>
                <div class="job_cards">
                    <img src="data-management.png" width="60px">
                    <h3>Cloud Engineer</h3>
                    <p>We are looking for someone with experience in IT and the cloud, who is able to work in a team environment and has good communication skills. While you don’t need to have experience in every aspect of the jobe - Experience with cloud.</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Jaipur, RJ</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$750 -.</span>
                    </ul>
                </div>
                <div class="job_cards">
                    <img src="technician.png" width="60px">
                    <h3>Computer Technician</h3>
                    <p>We are looking for a qualified Computer Technician to install, maintain and repair computers and networks. You will be the one to ensure that adequate IT infrastructure is in place and is used to its maximum capabilities</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Jaipur, RJ</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$1980 -.</span>
                    </ul>
                </div> <div class="job_cards">
                    <img src="ruler.png" width="60px">
                    <h3>Graphic Designer</h3>
                    <p>The content that Graphic Designers create is often the first time a customer or client notices your company. Someone may learn about your company from an advertisement, and if your branding isn’t clear, you won’t reach customers</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>New York, NY</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$600 -.</span>
                    </ul>
                </div> 
                <div class="job_cards">
                    <img src="coordinator.png" width="60px">
                    <h3>Project Manager</h3>
                    <p>A Project Manager is a professional in charge of ensuring their teams complete all projects on time and within budget. They prevent scope creep while also managing individual tasks for their respective teams</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Manouba, MB</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$2200 -.</span>
                    </ul>
                </div>

                <div class="job_cards">
                    <img src="job_1.png" width="47px">
                    <h3>Programmer</h3>
                    <p>A Computer Programmer, or a Software Programmer, writes computer code to create software applications. Their duties include using code libraries for common commands to make writing programs more efficient.</p>
                    <ul>
                        <li>
                            <i class="uil uil-file"></i>
                            <p>Full-time</p>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <p>Manouba, MB</p>
                        </li>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 -.</span>
                    </ul>
                </div>

            </div>
        </div>

        <!---  Companies Section  --->
        <div class="companies">
            <div class="companies_details">
                <h3>Over 1000+ companies <br>job posted </h3>
                <p>Working for a large, well-known company has many advantages—especially now. Not only are big companies often hiring in a wide variety of roles and in many locations, but they also tend to offer an environment of stability and resiliency from their years of experience and established success. And don’t forget about the opportunities for growth, not to mention the prestige and pride associated with working for a marquee name.
                </p>
                <p>The top 10,000 companies and startups with more than 1000 employees, by Crunchbase rank.

                    This list of companies and startups with more than 1000 employees provides data on their funding history, investment activities, and acquisition trends. Insights about top trending companies, startups, investments and M&A activities, notable investors ofthese companies, their management team, and recent news are also included..</p>
            </div>
            <div class="companies_img">
                <img src="company.png" width="500px">
            </div>
        </div>

        <!---  Cusomer Stories Section  --->
        <div class="customers">
            <div class="customers_head">
                <h3>Customers <br>stories</h3>
                <div class="arrows">
                    <i id="leftArrow" class="uil uil-angle-left-b"></i>
                    <i id="rightArrow" class="uil uil-angle-right-b"></i>
                </div>
            </div>

            <div class="customers_container">
                <div class="cards_wraper" id="slider">
                    <div class="card">
                        <div class="details">
                            <img src="kl.jpg" width="80px" border="1">
                            <div class="name_post">
                                <h3>Atig Sadok</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <p>sadok joined in December 2022 and currently serves as ServiceNow’s Chief Customer and Partner Officer. 
                            Prior to joining ServiceNow, sadok spent 14 years at Work Nest.</p>
                        <div class="ratings">
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="details">
                            <img src="adolf.jpg" width="100px" border="1">
                            <div class="name_post">
                                <h3>Adolf Hilter</h3>
                                <p>Full Stack Developer</p>
                            </div>
                        </div>
                        <p>adolf has been thinking and writing about technology since the late nineties, when he worked at TechTV, 
                            a cable network dedicated to computing and the internet.</p>
                        <div class="ratings">
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star-half-alt"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="details">
                            <img src="be.jpg" width="100px" border="1">
                            <div class="name_post">
                                <h3>Oussema</h3>
                                <p>App Designer</p>
                            </div>
                        </div>
                        <p>Oussema works in the strategy and innovation team at ServiceNow as Blockchain/DLT Solution Engineer. He has followed the evolution of the enterprise blockchain.</p>
                        <div class="ratings">
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="details">
                            <img src="tony.jpg" width="80px" border="1">
                            <div class="name_post">
                                <h3>Tony Montana</h3>
                                <p>Content Writer</p>
                            </div>
                        </div>
                        <p>tony is an evangelist on the Innovation team at ServiceNow. In this role, Elisha is laser focused on the future of work, digital transformation.</p>
                        <div class="ratings">
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="details">
                            <img src="lmos.jpg" width="100px" border="1">
                            <div class="name_post">
                                <h3>Benito Mussolini</h3>
                                <p>Data Scientist</p>
                            </div>
                        </div>
                        <p>Mussolini is a writer and content production specialist at ServiceNow where she manages the content production and publication process .</p>
                        <div class="ratings">
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star-half-alt"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="details">
                            <img src="lfrr.jpg" width="100px" border="1">
                            <div class="name_post">
                                <h3>Firaun </h3>
                                <p>AI Developer</p>
                            </div>
                        </div>
                        <p>Firaun is the founder and CEO of Hexnode, an award-winning unified endpoint management platform. Read Apu Pavithran's full executive  </p>
                        <div class="ratings">
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star"></i>
                            <i class="uis uis-star-half-alt"></i>
                            <i class="uil uil-star"></i>
                            <i class="uil uil-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
          </a>


        <!---  Job Post Section  --->
        <div class="job_posting">
            <div class="post_container">
                <div class="details">
                    <h3>Wanna apply for a job offer.</h3>
                    <p>To apply for a job visit subpage </p>
                </div>
                <a href="login.html" class="m">
                <button type="submit">Apply For a Job</button>
                </a>
            </div>
        </div>

        <!---  Footer Section  --->
        <div class="footer">
            <div class="categories">
                <h3>Categories</h3>
                <p>Content Writer</p>
                <p>Graphic Designer</p>
                <p>Cloud Engineer</p>
                <p>UI/UX designer</p>
                <p>Project Manager</p>
            </div>
            <div class="help">
                <h3>Help and advice</h3>
                <p>Help center</p>
                <p>Contact support</p>
                <p>Released notes</p>
            </div>
            <div class="company">
                <h3>Company</h3>
                <p>About us</p>
                <p>Job seminar</p>
                <p>Career</p>
                <p>Blog</p>
            </div>
            <div class="getin_touch">
                <h3>Get in touch</h3>
                <h4>Feel free to get in touch with <br>us via email</h4>
                <p class="email">atigsadek@gmail.com</p>
                <div class="social_links">
                    <i class="uil uil-skype"></i>
                    <i class="uil uil-twitter"></i>
                    <i class="uil uil-youtube"></i>
                </div>
            </div>
        </div>
        
     <script src='demandeur_job.js'></script>


    </body>

</html>
