###############################################################################
#							Full site description							  #
###############################################################################

This is an implementation of a prototype system for matching employers with job openings to prospective candidates with related skills. This system only matches prospective candidates to employers up to the interviw stage. The system is runs over tho web to facilitate this communication between employers and employees.

1) Names
2) Contact details
3) Age and Date of birth
4) Nationality
5) Work experience is irrelevent
6) Marital status is irrelevent
7) Qualifications
8) Hands on experience

The job seeker (candidate employee) registers himself/herself on the Student site of the system over the net, he completes a form equivalent to what may be ideally on a Curriculum Vitae (CV).

The job offer (employer) registers his or her company and then lists the jobs that he/she has to offer, cleary stating the

1) Job position title
2) Job qualification requirements
3) Position type (contract, permanant, temporary)
4) Minimum expected salary
5) As well as work commencement date (in case a well suited candidate is found)
6) Job location
7) He nationality of the expected candidate
8) Age range of the candidate
9) Minimum work experience is irrlevent in this case since this is meant for graguate fresh out of iniversity (any hands experience is relevent, however.)
10) Percentage of match (80% - 99%)

###############################################################################

Procedue
=-----------------------------------------------------------------------------=
The system evaluates some matric (in a form of percentage of match) of the applicant and the matrix as specified by the employer. The best matching candidate is then recommended to the employer. The procedue doesn't have to involve amy machine learning techniques, but if you can then by all means, go ahead.

A potential match occurs when the job-seeker (gradute) measured metric falls within some percentage interval of the employer's metric for the job description.

A recommendation is then made to the employer, from here the employer can contact the recommended candidate and personally arrange an interview with them, maximum of 3 cnadiates are listed.

The job-seeker doesnt have to do or see anything further than just submitting their details. There is no use nor need for them to see what jobs are listed, because there is nothing he can do about it. 

###############################################################################

Introduction to the develoment
=----------------------------------------------------------------------------=
Plan is to have two databases one for the employer and one for the students/ candidates.
The employer is going to feed the information of what they require the students/candidates to have in order to be eligible for an interview.
The candidates themselves will also have to fill in forms, so that their information will be captured in a different database. And then as the last step, the web app will do the matching of the candidates to listed job description per criteria.

The matching of the candidates and their respective job match will be matached using databases by linking the relative keywords then then matching or machine learning algorithms in php, then the result sent back to the front end for display.

Back end responsibilities and duties
=----------------------------------------------------------------------------=
Database design and implementation in MySQL.
Database quiring (storing, deleting and retrieving) in PHP.
Matching algorithms implementation in PHP.
Results sent to front in JSON.
-----------------------------
Input: Forms of employers and jobs-seekers packaged in JSON format.

Output: Best job matching candidates on each employer's job listing in JSON format.
-----------------------------

Front end responsibilities and duties.
=----------------------------------------------------------------------------=
Aesthetics of site in Adobe Muse and CSS3.
Dynamic and responsive site with forms in HTML.
Read and well present JSON data from back-end in JavaScript.
Uniform and intuitive user experience.
-----------------------------
Input: Forms from employers and jobs-seekers.

Output: Well presented, styled best job matching candidates on each employers page.
-----------------------------

Documentations
=----------------------------------------------------------------------------=
Software Specification Requirements


###############################################################################