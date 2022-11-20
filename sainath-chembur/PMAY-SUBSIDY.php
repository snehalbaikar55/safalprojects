<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
include('include/vid.php');
include('include/crmurl.php');

$enu = base64_encode($url);
?>

<?php 
include('include/log.php'); 
include('include/browserdetection.php'); 
include('include/devicedetection.php');
include('include/head.php'); 
include('include/backend.php'); 
?>


<!--****************** BODY SECTION STARTS ******************-->
<body data-spy="scroll" data-target="#navbarNav">
    
<!--******  Clickcease.com tracking ******-->
<?php include('include/clickcease.php'); ?>
 
<!--******  Navigation bar and Logo ******-->    
<?php include('include/navbar.php'); ?>

<main class="pload">   
 
<br><br><br>
<section class="section shadow-sm lazyload" id="overview">
<span class="head text-capitalize d-none d-md-block">PMAY-SUBSIDY</span>
<span class="d-block section-heading color-primary text-capitalize">
   PRADHAN MANTRI AWAS YOJANA- HOUSING FOR ALL (URBAN)</span> 


<p>Pradhan Mantri Awas Yojna(PMAY) is a mission started with an aim 'Housing For All (HFA) scheme by NDA Government to be achieved by the year 2022, that is when India will be completing its 75 years of Independence. The mission started in 2015 and will be attained in seven years i.e., during 2015-2022.
<br>
This Housing for All (HFA) scheme is envisioned by our Honorable Prime Mister Mr. Narendra Modi. By the time the Nation completes 75 years of its Independence, Pradhan Mantri Awas Yojna will bring a 'Pucca house' for every family in urban cities with water connection, toilet facilities, 24x7 electricity supply and complete access. As addressed by our Prime Minister in the joint session of parliament on 9th June, 2014.</p> 
  
<span class="d-block section-heading color-primary text-capitalize">
OBJECTIVE OF PRADHAN MANTRI AWAS YOJNA (PMAY) - HOUSING FOR ALL</span>

<p>A comprehensive mission of PMAY Housing Scheme aims to create :
<ul>
<li>Indian women of all religions and castes. Everyone will be equally eligible no biased treatment on basis of caste or religion.</li>
<li>People who come from low income and economically weaker sections of the society.</li>
<li>ST (Scheduled Tribes).</li>
<li>SC (Scheduled Castes).</li>
</ul>
</p>


<span class="d-block section-heading color-primary text-capitalize">
WHAT IS THE ELIGIBILITY CRITERIA FOR THE PMAY SUBSIDY?</span>


<p>A comprehensive mission of PMAY Housing Scheme aims to create :

<ul>
<li>EWS :You have to provide enough proof that you belong to the economically weaker section of the society. How will the government define EWS and LIS categories? There are specific criteria listed to distinguish you belong to the EWS category. Households with an annual income Up to Rs. 3 lakh will be defined under EWS.</li>

<li>LIG : LIG or Low Income Group people are also eligible to get benefits under PMAY. To be classified under LIG you will have to prove that your annual household income is between Rs. 3 lakh and 6 lakh.</li>

<li>MIG 1 :Medium Income Group 1, a person earning leass then rs 12 lakhs per year. He/she can get loan upto rs 9 lakhs.</li>

<li>MIG 2 :Medium Income Group 2, a person earning less then rs 18 Lakhs. He/She can get loan upto rs 12 lakhs.</li>

<li>Minority Groups :The persons belonging to the minority communities such as the SC/ST or OBC, will have to provide adequate provide their caste certificates to enlist themselves for PMAY.</li>

<li>Women :Women who either belong to the minority communities or EWS or LIG will also be considered eligible for PMAY.</li>
</ul>
</p>



<span class="d-block section-heading color-primary text-capitalize">
OTHER CLAUSES OF ELIGIBILITY</span>

<p>Although there are no strict regulations , if the beneficiary is a family, then the family must comprise of a husband, a wife and children who are unmarried. This is the basic criteria for acting as a beneficiary.</p>


<span class="d-block section-heading color-primary text-capitalize">
WHAT EACH CATEGORY IS ELIGIBLE TO RECEIVE?</span>

<p>The LIG category is eligible is to receive assistance only under the CLSS component of the mission, while EWS is eligible to receive assistance under all the four stages. It must be noted that the State/UTs may redefine the annual income limit as per the needs of the local residents.</p>

<p>According to a component of the scheme the carpet area of the houses being made for the EWS would be of about 30 sqm while the carpet area for the houses being made for the LIG will be of 60 sqm. For MIG 1 it will be 90sqm and MIG 2 110 sqm.</p>



<span class="d-block section-heading color-primary text-capitalize">
DOCUMENTS REQUIRED FOR PM AWAS YOJANA</span>

<p>For the central govt. housing scheme named the PM Awas Yojana, the govt. has given some guidelines regarding the set of documents required for the said housing scheme. These documents are necessary to be submitted to get enrolled in the PM Awas Yojana. There are some mandatory conditions which are required for this scheme. For these mandatory conditions, some set of documents are needed to be produced to the authority which is carrying out the application procedure of the PM Awas Yojana. These documents are identity proof, address proof, income proof, construction certificates, etc.</p>

<p><table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th  style="width: 200px;">Document type</th>
                                                <th>Acceptable documents</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Proof of Identity</td>
                                                <td class="rating"><span>PAN card, Aadhar card, Voter Identity card, Driving License, MNREGA Number, etc.</span></td>                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Proof of Address</td>
                                                <td class="rating"><span>Scheduled Caste. Scheduled Tribe, Other Backward Class certificate, Minority certificate, etc.</span></td>                                               
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Proof of category</td>
                                                <td class="rating"><span>Passport, Aadhar card, Birth certificate.</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Proof of nationality</td>
                                                <td class="rating"><span>Passport, Aadhar card, Birth certificate.</span></td>
                                            </tr>											
											<tr>
                                                <td>5</td>
                                                <td>Proof of Income</td>
                                                <td class="rating pb-0"><span>As the PM Awas Yojana is especially designed to provide housing needs for the people belonging to economic weaker categories and backward classes, so it is a mandatory condition for the beneficiaries to have certificate of income. If the beneficiary’s income does not lie in taxable limit, then he / she must provide self declaration of EWS certificate or Low Income Group certificate. If the beneficiary has a monthly salary, then he / she must provide a recent salary statement in original. Along with this, he / she must provide IT return statements.</span></td>
                                            </tr>
											<tr>
                                                <td>6</td>
                                                <td>Valuation certificate with bank accounts details</td>
                                                <td class="rating pb-0"><span>The subscriber must submit the valuation certificate of his properties which is approved by a registered authority. He must declare the details of the bank accounts by providing statements of the bank accounts registered under the name of the subscriber.</span></td> 
                                            </tr>
											<tr>
                                                <td>7</td>
                                                <td>Construction documents proof</td>
                                                <td class="rating pb-0"><span>The subscriber must submit documents regarding construction of the house under the Awas Yojana. The construction agreement furnished from the developer or builder along with approval plan. Fitness certificate and certificate of cost to make construction of house or for extension or repair of the existing house must be provided. There must be a No Objection certificate by the housing society or the relevant authority for construction of house or for extensions.</span></td> 
                                            </tr>
											<tr>
                                                <td>8</td>
                                                <td>Document of no pucca house</td>
                                                <td class="rating"><span>A document for not having a pucca house under the name of the applicant or under the name of a family member of the applicant is mandatory, which has to be given through a court affidavit.</span></td> 
                                            </tr>
                                        </tbody>
                                    </table></p>
                                    
                                    
<span class="d-block  color-primary text-capitalize">
I am Single, can I still benefit from PMAY?</span>

<p>Yes, you may apply for the PMAY subsidy if you are single, however there are different criteria. Unmarried men can make use of the PMAY subsidy if their mother is the co-applicant. In some cases they may apply when there is no surviving woman in the family. Unmarried women unfortunately cannot apply for the PMAY subsidy.</p>


<span class="d-block  color-primary text-capitalize">
Can I still get PMAY if I am not applying for a LOAN?</span>

<p>In order to get PMAY subsidy you must successfully qualify for a home loan.</p>


<span class="d-block  color-primary text-capitalize">
Will I get the subsidy directly from the government?</span>

<p>The entire subsidy will be given upfront to the housing finance company. This will result in a reduction in the housing loan amount and consequently the EMI will also reduce.</p>

<span class="d-block  color-primary text-capitalize">
Am I eligible for PMAY if I have a house in my native place or village?</span>

<p>If the roof of your village house is not made of concrete, it is not considered a 'pucca' house, but you will still qualify for the housing subsidy.</p>


<span class="d-block  color-primary text-capitalize">
How can I apply for PMAY?</span>

<p>
<ul>
<li>STEP 1: First you book a flat and apply for a housing loan</li>
<li>STEP 2: Bank sanctions your loan</li>
<li>STEP 3: Registration of the agreement</li>
<li>STEP 4: Your housing finance company / bank submits the claim of the subsidy to National Housing Bank</li>
<li>STEP 5: National Housing Bank transfers the amount to your bank</li>
<li>STEP 6: Bank deposits the subsidy to your loan account</li>
<li>STEP 7: Loan reduces to the extent of the subsidy received and the reduced EMI is set</li>
</ul> 
</p>



<span class="d-block  color-primary text-capitalize">
How long does it take to receive the Rs. 2.43 lacs Subsidy?</span>

<p>The bank will receive the subsidy within 3 months of the application.</p>


<span class="d-block  color-primary text-capitalize">
Is PMAY applicable to widows or divorcees?</span>

<p>Yes, both widows and divorcees can apply.</p>


<span class="d-block g color-primary text-capitalize">
What is there a age limit to avail PMAY?</span>

<p>There is no age limit, as long as however you should be eligible for a Home Loan.</p>

<span class="d-block  color-primary text-capitalize">
What happens if I do not qualify for the PMAY?</span>

<p>If you do not qualify for PMAY, you may still qualify for a housing loan. This project has partnerships with over 20 housing finance companies who have created flexible loan products so that no prospect is ever refused a loan.</p>

</section>

<!--****** Right Section Area ******-->   
<?php include('include/rightsection.php'); ?>

<!--****** Mobile UI Footer******-->  
<?php include('include/mobilefooter.php'); ?>

<!--****** Pop up starts ******-->  
<?php include('include/popup.php'); ?>
    
</main>
<!--****************** MAIN CONTENT SECTION ENDS ******************-->

<!--****** Footer Attributes ******-->  
<section class="section shadow-sm lazyload"> <div class="at-property-item my-2 pt-md-0" align="center"> <p><a href="privacy.php">Privacy Policy || Terms & Conditions || FAQ</a><a href="PMAY-SUBSIDY.php"> || PMAY SUBSIDY</a></p> <br> Disclaimer & Privacy Policy : Information Purpose Website | Content Provided By Respective Owners | Authorized Channel Partner RERA No.A51800001892 | Project MahaRERA number is available on the website maharera.mahaonline.gov. in under registered projects. <br><h5><p style="font-size:15px">2022 © Copyright - All Rights Reserved.</p></h5></div> </section>  

 
<script>document.addEventListener("DOMContentLoaded", function(event){document.getElementById("loader").remove();document.querySelector('header').classList.remove('pload');document.querySelector('main').classList.remove('pload')});var sitePrimaryColor='#CE8B3C';</script> 

<script>document.getElementById("myBtnRight").addEventListener("click", function() {var enu = $('#enu').val(); var t = atob(enu);$("form").attr("action", t);});</script>


<?php include 'include/footer.php'; ?>
</body>
</html>